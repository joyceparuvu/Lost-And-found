<?php
    include "../config.php";
 
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $mail=$_POST['mail'];
        $item=$_POST['item'];
        $location=$_POST['location'];
        $date=$_POST['date'];
        $description=$_POST['description'];
        $reward=$_POST['reward'];
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
    $sql="INSERT INTO `lost` (`name`,`mail`,`item`,`location`,`date`,`description`,`reward`,`mobile`,`image`)
                            VALUES ('$name','$mail','$item','$location','$date','$description','$reward','$mobile','$filename_data')";
 
    $result=mysqli_query($conn,$sql);

    if($result==TRUE){
       header("location:../similar.php?item=$item");    
     }
    else{
        echo "error".$sql."<br>".$conn->error;
    }

    $conn->close();
    }
?>