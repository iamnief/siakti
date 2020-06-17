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
		$data['userType'] = 'dosen';
		$data['title'] = 'Absensi Dosen';
		$data['menuActive'] = 'dashboard';
		$data['pages'] = $this->load->view('absensi/dosen/index', '', true);
		$this->load->view('absensi/master', array('main' => $data));
	}

	public function jadwal()
	{
		$data['userType'] = 'dosen';
		$data['title'] = 'Absensi Dosen';
		$data['menuActive'] = 'jadwal';
		$data['pages'] = $this->load->view('absensi/dosen/jadwal', '', true);
		$this->load->view('absensi/master', array('main' => $data));
	}

	public function akhiri_kelas()
	{
		$data['userType'] = 'dosen';
		$data['title'] = 'Absensi Dosen';
		$data['menuActive'] = 'jadwal';
		$data['pages'] = $this->load->view('absensi/dosen/akhiri_kelas', '', true);
		$this->load->view('absensi/master', array('main' => $data));
	}

	public function detail_kelas()
	{
		$data['userType'] = 'dosen';
		$data['title'] = 'Absensi Dosen';
		$data['menuActive'] = 'jadwal';
		$data['pages'] = $this->load->view('absensi/dosen/detail_kelas', '', true);
		$this->load->view('absensi/master', array('main' => $data));
	}

	public function kelas_pengganti()
	{
		$data['userType'] = 'dosen';
		$data['title'] = 'Absensi Dosen';
		$data['menuActive'] = 'dashboard';
		$data['pages'] = $this->load->view('absensi/dosen/kelas_pengganti', '', true);
		$this->load->view('absensi/master', array('main' => $data));
	}

	public function mulai_kelas()
	{
		$url_mulai_kelas = 'absensi/';
		$data['userType'] = 'dosen';
		$data['title'] = 'Absensi Dosen';
		$data['menuActive'] = 'dashboard';
		$data['pages'] = $this->load->view('absensi/dosen/kelas_pengganti', '', true);
		$this->load->view('absensi/master', array('main' => $data));
	}
}
