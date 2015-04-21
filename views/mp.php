<div class="wrapper mt30">
    <div class="content col-sm-8">
        <div class="main-banner">
            <img src="views/images/bg_header.jpg" class="responsive">
        </div>
        <hr/>
        <h1><?=$this->header?></h1>
        <?=$this->text;?>
        <ul>
            <?php foreach ($this->models as $model):?>
            <li><a href="<?=$this->make.'-'.$model['model'].'-'.$this->productUrl.'.html'?>"><?=$model['model'].' '.$this->product?></a></li>
            <?php endforeach;?>
        </ul>
        
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