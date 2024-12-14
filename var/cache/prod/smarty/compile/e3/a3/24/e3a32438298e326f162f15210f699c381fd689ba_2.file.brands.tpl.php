<?php
/* Smarty version 3.1.33, created on 2024-12-14 13:14:34
  from 'C:\xampp\htdocs\prestashop\themes\classic\templates\catalog\brands.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_675d76aa6f9390_11368088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3a32438298e326f162f15210f699c381fd689ba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\catalog\\brands.tpl',
      1 => 1734178042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/brand.tpl' => 1,
  ),
),false)) {
function content_675d76aa6f9390_11368088 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1078920533675d76aa6e31c9_94705682', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'brand_header'} */
class Block_1764421789675d76aa6e3c75_09225571 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brands','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h1>
    <?php
}
}
/* {/block 'brand_header'} */
/* {block 'brand_miniature'} */
class Block_315410462675d76aa6e9121_12601678 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'brand');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
?>
          <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/brand.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('brand'=>$_smarty_tpl->tpl_vars['brand']->value), 0, true);
?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    <?php
}
}
/* {/block 'brand_miniature'} */
/* {block 'content'} */
class Block_1078920533675d76aa6e31c9_94705682 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1078920533675d76aa6e31c9_94705682',
  ),
  'brand_header' => 
  array (
    0 => 'Block_1764421789675d76aa6e3c75_09225571',
  ),
  'brand_miniature' => 
  array (
    0 => 'Block_315410462675d76aa6e9121_12601678',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1764421789675d76aa6e3c75_09225571', 'brand_header', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_315410462675d76aa6e9121_12601678', 'brand_miniature', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
