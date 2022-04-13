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
        <p>Votre partie est terminée. L'environnement virtuel va bientôt s'arrêter.</p>
        <div>
            <h4>Redirection en cours vers la page d'acceuil...</h4>
            <p></p>
            <p>Redirection en cours vers la page d'acceuil...</p>
        </div>
    </div>
    <?php
    //$PowerCliCommandHacklab4Remove = "C:\\WINDOWS\\system32\\windowspowershell\\v1.0\\powershell.exe -file C:\\Users\\pierre\\Documents\\GitHub\\ydaysb3\\websiteesxi\\removemetasploitable2.ps1";
    $PowerCliCommandHacklab4Stop = "C:\\WINDOWS\\system32\\windowspowershell\\v1.0\\powershell.exe -file C:\\Users\\pierre\\Documents\\GitHub\\ydaysb3\\websiteesxi\\stop_metasploitable2.ps1";
    //exec($PowerCliCommandHacklab4Remove, $Output, $ErrorReturned);
    exec($PowerCliCommandHacklab4Stop, $Output, $ErrorReturned);
    header("Refresh: 20;URL=ctf.php");
    ?>
</body>
<?php include("bottom.php"); ?>

</html>
