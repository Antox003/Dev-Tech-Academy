<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera i dati inviati dal form
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $messaggio = $_POST['messaggio'];

    // Configura l'email
    $to = "devtech.academy.it@gmail.com"; // Sostituisci con il tuo indirizzo email
    $subject = "Nuovo messaggio da Dev Tech";
    $body = "Hai ricevuto un nuovo messaggio dal form di contatto:\n\n";
    $body .= "Nome: $nome\n";
    $body .= "Email: $email\n";
    $body .= "Messaggio:\n$messaggio";

    // Invia l'email
    if (mail($to, $subject, $body, $headers)) {
        echo "Email inviata con successo.";
    } else {
        echo "Errore nell'invio dell'email.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email inviata | Dev Tech</title>
    <link rel="stylesheet" href="style-php.css">
    <link rel="icon" href="./img/logo_black_circle.png" type="image/png">
</head>
<body>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container-image">
        <img src="./img/logo_completo.png" alt="">
    </div>
    <br>
    <h2>Grazie per averci scelto!</h2>
    <br>
    <h5>Abbiamo ricevuto la tua richiesta, ti risponderemo nel più breve tempo possibile!</h5>
    <div class="container-button">
        <a href="home"><button>Torna alla home</button></a>
    </div>
</body>
</html>