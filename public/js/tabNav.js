$(document).ready(function(){
    
   
    
    $('.tabNav').on('click',function(e){
        e.preventDefault();
        var target = $(this).data('target');
        console.log(target);
        if(target == 'page2'){
            $('#page1').css('display','none');
            $('#page2').css('display','block');
            
        }
        else if(target == 'page1'){
            $('#page1').css('display','block');
            $('#page2').css('display','none');
        }
    })
    
	$('.custom-range').on('change', function() {
        
        var unit = $(this).data('unit');
        var $set = Number($(this).val());
        var priceRange = $(this).data('price');

        var target = $(this).data('target');
        console.log(target);
        $('#'+ target).html($set);
    });
    var total = 0;
    $('#price').children('span').each(function(){
        
        total += Number($(this).html());
        
    })

    $('#prixTotal').html(total + "Euros");

    $('#page3').on('click', function(e){
        e.preventDefault();
        var prixRange = 0 ;
        var prixProtection = 0;
        var prixReplictation = 0;
        var prixIp = 0;
        var prixJours = 0;
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

       
       $('.custom-range').each(function(){
        var unit = $(this).data('unit');
        var $set = $(this).val();
        var priceRange = $(this).data('price');
        var total = $set / unit * priceRange;
        prixRange += Number(total);
        
       })
    
       var prixService = Number(prixIp) + Number(prixJours) + Number(prixProtection) + Number(prixRange) + Number(prixReplictation) ;
     
       console.log(prixService);
    })
   
})