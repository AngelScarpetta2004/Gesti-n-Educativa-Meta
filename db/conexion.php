<?php
$host = getenv('DB_HOST');
$port = getenv('DB_PORT');
$dbname = getenv('DB_NAME');
$user = getenv('DB_USER');
$password = getenv('DB_PASSWORD');
$sslmode = getenv('DB_SSLMODE');
$cluster = getenv('DB_CLUSTER');

try {
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;sslmode=$sslmode;options='--cluster=$cluster'", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa 🎉";
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>
