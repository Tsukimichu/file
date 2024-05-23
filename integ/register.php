<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['register'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $idNumber =$_POST['idNumber'];
        $course =$_POST['course'];
        $password = $_POST['password'];
        $password = md5($password);

        $checkEmail = "SELECT * FROM register WHERE email = '$email'";
        $result = $conn->query($checkEmail);
        if ($result->num_rows > 0) {
            echo "Email Address Already Exists!";
        } else {
            $insertQuery = "INSERT INTO register (name, password, email,idNumber,course) VALUES ('$name', '$password', '$email','$idNumber','$course')";
            if ($conn->query($insertQuery) === TRUE) {
                sleep(2);
                header("location: hello.php");
                echo "New record created successfully";
            } else {
                echo "Error: " . $conn->error;
            }
        }
    } 
}   
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        echo "Password reset instructions sent to your email.";
    } else {

        echo "Email not found.";
    }
}
?>
