
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

<h2 align="center" >User Details</h2><br><br>


<div style="overflow-x:auto;">
  <table>
    <tr>
     <th>Name</th>
								<th>Age</th>
								<th>Address</th>
								<th>User_phone</th>
      
    </tr>
    <?php 
			$i=1;
			foreach($User_Details as $row)
			{
			?>	
							

		<tr>					
		<td><?php echo $row->User_name?></td>
	<td><?php echo $row->User_age?></td>											
	<td><?php echo $row->User_address?></td>
	<td><?php echo $row->User_phone?></td>
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
