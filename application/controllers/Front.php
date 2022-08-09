<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

    // view
	public function index(){
		
		$data['active'] = "home";
		$this->load->view('front/include/header.php',$data);
		$this->load->view('front/index.php');
		$this->load->view('front/include/footer.php');

	}
	public function about(){

		$data['active'] = "about";
		$this->load->view('front/include/header.php',$data);
		$this->load->view('front/about.php');
		$this->load->view('front/include/footer.php');

	}
	public function contact(){

		$data['active'] = "contact";
		$this->load->view('front/include/header.php',$data);
		$this->load->view('front/contact.php');
		$this->load->view('front/include/footer.php');

	}
	public function program(){

		$data['active'] = "program";
		$this->load->view('front/include/header.php',$data);
		$this->load->view('front/program.php');
		$this->load->view('front/include/footer.php');

	}
	public function all_berita(){
		
		$data['active'] = "berita";
		$this->load->view('front/include/header.php',$data);
		$this->load->view('front/all_berita.php');
		$this->load->view('front/include/footer.php');

	}
	public function detail_berita($id_berita){

		$data['active'] = null;
		$data['berita'] = $this->Berita_m->select_db($id_berita);
		$this->load->view('front/include/header.php',$data);
		$this->load->view('front/detail_berita.php',$data);
		$this->load->view('front/include/footer.php');

	}

	public function detail_program($id_program){

		$data['active'] = null;
		$data['program'] = $this->Program_m->select_db($id_program);
		$this->load->view('front/include/header.php',$data);
		$this->load->view('front/detail_program.php',$data);
		$this->load->view('front/include/footer.php');

	}


}