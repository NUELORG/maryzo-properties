<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $to = "maryzoproperties@gmail.com"; // Change this to your email address
    $subject = "New Contact Form Submission: $subject";
    $email_body = "You have received a new message from your website contact form.\n\n".
                  "Here are the details:\n\nName: $name\n\nEmail: $email\n\nMessage:\n$message";
    
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email";
    
    mail($to, $subject, $email_body, $headers);
    echo "Your message has been sent successfully.";
} else {
    echo "Oops! There was a problem submitting your form. Please try again.";
}
?>
