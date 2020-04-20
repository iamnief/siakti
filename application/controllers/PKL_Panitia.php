<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PKL_Panitia extends CI_Controller {

    public function index()
    {
		$data['title'] = "Dashboard";
		$this->load->view('pkl/panitia/template/header');
		$this->load->view('pkl/panitia/template/sidebar', $data);
        $this->load->view('pkl/panitia/pages/dashboard');
        $this->load->view('pkl/panitia/template/footer');
	}

	public function dashboard(){
		$data['title'] = "Dashboard";
		$this->load->view('pkl/panitia/template/header');
		$this->load->view('pkl/panitia/template/sidebar', $data);
        $this->load->view('pkl/panitia/pages/dashboard');
        $this->load->view('pkl/panitia/template/footer');
	}

	
	public function mahasiswa(){
		$data['title'] = "Mahasiswa";
		$this->load->view('pkl/panitia/template/header');
		$this->load->view('pkl/panitia/template/sidebar', $data);
        $this->load->view('pkl/panitia/pages/dashboard');
        $this->load->view('pkl/panitia/template/footer');
	}

	public function sidang(){
		$data['title'] = "Sidang";
		$this->load->view('pkl/panitia/template/header');
		$this->load->view('pkl/panitia/template/sidebar', $data);
        $this->load->view('pkl/panitia/pages/dashboard');
        $this->load->view('pkl/panitia/template/footer');
	}

	public function dosen(){
		$data['title'] = "Dosen";
		$this->load->view('pkl/panitia/template/header');
		$this->load->view('pkl/panitia/template/sidebar', $data);
        $this->load->view('pkl/panitia/pages/dashboard');
        $this->load->view('pkl/panitia/template/footer');
	}

}

/* End of file Controllername.php */


?>
