<?php
/* Smarty version 3.1.32, created on 2019-05-29 00:44:39
  from 'C:\xampp\tpl-conjunto\adm_clientes6.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cedb9d7f2e727_88390853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d88f21a479f55399a67a80f93991cf7a82dc7d2' => 
    array (
      0 => 'C:\\xampp\\tpl-conjunto\\adm_clientes6.tpl',
      1 => 1559083464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cedb9d7f2e727_88390853 (Smarty_Internal_Template $_smarty_tpl) {
?><div><h3>ADMINISTRACIÓN DE CLIENTES</h3></div>

<table id="tabla1" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Editar</th>
            <th>ID</th>
            <th>Nombre Cliente</th>
            <th>Cedula Ciudadania</th>
            <th>Email</th>
            <th>Direccion</th>
            <th>Codigo Cliente</th>
            <th>Borrar</th>
        </tr>
    </thead>
    <tbody>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabla_clientes']->value, 'fila');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fila']->value) {
?>
	<tr>
		<td style="text-align: center;">
			<a href="#" title="Editar" data-toggle="modal" data-target="#myModal"  onclick="return editar(<?php echo $_smarty_tpl->tpl_vars['fila']->value['id_cliente'];?>
,this.parentNode.parentNode.id);"><i class="fa fa-edit" style="font-size:24px; color:blue;"></i></a>
		</td>
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
		<td style="text-align: center;">
			<a href="#" title="Eliminar" data-toggle="modal" data-target="#myModal" onclick="return eliminar(<?php echo $_smarty_tpl->tpl_vars['fila']->value['id_menu'];?>
,this.parentNode.parentNode.id);"><i class="fa fa-trash-o" style="font-size:24px; color:red;"></i></a>
		</td>
	</tr>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</tbody>
    <tfoot>
        <tr>
            <th>Editar</th>
            <th>ID</th>
            <th>Nombre Cliente</th>
            <th>Cedula Ciudadania</th>
            <th>Email</th>
            <th>Direccion</th>
            <th>Codigo Cliente</th>
            <th>Borrar</th>
        </tr>
        <tr>
            <th colspan="2" style="text-align: center;"><a href="#"  data-toggle="modal" data-target="#myModal" onclick="return adicionar();"><i class="fa fa-plus-square" style="font-size:24px;color:green"></i> Adicionar </a></th>
            <th colspan="2">
            <button onclick="cargar_reporte();"><i class="fa fa-file-pdf-o" style="font-size:24px;color:red"></i> Reporte </button>
            </th>
            <th colspan="3"></th>
        </tr>
    </tfoot>
</table>

<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 id="subtitulo_modal" class="modal-title">Modal Heading</h4>
        <span onclick="$('#myModal').modal(&quot;hide&quot;);" class="close text-muted" title="Cerrar">X</span>
      </div>
      
      <!-- Modal body -->
      <div id="body_modal" class="modal-body">

         <form action="/action_page.php">
          <div class="form-group">
            <label for="id_menu">ID:</label>
            <input type="text" class="form-control" id="id_menu">
          </div>
          <div class="form-group">
            <label for="nombre_cliente">nombre_cliente:</label>
            <input type="text" class="form-control" id="nombre_cliente">
          </div>
          <div class="form-group">
            <label for="cc">cc:</label>
            <input type="text" class="form-control" id="cc">
          </div>
          <div class="form-group">
            <label for="email">email:</label>
            <input type="text" class="form-control" id="email">
          </div>
          <div class="form-group">
            <label for="direccion">direccion:</label>
            <input type="text" class="form-control" id="direccion">
          </div>
          <div class="form-group">
            <label for="cod_cliente">cod_cliente:</label>
            <input type="text" class="form-control" id="cod_cliente">
          </div>  
          <button id="boton" type="submit" class="btn btn-primary" onclick="return grabar();">Grabar</button>
          <input type="hidden" id="crud" value="">
          <input type="hidden" name="row_crud" id="row_crud" value="">
        </form>

      </div>
      
      <!-- Modal footer -->
      <div id="footer-modal" class="modal-footer">
        <span onclick="$('#myModal').modal(&quot;hide&quot;);" class="close text-muted" title="Cerrar">X</span>
      </div>
      
    </div>
  </div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">

 function cargar_reporte() {
    alert("Se dió click");
    location.href = "http://localhost/php-noche/TCPDF-master/examples/example_011.php";
 }

function editar(argument,obj) {
    //alert(obj);
    yy=obj.split("-");  // En PHP:   explode
    //alert(yy[1]);
    $("#row_crud").val(yy[1]);
    // $("#row_crud").val(obj);
    $("#subtitulo_modal").text("Edición de registro de Cliente");
    $("#id_cliente").val(argument);
    $("#boton").text("Grabar").removeClass("btn-danger btn-warning").addClass("btn-primary");
    $("#crud").val("u");

    $.post("trae_clientes.php",
    {
        id_cliente: argument
    },
    function(data, status) { // Callback
        objson = JSON.parse(data);
        // alert("Data: " + objson.nombre_cliente + "\nStatus: " + status);
        $("#id_cliente").val(objson.id_cliente).attr("readonly", true);
        $("#nombre_cliente").val(objson.nombre_cliente).attr("readonly", false);
        $("#cc").val(objson.cc).attr("readonly", false);
        $("#email").val(objson.email).attr("readonly", false);
        $("#direccion").val(objson.direccion).attr("readonly", false);
        $("#cod_cliente").val(objson.cod_cliente).attr("readonly", false);
    });
 }

function eliminar(argument,obj) {
    yy=obj.split("-");  // En PHP:   explode
    //alert(yy[1]);
    $("#row_crud").val(yy[1]);
    $("#subtitulo_modal").text("Eliminación de registro de Cliente");
    $("#id_cliente").val(argument);
    $("#boton").text("Eliminar").addClass("btn-danger").removeClass("btn-primary btn-warning");
    $("#crud").val("d");

    $.post("trae_clientes.php",
    {
        id_cliente: argument
    },
    function(data, status){ // Callback
        objson = JSON.parse(data);
        // alert("Data: " + objson.titulo + "\nStatus: " + status);
        $("#id_cliente").val(objson.id_cliente).attr("readonly", true);
        $("#nombre_cliente").val(objson.nombre_cliente).attr("readonly", true);
        $("#cc").val(objson.cc).attr("readonly", true);
        $("#email").val(objson.email).attr("readonly", true);
        $("#direccion").val(objson.direccion).attr("readonly", true);
        $("#cod_cliente").val(objson.cod_cliente).attr("readonly", true);
    });
 }

function adicionar() {
    $("#row_crud").val("");
    $("#subtitulo_modal").text("Creación de registro de Clientes");
    $("#boton").text("Crear").addClass("btn-warning").removeClass("btn-primary btn-danger");
    $("#crud").val("c");
    $("#id_cliente").val("").attr("disabled", true);

    $.post("trae_clientes.php",
    {
      
    },
    function(data, status){ // Callback
      objson = JSON.parse(data);
      // alert(data);
      $("#id_cliente").val("").attr("readonly", true);
      $("#nombre_cliente").val("").attr("readonly", false);
      $("#cc").val("").attr("readonly", false);
      $("#email").val("").attr("disabled", false);
      $("#direccion").val("").attr("readonly", false);
      $("#cod_cliente").val("").attr("readonly", false);      
    });
 }


<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="vendor/chart.js/Chart.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="//cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.min.js"><?php echo '</script'; ?>
>
<?php }
}
