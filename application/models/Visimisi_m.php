<?php 

class Visimisi_m extends CI_model{
    //select
    function select(){
        $this->db->select('*');
        $this->db->from('visi_misi');

        return $this->db->get()->result();
    }

    //edit
    function select_db($id_visi_misi){
        $this->db->select('*');
        $this->db->from('visi_misi');
        $this->db->where('id_visi_misi',$id_visi_misi);

        return $this->db->get()->row_array();
    }
    function update($id_visi_misi,$data) {
        $this->db->where('id_visi_misi',$id_visi_misi);
        $this->db->update('visi_misi',$data);
    }

    //delete
        function delete($id_visi_misi) {
        $this->db->where('id_visi_misi',$id_visi_misi);
        $this->db->delete('visi_misi');
    }
    
}

?>