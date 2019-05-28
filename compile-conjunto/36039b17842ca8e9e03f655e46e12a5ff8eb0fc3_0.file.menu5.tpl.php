<?php
/* Smarty version 3.1.32, created on 2019-04-04 22:06:57
  from 'C:\xampp\tpl-conjunto\menu5.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ca663e1700dd5_08689826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36039b17842ca8e9e03f655e46e12a5ff8eb0fc3' => 
    array (
      0 => 'C:\\xampp\\tpl-conjunto\\menu5.tpl',
      1 => 1543363134,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca663e1700dd5_08689826 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabla_menus']->value, 'fila');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fila']->value) {
?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['PROGRAMA']->value;?>
?opcion=<?php echo $_smarty_tpl->tpl_vars['fila']->value['id_menu'];?>
"><?php echo $_smarty_tpl->tpl_vars['fila']->value['titulo'];?>
</a><br/>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
