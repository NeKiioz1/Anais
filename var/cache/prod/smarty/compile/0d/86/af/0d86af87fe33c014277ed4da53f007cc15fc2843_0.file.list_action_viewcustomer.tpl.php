<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-04 15:14:39
  from 'C:\wamp64\www\anais\modules\ps_emailsubscription\views\templates\admin\list_action_viewcustomer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6040eb4fe90ca9_51411946',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d86af87fe33c014277ed4da53f007cc15fc2843' => 
    array (
      0 => 'C:\\wamp64\\www\\anais\\modules\\ps_emailsubscription\\views\\templates\\admin\\list_action_viewcustomer.tpl',
      1 => 1614328974,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6040eb4fe90ca9_51411946 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" class="edit btn btn-default <?php if ($_smarty_tpl->tpl_vars['disable']->value) {?>disabled<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<i class="icon-search-plus"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }
}
