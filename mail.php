
<?php
// here there will be name of email id to you wan to send
$to_email = "parikhvaibhav19@gmail.com";   
// $name will be name of the assingment that is left 
$name=   ;
$subject = "assingment is left in $name Subject";
// $dat is the last of it
$dat = ;
$body = "This is to remind you two days later that is on $dat date before that you have to submit the assingment of $name Subject";
$headers = "From: vaibpatel02@gmail.com";
 
if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}
?>