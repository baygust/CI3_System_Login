<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function delete_r($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_role');
    }
    public function update_role()
    {
        $data = [
            // "id" => $this->input->post('id', true),
            "role" => $this->input->post('role', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user_role', $data);
    }
    public function getroleID($id)
    {
        return $this->db->get_where('user_role', ['id' => $id])->row_array();
    }
}
