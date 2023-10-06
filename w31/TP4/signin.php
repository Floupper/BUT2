<?php
session_start();
if (isset($_SESSION["login"])) {
    header("Location: account.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signin</title>
</head>

<body>
    <section>
        <?php
        if (isset($_GET["error"])) {
            switch ($_GET["error"]) {
                case 1:
                    echo "<p>Wrong password</p>";
                    break;
                case 2:
                    echo "<p>Unknown user</p>";
                    break;
                default:
                    break;
            }
        }

        ?>
    </section>

    <form action="authenticate.php" method="POST">
        <label for="login">Login : </label>
        <input type="text" name="login" id="login" required autofocus>
        <br>
        <label for="mdp">Mot de passe : </label>
        <input type="password" name="mdp" id="mdp">
        <br>
        <input type="submit" value="Signin">
        <a href="signup.php">Créer mon compte</a>
    </form>
</body>

</html>