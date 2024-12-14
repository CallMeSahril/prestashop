<?php
/* Smarty version 3.1.33, created on 2024-12-14 13:14:45
  from 'C:\xampp\htdocs\prestashop\admin\themes\default\template\helpers\tree\tree_toolbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_675d76b5d1c975_22185817',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51f4b68f7217be2240d94596b45ee74d57954355' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin\\themes\\default\\template\\helpers\\tree\\tree_toolbar.tpl',
      1 => 1734178038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675d76b5d1c975_22185817 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['actions']->value, 'action');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['action']->value) {
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>
</div>
<?php }
}
