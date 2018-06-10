<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 10:08:29
         compiled from "C:\wamp64\www\malaik\themes\classic\templates\checkout\_partials\steps\unreachable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75075b0bd51d504520-85670584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcb38242b611b27a3f62bce6f92d6766dfb5dd5a' => 
    array (
      0 => 'C:\\wamp64\\www\\malaik\\themes\\classic\\templates\\checkout\\_partials\\steps\\unreachable.tpl',
      1 => 1523726789,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75075b0bd51d504520-85670584',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'identifier' => 0,
    'position' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b0bd51d53af92_23328955',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0bd51d53af92_23328955')) {function content_5b0bd51d53af92_23328955($_smarty_tpl) {?>

  <section class="checkout-step -unreachable" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
">
    <h1 class="step-title h3">
      <span class="step-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

    </h1>
  </section>

<?php }} ?>
