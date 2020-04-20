<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CP extends CI_Controller {

	public function index()
	{
		$data['title'] = 'AdminLTE 3 | Dashboard 2';
		$data['sidebar'] = $this->load->view('layouts/sidebar','',true);
        $data['pages'] = $this->load->view('cp/main','',true);
		$this->load->view('master',array('main'=>$data));
	}

	public function create()
	{
		$data['title'] = 'AdminLTE 3 | Dashboard 2';
		$data['sidebar'] = $this->load->view('layouts/sidebar','',true);
		$data['pages'] = $this->load->view('cp/create','',true);
		$this->load->view('master',array('main'=>$data));
	}
}
