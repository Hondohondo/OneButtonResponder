<?php

// Report all errors
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Get the form fields, remove html tags and whitespace.
//$name = strip_tags(trim($_POST["name"]));
//$name = str_replace(array("\r","\n"),array(" "," "),$name);
//$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
//$message = trim($_POST["message"]);
//$country = trim($_POST["country"]);


//Check data
//if(empty($name) OR empty($country) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
//    header("Location: https://intensivejournal.org/landingpage/index.php?success=-1#form");
//    exit;
//}

/*if(empty($name) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: https://intensivejournal.org/landingpage/index.php?success=-1#form");
    exit;
}*/

//Set the recipient email address.
$recipient = "mnandi19@jcu.edu, websitevanillapro@gmail.com";

//Set the email subject
//$subject = "New Facebook Ad Contact from $name";
$subject = "Urgent: I'm in danger, please send help";

//Build the email content
//$email_content = "Name: $name\n";
$email_content = "Mom and Dad,\n\n";
$email_content .= "I'm in immediate danger and used the one-button responder app to send this message. Please send help right away\n\n";
$email_content .= "Love, your son\n\n";
//$email_content .= "Email: $email\n\n";
//$email_content .= "State or Country: \n$country\n";

//Build the email headers
//$email_headers = "From: $name <$email>";
$email_headers = "From: Moses Nandi <postmaster@darasareports.com>";
//$email_headers = "From: One Button Responder App";

//Send the email
mail($recipient, $subject, $email_content, $email_headers);

//Redirect to the index.php page with success code
//header("Location: https://intensivejournal.org/landingpage/index.php?success=1#form");
header("Location: success.html");

?>
