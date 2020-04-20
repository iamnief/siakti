<?php 

class Kbk extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['title'] = 'Home | KBK';
		$data['pages'] = $this->load->view('pages/main','',true);
		$this->load->view('pengajuan_soal/kbk/home.php', array('main'=>$data));
	}

	// function dashboard()
	// {
	// 	$data['title'] = 'Dashboard | Dosen';
	// 	$this->load->view('pengajuan_soal/dosen/dashboard.php', array('main'=>$data));
	// }

	// function status_soal()
	// {
	// 	$data['title'] = 'Status Soal | Dosen';
	// 	$this->load->view('pengajuan_soal/dosen/status_soal.php', array('main'=>$data));
	// }

}