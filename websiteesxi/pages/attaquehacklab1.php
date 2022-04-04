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
        <!--div id="timer"></div>-->
        <div id="timerjs"></div>
        <?php
        header("Refresh: 3600;URL=finhacklab1.php");
        ?>

        <form method="post">
            <div class="row">
                <h4>Flag</h4><br>
                <input style="width: 300px;" type="text" name="input">
            </div>
            <br>
            <input type="submit" class="submit" value="Valider">
            <br><br>
            <?php
            ini_set('display_errors', 'off');
            if ($_POST['input'] == -4251626237309116968) {
                echo "Mot de passe correct ! Vous allez être redirigé vers dans quelques secondes.";
                header("Refresh: 10;URL=finhacklab1.php");
            }
            ?>
        </form>
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
    const afterDelay = jat.getTime() - Date.now() + 3600000;
    setTimeout(() => {
        sessionStorage.clear();
        localStorage.clear();
        sessionStorage.removeItem(key);
        sessionStorage.removeItem(jat);
        sessionStorage.removeItem(afterDelay);
        window.location = "finhacklab1.php";
    }, afterDelay > 0 ? afterDelay : 0);
</script>
<?php include("bottom.php"); ?>

</html>