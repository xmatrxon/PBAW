<?php
/* Smarty version 4.1.0, created on 2022-04-02 21:02:27
  from 'C:\xampp\htdocs\php_01_widok_kontroler\app\views\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62489dc3659b92_10286953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c16953bb8aaea6a7e95f507da931cdedb1ca774e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_01_widok_kontroler\\app\\views\\CalcView.tpl',
      1 => 1648926005,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62489dc3659b92_10286953 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191883363862489dc35892b0_29030490', 'content');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_96854489762489dc35cd240_32185909', 'end');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
}
/* {block 'content'} */
class Block_191883363862489dc35892b0_29030490 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_191883363862489dc35892b0_29030490',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
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
class Block_96854489762489dc35cd240_32185909 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_96854489762489dc35cd240_32185909',
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

	<span> zł</span> 
	<?php }?>
</div>

<?php
}
}
/* {/block 'end'} */
}
