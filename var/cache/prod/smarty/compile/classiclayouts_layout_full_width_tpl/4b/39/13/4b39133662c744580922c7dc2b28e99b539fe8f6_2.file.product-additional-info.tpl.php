<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-09 09:18:02
  from 'C:\wamp64\www\anais\themes\classic\templates\catalog\_partials\product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60472f3ab7f669_33408957',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b39133662c744580922c7dc2b28e99b539fe8f6' => 
    array (
      0 => 'C:\\wamp64\\www\\anais\\themes\\classic\\templates\\catalog\\_partials\\product-additional-info.tpl',
      1 => 1614328981,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60472f3ab7f669_33408957 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
