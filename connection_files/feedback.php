<?php
    include "../config.php";
 
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $feedback=$_POST['feedback'];
      
       

    //$sql="INSERT INTO `table name` (`user values`)VALUES('variables of user values')";
    $sql="INSERT INTO `feedback` (`name`,`feedback`)
                            VALUES ('$name','$feedback')";
 
    $result=mysqli_query($conn,$sql);

    if($result==TRUE){ ?>
    <center>Redirect page
      <button> <a href="../index.php" >click here</a>   </button></center>
       <?php
     }
    else{
        echo "error".$sql."<br>".$conn->error;
    }

    $conn->close();
    }
?>