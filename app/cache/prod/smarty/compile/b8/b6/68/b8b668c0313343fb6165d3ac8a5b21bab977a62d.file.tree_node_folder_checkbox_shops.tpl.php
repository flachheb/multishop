<?php /* Smarty version Smarty-3.1.19, created on 2018-01-21 14:55:54
         compiled from "C:\wamp64\www\boutix\adminboutix\themes\default\template\helpers\tree\tree_node_folder_checkbox_shops.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75035a649bea158172-61499230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8b668c0313343fb6165d3ac8a5b21bab977a62d' => 
    array (
      0 => 'C:\\wamp64\\www\\boutix\\adminboutix\\themes\\default\\template\\helpers\\tree\\tree_node_folder_checkbox_shops.tpl',
      1 => 1516397351,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75035a649bea158172-61499230',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'table' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a649bea270a33_88192134',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a649bea270a33_88192134')) {function content_5a649bea270a33_88192134($_smarty_tpl) {?>
<li class="tree-folder">
	<span class="tree-folder-name<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-folder-name-disable<?php }?>">
		<input type="checkbox" name="checkBoxShopGroupAsso_<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['node']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php echo smartyTranslate(array('s'=>'Group: %s','sprintf'=>array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['node']->value['name'],'html','UTF-8'))),$_smarty_tpl);?>
</label>
	</span>
	<ul class="tree">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['children']->value,'UTF-8');?>

	</ul>
</li>
<?php }} ?>
