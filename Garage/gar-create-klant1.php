<?php

?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
          
    <title>garage menu</title>
</head>
<body>
<h1>garage create klant</h1>

<p> dit formulier word gebruikt om klantgegevens in te voeren</p>


    <form action="gar-create-klant2.php" method="post">
        <label for="username"> klantnaam </label>
        <input id="username" name="klantnaam" type="text">
        <br>
        <label for="adres">klantadres </label>
        <input id="adres" name="klantadres" type="text">
        <br>
        <label for="postcode">klantpostcode </label>
        <input id="postcode" name="klantpostcode" type="text">
        <br>
        <label for="plaats">klantplaats</label>
        <input id="plaats" name="klantplaats" type="text">
        <br>

        <input type="submit" class="btn">
    </form>

</body>
</html>