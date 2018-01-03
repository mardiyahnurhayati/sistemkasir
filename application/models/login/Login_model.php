<?php

class Login_model extends CI_Model {

    /**
    * Validate the login's data with the database
    * @param string $username
    * @param string $password
    * @return void
    */

    /*Check Login*/
   	function validate($username, $password)
	{
		$this->db->where('status',user);
		$this->db->where('password', $password);
		$this->db->where('nama_user', $username);
		$query = $this->db->get('tb_user');
		return $query->result();	
	}

	/*Get Session values */
		
	function get_id($username, $password)
	{
		
		$this->db->where('password', $password);
		$this->db->where('nama_user', $username);	
		return $this->db->get('tb_user')->result();
				
	}

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
		
}