<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Absensi_KPS extends CI_Controller
{

    var $user;

    function __construct() {
		parent::__construct();
		
		date_default_timezone_set("Asia/Jakarta");
		
		$this->user = $this->session->get_userdata();
    }

    // Pages for KPS

    public function index()
    {
		$data['tgl'] = date('d-m-Y');

		$data['user'] = $this->user;
		$nip_dosen = $this->user['nip'];

		$url_jadwal = 'jadwalkuliah/dosen/' . $nip_dosen . '/' . $data['tgl'];
		$data['resp_jadwal']  = $this->customguzzle->getBasicToken($url_jadwal, 'application/json');

		$url_kelas_batal = 'jadwalkuliah/dosenbatal/' . $nip_dosen;
        $data['resp_kelas_batal'] = $this->customguzzle->getBasicToken($url_kelas_batal, 'application/json');
        
        $layout['title'] = 'Absensi';
        $layout['menuActive'] = 'dashboard';
        $layout['pages'] = $this->load->view('absensi/dosen/index', $data, true);
        $this->load->view('absensi/master', array('main' => $layout));
    }

    public function absensi()
    {
        $layout['title'] = 'Absensi';
        $layout['menuActive'] = 'absensi';
        $layout['pages'] = $this->load->view('absensi/kps/absensi', '', true);
        $this->load->view('absensi/master', array('main' => $layout));
    }

    public function detail_perkuliahan()
    {
        $data['perkuliahan'] = $this->input->post();

        $layout['jsbottom'] = $this->load->view('absensi/jsbottom/kps_detail_perkuliahan', $data, true);
        $layout['title'] = 'Absensi';
        $layout['menuActive'] = 'permohonan';
        $layout['pages'] = $this->load->view('absensi/kps/detail_perkuliahan', $data, true);
        $this->load->view('absensi/master', array('main' => $layout));
    }

    public function detail_kls_pengganti()
    {
        $data['perkuliahan'] = $this->input->post();
        
        $layout['jsbottom'] = $this->load->view('absensi/jsbottom/kps_detail_kls_gnt', $data, true);
        $layout['title'] = 'Absensi';
        $layout['menuActive'] = 'permohonan';
        $layout['pages'] = $this->load->view('absensi/kps/detail_kls_pengganti', $data, true);
        $this->load->view('absensi/master', array('main' => $layout));
    }

    public function list_verifikasi()
    {
        $url_perkuliahan = 'absensi/perkuliahan/' . $this->user['prodi_prodi_id'];
        $data['resp_list_perkuliahan'] = $this->customguzzle->getBasicToken($url_perkuliahan, 'application/json');

        $url_kelaspengganti = 'kelaspengganti/prodi/' . $this->user['prodi_prodi_id'];
        $data['resp_list_kelas_pengganti'] = $this->customguzzle->getBasicToken($url_kelaspengganti, 'application/json');

        $layout['title'] = 'Absensi';
        $layout['menuActive'] = 'permohonan';
        $layout['pages'] = $this->load->view('absensi/kps/list_verifikasi', $data, true);
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
        $layout['title'] = 'Absensi';
        $layout['menuActive'] = 'jadwal';
        $layout['pages'] = $this->load->view('absensi/dosen/jadwal', $data, true);
        $this->load->view('absensi/master', array('main' => $layout));
    }

    public function akhiri_kelas()
    {
        $layout['title'] = 'Absensi';
        $layout['menuActive'] = 'jadwal';
        $layout['pages'] = $this->load->view('absensi/dosen/akhiri_kelas', '', true);
        $this->load->view('absensi/master', array('main' => $layout));
    }

    public function detail_kelas()
    {
        $layout['title'] = 'Absensi';
        $layout['menuActive'] = 'jadwal';
        $layout['pages'] = $this->load->view('absensi/dosen/detail_kelas', '', true);
        $this->load->view('absensi/master', array('main' => $layout));
    }

    public function kelas_pengganti()
    {
        $layout['title'] = 'Absensi';
        $layout['menuActive'] = 'dashboard';
        $layout['pages'] = $this->load->view('absensi/dosen/kelas_pengganti', '', true);
        $this->load->view('absensi/master', array('main' => $layout));
    }

    // Not Pages

    public function checkpin()
    {
        if ($this->user['pin'] == $this->input->post('pin')){
            echo 'true';
        } else {
            echo 'false';
        }
    }

    public function verif_perkuliahan()
    {
        $data = array(
            'kd_absendsn' => $this->input->post('kd_absendsn'),
            'tgl_verif_kps' => date('d-m-Y'),
            'note_kps' => $this->input->post('note_kps')
        );
        $update = $this->customguzzle->putBlank('absensi/', 'application/json', $data);
        header('Location: ' . site_url('absensi_kps/list_verifikasi'));
        // echo json_encode($update);
    }

    public function verif_kelas_pengganti()
    {
        $data = array(
            'kd_gantikls' => $this->input->post('kd_gantikls'),
            'jml_jam' => $this->input->post('jml_jam')
        );
        $update = $this->customguzzle->putBlank('kelaspengganti/verif', 'application/json', $data);
        header('Location: ' . site_url('absensi_kps/list_verifikasi'));
        // echo json_encode($update);
    }
}
