<?php

defined('BASEPATH') OR exit('no direct script access allowed');

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("siswa_model");
    }
    public function index()
    {
        $data["siswas"] = $this->siswa_model->getAll();
        $this->load->view("admin/siswa/listSiswa", $data);
    }
    public function toadd()
    {
        $this->load->view("admin/siswa/add_siswa");
    }
    public function create()
    {
        // include base_url("qr_builder/phpqrcode/qrlib.php");
        $nis = $this->input->post('nis');
        $nama = $this->input->post('nama');
        $ttl = $this->input->post('ttl');
        $jeniskelamin = $this->input->post('jeniskelamin');
        $alamat = $this->input->post('alamat');
        $email = $this->input->post('email');
        $pass = $this->input->post('password');

        // $tempdir = base_url("qr_builder/temp/");
        // if(!file_exists($tempdir))
        // mkdir($tempdir);

        // $codeContents = $nis;
        // $namaFile = $nis.".png";
        // $level = QR_ECLEVEL_H;
        // $ukuranPixel = 10;
        // $ukuranFrame = 4;

        // QRcode::png($codeContents, $tempdir.$namaFile, $level, $ukuranPixel, $ukuranFrame);

        $data = array(
            'nis' => $nis,
            'nama' => $nama,
            'ttl' => $ttl,
            'jeniskelamin' => $jeniskelamin,
            'alamat' => $alamat,
            'email' => $email,
            'password' => $pass
        );

        $this->siswa_model->create($data);
        redirect('siswa');
    }
    public function toedit($id)
    {
        $where = array('id_swa' => $id);
        $data['swa'] = $this->siswa_model->getSwa($where);
        $this->load->view("admin/siswa/edit_siswa",$data);
    }
    public function update()
    {
        $id_swa = $this->input->post('id');
        $nis = $this->input->post('nis');
        $nama = $this->input->post('nama');
        $ttl = $this->input->post('ttl');
        $jeniskelamin = $this->input->post('jeniskelamin');
        $alamat = $this->input->post('alamat');
        $email = $this->input->post('email');
        $pass = $this->input->post('password');

        $data = array(
            'nis' => $nis,
            'nama' => $nama,
            'ttl' => $ttl,
            'jeniskelamin' => $jeniskelamin,
            'alamat' => $alamat,
            'email' => $email,
            'password' => $pass
        );

        $where = array(
            'id_swa' => $id_swa
        );

        $this->siswa_model->update($where,$data);
        redirect('siswa');
    }
    public function delete($id)
    {
        $where = array('id_swa' => $id);
        $this->siswa_model->delete($where);
        redirect('siswa');
    }
}