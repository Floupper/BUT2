<?php
session_start();
if (!isset($_SESSION["login"]))
    header("Location: signin.php");
exit();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>TP2</title>
</head>

<body>
    <h1>Mon compte</h1>
    <p>Bienvenue <?php echo $_SESSION["login"]; ?>, nous sommes ravi de te revoir !</p>
    <a href="signout.php">Déconnexion</a>
    <a href="formpassword.php">Retour à mon compte</a>
    <a href="deleteuser.php">Supprimer l'utilisateur</a>
</body>

</html>