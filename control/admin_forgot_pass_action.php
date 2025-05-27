<?php
include("../model/db.php");

$username = $email = $newPassword = $confirmPassword = "";
$message = "";

function test_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = test_input($_POST['username']);
    $email = test_input($_POST['email']);
    $newPassword = $_POST['new_password'];
    $confirmPassword = $_POST['confirm_password'];

    if (empty($username) || empty($email) || empty($newPassword) || empty($confirmPassword)) {
        $message = "Please fill in all fields.";
    } elseif ($newPassword !== $confirmPassword) {
        $message = "Passwords do not match.";
    } else {
        $conn = createCon();

        $sql = "SELECT * FROM admin WHERE username='$username' AND email='$email'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $updateSql = "UPDATE admin SET password='$newPassword' WHERE username='$username'";
            if (mysqli_query($conn, $updateSql)) {
                $message = "Password reset successfully. <a href='admin_login.php'>Login</a>";
            } else {
                $message = "Failed to reset password. Try again.";
            }
        } else {
            $message = "Username and email do not match our records.";
        }

        closeCon($conn);
    }
}
?>
