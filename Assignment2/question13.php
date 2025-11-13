<!-- Write a PHP program that reads 10 numbers and stops input when a negative number is entered. -->

<?php
$count = 0;

do {
    $number = (int)readline("Enter a number: ");
    if ($number < 0) {
        echo "Negative number entered. Stopping input.";
        break;
    }
    $count++;
} while ($count < 10);
?>
