<?php
session_start();
include_once('bdd.php');
if (isset($_SESSION["login"])) {
    echo 'Utilisateur Connecté';
}
$query = 'DELETE FROM Users WHERE login = :login';
$request = $pdo->prepare($query);
$request->bindValue(':login', $_SESSION["login"], PDO::PARAM_STR);
$request->execute();
if ($request != FALSE) {
    unset($_SESSION["login"]);
    header('Location: signin.php');
    exit();
} else {
    header('Location: account.php');
    exit();
}
