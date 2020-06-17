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
		$tgl = date('d-m-y');
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
		$layout['userType'] = 'mahasiswa';
		$layout['title'] = 'Absensi Mahasiswa';
		$layout['menuActive'] = 'jadwal';
		$layout['pages'] = $this->load->view('absensi/mahasiswa/jadwal', '', true);
		$this->load->view('absensi/master', array('main' => $layout));
	}

	public function absen()
	{
		$layout['userType'] = 'mahasiswa';
		$layout['title'] = 'Absensi Mahasiswa';
		$layout['menuActive'] = 'absen';
		$layout['pages'] = $this->load->view('absensi/mahasiswa/absen', '', true);
		$this->load->view('absensi/master', array('main' => $layout));
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
