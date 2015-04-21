<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="table-box blue">
                <div class="table-box-title">Products</div>
                <div class="table-box-body">
                    <a href="admin-addproduct.html" class="btn btn-success radius-none">Add Product &nbsp;<i class="fa fa-plus"></i></a>
                    <table class="table">
                        <thead>
                            <tr>
                                <td class="text-right">id</td>
                                <td class="text-center">ptype_name</td>
                                <td class="text-center">alias</td>
                                <td class="text-center">picture</td>
                                <td class="text-center">edit</td>
                                <td class="text-center">delete</td>
                            </tr>
                        </thead>
                        <?php foreach ($this->ptypes as $value):?>
                            <tr>
                                <td class="text-right"><?=$value['id']?></td>
                                <td class="text-center"><?=$value['name']?></td>
                                <td class="text-center"><?=$value['alias']?></td>
                                <td class="text-center">
                                    <img src="<?=$value['pic']?>" width="50" height="50"/>
                                </td>
                                <td class="text-center"><a href="admin-editproduct-<?=$value['id']?>.html"><i class="fa fa-pencil"></i></a></td>
                                <td class="text-center"><a href="admin-deleteproduct-<?=$value['id']?>.html"><i class="fa fa-trash"></i></a></td>
                            </tr>
                        <?php endforeach;?>
                    </table>
                </div>
            </div>
        </div>   
   
        <div class="col-sm-6">
            <div class="table-box blue">
                <div class="table-box-title">Products for MMY</div>
                <div class="table-box-body">
                    <a href="admin-addproductmmy.html" class="btn btn-success radius-none">Add Product &nbsp;<i class="fa fa-plus"></i></a>
                    <table class="table">
                        <thead>
                            <tr>
                                <td class="text-right">ptype_id</td>
                                <td class="text-center">ptype_name</td>
                                <td class="text-center">picture</td>
                                <td class="text-center">edit</td>
                                <td class="text-center">delete</td>
                            </tr>
                        </thead>
                        <?php foreach ($this->ptypesmmy as $value):?>
                            <tr>
                                <td class="text-right"><?=$value['ptype_id']?></td>
                                <td class="text-center"><?=$value['ptype_name']?></td>
                                <td class="text-center">
                                    <img src="<?=$value['pic']?>" width="50" height="50"/>
                                </td>
                                <td class="text-center"><a href="admin-editproductmmy-<?=$value['id']?>.html"><i class="fa fa-pencil"></i></a></td>
                                <td class="text-center"><a href="admin-deleteproductmmy-<?=$value['id']?>.html"><i class="fa fa-trash"></i></a></td>
                            </tr>
                        <?php endforeach;?>
                    </table>
                </div>
            </div>
        </div>
    </div> 
    <div class="row">
        <div class="col-sm-6">
            <div class="table-box blue">
                <div class="table-box-title">Products for Make Model</div>
                <div class="table-box-body">
                    <a href="admin-addproductmm.html" class="btn btn-success radius-none">Add Product &nbsp;<i class="fa fa-plus"></i></a>
                    <table class="table">
                        <thead>
                            <tr>
                                <td class="text-right">ptype_id</td>
                                <td class="text-center">ptype_name</td>
                                <td class="text-center">picture</td>
                                <td class="text-center">edit</td>
                                <td class="text-center">delete</td>
                            </tr>
                        </thead>
                        <?php foreach ($this->ptypesmm as $value):?>
                            <tr>
                                <td class="text-right"><?=$value['ptype_id']?></td>
                                <td class="text-center"><?=$value['ptype_name']?></td>
                                <td class="text-center">
                                    <img src="<?=$value['pic']?>" width="50" height="50"/>
                                </td>
                                <td class="text-center"><a href="admin-editproductmm-<?=$value['id']?>.html"><i class="fa fa-pencil"></i></a></td>
                                <td class="text-center"><a href="admin-deleteproductmm-<?=$value['id']?>.html"><i class="fa fa-trash"></i></a></td>
                            </tr>
                        <?php endforeach;?>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="table-box blue">
                <div class="table-box-title">Products for Make</div>
                <div class="table-box-body">
                    <a href="admin-addproductm.html" class="btn btn-success radius-none">Add Product &nbsp;<i class="fa fa-plus"></i></a>
                    <table class="table">
                        <thead>
                            <tr>
                                <td class="text-right">ptype_id</td>
                                <td class="text-center">ptype_name</td>
                                <td class="text-center">picture</td>
                                <td class="text-center">edit</td>
                                <td class="text-center">delete</td>
                            </tr>
                        </thead>
                        <?php foreach ($this->ptypesm as $value):?>
                            <tr>
                                <td class="text-right"><?=$value['ptype_id']?></td>
                                <td class="text-center"><?=$value['ptype_name']?></td>
                                <td class="text-center">
                                    <img src="<?=$value['pic']?>" width="50" height="50"/>
                                </td>
                                <td class="text-center"><a href="admin-editproductm-<?=$value['id']?>.html"><i class="fa fa-pencil"></i></a></td>
                                <td class="text-center"><a href="admin-deleteproductm-<?=$value['id']?>.html"><i class="fa fa-trash"></i></a></td>
                            </tr>
                        <?php endforeach;?>
                    </table>
                </div>
            </div>
        </div>
    </div>    
</div>

