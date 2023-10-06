<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header("Location: formulaire.php");
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP1</title>
</head>

<body>
    <!-- <form method="post" action="bonjourPOST.php">
        <input type="text" name="firstname">
        <input type="text" name="lastname">
        <input type="submit">
    </form> -->

    <h1>
        <?php
        if (isset($_POST['firstname']) && isset($_POST['lastname'])) {
            $firstname = (string) $_POST['firstname'];
            $lastname = (string) $_POST['lastname'];
            $firstname = htmlentities($_POST['firstname']);
            $lastname = htmlentities($_POST['lastname']);
            echo "Nom : " . $firstname . " Prénom : " . $lastname;
        }
        ?>
    </h1>
</body>

</html>