{extends file="../templates/main.html"} {block name=content}

<form action="{$app_url}/app/calc.php" method="post">
	<div class="fields">
		<div class="field">
			<label for="kwota">Kwota</label>
			<input type="text" name="kwota" id="name" value="{$form['kwota']}" />
		</div>
		<div class="field">
			<label for="lata">Ile lat</label>
			<input type="text" name="lata" id="email" value="{$form['lata']}" />
		</div>
		<div class="field">
			<label for="opr">Oprocentowanie</label>
			<input type="text" name="opr" id="email" value="{$form['opr']}" />
		</div>
	</div>
	<ul class="actions">
		<li><input type="submit" value="Oblicz" /></li>
	</ul>
</form>

{/block} {block name=end} {if (isset($messages))} {if (count ( $messages ) >
0)}
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
	{foreach $messages as $msg} {strip}
	<li>{$msg}</li>
	{/strip} {/foreach}
</ol>
{/if} {/if} {if isset($result)}
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
	{$result} {/if}
</div>

{/block}
