<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donasi extends CI_Controller {

    // view
	public function view_donasi(){

		$this->load->view('admin/include/header');
		$this->load->view('admin/include/sidebar');
		$this->load->view('admin/include/navbar');
		$this->load->view('admin/donasi/view_donasi');
		$this->load->view('admin/include/footer');
	}

    // tambah
	public function form_tambah(){

		$this->load->view('admin/include/header');
		$this->load->view('admin/include/sidebar');
		$this->load->view('admin/include/navbar');
		$this->load->view('admin/donasi/tambah_donasi');
		$this->load->view('admin/include/footer');
	}

	public function insert(){
        $donasi = $this->input->post('donasi', TRUE);

            $t= time();

            $data = array(
                'donasi' => $donasi,
                'tanggal' => date("Y-m-d",$t)
            );

            $this->db->insert('donasi',$data);
            redirect('Donasi/view_donasi');
    }

    //edit
    function form_edit($id_donasi){
        $data['donasi'] = $this->Donasi_m->select_db($id_donasi);
        $this->load->view('admin/include/header');
        $this->load->view('admin/include/sidebar');
        $this->load->view('admin/include/navbar');
        $this->load->view('admin/donasi/edit_donasi',$data);
        $this->load->view('admin/include/footer');
    }
    public function update(){
        $id_donasi = $this->input->post('id_donasi', TRUE);
        $donasi = $this->input->post('donasi', TRUE);

            $t=time();
            
            $data = array(
                'donasi' => $donasi,
                'tanggal' => date("Y-m-d",$t),
            );

            $this->Donasi_m->update($id_donasi,$data);
            redirect('Donasi/view_donasi');

    }

    //hapus
    function delete($id_donasi){
        $this->Donasi_m->delete($id_donasi);
        redirect('Donasi/view_donasi');


    }


}