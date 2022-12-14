<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	
	public function index()
	{
		//membuat variabel title 
		$data['title']='Dashboard';
        $this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);
        $this->load->view('dashboard');
        $this->load->view('template/footer');
	}
	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
		if(!$this->auth_model->current_user()){
			redirect('auth/login');
        }
    }
 
}
