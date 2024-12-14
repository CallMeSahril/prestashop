<?php
/* Smarty version 3.1.33, created on 2024-12-14 13:14:38
  from 'C:\xampp\htdocs\prestashop\admin\themes\default\template\controllers\payment\helpers\view\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_675d76aec9c470_39906178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca5134debd9eb7d2671b5403fd5690e8dd57ee55' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin\\themes\\default\\template\\controllers\\payment\\helpers\\view\\view.tpl',
      1 => 1734178037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675d76aec9c470_39906178 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1638188091675d76aec98bb1_74480048', "override_tpl");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/view/view.tpl");
}
/* {block "override_tpl"} */
class Block_1638188091675d76aec98bb1_74480048 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_tpl' => 
  array (
    0 => 'Block_1638188091675d76aec98bb1_74480048',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if (!$_smarty_tpl->tpl_vars['shop_context']->value) {?>
		<div class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You have more than one shop and must select one to configure payment.','d'=>'Admin.Payment.Notification'),$_smarty_tpl ) );?>
</div>
	<?php } else { ?>
		<?php if (isset($_smarty_tpl->tpl_vars['modules_list']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['modules_list']->value;?>

		<?php }?>
	<?php }
}
}
/* {/block "override_tpl"} */
}
