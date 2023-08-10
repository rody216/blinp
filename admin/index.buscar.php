<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<title>Panel de Administración</title>
	<link rel="icon" href="../images/icon.png">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="./css/styles.css"> 
</head>
<body>

    <button class="abrir" id="openModalBtn">Consultar los datos personales</button>
    <button class="home" id="goHomeBtn">Volver al Inicio</button>
    <a href="./reportes.php">Imprimir Pdf</a>

    <div id="myModal" class="modal">
      <div class="modal-content">
        <span class="close">&times;</span>
        <form id="searchForm" method="GET">
          <input type="text" name="buscar_texto" placeholder="Busqueda por nombre">
          <input type="submit" value="Buscar por nombre">
        </form>
        <div id="results"></div>        
      </div>
    </div>
    
    <script>
      document.getElementById("goHomeBtn").addEventListener("click", function() {
          window.location.href = "home.php"; // Reemplaza con la ruta de tu página de inicio
      });

      document.getElementById("openModalBtn").addEventListener("click", function() {
          document.getElementById("myModal").style.display = "block";
      });

      document.querySelector(".close").addEventListener("click", function() {
          document.getElementById("myModal").style.display = "none";
      });

      // AJAX para cargar los resultados en el modal con validación de campo vacío
      document.getElementById("searchForm").addEventListener("submit", function(event) {
          event.preventDefault(); // Prevenir el envío del formulario

          const searchInput = document.querySelector("input[name='buscar_texto']");
          if (searchInput.value.trim() === "") {
              alert("El campo de búsqueda no puede estar vacío.");
              return; // No ejecutar la búsqueda si el campo está vacío
          }

          const formData = new FormData(this);

          fetch("busqueda.php?" + new URLSearchParams(formData))
              .then(response => response.text())
              .then(data => {
                  document.getElementById("results").innerHTML = data;
              });
      });
  </script>
    
    </body>
    </html>