<?php
if (isset($_POST['action'])) {
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $topic = htmlspecialchars($_POST["topic"]);
  $grade = htmlspecialchars($_POST["grade"]);
  $msg = htmlspecialchars($_POST["message"]);
  $phone = htmlspecialchars($_POST["phone"]);

  $to = "info@mayyelites.com, teacher.kkimani@gmail.com";
  $body = "";


  $body .= "From: " . $name . "\r\n";
  $body .= "Email: " . $email . "\r\n";
  $body .= "Phone: " . $phone . "\r\n";
  $body .= "Grade: " . $grade . "\r\n";
  $body .= "Math Topic: " . $topic . "\r\n";
  $body .= "Message: " . $msg . "\r\n";

  $subject = "Free Math Class Request by: " . $name;

  $headers = "From: Free Class Form <contact@mayyelites.com>" . "\r\n";
  $headers .= "Reply-To: " . $name . "<" . $email . ">" . "\r\n";

  if (mail($to, $subject, $body, $headers)) {
    header("Location: /thanks");
  } else {
    header("Location: /error");
  }
}
