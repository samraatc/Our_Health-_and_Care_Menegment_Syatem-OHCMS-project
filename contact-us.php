<?php
$name = $_post[''];
$email = $_post['email'];
$subject = $_post['subject'];
$messege = $_post['messege'];

$email_from = 'bishnu1684@gmail.com';
$email_subject ='New Form Submission';
$email_body = "User name : $name.\n".
               "User Email : $email.\n".
               "Subject : $subject.\n".
               "User Messege : $messege .\n";
?>