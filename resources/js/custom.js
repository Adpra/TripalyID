$('.autoplay').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1500,
    arrows: false,
});

$(document).ready(function(){
    setTimeout(function(){ 
        $(".preloader").fadeOut(); 
      }, 10000);
});