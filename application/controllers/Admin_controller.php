<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {

   public function index()
      {
        $this->load->view('user/index');

      }
	 public function register()
	 {
	 	$this->load->view('Admin/register');
	 }
	 public function login()
	 {
	 	$this->load->view('User/Admin_login');
	 }
	 public function register_insert()
      {
      	 $name=$this->input->post('name');
      	 $email=$this->input->post('email');
      	 $password=$this->input->post('password');
      	$arrdata=array('Admin_name'=>$name,'Admin_email'=>$email,'Admin_password'=>$password);
      	$this->load->model('Admin_model');
      	$excute=$this->Admin_model->register_insert_model($arrdata);
      	if($excute==1)
      	{
      		echo"<script>alert('registered successfully')</script>";
      		$this->login();

      	}
        else
        {
      		echo"<script>alert('Try Again!!')</script>";
      		$this->register();
      	}
      }

      public function login_insert()
      {
        $email=$this->input->post('email');
        $password=$this->input->post('password');
        $arrdata=array('Admin_email'=>$email,'Admin_password'=>$password);
        $this->load->model('Admin_model');
        $count=$this->Admin_model->login_insert_model($arrdata);
        if($count>0)
        {
          echo"<script>alert('login successfully')</script>";
          $this->session->set_userdata('email',$email);
          $this->change_password();

        }
        else
        {
         echo"<script>alert('Failed To Login')</script>";
          $this->login();
        }

      }
      
      public function home()
      {
         if($this->session->has_userdata('email'))
          {
            $this->load->view('Admin/home');
          }
          else
          {
            $this->login();
          }
      }
     
     public function Admin_profile()
     {
       if($this->session->has_userdata('Admin_email'))
        {
           $this->load->model('Admin_model');
           $arrdata['admin']=$this->Admin_model->admin_fetch_model();
           $this->load->view('Admin/Admin_profile',$Arrdata);
        }
        else
        {
         $this->login();
        }
     }
    
   // public function section()
   // {
   //  $this->load->view('Admin/Add_Section');
   // }
//       public function update_pasword()
//       {
//         $password=$this->input->post('new_password');
//         $arrdata=array('Admin_password'=>password);
//         $this->load->model('Admin_model');
//         $excute=$this->Admin_model->admin_update_model($arrdata);
//         if($execute==1)
//           {
//           echo"<script>alert('Password successfully updated')</script>";
//           $this->login();

//         }
//         else
//         {
//           echo"<script>alert('Try Again!!')</script>";
//           $this->Admin_profile();
//         }
// }
   public function Add_section()
      {
         if($this->session->has_userdata('email'))
          {
            $this->load->view('Admin/Add_section');
          }
          else
          {
            $this->login();
          }
      }

      public function Add_Section_insert()
      {
        $name=$this->input->post('name');
        $image1=$_FILES['image']['name'];
        $time1 = Time();
        $images1 = explode('.',$image1);
        $photo1 =$time1.'.'.end($images1);
        $config1['upload_path']= './Asset/Admin/section/';
        $config1['allowed_types']= 'jpg|png|jpeg';
        $config1['file_name'] = $photo1;
        $this->load->library('upload', $config1);
        $this->upload->initialize($config1);
            if( $this->upload->do_upload('image'))
            {
              $Arrsave=array('section_name'=>$name,'section_image'=>$photo1);
                $this->load->model('Admin_model');
                $var=$this->Admin_model->section_insert_model($Arrsave);
                if($var==1)
                {

                    echo "<script>alert(' successfully Added')</script>";
                    $this->Add_section();

                    }
                    else
                    {
                    echo "<script>alert('try again')</script>";
                    $this->Add_section();

                    }

            }
            else
            {
            echo "<script>alert('Invalid Image')</script>";
            $this->Add_section();
            }
       
      }
       public function lawyer()
       {
        $this->load->model('Admin_model');
        $arrdata['section']=$this->Admin_model->section_model();
        $this->load->view('Admin/lawyer',$arrdata);
       }
public function Add_lawyer_insert()
      {
        $name=$this->input->post('name');
        $password=$this->input->post('password');
        $email=$this->input->post('email');
        $age=$this->input->post('age');
        $gender=$this->input->post('gender');
        $case_win=$this->input->post('case_win');
        $case_fail=$this->input->post('case_fail');
        $section_id=$this->input->post('section_id');
        $lawyer_contact_on=$this->input->post('lawyer_contact_on');
        $lawyer_experience=$this->input->post('lawyer_experience');
        $lawyer_fee=$this->input->post('lawyer_fee');
        $total_case=$this->input->post('total_case');
        $image1=$_FILES['image']['name'];
        $time1 = Time();
        $images1 = explode('.',$image1);
        $photo1 =$time1.'.'.end($images1);
        $config1['upload_path']= './Asset/Admin/lawyer/';
        $config1['allowed_types']= 'jpg|png|jpeg';
        $config1['file_name'] = $photo1;
        $this->load->library('upload', $config1);
        $this->upload->initialize($config1);
            if( $this->upload->do_upload('image'))
            {
              $Arrsave=array('lawyer_name'=>$name,'lawyer_image'=>$photo1,'Password'=>$password,'Lawyer_Email'=>$email,'Age'=>$age,'Gender'=>$gender,'Number_of_Case_win'=>$case_win,'Number_of_Case_fail'=>$case_fail,'section_id'=>$section_id,'Total_case'=>$total_case,'lawyer_contact_no'=>$lawyer_contact_on,'lawyer_experience'=>$lawyer_experience,'lawyer_fee'=>$lawyer_fee);
                $this->load->model('Admin_model');
                $var=$this->Admin_model->lawyer_insert_model($Arrsave);
                if($var==1)
                {

                    echo "<script>alert(' successfully Added')</script>";
                    $this->lawyer();

                    }
                    else
                    {
                    echo "<script>alert('try again')</script>";
                    $this->lawyer();

                    }
                }
      }
  public function User_Details()
  {
        $this->load->model('Admin_model');
        $arrdata['User_Details']=$this->Admin_model->User_Details_model();
        $this->load->view('Admin/User_Details',$arrdata);
  }    
 public function logout()
  {
        $this->session->sess_destroy();
        $this->index();
  }

   
public function Manage_section()
  {
        $this->load->model('Admin_model');
        $arrdata['Manage_section']=$this->Admin_model->Manage_section_model();
        $this->load->view('Admin/Manage_section',$arrdata);
  }    
public function Manage_lawyer()
  {
    if($this->session->has_userdata('email'))
    {
        $this->load->model('Admin_model');
        $arrdata['lawyer']=$this->Admin_model->Manage_lawyer_model();
        $this->load->view('Admin/Manage_lawyer',$arrdata);
    }    

   else
   {
      $this->index();
   }
}



public function Registed_case()
  {
        $this->load->model('Admin_model');
        $arrdata['case']=$this->Admin_model->Registed_case_model();
        $this->load->view('Admin/Registed_case',$arrdata);
  }    

public function Payment_details()
  {
    $this->load->model('Admin_model');
     $arrdata['payment']=$this->Admin_model->payment_model();
    $this->load->view('Admin/Payment_details',$arrdata);
  }    

public function change_password()
{
  if($this->session->has_userdata('email'))
  {
     $this->load->model('Admin_model');
     $arrdata['Admin']=$this->Admin_model->admin_fetchh_model();
     $this->load->view('Admin/change_password',$arrdata);
  }
  else
  {
    $this->index();
  }
}
public function updated_detailss()
{
 
  $admin_password=$this->input->post('password');
  $arrdata=array('admin_password'=>$admin_password,); 
  $this->load->model('Admin_model');      
  $execute=$this->Admin_model->change_password_model($arrdata);        
      if($execute==1)         
         {


          echo"<script>alert('successfully updated')</script>";
          $this->change_password();

         }
        else
        {
          echo"<script>alert('Try Again!!')</script>";
          $this->change_password();
        }

} 

public function lawyer_edit($lawyer_id)
{
    if($this->session->has_userdata('email'))
  {
     $this->load->model('Admin_model');
      $arrdata['lawyer']=$this->Admin_model->lawyer_edit_fetchh_model($lawyer_id);
     $this->load->view('Admin/lawyer_edit',$arrdata);
  }
  else
  {
    $this->index();
  }
}

 public function lawyer_delete($lawyer_id)
 {
  $this->load->model('Admin_model');
  $execute=$this->Admin_model->lawyer_delete_model($lawyer_id);
   if($execute==1)         
         {


          echo"<script>alert('Deleted')</script>";
          $this->Manage_lawyer();

         }
        else
        {
          echo"<script>alert('Try Again!!')</script>";
          $this->Manage_lawyer();
        }
 }

 public function section_delete($section_id)
 {
        $this->load->model('Admin_model');
  $execute=$this->Admin_model->section_delete_model($section_id);
   if($execute==1)         
         {


          echo"<script>alert('Deleted')</script>";
          $this->Manage_section();

         }
        else
        {
          echo"<script>alert('Try Again!!')</script>";
          $this->Manage_section();
        }
 }
public function section_fetch($section_id)
{
    if($this->session->has_userdata('email'))
  {
     $this->load->model('Admin_model');
      $arrdata['section']=$this->Admin_model->section_fetchh_model($section_id);
     $this->load->view('Admin/section_fetch',$arrdata);
  }
  else
  {
    $this->index();
  }    
}


public function section_update($section_id)
{

      $name=$this->input->post('name');
  $image=$_FILES['image']['name'];
  if($image!="")
  {
  $time = Time();
  $images = explode('.',$image);
  $Add_photos=$time.'.'.end($images);
  $config['upload_path']= './Asset/Admin/section/';
  $config['allowed_types']= 'jpg|png|jpeg';
  $config['file_name'] = $Add_photos;
  $this->load->library('upload', $config);
  $this->upload->initialize($config);
  if($this->upload->do_upload('image'))
  {
    $result=array('section_name'=>$name,'section_image'=>$Add_photos);
        $this->load->model('Admin_model');
        $exe=$this->Admin_model->section_id_update_model($result,$section_id);
    if($exe)
    {
      echo "<script>alert('Successfully Updated ')</script>";
      $this->Manage_section();
    }
    else
    {
      echo "<script>alert('Failed to update')</script>";
      $this->Manage_section();
    }
  }
  else
  {
    echo "<script>alert('Invalid photo')</script>";
      $this->Manage_section();
  }
  }
  else
  {
    $result=array('section_name'=>$name);
   $this->load->model('Admin_model');
        $exe=$this->Admin_model->section_id_update_model($result,$section_id);
    if($exe)
    {
      echo "<script>alert('Successfully Updated ')</script>";
      $this->Manage_section();
    }
    else
    {
      echo "<script>alert('Failed to update ')</script>";
      $this->Manage_section();
    }
  } 
   
}

  public function lawyer_update()
  {
        $lawyer_id=$this->input->post('lawyer_id');
        $name=$this->input->post('name');
        $password=$this->input->post('password');
        $email=$this->input->post('email');
        $age=$this->input->post('age');
        $gender=$this->input->post('gender');
        $case_win=$this->input->post('case_win');
        $case_fail=$this->input->post('case_fail');
       
        $lawyer_contact_on=$this->input->post('lawyer_contact_on');
        $lawyer_experience=$this->input->post('lawyer_experience');
        $lawyer_fee=$this->input->post('lawyer_fee');
        $total_case=$this->input->post('total_case');
        $image=$_FILES['image']['name'];
        if($image!="")
        {
          $time = Time();
          $images = explode('.',$image);
          $Add_photos=$time.'.'.end($images);
          $config['upload_path']= './Asset/Admin/lawyer/';
          $config['allowed_types']= 'jpg|png|jpeg';
          $config['file_name'] = $Add_photos;
          $this->load->library('upload', $config);
          $this->upload->initialize($config);
          if($this->upload->do_upload('image'))
          {
              $Arrsave=array('lawyer_name'=>$name,'lawyer_image'=>$Add_photos,'Password'=>$password,'Lawyer_Email'=>$email,'Age'=>$age,'Gender'=>$gender,'Number_of_Case_win'=>$case_win,'Number_of_Case_fail'=>$case_fail,'Total_case'=>$total_case,'lawyer_contact_no'=>$lawyer_contact_on,'lawyer_experience'=>$lawyer_experience,'lawyer_fee'=>$lawyer_fee);
                $this->load->model('Admin_model');
                $var=$this->Admin_model->lawyer_update_model($Arrsave,$lawyer_id);
                if($var==1)
                {

                    echo "<script>alert(' successfully Added')</script>";
                    $this->Manage_lawyer();

                }
                else
                {
                    echo "<script>alert('try again')</script>";
                    $this->Manage_lawyer();

                }
          }
          else
          {
             echo "<script>alert('Invalid photo')</script>";
              $this->Manage_lawyer();
          }
      }
  else
  {
    $Arrsave=array('lawyer_name'=>$name,'Password'=>$password,'Lawyer_Email'=>$email,'Age'=>$age,'Gender'=>$gender,'Number_of_Case_win'=>$case_win,'Number_of_Case_fail'=>$case_fail,'Total_case'=>$total_case,'lawyer_contact_no'=>$lawyer_contact_on,'lawyer_experience'=>$lawyer_experience,'lawyer_fee'=>$lawyer_fee);
                $this->load->model('Admin_model');
                $var=$this->Admin_model->lawyer_update_model($Arrsave,$lawyer_id);
                if($var==1)
    {
      echo "<script>alert('Successfully Updated ')</script>";
      $this->Manage_lawyer();
    }
    else
    {
      echo "<script>alert('Failed to update ')</script>";
      $this->Manage_lawyer();
    }
  } 
    }










}