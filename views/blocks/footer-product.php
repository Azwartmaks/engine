<ul class="list-inline">
    <?php foreach ($this->makes as $make):?>
    <li><a href="<?=$make['make'].'-'.$this->productUrl.'.html'?>"><?=$make['make'].' '.$this->product?></a></li>
    <?php endforeach;?>
</ul>