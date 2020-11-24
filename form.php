<?php

$err = [];

//traitement inputs
$name = trim($_POST["name"]);
$subject = trim($_POST["subject"]);
$mail = trim($_POST["mail"]);
$message = trim($_POST["message"]);


//instancie les variables
$goodName = null;
$goodSubject = null;
$goodMail = null;
$goodMessage = null;

$statusMail = null;

//name
if (empty($name)) {
    $error = "Champ vide";
    $err["name"] = [
        "err" => $error
    ];
    $goodName = null;
} else if (preg_match("/^[a-zA-Z ]+$/", $name)) {
    $err["name"] = [
        "value" => $name,
        "err" => "aucune erreur"
    ];
    $goodName = $name;
} else {
    $err["name"] = [
        "err" => "Champ ne correspond pas"
    ];
    $goodName = null;
}

//subject 
if (empty($subject)) {
    $error = "Champ vide";
    $err["subject"] = [
        "err" => $error
    ];
    $goodSubject = null;
} else {
    $err["subject"] = [
        "value" => $subject,
        "err" => "aucune erreur"
    ];
    $goodSubject = $subject;
}

//mail
if (empty($mail)) {
    $err["mail"] = [
        "err" => "Champ vide"
    ];
    $goodMail = null;
} else if (preg_match("#^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-z]{2,4}$#", $mail)) {
    $err["mail"] = [
        "value" => $mail,
        "err" => "aucune erreur"
    ];
    $goodMail = $mail;
} else {
    $err["mail"] = [
        "err" => "Champ ne correspond pas"
    ];
    $goodMail = null;
}

//si champ message est vide
if (empty($message)) {
    $error = "Champ vide";
    $err["message"] = [
        "err" => $error
    ];
    $goodMessage = null;
} else {
    $err["message"] = [
        "value" => $message,
        "err" => "aucune erreur"
    ];
    $goodMessage = nl2br(htmlentities($message));
}

$resultJohanna = null;


$err["envoiMail"] = [
    "envoi" => $statusMail
];


//echo json_encode($err);

if ($goodName != null && $goodSubject != null && $goodMail != null && $goodMessage != null) {

    //si on est en local
    if ($_SERVER['SERVER_NAME'] === "localhost") {
        //on charge Swiftmailer
        require_once('vendor/autoload.php');

        //on instancie un nouveau corps de document mail
        $sujet = 'From portfolio :' . $goodSubject;
        $message = (new Swift_Message($sujet));

        //contenu mail
        $mailBody = '';


        //on instancie une nouvelle méthode d'envois du mail
        $transport = (new Swift_SmtpTransport('smtp.mailtrap.io', 465))
            //Port 25 ou 465 selon votre configuration
            //identifiant et mot de passe pour votre swiftmailer
            ->setUsername('fb4412351e7042')
            ->setPassword('9377fb0dbcb0f8');

        //on instancie un nouveau mail
        $mailer = new Swift_Mailer($transport);
        //on instancie un nouveau corps de document mail
        $message
            ->setFrom([$goodMail])
            ->setTo(['galli.johanna.g2@gmail.com'])
            ->setBody($mailBody, 'text/html');

        //on récupère et modifie le header du mail pour l'envois en HTML
        $type = $message->getHeaders()->get('Content-Type');
        $type->setValue('text/html');
        $type->setParameter('charset', 'utf-8');
        //On envois le mail en local
        $envoi = $mailer->send($message);

        if ($envoi) {
            //var_dump("mail envoyé");

            $err["envoiMail"] = [
                "envoiMail" => "envoye"
            ];
        } else {
            //var_dump("mail pas envoyé");

            $err["envoiMail"] = [
                "envoiMail" => "pas envoye"
            ];
        }
    } else {

        //si on est en ligne
        $to = "contact@johanna-galli.fr";

        //l'en-tête Content-type
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1' . '\r\n';
        //provenance :
        $headers[] = 'From: ' . $goodMail;
        //destinataire :
        $headers[] = 'To: ' . $to . ' <' . $to . '>' . "\r\n";
        $subject = 'Portfolio : ' . $goodSubject;

        //contenu mail :
        $mailBody = '';

        // Envoi
        $envoi1 = mail($to, $subject, $mailBody, implode("\r\n", $headers));

        //Si l'envoi à été effectué alors on envoi un mail a la personne qui m'a contacté
        if ($envoi1) {

            //l'en-tête Content-type
            $Headers2[] = "MIME-version: 1.0\r\n" . 'Date: ' . date('r') . "\r\n";
            $headers2[] = 'Content-type: text/html; charset=iso-8859-1' . '\r\n';
            //provenance :
            $headers2[] = 'From: ' . $to;
            //destinataire :
            $headers2[] = 'To: ' . $goodMail . ' <' . $goodMail . '>' . "\r\n";
            $subject2 = 'Portfolio Johanna Galli : ' . $goodSubject;

            //contenu mail
            $mailBody2 = '';

            $envoi2 = mail($goodMail, $subject2, $mailBody2, implode("\r\n", $headers2));
        }


        if ($envoi1 & $envoi2) {

            $err["envoiMail"] = [
                "envoiMail" => "envoye"
            ];
        } else {

            $err["envoiMail"] = [
                "envoiMail" => "pas envoye"
            ];
        }
    }
}

echo json_encode($err);
