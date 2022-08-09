<?php 

class Berita_m extends CI_model{
    //select
    function select(){
        $this->db->select('*');
        $this->db->from('berita');

        return $this->db->get()->result();
    }

    //select limit
    function select_3(){
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->limit('3');

        return $this->db->get()->result();
    }

    //edit
    function select_db($id_berita){
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->where('id_berita',$id_berita);

        return $this->db->get()->row_array();
    }
    function update($id_berita,$data) {
        $this->db->where('id_berita',$id_berita);
        $this->db->update('berita',$data);
    }

    //delete
        function delete($id_berita) {
        $this->db->where('id_berita',$id_berita);
        $this->db->delete('berita');
    }
    
}

?>