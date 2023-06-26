<?php
include("connection.php");
$conn = connection();

$sql = "SELECT * FROM users";
$query = mysqli_query($conn, $sql);
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Empleados</title>
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="css/EstilosAdmin.css">
    <!-- CUSTOM JS -->
    <script src="js/menu.js" defer></script>
</head>
<body>

    <div class="menu-dashboard">
        <!-- TOP MENU -->
        <div class="top-menu">
            <div class="logo">
                <img src="img/logito.png" alt="">
                <span>FabriCajones</span>
            </div>
            <div class="toggle">
                <i class='bx bx-menu bx-tada'></i>
            </div>
        </div>
        <!-- INPUT SEARCH -->
        <div class="input-search">

        </div>
        <!-- MENU -->
        <div class="menu">
            <br>
            <div class="enlace">
                <i class='bx bx-book-open' ></i>
                <span> <a href="Catalogo_Administrador.html">Catalogo</a></span>
            </div>

            <div class="enlace">
                <i class='bx bxs-calendar-event'></i>
                <span> <a href=""></a>  Servicios</span>
            </div>

            <div class="enlace">
                <i class=" bx bxs-box"></i>
                <span><a href="Admin_Proveedor.html">Proveedor</a></span>
            </div>

            <div class="enlace">
                <i class='bx bxs-user-detail'></i>
                <span><a href="Admin_Cliente.html">Clientes</a></span>
            </div>

            <div class="enlace">
                <i class='bx bx-briefcase-alt-2'></i>
                <span> <a href="Admin_Empleados.html">Empleados</a></span>
            </div>
 
            <div class="cerrar">
                <div class="enlace">
                    <i class='bx bxs-chevrons-left' ></i>
                    <span><a href="MENUCliente.html">CerrarSesion</a></span>
                </div>
                <div class="enlace">
                    <i class='bx bx-cog'></i>
                    <span>Configuracion</span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="botones">
        <input class="Insertar" type="submit" value="Insertar" class="form_cta"><br>
        <input class="Consultar" type="submit" value="Consultar" class="form_cta"><br>
        <input class="Modificar" type="submit" value="Modificar" class="form_cta"><br>
        <input class="Eliminar" type="submit" value="Eliminar" class="form_cta"><br>
    </div>
    
    <div class="formulario">
        <form action="inser_user.php" method="POST">
            <label for="id">ID:</label>
            <input type="text" id="id" name="id" required><br>

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br>

            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required><br>

            <label for="correo">Correo electrónico:</label>
            <input type="email" id="correo" name="correo" required><br>

            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" required><br>

            <label for="fecha_nacimiento">Fecha de nacimiento:</label>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required><br> 

            <input type="submit" value="Enviar">
        </form>
    </div>
</div>
</body>
</html>