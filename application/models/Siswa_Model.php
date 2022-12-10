<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_Model extends CI_Model {

	
	public function get_data($table)
	{
        return $this->db->get($table);

	}
	public function insert_data($data,$table){
		$this->db->insert($table,$data);
	}
	public function update_data($data,$table){
		$this->db->Where ('id_siswa',$data['id_siswa']);
		$this->db->update($table,$data);
	}
	public function delete_data($where,$table){
		$this->db->Where ($where);
		$this->db->delete($table);
	}

}
