<?php
/* Smarty version 3.1.32, created on 2019-02-20 03:25:14
  from 'C:\xampp\tpl-conjunto\adm_videos6.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c6cba8ab31d07_50038838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0b564c97b46439d75137f42cb52acc709a29d05' => 
    array (
      0 => 'C:\\xampp\\tpl-conjunto\\adm_videos6.tpl',
      1 => 1550629511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6cba8ab31d07_50038838 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
  <h1 style="text-align: center;">Galeria Personal Jamz Garcia</h1>
  <br>

<!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
        <div class="card img-fluid" style="width:300px height: 600px">
          <img class="card-img-top" src="fotos/hiphoplogo.png" alt="Card image" style="width:100%">
          <div class="card-img-top">
            <small class="card-text" style="color: red;">Galeria Musical 2019 - 100% HipHop</small>
          </div>
        </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">Seleciona tu lista de Reproducion Favorita!</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      
      <p>Bienvenidos sean a disfrutar de mi Galeria Personalizada de Audio, si no le gusta el Sonido! Entonces para que lo Escucha!! Solo RAP Hommies.</p>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      


    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Selecciona tu lista de RAP!</h3>
      <p>Artistas Considerados los mejores Exponentes del Hip Hop Mundial desde los 60'S.</p>
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="adm_galeria">Galeria RAP # 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Galeria RAP # 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Galeria RAP # 3</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Galeria RAP # 4</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Galeria RAP # 5</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
      </nav>

    </div>
  </div>
</div>

<div class="container mt-3">
  <h2>Nested Media Objects</h2>
  <p>Media objects can also be nested (a media object inside a media object):</p><br>

  <div class="media border p-3">
    <img src="img_avatar3.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
    <div class="media-body">
      <h4>John Doe <small><i>Posted on February 19, 2016</i></small></h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <h6>Comentario!</h6>
      <br>
      <div class="media p-3">
        <img src="img_avatar2.png" alt="Jane Doe" class="mr-3 mt-3 rounded-circle" style="width:45px;">
        <div class="media-body">
          <h4>Jane Doe <small><i>Posted on February 20 2016</i></small></h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>  
    </div>
  </div>
</div>
<div class="container-fluid">  <!-- Regilla de Boostrap 4 -->
    <!-- Control the column width, and how they should appear on different devices 
    <div class="row">
      <div class="col-sm-6" style="background-color:yellow;">50%</div>
      <div class="col-sm-6" style="background-color:orange;">50%</div>
    </div>
    <br>
    
    <div class="row">
      <div class="col-sm-4" style="background-color:yellow;">33.33%</div>
      <div class="col-sm-4" style="background-color:orange;">33.33%</div>
      <div class="col-sm-4" style="background-color:yellow;">33.33%</div>
    </div>
    <br>

    # Or let Bootstrap automatically handle the layout 
    <div class="row">
      <div class="col-sm" style="background-color:yellow;">25%</div>
      <div class="col-sm" style="background-color:orange;">25%</div>
      <div class="col-sm" style="background-color:yellow;">25%</div>
      <div class="col-sm" style="background-color:orange;">25%</div>
    </div>
    <br>
    -->
    <div class="row">
      <div class="col" style="background-color:yellow;">25%</div>
      <div class="col" style="background-color:orange;">25%</div>
      <div class="col" style="background-color:yellow;">25%</div>
      <div class="col" style="background-color:orange;">25%</div>
    </div>
  </div>  



<form name="form1" method="post" action="adm_videos" id="cdr" >
<div><h1>BUSCA CLIENTES</h1></div>
      <p>
        <input name="busca"  type="text" id="busqueda">
        <input type="submit" name="Submit" value="busca" />
        </p>
      </p>
</form>


<table id="tabla1" class="display" style="width:100%">
        <thead>
      <tr>
        <th>ID</th>
        <th>Nombre_cliente</th>
        <th>Cedula o NIT</th>
        <th>Correo</th>
        <th>Direccion</th>
        <th>Codigo Cliente</th> 
      </tr>
    </thead>
    <tbody>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabla_buscar']->value, 'fila');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fila']->value) {
?>
  <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['fila']->value['id_cliente'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['fila']->value['nombre_cliente'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['fila']->value['cc'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['fila']->value['email'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['fila']->value['direccion'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['fila']->value['cod_cliente'];?>
</td>
  </tr>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </tbody>
    <tfoot>
        <tr>
          <th>ID</th>
          <th>Nombre_cliente</th>
          <th>Cedula o NIT</th>
          <th>Correo</th>
          <th>Direccion</th>
          <th>Codigo Cliente</th> 
        </tr>
    </tfoot>
</table>


<p>&nbsp;</p>


<p>otrooo....</p>

  <div class="row">
    <div class="col s12">
      <!-- Uploader Dropzone -->
      <div id="zdrop" class="fileuploader ">
        <div id="upload-label" style="width: 200px;">
          <i class="material-icons">cloud_upload</i>
          <span class="title">Drag your Files here</span>
          <span>Some description here <span/>
        </div>
      </div>
      <!-- Preview collection of uploaded documents -->
      <div class="preview-container">
        <div class="header">
          <span>Uploaded Files</span> 
          <i id="close" class="material-icons">close</i>
          <i id="controller" class="material-icons">keyboard_arrow_down</i>
        </div>
        <div class="collection card" id="previews">
          <div class="collection-item clearhack valign-wrapper item-template" id="zdrop-template">
            <div class="left pv zdrop-info" data-dz-thumbnail>
              <div>
                <span data-dz-name></span> <span data-dz-size></span>
              </div>
              <div class="progress">
                <div class="determinate" style="width:0" data-dz-uploadprogress></div>
              </div>
              <div class="dz-error-message"><span data-dz-errormessage></span></div>
            </div>

            <div class="secondary-content actions">
              <a href="#!" data-dz-remove class="btn-floating ph red white-text waves-effect waves-light"><i class="material-icons white-text">clear</i></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Otra Prueba!! -->
      <header>
      <div class="alert alert-info">
      <h3>Insertar/Mostrar Imagenes y Audio Directamente a la BD</h3>
      </div>
    </header>

    
    <section>
    
      <table class="table">
        <tr class="bg-primary">
        <th>ID</th>
        <th>AVATAR</th>
        <th>NOMBRE</th>
        <th>PODER</th>
        <th>PAÍS</th>
        </tr>
        <?php echo '<?
        ';
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listPer']->value, 'fila');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fila']->value) {
?>

          <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['fila']->value['id_personaje'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['fila']->value['nombre'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['fila']->value['nombre'];?>
</td>
      <td><audio controls><source src="data:audio/mp3;base64,'.base64_encode<?php echo $_smarty_tpl->tpl_vars['fila']->value['poder'];?>
.'"></audio controls></td>
      <td><?php echo $_smarty_tpl->tpl_vars['fila']->value['pais'];?>
</td>
  </tr>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </table>
      <form method="POST" enctype="multipart/form-data">
        <table class="table">
        <tr><th colspan="5" class="bg-primary text-center" >NUEVO PERSONAJE</th></tr>
        <tr class="bg-primary">
        <th>AVATAR</th>
        <th>NOMBRE</th>
        <th>PODER</th>
        <th>PAÍS</th>
        <th>ACCION</th>
        </tr>
        <tr class="bg-info">
        <td><input name="avatar" type="file" class="form-control"></td>
        <td><input name="nombre" type="text" class="form-control" placeholder="Nombre"></td>
        <td><input name="poder" type="file" class="form-control""></td>
        <td><input name="pais" type="text" class="form-control" placeholder="País"></td>
        <td><input name="insertar" type="submit" class="btn btn-success" value="Insertar Personaje" > </td>
        </tr>
        </table>
        <br>
        <br>
        
      </form>
    </section><?php }
}
