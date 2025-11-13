<!-- Write a PHP program that accepts a student’s marks and prints the grade according to the following rules using if…elseif…else
90–100: A
75–89: B
60–74: C
40–59: D
Below 40: Fail -->

<?php
echo" Question 3";
$score = 95;
if ($score >= 90 && $score<=100) {
    echo "Grade: A<br>";
} elseif ($score >= 75 && $score<=89) {
    echo "Grade: B<br>";
} elseif ($score >= 60 && $score<=74) {
    echo "Grade: C<br>";
} else {
    echo "Grade: F<br>";
}
?>


