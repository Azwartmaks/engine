<div class="container">
    <h1>Add new product</h1>
    <form class="row" method="post" action="admin-saveproduct.html" enctype="multipart/form-data">
        <div class="col-sm-6">
            <div class="form-group">
                <label>Product name</label>
                <input class="form-control" type="text" name="name" placeholder="product type name">
            </div>           
            <div class="form-group">
                <label>Product alias</label>
                <input class="form-control" type="text" name="alias" placeholder="product type alias">
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
            <div class="form-group">
                <label>Table of relations in database</label>
                <input class="form-control" type="text" name="rel_table" placeholder="example: some_table" value=""/>
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
            <input type="file" name="pic">
            <p class="help-block">Thumbnail for this product.</p>
            <hr/>
            <button type="submit" class="btn btn-default">Add product</button>
        </div>    
        
    </form>
</div>


