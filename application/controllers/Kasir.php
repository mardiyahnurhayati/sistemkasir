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

    public function insert_transaksi(){
        $this->load->model('m_data');
        $data = array(
            'id_transaksi' => $this->input->post('id_transaksi'),
            'id_kasir' => $this->session->userdata('id_kasir'),
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
        $data = $this->m_data->insert('tb_transaksi', $data);
        redirect(base_url(),'refresh');
    }
    public function get_tarif(){
        $data=$this->m_data->get_rincian_tarif($this->input->post('id'));
        echo json_encode($data);
    }
    function cetak(){
         $this->load->model('m_data');
        $data = array(
            'id_kasir' => $this->session->userdata('Kasir_id'),
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
        $data = $this->m_data->insert('tb_transaksi', $data);
        $last_insert_id=$this->db->insert_id();
        
        $data=$this->m_data->get_rincian_tarif($last_insert_id);

        $html=$this->load->view('kasir/nota',$data, true);
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
    function pelanggan(){
        $this->load->view('kasir/header_kasir');
        $this->load->view('kasir/tambah_pelanggan');
    }
    public function insert_pelanggan(){
        $this->load->model('m_data');
        $data = array(
            'nama' => $this->input->post('nama'),
            'univ' => $this->input->post('univ'), 
            'fakultas' => $this->input->post('fakultas'),
            'alamat' => $this->input->post('alamat'),
            'nohp' => $this->input->post('hp'),
             );
        $data = $this->m_data->insert('tb_pelanggan', $data);
        redirect('Kasir');
    }
}