$(document).ready(function(){
// chargement en ajax de la pagination 
$('.page-link').on('click',function(e){
    e.preventDefault();
    var page = $(this).html();
    
// recupération de la valeur précent pour enlever 1 a la page actuelle
    if($(this).html() == "«&nbsp;Précédent"){
        $('.page-item').each(function(){
            if($(this).attr('class') == "page-item active"){
                var currentPage = $(this).children().html();
                
                page = Number(currentPage) - 1 ; 
            }
        })
       
    }
    // recupération de la valeur suivant pour ajouter 1 a la page actuelle
    if($(this).html() == "Suivant&nbsp;»"){
        $('.page-item').each(function(){
            if($(this).attr('class') == "page-item active"){
                var currentPage = $(this).children().html();
                
                page = Number(currentPage) + 1 ; 
            }
        })
       
    }

    $.ajax({
        type: 'GET',
        url: 'listServ',
        data: 'page='+page,
        success: function(data){
            $('#root').html(data);
        }

    })
})
});