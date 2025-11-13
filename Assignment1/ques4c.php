 <?php

$number = 42;


if ($number >= 1 && $number <= 100) {
    echo "$number is between 1 and 100.";
    
    
    if ($number % 2 == 0) {
        echo "$number is even.<br>";
    } else {
        echo "$number is odd.<br>";
    }
} else {
    echo "$number is NOT between 1 and 100.<br>";
}


if (!($number < 1 || $number > 100)) {
    echo "$number passed the range check using ! and || operators.<br>";
}
?>
