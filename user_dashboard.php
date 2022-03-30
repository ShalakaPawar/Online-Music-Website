<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("location:user_login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="sidebar.CSS">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
        body{
            margin: 0px;
        }
        div.header{
            font-family:poppins;
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding:0px 60px;
            background-color: #204969;
        }
        div.hrader button{
            background-color: #f0f0f0;
            font-size:16px;
            font-weight:550;
            padding:8px 12px;
            border:2px solid black;
            border-radius:5px;
        }
    </style>

</head>
<body>
    <div class="header">
        <h1>WELCOME TO ADMIN PANEL - <?PHP echo $_SESSION['username'] ?></h1>
        <form method="POST">
            <button name="logout">Logout</button>
        </form>
    </div>

   <!--- <input type="checkbox" id ="check">--->

   <!---header area ----->
   <header>
       <label for="check">
       <i class="fa-solid fa-bars" id="sidebar_btn"></i>
       </label>
       <div class="left_area">
           <h3> Dashboard</h3>
    </div>
    </header>
  <!-----sidebar start here---->

    <div class="sidebar">
        <center>
            <img src="1.jpeg"  class="profile_image" alt="">
            <h4>sejal<h4>
        </center>
        <a href="music.html"><i  class="fa-solid fa-desktop"></i><span>Best Songs</span></a>
        <a href="Albums.html"><i  class="fa-solid fa-cogs"></i><span>Album Songs</span></a>
        <a href="#"><i  class="fa-solid fa-table"></i><span>Artist</span></a>
        <a href="#"><i  class="fa-solid fa-th"></i><span>Profile Setting</span></a>
    </div>
 <!---sidebar end here--->
 <div class="content"></div>

<?php
    if(isset($_POST['logout'])){
        session_destroy();
        header("location:admin_login.php");
    }
 ?>
</body>
</html>