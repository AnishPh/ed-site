

<html>
  <head>
     <title>Signup</title>
     <link rel="stylesheet" type="text/css" href="edu.css"/>
 


<script type="text/javascript">
 function f1()
   {
	 var eid=document.getElementById("eid1").value;
	  
     var pw=document.getElementById("pw1").value;   
     if(eid==""||eid==null)
      {
        alert("Please Enter a valid email id");	    
	    return false;
		  
	 }
	 
     if(pw==""||pw==null || pw.length<=5)
      {
        alert("Please Enter a valid password having length more than 5");	    
	    return false;
	  }
	  
		 var eid1=eid.length;
		 var ai=eid.lastIndexOf("@");
		 var di=eid.lastIndexOf(".");
		 if(ai==-1||di==-1)
		 {
		  alert("Enter valid a  email address");
		  return false;
		  }
		 if((di-ai)<=3 || di>=eid1)
          { alert("Enter a valid email id");
             return false;
          }
	   }	 

</script>

 </head>
  
  
  <body onsubmit="return f1()" background="reg1.jpg">  
  
  



<?php 






$servername = "localhost";
$db_username = "root";
$db_password = "root";
$db_name= "logreg";

$db_host="localhost";

$conn = mysqli_connect($db_host,$db_username,$db_password,$db_name);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";




	session_start();
	
	session_destroy(); 
	
	if( isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['uname'])&&
	isset($_POST['pw'])&& isset($_POST['email'])&& isset($_POST['mno'])&& isset($_POST['mno'])
	) {
		
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$uname =$_POST['uname'];
		$pw =$_POST['pw'];
		$email = $_POST['email'];
		$gr = $_POST['gr'];
		$mno = $_POST['mno'];
		$password_confirm = $_POST['password_confirm'];
				if($pw!=$password_confirm) 
		{ 
		echo '<h2> Passwords do not match.</h2>'; }
		else 
		{  $sql = "SELECT email FROM info WHERE email='$email'";
			$query_run=$conn->query($sql);
			if($query_run->num_rows == 0)
			{
		           
				$query = "INSERT INTO info VALUES ('$fname','$lname','$uname','$pw','$gr','$email','$mno')";
				if($query_run =$conn->query($query)) { 
					header("Location: newlogin.php");
				} 			
				else { 
				echo '<h2> Couldn\'t Register :( </h2>'; 
				} 
			}
			else {
				echo '<h2> Email Id already registered. </h2>';
			}
	   }
	}
	?>
<div class="hdiv">
  <img src="icon2.png" style="height:48px">&nbsp Fun_Ed <div class="rdiv"> Signup &nbsp&nbsp&nbsp Login</div>
</div>
	
	
	  
  <div id="mdiv">
    <center> 
     <h1>Registration Form</h1>
     <form method="post" action="register1.php">
         
             
             First Name : <br>
             <input type="text" name="fname" placeholder="Enter your First name" size="50" required/> *
             <br>
              
             Last Name : <br>
             <input type="text" name="lname" placeholder="Enter your Last name" size="50" required/> *
             <br>

             Username : <br>
             <input type="text" name="uname" placeholder="Enter your Username" size="50" required/> * 
             <br>

             Password : <br>
             <input type="password" name="pw" id="pw1" placeholder="Enter your password" size="50" required/> *
             <br>
             
			 
			 Confirm Password : <br>
            <input type="password" name="password_confirm" placeholder="Enter your password again" size="50" required/> *
             <br>

		     Gender : *<br>
             <input type="radio" name="gr" value="male" required>Male</input>
             <input type="radio" name="gr" value="female">Female</input>
             <br>

			 
			 
             Email : <br>
             <input type="text" name="email" id="eid1" placeholder="Enter your email" size="50" required/> *
             <br>
			 
			 
			 
             Mobile No. <br>
             <input type="text" name="mno" placeholder="Enter your Mobile no." size="50"/> 
             <br>
             <br>
             <input type="submit" placeholder="Submit"/><br>
             *-indicates required fields
           </center> </div>
        </form>
		
    </body>
</html>
			


  

