<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_model extends CI_Model {

	public function getDaftar()
	{
		//mengambil semua data dari tabel siswa
		// $this->db->select('*');
		// $this->db->from('pendaftarann');
		// $this->db->join('jns_lomba', 'jns_lomba.id = pendaftarann.nama_event');
		return $this->db->get('pendaftarann')->result_array();
	}

	public function tambahdaftar()
	{
		$data =
	[
			"nama_event" => $this->input->post('nama_event', true),
			"nama_pendaftar" => $this->input->post('nama_pendaftar', true),
			"kelas" => $this->input->post('kelas', true),
			"no_hp" => $this->input->post('no_hp', true),
			"tgl_daftar" => $this->input->post('tgl_daftar', true)
			
	];
	$this->db->insert('pendaftarann', $data);
	}

	public function getPendaftarannById($id)
	{
		return $this->db->get_where('pendaftarann',['id' => $id])->row_array();
	}
}