<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mpeserta extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function getPesertaAll()
    {
        $sql = "select * from peserta
                join skemasertifikasi on peserta.idSkema = skemasertifikasi.idSkema
                ";
        return $this->db->query($sql);
    }

    public function skemaSertifikasi()
    {
        $sql = "select * from skemasertifikasi
                ";
        return $this->db->query($sql);
    }

    public function insert($data)
    {
        $query=$this->db->insert_batch('peserta',$data);
        return TRUE;
    }

    function update($data)
    {
        $this->db->update_batch('peserta', $data, 'nik');
        return TRUE;
    }

    function delete($nik)
    {
     //   $this->db->delete('katedgori_barang', $nik);
        $this->db->where_in('nik', $nik);
        $this->db->delete('peserta');
        return TRUE;
    }

}
