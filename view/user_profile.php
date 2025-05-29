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
    <link rel="stylesheet"  href="../css/user_profile.css">
</head>

<body>
<h2>Welcome <?= htmlspecialchars($usersData['fullname']) ?>!</h2>

<div class="profile-box">
    <?php if (!empty($usersData['file'])): ?>
        <div class="center">
            <img src="../uploads/users/<?= htmlspecialchars($usersData['file']) ?>" alt="Profile Picture" style="max-width:150px; border-radius: 50%; margin-bottom: 20px;">
        </div>
        
    <?php endif; ?>

    <p><strong>Full Name:</strong> <?= htmlspecialchars($usersData['fullname']) ?></p>
    <p><strong>Email:</strong> <?= htmlspecialchars($usersData['email']) ?></p>
    <p><strong>Phone:</strong> <?= htmlspecialchars($usersData['phone']) ?></p>
    <p><strong>Lost Item Picture:</strong> <?= htmlspecialchars($usersData['file']) ?></p>
    <p><strong>User Type:</strong> <?= htmlspecialchars($usersData['user_type']) ?></p>
    <p><strong>Date:</strong> <?= htmlspecialchars($usersData['reg_date']) ?></p>
    <p><strong>Address:</strong> <?= htmlspecialchars($usersData['address']) ?></p>

    <div class="center">
        <a href="user_logout.php" class="btn">Logout</a>
    </div>
</div>

</body>
</html>
