<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller {

    // view
	public function view_info(){

		$this->load->view('admin/include/header');
		$this->load->view('admin/include/sidebar');
		$this->load->view('admin/include/navbar');
		$this->load->view('admin/info/view_info');
		$this->load->view('admin/include/footer');
	}

    // tambah
	public function form_tambah(){

		$this->load->view('admin/include/header');
		$this->load->view('admin/include/sidebar');
		$this->load->view('admin/include/navbar');
		$this->load->view('admin/info/tambah_info');
		$this->load->view('admin/include/footer');
	}
	public function insert(){
        $alamat = $this->input->post('alamat', TRUE);
        $telp = $this->input->post('telp', TRUE);
        $email = $this->input->post('email', TRUE);
        $image_name = time();
        $config['file_name'] = $image_name;
        $config['upload_path'] = './assets/images/info/';
        $config['allowed_types'] = '*';
        $config['overwrite'] = TRUE;

        $this->upload->initialize($config);

        if($this->upload->do_upload('gambar')){
            $image = $this->upload->data();
            $image = $image['file_name'];

            $data = array(
                'alamat' => $alamat,
                'telp' => $telp,
                'email' => $email,
                'gambar' => $image
            );

            $this->db->insert('info',$data);
            redirect('Info/view_info');

        }else{
            $error = array('error' => $this->upload->display_errors());
            echo json_encode($error);
        }
    }

    //edit
    function form_edit($id_info){
        $data['info'] = $this->Info_m->select_db($id_info);
        $this->load->view('admin/include/header');
        $this->load->view('admin/include/sidebar');
        $this->load->view('admin/include/navbar');
        $this->load->view('admin/info/edit_info',$data);
        $this->load->view('admin/include/footer');
    }
    public function update(){
        $id_info = $this->input->post('id_info', TRUE);
        $alamat = $this->input->post('alamat', TRUE);
        $telp = $this->input->post('telp', TRUE);
        $email = $this->input->post('email', TRUE);
        $latest = './assets/images/info/'.$this->input->post('latest', TRUE);
        if(file_exists($latest)){
            unlink($latest);
        }
        $image_name = time();
        $config['file_name'] = $image_name;
        $config['upload_path'] = './assets/images/info/';
        $config['allowed_types'] = '*';
        $config['overwrite'] = TRUE;

        $this->upload->initialize($config);

        if($this->upload->do_upload('gambar')){
            $image = $this->upload->data();
            $image = $image['file_name'];
            
            $data = array(
                'alamat' => $alamat,
                'telp' => $telp,
                'email' => $email,
                'gambar' => $image
            );

            $this->Info_m->update($id_info,$data);
            redirect('Info/view_info');

        }else{
            $error = array('error' => $this->upload->display_errors());
            echo json_encode($error);
        }
    }

    //hapus
    function delete($id_info){
        $this->Info_m->delete($id_info);
        redirect('Info/view_info');

    }


}