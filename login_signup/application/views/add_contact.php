
<?php include'header.php'; ?>
<br>
<br>

<style>
label {
	float: left;
	color: blue;
}
php{
float: right;
}
a{
color: red;
}
</style>
<div class="row">
	<div class="col-md-2">
	<a href="http://localhost:82/login_signup/index.php/User/index">LandingPage</a>
	</div>
	<div class="col-md-8" id="wid">
<?php  echo form_open('user/registration'); ?>
		<div class="panel panel-primary " id="panel">
			<div class="panel-heading">
				<div class="panel-title">
					<h4>NEW CONTACT</h4>
				</div>
			</div>

			<div class="panel-body">
				<div class="item form-group">
					<label class="col-sm-4 control-label">Frist Name<em>*</em></label>
					<div class="col-sm-5" id="1">
						 <?php echo form_input('firstname', ''); ?> 
					</div>
									<?php echo form_error('firstname', '<span class="error">', '</span>'); ?>

				</div>
				<br>





				<div class="item form-group">
					<label class="col-sm-4 control-label">Last Name<em>*</em></label>
					<div class="col-sm-3" id="1">
									<?php echo form_input('lastname', ''); ?> 
								</div>
									<?php echo form_error('lastname', '<span class="error">', '</span>'); ?>
				</div>
				
				<br>
				<div class="item form-group">
					<label class="col-sm-4 control-label">Email<em>*</em></label>
					<div class="col-sm-3" id="1">
									<?php echo form_input('emailad', ''); ?> 
								</div>
									<?php echo form_error('emailad', '<span class="error">', '</span>'); ?>
				</div>
				<br>
				<div class="item form-group">
					<label class="col-sm-4 control-label">mobile Number<em>*</em></label>
					<div class="col-sm-3" id="1">
									<?php echo form_input('mobile', ''); ?> 
								</div>
									<?php echo form_error('mobile', '<span class="error">', '</span>'); ?>
				</div>
				 
				 
				<br>
				<center>
					<input class="btn btn-xs btn-info" style="width: 90px;" type="submit" value="Register"
						name="mysubmit " class="classname" />
						 
				</center>
			</div>

		</div>
<?php echo form_close();  ?>
		</div>
</div>

<style>
.error {
	color: #FF0000;
}
</style>