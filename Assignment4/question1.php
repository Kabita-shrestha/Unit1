<?php
// Determine which page to load
$page = $_GET['page'] ?? 'home'; // default = home
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dynamic Menu Page</title>
    <style>
        body { font-family: Arial; }
        nav a {
            margin: 10px;
            text-decoration: none;
            padding: 5px 10px;
            background: #eee;
            border-radius: 5px;
        }
        nav a:hover {
            background: #ccc;
        }
    </style>
</head>
<body>

    <!-- Menu -->
    <nav>
        <a href="?page=home">Home</a>
        <a href="?page=about">About</a>
        <a href="?page=contact">Contact</a>
    </nav>

    <hr>

    <!-- Dynamic Content -->
    <div>
        <?php
            switch($page) {
                case "home":
                    echo "<h2>Welcome to Home Page</h2><p>This is the home page content.</p>";
                    break;

                case "about":
                    echo "<h2>About Us</h2><p>This is some information about the site.</p>";
                    break;

                case "contact":
                    echo "<h2>Contact Us</h2><p>Email us at contact@example.com.</p>";
                    break;

                default:
                    echo "<h2>404 - Page Not Found</h2>";
            }
        ?>
    </div>

</body>
</html>
