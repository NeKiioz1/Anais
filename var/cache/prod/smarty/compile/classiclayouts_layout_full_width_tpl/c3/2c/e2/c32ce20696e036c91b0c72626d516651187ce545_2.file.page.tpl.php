<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-09 11:59:08
  from 'C:\wamp64\www\anais\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_604754fc3ec562_33623144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c32ce20696e036c91b0c72626d516651187ce545' => 
    array (
      0 => 'C:\\wamp64\\www\\anais\\themes\\classic\\templates\\page.tpl',
      1 => 1614328983,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604754fc3ec562_33623144 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1060053531604754fc380a78_15785917', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_1111880755604754fc387281_08481015 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_953151093604754fc383c66_91693549 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1111880755604754fc387281_08481015', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_832647826604754fc3d9ff8_29343084 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_315434482604754fc3de0b1_67999585 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1748498967604754fc3d6e51_68378522 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_832647826604754fc3d9ff8_29343084', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_315434482604754fc3de0b1_67999585', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_1736087596604754fc3e69f2_72066133 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_91714981604754fc3e4432_45174335 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1736087596604754fc3e69f2_72066133', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_1060053531604754fc380a78_15785917 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1060053531604754fc380a78_15785917',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_953151093604754fc383c66_91693549',
  ),
  'page_title' => 
  array (
    0 => 'Block_1111880755604754fc387281_08481015',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_1748498967604754fc3d6e51_68378522',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_832647826604754fc3d9ff8_29343084',
  ),
  'page_content' => 
  array (
    0 => 'Block_315434482604754fc3de0b1_67999585',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_91714981604754fc3e4432_45174335',
  ),
  'page_footer' => 
  array (
    0 => 'Block_1736087596604754fc3e69f2_72066133',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_953151093604754fc383c66_91693549', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1748498967604754fc3d6e51_68378522', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91714981604754fc3e4432_45174335', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
