<?php include'header.php'; ?>
<br>
<br>
<style>
 th{
 background-color:aqua;
 }
</style>
<!DOCTYPE html>
<html lang="en">
  <head>
  </head>
  <body>
  
 
     <div class="row">
     <div class="col-md-2">
     &nbsp;&nbsp;
     <a href="http://localhost:82/login_signup/index.php/User/index">LandingPage</a>
     </div>
     <div class="col-md-8">
    <?php  echo form_open('user/update'); ?>
		<div class="panel panel-primary " id="panel">
			<div class="panel-heading">
				<div class="panel-title">
					<h4>UPDATE  CONTACT</h4>
				</div>
			</div>

			<div class="panel-body">
				
				<div class="item form-group">
					<label class="col-sm-4 control-label">Frist Name<em>*</em></label>
					<div class="col-sm-5" id="1">
						 <?php echo form_input('firstname', $post_r['firstname']); ?> 
					</div>
									<?php echo form_error('firstname', '<span class="error">', '</span>'); ?>

				</div>
				<br>





				<div class="item form-group">
					<label class="col-sm-4 control-label">Last Name<em>*</em></label>
					<div class="col-sm-3" id="1">
									<?php echo form_input('lastname', $post_r['lastname']); ?> 
								</div>
									<?php echo form_error('lastname', '<span class="error">', '</span>'); ?>
				</div>
				
				<br>
				<div class="item form-group">
					<label class="col-sm-4 control-label">Email<em>*</em></label>
					<div class="col-sm-3" id="1">
									<?php echo form_input('emailad', $post_r['emailad']); ?> 
								</div>
									<?php echo form_error('emailad', '<span class="error">', '</span>'); ?>
				</div>
				<br>
				<div class="item form-group">
					<label class="col-sm-4 control-label">mobile Number<em>*</em></label>
					<div class="col-sm-3" id="1">
									<?php echo form_input('mobile', $post_r['mobile']); ?> 
								</div>
									<?php echo form_error('mobile', '<span class="error">', '</span>'); ?>
				</div>
				 <div class="item form-group hide">
					<label class="col-sm-4 control-label">Id<em>*</em></label>
					<div class="col-sm-5" id="1">
						 <?php echo form_input('id', $post_r['id']); ?> 
					</div>
									<?php echo form_error('id', '<span class="error">', '</span>'); ?>

				</div>
				 
				<br>
				<center>
					<input class="btn btn-xs btn-info" style="width: 90px;" type="submit" value="Update"
						name="mysubmit " class="classname" />
						 
				</center>
			</div>

		</div>
<?php echo form_close();  ?>
 </div>
 </div>
  </body>
</html>
 