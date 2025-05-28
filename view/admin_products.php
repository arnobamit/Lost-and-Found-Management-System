<?php
session_start();
include("../model/db.php");

if (!isset($_SESSION['admin_username'])) {
    header("Location: admin_login.php");
    exit();
}

$conn = createCon();

if (isset($_GET['delete_id'])) {
    deleteProductById($conn, $_GET['delete_id']);
}

$result = $conn->query("SELECT * FROM products");
closeCon($conn);
?>

<html>
<head>
    <title>Admin - Manage Products</title>
    <link rel="stylesheet" href="../css/admin_products.css">
</head>
<body>
    <a href="admin_profile.php" class="btn-profile">👤 Admin Profile</a>
    <h2 id="logo">Lost & Found</h2>
    <h2 id="heading">All Reported Products</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Category</th>
            <th>Date Lost</th>
            <th>Location</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= htmlspecialchars($row['id']) ?></td>
            <td><?= htmlspecialchars($row['name']) ?></td>
            <td><?= htmlspecialchars($row['description']) ?></td>
            <td><?= htmlspecialchars($row['category']) ?></td>
            <td><?= htmlspecialchars($row['date_lost']) ?></td>
            <td><?= htmlspecialchars($row['location']) ?></td>
            <td>
                <img src="../uploads/products/<?= htmlspecialchars($row['image']) ?>" alt="Product Image" class="product-img">
            </td>
            <td>
                <a href="?delete_id=<?= $row['id'] ?>" class="btn-delete" onclick="return confirm('Are you sure you want to delete this product?')">
                    🗑 Delete
                </a>
            </td>

        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
