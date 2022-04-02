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
        <h6>Temps restants :</h6>
        <div id="timer"></div>
        <br>
        <?php
        header("Refresh: 3600;URL=finhacklab.php");
        ?>
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


        <div class="row">
            <h4>Flag</h4>
            <input style="width: 300px;" type="text" name="" id="">
        </div>
        <br>
        <div class="row">
            <div class="small-12 medium-6 columns">
                <input type="hidden" name="action_partie" value="enregistrer_choix">
                <input type="submit" class="submit" name="enregistrer_choix" value="Valider">
            </div>
        </div>
    </div>
<?php
$mdp = "-4251626237309116968";
?>
</body>
<?php include("bottom.php"); ?>

</html>