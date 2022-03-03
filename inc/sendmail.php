<?php
$to = "boney3326@gmail.com";
$subject = "Query";

$message = $_POST["form_message"];

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$from = $_POST["email"];
$headers .= "From: $from";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);
?>