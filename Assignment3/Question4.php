<?php
// Associative array with subjects and marks
$marks = [
    "Internet Technology" => 85,
    "Data Structure" => 78,
    "Database" => 92,
    "Java Programming" => 88
];

// Display mark sheet header
echo "MARK SHEET\n\n";

// Display each subject with marks
foreach ($marks as $subject => $mark) {
    echo "$subject: $mark\n";
}

// Calculate total, average, and percentage
$total = array_sum($marks);
$count = count($marks);
$average = $total / $count;
$percentage = $average; // since each subject is out of 100

// Determine grade based on percentage
if ($percentage >= 80) {
    $grade = "A";
} elseif ($percentage >= 60) {
    $grade = "B";
} elseif ($percentage >= 40) {
    $grade = "C";
} else {
    $grade = "F";
}

// Display summary
echo "----------------------\n";
echo "Total Marks: $total\n";
echo "Average: " . number_format($average, 2) . "\n";
echo "Percentage: " . number_format($percentage, 2) . "%\n";
echo "Grade: $grade\n";
?>
