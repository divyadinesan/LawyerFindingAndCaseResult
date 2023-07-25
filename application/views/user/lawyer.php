<?php 
$this->load->view('user/Layout/header');
?>
<style type="text/css">
	th
	{
		padding: 5px;

	}
</style>



<div class="news">
		<div class="container">
			<h3 style="padding-left: 350px;">Lawyers</h3>
			<br>
			<?php
	foreach($lawyer as $row)
	{
	?>
			<div class="col-md-6 news-left">
				<div class="col-md-6 new-lft">
					<img src="<?php echo base_url('Asset/Admin/lawyer/'.$row->lawyer_image)?>" alt=" " class="img-responsive" style="height:100px;width:500px;">
					<h1></h1>
					
						<table border="1px">
							<tr>
								<th>Name:</th>
								<th><?php echo $row->lawyer_name?></th>
							</tr>
							<tr>
								<th>Email:</th>
								<th><?php echo $row->lawyer_Email?></th>
							</tr>
							<tr>
								<th>Age:</th>
								<th><?php echo $row->Age?></th>
							</tr>
							<tr>
								<th>Total_case:</th>
								<th><?php echo $row->Total_case?></th>
							</tr>
							<tr>
								<th>Number_of_Case_win:</th>
								<th><?php echo $row->Number_of_Case_win?></th>
							</tr>
							<tr>
								<th>Number_of_Case_fail:</th>
								<th><?php echo $row->Number_of_Case_fail?></th>
							</tr>
							<tr>
								<th>Contact:</th>
								<th><?php echo $row->lawyer_contact_no?></th>
							</tr>
							<tr>
								<th>Experience:</th>
								<th><?php echo $row->lawyer_experience?></th>
							</tr>
							<tr>
								<th>Fee:</th>
								<th><?php echo $row->lawyer_fee?></th>
							</tr>
							
							<tr>
								<a class="hvr-shutter-in-horizontal" href="<?php echo base_url('index.php/user_controller/Register_case/'.$row->lawyer_id)?>">
						Register Case</a>
							</tr><br>











						</table>


					

					<h1></h1>
					
				</div>

				
					<div class="clearfix"></div>
			</div> 
			<?php
		}
			?>
			
			<div class="clearfix"></div>
		</div>
	</div>
	






<?php 
$this->load->view('user/Layout/footer');
?>