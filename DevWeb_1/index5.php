<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body> 
    <header>
    <h1>Hospital Militar</h1>
    <p>Diseño Web II - 12 BTP Informática</p>
    <nav>
        <ul>
            <li><a href="index.php">Registro Medicos</a></li>
            <li><a href="index2.php">Registro Especialidades</a></li>
            <li><a href="index3.php">Registro Citas</a></li>
            <li><a href="index4.php">Registro Historial</a></li>
            <li><a href="index5.php">Registro Pacientes</a></li>
        </ul>
    </nav>
    </header>
<div class="container">
    <form action="" method="POST">
        <h2>Registro Pacientes</h2><br>
        <input type="text" name="nombre" placeholder="Tu Nombre" required><br>
        <input type="date" name="fecha_nacimiento" placeholder="Tu Fecha de nacimiento" required><br>
        <input type="text" name="direccion" placeholder=" Tu direccion" required><br>
        <input type="text" placeholder="Tu Teléfono" required>
        <input type="email" name="correo" placeholder=" Tu Correo" required><br>
        <button type="submit">Enviar</button><br>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    extract($_POST);

    $conn = new mysqli('localhost', 'root', '', 'hospital');

    // Make sure the column names in your 'pacientes' table match exactly
    // e.g., nombre, fecha_nacimiento, direccion, telefono, correo
    $conn->query("INSERT INTO pacientes (nombre, fecha_nacimiento, direccion, telefono, correo) 
    VALUES ('$nombre', '$fecha_nacimiento', '$direccion', '$telefono', '$correo')");

    echo "<p>Paciente registrado correctamente.</p>";
    echo "<style>p { color: green; }</style>";
    echo "<style>p { text-align: center; padding-top: 10px; }</style>";
}

?>

    </form>
</div>
    <footer>
        <p>coopyright &copy; 2025- Todos los derechos reservados </p>
        <p>LMH - Diseño Web II</p>
        <P>Contacto: <a href="mailto:andresvillalvir@gmail.com">andresvillalvir@gmail.com</a></P>
    </footer>
</body>
</html>