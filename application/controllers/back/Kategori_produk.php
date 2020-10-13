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
		$status = $this->input->get('txt-status');
		$result = $this->M_Kategori_produk->addKategori($nama,$status);
		$this->set_alert($result['error'],'simpan');
		redirect(base_url().'backend/kategori');
  	}

	function hapus()
	{
		$id = base64_decode($this->input->get('id'));
		$result = $this->M_Kategori_produk->delKategori($id);
		$this->set_alert($result['error'],'hapus');
		redirect(base_url().'backend/kategori');
	}

	function ajax(){
		$id = base64_decode($this->input->post('id'));
        $data = $this->M_Kategori_produk->getKategori($id);
		echo json_encode($data);
	}
	
	function set_alert($error,$type){
		if ($error == 0){
			$message = 'Berhasil '.$type.' data kategori produk!';
		}else{
			$message = 'Gagal '.$type.' data kategori produk!';
		}
		$alert =
		'<div class="alert alert-'.$error.' alert-dismissible fade show" role="alert">
		'.$message.'
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>';
		$this->session->set_flashdata('message', $alert);
	}
}