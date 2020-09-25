<?php

class Menu extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model('front/M_produk');
		//$this->load->library('form_validation');
	}

	public function index()
	{
        $data['test'] = $this->M_produk->getProduk();

        $this->template->display2('front/menu',$data); 
	}
}