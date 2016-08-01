$(document).ready(function() {

    $("#form-login").submit(function(e){
        
        e.preventDefault();
        valido = true;
        $(this).find("input[type='text'],input[type='password']").each(function(i,elem){
            $(elem).parent().removeClass('has-error');
           if($(elem).val().trim() == ''){
               $(elem).parent().addClass('has-error');
               valido = false;
           } 
            
        });
        
        if(valido == true){
            
        var dados = $(this).serialize();
        $.post('../model/login.php',dados,function(retorno){
            
            var obj = JSON.parse(retorno);
            
            if(obj.status != 'ok'){
                $('#alert-erro').html(obj.msg);
                $('#alert-erro').slideDown('slow');
                
            }else{
                window.location = "/index.php";
            }
            
        });
        
        }
        
    });

});