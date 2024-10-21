<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tambah_daftar extends CI_Controller {

	public function index()
	{
		$data['jns_lomba'] = $this->db->get('jns_lomba')->result_array();
		$this->load->view('template/header');
		$this->load->view('tambah_daftar', $data);
		$this->load->view('template/footer');
	}

	public function tambah()
	{
		$this->load->model('daftar_model');
		$data['pendaftarann'] = $this->daftar_model->tambahdaftar();
		redirect('admin');
	}

}