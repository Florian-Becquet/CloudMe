$(document).ready(function(){
    $('#page2').css('display','none');
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
})