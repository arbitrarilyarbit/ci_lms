<!DOCTYPE html>
<html>
<head>
	<?php file_partial('metadata'); ?>
</head>
<body>
	<!-- Begin pageWrapper -->
	<div id="container">
		<section id="content">	
			<?php file_partial('header'); ?>
			<div id="content-body">
				<?php echo $template['body']; ?>
			</div>
		</section>

	</div>
	<!-- End pageWrapper -->
	
	<!-- Begin footer >
	<footer>
		<div class="wrapper">
			<p>Copyright &copy; 2012 - <?php echo date('Y'); ?> Y3K Imaginations</p>
		</div>
	</footer>
	<!-- End footer -->
	
	<!-- Begin scripts -->
	<!-- Load JS files here -->
	<script src="<?php echo base_url(); ?>system/site/themes/site/js/app.js"></script>
	<!-- End scripts -->
</body>
</html>