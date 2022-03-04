<?php
require '../vendor/autoload.php';

$API_KEY = "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";

echo isset($_POSt['submit']);

if(isset($_POSt['submit'])) {
    $from = $_POST['email'];
    $msg = $_POST['form_message'];


    $email = new \SendGrid\Mail\Mail();
    $email->setFrom($from, "Example User");
    $email->setSubject("Sending with Twilio SendGrid is Fun");
    $email->addTo("s2606231@gmail.com", "Example User");
    $email->addContent("text/plain", $msg);
    $email->addContent(
        "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
    );
    $sendgrid = new \SendGrid($API_KEY);
    try {
        $response = $sendgrid->send($email);
        print $response->statusCode() . "\n";
        print_r($response->headers());
        print $response->body() . "\n";
    } catch (Exception $e) {
        echo 'Caught exception: '. $e->getMessage() ."\n";
    }
}
?>