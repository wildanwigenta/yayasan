<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {

    // view
	public function view_pesan(){

		$this->load->view('admin/include/header');
		$this->load->view('admin/include/sidebar');
		$this->load->view('admin/include/navbar');
		$this->load->view('admin/pesan/view_pesan');
		$this->load->view('admin/include/footer');
	}

    // tambah

	public function insert(){
        $nama = $this->input->post('nama', TRUE);
        $email = $this->input->post('email', TRUE);
        $subject = $this->input->post('subject', TRUE);
        $pesan = $this->input->post('pesan', TRUE);

            $data = array(
                'nama' => $nama,
                'email' => $email,
                'subject' => $subject,
                'pesan' => $pesan
            );

            $this->session->set_flashdata("sukses","pesan telah terkirim!");
            $this->db->insert('pesan',$data);
            redirect('Front/contact');

    }

    //hapus
    function delete($id_pesan){
        $this->Pesan_m->delete($id_pesan);
        redirect('Pesan/view_pesan');

    }


}