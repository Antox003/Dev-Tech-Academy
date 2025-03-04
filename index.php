<?php
    include 'fragments/header.php'
?>    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="gzv4hmAxXoQh2XTBfCoRXK_WIlaqiahiOWThoDT_xzQ" />
    <title>Home | Dev Tech </title>
    <link rel="canonical" href="https://www.devtechacademy.it/"/>
    <link rel="stylesheet" href="style/style-home.css">
    <link rel="icon" href="./img/logo_black_circle.png" type="image/png">
</head>
<body>

    <script>
        document.getElementById('contact-nav').addEventListener('click', function() {
            document.getElementById('check').checked = false;
        });
    </script>

    <section class="home">
        <img src="./img/graphic_design.png" class="graphic">
            <h1 class="title">Dev Tech</h1>
            <p class="subtitle">Immagina, Sviluppa, Crea</p>
        <img src="./img/pcman.png" class="pcman">
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
<!--
    <div class="popup">
        <div class="popup-content">
            <img src="img/close.png" alt="" class="close">
            <div class="container-podcast">
                <div class="sx">
                    <img src="img/copertina-podcast.png" alt="">
                </div>
                <div class="dx">
                    <h1>Bit a Bit</h1>
                    <p>
                        Ascolta ora <span class="color">BIT A BIT</span>, il podcast che smonta l’informatica a piccoli pezzi e ve la serve in modo semplice e divertente!
                        Ogni settimana esploriamo curiosità, misteri e innovazioni dal mondo digitale, un byte alla volta. 
                        Dalle tecnologie che usiamo ogni giorno senza pensarci, fino a quei concetti informatici che sembrano usciti da un film di fantascienza.
                        Seguiteci ogni venerdì alle 18 per una nuova pillola tech!

                    </p>
                    <br>
                    <div class="platform">
                        <a href="https://open.spotify.com/show/4emCztUdNAS67uoauoNFP8" target="_blank"><img src="img/spotify.png" alt=""></a>
                        <a href="https://music.youtube.com/playlist?list=PL3eHoqfvixPHWtBuoYHLd1Xw2fMWsK1Qs" target="_blank"><img src="img/ytmusic.png" alt=""></a>
                        <a href="https://music.amazon.it/podcasts/1548dd23-3e87-4caf-ad95-c537750b519c/bit-a-bit" target="_blank"><img src="img/amazon-music.png" alt=""></a>
                        <a href="https://podcasts.apple.com/us/podcast/bit-a-bit/id1768276335" target="_blank"><img src="img/apple-podcast.png" alt=""></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    -->
    <section class="about">
        <div class="content">
            <h1>Scopri il futuro del coding con <span class="color">DEV TECH</span></h1>

             <p class="container-paragraph">
                Immagina un mondo dove le idee più innovative prendono vita grazie alla potenza del codice.
                DevTech Academy è la tua porta d'accesso a questo mondo, un Academy all'avanguardia dedicata a
                formare la prossima generazione di programmatori informatici.
            </p>
        </div>  
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <section class="service">

        <div class="card-service">
            <div class="container-icon">
                <div class="icon">
                    <img src="./assets/users.svg" alt="">
                </div>
            </div>
            <h3>Oltre 600 Studenti</h3>
            <p>Oltre 600 studenti ci hanno scelto per iniziare il loro viaggio nel mondo del coding. Unisciti a loro e trasforma la tua passione in una carriera di successo</p>
        </div>

        <div class="card-service">
            <div class="container-icon">
                <div class="icon">
                    <img src="./assets/dashboard.svg" alt="">
                </div>
            </div>
            <h3>Progetti Reali</h3>
            <p>Lavorerai su progetti reali per rendere il tutto molto pratico e attuale. Tutte le lezioni sono correlate da esercizi per consolidare quanto appreso</p>
        </div>

        <div class="card-service">
            <div class="container-icon">
                <div class="icon">
                    <img src="./assets/certificate.svg" alt="">
                </div>
            </div>
            <h3>Certificato Finale</h3>
            <p>Alla fine di tuo ogni singolo percorso ti verrà fornito l’attestato finale del corso in formato digitale che potrai decidere di stampare e conservare</p>
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
    <section class="motivation">
        <div class="title-motivation">
            <h1>Per quale motivo dovrei imparare a programmare? <span class="color">eccotene 5!</span></h1>
        </div>
        <br>
        <br>
        <div class="container-card">
            <div class="other-container">

                <div class="card-motivation">
                    <div class="head">
                        <div class="number">
                            <p>1</p>
                        </div>
                        <p>
                            <h6>Professione Richiesta</h6>
                        </p>
                    </div>
                    <div class="descrizione">
                        <p>
                            Lo sviluppatore è una delle figure più ricercate nel mondo del lavoro. In Italia ci sono 100.000 richieste l’anno di nuovi sviluppatori e 30.000 sono le posizioni che restano scoperte
                        </p>
                    </div>
               </div>
    
               <div class="card-motivation">
                    <div class="head">
                        <div class="number">
                            <p>2</p>
                        </div>
                        <p>
                            <h6>Lavori come e dove vuoi</h6>
                        </p>
                    </div>
                    <div class="descrizione">
                        <p>
                            Non serve lavorare in ufficio per essere creatori di prodotti digitali, e le aziende lo sanno. Puoi lavorare da casa, in riva al mare o in montagna.
                        </p>
                    </div>
                </div>
    
                <div class="card-motivation">
                    <div class="head">
                        <div class="number">
                            <p>3</p>
                        </div>
                        <p>
                            <h6>Guadagni bene e tanto</h6>
                        </p>
                    </div>
                    <div class="descrizione">
                        <p>
                            La figura dello sviluppatore è tra le più ricercate al momento e i guadagni sono alti e lo sono fin da subito.
                        </p>
                    </div>
                </div>
    
                <div class="card-motivation">
                    <div class="head">
                        <div class="number">
                            <p>4</p>
                        </div>
                        <p>
                            <h6>Puoi cambiare il mondo</h6>
                        </p>
                    </div>
                    <div class="descrizione">
                        <p>
                            Saper programmare è un immenso potere che ti permette di creare un prodotto per aiutare migliaia di persone.
                        </p>
                    </div>
                </div>
    
                <div class="card-motivation">
                    <div class="head">
                        <div class="number">
                            <p>5</p>
                        </div>
                        <p>
                            <h6>E molto altro ancora...</h6>
                        </p>
                    </div>
                    <div class="descrizione">
                        <p>
                            Tutto quello che ci circonda ormai per funzionare ha bisogno di software, e tu saprai creare codice per fare quello che vuoi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <section class="video">
        <div class="title-video">
            <h1><span class="color"> PROGRAMMARE È DIFFICILE!</span> PROGRAMMARE È UNA COSA PER POCHI! <span class="color">NON CI RIUSCIRÓ MAI!</span></h1>
            <h6>Ecco perchè ti sbagli:</h6>
        </div>
        <div class="container-video"> 
            <video class="responsive-iframe" src="./video/Presentazione.mp4" controls></video>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <section class="review">
        <div class="title-review">
            <h1>Non credere alla mia parola, guarda Cosa ne pensano i nostri studenti</h1>
        </div>
        <br>
        <br>
        <div class="container-card">
            <div class="other-container">

                <div class="card-review">
                    <div class="head">
                        <div class="number">
                            <img src="./assets/Star.svg" alt="">
                        </div>
                        <p>
                            <h6>Francesco Gragnaniello</h6>
                        </p>
                    </div>
                    <div class="descrizione">
                        <p>
                            Il videocorso è un’ ottima risorsa per imparare le fondamenta dello sviluppo web ed ha un approccio chiaro e accessibile a chiunque. Una delle caratteristiche più apprezzabili di questo videocorso è la capacità dell’insegante  di trasmettere concetti complessi in modo semplice e intuitivo.
                        </p>
                    </div>
               </div>
    
               <div class="card-review">
                    <div class="head">
                        <div class="number">
                            <img src="./assets/Star.svg" alt="">
                        </div>
                        <p>
                            <h6>Massimo Pieretti</h6>
                        </p>
                    </div>
                    <div class="descrizione">
                        <p>
                            Il videocorso è stato molto utile per me. La struttura del corso, è stata ben organizzata ed è facile da seguire. Inoltre, il docente è molto esperto e ha saputo trasmettere i concetti in modo chiaro e comprensibile. Consiglio vivamente questo corso a chiunque voglia imparare qualcosa di nuovo.
                        </p>
                    </div>
                </div>

                <div class="card-review">
                    <div class="head">
                        <div class="number">
                            <img src="./assets/Star.svg" alt="">
                        </div>
                        <p>
                            <h6>Andrea Agostinelli</h6>
                        </p>
                    </div>
                    <div class="descrizione">
                        <p>
                            Un'esperienza molto positiva per me che sono alle prime armi, nulla da dire, sono soddisfatto al 100%
                        </p>
                    </div>
                </div>

                <div class="card-review">
                    <div class="head">
                        <div class="number">
                            <img src="./assets/Star.svg" alt="">
                        </div>
                        <p>
                            <h6>Errico aquino</h6>
                        </p>
                    </div>
                    <div class="descrizione">
                        <p>
                            La mia esperienza è stata davvero ottima, spiegazione davvero eccellente. lo consiglio a molti.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <section class="futuro">
        <div class="content">
            <h1><span class="color">BASTA SCUSE</span>, È ORA DI CREARE IL TUO FUTURO, <span class="color">Unisciti a noi!</span></h1>

            <p>
                Dev Tech Academy è più di un semplice corso di programmazione. È un trampolino di lancio per la tua carriera nel mondo tech. Basta restare lì su quel divano a scrollare per ore i video su Instagram o Tik Tok, dai una svolta alla tua vita <span class="color">ORA!</span> Diventa quello che hai sempre sognato di essere.
            </p>
        </div>  
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="bar">
        <div class="container-bar">
            <hr>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <section class="corsi">
        <div class="content">
            <h1>Quindi....<span class="color">da dove inizio?</span></h1>

            <p>
                È semplice! Basta iscriversi ai nostri <a href="videocorsi.html">video corsi</a>. Con i nostri corsi online imparerai i concetti base dello sviluppo web, saprai realizzare siti web unici, creare videogiochi e sarai in grado di realizzare ogni tuo progetto o idea.
            </p>
        </div>  
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <a name="contact"></a>
    <section class="contact">
        <div class="container-contact">
            <br>
            <h1>Contatti</h1>
            <br>
            <form action="mail.php" method="post">
                <input type="text" name="nome" placeholder=" Nome" id="nome" required>
                <br>
                <br>
                <input type="email" name="email" placeholder=" Email" id="email" required>
                <br>
                <br>
                <br>
                <textarea name="messaggio" id="messaggio" placeholder="Messaggio" required></textarea>
                <br>
                <br>
                <div class="policy">
                    <p><input type="checkbox" name="" class="checkbox" required> Selezionando questa casella acconsenti al trattamento dei tuoi dati secondo la nostra <a href="privacy-policy">Privacy Policy</a></p>
                </div>
                <br>
                <input type="submit" value="Invia">
                <br>
                <br>
            </form>
        </div>
        <div class="social">
            <div class="container-social">
                <br>
                <h1>Social</h1>
                <div class="nomi-social">
                    <br>
                    <a href="https://www.instagram.com/dev_tech_academy/" target="_blank"> <img src="./img/Instagram_logo.svg" alt="">@devtechacademy</a>
                    <br>
                    <a href="https://www.threads.net/@dev_tech_academy" target="_blank"><img src="./img/Threads_logo.svg" alt="">devtechacademy</a>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <script src="script/script-home.js"></script>
</body>
</html>

<?php
    include 'fragments/footer.php'
?> 