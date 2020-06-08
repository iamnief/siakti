<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Absensi_admin extends CI_Controller
{

    var $API ="";

    function __construct() {
        parent::__construct();
        $this->API="http://localhost/siakti-api/index.php";
    }

	public function index()
	{
		$data['userType'] = 'admin';
		$data['title'] = 'Absensi admin';
		$data['menuActive'] = 'dashboard';
		$data['pages'] = $this->load->view('absensi/admin/index', '', true);
		$this->load->view('absensi/master', array('main' => $data));
	}

	public function edit_mahasiswa()
	{
		$data['userType'] = 'admin';
		$data['title'] = 'Absensi admin';
		$data['menuActive'] = 'edit_mahasiswa';
		$data['pages'] = $this->load->view('absensi/admin/edit_mahasiswa', '', true);
		$this->load->view('absensi/master', array('main' => $data));
	}

	public function edit_dosen()
	{
		$data['userType'] = 'admin';
		$data['title'] = 'Absensi admin';
		$data['menuActive'] = 'edit_dosen';
		$data['pages'] = $this->load->view('absensi/admin/edit_dosen', '', true);
		$this->load->view('absensi/master', array('main' => $data));
	}

	public function detail_mahasiswa()
	{
		$data['userType'] = 'admin';
		$data['title'] = 'Absensi admin';
		$data['menuActive'] = 'edit_mahasiswa';
		$data['pages'] = $this->load->view('absensi/admin/detail_mahasiswa', '', true);
		$this->load->view('absensi/master', array('main' => $data));
	}

	public function detail_dosen()
	{
		$data['userType'] = 'admin';
		$data['title'] = 'Absensi admin';
		$data['menuActive'] = 'edit_dosen';
		$data['pages'] = $this->load->view('absensi/admin/detail_dosen', '', true);
		$this->load->view('absensi/master', array('main' => $data));
	}
}
