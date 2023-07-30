<?php
include 'includes/session.php';

if (isset($_POST['add'])) {
    $ciudad = $_POST['ciudad'];
    $oficina = $_POST['oficina'];
    $matricula = $_POST['matricula'];
    $direccion = $_POST['direccion'];
    $filename = $_FILES['documento']['name'];
	if(!empty($filename)){
	move_uploaded_file($_FILES['documento']['tmp_name'], '../archive/'.$filename);	
	}
    $fechaActualizacion = date('Y-m-d', strtotime($_POST['date']));

    // Crear la conexión a la base de datos. Asegúrate de que $conn esté correctamente configurado.
    // Ejemplo: $conn = new mysqli("nombre_del_servidor", "nombre_del_usuario", "contraseña", "nombre_de_la_base_de_datos");
    // Verifica también que la conexión se haya establecido correctamente.
    $id = $conn->query("SELECT MAX(id) FROM propiedades")->fetch_row()[0] + 1;
    // Preparar la consulta INSERT con una sentencia preparada
   // Preparar la consulta INSERT con una sentencia preparada
    $stmt = $conn->prepare("INSERT INTO propiedades (ciudad, oficina, matricula, direccion, documento, fechaActualizacion) VALUES (?, ?, ?, ?, ?, ?)");

    if ($stmt === false) {
        die('Error en la preparación de la consulta: ' . $conn->error);
    }

    // Enlazar los valores a los marcadores de posición
    $stmt->bind_param("ssssss", $ciudad, $oficina, $matricula, $direccion, $filename, $fechaActualizacion);

    // Ejecutar la consulta preparada
    if ($stmt->execute()) {
        $_SESSION['success'] = 'Datos financieros agregados satisfactoriamente';
    } else {
        $_SESSION['error'] = 'Error al agregar los datos financieros: ' . $conn->error;
    }

    // Cerrar la conexión y liberar recursos
    $stmt->close();
    $conn->close();

    // Redirigir a la página "inmuebles.php" después de realizar la inserción.
    header('location: inmuebles.php');
    exit; // Asegúrate de agregar "exit;" después de redirigir para detener la ejecución del resto del código.
}
?>
