<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];

$headers = implode ( "\n",array ( "From: paulo@pauloflesch.dev", "Reply-To: paulo@pauloflesch.dev", "Return-Path: paulo@pauloflesch.dev","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );

$mail_body = "Nome : ".$name."\n"; 
$mail_body .= "Email : " . $email . "\n";
$mail_body .= "Assunto : " . $subject . "\n";
$mail_body .= "Menssagem : " . $message . "\n";
if(mail("contato@pauloflesch.dev","From: Contato através do site ",nl2br($mail_body),$headers)){
    echo "1";    
}else{
    echo "0";
}
