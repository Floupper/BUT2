<?php
session_start();
include_once("bdd.php");
if (isset($_SESSION['login']) && $_SERVER['REQUEST_METHOD']) {
    $oldPassword = (string) $_POST['mdp'];
    $newPassword = (string) $_POST['mdpConfirm'];
    $oldPassword = htmlentities($_POST['mdp']);
    $newPassword = htmlentities($_POST['mdpConfirm']);
    if (strcmp($oldPassword, $newPassword) !== 0) {
        echo "Pas des mots de passes identiques !";
    }
    $query = "UPDATE Users SET password = :newPassword WHERE login = :login";
    $request = $pdo->prepare($query);
    $setMdp = $request->bindValue(':newPassword', $newPassword, PDO::PARAM_STR);
    $setMdp &= $request->bindValue(':login', $_SESSION['login'], PDO::PARAM_STR);
    $setMdp &= $request->execute();
    if ($setMdp != FALSE) {
        header('Location: account.php');
        exit();
    } else {
        header('Location: formpassword.php');
        exit();
    }
}
