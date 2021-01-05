$(document).ready(function(){

$('#user_login_form').validate({
    submitHandler:function(form){
        var btn = $('user_login_btn');
        $.ajax({
            type: "post",
            url: $('#user_login_form').attr('data-url'),
            data: new FormData($('#user_login_form')[0]),
            dataType: "json",
            contentType: false,
            cache: false,
            processData: false,
            success: function (r) {
                if(r.sts == 'success'){
                    window.location.href=r.url;
                    return false;
                }else{
                    console.log(r.msg);
                }
            }
        });

    }
})




})