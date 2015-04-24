
<div class="row wrapper">
    <div class="content col-sm-9">
        <div class="main-slider">
            <ul class="bxslider">
                <li><img src="views/images/inf.jpg" width="1140" height="520"/></li>
                <li><img src="views/images/pedestal-spoiler.jpg" width="1140" height="520"/></li>
                <li><img src="views/images/slide-3.jpg" width="1140" height="520"/></li>
            </ul>
        </div>
        <hr/>
        <h1>Performance Accessories</h1>
        <p>Basically, performance accessories are made and designed to improve the performance 
            of your ride and the driving experience, thus it is not a simple task. 
            In order to improve the overall performance of a car, it needs a combination 
            of few parts. The general idea is to upgrade the engine to start with. 
            However, there are various other parts, which need to be upgraded too. 
            These various other parts can be classified into four classes.
        </p>
        <img src="views/images/performance_accessories_prev.jpg" class="img-r"/>
        <p>Firstly, the brakes can be categorized as the most important part of a car as 
            they serve as a safety factor that controls the speed of the vehicle. 
            Upgrading the brakes has its own importance as it can affect the acceleration 
            and deceleration of the car’s speed and can save both the vehicle and the passengers 
            from any kind of mishaps. Therefore, it is indeed important to choose the right 
            one while buying them as below standard ones could lead to unfavorable conditions, 
            which we would all want to avoid.
        </p>    

        <p>Secondly, the car suspension as we know is referred as something that links 
            the vehicle to the wheels and the better they are the better the car is handled. 
            So, installing upgraded springs or shock absorbers become greatly imperative as
            it also holds the vehicle when brakes are applied or if there is any heavy 
            cargo in the car, which serves as a safety measure.
        </p>    

        <p>Thirdly, the engine, being the most important part of any car, it is 
            of high significance and should be focused on the most. 
            There are various options while enhancing the engine like horsepower 
            enhancer, upgrading the air intakes and the exhaust system. 
            The horsepower enhancer will obviously improve your car’s horsepower. 
            Thus, the upgraded air intakes enhance the whole air passing procedure 
            and keep the engine’s function smoothly. The quality exhaust system 
            on the other hand keep away all the toxic smokes that your car’s engine 
            produces, which will result in a decent increase in torque and horsepower.
            Furthermore, the muffler can also be upgraded, as it will result in an 
            increase in fuel efficiency. Combining all those parts will help greatly 
            in making the car perform at its best.
        </p>   
        <hr/>
        <p><img src="views/images/c-air-intakes.jpg" class="responsive"/></p>
        <p>Aftermarket air intake systems are one of the most popular engine modifications available for late model cars and trucks. 
            But why are they so popular? Didn't the manufacturer equip your car with the best parts available? 
            Well, it depends on your point of view, whether you're a car buff or only care about the cup holders. 
            Because you're reading this we assume you're in the former category, so read on for answers. 
            We'll explain what these systems do for your ride and why you need one.</p>
        
        <p>Modern vehicles are electronic marvels, with variable valve timing and other complexities that make traditional 
            hotrodding mods like cam replacement impossible or beyond the scope of the average enthusiast. 
            Their high level of tune from the factory also makes them hard to improve upon. 
            This makes the aftermarket air intake system the best investment for your performance dollar. 
            The manufacturers we represent have verifiable performance claims backed up by dyno testing. 
            One of these systems will increase your engine's horsepower and torque, with improved performance you can feel in the seat of your pants. 
            And, if you can restrain yourself, you might even see a few more miles per gallon! 
            An aftermarket air intake system is simply, the biggest bang for your buck.</p>
        <hr/>
        <p>Fourthly, the wheels and tires. It is very important to choose the right tires according to your environment or 
            location because your normal tires might just end up being useless when the road is slippery or in a snowy weather 
            or might just not work in rough roads. There are tires specially built for every type of environment. However, it might 
            not be the best idea to switch tires every time, so finding a tire, which suits every environment, becomes important. 
            So, this is where upgrading your normal tire needs to be done.</p>

        <p>All these upgrading features will lead to a few favorable things like your car’s speed limit gets high, 
            more firm and controllable drifts, your car will be able to take faster turns etc. However, choosing the right 
            performance parts for your car is best thing that you will have to do for yourself as it greatly depends on what 
            you decide to use in your car and it also depends how good your car is going to act.</p>

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