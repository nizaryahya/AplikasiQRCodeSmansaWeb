<?php

defined('BASEPATH') OR exit('no direct script access allowed');

class Guru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("guru_model");
    }
    public function index()
    {
        $data["gurus"] = $this->guru_model->getAll();
        $this->load->view("admin/guru/listGuru", $data);
    }
    public function toadd()
    {
        $this->load->view("admin/guru/add_guru");
    }
    public function create()
    {
        $nip = $this->input->post('nip');
        $nama = $this->input->post('nama');
        $jabatan = $this->input->post('jabatan');
        $email = $this->input->post('email');
        $pass = $this->input->post('password');

        $data = array(
            'nip' => $nip,
            'nama' => $nama,
            'jabatan' => $jabatan,
            'email' => $email,
            'password' => $pass
        );

        $this->guru_model->create($data);
        redirect('guru');
    }
    public function toedit($id)
    {
        $where = array('id_guru' => $id);
        $data['guru'] = $this->guru_model->getGru($where);
        $this->load->view("admin/guru/edit_guru",$data);
    }
    public function update()
    {
        $id_guru = $this->input->post('id');
        $nip = $this->input->post('nip');
        $nama = $this->input->post('nama');
        $jabatan = $this->input->post('jabatan');
        $email = $this->input->post('email');
        $pass = $this->input->post('password');

        $data = array(
            'nip' => $nip,
            'nama' => $nama,
            'jabatan' => $jabatan,
            'email' => $email,
            'password' => $pass
        );

        $where = array(
            'id_guru' => $id_guru
        );

        $this->guru_model->update($where,$data);
        redirect('guru');
    }
    public function delete($id)
    {
        $where = array('id_guru' => $id);
        $this->guru_model->delete($where);
        redirect('guru');
    }
}