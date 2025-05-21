<html>
    <head>
        <title>User Registration</title>
    </head>

    <body>
        <h1>User Registration</h1>

        <form>
            <table>
                <tr>
                    <td><label for="fullname">Full Name:</label></td>
                    <td><input type="text" id="fullname" name="fullname" placeholder="****" required></td>
                </tr>

                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input type="email" name="user_email" placeholder="abc@gmail.com" required></td>
                </tr>

                <tr>
                    <td><label for="phone">Phone:</label></td>
                    <td><input type="number" name="phone_number" placeholder="+88....." required></td>
                </tr>

                <tr>
                    <td><label for="username">Username:</label></td>
                    <td><input type="text" id="username" name="username" placeholder="miskatjahan01" required></td>
                </tr>

                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" name="password" required>
                    </td>
                </tr>

                <tr>
                    <td><label for="confirm password">Confirm Password:</label></td>
                    <td><input type="password" name="confirm password" required>
                    </td>
                </tr>


                <tr>
                    <td><label for="photo">Profile Photo:</label></td>
                    <td><input type="file" name="photo" required>
                    </td>
                </tr>

                <tr>
                  <td><label for="User">User Type:</label></td>
                    <td><select name="user" id="user" required>
                         <option value="student">Student</option>
                         <option value="faculty">Faculty</option>
                         <option value="alumni">Alumni</option>
  
                        </select></td>
                </tr>

                <tr>
                    <td><label for="date">Registration Date:</label></td>
                    <td><input type="date" name="date" required>
                    </td>
                </tr>

                <tr>
                    <td><lebel for="Address">Address:  </lebel></td>
                    <td><textarea name="Address" rows="4" cols="22"></textarea></td>
                </tr>

            </table>

            <button type="submit">Submit</button>
        <button type="clear">Refresh</button><br><br>
        <a href="login.php">Already have an account?</a>

        </form>
    </body>
</html>