<?php
  require("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawsome/css/all.css">
    <link rel="stylesheet" href="login_style.CSS">
    <title>Admin Login</title>
</head>
<body>
    <div class="login-form">
        <h2>Admin Login</h2>
        <form action="#" method="POST">
            <div class="input-field">
                <p>Username</p>
                <input type="text" placeholder="Username" name="adminname">
                <p>Password</p>
                <input type="password" placeholder="Password" name="adminpassword">
            </div>
            <button type="submit" name="signin">Sign in </button>
            <div class="extra">
                <a href="#">forgot password?</a>
                <a href="#">create account</a>
            </div>
        </form>
    </div>

    <?php
//to check if sign in button clicked or not
        if(isset($_POST['signin'])){
           // echo "clicked";
           $query = "SELECT * FROM `admin_login` WHERE `admin_name` = '$_POST[adminname]' AND `admin_password` = '$_POST[adminpassword]' ";
           $result= mysqli_query($con, $query);
           if(mysqli_num_rows($result)==1){
               // echo "correct";
               session_start();
               $_SESSION['adminloginid']=$_POST['adminname'];
               header("location:admin_dashboard.php");
           }
           else{
               echo "<script> alert('incorrect password');</script>";
           }
        }
    ?>
</body>
</html>