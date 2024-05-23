<!DOCTYPE html>
<html lang="me">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="x-icon" href="images/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
    <title>Register</title>
</head>
<body>
    <div class="wrapper">
        <div class=" hello" >
            <form action="connect.php" method="post">
        
                <div class="content">
                   
                    <div class="input-box">
                    <input type="text" placeholder="Full Name" id="fullname" name="fullname"required> 
                    <i class='bx bxs-user'></i>
                </div>
    
                <div class="input-box"> 
                    <input type="text" placeholder="Username" id="username" name="username" required>
                    
                </div>
                <div class="input-box"> 
                    <input type="email" placeholder="Email" id="Email" name="Email">
                    
                </div>
                <div class="box"> 
                    <label for="gender"><b>Gender </b></label>
                    <div>
                        <label for="Male"><input type="radio" id="Male" name="gender" value="M">&nbsp;Male</label> &nbsp;
                        <label for="Female"><input type="radio" id="Female" name="gender" value="F">&nbsp;Female</label>
                        <label for="Others"><input type="radio" id="Others" name="gender" value="O">Others</label>
                    </div>
                </div>
                
                <div class="input-box">
                    <input type="password" placeholder="Password" name="password"required>
                </div>
                <div class="con">
                    <input type="submit" class="submit">
                </div>
    
                </div>
            </form>
        </div>
    </div>
</body>
</html>