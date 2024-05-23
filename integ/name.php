<?php
session_start();

include "connect.php";

if(isset($_SESSION['name'])) {
    
    $name = $_SESSION['name'];
    
    
    $sql = "SELECT * FROM users WHERE name = '$name'";
    $result = mysqli_query($conn, $sql);

    
    if ($result && mysqli_num_rows($result) > 0) {
        
        $user = mysqli_fetch_assoc($result);
        $name = $user['name']; 
        
        echo "<p> $name!</p>";
    } else {
        echo "User data not found.";
    }
} else {
    echo "You are not logged in.";
}

mysqli_close($conn);
?>
