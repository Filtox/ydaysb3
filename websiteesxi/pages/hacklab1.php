<html lang="en">

<head>
    <?php include("head.php"); ?>
    <title>Votre environnement est prêt</title>
</head>

<body>
    <?php
    //echo 'id_environnement_virtuel : ' . $_POST["id_environnement_virtuel"] . '<br>';
    $PowerCliCommandHacklab1 = "C:\\WINDOWS\\system32\\windowspowershell\\v1.0\\powershell.exe -file C:\\Users\\pierre\\Documents\\GitHub\\ydaysb3\\websiteesxi\\copy_hacklab_ssh.ps1";
    $PowerCliCommandHacklab1Remove = "C:\\WINDOWS\\system32\\windowspowershell\\v1.0\\powershell.exe -file C:\\Users\\pierre\\Documents\\GitHub\\ydaysb3\\websiteesxi\\removessh.ps1";
    exec($PowerCliCommandHacklab1Remove, $Output, $ErrorReturned);
    exec($PowerCliCommandHacklab1, $Output, $ErrorReturned);
    header("Location:attaquehacklab1.php");
    ?>
    <?php include("bottom.php"); ?>
</body>

</html>