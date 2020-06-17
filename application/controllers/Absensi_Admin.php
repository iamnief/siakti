<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Absensi_admin extends CI_Controller
{

    var $user;

    function __construct() {
		parent::__construct();
		
		date_default_timezone_set("Asia/Jakarta");
		
		$this->user = $this->session->get_userdata();
    }

	public function index()
	{
		$layout['userType'] = 'admin';
		$layout['title'] = 'Absensi admin';
		$layout['menuActive'] = 'dashboard';
		$layout['pages'] = $this->load->view('absensi/admin/index', '', true);
		$this->load->view('absensi/master', array('main' => $layout));
	}

	public function edit_mahasiswa()
	{
		$layout['userType'] = 'admin';
		$layout['title'] = 'Absensi admin';
		$layout['menuActive'] = 'edit_mahasiswa';
		$layout['pages'] = $this->load->view('absensi/admin/edit_mahasiswa', '', true);
		$this->load->view('absensi/master', array('main' => $layout));
	}

	public function edit_dosen()
	{
		$layout['userType'] = 'admin';
		$layout['title'] = 'Absensi admin';
		$layout['menuActive'] = 'edit_dosen';
		$layout['pages'] = $this->load->view('absensi/admin/edit_dosen', '', true);
		$this->load->view('absensi/master', array('main' => $layout));
	}

	public function detail_mahasiswa()
	{
		$layout['userType'] = 'admin';
		$layout['title'] = 'Absensi admin';
		$layout['menuActive'] = 'edit_mahasiswa';
		$layout['pages'] = $this->load->view('absensi/admin/detail_mahasiswa', '', true);
		$this->load->view('absensi/master', array('main' => $layout));
	}

	public function detail_dosen()
	{
		$layout['userType'] = 'admin';
		$layout['title'] = 'Absensi admin';
		$layout['menuActive'] = 'edit_dosen';
		$layout['pages'] = $this->load->view('absensi/admin/detail_dosen', '', true);
		$this->load->view('absensi/master', array('main' => $layout));
	}
}
