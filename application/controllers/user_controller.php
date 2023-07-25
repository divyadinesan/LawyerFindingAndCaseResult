<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_controller extends CI_Controller {

public function index()
{
	$this->load->view('User/index');
}
public function user_login()
{
	$this->load->view('User/user_login');
}
public function user_register()
{
	$this->load->view('User/user_register');
}
public function Admin_login()
{
	$this->load->view('Admin_controller/login');
}
public function contact()
{
	$this->load->view('User/contact');
}
public function about_us()
{
	$this->load->view('User/about_us');
}
public function user_register_insert()
{
	$name=$this->input->post('U_name');
	$age=$this->input->post('age');
	$address=$this->input->post('address');
	$phone=$this->input->post('phone');
	$email=$this->input->post('email');
	$password=$this->input->post('password');
    $arrdata=array('User_name'=>$name,'User_age'=>$age,'User_address'=>$address,'User_phone'=>$phone,'User_email'=>$email,'User_password'=>$password);
      	$this->load->model('user_model');
      	$excute=$this->user_model->user_register_insert_model($arrdata);
      	if($excute==1)
      	{
      		echo"<script>alert('successfully')</script>";
      		$this->user_login();

      	}
        else
        {
      		echo"<script>alert('Try Again!!')</script>";
      		$this->user_register();
      	}
}


public function login_check()
{
	$email=$this->input->post('email');
	$password=$this->input->post('password');
	$arrdata=array('User_email'=>$email,'User_password'=>$password);
	$this->load->model('user_model');
	$count=$this->user_model->login_check_model($arrdata);
	if($count>0)
	{
			echo"<script>alert('successfully ')</script>";
			 $this->session->set_userdata('email',$email);
      		$this->user_home();
	}
	else
	{
		echo"<script>alert('Try Again!!')</script>";
      		$this->user_login();

	}

}


public function user_home()
{
	if($this->session->has_userdata('email'))
    {
		$this->load->model('user_model');
		$arrdata['section']=$this->user_model->section_fetch_model();
		$this->load->view('user/user_home',$arrdata);
	}
	else
	{
		$this->index();
	}
}

public function lawyer($section_id)
{
	if($this->session->has_userdata('email'))
    {
		$this->load->model('user_model');
		$arrdata['lawyer']=$this->user_model->lawyer_fech_model($section_id);
		$this->load->view('User/lawyer',$arrdata);
	}
	else
	{
		$this->index();
	}
}

public function Register_case($lawyer_id)
{
	if($this->session->has_userdata('email'))
    {
    	$this->load->model('user_model');
    	$arrdata['lawyer']=$this->user_model->lawyer_id_model($lawyer_id);
    	$arrdata['user']=$this->user_model->user_fetchh_model();
		$this->load->view('user/Register_case',$arrdata);
	}
	else
	{
		$this->index();
	}
}
public function case_registration()
{
	
	$lawyer_email=$this->input->post('lawyer_email');
	echo $section_id=$this->input->post('section_id');
	$client_email=$this->input->post('client_email');
    $case_description=$this->input->post('case_description');
    $case_status=$this->input->post('pending');
    $case_result=$this->input->post('pending');
    $arrdata=array('lawyer_email'=>$lawyer_email,'section_id'=>$section_id,'client_email'=>$client_email,'case_description'=>$case_description,'case_status'=>'Pending','fee_status'=>'Pending','case_result'=>'Pending');
     $this->load->model('user_model');
    $excute=$this->user_model->case_regist($arrdata);
	if($excute==1)
      	{
      		echo"<script>alert('successfully')</script>";
      		$this->my_case();

      	}
        else
        {
      		echo"<script>alert('Try Again!!')</script>";
      		$this->user_home();
      	}
}

public function my_profile()
{
	if($this->session->has_userdata('email'))
	{
	$this->load->model('user_model');
	$arrdata['user']=$this->user_model->user_fetch_model();
	$this->load->view('user/my_profile',$arrdata);
    }
    else
    {
    	$this->index();
    }
} 
public function update_details()
     {
  $name=$this->input->post('User_name');
	$age=$this->input->post('User_age');
	$address=$this->input->post('User_address');
	$phone=$this->input->post('User_phone');
	$password=$this->input->post('User_password');
    $arrdata=array('User_name'=>$name,'User_age'=>$age,'User_address'=>$address,'User_phone'=>$phone,'User_password'=>$password);
        $this->load->model('user_model');       
        $execute=$this->user_model->user_details_model($arrdata);        
        if($execute==1)         
          {


          echo"<script>alert('successfully updated')</script>";
          $this->my_profile();

        }
        else
        {
          echo"<script>alert('Try Again!!')</script>";
          $this->my_profile();
        }
}

public function my_case()
{
	if($this->session->has_userdata('email'))
	{
		$this->load->model('user_model');
		$arrdata['case']=$this->user_model->my_case_model();
		$this->load->view('user/my_case',$arrdata);
	}
    else
    {
    	$this->index();
    }
}
public function logout()
  {
        $this->session->sess_destroy();
        $this->index();
  }

public function Payment($register_id)
  {
  	$this->load->model('user_model');
  	$arrdata['case']=$this->user_model->register_case_id_fetch_model($register_id);
    $this->load->view('user/Payment',$arrdata);
  }





public function payment_dt()
{
	
	  $user_email=$this->input->post('user_email');
    $lawyer_email=$this->input->post('lawyer_email');
	  $register_id=$this->input->post('register_id');
    $card_name=$this->input->post('card_name');
    $card_no=$this->input->post('card_no');
    $cvc=$this->input->post('cvc');
    $expire_date=$this->input->post('expire_date');

    $arrdata=array('user_email'=>$user_email,'lawyer_email'=>$lawyer_email,'register_id'=>$register_id,'card_name'=>$card_name,'card_no'=>$card_no,'cvc'=>$cvc,'expire_date'=>$expire_date);
     $this->load->model('user_model');
    $execute=$this->user_model->pay($arrdata);
	  if($execute==1)
      	{
      		$payed=array('fee_status'=>'Payed');
      		$this->load->model('user_model');
    			$execute1=$this->user_model->pay_update_model($payed,$register_id);
    			if($execute1)
    			{
      		echo"<script>alert('Payment Completed')</script>";
      		$this->my_case();
      		}
      		else
      		{
      			// echo"<script>alert('Try Again!!')</script>";
      		$this->my_case();
      		}

      	}
        else
        {
      		echo"<script>alert('Try Again!!')</script>";
      		$this->my_case();
      	}
}

public function case_result()
  {
  	$this->load->model('user_model');
		$arrdata['case']=$this->user_model->my_case_model();
    $this->load->view('user/case_result',$arrdata);
  }

// public function case_result()
// {
// 	if($this->session->has_userdata('email'))
// 	{
// 		$this->load->model('user_model');
// 		$arrdata['case']=$this->user_model->case_result_model();
// 		$this->load->view('user/case_result',$arrdata);
// 	}
//     else
//     {
//     	$this->index();
//     }
// }
}