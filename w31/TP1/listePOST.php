<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP1 Exo 2</title>
</head>

<body>
    <?php
    if (isset($_POST['nbItems'])) {
        $nbMax = (int) $_POST['nbItems'];
        for ($i = 0; $i < $nbMax; $i++) {
            echo $i . '<br>';
        }
    } else {
        echo '<h1>ERREUR !</h1>';
    }
    ?>
</body>

</html>