
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <link rel="icon" type="x-icon" href="images/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - MSC Online Payment System</title>
    <link rel="stylesheet" href="css/myStyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
    <style>
        body{
            background-image: url("images/msc.jpg");
        }
        .registerForm{
            
    width: 420px;
    height: 35rem;
    background-color: rgba(5, 2, 0, 0.611);
    color:#FFF;
    border-radius: 10px;
    padding:20px 30px;
}
.title h2{
    color:white;
}
    </style>
<body>
    <div class="logo" id="logo">
        <img src="images/logo.png.png" alt="logos">            
    </div>
    <div class="title">
        
    </div> <br>

    <div class="wrapper">
        <form id="loginForm" action="login.php" method="post">
        <h2>MSC Online Payment System</h2>&nbsp;
            <h1>Login</h1>
            <div class="input-box">
                <input type="email" placeholder="Email" name="email" required> 
                <i class='bx bxs-user'></i>
            </div>

            <div class="input-box">
                <input type="password" placeholder="Password" name="password" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>

            <div class="hello">
                <label><input type="checkbox">Remember me</label>
                <a href="#" id="forpassLink">Forgot Password</a>
            </div>
           
            <button class="btn" name="login" href="<?php echo $users ['email']?>">Login</button>
 
            <div class="register">
                <p>Don't have an account? <a href="#" id="registerLink" onclick="hideImage()">Register</a></p>
            </div>
        </form>

        <form class ="registerForm" id="registerForm" action="register.php" method="post" style="display: none;">
            <h1>Registration</h1>
            <div class="input-box">
                <input type="text" placeholder="Enter your name" name="name" required> 
                <i class='bx bxs-user'></i> 
            </div>
            <div class="input-box">
                <input type="text" placeholder="Enter your Id number" name="idNumber" required> 
                <i class='bx bxs-id-card'></i> 
            </div>
            <div class="input-box">
                <input type="text" placeholder="Enter your Course" name="course" required> 
                <i class='bx bx-news'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Enter your Password" name="password" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>
            <div class="input-box">
                <input type="email" placeholder="Enter your Email" name="email" required>
                <i class='bx bxs-envelope'></i> <br> 
            </div>
            <button class="btn" name="register">Register</button>
        </form>

        <form id="forgotPasswordForm" action="forgotpass.php" method="post" style="display: none;">
    <h1>Forgot Password</h1>
    <div class="input-box">
        <input type="email" placeholder="Enter your Email" name="email" required>
        <i class='bx bxs-envelope'></i> <br> 
    </div>
    <button type="submit" class="btn" name="submit">Reset Password</button>
    <p id="message"></p>
</form>

    </div>
    <script>
        function hideImage() {
    document.getElementById("logo,title").style.display = "none";
}
    </script>
    <script src="index.js"></script>
</body>
</html>
