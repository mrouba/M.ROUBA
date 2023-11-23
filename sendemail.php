<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST["contactName"]));
    $email = filter_var(trim($_POST["contactEmail"]), FILTER_SANITIZE_EMAIL);
    $subject = strip_tags(trim($_POST["contactSubject"]));
    $message = trim($_POST["contactMessage"]);

    $recipient = "roubamaria645@gmail.com"; // Replace with your Gmail address
    $email_headers = "From: $name <$email>";

    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Subject: $subject\n\n";
    $email_content .= "Message:\n$message";

    mail($recipient, "Contact Form Submission", $email_content, $email_headers);

    echo "success";
} else {
    echo "error";
}

?>
