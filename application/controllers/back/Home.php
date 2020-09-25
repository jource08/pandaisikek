<?php

class Home extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect('backend_login');
			$this->template->load('back/template/login_role','back/login'); 
		}
	}

	public function index()
	{
        // load view admin/overview.php
        //$this->load->view("front/overview");
        $this->template->display('back/home'); 
	}
}