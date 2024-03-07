<?php
    include "../config.php";
 
    if(isset($_POST['submit'])){
        $fullname=$_POST['fullname'];
        $email=$_POST['email'];
        $phone_no=$_POST['phone_no'];
        $gender=$_POST['gender'];
        $password=$_POST['password'];
       

    //$sql="INSERT INTO `table name` (`user values`)VALUES('variables of user values')";
    $sql="INSERT INTO `register` (`fullname`,`email`,`phone_no`,`gender`,`password`)
                            VALUES ('$fullname','$email','$phone_no','$gender','$password')";
 
    $result=mysqli_query($conn,$sql);

    if($result==TRUE){
       header("location:../forms/login.php");    
     }
    else{
        echo "error".$sql."<br>".$conn->error;
    }

    $conn->close();
    }
?>