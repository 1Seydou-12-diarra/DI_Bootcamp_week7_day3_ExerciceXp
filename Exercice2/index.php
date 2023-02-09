<?php
    // Store Login Detail
    setcookie("username", "Diarrassouba", time() + (86400 * 30), "/"); // 86400 = 1 day

    $submit = false;
    $logIn = false;
    // submit form
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $submit = true;
        if (($_COOKIE["username"] == $_POST["username"])) {
            $logIn = true;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1</title>
</head>
<body>
    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="name">Username</label>
        <input type="text" name="username" id="username">
        <input type="submit" value="Valider">
    </form>

    <!-- msg connect -->
    <?php if($submit): ?>
        <h3>Login <?= $logIn ? "success" : "error" ?> </h3>
    <?php endif; ?>

</body>
</html>