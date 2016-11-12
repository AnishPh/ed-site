<?php 
 session_start();
 $user=$_SESSION["uname"];
 if(isset($_POST['courses']))
 {
	 //$_SESSION["uname"].unset();
	 //session_destroy();
	 header("location:../Course.php");
 }
?>
<html>
<head>
 <title>
  Biometrics
 </title>
<link rel="stylesheet" href="course.css">
</head>
<body>
<div class="hdiv">
  <img src="icon2.png" style="height:48px">&nbsp Fun_Ed <div class="rdiv"> Welcome  &nbsp <?php echo $user ?> </div>
</div>
<br><br>
<form  method="post"><p style="text-align:right"><input type="submit" name="courses" value="courses" style="background-color:yellowgreen;padding:15px 15px;font-size:20px;font-variant:small-caps"></input></p></form>

<div class="cssload-preloader" style="position: absolute;
	height: 29px;
	top: 20%;
	left: 15%;
	margin: -15px 0 0 -146px;
	perspective: 195px;
		-o-perspective: 195px;
		-ms-perspective: 195px;
		-webkit-perspective: 195px;
		-moz-perspective: 195px;">
	<div class="cssload-preloader-box">	<div>B</div> <div>I</div> <div>O</div> <div>M</div> <div>E</div> <div>T</div> <div>R</div> <div>I</div> <div>C</div> </div>
    <br><br>
	</div>
</div>	
<br>
<br>
<hr style="width:900px;height:10px;  color: #0000FF;   background-color: #0000FF;   border-width: 0;   margin: 0;   padding: 0;">
<br>

<p> <strong> <a href="Biometrics_1.php"> Module 1 : Introduction </a> </p>
<br>
<p> <strong> <a href="Biometrics_2.php"> Module 2 : Biometric Devices </a>  </p>
<br>
<p> <strong> <a href="Biometrics_3.php"> Module 3 : Biometric-based Security  </a> </p>

</body>
</html>