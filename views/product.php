<div class="wrapper">
    <div class="content col-sm-9">
        <div class="breadcrumbs">
            <?=$this->breadcrumbs;?>
        </div>
        <hr/>
        <h1><?=ucwords($this->header);?></h1>
        <?php if(!empty($this->subProducts)):?>
            <ul class="subptype-list">
                <?php foreach ($this->subProducts as $value): ?>
                <li><a href="<?=$value['alias']?>.html"><?=$value['header'];?></a></li>
                <?php endforeach;?>
            </ul>
        <?php endif;?>
        <?=$this->text;?>

    </div>
    <div class="sidebar col-sm-3">
        <?php //var_dump($this->products);?>
        <div class="side-block first">
            <div class="side-h2">
                Car components
            </div>
            <ul class="side-list">
                <?php foreach ($this->products as $value):?>
                <li><a href="<?php if($value['alias']=='performance-accessories'){
                        echo "/";                    
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
<?php require 'views/blocks/footer-product.php';?>