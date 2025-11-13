<?php
$tags = ["PHP", "Web Development", "Programming", "MySQL", "Backend"];

echo "Tags as array: ";
print_r($tags);

// Convert to string
$tagString = implode(", ", $tags);
echo "Tags as string: $tagString\n";

// Check if tags exist
echo '"PHP" tag ' . (in_array("PHP", $tags) ? "exists\n" : "not found\n");
echo '"JavaScript" tag ' . (in_array("JavaScript", $tags) ? "exists\n" : "not found\n");

// Sort tags alphabetically
sort($tags);
echo "Sorted tags: " . implode(", ", $tags) . "\n";
echo "Total tags: " . count($tags) . "\n";
?>
