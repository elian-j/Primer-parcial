<?php
$host = 'sql209.infinityfree.com'; // o el host del servidor
$dbname = 'if0_37758868_prueba'; // nombre de la base de datos
$username = 'if0_37758868'; // usuario de la base de datos
$password = 'FgvG9mZPkg0jjl0'; // contraseña de la base de datos

try {
    // Establecer la conexión utilizando PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Manejo de errores
} catch (PDOException $e) {
    // Si hay error en la conexión, mostrar el mensaje
    echo "Error de conexión: " . $e->getMessage();
}
?>
