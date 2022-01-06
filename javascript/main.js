$(".formdata").submit(function (e) { 
    e.preventDefault();
    var fa=$(this)
    var submit=fa.find('[type="submit"]');
    var restore=submit.html()
    submit.html('veuillez patienter ...')
    submit.attr('disabled',true)
    $.ajax({
        type: "post",
        url: fa.attr('action'),
        data: fa.serialize(),
        dataType: "json",
        success: function (response) {
            submit.html(restore)
            submit.attr('disabled',false)
            fa.find('.message_response').html('<span class="response-success">'+response.message+'</span>')
        },
        error:function(error){
            submit.html(restore)
            submit.attr('disabled',false)
            fa.find('.message_response').html('<span class="response-danger">'+error.responseJSON.message+'</span>')
        }
    });
});

$(document).ready(function(){
    $("#myModal").modal('show');
});