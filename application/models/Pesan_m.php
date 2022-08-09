<?php 

class Pesan_m extends CI_model{
    //select
    function select(){
        $this->db->select('*');
        $this->db->from('pesan');

        return $this->db->get()->result();
    }

    //delete
        function delete($id_pesan) {
        $this->db->where('id_pesan',$id_pesan);
        $this->db->delete('pesan');
    }
    
}

?>