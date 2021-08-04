<?php
defined('BASEPATH') OR exit('no direct script access allowed');

class Kehadiran_model extends CI_Model
{
    private $_tkehadiran = "kehadiran";
    private $_tsession = "session";

    public function getAll()
    {
        return $this->db->from("kehadiran")
            ->join('siswa', 'siswa.nis=kehadiran.id_swa')
            ->join('kegiatan', 'kegiatan.id_kegiatan=kehadiran.id_kegiatan')
            // ->join('dosen', 'dosen.id_dsn=kehadiran.id_dsn')
            ->get()    
            ->result();
    }

    public function delKehadiran($where)
    {
        $this->db->where($where);
        $this->db->delete($this->_tkehadiran);
    }

    public function getSession()
    {
        return $this->db->from($this->_tsession)
            ->join('siswa', 'siswa.nis=session.id_swa')
            ->join('kegiatan', 'kegiatan.id_kegiatan=session.id_kegiatan')
            ->get()
            ->result();
    }

    public function delAllSes()
    {
        $query = "TRUNCATE TABLE session";
        return $this->db->query($query);
    }
}