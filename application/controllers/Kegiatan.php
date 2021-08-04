<?php
defined('BASEPATH') OR exit('no direct script access allowed');

class Kegiatan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("kegiatan_model");
    }
    public function index()
    {
        $data["kegiatan"] = $this->kegiatan_model->getAll();
        $this->load->view("admin/kegiatan/listKegiatan", $data);
    }
    public function toadd()
    {
      
        $this->load->view("admin/kegiatan/add_kegiatan");
    }
    public function create()
    {
        $nama = $this->input->post('nama');
        $jns = $this->input->post('jns');
       // $nip = $this->input->post('nip');

        $data = array(
            'nama_kegiatan' => $nama,
            'jns_kegiatan' => $jns,
           // 'nip' => $nip
        );

        $this->kegiatan_model->create($data);
        redirect('kegiatan');
    }
    public function toedit($id)
    {
        $where = array('id_kegiatan' => $id);
        $data['kegiatan'] = $this->kegiatan_model->getKgt($where);
        $this->load->view("admin/kegiatan/edit_kegiatan", $data);
    }
    public function update()
    {
        $id_kegiatan = $this->input->post('id');
        $nama = $this->input->post('nama');
        $jns = $this->input->post('jns');
      //  $nip = $this->input->post('nip');

        $data = array(
            'nama_kegiatan' => $nama,
            'jns_kegiatan' => $jns,
           // 'nip' => $nip
        );

        $where = array(
            'id_kegiatan' => $id_kegiatan
        );

        $this->kegiatan_model->update($where,$data);
        redirect('kegiatan');
    }
    public function delete($id)
    {
        $where = array('id_kegiatan' => $id);
        $this->kegiatan_model->delete($where);
        redirect('kegiatan');
    }
}