<?php
/* Smarty version 3.1.33, created on 2024-12-14 13:14:37
  from 'C:\xampp\htdocs\prestashop\admin\themes\default\template\controllers\languages\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_675d76ada24f78_01420000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd10cc94f823e56d7137a9bfb81e0ad99101f470f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin\\themes\\default\\template\\controllers\\languages\\helpers\\form\\form.tpl',
      1 => 1734178037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675d76ada24f78_01420000 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1064634351675d76ad9e84b2_85005027', "input");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_755176663675d76ad9ec491_36648388', 'script');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1851333731675d76ad9f3199_12104704', "other_fieldsets");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "input"} */
class Block_1064634351675d76ad9e84b2_85005027 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_1064634351675d76ad9e84b2_85005027',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'special') {?>
		<div id="#resultCheckLangPack">
			<p id="lang_pack_loading" style="display:none"><img src="../img/admin/<?php echo $_smarty_tpl->tpl_vars['input']->value['img'];?>
" alt="" /> <?php echo $_smarty_tpl->tpl_vars['input']->value['text'];?>
</p>
			<p id="lang_pack_msg" style="display:none"></p>
		</div>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "input"} */
/* {block 'script'} */
class Block_755176663675d76ad9ec491_36648388 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_755176663675d76ad9ec491_36648388',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		var langPackOk = "<img src=\"<?php echo @constant('_PS_IMG_');?>
admin/information.png\" alt=\"\" /> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'A language pack is available for this ISO.','d'=>'Admin.International.Notification'),$_smarty_tpl ) );?>
";
		var langPackVersion = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The Prestashop version compatible with this language and your system is:','d'=>'Admin.International.Notification'),$_smarty_tpl ) );?>
";
		var langPackInfo = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'After creating the language, you can import the content of the language pack, which you can download under "International -- Translations."','d'=>'Admin.International.Notification'),$_smarty_tpl ) );?>
";
		var noLangPack = "<img src=\"<?php echo @constant('_PS_IMG_');?>
admin/information.png\" alt=\"\" /> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No language pack is available on prestashop.com for this ISO code','d'=>'Admin.International.Notification'),$_smarty_tpl ) );?>
";
		var download = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
";

	$(document).ready(function() {
		$('#iso_code').keyup(function(e) {
			e.preventDefault();
			checkLangPack("<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value,'html','UTF-8' ));?>
");
		});
	});

<?php
}
}
/* {/block 'script'} */
/* {block "other_fieldsets"} */
class Block_1851333731675d76ad9f3199_12104704 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'other_fieldsets' => 
  array (
    0 => 'Block_1851333731675d76ad9f3199_12104704',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['new'])) {?>
		<br /><br />
		<div class="panel" style="width:572px;">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields']->value['new'], 'field', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['field']->value) {
?>
				<?php if ($_smarty_tpl->tpl_vars['key']->value == 'legend') {?>
					<legend>
						<?php if (isset($_smarty_tpl->tpl_vars['field']->value['image'])) {?><img src="<?php echo $_smarty_tpl->tpl_vars['field']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
" /><?php }?>
						<?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>

					</legend>
					<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This language pack is NOT complete and cannot be used in the front or back office because some files are missing.','d'=>'Admin.International.Notification'),$_smarty_tpl ) );?>
</p>
					<br />
				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'list_files') {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value, 'list');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['list']->value) {
?>
						<label><?php echo $_smarty_tpl->tpl_vars['list']->value['label'];?>
</label>
						<div class="margin-form" style="margin-top:4px;">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value['files'], 'file', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['file']->value) {
?>
								<?php if (!file_exists($_smarty_tpl->tpl_vars['key']->value)) {?>
									<font color="red">
								<?php }?>
								<?php echo $_smarty_tpl->tpl_vars['key']->value;?>

								<?php if (!file_exists($_smarty_tpl->tpl_vars['key']->value)) {?>
									</font>
								<?php }?>
								<br />
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</div>
						<br style="clear:both;" />
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php }?>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<br />
			<div class="small"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Missing files are marked in red','d'=>'Admin.International.Help'),$_smarty_tpl ) );?>
</div>
		</div>
	<?php }
}
}
/* {/block "other_fieldsets"} */
}
