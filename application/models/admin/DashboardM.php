<?php 

class DashboardM extends CI_Model{
    public function get_user_count()
    {
    	$customer = $this->db->count_all_results('tbl_customer');
    	return $customer;
    }

    public function get_product_count()
    {
    	$product = $this->db->count_all_results('tbl_product');
    	return $product;
    }
}