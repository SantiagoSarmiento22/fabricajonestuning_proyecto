<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fabricajones";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los valores del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $contra = $_POST['contra'];
    $fechaNacimiento = $_POST['fecha_nacimiento'];

    // Preparar la consulta SQL para insertar los datos
    $sql = "INSERT INTO usuarios_registrados (nombre, apellido, correo, contra , fecha_nacimiento)
            VALUES ('$nombre', '$apellido', '$correo', '$contra', '$fechaNacimiento')";

    if ($conn->query($sql) === TRUE) {
        echo "Datos insertados correctamente en la base de datos";
    } else {
        echo "Error al insertar los datos: " . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>
