<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>The Prime Opera | Menu and Pricing</title>

	<link rel="shortcut icon" href="favicon.png" type="image/svg+xml" />
	<link rel="stylesheet" href="assets/css/contact-us.css" type="text/css" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700family=Shadows+Into+Light&display=swap" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<body>
    <div class="contact-us-form">
        <div class="cu-wrapper">
            <header>Get In Touch</header>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="cu-field-box">
                    <div class="cu-field">
                        <input type="text" name="name" placeholder="Full Name*" required="required">
                        <i class='fas fa-user'></i>
                    </div>
                    <div class="cu-field">
                        <input type="email" name="email" placeholder="Email*" required="required">
                        <i class='fas fa-envelope'></i>
                    </div>
                </div>
                <div class="cu-field-box">
                    <div class="cu-field">
                        <input type="tel" name="phone" placeholder="123-456-789">
                        <i><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#6e6e6e}</style><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg></i>
                    </div>
                </div>
                <div class="cu-message">
                    <textarea placeholder="Type your Message...*" name="message" required="required"></textarea>
                    <i class="material-icons">message</i>
                </div>
                <div class="sm-button">
                    <button type="submit">Send Message</button>
                    <span></span>
                </div>
            </form>
        </div>
    </div>
    
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $subject = "New Contact Form Submission";
    $body = "Name: " . $name . "\n";
    $body .= "Email: " . $email . "\n";
    $body .= "Number: " . $phone . "\n";
    $body .= "Message: " . $message;
    
    $from = "ThePrimeOpera";
    $to = "muhammadamirshakeel111@gmail.com";

    $headers = "From: " . $from . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Error sending email.";
    }
}
?>
    
</body>

</html>