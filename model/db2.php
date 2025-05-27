<?php
function createCon() {
    return mysqli_connect("localhost", "root", "", "lost&found");
}

function insertUser($conn, $fullname, $email, $phone, $username, $password, $file, $user_type, $date, $address) {
    // Always hash passwords before storing
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (fullname, email, phone, username, password, file, user_type, reg_date, address)
            VALUES ('$fullname', '$email', '$phone', '$username', '$hashedPassword', '$file', '$user_type', '$date', '$address')";

    return mysqli_query($conn, $sql);
}

function checkUserLogin($conn, $username, $password) {
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    
    if ($row = mysqli_fetch_assoc($result)) {
        return password_verify($password, $row['password']);
    }

    return false;
}

function fetchUser($conn, $username) {
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($result);
}

function closeCon($conn) {
    return mysqli_close($conn);
}
?>
