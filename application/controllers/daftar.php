<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {
    public function index()
    {
        $this->load->view('daftar');
    }
    public function simpan()
    {
        $this->load->model('user_model');
        $data['user'] = $this->user_model->simpanUser();
        $this->session->set_flashdata('message', '<h1>User berhasil ditambahkan</h1>');
        redirect('login');
    }
}