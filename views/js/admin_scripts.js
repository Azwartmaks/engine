$(function(){
    $('.js-ptype-name').change(function(){
        ptype_name = $(this).children(':selected').text(); 
        $("input[name='ptype_name']").val(ptype_name);
        console.log($("input[name='ptype_name']").val())
    });
});

