<?php include("../control/admin_action.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Registration</title>
    <link rel="stylesheet" href="../css/admin_reg.css">
</head>
<body>
    <h2 id="logo">Lost & Found</h2>

    <div class="content">
        <h1 id="heading">Admin Registration</h1>
        <form id="adminForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td><label for="firstname">First Name:</label></td>
                    <td colspan="2">
                        <input type="text" id="firstname" class="box_input" name="firstname" value="<?= htmlspecialchars($firstname) ?>">
                        <br><span class="error"><?= $fnameError ?></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="lastname">Last Name:</label></td>
                    <td colspan="2">
                        <input type="text" id="lastname" class="box_input" name="lastname" value="<?= htmlspecialchars($lastname) ?>">
                        <br><span class="error"><?= $lnameError ?></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="username">Username:</label></td>
                    <td colspan="2">
                        <input type="text" id="username" class="box_input" name="username" value="<?= htmlspecialchars($username) ?>">
                        <br><span class="error"><?= $unameError ?></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="email">Email:</label></td>
                    <td colspan="2">
                        <input type="email" id="email" name="email" class="box_input" value="<?= htmlspecialchars($email) ?>">
                        <br><span class="error"><?= $emailError ?></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td colspan="2">
                        <input type="password" id="password" name="password" class="box_input">
                        <br><span class="error"><?= $passwordError ?></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="website">Website/Portfolio URL:</label></td>
                    <td colspan="2">
                        <input type="url" id="website" class="box_input" name="website" value="<?= htmlspecialchars($website) ?>">
                        <br><span class="error"><?= $websiteError ?></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="myfile">Profile Picture:</label></td>
                    <td colspan="2">
                        <input type="file" id="myfile" class="box_input" name="myfile">
                        <br><span class="error"><?= $fileError ?></span>
                    </td>
                </tr>
                <tr>
                    <td><label>Gender:</label></td>
                    <td colspan="2">
                        <input type="radio" id="male" name="gender" value="Male" <?= ($gender == "Male") ? "checked" : "" ?>>
                        <label for="male">Male</label>
                        <input type="radio" id="female" name="gender" value="Female" <?= ($gender == "Female") ? "checked" : "" ?>>
                        <label for="female">Female</label>        
                        <br><span class="error"><?= $genderError ?></span>
                    </td>
                </tr>
            </table><br>

            <div class="buttons">
                <button type="submit" name="Submit" class="btn">Register</button>
                <button type="reset" class="btn">Clear All</button> <br> <br>
                <a href="../view/admin_login.php">Already have an account?</a>
            </div>
        </form>
    </div>

    <?php if (!empty($successMessage)) echo $successMessage; ?>
</body>
</html>
