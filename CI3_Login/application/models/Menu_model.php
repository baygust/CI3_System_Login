<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    public function getSubMenu()
    {
        $query = "SELECT `user_sub_menu`.*,`user_menu`.`menu`
        FROM `user_sub_menu` JOIN `user_menu`
        ON `user_sub_menu`.`menu_id`=`user_menu`.`id`
        ";
        return $this->db->query($query)->result_array();
    }

    public function delete_m($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_menu');
    }
    public function update_menu()
    {
        $data = [
            // "id" => $this->input->post('id', true),
            "menu" => $this->input->post('menu', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user_menu', $data);
    }
    public function getmenuID($id)
    {
        return $this->db->get_where('user_menu', ['id' => $id])->row_array();
    }

    public function delete_sm($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_sub_menu');
    }
    public function update_submenu()
    {
        $data = [
            // "id" => $this->input->post('id', true),
            "title" => $this->input->post('title', true),
            "url" => $this->input->post('url', true),
            "icon" => $this->input->post('icon', true),
            "is_active" => $this->input->post('is_active', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user_sub_menu', $data);
    }
    public function getsubmenuID($id)
    {
        return $this->db->get_where('user_sub_menu', ['id' => $id])->row_array();
    }
}
