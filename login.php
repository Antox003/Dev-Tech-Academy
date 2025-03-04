<?php
    include_once 'session.php';
    include_once 'database.php';
    include_once 'fragments/header.php';

    if($logged_in){
        header('Location: home');
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $user_email = $_POST['email'];
        $user_password = $_POST['password'];

        try{
            $stmt = $pdo->prepare("SELECT * FROM user WHERE email = :email");
            $stmt->execute(['email'=>$user_email]);
            $user =$stmt->fetch();

            if($user && password_verify($user_password, $user['password'])){
                login($user['id'], $user['nome'], $user['cognome'], $user['email'], $user['telefono'], $user['ruolo']);
                header('Location: home');
                exit;
            }else{
                $error='Email o password non corretti';
            }
        }catch(PDOException $e){
            $error='Errore di connessione al database' . $e->getMessage();
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Dev Tech</title>
    <link rel="stylesheet" href="style/style-login.css">
    <link rel="icon" href="./img/logo_black_circle.png" type="image/png">
</head>
<body>
	<br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <section id="login">
        <div class="contact-form">
            <h2>Login</h2>
            <form action="login" method="post">
                <p><?= $error?></p>
                <div class="email">
                    <label for="email">Email</label>
                    <br>
                    <input type="email" name="email" id="email" placeholder=" Inserisci la tua email" require>
                </div>
                <br>
                <div class="password">
                    <label for="password">Password</label>
                    <br>
                    <input type="password" name="password" id="password" placeholder=" Inserisci la tua password" require>
                </div>
                <br>
                <br>
                <input type="submit" value="Accedi">
            </form>
            <br>
            <p>Non hai un Account? <a href="registrazione">Registrati</a></p>
        </div>
    </section>

    <br>
    <br>
    <br>
    <br>
</body>
</html>

<?php
    include 'fragments/footer.php'
?>
