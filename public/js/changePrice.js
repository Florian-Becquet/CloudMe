$(document).ready(function(){
    //au click sur le bouton changePrice
    $('#changePrice').on('click', function(e){
        $("br").remove();
        e.preventDefault();
        var tabPrice = [];
        var i = 0;
        //on recupere les valeurs des td du tableau
        $('.modifPrice').each(function(){
            var prix = $(this).html();
            var categories = $(this).data('id');
            //on crée un format JSON contenant prix et categories correspondante 
            tabPrice.push({ categories : categories, prix : prix});
            i++;
        })
        //call ajax pour envoyer les nouveaux prix dans la BDD
        $.ajax({
            type: 'POST',
            url: 'changePrice',
            data: {newPrice : JSON.stringify(tabPrice)}, 
            success: function(data){
                if(data == 'success'){
                    alert('les prix ont été changés');
                }
            }
        });
    });
});