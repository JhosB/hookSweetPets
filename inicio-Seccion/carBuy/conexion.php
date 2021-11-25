
<?php
$DB_HOST = "127.0.0.1";
$DB_USER = "u991668360_SweetPets";
$DB_PASSWORD = "SweetPets2021";
$DB_DATABASE = "u991668360_SweetPets";
$DB_PORT = '3306';



$conn = new mysqli ($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_DATABASE, $DB_PORT);

/* if (!$conn) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos " . $DB_DATABASE . "es genial." . PHP_EOL;
echo "Información del host: " . mysqli_get_host_info($conn) . PHP_EOL . "<br>"; */

?>