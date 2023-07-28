<?php
  include 'includes/session.php';

  if(isset($_POST['delete'])){
    $id = $_POST['id'];
    $sql = "DELETE FROM icth WHERE id = '$id'";
    if($conn->query($sql)){
      $_SESSION['success'] = 'ICTH eliminado con éxito';
    }
    else{
      $_SESSION['error'] = $conn->error;
    }
  }
  else{
    $_SESSION['error'] = 'Seleccione el ICTH para eliminar primero';
  }

  header('Location: icth.php');
?>

