<?php
/* Smarty version 3.1.33, created on 2024-12-14 13:14:36
  from 'C:\xampp\htdocs\prestashop\admin\themes\default\template\controllers\backup\helpers\view\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_675d76acb90b90_75144130',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51c13d8ed9ef0114a16de7715b3adc75b4d58daf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin\\themes\\default\\template\\controllers\\backup\\helpers\\view\\view.tpl',
      1 => 1734178038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675d76acb90b90_75144130 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1932479396675d76acb8aaf0_97089320', "override_tpl");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/view/view.tpl");
}
/* {block "override_tpl"} */
class Block_1932479396675d76acb8aaf0_97089320 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_tpl' => 
  array (
    0 => 'Block_1932479396675d76acb8aaf0_97089320',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if (!isset($_smarty_tpl->tpl_vars['errors']->value) || count($_smarty_tpl->tpl_vars['errors']->value) == 0) {?>
	<div class="panel">
		<h3><i class="icon-download"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
</h3>
		<div class="alert alert-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Beginning the download ...','d'=>'Admin.Advparameters.Notification'),$_smarty_tpl ) );?>
</div>
		<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Backup files should automatically start downloading.','d'=>'Admin.Advparameters.Notification'),$_smarty_tpl ) );?>
</p>
		<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If not,[1][2] please click here[/1]!','sprintf'=>array('[1]'=>'<a href="{$url_backup}" class="btn btn-default">','[/1]'=>'</a>','[2]'=>'<i class="icon-download"></i>'),'d'=>'Admin.Advparameters.Notification'),$_smarty_tpl ) );?>
</p>
		<iframe  style="width:0px; height:0px; overflow:hidden; border:none;" src="<?php echo $_smarty_tpl->tpl_vars['url_backup']->value;?>
"></iframe>
	</div>
	<?php }
}
}
/* {/block "override_tpl"} */
}
