<?php

include 'connect.php';

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
