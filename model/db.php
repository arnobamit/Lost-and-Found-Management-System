<?php
function createCon() {
    return mysqli_connect("localhost", "root", "12345", "lost&found");
}

function insertData($conn, $fname, $lname, $username, $email, $password, $website, $file, $gender) {
    $sql = "INSERT INTO admin (firstname, lastname, username, email, password, website, file, gender)
            VALUES ('$fname', '$lname', '$username', '$email', '$password', '$website', '$file', '$gender')";
    
    return mysqli_query($conn, $sql);
}

function checkLogin($conn, $username, $password) {
    $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    
    return mysqli_num_rows($result) === 1;
}

function fetchAdmin($conn, $username) {
    $sql = "SELECT * FROM admin WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($result);
}

function deleteProductById($conn, $productId) {
    $productId = intval($productId);
    $sql = "DELETE FROM products WHERE id = $productId";
    return mysqli_query($conn, $sql);
}

function closeCon($conn) {
    return mysqli_close($conn);
}
?>