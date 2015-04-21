<div class="container">
    <?php $value = $this->productData;?>
    <h1>Edit product</h1>
    <form class="row" method="post" action="admin-updateproduct-<?=$value['id']?>.html" enctype="multipart/form-data">
        <div class="col-sm-6">
            <div class="form-group">
                <label>Product ID - <?=$value['id'];?></label>
                <br/>
                <label>Product name</label>
                <input class="form-control" type="text" name="name" value="<?=$value['name']?>">
            </div>
            <div class="form-group">
                <label>Product alias</label>
                <input class="form-control" type="text" name="alias" value="<?=$value['alias']?>">
            </div>
            <div class="form-group">
                <label>Product meta title</label>
                <input class="form-control" type="text" name="title" value="<?=$value['title']?>">
            </div>
            <div class="form-group">
                <label>Product meta description</label>
                <input class="form-control" type="text" name="meta_description" value="<?=$value['meta_description']?>">
            </div>
            <div class="form-group">
                <label>Product meta keywords</label>
                <input class="form-control" type="text" name="meta_keywords" value="<?=$value['meta_keywords']?>">
            </div>
            <div class="form-group">
                <label>Product header(h1)</label>
                <input class="form-control" type="text" name="header" value="<?=$value['header']?>">
            </div>
            <div class="form-group">
                <label>Product text</label>
                <textarea class="form-control" name="text"><?=$value['text']?></textarea>
            </div>    
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>Table of relations in database</label>
                <input class="form-control" type="text" name="rel_table" value="<?=$value['rel_table']?>"/>
            </div>
            <div class="form-group">
                <label>Parent product</label>
                <select class="form-control" name="parent_id">
                    <option value="0" selected="selected">None</option>
                    <?php foreach ($this->productsData as $value): ?>
                    <option value="<?=$value['id']?>"><?=$value['name']?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <p class="help-block">Current thumbnail for this product.</p>
            <p><img src="<?=$value['pic']?>" /></p>
            
            <input type="file" name="pic">
            <p class="help-block">Thumbnail for this product.</p>
            <hr/>
            <button type="submit" class="btn btn-default">Save changes</button>
        </div>    
        
    </form>
</div>