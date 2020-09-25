<?php

class Kategori_produk extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect('backend_login');
			$this->template->load('back/template/login_role','back/login'); 
		}
		$this->load->model('back/M_Kategori_produk');
	}

	public function index()
	{
        $data['dt_kategori'] = $this->M_Kategori_produk->getKategori();
        $this->template->display('back/Produk/Kategori_produk/v_index',$data); 
	}

	function simpan()
	{
		$nama = $this->input->get('txt-nama');
		$result = $this->M_Kategori_produk->addKategori($nama);
		#redirect(base_url().'backend/kategori');
		var_dump($result);
  	}

	function hapus()
	{
		$id = $this->input->get('id');
		$result = $this->M_Kategori_produk->delKategori($id);
		#redirect(base_url().'backend/kategori');
		var_dump($result);
  	}
}