<html lang="en">

<head>
    <?php include("head.php"); ?>
    <title>Votre environnement est prêt</title>
</head>

<body>
    <?php
    //$PowerCliCommandHacklab4Copy = "C:\\WINDOWS\\system32\\windowspowershell\\v1.0\\powershell.exe -file C:\\Users\\pierre\\Documents\\GitHub\\ydaysb3\\websiteesxi\\copy_hacklab_metasploitable2.ps1";
    //$PowerCliCommandHacklab4Remove = "C:\\WINDOWS\\system32\\windowspowershell\\v1.0\\powershell.exe -file C:\\Users\\pierre\\Documents\\GitHub\\ydaysb3\\websiteesxi\\removemetasploitable2.ps1";
    //exec($PowerCliCommandHacklab4Remove, $Output, $ErrorReturned);
    //exec($PowerCliCommandHacklab4Copy, $Output, $ErrorReturned);
    $PowerCliCommandHacklab4 = "C:\\WINDOWS\\system32\\windowspowershell\\v1.0\\powershell.exe -file C:\\Users\\pierre\\Documents\\GitHub\\ydaysb3\\websiteesxi\\start_hacklab_metasploitable2.ps1";
    $PowerCliCommandHacklab4Stop = "C:\\WINDOWS\\system32\\windowspowershell\\v1.0\\powershell.exe -file C:\\Users\\pierre\\Documents\\GitHub\\ydaysb3\\websiteesxi\\stop_metasploitable2.ps1";
    exec($PowerCliCommandHacklab4Stop, $Output, $ErrorReturned);
    exec($PowerCliCommandHacklab4, $Output, $ErrorReturned);
    header("Location:attaquehacklab4.php");
    ?>
    <?php include("bottom.php"); ?>
</body>

</html>