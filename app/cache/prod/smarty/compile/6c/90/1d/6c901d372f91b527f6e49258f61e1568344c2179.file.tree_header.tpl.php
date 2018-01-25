<?php /* Smarty version Smarty-3.1.19, created on 2018-01-21 15:03:03
         compiled from "C:\wamp64\www\boutix\adminboutix\themes\default\template\helpers\tree\tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:191125a649d976d2850-88232442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c901d372f91b527f6e49258f61e1568344c2179' => 
    array (
      0 => 'C:\\wamp64\\www\\boutix\\adminboutix\\themes\\default\\template\\helpers\\tree\\tree_header.tpl',
      1 => 1516397351,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191125a649d976d2850-88232442',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a649d97743b88_23869202',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a649d97743b88_23869202')) {function content_5a649d97743b88_23869202($_smarty_tpl) {?>
<div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
</div>
<?php }} ?>
