<?php
    require("Connection.php");
    session_start();
    $user = $_SESSION['adminloginid'];
    
    $sql = "SELECT * FROM `admin_login` WHERE admin_name = '$user'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    $password = $row['admin_password'];
    if(isset($_POST['submit'])){
      $password = $_POST['admin_password'];
      $username = $_POST['admin_name'];
      $sqlup = "UPDATE `admin_login` SET admin_password = '$password',admin_name = '$username' WHERE admin_name = '$user' ";
      $result = mysqli_query($con, $sqlup);
      if($result){
          session_destroy();
          header("location: Admin_login.php");
      }
      else{
        die(mysqli_error($con));
      }

    }
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Information of Employees</title>
  </head>
  <body>
    <div class="container my-5">
    <form class="row g-3" method ="post">

    <div class="col-12">
    <label  class="form-label">Username</label>
    <input type="text" class="form-control" name="admin_name" placeholder="Username" value=<?php echo $user;?>>
  </div>
  <div class="col-12">
    <label  class="form-label">New Password</label>
    <input type="text" class="form-control" name="admin_password" placeholder="Password" value=<?php echo $password;?>>
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="submit">update</button>
  </div>
</form>
    </div>

   
  </body>
</html>