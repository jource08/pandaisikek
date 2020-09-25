<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backend_Login extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model('back/m_login');
	}

	public function index()
	{ 
        $data = array(
        	'message' => '');
        $this->load->view('back/login',$data); 
        //redirect(base_url('back/login'));
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->m_login->getLogin($where);
		
		if(count($cek) == 1){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("/backend"));
 			//$this->template->load('back/template/role','back/home'); 
		}else{
			echo "Username dan password salah !";
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect('backend_login');
	}
}