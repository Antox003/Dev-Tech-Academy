<?php
    include_once 'session.php';
    include_once 'database.php';
    include_once 'fragments/header.php';

    if($logged_in){
        header('Location: home');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrati | Dev Tech</title>
    <link rel="stylesheet" href="style/style-registrazione.css">
</head>
<body>
<br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <section id="registrazione">
        <div class="contact-form">
            <h2>Registrati</h2>
            <form action="" method="post">
                <p><?= $error?></p>
                <div class="field">
                    <label for="nome">Nome</label>
                    <br>
                    <input type="text" name="nome" id="nome" placeholder=" Inserisci il tuo nome" require>
                </div>
                <br>
                <div class="field">
                    <label for="cognome">Cognome</label>
                    <br>
                    <input type="text" name="cognome" id="cognome" placeholder=" Inserisci il tuo cognome" require>
                </div>
                <br>
                <div class="field">
                    <label for="email">Email</label>
                    <br>
                    <input type="email" name="email" id="email" placeholder=" Inserisci la tua email" require>
                </div>
                <br>
                <div class="field">
                    <label for="telefono">Telefono</label>
                    <br>
                    <input type="email" name="email" id="email" placeholder=" Inserisci la tua email" require>
                </div>
                <br>
                <div class="field">
                    <label for="password">Password</label>
                    <br>
                    <input type="password" name="password" id="password" placeholder=" Inserisci la tua password" require>
                </div>
                <br>
                <br>
                <input type="submit" value="Registrati">
            </form>
            <br>
            <p>Possiedi già un account? <a href="login">Accedi</a></p>
        </div>
    </section>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</body>
</html>


<?php
    include_once 'fragments/footer.php'
?>