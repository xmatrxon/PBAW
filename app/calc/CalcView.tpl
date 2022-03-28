{extends file=$conf->root_path|cat:"/templates/main.html"} {block name=content}

<form action="{$conf->action_root}calcCompute" method="post">
	<div class="fields">
		<div class="field">
			<label for="kwota">Kwota</label>
			<input type="text" name="kwota" id="name" value="{$form->kwota}" />
		</div>
		<div class="field">
			<label for="lata">Ile lat</label>
			<input type="text" name="lata" id="email" value="{$form->lata}" />
		</div>
		<div class="field">
			<label for="opr">Oprocentowanie</label>
			<input type="text" name="opr" id="email" value="{$form->opr}" />
		</div>
	</div>
	<ul class="actions">
		<li><input type="submit" value="Oblicz" /></li>
	</ul>
</form>

{/block} {block name=end} 
{if $msgs->isError()}
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
	{foreach $msgs->getErrors() as $err} 
	{strip}
	<li>{$err}</li>
	{/strip} 
	{/foreach}
</ol>
{/if}
{if isset($res->result)}
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
	{$res->result}
	<span> zł</span> 
	{/if}
</div>

{/block}
