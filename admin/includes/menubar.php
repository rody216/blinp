<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $user['firstname'].' '.$user['lastname']; ?></p>
          <a><i class="fa fa-circle text-success"></i>Activo</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class=""><a href="home.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li class="header text-success"></li>
        
        <!--<li><a href="attendance.php"><i class="fa fa-calendar"></i> <span>Asistencia del Personal</span></a></li>-->
        <li><a href="index.buscar.php"><i class="fa fa-search" aria-hidden="true"></i><span>Busqueda y Visualización</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Registro</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="employee.php"><i class="fa fa-circle-o"></i>Datos Personal</a></li>
            <li><a href="familia.php"><i class="fa fa-circle-o"></i>Datos Familiares</a></li>
            <li><a href="formacion.php"><i class="fa fa-circle-o"></i>Académicos y Profesionales</a></li>
            <li><a href="antecedentes.php"><i class="fa fa-circle-o"></i>Datos Disciplinarios</a></li>
            <li><a href="rama_judicial_p.php"><i class="fa fa-circle-o"></i>Datos Judiciales</a></li>
            <li><a href="judicial_radicacion.php"><i class="fa fa-circle-o"></i>Datos Radicación</a></li>
            <li><a href="mmp.php"><i class="fa fa-circle-o"></i>Datos Mmp</a></li>
            <li><a href="rnmc.php"><i class="fa fa-circle-o"></i>Datos Rnmc</a></li>
            <li><a href="ponal.php"><i class="fa fa-circle-o"></i>Datos Ponal</a></li>
            <li><a href="spoa.php"><i class="fa fa-circle-o"></i>Datos Spoa</a></li>
            <li><a href="procuraduria.php"><i class="fa fa-circle-o"></i>Datos Procuraduría</a></li>
            <li><a href="simit.php"><i class="fa fa-circle-o"></i>Datos Simit</a></li>
            <li><a href="inmuebles.php"><i class="fa fa-circle-o"></i>Datos Propiedades Inmuebles</a></li>
            <li><a href="vehiculos.php"><i class="fa fa-circle-o"></i>Datos Vehiculos</a></li>
            <li><a href="finanzas.php"><i class="fa fa-circle-o"></i>Datos Financieros</a></li>   
            <li><a href="segurida_social.php"><i class="fa fa-circle-o"></i>Datos Segurida Social</a></li>          
            <li><a href="icth.php"><i class="fa fa-circle-o"></i>Datos ICTH</a></li> 
        
         </ul>
        </li>
        <li><a href="usuarios.php"><i class="fa fa-search" aria-hidden="true"></i>Admistración de Usuarios</a></li>

        <?php
       echo '<img src="../images/fondo_blin.png" class="imagen-logo">';
       ?>
       <!--
            <option class="val" value="ubica.php">Ubica</option>
           -->
         
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <script>
  const linkSelect = document.getElementById('linkSelect');

  linkSelect.addEventListener('change', function() {
    const selectedValue = this.value;
    if (selectedValue !== '') {
      window.location.href = selectedValue;
    }
  });
</script>