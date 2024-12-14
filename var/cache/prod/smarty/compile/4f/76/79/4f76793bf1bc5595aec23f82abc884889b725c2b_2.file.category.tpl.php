<?php
/* Smarty version 3.1.33, created on 2024-12-14 13:14:35
  from 'C:\xampp\htdocs\prestashop\themes\classic\templates\cms\category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_675d76ab6445c3_86256633',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f76793bf1bc5595aec23f82abc884889b725c2b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\cms\\category.tpl',
      1 => 1734178042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675d76ab6445c3_86256633 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_874372668675d76ab61e018_57757931', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_555593857675d76ab61ffc5_65853234', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_874372668675d76ab61e018_57757931 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_874372668675d76ab61e018_57757931',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms_category']->value['name'], ENT_QUOTES, 'UTF-8');?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'cms_sub_categories'} */
class Block_1274847396675d76ab620823_48495109 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['sub_categories']->value) {?>
      <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List of sub categories in %name%:','d'=>'Shop.Theme.Global','sprintf'=>array('%name%'=>$_smarty_tpl->tpl_vars['cms_category']->value['name'])),$_smarty_tpl ) );?>
</p>
      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sub_categories']->value, 'sub_category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sub_category']->value) {
?>
          <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sub_category']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sub_category']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    <?php }?>
  <?php
}
}
/* {/block 'cms_sub_categories'} */
/* {block 'cms_sub_pages'} */
class Block_1210244138675d76ab63d0b1_27718941 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['cms_pages']->value) {?>
      <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List of pages in %category_name%:','d'=>'Shop.Theme.Global','sprintf'=>array('%category_name%'=>$_smarty_tpl->tpl_vars['cms_category']->value['name'])),$_smarty_tpl ) );?>
</p>
      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cms_pages']->value, 'cms_page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cms_page']->value) {
?>
          <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms_page']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms_page']->value['meta_title'], ENT_QUOTES, 'UTF-8');?>
</a></li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    <?php }?>
  <?php
}
}
/* {/block 'cms_sub_pages'} */
/* {block 'page_content'} */
class Block_555593857675d76ab61ffc5_65853234 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_555593857675d76ab61ffc5_65853234',
  ),
  'cms_sub_categories' => 
  array (
    0 => 'Block_1274847396675d76ab620823_48495109',
  ),
  'cms_sub_pages' => 
  array (
    0 => 'Block_1210244138675d76ab63d0b1_27718941',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1274847396675d76ab620823_48495109', 'cms_sub_categories', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1210244138675d76ab63d0b1_27718941', 'cms_sub_pages', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_content'} */
}
