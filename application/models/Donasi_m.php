<?php 

class Donasi_m extends CI_model{
    //select
    function select(){
        $this->db->select('*');
        $this->db->from('donasi');

        return $this->db->get()->result();
    }

    //edit
    function select_db($id_donasi){
        $this->db->select('*');
        $this->db->from('donasi');
        $this->db->where('id_donasi',$id_donasi);

        return $this->db->get()->row_array();
    }
    function update($id_donasi,$data) {
        $this->db->where('id_donasi',$id_donasi);
        $this->db->update('donasi',$data);
    }

    //delete
        function delete($id_donasi) {
        $this->db->where('id_donasi',$id_donasi);
        $this->db->delete('donasi');
    }
    
}

?>