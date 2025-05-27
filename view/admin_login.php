<?php include("../control/admin_login_action.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="../css/admin_login.css">
</head>
<body>
    <h2 id="logo">Lost & Found</h2>

    <div class="content">
        <h1 id="heading">Admin Login</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <table>
                <tr>
                    <td><label for="username">Username:</label></td>
                    <td>
                        <input type="text" id="username" class="box_input" name="username" value="<?= htmlspecialchars($username ?: ($_COOKIE['admin_username'] ?? '')) ?>"><br>
                        <span class="error"><?= $usernameError ?></span>
                    </td>
                    
                </tr>

                <tr>
                    <td><label for="password">Password:</label></td>
                    <td>
                        <input type="password" id="password" class="box_input" name="password"><br>
                        <span class="error"><?= $passwordError ?></span>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <label><input type="checkbox" name="remember_me" <?php if(isset($_COOKIE['admin_username'])) echo "checked"; ?>> Remember Me</label>
                    </td>
                </tr>

            </table><br>
            <div class="links">
                <button type="submit" name="login" class="btn">Login</button><br><br>
                <a href="admin_reg.php">Don't have an account?</a><br><br>
                <a href="admin_forgot_pass.php" class="forgot-link">Forgot Password?</a>
            </div>
        </form>
    </div>

    <?php if (!empty($loginMessage)) echo $loginMessage; ?>
</body>
</html>
