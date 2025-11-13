<!-- Write a program to validate an email address:

 Check if it contains "@" symbol
 Extract the part before @ (username)
 Extract the part after @ (domain)
 Convert email to lowercase for storage
   Test with: `$email = "RAM.Sharma@EXAMPLE.com";  -->

   <?php
$email = "RAM.Sharma@EXAMPLE.com";

echo "Original: $email<br><br>";

// Step 1: Convert to lowercase
$cleanedEmail = strtolower($email);
echo "Cleaned: $cleanedEmail<br><br>";

// Step 2: Check if it contains "@"
if (strpos($cleanedEmail, '@') !== false) {
    echo "Valid email format<br><br>";

    // Step 3: Extract username and domain
    list($username, $domain) = explode('@', $cleanedEmail, 2);

    echo "Username: $username<br>";
    echo "Domain: $domain<br>";
} else {
    echo "Invalid email format (missing @ symbol)";
}
?>
