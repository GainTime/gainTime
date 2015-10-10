$('document').ready(function () {
    $('input').each(function () {
        if ($(this).val().length < 1) {
            $(this).parent('div').removeClass('has-label');
            $(this).parent('div').blur();
        }
    });
});
$('.field').click(function () {
    $(this).addClass('is-focused has-label');
    $(this).children('input').focus();
});
$('.field').children('input').blur(function (event) {
    $(this).parent('.field').removeClass('is-focused');
    if ($(this).val().length<1) {
        $(this).parent('.field').removeClass('has-label');
    }
});
$('input').keydown(function (e) {
    var code = e.keyCode || e.which;
    if (code === 9) {
        $(this).parent('div.field').removeClass('is-focused');
        if ($(this).val().length < 1) {
            $(this).parent('div').removeClass('has-label');
            $(this).parent('div').blur();
        }
    }
});
$('input').focus(function () {
    $(this).parent('div.field').addClass('is-focused has-label');
});
$('textarea').focus(function() {
    $(this).siblings('.menot').addClass('is-focused');
});
$('textarea').blur(function() {
    $(this).siblings('.menot').removeClass('is-focused');
});

$('.btn-file').children('.real').change(function(){
    $btn = $(this).parent('.btn-file');
    var arq = this.files[0];
    $fse = $btn.siblings('.field').children('.false');
    $fse.val(arq.name);
    $fse.parent('div').addClass('is-focused');
});

/* Password verification */
$('#new').blur(function(event) {
    if(!$('#confirm').val()){
        $('#confirm').after('<div class="msg warning drop">Confirme a sua senha.</div>');
        setTimeout(function(){
            $('.drop').remove();
        }, 3000);
    }
});

$('#confirm').blur(function(event) {
    if($('#new').val()!=$('#confirm').val()){
        $('#new').val('');
        $('#confirm').val('');
        $(window).scrollTop(0);
        $('#top-msg').after('<div class="msg fail drop">* As senhas inseridas não conferem</div>');
        setTimeout(function(){
            $('.drop').remove();
        }, 3000);
    }
});

$('#form-control').click(function(event) {
    if($('.form-controled').hasClass('invisible')){
        $('.form-controled').removeClass('invisible');
        $('#new').focus();
    }
    else{
        $('.form-controled').addClass('invisible');
    }
});

$('#changer').change(function(){
    var reader = new FileReader();
    reader.onload = function(e){
        $('#prev-img').attr({
            'src':e.target.result,
            'alt':'Preview',
            'style':'width:'+$('#changer').width()+';height:'+$('#changer').height()+';',
            'title':'Preview'
        });
    };
    reader.readAsDataURL(this.files[0]);
});

setTimeout(function(){
    $('.msg').fadeOut();
}, 2000);

function block() {
    document.getElementById('btn-pair').style.display = "none";
    document.getElementById('edit').style.display = "block";
    window.scrollTo(0,0);
    inputs = document.getElementsByClassName('form-input');
    for( var i=0; i<inputs.length; i++ ){
        inputs[i].disabled = true;
    }
    field = document.getElementsByClassName('field');
    for( var i=0; i<field.length; i++ ){
        field[i].style.pointerEvents = "none";;
    }
}

function editing(goTo) {
    document.getElementById('edit').style.display = "none";
    document.getElementById('btn-pair').style.display = "block";
    window.location.href=goTo;
    inputs = document.getElementsByClassName('form-input');
    for( var i=0; i<inputs.length; i++ ){
        inputs[i].disabled = false;
    }
    document.getElementById('video').focus();
    field = document.getElementsByClassName('me');
    for( var i=0; i<field.length; i++ ){
        field[i].style.pointerEvents = "auto";;
    }
}