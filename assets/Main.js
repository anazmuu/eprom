// SIGN UP

$('#rSignUp').on('click', function(){
    $('.window').fadeOut(200);

    $('#Window2').delay(200).fadeIn(200);
});


$('#rSignIn').on('click', function(){
    $('#MainTitle').css('margin-left', '0').css('transform', 'translateX(0)');
    $('#TitleTwo').fadeOut(150);

    $('#LoginForm').css('margin-right', '0').css('transform', 'translateX(0)');
    $('#FormTwo').fadeOut(150);

    $('#TitleOne').delay(150).fadeIn(150);
    $('#FormOne').delay(150).fadeIn(150);
});

// TERMS

$('#terms').on('click', function(){
    $('.window').fadeOut(200);

    $('#Terms').delay(300).fadeIn(300);
});


$('#backTerms').on('click', function(){
    $('#Terms').fadeOut(200);

    $('.window').delay(150).fadeIn(150);
}); 

// PRIVACY

$('#privacy').on('click', function(){
    $('.window').fadeOut(200);

    $('#Privacy').delay(300).fadeIn(300);
});


$('#backPriv').on('click', function(){
    $('#Privacy').fadeOut(200);

    $('.window').delay(150).fadeIn(150);
}); 
