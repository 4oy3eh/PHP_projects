<?php
$email = $_POST['email'];
$message = $_POST['message'];

$error = '';
if(trim($email) == '')
    $error = 'Ievadiet savu emailu';
else if (trim($message) == '')
    $error = 'Ievadiet tekstu';


if($error !='') {
    echo $error;
    exit;
}

$subject = "=?utf-8?B?".base64_encode("Test message")."?=";
$headers = "From: $email\r\nReply-to; $email\r\nContent-type: text/html;charset=utf-8\r\n";
mail('xoxosdw@gmail.com',$subject,$message,$headers);

header('Location: /about.php')

?>