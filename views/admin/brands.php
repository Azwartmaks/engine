<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="table-box purple">
                <div class="table-box-title">Brands</div>
                <div class="table-box-body">
                    <a href="admin-addbrand.html" class="btn btn-success radius-none">Add Brand &nbsp;<i class="fa fa-plus"></i></a>
                    <table class="table">
                        <thead>
                            <tr>
                                <td class="text-right">id</td>
                                <td class="text-center">brand name</td>
                                <td class="text-center">alias</td>
                                <td class="text-center">logo</td>
                                <td class="text-center">edit</td>
                                <td class="text-center">delete</td>
                            </tr>
                        </thead>
                        <?php foreach ($this->allBrands as $value):?>
                            <tr>
                                <td class="text-right"><?=$value['id']?></td>
                                <td class="text-center"><?=$value['name']?></td>
                                <td class="text-center"><?=$value['alias']?></td>
                                <td class="text-center">
                                    <img src="<?=$value['pic']?>" width="50" height="50"/>
                                </td>
                                <td class="text-center"><a href="admin-editbrand-<?=$value['id']?>.html"><i class="fa fa-pencil"></i></a></td>
                                <td class="text-center"><a href="admin-deletebrand-<?=$value['id']?>.html"><i class="fa fa-trash"></i></a></td>
                            </tr>
                        <?php endforeach;?>
                    </table>
                </div>
            </div>
        </div>      
    </div>    
</div>

