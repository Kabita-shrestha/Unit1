<?php
function calculateAverage(...$marks) {
    $average = array_sum($marks) / count($marks);
    return round($average, 2);
}

echo "Average: " . calculateAverage(80, 90, 70) . "\n";
echo "Average: " . calculateAverage(75, 85, 95, 65) . "\n";
echo "Average: " . calculateAverage(100, 90) . "\n";
?>
