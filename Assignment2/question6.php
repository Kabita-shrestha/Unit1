<!-- Write a PHP program using while loop to find the sum of first 10 natural numbers. -->
 <?php


$number = 1;  
$sum = 0;     

while ($number <= 10) {
    $sum = $sum + $number; 
    $number++;            
}

echo "The sum of the first 10 natural numbers is: $sum";
?>
