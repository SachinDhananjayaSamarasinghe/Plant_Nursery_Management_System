<?php

if (!isset($_SESSION['admin_email'])) {

	echo "<script>window.open('login.php','_self')</script>";

} else{

?>

<div class="row">

	<div class="col-lg-12">

		<h1 class="page-header"> Dashboard </h1>

		<ol class="breadcrumb">

			<li class="active">

				<i class="fa fa-dashboard"></i> Dashboard
				
			</li>
			
		</ol>
		
	</div>
	
</div>

<br>

	<div class="col-md-8" style="float: right; margin-top: -25px; margin-right: 250px;" >

	<div class="panel">

		<div class="panel-body">

			<h3 class="text-muted">Welcome Back..!</h3>

			<br>

			<div class="mb-md thumb-info">

				<img src="admin_images/<?php echo $admin_image; ?>" alt="<?php echo $admin_image; ?>" class="rounded img-responsive">

				<div class="thumb-info-title">

					<span class="thumb-info-inner"> <?php echo $admin_name; ?> </span>
					<span class="thumb-info-type"> <?php echo $admin_job; ?> </span>
					
				</div>
				
			</div>

			<br/><br/>

			<div class="mb-md">

				<div class="widget-content-expanded" style="margin-top:-285px;">

					<i class="fa fa-user"> </i> <span> Email: </span><?php echo $admin_email; ?> <br/>
					<i class="fa fa-flag"> </i> <span> Country: </span> <?php echo $admin_country; ?> <br/>
					<i class="fa fa-envelope"> </i> <span> Contact: </span> <?php echo $admin_contact; ?> <br/>

				</div>

				<hr class="dotted short">
				
			</div>
			
		</div>
		
	</div>

</div>
	
</div>

<?php

}

?>