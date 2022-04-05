// import Swiper, {
//   Navigation,
//   Pagination
// } from 'swiper';

// Now you can use Swiper


// var swiper = new Swiper(".mySwiper", {
//   pagination: {
//     el: ".swiper-pagination",
//   },
// });


function testWebP(callback) {

  var webP = new Image();
  webP.onload = webP.onerror = function () {
    callback(webP.height == 2);
  };
  webP.src = "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA";
}

testWebP(function (support) {

  if (support == true) {
    document.querySelector('body').classList.add('webp');
  } else {
    document.querySelector('body').classList.add('no-webp');
  }
});

// Вспомогательные модули блокировки прокрутки и скочка ====================================================================================================================================================================================================================================================================================
let bodyLockStatus = true;
let bodyLockToggle = (delay = 500) => {
  if (document.documentElement.classList.contains('lock')) {
    bodyUnlock(delay);
  } else {
    bodyLock(delay);
  }
}
let bodyUnlock = (delay = 500) => {
  let body = document.querySelector("body");
  if (bodyLockStatus) {
    let lock_padding = document.querySelectorAll("[data-lp]");
    setTimeout(() => {
      for (let index = 0; index < lock_padding.length; index++) {
        const el = lock_padding[index];
        el.style.paddingRight = '0px';
      }
      body.style.paddingRight = '0px';
      document.documentElement.classList.remove("lock");
    }, delay);
    bodyLockStatus = false;
    setTimeout(function () {
      bodyLockStatus = true;
    }, delay);
  }
}
let bodyLock = (delay = 500) => {
  let body = document.querySelector("body");
  if (bodyLockStatus) {
    let lock_padding = document.querySelectorAll("[data-lp]");
    for (let index = 0; index < lock_padding.length; index++) {
      const el = lock_padding[index];
      el.style.paddingRight = window.innerWidth - document.querySelector('.wrapper').offsetWidth + 'px';
    }
    body.style.paddingRight = window.innerWidth - document.querySelector('.wrapper').offsetWidth + 'px';
    document.documentElement.classList.add("lock");

    bodyLockStatus = false;
    setTimeout(function () {
      bodyLockStatus = true;
    }, delay);
  }
}

// Модуль работы с меню (бургер) =======================================================================================================================================================================================================================
function menuInit() {
  let iconMenu = document.querySelector(".header__menu");
  if (iconMenu) {
    iconMenu.addEventListener("click", function (e) {
      if (bodyLockStatus) {
        bodyLockToggle();
        document.documentElement.classList.toggle("open-menu");
      }
    });
  };
}

function menuOpen() {
  bodyLock();
  document.documentElement.classList.add("open");
}

function menuClose() {
  bodyUnlock();
  document.documentElement.classList.remove("open");
}

menuInit();


const swiper111 = new Swiper('.swiper-sertificates', {
  slidesPerView: 3,
  spaceBetween: 20,
  centeredSlides: true,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

const swiper222 = new Swiper('.swiper-banners', {
  slidesPerView: 1,
  spaceBetween: 20,
  centeredSlides: true,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
  },

});

// Вспомогательные модули блокировки прокрутки и скочка ====================================================================================================================================================================================================================================================================================
// export let bodyLockStatus = true;
// export let bodyLockToggle = (delay = 500) => {
//   if (document.documentElement.classList.contains('lock')) {
//     bodyUnlock(delay);
//   } else {
//     bodyLock(delay);
//   }
// }
// export let bodyUnlock = (delay = 500) => {
//   let body = document.querySelector("body");
//   if (bodyLockStatus) {
//     let lock_padding = document.querySelectorAll("[data-lp]");
//     setTimeout(() => {
//       for (let index = 0; index < lock_padding.length; index++) {
//         const el = lock_padding[index];
//         el.style.paddingRight = '0px';
//       }
//       body.style.paddingRight = '0px';
//       document.documentElement.classList.remove("lock");
//     }, delay);
//     bodyLockStatus = false;
//     setTimeout(function () {
//       bodyLockStatus = true;
//     }, delay);
//   }
// }
// export let bodyLock = (delay = 500) => {
//   let body = document.querySelector("body");
//   if (bodyLockStatus) {
//     let lock_padding = document.querySelectorAll("[data-lp]");
//     for (let index = 0; index < lock_padding.length; index++) {
//       const el = lock_padding[index];
//       el.style.paddingRight = window.innerWidth - document.querySelector('.wrapper').offsetWidth + 'px';
//     }
//     body.style.paddingRight = window.innerWidth - document.querySelector('.wrapper').offsetWidth + 'px';
//     document.documentElement.classList.add("lock");

//     bodyLockStatus = false;
//     setTimeout(function () {
//       bodyLockStatus = true;
//     }, delay);
//   }
// }

// Модуль работы с меню (бургер) =======================================================================================================================================================================================================================
// export function menuInit() {
//   let iconMenu = document.querySelector(".burger");
//   if (iconMenu) {
//     iconMenu.addEventListener("click", function (e) {
//       if (bodyLockStatus) {
//         bodyLockToggle();
//         document.documentElement.classList.toggle("open");
//       }
//     });
//   };
// }
// export function menuOpen() {
//   bodyLock();
//   document.documentElement.classList.add("open");
// }
// export function menuClose() {
//   bodyUnlock();
//   document.documentElement.classList.remove("open");
// }

// menuInit();