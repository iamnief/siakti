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

	public function signout()
	{
		$this->session->sess_destroy();
		header('Location: '.site_url().'login/');
	}

	public function signin()
	{
		$post = $this->input->post();
		$response = $this->customguzzle->postBlank('login','application/json', $post);

		if(isset($response['error']) && !$response['error']){

			$userdata = json_decode($response['data']);
			$ud = $userdata[0];
			// echo $userdata->nim;
			$userdata_arr = array();

			foreach ($ud as $key => $value) {
				# code...
				$userdata_arr[$key] = $value;
			}

			// echo isset($userdata_arr['nim'])." ".isset($userdata_arr['nip']);

			if(isset($userdata_arr['nim'])){

				$userdata_arr['role'] = 'mahasiswa';
				$this->session->set_userdata($userdata_arr);
				header('Location: '.site_url().'absensi_mahasiswa/');

			} else if(isset($userdata_arr['nip'])){

				if (isset($userdata_arr['jab_dsn'])){

					$jab = $userdata_arr['jab_dsn'];

					if (substr($jab, 0, 3) == "KPS"){

						$userdata_arr['role'] = 'kps';
						$this->session->set_userdata($userdata_arr);
						header('Location: '.site_url().'absensi_kps/');

					} else {

						$userdata_arr['role'] = 'dosen';
						$this->session->set_userdata($userdata_arr);
						header('Location: '.site_url().'absensi_dosen/');

					}

				} else {

					$userdata_arr['role'] = 'admin';
					$this->session->set_userdata($userdata_arr);
					header('Location: '.site_url().'absensi_admin/');

				}

			} else {

				$this->session->sess_destroy();
				header('Location: '.site_url().'login/');

			}
		} else {

			$this->session->sess_destroy();
			header('Location: '.site_url().'login/');

		}
	}
}
