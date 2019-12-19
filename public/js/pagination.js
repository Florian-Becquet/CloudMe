$(document).ready(function(){
    //fonction d'afficchage de ma barre de recherche
     $('#loupeDisplay').on('click',function(){
        
         $('#recherche').css('display','block');
        $(this).css('display','none');
    })
    if($('#recherche').css('display') == 'block'){
        $('#loupeDisplay').css('display','none');
    }
    
   
// chargement en ajax de la pagination 
$('.page-link').on('click',function(e){
    e.preventDefault();
    var page = $(this).html();
    var name = $('#valueSearch').attr('name');
    var valeur = $('#valueSearch').val();
    console.log(name,valeur);
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
    //envoi des données de la barre de recherche vers le controller
    $.ajax({
        type: 'GET',
        url: 'listServ',
        data: 'page='+page+'&'+name+'='+valeur+'&'+'input='+name,
        success: function(data){
            $('#root').html(data);
        }

    })
})
var actionList = $('#searchAction').find('li');

actionList.on('click', 'a', function(e){
    var i = $(this).parent().index();
    selectSearchAction(i);
});

function selectSearchAction(i){
    var actionItem = actionList.eq(i);
    action = actionItem.find('a').text();
    actionList.removeClass('active');
    actionItem.addClass('active');
    $('#selectedAction').html(action);
    if(action != "Recherche par"){
    $('#valueSearch').attr('name',action)
    }
    $('#actionInput').val(action);
}
//1
$('#loupe').on('click',function(e){
    $(this).off("click");
    var valeur = $('#valueSearch').val();
    var name = $('#valueSearch').attr('name');
    

    $.ajax({
        type: 'GET',
        url: 'listServ',
        data: name+'='+valeur+'&'+'input='+name,
        success: function(data){
            $('#root').html(data);
        }

    })
})
});