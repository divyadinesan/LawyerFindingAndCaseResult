<?php 
$this->load->view('Admin/Layout/header');
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
</head>
<body>

<h2 align="center" > Registered Case</h2><br><br>


<div style="overflow-x:auto;">
  <table>
    <tr>
     
      <th>Lawyer Name</th>
      <th>Lawyer Expertise</th>
       <th>Lawyer Fee</th>
      <th>Client Name</th>
      <th>Case Descripation</th>
      <th>Case Status</th>
      <th>Fee Status</th>
      <th>Case Result</th>
      
    </tr>

    <?php 
      $i=1;
      foreach($case as $row)
      {
      ?>
    <tr> 
       
    <td><?php echo $row->lawyer_name?></td>
    <td><?php echo $row->section_name?></td>
    <td>₹<?php echo $row->lawyer_fee?></td>
    <td><?php echo $row->User_name?></td>
    <td><?php echo $row->case_description?></td>
    <td><?php echo $row->case_status?></td>
    <td><?php echo $row->fee_status?></td>
    <td><?php echo $row->case_result?></td>                      
                                                                      
 
  </tr>
  <?php 
     $i++;
 }
 ?>
   
  </table>
</div>

</body>
</html>























<?php
$this->load->view('Admin/Layout/footer');
?>