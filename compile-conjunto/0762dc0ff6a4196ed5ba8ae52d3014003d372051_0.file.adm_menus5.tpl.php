<?php
/* Smarty version 3.1.32, created on 2019-04-04 22:07:05
  from 'C:\xampp\tpl-conjunto\adm_menus5.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ca663e9b91ab1_88121761',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0762dc0ff6a4196ed5ba8ae52d3014003d372051' => 
    array (
      0 => 'C:\\xampp\\tpl-conjunto\\adm_menus5.tpl',
      1 => 1545185858,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca663e9b91ab1_88121761 (Smarty_Internal_Template $_smarty_tpl) {
?><div><h3>ADMINISTRACIÓN DE MENÚS</h3></div>
<?php if ($_smarty_tpl->tpl_vars['crud']->value != '') {?> 	

	<div><h4><?php echo $_smarty_tpl->tpl_vars['subtitulo']->value;?>
</h4></div>
	<!-- HTML -->
	<form action="<?php echo $_smarty_tpl->tpl_vars['PROGRAMA']->value;?>
" enctype="multipart/form-data" method="post">
	  <div class="form-group">
	    <label for="id_menu">ID</label>
	    <input type="text" class="form-control" id="id_menu" name="id_menu" value="<?php echo $_smarty_tpl->tpl_vars['fila']->value['id_menu'];?>
"<?php echo $_smarty_tpl->tpl_vars['at1']->value;?>
>
	  </div>
	  <div class="form-group">
	    <label for="titulo">Titulo:</label>
	    <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $_smarty_tpl->tpl_vars['fila']->value['titulo'];?>
"<?php echo $_smarty_tpl->tpl_vars['at2']->value;?>
>
	  </div>

	  <div class="form-group">
	    <label for="modulo">Modulo:</label>
	    <input type="text" class="form-control" id="modulo" name="modulo" value="<?php echo $_smarty_tpl->tpl_vars['fila']->value['modulo'];?>
"<?php echo $_smarty_tpl->tpl_vars['at3']->value;?>
>
	  </div>

	  <div class="form-group">
	    <label for="icono">Icono</label>
	    <input type="text" class="form-control" id="icono" name="icono" value="<?php echo $_smarty_tpl->tpl_vars['fila']->value['icono'];?>
"<?php echo $_smarty_tpl->tpl_vars['at3']->value;?>
>
	  </div>

	  <div class="form-group">
	    <label for="url">URL</label>
	    <input type="text" class="form-control" id="url" name="url" value="<?php echo $_smarty_tpl->tpl_vars['fila']->value['url'];?>
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
        <th>Titulo</th>
        <th>Modulo</th>
        <th>Icono</th>
        <th>URL</th>
        <th>Borrar</th>
      </tr>
    </thead>
    <tbody>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabla_menus']->value, 'fila');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fila']->value) {
?>
		<tr>
			<td><a href="<?php echo $_smarty_tpl->tpl_vars['PROGRAMA']->value;?>
?opcion=<?php echo $_smarty_tpl->tpl_vars['opcion']->value;?>
&crud=u&idu=<?php echo $_smarty_tpl->tpl_vars['fila']->value['id_menu'];?>
" class="btn btn-primary" style="font-size:12px; color: white;" title="Editar"><i class="fa fa-edit"></i></a></td>
			<td><?php echo $_smarty_tpl->tpl_vars['fila']->value['id_menu'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['fila']->value['titulo'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['fila']->value['modulo'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['fila']->value['icono'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['fila']->value['url'];?>
</td>
			<td><a href="<?php echo $_smarty_tpl->tpl_vars['PROGRAMA']->value;?>
?opcion=<?php echo $_smarty_tpl->tpl_vars['opcion']->value;?>
&crud=d&idu=<?php echo $_smarty_tpl->tpl_vars['fila']->value['id_menu'];?>
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
