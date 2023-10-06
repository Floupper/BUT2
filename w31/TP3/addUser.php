<?php
session_start();

require_once('helpers.php');

if ($_SERVER["REQUEST_METHOD"] != "POST")
    header("Location: signup.php");
else {
    include_once("bdd.php");
    $login = $_POST["login"];
    $mdp = $_POST["mdp"];
    if (isset($login) && isset($mdp)) {
        if (isUserExists($login)) {
            header("Location: signup.php?error=1");
            return;
        }
        addUser($login, $mdp);
        $_SESSION["login"] = $login;
        header("Location: account.php");
        return;
    } else
        header("Location: signup.php?error=2");
}
