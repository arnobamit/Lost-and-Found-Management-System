<?php
session_start();
include("../model/db2.php");

if (!isset($_SESSION['username'])) {
    header("Location: user_login.php");
    exit();
}


$conn = createCon();
$usersData = fetchUser($conn, $_SESSION['username']);




closeCon($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
    <link rel="stylesheet" href="../CSS/user_profile.css">
</head>
<body>

<h2>Welcome, <?= htmlspecialchars($userData['fullname']) ?>!</h2>

<div class="profile-box">

    <?php if (!empty($userData['file'])): ?>
        <div class="center">
            <img src="../uploads/<?= htmlspecialchars($userData['file']) ?>" alt="Profile Picture" style="max-width:150px; border-radius: 50%; margin-bottom: 20px;">
        </div>
    <?php endif; ?>

    <p><strong>Username:</strong> <?= htmlspecialchars($userData['username']) ?></p>
    <p><strong>Email:</strong> <?= htmlspecialchars($userData['email']) ?></p>
    <p><strong>Phone:</strong> <?= htmlspecialchars($userData['phone']) ?></p>
    <p><strong>User Type:</strong> <?= htmlspecialchars($userData['user_type']) ?></p>
    <p><strong>Date:</strong> <?= htmlspecialchars($userData['date']) ?></p>
    <p><strong>Address:</strong> <?= htmlspecialchars($userData['address']) ?></p>

    <div class="center">
        <a href="user_logout.php" class="btn">Logout</a>
    </div>
</div>

</body>
</html>
