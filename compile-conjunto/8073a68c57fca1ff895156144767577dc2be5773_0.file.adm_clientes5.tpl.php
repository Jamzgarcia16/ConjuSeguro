<?php
/* Smarty version 3.1.32, created on 2019-04-04 22:07:08
  from 'C:\xampp\tpl-conjunto\adm_clientes5.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ca663eca4e419_19709697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8073a68c57fca1ff895156144767577dc2be5773' => 
    array (
      0 => 'C:\\xampp\\tpl-conjunto\\adm_clientes5.tpl',
      1 => 1545264928,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca663eca4e419_19709697 (Smarty_Internal_Template $_smarty_tpl) {
?><div><h3>ADMINISTRACIÓN DE CLIENTES</h3></div>
<?php if ($_smarty_tpl->tpl_vars['crud']->value != '') {?> 	
	<div><h4><?php echo $_smarty_tpl->tpl_vars['subtitulo']->value;?>
</h4></div>
	<!-- HTML -->
	<form action="<?php echo $_smarty_tpl->tpl_vars['PROGRAMA']->value;?>
" enctype="multipart/form-data" method="post" onsubmit="return validar();">
	  <div class="form-group">
	    <label for="id_cliente">ID</label>
	    <input type="text" class="form-control" id="id_cliente" name="id_cliente" value="<?php echo $_smarty_tpl->tpl_vars['fila']->value['id_cliente'];?>
"<?php echo $_smarty_tpl->tpl_vars['at1']->value;?>
>
	  </div>
	  <div class="form-group">
	    <label for="nombre_cliente">Nombre_Cliente:</label>
	    <input type="text" class="form-control" id="nombre_cliente" name="nombre_cliente" value="<?php echo $_smarty_tpl->tpl_vars['fila']->value['nombre_cliente'];?>
"<?php echo $_smarty_tpl->tpl_vars['at2']->value;?>
>
	  </div>

	  <div class="form-group">
	    <label for="cc">CC ó NIT:</label>
	    <input type="text" class="form-control" id="cc" name="cc" value="<?php echo $_smarty_tpl->tpl_vars['fila']->value['cc'];?>
"<?php echo $_smarty_tpl->tpl_vars['at2']->value;?>
>
	  </div>

	  <div class="form-group">
	    <label for="email">Email:</label>
	    <input type="email" class="form-control" id="email" name="email" value=""<?php echo $_smarty_tpl->tpl_vars['at2']->value;?>
>
	  </div>

	  <div class="form-group">
	    <label for="direccion">}Direccion:</label>
	    <input type="text" class="form-control" id="direccion" name="direccion" value=""<?php echo $_smarty_tpl->tpl_vars['at2']->value;?>
>
	  </div>

	  <div class="form-group">
	    <label for="cod_cliente">}Codigo Cliente:</label>
	    <input type="text" class="form-control" id="cod_cliente" name="cod_cliente" value=""<?php echo $_smarty_tpl->tpl_vars['at2']->value;?>
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
      <tr style="text-align: center;">
      	<th>Editar</th>
        <th>ID</th>
        <th>Nombre_Cliente</th>	
        <th>Cedula ó NIT</th>
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
		<tr style="text-align: center;">
			<td><a href="<?php echo $_smarty_tpl->tpl_vars['PROGRAMA']->value;?>
?opcion=<?php echo $_smarty_tpl->tpl_vars['opcion']->value;?>
&crud=u&idu=<?php echo $_smarty_tpl->tpl_vars['fila']->value['id_cliente'];?>
" class="btn btn-primary" style="font-size:12px; color: white;" title="Editar"><i class="fa fa-edit"></i></a></td>
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
			<td><a href="<?php echo $_smarty_tpl->tpl_vars['PROGRAMA']->value;?>
?opcion=<?php echo $_smarty_tpl->tpl_vars['opcion']->value;?>
&crud=d&idu=<?php echo $_smarty_tpl->tpl_vars['fila']->value['id_cliente'];?>
" class="btn btn-danger" style=" font-size:12px; color: white;" title="Eliminar"><i class="fa fa-trash-o"></i></a></td>
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
