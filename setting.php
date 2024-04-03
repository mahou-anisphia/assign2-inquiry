
<?php

// Database configuration
$db_host = 'mahou-db.csu9y7b3a0hk.us-east-1.rds.amazonaws.com'; // Your database host
$db_username = 'admin'; // Your database username
$db_password = 'magicology'; // Your database password
$db_name = 'asm2_db'; // Your database name

// Function to establish database connection
function connectToDB() {
    global $db_host, $db_username, $db_password, $db_name;
    $conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

    // Check the connection
    if (mysqli_connect_errno()) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $conn;
}
?>
