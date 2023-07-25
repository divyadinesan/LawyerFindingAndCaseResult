<?php 
$this->load->view('user/Layout/header');
?>
<style type="text/css">
	td
	{
		padding: 10px;
	}
</style>
	<div class="clients">
		
			<div class="container">
				<?php
foreach ($case as $mycase) {
?>

				<div class="cli-top">
	
					<div class="col-md-4 clients-left">
						<img src="<?php echo base_url('Asset/Admin/section/'.$mycase->section_image)?>" alt=" " class="img-responsive" style="height: 200px;width: 200px;"><br>
						<table border="1px">
						<tr><td><h5 style="font-size: 16px;">Case Type :</td><td><?php echo $mycase->section_name?></h5>
						<tr><td><h5 style="font-size: 16px;">Lawyer Name :</td><td><?php echo $mycase->lawyer_name?></h5></td>
						<tr><td><h5 style="font-size: 16px;">Total Case :</td><td><?php echo $mycase->Total_case?></h5></td>
						<tr><td><h5 style="font-size: 16px;">Total Case Win :</td><td><?php echo $mycase->Number_of_Case_win?></h5></td>
						<tr><td><h5 style="font-size: 16px;">Total Case Fail :</td><td><?php echo $mycase->Number_of_Case_fail?></h5></td>
						<tr><td><h5 style="font-size: 16px;">Lawyer Fee :</td><td><?php echo $mycase->lawyer_fee?></h5></td>
						<tr><td><h5 style="font-size: 16px;">Case Status :</td><td><?php echo $mycase->case_status?></h5></td>
						<?php
						if($mycase->case_status=='Approved' and $mycase->fee_status!='Payed')
						{
						?>
						<tr><td><h5 style="font-size: 16px;">Payment Status :</td><td><?php echo $mycase->fee_status?></h5></td>
						<a class="hvr-shutter-in-horizontal" href="<?php echo base_url('index.php/user_controller/Payment/'.$mycase->register_id)?>">Pay Now</a>
						<?php
					}
					elseif($mycase->fee_status=='Payed')
					{
						?>
						<tr><td><h5 style="font-size: 16px;">Payment Status :</td><td><?php echo $mycase->fee_status?></h5></td>
							<?php
					}
					?>
						</table>
						<br>
						
					</div>
				</div>
				
			
			<?php
	}
	?>
	</div>
		</div>
		


<?php 
$this->load->view('user/Layout/footer');
?>