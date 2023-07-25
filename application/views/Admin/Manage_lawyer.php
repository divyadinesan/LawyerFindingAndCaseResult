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

<h2 align="center" > Manage lawyer</h2><br><br>


<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>Sl.No</th>
      <th>Lawyer Name</th>
      <th>Lawyer Image</th>
      <th>Password</th>
      <th>Lawyer Email</th>
      <th>Age</th>
      <th>Gender</th>
      <th>Number of case win</th>
      <th>Number of case fail</th>
      <th>Expertise</th>
      <th>Total case</th>
      <th>Lawyer contact no</th>
      <th>Lawyer Experience</th>
      <th>Lawyer Fee</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
    <?php 
      $i=1;
      foreach($lawyer as $row)
      {
      ?>
    <tr> 
         <td><?php echo $i?></td>  
    <td><?php echo $row->lawyer_name?></td>
    <td><img src="<?php echo base_url('Asset/Admin/lawyer/'.$row->lawyer_image)?>" style="height: 100px;width: 100px;"></td>
    <td><?php echo $row->Password?></td>
    <td><?php echo $row->lawyer_Email?></td>
    <td><?php echo $row->Age?></td>
    <td><?php echo $row->Gender?></td>
    <td><?php echo $row->Number_of_Case_win?></td>
    <td><?php echo $row->Number_of_Case_fail?></td>
    <td><?php echo $row->section_name?></td>
    <td><?php echo $row->Total_case?></td>
    <td><?php echo $row->lawyer_contact_no?></td>
    <td><?php echo $row->lawyer_experience?></td>                      
    <td><?php echo $row->lawyer_fee?></td>                                                                  
 <td>
<a href="<?php echo base_url('index.php/Admin_controller/lawyer_edit/'.$row->lawyer_id)?>">  <img src="<?php echo base_url('Asset/Admin/images/edit.jpg')?>" style="height: 50px;width: 50px"></a>
</td>

<td>
  <a href="<?php echo base_url('index.php/Admin_controller/lawyer_delete/'.$row->lawyer_id)?>"><img src="<?php echo base_url('Asset/Admin/images/download.png')?>" style="height: 50px;width: 50px"></a>
</td>
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