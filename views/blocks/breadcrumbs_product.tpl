<div class="breadcrumbs">
{if $parentId==0}
    <a href='/'>Home</a><span class='sep'><i class='fa fa-caret-right'></i></span>
    {$productname|capitalize}
{else}
    <a href='/'>Home</a><span class='sep'><i class='fa fa-caret-right'></i></span>
    <a href='{$parentProduct.0.alias}.html'>{$parentProduct.0.name|capitalize}</a>
    <span class='sep'><i class='fa fa-caret-right'></i></span>        
    {$productname|capitalize}
{/if}    
</div>