<?php 
 session_start();
 $user=$_SESSION["uname"];
 if(isset($_POST['courses']))
 {
	 //$_SESSION["uname"].unset();
	 header("location:../Course.php");
 }
?>
<html>
<head>
 <title>
  Virtual Reality
 </title>
 <link rel="stylesheet" href="course.css">
</head>
<body>
<div class="hdiv">
  <img src="icon2.png" style="height:48px">&nbsp Fun_Ed <div class="rdiv"> Welcome &nbsp <?php echo $user ?> </div>
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
	<div class="cssload-preloader-box">	<div>V</div> <div>I</div> <div>R</div> <div>T</div> <div>U</div> <div>A</div> <div>L</div> </div>
    <br><br>
	<div class="cssload-preloader-box" style="position:relative;top=100px;left:0px"> <div>R</div> <div>E</div> <div>A</div> <div>L</div> <div>I</div> <div>T</div> <div>Y</div>
	</div>	

</div>	
<br>
<br><br>
<hr style="width:900px;height:10px;  color: #0000FF;   background-color: #0000FF;   border-width: 0;   margin: 0;   padding: 0;">
<br><br>

<p> <strong> <a href="Virtual_1.php"> Module 1 : Introduction </a> </p>
<br>
<p> <strong> <a href="Virtual_2.php"> Module 2 : VR Devices </a> </p>
<br>
<p> <strong> <a href="Virtual_3.php"> Module 3 : VR Application and Gaming </a> </p>

</body>
</html>