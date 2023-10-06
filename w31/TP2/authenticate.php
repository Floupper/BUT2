<?php
session_start();

$_SESSION['message'];

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: signin.php');
    exit();
}

if (empty($_POST['login']) || empty($_POST['mdp'])) {
    header('Location: signin.php');
    exit();
}

$login = htmlspecialchars($_POST['login']);
$mdp = htmlspecialchars($_POST['mdp']);

require_once('bdd.php');

if (!array_key_exists($login, $users) || $users[$login] !== $mdp) {
    header('Location: signin.php');
    exit();
}

$_SESSION['user'] = $login;

header('Location: account.php');
exit();
