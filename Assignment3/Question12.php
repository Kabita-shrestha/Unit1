<?php
echo "<b>OTP Generator</b><br><br>";

// Generate 4 random 6-digit OTPs
for ($i = 1; $i <= 4; $i++) {
    $otp = rand(100000, 999999);
    echo "OTP $i: $otp<br>";
}
?>
