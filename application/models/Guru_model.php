<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru_model extends CI_Model
{
    private $_table = "guru";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getGru($id)
    {
        return $this->db->get_where($this->_table,$id)->result();
    }

    public function create($data)
    {
        $this->db->insert($this->_table,$data);
    }

    public function update($where,$data)
    {
        $this->db->where($where);
        $this->db->update($this->_table,$data);
    }

    public function delete($where)
    {
        $this->db->where($where);
        $this->db->delete($this->_table);
    }
}