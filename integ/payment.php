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
<html lang="me">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="x-icon" href="images/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment - MSC Online Payment System</title>
    <link rel="stylesheet" href="./css/pay.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<style>
      .profile{
        text-align: center;
    }
    .upper{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    text-align: center;
    text-align: center;
    border: 2px;
    border-radius: 5px;
    width: 80%;
    height: 45rem;
    margin-top: 20px;
    margin-left: 30px;
}
.receipt {
           width: 500px;
           height: 300px;
            margin: 0 auto;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            background-color: #f9f9f9;
            display: none;
        }
        .receipt-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .receipt-title {
            font-size: 24px;
            margin-bottom: 5px;
        }
        .receipt-details {
            margin-bottom: 20px;
        }
        .receipt-details p {
            margin: 5px 0;
        }
        .receipt-items {
            border-collapse: collapse;
            width: 100%;
        }
        .receipt-items th,
        .receipt-items td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        .receipt-items th {
            background-color: #f2f2f2;
        }
        .receipt-total {
            margin-top: 20px;
            text-align: right;
        }
</style>
<body>
    <div class="wrapper">
        <form class ="hello">
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
           <div  class="pay">
           <div class="one"> <h4>Outstanding Balance: Php<?php echo htmlspecialchars($user['balance'])?></h4></div>
            <div class="method">
              <h2>Payment-Method</h2>
                <div class="money">
                  <div><img src="images/gcash.png"></div>&nbsp;
                 <div><img src="images/paypal.png"></div>&nbsp;
                 <div><img src="images/credit card.png"></div>&nbsp;
                </div><br>     
                <div class="ref"> 
                  <input type="tel" placeholder="Number" name="number" required>
                  <input type="text" placeholder="Name" name="name" required>
                </div>
                <div class="confirm"> 
                  <button>Confirm</button>
                </div>
            </div>
            </div>
          </form>
        <form class="receipt"  action="okay.php" >
          <div class="receipt-header">
              <h2 class="receipt-title">Receipt</h2>
          </div>
          <table class="receipt-items">
              <thead>
                  <tr>
                      <th>What should be paid</th>
                      <th>About to be paid</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>Outstanding balance</td>
                      <td>$120.00</td>
                  </tr>
              </tbody>
          </table>
          <div class="receipt-total">
              <p>Total: Php120.00</p>
          </div>
          <br>
          <br>
          <div class="receipt-button">
              <button class="download-button">Download Receipt</button>
          </div>
        </form>

    </div>      
  <script src="pay.js"></script>
</body>
</html>   