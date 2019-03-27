
<?php 

if(isset($_POST['name'])){ $name = $_POST['name']; }
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent = "From: $name \n Message: $message";
$recipient = "movalley5@gmail.com";
$subject = "Contact Form";
$mailheader = "From:" . $email;
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " - " . "<a href='/index.html' style='text-decoration:none;'> Return Home</a>";
?>