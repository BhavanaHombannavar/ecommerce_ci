<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Single extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('admin/ProductsM');
    }

	/*public function index($id)
	{
		$data['get_single_product'] = $this->ProductsM->get_single_product($id);
		$this->load->view('header');
		$this->load->view('single', $data);
		$this->load->view('footer');
	}*/
	public function product($id)
	{
		$data['get_single_product'] = $this->ProductsM->get_single_product($id);
		$this->load->view('header');
		$this->load->view('single', $data);
		$this->load->view('footer');
	}
}
