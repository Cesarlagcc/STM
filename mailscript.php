<?php

$from="noreply@gmail.com";
$email="email@yourdomain.com";
$subject=$_POST['Subject'];
$subject=$_POST['Message'];

mail($email, $subject, $message, "from:".$from);

print"Your message has been sent";
echo"your message has been sent!"

?>