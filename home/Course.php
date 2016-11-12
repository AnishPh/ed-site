<?php 
 session_start();
 $user=$_SESSION["uname"];
 if(isset($_POST['logout']))
 {
	 //$_SESSION["uname"].unset();
	 session_destroy();
	 header("location:homepage.html");
 }
?>
<html>
<head>
 <title>
  Courses
 </title>
 <style>

.hdiv
{
position:absolute;
top:0px;
background-color:yellowgreen;
width:100%;
left:-1px;
height:60px;
text-align:left;
color:white;
font-family:Impact;
font-size:45px;
padding-left:50px;
}

.rdiv
{
	position:relative;
	text-align:right;
	font-family:Impact;
	font-size:40px;
	top:-50px;
	margin-right:5%;
}


.cssload-loader {
	width: 781px;
	height: 156px;
	line-height: 156px;
	text-align: center;
	position: absolute;
	left: 50%;
	transform: translate(-50%, -50%);
		-o-transform: translate(-50%, -50%);
		-ms-transform: translate(-50%, -50%);
		-webkit-transform: translate(-50%, -50%);
		-moz-transform: translate(-50%, -50%);
	font-family: helvetica, arial, sans-serif;
	text-transform: uppercase;
	font-weight: 900;
	font-size:56px;
	color: rgba(8,0,230,0.72);
	letter-spacing: 0.2em;
}
.cssload-loader::before, .cssload-loader::after {
	content: "";
	display: block;
	width: 47px;
	height: 47px;
	background: rgb(3,190,237);
	position: absolute;
	animation: cssload-load 0.81s infinite alternate ease-in-out;
		-o-animation: cssload-load 0.81s infinite alternate ease-in-out;
		-ms-animation: cssload-load 0.81s infinite alternate ease-in-out;
		-webkit-animation: cssload-load 0.81s infinite alternate ease-in-out;
		-moz-animation: cssload-load 0.81s infinite alternate ease-in-out;
}
.cssload-loader::before {
	top: 0;
}
.cssload-loader::after {
	bottom: 0;
}



@keyframes cssload-load {
	0% {
		left: 0;
		height: 94px;
		width: 47px;
	}
	50% {
		height: 25px;
		width: 125px;
	}
	100% {
		left: 734px;
		height: 94px;
		width: 47px;
	}
}

@-o-keyframes cssload-load {
	0% {
		left: 0;
		height: 94px;
		width: 47px;
	}
	50% {
		height: 25px;
		width: 125px;
	}
	100% {
		left: 734px;
		height: 94px;
		width: 47px;
	}
}

@-ms-keyframes cssload-load {
	0% {
		left: 0;
		height: 94px;
		width: 47px;
	}
	50% {
		height: 25px;
		width: 125px;
	}
	100% {
		left: 734px;
		height: 94px;
		width: 47px;
	}
}

@-webkit-keyframes cssload-load {
	0% {
		left: 0;
		height: 94px;
		width: 47px;
	}
	50% {
		height: 25px;
		width: 125px;
	}
	100% {
		left: 734px;
		height: 94px;
		width: 47px;
	}
}

@-moz-keyframes cssload-load {
	0% {
		left: 0;
		height: 94px;
		width: 47px;
	}
	50% {
		height: 25px;
		width: 125px;
	}
	100% {
		left: 734px;
		height: 94px;
		width: 47px;
	}
body
{
   font-family: Arial;
   font-weight: normal;
   font-size: 13px;
   line-height: 1.1875;
   margin: 0;
   padding: 0;
}
}
#Image1
{
   border: 0px #000000 solid;
   -moz-box-shadow: 0px 0px 10px #000000;
   -webkit-box-shadow: 0px 0px 10px #000000;
   box-shadow: 0px 0px 10px #000000;
   left: 0;
   top: 0;
   width: 300x;
   height: 200px;
}
div
{
	font-family:Gabriola;
	font-size:30px;
	color:darkmagenta;
}
p
{
	font-size:30px;font-family:Bookman Old Style;color:#000000;background-color:#ffffff;text-shadow:1px 1x 0 #bcbcbc, 2px 2px 0 #9c9c9c;
}
a{
	color:crimson;
}
a:link {
    text-decoration: none;
	text-shadow:2px;
}

