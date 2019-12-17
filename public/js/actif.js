$(document).ready(function(){
    $('.actif').on('click', function(){
        var target = $(this).data('target').val();
        $.ajax({
            type: 'POST', 
            url: 'actifUser',
            data: 'id=' + target ,
            success: function(data){
                console.log(data);
              }
        })
    })
});