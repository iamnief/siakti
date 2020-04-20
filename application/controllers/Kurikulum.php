<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kurikulum extends CI_Controller {

	public function index()
	{
		$data['title'] = 'AdminLTE 3 | Dashboard 2';
		$data['sidebar'] = $this->load->view('layouts/sidebar','',true);
		$data['pages'] = $this->load->view('kurikulum/main','',true);
		$this->load->view('master',array('main'=>$data));
	}
	
	public function create()
	{
		$data['title'] = 'AdminLTE 3 | Dashboard 2';
		$data['sidebar'] = $this->load->view('layouts/sidebar','',true);
		$data['pages'] = $this->load->view('kurikulum/create','',true);
		$this->load->view('master',array('main'=>$data));
	}
}
