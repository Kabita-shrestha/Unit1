<?php
// Initialize variables
$size = $_POST['size'] ?? '';
$toppings = $_POST['toppings'] ?? [];
$crust = $_POST['crust'] ?? '';
$errors = [];

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Validation
    if (empty($size)) {
        $errors[] = "Please select a pizza size.";
    }

    if (empty($toppings)) {
        $errors[] = "Please select at least one topping.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pizza Order Form</title>
    <style>
        body { font-family: Arial; margin: 20px; }
        .error { color: red; margin-bottom: 10px; }
        .success { background: #e7ffe7; padding: 15px; border-radius: 5px; }
    </style>
</head>
<body>

<h2>Pizza Order Form</h2>

<!-- Display validation errors -->
<?php if (!empty($errors)): ?>
    <div class="error">
        <strong>Error:</strong><br>
        <?php foreach($errors as $err) echo "- $err <br>"; ?>
    </div>
<?php endif; ?>

<form method="POST" action="">
    
    <!-- Size -->
    <label><strong>Size:</strong></label><br>
    <input type="radio" name="size" value="Small"   <?= ($size == "Small") ? "checked" : "" ?>> Small<br>
    <input type="radio" name="size" value="Medium"  <?= ($size == "Medium") ? "checked" : "" ?>> Medium<br>
    <input type="radio" name="size" value="Large"   <?= ($size == "Large") ? "checked" : "" ?>> Large<br>
    <br>

    <!-- Toppings -->
    <label><strong>Toppings:</strong></label><br>
    <?php
        $allToppings = ["Cheese", "Mushroom", "Onion", "Olive"];
        foreach ($allToppings as $t) {
            $checked = in_array($t, $toppings) ? "checked" : "";
            echo "<input type='checkbox' name='toppings[]' value='$t' $checked> $t<br>";
        }
    ?>
    <br>

    <!-- Crust -->
    <label><strong>Crust Type:</strong></label><br>
    <select name="crust">
        <option value="">--Select--</option>
        <option value="Thin"    <?= ($crust == "Thin") ? "selected" : "" ?>>Thin</option>
        <option value="Regular" <?= ($crust == "Regular") ? "selected" : "" ?>>Regular</option>
        <option value="Thick"   <?= ($crust == "Thick") ? "selected" : "" ?>>Thick</option>
    </select>

    <br><br>
    <button type="submit">Order Pizza</button>
</form>

<!-- Show order summary if valid -->
<?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($errors)): ?>
    <div class="success">
        <h3>Your Pizza Order:</h3>
        <p><strong>Size:</strong> <?= $size ?></p>
        <p><strong>Toppings:</strong> <?= implode(", ", $toppings) ?></p>
        <p><strong>Crust:</strong> <?= $crust ?></p>
    </div>
<?php endif; ?>

</body>
</html>
