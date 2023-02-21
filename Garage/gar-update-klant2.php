
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport">
                      <title>garage menu</title>
    </head>
    <body>
    <h1>garage update klant</h1>

    <p>op klantid gegevens uit de tabel halen</p>


<?php


$klantid =  (isset($_POST['klantid']) ? $_GET['klantid'] : null);
require_once "gar-connect.php";

$klanten = $connect->prepare("SELECT klantid, klantnaam, klantadres, klantpostcode, klantplaats FROM klanten WHERE klantid = :klantid");
$klanten->execute(["klantid" => $klantid]);

echo "<form action='gar-update-klant3.php' method='post'>";
foreach ($klanten as $klant){
    
    echo "klantid:" . $klant["klantid"];
    echo "<input type='hidden' name='klantid'";
    echo "value='" . $klant["klantid"] . " '> <br> ";

    echo "klantnaam: <input type='text'";
    echo "name = 'klantnaam'";
    echo "value='" . $klant["klantnaam"] . " ' ";
    echo "> <br>";

    echo "klantadres: <input type='text'";
    echo "name = 'klantadres'";
    echo "value='" . $klant["klantadres"] . " ' ";
    echo "> <br>";

    echo "klantpostcode: <input type='text'";
    echo "name = 'klantpostcode'";
    echo "value='" . $klant["klantpostcode"] . " ' ";
    echo "> <br>";

    echo "klantplaats: <input type='text'";
    echo "name = 'klantplaats'";
    echo "value='" . $klant["klantplaats"] . " ' ";
    echo "> <br>";

}

echo "<input type='submit'>";
echo "</form>";


?>
    </body>
    </html>