<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class  Kasir extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('m_data');
        $this->load->library('session');

         if($this->session->userdata('kasir_is_logged_in')=='')
    {
     $this->session->set_flashdata('msg','Please Login to Continue');
     redirect('login');
   }
        
    }
    

    function index(){

        $query = $this->m_data->getKendaraan();
        $data['motor'] = null;
        if($query){
         $data['motor'] =  $query;
        }
        $query = $this->m_data->getTarif();
        $data['tarif'] = null;
        if($query){
         $data['tarif'] =  $query;

        }
        
        $data['data']=$this->m_data->GetData('tb_pelanggan');
        
        $this->load->view('kasir/header_kasir');
        $this->load->view('kasir/home_kasir',$data);
    }
    function loadata(){
        $data['id_transaksi']=$this->input->post('id_transaksi');
        $data['tgl_transaksi']=$this->input->post('tgl_transaksi');
        $data['id_Pelanggan']=$this->input->post('id_Pelanggan');
        $data['id_Kendaraan']=$this->input->post('id_Kendaraan');
        $data['id_Tarif']=$this->input->post('id_Tarif');
        $data['jamrental']=$this->input->post('masuk');
    }
    public function insert_transaksi(){
        $this->load->model('R_transaksi');
        $data = array(
            'id_transaksi' => $this->input->post('id_transaksi'),
            'id_kasir' => $this->input->post('id_kasir'),
            'tgl_transaksi' => $this->input->post('tgl_transaksi'),
            'id_pelanggan' => $this->input->post('id_Pelanggan'),
            'platnomor' => $this->input->post('id_Kendaraan'),
            'jam_rental'=>$this->input->post('masuk'),
            'tgl_kembali'=>$this->input->post('masuk'),
            'jam_kembali'=>$this->input->post('masuk'),
            'id_tarif'=>$this->input->post('id_Tarif'),
            'transaksi_total' => $this->input->post('transaksi_total'),
            'transaksi_status' => $this->input->post('"mulai"')
             );
        $data = $this->R_transaksi->insert('tb_transaksi', $data);
        redirect(base_url(),'refresh');
    }
    public function get_tarif(){
        $data=$this->m_data->get_rincian_tarif($this->input->post('id'));
        echo json_encode($data);
    }
    function cetak(){
        $data['tgl_transaksi']=$this->input->post('tgl_transaksi');
        $data['id_Pelanggan']=$this->input->post('id_Pelanggan');
        $data['id_Kendaraan']=$this->input->post('id_Kendaraan');
        $data['id_Tarif']=$this->input->post('id_Tarif');
        $data['jamrental']=$this->input->post('masuk');
        $data['jamkembali']=$this->input->post('keluar');
        
        

        $html=$this->load->view('kasir/nota', $data, true);
        $pdfFilePath = "output_pdf_name.pdf";
 
        //load mPDF library
        $this->load->library('m_pdf');
 
       //generate the PDF from the given html
        $this->m_pdf->pdf->WriteHTML($html);
 
        //download it.
        // $this->m_pdf->pdf->Output($pdfFilePath, "D");
        $this->m_pdf->pdf->Output();   
    }
    function get_tanggal(){
        date_default_timezone_get('Asia/Jakarta');
        $lama=$this->input->post('lama');
        $tambah_tanggal=mktime(0,0,0,date('H')+$lama);
        $data['tgl_kembali']=date('d-m-Y',$tambah_tanggal);
        
    }
}