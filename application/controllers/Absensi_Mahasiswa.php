<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Absensi_Mahasiswa extends CI_Controller
{

    var $API ="";

    function __construct() {
        parent::__construct();
        $this->API="http://localhost/siakti-api/index.php";
    }

	public function index()
	{
		$data['userType'] = 'mahasiswa';
		$data['title'] = 'Absensi Mahasiswa';
		$data['menuActive'] = 'dashboard';
		$data['pages'] = $this->load->view('absensi/mahasiswa/index', '', true);
		$this->load->view('absensi/master', array('main' => $data));
	}

	public function jadwal()
	{
		$data['userType'] = 'mahasiswa';
		$data['title'] = 'Absensi Mahasiswa';
		$data['menuActive'] = 'jadwal';
		$data['pages'] = $this->load->view('absensi/mahasiswa/jadwal', '', true);
		$this->load->view('absensi/master', array('main' => $data));
	}

	public function absen()
	{
		$data['userType'] = 'mahasiswa';
		$data['title'] = 'Absensi Mahasiswa';
		$data['menuActive'] = 'absen';
		$data['pages'] = $this->load->view('absensi/mahasiswa/absen', '', true);
		$this->load->view('absensi/master', array('main' => $data));
	}

	public function kompen()
	{
		$data['userType'] = 'mahasiswa';
		$data['title'] = 'Absensi Mahasiswa';
		$data['menuActive'] = 'kompen';
		$data['pages'] = $this->load->view('absensi/mahasiswa/kompen', '', true);
		$this->load->view('absensi/master', array('main' => $data));
	}
}
