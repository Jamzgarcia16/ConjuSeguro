<?php
/* Smarty version 3.1.32, created on 2019-04-04 22:07:13
  from 'C:\xampp\tpl-conjunto\adm_propietario5.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ca663f1a6bf96_93511097',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aacfb31f7575898b8009da763d8ccfb7f8e49cff' => 
    array (
      0 => 'C:\\xampp\\tpl-conjunto\\adm_propietario5.tpl',
      1 => 1545259916,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca663f1a6bf96_93511097 (Smarty_Internal_Template $_smarty_tpl) {
?><div><h3>ADMINISTRACIÓN DE PROPIETARIOS</h3></div>
<?php if ($_smarty_tpl->tpl_vars['crud']->value != '') {?> 	

	<div><h4><?php echo $_smarty_tpl->tpl_vars['subtitulo']->value;?>
</h4></div>
	<!-- HTML -->
	<form action="<?php echo $_smarty_tpl->tpl_vars['PROGRAMA']->value;?>
" enctype="multipart/form-data" method="post">
	  <div class="form-group">
	    <label for="id_propietario">ID</label>
	    <input type="text" class="form-control" id="id_propietario" name="id_propietario" value="<?php echo $_smarty_tpl->tpl_vars['fila']->value['id_propietario'];?>
"<?php echo $_smarty_tpl->tpl_vars['at1']->value;?>
>
	  </div>
	  <div class="form-group">
	    <label for="nombre_propietario">Nombre Propietario:</label>
	    <input type="text" class="form-control" id="nombre_propietario" name="nombre_propietario" value="<?php echo $_smarty_tpl->tpl_vars['fila']->value['nombre_propietario'];?>
"<?php echo $_smarty_tpl->tpl_vars['at2']->value;?>
>
	  </div>

	  <div class="form-group">
	    <label for="identificacion">Identificacion:</label>
	    <input type="text" class="form-control" id="identificacion" name="identificacion" value="<?php echo $_smarty_tpl->tpl_vars['fila']->value['identificacion'];?>
"<?php echo $_smarty_tpl->tpl_vars['at2']->value;?>
>
	  </div>

	  <div class="form-group">
	    <label for="celular">Celular</label>
	    <input type="text" class="form-control" id="celular" name="celular" value="<?php echo $_smarty_tpl->tpl_vars['fila']->value['celular'];?>
"<?php echo $_smarty_tpl->tpl_vars['at2']->value;?>
>
	  </div>

	  <div class="form-group">
	    <label for="email">Email</label>
	    <input type="text" class="form-control" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['fila']->value['email'];?>
"<?php echo $_smarty_tpl->tpl_vars['at2']->value;?>
>
	  </div>	  

	  <div class="form-group">
	    <label for="fecha_nacimiento">Fecha_Nacimiento</label>
	    <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="<?php echo $_smarty_tpl->tpl_vars['fila']->value['fecha_nacimiento'];?>
"<?php echo $_smarty_tpl->tpl_vars['at2']->value;?>
>
	  </div>

	  <div class="form-group">
	    <label for="foto">Foto:</label>
	    <div>Archivo: <?php echo $_smarty_tpl->tpl_vars['fila']->value['foto'];?>
</div>
	    <div><img src="<?php echo $_smarty_tpl->tpl_vars['fila']->value['foto'];?>
" alt="foto"></div>
	    <input type="file" class="form-control" id="foto" name="foto"<?php echo $_smarty_tpl->tpl_vars['at2']->value;?>
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
        <th>Nombre Propietario</th>
        <th>Identificacion</th>
        <th>celular</th>
        <th>Email</th>
        <th>Fecha Nacimiento</th>
        <th>Foto Propieatario</th>
        <th>Borrar</th>
      </tr>
    </thead>
    <tbody>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabla_propietarios']->value, 'fila');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fila']->value) {
?>
		<tr>
			<td><a href="<?php echo $_smarty_tpl->tpl_vars['PROGRAMA']->value;?>
?opcion=<?php echo $_smarty_tpl->tpl_vars['opcion']->value;?>
&crud=u&idu=<?php echo $_smarty_tpl->tpl_vars['fila']->value['id_propietario'];?>
" class="btn btn-primary" style="font-size:12px; color: white;" title="Editar"><i class="fa fa-edit"></i></a></td>
			<td><?php echo $_smarty_tpl->tpl_vars['fila']->value['id_propietario'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['fila']->value['identificacion'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['fila']->value['nombre_propietario'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['fila']->value['celular'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['fila']->value['email'];?>
</td>			
			<td><?php echo $_smarty_tpl->tpl_vars['fila']->value['fecha_nacimiento'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['fila']->value['foto'];?>
</td>
			<td><a href="<?php echo $_smarty_tpl->tpl_vars['PROGRAMA']->value;?>
?opcion=<?php echo $_smarty_tpl->tpl_vars['opcion']->value;?>
&crud=d&idu=<?php echo $_smarty_tpl->tpl_vars['fila']->value['id_propietario'];?>
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
