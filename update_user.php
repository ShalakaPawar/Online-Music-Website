<!---here is add user button form same as register form on register page--->
<?php
    include 'connection.php';

    
    $new_name = $_GET['updatename'];
    if(isset($_POST['submit'])){
        $name = $_POST['user'];
        $pass = $_POST['password'];

        //$query = "update usertable set user='$new_name',password='$pass'";
        $query = "update usertable set user=$new_name, password='$pass'";
        $result = mysqli_query($con, $query);
        $num = mysqli_num_rows($result);
        if($num == 1){
            echo "username allready taken";
        }
        else{
            //store values in database//
            $reg = "insert into usertable(name, password) values ('$name', '$pass')";
           // mysqli_query($con, $reg);
            echo "User updated Succesfully";
           header("location:display_user.php");
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <title>Add user from admin</title>
</head>
<body>
    <div class="container">
        <div class="login-box">
        <div class="row">
 
            <div class="col-md-6 login-right">
                <h2>Add User Here<h2>
                <form  method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control" required>

                    </div>

                    <div class="form-group">
                        <label>password</label>
                        <input type="password" name="password" class="form-control" required>

                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" name="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>

</div>
    </div>
</body>
</html>