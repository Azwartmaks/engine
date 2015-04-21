<div class="main-slider">
    <ul class="bxslider">
        <li><img src="views/images/inf.jpg" width="1140" height="520"/></li>
        <li><img src="views/images/pedestal-spoiler.jpg" width="1140" height="520"/></li>
        <li><img src="views/images/slide-3.jpg" width="1140" height="520"/></li>
    </ul>
</div>
<div class="wrapper">
    <div class="content col-sm-8">
        <div class="main-banner">
            <img src="views/images/bg_header.jpg" class="responsive">
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

    </div>
    <div class="sidebar col-sm-4">
        <?php //var_dump($this->products);?>
        <div class="side-block first">
            <div class="side-h2">
                Car components
            </div>
            <ul class="side-list">
                <?php foreach ($this->products as $value):?>
                <li><a href="<?php if($value['alias']=='performance-accessories'){
                        echo "";                    
                    }else{
                        echo $value['alias'].".html";
                    }
                    ?>"><?=ucwords($value['name']);?></a></li>
                <?php endforeach;?>
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