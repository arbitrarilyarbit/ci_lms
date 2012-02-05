<h2 class="page-title" id="page_title"><?php echo 'Login' ?></h2>

<?php if (validation_errors()): ?>
<div class="error-box">
	<?php echo validation_errors();?>
</div>
<?php endif; ?>

<?php echo form_open('users/login', array('id'=>'login'), array('redirect_to' => $redirect_to)); ?>
<ul>
	<li>
		<label for="email"><?php echo 'E-mail'; ?></label>
		<?php echo form_input('email', $this->input->post('email') ? $this->input->post('email') : '')?>
	</li>
	<li>
		<label for="password"><?php echo 'Password'; ?></label>
		<input type="password" id="password" name="password" maxlength="20" />
	</li>
	<li id="remember_me">
		<label><?php echo 'Remember'; ?></label>
		<?php echo form_checkbox('remember', '1', FALSE); ?>
	</li>
	<li class="form_buttons">
		<input type="submit" value="<?php echo 'Login'; ?>" name="btnLogin" /> <span class="register"> | <?php echo anchor('register', 'Register');?></span>
	</li>
	<li class="reset_pass">
		<?php echo anchor('users/reset_pass', 'Forgot your password?');?>
	</li>
</ul>
<?php echo form_close(); ?>