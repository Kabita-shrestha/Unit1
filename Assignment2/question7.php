 <!-- Write a PHP program to print even numbers between 1 and 20 using do...while.  -->
<?php
$i = 1;

do {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
    $i++;
} while ($i <= 20);
?>
