<html>
<head>
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


.fulldiv{
	
	position:static;
}


.leftcontent{
	
	position:fixed;
	right:700px;
	border-right:3px solid;
	height:100%;
	
}




.qc{
position:fixed;
left:200px;
top:30px;




}
.qci{
z-index:-1px;		
}
.qcii{
position:fixed;
top:140px;
left:180px;
z-index:90px;
}

#qcplay{
width:300px;
}

.bs{
	
     	position:fixed;
	
       top:330px;
      left:200px;	   
}

.bsi{
z-index:-1px;		
}
.bsii{
position:fixed;
top:420px;
left:180px;
z-index:90px;
}

#bsplay{
width:300px;
}



.rightcontent{
	
	position:fixed;
	
	height:100%;
	
	
	
}



.vr{
	
	position:fixed;
	right:200px;
	top:30px;
	
}


.vri{
z-index:-1px;		
}
.vrii{
position:fixed;
top:140px;
right:215px;
z-index:90px;
}

#vrplay{
width:300px;
}



.ml{
	position:fixed;
	right:160px;
	top:330px;
	
}

.mli{
z-index:-1px;		
}
.mlii{
position:fixed;
top:420px;
right:230px;
z-index:90px;
}

#mlplay{
width:300px;
}





#font{
	
	
color:00FF00;
font-size:25px;
font-weight:bold;
}




#heading
{
	
	
font-size:40px;
color:CC6633;
font-weight:bolder;
	
	
}


.ac{
	font-size:30px;
	color:white;
	
}
a
{
 text-decoration:none;
 color:white;
}

</style>
<body background="rsrc/images/bg2.jpg">
<div class="hdiv">
  <img src="icon2.png" style="height:48px">&nbsp Fun_Ed <div class="rdiv"><a href="register1.php"> Signup </a>&nbsp&nbsp&nbsp <a href="newlogin.php"> Login </a></div>
</div>
<br><br><br>
<div class="fulldiv">
<span class="ac">
&nbsp Available Courses are:</span>
<br><br>
<div class="leftcontent">
<div class="qc">
<br><br><br>
<p id="font">Qauntum computing is about........</p>
 <div class="qci">
 <img src="rsrc/images/quantum computing.png">
    <div class="qcii">
     <a href="rsrc/quantum computing.php"><img id="qcplay" src="rsrc/images/play.png"></a>
     
     </div>
 </div>

</div>
<hr>
<div class="bs">
<br><br>
<p id="font">Biometrics is about........</p>
 <div class="bsi">
 <img src="rsrc/images/Biometrics.png">
    <div class="bsii">
     <a href="rsrc/biometrics.php"> <img id="bsplay" src="rsrc/images/play.png"></a>
     
     </div>
 </div>

</div>


 </div>



<div class="rightcontent">

<div class="vr">
<br><br><br>
<p id="font">Virtual Reality is about........</p>
 <div class="vri">
 <img src="rsrc/images/virtual reality.png">
    <div class="vrii">
    <a href="rsrc/virtual reality.php"><img id="vrplay" src="rsrc/images/play.png"></a>
     
     </div>
 </div>

</div>



<div class="ml">
<br><br>
<p id="font">Machine Learning is about........</p>
 <div class="mli">
 <img src="rsrc/images/Machine Learning.png">
    <div class="mlii">
     <a href="rsrc/machine learning.php"><img id="mlplay" src="rsrc/images/play.png"></a>
     
     </div>
 </div>

</div>

</div>





</div>


