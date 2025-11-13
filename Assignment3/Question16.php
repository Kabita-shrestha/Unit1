<?php
$prices = [
    "Amazon" => 5000,
    "Flipkart" => 4500,
    "eBay" => 4800,
    "Snapdeal" => 5200
];

echo "PRICE COMPARISON\n";
foreach ($prices as $seller => $price) {
    echo "$seller: Rs. " . number_format($price) . "\n";
}

// Highest and lowest
$maxPrice = max($prices);
$minPrice = min($prices);
$maxSeller = array_search($maxPrice, $prices);
$minSeller = array_search($minPrice, $prices);

// Average
$average = array_sum($prices) / count($prices);

echo "\nStatistics:\n";
echo "Highest Price: Rs. " . number_format($maxPrice) . " ($maxSeller)\n";
echo "Lowest Price: Rs. " . number_format($minPrice) . " ($minSeller)\n";
echo "Average Price: Rs. " . number_format($average) . "\n";
echo "Savings: Rs. " . number_format($maxPrice - $minPrice) . " (if you buy from $minSeller)\n";

// Sort prices ascending
asort($prices);
echo "\nSorted by Price (Low to High):\n";
foreach ($prices as $seller => $price) {
    echo "$seller: Rs. " . number_format($price) . "\n";
}
?>
