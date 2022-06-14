AOS.init();

$('.back-to-top').on('click', function(e) {
  $('html, body').animate({
      scrollTop: $('body').offset().top,
      scrollTop: $('html').offset().top
  }, 500)
});

$(window).on('scroll', function() {
<<<<<<< HEAD
  if ($(window).scrollTop() > 0) {
      $('.scroll-btn').fadeIn("fast");
  } else {
      $('.scroll-btn').fadeIn("fast");
=======
  if ($(window).scrollTop() > 200) {
      $('.scroll-btn').fadeIn("fast");
  } else {
      $('.scroll-btn').fadeOut("fast");
>>>>>>> aef6e7df249e22e856f0fd51488779ef5bc00d1b
  }

});

$('#carouselExampleFade').carousel({
<<<<<<< HEAD
  interval: 10000,
=======
  interval: 4000,
>>>>>>> aef6e7df249e22e856f0fd51488779ef5bc00d1b
  pause: false
})

var swiper = new Swiper(".mySwiper", {
    slidesPerView: 6,
    spaceBetween: 20,
    freeMode: true,
    loop: true,
    autoplay: {
        delay: 1000,
        disableOnInteraction: false,
    },
    breakpoints: {
      0: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      // when window width is >= 320px
      320: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      // when window width is >= 480px
      480: {
        slidesPerView: 3,
        spaceBetween: 30
      },
      // when window width is >= 640px
      640: {
        slidesPerView: 4,
        spaceBetween: 40
      },
      991: {
        slidesPerView: 6,
        spaceBetween: 40
      }
    }
  });

$(".image-gallery").attr("data-fancybox", "mygallery");
$(".image-gallery").fancybox({
  loop: true
});

$(".dropdown i").on('click', function(){
  if($('.submenu').hasClass('show')){
    $('.submenu').removeClass('show')
  }else{
    $('.submenu').addClass('show')
  }
})

$(".menu-btn").on('click', function(){
  if($('.menu-btn').hasClass('show')){
    $('.menu-btn').removeClass('show')
  }else{
    $('.menu-btn').addClass('show')
  }
})