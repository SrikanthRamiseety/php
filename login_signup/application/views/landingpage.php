<?php include'template/header.php'; ?>
<br>
<br>
<br>
<link rel="stylesheet" href="../../css/bootstrap.min.css">
<link href="../../css/bootstrap.css" rel="stylesheet">
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8" id="wid">
		<div class="panel panel-primary " id="panel">

<br>
			<center>
				
				<a href="http://localhost:82/login_signup/index.php/User/registration"class="btn btn-lg btn-info" >ADD NEW CONTACT</a>
			</center>
			<br>
			<center>
				<a href="http://localhost:82/login_signup/index.php/User/viewcontacts" class="btn btn-lg btn-info">VIEW CONTACTS</a>
			</center>
<br>
		</div>
	</div>
</div>
<div class="row">
<div class="col-md-2">
</div>
<div class="col-md-8" id="contact">


</div>
</div>
 
<style>
 .btn{
 width: 30%;
 
 }
 a{
 color:red;
 }
</style>
<script type="text/javascript" src="js/jquery-2.1.1.min.js">
 
</script>
<script type="text/javascript">
 $(function(){
	 $("#btn1").click(function() {
			$.post("http://localhost:82/login_signup/index.php/user/registration");
			 alert("coming")
			function show(data) {
				$("#contact").html(data);
			}
		});
 });
</script>