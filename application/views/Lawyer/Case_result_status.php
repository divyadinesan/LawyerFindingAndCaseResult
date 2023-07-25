<?php
$this->load->view('Lawyer/layout/header');
?>
<style type="text/css">
  td
  {
    padding: 5px;
  }
</style>
<div class="cases">
    <div class="container">
      <?php
      foreach($case as $fetch)
      {
      ?>
      <div class="col-md-4 cases-left">
        
      
      <table border="1px">
        <tr><td><h5>Client Name :</td><td><?php echo $fetch->User_name?> </h5></td></tr>
                <tr><td><h5>Client Age : </td><td><?php echo $fetch->User_age?> </h5></td>
                <tr><td><h5>Client Address : </td><td><?php echo $fetch->User_address?> </h5></td>
                <tr><td><h5>Client Phone : </td><td><?php echo $fetch->User_phone?> </h5></td>
                <tr><td><h5>Client  Email: </td><td><?php echo $fetch->User_email?> </h5></td>
                <tr><td><h5>Case Description: </td><td><?php echo $fetch->case_description?> </h5></td>
                <tr><td><h5>Case Status: </td><td><?php echo $fetch->case_status?> </h5></td>
                  <tr>
                    <tr><td><h5>Fee Status: </td><td><?php echo $fetch->fee_status?> </h5></td>
                  <tr>
                    <tr>
                    <tr><td><h5>Case result: </td><td><?php echo $fetch->case_result?> </h5></td>
                  <tr>
                    <td><a class="hvr-shutter-in-horizontal" href="<?php echo base_url('index.php/Lawyer_controller/case_result_win/'.$fetch->register_id)?>">Win</a></td>
                      <td><a class="hvr-shutter-in-horizontal" href="<?php echo base_url('index.php/Lawyer_controller/case_result_fail/'.$fetch->register_id)?>">Fail</a></td>
                  </tr>
                </table>





        <!-- <a class="hvr-shutter-in-horizontal" href="#">Read More</a> -->
      </div>
      <?php
    }
    ?>
     
    </div>
  </div>








<?php
$this->load->view('Lawyer/layout/footer');
?>


