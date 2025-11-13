<!-- . Create an array: `$cities = ['Kathmandu', 'Pokhara', 'Lalitpur', 'Bhaktapur', 'Biratnagar']`

Perform the following operations:

Display the first city
Display the last city (use count())
Display the total number of cities
Display the city at index 2 -->


<?php
$cities = ['Kathmandu', 'Pokhara', 'Lalitpur', 'Bhaktapur', 'Biratnagar'];
echo "First city: " . $cities[0] . "<br>";
echo "Last city: " . $cities[count($cities) - 1] . "<br>";
echo "Total number of cities: " . count($cities) . "<br>";
echo "City at index 2: " . $cities[2] . "<br>";
?>


