<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] != "POST")
    header("Location: signup.php");
else {
    include_once("helpers.php");
    include_once("bdd.php");
    $username = $_POST["login"];
    $password = $_POST["mdp"];
    if (isset($username) && isset($password)) {
        if (isUserExists($username)) {
            header("Location: signup.php?error=1");
            return;
        }
        addUser($username, $password);
        $_SESSION["login"] = $username;
        header("Location: account.php");
        return;
    } else
        header("Location: signup.php?error=2");
}
