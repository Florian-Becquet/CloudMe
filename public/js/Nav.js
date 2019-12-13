$(document).ready(function(){
  $('.tabAccueil').on('click',function(){
    var id = $(this).data('id');
    $.ajax({
        type: 'POST',
        url: 'info',
        data: 'id=' + id,
        success: function(data){
            $('#root').html(data);
        }
        })
})
  })
  