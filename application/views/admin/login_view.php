<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi</title>
</head>
<body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/css_login.php">

<div class = "container">
	<div class="wrapper">
		<form action="<?php echo site_url('login/ceklogin')?>" method="post" name="Login_Form" class="form-signin"><br><br><br><br><br><br><br>      
		    <h3 style="text-align: center;" class="form-signin-heading">Selamat Datang Silakan Login</h3>
			  <hr style="width: 500px; border-color: skyblue;" class="colorgraph"><br>

			  <?php
			    $info = $this->session->flashdata('info');
			    if (!empty($info)){
			  	    echo $info;
			    }
			  ?>
			  <center>
			  <input style="width: 300px;" stype="text" class="form-control" name="Username" placeholder="Username" required="" autofocus="" /><br>
			  <input style="width: 300px;" type="password" class="form-control" name="Password" placeholder="Password" required=""/><br>     		  
			 
			  <button style="width: 300px;" class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Login</button>  		</center>	
		</form>			
	</div>
</div>
</body>
</html>
