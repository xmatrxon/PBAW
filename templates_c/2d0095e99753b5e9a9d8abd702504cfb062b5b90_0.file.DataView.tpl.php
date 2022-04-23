<?php
/* Smarty version 4.1.0, created on 2022-04-23 17:32:46
  from 'C:\xampp\htdocs\php_01_widok_kontroler\app\views\DataView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62641c1e8a8788_91317322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d0095e99753b5e9a9d8abd702504cfb062b5b90' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_01_widok_kontroler\\app\\views\\DataView.tpl',
      1 => 1650727964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62641c1e8a8788_91317322 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_102978560862641c1e8928a7_54446780', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_102978560862641c1e8928a7_54446780 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_102978560862641c1e8928a7_54446780',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['database']->value, 'record');
$_smarty_tpl->tpl_vars['record']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['record']->value) {
$_smarty_tpl->tpl_vars['record']->do_else = false;
?>
        <table><tr><td> <?php echo "ID:  ";?>
 <?php echo $_smarty_tpl->tpl_vars['record']->value["id_wynik"];?>
 </td><td> <?php echo "Data:  ";?>
 <?php echo $_smarty_tpl->tpl_vars['record']->value["data"];?>
 </td><td> <?php echo "Kwota:  ";?>
 <?php echo $_smarty_tpl->tpl_vars['record']->value["kwota"];?>
 </td><td> <?php echo "Lata:  ";?>
 <?php echo $_smarty_tpl->tpl_vars['record']->value["lata"];?>
 </td><td> <?php echo "Oprocentowanie:  ";?>
 <?php echo $_smarty_tpl->tpl_vars['record']->value["procent"];?>
 </td><td> <?php echo "Rata:  ";?>
 <?php echo $_smarty_tpl->tpl_vars['record']->value["rata"];?>
 </td></br></tr></table> 
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>	
<?php
}
}
/* {/block 'content'} */
}
