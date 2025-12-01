<?php
// Check if form submitted
$isSubmitted = ($_SERVER['REQUEST_METHOD'] === 'POST');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form</title>
    <style>
        body { font-family: Arial; margin: 30px; }
        label { display: block; margin-top: 10px; }
        input, select, textarea { width: 300px; padding: 5px; }
        textarea { height: 80px; }
        .result { background: #f2f2f2; padding: 15px; margin-top: 20px; border-radius: 5px; }
    </style>
</head>
<body>

<h2>Feedback Form</h2>

<!-- Form -->
<form method="POST" action="">
    <label>Name:</label>
    <input type="text" name="name" required>

    <label>Rating (1–5):</label>
    <select name="rating" required>
        <option value="">Select rating</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
    </select>

    <label>Comment:</label>
    <textarea name="comment"></textarea>

    <br><br>
    <button type="submit">Submit Feedback</button>
</form>

<!-- Show Submitted Data -->
<?php if ($isSubmitted): ?>
    <div class="result">
        <h3>Your Submitted Feedback:</h3>
        <p><strong>Name:</strong> <?= htmlspecialchars($_POST['name']); ?></p>
        <p><strong>Rating:</strong> <?= htmlspecialchars($_POST['rating']); ?></p>
        <p><strong>Comment:</strong> <?= nl2br(htmlspecialchars($_POST['comment'])); ?></p>
    </div>
<?php endif; ?>

</body>
</html>
