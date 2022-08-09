<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    // view
	public function view_about(){

		$this->load->view('admin/include/header');
		$this->load->view('admin/include/sidebar');
		$this->load->view('admin/include/navbar');
		$this->load->view('admin/about/view_about');
		$this->load->view('admin/include/footer');
	}

    // tambah
	public function form_tambah(){

		$this->load->view('admin/include/header');
		$this->load->view('admin/include/sidebar');
		$this->load->view('admin/include/navbar');
		$this->load->view('admin/about/tambah_about');
		$this->load->view('admin/include/footer');
	}

	public function insert(){
        $judul = $this->input->post('judul', TRUE);
        $deskripsi = $this->input->post('deskripsi', TRUE);
        $image_name = $judul;
        $config['file_name'] = $image_name;
        $config['upload_path'] = './assets/images/about/';
        $config['allowed_types'] = '*';
        $config['overwrite'] = TRUE;

        $this->upload->initialize($config);
        

        // jika gambar sudah di upload maka semua di dalam if akan di jalankan 
        if($this->upload->do_upload('gambar')){
            $image = $this->upload->data();
            $image = $image['file_name'];

            $data = array(
                'judul' => $judul,
                'deskripsi' => $deskripsi,
                'gambar' => $image
            );

            $this->db->insert('about',$data);
            redirect('About/view_about');

        // jika gagal mengupload semua yang ada di dalam if maka memunculkan error 
        }else{
            $error = array('error' => $this->upload->display_errors());
            echo json_encode($error);
        }
    }

    //edit
    function form_edit($id_about){
        $data['about'] = $this->About_m->select_db($id_about);
        $this->load->view('admin/include/header');
        $this->load->view('admin/include/sidebar');
        $this->load->view('admin/include/navbar');
        $this->load->view('admin/about/edit_about',$data);
        $this->load->view('admin/include/footer');
    }
    public function update(){
        $id_about = $this->input->post('id_about', TRUE);
        $judul = $this->input->post('judul', TRUE);
        $deskripsi = $this->input->post('deskripsi', TRUE);
        $latest = './assets/images/about/'.$this->input->post('latest', TRUE);
        if(file_exists($latest)){
            unlink($latest);
        }
        $image_name = $judul;
        $config['file_name'] = $image_name;
        $config['upload_path'] = './assets/images/about/';
        $config['allowed_types'] = '*';
        $config['overwrite'] = TRUE;

        $this->upload->initialize($config);

        if($this->upload->do_upload('gambar')){
            $image = $this->upload->data();
            $image = $image['file_name'];
            
            $data = array(
                'judul' => $judul,
                'deskripsi' => $deskripsi,
                'gambar' => $image
            );

            $this->About_m->update($id_about,$data);
            redirect('About/view_about');

        }else{
            $error = array('error' => $this->upload->display_errors());
            echo json_encode($error);
        }
    }

    //hapus
    function delete($id_about,$gambar){
        $this->About_m->delete($id_about);
        $delete = './assets/images/about/'.$gambar;
        
        if (file_exists($delete)) {
            unlink($delete);
        }
        
        redirect('About/view_about');

    }


}