<?php
/* Smarty version 4.1.0, created on 2022-04-02 21:02:27
  from 'C:\xampp\htdocs\php_01_widok_kontroler\app\views\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62489dc3745130_69355153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e612c6de14f4905ca9ca8c410ebb98d64b44105' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_01_widok_kontroler\\app\\views\\templates\\main.html',
      1 => 1648457942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62489dc3745130_69355153 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_208002859762489dc3744342_60531186', 'content');
?>

				</section>
			</footer>
		</div>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_52049770162489dc3744b24_41848037', 'end');
?>

	</body>
</html>
<?php }
/* {block 'content'} */
class Block_208002859762489dc3744342_60531186 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_208002859762489dc3744342_60531186',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości ... <?php
}
}
/* {/block 'content'} */
/* {block 'end'} */
class Block_52049770162489dc3744b24_41848037 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_52049770162489dc3744b24_41848037',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki ... <?php
}
}
/* {/block 'end'} */
}
