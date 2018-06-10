<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 09:59:04
         compiled from "C:\wamp64\www\malaik\admin716rycfsb\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22855b0bd2e8cbbc74-97776056%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4da20240674efb9e1be930c4db5939f6ba89c6c' => 
    array (
      0 => 'C:\\wamp64\\www\\malaik\\admin716rycfsb\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1523726771,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22855b0bd2e8cbbc74-97776056',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b0bd2e8d711f4_98714266',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0bd2e8d711f4_98714266')) {function content_5b0bd2e8d711f4_98714266($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a>
<?php }} ?>
