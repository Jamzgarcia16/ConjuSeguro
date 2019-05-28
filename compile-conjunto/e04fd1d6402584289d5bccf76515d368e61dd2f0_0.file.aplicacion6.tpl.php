<?php
/* Smarty version 3.1.32, created on 2019-04-29 20:37:05
  from 'C:\xampp\tpl-conjunto\aplicacion6.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cc744512105a5_74592565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e04fd1d6402584289d5bccf76515d368e61dd2f0' => 
    array (
      0 => 'C:\\xampp\\tpl-conjunto\\aplicacion6.tpl',
      1 => 1556510234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu".((string)$_smarty_tpl->tpl_vars[\'VERSION\']->value).".tpl' => 1,
    'file:contenido".((string)$_smarty_tpl->tpl_vars[\'VERSION\']->value).".tpl' => 1,
    'file:pie".((string)$_smarty_tpl->tpl_vars[\'VERSION\']->value).".tpl' => 1,
  ),
),false)) {
function content_5cc744512105a5_74592565 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <base href="http://localhost/mi_proyecto/">
  <title>ConjuSeguro.com</title>

    <!--  Estilos css para buscador  -->
    <link rel="stylesheet" href="css/estilos.css">  

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/dropzone.css" />

    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600|Montserrat:200,300,400" rel="stylesheet">

    
    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/law-icons/font/flaticon.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/helpers.css">
    <link rel="stylesheet" href="css/style.css">

    <?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
    

          
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
<?php echo '<script'; ?>
 type="text/javascript">
  var colum_center=[0,-1];
<?php echo '</script'; ?>
>
</head>
<body id="page-top" data-spy="scroll" data-target="#pb-navbar" data-offset="200">
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top" id="navbar">>

      <a class="navbar-brand mr-1" href="<?php echo $_smarty_tpl->tpl_vars['PROGRAMA']->value;?>
"><img src="imagenes/logo.jpg" alt="Logo" height="30"></a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PROGRAMA']->value;?>
">Inicio</a></li>
        <li class="nav-item"><a class="nav-link" href="#section-about">Sobre Nosotros</a></li>
        <li class="nav-item"><a class="nav-link" href="#section-why-us">Porque Nosotros</a></li>
        <li class="nav-item"><a class="nav-link" href="#section-practicing-areas">Areas de Desarrollo</a></li>
        <li class="nav-item"><a class="nav-link" href="#section-contact">Contactenos</a></li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="i
                    .con-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>
            <!-- Nav Item - Messages -->
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="adm_user_mensajes">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="<?php if ($_smarty_tpl->tpl_vars['foto']->value == '') {?>../imagenes/user.jpg<?php } else {
echo $_smarty_tpl->tpl_vars['foto']->value;
}?>" class="rounded-circle" alt="Usuario" title="<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
" width="40" height="40">
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Perfil</a>
            <a class="dropdown-item" href="#">Actividad Log</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Salir</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

    <?php $_smarty_tpl->_subTemplateRender("file:menu".((string)$_smarty_tpl->tpl_vars['VERSION']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['path']->value, 'link', false, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['link']->value) {
?>
              <?php if ($_smarty_tpl->tpl_vars['link']->value != '') {?>
                <?php if ($_smarty_tpl->tpl_vars['link']->value == $_smarty_tpl->tpl_vars['DIR_PROYECTO']->value) {?>
                  <?php if ($_smarty_tpl->tpl_vars['len_path']->value-1 == $_smarty_tpl->tpl_vars['i']->value) {?>                     <li class="breadcrumb-item active">Inicio</li>
                  <?php } else { ?>
                    <li class="breadcrumb-item">
                      <a href="<?php echo $_smarty_tpl->tpl_vars['PROGRAMA']->value;?>
/">Inicio</a>
                    </li>
                  <?php }?>
                <?php } else { ?>
                  <?php if ($_smarty_tpl->tpl_vars['link']->value != $_smarty_tpl->tpl_vars['url1']->value) {?>
                    <?php if ($_smarty_tpl->tpl_vars['len_path']->value-1 == $_smarty_tpl->tpl_vars['i']->value) {?>                       <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['link']->value;?>
</li>
                    <?php } else { ?>
                      <li class="breadcrumb-item">
                         <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/"><?php echo $_smarty_tpl->tpl_vars['link']->value;?>
</a>
                      </li>
                    <?php }?>
                  <?php }?>
                <?php }?>
              <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ol>

          <?php $_smarty_tpl->_subTemplateRender("file:contenido".((string)$_smarty_tpl->tpl_vars['VERSION']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

        </div>

        <!-- Sticky Footer -->
        <footer class="card-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">

              <?php $_smarty_tpl->_subTemplateRender("file:pie".((string)$_smarty_tpl->tpl_vars['VERSION']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
              
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Está seguro que desea Salir?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Seleccione "Salir" si está listo para cerrar la sesión.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['PROGRAMA']->value;?>
?cerrar=<?php echo $_smarty_tpl->tpl_vars['session_id']->value;?>
">Salir</a>
          </div>
        </div>
      </div>
    </div>

<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
<!-- JQuery Buscador-->
<?php echo '<script'; ?>
 src="js/search.js"><?php echo '</script'; ?>
>

<!-- Bootstrap core JavaScript-->
<?php echo '<script'; ?>
 src="vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="vendor/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>

<!-- Core plugin JavaScript-->
<?php echo '<script'; ?>
 src="vendor/jquery-easing/jquery.easing.min.js"><?php echo '</script'; ?>
>

<!-- Page level plugin JavaScript-->
<?php echo '<script'; ?>
 src="vendor/datatables/jquery.dataTables.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="vendor/datatables/dataTables.bootstrap4.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="DataTables/datatables.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/dropzone.js"><?php echo '</script'; ?>
>

<!-- Custom scripts for all pages-->
<?php echo '<script'; ?>
 src="js/sb-admin.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function() {
  $('#tabla1').dataTable( {
        'createdRow': function( row, data, dataIndex ) {
            $(row).attr('id', 'row-' + dataIndex);
        },
        'columnDefs': [ {
              'targets': colum_center,
                'createdCell':  function (td, cellData, rowData, row, col) {
                $(td).css("text-align","center"); 
            }
        } ],
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
        }
    } );
} );
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
