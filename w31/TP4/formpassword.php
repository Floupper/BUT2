<?php
session_start();
if (!isset($_SESSION["login"]))
    header("Location: signin.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Password</title>
</head>

<body>
    <form action="changepassword.php" method="post">
        <label for="mdp">Mot de passe :</label>
        <input type="password" name="mdp" id="mdp" required>
        <label for="mdpConfirm">Confirmer le mot de passe :</label>
        <input type="password" name="mdpConfirm" id="mdpConfirm" required>
        <input type="submit" value="changePassword">
    </form>
    <a href="account.php">Changer de mot de passe</a>
</body>

</html>