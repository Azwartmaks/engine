<div class="wrapper mt30">
    <div class="content col-sm-8">
        <div class="main-banner">
            <img src="views/images/bg_header.jpg" class="responsive">
        </div>
        <hr/>
        <h1>{$header}</h1>
        {$text}
        
        <h3>Choose one of {$make} model</h3>
        <ul>
            {foreach $models as $model}
            <li><a href="{$make}-{$model.model}-{$productUrl}.html">{$model.model} {$productname}</a></li>
            {/foreach}
        </ul>
    </div>
    <div class="sidebar col-sm-4">
        <div class="side-block first">
            <div class="side-h2">
                Car components
            </div>
            <ul class="side-list">                
                {foreach $products as $product}
                <li>
                    <a  {if $product.alias=='performance-accessories'}
                            href='/'
                        {else}
                            href='{$product.alias}.html'            
                        {/if}>{$product.name|capitalize}</a>
                </li>   
                {/foreach}
            </ul>
        </div>
        <div class="side-block first">
            <div class="side-h2">
                Videos
            </div>
            <ul class="side-list">
                <li><a href="http://www.youtube.com/watch?v=eame263N0WY" rel="nofollow" target="_blank">How The Car Works</a></li>
                <li><a href="http://www.youtube.com/watch?v=OT_WaDQ191E" rel="nofollow" target="_blank">ABS In Cars</a></li>
                <li><a href="http://www.youtube.com/watch?v=7MpoPNK-gNg" rel="nofollow" target="_blank">Nissan's Direct Injection</a></li>
                <li><a href="http://www.youtube.com/watch?v=8pxK8fRsNMM" rel="nofollow" target="_blank">Power Steering Pump Removal</a></li>
            </ul>
        </div>    
    </div>
    <div class="clearfix"></div>
</div>    