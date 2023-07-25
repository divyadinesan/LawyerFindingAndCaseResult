<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model{

public function register_insert_model($arrdata)
{
	return $this->db->insert('admin',$arrdata);
}
public function login_insert_model($arrdata)
{
	$this->db->where($arrdata);
	return $this->db->count_all_results('admin');
}
public function Admin_fetch_model()
{
	$email=$this->session->userdata('email');
	$this->db->select('*');
	$this->db->from('admin');
	$this->db->where('Admin_Email',$email);
	return $this->db->get()->result();
	
}
// public function admin_update_model($arrdata)
// {
// 	$email=$this->session->userdata('Admin_email');
// 	$this->db->where('Admin_Email',$email);
// 	return $this->db->update('admin',$arrdata);
// }
public function section_insert_model($Arrsave)
{
	return $this->db->insert('section',$Arrsave);
}


public function section_model()
{
	
	$this->db->select('*');
	$this->db->from('section');
	return $this->db->get()->result();
	
}
public function lawyer_insert_model($Arrsave)
{
	return $this->db->insert('lawyer',$Arrsave);
}
public function User_Details_model()
{
	$this->db->select('*');
	$this->db->from('user');
	return $this->db->get()->result();
}
public function Manage_section_model()
{
	$this->db->select('*');
	$this->db->from('section');
	return $this->db->get()->result();
}


public function Manage_lawyer_model()
{
	$this->db->select('*');
	$this->db->from('lawyer');
	$this->db->join('section','section.section_id=lawyer.section_id');
	return $this->db->get()->result();
}


public function Registed_case_model()
{
	$this->db->select('*');
	$this->db->from('register_case');
	$this->db->join('user','user.User_email=register_case.client_email');
	$this->db->join('lawyer','lawyer.lawyer_Email=register_case.lawyer_email');
	$this->db->join('section','section.section_id=register_case.section_id');
	return $this->db->get()->result();
}

public function admin_fetchh_model()
 {
  $email=$this->session->userdata('email');
  $this->db->select('*');
  $this->db->from('Admin');
  $this->db->where('admin_email',$email);
  return $this->db->get()->result();
 }

public function change_password_model($arrdata)
{
 	$email=$this->session->userdata('email');
 	$this->db->where('admin_email',$email);
 	return $this->db->update('admin',$arrdata);
 }








public function payment_model()
{
	$this->db->select('*');
	$this->db->from('payment');
	$this->db->join('user','payment.user_email=user.User_email');
	$this->db->join('lawyer','lawyer.lawyer_Email=payment.lawyer_email');
	return $this->db->get()->result();
	
}
public function lawyer_edit_fetchh_model($lawyer_id)
{
  $this->db->select('*');
  $this->db->from('lawyer');
  $this->db->where('lawyer_id',$lawyer_id);
  return $this->db->get()->result();
}
public function section_fetchh_model($section_id)
{
	$this->db->select('*');
  $this->db->from('section');
  $this->db->where('section_id',$section_id);
  return $this->db->get()->result();

}
public function lawyer_delete_model($lawyer_id)
{
	 $this->db->where('lawyer_id',$lawyer_id);
	 return $this->db->delete('lawyer');
}
public function section_delete_model($section_id)
{
		 $this->db->where('section_id',$section_id);
	 return $this->db->delete('section');
}

public function section_id_update_model($result,$section_id)
{

		 $this->db->where('section_id',$section_id);
	 return $this->db->update('section',$result);
}

public function lawyer_update_model($Arrsave,$lawyer_id)
{
	 $this->db->where('lawyer_id',$lawyer_id);
	 return $this->db->update('lawyer',$Arrsave);
}



}

