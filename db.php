<?php
$servername = "localhost";
$db_username = "root";
$db_password = "";
$db_host="localhost";

$conn = mysqli_connect($db_host,$db_username,$db_password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "CREATE DATABASE logreg";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully
	";
} else {
    echo "Error creating database: " . $conn->error;
}
mysqli_select_db($conn,'logreg');

$sqlt="CREATE table info (fname varchar(20),lname varchar(20),uname varchar(100),pw varchar(20),gr varchar(20),email varchar(20),mno varchar(20))";
if ($conn->query($sqlt) === TRUE) {
    echo "Table info created successfully
	";
} else {
    echo "Error creating table: " . $conn->error;
}
?>