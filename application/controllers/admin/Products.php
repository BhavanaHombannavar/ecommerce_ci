<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('admin/ProductsM');
        if(!$this->session->userdata('user_id')){
        	redirect('admin');
        }
    }

	public function index()
	{
		$data[] = '';

		$data['get_all_product'] = $this->ProductsM->get_all_product();

		$data1['maincontent'] = $this->load->view('admin/products_list',$data,true);

		$this->load->view('admin/layout', $data1);
	}

	public function add()
	{
		// $data[] = '';

		if(isset($_POST['save_product'])){
			$data['product_title'] = $this->input->post('product_title');
			$data['product_price'] = $this->input->post('product_price');
			$data['product_quantity'] = $this->input->post('product_quantity');
			$data['product_sku'] = $this->input->post('product_sku');

			$this->form_validation->set_rules('product_title', 'Product Title', 'trim|required');
			$this->form_validation->set_rules('product_price', 'Product Price', 'trim|required');
			$this->form_validation->set_rules('product_quantity', 'Product Quantity', 'trim|required');
			$this->form_validation->set_rules('product_sku', 'Product SKU', "trim|required|is_unique[tbl_product.product_sku]");
			$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

			if (!empty($_FILES['product_image']['name'])) {
	            $config['upload_path'] = './uploads/';
	            $config['allowed_types'] = 'gif|jpg|png';
	            $config['max_size'] = 4096;
	            $config['max_width'] = 2000;
	            $config['max_height'] = 2000;

	            $this->upload->initialize($config);

	            if (!$this->upload->do_upload('product_image')) {
	                $error = $this->upload->display_errors();
	                $this->session->set_flashdata('message', $error);
	                redirect('add/product');
	            }
	            else{
	                $post_image = $this->upload->data();
	                $data['product_image'] = $post_image['file_name'];
	            }
	        }else{
	        	$this->session->set_flashdata('message', 'Product Image is required');
	        	redirect('admin/products/add');
	        }
	        if ($this->form_validation->run()){
            	 $result = $this->ProductsM->save_product($data);

	            if ($result) {
	                $this->session->set_flashdata('message', 'Product Added Sucessfully');
	                redirect('admin/products');
	            } else {
	                $this->session->set_flashdata('message', 'Failed Please Try again');
	                redirect('admin/products/add');
	            }
	        } else {
	            $this->session->set_flashdata('message', validation_errors());
	            redirect('admin/products/add');
	        }
		}
		$data[] = '';

		$data1['maincontent'] = $this->load->view('admin/product',$data,true);

		$this->load->view('admin/layout', $data1);
	}

	public function edit($id)
	{


		if(isset($_POST['update_product'])){
			$data['product_title'] = $this->input->post('product_title');
			$data['product_price'] = $this->input->post('product_price');
			$data['product_quantity'] = $this->input->post('product_quantity');
			$data['product_sku'] = $this->input->post('product_sku');

			$this->form_validation->set_rules('product_title', 'Product Title', 'trim|required');
			$this->form_validation->set_rules('product_price', 'Product Price', 'trim|required');
			$this->form_validation->set_rules('product_quantity', 'Product Quantity', 'trim|required');
			$this->form_validation->set_rules('product_sku', 'Product SKU', "trim|required");
			$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

			if (!empty($_FILES['product_image']['name'])) {
	            $config['upload_path'] = './uploads/';
	            $config['allowed_types'] = 'gif|jpg|png';
	            $config['max_size'] = 4096;
	            $config['max_width'] = 2000;
	            $config['max_height'] = 2000;

	            $this->upload->initialize($config);

	            if (!$this->upload->do_upload('product_image')) {
	                $error = $this->upload->display_errors();
	                $this->session->set_flashdata('message', $error);
	                redirect('add/product');
	            }
	            else{
	                $post_image = $this->upload->data();
	                $data['product_image'] = $post_image['file_name'];
	            }
	        }
	        if ($this->form_validation->run()){
            	 $result = $this->ProductsM->update_product($data, $id);

	            if ($result) {
	                $this->session->set_flashdata('message', 'Product Updated Sucessfully');
	                redirect('admin/products');
	            } else {
	                $this->session->set_flashdata('message', 'Failed Please Try again');
	                redirect('admin/products/add');
	            }
	        } else {
	            $this->session->set_flashdata('message', validation_errors());
	            redirect('admin/products/add');
	        }
		}

		$dataa['product_info_by_id'] = $this->ProductsM->get_single_product($id);

		$data1['maincontent'] = $this->load->view('admin/product_edit',$dataa,true);

		$this->load->view('admin/layout', $data1);
	}
	public function delete($id)
	{
		$exists = $this->ProductsM->check_product_id($id);
		if($exists){
			$result = $this->ProductsM->delete_product($id);
			if ($result) {
	            $this->session->set_flashdata('message', 'Product Deleted Sucessfully');
	            redirect('admin/products');
	        } else {
	            $this->session->set_flashdata('message', 'Product Deleted Failed');
	             redirect('admin/products');
	        }
		}else{
			$this->session->set_flashdata('message', 'product does not exists');
			redirect('admin/products');
		}
	}
}
