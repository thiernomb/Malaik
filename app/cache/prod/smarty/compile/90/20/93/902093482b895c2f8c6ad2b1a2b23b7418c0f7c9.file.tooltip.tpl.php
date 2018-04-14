<?php /* Smarty version Smarty-3.1.19, created on 2018-04-14 21:46:42
         compiled from "C:\wamp64\www\malaik\modules\welcome\views\templates\tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:320025ad25aa294f647-49772162%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '902093482b895c2f8c6ad2b1a2b23b7418c0f7c9' => 
    array (
      0 => 'C:\\wamp64\\www\\malaik\\modules\\welcome\\views\\templates\\tooltip.tpl',
      1 => 1523726780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '320025ad25aa294f647-49772162',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ad25aa2959c78_52101154',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad25aa2959c78_52101154')) {function content_5ad25aa2959c78_52101154($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
