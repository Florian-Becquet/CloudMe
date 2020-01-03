$('#reSub').on('click',function(){
    var id = $(this).data('id');
    var target = $(this).data('target');
    var msgConfirm = "Êtes vous sur de vouloir vous réabonner a ce service ?"
    if(confirm(msgConfirm)){
                $.ajax({
                type:"POST",
                url: target,
                data :"id=" + id,
                success:function(data){
                    
                    $('#subFin').css('display','none');
                }
            })
            }
})
//recupération des données cpu dans la div stockage.
var cpu = $('#stockage').children('#cpu').html();

//recupération des données ram dans la div stockage.
var ram = $('#stockage').children('#ram').html();
//calcul pour avoir la ram dispo et la ram utilisée
var ramUsed = 6;
var ramDispo = ram - ramUsed;
//recupération des données space dans la div stockage.
var space = $('#stockage').children('#space').html();
//calcul pour avoir l'espace disque dispo et la ram utilisée
var spaceUsed = 100;
var spaceDispo = space - spaceUsed;


//config camambert cpu
var ctxD = document.getElementById("fromageCpu").getContext('2d');
var myLineChart = new Chart(ctxD, {
type: 'doughnut',
data: {
labels: ["Total cpu"],
datasets: [{
data: [cpu],
backgroundColor: ["#28a745"],
hoverBackgroundColor: ["#56e44e"]
}]
},
options: {
responsive: true
}
});

//config camambert ram
var ctxD = document.getElementById("fromageRam").getContext('2d');
var myLineChart = new Chart(ctxD, {
type: 'doughnut',
data: {
labels: ["Ram disponibles", "Ram utilisées"],
datasets: [{
data: [ramUsed, ramDispo],
backgroundColor: ["#28a745", "#F7464A"],
hoverBackgroundColor: ["#56e44e", "#FF5A5E", "#5AD3D1", "#A8B3C5", "#FF5A5E"]
}]
},
options: {
responsive: true
}
});


//config camambert espace disque
var ctxD = document.getElementById("fromageEspace").getContext('2d');
var myLineChart = new Chart(ctxD, {
type: 'doughnut',
data: {
labels: ["Espace disque disponible", "Espace disque utilisés"],
datasets: [{
data: [spaceDispo, spaceUsed],
backgroundColor: ["#28a745", "#F7464A"],
hoverBackgroundColor: ["#56e44e", "#FF5A5E"]
}]
},
options: {
responsive: true
}
});

//affichage icone selon valeur replication et protection HA
if($('#stockage').children('#prot').html() == 'protectionHA'){
    $('#protection').attr('class', 'fas fa-check text-success');
}
else{
    $('#protection').attr('class', 'fas fa-times-circle text-danger');
}
if($('#stockage').children('#repli').html() == 'replicationServ'){
    $('#replication').attr('class', 'fas fa-check text-success');
}
else{
    $('#replication').attr('class', 'fas fa-times-circle text-danger');
}

//display la div qui affiche les retentions de données 
$('#imgRetention').on('click',function(event){
    event.stopPropagation();
    if($('#retentionData').css('display') =="none"){
    $('#retentionData').css('display','block');
    }
    else{
        $('#retentionData').css('display','none');
    }

});
//cacher la div retention data on click de la fenetre 
$(window).click(function()
{
    $('#retentionData').css('display','none');
});

$('#retentionData').click(function(event)
{
 event.stopPropagation();
});
var date = new Date();
// désabonner une souscription 
$('#unSub').on('click',function(){
    var date = new Date();
    var messageMonth = "";
    var month = date.getMonth() + 1
    if(month < 10){
        messageMonth = "0"+month;
    }
    else {
        messageMonth = month;
    }
    var id = $(this).data('id');
    var target = $(this).data('target');
    //fonction qui retourne le nombre de jours dans un mois
    function nombreJour( mois, annee){
        return new Date( annee, mois+1, 0).getDate();
      }
      const monthNames = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin",
                            "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"
                            ];
      var msgConfirm = "Votre abonnement prendra fin le"+ " " + nombreJour(date.getMonth(),date.getFullYear()) + " " + monthNames[date.getMonth()] +" "+ date.getFullYear() + "\n" +"êtes vous sur de vouloir supprimer cette abonnement?";
      if (confirm(msgConfirm)){
        $.ajax({
            type:"POST",
            url: target,
            data :"id=" + id,
            success:function(data){
                if(data == "success"){
                    $('#finSub').css('display','block');
                    $('#finSub').html('Votre abonnement a ce service s\'arrêtera le' + " " +nombreJour(date.getMonth(),date.getFullYear())+"/"+ messageMonth +"/"+ date.getFullYear())
                     
                }
              
            }
        })
      }

     
})