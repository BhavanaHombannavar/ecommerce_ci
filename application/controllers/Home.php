<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('HomeM');
    }

	public function index()
	{
		$data['all_new_products'] = $this->HomeM->all_new_products();
		$this->load->view('header');
		$this->load->view('home', $data);
		$this->load->view('footer');
	}
}
