<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Y3K LMS&nbsp;&bull;&nbsp;<?php echo $template['title'];?></title>
	
	<base href="<?php echo base_url(); ?>" />
	<meta name="robots" content="noindex, nofollow" />
	
	<!-- Begin stylesheets -->
	<link href="<?php echo base_url();?>system/site/themes/site/css/style.css" type="text/css" rel="stylesheet" />
	<!-- End stylesheets -->

	<!-- Use Html5Shiv in order to allow IE render HTML5 -->
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

	<!-- Load jQuery Before Modules/Widgets -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
	<script>window.jQuery || document.write("\x3Cscript src='<?php echo base_url(); ?>system/site/themes/site/js/jquery/jquery.min.js'>\x3C/script>")</script>
	<!-- End jquery -->

	<!-- Place CSS bug fixes for IE 7 in this comment -->
	<!--[if IE 7]>
	<style type="text/css" media="screen">
	</style>
	<![endif]-->
</head>

<body style="text-align:center;">

	<div id="dashboard-logo"><a href="/"><img src="<?php echo base_url(); ?>system/site/themes/site/img/logo.png"/></a></div>

	<div id="login-box" style="position:relative;top:30px;left:50%;width:300px;height:250px;margin:0 0 0 -150px;border:1px solid #444;padding:10px;">
		<?php echo form_open('pages/login'); ?>
			<ul>
				<li>
					<input type="text" name="email" value="Email" onblur="if (this.value == '') {this.value = 'Email';}"  onfocus="if (this.value == 'Email') {this.value = '';}" />
				</li>
				
				<li>
					<input type="password" name="password" value="Password" onblur="if (this.value == '') {this.value = 'Password';}"  onfocus="if (this.value == 'Password') {this.value = '';}"  />
				</li>
				
				<li>
					<input class="remember" class="remember" id="remember" type="checkbox" name="remember" value="1" />
					<label for="remember" class="remember">Remember</label>
				</li>
				
				<li><input class="button" type="submit" name="submit" value="Login" /></li>
			</ul>
		<?php echo form_close(); ?>
	</div>
	
	<div id="info-box" style="position:relative;top:40px;left:50%;width:400px;height:100px;margin:20px 0 0 -200px;border:1px solid #444;padding:10px;">
	</div>
	
</body>
</html>