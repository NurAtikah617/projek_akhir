<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_model extends CI_Model {
    public function getData()
    {
        return $this->db->get('jns_lomba')->result_array();
    }
    public function getDataById($id)
    {
        return $this->db->get_where('jns_lomba', ['id' => $id])->row_array();
    }
}
