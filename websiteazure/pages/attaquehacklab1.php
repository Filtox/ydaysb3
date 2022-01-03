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
    </div>
    <?php
    header("Refresh: 3600;URL=finhacklab.php");
    ?>
</body>
<?php include("bottom.php"); ?>


</html>