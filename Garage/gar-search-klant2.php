<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
         
    <title>garage menu</title>
</head>
<body>
<h1>garage zoek klant</h1>

<p>op klantid gegevens uit de tabel halen</p>


<?php


$klantid =  (isset($_POST['klantid']) ? $_GET['klantid'] : null);
require_once "connect.php";

$sql = $connect->prepare("SELECT klantid, klantnaam, klantadres, klantpostcode, klantplaats FROM klanten WHERE klantid = :klantid");
$sql->execute(["klantid" => $klantid]);



echo "<table>";
echo "<thead>";
echo "<th>klant id</th>";
echo "<th>naam</th>";
echo "<th>adres</th>";
echo "<th>postcode</th>";
echo "<th>plaats</th>";
echo "</thead>";
foreach ($sql as $rij){
    echo "<tr>";
    echo "<td>" . $rij["klantid"] . "</td>";
    echo "<td>" . $rij["klantnaam"] . "</td>";
    echo "<td>" . $rij["klantadres"] . "</td>";
    echo "<td>" . $rij["klantpostcode"] . "</td>";
    echo "<td>" . $rij["klantplaats"] . "</td>";
    echo "<tr>";
}
echo "<table>";
echo "<a href='gar-menu.php'> terug naar het menu </a>"
?>
</body>
</html>