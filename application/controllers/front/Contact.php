<?php

class Contact extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        // load view admin/overview.php
        //$this->load->view("front/overview");
        $this->template->display2('front/contact'); 
	}
}