<?php 

class Program_m extends CI_model{
    //select
    function select(){
        $this->db->select('*');
        $this->db->from('program');

        return $this->db->get()->result();
    }

    //edit
    function select_db($id_program){
        $this->db->select('*');
        $this->db->from('program');
        $this->db->where('id_program',$id_program);

        return $this->db->get()->row_array();
    }
    function update($id_program,$data) {
        $this->db->where('id_program',$id_program);
        $this->db->update('program',$data);
    }

    //delete
        function delete($id_program) {
        $this->db->where('id_program',$id_program);
        $this->db->delete('program');
    }
    
}

?>