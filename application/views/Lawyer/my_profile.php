<?php
$this->load->view('Lawyer/layout/header');
?>
<!DOCTYPE html>
<html>
<style>
input[type=text],input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body background="" style="background-repeat: no-repeat;"  onload='document.form1.email.focus()'>

<center><h1 style="margin-top:30px;color: #803E2C;text-transform: uppercase;margin-left: 96px">My Profile</h1></center>

<div style="margin-left: 400px;width: 553px;margin-top: 50px;">


 <form style="text-transform: uppercase;" method="POST" name="form1" id="form1" action="<?php echo base_url('index.php/Lawyer_controller/my_profile_update')?>">
  <?php
  foreach($lawyer as $lyr)
  ?>
  <br>
   <label for="lname">lawyer_name</label>
    <input type="text" id="lawyer_name" name="lawyer_name" padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 6px;box-sizing: border-box;"  required="required" value="<?php echo $lyr->lawyer_name?>">
    
   
 

   <label for="lname">Password</label>
    <input type="text" id="Password" name="Password" padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 6px;box-sizing: border-box;" required="required" value="<?php echo $lyr-> Password?>">
    
     <label for="lname">lawyer_Email</label>
    <input type="text" id="lawyer_Email" name="lawyer_Email" padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 6px;box-sizing: border-box;"  required="required" readonly value="<?php echo $lyr->lawyer_Email?>">
  
    <label for="lname"> Age</label>
    <input type="text" id=" Age" style="width: 100%;
    padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;
    border-radius: 4px;box-sizing: border-box;" name=" Age"  required="required" value="<?php echo $lyr-> Age?>">

    <label for="lname">Gender</label>
    <input type="text" id="Gender" name="Gender"value="<?php echo $lyr->Gender?>"> 

   <label for="lname"> Number_of_Case_win</label>
    <input type="text" id=" Number_of_Case_win" style="width: 100%;
    padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;
    border-radius: 4px;box-sizing: border-box;" name=" Number_of_Case_win"  required="required" value="<?php echo $lyr-> Number_of_Case_win?>">

  <label for="lname"> Number_of_Case_fail</label>
    <input type="text" id=" Number_of_Case_fail" style="width: 100%;
    padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;
    border-radius: 4px;box-sizing: border-box;" name=" Number_of_Case_fail"  required="required" value="<?php echo $lyr-> Number_of_Case_fail?>">

    <label for="lname"> section_id</label>
    <input type="text" id=" section_id" style="width: 100%;
    padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;
    border-radius: 4px;box-sizing: border-box;" name=" section_id"  required="required" value="<?php echo $lyr-> section_id?>">
   

    <label for="lname"> Total_case</label>
    <input type="text" id=" Total_case" style="width: 100%;
    padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;
    border-radius: 4px;box-sizing: border-box;" name=" Total_case"  required="required" value="<?php echo $lyr-> Total_case?>">


 <label for="lname"> lawyer_contact_no</label>
    <input type="text" id=" lawyer_contact_no" style="width: 100%;
    padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;
    border-radius: 4px;box-sizing: border-box;" name=" lawyer_contact_no"  required="required" value="<?php echo $lyr-> lawyer_contact_no?>"> 


   <label for="lname"> lawyer_experience</label>
    <input type="text" id=" lawyer_experience" style="width: 100%;
    padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;
    border-radius: 4px;box-sizing: border-box;" name="lawyer_experience"  required="required" value="<?php echo $lyr-> lawyer_experience?>">

    <label for="lname"> lawyer_fee</label>
    <input type="text" id=" lawyer_fee" style="width: 100%;
    padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;
    border-radius: 4px;box-sizing: border-box;" name=" lawyer_fee"  required="required" value="<?php echo $lyr-> lawyer_fee?>"><br>
    <label for="fname">lawyer_image</label><br>
    <img src="<?php echo base_url('Asset/Admin/lawyer/'.$lyr->lawyer_image)?>">

    <input type="submit" style="background-color:#803E2C" value="Submit" name="submit"  onclick="ValidateEmail(document.form1.email)">
  </form>




  <br><br>

  
</div>
<br><br><br><br>
</body>
</html>

<script type="text/javascript">
  function ValidateEmail(inputText)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(inputText.value.match(mailformat))
{
document.form1.email.focus();
return true;
}
else
{
alert("Please enter email format!");
document.form1.email.focus();
return false;
}
}
</script>

















<?php
$this->load->view('Lawyer/layout/FOOTER');
?>