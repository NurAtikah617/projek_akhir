<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	// public function __construct()
	// {
	// 	parent::__construct();
	// 	is_logged_in();
	// }


	public function index()
	{
		$this->load->model('daftar_model');

		$data['pendaftarann'] = $this->daftar_model->getDaftar();

		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('admin', $data);
		$this->load->view('template/footer');
	}
	public function hapus($id){
		$this->db->delete('pendaftarann', ['id' => $id]);
		redirect('admin');
	}

	public function edit($id)
	{
		$this->load->model('daftar_model');
		$data['edit'] = $this->daftar_model->getPendaftarannById($id);
		$data['jns_lomba'] = $this->db->get('jns_lomba')->result_array();

		$this->load->view('template/header');
		$this->load->view('edit_daftar', $data);
		$this->load->view('template/footer');
	}
	public function update()
	{
		$data =
		[
			"id" => $this->input->post('id', true),
			"id_lomba" => $this->input->post('id_lomba', true),
            "kelas" => $this->input->post('kelas', true),
            "no_hp" => $this->input->post('no_hp', true),
            "tgl_daftar" => $this->input->post('tgl_daftar', true)
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('pendaftarann', $data);
		redirect('admin');
	}
} 