<?php
session_start();
if (isset($_SESSION["username"]))
    header("Location: account.php");
?>
<!DOCTYPE html>
<html lang="">

<head>
    <title>Sign in</title>
    <meta charset="utf-8">
</head>

<body>
    <?php
    if (isset($_GET["error"])) {
        switch ($_GET["error"]) {
            case 1:
                echo "<p>Username already exists</p>";
                break;
            case 2:
                echo "<p>Username or password are not set</p>";
        }
    }
    ?>
    <form action="addUser.php" method="POST">
        <label for="login">Login</label>
        <input type="text" name="login" id="login" required>
        <label for="mdp">Mot de Passe :</label>
        <input type="password" name="mdp" id="mdp" required>
        <input type="submit" value="Sign in">
</body>