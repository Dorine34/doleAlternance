
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "votre.email@example.com";
    $subject = "Nouveau message de contact";
    $body = "Nom: $nom\nEmail: $email\nMessage:\n$message";

    if (mail($to, $subject, $body)) {
        echo "Merci pour votre message, nous vous contacterons bientôt.";
    } else {
        echo "Une erreur est survenue. Veuillez réessayer.";
    }
}
?>