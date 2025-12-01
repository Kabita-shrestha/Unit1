<?php
// Capture server/client information
$client_ip    = $_SERVER['REMOTE_ADDR'];
$user_agent   = $_SERVER['HTTP_USER_AGENT'];
$server_name  = $_SERVER['SERVER_NAME'];

// Check if form submitted
$isSubmitted = ($_SERVER['REQUEST_METHOD'] === 'POST');

// Retrieve submitted data safely
if ($isSubmitted) {
    $name     = $_POST['fullname'] ?? '';
    $gender   = $_POST['gender'] ?? '';
    $hobbies  = $_POST['hobbies'] ?? [];      // array
    $country  = $_POST['country'] ?? '';
    $subjects = $_POST['subjects'] ?? [];     // array
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
    <style>
        body { font-family: Arial; margin: 25px; }
        .info-box, .result-box {
            background: #f3f3f3;
            padding: 15px;
            margin: 20px 0;
            border-radius: 5px;
        }
        label { display: block; margin-top: 10px; }
        select, input[type=text] { width: 250px; padding: 5px; }
        .multi { height: 100px; }
    </style>
</head>
<body>

<h2>Server & Client Information</h2>
<div class="info-box">
    <p><strong>Client IP:</strong> <?= $client_ip; ?></p>
    <p><strong>Browser / OS:</strong> <?= $user_agent; ?></p>
    <p><strong>Server Name:</strong> <?= $server_name; ?></p>
</div>

<h2>Student Registration Form</h2>

<form method="POST" action="">
    
    <label>Full Name:</label>
    <input type="text" name="fullname" required>

    <label>Gender:</label>
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female
    <input type="radio" name="gender" value="Other"> Other

    <label>Hobbies:</label>
    <input type="checkbox" name="hobbies[]" value="Reading"> Reading
    <input type="checkbox" name="hobbies[]" value="Sports"> Sports
    <input type="checkbox" name="hobbies[]" value="Music"> Music
    <input type="checkbox" name="hobbies[]" value="Traveling"> Traveling

    <label>Country:</label>
    <select name="country" required>
        <option value="">-- Select Country --</option>
        <option value="Nepal">Nepal</option>
        <option value="India">India</option>
        <option value="USA">USA</option>
        <option value="UK">UK</option>
    </select>

    <label>Subjects (hold CTRL to select multiple):</label>
    <select name="subjects[]" multiple class="multi">
        <option value="PHP">PHP</option>
        <option value="Java">Java</option>
        <option value="Database">Database</option>
        <option value="Networking">Networking</option>
        <option value="AI">AI</option>
    </select>

    <br><br>
    <button type="submit">Register</button>
</form>


<!-- Display Submitted Data -->
<?php if ($isSubmitted): ?>
    <div class="result-box">
        <h2>Student Registration Details</h2>

        <p><strong>Full Name:</strong> <?= htmlspecialchars($name); ?></p>
        <p><strong>Gender:</strong> <?= htmlspecialchars($gender); ?></p>

        <p><strong>Hobbies:</strong> 
            <?= htmlspecialchars(implode(", ", $hobbies)); ?>
        </p>

        <p><strong>Country:</strong> <?= htmlspecialchars($country); ?></p>

        <p><strong>Subjects:</strong> 
            <?= htmlspecialchars(implode(", ", $subjects)); ?>
        </p>
    </div>
<?php endif; ?>

</body>
</html>
