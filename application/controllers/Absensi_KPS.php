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
        $layout['title'] = 'Absensi';
        $layout['menuActive'] = 'permohonan';
        $layout['pages'] = $this->load->view('absensi/kps/detail_perkuliahan', '', true);
        $this->load->view('absensi/master', array('main' => $layout));
    }

    public function verifikasi_perkuliahan()
    {
        $layout['title'] = 'Absensi';
        $layout['menuActive'] = 'permohonan';
        $layout['pages'] = $this->load->view('absensi/kps/verifikasi_perkuliahan', '', true);
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
}
