<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "davidetorre99@gmail.com";
    $subject = "Messaggio da $name";
    $headers = "Email: $email";
    
    mail($to, $subject, $message, $headers);
    
    // Redirect back to the page after sending email
    header("Location: main.html");
    exit();
}
?>
