<?php /* Smarty version Smarty-3.1.19, created on 2018-01-21 15:15:06
         compiled from "C:\wamp64\www\boutix\adminboutix\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:146665a64a06a7ea7f1-91013443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18c1194c4c745bd5089b31f9deaac3f683d0e452' => 
    array (
      0 => 'C:\\wamp64\\www\\boutix\\adminboutix\\themes\\default\\template\\content.tpl',
      1 => 1516397346,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146665a64a06a7ea7f1-91013443',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a64a06a8295f6_36698965',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a64a06a8295f6_36698965')) {function content_5a64a06a8295f6_36698965($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
