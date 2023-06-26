<?php
// Establece la conexión a la base de datos en PHPMyAdmin
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fabricajones";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica si la conexión fue exitosa
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtiene los valores enviados desde el formulario HTML y realiza la limpieza de datos
$correo = cleanInput($_POST['Correo'], $conn);
$contraseña = cleanInput($_POST['Contraseña'], $conn);

// Realiza la validación de los datos ingresados
// Aquí puedes agregar tu lógica de validación según tus necesidades

// Utiliza consultas preparadas para prevenir las inyecciones SQL
$stmt = $conn->prepare("INSERT INTO usuarios (correo, contraseña) VALUES (?, ?)");
$stmt->bind_param("ss", $correo, $contraseña);

if ($stmt->execute()) {
    echo "Registro guardado exitosamente";
} else {
    echo "Error al guardar el registro: " . $stmt->error;
}

// Cierra la conexión a la base de datos
$stmt->close();
$conn->close();

// Función para limpiar los datos ingresados
function cleanInput($data, $conn) {
    $data = $conn->real_escape_string($data);
    return $data;
}
?>