a:visited {
    text-decoration: none;
}

a:hover {
    text-decoration: none;
}

a:active {
    text-decoration: none;
}
 </style>
</head>
<body>
<div class="hdiv">
  <img src="Resource/icon2.png" style="height:48px">&nbsp Fun_Ed <div class="rdiv"> Welcome &nbsp <?php echo $user ?> </div>
</div>
<br><br>
 <form  method="post"><p style="text-align:right"><input type="submit" name="logout" value="logout" style="background-color:yellowgreen;padding:15px 15px;font-size:20px;font-variant:small-caps"></input></p></form>
<br>
 <br><br>

 <h1>
  <center>
   <div class="cssload-loader"> C O U R S E S </div>
  </center>
 </h1>
 <br><br><br><br><br>
 <hr style="height:10px;  color: #0000FF;   background-color: #0000FF;margin:2px;">
 
 <br>
 <p>
&nbsp &nbsp ▒▒▒▓▓█ &nbsp <a href="Resource/Quantum.php"> QUANTUM COMPUTING </a>&nbsp █▓▓▒▒▒
<br><br>
&nbsp <a href="Resource/Quantum.php"><img src="Resource/crypto.jpg"  id="Image1" style="float:left;position:relative;left:20%"> </a>
</p>
<div style="float:right;position:relative;left:-5%">
 "  The history of the universe is, in effect, a huge and ongoing quantum <br>computation and The universe is a quantum computer " - Seth Lloyd. <br>
</div>
<br><br><br><br><br><br><br><br><br>
<hr style="height:10px;  color: #0000FF;   background-color: #0000FF;margin:2px;">


<p style="padding-left:22em;">
&nbsp ▒▒▒▓▓█ &nbsp <a href="Resource/Biometrics.php"> BIOMETRICS </a>&nbsp █▓▓▒▒▒
<br><br>
<div style="float:left">
 &nbsp&nbsp " The identity conversation has come full circle, moving from biographic <br>
 &nbsp&nbsp match to single mode biometric to multi-modal to a person-centric view <br>
 &nbsp&nbsp which includes all identity information (biographic + biometrics) "
</div> 
<a href="Resource/Biometrics.php"><img src="Resource/biometric.jpg" id="Image1" style="float:right;position:relative;left:-18%"> </a>
</p>
<br><br><br><br><br><br><br><br><br><br><br><br>
<hr style="height:10px;  color: #0000FF;   background-color: #0000FF;margin:2px;">


 <p>
&nbsp &nbsp  ▒▒▒▓▓█ &nbsp <a href="Resource/Virtual.php"> VIRTUAL REALITY </a>&nbsp █▓▓▒▒▒
<br><br>
&nbsp <a href="Resource/Virtual.php"> <img src="Resource/virtual.jpg"  id="Image1" style="float:left;position:relative;left:14%"> </a>
<div style="float:right;position:relative;left:-15%">
 “ We make fiction because we are fiction ...<br> It lived us into being and it lives us still.” ― Russell Hoban
</div>
</p>
<br><br><br><br><br><br><br><br>
<hr style="height:10px;  color: #0000FF;   background-color: #0000FF;margin:2px;">


<p style="padding-left:22em">
&nbsp   ▒▒▒▓▓█ &nbsp <a href="Resource/Machine.php"> MACHINE LEARNING </a>&nbsp █▓▓▒▒▒
<br><br>
<div style="float:left;position:relative;left:20%">
 <br>" A breakthrough in machine learning would <br> be worth ten Microsofts " -Bill Gates
</div>
<a href="Resource/Machine.php"><img src="Resource/machine.jpg" id="Image1" style="float:right;position:relative;left:-12%"></a>
</p>
<br><br><br><br><br><br><br><br><br><br><br><br>
<hr style="height:10px;  color: #0000FF;   background-color: #0000FF;margin:2px;">


</body>
</html>