// Слайдер
jQuery( function( $ ) {

$(document).ready(function () {
  $('.feedback__slider').slick({
    centerMode: true,
    centerPadding: '400px',// меняй это значение 
    slidesToShow: 1,
    dots: true,
    prevArrow: $('.left-arrow'),
    nextArrow: $('.right-arrow'),
    responsive: [{
      breakpoint: 1350,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '250px', // меняй это значение 
        slidesToShow: 4
      }
    },
    {
      breakpoint: 1000,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '150px', // меняй это значение 
        slidesToShow: 1
      }
    },
    {
      breakpoint: 850,
      settings: {
        centerPadding: '75px', // меняй это значение -добавил breakpoint
      }
    },
    {
      breakpoint: 650,
      settings: {
        centerPadding: '35px', // меняй это значение -добавил breakpoint
      }
    },
    {
      breakpoint: 450,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '0px', // меняй это значение 
        slidesToShow: 1
      }
    }
    ]
  });


  $('.offer__list').slick({
    centerMode: true,
    centerPadding: '0px',
    slidesToShow: 5,
    prevArrow: $('.left-arrow'),
    nextArrow: $('.right-arrow'),
    responsive: [{
      breakpoint: 700,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '0px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 1000,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '0px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 1300,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '0px',
        slidesToShow: 4
      }
    }
    ]
  });

  // $('.product-thumb-carousel').slick({,
  //   slidesToShow: 1,
  // });


  $('.questions__toggle').on("click", function (event) {
    $(this).toggleClass("questions__toggle-active");
    $(this).siblings().toggleClass("item-text-active");
  });


  $('a[href^="#"').on('click', function () {

    let href = $(this).attr('href');

    $('html, body').animate({
      scrollTop: $(href).offset().top
    });
    return false;
  });
});

function isWebp() {
  function isWebp(callback) {
    let webP = new Image();
    webP.onload = webP.onerror = function () {
      callback(webP.height == 2);
    };
    webP.src = "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA";
  }
  testWebP(function (support) {
    let className = support === true ? 'webp' : 'no-webp';
    document.documentElement.classList.add(className);
  });
}


});






