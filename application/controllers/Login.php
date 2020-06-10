<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Absensi_Mahasiswa extends CI_Controller
{

    var $API ="";

    function __construct() {
        parent::__construct();
        $this->API="http://localhost/siakti-api/index.php";
    }

	public function index()
	{
		$data['userType'] = 'mahasiswa';
		$data['title'] = 'Absensi Mahasiswa';
		$data['menuActive'] = 'dashboard';
		$data['pages'] = $this->load->view('absensi/mahasiswa/index', '', true);
		$this->load->view('absensi/master', array('main' => $data));
	}
}
