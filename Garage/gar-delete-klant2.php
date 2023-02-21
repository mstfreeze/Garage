  <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport">
             

        <title>garage menu</title>
    </head>
    <body>
    <h1>garage delete klant</h1>

    <p>op klantid gegevens uit de tabel verwijderen</p>


<?php


$klantid =  (isset($_POST['klantid']) ? $_GET['klantid'] : null);
require_once "gar-connect.php";

$klanten = $connect->prepare("SELECT klantid, klantnaam, klantadres, klantpostcode, klantplaats FROM klanten WHERE klantid = :klantid");
$klanten->execute(["klantid" => $klantid]);

echo "<table>";
echo "<thead>";
echo "<th>klant id</th>";
echo "<th>naam</th>";
echo "<th>adres</th>";
echo "<th>postcode</th>";
echo "<th>plaats</th>";
echo "</thead>";
foreach ($klanten as $klant){
    echo "<tr>";
    echo "<td>" . $klant["klantid"] . "</td>";
    echo "<td>" . $klant["klantnaam"] . "</td>";
    echo "<td>" . $klant["klantadres"] . "</td>";
    echo "<td>" . $klant["klantpostcode"] . "</td>";
    echo "<td>" . $klant["klantplaats"] . "</td>";
    echo "<tr>";
}
echo "</table> <br>";

echo "<form action='gar-delete-klant3.php' method='post'>";

    
    echo "<input type='hidden' name='klantid' value='$klantid'>";
    echo "<input type='hidden' name='verwijderv' value='0'>";
    echo "<input type='checkbox' name='verwijderv' value='1'>";
    echo "verwijder deze klant";
    echo "<input type='submit'>";
    echo "</form>";

?>
    </body>
    </html>