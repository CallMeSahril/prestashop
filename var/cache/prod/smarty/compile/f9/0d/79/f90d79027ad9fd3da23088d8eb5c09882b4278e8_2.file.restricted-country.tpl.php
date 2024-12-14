<?php
/* Smarty version 3.1.33, created on 2024-12-14 13:14:35
  from 'C:\xampp\htdocs\prestashop\themes\classic\templates\errors\restricted-country.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_675d76abde84d6_27541900',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f90d79027ad9fd3da23088d8eb5c09882b4278e8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\errors\\restricted-country.tpl',
      1 => 1734178042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675d76abde84d6_27541900 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_817646890675d76abddcd33_70480936', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-error.tpl');
}
/* {block 'page_title'} */
class Block_406774741675d76abddf0d3_11480593 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_192788057675d76abdde9c6_18027093 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <h1><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_406774741675d76abddf0d3_11480593', 'page_title', $this->tplIndex);
?>
</h1>
        <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_1875345340675d76abddd581_57853491 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <header class="page-header">
        <div class="logo"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="logo"></div>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_192788057675d76abdde9c6_18027093', 'page_header', $this->tplIndex);
?>

      </header>
    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content'} */
class Block_1838036318675d76abde4be9_62563906 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'403 Forbidden','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h2>
          <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You cannot access this store from your country. We apologize for the inconvenience.','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_151317515675d76abde4368_06128121 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content page-restricted">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1838036318675d76abde4be9_62563906', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_1135884237675d76abde74c7_37878273 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_817646890675d76abddcd33_70480936 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_817646890675d76abddcd33_70480936',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_1875345340675d76abddd581_57853491',
  ),
  'page_header' => 
  array (
    0 => 'Block_192788057675d76abdde9c6_18027093',
  ),
  'page_title' => 
  array (
    0 => 'Block_406774741675d76abddf0d3_11480593',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_151317515675d76abde4368_06128121',
  ),
  'page_content' => 
  array (
    0 => 'Block_1838036318675d76abde4be9_62563906',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1135884237675d76abde74c7_37878273',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1875345340675d76abddd581_57853491', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_151317515675d76abde4368_06128121', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1135884237675d76abde74c7_37878273', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
