<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct()
    {
        //function yang pertama dijalankan 
        parent ::__construct();
        $this->load->model('Register_Model');

    }
	
	public function index()
	{
		
        $data['title']='Register';
        $data['Register']=$this -> Register_Model-> get_data('admin')->result();
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar',$data);
        $this->load->view('Matpel',$data);
       $this->load->view('template/footer',$data);
    }
    public function Tambah(){
        $data['title']='Tambah Matpel';
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar',$data);
        $this->load->view('tambah_matpel',$data);
       $this->load->view('template/footer',$data);
    }
    public function tambah_aksi(){
   
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
           $this->tambah();
        } else {
         $data = array(
           'kode_matpel' => $this->input->post('kode_matpel'),
           'nama_matpel' => $this->input->post('nama_matpel'),
         );
         $this->Matpel_Model->insert_data($data, 'matpel');
         $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil Di Tambahkan!
            <button type="button" class="close"
            data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('matpel'); 
        }

    }

    public function edit($id_matpel){
   
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
           $this->tambah();
        } else {
         $data = array(
           'id_matpel' => $id_matpel,
           'kode_matpel' => $this->input->post('kode_matpel'),
           'nama_matpel' => $this->input->post('nama_matpel'),
         );
         $this->Matpel_Model->update_data($data, 'matpel');
         $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil Di Ubah!
            <button type="button" class="close"
            data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('matpel'); 
        }
    }

    public function delete($id_matpel){
        $where = array('id_matpel'=>$id_matpel);
        $this->Matpel_Model->delete_data($where, 'matpel');
         $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil Di Hapus!
            <button type="button" class="close"
            data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('matpel');
    }

    public function _rules(){
        $this->form_validation->set_rules('kode_matpel', 'Kode Matpel', 'required',array(
            'required' => '%s Harus di isi'
        )); $this->form_validation->set_rules('nama_matpel', 'Nama Matpel', 'required',array(
            'required' => '%s Harus di isi'
        ));
    }
}
