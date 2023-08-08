<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "apsystem";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener el texto de búsqueda del formulario
$buscar_texto = $_GET['buscar_texto'];

// Consulta SQL para buscar en la tabla "personal"
$sql_personal = "SELECT * FROM personal WHERE primer_nombre LIKE '%$buscar_texto%'";
$result_personal = $conn->query($sql_personal);



// Consulta SQL para buscar en la tabla "propiedades"
$sql_propiedades = "SELECT * FROM propiedades WHERE ciudad LIKE '%$buscar_texto%'";
$result_propiedades = $conn->query($sql_propiedades);

// Consulta SQL para buscar en la tabla "spoa"
$sql_spoa = "SELECT * FROM spoa WHERE noticia LIKE '%$buscar_texto%'";
$result_spoa = $conn->query($sql_spoa);

// Consulta SQL para buscar en la tabla "vehiculos"
$sql_vehiculos = "SELECT * FROM vehiculos WHERE tipo_Vehiculo LIKE '%$buscar_texto%'";
$result_vehiculos = $conn->query($sql_vehiculos);

// Mostrar los resultados de cada tabla por separado
if ($result_personal !== false || $result_propiedades !== false || $result_spoa !== false || $result_vehiculos !== false) {
    if ($result_personal->num_rows > 0) {
        echo "<p>Datos de la Persona:</p>";
        while ($row = $result_personal->fetch_assoc()) {
            foreach ($row as $campo => $valor) {
                echo "<p>" . ucfirst(str_replace("_", " ", $campo)) . ": " . $valor . "</p>";
            }
            echo "<hr>";
        }
    }

    if ($result_propiedades->num_rows > 0) {
        echo "<p>Resultados de Propiedades:</p>";
        while ($row = $result_propiedades->fetch_assoc()) {
            foreach ($row as $campo => $valor) {
                echo "<p>" . ucfirst(str_replace("_", " ", $campo)) . ": " . $valor . "</p>";
            }
            echo "<hr>";
        }
    }

    if ($result_spoa->num_rows > 0) {
        echo "<p>Resultados de Spoa:</p>";
        while ($row = $result_spoa->fetch_assoc()) {
            foreach ($row as $campo => $valor) {
                echo "<p>" . ucfirst(str_replace("_", " ", $campo)) . ": " . $valor . "</p>";
            }
            echo "<hr>";
        }
    }

    if ($result_vehiculos->num_rows > 0) {
        echo "<p>Resultados de Vehículos:</p>";
        while ($row = $result_vehiculos->fetch_assoc()) {
            foreach ($row as $campo => $valor) {
                echo "<p>" . ucfirst(str_replace("_", " ", $campo)) . ": " . $valor . "</p>";
            }
            echo "<hr>";
        }
    }

    if ($result_personal->num_rows == 0 && $result_propiedades->num_rows == 0 && $result_spoa->num_rows == 0 && $result_vehiculos->num_rows == 0) {
        echo "No se encontraron resultados.";
    }
} else {
    echo "Error en la consulta SQL: " . $conn->error;
}

$conn->close();
?>
