<?php
$num1 = 20;
$num2 = 5;


$sum = $num1 + $num2;
echo "Sum of $num1 and $num2 is: $sum<br>";


$difference = $num1 - $num2;
echo "Difference of $num1 and $num2 is: $difference<br>";


$product = $num1 * $num2;
echo "Product of $num1 and $num2 is: $product<br>";


if ($num2 != 0) {
    $division = $num1 / $num2;
    echo "Division of $num1 by $num2 is: $division<br>";
} else {
    echo "Division by zero is not allowed.<br>";
}


if ($num2 != 0) {
    $modulus = $num1 % $num2;
    echo "Modulus of $num1 by $num2 is: $modulus<br>";
} else {
    echo "Modulus by zero is not allowed.<br>";
}
?>
