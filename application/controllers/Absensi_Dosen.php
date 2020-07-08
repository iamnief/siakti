<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Absensi_Dosen extends CI_Controller
{

	var $user;

	function __construct()
	{
		parent::__construct();

		date_default_timezone_set("Asia/Jakarta");

		$this->user = $this->session->get_userdata();
	}

	public function index()
	{
		$data['tgl'] = date('d-m-Y');

		$data['user'] = $this->user;
		$nip_dosen = $this->user['nip'];

		$url_jadwal = 'jadwalkuliah/dosen/' . $nip_dosen . '/' . $data['tgl'];
		$data['resp_jadwal']  = $this->customguzzle->getBasicToken($url_jadwal, 'application/json');

		$url_kelas_batal = 'jadwalkuliah/dosenbatal/' . $nip_dosen;
		$data['resp_kelas_batal'] = $this->customguzzle->getBasicToken($url_kelas_batal, 'application/json');

		$layout['title'] = 'Absensi Dosen';
		$layout['menuActive'] = 'dashboard';
		$layout['pages'] = $this->load->view('absensi/dosen/index', $data, true);
		$this->load->view('absensi/master', array('main' => $layout));
	}

	public function jadwal()
	{
		$data['tgl'] = '';
		if (isset($_GET['tgl'])) $data['tgl'] = $_GET['tgl'];
		else $data['tgl'] = date('d-m-Y');

		$data['user'] = $this->user;
		$nip_dosen = $this->user['nip'];
		$url = 'jadwalkuliah/dosen/' . $nip_dosen . '/' . $data['tgl'];
		$data['resp_jadwal']  = $this->customguzzle->getBasicToken($url, 'application/json');

		$layout['jsbottom'] = $this->load->view('absensi/jsbottom/dsn_jdwl', '', true);
		$layout['title'] = 'Absensi Dosen';
		$layout['menuActive'] = 'jadwal';
		$layout['pages'] = $this->load->view('absensi/dosen/jadwal', $data, true);
		$this->load->view('absensi/master', array('main' => $layout));
	}

	public function akhiri_kelas()
	{
		$data = $this->input->post();
		$layout['jsbottom'] = $this->load->view('absensi/jsbottom/dsn_akhiri_kls', '', true);
		$layout['title'] = 'Absensi Dosen';
		$layout['menuActive'] = 'jadwal';
		$layout['pages'] = $this->load->view('absensi/dosen/akhiri_kelas', $data, true);
		$this->load->view('absensi/master', array('main' => $layout));
	}

	public function kelas_selesai($kode, $materi, $pin_mhs, $nim_mhs)
	{
		$url_verif = 'mahasiswa/verif';
		$verif = array(
			'nim' => $nim_mhs,
			'pin' => $pin_mhs
		);
		$resp_verif = $this->customguzzle->postBlank($url_verif, 'application/json', $verif);
		$result_verif = json_decode($resp_verif['data']);

		if ($result_verif->jumlah > 0) {
			$url_materi = 'absensi';
			$data_absensi['kd_absendsn'] = $kode;
			$data_absensi['jam_keluar'] = date('H:i:s');
			$data_absensi['materi'] = $materi;
			$resp_materi = $this->customguzzle->putBlank($url_materi, 'application/json', $data_absensi);
			$resp_data = json_decode($resp_materi['data']);
			$resp_data = $resp_data->responseCode;
			echo $resp_data;
		} else {
			echo "salah";
		}
	}

	public function detail_kelas()
	{
		$data = $this->input->post();
		$layout['jsbottom'] = $this->load->view('absensi/jsbottom/dsn_detail_kls', '', true);
		$layout['title'] = 'Absensi Dosen';
		$layout['menuActive'] = 'jadwal';
		$layout['pages'] = $this->load->view('absensi/dosen/detail_kelas', $data, true);
		$this->load->view('absensi/master', array('main' => $layout));
	}

	public function absen_kelas($kd_absendsn)
	{
		$url = 'absenmhs/absenkelas/' . $kd_absendsn;
		$resp = $this->customguzzle->getBasicToken($url, 'application/json');
		$data = json_decode($resp['data']);
		$absenkls = array(
			'data' => $data
		);
		echo (json_encode($absenkls));
	}

	public function kelas_pengganti()
	{
		$data = $this->input->post();
		$data['resp_ruangan'] = $this->customguzzle->getBasicToken('ruangan/', 'application/json');

		$layout['jsbottom'] = $this->load->view('absensi/jsbottom/dsn_kls_ganti', '', true);
		$layout['title'] = 'Absensi Dosen';
		$layout['menuActive'] = 'dashboard';
		$layout['pages'] = $this->load->view('absensi/dosen/kelas_pengganti', $data, true);
		$this->load->view('absensi/master', array('main' => $layout));
	}

	public function mulai_kelas()
	{
		$kodejdwl = $this->input->post('kodejdwl');
		$tipe_kelas = $this->input->post('tipe_kelas');
		$kodeklas = $this->input->post('kodeklas');
		$toleransi_absen = '3 minutes';

		//** menambahkan data pada tabel absensi */
		$url_absensi = 'absensi/';
		$data_absensi = array(
			'tgl' => date('d-m-Y'),
			'jam_msk' => date('H:i:s', strtotime($toleransi_absen, strtotime(date('H:i:s')))),
			'staff_nip' => $this->user['nip']
		);
		if ($tipe_kelas == 'normal') {
			$data_absensi['jadwal_kul_kodejdwl'] = $kodejdwl;
		} else if ($tipe_kelas == 'pengganti') {
			$data_absensi['kls_pengganti_kd_gantikls'] = $kodejdwl;
		}
		$resp1 = $this->customguzzle->postBlank($url_absensi, 'application/json', $data_absensi);
		// echo json_encode($resp1);
		// echo '<br>';

		/* menyetel absen tiap mahasiswa di kelas dengan status alpha */
		$url_absen_mhs = 'absenmhs/mulaikelas';

		$data_absen_mhs['kodeklas'] = $kodeklas;
		$data_absen_mhs['tgl'] = date('d-m-Y');
		$data_absen_mhs['kode'] = $kodejdwl;
		$data_absen_mhs['tipe_kelas'] = $tipe_kelas;
		$data_absen_mhs['jml_jam'] = $this->input->post('jml_jam');

		$resp2 = $this->customguzzle->postBlank($url_absen_mhs, 'application/json', $data_absen_mhs);
		echo json_encode($resp2);

		header("Location: " . site_url('absensi_dosen/'));
	}

	public function batal_kelas()
	{
		$url_batalkelas = 'kelaspengganti/batalkelas';
		$data = array(
			'tgl_batal' => $this->input->post('tgl'),
			'kode' => $this->input->post('kodejdwl'),
			'tipe_kelas' => $this->input->post('tipe_kelas'),
			'jml_jam' => $this->input->post('jml_jam')
		);
		$resp1 = $this->customguzzle->postBlank($url_batalkelas, 'application/json', $data);
		header("Location: " . site_url('absensi_dosen/'));
	}

	public function jam_terisi(){
		$data = array(
			'tgl' => $this->input->post('tgl'),
			'kodeklas' => $this->input->post('kodeklas'),
			'namaruang' => $this->input->post('namaruang'),
			'nip' => $this->user['nip']
		);

		$resp = $this->customguzzle->postBlank('jadwalkuliah/jam_terisi', 'application/json', $data);
		if (isset($resp['error']) && !$resp['error']){
			$jam = array(
				'07:30:00 - 08:19:59', '08:20:00 - 09:09:59', '09:10:00 - 09:59:59', '10:15:00 - 11:04:59',
				'11:05:00 - 11:54:59', '12:45:00 - 13:34:59', '13:35:00 - 14:24:59', '14:25:00 - 15:14:59',
				'15:45:00 - 16:34:59', '16:35:00 - 17:24:59', '17:25:00 - 18:14:59', '18:45:00 - 19:34:59'
			);
			$resp_data = json_decode($resp['data']);
			$display = '<select multiple class="form-control" id="jam_ke" name="jam_ke[]">';
			for ($i=0; $i < 12; $i++) { 
				# code...
				$display .= "<option ";
				if ($resp_data[$i] == 'isi'){
					$display .= "disabled";
					$display .= ">".$jam[$i]." (tidak bisa)</option>";
				} else {
					$j = $i + 1;
					$display .= "value='".$j."'>".$jam[$i]."</option>";
				}
			}
			echo $display;
		} else {
			"Tidak ada jam";
		}
	}

	public function ganti_kelas(){
		$update = array(
			'tgl_pengganti' => $this->input->post('tanggal_pengganti'),
			'namaruang' => $this->input->post('namaruang'),
			'kd_gantikls' => $this->input->post('kd_gantikls'),
			'kode_jam' => $this->input->post('jam_ke')
		);
		$resp = $this->customguzzle->putBlank('kelaspengganti/ajukan/', 'application/json', $update);
		// echo json_encode($resp);
		if (isset($resp['error']) && !$resp['error']){
			header("Location: " . site_url('absensi_dosen/'));
		} else header("Location: " . site_url('absensi_dosen/'));
	}
}
