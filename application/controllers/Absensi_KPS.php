<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Absensi_KPS extends CI_Controller
{

    var $API ="";

    function __construct() {
        parent::__construct();
        $this->API="http://localhost/siakti-api/index.php";
    }

    public function index()
    {
        $data['userType'] = 'kps';
        $data['title'] = 'Absensi';
        $data['menuActive'] = 'dashboard';
        $data['pages'] = $this->load->view('absensi/kps/index', '', true);
        $this->load->view('absensi/master', array('main' => $data));
    }

    public function absensi()
    {
        $data['userType'] = 'kps';
        $data['title'] = 'Absensi';
        $data['menuActive'] = 'absensi';
        $data['pages'] = $this->load->view('absensi/kps/absensi', '', true);
        $this->load->view('absensi/master', array('main' => $data));
    }

    public function detail_perkuliahan()
    {
        $data['userType'] = 'kps';
        $data['title'] = 'Absensi';
        $data['menuActive'] = 'permohonan';
        $data['pages'] = $this->load->view('absensi/kps/detail_perkuliahan', '', true);
        $this->load->view('absensi/master', array('main' => $data));
    }

    public function verifikasi_perkuliahan()
    {
        $data['userType'] = 'kps';
        $data['title'] = 'Absensi';
        $data['menuActive'] = 'permohonan';
        $data['pages'] = $this->load->view('absensi/kps/verifikasi_perkuliahan', '', true);
        $this->load->view('absensi/master', array('main' => $data));
    }

    public function jadwal()
    {
        $data['userType'] = 'kps';
        $data['title'] = 'Absensi';
        $data['menuActive'] = 'jadwal';
        $data['pages'] = $this->load->view('absensi/dosen/jadwal', '', true);
        $this->load->view('absensi/master', array('main' => $data));
    }

    public function akhiri_kelas()
    {
        $data['userType'] = 'kps';
        $data['title'] = 'Absensi';
        $data['menuActive'] = 'jadwal';
        $data['pages'] = $this->load->view('absensi/dosen/akhiri_kelas', '', true);
        $this->load->view('absensi/master', array('main' => $data));
    }

    public function detail_kelas()
    {
        $data['userType'] = 'kps';
        $data['title'] = 'Absensi';
        $data['menuActive'] = 'jadwal';
        $data['pages'] = $this->load->view('absensi/dosen/detail_kelas', '', true);
        $this->load->view('absensi/master', array('main' => $data));
    }

    public function kelas_pengganti()
    {
        $data['userType'] = 'kps';
        $data['title'] = 'Absensi';
        $data['menuActive'] = 'dashboard';
        $data['pages'] = $this->load->view('absensi/dosen/kelas_pengganti', '', true);
        $this->load->view('absensi/master', array('main' => $data));
    }
}
