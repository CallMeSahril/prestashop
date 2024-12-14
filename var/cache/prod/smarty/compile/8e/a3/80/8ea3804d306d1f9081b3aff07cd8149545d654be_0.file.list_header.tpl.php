<?php
/* Smarty version 3.1.33, created on 2024-12-14 13:14:36
  from 'C:\xampp\htdocs\prestashop\admin\themes\default\template\controllers\attributes_groups\helpers\list\list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_675d76acabc008_83304336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ea3804d306d1f9081b3aff07cd8149545d654be' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin\\themes\\default\\template\\controllers\\attributes_groups\\helpers\\list\\list_header.tpl',
      1 => 1734178037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675d76acabc008_83304336 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_231648479675d76acabb154_08451443', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'leadin'} */
class Block_231648479675d76acabb154_08451443 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_231648479675d76acabb154_08451443',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			$(location.hash).click();
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'leadin'} */
}
