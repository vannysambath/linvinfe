<?php
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['subject'];
$message = $_POST['message'];

$to = "cambostchannel.gb@gmail.com";
$subject = " Mail From Sambath Vanny ";
$txt = "Name = ".$name. "\r\nEmail =".$email."\r\nMessage =".$message;
$headers = "From: noreply@yousite.com" ."\r\n".
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
header("Location:contact.html")
?>