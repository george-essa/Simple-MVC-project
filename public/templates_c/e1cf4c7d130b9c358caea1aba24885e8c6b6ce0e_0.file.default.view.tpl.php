<?php
/* Smarty version 3.1.33, created on 2019-07-25 00:28:36
  from '/home/george/simpleMVC/app/smarty/Views/index/default.view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d38cd8413ab14_47738745',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1cf4c7d130b9c358caea1aba24885e8c6b6ce0e' => 
    array (
      0 => '/home/george/simpleMVC/app/smarty/Views/index/default.view.tpl',
      1 => 1564003715,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d38cd8413ab14_47738745 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>This is default action</h1>
<ul>
 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['default']->value, 'def');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['def']->value) {
?>
     <li><?php echo $_smarty_tpl->tpl_vars['def']->value;?>
</li>
 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php }
}
