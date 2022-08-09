<?php 

class Media_m extends CI_model{
    //select
    function select(){
        $this->db->select('*');
        $this->db->from('media');

        return $this->db->get()->result();
    }

    //edit
    function select_db($id_media){
        $this->db->select('*');
        $this->db->from('media');
        $this->db->where('id_media',$id_media);

        return $this->db->get()->row_array();
    }
    function update($id_media,$data) {
        $this->db->where('id_media',$id_media);
        $this->db->update('media',$data);
    }

    //delete
        function delete($id_media) {
        $this->db->where('id_media',$id_media);
        $this->db->delete('media');
    }
    
}

?>