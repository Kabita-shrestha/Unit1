<?php
$students = ["Ram", "Sita", "Hari"];
echo "Initial students: " . implode(", ", $students) . "\n";

// Add students
array_push($students, "Gita", "Laxman");
echo "After adding: " . implode(", ", $students) . "\n";

// Remove last student
array_pop($students);
echo "After removing last: " . implode(", ", $students) . "\n";

// Total students
echo "Total students: " . count($students) . "\n";

// Check if "Ram" exists
if (in_array("Ram", $students)) {
    echo "Ram is in the list\n";
} else {
    echo "Ram is not in the list\n";
}
?>
