<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <?php include 'includes/navbar.php'; ?>
    <?php include 'includes/menubar.php'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">

        <button class="abrir" id="openModalBtn">Consultar los datos personales</button>
        <div id="myModal" class="modal">
          <div class="modal-content">
            <span class="close">&times;</span>
            <form id="searchForm" method="GET">
              <h1>Bienvenido Consulta los datos completos</h1>
              <input class="text-success" type="text" name="buscar_texto" placeholder="Busqueda por nombre">
              <input class="text-success" type="submit" value="Buscar Personal">
            </form>
            <div id="results"></div>
          </div>
        </div>

        <script src="../dist/js/buscar.js"></script>
        <?php include 'includes/scripts.php'; ?>

</body>

</html>