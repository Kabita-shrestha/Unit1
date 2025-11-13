<!-- Write a PHP program that prints numbers from 1-20 but skips even numbers. -->

<?php
for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        continue; 
    }
    echo $i . " ";
}
?>
