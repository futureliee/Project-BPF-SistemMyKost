<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar_kamar extends CI_Controller{

	public function index(){
		$id = $this->session->userdata("idadmin");
		if($id!=null){
		$this->load->model('main_model');
		$data['kamar'] = $this->main_model->tampil_data_kamar();
		$this->load->view('template/header');
		$this->load->view('administrator/sidebar');
		$this->load->view('administrator/daftar_kamar', $data);
		$this->load->view('template/footer');
		}else{
			redirect("login_controller/index");
		}
	}

	public function input_kamar(){
		$id = $this->session->userdata("idadmin");
		if($id!=null){
			$this->form_validation->set_rules("lantai","Nama Lantai","required");
			$this->form_validation->set_rules("no_kamar","No. Kamar","required");
            $this->form_validation->set_rules("nama_penghuni","Nama Penghuni","required");
			$this->form_validation->set_rules("pembayaranKamar","Jenis Pembayaran","required");
			$this->form_validation->set_rules("biayaKamar","Biaya","required");
			$this->form_validation->set_rules("statusKamar","required");
			if($this->form_validation->run()==false){
				$this->load->model('main_model');
				$data["data_kost"]=$this->main_model->tampil_nama_kost();
				$this->load->view('template/header');
				$this->load->view('administrator/sidebar');
				$this->load->view('administrator/daftar_kamar_form',$data);
				$this->load->view('template/footer');
			}else{
				$this->_add_data_kamar();
			}
		}else{
			redirect("login_controller/index");
		}
	}

	private function _add_data_kamar(){
		$lantai = $this->input->post("lantai");
		$no_kamar = $this->input->post("no_kamar");
        $nama_penghuni=$this->input->post("nama_penghuni");
		$data_kost = $this->input->post("id_nm_kost");
		$pembayaranKamar =  $this->input->post("pembayaranKamar");
		$biayaKamar = $this->input->post("biayaKamar");
		$statusKamar = $this->input->post("statusKamar");
		$foto = $_FILES["fotokamar"];
		$nm_foto = '';

		if($foto!=null){
			$config["upload_path"]="./assets/img/gambar_kamar/";
			$config["allowed_types"]="jpg|png|jpeg";
			$config["max_size"]=2000;
			$config["encrypt_name"]=true;
			$this->load->library('upload',$config);
			if($this->upload->do_upload('fotokamar')){
				$nm_foto=$this->upload->data('file_name');
			}
		}
		

		$data = [
			"lantai"=>$lantai,
			"no_kamar"=>$no_kamar,
            "nama_penghuni"=>$nama_penghuni,
			"id_nm_kost"=>$data_kost,
			"pembayaranKamar"=>$pembayaranKamar,
			"biayaKamar"=>$biayaKamar,
			"statusKamar"=>$statusKamar,
			"fotokamar"=>$nm_foto
		];

		$this->main_model->input_kamar($data);
		$this->session->set_flashdata('pesan',"<div class='alert alert-success alert-dismissible' role='alert'>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
				<strong>Berhasil Input</strong>
			  	</div>");
		redirect("administrator/daftar_kamar/");
	}

	public function detail($idkamar){
		$id = $this->session->userdata("idadmin");
		if($id!=null){
			$this->load->model('main_model');
			$data["kamar"]=$this->main_model->tampil_kamar_where(["id"=>$idkamar]);
			$this->load->view('template/header');
			$this->load->view('administrator/sidebar');
			$this->load->view('administrator/detail_kamar',$data);
			$this->load->view('template/footer');
		}else{
			redirect("login_controller/index");
		}
	}

	public function update_kamar($idkamar){
		$id = $this->session->userdata("idadmin");
		if($id!=null){
			$this->form_validation->set_rules("lantai","Nama Lantai","required");
			$this->form_validation->set_rules("no_kamar","No. Kamar","required");
            $this->form_validation->set_rules("nama_penghuni","Nama Penghuni","required");
			$this->form_validation->set_rules("pembayaranKamar","Jenis Pembayaran","required");
			$this->form_validation->set_rules("biayaKamar","Biaya","required");
			$this->form_validation->set_rules("statusKamar","required");
			if($this->form_validation->run()==false){
				$this->load->model('main_model');
				$data["data_kost"]=$this->main_model->tampil_nama_kost();
				$data["kamar"]=$this->main_model->tampil_kamar_where(["id"=>$idkamar]);
				$this->load->view('template/header');
				$this->load->view('administrator/sidebar');
				$this->load->view('administrator/update_kamar_form',$data);
				$this->load->view('template/footer');
			}else{
				$this->_update_data_kamar($idkamar);
			}
		}else{
			redirect("login_controller/index");
		}
	
	}

	private function _update_data_kamar($idkamar){
		$lantai = $this->input->post("lantai");
		$no_kamar= $this->input->post("no_kamar");
        $nama_penghuni=$this->input->post("nama_penghuni");
		$data_kost = $this->input->post("id_nm_kost");
		$pembayaranKamar =  $this->input->post("pembayaranKamar");
		$biayaKamar = $this->input->post("biayaKamar");
		$statusKamar = $this->input->post("statusKamar");
		$foto = $_FILES["fotokamar"];
		$nm_foto = '';

		if($foto!=null){
			$config["upload_path"]="./assets/img/gambar_kost/";
			$config["allowed_types"]="jpg|png|jpeg";
			$config["max_size"]=500;
			$config["encrypt_name"]=true;
			$this->load->library('upload',$config);
			if($this->upload->do_upload('fotokamar')){
				$nm_foto=$this->upload->data('file_name');
			}
		}	

		$data = [
			"lantai"=>$lantai,
			"no_kamar"=>$no_kamar,
            "nama_penghuni"=>$nama_penghuni,
			"id_nm_kost"=>$data_kost,
			"pembayaranKamar"=>$pembayaranKamar,
			"biayaKamar"=>$biayaKamar,
			"statusKamar"=>$statusKamar,
			"fotokamar"=>$nm_foto
		];


		$this->main_model->update_kamar($data,["id"=>$idkamar]);
		$this->session->set_flashdata('pesan',"<div class='alert alert-success alert-dismissible' role='alert'>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
				<strong>Berhasil Input</strong>
			  	</div>");
		redirect("administrator/daftar_kamar");
	}

	public function hapus_kamar($idkamar) {
		$id = $this->session->userdata("idadmin");
		if ($id != null) {
			$this->load->model('main_model');
			// Panggil fungsi di model untuk menghapus data kamar berdasarkan ID
			$this->main_model->hapus_kamar_by_id($idkamar);
		
			// Set pesan berhasil
			$this->session->set_flashdata('pesan', "<div class='alert alert-success alert-dismissible' role='alert'>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
				<strong>Data berhasil dihapus</strong>
				</div>");
		
			// Redirect ke halaman daftar_kamar
			redirect("administrator/daftar_kamar");
		} else {
			redirect("login_controller/index");
		}
	}

}