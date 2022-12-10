<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class jurusan extends CI_Controller {

    public function __construct()
    {
        //function yang pertama dijalankan 
        parent ::__construct();
        $this->load->model('Jurusan_Model');

    }
	
	public function index()
	{
		
        $data['title']='Jurusan';
        $data['Jurusan']=$this -> Jurusan_Model-> get_data('jurusan')->result();
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar',$data);
        $this->load->view('Jurusan',$data);
       $this->load->view('template/footer',$data);
    }
    
    public function Tambah(){
        $data['title']='Tambah Jurusan';
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar',$data);
        $this->load->view('tambah_jurusan',$data);
       $this->load->view('template/footer',$data);
    }
    public function tambah_aksi(){
   
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
           $this->tambah();
        } else {
         $data = array(
           'kode_jurusan' => $this->input->post('kode_jurusan'),
           'nama_jurusan' => $this->input->post('nama_jurusan'),
         );
         $this->Jurusan_Model->insert_data($data, 'jurusan');
         $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil Di Tambahkan!
            <button type="button" class="close"
            data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('jurusan'); 
        }

    }

    public function edit($id_jurusan){
   
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
           $this->tambah();
        } else {
         $data = array(
           'id_jurusan' => $id_jurusan, 
           'kode_jurusan' => $this->input->post('kode_jurusan'),
           'nama_jurusan' => $this->input->post('nama_jurusan'),
         );
         $this->Jurusan_Model->update_data($data, 'jurusan');
         $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil Di Ubah!
            <button type="button" class="close"
            data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('jurusan'); 
        }

    }

    public function pdf()
    {
        $data['Jurusan'] = $this->Jurusan_Model->get_data('jurusan')->result();
        $this->load->library('pdf');
        $this->pdf->setPaper('A4','landscape');
        $this->pdf->filename="laporan-data-jurusan.pdf";
        $this->pdf->load_view('laporan_jurusan', $data);
    }

    public function delete($id_jurusan){
        $where = array('id_jurusan'=>$id_jurusan);
        $this->Jurusan_Model->delete_data($where, 'jurusan');
         $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil Di Hapus!
            <button type="button" class="close"
            data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('jurusan');
        
    }

    public function _rules(){
        $this->form_validation->set_rules('kode_jurusan', 'Kode Jurusan', 'required',array(
            'required' => '%s Harus di isi'
        ));
        $this->form_validation->set_rules('nama_jurusan', 'Nama Jurusan', 'required', array(
            'required' => '%s Harus di isi'
        ));
    }

}
