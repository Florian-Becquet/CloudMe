$(document).ready(function(){
    // chargement de la page home par defaut quand le document est pret dans la div root dans base twig
    $('#root').load('intro');

    // chargement ajax des autres pages sur le click de chaques sections differentes
    $('.navigation').on('click',function(){
        var target = $(this).data('target');
        var def = $(this).data('def');
        $('#root').load(target);
        $('#def').html(def);
    })

    //
})



