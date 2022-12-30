(function($) {

    function doAnimations(elems) {
        //Cache the animationend event in a variable
        var animEndEv = "webkitAnimationEnd animationend";
    
        elems.each(function() {
            var $this = $(this),
            $animationType = $this.data("animation");
            
            $this.addClass($animationType).one(animEndEv, function() {
                $this.removeClass($animationType);
            });

            console.log($this);
        });
    }
    
    var $myCarousel = $("#carouselExampleIndicators"),
        $firstAnimatingElems = $myCarousel
          .find(".carousel-item:first")
          .find("[data-animation ^= 'animated']");
    
    const carousel = new bootstrap.Carousel($myCarousel);
    
    doAnimations($firstAnimatingElems);

    $myCarousel.on("slide.bs.carousel", function(e) {
        var nextactiveslide = $(e.relatedTarget).index();
        var $btns = $('.bullet');
        $btns.removeClass('active');
        var $activeBtn = $("[data-bs-slide-to='" + nextactiveslide + "']").addClass('active');


        var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
        doAnimations($animatingElems);
    });
      
})(jQuery);