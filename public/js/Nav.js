$(document).ready(function(){
  

  
  
  $('.subscription').on('click',function(){
    var val = $(this).html();

    
  
        var target = $(this).data('target');
        $.ajax({
          type: 'POST',
          url: 'serveur',
          data: 'serv=' + target + '&page=' + val,
          success: function(data){
            $('#root').html(data);
            $('.page-item').children('a').attr("href","#");
           
            $('.page-item').children('a').attr("data-target",target);
          
            $('.page-item').children('a').addClass("subscription");
          }
        })
    })



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
  