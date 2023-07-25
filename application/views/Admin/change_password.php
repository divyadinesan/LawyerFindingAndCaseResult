<?php
$this->load->view('Admin/Layout/header');
?>
<style type="text/css">
  .send-button{
background: #54C7C3;
width:100%;
font-weight: 600;
color:#fff;
padding: 8px 25px;
}
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
.g-button{
color: #fff !important;
border: 1px solid #EA4335;
background: #ea4335 !important;
width:100%;
font-weight: 600;
color:#fff;
padding: 8px 25px;
}
.my-input{
box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
cursor: text;
padding: 8px 10px;
transition: border .1s linear;
}
.header-title{
margin: 5rem 0;
}
h1{
font-size: 31px;
line-height: 40px;
font-weight: 600;
color:#4c5357;
}
h2{
color: #5e8396;
font-size: 21px;
line-height: 32px;
font-weight: 400;
}
.login-or {
position: relative;
color: #aaa;
margin-top: 10px;
margin-bottom: 10px;
padding-top: 10px;
padding-bottom: 10px;
}
.span-or {
display: block;
position: absolute;
left: 50%;
top: -2px;
margin-left: -25px;
background-color: #fff;
width: 50px;
text-align: center;
}
.hr-or {
height: 1px;
margin-top: 0px !important;
margin-bottom: 0px !important;
}
@media screen and (max-width:480px){
h1{
font-size: 26px;
}
h2{
font-size: 20px;
}
}
</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<body>
   <div class="container">
      <div class="col-md-6 mx-auto text-center">
         <div class="header-title">
            <h1 class="wv-heading--title">
              Update Password
            </h1>
          
         </div>
      </div>
      <div class="row">
         <div class="col-md-4 mx-auto">
            <div class="myform form ">
               <form action="<?php echo base_url('index.php/Admin_controller/updated_detailss')?>"method="post" name="login" enctype="multipart/form-data"> 
                
                  <?php
                  foreach($Admin as $row)
                  ?>
                  <label>Email Id</label>
                  <div class="form-group">
                     <input type="email"   class="form-control my-input" id="name" placeholder="name" readonly value="<?php echo $row->admin_email?>">
                  </div>
                  <label>Password</label>
                  <div class="form-group">
                     <input type="text"  class="form-control my-input" id="image" readonly value="<?php echo $row->admin_password?>">
                  </div>
                  <label> New Password</label>
                  <div class="form-group">
                     <input type="text" name="password"  class="form-control my-input" id="image" >
                  </div>
                 
                  <div class="text-center ">
                     <button type="submit" class=" btn btn-block send-button tx-tfm">Submit</button>
                  </div>
                  <div class="col-md-12 ">
                     
                  </div>
                  
               </form>
            </div>
         </div>
      </div>
   </div>
</body>
<?php
$this->load->view('Admin/Layout/footer');
?>



















