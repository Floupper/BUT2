<?php
session_start();

if (empty($_SESSION['login'])) {
  header('Location: signin.php');
  exit();
}
?>
<!doctype html>
<html lang="en">
  <head>
    <?php include_once 'modules/head.php' ?>
    <title>Document</title>

    <style>
      .form--title {
          font-size: 1.5rem;
      }

      .title {
          font-size: 4em;
          font-weight: 900;
      }

      .logout {
          top: 1.5em;
          color: red;
          right: 1.5em;
          position: absolute;
          padding: 1em 2.5em;
          border-radius: .5em;
          border: 2px solid red;
          transition-duration: 100ms;
          transition-timing-function: ease-in-out;
          transition-property: color, border-color, background-color;

          &:hover {
              color: white;
              text-decoration: none;
              border-color: crimson;
              background-color: crimson;
          }
      }
    </style>
  </head>

  <body>
    <?php
    if (!empty($_SESSION['message'])) {
      echo "<section class=\"message\">".$_SESSION['message']."</section>";
      unset($_SESSION['message']);
    }
    ?>

    <h1 class="title">Welcome <?= $_SESSION['login'] ?>!</h1>
    <a href="functions/signout.php" class="logout btn">Logout</a>

    <form action="functions/updateAccount.php" class="form" method="post">
      <h2 class="form--title">Renew my Password</h2>

      <div class="form__input">
        <input type="text" class="form__input--field" name="passwd" id="passwd" required />
        <label for="passwd" class="form__input--label">Password</label>
      </div>
      <div class="form__input">
        <input type="text" class="form__input--field" name="confirmPasswd" id="confirmPasswd" required />
        <label for="confirmPasswd" class="form__input--label">Confirmation</label>
      </div>

      <button type="submit" class="form--submit">Update Password</button>
    </form>
  </body>
</html>
