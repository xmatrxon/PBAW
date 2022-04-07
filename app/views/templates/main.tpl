<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="{$page_description|default:"Opis
		domyślny"}">

		<title>{$page_title|default:"Tytuł domyślny"}</title>
		<link rel="stylesheet" href="{$conf->app_url}/assets/css/main.css" />
	</head>
	<body>
		<h1 style="color: white; text-align: center"></h1>

		<div id="wrapper" class="fade-in">
			<footer id="footer">
				<section>
					{block name=content} Domyślna treść zawartości ... {/block}
				</section>
			</footer>
		</div>
		{block name=end}{/block}
	</body>
</html>
