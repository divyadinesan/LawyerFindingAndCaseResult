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

<h2 align="center" >Payment Details</h2><br><br>


<div style="overflow-x:auto;">
  <table>
    <tr>
                  <th>Client Name</th>
				  <th>Lawyer Name</th>
				  <th>Lawyer Fee</th>
				  <th>Card Name</th>
          <th>Card Number</th>
        
          <th>Card Expire Date</th>
      
    </tr>
    
						<?php
            foreach($payment as $row)
            {
            ?>	

    </tr>					
		           <td><?php echo $row->User_name?></td>
	               <td><?php echo $row->lawyer_name?></td>											
	               <td>₹<?php echo $row->lawyer_fee?></td>
	               <td><?php echo $row->card_name?></td>
                 <td><?php echo $row->card_no?></td>                      
                 
                 <td><?php echo $row->expire_date?></td>
	</tr>
     <?php
   }
   ?>
     
   
  </table>
</div>

</body>
</html>














<?php
$this->load->view('Admin/Layout/footer');
?>