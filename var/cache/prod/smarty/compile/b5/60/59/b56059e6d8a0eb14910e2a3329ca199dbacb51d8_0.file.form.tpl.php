<?php
/* Smarty version 3.1.33, created on 2024-12-14 13:14:37
  from 'C:\xampp\htdocs\prestashop\admin\themes\default\template\controllers\cms\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_675d76ad0eb561_79888126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b56059e6d8a0eb14910e2a3329ca199dbacb51d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin\\themes\\default\\template\\controllers\\cms\\helpers\\form\\form.tpl',
      1 => 1734178038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675d76ad0eb561_79888126 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_466143962675d76ad0de804_33560821', "input");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1539092598675d76ad0e44b9_98774611', "script");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_301727531675d76ad0e5a76_15010024', "leadin");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1312274304675d76ad0e7c60_20667359', "input");
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "input"} */
class Block_466143962675d76ad0de804_33560821 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_466143962675d76ad0de804_33560821',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == "link_rewrite") {?>
		<?php echo '<script'; ?>
 type="text/javascript">
		<?php if (isset($_smarty_tpl->tpl_vars['PS_ALLOW_ACCENTED_CHARS_URL']->value) && $_smarty_tpl->tpl_vars['PS_ALLOW_ACCENTED_CHARS_URL']->value) {?>
			var PS_ALLOW_ACCENTED_CHARS_URL = 1;
		<?php } else { ?>
			var PS_ALLOW_ACCENTED_CHARS_URL = 0;
		<?php }?>
		<?php echo '</script'; ?>
>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "input"} */
/* {block "script"} */
class Block_1539092598675d76ad0e44b9_98774611 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1539092598675d76ad0e44b9_98774611',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	$(document).ready(function() {
		$('#active_on').bind('click', function(){
			toggleDraftWarning(false);
		});
		$('#active_off').bind('click', function(){
			toggleDraftWarning(true);
		});
	});
<?php
}
}
/* {/block "script"} */
/* {block "leadin"} */
class Block_301727531675d76ad0e5a76_15010024 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_301727531675d76ad0e5a76_15010024',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div style="<?php if ($_smarty_tpl->tpl_vars['active']->value) {?>display:none<?php }?>">
		<p class="alert alert-warning">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your page will be saved as a draft','d'=>'Admin.Design.Notification'),$_smarty_tpl ) );?>

		</p>
	</div>
<?php
}
}
/* {/block "leadin"} */
/* {block "input"} */
class Block_1312274304675d76ad0e7c60_20667359 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_1312274304675d76ad0e7c60_20667359',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'select_category') {?>
		<select name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
">
			<?php echo $_smarty_tpl->tpl_vars['input']->value['options']['html'];?>

		</select>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "input"} */
}
