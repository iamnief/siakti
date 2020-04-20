<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestasi extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Modul Prestasi';
		$data['sidebar'] = $this->load->view('layouts/sidebar','',true);
        $data['pages'] = $this->load->view('pages/prestasi/dashboard','',true);
		$this->load->view('master',array('main'=>$data));
	}

	public function approval()
	{
		$data['title'] = 'Modul Prestasi';
		$data['sidebar'] = $this->load->view('layouts/sidebar','',true);
        $data['pages'] = $this->load->view('pages/prestasi/approval','',true);
		$this->load->view('master',array('main'=>$data));
	}

	public function registerPrestasi()
	{
		$data['title'] = 'Modul Prestasi';
		$data['sidebar'] = $this->load->view('layouts/sidebar','',true);
        $data['pages'] = $this->load->view('pages/prestasi/registerPrestasi','',true);
		$this->load->view('master',array('main'=>$data));
	}

	public function registerMapres()
	{
		$data['title'] = 'Modul Prestasi';
		$data['sidebar'] = $this->load->view('layouts/sidebar','',true);
        $data['pages'] = $this->load->view('pages/prestasi/registerMapres','',true);
		$this->load->view('master',array('main'=>$data));
	}

	public function listPrestasi()
	{
		$data['title'] = 'Modul Prestasi';
		$data['sidebar'] = $this->load->view('layouts/sidebar','',true);
        $data['pages'] = $this->load->view('pages/prestasi/listPrestasi','',true);
		$this->load->view('master',array('main'=>$data));
	}
}
