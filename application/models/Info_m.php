<?php 

class Info_m extends CI_model{
    //select
    function select(){
        $this->db->select('*');
        $this->db->from('info');

        return $this->db->get()->result();
    }

    //edit
    function select_db($id_info){
        $this->db->select('*');
        $this->db->from('info');
        $this->db->where('id_info',$id_info);
        
        return $this->db->get()->row_array();
    }
    function update($id_info,$data) {
        $this->db->where('id_info',$id_info);
        $this->db->update('info',$data);
    }

    //delete
        function delete($id_info) {
        $this->db->where('id_info',$id_info);
        $this->db->delete('info');
    }
    
}

?>