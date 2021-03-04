<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-04 14:50:53
  from 'C:\wamp64\www\anais\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6040e5bd00bb46_40716757',
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
function content_6040e5bd00bb46_40716757 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12231880006040e5bcf341f2_95882043', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_19965104176040e5bcf38d95_01626857 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_480555146040e5bd000158_26889694 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_3681307296040e5bcf3e9e2_26173197 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_480555146040e5bd000158_26889694', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_12231880006040e5bcf341f2_95882043 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_12231880006040e5bcf341f2_95882043',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_19965104176040e5bcf38d95_01626857',
  ),
  'page_content' => 
  array (
    0 => 'Block_3681307296040e5bcf3e9e2_26173197',
  ),
  'hook_home' => 
  array (
    0 => 'Block_480555146040e5bd000158_26889694',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19965104176040e5bcf38d95_01626857', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3681307296040e5bcf3e9e2_26173197', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
