<?php
session_start();   

session_destroy();
sleep(2);

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "login"; 

$newValue = 0;

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo "Connection Failed" . $conn->connect_error;
}

$sql = "UPDATE register SET balance = '$newValue'";

$result = mysqli_query($conn,$sql);
    
$conn->close();

header("location:payment.php");
?>
