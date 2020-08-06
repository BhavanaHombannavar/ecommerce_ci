<?php 

class ProductsM extends CI_Model{

    public function save_product($data){

        return $this->db->insert('tbl_product', $data);
        
    }

    public function get_all_product()
    {
    	$this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->order_by('tbl_product.product_id', 'DESC');
        $info = $this->db->get();
        return $info->result();
    }

    public function check_product_id($id)
    {
    	$exists = $this->db->get_where('tbl_product', array('product_id' => $id));

    	return $exists->num_rows();
    }

    public function delete_product($id){
        $this->db->where('product_id', $id);
        return $this->db->delete('tbl_product');
    }

    public function get_single_product($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('tbl_product.product_id', $id);
        $info = $this->db->get();
        return $info->row();
    }

    public function update_product($data, $id)
    {
        $this->db->where('product_id', $id);
        return $this->db->update('tbl_product', $data);
    }
}