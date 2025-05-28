<?php
session_start();
include("../model/db.php");

if (!isset($_SESSION['admin_username'])) {
    header("Location: admin_login.php");
    exit();
}

$conn = createCon();
$adminData = fetchAdmin($conn, $_SESSION['admin_username']);
closeCon($conn);
?>

<html>

<head>
    <title>Admin Profile</title>
    <link rel="stylesheet" href="../css/admin_profile.css">
</head>

<body>
    <h2 id="logo">Lost & Found</h2>
    <h2>Welcome, <?= htmlspecialchars($adminData['firstname']) . " " . htmlspecialchars($adminData['lastname']) ?>!</h2>

    <div class="profile-box">
        <?php 
        if (!empty($adminData['file'])): ?>
            <div class="center">
                <img src="../uploads/admins/<?= htmlspecialchars($adminData['file']) ?>" alt="Profile Picture" class="profile-pic">
            </div>
        <?php endif; ?>

        <p><strong>Username:</strong> <?= htmlspecialchars($adminData['username']) ?></p>
        <p><strong>Email:</strong> <?= htmlspecialchars($adminData['email']) ?></p>
        <p><strong>Website:</strong> <a href="<?= htmlspecialchars($adminData['website']) ?>" target="_blank"><?= htmlspecialchars($adminData['website']) ?></a></p>
        <p><strong>Gender:</strong> <?= htmlspecialchars($adminData['gender']) ?></p>

        <div class="center">
            <a href="admin_logout.php" class="btn">Logout</a>
            <a href="admin_products.php" class="btn">Manage Products</a>
        </div>
    </div>

</body>

</html>