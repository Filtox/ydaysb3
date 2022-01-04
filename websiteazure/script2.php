<!DOCTYPE html>
<html>

<head>
    <title>Page de traitement</title>
    <meta charset="utf-8">
</head>

<body>
    <?php
    if (!empty($_POST['id_environnement_virtuel'] == '2')) {
        header("Location:prepahacklab2.php");
    } elseif (!empty($_POST['id_environnement_virtuel'] == '1')) {
        header("Location:prepahacklab1.php");
    } else {
        header("Location:ctf.php");
    }
    ?>
</body>

</html>
