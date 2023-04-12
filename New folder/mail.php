<?php
require 'PHPMailerAutoload.php';
require 'dbh.php';

$mail = new PHPMailer;

$mail->isSMTP();                                    
$mail->Host = 'smtp.gmail.com';  
$mail->SMTPAuth = true;        
$mail->SMTPDebug = 4;
$mail->Username = 'phiilthedaddy@gmail.com';               
$mail->Password = '224durants';                      
$mail->SMTPSecure = 'ssl';                         
$mail->Port = 587;                                   

$mail->setFrom('phiilthedaddy@gmail.com', 'Mailer');
$mail->addAddress('nehadali@hotmail.co.uk', 'User');                   
$mail->addReplyTo('phiilthedaddy@gmail.com', 'Information');

$mail->isHTML(true);                              

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}