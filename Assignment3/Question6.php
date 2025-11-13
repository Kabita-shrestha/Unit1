<?php
// Product inventory array
$inventory = [
    ["id" => 101, "name" => "Laptop", "price" => 75000, "stock" => 10],
    ["id" => 102, "name" => "Mouse", "price" => 500, "stock" => 50],
    ["id" => 103, "name" => "Keyboard", "price" => 1200, "stock" => 0],
    ["id" => 104, "name" => "Monitor", "price" => 25000, "stock" => 5]
];

echo "PRODUCT INVENTORY\n\n";
echo "ID   | Name      | Price    | Stock\n";
echo "-----|-----------|----------|------\n";

$totalValue = 0;
$outOfStock = [];
$lowStock = [];

foreach ($inventory as $product) {
    // Display each product in table format
    printf("%-4d | %-9s | %-8d | %-5d\n", $product['id'], $product['name'], $product['price'], $product['stock']);
    
    // Calculate total inventory value
    $totalValue += $product['price'] * $product['stock'];
    
    // Track out of stock items
    if ($product['stock'] == 0) {
        $outOfStock[] = $product;
    }
    // Track low stock items (less than 10)
    elseif ($product['stock'] < 10) {
        $lowStock[] = $product;
    }
}

// Display out of stock products
echo "\nOUT OF STOCK:\n";
if (count($outOfStock) > 0) {
    foreach ($outOfStock as $item) {
        echo "- {$item['name']} (ID: {$item['id']})\n";
    }
} else {
    echo "None\n";
}

// Display low stock products
echo "\nLOW STOCK (Need Reorder):\n";
if (count($lowStock) > 0) {
    foreach ($lowStock as $item) {
        echo "- {$item['name']} (ID: {$item['id']}) - Only {$item['stock']} units left\n";
    }
} else {
    echo "None\n";
}

// Display total inventory value
echo "\nTotal Inventory Value: Rs. $totalValue\n";
?>
