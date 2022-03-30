<?php
    session_start();

    require("connection.php");

    $name = $_POST['user'];
    $pass = $_POST['password'];

    $query = "select * from  usertable where name='$name' && password='$pass' ";
    $result = mysqli_query($con, $query);
    $num = mysqli_num_rows($result);
    if($num == 1){
        $_SESSION['username'] = $name;
        header("location:user_dashboard.php");
    }
    else{
        header("location:user1_login.php");
    }
?>