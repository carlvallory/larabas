$(document).ready(function(){
    $('.carousel-item').on('change', function(){
        if($(this).hasClass('active')) {
            $(this).animate({
                height: 'toggle'
            });
        }
    });
});