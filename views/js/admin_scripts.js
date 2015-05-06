$(function(){
    $('.js-ptype-name').change(function(){
        ptype_name = $(this).children(':selected').text(); 
        $("input[name='ptype_name']").val(ptype_name);
    });
    $('.js-add-image').click(function(){
        $('.galleryData').append('<div class="img-dataBox"><button type="button" class="pull-right btn-nostyle js-delete-img-data">'
            +'<i class="fa fa-times"></i></button>'
            +'<label>src</label><input type="text" name="imgpath[]" class="form-control"/><div class="row">' 
            +'<div class="col-sm-6"><label>alt</label><input type="text" name="imgalt[]" class="form-control"/></div>'
            +'<div class="col-sm-6"><label>theme</label><input type="text" name="imgtheme[]" class="form-control"/></div></div></div>'); 
    });
    
    $('.galleryData').on('click','.js-delete-img-data',function(){
        $(this).parent('div').remove();
    });
});

