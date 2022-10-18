<?php 
if(isset($_POST['action'])){
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $msg = htmlspecialchars($_POST["message"]);
    $phone = htmlspecialchars($_POST["phone"]);

    $to = "info@mayyelites.com";
    $body = "";
    

    $body .= "From: ".$name. "\r\n";
    $body .= "Email: ".$email. "\r\n";
    $body .= "Phone: ".$phone. "\r\n";
    $body .= "Subject: ".$subject. "\r\n";
    $body .= "Message: ".$msg. "\r\n";

    $headers = "From: Mayy Elites Form <contact@mayyelites.com>". "\r\n";
    $headers .= "Reply-To: ".$name. "<" .$email. ">". "\r\n";

    if(mail($to, $subject, $body, $headers)) {
        header("Location: /thanks");
    } else{
        header("Location: /error");
    }
}
