<?php
session_start();
if (isset($_SESSION['counter'])) {
    $_SESSION['counter']++;
} else {
    $_SESSION['counter'] = 0;
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counter Visite</title>
</head>

<body>
    <p><?php
        echo ($_SESSION['counter']);
        ?></p>
    <a href="resetCounter.php">reinitialiser compteur</a>
</body>

</html>