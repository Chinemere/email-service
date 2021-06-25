<?php 
$to= $_POST["to"];
$from= $_POST["from"];
$subject = $_POST["subject"];
$message= $_POST["message"];
 $body = "This is an automated message, Please do not reply . \n\n $message";
$headers= "from: $from";
mail($to, $subject, $body, $headers);

echo "Message Sent! <a href='index.html'>Click Here</a> To send another email"

?>