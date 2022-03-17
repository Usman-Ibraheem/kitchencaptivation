<?php
//get data from form
$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date'];
$message = $_POST['message'];
$to = "kitchencaptivation01@gmail.com";
$subject = "Someone Sent You Message From Your Website";
$txt ="NAME :: ". $name . "\r\n\r\n EMAIL :: " . $email . "\r\n\r\n DATE & TIME :: " . $date . "\r\n\r\n\r\n\r\n MESSAGE ::\r\n\r\n" . $message;
$headers = "From: Kitchencaptivation01@gmail.com";
if($email!=NULL){
  mail($to, $subject, $txt, $headers);
}
//redirect
header("Location:Abc.html");
?>
