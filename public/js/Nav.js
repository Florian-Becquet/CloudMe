$(document).ready(function(){
  //au clique sur la tablea accueil on charge la page avec les infos correspondantes et on rend actif la side nav 
  $('.tabAccueil').on('click',function(){
    var id = $(this).data('id');
    var clas = $(this).data('class');
    $('#'+clas).addClass('menu-open')
    $('#'+id).addClass('active');
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
  