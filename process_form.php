<?php
class Database {
    private $hostname = "bjhfxtfgkaasuvpywrt2-mysql.services.clever-cloud.com";
    private $database = "bjhfxtfgkaasuvpywrt2";
    private $username = "uj84v4crqnyrgoxv";
    private $password = "3V35PQ9LNyC0uggqXUGJ";
    private $charset = "utf8";

    public function conectar() {
        try {
            $conexion = "mysql:host=" . $this->hostname . ";dbname=" . $this->database . ";charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            ];
            $pdo = new PDO($conexion, $this->username, $this->password, $options);
            return $pdo;
        } catch (PDOException $e) {
            echo 'Error de conexión: ' . $e->getMessage();
            exit;
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db = new Database();
    $conn = $db->conectar();

    // Recoger y sanitizar los datos del formulario
    $nombre_completo = filter_input(INPUT_POST, 'nombre_completo', FILTER_SANITIZE_STRING);
    $gmail = filter_input(INPUT_POST, 'gmail', FILTER_SANITIZE_EMAIL);
    $tema = filter_input(INPUT_POST, 'tema', FILTER_SANITIZE_STRING);
    $mensaje = filter_input(INPUT_POST, 'mensaje', FILTER_SANITIZE_STRING);
    
    // Insertar datos en la base de datos
    $sql = "INSERT INTO datos (nombre_completo, gmail, tema, mensaje) VALUES (:nombre_completo, :gmail, :tema, :mensaje)";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':nombre_completo', $nombre_completo);
    $stmt->bindParam(':gmail', $gmail);
    $stmt->bindParam(':tema', $tema);
    $stmt->bindParam(':mensaje', $mensaje);

    if ($stmt->execute()) {
        echo "Mensaje enviado con éxito";
    } else {
        echo "Error al enviar el mensaje";
    }
    
    // Cerrar conexión
    $conn = null;
}
?>
