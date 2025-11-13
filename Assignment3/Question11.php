<?php
$items = [
    ["name" => "Laptop", "price" => 75000],
    ["name" => "Mouse", "price" => 500],
    ["name" => "Keyboard", "price" => 1200]
];

echo "<b>SHOPPING BILL</b><br><br>";

$subtotal = 0;

// Display each item and accumulate subtotal
foreach ($items as $item) {
    $price = $item["price"];
    $subtotal += $price;

    echo $item["name"] . ": Rs. " . number_format(round($price, 2), 2) . "<br>";
}

echo "----------------------------------<br>";

// Calculate VAT (13%)
$vat = $subtotal * 0.13;
$total = $subtotal + $vat;

// Display totals with formatting
echo "Subtotal:  Rs. " . number_format(round($subtotal, 2), 2) . "<br>";
echo "VAT (13%): Rs. " . number_format(round($vat, 2), 2) . "<br>";
echo "---------------------------------<br>";
echo "<b>TOTAL:     Rs. " . number_format(round($total, 2), 2) . "</b><br>";
echo "=========================<br>";
?>
