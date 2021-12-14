<?php
$full_name = $_POST['f_name'];
$email = $_POST['email'];
$date = $_POST['date'];
$time = $_POST['hour'];
$message= $_POST['message'];


$user_message =  "Hi i'm ". $full_name. "<br>". $message. 
"<br>". "Recording appointment date: ".$date." by: ".$time.".";

$user_message = wordwrap($user_message, 70);
// mail(to, subject, message, headers,parameters)

mail(/*"engr.prosperordu@gmail.com",*/"kpali.promise@gmail.com", "Request for advert placement", $user_message);



// /////////////////////////////////////////////////////////////////



header('Location: index.php');
?>