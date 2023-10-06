<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] !== "POST") {
  header('Location: ../signin.php');
  exit();
}
if (empty($_POST['username']) || empty($_POST['passwd'])) {
  $_SESSION['message'] = "Something's missing!";
  header('Location: ../signin.php');
  exit();
}

$username = htmlentities($_POST['username']);
$passwd   = htmlentities($_POST['passwd']);

require_once '../modules/database.php';
/**
 * Check if the username doesn't exist
 */
$userExists = $db->prepare("SELECT * FROM users WHERE login=:login");
$userExists->execute(['login' => $username]);
$result = $userExists->fetch(PDO::FETCH_ASSOC);
if (!$result) {
  $_SESSION['message'] = "Login doesn't exist!";
  header('Location: ../signin.php');
  exit();
}

/**
 * Check the password
 */
$hash = $result['passwd'];
if (!password_verify($passwd, $hash)) {
  $_SESSION['message'] = "Wrong password!";
  header('Location: ../signin.php');
  exit();
}

$_SESSION['login'] = $username;
unset($_SESSION['message']);
header('Location: ../account.php');
exit();
