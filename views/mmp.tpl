<div class="wrapper mt30">
    <div class="content col-sm-9">
        <div class="main-banner">
            <img src="views/images/bg_header.jpg" class="responsive">
        </div>
        {include file="blocks/breadcrumbs_mmp.tpl"}
        <hr/>
        <h1>{$header}</h1>
{*        {$text}*}
        <p>If we speak of performance cars, it is no longer new that every car enthusiast is obsessed with their luxury or sports cars with installed custom grilles.</p>
        <p>If we speak of performance cars, it is no longer new that every car enthusiast is obsessed with their luxury or sports cars. If this is so, those car owners love their auto to be the finest of all when being compared from others. It is a guy thing, as everybody knows of this trait, when it comes to cars, they want something that they can boost it out. Because of the desires of those car lovers that theirs will be astounding, this ascends the emerged of customized and modifications of cars. Moreover, since the potential of this investment, market is feasible, more and more auto companies dive in with the car trends and began to invent gears for this purpose. Hence, if you are looking for performance parts of your <b>{$make|capitalize} {$model|capitalize}</b>, they are available even online and you can certainly find anything you wish for without hassle.</p>
	<p>With the endless popularity of this trend, even the purpose of having a car has changed. At first, it was of necessity, but today’s era, it is now part of a hobby. Car companies of any car makes and models of course have thought of it that’s why they had came up with customizations that can absolutely keep with uniqueness, versatility or simply ensembles the car owner’s personality and style.</p>
	<p>People who may not be aware of this {$make|capitalize} {$model|capitalize} trend will point their fingers as the culprit of this modification madness. But, do they really know how this trend started? Car owners of {$make|capitalize} {$model|capitalize} joined  hands together yearly and discuss on how this car makes and models perform well. They meet up not just to discuss the modifications on the appearance of the car, but likewise deal with the modifications they can make on the mechanical operation. Those {$make|capitalize} {$model|capitalize} owners absolutely want theirs to appear exceptional and fastest ever imagined.</p>
	<p><b>{$make|capitalize} {$model|capitalize}</b> performance accessories never failed its car enthusiasts to supply only the best. It only wants a level-up performance to its car models. More so, it wanted its car owners to get satisfied and impressed with superb engine system performance. They keep the over-all parts to be performing well without fail. The reason for keeping each {$make|capitalize} {$model|capitalize} is superior in every part is due to the fact that when one part fails, the entire mechanical functionality also fails. Therefore, <b>{$model|capitalize}</b> and other models performance accessories are certainly designed to enhance and upgrade the driving dynamics as well the car’s looks and style. For example, <b>{$make|capitalize}</b>  <a href="http://www.scienceg8.com/abs-plastic-body-kits.html">body kits</a> are for purposes to put style on the car’s body. Such body kits include ground effects, wings or spoilers, body panel accessories and skirts, and fender flares.</p>
	<p>In addition, {$make|capitalize} {$model|capitalize} performance parts is spoiler or wings, such are designed for purposes of style and function of the car. More so, it upgrades the speed of the car and thus best for sports and racing cars.</p>
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
        <div class="side-block">
            <div class="side-h2">
                Choose year for your {$make|capitalize} {$model|capitalize}
            </div>
            <ul class="side-list">
                {foreach $years as $year}
                    <li><a href="{$year.year}-{$make}-{$model}-{$productUrl}.html">{$year.year} {$make} {$model} {$product}</a></li>
                {/foreach}
            </ul>
        </div> 
        <div class="side-block">
            <div class="side-h2">
                Choose other model
            </div>
            <ul class="side-list">
                {foreach $models as $model}
                <li><a href="{$make}-{$model.model}-{$productUrl}.html">{$model.model} {$productname}</a></li>
                {/foreach}
            </ul>
        </div> 
        <div class="side-block">
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