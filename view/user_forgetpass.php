<?php include("../control/user_forgetpass_action.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
    <link rel="stylesheet" href="../css/user_login.css">
</head>
<body>
    <h2 id="logo">Lost & Found</h2>

    <div class="content">
        <h1 id="heading">Reset Password</h1>
        <form method="post">
            <table>
                <tr>
                    <td><label>Username:</label></td>
                    <td>
                        <input type="text" name="username" class="box_input" value="<?= htmlspecialchars($username) ?>"><br>
                    </td>
                </tr>

                <tr>
                    <td><label>Email:</label></td>
                    <td>
                        <input type="email" name="email" class="box_input" value="<?= htmlspecialchars($email) ?>"><br>
                    </td>
                </tr>

                <tr>
                    <td><label>New Password:</label></td>
                    <td>
                        <input type="password" name="new_password" class="box_input"><br>
                    </td>
                </tr>

                <tr>
                    <td><label>Confirm Password:</label></td>
                    <td>
                        <input type="password" name="confirm_password" class="box_input"><br>
                    </td>
                </tr>
            </table>

            <div class="links">
                <button type="submit" class="btn">Reset Password</button><br><br>
                
                <?php if (!empty($message)) echo "<span class='error'>$message</span>"; ?>
            </div>
        </form>
    </div>
</body>
</html>