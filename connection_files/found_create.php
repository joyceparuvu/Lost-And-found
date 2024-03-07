<?php
    include "../config.php";
 
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $item=$_POST['item'];
        $location=$_POST['location'];
        $date=$_POST['date'];
        $time=$_POST['time'];
        $message=$_POST['message'];
        $mobile=$_POST['mobile'];

        $filename = $_FILES["image"]["name"];
$tempname = $_FILES["image"]["tmp_name"]; 
$uid = uniqid();
$filename_data=$uid.$filename;
$folder = "../images/message/$filename_data";   
if (move_uploaded_file($tempname, $folder)) {

         }else{
           echo "Failed to upload image";
    }

    //$sql="INSERT INTO `table name` (`user values`)VALUES('variables of user values')";
    $sql="INSERT INTO `found` (`name`,`email`,`item`,`location`,`date`,`time`,`message`,`image`,`mobile`)
                            VALUES ('$name','$email','$item','$location','$date','$time','$message','$filename_data','$mobile')";
 
    $result=mysqli_query($conn,$sql);

    if($result==TRUE){
        header("location:../similar_lost.php?item=$item");    

}
    else{
        echo "error".$sql."<br>".$conn->error;
    }

    $conn->close();
    }
?>