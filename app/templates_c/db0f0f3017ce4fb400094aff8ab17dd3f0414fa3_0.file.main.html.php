<?php
/* Smarty version 4.1.0, created on 2022-03-27 21:43:56
  from 'C:\xampp\htdocs\php_01_widok_kontroler\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6240be7c06d602_24133881',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db0f0f3017ce4fb400094aff8ab17dd3f0414fa3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_01_widok_kontroler\\templates\\main.html',
      1 => 1648410233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6240be7c06d602_24133881 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="<?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? "Opis
		domyślny" ?? null : $tmp);?>
">

		<title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/main.css" />
	</head>
	<body>
		<h1 style="color: white; text-align: center"></h1>

		<div id="wrapper" class="fade-in">
			<footer id="footer">
				<section>
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19594585256240be7c06c940_08962027', 'content');
?>

				</section>
			</footer>
		</div>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14959559696240be7c06d0e8_01856790', 'end');
?>

	</body>
</html>
<?php }
/* {block 'content'} */
class Block_19594585256240be7c06c940_08962027 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19594585256240be7c06c940_08962027',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości ... <?php
}
}
/* {/block 'content'} */
/* {block 'end'} */
class Block_14959559696240be7c06d0e8_01856790 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_14959559696240be7c06d0e8_01856790',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki ... <?php
}
}
/* {/block 'end'} */
}
