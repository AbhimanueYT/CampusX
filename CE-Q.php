<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>College Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
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
    <section class="sub-header">
      <nav>
        <a href="index.html"><img src="images/logo.png"></a>
        <div class="nav-links" id="navLinks">
          <i class="fa fa-times" onclick="hideMenu()"></i>
          <ul>
            <li><a href="index.html">HOME</a></li>
            <li><a href="about.html">ABOUT</a></li>
            <li class="dropdown">
              <a href="course.html">COURSE</a>
              <div class="dropdown-content">
                <a href="CT.html">COMPUTER</a>
                <a href="CE.html">CIVIL</a>
                <a href="EEE.html">ELECTRICAL</a>
                <a href="ME.html">MECHANICAL</a>
                <a href="AU.html">AUTOMOBILE</a>
              </div>
            </li>
            <li class="dropdown">
              <a href="blog.html">BLOG</a>
            <div class="dropdown-content">
                <a href="CAMPUSLIFE.html">CAMPUS LIFE</a>
                <a href="Sports.html">SPORTS</a>
                <a href="NSS.html">NSS</a>
              </div>
            </li>
            <li><a href="contact.html">CONTACT</a></li>
            <li><a href="login.html">LOGIN</a></li>
          </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
      </nav>
      <h1>DIPLOMA IN CIVIL ENGINEERING</h1>
    </section>
    <br>
    <h3>Hello, <?=$_SESSION['username']?></h3>
    <br>
<h3>Model Question Papers - Revision 2015</h3>
<br>
<div class="row1">
<div class="column1">
<br>
<a href="upload/CES1.zip" class="hero-btn1">Semester I</a>
</div> 
<div class="column1">
<br>
<a href="upload/CES2.zip" class="hero-btn1">Semester II</a>
</div>
<div class="column1">
<br>
<a href="upload/CES3.zip" class="hero-btn1">Semester III</a>
</div>
<div class="column1">
<br>
<a href="upload/CES4.zip" class="hero-btn1">Semester IV</a>
</div>
<div class="column1">
<br>
<a href="upload/CES5.zip" class="hero-btn1">Semester V</a>
</div>
<div class="column1">
<br>
<a href="upload/CES6.zip" class="hero-btn1">Semester VI</a>
</div>
</div>
<br>
<h3>Notes</h3>
<br>
<div class="row1">
<div class="column1">
<br>
<a href="upload/CES1N.zip" class="hero-btn1">Semester I</a>
</div> 
<div class="column1">
<br>
<a href="upload/CES2N.zip" class="hero-btn1">Semester II</a>
</div>
<div class="column1">
<br>
<a href="upload/CES3N.zip" class="hero-btn1">Semester III</a>
</div>
<div class="column1">
<br>
<a href="upload/CES4N.zip" class="hero-btn1">Semester IV</a>
</div>
<div class="column1">
<br>
<a href="upload/CES5N.zip" class="hero-btn1">Semester V</a>
</div>
<div class="column1">
<br>
<a href="upload/CES6N.zip" class="hero-btn1">Semester VI</a>
</div>
</div>
<section class="footer">
  <h4>About Us</h4>
  <p>The year 1976 saw the birth of a luminous star of learning on the educational horizon.
     The star was to later blaze a trail across the <br>Indian skies guiding scores of students 
     to scale the heights of success in their careers, professions and enterprises.<br><br>
     Tel: +91-484-2650500, +917034780088, +919961678502

     Email: scmspoly@scmsgroup.org
     
     © 2021 SCMS College of Polytechnics</p>
     <div class="icons">
      <a href="https://www.facebook.com/scmspoly/"><i class="fa fa-facebook"></i></a>
      <a href=""><i class="fa fa-twitter"></i></a>
      <a href="https://www.instagram.com/scmspolytech/"><i class="fa fa-instagram"></i></a>
      <a href="https://scmspoly.linways.com/"><i class="fa fa-external-link"></i></a>
     </div>
     <p>Made With <a class="glow-on-hover" href="PacMan.html"><i class="fa fa-heart-o"></i></a> by SCP CT 2020-2023</p>
</section>
<script>
  var navLinks = document.getElementById("navLinks");
  function showMenu(){
    navLinks.style.right= "0";
  }
  function hideMenu(){
    navLinks.style.right= "-200px";
  }
</script>
</body>
</html>
<?php }else {
	header("Location: login.php");
	exit;
} ?>