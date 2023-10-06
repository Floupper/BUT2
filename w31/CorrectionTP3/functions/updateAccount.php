<?php
session_start();

if (empty($_SESSION['login'])) {
  header('Location: ../signin.php');
  exit();
}

require_once '../modules/database.php';

/**
 * Check if user doesn't exist
 */
$userExists = $db->prepare("SELECT login FROM users WHERE login=:login");
$userExists->execute(['login' => $_SESSION['login']]);
if (!$userExists->fetch(PDO::FETCH_ASSOC)) {
  $_SESSION['message'] = "Login doesn't exist!";
  header('Location: ../signup.php');
  exit();
}

if (empty($_POST['passwd']) || empty($_POST['confirmPasswd'])) {
  $_SESSION['message'] = "Something's missing!";
  header('Location: ../account.php');
  exit();
}

/**
 * Check passwords
 */
$passwd        = htmlentities($_POST['passwd']);
$confirmPasswd = htmlentities($_POST['confirmPasswd']);
if ($passwd != $confirmPasswd) {
  $_SESSION['message'] = "Passwords are not the same!";
  header('Location: ../account.php');
  exit();
}

/**
 * Update password
 */
$update = $db->prepare("UPDATE users SET passwd=:passwd WHERE login=:login");
$update->execute(['passwd' => password_hash($passwd, PASSWORD_DEFAULT), 'login' => $_SESSION['login']]);

$_SESSION['message'] = "Password updated!";
header('Location: ../account.php');
exit();
