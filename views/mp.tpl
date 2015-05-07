<div class="wrapper mt30">
    <div class="content col-sm-9">
        <div class="main-banner">
            <img src="views/images/bg_header.jpg" class="responsive">
        </div>
        {include file="blocks/breadcrumbs_mp.tpl"}
        <hr/>
        <h1>{$header}</h1>
{*        {$text}*}
        <p>You can install a grill or <a href="http://www.scienceg8.com/abs-plastic-body-kits.html">ABS Plastic Body Kits</a> on your car. It will make your car more attractive but it won't make your vehicle faster. If you want to have a fast car install some performance accessories.</p>
        <p>Automobiles industry is one of the largest sectors in this whole world since everyone nowadays owns a vehicle. Moreover, any sector that is big obviously includes a lot of competition. Therefore, to keep up with the competition, creativity becomes very important. Acura cars have its own status in the automobiles industry and are mostly popular for their wide range of racing cars. Undoubtedly, it is very famous and known brand in the Automobiles industry nowadays, mostly because of its awesome performance, which is a result of Acura performance accessories.</p>
        <p><b>{$make|capitalize}</b> does not stop right after launching their new models, but they also do provide various additional performance parts for the Acura owners. So upgrading your car with these performance parts can add up to extra performance rating than previously.</p>
        <p>There is a huge amount of additional performance parts for Acura cars that are available in the market, but below mentioned are the most important and basic parts mentioned.</p>
        <p>1. {$make|capitalize} Exhaust system: Custom Exhaust is pretty big in size and it works perfectly in keeping the engine clean from toxics and helps boosting the torque along with the horsepower.</p>
        <p>2. {$make|capitalize} Air intakes: are much better than the normal intakes and they work far better as they are specially made for mustang cars. The air filters and the latest technology used in those intakes never lets the engine heat up and are even takes care of the engine on rainy days.</p>
        <p>3. {$make|capitalize} Pulley: adds the extra punch that you need for your ride and increases the horsepower. It is generally made of aluminium and adds that exact extra boost that your Acura might need.</p>
        <p>4. {$make|capitalize} Headers: Headers might not seem that important but it does give your car a decent amount of power boost, more fuel efficiency and better performance of the exhaust system and obviously, Acura Headers being specially built for its cars serves all these actions better than the normal ones.</p>
        <p>These four parts are the main ones that are needed to be upgraded in your car, it’s not like they are needed to be done at once but they all add their own benefit to the car’s overall performance. Therefore, it would be wise to upgrade them all.</p>
    </div>
    <div class="sidebar col-sm-3">
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
                {$make|capitalize} model
            </div>
            <ul class="side-list">
                {foreach $models as $model}
                    <li><a href="{$make}-{$model.model}-{$productUrl}.html"><b>{$model.model|capitalize}</b> {$productname}</a></li>
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
{include file="blocks/footer-product.tpl"}
