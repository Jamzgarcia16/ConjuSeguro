<?php
/* Smarty version 3.1.32, created on 2019-04-08 06:11:11
  from 'C:\xampp\tpl-conjunto\adm_aux_perfiles_menus6.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5caac9df733ac7_23435719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33b5eea22413586cdf197f457d28f828ce73765b' => 
    array (
      0 => 'C:\\xampp\\tpl-conjunto\\adm_aux_perfiles_menus6.tpl',
      1 => 1554696657,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5caac9df733ac7_23435719 (Smarty_Internal_Template $_smarty_tpl) {
?><div><h3>ADMINISTRACIÓN DE PERFILES</h3></div>
<table id="tabla1" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Editar</th>
            <th>ID</th>
            <th>Perfil_id</th>
            <th>Menu_id</th>
            <th>Borrar</th>
        </tr>
    </thead>
    <tbody>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabla_aux_perfiles_menus']->value, 'fila');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fila']->value) {
?>
  <tr>
    <td style="text-align: center;">
      <a href="#" title="Editar" data-toggle="modal" data-target="#myModal"  onclick="return editar(<?php echo $_smarty_tpl->tpl_vars['fila']->value['id_aux'];?>
,this.parentNode.parentNode.id);"><i class="fa fa-edit" style="font-size:24px; color:blue;"></i></a>
    </td>
    <td><?php echo $_smarty_tpl->tpl_vars['fila']->value['id_aux'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['fila']->value['perfil_id'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['fila']->value['menu_id'];?>
</td>
    <td style="text-align: center;">
      <a href="#" title="Eliminar" data-toggle="modal" data-target="#myModal" onclick="return eliminar(<?php echo $_smarty_tpl->tpl_vars['fila']->value['id_aux'];?>
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
            <th>Perfil_id</th>
            <th>Menu_id</th>
        </tr>
        <tr>
            <th colspan="2" style="text-align: center;"><a href="#"  data-toggle="modal" data-target="#myModal" onclick="return adicionar();"><i class="fa fa-plus-square" style="font-size:24px;color:green"></i> Adicionar </a></th>
            <th colspan="2">
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
            <label for="id_aux">ID:</label>
            <input type="text" class="form-control" id="id_aux">
          </div>
          <div class="form-group">
            <label for="perfil_id">Nombre_Perfil:</label>
            <input type="text" class="form-control" id="perfil_id">
          </div>
          <div class="form-group">
            <label for="menu_id">Nombre_Perfil:</label>
            <input type="text" class="form-control" id="menu_id">
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
 function editar(argument,obj) {
    //alert(obj);
    yy=obj.split("-");  // En PHP:   explode
    //alert(yy[1]);
    $("#row_crud").val(yy[1]);
    // $("#row_crud").val(obj);
    $("#subtitulo_modal").text("Edición de registro de Perfil");
    $("#id_aux").val(argument);
    $("#boton").text("Grabar").removeClass("btn-danger btn-warning").addClass("btn-primary");
    $("#crud").val("u");

    $.post("trae_aux_perfiles_menus.php",
    {
        id_aux: argument
    },
    function(data, status) { // Callback
        objson = JSON.parse(data);
        // alert("Data: " + objson.titulo + "\nStatus: " + status);
        $("#id_aux").val(objson.id_aux).attr("readonly", true);
        $("#perfil_id").val(objson.perfil_id).attr("readonly", false);
        $("#menu_id").val(objson.menu_id).attr("readonly", false);
        
    });

 }

 <?php echo '</script'; ?>
><?php }
}
