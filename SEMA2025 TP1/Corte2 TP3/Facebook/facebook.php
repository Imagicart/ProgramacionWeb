<?php
require 'config/conex.php';

try {
    // Recibir datos del formulario de manera segura
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $dia = $_POST["dia"];
    $mes = $_POST["mes"]; 
    $yeard = $_POST["yeard"];
    $genero = $_POST["genero"];
    $email = $_POST["user"];
    $password = $_POST["paswor"];

    // Cifrar la contraseña
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Consulta SQL segura con placeholders
    $sql = "INSERT INTO usuarios (nombre, apellido, dia, mes, yeard, genero, email, pasword) 
            VALUES (:nombre, :apellido, :dia, :mes, :yeard, :genero, :email, :password)";
    
    // Preparar la consulta
    $stmt = $dbh->prepare($sql);

    // Asignar valores a los placeholders
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':apellido', $apellido);
    $stmt->bindParam(':dia', $dia);
    $stmt->bindParam(':mes', $mes);
    $stmt->bindParam(':yeard', $yeard);
    $stmt->bindParam(':genero', $genero);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $hashed_password);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "Registro finalizado, felicidades señor/a " . htmlspecialchars($nombre);
    } else {
        echo "Lo sentimos, obtuvimos un error. Por favor, vuelve a intentarlo.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
