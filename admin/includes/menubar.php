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
        <li><a href="search.php"><i class="fa fa-search" aria-hidden="true"></i><span>Busqueda y Visualización</span></a></li>
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
            <li class="text-success text-center"><i class=""></i> Antecedentes Penales</li>
            <li><a href="antecedentes.php"><i class="fa fa-circle-o"></i>Datos Disciplinarios</a></li>
            <li><a href="rama_judicial_p.php"><i class="fa fa-circle-o"></i>Datos Judiciales</a></li>
            <li><a href="ponal.php"><i class="fa fa-circle-o"></i>Antecedentes Ponal</a></li>
            <li><a href="spoa.php"><i class="fa fa-circle-o"></i>Datos Spoa</a></li>
            <li><a href="procuraduria.php"><i class="fa fa-circle-o"></i>Procuraduría</a></li>
            <li><a href="simit.php"><i class="fa fa-circle-o"></i>Datos Simit</a></li>
            <li class="text-success text-center"><i class=""></i> Otros</li>
            <li><a href="inmuebles.php"><i class="fa fa-circle-o"></i>Datos Propiedades Inmuebles</a></li>
            <li><a href="vehiculos.php"><i class="fa fa-circle-o"></i>Datos Vehiculos</a></li>
            <li><a href="finanzas.php"><i class="fa fa-circle-o"></i>Datos Financieros</a></li>   
            <li><a href="finanzas.php"><i class="fa fa-circle-o"></i>Datos Segurida Social</a></li>          
            <li><a href="icth.php"><i class="fa fa-circle-o"></i>Datos ICTH</a></li> 
            <li><a href="index.buscar.php"><i class="fa fa-search" aria-hidden="true"></i>Busqueda Personalizada</a></li>
         </ul>
        </li>
        <li><a href="usuarios.php"><i class="fa fa-search" aria-hidden="true"></i><span>Admistración de Usuarios</span></a></li>
        
         <!--
        <li class="treeview">
          <a href="#">
            <i class="fa fa-balance-scale"></i>
            <span>Antecedentes Judiciales</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">          
          desplegar con un select opti la opcion de los campos antecentes_ponal, procuraduria, rama_judial_p, rama_judiail.r, simit, controlaria 
             <div class="dropdown">           
             <select id="linkSelect" class="desplegable1" aria-label="Default select example">
            <option class="opcion">Anotaciones Confidenciales</option>
            <option class="val" value="spoa.php">Spoa</option>
            <option class="val" value="rnmc.php">Rnmc</option>
            <option class="val" value="mmp.php">Mmp</option>
            <option class="val" value="ubica.php">Ubica</option>
           <br /><br />           
            <option class="opcion">Antecedentes Publicos</option>
            <option class="val" value="ponal.php">Antecentes Ponal</option>
            <option class="val" value="procuraduria.php">Procuraduria</option>
            <option class="val" value="rama_judicial_p.php">Rama Judial P</option>
            <option class="val" value="judicial_radicacion.php">Rama Judial R</option>
            <option class="val" value="simit.php">Simit</option>
            <option class="val" value="contraloria.php">Contraloria</option>
          </select>
          <h5><a class="otro" href="antecedentes.php">Antecedentes Diciplinarios</a>/<h5>
      </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-money"></i>
            <span>Datos Financieros</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="inmuebles.php"><i class="fa fa-circle-o"></i>Propiedades Inmuebles</a></li>
            <li><a href="vehiculos.php"><i class="fa fa-circle-o"></i>Vehiculos</a></li>
            <li><a href="finanzas.php"><i class="fa fa-circle-o"></i>Datos Financieros</a></li>                 
          </ul>
        </li>
        <!-- <li><a href="deduction.php"><i class="fa fa-file-text"></i> Deducciones</a></li>
        <li><a href="position.php"><i class="fa fa-suitcase"></i>Agregar Cargos</a></li> 
        <li class="header">Imprimibles</li>
        <li><a href="payroll.php"><i class="fa fa-files-o"></i> <span>Reportes</span></a></li>
        
       <!-- <li><a href="payroll.php"><i class="fa fa-files-o"></i> <span>Nómina</span></a></li>
        <li><a href="payroll.php"><i class="fa fa-files-o"></i> <span>Reportes</span></a></li>
         <li><a href="schedule_employee.php"><i class="fa fa-clock-o"></i> <span>Horarios</span></a></li> -->
         
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