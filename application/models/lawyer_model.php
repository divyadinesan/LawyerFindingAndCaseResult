<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lawyer_model extends CI_Model
 {
public function login_check_model($arrdata)
{
    $this->db->where($arrdata);
    return $this->db->count_all_results('lawyer');
}



public function lawyer_fetch_model()
{
 $email=$this->session->userdata('email');
    $this->db->select('*');
    $this->db->from('lawyer');
    $this->db->where('lawyer_Email',$email);
    return $this->db->get()->result();

}
public function lawyer_update_model($arrdata)
 {
     $email=$this->session->userdata('email');
     $this->db->where('lawyer_Email',$email);
     return $this->db->update('lawyer',$arrdata);
  }
  public function user_case_fetch_model()
  {
    $email=$this->session->userdata('email');
    $this->db->select('*');
    $this->db->from('register_case');
    $this->db->join('user','user.User_email=register_case.client_email');
    $this->db->where('lawyer_email',$email);
    $this->db->where('register_case.case_status','Pending');
    return $this->db->get()->result();
  }
  public function user_case_result_fetch_model()
  {
     $email=$this->session->userdata('email');
    $this->db->select('*');
    $this->db->from('register_case');
    $this->db->join('user','user.User_email=register_case.client_email');
    $this->db->where('lawyer_email',$email);
    $this->db->where('register_case.case_status','Approved');
     $this->db->where('register_case.case_result','Pending');

    return $this->db->get()->result();
  }
  public function client_request_approve_model($register_id,$update)
  {
     $this->db->where('register_id',$register_id);
     return $this->db->update('register_case',$update);
  }

public function client_request_reject_model($register_id,$update)
  {
     $this->db->where('register_id',$register_id);
     return $this->db->update('register_case',$update);
  }



public function case_result_model($register_id,$update)
  {
     $this->db->where('register_id',$register_id);
     return $this->db->update('register_case',$update);
  }













 }