jQuery(function ($) {

  $('.product-thumb-carousel').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: ('.slider-bottom'),
    arrows: true,

  });

  $('.slider-bottom').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: ('.product-thumb-carousel'),
    arrows: false,
    focusOnSelect: true

  });

  if ($(window).width() < 1023) {
    $('#related-products-wrapper .products-on-column').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      dots: false,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            infinite: true,
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]

    });
  }
  else {

  }

  $(document).on('click', '.questions__list .close1 .item__name', function(){
    $('.questions__list .open .item__desc').slideUp();
    $('.questions__list .item').removeClass('open');
    $('.questions__list .item').addClass('close1');
    $(this).next().slideToggle();
    $(this).parent('.questions__list .item').removeClass('close1');
    $(this).parent('.questions__list .item').addClass('open');
  });

  $(document).on('click', '.questions__list .open .item__name', function(){
    $('.questions__list .open .item__desc').slideUp();
    $('.questions__list .item').removeClass('open');
    $('.questions__list .item').addClass('close1');
    // $(this).next().slideToggle();
    $(this).parent('.questions__list .item').addClass('close1');
    $(this).parent('.questions__list .item').removeClass('open');
  });


  $('.header__burger').on('click', function () {
    console.log('click btn');
    $('.menu-right').addClass('open');
  });


  $('.menu-right .close-btn').on('click', function () {
    $('.menu-right').removeClass('open');
  });
  // $('.menu-right a').on('click', function(){
  //   $('.menu-right').removeClass('open');
  // });


  $('.mobile_menu li.menu-item-has-children > a').on('click', function (e) {
    e.preventDefault();

    $(this).next().slideToggle();
  })


  $('.header_menu li.none-link > a').on('click', function (e) {
    e.preventDefault();
  })




  var header = $(".header");

  $(window).scroll(function() {    
      var scroll = $(window).scrollTop();
      if (scroll >= 500) {
          header.addClass("scrolled");
      } else {
          header.removeClass("scrolled");
      }
  });



  document.getElementById("coupon_code").addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
      document.getElementById("btn_apply_coupon").click();
      return false;
    }
  });




});