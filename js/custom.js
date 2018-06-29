

//backstretch
$.backstretch([
    "img/resto/img-1.jpg",
    "img/resto/img-2.jpg",
    "img/resto/img-3.jpg"
], {
    fade: 750,
    duration: 1000
  });


//menu shrink
$(document).on("scroll", function () {
    if
            ($(document).scrollTop() > 100) {
        $("nav").addClass("shrink");
    }
    else
    {
        $("nav").removeClass("shrink");
    }
});

//smooth scroll
$(function() {
  $('.scroll-to a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

/* ==============================================
 Auto Close Responsive Navbar on Click
 =============================================== */

function close_toggle() {
    if ($(window).width() <= 768) {
        $('.navbar-collapse a').on('click', function () {
            $('.navbar-collapse').collapse('hide');
        });
    }
    else {
        $('.navbar .navbar-default a').off('click');
    }
}
close_toggle();

$(window).resize(close_toggle);

//flex slider
$(window).load(function () {
    $('.intro-slider').flexslider({
        animation: "slide",
        direction: "vertical",
        directionNav: false,
        controlNav: false,
        slideshowSpeed: 3000
    });
});

//flex slider for testimonials
$(document).ready(function () {
    $(window).load(function () {
        $('.testi-slider').flexslider({
            animation: "slide",
            direction: "horizantal",
            directionNav: true,
            controlNav: false,
            prevText: "<i class='fa fa-angle-left'></i>",
            nextText: "<i class='fa fa-angle-right'></i>"
        });
    });
});
