<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matpel_Model extends CI_Model {

	
	public function get_data($table)
	{
        return $this->db->get($table);

	}
	public function insert_data($data,$table){
		$this->db->insert($table,$data);
	}
	public function update_data($data,$table){
		$this->db->Where ('id_matpel',$data['id_matpel']);
		$this->db->update($table,$data);
	}
	public function delete_data($where,$table){
		$this->db->Where ($where);
		$this->db->delete($table);
	}
}
