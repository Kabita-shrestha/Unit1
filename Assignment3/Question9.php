<?php
$comment = "This is a damn good product but the service is hell";
$badWords = ["damn", "hell"];

echo "Original: $comment<br><br>";

$censored = $comment;
$censoredCount = 0;

// Loop through each bad word
foreach ($badWords as $badWord) {
    // Count how many times the bad word appears (case-insensitive)
    $count = substr_count(strtolower($censored), strtolower($badWord));
    
    // Replace all instances with asterisks
    $censored = str_ireplace($badWord, "****", $censored);
    
    $censoredCount += $count;
}

echo "Censored: $censored<br><br>";
echo "Words censored: $censoredCount<br>";
?>
