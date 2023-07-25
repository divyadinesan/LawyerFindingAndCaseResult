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

<h2 align="center" > Manage Section</h2><br><br>


<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>Section Name</th>
      <th>Section Image</th>
      <th>Edit</th>
      <th>Delete</th>
      
    </tr>
    <?php 
      $i=1;
      foreach($Manage_section as $row)
      {
      ?>
    <tr> 
           
    <td><?php echo $row->section_name?></td>
    <td><img src="<?php echo base_url('Asset/Admin/section/'.$row->section_image)?>" style="height: 100px;width: 100px;"></td>                      
<td>
   <a href="<?php echo base_url('index.php/Admin_controller/section_fetch/'.$row->section_id)?>">
  <img src="<?php echo base_url('Asset/Admin/images/edit.jpg')?>" style="height: 50px;width: 50px"></a>
</td>

<td>
  <a href="<?php echo base_url('index.php/Admin_controller/section_delete/'.$row->section_id)?>">
  <img src="<?php echo base_url('Asset/Admin/images/download.png')?>" style="height: 50px;width: 50px"></a>
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
