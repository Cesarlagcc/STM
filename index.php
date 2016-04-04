<?php
   $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: TangledDemo'; 
    $to = 'demo@tangledindesign.com'; 
    $subject = 'Hello';

    $body="From: $name\n Email: $email\n Message:\n $message";
?>

<?php
    if ($_Post['submit']) {
        if (mail($to,$subject,$body,$from)){
            echo '<p>your message has been sent!</p>'
        }else{
            echo'<p>Something went wrong, please try again!</p>'
        }
    }
?>