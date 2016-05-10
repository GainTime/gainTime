//Painel
$('#me').on('click', function() {
    $( "#menu" ).prop( "checked", false )
    $('#me-menu').toggle('fast');
});

$(document).on('click', function(e) {
    var target = $(e.target);
    if (target.is("#me")||target.is('#me-menu')||(target.parents().is('#me'))) {
        return true;
    }
    else {
        $('#me-menu').fadeOut('fast');
    }
});

//Ask Delete

function askDelete(name, entity) {
    if(confirm("Deseja deletar "+ entity +" \""+ name +"\" do sistema?")){
        return true;
    }
    return false;
}

//Hide Messages

setTimeout(function(){
    $('.msg').fadeOut();
}, 3000);
