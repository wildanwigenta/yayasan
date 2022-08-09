<?php 

class Contact_m extends CI_model{
    //select
    function select(){
        $this->db->select('*');
        $this->db->from('contact');

        return $this->db->get()->result();
    }

    //edit
    function select_db($id_contact){
        $this->db->select('*');
        $this->db->from('contact');
        $this->db->where('id_contact',$id_contact);
        
        return $this->db->get()->row_array();
    }
    function update($id_contact,$data) {
        $this->db->where('id_contact',$id_contact);
        $this->db->update('contact',$data);
    }

    //delete
        function delete($id_contact) {
        $this->db->where('id_contact',$id_contact);
        $this->db->delete('contact');
    }
    
}

?>