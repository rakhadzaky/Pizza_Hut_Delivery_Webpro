<?php
class OrderModel extends CI_model{

    public function selectAll(){
        return $this->db->select('tbpemesanan')->result_array();
    }

    public function insert($data){
        $this->db->insert('tbpemesanan',$data);
    }

    public function selectLast($id){
        $this->db->where('id_user', $id);
        $this->db->where('status', 'on_going');
        $this->db->order_by('id',"desc");
        $this->db->limit(1);
        return $this->db->get('tbpemesanan')->row_array();
    }

    public function addToCart($id_food, $id_order){
        $data = [
            'id_pemesanan' => $id_order,
            'id_food' => $id_food,
            'jumlah' => 1
        ];

        $this->db->insert('tbchart',$data);
    }
    
    public function selectCart($id_pemesanan){
        $this->db->select('tbchart.id');
        $this->db->select('tbfood.gambar');
        $this->db->select('tbfood.nama');
        $this->db->select('tbfood.harga');
        $this->db->select('tbchart.jumlah');
        $this->db->join('tbpemesanan', 'tbchart.id_pemesanan = tbpemesanan.id');
        $this->db->join('tbfood', 'tbchart.id_food = tbfood.id');
        $this->db->where('tbchart.id_pemesanan', $id_pemesanan);
        return $this->db->get('tbchart')->result_array();
    }

    public function removeCart($id){
        $this->db->where('id', $id);
        $this->db->delete('tbchart');
    }

    public function checkOut($id){
        $this->db->set('status', 'finish');
        $this->db->where('id', $id);
        $this->db->update('tbpemesanan');
    }
}