const navbar = document.querySelector(".navbar");
const logoLight = document.querySelector(".logo-light");
const logo = document.querySelector(".logo");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");
const isFront = document.body.classList.contains("front-page");

const lightModeOn = (event) => {
  navbar.classList.add("navbar-light");
};
const lightModeOff = (event) => {
  navbar.classList.remove("navbar-light");
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
const changeNavHeight = (height) => {
  navbar.style.height = height;
};
// const chngeSliderTextColor=(event)=>{
//   header-features.classList.add('.header-features-page');
// }
window.addEventListener("scroll", () => {
  this.scrollY > 1 ? changeNavHeight("4.5rem") : changeNavHeight("5.875rem");
  if (isFront) {
    this.scrollY > 1 ? lightModeOn() : lightModeOff();
  }
});

mMenuToggle.addEventListener("click", (event) => {
  event.preventDefault();
  menu.classList.contains("is-open") ? closeMenu() : openMenu();
});

const swiper = new Swiper(".features-slider", {
  // Optional parameters
  speed: 400,
  autoHeight: true,
  loop: true,
  slidesPerView: 1,
  // Navigation arrows
  navigation: {
    nextEl: ".slider-button-next",
    prevEl: ".slider-button-prev",
  },
  breakpoints: {
    // when window width is >= 320px
    576: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 4,
    },
    1200: {
      slidesPerView: 5,
    },
  },
});

const swiperSteps = new Swiper(".steps-slider", {
  speed: 400,
  slidesPerView: 1,
  navigation: {
    nextEl: ".steps-button-next",
    prevEl: ".steps-button-prev",
  },
  breakpoints: {
    576: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 3,
    },
    1200: {
      slidesPerView: 4,
    },
  },
});

const swiperBlog = new Swiper(".blog-slider", {
  // Optional parameters
  speed: 400,
  spaceBetween: 30,
  slidesPerView: 2,
  breakpoints: {
    290: {
      slidesPerView: 1,
    },
    769: {
      slidesPerView: 2,
    },
  },
  // Navigation arrows
  navigation: {
    nextEl: ".blog-button-next",
    prevEl: ".blog-button-prev",
  },
});
const swiperAbout = new Swiper(".about-slider", {
  // Optional parameters
  speed: 400,
  autoHeight: true,

  // CenteredSlides: true,
  // loop: true,
  spaceBetween: 60,
  slidesPerView: 4,
  // CenteredSlides: false,
  breakpoints: {
    290: {
      slidesPerView: 1,
    },
    769: {
      slidesPerView: 2,
    },
  },
  // Navigation arrows
  navigation: {
    nextEl: ".about-button-next",
    prevEl: ".about-button-prev",
  },
});

const modal = document.querySelector(".modal");
const modalDialog = document.querySelector(".modal-dialog");

document.addEventListener("click", (event) => {
  // console.log(event.target.dataset.toggle=="modal"||event.target.parentNode.dataset.toggle == 'modal');
  if (
    event.target.dataset.toggle == "modal" ||
    event.target.parentNode.dataset.toggle == "modal" ||
    (!event.composedPath().includes(modalDialog) &&
      modal.classList.contains("is-open"))
  ) {
    event.preventDefault();
    modal.classList.toggle("is-open");
  }
});
document.addEventListener("keyup", (event) => {
  if (event.key == "Escape" && modal.classList.contains("is-open")) {
    modal.classList.toggle("is-open");
  }
});
// const forms = document.querySelectorAll('form');

// forms.forEach((form) => {
//   const validation = new JustValidate(form, {
//     errorFieldCssClass: "is-invalid",
//   });
//   // console.log(form);
//   validation
//     .addField("[name=username]", [
//       {
//         rule: 'required',
//         errorMessage:'Укажите имя'
//       },
//       {
//         rule: "maxLength",
//         value: 50,
//         errorMessage:'Максимально 50 символов'
//       },
//     ])
//     .addField("[name=userphone]", [
//       {
//         rule: "required",
//         errorMessage: "Укажите телефон",
//       },
//       {
//         rule: "email",
//         errorMessage: "Email is invalid!",
//       }
//       .onSuccess((event) => {
//         console.log(event.target.getAttribute('method'));
//       })
//     ]);
// });
