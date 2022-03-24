<?php
if (!isset($POST['submit']))
{
    echo "error; you need to submit the form!";
} 

else
{
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$subject = $_POST['subject'];



// Validate first
if (empty($fname)) || (empty($lname)) || (empty($subject))
{
    echo "Please enter your name and message!";
    exit;
}

$email_from = "lichih.yen@gmail.com"; // Put my emil address here
$email_subject = "New contact me from My Portfolio Website";
$email_body = "You have recieved a new message from the user $fname.\n".
"Here is the message: \n $subject".



$to = "lichih.yen@gmail.com";
$headers = "From $email_from \r\n";
$headers .= "Reply-To:"

mail($to, $email_subject, $email_body, $headers);
}
?> 

