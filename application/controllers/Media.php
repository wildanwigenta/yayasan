<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media extends CI_Controller {

    // view
	public function view_media(){

		$this->load->view('admin/include/header');
		$this->load->view('admin/include/sidebar');
		$this->load->view('admin/include/navbar');
		$this->load->view('admin/media/view_media');
		$this->load->view('admin/include/footer');
	}

    // tambah
	public function form_tambah(){

		$this->load->view('admin/include/header');
		$this->load->view('admin/include/sidebar');
		$this->load->view('admin/include/navbar');
		$this->load->view('admin/media/tambah_media');
		$this->load->view('admin/include/footer');
	}
	public function insert(){
        $link = $this->input->post('link', TRUE);
        $nama = $this->input->post('nama', TRUE);
        
            $data = array(
                'link' => $link,
                'nama' => $nama
            );

            $this->db->insert('media',$data);
            redirect('Media/view_media');

    }

    //edit
    function form_edit($id_media){
        $data['media'] = $this->Media_m->select_db($id_media);
        $this->load->view('admin/include/header');
        $this->load->view('admin/include/sidebar');
        $this->load->view('admin/include/navbar');
        $this->load->view('admin/media/edit_media',$data);
        $this->load->view('admin/include/footer');
    }
    public function update(){
        $id_media = $this->input->post('id_media', TRUE);
        $link = $this->input->post('link', TRUE);
        $nama = $this->input->post('nama', TRUE);
       
            $image = $this->upload->data();
            $image = $image['file_name'];
            
            $data = array(
                'link' => $link,
                'nama' => $nama
            );

            $this->Media_m->update($id_media,$data);
            redirect('Media/view_media');
    }

    //hapus
    function delete($id_media){
        $this->Media_m->delete($id_media);
        redirect('Media/view_media');

    }


}