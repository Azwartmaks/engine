{if !$subtype}
<div class="container row">
    <div class="col-sm-9">
        <hr/>
        <div class="col-sm-3">
            <ul class="side-list">
                {counter assign=i start=0 print=false}
                {assign var="lng" value=(($makes|@count)/4)|ceil}
                {foreach $makes as $make}
                <li><a href="{$make.make}-{$productUrl}.html">
                        {$make.make|replace:'-':' '|capitalize} {$productname|capitalize}</a></li>
                {assign var="i" value=$i+1}
                {if $i==$lng}
                    {assign var="i" value=0}
            </ul>
        </div>
        <div class="col-sm-3">
            <ul class="side-list">
                {/if}
                {/foreach}
            </ul>
        </div>  
    </div>    
</div>    
{/if}