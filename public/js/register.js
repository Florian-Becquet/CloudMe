

$('select').on('change',function(){
    if($(this).val() == 2) {
        $('#infoEntreprise').css('display','block');
        $('#registration_form_societyName').prop('required',true);
        $('#registration_form_num_siret').prop('required',true);
    }
    else if($('#infoEntreprise').css('display') == "block"){
        $('#infoEntreprise').css('display','none');
        $('#registration_form_societyName').prop('required',false);
        $('#registration_form_num_siret').prop('required',false);
    }
})

$('#verifPwd').on('keyup',function(){
    var pwd = $('#registration_form_plainPassword').val();
    if($(this).val() == pwd){
        $('#verifPwd').attr('class', 'form-control is-valid');
        $('#registration_form_plainPassword').attr('class', 'form-control is-valid');
        $('#buttonRegister').prop('disabled',false);
    }
    else {
        $('#verifPwd').attr('class', 'form-control is-invalid');
        $('#registration_form_plainPassword').attr('class', 'form-control is-invalid');
        $('#buttonRegister').prop('disabled',true);
    }
        
})
