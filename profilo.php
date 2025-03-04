<?php
include 'fragments/header.php'; 
include_once 'session.php';
include_once 'database.php';

if($logged_in == false){
    header('Location: login');
    exit;
}


$user_id = $_SESSION['id'];
$user_name = $_SESSION['nome'];
$user_surname = $_SESSION['cognome'];
$user_email = $_SESSION['email'];
$user_phone = $_SESSION['telefono'];
$user_role = $_SESSION['ruolo'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profilo | Dev tech</title>
    <link rel="stylesheet" href="style/style-profilo.css">
</head>
<body>
    <br>
    <br>
    <br>
<!--                    <th><a href="#" class="editBtn"><img src="./assets/edit.svg" alt="Modifica"></a></th>
-->
    <section class="info-table">
        <div class="container-table">
            <h1>Informazioni personali</h1>
            <table>
                <tr>
                    <th id="main">Nome</th>
                    <th><?=$user_name?></th>                
                </tr>
                
                <tr>
                    <th id="main">Cognome</th>
                    <th><?=$user_surname?></th>
                </tr>

                <tr>
                    <th id="main">Email</th>
                    <th><?=$user_email ?></th>
                </tr>

                <tr>
                    <th id="main">Telefono</th>
                    <th><?=$user_phone?></th>
                </tr>
            </table>
        </div>
    </section>

    <section class="info-table">
        <div class="container-table">
            <h1>Fatturazione</h1>
            <table>
                <tr>
                    <th id="main">Via</th>
                    <th><?=$user_name?></th>                
                </tr>
                
                <tr>
                    <th id="main">Civico</th>
                    <th><?=$user_surname?></th>
                </tr>

                <tr>
                    <th id="main">Cap</th>
                    <th><?=$user_email ?></th>
                </tr>

                <tr>
                    <th id="main">Città</th>
                    <th><?=$user_phone?></th>
                </tr>

                <tr>
                    <th id="main">Provincia</th>
                    <th><?=$user_phone?></th>
                </tr>
            </table>
        </div>
    </section>

    <div id="editModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Modifica Nome</h2>
            <br>
            <form action="profilo" method="get">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" value="<?=$user_name?>">
                <br>
                <br>
                <button type="submit">Salva modifiche</button>
            </form>
        </div>
    </div>    


    <br>

    <section class="info-table">
        <div class="container-table">
            <h1 id="danger">DANGER ZONE</h1>
            <table>
                <tr>
                    <th id="main">Modifica Password</th>
                    <th><a href=""><img src="./assets/edit.svg" alt="Modifica"></a></th>
                </tr>
                
                <tr>
                    <th id="main">Elimina account</th>
                    <th><a href=""><img src="./assets/edit.svg" alt="Modifica"></a></th>
                </tr>
            </table>
        </div>
    </section>

    <br>
    <br>
    <br>

 <script src="script/profilo-script.js"></script>
</body>
</html>


<?php
    include 'fragments/footer.php'
?>