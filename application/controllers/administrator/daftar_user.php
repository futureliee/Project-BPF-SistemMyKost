<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar_user extends CI_Controller{
	public function index(){
		$id = $this->session->userdata("idadmin");
		if($id!=null){
		$this->load->model('main_model');
		$data['user'] = $this->main_model->get_users();
		$this->load->view('template/header');
		$this->load->view('administrator/sidebar');
		$this->load->view('administrator/daftar_user', $data);
		$this->load->view('template/footer');
		}else{
			redirect("login_controller/index");
		}
	}

}