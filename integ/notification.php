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

<?php 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "login"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    echo "Connection Failed" . $conn->connect_error;
}
  $sql="SELECT * FROM notif ";

  $result = mysqli_query($conn,$sql);

  $messages=mysqli_fetch_all($result,MYSQLI_ASSOC);

  mysqli_free_result($result);
  mysqli_close($conn);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="x-icon" href="images/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification - MSC Online Payment System</title>
    <link rel="stylesheet" href="css/notif.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<style>
    .profile{
        text-align: center;
    }
    .upper {
    text-align: center;
    border: 2px;
    border-radius: 5px;
    background-color: white;
    width: 80%;
    height: 45rem;
    margin-top: 20px;
    margin-left: 30px;
}

.upper .notif{
   
   border: 2px;
   border-radius: 50px;
   background-color:whitesmoke;
   width: 90%;
   height: 3.5rem;
   margin-left: 50px;
   margin-top: 30px;
}
.notif{
    text-align: center;
}

</style>
<body>
    <div class="wrapper">
        <form class ="hello" action="">
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
            <br>
            <div class="upper">

                <div class="notif"> 
                    <br>
                    <?php foreach($messages as $message){ ?>
                     <?php echo  ($message['mesaage'])?>
                    <?php }?>
                </div>
        
            </div>
        </form>
    </div>

    <script src="pay.js"></script>


</body>
</html>