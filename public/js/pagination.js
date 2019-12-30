$(document).ready(function(){

    //disable le bouton loupe quand l'element de recherche est Rechercher par ..

   if($('#selectedAction').html() == "Rechercher par") {
       $('#loupe').prop('disabled',true);
  }

  
   
    //effacement d'un event click sur la loupe (car bug au niveau des chargement de page qui duplique l'evenement)
    $('#loupe').off("click");
    //fonction d'afficchage de la barre de recherche
     $('#loupeDisplay').on('click',function(){
        
         $('#recherche').css('display','block');
        $(this).css('display','none');
    })
    if($('#recherche').css('display') == 'block'){
        $('#loupeDisplay').css('display','none');
    }
    //apparition des li et a pour le dropdown
    if($('#searchAction').children().length > 0){
        $('#searchAction').empty();
    }
        $('#liste').children().each(function(){
            if($(this).data('search')){
                if($(this).data('search') == 'price'){
                    $('#searchAction').append('<li ><a class="dropdown-item"  href="#" data-search="min_price" style="color:black;">Prix minimal</a></li>');
                    $('#searchAction').append('<li ><a class="dropdown-item"  href="#" data-search="max_price" style="color:black;">Prix maximal</a></li>');
                }
                else{
                    var nomColonne = $(this).html();
                    var dataSearch = $(this).data('search');
                    $('#searchAction').append('<li ><a class="dropdown-item"  href="#" data-search="'+dataSearch+'" style="color:black;">'+nomColonne+'</a></li>');
                }
            }
      })
    
// chargement en ajax de la pagination 
$('.page-link').on('click',function(e){
    e.preventDefault();
    var def2 = $('#def2').html();
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
        url: def2,
        data: 'page='+page+'&'+name+'='+valeur+'&'+'input='+name,
        success: function(data){
            $('#root').html(data);
        }
    })
})

//dropdown dynamique pour la recherche
var actionList = $('#searchAction').find('li');

actionList.on('click', 'a', function(e){
    var i = $(this).parent().index();
    selectSearchAction(i);
});

function selectSearchAction(i){
    var actionItem = actionList.eq(i);
    action = actionItem.find('a').text();
    name = actionItem.find('a').data('search');
    actionList.removeClass('active');
    actionItem.addClass('active');
    $('#selectedAction').html(action);
    if(action != "Recherche par"){
    $('#loupe').prop('disabled',false);
    $('#valueSearch').attr('name',name);
    }
    
    $('#actionInput').val(action);
}
// fonction qui permet d'envoyer les donnée au back sur le click de la loupe
$('#loupe').on('click',function(e){
    e.preventDefault();
    $(this).off("click");
    var valeur = $('#valueSearch').val();
    var name = $('#valueSearch').attr('name');
    var def2 = $('#def2').html();

    $.ajax({
        type: 'GET',
        url: def2,
        data: name+'='+valeur+'&'+'input='+name,
        success: function(data){
            $('#root').html(data);
        },
        error: function(){
            alert('erreur lors de la recherche');
        }
    })
})
    //au click sur la colonne disponible on rend un service disponible ou non apres confirmation
    $('.fa-square').on('click', function(){
        var servId = $(this).data('target');
        var color = $(this);
        if(color.attr('class') == 'fas fa-square text-danger'){
            var msgConfirm = 'Activer le service';
        }
        else {
            var msgConfirm = 'Désactiver le service';
        }
        if (confirm(msgConfirm)){
            $.ajax({
                type: 'GET',
                url: 'changeDisponibility',
                data: 'id=' +servId,
                success: function(data){
                    if(data == 'ok'){
                        if(color.attr('class') == 'fas fa-square text-success'){
                            color.attr('class', 'fas fa-square text-danger');
                        }
                        else{
                            color.attr('class', 'fas fa-square text-success');
                        }
                    }
                }
            })
        }
    })
    //envoie du status Utilisateur 
    $('.status').on('click',function(e){
        e.preventDefault();
        var id = $(this).data('id');
        var status = $(this).data('status');
        var a = $(this);
        $.ajax({
            type: 'GET',
            url: 'changeStatus',
            data: 'id=' +id+'&status='+status,
            success:function(data){
                if(data == 0){
                    $("#"+id).attr('class','btn btn-primary btn-xs pl-2 pr-2 ml-1');
                    $("#"+id).html('Inactif');
                
                }
                else if(data == 1){
                    $("#"+id).attr('class','btn btn-info btn-xs pl-2 pr-2 ml-1');
                    $("#"+id).html('Actif');
                }
                else {
                    $("#"+id).attr('class','btn btn-dark btn-xs pl-2 pr-2 ml-1');
                    $("#"+id).html('Expert');
                }
               
            }
        })
    })
    $('.unsub').on('click',function(e){
        var id = $(this).data('id');
        var target = $(this).data('target');
        var msgConfirm = "Voulez vous vraiment désactivé cette souscrption";
        if (confirm(msgConfirm)){
        $.ajax({
            type:"POST",
            url: target,
            data :"id=" + id,
            success:function(data){
                console.log(data);
                $('#'+id).children('.dateUnSub').html(data);
            }
        })
        }
    })
});