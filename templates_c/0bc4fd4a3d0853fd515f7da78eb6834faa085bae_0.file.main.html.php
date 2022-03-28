<?php
/* Smarty version 4.1.0, created on 2022-03-28 11:40:29
  from 'C:\xampp\htdocs\php_01_widok_kontroler\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6241828d011f36_19681489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bc4fd4a3d0853fd515f7da78eb6834faa085bae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_01_widok_kontroler\\templates\\main.html',
      1 => 1648457942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6241828d011f36_19681489 (Smarty_Internal_Template $_smarty_tpl) {
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
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css" />
	</head>
	<body>
		<h1 style="color: white; text-align: center"></h1>

		<div id="wrapper" class="fade-in">
			<footer id="footer">
				<section>
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20556436196241828d0113c2_11845577', 'content');
?>

				</section>
			</footer>
		</div>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20712281836241828d011a45_95819626', 'end');
?>

	</body>
</html>
<?php }
/* {block 'content'} */
class Block_20556436196241828d0113c2_11845577 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20556436196241828d0113c2_11845577',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości ... <?php
}
}
/* {/block 'content'} */
/* {block 'end'} */
class Block_20712281836241828d011a45_95819626 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_20712281836241828d011a45_95819626',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki ... <?php
}
}
/* {/block 'end'} */
}
