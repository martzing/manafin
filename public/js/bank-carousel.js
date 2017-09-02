$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
    loop:true,
    margin:10,
    autoplay: true,
    autoplayTimeout: 5000,
    responsive:{
        0:{
            items:4
        },
        600:{
            items:5
        },
        1000:{
            items:8
        }
    }
});
});
