<?php
session_start();
include("../model/db2.php");
$username =$email = $password = "";
$usernameErr =$emailErr =$passwordErr = "";
$loginMessage = "";

function test_input($data) {
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

        if (checkLogin($conn, $username, $email, $password)) {
            $loginMessage = "<div style='margin: 20px auto; padding: 20px; background: rgb(33, 39, 30); color: #3c763d; border: 1px solid #3c763d; border-radius: 5px; width: 70%;'><h2>Login Successful</h2></div>";
            $_SESSION['username'] = $username;
            header("Location: ../view/user_profile.php");
            exit();
        } else {
            $passwordError = "Invalid username or password";
        }

        closeCon($conn);
    }
}

