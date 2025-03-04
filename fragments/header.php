<?php
    include_once 'session.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/logo_black_circle.png" type="image/png">
    <link rel="stylesheet" href="style/style-header.css">
</head>
<body>
    
    <header>
        <div class="container">
            
            <input type="checkbox" name="" id="check">
            <div class="logo-container">
                <img src="./img/logo_completo.png" alt="">
            </div>

            <div class="nav-btn">
                <div class="nav-links">
                    <ul>
                        <li class="nav-link" style="--i: .6s">
                            <a href="home">Home</a>
                        </li>
                        <li class="nav-link" style="--i: .6s">
                            <a href="videocorsi">Videocorsi</a>
                        </li>
                        <li class="nav-link" id="contact-nav" style="--i: .6s">
                            <a href="home#contact">Contatti</a>
                        </li>
                        
                        <?= $logged_in 
                        ? '<li class="nav-link" style="--i: .6s"><a href="profilo"> <img src="./img/user.png" alt=""> </a></li>'
                        : '<li></li>'
                        ?>

                        <?= $logged_in 
                        ? '<li><a class="button" href="session.php?logout" id="contact-button" style="--i: .6s"> <button>Esci</button> </a></li>'
                        : '<li><a class="button" href="login" id="contact-button" style="--i: .6s"> <button>Accedi</button> </a></li>'
                        ?>

                    </ul>
                </div>
            </div>

            <div class="hamburger-menu-container">
                <div class="hamburger-menu">
                    <div></div>
                </div>
            </div>

        </div>
    </header>

</body>
</html>