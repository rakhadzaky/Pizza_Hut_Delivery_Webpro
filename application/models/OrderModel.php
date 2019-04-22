<?php
class OrderModel extends CI_model{

    public function selectAll(){
        return $this->db->select('tbpemesanan')->result_array();
    }

    public function insert($data){
        $this->db->insert('tbpemesanan',$data);
    }

    public function selectLast(){
        $this->db->order_by('id',"desc");
        $this->db->limit(1);
        return $this->db->get('tbpemesanan')->row_array();
    }
}