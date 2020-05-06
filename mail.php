<?php
    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["name"]));
        $name = str_replace(array("\r","\n"),array(" "," "),$name);
        $phone = trim($_POST["phone"]);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $message = trim($_POST["message"]);

        // Check that data was sent to the mailer.
        if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            
            echo '
            <h3><span><span class="purple-gradient">Ups!</span></span></h3> 
            <p>Wystąpił problem z przesłaniem Twojej wiadomości.</p>
            <p>Wypełnij formularz ponownie i spróbuj wysłać jeszcze raz.</p>';
            exit;
        }

        // Set the recipient email address.
        $recipient = "michalkowit@gmail.com, office@focusite.pl";

        // Set the email subject.
        $subject = "Nowe zapytanie od $name";

        // Build the email content.
        $email_content = "Imię i nazwisko: $name\n\n";
        $email_content .= "E-mail: $email\n\n";
        $email_content .= "Telefon: $phone\n\n";
        $email_content .= "Wiadomość:\n$message\n";

        // Build the email headers.
        $email_headers = "From: Focusite - $name <office@focusite.pl>";

        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo '<h3><span><span class="purple-gradient">Sukces</span></span></h3>
            <p>Twoja wiadomość została wysłana.</p>
            <p>Wkrótce się odezwiemy!</p>';
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo '<h3><span><span class="purple-gradient">Ups!</span></span></h3>
            <p> Coś poszło nie tak.</p>
            <p>Nie możemy wysłać Twojej wiadomości:(</p>';
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo '<h3><span><span class="purple-gradient">Ups!</span></span></h3>
        <p>Wystąpił problem z przesłaniem Twojej wiadomości.</p><p>Spróbuj ponownie.</p>';
    }
?>