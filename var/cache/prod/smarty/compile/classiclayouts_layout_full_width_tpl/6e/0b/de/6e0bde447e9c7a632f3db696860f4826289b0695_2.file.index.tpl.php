<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-26 10:14:20
  from 'C:\wamp64\www\anais\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6038bbecdf4160_28687763',
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
function content_6038bbecdf4160_28687763 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14351726776038bbecdd3b95_03805887', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_8360717926038bbecdd9e10_87505662 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_5841707236038bbecde63d1_31340450 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_8574241396038bbecde1467_09573591 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5841707236038bbecde63d1_31340450', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_14351726776038bbecdd3b95_03805887 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_14351726776038bbecdd3b95_03805887',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_8360717926038bbecdd9e10_87505662',
  ),
  'page_content' => 
  array (
    0 => 'Block_8574241396038bbecde1467_09573591',
  ),
  'hook_home' => 
  array (
    0 => 'Block_5841707236038bbecde63d1_31340450',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8360717926038bbecdd9e10_87505662', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8574241396038bbecde1467_09573591', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
