<?php 
    include 'connection.php';
    if(isset($_GET['deletename'])){
        $name = $_GET['deletename'];

        //$sql = "delete from `usertable` where name=$name";
        $query = "delete from  usertable where name='$name' ";
        $result = mysqli_query($con,$query);
        if($result){
            echo "deletd sucessfully";
        }else{
            die(mysqli_error($con));
        }
    }
?>
