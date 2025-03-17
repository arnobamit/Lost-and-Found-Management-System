<html>
    <head>
        <title>Admin Registration</title>
        <link rel="stylesheet" href="css/admin_reg.css">
    </head>

    <body>
        <h2 id="logo">Lost & Found</h2>
        <center>
            <h1 id="heading">Admin Registration</h1>
            <form action="admin_action.php" method="post">
                <table>
                    <tr>
                        <td><label for="firstname">First Name:</label></td>
                        <td><input type="text" id="firstname" class="box_input" name="firstname" placeholder="Alex" required></td>
                    </tr>

                    <tr>
                        <td><label for="lastname">Last Name:</label></td>
                        <td><input type="text" id="lastname" class="box_input" name="lastname" placeholder="Hales" required></td>
                    </tr>

                    <tr>
                        <td><label for="username">Username:</label></td>
                        <td><input type="text" id="username" class="box_input" name="username" placeholder="alexhells202" required></td>
                    </tr>

                    <tr>
                        <td><label for="email">Email:</label></td>
                        <td><input type="email" name="user_email" class="box_input" placeholder="alexhells@gmail.com" required></td>
                    </tr>

                    <tr>
                        <td><label for="password">Password:</label></td>
                        <td><input type="password" name="password" class="box_input" required>
                        </td>
                    </tr>

                    <tr>
                        <td><label for="admin_code">Admin Code:</label>
                        </td>
                        <td><input type="number" id="admin_code" class="box_input" name="admin_code" required>
                        </td>
                    </tr>

                    <tr>
                        <td><label for="website">Website/Portfolio URL:</label>
                        </td>
                        <td><input type="url" id="website" class="box_input" name="website" placeholder="https://yourportfolio.com">
                        </td>
                    </tr>

                    <tr>
                        <td><label>Gender:</label>
                        </td>
                        <td><input type="radio" id="male" name="gender" value="Male" required>
                            <label for="male">Male</label>
                            <input type="radio" id="female" name="gender" value="Female" required>
                            <label for="female">Female</label><br>
                        </td>
                    </tr>
                </table><br>

                <button type="submit" class="btn">Register</button>
                <button type="reset" class="btn">Clear All</button>
            </form>

            <a href="login.php">Already have an account?</a>

        </center>
    </body>
</html>
