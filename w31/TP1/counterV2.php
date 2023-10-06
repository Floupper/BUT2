<?php
session_start();
setcookie('counter', '0', time() + 3000);

if (isset($_COOKIE['counter'])) {
    $_COOKIE['counter']++;
} else {
    $_COOKIE['counter'] = 0;
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
        echo ($_COOKIE['counter']);
        ?></p>
    <a href="resetCounterV2.php">reinitialiser compteur</a>
</body>

</html>