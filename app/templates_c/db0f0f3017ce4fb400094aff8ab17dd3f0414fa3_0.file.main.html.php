<?php
/* Smarty version 4.1.0, created on 2022-03-28 11:40:35
  from 'C:\xampp\htdocs\php_01_widok_kontroler\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6241829398b4a0_78884868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db0f0f3017ce4fb400094aff8ab17dd3f0414fa3' => 
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
function content_6241829398b4a0_78884868 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19502703946241829398a9a1_54260626', 'content');
?>

				</section>
			</footer>
		</div>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8579476886241829398b003_68249109', 'end');
?>

	</body>
</html>
<?php }
/* {block 'content'} */
class Block_19502703946241829398a9a1_54260626 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19502703946241829398a9a1_54260626',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości ... <?php
}
}
/* {/block 'content'} */
/* {block 'end'} */
class Block_8579476886241829398b003_68249109 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'end' => 
  array (
    0 => 'Block_8579476886241829398b003_68249109',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki ... <?php
}
}
/* {/block 'end'} */
}
