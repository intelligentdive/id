<?php
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $interests = $_POST['interests'];
    $whatsapp = $_POST['whatsapp'];
    $email = $_POST['email'];
    $des = $_POST['des'];

    $text = 'Hey there, </br></br> My name is ' . $name . ', we might interest to use your ' . $interests . ' services. You can reach me at ' . $whatsapp . ' or get in touch by email at ' . $email . '. </br></br> Project details ' . $des . '. </br></br></br> Thanks </br>' . $name;

    $to = "info@intelligentdive.com";
    $subject = $s_name;
    $message = $text;
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/html\r\n";


    $mail_sent = mail($to, $subject, $message, $headers);

    if ($mail_sent) {
        echo "Hey, " . $email;
        echo "</br></br> You got your email successfully. Our team will be contact you.";
    } else {
        echo "Email sending failed.";
    }
}
