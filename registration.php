<?php
    session_start();

    require("connection.php");
    header("location:user1_login.php");
    $name = $_POST['user'];
    $pass = $_POST['password'];

    $query = "select * from  usertable where name='$name' ";
    $result = mysqli_query($con, $query);
    $num = mysqli_num_rows($result);
    if($num == 1){
        echo "username already taken";
    }
    else{
        //store values in database//
        $reg = "insert into usertable(name, password) values ('$name', '$pass')";
        mysqli_query($con, $reg);
        echo "registration successful";
    }
?>