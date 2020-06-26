<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Absensi_Mahasiswa extends CI_Controller
{

    var $user;

    function __construct() {
		parent::__construct();
		
		date_default_timezone_set("Asia/Jakarta");
		
		$this->user = $this->session->get_userdata();
    }

	public function index()
	{
		$tgl = date('d-m-Y');
		$kodeklas = $this->user['kelas_kodeklas'];
		$url = 'jadwalkuliah/mahasiswa/' . $kodeklas . '/'  . $tgl;
		$data['resp_jadwal']  = $this->customguzzle->getBasicToken($url, 'application/json');

		$layout['userType'] = 'mahasiswa';
		$layout['title'] = 'Absensi Mahasiswa';
		$layout['menuActive'] = 'dashboard';
		$layout['pages'] = $this->load->view('absensi/mahasiswa/index', $data, true);
		$this->load->view('absensi/master', array('main' => $layout));
	}

	public function jadwal()
	{
		$data['tgl']='';
		if(isset($_GET['tgl'])) $data['tgl'] = $_GET['tgl'];
		else $data['tgl'] = date('d-m-Y');
		
		$kodeklas = $this->user['kelas_kodeklas'];
		$url = 'jadwalkuliah/mahasiswa/' . $kodeklas . '/' . $data['tgl'];
		// $url = 'jadwalkuliah/mahasiswa/' . $kodeklas . '/' . '18-06-2020';
		$data['resp_jadwal']  = $this->customguzzle->getBasicToken($url, 'application/json');

		$layout['jsbottom'] = $this->load->view('absensi/jsbottom/mhs_jdwl', $data, true);
		$layout['userType'] = 'mahasiswa';
		$layout['title'] = 'Absensi Mahasiswa';
		$layout['menuActive'] = 'jadwal';
		$layout['pages'] = $this->load->view('absensi/mahasiswa/jadwal', '', true);
		$this->load->view('absensi/master', array('main' => $layout));
	}

	public function absen()
	{
		$layout['jshead'] = $this->load->view('absensi/jshead/mhs_absen', '', true);
		$layout['jsbottom'] = $this->load->view('absensi/jsbottom/mhs_absen', '', true);
		$layout['userType'] = 'mahasiswa';
		$layout['title'] = 'Absensi Mahasiswa';
		$layout['menuActive'] = 'absen';
		$layout['pages'] = $this->load->view('absensi/mahasiswa/absen', '', true);
		$this->load->view('absensi/master', array('main' => $layout));
	}

	public function scanabsen(){
		$namaruang = $this->input->post('namaruang');
		$url = 'absenmhs/scan';
		$data = array(
			'kelas_kodeklas' => $this->user['kelas_kodeklas'],
			'nim' => $this->user['nim'],
			'namaruang' => $namaruang,
			'waktu' => date('H:i:s'),
			'hari' => date('N'),
			'tgl' => date('d-m-Y')
		);
		$resp = $this->customguzzle->postBlank($url, 'application/json', $data);
		$resp_data = json_decode($resp['data']);
		echo $resp_data->message;
		// echo $resp_data['message'];
		// echo $namaruang;
	}

	public function kompen()
	{
		$layout['userType'] = 'mahasiswa';
		$layout['title'] = 'Absensi Mahasiswa';
		$layout['menuActive'] = 'kompen';
		$layout['pages'] = $this->load->view('absensi/mahasiswa/kompen', '', true);
		$this->load->view('absensi/master', array('main' => $layout));
	}

	public function jadwal_tgl($a = 'a', $b = 'b'){
		echo $a . ' ' . $b;
	}
}
