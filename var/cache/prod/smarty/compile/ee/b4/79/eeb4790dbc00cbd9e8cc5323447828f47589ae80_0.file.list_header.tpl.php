<?php
/* Smarty version 3.1.33, created on 2024-12-14 13:14:37
  from 'C:\xampp\htdocs\prestashop\admin\themes\default\template\controllers\logs\helpers\list\list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_675d76adb61881_24036190',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eeb4790dbc00cbd9e8cc5323447828f47589ae80' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin\\themes\\default\\template\\controllers\\logs\\helpers\\list\\list_header.tpl',
      1 => 1734178038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675d76adb61881_24036190 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1356365255675d76adb5d709_54731345', "override_header");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block "override_header"} */
class Block_1356365255675d76adb5d709_54731345 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_header' => 
  array (
    0 => 'Block_1356365255675d76adb5d709_54731345',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<div class="panel">
		<h3>
			<i class="icon-warning-sign"></i>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Severity levels','d'=>'Admin.Advparameters.Help'),$_smarty_tpl ) );?>

		</h3>
		<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Meaning of severity levels:'),$_smarty_tpl ) );?>
</p>
		<ol>
			<li><span class="badge badge-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Informative only','d'=>'Admin.Advparameters.Help'),$_smarty_tpl ) );?>
</span></li>
			<li><span class="badge badge-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Warning','d'=>'Admin.Advparameters.Help'),$_smarty_tpl ) );?>
</span></li>
			<li><span class="badge badge-danger"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Error','d'=>'Admin.Advparameters.Help'),$_smarty_tpl ) );?>
</span></li>
			<li><span class="badge badge-critical"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Major issue (crash)!','d'=>'Admin.Advparameters.Help'),$_smarty_tpl ) );?>
</span></li>
		</ol>
	</div>

<?php
}
}
/* {/block "override_header"} */
}
