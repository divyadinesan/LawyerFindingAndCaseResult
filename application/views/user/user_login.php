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

<center><h1 style="margin-top:30px;color: #803E2C;text-transform: uppercase;margin-left: 96px">User Login here</h1></center>

<div style="margin-left: 400px;width: 553px;margin-top: 50px;">



  <form style="text-transform: uppercase;" method="POST" name="form1" action="<?php echo base_url('index.php/User_controller/login_check')?>">
  
  <br>
    <label for="lname">Enter your email</label>
    <input type="email" style="width: 100%;
    padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;
    border-radius: 4px;box-sizing: border-box;" required="required" id="lname" name="email" placeholder="Enter your email..">
    <label for="lname">Enter your password</label>
    <input type="password" id="lname" name="password" placeholder="Enter your password.." required="required">
    <input type="hidden" id="lname" name="status" placeholder="Enter your password.." required="required">
    <input type="submit" style="background-color:#803E2C" value="Login here" name="submit"  onclick="ValidateEmail(document.form1.email)">
  </form>
  <div align="center">
    <a href="<?php echo base_url('index.php/user_controller/index')?>">
      <img style="height: 60px;width: 60px;" src="<?php echo base_url('Asset/user/images/home.jpg')?>"></a>
  <br><br>

  <center><p  style="    text-transform: uppercase;
    margin-left: -24px;
    color: #803E2C;
"><a href="<?php echo base_url('index.php/User_controller/user_register')?>"  style="text-transform: uppercase;color: #803E2C;text-decoration-line: none">Create a new account </a></p></center>
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