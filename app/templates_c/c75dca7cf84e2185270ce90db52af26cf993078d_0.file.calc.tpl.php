<?php
/* Smarty version 4.1.0, created on 2022-03-27 21:41:24
  from 'C:\xampp\htdocs\php_01_widok_kontroler\app\calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6240bde4772750_55484859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c75dca7cf84e2185270ce90db52af26cf993078d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_01_widok_kontroler\\app\\calc.tpl',
      1 => 1648410077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6240bde4772750_55484859 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9834932176240bde47681e5_10687439', 'content');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15801678636240bde476baa8_66154945', 'end');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'content'} */
class Block_9834932176240bde47681e5_10687439 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9834932176240bde47681e5_10687439',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
	<div class="fields">
		<div class="field">
			<label for="kwota">Kwota</label>
			<input type="text" name="kwota" id="name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['kwota'];?>
" />
		</div>
		<div class="field">
			<label for="lata">Ile lat</label>
			<input type="text" name="lata" id="email" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['lata'];?>
" />
		</div>
		<div class="field">
			<label for="opr">Oprocentowanie</label>
			<input type="text" name="opr" id="email" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['opr'];?>
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
class Block_15801678636240bde476baa8_66154945 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_15801678636240bde476baa8_66154945',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php if (((isset($_smarty_tpl->tpl_vars['messages']->value)))) {?> <?php if ((count($_smarty_tpl->tpl_vars['messages']->value) > 0)) {?>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?> <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ol>
<?php }?> <?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
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
	<?php echo $_smarty_tpl->tpl_vars['result']->value;?>
 <?php }?>
</div>

<?php
}
}
/* {/block 'end'} */
}
