<html>
    <head>
        <title>Practice</title>
    </head>

    <body>
        <h2>Admin Registration</h2>
        <form>
            <table>
                <tr>
                    <td><label for="firstname">First Name:</label></td>
                    <td><input type="text" id="firstname" name="firstname" placeholder="Alex" required></td>
                </tr>

                <tr>
                    <td><label for="lastname">Last Name:</label></td>
                    <td><input type="text" id="lastname" name="lastname" placeholder="Hales" required></td>
                </tr>

                <tr>
                    <td><label for="username">Username:</label></td>
                    <td><input type="text" id="username" name="username" placeholder="alexhells202" required></td>
                </tr>

                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input type="email" name="user_email" placeholder="alexhells@gmail.com" required></td>
                </tr>

                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" name="password" required>
                    </td>
                </tr>

                <tr>
                    <td><label for="admin_code">Admin Code:</label>
                    </td>
                    <td><input type="number" id="admin_code" name="admin_code" required>
                    </td>
                </tr>

                <tr>
                    <td><label for="website">Website/Portfolio URL:</label>
                    </td>
                    <td><input type="url" id="website" name="website" placeholder="https://yourportfolio.com">
                    </td>
                </tr>

                <tr>
                    <td><label>Gender:</label>
                    </td>
                    <td><input type="radio" id="male" name="gender" value="Male" required>
                        <label for="male">Male</label>
                        <input type="radio" id="female" name="gender" value="Female" required>
                        <label for="female">Female</label>
                        <input type="radio" id="other" name="gender" value="Other" required>
                        <label for="other">Other</label><br>
                    </td>
                </tr>
              </table>
          </form>

          <button type="submit">Register Admin</button>
          <button type="clear">Clear All</button><br><br>
          <a href="login.php">Already have an account?</a>

    </body>
</html>

