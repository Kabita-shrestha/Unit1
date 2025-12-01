<?php
// Initialize variables
$name = "";
$errors = [];
$uploadedFilePath = "";
$fileInfo = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Sanitize input
    $name = htmlspecialchars(trim($_POST['username'] ?? ''));

    // --- VALIDATION ---

    // Name validation
    if (empty($name)) {
        $errors[] = "User name is required.";
    } elseif (strlen($name) < 3) {
        $errors[] = "Name must be at least 3 characters long.";
    }

    // File validation
    if (!isset($_FILES['profile']) || $_FILES['profile']['error'] != 0) {
        $errors[] = "Please upload a valid image file.";
    } else {
        $file = $_FILES['profile'];

        // Acceptable extensions
        $allowedTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif'];
        
        // Check type
        if (!in_array($file['type'], $allowedTypes)) {
            $errors[] = "Only JPG, JPEG, PNG, or GIF files are allowed.";
        }

        // Check size (max 2MB)
        if ($file['size'] > 2 * 1024 * 1024) {
            $errors[] = "File size must not exceed 2MB.";
        }
    }

    // --- PROCESSING ---
    if (empty($errors)) {

        // Create uploads folder if not exists
        if (!is_dir("uploads")) {
            mkdir("uploads", 0777, true);
        }

        // Save file with original name
        $targetPath = "uploads/" . basename($file['name']);

        if (move_uploaded_file($file['tmp_name'], $targetPath)) {
            $uploadedFilePath = $targetPath;

            // Store file info for display
            $fileInfo = [
                "name" => $file['name'],
                "size" => round($file['size'] / (1024 * 1024), 2) . " MB",
                "type" => $file['type'],
                "path" => $targetPath
            ];
        } else {
            $errors[] = "Failed to save uploaded file.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile Picture Upload</title>
    <style>
        body { font-family: Arial; margin: 30px; }
        .error { color: red; }
        .success-box { background: #e8ffe8; padding: 15px; border-radius: 5px; }
    </style>
</head>
<body>

<h2>Upload Profile Picture</h2>

<!-- Error Display -->
<?php if (!empty($errors)): ?>
    <div class="error">
        <?php foreach ($errors as $e) echo "- $e <br>"; ?>
    </div>
<?php endif; ?>

<!-- Upload Form -->
<form method="POST" action="" enctype="multipart/form-data">

    <label>User Name:</label><br>
    <input type="text" name="username" value="<?= $name ?>"><br><br>

    <label>Profile Picture:</label><br>
    <input type="file" name="profile" accept="image/*"><br><br>

    <button type="submit">Upload</button>
</form>

<!-- Success Output -->
<?php if ($uploadedFilePath && empty($errors)): ?>
    <div class="success-box">
        <h3>Profile Picture Uploaded Successfully!</h3>

        <p><strong>User Name:</strong> <?= $name ?></p>

        <h4>File Information:</h4>
        <p><strong>File Name:</strong> <?= $fileInfo['name'] ?></p>
        <p><strong>File Size:</strong> <?= $fileInfo['size'] ?></p>
        <p><strong>File Type:</strong> <?= $fileInfo['type'] ?></p>
        <p><strong>Saved Location:</strong> <?= $fileInfo['path'] ?></p>

        <img src="<?= $uploadedFilePath ?>" width="200px" style="margin-top: 10px;">
    </div>
<?php endif; ?>

</body>
</html>
