<?php if(!$this->subtype):?>
<div class="container row">
    <div class="col-sm-9">
        <hr/>
        <div class="col-sm-3">
            <ul class="side-list">
                <?php 
                $i=0; $lng = ceil(count($this->makes)/4);
                foreach ($this->makes as $make):?>
                <li><a href="<?=$make['make'].'-'.$this->productUrl.'.html'?>"><?=  str_replace('-', ' ', ucwords($make['make'])).' '.ucwords($this->product);?></a></li>
                <?php $i++;
                if($i==$lng): $i=0;?>
            </ul>
        </div>
        <div class="col-sm-3">
            <ul class="side-list">
                <?php endif;endforeach;?>
            </ul>
        </div>  
    </div>    
</div>    
<?php endif;?>