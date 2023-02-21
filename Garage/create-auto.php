<?php


?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>garage menu</title>
</head>
<body>
<h1>garage create auto</h1>

<p> dit formulier word gebruikt om autogegevens in te voeren</p>


<form action="create-auto2.php" method="post" enctype="multipart/form-data">

    <label for="kenteken"> auto kenteken: </label>
    <input id="kenteken" name="kentekenvak" type="text">
    <br>
    <label for="merk">auto merk: </label>
    <input id="merk" name="automerkvak" type="text">
    <br>
    <label for="type">auto type: </label>
    <input id="type" name="autotypevak" type="text">
    <br>
    <label for="kmstand">auto km stand</label>
    <input id="kmstand" name="autokmstandvak" type="text">
    <br>
    <label for="klantid">klantid:</label>
    <input id="klantid" name="klantidvak" type="text">
    <br>
    <input type="submit" class="btn" name="submit">
</form>

</body>
</html>