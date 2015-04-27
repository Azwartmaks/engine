<div class="breadcrumbs">
{if $parentId==0}
    <a href='/'>Home</a><span class='sep'><i class='fa fa-caret-right'></i></span>
    {$productname|capitalize}
{else}
    <a href='/'>Home</a><span class='sep'><i class='fa fa-caret-right'></i></span>
    <a href='{$parentProduct.alias}.html'>{$parentProduct.name|capitalize}</a>
    <span class='sep'><i class='fa fa-caret-right'></i></span>        
    {$productname|capitalize}
{/if}    
</div>