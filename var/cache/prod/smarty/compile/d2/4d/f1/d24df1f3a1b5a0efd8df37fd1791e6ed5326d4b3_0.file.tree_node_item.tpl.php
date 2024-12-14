<?php
/* Smarty version 3.1.33, created on 2024-12-14 13:14:45
  from 'C:\xampp\htdocs\prestashop\admin\themes\default\template\helpers\tree\tree_node_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_675d76b515d7c1_04839710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd24df1f3a1b5a0efd8df37fd1791e6ed5326d4b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin\\themes\\default\\template\\helpers\\tree\\tree_node_item.tpl',
      1 => 1734178038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675d76b515d7c1_04839710 (Smarty_Internal_Template $_smarty_tpl) {
?>
<li class="tree-item">
	<span class="tree-item-name">
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li>
<?php }
}
