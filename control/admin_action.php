<?php
if (isset($_REQUEST['Submit'])) {
    $errors = [];

    if (empty($_REQUEST['firstname'])) {
        $errors[] = "First Name is required.";
    } else {
        $firstname = htmlspecialchars(trim($_REQUEST['firstname']));
    }

    if (empty($_REQUEST['lastname'])) {
        $errors[] = "Last Name is required.";
    } else {
        $lastname = htmlspecialchars(trim($_REQUEST['lastname']));
    }

    if (empty($_REQUEST['username'])) {
        $errors[] = "Username is required.";
    } else {
        $username = htmlspecialchars(trim($_REQUEST['username']));
    }

    if (empty($_REQUEST['email'])) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    } else {
        $email = htmlspecialchars(trim($_REQUEST['email']));
    }

    if (empty($_REQUEST['password'])) {
        $errors[] = "Password is required.";
    } elseif (strlen($_REQUEST['password']) < 6) {
        $errors[] = "Password must be at least 6 characters.";
    } else {
        $password = $_REQUEST['password'];
    }

    if (empty($_REQUEST['adminCode'])) {
        $errors[] = "Admin Code is required.";
    } else {
        $adminCode = intval($_REQUEST['adminCode']);
    }

    if (!empty($_REQUEST['website'])) {
        if (!filter_var($_REQUEST['website'], FILTER_VALIDATE_URL)) {
            $errors[] = "Invalid website URL.";
        } else {
            $website = htmlspecialchars(trim($_REQUEST['website']));
        }
    } else {
        $website = "";
    }

    if (empty($_REQUEST['gender'])) {
        $errors[] = "Gender is required.";
    } else {
        $gender = htmlspecialchars($_REQUEST['gender']);
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
