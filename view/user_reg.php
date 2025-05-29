<?php 
include ("../control/action_page.php");
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <link rel="stylesheet" type="text/css" href="../css/user_reg.css">
</head>
<body>
    <h2 id="logo">Lost & Found</h2>
<center>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"  id="onsubmit" enctype="multipart/form-data" >
            <div class="firstdiv">
                <h1>User Register</h1>
                <div class = "field">

                    <table>
                        <tr>
                            <td><label for="fullname">Full Name:</label></td>
                            <td><input type="text" id="fullname" name="fullname"  placeholder="Enter your fullname" value="<?php echo $fullname; ?>">
                            <span class="error"><?php echo $fullnameErr; ?></span><br>
                        </td>
                        </tr>

                        <tr>
                            <td><label for="email" >Email:</label></td>
                            <td><input type="email" id="email" name="email" placeholder="Enter your Email id:" value="<?php echo $email; ?>">
                            <span class="error"><?php echo $emailErr; ?></span><br>
                        </td>
                        </tr>

                        <tr>
                            <td><label for="phone"> Phone:</label></td>
                            <td><input type="text" id="phone" name="phone" placeholder="Enter your phone number:" value="<?php echo $phone; ?>">
                            <span class="error"><?php echo $phoneErr; ?></span><br>
                        </td>
                        </tr>

                        <tr>
                            <td><lebel for="username"> Username: </label></td>
                            <td><input type="text" id="username" name="username" placeholder="Enter your User name:" value="<?php echo $username; ?>">
                            <span class="error"><?php echo $usernameErr; ?></span>
                        </td>
                        </tr>

                        <tr>
                            <td><label for="password"> Password: </label></td>
                            <td><input type="password" id="password" name="password" placeholder="**********" value="<?php echo $password; ?>">
                            <span class="error"><?php echo $passwordErr; ?></span><br>
                        </td>
                        </tr>

                        <tr>
                            <td><label for="cpassword" > Confirm Password:</label></td>
                            <td><input type="password" id="cpassword" name="cpassword" placeholder="**********" value="<?php echo $cpassword; ?>">
                            <span class="error"><?php echo $cpasswordErr; ?></span><br>
                        </td>
                        </tr>


                       <tr>
                            <td><label>Uploaded picture: </label> </td>
                            <td><input type="file" id="file" name="file" placeholder="file" value="<?php echo $file; ?>" >
                            <span class="error"><?php echo $fileError;?></span><br>
                        </td>
                        </tr>
                        
                        <tr>
                            <td><label for=" user_type"> User Type: </label></td>
                            <td>
                                <select id="user_type" name="user_type">
                                    <option value="Student" <?php if($user_type=="student") echo "selected"; ?>>Student</option>
                                    <option value="Faculty" <?php if($user_type=="faculty") echo "selected"; ?>>Faculty</option>
                                    <option value="Alumni" <?php if($user_type=="alumni") echo "selected"; ?>>Alumni</option>
                                </select>
                            </td>
                            <td><span class="error"><?php echo $user_typeErr; ?></span></td>
                        </tr>
                        
                        <tr>
                            <td><label for= "date" > Registration Date: </label></td>
                            <td><input type="date" id="date" name="date" placeholder="Enter a Registration date: " value="<?php echo $date; ?>">
                            <span class="error"><?php echo $dateErr; ?></span><br>
                        </td>
                        </tr>

                        <tr>
                            <td><label for="address" > Address: </label></td>
                            <td><textarea id="address" name="address" rows="3" cols="30"><?php echo $address; ?></textarea><br>
                            <span class="error"><?php echo $addressErr; ?></span><br>
                        </td>
                        </tr>

                        <tr>
                            <td><input type="submit" name="submit" class="btn submit" value="Submit"></td>
                            <td><input type="reset" class="btn reset" value="Reset"></td>
                        </tr>

                    </table>
                 </div>        
            </div>
        </form>
        <a href="user_login.php">Already have an account?</a>
</center>   
</body>
</html>
