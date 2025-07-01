<?php

$host = getenv('DB_HOST') ?: 'reconxi-ghcr-qtz2v7';
$db   = getenv('DB_DATABASE') ?: 'ghcr';
$user = getenv('DB_USERNAME') ?: 'ghcr';
$pass = getenv('DB_PASSWORD') ?: 'ghcr';

echo "Everything done on GHCR! 👋<br>";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    echo "Database connection: ✅ Connected";
} catch (PDOException $e) {
    echo "Database connection: ❌ Failed<br>";
    echo "Error: " . $e->getMessage();
}

?>