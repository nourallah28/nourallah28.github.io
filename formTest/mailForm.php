<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $to = "nourallah.m@outlook.com";
    $headers = "From: $email";
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;
    
    

    mail($to, $phone, $txt, $headers)
    header("Location: index.html?mailsend");
?>
