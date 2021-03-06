<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-06 10:25:27
  from 'C:\wamp64\www\anais\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60434a876b0100_11148091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e0bde447e9c7a632f3db696860f4826289b0695' => 
    array (
      0 => 'C:\\wamp64\\www\\anais\\themes\\classic\\templates\\index.tpl',
      1 => 1614328981,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60434a876b0100_11148091 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171257142460434a8769c252_01396624', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_138896126360434a8769fb41_44811861 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_93765251260434a876a8ab3_61565713 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_77923644760434a876a6170_67277446 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_93765251260434a876a8ab3_61565713', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_171257142460434a8769c252_01396624 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_171257142460434a8769c252_01396624',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_138896126360434a8769fb41_44811861',
  ),
  'page_content' => 
  array (
    0 => 'Block_77923644760434a876a6170_67277446',
  ),
  'hook_home' => 
  array (
    0 => 'Block_93765251260434a876a8ab3_61565713',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_138896126360434a8769fb41_44811861', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77923644760434a876a6170_67277446', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
