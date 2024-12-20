<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./styleL.css">
	<link href="https://fonts.googleapis.com/css?family=Assistant:400,700" rel="stylesheet"><link rel="stylesheet" href="./styleL.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-G81Z3FNT8F"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
  
    gtag('config', 'G-G81Z3FNT8F');
  </script>
</head>
<body>
    	<section class="login" id='login'>
		<a href="index.html"><i class="fa fa-arrow-left" ></i></a>
    	<div class='head'>
		<h1 class="company">LOGIN</h1>
		</div>
		<p class='msg'>Welcome back, Student</p>
		<div class='form'>
		<form
    	      action="php/login.php" 
    	      method="post">

    		
    		<?php if(isset($_GET['error'])){ ?>
    		<div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
			</div>
		    <?php } ?>

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
		  
		  <input type="submit" class="btn-login" value="Login">
		</form>
		</div>
		</section>
    </div>
	<script type="text/javascript">
  function preventBack(){
    window.history.forward()};
    setTimeout("preventBack()",0);
    window.onunload=function(){null;}

</script>
</body>
</html>