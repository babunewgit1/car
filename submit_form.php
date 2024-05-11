<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Change this email address to your own
    $to = 'info@radescar.com';

    $email_subject = "New Message from $name";
    $email_body = "You have received a new message from the user $name.\n" .
        "Email address: $email\n" .
        "Subject: $subject\n\n" .
        "Message:\n$message";

    $headers = "From: $email\n";
    $headers .= "Reply-To: $email\n";

    // Send the email
    if (mail($to, $email_subject, $email_body, $headers)) {
        // Redirect back to the form page with success message
        header('Location: index.html?success=1');
        exit();
    } else {
        echo "Error: Unable to send email. Please try again later.";
    }
}
?>
