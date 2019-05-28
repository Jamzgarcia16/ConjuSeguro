<?php
/* Smarty version 3.1.32, created on 2019-04-29 20:46:00
  from 'C:\xampp\tpl-conjunto\adm_apartamentos6.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cc746680f58c7_61971417',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3fb8673c98a5f531829c8d0a5443961dbee22ab7' => 
    array (
      0 => 'C:\\xampp\\tpl-conjunto\\adm_apartamentos6.tpl',
      1 => 1554695207,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cc746680f58c7_61971417 (Smarty_Internal_Template $_smarty_tpl) {
?><div><h3>ADMINISTRACIÓN DE APARTAMENTOS</h3></div>

<table id="tabla1" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Editar</th>
            <th>ID</th>
            <th>Nombre_Apartamento</th>
            <th>Descripcion</th>
            <th>Valor Administracion</th>
            <th>Borrar</th>
        </tr>
    </thead>
    <tbody>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabla_apartamentos']->value, 'fila');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fila']->value) {
?>
  <tr>
    <td style="text-align: center;">
      <a href="#" title="Editar" data-toggle="modal" data-target="#myModal"  onclick="return editar(<?php echo $_smarty_tpl->tpl_vars['fila']->value['id_apartamento'];?>
,this.parentNode.parentNode.id);"><i class="fa fa-edit" style="font-size:24px; color:blue;"></i></a>
    </td>
    <td><?php echo $_smarty_tpl->tpl_vars['fila']->value['id_apartamento'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['fila']->value['nombre_apartamento'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['fila']->value['descripcion'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['fila']->value['valor_adm'];?>
</td>
    <td style="text-align: center;">
      <a href="#" title="Eliminar" data-toggle="modal" data-target="#myModal" onclick="return eliminar(<?php echo $_smarty_tpl->tpl_vars['fila']->value['id_apartamento'];?>
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
            <th>Nombre_Apartamento</th>
            <th>Descripcion</th>
            <th>Valor Administracion</th>
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
            <label for="id_apartamento">ID:</label>
            <input type="text" class="form-control" id="id_apartamento">
          </div>
          <div class="form-group">
            <label for="nombre_apartamento">Nombre_Apartamento:</label>
            <input type="text" class="form-control" id="nombre_apartamento">
          </div>
                    <div class="form-group">
            <label for="descripcion">Descripcion:</label>
            <input type="text" class="form-control" id="descripcion">
          </div>
                    <div class="form-group">
            <label for="valor_adm">Valor Administracion:</label>
            <input type="text" class="form-control" id="valor_adm">
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
    $("#id_apartamento").val(argument);
    $("#boton").text("Grabar").removeClass("btn-danger btn-warning").addClass("btn-primary");
    $("#crud").val("u");

    $.post("trae_apartamento.php",
    {
        id_apartamento: argument
    },
    function(data, status) { // Callback
        objson = JSON.parse(data);
        // alert("Data: " + objson.titulo + "\nStatus: " + status);
        $("#id_apartamento").val(objson.id_apartamento).attr("readonly", true);
        $("#nombre_apartamento").val(objson.nombre_apartamento).attr("readonly", false);
        $("#descripcion").val(objson.descripcion).attr("readonly", false);
        $("#valor_adm").val(objson.valor_adm).attr("readonly", false);
        
    });

 }
 
 function cargar_reporte() {
    alert("Se dió click");
 }

 function eliminar(argument,obj) {
     yy=obj.split("-");  // En PHP:   explode
    //alert(yy[1]);
    $("#row_crud").val(yy[1]);
    $("#subtitulo_modal").text("Eliminación de registro de Perfil");
    $("#id_apartamento").val(argument);
    $("#boton").text("Eliminar").addClass("btn-danger").removeClass("btn-primary btn-warning");
    $("#crud").val("d");

    $.post("trae_apartamento.php",
    {
        id_apartamento: argument
    },
    function(data, status){ // Callback
        objson = JSON.parse(data);
        // alert("Data: " + objson.titulo + "\nStatus: " + status);
        $("#id_apartamento").val(objson.id_apartamento).attr("readonly", true);
        $("#nombre_apartamento").val(objson.nombre_apartamento).attr("readonly", true);
        $("#descripcion").val(objson.descripcion).attr("readonly", true);
        $("#valor_adm").val(objson.valor_adm).attr("readonly", true);
    });
    
 }

  function adicionar(argument,obj) {
    $("#row_crud").val("");
    $("#subtitulo_modal").text("Creación de registro de Perfil");
    $("#boton").text("Crear").addClass("btn-warning").removeClass("btn-primary btn-danger");
    $("#crud").val("c");
    $("#id_apartamento").val("").attr("disabled", true);

  $.post("trae_apartamento.php",
    {
      
    },
    function(data, status){ // Callback
      objson = JSON.parse(data);
      alert(data);
      $("#id_apartamento").val("").attr("readonly", true);
      $("#nombre_apartamento").val("").attr("readonly", false);
      $("#descripcion").val("").attr("readonly", false);
      $("#valor_adm").val("").attr("readonly", false);

    });
}
 function cargar_reporte() {
    alert("Se dió click");
 }

 function grabar() {

    //alert("Se dió click");
    $.post("graba_apartamento.php",
    {
        crud: $("#crud").val(),
        id_apartamento: $("#id_apartamento").val(),
        nombre_apartamento: $("#nombre_apartamento").val(),
        descripcion: $("#descripcion").val(),
        valor_adm: $("#valor_adm").val()
    },
    function(data, status) { // Callback
        // objson = JSON.parse(data);
        // alert("Data: " + data + "\nStatus: " + status);
        var t = $('#tabla1').DataTable();
        //console.log(t);
        //t.on( 'draw', function () {
        //    console.log( 'Redraw occurred at: '+new Date().getTime() );
        //} );

        switch ($("#crud").val()) {
          case 'u': // Update
            t.row($("#row_crud").val()).data(new Array(
            '<a href="#" title="Editar" data-toggle="modal" data-target="#myModal" onclick="return editar('+$("#id_apartamento").val()+',this.parentNode.parentNode.id);"><i class="fa fa-edit" style="font-size:24px;color:blue;"></i></a>',
            $("#id_apartamento").val(),
            $("#nombre_apartamento").val(),
            $("#descripcion").val(),
            $("#valor_adm").val(),
            '<a href="#" data-toggle="modal" data-target="#myModal" onclick="return eliminar('+$("#id_apartamento").val()+',this.parentNode.parentNode.id);"><i class="fa fa-trash-o" style="font-size:24px;color:red;"></i></a>')).draw( false );
            //t.row($("#row_crud").val()).draw();
            alert("Se Actualiza registro exitosamente");
            break;
          case 'd': // Delete
            if ($("#row_crud").val()!="") {
              t.row($("#row_crud").val()).remove().draw( false );
              alert("Se Elimina registro exitosamente");
            }
            break;
          case 'c': // Create
            objson = JSON.parse(data);
            var uu = t.row.add( [
              '<a href="#" data-toggle="modal" data-target="#myModal" onclick="return editar('+objson.id_apartamento+',this.parentNode.parentNode.id);"><i class="fa fa-edit" style="font-size:24px;color:blue;"></i></a>',
              objson.id_apartamento,
              $("#nombre_apartamento").val(),
              $("#descripcion").val(),
              $("#valor_adm").val(),
              '<a href="#" data-toggle="modal" data-target="#myModal" onclick="return eliminar('+objson.id_apartamento+',this.parentNode.parentNode.id);"><i class="fa fa-trash-o" style="font-size:24px;color:red;"></i></a>'
            ] ).draw( false );
              alert("Se Grabo registro exitosamente");
            // console.log( y.rows().data() );
            break;
        }

        //alert("Data: " + data);
        $('#myModal').modal("hide");
        return(false);
    });
    return(false);
 }
<?php echo '</script'; ?>
><?php }
}
