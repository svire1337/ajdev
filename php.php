<?php
 
 if(isset($_POST['submit'])) {
  

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['field'];

$email_form = 'mufidskamer@gmail.com';

$email_subject = "New Form Submission";

$email_body = "User Name: $name .\n".
                "User Email: $visitor_email .\n".
                  "Subject: Test .\n".
                     "User Message: $message .\n";

                    $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                    $headers .= "From: <$email_form>" . "\r\n";
                   
                    $retval = mail($visitor_email,$email_subject,$email_body,$headers);

 }


header("Location: index.html");

?>