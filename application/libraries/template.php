<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  class Template{
    protected $_CI;
    function __construct(){
      $this->_CI=&get_instance();

    }

    function display($template, $data=null){
      #$this->_CI->load->model('m_menuSidebar');
      #$data['_getMenu1'] = $this->_CI->m_menuSidebar->selectMenu1($this->_CI->session->userdata('group_user'));
      #    $data['_getMenu2'] = $this->_CI->m_menuSidebar->selectMenu2($this->_CI->session->userdata('group_user'));
      #    $data['_getMenu3'] = $this->_CI->m_menuSidebar->selectMenu3($this->_CI->session->userdata('group_user'));

      $data['_style'] = $this->_CI->load->view('back/template/style', $data, true);
      $data['_sidebar'] = $this->_CI->load->view('back/template/sidebar', $data, true);
      $data['_navbar'] = $this->_CI->load->view('back/template/navbar', $data, true);
      $data['_script'] = $this->_CI->load->view('back/template/script', $data, true);

      // $data['_header'] = $this->_CI->load->view('template/header', $data, true);
      $data['_content']=$this->_CI->load->view($template,$data,true);
      $data['_footer']=$this->_CI->load->view('back/template/footer',$data,true);
      $this->_CI->load->view('back/Template.php',$data);
    }
    function display2($template, $data=null){
      #$this->_CI->load->model('m_menuSidebar');
      #$data['_getMenu1'] = $this->_CI->m_menuSidebar->selectMenu1($this->_CI->session->userdata('group_user'));
      #    $data['_getMenu2'] = $this->_CI->m_menuSidebar->selectMenu2($this->_CI->session->userdata('group_user'));
      #    $data['_getMenu3'] = $this->_CI->m_menuSidebar->selectMenu3($this->_CI->session->userdata('group_user'));

      $data['_style'] = $this->_CI->load->view('front/template/style', $data, true);
      #$data['_sidebar'] = $this->_CI->load->view('front/template/sidebar', $data, true);
      $data['_navbar'] = $this->_CI->load->view('front/template/navbar', $data, true);
      $data['_script'] = $this->_CI->load->view('front/template/script', $data, true);

      $data['_header'] = $this->_CI->load->view('front/template/header', $data, true);
      $data['_content']=$this->_CI->load->view($template,$data,true);
      $data['_footer']=$this->_CI->load->view('front/template/footer',$data,true);
      $this->_CI->load->view('front/Template.php',$data);
    }
  } 
?>