<html lang="en">

<head>
    <?php include("head.php"); ?>
    <title>Votre environnement est prêt</title>
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
    //echo 'id_environnement_virtuel : ' . $_POST["id_environnement_virtuel"] . '<br>';
    $PowerCliCommandHacklab1Remove = "C:\\WINDOWS\\system32\\windowspowershell\\v1.0\\powershell.exe -file C:\\Users\\pierre\\Documents\\GitHub\\ydaysb3\\websiteazure\\stop-azureVMwebhook.ps1";
    $PowerCliCommandHacklab1 = "C:\\WINDOWS\\system32\\windowspowershell\\v1.0\\powershell.exe -file C:\\Users\\pierre\\Documents\\GitHub\\ydaysb3\\websiteazure\\start-azureVMwebhook.ps1";
    exec($PowerCliCommandHacklab1Remove, $Output, $ErrorReturned);
    exec($PowerCliCommandHacklab1, $Output, $ErrorReturned);
    header("Refresh: 30;URL=attaquehacklab1.php");
    ?>
    <?php include("bottom.php"); ?>
</body>

</html>