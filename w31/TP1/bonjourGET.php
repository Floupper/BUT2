<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP1</title>
</head>

<body>
    <h1>
        <?php
        if (isset($_GET['module']) && empty($_GET['module'])) {
            echo '<h1>Erreur, pas de GET !</h1>';
        } else {
            $val = (string) $_GET['module'];
            $val = htmlentities($_GET['module']);
            echo $val;
        }
        ?>
    </h1>
</body>

</html>