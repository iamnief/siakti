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
		$layout['userType'] = 'dosen';
		$layout['title'] = 'Absensi Dosen';
		$layout['menuActive'] = 'dashboard';
		$layout['pages'] = $this->load->view('absensi/dosen/index', '', true);
		$this->load->view('absensi/master', array('main' => $layout));
	}

	public function jadwal()
	{
		$layout['jsbottom'] = $this->load->view('absensi/jsbottom/dsn_jdwl', '', true);
		$layout['userType'] = 'dosen';
		$layout['title'] = 'Absensi Dosen';
		$layout['menuActive'] = 'jadwal';
		$layout['pages'] = $this->load->view('absensi/dosen/jadwal', '', true);
		$this->load->view('absensi/master', array('main' => $layout));
	}

	public function akhiri_kelas()
	{
		$layout['userType'] = 'dosen';
		$layout['title'] = 'Absensi Dosen';
		$layout['menuActive'] = 'jadwal';
		$layout['pages'] = $this->load->view('absensi/dosen/akhiri_kelas', '', true);
		$this->load->view('absensi/master', array('main' => $layout));
	}

	public function detail_kelas()
	{
		$layout['userType'] = 'dosen';
		$layout['title'] = 'Absensi Dosen';
		$layout['menuActive'] = 'jadwal';
		$layout['pages'] = $this->load->view('absensi/dosen/detail_kelas', '', true);
		$this->load->view('absensi/master', array('main' => $layout));
	}

	public function kelas_pengganti()
	{
		$layout['userType'] = 'dosen';
		$layout['title'] = 'Absensi Dosen';
		$layout['menuActive'] = 'dashboard';
		$layout['pages'] = $this->load->view('absensi/dosen/kelas_pengganti', '', true);
		$this->load->view('absensi/master', array('main' => $layout));
	}

	public function mulai_kelas()
	{
		$url_mulai_kelas = 'absensi/';
		$layout['userType'] = 'dosen';
		$layout['title'] = 'Absensi Dosen';
		$layout['menuActive'] = 'dashboard';
		$layout['pages'] = $this->load->view('absensi/dosen/kelas_pengganti', '', true);
		$this->load->view('absensi/master', array('main' => $layout));
	}
}
