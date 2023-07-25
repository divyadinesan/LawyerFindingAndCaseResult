<?php
$this->load->view('user/layout/header');
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

<center><h1 style="margin-top:30px;color: #803E2C;text-transform: uppercase;margin-left: 96px">User Register here</h1></center>

<div style="margin-left: 400px;width: 553px;margin-top: 50px;">

<?php
  foreach ($user as $usr)
?>

 <form style="text-transform: uppercase;" method="POST" name="form1" id="form1" action="<?php echo base_url('index.php/user_controller/Update_details')?>">
  
  <br>
   <label for="lname">User_name</label>
    <input type="text" id="User_name" name="User_name" padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 6px;box-sizing: border-box;"  required="required" value="<?php echo $usr->User_name?>">
    
   
 <label for="fname">User_age</label>
    <input type="text" id="User_age" name="User_age"style="width: 100%;
    padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;
    border-radius: 4px;box-sizing: border-box;" required="required" value="<?php echo $usr->User_age?>">

    <label for="lname">User_address</label>
    <input type="text" id="User_address" name="User_address" padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;
    border-radius: 6px;box-sizing: border-box;"  required="required" value="<?php echo $usr->User_address?>">
    
   
  <label for="lname">User_phone</label>
    <input type="text" id="User_phone" name="User_phone"  autocomplete="off" maxlength="10" pattern="\d{10}" required="required"value="<?php echo $usr-> User_phone?>">
    
    <label for="lname">User_email</label>
    <input type="email" id="User_email" style="width: 100%;
    padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;
    border-radius: 4px;box-sizing: border-box;" name="User_email"  required="required"value="<?php echo $usr-> User_email?>" readonly>

    <label for="lname">User_Password</label>
    <input type="text" id="User_password" name="User_password"value="<?php echo $usr-> User_password?>"> 
    


    
   
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
$this->load->view('user/layout/footer');
?>
