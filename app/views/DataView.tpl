{extends file="main.tpl"}

{block name=content}
    {foreach $database as $record}
        {strip}
            <table>
                <tr>
                    <td> {"ID:  "} {$record["id_wynik"]} </td>
                    <td> {"Data:  "} {$record["data"]} </td>
                    <td> {"Kwota:  "} {$record["kwota"]} </td>
                    <td> {"Lata:  "} {$record["lata"]} </td>
                    <td> {"Oprocentowanie:  "} {$record["procent"]} </td>
                    <td> {"Rata:  "} {$record["rata"]} </td>
                    </br>
                </tr>
            </table>
        {/strip} 
    {/foreach}	
{/block}