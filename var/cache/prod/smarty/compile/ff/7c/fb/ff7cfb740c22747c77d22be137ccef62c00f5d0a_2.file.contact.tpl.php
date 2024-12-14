<?php
/* Smarty version 3.1.33, created on 2024-12-14 13:14:35
  from 'C:\xampp\htdocs\prestashop\themes\classic\templates\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_675d76ab75a8c5_75896500',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff7cfb740c22747c77d22be137ccef62c00f5d0a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\contact.tpl',
      1 => 1734178042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675d76ab75a8c5_75896500 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_270733899675d76ab74da13_84348918', 'page_header_container');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1264780015675d76ab74e906_65459552', 'left_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1252163473675d76ab753368_21550211', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_header_container'} */
class Block_270733899675d76ab74da13_84348918 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_270733899675d76ab74da13_84348918',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_header_container'} */
/* {block 'left_column'} */
class Block_1264780015675d76ab74e906_65459552 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_1264780015675d76ab74e906_65459552',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="left-column" class="col-xs-12 col-sm-3">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_contactinfo",'hook'=>'displayLeftColumn'),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'left_column'} */
/* {block 'page_content'} */
class Block_1252163473675d76ab753368_21550211 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_1252163473675d76ab753368_21550211',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"contactform"),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_content'} */
}
