<?php
/* Smarty version 3.1.33, created on 2019-07-25 00:36:29
  from '/home/george/simpleMVC/app/Views/index/default.view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d38cf5dacec51_21768725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2abc54d3f8fb8d1fc9d0f389f4dc854f6c6fc0e5' => 
    array (
      0 => '/home/george/simpleMVC/app/Views/index/default.view.tpl',
      1 => 1564003715,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d38cf5dacec51_21768725 (Smarty_Internal_Template $_smarty_tpl) {
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
