<?php
session_start();
include("../model/db.php");

$username = $password = "";
$usernameError = $passwordError = "";
$loginMessage = "";

function test_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    if (empty($_POST["username"])) {
        $usernameError = "Username is required";
    } else {
        $username = test_input($_POST["username"]);
    }

    if (empty($_POST["password"])) {
        $passwordError = "Password is required";
    } else {
        $password = test_input($_POST["password"]);
    }

    if (empty($usernameError) && empty($passwordError)) {
        $conn = createCon();
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        if (checkLogin($conn, $username, $password)) {
            $_SESSION['admin_username'] = $username;

            if (isset($_POST['remember_me'])) {
                setcookie("admin_username", $username, time() + (86400 * 7), "/");
            } else {
                if (isset($_COOKIE['admin_username'])) {
                    setcookie("admin_username", "", time() - 3600, "/");
                }
            }

            header("Location: ../view/admin_profile.php");
            exit();
        } else {
            $passwordError = "Invalid username or password";
        }

        closeCon($conn);
    }
}
?>
