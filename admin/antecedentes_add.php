<?php
include 'includes/session.php';

if (isset($_POST['add'])) {
    $infraccion= $_POST['infraccion'];
    $correctivo = $_POST['correctivo'];
    $fecha = date('Y-m-d', strtotime($_POST['date']));
    $obs = $_POST['obs'];
    

    // Crear la conexión a la base de datos. Asegúrate de que $conn esté correctamente configurado.
    // Ejemplo: $conn = new mysqli("nombre_del_servidor", "nombre_del_usuario", "contraseña", "nombre_de_la_base_de_datos");
    // Verifica también que la conexión se haya establecido correctamente.
    $id = $conn->query("SELECT MAX(id) FROM disciplinarios")->fetch_row()[0] + 1;
    // Preparar la consulta INSERT con una sentencia preparada
    $stmt = $conn->prepare("INSERT INTO disciplinarios (infraccion, correctivo, fecha, obs) VALUES (?, ?, ?, ?)");
    if ($stmt === false) {
        die('Error en la preparación de la consulta: ' . $conn->error);
    }

    // Enlazar los valores a los marcadores de posición
    $stmt->bind_param("ssss", $infraccion, $correctivo, $fecha, $obs);

    // Ejecutar la consulta preparada
    if ($stmt->execute()) {
        $_SESSION['success'] = 'Antecedentes agregados satisfactoriamente';
    } else {
        $_SESSION['error'] = 'Error al agregar los datos antecedentes: ' . $conn->error;
    }

    // Cerrar la conexión y liberar recursos
    $stmt->close();
    $conn->close();

    // Redirigir a la página "formacion.php" después de realizar la inserción.
    header('location: antecedentes.php');
    exit; // Asegúrate de agregar "exit;" después de redirigir para detener la ejecución del resto del código.
}


