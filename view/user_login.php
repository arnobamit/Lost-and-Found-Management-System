<?php include "../control/login_action.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
    <link rel="stylesheet" href="../css/user_login.css">
</head>
<body>
    <center>

        <h2 id="logo">Lost & Found</h2>

        <div class="content">
            
            <h2>User Login</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <table>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" value="<?= htmlspecialchars($username) ?>"><br></td>
                    <td><span class="error"><?= $usernameErr ?></span></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="user_email" value="<?php echo $email; ?>"></td>
                    <td><span class="error"><?php echo $emailErr; ?></span></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password"></td>
                    <td><span class="error"><?php echo $passwordErr; ?></span></td>
                </tr>
                <tr>
                    <td><input type="submit" name="login" value="Login"></td>
                    <td><a href="user_reg.php">Not have an account?Register</a></td>
                </tr>
            </table>
        </form>



    <?php if (!empty($loginMessage)) echo $loginMessage; ?>
    </center>
</body>
</html>
