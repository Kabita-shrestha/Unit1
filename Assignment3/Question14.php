<?php
date_default_timezone_set('Asia/Kathmandu'); // Set timezone

$birthdate = "2000-05-15";

// Convert strings to DateTime objects
$birthDateObj = new DateTime($birthdate);
$currentDateObj = new DateTime();

// Calculate the difference
$age = $birthDateObj->diff($currentDateObj)->y;

// Display results
echo "Birthdate: " . $birthDateObj->format("F d, Y") . "<br>";
echo "Current Date: " . $currentDateObj->format("F d, Y") . "<br>";
echo "Age: " . $age . " years old<br>";
?>
