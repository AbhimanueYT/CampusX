<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Assistant:400,700" rel="stylesheet"><link rel="stylesheet" href="./styleL.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Sign Up</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styleL.css">
</head>
<body>
	<section class="login" id="login">
	<a href="index.html"><i class="fa fa-arrow-left" ></i></a>
	<div class="head">
    		<h1 class="company">Create Account</h1>
			</div>
			<p class='msg'>Welcome back Faculty</p>
    	<div class="form">
    	<form
    	      action="php/signup.php" 
    	      method="post">

			  
    		<?php if(isset($_GET['error'])){ ?>
    		<div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
			</div>
		    <?php } ?>

		    <?php if(isset($_GET['success'])){ ?>
    		<div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
			</div>
		    <?php } ?>
		  <div class="mb-3">
		    <label class="form-label">Branch Name</label>
		    <input type="text" 
		           class="text"
		           name="branch"
		           value="<?php echo (isset($_GET['branch']))?$_GET['branch']:"" ?>">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">User name</label>
		    <input type="text" 
		           class="text"
		           name="uname"
		           value="<?php echo (isset($_GET['uname']))?$_GET['uname']:"" ?>">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Password</label>
		    <input type="password" 
		           class="password"
		           name="pass">
		  </div>
		  
		  <input type="submit" class="btn-login" value="Sign Up">
		  <a href="login.php" class="btn-login1">Login</a>
		</form>
		</div>
    </div>
	</section>
</body>
</html>