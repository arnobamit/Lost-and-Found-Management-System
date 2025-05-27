<?php
$fullnameErr = $emailErr = $phoneErr = $usernameErr = $passwordErr = $cpasswordErr = $fileError = $user_typeErr = $dateErr = $addressErr = "";
$fullname = $email = $phone = $username = $password = $cpassword = $file = $user_type = $date = $address = "";
$errors = [];
$successMessage = "";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["fullname"])) {
        $fullnameErr = "Full name is required";
        $errors[] = $fullnameErr;
    } else {
        $fullname = test_input($_POST["fullname"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $fullname)) {
            $fullnameErr = "Only letters and white space allowed";
            $errors[] = $fullnameErr;
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
        $errors[] = $emailErr;
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            $errors[] = $emailErr;
        }
    }

    if (empty($_POST["phone"])) {
        $phoneErr = "Phone number is required";
        $errors[] = $phoneErr;
    } else {
        $phone = test_input($_POST["phone"]);
        if (!preg_match("/^[0-9]{10,15}$/", $phone)) {
            $phoneErr = "Invalid phone number format";
            $errors[] = $phoneErr;
        }
    }

    if (empty($_POST["username"])) {
        $usernameErr = "Username is required";
        $errors[] = $usernameErr;
    } else {
        $username = test_input($_POST["username"]);
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
        $errors[] = $passwordErr;
    } else {
        $password = test_input($_POST["password"]);
    }

    if (empty($_POST["cpassword"])) {
        $cpasswordErr = "Confirm Password is required";
        $errors[] = $cpasswordErr;
    } else {
        $cpassword = test_input($_POST["cpassword"]);
        if ($password !== $cpassword) {
            $cpasswordErr = "Passwords do not match";
            $errors[] = $cpasswordErr;
        }
    }


    if (isset($_FILES['file'])) {
    move_uploaded_file($_FILES['file']['tmp_name'], '../uploads/' . $_FILES['file']['name']);
    $file = "File uploaded!";
    }


    if (empty($_POST["user_type"])) {
        $user_typeErr = "User type is required";
        $errors[] = $user_typeErr;
    } else {
        $user_type = test_input($_POST["user_type"]);
    }

    if (empty($_POST["date"])) {
        $dateErr = "Date is required";
        $errors[] = $dateErr;
    } else {
        $date = test_input($_POST["date"]);
    }

    if (empty($_POST["address"])) {
        $addressErr = "Address is required";
        $errors[] = $addressErr;
    } else {
        $address = test_input($_POST["address"]);
    }

    if (empty($errors)) {
        // Include DB logic here
        require_once("../model/db2.php");
        $conn = createCon();

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $insertSuccess = insertUser(
            $conn, $fullname, $email, $phone, $username,
            $password, $file, $user_type, $date, $address
        );

        if ($insertSuccess) {
            $successMessage = "
            <div style='width: 35%; margin: 20px auto; padding: 20px; background: #dff0d8; border: 1px solid #3c763d; color: #3c763d; border-radius: 5px;'>
                <h2>Registration Successful!</h2>
                <p><strong>Name:</strong> $fullname</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Phone:</strong> $phone</p>
                <p><strong>Username:</strong> $username</p>
                <p><strong>User Type:</strong> $user_type</p>
                <p><strong>Registration Date:</strong> $date</p>
                <p><strong>Address:</strong> $address</p>
                <p><strong>Uploaded File:</strong> $file</p>
            </div>";
        } else {
            $successMessage = "<p style='color:red;'>Database insert failed: " . mysqli_error($conn) . "</p>";
        }

        closeCon($conn);
    }
}
?>
