<?php 

class Layanan_m extends CI_model{
    //select
    function select(){
        $this->db->select('*');
        $this->db->from('layanan');

        return $this->db->get()->result();
    }

    //edit
    function select_db($id_layanan){
        $this->db->select('*');
        $this->db->from('layanan');
        $this->db->where('id_layanan',$id_layanan);

        return $this->db->get()->row_array();
    }
    function update($id_layanan,$data) {
        $this->db->where('id_layanan',$id_layanan);
        $this->db->update('layanan',$data);
    }

    //delete
        function delete($id_layanan) {
        $this->db->where('id_layanan',$id_layanan);
        $this->db->delete('layanan');
    }
    
}

?>