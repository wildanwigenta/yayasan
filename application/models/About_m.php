<?php 

class About_m extends CI_model{
    //select
    function select(){
        $this->db->select('*');
        $this->db->from('about');

        return $this->db->get()->result();
    }

    //edit
    function select_db($id_about){
        $this->db->select('*');
        $this->db->from('about');
        $this->db->where('id_about',$id_about);

        return $this->db->get()->row_array();
    }
    function update($id_about,$data) {
        $this->db->where('id_about',$id_about);
        $this->db->update('about',$data);
    }

    //delete
        function delete($id_about) {
        $this->db->where('id_about',$id_about);
        $this->db->delete('about');
    }
    
}

?>