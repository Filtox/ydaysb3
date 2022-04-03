<html lang="en">

<head>
    <?php include("head.php"); ?>
    <title>Votre environnement de travail est prêt</title>
</head>

<body>
    <?php include("navbar.php"); ?>
    <div class="espace"></div>

    <div class="container">
        <div class="row">
            <h2>Hacklab 1</h2>
        </div>

        <div class="espace"></div>
        <p>Vous avez choisi l'environnement virtuel <b>Hacklab1</b>. Votre environnement est prêt.</p>
        <div>
            <div class="row">
                <div class="small-12 medium-6 columns">
                    <h4>Attention !</h4>
                    <p>Veillez à ne pas quitter la page en cours sous peine de suppression totale de votre environnement virtuel.</p>
                </div>
            </div>
            <h4>Description</h4>
            <p></p>
            <p>Cette machine est la plus facile d'accès que vous retrouverez, elle est attaquable via une méthode très commune de connexion à distance.</p>
            <p>Le mot de passe à récupérer est dans le fichier flag.txt</p>
            <p>Adresse IP de la machine : <b>192.168.0.18</b></p>
            <h4>Durée de la partie</h4>
            <p>60 min.</p><br>
        </div>
        <!--
        <h6>Temps restants :</h6>
-->
        <?php
        date_default_timezone_set('Europe/Paris');
        $time = date('h:i', time() + 3600);
        //echo "Fin de l'épreuve à " . $time;
        ?>
        <div id="timer1"></div>
        <!--
        <script>
            var today = new Date();
            var date = today.getHours() + 1 + ":" + today.getMinutes();
            document.getElementById('timer1').innerHTML = "Fin de l'épreuve à " + date;
        </script>
-->
        <!--div id="timer"></div>-->
        <div id="timerjs"></div>
        <?php
        header("Refresh: 3600;URL=finhacklab1.php");
        ?>
        <!--
        <script>
            const departMinutes = 60
            let temps = departMinutes * 60

            const timerElement = document.getElementById("timer")

            setInterval(() => {
                let minutes = parseInt(temps / 60, 10)
                let secondes = parseInt(temps % 60, 10)

                minutes = minutes < 10 ? "0" + minutes : minutes
                secondes = secondes < 10 ? "0" + secondes : secondes

                timerElement.innerText = `${minutes}:${secondes}`
                temps = temps <= 0 ? 0 : temps - 1
            }, 1000)
        </script>
        -->
        <div class="row">
            <h4>Flag</h4>
            <input onfocus="this.value=''" style="width: 300px;" type="text" name="" id="valider">
        </div>
        <br>
        <div class="row">
            <div class="small-12 medium-6 columns">
                <input type="submit" class="submit" onclick="mdp();" name="enregistrer_choix" value="Valider">
            </div>
        </div>
        <br>
        <div class="row">
            <p id="reponse"></p>
        </div>
    </div>
</body>
<script>
    var champ = document.getElementById("timer1");
    if (sessionStorage.getItem("autosave")) {
        // Restauration du contenu du champ
        champ.value = sessionStorage.getItem("autosave");
    }
    // Écoute des changements de valeur du champ
    champ.addEventListener("change", function() {
        // Enregistrement de la saisie utilisateur dans le stockage de session
        sessionStorage.setItem("autosave", champ.value);
    });

    const key = 'jat';
    let jat = sessionStorage.getItem(key);
    if (jat == null) {
        jat = new Date(Date.now());
    } else {
        jat = new Date(jat);
    }
    sessionStorage.setItem(key, jat);
    const afterDelay = jat.getTime() - Date.now() + 120000;
    setTimeout(() => {
        sessionStorage.clear();
        localStorage.clear();
        sessionStorage.removeItem(key);
        sessionStorage.removeItem(jat);
        sessionStorage.removeItem(afterDelay);
        window.location = "ctf.php";
    }, afterDelay > 0 ? afterDelay : 0);

    function mdp() {
        var input = document.getElementById("valider").value;
        if (input != -4251626237309116968) {
            document.getElementById("reponse").textContent = "Mauvais mot de passe";
            document.getElementById("reponse").style.color = "#ff0000";
        } else if (input == -4251626237309116968) {
            document.getElementById("reponse").textContent = "Bon mot de passe ! Vous allez être redirigé vers l'accueil dans quelques secondes";
            document.getElementById("reponse").style.color = "#49be25";
            setTimeout(function() {
                window.location.href = "finhacklab1.php";
            }, 10000);
        } else {
            console.log("");
        }
    }
</script>
<?php include("bottom.php"); ?>

</html>