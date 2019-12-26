$(document).ready(function(){
  //au clique sur la tablea accueil on charge la page avec les infos correspondantes et on rend actif la side nav 
  $('.tabAccueil').on('click',function(){
    var target = $(this).data('target');
    var id = $(this).data('id');
    if(target =="info"){
      var clas = $(this).data('class');
      $('#'+clas).addClass('menu-open')
      $('#'+id).addClass('active');
    }
   
    $.ajax({
        type: 'POST',
        url: target,
        data: 'id=' + id,
        success: function(data){
            $('#root').html(data);
        }
        })
})
  })
  