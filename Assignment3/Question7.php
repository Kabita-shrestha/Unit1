<?php
// Given username with extra spaces
$username = "  Ram123  ";

// Trim whitespace
$username = trim($username);

// Calculate length
$length = strlen($username);

// Display username and length
echo "Username: $username\n";
echo "Length: $length characters\n";

// Validate username length
if ($length >= 5 && $length <= 15) {
    echo "Username is valid (5-15 characters)\n";
} elseif ($length < 5) {
    echo "Username is too short! Must be at least 5 characters.\n";
} else {
    echo "Username is too long! Must not exceed 15 characters.\n";
}
?>
