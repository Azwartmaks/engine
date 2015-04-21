<div class="container">
    <h1>Edit product <?=$this->productData['ptype_name']?> in <?=$this->tablename;?> table</h1>
    <form class="row" method="post" action="admin-<?=$this->formAction;?>-<?=$this->productData['id']?>.html" enctype="multipart/form-data">
        <div class="col-sm-6">
            <div class="form-group">
                <label>Product name</label>                
                <select class="js-ptype-name form-control" name="ptype_id">
                    <option value="<?=$this->productData['ptype_id']?>"><?=$this->productData['ptype_name']?></option>
                    <option>&nbsp</option>
                    <?php foreach ($this->products as $value):?>
                    <option value="<?=$value['id']?>"><?=$value['name']?></option>
                    <?php endforeach;r?>
                </select>
                <input type="hidden" name="ptype_name" value="<?=$this->productData['ptype_name']?>"/>
            </div>           
            <div class="form-group">
                <label>Product meta title</label>            
                <input class="form-control" type="text" name="title" value="<?=$this->productData['title']?>">
            </div>
            <div class="form-group">
                <label>Product meta description</label>            
                <input class="form-control" type="text" name="meta_description" value="<?=$this->productData['meta_description']?>">
            </div>
            <div class="form-group">
                <label>Product meta keywords</label>            
                <input class="form-control" type="text" name="meta_keywords" value="<?=$this->productData['meta_keywords']?>">
            </div>
            <div class="form-group">
                <label>Product header(h1)</label>            
                <input class="form-control" type="text" name="header" value="<?=$this->productData['header']?>">
            </div>
            <div class="form-group">
                <label>Product text</label>            
                <textarea class="form-control" name="text"><?=$this->productData['text']?></textarea>
            </div>
        </div>        
        <div class="col-sm-6">
            <p class="help-block">Current thumbnail for this product.</p>
            <p><img src="<?=$this->productData['pic']?>" /></p>
            
            <input type="file" name="pic">
            <p class="help-block">Thumbnail for this product.</p>
            <hr/>
            <button type="submit" class="btn btn-default">Save changes</button>
        </div>    
        
    </form>
</div>


