<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_data extends CI_Model{
     function laporanTahunan()
 {
   
  $bc = $this->db->query(" 
          select
          ifnull((SELECT transaksi_total FROM (tb_transaksi)WHERE((Month(tgl_transaksi)=1)AND (YEAR(tgl_transaksi)=2017))),0) AS `Januari`,
          ifnull((SELECT transaksi_total FROM (tb_transaksi)WHERE((Month(tgl_transaksi)=2)AND (YEAR(tgl_transaksi)=2017))),0) AS `Februari`,
          ifnull((SELECT transaksi_total FROM (tb_transaksi)WHERE((Month(tgl_transaksi)=3)AND (YEAR(tgl_transaksi)=2017))),0) AS `Maret`,
          ifnull((SELECT transaksi_total FROM (tb_transaksi)WHERE((Month(tgl_transaksi)=4)AND (YEAR(tgl_transaksi)=2017))),0) AS `April`,
          ifnull((SELECT transaksi_total FROM (tb_transaksi)WHERE((Month(tgl_transaksi)=5)AND (YEAR(tgl_transaksi)=2017))),0) AS `Mei`,
          ifnull((SELECT transaksi_total FROM (tb_transaksi)WHERE((Month(tgl_transaksi)=6)AND (YEAR(tgl_transaksi)=2017))),0) AS `Juni`,
          ifnull((SELECT transaksi_total FROM (tb_transaksi)WHERE((Month(tgl_transaksi)=7)AND (YEAR(tgl_transaksi)=2017))),0) AS `Juli`,
          ifnull((SELECT transaksi_total FROM (tb_transaksi)WHERE((Month(tgl_transaksi)=8)AND (YEAR(tgl_transaksi)=2017))),0) AS `Agustus`,
          ifnull((SELECT transaksi_total FROM (tb_transaksi)WHERE((Month(tgl_transaksi)=9)AND (YEAR(tgl_transaksi)=2017))),0) AS `September`,
          ifnull((SELECT transaksi_total FROM (tb_transaksi)WHERE((Month(tgl_transaksi)=10)AND (YEAR(tgl_transaksi)=2017))),0) AS `Oktober`,
          ifnull((SELECT transaksi_total FROM (tb_transaksi)WHERE((Month(tgl_transaksi)=11)AND (YEAR(tgl_transaksi)=2017))),0) AS `November`,
          ifnull((SELECT transaksi_total FROM (tb_transaksi)WHERE((Month(tgl_transaksi)=12)AND (YEAR(tgl_transaksi)=2017))),0) AS `Desember`
         from tb_transaksi GROUP BY YEAR(tgl_transaksi) 
           
          ");
   
      return $bc;
       
     }
    public function GetData($table){
        $res=$this->db->get($table); // Kode ini berfungsi untuk memilih tabel yang akan ditampilkan
        return $res->result_array(); // Kode ini digunakan untuk mengembalikan hasil operasi $res menjadi sebuah array
    }
 
    public function Insert($table,$data){
        $res = $this->db->insert($table, $data); // Kode ini digunakan untuk memasukan record baru kedalam sebuah tabel
        return $res; // Kode ini digunakan untuk mengembalikan hasil $res
    }

    
    public function GetWhere($table, $data){
        $res=$this->db->get_where($table, $data);
        return $res->result_array();
    }

 
    function edit_data($where,$table){
      return $this->db->get_where($table,$where);
    }

    public function Update($table, $data, $where){
        $res = $this->db->update($table, $data, $where); // Kode ini digunakan untuk merubah record yang sudah ada dalam sebuah tabel
        return $res;
    }
 
    public function Delete($table, $where){
        $res = $this->db->delete($table, $where); // Kode ini digunakan untuk menghapus record yang sudah ada
        return $res;
    }

    function getKasir(){
        $query=$this->db->query("SELECT * FROM tb_user");
        return $query->result_array();
    }

    function getKendaraan(){
        $this->db->select("tb_kendaraan.PLATNOMOR,tb_merk.MERK_MOTOR,tb_kendaraan.WARNA,tb_kendaraan.TAHUNTERBIT");
        $this->db->from('tb_merk');
        $this->db->join('tb_kendaraan', 'tb_kendaraan.id_merk = tb_merk.id_merk');
        $query = $this->db->get();
        return $query->result();
    }

    function getTransaksi(){
        $this->db->select("C.ID_TRANSAKSI, A.NAMA, C.PLATNOMOR,C.JAM_RENTAL,C.JAM_KEMBALI, C.TGL_TRANSAKSI, C.TGL_KEMBALI, C.TRANSAKSI_TOTAL, C.TRANSAKSI_STATUS");
        $this->db->from('tb_pelanggan AS A');// I use aliasing make joins easier
        $this->db->join('tb_transaksi AS C', 'A.id_pelanggan = C.ID_pelanggan');
        $this->db->join('tb_kendaraan AS B', 'C.platnomor = B.platnomor');
        $query = $this->db->get();
        return $query->result();
    }

    function getTarif(){
        $this->db->select("tb_tarif.ID_TARIF,tb_merk.MERK_MOTOR,tb_jam.JAM,tb_tarif.HARGA");
        $this->db->from('tb_merk');
        $this->db->join('tb_tarif', 'tb_tarif.id_merk = tb_merk.id_merk');
        $this->db->join('tb_jam','tb_jam.id_jam=tb_tarif.id_jam');
        $query = $this->db->get();
        return $query->result();
    }

    function get_rincian_tarif($id){
       $this->db->join('tb_jam j', 'j.id_jam=t.id_jam');
       $this->db->where('t.id_tarif',$id);
      return $this->db->get('tb_tarif t')->row();
    }   
}
?>