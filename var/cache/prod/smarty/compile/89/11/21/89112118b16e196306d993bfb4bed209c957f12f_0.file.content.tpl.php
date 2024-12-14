<?php
/* Smarty version 3.1.33, created on 2024-12-14 13:14:39
  from 'C:\xampp\htdocs\prestashop\admin\themes\default\template\controllers\themes_catalog\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_675d76afc41471_43764008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89112118b16e196306d993bfb4bed209c957f12f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin\\themes\\default\\template\\controllers\\themes_catalog\\content.tpl',
      1 => 1734178037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675d76afc41471_43764008 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['display_addons_content']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['addons_content']->value;?>

<?php } else { ?>
	<iframe class="clearfix" style="margin:0px;padding:0px;width:100%;height:920px;overflow:hidden;border:none" src="//addons.prestashop.com/iframe/search.php?isoLang=<?php echo $_smarty_tpl->tpl_vars['iso_lang']->value;?>
&amp;isoCurrency=<?php echo $_smarty_tpl->tpl_vars['iso_currency']->value;?>
&amp;isoCountry=<?php echo $_smarty_tpl->tpl_vars['iso_country']->value;?>
&amp;parentUrl=<?php echo $_smarty_tpl->tpl_vars['parent_domain']->value;?>
"></iframe>
<?php }
}
}
