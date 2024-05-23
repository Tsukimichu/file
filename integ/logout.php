<?php 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "login"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    echo "Connection Failed" . $conn->connect_error;
}
  $sql="SELECT * FROM register ";

  $result = mysqli_query($conn,$sql);

  $users=mysqli_fetch_all($result,MYSQLI_ASSOC);

  mysqli_free_result($result);
  mysqli_close($conn);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="x-icon" href="images/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <link rel="stylesheet" href="css/logout.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<style>
    
    .profile , .profile p{
        text-align: center;
    }
</style>
<body>
    <form class ="hello" action="sure.php">
          <div class="dashboard">
            <div class="profile">
                <img src="images/user.png">
                <p>
                      <?php foreach($users as $user){ ?>
                      <div> <?php echo htmlspecialchars($user['name'])?></div>
                      <div> <?php echo htmlspecialchars($user['idNumber'])?></div>
                      <div> <?php echo htmlspecialchars($user['course'])?></div>
                      <?php } ?>
                    </p> <br>
              </div>
            <ul>
                <li><a href="home.php"><i class='bx bxs-home'>&nbsp;</i><b>Home</b></a></li> <br>
                <li><a href="notification.php"><i class='bx bxs-notification'></i>&nbsp;<b>Notification</b></a></li> <br>
                <li><a href="fees.php"><i class='bx bx-coin'>&nbsp;</i><b>Fees</b></a></li> <br>
                <li><a href="payment.php"><i class='bx bxs-receipt'>&nbsp;</i><b>Payment</b></a></li> <br>
                <li><a href="settings.php"><i class='bx bxs-cog'></i>&nbsp;<b>Settings</b></a></li> <br>
                <li><a href="logout.php"><i class='bx bx-log-in'></i>&nbsp;<b>Logout</b></a></li>
            </ul>
           </div>
           <div class="upper">
           <div class="logout-container">
                 <h2>Are you sure you want to logout?</h2>
              <button class="logout-button">Yes</button> 
    </div>
           </div>
    </form>
</body>
</html>
