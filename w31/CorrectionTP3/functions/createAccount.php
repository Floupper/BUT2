<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] != "POST") {
  header('Location: ../signup.php');
  exit();
}
if (empty($_POST['username']) || empty($_POST['passwd']) || empty($_POST['confirmPasswd'])) {
  $_SESSION['message'] = "Something's missing!";
  header('Location: ../signup.php');
  exit();
}

$username      = htmlentities($_POST['username']);
$passwd        = htmlentities($_POST['passwd']);
$confirmPasswd = htmlentities($_POST['confirmPasswd']);

require_once '../modules/database.php';

/**
 * Check if the username already exists
 */
$userExists = $db->prepare("SELECT login FROM users WHERE login=:login");
$userExists->execute(['login' => $username]);
if ($userExists->fetch(PDO::FETCH_ASSOC)) {
  $_SESSION['message'] = "Login already exists!";
  header('Location: ../signup.php');
  exit();
}

/**
 * Check if password = confirmation
 */
if ($passwd != $confirmPasswd) {
  $_SESSION['message'] = "Passwords are not the same!";
  header('Location: ../signup.php');
  exit();
}

/**
 * Create user
 */
$createUser = $db->prepare("INSERT INTO users (login, passwd) VALUES (:login, :passwd)");
$createUser->execute(['login' => $username, 'passwd' => password_hash($passwd, PASSWORD_DEFAULT)]);

$_SESSION['login'] = $username;
unset($_SESSION['message']);
header('Location: ../account.php');
exit();
