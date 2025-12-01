<?php
// Initialize variables
$fullname = $username = $email = $age = "";
$errors = [];
$passwordStrength = "";

// Check submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // SANITIZATION
    $fullname = htmlspecialchars(trim($_POST['fullname'] ?? ''));
    $username = htmlspecialchars(trim($_POST['username'] ?? ''));
    $email    = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $age      = trim($_POST['age'] ?? '');
    $password = $_POST['password'] ?? "";
    $confirm  = $_POST['confirm_password'] ?? "";

    // VALIDATION

    // Full Name
    if (empty($fullname)) {
        $errors['fullname'] = "Full Name is required.";
    } elseif (strlen($fullname) < 3) {
        $errors['fullname'] = "Full Name must be at least 3 characters.";
    } elseif (!preg_match("/^[a-zA-Z ]+$/", $fullname)) {
        $errors['fullname'] = "Full Name can contain only letters and spaces.";
    }

    // Username
    if (empty($username)) {
        $errors['username'] = "Username is required.";
    } elseif (!preg_match("/^[a-zA-Z0-9_]{5,15}$/", $username)) {
        $errors['username'] = "Username must be 5-15 characters (letters, numbers, underscore).";
    }

    // Email
    if (empty($email)) {
        $errors['email'] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) || strpos($email, ' ') !== false) {
        $errors['email'] = "Invalid email format or contains spaces.";
    }

    // Password
    if (empty($password)) {
        $errors['password'] = "Password is required.";
    } elseif (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/", $password)) {
        $errors['password'] = 
            "Password must be at least 8 characters with uppercase, lowercase, and a number.";
    }

    // Password Strength Indicator
    if (!empty($password)) {
        if (strlen($password) >= 8 && preg_match("/[A-Z]/", $password) 
            && preg_match("/[a-z]/", $password) && preg_match("/\d/", $password)) {
            $passwordStrength = "Strong";
        } elseif (strlen($password) >= 6) {
            $passwordStrength = "Medium";
        } else {
            $passwordStrength = "Weak";
        }
    }

    // Confirm Password
    if ($password !== $confirm) {
        $errors['confirm'] = "Passwords do not match.";
    }

    // Age
    if (empty($age)) {
        $errors['age'] = "Age is required.";
    } elseif (!is_numeric($age)) {
        $errors['age'] = "Age must be a number.";
    } elseif ($age < 18 || $age > 100) {
        $errors['age'] = "Age must be between 18 and 100.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Secure Registration Form</title>
    <style>
        body { font-family: Arial; margin: 30px; }
        .error { color: red; font-size: 14px; }
        .success-box {
            background: #e7ffe7; padding: 15px; border-radius: 5px;
            margin-top: 20px; 
        }
        input { width: 250px; padding: 7px; margin-bottom: 5px; }
    </style>
</head>
<body>

<h2>Registration Form</h2>

<form method="POST" action="">
    
    <!-- Full Name -->
    <label>Full Name:</label><br>
    <input type="text" name="fullname" value="<?= $fullname ?>">
    <div class="error"><?= $errors['fullname'] ?? '' ?></div><br>

    <!-- Username -->
    <label>Username:</label><br>
    <input type="text" name="username" value="<?= $username ?>">
    <div class="error"><?= $errors['username'] ?? '' ?></div><br>

    <!-- Email -->
    <label>Email:</label><br>
    <input type="email" name="email" value="<?= $email ?>">
    <div class="error"><?= $errors['email'] ?? '' ?></div><br>

    <!-- Password -->
    <label>Password:</label><br>
    <input type="password" name="password">
    <div class="error"><?= $errors['password'] ?? '' ?></div>
    <p>Password Strength: <strong><?= $passwordStrength ?></strong></p><br>

    <!-- Confirm Password -->
    <label>Confirm Password:</label><br>
    <input type="password" name="confirm_password">
    <div class="error"><?= $errors['confirm'] ?? '' ?></div><br>

    <!-- Age -->
    <label>Age:</label><br>
    <input type="number" name="age" value="<?= $age ?>">
    <div class="error"><?= $errors['age'] ?? '' ?></div><br>

    <button type="submit">Register</button>
</form>

<!-- Success Output -->
<?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($errors)): ?>
    <div class="success-box">
        <h2>Registration Successful</h2>
        <p><strong>Full Name:</strong> <?= $fullname ?></p>
        <p><strong>Username:</strong> <?= $username ?></p>
        <p><strong>Email:</strong> <?= $email ?></p>
        <p><strong>Age:</strong> <?= $age ?></p>
        <p><strong>Password Strength:</strong> <?= $passwordStrength ?></p>
    </div>
<?php endif; ?>

</body>
</html>
