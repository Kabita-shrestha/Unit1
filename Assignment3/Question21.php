<?php
function createProfile($name, $role = "student", $status = "active") {
    echo "Name: $name\n";
    echo "Role: $role\n";
    echo "Status: $status\n\n";
}

// Only name
createProfile("Ram");

// Name and role
createProfile("Sita", "admin");

// All three
createProfile("Hari", "teacher", "inactive");
?>
