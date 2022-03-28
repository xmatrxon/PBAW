<?php
/* Smarty version 4.1.0, created on 2022-03-28 11:40:28
  from 'C:\xampp\htdocs\php_01_widok_kontroler\app\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6241828ced88a1_01988741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6661a2d48c8ab708d6fba9858b3b2885d329a907' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_01_widok_kontroler\\app\\CalcView.tpl',
      1 => 1648459002,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6241828ced88a1_01988741 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8398822826241828cecd128_59434551', 'content');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12272363216241828ced0379_61156989', 'end');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"));
}
/* {block 'content'} */
class Block_8398822826241828cecd128_59434551 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8398822826241828cecd128_59434551',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php" method="post">
	<div class="fields">
		<div class="field">
			<label for="kwota">Kwota</label>
			<input type="text" name="kwota" id="name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kwota;?>
" />
		</div>
		<div class="field">
			<label for="lata">Ile lat</label>
			<input type="text" name="lata" id="email" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->lata;?>
" />
		</div>
		<div class="field">
			<label for="opr">Oprocentowanie</label>
			<input type="text" name="opr" id="email" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->opr;?>
" />
		</div>
	</div>
	<ul class="actions">
		<li><input type="submit" value="Oblicz" /></li>
	</ul>
</form>

<?php
}
}
/* {/block 'content'} */
/* {block 'end'} */
class Block_12272363216241828ced0379_61156989 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_12272363216241828ced0379_61156989',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
<ol
	style="
		margin: 2rem auto;
		padding: 1em 1em 1em 2em;
		border-radius: 0.5em;
		background-color: tomato;
		width: 25em;
		font-weight: bold;
	"
>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?> 
	<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li> 
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ol>
<?php }
if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
<div
	style="
		margin: 2rem auto;
		padding: 1em;
		border-radius: 0.5em;
		background-color: lime;
		width: 25em;
		font-weight: bold;
	"
>
	<p>Miesięczne odsetki</p>
	<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>
 <?php }?>
</div>

<?php
}
}
/* {/block 'end'} */
}
