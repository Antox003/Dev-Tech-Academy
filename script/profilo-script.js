
    // Ottieni il modale
    var modal = document.getElementById("editModal");

    // Ottieni il bottone che apre il modale
    var btns = document.querySelectorAll(".editBtn");

    // Ottieni l'elemento <span> che chiude il modale
    var span = document.getElementsByClassName("close")[0];

    // Quando l'utente clicca sul pulsante, mostra il modale
    btns.forEach(btn =>{
        btn.onclick = function(){
            modal.style.display = "block";
        };
    });

    // Quando l'utente clicca sulla X, chiudi il modale
    span.onclick = function() {
        modal.style.display = "none";
    }

    // Quando l'utente clicca fuori dal modale, chiudilo
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }