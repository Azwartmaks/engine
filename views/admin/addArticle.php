<div class="container">
    <h1>Add new article</h1>
    <form class="row" method="post" action="admin-savearticle.html" enctype="multipart/form-data">
        <div class="col-sm-6">
            <div class="form-group">
                <label>Article name</label>
                <input class="form-control" type="text" name="name" placeholder="name">
            </div>           
            <div class="form-group">
                <label>Article alias</label>
                <input class="form-control" type="text" name="alias" placeholder="alias">
            </div>
            <div class="form-group">
                <label>Article meta title</label>            
                <input class="form-control" type="text" name="title" placeholder="meta title">
            </div>
            <div class="form-group">
                <label>Article meta description</label>            
                <input class="form-control" type="text" name="meta_description" placeholder="meta description">
            </div>
            <div class="form-group">
                <label>Article meta keywords</label>            
                <input class="form-control" type="text" name="meta_keywords" placeholder="meta keywords">
            </div>
            <div class="form-group">
                <label>Article header(h1)</label>            
                <input class="form-control" type="text" name="header" placeholder="header (h1)">
            </div>
            <div class="form-group">
                <label>Article text</label>            
                <textarea class="form-control" name="text" placeholder="Text for this brand"></textarea>
            </div>
        </div>        
        <div class="col-sm-6">
            <div class="form-group">
                <input type="file" name="pic">
                <p class="help-block">Logo for this Article.</p>                
            </div>   
            <div class="form-group galleryData">                
                <label>Gallery images</label><hr/>
                <div class="img-dataBox">
                    <label>src</label>
                    <input type="text" name="imgpath[]" class="form-control"/>
                    <div class="row">
                        <div class="col-sm-6">
                            <label>alt</label>
                            <input type="text" name="imgalt[]" class="form-control"/>
                        </div>
                        <div class="col-sm-6">
                            <label>theme</label>                    
                            <input type="text" name="imgtheme[]" class="form-control"/>
                        </div>
                    </div>    
                </div>    
            </div>
            <div class="clearfix">
                <button type="button" class="btn-nostyle js-add-image">Add another image <i class="fa fa-plus"></i></button>
            </div>    
            <hr/>
            <div class="form-group">
                <label>Features</label>
                <textarea class="form-control" name="features" placeholder="Add some features"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Add article</button>
        </div>
    </form>
</div>