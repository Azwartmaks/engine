<div class="container">
    <h1>Edit brand <?=$this->brandData[0]['name']?></h1>
    <form class="row" method="post" action="admin-updatebrand-<?=$this->brandData[0]['brand_id']?>.html" enctype="multipart/form-data">
        <div class="col-sm-6">
            <div class="form-group">
                <label>Brand name</label>
                <input class="form-control" type="text" name="name" value="<?=$this->brandData[0]['name']?>">
            </div>           
            <div class="form-group">
                <label>Brand alias</label>
                <input class="form-control" type="text" name="alias" value="<?=$this->brandData[0]['alias']?>">
            </div>
            <div class="form-group">
                <label>Brand meta title</label>            
                <input class="form-control" type="text" name="title" value="<?=$this->brandData[0]['title']?>">
            </div>
            <div class="form-group">
                <label>Brand meta description</label>            
                <input class="form-control" type="text" name="meta_description" value="<?=$this->brandData[0]['meta_description']?>">
            </div>
            <div class="form-group">
                <label>Brand meta keywords</label>            
                <input class="form-control" type="text" name="meta_keywords" value="<?=$this->brandData[0]['meta_keywords']?>">
            </div>
            <div class="form-group">
                <label>Brand header(h1)</label>            
                <input class="form-control" type="text" name="header" value="<?=$this->brandData[0]['header']?>">
            </div>
            <div class="form-group">
                <label>Brand text</label>            
                <textarea class="form-control" name="text"><?=$this->brandData[0]['text']?></textarea>
            </div>
        </div>        
        <div class="col-sm-6">
            <div class="form-group">
                <input type="file" name="pic">
                <p class="help-block">Current logo for this brand.</p>     
                <p><img src="<?=$this->brandData[0]['pic']?>" /></p>
            </div>   
            <div class="form-group galleryData">                
                <label>Gallery images</label><hr/>
             
                <?php $i=0;
                    foreach($this->imgsrc as $img):?>
                    <div class="img-dataBox">
                        <?php if($i>0):?>
                            <button type="button" class="pull-right btn-nostyle js-delete-img-data">
                                <i class="fa fa-times"></i>
                            </button>
                        <?php endif;?>
                        <label>src</label>
                        <input type="text" name="imgpath[]" class="form-control" value="<?=$img?>"/>
                        <div class="row">
                            <div class="col-sm-6">
                                <label>alt</label>
                                <input type="text" name="imgalt[]" class="form-control" value="<?=$this->alt[$i]?>"/>
                            </div>
                            <div class="col-sm-6">
                                <label>theme</label>                    
                                <input type="text" name="imgtheme[]" class="form-control" value="<?=$this->theme[$i]?>"/>
                            </div>
                        </div>    
                    </div> 
                <?php $i++; endforeach;?>
            </div>
            <div class="clearfix">
                <button type="button" class="btn-nostyle js-add-image">Add another image <i class="fa fa-plus"></i></button>
            </div>    
            <hr/>
            <div class="form-group">
                <label>Features</label>
                <textarea class="form-control" name="features"><?=$this->brandData[0]['features']?></textarea>
            </div>
            <button type="submit" class="btn btn-default">Save changes</button>
        </div>
    </form>
</div>