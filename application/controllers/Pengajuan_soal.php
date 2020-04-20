<?php 

class Pengajuan_soal extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->load->view('pengajuan_soal/main.php');
	}

	function login()
	{

	}

}