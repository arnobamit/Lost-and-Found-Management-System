<html>
    <head>
        <title>Admin Registration</title>
        <link rel="stylesheet" href="css/admin_reg.css">
    </head>

    <body>
        <h2 id="logo">Lost & Found</h2>
        <center>
            <h1 id="heading">Admin Registration</h1>
            <form id="adminForm" action="admin_action.php" method="post">
                <table>
                    <tr>
                        <td><label for="firstname">First Name:</label></td>
                        <td><input type="text" id="firstname" class="box_input" name="firstname"></td>
                        <td><span id="fnameError" class="error"></span></td>
                    </tr>

                    <tr>
                        <td><label for="lastname">Last Name:</label></td>
                        <td><input type="text" id="lastname" class="box_input" name="lastname"></td>
                        <td><span id="lnameError" class="error"></span></td>
                    </tr>

                    <tr>
                        <td><label for="username">Username:</label></td>
                        <td><input type="text" id="username" class="box_input" name="username"></td>
                        <td><span id="unameError" class="error"></span></td>
                    </tr>

                    <tr>
                        <td><label for="email">Email:</label></td>
                        <td><input type="email" id="email" name="email" class="box_input"></td>
                        <td><span id="emailError" class="error"></span></td>
                    </tr>

                    <tr>
                        <td><label for="password">Password:</label></td>
                        <td><input type="password" id="password" name="password" class="box_input">
                        <td><span id="passwordError" class="error"></td>
                        </td>
                    </tr>

                    <tr>
                        <td><label for="adminCode">Admin Code:</label>
                        </td>
                        <td><input type="number" id="adminCode" class="box_input" name="adminCode">
                        </td>
                        <td><span id="adminCodeError" class="error"></td>
                    </tr>

                    <tr>
                        <td><label for="website">Website/Portfolio URL:</label>
                        </td>
                        <td><input type="url" id="website" class="box_input" name="website">
                        </td>
                        <td><span id="websiteError" class="error"></span></td>
                    </tr>

                    <tr>
                        <td>
                            <label>Gender:</label>
                        </td>
                        <td>
                            <input type="radio" id="male" name="gender" value="Male">
                            <label for="male">Male</label>
                            <input type="radio" id="female" name="gender" value="Female">
                            <label for="female">Female</label><br>
                        </td>
                        <td>
                            <span id="genderError" class="error"></span>
                        </td>
                    </tr>
                </table><br>

                <button type="submit" name="Submit" class="btn">Register</button>
                <button type="reset" class="btn">Clear All</button>
            </form>

            <a href="login.php">Already have an account?</a>

        </center>

        <script src="admin_reg.js"></script>
    </body>
</html>
