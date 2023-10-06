<?php
unset($users['login']);
session_destroy();
header('Location: signin.php');
?>
<section>
    <?php
    if (isset($_SESSION['message']) && !empty(($_SESSION['message']))) {
        echo $_SESSION['message'];
    }
    ?>
</section>