<?php 

class HomeM extends CI_Model{
    public function all_new_products()
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->order_by('tbl_product.product_id', 'DESC');
        $info = $this->db->get();
        return $info->result();
    }
}