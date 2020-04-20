<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {

	public function index()
	{
		$data['title'] = 'SIAKTI | Nilai';
		$data['sidebar'] = $this->load->view('layouts/sidebar','',true);
        $data['pages'] = $this->load->view('pages/nilai/index','',true);
		$this->load->view('master',array('main'=>$data));
	}

	public function daftar_mahasiswa()
	{
		$data['title'] = 'SIAKTI | Nilai Mahasiswa';
		$data['sidebar'] = $this->load->view('layouts/sidebar','',true);
        $data['pages'] = $this->load->view('pages/nilai/daftar_mahasiswa','',true);
		$this->load->view('master',array('main'=>$data));
	}
}
