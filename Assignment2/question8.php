<!-- Write a program that calculates factorial of a number using do-while loop. -->

<?php
$number = 5; 
$factorial = 1;
$i = 1;

do {
    $factorial *= $i;
    $i++;
} while ($i <= $number);

echo "Factorial of $number is: $factorial";
?>
