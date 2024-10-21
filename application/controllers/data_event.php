<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_event extends CI_Controller {
	// public function __construct()
	// {
	// 	parent::__construct();
	// 	is_logged_in();
	// }


	public function index()
	{
		$this->load->model('data_model');

		$data['jns_lomba'] = $this->data_model->getData();

		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('data_event', $data);
		$this->load->view('template/footer');
	}
	public function hapus($id){
		$this->db->delete('jns_lomba', ['id' => $id]);
		redirect('data_event');
	}

	public function edit($id)
	{
		$this->load->model('data_model');
		$data['edit'] = $this->data_model->getDataById($id);

		$this->load->view('template/header');
        $this->load->view('template/menu');
		$this->load->view('edit2', $data);
		$this->load->view('template/footer');
	}
	public function update()
	{
		$data =
		[
			"namalomba" => $this->input->post('namalomba', true),
			"penyelenggara" => $this->input->post('penyelenggara', true)
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('jns_lomba', $data);
		redirect('data_event');
	}
} 