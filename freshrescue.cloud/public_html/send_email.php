<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define email addresses
    $user_email = $_POST['email']; // User's email address
    $additional_emails = "shshwtchauhan@gmail.com, divyasumanverma@gmail.com, devarshishukla700@gmail.com"; // Additional email addresses

    // Combine email addresses to include user's email in the list
    $to = $user_email . ", " . $additional_emails;
    
    // Email subject
    $subject = "New Food Donation Form Submission";

    // HTML Email Template
    $message = '
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>New Food Donation Form Submission</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f0f0f0;
            }
            .container {
                max-width: 600px;
                margin: 20px auto;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                background-color: #ffffff;
            }
            .banner {
                background: linear-gradient(to right, rgba(255, 126, 95, 1), rgba(254, 180, 123, 1));
                padding: 20px;
                border-top-left-radius: 10px;
                border-top-right-radius: 10px;
                color: #ffffff;
                text-align: center;
                transition: transform 0.3s ease-in-out;
            }
            h1 {
                color: #ffffff;
                font-size: 28px;
                margin: 0;
                transition: color 0.3s ease-in-out;
            }
            .container:hover .banner {
                transform: scale(1.05);
            }
            .container:hover h1 {
                color: rgba(255, 126, 95, 1);
            }
            h2 {
                text-align: center;
                transition: color 0.3s ease-in-out;
            }
            .info {
                padding: 20px;
            }
            .info p {
                margin: 10px 0;
                color: #666666;
                transition: color 0.3s ease-in-out;
            }
            .container:hover h2,
            .container:hover .info p {
                color: rgba(255, 126, 95, 1);
            }
            .note {
                margin-top: 20px;
                padding: 10px;
                background-color: #ffcccc;
                border-radius: 5px;
                color: #990000;
                text-align: center;
            }
            .note a {
                color: rgba(255, 126, 95, 1);
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="banner">
                <h1>FreshRescue.Cloud</h1>
            </div>
            <h2>New Food Donation Form Submission</h2>
            <div class="info">
                <p><strong>Name:</strong> ' . $_POST['name'] . '</p>
                <p><strong>Email:</strong> ' . $_POST['email'] . '</p>
                <p><strong>Phone:</strong> ' . $_POST['phone'] . '</p>
                <p><strong>Collection Address:</strong> ' . $_POST['address'] . '</p>
                <p><strong>Category:</strong> ' . $_POST['category'] . '</p>
                <p><strong>Quantity (in Kg):</strong> ' . $_POST['quantity'] . '</p>
                <p><strong>Food Preparation Date and Time:</strong> ' . $_POST['preparation-date-time'] . '</p>
            </div>
            <div class="note">
                <p><strong>Click <a href="https://freshrescue.cloud/certform.html">here</a> to download your donation certificate.</strong></p>
            </div>
        </div>
    </body>
    </html>
    ';

    // To send HTML mail, the Content-type header must be set
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers .= "From: " . $user_email . "\r\n";

    // Send mail to specified email addresses
    if (mail($to, $subject, $message, $headers)) {
        http_response_code(200);
        echo "Mail sent successfully.";
    } else {
        http_response_code(500);
        echo "Error: Unable to send mail.";
    }
} else {
    http_response_code(403);
    echo "Error: Forbidden";
}
?>
