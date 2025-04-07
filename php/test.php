<?php
$to = "sumitshar711@gmail.com"; // Test with a different email if possible
$subject = "XAMPP Gmail SMTP Test";
$message = "Hi! If you received this email, your Gmail SMTP via PHP is working! 🎉";
$headers = "From: sumitsha711@gmail.com";

if (mail($to, $subject, $message, $headers)) {
    echo "✅ Email sent successfully!";
} else {
    echo "❌ Email sending failed.";
}
?>
