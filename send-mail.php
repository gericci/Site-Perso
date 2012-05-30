<?php
$subject = $_POST['subject'];
$from = $_POST['email'];

//data
$msg = "NAME: "  .$_POST['name']    ."<br>\n";
$msg .= "EMAIL: "  .$_POST['email']    ."<br>\n";
$msg .= "WEBSITE: "  .$_POST['web']    ."<br>\n";
$msg .= "COMMENTS: "  .$_POST['comments']    ."<br>\n";

//Headers
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: <".$from. ">" ;


$headers = "Reply-To: demey.emmanuel@gmail.com\nFrom: demey.emmanuel@gmail.com\nMessage-ID: <". md5(uniqid(time())) ."@domain.tld>\nMIME-Version: 1.0\nContent-type: text/html; charset=iso-8859-1\nContent-transfer-encoding: 8bit\nDate: " . date('r', time()) . "\nX-Priority: 3\nX-MSMail-Priority: Normal\nX-Mailer: PHP\n";

   mail("demey.emmanuel@gmail.com", "Contact - emmanueldemey.fr", $msg, $headers);
?>
