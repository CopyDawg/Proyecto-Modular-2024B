<?php
// Inicia la sesión si necesitas guardar datos del usuario registrado
session_start();
// Primero, definimos los datos de conexión a la base de datos
$host = 'localhost';      // La dirección del servidor de la base de datos
$dbname = 'Plantas.Reyes.M';    // El nombre de la base de datos
$user = 'postgres';     // El usuario de la base de datos
$password = 'cucei'; // La contraseña del usuario

// Incluir la conexión a la base de datos
include 'conexion.php';

// Inicializar variables para los mensajes
$success = $error = '';

// Verificar si se envió el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = trim($_POST['nombre']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Validar campos
    if (empty($nombre) || empty($email) || empty($password)) {
        $error = "Todos los campos son obligatorios.";
    } else {
        try {
            // Verificar si el correo ya existe
            $sql = "SELECT COUNT(*) FROM usuarios WHERE email = :email";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $exists = $stmt->fetchColumn();

            if ($exists) {
                $error = "El correo electrónico ya está registrado.";
            } else {
                // Cifrar la contraseña
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                // Insertar el nuevo usuario
                $sql = "INSERT INTO usuarios (nombre, email, password, rol) VALUES (:nombre, :email, :password, 'cliente')";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':nombre', $nombre);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':password', $hashedPassword);
                $stmt->execute();

                $success = "Usuario registrado correctamente. ¡Ahora puedes iniciar sesión!";
            }
        } catch (PDOException $e) {
            $error = "Error al registrar el usuario: " . $e->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <!-- Agregar estilos o frameworks CSS aquí -->
</head>
<body>
    <h1>Registro de Usuario</h1>

    <?php if ($success): ?>
        <div style="color: green;"><?php echo htmlspecialchars($success); ?></div>
    <?php endif; ?>

    <?php if ($error): ?>
        <div style="color: red;"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>

    <form method="POST" action="usuarios.php">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>

        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required>
        <br>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
        <br>

        <button type="submit">Registrar</button>
    </form>

    <a href="login.php">¿Ya tienes cuenta? Inicia sesión aquí</a>
</body>
</html>
