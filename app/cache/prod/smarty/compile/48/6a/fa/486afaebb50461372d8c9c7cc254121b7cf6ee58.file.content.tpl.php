<?php /* Smarty version Smarty-3.1.19, created on 2018-01-21 15:02:52
         compiled from "C:\wamp64\www\boutix\adminboutix\themes\default\template\controllers\shop\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:248205a649d8c0acd43-52787794%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '486afaebb50461372d8c9c7cc254121b7cf6ee58' => 
    array (
      0 => 'C:\\wamp64\\www\\boutix\\adminboutix\\themes\\default\\template\\controllers\\shop\\content.tpl',
      1 => 1516397349,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '248205a649d8c0acd43-52787794',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shops_tree' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a649d8c0d0567_23453165',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a649d8c0d0567_23453165')) {function content_5a649d8c0d0567_23453165($_smarty_tpl) {?>

<div class="row">
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['shops_tree']->value;?>

	</div>
	<div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div>
<?php }} ?>
