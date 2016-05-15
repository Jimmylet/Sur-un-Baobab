(function($){

    var $window = $(window)

    $('#menu__icon').click(function(e){
        e.preventDefault();
        $('body').toggleClass('with--sidebar');
    });

    $('#site-cache').click(function(e){
        $('body').removeClass('with--sidebar');
    })

    $(window).on('resize', function () {
        if ($window.width() > 787 ){
            $('body').removeClass('with--sidebar');
        }
    })

})(jQuery);