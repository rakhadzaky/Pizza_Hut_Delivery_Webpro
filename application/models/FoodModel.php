<?php
class FoodModel extends CI_model{
    public function getAllFood(){
        return $this->db->get('tbfood')->result_array();
    }
    public function insertFood($data){
        $this->db->insert('tbfood', $data);
    }
    public function deleteFood($id){
        $this->db->where('id', $id);
        $this->db->delete('tbfood');
    }
}