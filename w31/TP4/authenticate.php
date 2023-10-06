<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] != "POST")
    header("Location: signin.php");
else {
    include_once("helpers.php");
    include_once("bdd.php");
    $username = $_POST["login"];
    $password = $_POST["mdp"];
    if (isUserExists($username)) {
        if (loginUser($username, $password)) {
            $_SESSION["login"] = $username;
            header("Location: account.php");
            return;
        } else
            header("Location: signin.php?error=1");
    } else
        header("Location: signin.php?error=2");
}
