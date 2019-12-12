//author CSM
$(document).ready(function(){
    //on enleve le form-control
   $('.custom-range').each(function(){
       $(this).removeClass('form-control');
   });
   //quand on clicke sur les elements de la class tabNav, on empeche la soumission du form
    $('.tabNav').on('click',function(e){
        e.preventDefault();
        var target = $(this).data('target');
        //Si la target est page 2 on display page 2 et on cache page 1 et 2 on ajoute la classe active 
        if(target == 'page2'){
            $('#page1').css('display','none');
            $('#page2').css('display','block');
            $('#page3').css('display','none');
            $('#onglet2').attr('class',"nav-item nav-link tabNav onglet active");
            $('#onglet1').attr('class',"nav-item nav-link tabNav onglet ");
            $('#onglet3').attr('class',"nav-item nav-link tabNav onglet prix");
        }
        //meme traitement que page 2 pour la page 1
        else if(target == 'page1'){
            $('#page1').css('display','block');
            $('#page2').css('display','none');
            $('#page3').css('display','none');
            $('#onglet2').attr('class',"nav-item nav-link tabNav onglet ");
            $('#onglet3').attr('class',"nav-item nav-link tabNav onglet prix");
            $('#onglet1').attr('class',"nav-item nav-link tabNav onglet active");
        }
        //meme traitement que page 2 pour la page 3
        else if(target == 'page3'){
            $('#page3').css('display','block');
            $('#page1').css('display','none');
            $('#page2').css('display','none');
            $('#onglet1').attr('class',"nav-item nav-link tabNav onglet ");
            $('#onglet2').attr('class',"nav-item nav-link tabNav onglet ");
            $('#onglet3').attr('class',"nav-item nav-link tabNav onglet prix active");
        }
    })
    //a chaque changement des inputs sur custom range on prend la valeur de l'input et on le set dans l'ID correspondant
	$('.custom-range').on('change', function() {
        var $set = Number($(this).val());
        var target = $(this).data('target');
        $('#'+ target).html($set);
    });
    var total = 0;
    //pour tout les spans dde l'id price on les additionne dnas une variable total
    $('#price').children('span').each(function(){
        total += Number($(this).html());
    })

    $('#prixTotal').html(total + "Euros");
    // a chaque clique sur la class prix
    $('.prix').on('click', function(e){
        e.preventDefault();
        var prixRange = 0 ;
        var prixProtection = 0;
        var prixReplictation = 0;
        var prixIp = 0;
        var prixJours = 0;
        //on verifie si l'input checké est correct si oui on set prix Protection a cette valeur
        if($('input[value=protectionHA]').prop('checked')){
            prixProtection = $('#price_4').html();
            
        }
        if($('input[value=replicationServ]').prop('checked')){
            prixReplictation = $('#price_5').html();
            
        }
        if($('#subscription_IP').val() == 'WAN'){
            prixIp = $('#price_6').html();
        }
        else if ($('#subscription_IP').val() == 'LAN'){
            prixIp = $('#price_7').html();
        }

        prixJours = $('#price_8').html() * $('#subscription_backup').val();
        // pour chaque valeur de la classe custom-range on les additionne pour avoir le prix total des input range
       $('.custom-range').each(function(){
        var unit = $(this).data('unit');
        var $set = $(this).val();
        var priceRange = $(this).data('price');
        var total = $set / unit * priceRange;
        prixRange += Number(total);
       })
       //on crée prixService la somme des prix sur le formulaire et on set les valeurs dans le tableau de la page3
       var prixService = Number(prixIp) + Number(prixJours) + Number(prixProtection) + Number(prixRange) + Number(prixReplictation) ;
       $('#tabIp').html($('#subscription_IP').val());
       $('#tabName').html($('#subscription_name option:selected').html());
       $('#tabRam').html($('#subscription_ram').val());
       $('#tabCpu').html($('#subscription_cpu').val());
       $('#tabDisk').html($('#subscription_disk_space').val());
       if($('#subscription_backup').val()){
        $('#tabRetention').html($('#subscription_backup').val() + ' jours');
        }
       $('#prixTotal').html(prixService);
       $('#prixService').val(prixService);
       if($('input[value=protectionHA]').prop('checked')){
        $('#tabProtection').attr('class', 'fas fa-check text-success');
       }
       else{
        $('#tabProtection').attr('class', 'fas fa-times-circle text-danger');
       }
       if($('input[value=replicationServ]').prop('checked')){
        $('#tabReplication').attr('class', 'fas fa-check text-success');
       }
       else{
        $('#tabReplication').attr('class', 'fas fa-times-circle text-danger');
       }
    })
   
})