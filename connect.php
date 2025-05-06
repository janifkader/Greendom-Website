<?php
// Load database credentials from Render environment variables
$host = getenv('DB_HOST');         // e.g., dpg-abc123xyz.oregon-postgres.render.com
$port = getenv('DB_PORT');         // Usually 5432
$dbname = getenv('DB_NAME');       // Your Render DB name
$user = getenv('DB_USER');         // Your DB user
$password = getenv('DB_PASSWORD'); // Your DB password

$dsn = "pgsql:host=$host;port=$port;dbname=$dbname";

try {
    // Create a new PDO instance
    $pdo = new PDO($dsn, $user, $password);

    // Enable error mode
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Success message (optional)
    // echo "Connected successfully!";
} catch (PDOException $e) {
    // Handle errors
    echo "Connection failed: " . $e->getMessage();
    exit;
}
?>