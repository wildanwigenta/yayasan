<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index(){

		$this->load->view('admin/include/header');
		$this->load->view('admin/include/sidebar');
		$this->load->view('admin/include/navbar');
		$this->load->view('admin/index');
		$this->load->view('admin/include/footer');
	}

	//login
	public function login(){
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');
		$this->load->view('admin/auth/login');
	}
	public function aksi_login(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		  //jika username dan passw tidak kosong,
		  //maka panggil data dalam tabel admin berdasarkan username dan pw
		if(!empty($username) && !empty($password)){
			$result = $this->Admin_m->login($username,$password);
				if($result){
					  //jika berhasil login, maka set session username dan id_admin
					$this->session->set_userdata('username',$result->username);
					$this->session->set_userdata('id_admin',$result->id_admin);
					  //kemudian pindah ke halaman awal admin
					redirect('Admin/index');
				}else{
					  //jika data tidak ditemukan maka muncul error
					echo"
					 <script>
						alert('user tidak ditemukan');
						location.href = 'login';
					 </script>
					";
				}
		}else{
			//jika kosong akan dikembalikan
			echo"
			<script>
			   alert('silahkan isi username dan password');
			   location.href = 'login';
			</script>
		   ";
		}
	}

	public function logout(){
		  //destroy semua session termasuk id_admin dan username 
		$this->session->sess_destroy();

		redirect('Admin/login');
	}
}
