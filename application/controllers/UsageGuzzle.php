<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsageGuzzle extends CI_controller {
	public function __construct()
	{
		parent::__construct();
	}
	

	public function getSomething($token='')
	{
		$data = array();
		$token = ""; // if youre using token

		// select one request below based on your condition
		// $retr  = $this->customguzzle->getBearerToken('something-service/get-something',$token,'application/json'); 
		$retr  = $this->customguzzle->getBasicToken('jadwalkuliah/mahasiswa/75/2/3/2020-05','application/json');
		// $retr  = $this->customguzzle->getBlankToken('something-service/get-something','application/json');
		if (is_array($retr)) echo "ye";
		echo json_encode($retr);
		if ($retr['data']) {
			$data['error'] = false;
			$data['type'] = 'success';
			$data['data'] = json_decode($retr['data']);
			
			// header('Content-Type: application/x-json; charset=utf-8');
			// echo  json_encode(array('data' =>  $data));
			echo  json_encode($retr);
		}
		else{
			// you can run get refresh token here couse if token basic or bearer has expired this section will be executed
			exit();
		}
	}

	public function updateProfile(){
		$data = array();
		$post = $this->input->post(); // it's to store your post params from frontend/xhttp request application
		$token =  ""; // if youre using token
		// $post = array(
		// 	'username'       =>  $this->input->post('username'),
		// 	'password'      =>  $this->input->post('password'));

		// $retr = $this->customguzzle->postBearerToken('authentication-service/update-user-profile',$token,'application/form-data',$post);	
		// $retr = $this->customguzzle->postBasicToken('authentication-service/update-user-profile','application/form-data',$post);	
		// $retr = $this->customguzzle->postBlank('authentication-service/update-user-profile',$token,'application/form-data',$post);
		$retr = $this->customguzzle->postBlank('login','application/json', $post);
		// $this->session->set_userdata($post);
		// echo json_encode($this->session->get_userdata());
		// echo json_encode($post);

		if ($retr['data']) {
			$data['error'] = false;
			$data['type'] = 'success';
			$data['data'] = json_decode($retr['data']);

			// header('Content-Type: application/x-json; charset=utf-8');	
			// $data = json_encode(array('data' =>  $data));
			// echo json_encode($data['data'][0]);
			$this->session->set_userdata(array('data' =>  $data['data'][0]));
			echo json_encode($this->session->get_userdata());
		}
		else{
			// you can run get refresh token here couse if token basic or bearer has expired this section will be executed
			exit();
		}

	}
}

/* End of file profile.php */
/* Location: ./application/controllers/profile.php */