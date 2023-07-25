<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	
	public function register_insert_model($arrdata)
	{
		return $this->db->insert('admin',$arrdata);
	}
	public function login_insert_model($arrdata)
	{
		$this->db->where($arrdata);
		return $this->db->count_all_results('admin');
	}
	public function admin_fetch_model()
	{
		$email=$this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('admin_email',$email);
		return $this->db->get()->result();
	}
}