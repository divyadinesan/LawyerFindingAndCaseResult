<?php 
$this->load->view('user/Layout/header');
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

<center><h1 style="margin-top:30px;color: #803E2C;text-transform: uppercase;margin-left: 96px"> Register case</h1></center>

<div style="margin-left: 400px;width: 553px;margin-top: 50px;">



 <form style="text-transform: uppercase;" method="POST" name="form1" id="form1" action="<?php echo base_url('index.php/User_controller/case_registration')?>">
  <?php
  foreach($lawyer as $lwyr)
  ?>
  <br>
   <input type="hidden" id="inputTextBox" name="section_id" placeholder="Enter name.." required="required" value="<?php echo $lwyr->section_id?>">

    <label for="fname">lawyer name</label>
    <input type="text" id="inputTextBox" name="lawyer_name" placeholder="Enter name.." required="required" value="<?php echo $lwyr->lawyer_name?>">

 <label for="fname">lawyer_email</label>
    <input type="email" id="lawyer email" name="lawyer_email" style="width: 100%;
    padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;
    border-radius: 4px;box-sizing: border-box;" name="age" placeholder="lawyer email.." required="required" value="<?php echo $lwyr->lawyer_Email?>">

     <label for="fname">lawyer Fees</label>
    <input type="text" id="lawyer email"  style="width: 100%;
    padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;
    border-radius: 4px;box-sizing: border-box;" name="fee" placeholder="lawyer email.." required="required" value="₹<?php echo $lwyr->lawyer_fee?>">
<?php
  foreach($user as $usr)
  ?>
    <label for="lname">client name</label>
    <input type="text" id="cname" name="client name" padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;
    border-radius: 6px;box-sizing: border-box;" name="client_name" placeholder="Enter name.." required="required" value="<?php echo $usr->User_name?>"> 
    
    <label for="lname">client email</label>
    <input type="email" id="lname" style="width: 100%;
    padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;
    border-radius: 4px;box-sizing: border-box;" name="client_email" placeholder="Enter email.." required="required" value="<?php echo $usr->User_email?>">
    
     <label for="lname">client address</label>
    <input type="text" id="address" name="client_address"  placeholder="client address.." required="required" value="<?php echo $usr->User_address?>">
    
    <label for="lname">case_description</label>
    <input type="text" id="case description" name="case_description"  autocomplete="off" placeholder="case description.." required="required">

    
 
   
    <input type="submit" style="background-color:#803E2C" value="submit" name="submit"  onclick="ValidateEmail(document.form1.email)">
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
$this->load->view('user/Layout/footer');
?>