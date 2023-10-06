<?php
session_start();

if (!empty($_SESSION['login'])) {
  header('Location: account.php');
  exit();
}
?>
<!doctype html>
<html lang="en">
  <head>
    <?php include_once 'modules/head.php' ?>
    <title>Sign In</title>
  </head>

  <body>
    <?php
    if (!empty($_SESSION['message'])) {
      echo "<section class=\"message\">".$_SESSION['message']."</section>";
      unset($_SESSION['message']);
    }
    ?>

    <form action="functions/authenticate.php" method="post" class="form">
      <h1 class="form--title">Sign in</h1>

      <div class="form__input">
        <input type="text" class="form__input--field" name="username" id="username" required />
        <label for="username" class="form__input--label">Username</label>
      </div>
      <div class="form__input">
        <input type="password" class="form__input--field" name="passwd" id="passwd" required />
        <label for="passwd" class="form__input--label">Password</label>
      </div>

      <button class="form--submit">Login</button>

      <a href="signup.php" class="method">Je n'ai pas de compte !</a>
    </form>
  </body>
</html>
