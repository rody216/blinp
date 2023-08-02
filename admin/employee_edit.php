<?php
include 'includes/session.php';

if (isset($_POST['edit'])) {
    $empid = $_POST['id_personal'];
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
    $departamento = $_POST['departamento'];
    $ciudad = $_POST['ciudad'];
    $direccion_residencia = $_POST['direccion_residencia'];
    $estado_civil = $_POST['estado_civil'];
    $email = $_POST['email'];

    $sql = "UPDATE personal SET 
            numero_documento = ?,
            fecha_expedicion = ?,
            primer_nombre = ?,
            segundo_nombre = ?,
            primer_apellido = ?,
            segundo_apellido = ?,
            fecha_nacimiento = ?,
            edad = ?,
            estatura = ?,
            tipo_sangre = ?,
            factor_rh = ?,
            departamento = ?,
            ciudad = ?,
            direccion_residencia = ?,
            estado_civil = ?,
            email = ?
            WHERE id_personal = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        "sssssssissssssssi",
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
        $departamento,
        $ciudad,
        $direccion_residencia,
        $estado_civil,
        $email,
        $empid
    );

    if ($stmt->execute()) {
        $_SESSION['success'] = 'Empleado actualizado con éxito';
    } else {
        $_SESSION['error'] = $stmt->error;
    }
} else {
    $_SESSION['error'] = 'Seleccionar empleado para editar primero';
}

header('location: employee.php');
?>
