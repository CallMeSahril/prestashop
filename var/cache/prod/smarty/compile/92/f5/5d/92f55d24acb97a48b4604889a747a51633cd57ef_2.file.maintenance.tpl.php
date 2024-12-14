<?php
/* Smarty version 3.1.33, created on 2024-12-14 13:14:35
  from 'C:\xampp\htdocs\prestashop\themes\classic\templates\errors\maintenance.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_675d76abd7b930_21139757',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92f55d24acb97a48b4604889a747a51633cd57ef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\errors\\maintenance.tpl',
      1 => 1734178042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675d76abd7b930_21139757 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1519357861675d76abd72441_20414225', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-error.tpl');
}
/* {block 'page_header_logo'} */
class Block_754232006675d76abd73496_70719273 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="logo"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="logo"></div>
        <?php
}
}
/* {/block 'page_header_logo'} */
/* {block 'hook_maintenance'} */
class Block_1536168633675d76abd74ee6_26092158 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo $_smarty_tpl->tpl_vars['HOOK_MAINTENANCE']->value;?>

        <?php
}
}
/* {/block 'hook_maintenance'} */
/* {block 'page_title'} */
class Block_1627496042675d76abd76af5_82210438 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We\'ll be back soon.','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_1066035635675d76abd763d7_35819581 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <h1><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1627496042675d76abd76af5_82210438', 'page_title', $this->tplIndex);
?>
</h1>
        <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_677516960675d76abd72cb8_57710122 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <header class="page-header">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_754232006675d76abd73496_70719273', 'page_header_logo', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1536168633675d76abd74ee6_26092158', 'hook_maintenance', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1066035635675d76abd763d7_35819581', 'page_header', $this->tplIndex);
?>

      </header>
    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content'} */
class Block_172846576675d76abd79138_16850320 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo $_smarty_tpl->tpl_vars['maintenance_text']->value;?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1632491880675d76abd789e0_37298570 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content page-maintenance">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172846576675d76abd79138_16850320', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_684744732675d76abd7a9c0_22264697 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_1519357861675d76abd72441_20414225 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1519357861675d76abd72441_20414225',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_677516960675d76abd72cb8_57710122',
  ),
  'page_header_logo' => 
  array (
    0 => 'Block_754232006675d76abd73496_70719273',
  ),
  'hook_maintenance' => 
  array (
    0 => 'Block_1536168633675d76abd74ee6_26092158',
  ),
  'page_header' => 
  array (
    0 => 'Block_1066035635675d76abd763d7_35819581',
  ),
  'page_title' => 
  array (
    0 => 'Block_1627496042675d76abd76af5_82210438',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_1632491880675d76abd789e0_37298570',
  ),
  'page_content' => 
  array (
    0 => 'Block_172846576675d76abd79138_16850320',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_684744732675d76abd7a9c0_22264697',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_677516960675d76abd72cb8_57710122', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1632491880675d76abd789e0_37298570', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_684744732675d76abd7a9c0_22264697', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
