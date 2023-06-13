<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['username'])) {
    $message[] = "You are already logged in";
    header('location: ../../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!--FontAwesome-->
    <script src="https://kit.fontawesome.com/02f97eb423.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Sidebar -->
    <?php include '../includeParts/NavBar.php' ?>

    <?php if (isset($message)) {
        foreach ($message as $message) {
            echo '<div class="message" onclick="this.remove();">' . $message . '</div>';
        }
    } ?>

    <br>
    <div class="form">
        <?php if (isset($register_popup)) { ?>
            <h1 class="successfulRegister"><?php echo $register_popup ?></h1>
        <?php } ?>
        <!--login------->
        <div class="login-form">
            <!--heading-->
            <strong>Log In</strong>
            <!---inputet-->
            <form method="POST" action="functions.php">
                <?php if (isset($login_error)) { ?>
                    <p><?php echo $login_error ?></p>
                <?php } ?>
                <input type="text" placeholder="Username" name="username" required>
                <input type="password" placeholder="Password" name="password" required>
                <!--butoni-submit-->
                <input type="submit" value="Log In" name="login_user">
            </form>
            <!--butoni-forget-dhe-sign-up-->
            <div class="form-buttons">
                <a href="register.php" class="sign-up-btn">Create account</a>
            </div>
        </div>
    </div>

</body>

</html>