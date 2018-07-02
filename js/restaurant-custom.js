/*Theme    : assan
 * Author  : Design_mylife
 * Version : V1.8
 *
 */



//backstretch
$.backstretch([
    "img/resto/3.jpeg"
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


//events slider
$(document).ready(function () {

    $("#dishes-slider").owlCarousel({
    loop:true,
    margin:0,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
});

});


  $('#send-message-reservation').on("click",function(e){

            // Stop form submission & check the validation
            e.preventDefault();

            // Variable declaration
            var error = false;

            var email = $('#email-reservation').val();

            var date = $('#datepicker').val();


            if(email.length == 0 || email.indexOf('@') < 1 || (email.lastIndexOf('.') - email.indexOf('@') < 2) || (email.length - email.lastIndexOf('.') < 2) )
            {
                var error = true;

                $('#email-reservation').addClass("validation");

            }else{
                $('#email-reservation').removeClass("validation");
            }

            if(date.length == 0){
                var error = true;
                $('#datepicker').addClass("validation");
            }else{
                $('#datepicker').removeClass("validation");
            }


        });

         // DATEPICKER
  $(function() {
    $( "#datepicker" ).datepicker();
});
