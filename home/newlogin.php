<?php

$servername = "localhost";
$db_username = "root";
$db_password = "root";
$db_name= "logreg";
$db_host="localhost";
$con= mysqli_connect($db_host,$db_username,$db_password,$db_name);

   if (!$con)
    {
    die("Connection failed: " . mysqli_connect_error());
	}
    else
    {
    //echo "'<h1><b>Connected successfully</b></h1>'";
    }

    session_start();
	
	if(isset($_POST['uname']) && isset($_POST['pw']))
	{
		$uname = $_POST['uname'];
		$pw= $_POST['pw'];
		$_SESSION["uname"]=$uname;
        $sql= "SELECT uname,pw from info WHERE uname='$uname' AND pw='$pw'";
        $query_run=$con->query($sql);
	
		if($query_run->num_rows==0)
		{
	    echo "'<h2><b><br>Invalid Username or Password !!!</b></h2>'";
		}
		
		
        else
        {
	    header("Location:Course.php");
	    }
	}   
?>

<html> 
  <head>
    <title>
       Login
    </title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
  </head>
  
  <body>
  <div class="hdiv">
  <img src="Resource/icon2.png" style="height:48px">&nbsp Fun_Ed <div class="rdiv"><a href="register1.php"> Signup </a>&nbsp&nbsp&nbsp <a href="newlogin.php"> Login </a></div>
</div>
    <br><br><br>
    <center>
        <div class= "main2">	 
            Login <br><br>
        </div>
        
		<div class= "main1">  
	        <form method="post" name="myform">
				<br>
				Username:<br>
				<input type="text" name="uname" placeholder="Username" size="30"/><br><br>
				Password:<br>
				<input type="password" name="pw" placeholder="Password" size="30"/><br><br>
				<input type="submit" value="Submit"/><br>
			</form>
		</div>
	
    </center>
  </body> 
</html>







