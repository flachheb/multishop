<?php /* Smarty version Smarty-3.1.19, created on 2018-01-21 15:15:04
         compiled from "C:\wamp64\www\boutix\adminboutix\themes\default\template\helpers\shops_list\list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:240505a64a068741f16-87623882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75f1699fd8e6af8826ebb4cd7d178ce2e4f9b0e2' => 
    array (
      0 => 'C:\\wamp64\\www\\boutix\\adminboutix\\themes\\default\\template\\helpers\\shops_list\\list.tpl',
      1 => 1516397351,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '240505a64a068741f16-87623882',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'current_shop_name' => 0,
    'current_shop_value' => 0,
    'url' => 0,
    'tree' => 0,
    'multishop_context' => 0,
    'is_group_context' => 0,
    'group_id' => 0,
    'multishop_context_group' => 0,
    'group_data' => 0,
    'is_all_context' => 0,
    'is_shop_context' => 0,
    'shop_data' => 0,
    'shop_id' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a64a068baf292_20182709',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a64a068baf292_20182709')) {function content_5a64a068baf292_20182709($_smarty_tpl) {?>
<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['current_shop_name']->value;?>
 <i class="icon-caret-down"></i></a><ul class="dropdown-menu"><li<?php if (!isset($_smarty_tpl->tpl_vars['current_shop_value']->value)||$_smarty_tpl->tpl_vars['current_shop_value']->value=='') {?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['url']->value,'html','UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'All shops'),$_smarty_tpl);?>
</a></li><?php  $_smarty_tpl->tpl_vars['group_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group_data']->_loop = false;
 $_smarty_tpl->tpl_vars['group_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tree']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group_data']->key => $_smarty_tpl->tpl_vars['group_data']->value) {
$_smarty_tpl->tpl_vars['group_data']->_loop = true;
 $_smarty_tpl->tpl_vars['group_id']->value = $_smarty_tpl->tpl_vars['group_data']->key;
?><?php if (!isset($_smarty_tpl->tpl_vars['multishop_context']->value)||$_smarty_tpl->tpl_vars['is_group_context']->value) {?><li class="group<?php if ($_smarty_tpl->tpl_vars['current_shop_value']->value==('g-').($_smarty_tpl->tpl_vars['group_id']->value)) {?> active<?php }?><?php if ($_smarty_tpl->tpl_vars['multishop_context_group']->value==false) {?> disabled<?php }?>"><a href="<?php if ($_smarty_tpl->tpl_vars['multishop_context_group']->value==false) {?>#<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['url']->value,'html','UTF-8');?>
g-<?php echo $_smarty_tpl->tpl_vars['group_id']->value;?>
<?php }?>"><?php echo smartyTranslate(array('s'=>'%s group','sprintf'=>array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['group_data']->value['name'],'html','UTF-8'))),$_smarty_tpl);?>
</a></li><?php } elseif (!$_smarty_tpl->tpl_vars['is_all_context']->value) {?><ul class="group <?php if ($_smarty_tpl->tpl_vars['multishop_context_group']->value==false) {?> disabled<?php }?>"><?php echo smartyTranslate(array('s'=>'%s group','sprintf'=>array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['group_data']->value['name'],'html','UTF-8'))),$_smarty_tpl);?>
<?php }?><?php if (!isset($_smarty_tpl->tpl_vars['multishop_context']->value)||$_smarty_tpl->tpl_vars['is_shop_context']->value) {?><?php  $_smarty_tpl->tpl_vars['shop_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shop_data']->_loop = false;
 $_smarty_tpl->tpl_vars['shop_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['group_data']->value['shops']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shop_data']->key => $_smarty_tpl->tpl_vars['shop_data']->value) {
$_smarty_tpl->tpl_vars['shop_data']->_loop = true;
 $_smarty_tpl->tpl_vars['shop_id']->value = $_smarty_tpl->tpl_vars['shop_data']->key;
?><?php if (($_smarty_tpl->tpl_vars['shop_data']->value['active'])) {?><li class="shop<?php if ($_smarty_tpl->tpl_vars['current_shop_value']->value==('s-').($_smarty_tpl->tpl_vars['shop_id']->value)) {?> active<?php }?><?php if ($_smarty_tpl->tpl_vars['shop_data']->value['uri']==null) {?> disabled<?php }?>"><a href="<?php if ($_smarty_tpl->tpl_vars['shop_data']->value['uri']==null) {?>#<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['url']->value,'html','UTF-8');?>
s-<?php echo $_smarty_tpl->tpl_vars['shop_id']->value;?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['shop_data']->value['name'];?>
</a><?php if ($_smarty_tpl->tpl_vars['shop_data']->value['uri']==null) {?><a class="link-shop" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminShop',true),'html','UTF-8');?>
" target="_blank"><i class="material-icons">&#xE869;</i></a><?php } else { ?><a class="link-shop" href="<?php echo $_smarty_tpl->tpl_vars['shop_data']->value['uri'];?>
" target="_blank"><i class="material-icons">&#xE8F4;</i></a><?php }?></li><?php }?><?php } ?><?php }?><?php if (!(!isset($_smarty_tpl->tpl_vars['multishop_context']->value)||$_smarty_tpl->tpl_vars['is_group_context']->value)) {?></ul><?php }?><?php } ?></ul>
<?php }} ?>
