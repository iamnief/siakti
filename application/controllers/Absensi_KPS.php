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
        $layout['userType'] = 'kps';
        $layout['title'] = 'Absensi';
        $layout['menuActive'] = 'dashboard';
        $layout['pages'] = $this->load->view('absensi/kps/index', '', true);
        $this->load->view('absensi/master', array('main' => $layout));
    }

    public function absensi()
    {
        $layout['userType'] = 'kps';
        $layout['title'] = 'Absensi';
        $layout['menuActive'] = 'absensi';
        $layout['pages'] = $this->load->view('absensi/kps/absensi', '', true);
        $this->load->view('absensi/master', array('main' => $layout));
    }

    public function detail_perkuliahan()
    {
        $layout['userType'] = 'kps';
        $layout['title'] = 'Absensi';
        $layout['menuActive'] = 'permohonan';
        $layout['pages'] = $this->load->view('absensi/kps/detail_perkuliahan', '', true);
        $this->load->view('absensi/master', array('main' => $layout));
    }

    public function verifikasi_perkuliahan()
    {
        $layout['userType'] = 'kps';
        $layout['title'] = 'Absensi';
        $layout['menuActive'] = 'permohonan';
        $layout['pages'] = $this->load->view('absensi/kps/verifikasi_perkuliahan', '', true);
        $this->load->view('absensi/master', array('main' => $layout));
    }

    public function jadwal()
    {
        $layout['userType'] = 'kps';
        $layout['title'] = 'Absensi';
        $layout['menuActive'] = 'jadwal';
        $layout['pages'] = $this->load->view('absensi/dosen/jadwal', '', true);
        $this->load->view('absensi/master', array('main' => $layout));
    }

    public function akhiri_kelas()
    {
        $layout['userType'] = 'kps';
        $layout['title'] = 'Absensi';
        $layout['menuActive'] = 'jadwal';
        $layout['pages'] = $this->load->view('absensi/dosen/akhiri_kelas', '', true);
        $this->load->view('absensi/master', array('main' => $layout));
    }

    public function detail_kelas()
    {
        $layout['userType'] = 'kps';
        $layout['title'] = 'Absensi';
        $layout['menuActive'] = 'jadwal';
        $layout['pages'] = $this->load->view('absensi/dosen/detail_kelas', '', true);
        $this->load->view('absensi/master', array('main' => $layout));
    }

    public function kelas_pengganti()
    {
        $layout['userType'] = 'kps';
        $layout['title'] = 'Absensi';
        $layout['menuActive'] = 'dashboard';
        $layout['pages'] = $this->load->view('absensi/dosen/kelas_pengganti', '', true);
        $this->load->view('absensi/master', array('main' => $layout));
    }
}
