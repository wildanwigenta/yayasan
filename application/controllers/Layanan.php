<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller {

    // view
	public function view_layanan(){

		$this->load->view('admin/include/header');
		$this->load->view('admin/include/sidebar');
		$this->load->view('admin/include/navbar');
		$this->load->view('admin/layanan/view_layanan');
		$this->load->view('admin/include/footer');
	}

    // tambah
	public function form_tambah(){

		$this->load->view('admin/include/header');
		$this->load->view('admin/include/sidebar');
		$this->load->view('admin/include/navbar');
		$this->load->view('admin/layanan/tambah_layanan');
		$this->load->view('admin/include/footer');
	}
	public function insert(){
        $layanan = $this->input->post('layanan', TRUE);
        $deskripsi = $this->input->post('deskripsi', TRUE);
        $image_name = $layanan;
        $link = $this->input->post('link', TRUE);
        $config['file_name'] = $image_name;
        $config['upload_path'] = './assets/images/layanan/';
        $config['allowed_types'] = '*';
        $config['overwrite'] = TRUE;

        $this->upload->initialize($config);

        if($this->upload->do_upload('gambar')){
            $image = $this->upload->data();
            $image = $image['file_name'];

            $data = array(
                'layanan' => $layanan,
                'deskripsi' => $deskripsi,
                'gambar' => $image,
                'link' => $link
            );

            $this->db->insert('layanan',$data);
            redirect('Layanan/view_layanan');

        }else{
            $error = array('error' => $this->upload->display_errors());
            echo json_encode($error);
        }
    }

    //edit
    function form_edit($id_layanan){
        $data['layanan'] = $this->Layanan_m->select_db($id_layanan);
        $this->load->view('admin/include/header');
        $this->load->view('admin/include/sidebar');
        $this->load->view('admin/include/navbar');
        $this->load->view('admin/layanan/edit_layanan',$data);
        $this->load->view('admin/include/footer');
    }
    public function update(){
        $id_layanan = $this->input->post('id_layanan', TRUE);
        $layanan = $this->input->post('layanan', TRUE);
        $deskripsi = $this->input->post('deskripsi', TRUE);
        $latest = './assets/images/layanan/'.$this->input->post('latest', TRUE);
            if(file_exists($latest)){
                unlink($latest);
            }
        $image_name = $layanan;
        $link = $this->input->post('link', TRUE);
        $config['file_name'] = $image_name;
        $config['upload_path'] = './assets/images/layanan/';
        $config['allowed_types'] = '*';
        $config['overwrite'] = TRUE;

        $this->upload->initialize($config);

        if($this->upload->do_upload('gambar')){
            $image = $this->upload->data();
            $image = $image['file_name'];
            
            $data = array(
                'layanan' => $layanan,
                'deskripsi' => $deskripsi,
                'gambar' => $image,
                'link' => $link,
            );

            $this->Layanan_m->update($id_layanan,$data);
            redirect('Layanan/view_layanan');

        }else{
            $error = array('error' => $this->upload->display_errors());
            echo json_encode($error);
        }
    }

    //hapus
    function delete($id_layanan,$gambar){
        $this->Layanan_m->delete($id_layanan);
        $delete = './assets/images/layanan/'.$gambar;
        if(file_exists($delete)){
            unlink($delete);
        }

        redirect('Layanan/view_layanan');

    }


}