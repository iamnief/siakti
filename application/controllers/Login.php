<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    var $API ="";

    function __construct() {
        parent::__construct();
        $this->API="http://localhost/siakti-api/index.php";
    }

	public function index()
	{
		$this->load->view('absensi/login');
	}

	public function signin()
	{
		$post = $this->input->post();
		$response = $this->customguzzle->postBlank('login','application/json', $post);
		if(isset($response['error']) && !$response['error']){
			$userdata = json_decode($response['data']);
			$userdata = $userdata[0];
			// echo $userdata->nim;
			$userdata_arr = array();
			foreach ($userdata as $key => $value) {
				# code...
				$userdata_arr[$key] = $value;
			}
			$this->session->set_userdata($userdata_arr);
			echo isset($userdata_arr['nim'])." ".isset($userdata_arr['nip']);
			if(isset($userdata_arr['nim'])){
				header('Location: '.site_url().'absensi_mahasiswa/');
			} else if(isset($userdata_arr['nip'])){
				header('Location: '.site_url().'absensi_dosen/');
			} else {
				$this->session->sess_destroy();
				header('Location: '.site_url().'login/');
			}
		}
	}
}
