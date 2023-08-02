<?php
include 'includes/session.php';

if (isset($_POST['add'])) {
    // Obtener los valores del formulario
    $numero_documento = $_POST['numero_documento'];
    $fecha_expedicion = $_POST['fecha_expedicion'];
    $primer_nombre = $_POST['primer_nombre'];
    $segundo_nombre = $_POST['segundo_nombre'];
    $primer_apellido = $_POST['primer_apellido'];
    $segundo_apellido = $_POST['segundo_apellido'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $edad = $_POST['edad'];
    $estatura = $_POST['estatura'];
    $tipo_sangre = $_POST['tipo_sangre'];
    $factor_rh = $_POST['factor_rh'];
    $pais = $_POST['pais'];
    $departamento = $_POST['departamento'];
    $ciudad = $_POST['ciudad'];
    $direccion_residencia = $_POST['direccion_residencia'];
    $estado_civil = $_POST['estado_civil'];
    $email = $_POST['email'];
    $filename = $_FILES['foto']['name'];

    // Mover la foto a la ubicación deseada (si es necesario)
    if (!empty($filename)) {
        move_uploaded_file($_FILES['foto']['tmp_name'], '../images/' . $filename);
    }

    // Crear la consulta SQL con sentencias preparadas
    $sql = "INSERT INTO personal (numero_documento, fecha_expedicion, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, fecha_nacimiento, edad, estatura, tipo_sangre, factor_rh, pais, departamento, ciudad, direccion_residencia, estado_civil, email, foto) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Preparar la sentencia SQL con los parámetros
    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        "sssssssiissssssssb",
        $numero_documento,
        $fecha_expedicion,
        $primer_nombre,
        $segundo_nombre,
        $primer_apellido,
        $segundo_apellido,
        $fecha_nacimiento,
        $edad,
        $estatura,
        $tipo_sangre,
        $factor_rh,
        $pais,
        $departamento,
        $ciudad,
        $direccion_residencia,
        $estado_civil,
        $email,
        $filename
    );

    // Ejecutar la sentencia preparada
    if ($stmt->execute()) {
        $_SESSION['success'] = 'Personal añadido satisfactoriamente';
    } else {
        $_SESSION['error'] = $conn->error;
    }

    // Cerrar la sentencia y la conexión
    $stmt->close();
    $conn->close();
} else {
    $_SESSION['error'] = 'Error al crear';
}

// Redirigir a la página de empleados después de la inserción
header('location: employee.php');
?>
