<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lawyer_controller extends CI_Controller {

public function index()
{
   $this->load->view('User/index');
}
   public function lawyer_login()
   {
    $this->load->view('lawyer/lawyer_login');
   }

   public function login_check()
{
   $lawyer_Email=$this->input->post('lawyer_Email');
   $password=$this->input->post('password');
   $arrdata=array('lawyer_Email'=>$lawyer_Email,'Password'=>$password);
   $this->load->model('lawyer_model');
   $count=$this->lawyer_model->login_check_model($arrdata);
   if($count>0)
   {
         echo"<script>alert('successfully ')</script>";
          $this->session->set_userdata('email',$lawyer_Email);
            $this->my_profile();
   }
   else
   {
      echo"<script>alert('Try Again!!')</script>";
            $this->index();

   }
}
// public function lawyer_home()
// {
//    if($this->session->has_userdata('email'))
//     {
      
//       $this->load->view('Lawyer/lawyer_home');
//    }
//    else
//    {
//       $this->index();
//    }
// }

public function client_request()
{
   if($this->session->has_userdata('email'))
    {
      $this->load->model('lawyer_model');
      $arrdata['case']=$this->lawyer_model->user_case_fetch_model();
      $this->load->view('Lawyer/client_request',$arrdata); 
    }
   else
   {
      $this->index();
   }
}

public function client_request_approve($register_id)
{
   $update=array('case_status'=>'Approved');

   $this->load->model('lawyer_model');
   $execute=$this->lawyer_model->client_request_approve_model($register_id,$update);
   if($execute==1)
   {
        echo"<script>alert('Approved successfully ')</script>";
            $this->client_request();
   }
   else
   {
      echo"<script>alert('Try Again')</script>";
            $this->client_request();
   }
}

public function client_request_reject($register_id)
{
   $update=array('case_status'=>'Reject');

   $this->load->model('lawyer_model');
   $execute=$this->lawyer_model->client_request_reject_model($register_id,$update);
   if($execute==1)
   {
        echo"<script>alert('Reject successfully ')</script>";
            $this->client_request();
   }
   else
   {
      echo"<script>alert('Try Again')</script>";
            $this->client_request();
   }
}







public function my_profile()
{
   if($this->session->has_userdata('email'))
   {
      $this->load->model('lawyer_model');
      $arrdata['lawyer']=$this->lawyer_model->lawyer_fetch_model();
      $this->load->view('Lawyer/my_profile',$arrdata);
    }
    else
    {
      $this->index();
    }

} 
public function my_profile_update()
      {

         $name=$this->input->post('lawyer_name');
        $Password=$this->input->post('Password');
        $Age=$this->input->post('Age');
        $Gender=$this->input->post('Gender');
        $Number_of_Case_win=$this->input->post('Number_of_Case_win');
        $Number_of_Case_fail=$this->input->post('Number_of_Case_fail');
        $section_id=$this->input->post('section_id');
        $Total_case=$this->input->post('Total_case');
        $lawyer_contact_no=$this->input->post('lawyer_contact_no');
        $lawyer_experience=$this->input->post('lawyer_experience');
        $lawyer_fee=$this->input->post('lawyer_fee');
        
        $arrdata=array('lawyer_name'=>$name,'password'=>$Password,'Age'=>$Age,'Gender'=>$Gender,'Number_of_Case_win'=>$Number_of_Case_win,'Number_of_Case_fail'=>$Number_of_Case_fail,'section_id'=>$section_id,'Total_case'=>$Total_case,'lawyer_contact_no'=>$lawyer_contact_no,'lawyer_experience'=>$lawyer_experience,);
        $this->load->model('Lawyer_model');
        $execute=$this->Lawyer_model->lawyer_update_model($arrdata);
        if($execute==1)
        {
        echo"<script>alert('Password successfully updated')</script>";
        $this->my_profile();

        }
                 else

        {
           echo"<script>alert('Try Again!!')</script>";
           $this->my_profile();
         }
 }

public function logout()
{
   $this->session->sess_destroy();
   $this->index();
}
     

public function Case_result_status()
  {
   $this->load->model('lawyer_model');
      $arrdata['case']=$this->lawyer_model->user_case_result_fetch_model();
    $this->load->view('Lawyer/Case_result_status',$arrdata);
  }    


public function case_result_win($register_id)
{
   $update=array('case_result'=>'Win');

   $this->load->model('lawyer_model');
   $execute=$this->lawyer_model->case_result_model($register_id,$update);
   if($execute==1)
   {
        echo"<script>alert('Case Win')</script>";
            $this->Case_result_status();
   }
   else
   {
      echo"<script>alert('Try Again')</script>";
            $this->Case_result_status();
   }
}

public function case_result_fail($register_id)

{
   $update=array('case_result'=>'Fail');

   $this->load->model('lawyer_model');
   $execute=$this->lawyer_model->case_result_model($register_id,$update);
   if($execute==1)
   {
        echo"<script>alert('Case Fail ')</script>";
            $this->Case_result_status();
   }
   else
   {
      echo"<script>alert('Try Again')</script>";
            $this->Case_result_status();
   }
}














}