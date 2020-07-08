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
		$layout['title'] = 'Absensi admin';
		$layout['menuActive'] = 'dashboard';
		$layout['pages'] = $this->load->view('absensi/admin/index', '', true);
		$this->load->view('absensi/master', array('main' => $layout));
	}

	public function edit_mahasiswa()
	{
		$layout['title'] = 'Absensi admin';
		$layout['menuActive'] = 'edit_mahasiswa';
		$res = $this->customguzzle->getPlain('mahasiswa','application/json');
		$arr = json_decode($res['data'], true);
		$layout['pages'] = $this->load->view('absensi/admin/edit_mahasiswa', array('data' => $arr), true);
		$this->load->view('absensi/master', array('main' => $layout));
	}

	public function edit_dosen()
	{
		$layout['title'] = 'Absensi admin';
		$layout['menuActive'] = 'edit_dosen';
		$res = $this->customguzzle->getPlain('staff','application/json');
		$arr = json_decode($res['data'], true);
		$layout['pages'] = $this->load->view('absensi/admin/edit_dosen', array('data' => $arr), true);
		$this->load->view('absensi/master', array('main' => $layout));
	}

	public function detail_mahasiswa()
	{
		$layout['title'] = 'Absensi admin';
		$layout['menuActive'] = 'edit_mahasiswa';
		$id = $this->input->get('nim', TRUE);
		$res = $this->customguzzle->getPlain('mahasiswa?nim='.$id,'application/json');
		$resProdi = $this->customguzzle->getPlain('prodi','application/json');
		$arr = json_decode($res['data'], true);
		$arrProdi = json_decode($resProdi['data'], true);
		$layout['pages'] = $this->load->view('absensi/admin/detail_mahasiswa', array('data' => $arr[0], 'dataProdi' => $arrProdi), true);
		$this->load->view('absensi/master', array('main' => $layout));
	}

	public function detail_dosen()
	{
		$layout['title'] = 'Absensi admin';
		$layout['menuActive'] = 'edit_dosen';
		$id = $this->input->get('nip', TRUE);
		$res = $this->customguzzle->getPlain('staff?nip='.$id,'application/json');
		$resProdi = $this->customguzzle->getPlain('prodi','application/json');
		$arr = json_decode($res['data'], true);
		$arrProdi = json_decode($resProdi['data'], true);
		// print_r($arrProdi);
		$layout['pages'] = $this->load->view('absensi/admin/detail_dosen', array('data' => $arr[0], 'dataProdi' => $arrProdi), true);
		$this->load->view('absensi/master', array('main' => $layout));
	}

	public function submit_dosen(){
		$post = $this->input->post();
		$res = $this->customguzzle->putBlank('staff','application/json', $post);
		$this->edit_dosen();
	}

	public function submit_mahasiswa(){
		$post = $this->input->post();
		$res = $this->customguzzle->putBlank('mahasiswa','application/json', $post);
		// print_r($res);
		$this->edit_mahasiswa();
	}
}
