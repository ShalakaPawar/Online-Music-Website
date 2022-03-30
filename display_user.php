<?php 
    include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Display user to Admin</title>
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5" ><a href="user.php" class="text-light">Add User</a>
    </button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Username</th>
      <th scope="col">password</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
      <?php 
        $sql = "Select * from `usertable`";
        $result = mysqli_query($con, $sql);
        if($result){
                while($row = mysqli_fetch_assoc($result)){
                $name = $row['name'];
                $password = $row['password'];
                echo ' <tr>
                <th scope="row">'.$name.'</th>
                <td>'.$password.'</td>
                <td>
                <button class="btn btn-primary"><a href="update_user.php?updatename='.$name.'" class="text-light">Update</a></button>
                <button class="btn btn-danger"><a href="delete_user.php?deletename='.$name.'" class="text-light">Delete</a></button>
                </td>
                </tr>';
            }
        }
      ?>

</table>
    </div>
</body>
</html>