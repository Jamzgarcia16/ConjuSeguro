<?php
/* Smarty version 3.1.32, created on 2019-04-04 22:07:16
  from 'C:\xampp\tpl-conjunto\adm_apartamentos5.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ca663f4c40bf6_47630065',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bebc1fcbce2086e18664d95991d2587f8b4fac51' => 
    array (
      0 => 'C:\\xampp\\tpl-conjunto\\adm_apartamentos5.tpl',
      1 => 1545188930,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca663f4c40bf6_47630065 (Smarty_Internal_Template $_smarty_tpl) {
?><div><h3>ADMINISTRACIÓN DE APARTAMENTOS</h3></div>
<?php if ($_smarty_tpl->tpl_vars['crud']->value != '') {?> 	<!-- 
	<?php echo '<script'; ?>
 type="text/javascript" src="js/rollups/hmac-sha3.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/components/sha3.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">
		function validar() {
			// DOM: Document Objects Model
			// $("#clave1").val( CryptoJS.SHA3( $("#clave1").val() ) ); // JQuery

			// JavaScript
			if (document.forms[0].nombre.value == "") {
				alert("Se requiere el nombre");
				document.forms[0].nombre.focus();
				return false;
			}
			if (document.forms[0].cuenta.value == "") {
				alert("Se requiere la cuenta");
				document.forms[0].cuenta.focus();
				return false;
			}

			if (document.forms[0].clave1.value == document.forms[0].clave2.value) {
				if (document.forms[0].clave1.value != "") {
					document.forms[0].clave1.value = CryptoJS.SHA3( document.forms[0].clave1.value );
					document.forms[0].clave2.value = document.forms[0].clave1.value;
				}
			} else {
				alert("Error en confirmación de la contraseña");
				document.forms[0].clave1.value = "";
				document.forms[0].clave2.value = "";
				document.forms[0].clave1.focus();
				return false;
			}
		}
	<?php echo '</script'; ?>
>

-->

	<div><h4><?php echo $_smarty_tpl->tpl_vars['subtitulo']->value;?>
</h4></div>
	<!-- HTML -->
	<form action="<?php echo $_smarty_tpl->tpl_vars['PROGRAMA']->value;?>
" enctype="multipart/form-data" method="post">
	  <div class="form-group">
	    <label for="id_apartamento">ID</label>
	    <input type="text" class="form-control" id="id_apartamento" name="id_apartamento" value="<?php echo $_smarty_tpl->tpl_vars['fila']->value['id_apartamento'];?>
"<?php echo $_smarty_tpl->tpl_vars['at1']->value;?>
>
	  </div>
	  <div class="form-group">
	    <label for="nombre_apartamento">Nombre_Apartamento:</label>
	    <input type="text" class="form-control" id="nombre_apartamento" name="nombre_apartamento" value="<?php echo $_smarty_tpl->tpl_vars['fila']->value['nombre_apartamento'];?>
"<?php echo $_smarty_tpl->tpl_vars['at2']->value;?>
>
	  </div>

	  <div class="form-group">
	    <label for="descripcion">Descripcion:</label>
	    <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo $_smarty_tpl->tpl_vars['fila']->value['descripcion'];?>
"<?php echo $_smarty_tpl->tpl_vars['at3']->value;?>
>
	  </div>

	  <div class="form-group">
	    <label for="valor_adm">Valor Administracion:</label>
	    <input type="text" class="form-control" id="valor_adm" name="valor_adm" value="<?php echo $_smarty_tpl->tpl_vars['fila']->value['valor_adm'];?>
"<?php echo $_smarty_tpl->tpl_vars['at3']->value;?>
>
	  </div>


	  <button type="submit" name="aceptar" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['boton']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['boton']->value;?>
</button>
	  <button type="reset" class="btn btn-primary">Reestablecer</button>
	  <button type="submit" name="aceptar" class="btn btn-primary" value="Regresar">Regresar</button>
	  
	  <input type="hidden" name="opcion" value="<?php echo $_smarty_tpl->tpl_vars['opcion']->value;?>
">
	  <input type="hidden" name="operacion" value="<?php echo $_smarty_tpl->tpl_vars['crud']->value;?>
">
	</form>

<?php } else { ?> 	<!-- Comentario -->
  <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

  <table class="table table-hover">
    <thead>
      <tr>
      	<th>Editar</th>
        <th>ID</th>
        <th>Nombre_Apartamento</th>
        <th>Descripcion</th>
        <th>Valor_Adm</th>
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
			<td><a href="<?php echo $_smarty_tpl->tpl_vars['PROGRAMA']->value;?>
?opcion=<?php echo $_smarty_tpl->tpl_vars['opcion']->value;?>
&crud=u&idu=<?php echo $_smarty_tpl->tpl_vars['fila']->value['id_apartamento'];?>
" class="btn btn-primary" style="font-size:12px; color: white;" title="Editar"><i class="fa fa-edit"></i></a></td>
			<td><?php echo $_smarty_tpl->tpl_vars['fila']->value['id_apartamento'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['fila']->value['nombre_apartamento'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['fila']->value['descripcion'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['fila']->value['valor_adm'];?>
</td>
			<td><a href="<?php echo $_smarty_tpl->tpl_vars['PROGRAMA']->value;?>
?opcion=<?php echo $_smarty_tpl->tpl_vars['opcion']->value;?>
&crud=d&idu=<?php echo $_smarty_tpl->tpl_vars['fila']->value['id_apartamento'];?>
" class="btn btn-danger" style="font-size:12px; color: white;" title="Eliminar"><i class="fa fa-trash-o"></i></a></td>
		</tr>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<tr>
		<td colspan="7">
			<a href="<?php echo $_smarty_tpl->tpl_vars['PROGRAMA']->value;?>
?opcion=<?php echo $_smarty_tpl->tpl_vars['opcion']->value;?>
&crud=c" class="btn btn-warning" style="font-size:12px;" title="Adicionar"><i class="fa fa-plus"></i> Adicionar</a>
		</td>
	</tr>
    </tbody>
  </table>
<?php }
}
}
