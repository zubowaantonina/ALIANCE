const navbar = document.querySelector(".navbar");
const logoLight = document.querySelector(".logo-light");
const logo = document.querySelector(".logo");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");

const lightModeOn = (event) => {
  navbar.classList.add("navbar-light");
 logo.style.display='block';
 logoLight.style.display='none';
};
const lightModeOff = (event) => {
  navbar.classList.remove("navbar-light");
  logo.style.display='none';
  logoLight.style.display='block';
};
//функция открывания меню
const openMenu = (event) => {
  menu.classList.add("is-open");
  mMenuToggle.classList.add("close-menu");
  document.body.style.overflow = "hidden"; //запрет прокрутки сайта под меню
  lightModeOn();

};
//функция закрывания меню
const closeMenu = (event) => {
  menu.classList.remove("is-open"); //убивает класс
  mMenuToggle.classList.remove("close-menu");
  document.body.style.overflow = ""; //возвращает прокрутку
  this.scrollY < 1 ? lightModeOff() : lightModeOn();
  // lightModeOff();
};

window.addEventListener("scroll", () => {
  this.scrollY > 1 ? lightModeOn() : lightModeOff();
});

mMenuToggle.addEventListener("click", (event) => {
  event.preventDefault();
  menu.classList.contains("is-open") ? closeMenu() : openMenu();
});

const swiper = new Swiper('.swiper', {
  // Optional parameters
  speed: 400,
  autoHeight: true,
  loop: true,
  slidesPerView: 1,
  // Navigation arrows
  navigation: {
    nextEl: '.slider-button-next',
    prevEl: '.slider-button-prev',
  },
  breakpoints: {
    // when window width is >= 320px
    576: {
      slidesPerView: 2,
      // centeredSlides:true,
      // slidesOffsetBefore:-100,
    },
    // when window width is >= 480px
   768: {
      slidesPerView: 3,
    
    },
    // when window width is >= 640px
   1024: {
      slidesPerView: 4,
     
    },
    1200: {
      slidesPerView: 5,
     
    }
  }

});
const secondSwiper = new Swiper('.second-swiper', {
  speed: 400,
  autoHeight: true,
  loop: true,
  longSwipes:false,
  slidesPerView: 1,
  // initialSlide: 1,
 
  // loopAdditionalSlides:0,
  // loopFillGroupWithBlank: true,
  navigation: {
    nextEl: '.slider-button-next',
    prevEl: '.slider-button-prev',
    // type: 'bullets',
    // enabled:true,
  },
  breakpoints: {
    // when window width is >= 320px
    576: {
      slidesPerView: 1,
      centeredSlides:true,
      slidesPerGroup: 1,
     
      // slidesOffsetBefore:-100,
    },
    // when window width is >= 480px
   768: {
      slidesPerView: 2,
      
    
    },
    // when window width is >= 640px
  //  1024: {
  //   slidesPerView: 3,
  
  //   },
    1200: {
      slidesPerView: 3,
    
     
    }
  }
});