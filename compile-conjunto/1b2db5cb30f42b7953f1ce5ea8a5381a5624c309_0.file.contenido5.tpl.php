<?php
/* Smarty version 3.1.32, created on 2019-04-04 22:06:57
  from 'C:\xampp\tpl-conjunto\contenido5.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ca663e173dcd4_51347200',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b2db5cb30f42b7953f1ce5ea8a5381a5624c309' => 
    array (
      0 => 'C:\\xampp\\tpl-conjunto\\contenido5.tpl',
      1 => 1545178912,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca663e173dcd4_51347200 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['opcion']->value != '') {?>
		<?php if ($_smarty_tpl->tpl_vars['modulo']->value != '') {?>
		<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['modulo']->value).((string)$_smarty_tpl->tpl_vars['VERSION']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
	<?php } else { ?>
		<img src="imagenes/perro_bravo.jpg" width="40%">
	<?php }
} else { ?>
		<!--
		<div id="banner">
			<img class="slider" id="animacion-a" src="img/Conjunto.jpg" alt="">
			<img class="slider" id="animacion-b" src="img/Conjunto2.jpg" alt="">
			<img class="slider" id="animacion-c" src="img/Conjunto3.jpg" alt="">
		</div> -->
	 <img src="imagenes/fondo.jpg" width="70%"> 
<?php }
}
}
