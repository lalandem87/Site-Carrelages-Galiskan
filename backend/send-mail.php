<?php
require "PHPMailer-master/src/PHPMailer.php";
require "PHPMailer-master/src/SMTP.php";
require "PHPMailer-master/src/Exception.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mailer = new PHPMailer(true);

$prenom = htmlspecialchars($_POST["prenom"]);
$nom = htmlspecialchars($_POST["nom"]);
$tel = htmlspecialchars($_POST["tel"]);
$email = htmlspecialchars($_POST["email"]);
$message = htmlspecialchars($_POST["message"]);

try {
    $env = parse_ini_file("./.env");
    $mailer->isSMTP();
    $mailer->SMTPOptions = [
        "ssl" => [
            "verify_peer" => false,
            "verify_peer_name" => false,
            "allow_self_signed" => true,
        ],
    ];
    $mailer->Host = "smtp.gmail.com";
    $mailer->SMTPAuth = true;
    $mailer->Username = "erayglkbck@gmail.com";
    $mailer->Password = $env["GMAIL_PASSWORD"];
    $mailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mailer->Port = 587;

    $mailer->setFrom($email, $nom . " " . $prenom);
    $mailer->addAddress("erayglkbck@gmail.com", "Eray Galiskan");

    $mailer->isHTML(true);
    $mailer->Subject = "Nouveau message de $prenom $nom";
    $mailer->Body = "
                        <h2>Nouveau message de $prenom $nom</h2>
                        <p><strong>Téléphone :</strong> $tel</p>
                        <p><strong>Email :</strong> $email</p>
                        <hr>
                        <p><strong>Message :</strong></p>
                        <p>$message</p>
                    ";
    $mailer->AltBody = "Nom : $prenom $nom\nTél : $tel\nEmail : $email\n\nMessage :\n$message";

    if (!$mailer->send()) {
        header("Location: ../front-end/index.php?error=ok");
        exit();
    }
    header("Location: ../front-end/index.php?success=ok");
    exit();
} catch (Exception $e) {
    echo "Le message n'a pas pu être envoyé. Erreur: {$mailer->ErrorInfo}";
}
?>
