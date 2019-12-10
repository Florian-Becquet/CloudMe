$(document).ready(function(){
 



    $('.choix').on('click',function(){
      var target = $(this).data('target');
      $.ajax({
        type: 'POST',
        url: 'forfait',
        data: 'forfait=' + target,
        success: function(data){
          $('#root').html(data);
        }
      })
    })
  })
  