<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <br>
    <p>Vous avez choisi l'environnement virtuel <b>Hacklab2</b>. Votre environnement est prêt</p>
    <div class="vm_description" id="id_environnement_virtuel1" style="display: none;">
        <h4>Description</h4>
        <p></p>
        <p></p>
        <p>Le mot de passe à récupérer est dans le fichier flag.txt</p>
        <p>Adresse IP de la machine : </p>
        <h4>Durée de la partie</h4>
        <p>60 min.</p><br>
    </div>
    <?php
    $PowerCliCommandHacklab2 = "C:\\WINDOWS\\system32\\windowspowershell\\v1.0\\powershell.exe -file C:\laragon\www\ydaysb3\copy_hacklab_vierge.ps1";
    exec($PowerCliCommandHacklab2, $Output, $ErrorReturned);
    header("Location:attaquehacklab2.php");
    ?>

</body>

</html>