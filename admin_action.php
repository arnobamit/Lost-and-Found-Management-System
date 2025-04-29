<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    if (empty($_POST['firstname'])) {
        $errors[] = "First Name is required.";
    }else {
        $firstname = htmlspecialchars(trim($_POST['firstname']));
    }

    if (empty($_POST['lastname'])) {
        $errors[] = "Last Name is required.";
    } else {
        $lastname = htmlspecialchars(trim($_POST['lastname']));
    }

    if (empty($_POST['username'])) {
        $errors[] = "Username is required.";
    } else {
        $username = htmlspecialchars(trim($_POST['username']));
    }

    if (empty($_POST['email'])) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    } else {
        $email = htmlspecialchars(trim($_POST['email']));
    }

    if (empty($_POST['password'])) {
        $errors[] = "Password is required.";
    } elseif (strlen($_POST['password']) < 6) {
        $errors[] = "Password must be at least 6 characters.";
    } else {
        $password = $_POST['password'];
    }

    if (empty($_POST['adminCode'])) {
        $errors[] = "Admin Code is required.";
    } else {
        $adminCode = intval($_POST['adminCode']);
    }

    if (!empty($_POST['website'])) {
        if (!filter_var($_POST['website'], FILTER_VALIDATE_URL)) {
            $errors[] = "Invalid website URL.";
        } else {
            $website = htmlspecialchars(trim($_POST['website']));
        }
    } else {
        $website = "";
    }

    if (empty($_POST['gender'])) {
        $errors[] = "Gender is required.";
    } else {
        $gender = htmlspecialchars($_POST['gender']);
    }

    if (!empty($errors)) {
        echo "<h3>There were errors in your form:</h3><ul>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul><br><a href='admin_reg.php'>Go Back</a>";
    } else {
        echo "<h2>Registration Successful!</h2>";
        echo "<p>First Name: $firstname</p>";
        echo "<p>Last Name: $lastname</p>";
        echo "<p>Username: $username</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Admin Code: $adminCode</p>";
        echo "<p>Website: $website</p>";
        echo "<p>Gender: $gender</p>";
    }
} else {
    header("Location: admin_reg.php");
    exit();
}
?>
