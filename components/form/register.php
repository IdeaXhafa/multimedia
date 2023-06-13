<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($username)) {
    $username = '';
}
if (!isset($email)) {
    $email = '';
}
if (isset($_SESSION['username'])) {
    $message[] = "You are already have an account";
    header('location: ../../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!--FontAwesome-->
    <script src="https://kit.fontawesome.com/02f97eb423.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Sidebar -->
    <?php include '../includeParts/NavBar.php' ?>

    <!--Message from phpcommands-->
    <?php
    if (isset($message)) {
        foreach ($message as $message) {
            echo '<div class="message" onclick="this.remove();">' . $message . '</div>';
        }
    }
    ?>

    <br>
    <div class="form">
        <!--Sign-up------->
        <div class="sign-up-form">
            <!--heading-->
            <strong>Sign Up</strong>
            <!---inputet-->
            <form action="functions.php" method="POST">
                <input type="text" placeholder="Username" value="<?php echo htmlspecialchars($username) ?>" name="username" required>
                <?php if (isset($username_error)) { ?>
                    <p><?php echo $username_error ?></p>
                <?php } ?>
                <input type="number" placeholder="Age" value="<?php echo htmlspecialchars($age) ?>" name="age" required>
                <?php if (isset($age_error)) { ?>
                    <p><?php echo $age_error ?></p>
                <?php } ?>
                <input type="email" placeholder="Example@gmail.com" value="<?php echo htmlspecialchars($email) ?>" name="email" required>
                <?php if (isset($email_error)) { ?>
                    <p><?php echo $email_error ?></p>
                <?php } ?>
                <input type="password" placeholder="Password" name="password" required>
                <?php if (isset($password_error)) { ?>
                    <p><?php echo $password_error ?></p>
                <?php } ?>
                <input type="submit" value="Sign Up" name="reg_user">
            </form>
            <!--butoni-forget-dhe-sign-up-->
            <div class="form-buttons">
                <a href="login.php" class="already-account">Already have an account?</a>
            </div>
        </div>
    </div>


</body>

</html>