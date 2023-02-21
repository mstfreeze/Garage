  <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport">
              
        <title>garage menu</title>
    </head>
    <body>
    <h1>garage delete klant 3</h1>

    <p>op klant id gegevens zoeken uit de tabel klanten van de database</p>
<?php

$klantid =  (isset($_POST['klantid']) ? $_GET['klantid'] : null);
$verwijderen =  (isset($_POST['verwijderen']) ? $_GET['verwijderen'] : null);
if($verwijderen) {
    require_once "connect.php";

    $sql = $connect->prepare("DELETE FROM klanten WHERE klantid = :klantid");
    $sql->execute(["klantid" => $klantid]);

    echo "de gegevens zijn verwijderd. <br>";

}
else {
    echo "de gegevens zijn niet verwijderd. <br>";

}

echo "<a href='gar-menu.php'>terug naar het menu. </a>";