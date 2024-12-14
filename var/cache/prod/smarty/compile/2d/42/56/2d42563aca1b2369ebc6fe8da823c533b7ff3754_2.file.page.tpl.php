<?php
/* Smarty version 3.1.33, created on 2024-12-14 13:14:36
  from 'C:\xampp\htdocs\prestashop\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_675d76ac009798_09588532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d42563aca1b2369ebc6fe8da823c533b7ff3754' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\page.tpl',
      1 => 1734178042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675d76ac009798_09588532 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1048922110675d76ac003431_89579822', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_1460233696675d76ac0045a0_24985620 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_909328833675d76ac003cb6_19302602 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1460233696675d76ac0045a0_24985620', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_40531842675d76ac006427_56429298 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_1911923651675d76ac006e07_79980209 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1476678083675d76ac005bd1_08578484 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40531842675d76ac006427_56429298', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1911923651675d76ac006e07_79980209', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_386154661675d76ac008466_97487861 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_1748079260675d76ac007d97_64565677 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_386154661675d76ac008466_97487861', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_1048922110675d76ac003431_89579822 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1048922110675d76ac003431_89579822',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_909328833675d76ac003cb6_19302602',
  ),
  'page_title' => 
  array (
    0 => 'Block_1460233696675d76ac0045a0_24985620',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_1476678083675d76ac005bd1_08578484',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_40531842675d76ac006427_56429298',
  ),
  'page_content' => 
  array (
    0 => 'Block_1911923651675d76ac006e07_79980209',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1748079260675d76ac007d97_64565677',
  ),
  'page_footer' => 
  array (
    0 => 'Block_386154661675d76ac008466_97487861',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_909328833675d76ac003cb6_19302602', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1476678083675d76ac005bd1_08578484', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1748079260675d76ac007d97_64565677', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
