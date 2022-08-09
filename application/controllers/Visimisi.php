<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visimisi extends CI_Controller {

    // view
	public function view_visimisi(){

		$this->load->view('admin/include/header');
		$this->load->view('admin/include/sidebar');
		$this->load->view('admin/include/navbar');
		$this->load->view('admin/visimisi/view_visimisi');
		$this->load->view('admin/include/footer');
	}

    // tambah
	public function form_tambah(){

		$this->load->view('admin/include/header');
		$this->load->view('admin/include/sidebar');
		$this->load->view('admin/include/navbar');
		$this->load->view('admin/visimisi/tambah_visimisi');
		$this->load->view('admin/include/footer');
	}
	public function insert(){
        $visi = $this->input->post('visi', TRUE);
        $misi = $this->input->post('misi', TRUE);
       
            $data = array(
                'visi' => $visi,
                'misi' => $misi,
        
            );

            $this->db->insert('visi_misi',$data);
            redirect('Visimisi/view_visimisi');

    }

    //edit
    function form_edit($id_visi_misi){
        $data['visimisi'] = $this->Visimisi_m->select_db($id_visi_misi);
        $this->load->view('admin/include/header');
        $this->load->view('admin/include/sidebar');
        $this->load->view('admin/include/navbar');
        $this->load->view('admin/visimisi/edit_visimisi',$data);
        $this->load->view('admin/include/footer');
    }
    public function update(){
        $id_visi_misi = $this->input->post('id_visi_misi', TRUE);
        $visi = $this->input->post('visi', TRUE);
        $misi = $this->input->post('misi', TRUE);
       
            $data = array(
                'visi' => $visi,
                'misi' => $misi,
        
            );

            $this->Visimisi_m->update($id_visi_misi,$data);
            redirect('Visimisi/view_visimisi');

    }

    //hapus
    function delete($id_visi_misi){
        $this->Visimisi_m->delete($id_visi_misi);
        redirect('Visimisi/view_visimisi');

    }


}