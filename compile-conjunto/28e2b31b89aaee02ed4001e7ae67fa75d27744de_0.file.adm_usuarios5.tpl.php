<?php
/* Smarty version 3.1.32, created on 2019-04-04 22:07:03
  from 'C:\xampp\tpl-conjunto\adm_usuarios5.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ca663e79f3982_69835689',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28e2b31b89aaee02ed4001e7ae67fa75d27744de' => 
    array (
      0 => 'C:\\xampp\\tpl-conjunto\\adm_usuarios5.tpl',
      1 => 1545093530,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca663e79f3982_69835689 (Smarty_Internal_Template $_smarty_tpl) {
?><div><h3>ADMINISTRACIÓN DE USUARIOS</h3></div>
<?php if ($_smarty_tpl->tpl_vars['crud']->value != '') {?> 		<?php echo '<script'; ?>
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
	<div><h4><?php echo $_smarty_tpl->tpl_vars['subtitulo']->value;?>
</h4></div>
	<!-- HTML -->
	<form action="<?php echo $_smarty_tpl->tpl_vars['PROGRAMA']->value;?>
" enctype="multipart/form-data" method="post" onsubmit="return validar();">
	  <div class="form-group">
	    <label for="id">ID</label>
	    <input type="text" class="form-control" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['fila']->value['id'];?>
"<?php echo $_smarty_tpl->tpl_vars['at1']->value;?>
>
	  </div>
	  <div class="form-group">
	    <label for="nombre">Nombre:</label>
	    <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['fila']->value['nombre'];?>
"<?php echo $_smarty_tpl->tpl_vars['at2']->value;?>
>
	  </div>

	  <div class="form-group">
	    <label for="cuenta">Cuenta:</label>
	    <input type="email" class="form-control" id="cuenta" name="cuenta" value="<?php echo $_smarty_tpl->tpl_vars['fila']->value['cuenta'];?>
"<?php echo $_smarty_tpl->tpl_vars['at2']->value;?>
>
	  </div>

	  <div class="form-group">
	    <label for="clave1">Contraseña:</label>
	    <input type="password" class="form-control" id="clave1" name="clave1" value=""<?php echo $_smarty_tpl->tpl_vars['at2']->value;?>
>
	  </div>

	  <div class="form-group">
	    <label for="clave2">Confirmar Contraseña:</label>
	    <input type="password" class="form-control" id="clave2" name="clave2" value=""<?php echo $_smarty_tpl->tpl_vars['at2']->value;?>
>
	  </div>

	  <div class="form-group">
	    <label for="foto">Foto:</label>
	    <div>Archivo: <?php echo $_smarty_tpl->tpl_vars['fila']->value['foto'];?>
</div>
	    <div><img src="<?php echo $_smarty_tpl->tpl_vars['fila']->value['foto'];?>
" alt="foto"></div>
	    <input type="file" class="form-control" id="foto" name="foto"<?php echo $_smarty_tpl->tpl_vars['at3']->value;?>
>
	  </div>

	  <div class="form-group">
	    <label for="perfil_id">Perfil:</label>
	    <select class="form-control" id="perfil_id" name="perfil_id"<?php echo $_smarty_tpl->tpl_vars['at3']->value;?>
>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabla_perfiles']->value, 'fila_perfil');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fila_perfil']->value) {
?>
			<?php if ($_smarty_tpl->tpl_vars['fila']->value['perfil_id'] == $_smarty_tpl->tpl_vars['fila_perfil']->value['id_perfil']) {?>
				<?php $_smarty_tpl->_assignInScope('sw', ' selected');?>
			<?php } else { ?>
				<?php $_smarty_tpl->_assignInScope('sw', '');?>
			<?php }?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['fila_perfil']->value['id_perfil'];?>
"<?php echo $_smarty_tpl->tpl_vars['sw']->value;?>
><?php echo $_smarty_tpl->tpl_vars['fila_perfil']->value['nombre_perfil'];?>
</option>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	    </select>
	  </div>

	  <div class="form-group">
	    <label for="estado">Estado:</label>
	    <select class="form-control" id="estado" name="estado"<?php echo $_smarty_tpl->tpl_vars['at3']->value;?>
>
	    	<?php if ($_smarty_tpl->tpl_vars['fila']->value['estado'] == 1) {?>
				<option value="1" selected>Activo</option>
				<option value="0">Inactivo</option>
	    	<?php } else { ?>
				<option value="1">Activo</option>
				<option value="0" selected>Inactivo</option>
	    	<?php }?>
	    </select>
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
        <th>Nombre</th>	
        <th>Cuenta</th>
        <th>Foto</th>
        <th>Perfil</th>
        <th>Estado</th>
      	<th>Borrar</th>
      </tr>
    </thead>
    <tbody>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabla_usuarios']->value, 'fila');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fila']->value) {
?>
		<tr>
			<td><a href="<?php echo $_smarty_tpl->tpl_vars['PROGRAMA']->value;?>
?opcion=<?php echo $_smarty_tpl->tpl_vars['opcion']->value;?>
&crud=u&idu=<?php echo $_smarty_tpl->tpl_vars['fila']->value['id'];?>
" class="btn btn-primary" style="font-size:12px; color: white;" title="Editar"><i class="fa fa-edit"></i></a></td>
			<td><?php echo $_smarty_tpl->tpl_vars['fila']->value['id'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['fila']->value['nombre'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['fila']->value['cuenta'];?>
</td>
			<td><img src="<?php echo $_smarty_tpl->tpl_vars['fila']->value['foto'];?>
" alt="Foto" height="100"/></td>
			<td><?php echo $_smarty_tpl->tpl_vars['fila']->value['nombre_perfil'];?>
</td>
			<td>
				<?php if ($_smarty_tpl->tpl_vars['fila']->value['estado'] == 1) {?>
					<i class="fa fa-check-circle-o" style="font-size:24px; color: green;"></i>
				<?php } else { ?>
					<i class="fa fa-ban" style="font-size:24px; color: red;"></i>
				<?php }?>
			</td>
			<td><a href="<?php echo $_smarty_tpl->tpl_vars['PROGRAMA']->value;?>
?opcion=<?php echo $_smarty_tpl->tpl_vars['opcion']->value;?>
&crud=d&idu=<?php echo $_smarty_tpl->tpl_vars['fila']->value['id'];?>
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
