<!DOCTYPE html>
<html>
<head>
	<title>Login - Aplikasi Berbasis WEB</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css' ?>">
	
	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js';?>"></script>
</head>
<body style="background:#5bc0de">
    <center>
	<div class="col-md-4 col-md-offset-4"  style="margin-top: 20px">
		<center style="color: white">
<BR>
<img src="<?= base_url('assets/image/logo1.png') ?>" style="width: 135px; height: 120px;">
<h2 class="font-weight-normal"><b>APLIKASI WEB APOTEK</b></h2>
<h3 class="font-weight-normal">LOGIN</h3>
    </center>
    <?php
    // if(isset($_GET['pesan'])) 
    // {
    // 	if($_GET['pesan']=="gagal") 
    // 	{
    // 		echo"<div class='alert alert-danger alert-danger'>";
    // 		echo $this->session->flashdata('alert');
    // 		echo "</div>";
    // 	}
    // else if($_GET['pesan']=="gagal") {
    // 		echo"<div class='alert alert-danger alert-success'>";
    // 		echo $this->session->flashdata('Anda Telah Logout');
    // 		echo "</div>";
    // 	}
    // }
    // else if($_GET['pesan']=="belumlogin")
    //     {
    //     if($this->session->flashdata())
    //     {
    //     	echo"<div class='alert alert-danger alert-primary'>";
    // 		echo $this->session->flashdata('alert');
    // 		echo "</div>";
    //     }
    //     }
    // else
    // {
    // 	if($this->session->flashdata())
    // 	{
    // 		echo"<div class='alert alert-danger alert-massege'>";
    // 		echo $this->session->flashdata('alert');
    // 		echo "</div>";
    // 	}
    // }
    ?>
    <br>
    <div class="panel panel-default">
    	<div class="panel-body">
    		<br>
    		<br>
    		<center>
    	<form method="post" action="<?php echo base_url().'Login/login'?>">
    		<div class="form_group">
    			<input type="text" name="admin_username" placeholder="Username" class="form-control">
    			<?php echo form_error('username');?>		
    		</div>
    		<br>
    		<div class="form_group"></div>
    		<input type="password" name="admin_password" placeholder="Password" class="form-control">
    		    <?php echo form_error('password');?>
    		</div><br>
    		<center>
    		<div class="form_group">
    			<input type="submit" name="Login" class="btn btn-info">
    		</div>
    	</center>
    	</form>
    <br>
    <br>
    </div>
    </div>
    </div>
    <script type="text/javascript">
    	$('.alert-massege').alert().delay(3000).slideup('show');
    </script>
</body>
</html>