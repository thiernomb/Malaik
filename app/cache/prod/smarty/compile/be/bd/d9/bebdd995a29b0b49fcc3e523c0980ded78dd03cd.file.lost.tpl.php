<?php /* Smarty version Smarty-3.1.19, created on 2018-04-14 21:46:42
         compiled from "C:\wamp64\www\malaik\modules\welcome\views\templates\lost.tpl" */ ?>
<?php /*%%SmartyHeaderCode:148205ad25aa27d6d42-10641864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bebdd995a29b0b49fcc3e523c0980ded78dd03cd' => 
    array (
      0 => 'C:\\wamp64\\www\\malaik\\modules\\welcome\\views\\templates\\lost.tpl',
      1 => 1523726780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148205ad25aa27d6d42-10641864',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ad25aa27f3cc8_56803203',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad25aa27f3cc8_56803203')) {function content_5ad25aa27f3cc8_56803203($_smarty_tpl) {?>

<div class="onboarding onboarding-popup bootstrap">
  <div class="content">
    <p><?php echo smartyTranslate(array('s'=>'Hey! Are you lost?','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <p><?php echo smartyTranslate(array('s'=>'To continue, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-primary onboarding-button-goto-current"><?php echo smartyTranslate(array('s'=>'Continue','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
    <p><?php echo smartyTranslate(array('s'=>'If you want to stop the tutorial for good, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-alert onboarding-button-stop"><?php echo smartyTranslate(array('s'=>'Quit the Welcome tutorial','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
  </div>
</div>
<?php }} ?>
