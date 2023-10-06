<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signin</title>
</head>

<body>
    <form action="authenticate.php" method="POST">
        <label for="login">Login : </label>
        <input type="text" name="login" id="login" required autofocus>
        <br>
        <label for="mdp">Mot de passe : </label>
        <input type="password" name="mdp" id="mdp">
        <br>
        <input type="submit" value="Signin">

        <section>
            <?php
            if (isset($_SESSION['message']) && !(empty($_SESSION['message']))) {
                echo $_SESSION['message'];
            }
            ?>
        </section>
    </form>
</body>

</html>