<?php
  $to = "youremail@example.com"; // replace with your email address
  $subject = "New form submission from your website";
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $body = "Name: $name\nEmail: $email\nMessage:\n$message";
  
  if (mail($to, $subject, $body)) {
    echo "Thank you for contacting us. We'll get back to you soon!";
  } else {
    echo "Oops! Something went wrong. Please try again later.";
  }
?>
