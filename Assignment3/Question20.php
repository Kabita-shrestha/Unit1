<?php
function celsiusToFahrenheit($celsius) {
    return ($celsius * 9/5) + 32;
}

echo "0°C = " . celsiusToFahrenheit(0) . "°F\n";
echo "25°C = " . celsiusToFahrenheit(25) . "°F\n";
echo "100°C = " . celsiusToFahrenheit(100) . "°F\n";
?>
