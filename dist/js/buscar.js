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
