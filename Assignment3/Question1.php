<!-- Create an indexed array containing your 5 favorite foods.

Display all foods using a foreach loop
Display them in a numbered list format (1., 2., 3., etc.) -->


<?php
$favFoods = ["Pizza", "Sushi", "Burger", "Pasta", "Momo"];

echo "My Favorite Foods:<br>";

$index = 1 ;
foreach ($favFoods as $food) {
    echo $index . ". " . $food . "<br>";
    $index++;
}
?>
