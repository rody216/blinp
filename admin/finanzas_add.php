<?php
include 'includes/session.php';

if (isset($_POST['add'])) {
    $entidad = $_POST['entidad'];
    $tipoProducto = $_POST['tipoProducto'];
    $numeroProducto = $_POST['numeroProducto'];

    // Crear la conexión a la base de datos. Asegúrate de que $conn esté correctamente configurado.
    // Ejemplo: $conn = new mysqli("nombre_del_servidor", "nombre_del_usuario", "contraseña", "nombre_de_la_base_de_datos");
    // Verifica también que la conexión se haya establecido correctamente.

    // Preparar la consulta INSERT con una sentencia preparada
    $stmt = $conn->prepare("INSERT INTO bancarios (entidad, tipoProducto, numeroProducto) VALUES (?, ?, ?)");
    if ($stmt === false) {
        die('Error en la preparación de la consulta: ' . $conn->error);
    }

    // Enlazar los valores a los marcadores de posición
    $stmt->bind_param("sss", $entidad, $tipoProducto, $numeroProducto);

    // Ejecutar la consulta preparada
    if ($stmt->execute()) {
        $_SESSION['success'] = 'Datos financieros agregados satisfactoriamente';
    } else {
        $_SESSION['error'] = 'Error al agregar los datos financieros: ' . $conn->error;
    }

    // Cerrar la conexión y liberar recursos
    $stmt->close();
    $conn->close();

    // Redirigir a la página "finanzas.php" después de realizar la inserción.
    header('location: finanzas.php');
    exit; // Asegúrate de agregar "exit;" después de redirigir para detener la ejecución del resto del código.
}
?>
