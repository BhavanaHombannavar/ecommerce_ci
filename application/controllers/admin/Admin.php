<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('admin/AdminM');
    }

	public function index()
	{

		if($this->session->userdata('user_id')){
        	redirect('admin/dashboard');
        }

		if(isset($_POST['admin_login'])){
			$this->form_validation->set_rules('user_email', 'User Email', 'required|valid_email');
        	$this->form_validation->set_rules('user_password', 'User Password', 'required');
        	$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        	if ($this->form_validation->run()){
        		$data = array();
	            $data['user_email'] = $this->input->post('user_email');
	            $data['user_password'] = md5($this->input->post('user_password'));
	            $result = $this->AdminM->admin_login_check($data);

	            if($result){
	                $this->session->set_userdata('user_email',$result->user_email);
	                $this->session->set_userdata('user_name',$result->user_name);
	                $this->session->set_userdata('user_id',$result->user_id);
	                redirect('admin/dashboard');
	            }
	            else{
	                $this->session->set_flashdata('message', 'Your Email Or Password Does Not Match');
	                redirect('admin');
	            }
        	}
		}
		$this->load->view('admin/admin_login');
	}

	public function logout(){
       
       $email = $this->session->unset_userdata('user_email');
       $name = $this->session->unset_userdata('user_name');
       $id = $this->session->unset_userdata('user_id');
       
       if($email==FALSE){
          redirect('admin'); 
       }
        
    }
}
