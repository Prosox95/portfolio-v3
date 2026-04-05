<?php
header('Content-Type: application/json');

// Inclusion de l'autoloader de Composer
require '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// CHARGEMENT DU .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ... (garde tout le nettoyage de tes données ici) ...
    $name = htmlspecialchars(strip_tags(trim($_POST['name'])));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars(strip_tags(trim($_POST['subject'])));
    $message = htmlspecialchars(strip_tags(trim($_POST['message'])));

    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        echo json_encode(['status' => 'error', 'message' => 'Veuillez remplir tous les champs.']);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['status' => 'error', 'message' => 'L\'adresse email n\'est pas valide.']);
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        
        // variable cachés dans le .env pour la sécurité
        $mail->Username   = $_ENV['SMTP_USER']; 
        $mail->Password   = $_ENV['SMTP_PASS']; 
        
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        $mail->CharSet    = 'UTF-8';

        $mail->setFrom($email, $name);
        $mail->addAddress($_ENV['SMTP_USER'], 'Pierre Burnier'); 

        $mail->isHTML(true);
        $mail->Subject = 'Nouveau message Portfolio : ' . $subject;
        $mail->Body    = "<h2>Nouveau message depuis le portfolio</h2><p><strong>Nom :</strong> {$name}</p><p><strong>Email :</strong> {$email}</p><p><strong>Sujet :</strong> {$subject}</p><hr><p><strong>Message :</strong></p><p>" . nl2br($message) . "</p>";
        $mail->AltBody = "De: {$name} ({$email})\nSujet: {$subject}\n\nMessage:\n{$message}";

        $mail->send();
        echo json_encode(['status' => 'success', 'message' => 'Votre message a été envoyé avec succès. Je vous réponds très vite !']);
        
    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'message' => "Erreur lors de l'envoi du message. Mailer Error: {$mail->ErrorInfo}"]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Requête invalide.']);
}
?>