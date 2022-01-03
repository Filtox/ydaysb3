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
        <p>Votre partie est terminée, le délai d'attaque est dépassé, l'environnement virtuel va bientôt s'arrêter.</p>
        <div>
            <h4>Redirection en cours vers la page d'acceuil...</h4>
            <p></p>
            <p>Redirection en cours vers la page d'acceuil...</p>
        </div>
    </div>
    <?php
    $PowerCliCommandHacklab1Remove = "C:\\WINDOWS\\system32\\windowspowershell\\v1.0\\powershell.exe -file C:\\Users\\pierre\\Documents\\GitHub\\ydaysb3\\websiteazure\\stop-azureVMwebhook.ps1";
    exec($PowerCliCommandHacklab1Remove, $Output, $ErrorReturned);
    header("Refresh: 20;URL=ctf.php");
    ?>
</body>
<?php include("bottom.php"); ?>

</html>