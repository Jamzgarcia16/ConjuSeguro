<?php
/* Smarty version 3.1.32, created on 2019-04-04 22:07:10
  from 'C:\xampp\tpl-conjunto\adm_banners5.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ca663ee897342_37032610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '495d056fd69873cabbdd3dcbc426d8b13b67ca57' => 
    array (
      0 => 'C:\\xampp\\tpl-conjunto\\adm_banners5.tpl',
      1 => 1546918186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca663ee897342_37032610 (Smarty_Internal_Template $_smarty_tpl) {
?><div><h3>ADMINISTRACIÓN DE BANNERS</h3></div>
<?php if ($_smarty_tpl->tpl_vars['crud']->value != '') {?> 	
	<div><h4><?php echo $_smarty_tpl->tpl_vars['subtitulo']->value;?>
</h4></div>
	<!-- HTML -->
	<form action="<?php echo $_smarty_tpl->tpl_vars['PROGRAMA']->value;?>
" enctype="multipart/form-data" method="post">
	  <div class="form-group">
	    <label for="id">ID</label>
	    <input type="text" class="form-control" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['fila']->value['id'];?>
"<?php echo $_smarty_tpl->tpl_vars['at1']->value;?>
>
	  </div>
	  <div class="form-group">
	    <label for="descripcion">Descripcion:</label>
	    <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo $_smarty_tpl->tpl_vars['fila']->value['descripcion'];?>
"<?php echo $_smarty_tpl->tpl_vars['at2']->value;?>
>
	  </div>

	  <div class="form-group">
	    <label for="objeto">Objeto:</label>
	    <input type="text" class="form-control" id="objeto" name="objeto" value="<?php echo $_smarty_tpl->tpl_vars['fila']->value['objeto'];?>
"<?php echo $_smarty_tpl->tpl_vars['at2']->value;?>
>
	  </div>

	  <div class="form-group">
	    <label for="impresiones">Impresiones:</label>
	    <input type="text" class="form-control" id="impresiones" name="impresiones" value="<?php echo $_smarty_tpl->tpl_vars['fila']->value['impresiones'];?>
"<?php echo $_smarty_tpl->tpl_vars['at1']->value;?>
>
	  </div>

	  <div class="form-group">
	    <label for="accesos">Accesos:</label>
	    <input type="text" class="form-control" id="accesos" name="accesos" value="<?php echo $_smarty_tpl->tpl_vars['fila']->value['accesos'];?>
"<?php echo $_smarty_tpl->tpl_vars['at1']->value;?>
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
        <th>Descripcion</th>
        <th>Objeto</th>
        <th>Impresiones</th>
        <th>Accesos</th>
        <th>Borrar</th>
      </tr>
    </thead>
    <tbody>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabla_banners']->value, 'fila');
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
			<td><?php echo $_smarty_tpl->tpl_vars['fila']->value['descripcion'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['fila']->value['objeto'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['fila']->value['impresiones'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['fila']->value['accesos'];?>
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
