<?php
include 'bdd.php';

if (!array_key_exists($_POST['login'], $users)) {
    header('Location: signin.php');
    exit();
} else { ?>
    <p>Bienvenue <?php $_POST['login'] ?>, nous sommes ravis de vous revoir !</p>
    <a href="<?php header('Location: signout.php') ?>">Déconnexion</a>
<?php } ?>