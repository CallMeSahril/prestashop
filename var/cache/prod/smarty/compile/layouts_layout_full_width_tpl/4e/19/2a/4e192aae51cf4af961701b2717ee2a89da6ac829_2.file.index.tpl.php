<?php
/* Smarty version 3.1.33, created on 2024-12-14 20:15:22
  from 'C:\xampp\htdocs\prestashop\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_675d76dacf2470_35969475',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e192aae51cf4af961701b2717ee2a89da6ac829' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\index.tpl',
      1 => 1734178042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675d76dacf2470_35969475 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1010345910675d76dacee8f9_35971298', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_449006816675d76dacef1d8_24277469 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_304280414675d76dacf05d9_59483998 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_420390006675d76dacefdf2_40473987 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_304280414675d76dacf05d9_59483998', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1010345910675d76dacee8f9_35971298 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_1010345910675d76dacee8f9_35971298',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_449006816675d76dacef1d8_24277469',
  ),
  'page_content' => 
  array (
    0 => 'Block_420390006675d76dacefdf2_40473987',
  ),
  'hook_home' => 
  array (
    0 => 'Block_304280414675d76dacf05d9_59483998',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_449006816675d76dacef1d8_24277469', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_420390006675d76dacefdf2_40473987', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
