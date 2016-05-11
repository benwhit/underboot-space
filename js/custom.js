jQuery(document).ready(function(){
  jQuery('.owl-carousel').owlCarousel({
  	center: true,
  	items: 1,
    loop:true,
    nav: true,
    autoplay: true,
  	animateOut: 'fadeOut',
    responsiveClass:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
  })

});