<?php
$this->load->view('user/layout/header');
?>



			
	
<div class="news">
		<div class="container">
			<h3 style="padding-left: 350px;">Law Sections</h3>
			<br>
			<?php
	foreach($section as $row)
	{
	?>
			<div class="col-md-6 news-left">
				<div class="col-md-6 new-lft">
					<img src="<?php echo base_url('Asset/Admin/section/'.$row->section_image)?>" alt=" " class="img-responsive" style="height:100px;width:500px;">
					<h1></h1>
					<a class="hvr-shutter-in-horizontal" href="<?php echo base_url('index.php/user_controller/lawyer/'.$row->section_id)  ?>">
						<?php echo $row->section_name?></a>
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
$this->load->view('user/layout/footer');
?>
