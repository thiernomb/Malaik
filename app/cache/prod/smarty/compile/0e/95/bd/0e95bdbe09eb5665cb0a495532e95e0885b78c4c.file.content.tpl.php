<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 09:05:10
         compiled from "C:\wamp64\www\malaik\admin716rycfsb\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4485b0bc646042b06-04727518%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e95bdbe09eb5665cb0a495532e95e0885b78c4c' => 
    array (
      0 => 'C:\\wamp64\\www\\malaik\\admin716rycfsb\\themes\\default\\template\\content.tpl',
      1 => 1523726762,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4485b0bc646042b06-04727518',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b0bc6460defa0_74651257',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0bc6460defa0_74651257')) {function content_5b0bc6460defa0_74651257($_smarty_tpl) {?>
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
