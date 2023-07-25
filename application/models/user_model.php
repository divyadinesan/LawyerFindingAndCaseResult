<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model
 {

public function user_register_insert_model($arrdata)
{
	return $this->db->insert('user',$arrdata);
}
public function login_check_model($arrdata)
{
	$this->db->where($arrdata);
	return $this->db->count_all_results('user');
}
public function section_fetch_model()
{
	$this->db->select('*');
	$this->db->from('section');
	return $this->db->get()->result();
}


public function lawyer_fech_model($section_id)
{
	$this->db->select('*');
	$this->db->from('lawyer');
	$this->db->where('section_id',$section_id);
	return $this->db->get()->result();
}
public function lawyer_id_model($lawyer_id)
{
	$this->db->select('*');
	$this->db->from('lawyer');
	$this->db->where('lawyer_id',$lawyer_id);
	return $this->db->get()->result();
}

public function user_fetch_model()
{
	$email=$this->session->userdata('email');
	$this->db->select('*');
	$this->db->from('user');
	$this->db->where('User_email',$email);
	return $this->db->get()->result();
}
public function case_regist($arrdata)
{
	return $this->db->insert('register_case',$arrdata);
}

 public function user_fetchh_model()
 {
 	$email=$this->session->userdata('email');
 	$this->db->select('*');
 	$this->db->from('user');
 	$this->db->where('User_email',$email);
 	return $this->db->get()->result();
 }
public function user_details_model($arrdata) 
{
 	$email=$this->session->userdata('email');
 	$this->db->where('User_email',$email);
 	return $this->db->update('user',$arrdata);
 }
 public function my_case_model()
 {
 	$email=$this->session->userdata('email');
 	$this->db->select('*');
 	$this->db->from('register_case');
 	$this->db->join('lawyer','lawyer.lawyer_Email=register_case.lawyer_email');
 	$this->db->join('section','section.section_id=register_case.section_id');
 	$this->db->where('client_email',$email);
 	return $this->db->get()->result();
 }
 public function register_case_id_fetch_model($register_id)
 {

 	$this->db->select('*');
 	$this->db->from('register_case');
 	 $this->db->join('lawyer','lawyer.lawyer_Email=register_case.lawyer_email');
 	
 	$this->db->where('register_id',$register_id);
 	return $this->db->get()->result();
 }


public function pay($arrdata)
{
	return $this->db->insert('payment',$arrdata);
}

public function pay_update_model($payed,$register_id)
{
	$this->db->where('register_id',$register_id);
 	return $this->db->update('register_case',$payed);
}


public function case_result_model()
 {
 	$email=$this->session->userdata('email');
 	$this->db->select('*');
 	$this->db->from('register_case');
 	$this->db->join('lawyer','lawyer.lawyer_Email=register_case.lawyer_email');
 	$this->db->join('section','section.section_id=register_case.section_id');
 	$this->db->where('client_email',$email);
 	return $this->db->get()->result();
 }










}