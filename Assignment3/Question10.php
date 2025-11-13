<?php
$num1 = 15.567;
$num2 = 7.234;

// Round both numbers to 2 decimal places for display
$n1 = round($num1, 2);
$n2 = round($num2, 2);

// Perform operations
$add = $num1 + $num2;
$sub = $num1 - $num2;
$mul = $num1 * $num2;
$div = $num1 / $num2;

// Display results rounded to 2 decimals and absolute value
echo "Addition: " . number_format($n1, 2) . " + " . number_format($n2, 2) . " = " . number_format(abs($add), 2) . "<br><br>";
echo "Subtraction: " . number_format($n1, 2) . " - " . number_format($n2, 2) . " = " . number_format(abs($sub), 2) . "<br><br>";
echo "Multiplication: " . number_format($n1, 2) . " × " . number_format($n2, 2) . " = " . number_format(abs($mul), 2) . "<br><br>";
echo "Division: " . number_format($n1, 2) . " ÷ " . number_format($n2, 2) . " = " . number_format(abs($div), 2) . "<br>";
?>
