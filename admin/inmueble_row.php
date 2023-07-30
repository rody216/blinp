<?php
// formation_row.php
// Assuming you have a valid database connection in $conn
include '../conn.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
  
    // Make sure $conn is a valid database connection before executing the query
    // Replace 'your_db_table_name' with the actual table name where your data is stored
    $stmt = $conn->prepare("SELECT * FROM  propiedades WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
  
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      echo json_encode($row);
    } else {
      // If no data is found, return an empty JSON object
      echo json_encode([]);
    }
    $stmt->close();
    $conn->close();
    
    }

?>
