

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
   
    <title>garage menu</title>
</head>
<body>
<h1>garage create klant 2</h1>

<p> een klant toevoegen in de tabel klant</p>


<?php



    $klantid = null; 
    $klantnaam  = (isset($_POST['Klantnaam']) ? $_POST['Klantnaam'] : null);
    $klantadres = (isset($_POST['Klantadres']) ? $_POST['Klantadres'] : null);
    $klantpostcode = (isset($_POST['Klantpostcode']) ? $_POST['Klantpostcode'] : null);
    $klantplaats = (isset($_POST['Klantplaats']) ? $_POST['Klantplaats'] : null);

    

        require_once "gar-connect.php";

        $sql = $connect->prepare("insert into klanten VALUES (:klantid, :klantnaam, :klantadres, :klantpostcode, :klantplaats)");

        $sql->execute([
                "klantid"  => $klantid,
                "klantnaam" => $klantnaam,
                "klantadres" => $klantadres,
                "klantpostcode" => $klantadres,
                "klantplaats" => $klantplaats
            ]);


        echo "de klant is toegevoegd <br>";
        echo "<a href='gar-menu.php'> terug naar het menu </a>"
?>
        </body>
</html>