<?php
include 'includes/session.php';

if (isset($_POST['add'])) {
    $noticia = $_POST['noticia'];
    $calidad = $_POST['calidad'];
    $delito = $_POST['delito'];
    $ampliacionHechos = $_POST['ampliacionHechos'];
    $fecha = $_POST['fecha'];

    // Crear la conexión a la base de datos. Asegúrate de que $conn esté correctamente configurado.
    // Ejemplo: $conn = new mysqli("nombre_del_servidor", "nombre_del_usuario", "contraseña", "nombre_de_la_base_de_datos");
    // Verifica también que la conexión se haya establecido correctamente.

    // Preparar la consulta INSERT con una sentencia preparada
    $stmt = $conn->prepare("INSERT INTO spoa (noticia, calidad, delito, ampliacionHechos, fecha) VALUES (?, ?, ?, ?, ?)");
    if ($stmt === false) {
        die('Error en la preparación de la consulta: ' . $conn->error);
    }

    // Enlazar los valores a los marcadores de posición
    $stmt->bind_param("sssss", $noticia, $calidad, $delito, $ampliacionHechos, $fecha);

    // Ejecutar la consulta preparada
    if ($stmt->execute()) {
        $_SESSION['success'] = 'Datos spoa agregados satisfactoriamente';
    } else {
        $_SESSION['error'] = 'Error al agregar del spoa: ' . $conn->error;
    }

    // Cerrar la conexión y liberar recursos
    $stmt->close();
    $conn->close();

    // Redirigir a la página "finanzas.php" después de realizar la inserción.
    header('location: spoa.php');
    exit; // Asegúrate de agregar "exit;" después de redirigir para detener la ejecución del resto del código.
}
?>
