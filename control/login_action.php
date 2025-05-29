<?php
session_start();
include("../model/db2.php");

$username = $email = $password = "";
$usernameErr = $emailErr = $passwordErr = "";
$loginMessage = "";

if (isset($_COOKIE['username'])) {
    $username = $_COOKIE['username'];
}

function test_input($data)
{
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    
    if (empty($_POST["username"])) {
        $usernameErr = "Username is required";
    } else {
        $username = test_input($_POST["username"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = test_input($_POST["password"]);
    }

    if (empty($usernameErr) && empty($emailErr) && empty($passwordErr)) {
        $conn = createCon();

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        if (checkUserLogin($conn, $username, $email, $password)) 
        {
            $_SESSION['username'] = $username;

             if (isset($_POST['remember_me'])) 
             {
                setcookie("username", $username, time() + (86400 * 7), "/");
             }
              else
              {
                if (isset($_COOKIE['username'])) {
                    setcookie("username", "", time() - 3600, "/");
                }
             }

            header("Location: ../view/user_profile.php");
            exit();
        } 
        
        else {
             $passwordError = "Invalid username or password";  
        }

        closeCon($conn);
    }
}
?>
