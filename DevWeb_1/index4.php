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
    <form action="guardar_datos.php" method="POST">
        <h2>Registro Historial</h2><br>
        <input type="text" name="id_hisotiral" placeholder="Inserte ID" required><br>
        <input type="text" name="paciente_id" placeholder="Id paciente" required><br>
        <input type="text" name="fecha" placeholder="fecha" required><br>
        <input type="text" name="diagnostico" placeholder="Diagnostico" required><br>
        <input type="email" name="tratamiento" placeholder=" Tramatiento" required><br>
        <input type="email" name="Observaciones" placeholder="Observaciones" required><br>
        <button type="submit">Enviar</button><br>
    </form>
</div>
    <footer>
        <p>coopyright &copy; 2025- Todos los derechos reservados </p>
        <p>LMH - Diseño Web II</p>
        <P>Contacto: <a href="mailto:andresvillalvir@gmail.com">andresvillalvir@gmail.com</a></P>
    </footer>
</body>
</html>