jQuery(document).ready(function(){
    console.log("hello");
    $('#add').click(function(){
        editData('add');
        
    });
    $('#del').click(function(){
        editData('del');
    });
    function editData(type){
        var code = $("#code").val();
        if($('#currentNum').html()<=1 && type=='del') {
            alert('不能再减了');
            return;
        }
        $.ajax({
            type: "GET",
            url: "index.php?r=cart/"+type+"&code="+code,
            dataType: "json",
            success: function(data){
                        $('#currentNum').html(data.reault.num);
            }
        });
    }
});