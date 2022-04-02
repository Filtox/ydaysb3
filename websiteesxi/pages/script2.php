<!DOCTYPE html>
<html>

<head>
    <title>Page de traitement</title>
    <meta charset="utf-8">
</head>

<body>
    <br><br><br><br><br>
    <?php
    $serveur = "localhost";
    $dbname = "ydaysb3";
    $user = "root";
    $pass = "";
    $id_environnement_virtuel = $_POST["id_environnement_virtuel"];
    try {
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname", $user, $pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //On insère les données reçues
        $sth = $dbco->prepare("
            INSERT INTO form(id_environnement_virtuel)
            VALUES(:id_environnement_virtuel)");
        $sth->bindParam(':id_environnement_virtuel', $id_environnement_virtuel);
        $sth->execute();
    } catch (PDOException $e) {
        //echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
    }
    $serveur = "localhost";
    $dbname = "ydaysb3";
    $user = "root";
    $pass = "";

    try {
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname", $user, $pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //On crée une table form
        $form = "CREATE TABLE form(
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            id_environnement_virtuel TEXT)";
        $dbco->exec($form);
        $mdp = "CREATE TABLE mdp(
            id INT,
            mdp BIGINT)";
        $dbco->exec($mdp);
    } catch (PDOException $e) {
        //echo 'Erreur : ' . $e->getMessage();
    }
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