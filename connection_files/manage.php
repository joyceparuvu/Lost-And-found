<?php
include "../config.php";
if(isset($_GET['id'])) {
      
    $id=$_GET['id'];
    $mail=$_GET['mail'];


    if(isset($_GET['lost']))
    {
  $sql="UPDATE  `lost` set `status` =1  where `id`='$id'";

  $result=mysqli_query($conn,$sql);
 
  $to_email = "$mail";
  $subject = "Simple Email Test via PHP";
  $body = "Hi, This is test email send by PHP Script";
  $headers = "From: paruvujoyce@mail.com";
  
  if (mail($to_email, $subject, $body, $headers)) {
      echo "Email successfully sent to $to_email...";
  } else {
      echo "Email sending failed...";
  }
  
    }

 }
 if(isset($_GET['id'])) {
      
    $id=$_GET['id'];
    if(isset($_GET['found']))
    {
      date_default_timezone_set('Asia/Kolkata');
        $date=date('Y-m-d H:i:s');
  $sql="UPDATE  `found` set `status` =1 ,`return_date`='$date'where `id`='$id'";

  $result=mysqli_query($conn,$sql);
  if($result==TRUE){
  //  header("location:../feedback.html");    
}
 else{
     echo "error".$sql."<br>".$conn->error;
 }
    }
 $conn->close();
 }
?>