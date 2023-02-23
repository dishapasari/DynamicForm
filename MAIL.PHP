<?php
$to = "d.pasari@somaiya.edu";
$subject = "thankyou";
$message = "Hello, thank you!";
$from = ;
$headers = "From: $from" ;


$mail_sent = mail($to, $subject, $message, $headers);
if($mail_sent==true)
{
    echo "Mail Sent";
}
else
{
    echo "Mail Failed";
}
?>