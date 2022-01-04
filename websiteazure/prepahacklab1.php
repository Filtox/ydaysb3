<html lang="en">

<head>
    <?php include("head.php"); ?>
    <title>Préparation de votre environnement</title>
</head>

<body>
    <?php include("navbar.php"); ?>
    <div class="espace"></div>
    <div class="container">
        <h1>Préparation de votre environnement. Merci de patientez.</h1>
        <div>
            <h4>Description</h4>
            <p></p>
            <p>Cette machine est la plus facile d'accès que vous retrouverez, elle est attaquable via une méthode très commune de connexion à distance.</p>
            <p>Le mot de passe à récupérer est dans le fichier flag.txt</p>
            <h4>Durée de la partie</h4>
            <p>60 min.</p><br>
        </div>
    </div>

    <?php
    shell_exec('/var/www/websiteazure/stop-azureVMwebhook.ps1');
    sleep(10);
    shell_exec('/var/www/websiteazure/start-azureVMwebhook.ps1');
    header("Refresh: 50;URL=attaquehacklab1.php");
    ?>
</body>
<?php include("bottom.php"); ?>

</html>
