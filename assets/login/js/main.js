$(() => {
    $('#eye span').on('click', function(e){
        e.preventDefault();
        if($('#eye input').attr("type") == "text"){
            $('#eye input').attr("type", "password");
            $('#eye i').addClass("fa-eye");
            $('#eye i').removeClass("fa-eye-slash");
        }else if($('#eye input').attr("type") == "password"){
            $('#eye input').attr("type", "text");
            $('#eye i').addClass("fa-eye-slash");
            $('#eye i').removeClass("fa-eye");
        }
    });
});