<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PKL_Pembimbing extends CI_Controller {

    public function index()
    {
		$data['title'] = "Dashboard";
		$this->load->view('pkl/pembimbing/template/header');
		$this->load->view('pkl/pembimbing/template/sidebar', $data);
        $this->load->view('pkl/pembimbing/pages/dashboard');
        $this->load->view('pkl/pembimbing/template/footer');
	}


	public function dashboard(){
		$data['title'] = "Dashboard";
		$this->load->view('pkl/pembimbing/template/header');
		$this->load->view('pkl/pembimbing/template/sidebar', $data);
        $this->load->view('pkl/pembimbing/pages/dashboard');
        $this->load->view('pkl/pembimbing/template/footer');
	}

	public function list_mahasiswa(){
		$data['title'] = "List Mahasiswa";
		$this->load->view('pkl/pembimbing/template/header');
		$this->load->view('pkl/pembimbing/template/sidebar', $data);
        $this->load->view('pkl/pembimbing/pages/dashboard');
        $this->load->view('pkl/pembimbing/template/footer');
	}

	
	public function nilai(){
		$data['title'] = "Nilai";
		$this->load->view('pkl/pembimbing/template/header');
		$this->load->view('pkl/pembimbing/template/sidebar', $data);
        $this->load->view('pkl/pembimbing/pages/dashboard');
        $this->load->view('pkl/pembimbing/template/footer');
	}

	public function bimbingan(){
		$data['title'] = "Bimbingan";
		$this->load->view('pkl/pembimbing/template/header');
		$this->load->view('pkl/pembimbing/template/sidebar', $data);
        $this->load->view('pkl/pembimbing/pages/dashboard');
        $this->load->view('pkl/pembimbing/template/footer');
	}

}

/* End of file Controllername.php */


?>
