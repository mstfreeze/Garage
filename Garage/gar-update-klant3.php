
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <title>garage menu</title>
</head>
<body>
<h1>garage update klant 3</h1>

<p> een klant updaten</p>


<?php


if (empty($_POST['klantid'])){
    echo "de klant bestaat niet";
    echo "<a href='gar-menu.php'> terug naar het menu </a>";
}
else {
    $klantid = $_POST ["klantidv"];
    $klantnaam = $_POST ["klantnaamv"];
    $klantadres = $_POST["klantadresv"];
    $klantpostcode = $_POST["klantpostcode"];
    $klantplaats = $_POST["klantplaats"];

    require_once "connect.php";


    $sql = $connect->prepare("UPDATE klanten SET klantnaam = :klantnaam, klantadres = :klantadres, klantpostcode = :klantpostcode, klantplaats =  :klantplaats WHERE klantid = :klantid");


    $sql->bindParam(":klantid", $klantid);
    $sql->bindParam(":klantnaam", $klantnaam);
    $sql->bindParam(":klantadres", $klantadres);
    $sql->bindParam(":klantpostcode", $klantpostcode);
    $sql->bindParam(":klantplaats", $klantplaats);
    $sql->execute();


    echo "de klant is gewijzigd <br>";
    echo "<a href='gar-menu.php'> terug naar het menu </a>";



}
?>
</body>
</html>