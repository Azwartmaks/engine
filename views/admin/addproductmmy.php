<div class="container">
    <h1>Add product to <?=$this->tablename;?> table</h1>
    <form class="row" method="post" action="admin-saveproductmmy.html" enctype="multipart/form-data">
        <div class="col-sm-6">
            <div class="form-group">
                <label>Product name</label>                
                <select class="js-ptype-name form-control" name="ptype_id">
                    <option>Select product</option>
                    <?php foreach ($this->products as $value):?>
                    <option value="<?=$value['id']?>"><?=$value['name']?></option>
                    <?php endforeach;r?>
                </select>
                <input type="hidden" name="ptype_name" value=""/>
            </div>           
            <div class="form-group">
                <label>Product meta title</label>            
                <input class="form-control" type="text" name="title" placeholder="meta title">
            </div>
            <div class="form-group">
                <label>Product meta description</label>            
                <input class="form-control" type="text" name="meta_description" placeholder="meta description">
            </div>
            <div class="form-group">
                <label>Product meta keywords</label>            
                <input class="form-control" type="text" name="meta_keywords" placeholder="meta keywords">
            </div>
            <div class="form-group">
                <label>Product header(h1)</label>            
                <input class="form-control" type="text" name="header" placeholder="header (h1)">
            </div>
            <div class="form-group">
                <label>Product text</label>            
                <textarea class="form-control" name="text" placeholder="Text for this product"></textarea>
            </div>
        </div>        
        <div class="col-sm-6">
            <input type="file" name="pic">
            <p class="help-block">Thumbnail for this product.</p>
            <hr/>
            <button type="submit" class="btn btn-default">Add product</button>
        </div>    
        
    </form>
</div>


