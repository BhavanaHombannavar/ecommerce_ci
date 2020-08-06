<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('admin/DashboardM');
        if(!$this->session->userdata('user_id')){
        	redirect('admin');
        }
    }

	public function index()
	{
		$data[] = '';

		$data['users_number'] = $this->DashboardM->get_user_count();
		$data['products_number'] = $this->DashboardM->get_product_count();

		$data1['maincontent'] = $this->load->view('admin/dashboard',$data,true);

		$this->load->view('admin/layout', $data1);
	}
}
