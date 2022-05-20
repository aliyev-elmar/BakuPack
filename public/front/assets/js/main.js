


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