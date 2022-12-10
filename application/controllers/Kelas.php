<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

    public function __construct()
    {
        //function yang pertama dijalankan 
        parent ::__construct();
        $this->load->model('Kelas_Model');

    }
	
	public function index()
	{
		
        $data['title']='Kelas';
        $data['Kelas']=$this -> Kelas_Model-> get_data('kelas')->result();
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar',$data);
        $this->load->view('Kelas',$data);
       $this->load->view('template/footer',$data);
    }
    
    public function Tambah(){
        $data['title']='Tambah Kelas';
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar',$data);
        $this->load->view('tambah_kelas',$data);
       $this->load->view('template/footer',$data);
    }
    public function tambah_aksi(){
   
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
           $this->tambah();
        } else {
         $data = array(
           'kode_kelas' => $this->input->post('kode_kelas'),
           'kelas' => $this->input->post('kelas'),
           'jurusan' => $this->input->post('jurusan'),
         );
         $this->Kelas_Model->insert_data($data, 'kelas');
         $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil Di Tambahkan!
            <button type="button" class="close"
            data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('kelas'); 
        }

    }

    public function edit($id_kelas){
   
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
           $this->tambah();
        } else {
         $data = array(
           'id_kelas' => $id_kelas, 
           'kode_kelas' => $this->input->post('kode_kelas'),
           'kelas' => $this->input->post('kelas'),
           'jurusan' => $this->input->post('jurusan'),
         );
         $this->Kelas_Model->update_data($data, 'kelas');
         $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil Di Ubah!
            <button type="button" class="close"
            data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('kelas'); 
        }

    }

    public function pdf()
    {
        $data['Kelas'] = $this->Kelas_Model->get_data('kelas')->result();
        $this->load->library('pdf');
        $this->pdf->setPaper('A4','landscape');
        $this->pdf->filename="laporan-data-kelas.pdf";
        $this->pdf->load_view('laporan_kelas', $data);
    }

    public function delete($id_kelas){
        $where = array('id_kelas'=>$id_kelas);
        $this->Kelas_Model->delete_data($where, 'kelas');
         $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil Di Hapus!
            <button type="button" class="close"
            data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('kelas');
        
    }

    public function _rules(){
        $this->form_validation->set_rules('kode_kelas', 'Kode Kelas', 'required',array(
            'required' => '%s Harus di isi'
        ));
        $this->form_validation->set_rules('kelas', 'Kelas', 'required', array(
            'required' => '%s Harus di isi'
        ));
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required', array(
            'required' => '%s Harus di isi'
        ));
    }

}
