<?php 
    $to = "kevin@localhost";
    $subject = "Test Email";
    $msg = "Testing sending email by using PHP";
    $header = "From: ananda@localhost";
    $send_email = mail($to, $subject, $msg, $header);
    if($send_email) echo "Success in sending email";
    else echo "Fail to send email"
    // download thunderbirds to check result
?>