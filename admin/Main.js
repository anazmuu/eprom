$('#SignUp').on('click', function(){
    $('#MainTitle').css('margin-left', '100%').css('transform', 'translateX(-100%)');
    $('#TitleOne').fadeOut(150);

    $('#LoginForm').css('margin-right', '100%').css('transform', 'translateX(100%)');
    $('#FormOne').fadeOut(150);

    $('#TitleTwo').delay(150).fadeIn(150);
    $('#FormTwo').delay(150).fadeIn(150);
});


$('#SignIn').on('click', function(){
    $('#MainTitle').css('margin-left', '0').css('transform', 'translateX(0)');
    $('#TitleTwo').fadeOut(150);

    $('#LoginForm').css('margin-right', '0').css('transform', 'translateX(0)');
    $('#FormTwo').fadeOut(150);

    $('#TitleOne').delay(150).fadeIn(150);
    $('#FormOne').delay(150).fadeIn(150);
});