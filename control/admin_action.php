<?php
$fnameError = $lnameError = $unameError = $emailError = $passwordError = $websiteError = $fileError = $genderError = "";
$firstname = $lastname = $username = $email = $password = $website = $file = $gender = "";
$errors = [];
$successMessage = "";

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["firstname"])) {
        $fnameError = "First name is required";
        $errors[] = $fnameError;
    } else {
        $firstname = test_input($_POST["firstname"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $firstname)) {
            $fnameError = "Only letters and white space allowed";
            $errors[] = $fnameError;
        }
    }

    if (empty($_POST["lastname"])) {
        $lnameError = "Last name is required";
        $errors[] = $lnameError;
    } else {
        $lastname = test_input($_POST["lastname"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $lastname)) {
            $lnameError = "Only letters and white space allowed";
            $errors[] = $lnameError;
        }
    }

    if (empty($_POST["username"])) {
        $unameError = "Username is required";
        $errors[] = $unameError;
    } else {
        $username = test_input($_POST["username"]);
    }

    if (empty($_POST["email"])) {
        $emailError = "Email is required";
        $errors[] = $emailError;
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = "Invalid email format";
            $errors[] = $emailError;
        }
    }

    if (empty($_POST["password"])) {
        $passwordError = "Password is required";
        $errors[] = $passwordError;
    } else {
        $password = test_input($_POST["password"]);
    }

    if (!empty($_POST["website"])) {
        $website = test_input($_POST["website"]);
        if (!filter_var($website, FILTER_VALIDATE_URL)) {
            $websiteError = "Invalid URL";
            $errors[] = $websiteError;
        }
    }

    if ($_FILES["myfile"]["name"] == "") {
        $fileError = "File is required";
        $errors[] = $fileError;
    } else {
        if (move_uploaded_file($_FILES["myfile"]["tmp_name"], "../uploads/" . $_FILES["myfile"]["name"])) {
            $file = "File uploaded";
        } else {
            $fileError = "File upload failed";
            $errors[] = $fileError;
        }
    }

    if (empty($_POST["gender"])) {
        $genderError = "Gender is required";
        $errors[] = $genderError;
    } else {
        $gender = test_input($_POST["gender"]);
    }

    if (empty($errors)) {
    require_once("../model/db.php");

    $conn = createCon();
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $uploadedFileName = $_FILES["myfile"]["name"];

    $insertSuccess = insertData($conn, $firstname, $lastname, $username, $email, $password, $website, $uploadedFileName, $gender);

    if ($insertSuccess) {
        $successMessage = "
        <div style='width: 35%; margin: 20px auto; padding: 20px; background:rgb(33, 39, 30); border: 1px solid #3c763d; color: #3c763d; border-radius: 5px;'>
            <h2>Admin Registration Successful!</h2>
            <p><strong>First Name:</strong> $firstname</p>
            <p><strong>Last Name:</strong> $lastname</p>
            <p><strong>Username:</strong> $username</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Website:</strong> $website</p>
            <p><strong>File:</strong> $uploadedFileName</p>
            <p><strong>Gender:</strong> $gender</p>
        </div><br>";
    } else {
        $successMessage = "<p style='color:red;'>Database insert failed: " . mysqli_error($conn) . "</p>";
    }

    closeCon($conn);
}

}
?>