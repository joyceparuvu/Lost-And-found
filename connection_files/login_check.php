<?php
    include "../config.php";
 
    if(isset($_POST['submit'])){
        $password=$_POST['password'];
        $email=$_POST['email'];
        $sql="SELECT * from `register` where `email`='$email' and `password`='$password'";
        $result=mysqli_query($conn,$sql);
        if ($result->num_rows >=1)
        {
         header("location:../index.php");    
        }
        else {
            echo '<script type="text/javascript">
            alert("Invalid details");
     </script>'
     ;  ?> 
     <center>Redirect page
     <button> <a href="../forms/login.php" >click here</a>   </button></center>  <?php
        }
        $conn->close();

    }