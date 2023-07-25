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
						
						<tr><td><h5 style="font-size: 16px;">Lawyer Name :</td><td><?php echo $mycase->lawyer_name?></h5></td>
						
						<tr><td><h5 style="font-size: 16px;">Case Type :</td><td><?php echo $mycase->section_name?></h5>
						<tr><td><h5 style="font-size: 16px;">Lawyer Fee :</td><td><?php echo $mycase->lawyer_fee?></h5></td>
						<tr><td><h5 style="font-size: 16px;">Case Status :</td><td><?php echo $mycase->case_status?></h5></td>
						<tr><td><h5 style="font-size: 16px;">Payment Status :</td><td><?php echo $mycase->fee_status?></h5></td>
							<tr><td><h5 style="font-size: 16px;">Case Result:</td><td><?php echo $mycase->case_result?></h5></td>
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