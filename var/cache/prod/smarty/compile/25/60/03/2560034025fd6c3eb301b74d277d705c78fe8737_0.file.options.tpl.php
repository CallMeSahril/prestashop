<?php
/* Smarty version 3.1.33, created on 2024-12-14 13:14:38
  from 'C:\xampp\htdocs\prestashop\admin\themes\default\template\controllers\order_preferences\helpers\options\options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_675d76aec63d12_24923849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2560034025fd6c3eb301b74d277d705c78fe8737' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin\\themes\\default\\template\\controllers\\order_preferences\\helpers\\options\\options.tpl',
      1 => 1734178037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675d76aec63d12_24923849 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1765974778675d76aec63165_65414790', "after");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/options/options.tpl");
}
/* {block "after"} */
class Block_1765974778675d76aec63165_65414790 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'after' => 
  array (
    0 => 'Block_1765974778675d76aec63165_65414790',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">changeCMSActivationAuthorization();<?php echo '</script'; ?>
><?php
}
}
/* {/block "after"} */
}
