<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class  Admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $data = $this->load->model('m_data');

         if($this->session->userdata('is_logged_in')=='')
    {
     $this->session->set_flashdata('msg','Please Login to Continueuuuu');
     redirect('login');
   }

    }
    

    function index(){
        $this->load->view('admin/header_admin');
        foreach($this->m_data->laporanTahunan()->result_array() as $row)
          {
           $data['grafik'][]=(float)$row['Januari'];
           $data['grafik'][]=(float)$row['Februari'];
           $data['grafik'][]=(float)$row['Maret'];
           $data['grafik'][]=(float)$row['April'];
           $data['grafik'][]=(float)$row['Mei'];
           $data['grafik'][]=(float)$row['Juni'];
           $data['grafik'][]=(float)$row['Juli'];
           $data['grafik'][]=(float)$row['Agustus'];
           $data['grafik'][]=(float)$row['September'];
           $data['grafik'][]=(float)$row['Oktober'];
           $data['grafik'][]=(float)$row['November'];
           $data['grafik'][]=(float)$row['Desember'];
          }

        
        $this->load->view('admin/home_admin',$data);
        $this->load->view('admin/footer_admin');
        
    }

    function tampil_kasir(){
        $data = $this->m_data->getKasir();
        $data = array('data' => $data);
        $this->load->view('admin/kasir', $data);
        $this->load->view('admin/header_admin');
        $this->load->view('admin/footer_admin');
    }

    function tampil_pelanggan(){
         $data['data'] = $this->m_data->GetData('tb_pelanggan');
        
        $this->load->view('admin/pelanggan', $data);

        $this->load->view('admin/header_admin');
        $this->load->view('admin/footer_admin');
    }

    function tampil_motor(){
        $query = $this->m_data->getKendaraan();
        $data['motor'] = null;
        if($query){
         $data['motor'] =  $query;
        }
      
        $this->load->view('admin/motor', $data);

        $this->load->view('admin/header_admin');
        $this->load->view('admin/footer_admin');
    }

    function tampil_transaksi(){
        $query = $this->m_data->getTransaksi();
        $data['data'] = null;
        if($query){
         $data['data'] =  $query;
        }
      
        $this->load->view('admin/transaksi', $data);

        $this->load->view('admin/header_admin');
        $this->load->view('admin/footer_admin');
    }

    //  function tampil_transaksi_hari(){
    //     $query = $this->m_data->getHari();
    //     $data['data'] = null;
    //     if($query){
    //      $data['data'] =  $query;
    //     }
      
    //     $this->load->view('admin/transaksi', $data);

    //     $this->load->view('admin/header_admin');
    //     $this->load->view('admin/footer_admin');
    // }

    function tampil_tarif(){
         $query = $this->m_data->getTarif();
        $data['data'] = null;
        if($query){
         $data['data'] =  $query;

        }
        $this->load->view('admin/tarif', $data);
        
        $this->load->view('admin/header_admin');
        $this->load->view('admin/footer_admin'); 

    }
    function tarif_tambah(){

        $data['data'] = $this->m_data->GetData('tb_merk');
        $data['jam'] = $this->m_data->GetData('tb_jam');
        $this->load->view('admin/header_admin');
        $this->load->view('admin/tarif_tambah',$data);
        $this->load->view('admin/footer_admin');
    }

    function insert_tarif(){
        $this->load->model('m_data');
        $data = array(
            'id_merk' => $this->input->post('merek'),
            'id_jam' => $this->input->post('jam'),
            'id_tarif'  => $this->input->post('id_tarif'),
            'harga' => $this->input->post('harga'),
        );
        $data = $this->m_data->insert('tb_tarif', $data);
        redirect('Admin/tampil_tarif');
    }

    
    function edit_tarif($id_tarif){
        $query = $this->m_data->read('tb_tarif', array('id_tarif' => $id_tarif), null, null);

        foreach($query->result() as $result){
        $data = array(
            'id_tarif'=>$result->id_tarif,
            'id_merk'=>$result->id_merk,
            'id_jam'=>$result->id_jam,
            'harga'=>$result->harga);
        }

        $data['data'] = $this->m_data->GetData('tb_merk');
        $data['jam'] = $this->m_data->GetData('tb_jam');    
    
        $this->load->view('admin/tarif_edit', $data);
        $this->load->view('admin/header_admin');
        $this->load->view('admin/footer_admin');
    }
    //getData from databases
    // public function getData($id){
    //     $query = $this->Crud->read('barang', array('idbarang'=>$id), null, null);
    //     foreach($query->result() as $result){
    //         $data = array('nama'=>$result->nama,'idkategori'=>$result->idkategori,'harga'=>$result->harga, 'stock'=>$result->stock, 'deskripsi'=>$result->deskripsi, 'foto'=>$result->foto);
    //         $data['foto'] = '<img src="'.base_url('assets/img/barang/'.$result->foto.'').'" class="img-responsive img-thumbnail" style="max-width:200px;max-height:200px">';
    //         $data['fotoNameOnly'] = $result->foto;
    //     }
    //     header('Content-Type: application/json');
    //     echo json_encode($data);
    // }

     /*public function update_motor(){
        $platnomor =$_POST['platnomor'];
        $id_merk = $_POST['id_merk'];
        $warna = $_POST['warna'];
        $tahunterbit = $_POST['tahunterbit'];

        $data = array(
            'platnomor' => $platnomor,
            'id_merk' => $id_merk,
            'warna' => $warna,
            'tahunterbit' => $tahunterbit
         );

        $where = array(
            'platnomor' => $platnomor
        );

        $this->load->model('m_data');
        $res = $this->m_data->Update('tb_kendaraan', $data, $where);
        if ($res>0) {
            redirect('Admin/tampil_motor');
        }
    }*/
    public function update_tarif(){
        $id_tarif =$_POST['id_tarif'];
        $id_jam = $_POST['id_jam'];
        $id_merk= $_POST['id_merk'];
        $harga = $_POST['harga'];

        $data = array(
            'id_tarif' => $id_tarif,
            'id_jam' => $id_jam,
            'id_merk' => $id_merk,
            'harga' => $harga
         );

        $where = array(
            'id_tarif' => $id_tarif
        );

        $this->load->model('m_data');
        $res = $this->m_data->Update('tb_tarif', $data, $where);
        if ($res>0) {
            redirect('Admin/tampil_tarif');
        }
    }

    public function delete_tarif($id_tarif){
        $id_tarif = array('id_tarif' => $id_tarif);
        $this->load->model('m_data');
        $this->m_data->Delete('tb_tarif', $id_tarif);
        redirect('Admin/tampil_tarif');
    }



    function tampil_laporan(){
        $this->load->view('admin/header_admin');
        $this->load->view('admin/laporan');
        $this->load->view('admin/footer_admin');
    }

    function edit_kasir($id_user){
        $this->load->model('m_data');
        $ks = $this->m_data->GetWhere('tb_user', array('id_user' => $id_user));
        $data = array(
            'id_user' => $ks[0]['id_user'],
            'nama' => $ks[0]['nama_user'],
            'password' => $ks[0]['password']
            
            );
        $this->load->view('admin/kasir_edit', $data);
        $this->load->view('admin/header_admin');
        $this->load->view('admin/footer_admin'); 
    }

    public function update_kasir(){
        $id_kasir = $_POST['id_user'];
        $nama = $_POST['nama'];
        $password = $_POST['password'];
        $data = array(
            'id_user' => $id_kasir,
            'nama_user' => $nama,
            'password' => $password,
         );
        $where = array(
            'id_user' => $id_kasir,
        );
        $this->load->model('m_data');
        $res = $this->m_data->Update('tb_user', $data, $where);
        if ($res>0) {
            redirect('Admin/tampil_kasir');
        }
    }

    
    public function insert_kasir(){
        $this->load->model('m_data');
        $data = array(
            'id_user' => $this->input->post('id_user'),
            'nama_user' => $this->input->post('nama'),
            'type' => $this->input->post('type'),
            'password' => $this->input->post('password'),
             'password' => $this->input->post('status'),
             );
        $data = $this->m_data->insert('tb_user', $data);
        redirect('Admin/tampil_kasir');
    }

    function kasir_tambah(){
        $this->load->view('admin/header_admin');
        $this->load->view('admin/kasir_tambah');
        $this->load->view('admin/footer_admin');
    }

    public function delete_kasir($id_user){
        $id_user = array('id_user' => $id_user);
        $this->load->model('m_data');
        $this->m_data->Delete('tb_user', $id_user);
        redirect('Admin/tampil_kasir');
    }


    function pelanggan_edit(){
        $this->load->view('admin/header_admin');
        $this->load->view('admin/pelanggan_edit');
        $this->load->view('admin/footer_admin');
    }

    
    function edit_pelanggan($id_pelanggan){
        $this->load->model('m_data');
        $ks = $this->m_data->GetWhere('tb_pelanggan', array('id_pelanggan' => $id_pelanggan));
        $data = array(
            'id_pelanggan' => $ks[0]['id_pelanggan'],
            'nama' => $ks[0]['nama'],
            'univ' => $ks[0]['univ'],
            'fakultas' => $ks[0]['fakultas'],
            'alamat' => $ks[0]['alamat'],
            'nohp' => $ks[0]['nohp'],
            
            );
        $this->load->view('admin/pelanggan_edit', $data);
        $this->load->view('admin/header_admin');
        $this->load->view('admin/footer_admin'); 
    }

    public function update_pelanggan(){
        $id_pelanggan =$_POST['id_pelanggan'];
        $nama = $_POST['nama'];
        $univ = $_POST['univ'];
        $fakultas = $_POST['fakultas'];
        $alamat = $_POST['alamat'];
        $nohp = $_POST['nohp'];

        $data = array(
            'id_pelanggan' => $id_pelanggan,
            'nama' => $nama,
            'univ' => $univ,
            'fakultas' => $fakultas,
            'alamat' => $alamat,
            'nohp' => $nohp
         );

        $where = array(
            'id_pelanggan' => $id_pelanggan
        );

        $this->load->model('m_data');
        $res = $this->m_data->Update('tb_pelanggan', $data, $where);
        if ($res>0) {
            redirect('Admin/tampil_pelanggan');
        }
    }

    
    public function insert_pelanggan(){
        $this->load->model('m_data');
        $data = array(
            'nama' => $this->input->post('nama'),
            'univ' => $this->input->post('univ'), 
            'fakultas' => $this->input->post('fakultas'),
            'alamat' => $this->input->post('alamat'),
            'nohp' => $this->input->post('nohp'),
             );
        $data = $this->m_data->insert('tb_pelanggan', $data);
        redirect('Admin/tampil_pelanggan');
    }

    function pelanggan_tambah(){
        $this->load->view('admin/header_admin');
        $this->load->view('admin/pelanggan_tambah');
        $this->load->view('admin/footer_admin');
    }

    public function delete_pelanggan($id_pelanggan){
        $id_pelanggan = array('id_pelanggan' => $id_pelanggan);
        $this->load->model('m_data');
        $this->m_data->Delete('tb_pelanggan', $id_pelanggan);
        redirect('Admin/tampil_pelanggan');
    }

   

   function motor_tambah(){
        $data['data'] = $this->m_data->GetData('tb_kendaraan');
        $data['merk'] = $this->m_data->GetData('tb_merk');
        $this->load->view('admin/header_admin');
        $this->load->view('admin/motor_tambah',$data);
        $this->load->view('admin/footer_admin');
    }

    function delete_motor($platnomor){
        $platnomor = array('platnomor' => $platnomor);
        $this->load->model('m_data');
        $this->m_data->Delete('tb_kendaraan', $platnomor);
        redirect('Admin/tampil_motor');
    }
    
    public function insert_motor(){
        $data = array(
            'platnomor' => $this->input->post('platnomor'),
            'id_merk' => $this->input->post('id_merk'),
            'warna' => $this->input->post('warna'),
            'tahunterbit' => $this->input->post('tahun_terbit') 
             );
        $data = $this->m_data->insert('tb_kendaraan', $data);
        redirect('Admin/tampil_motor');
    }

    function edit_motor($platnomor){
        $query = $this->m_data->read('tb_kendaraan', array('platnomor' => $platnomor), null, null);

        foreach($query->result() as $result){
        $data = array(
            'platnomor'=>$result->platnomor,
            'id_merk'=>$result->id_merk,
            'warna'=>$result->warna,
            'tahunterbit'=>$result->tahunterbit);
        }

        $data['data'] = $this->m_data->GetData('tb_kendaraan');
        $data['merk'] = $this->m_data->GetData('tb_merk');
        
    
        $this->load->view('admin/motor_edit', $data);
        $this->load->view('admin/header_admin');
        $this->load->view('admin/footer_admin');
    }
    //getData from databases
    // public function getData($id){
    //     $query = $this->Crud->read('barang', array('idbarang'=>$id), null, null);
    //     foreach($query->result() as $result){
    //         $data = array('nama'=>$result->nama,'idkategori'=>$result->idkategori,'harga'=>$result->harga, 'stock'=>$result->stock, 'deskripsi'=>$result->deskripsi, 'foto'=>$result->foto);
    //         $data['foto'] = '<img src="'.base_url('assets/img/barang/'.$result->foto.'').'" class="img-responsive img-thumbnail" style="max-width:200px;max-height:200px">';
    //         $data['fotoNameOnly'] = $result->foto;
    //     }
    //     header('Content-Type: application/json');
    //     echo json_encode($data);
    // }

     public function update_motor(){
        $platnomor =$_POST['platnomor'];
        $id_merk = $_POST['id_merk'];
        $warna = $_POST['warna'];
        $tahunterbit = $_POST['tahunterbit'];

        $data = array(
            'platnomor' => $platnomor,
            'id_merk' => $id_merk,
            'warna' => $warna,
            'tahunterbit' => $tahunterbit
         );

        $where = array(
            'platnomor' => $platnomor
        );

        $this->load->model('m_data');
        $res = $this->m_data->Update('tb_kendaraan', $data, $where);
        if ($res>0) {
            redirect('Admin/tampil_motor');
        }
    }

    


}

?>