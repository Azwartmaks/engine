{foreach $mmyProducts as $product}
    <div class="clearfix"></div>
    <h3>{$product.name}</h3>
    {foreach $makeModel as $item}
        <div class="col-sm-4">
            <h4>{$item.make} {$product.name}</h4>
            <ul>
                {foreach $item.models as $model}
                    <li><b>{$model} {$product.name}</b></li>
                {/foreach}
            </ul>  
        </div>
    {/foreach}    
{/foreach}    