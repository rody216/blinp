<?php
include 'includes/session.php';

if (isset($_GET['return'])) {
    $return = $_GET['return'];
} else {
    $return = 'usuarios.php';
}

if (isset($_POST['create'])) {
    $new_username = $_POST['username'];
    $new_password = $_POST['password'];
    $new_firstname = $_POST['firstname'];
    $new_lastname = $_POST['lastname'];
    $new_photo = $_FILES['photo']['name'];

    // Securely hash the new user's password
    $new_password = password_hash($new_password, PASSWORD_DEFAULT);

    if (!empty($new_photo)) {
        move_uploaded_file($_FILES['photo']['tmp_name'], '../images/' . $new_photo);
        $filename = $new_photo;
    } else {
        $filename = ''; // Set a default photo here if needed.
    }

    $sql = "INSERT INTO admin (username, password, firstname, lastname, photo) 
            VALUES ('$new_username', '$new_password', '$new_firstname', '$new_lastname', '$filename')";
    
    if ($conn->query($sql)) {
        $_SESSION['success'] = 'Nuevo administrador creado correctamente';
    } else {
        $_SESSION['error'] = $conn->error;
    }
} else {
    $_SESSION['error'] = 'Rellene los detalles requeridos primero';
}

header('location:' . $return);
?>
