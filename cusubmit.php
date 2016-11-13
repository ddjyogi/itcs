<?php
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$name = $first_name.' '.$last_name;
$company = $_POST['company'];
$email = $_POST['email'];

$to = "khuranachetan@gmail.com";
$tocust = "$email";
$phone = $_POST['phone'];
$subject = $name." ".$company." ".$phone;
$message = $_POST['message'];
$message = <<<EMAIL
Email from $name
My email id is $email
Message: $message
EMAIL;
//mail($to, $subject, $message, "From: ".$email);
echo 'Message sent! Thank you for showing interest';

$messagecust = $_POST['message'];
$messagecust = <<<EMAIL
Dear Customer,
        
        Thanks for showing interest in our services. For further queries please contact our helpdesk at $to.
        Your request is stated as below:
        
        You are interested in: $messagecust
        Your Name:  $name
        Company:    $company
        Phone:      $phone
        Email:      $email
        
Warm Regards,
Team Pannacea        
EMAIL;
mail($tocust, $subject, $messagecust, "From: ".$email);
?>