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

let currentModal;//текущее модальное окно
let modalDialog;//белое диалоговое окно
const alertModal = document.querySelector('#alert-modal');//окно с благодарностью
// const modalButton=document.querySelector(".modal-form-button");
// const sending=document.querySelector(".sending");

const modalButtons = document.querySelectorAll('[data-toggle=modal]');//переключатели модальных окон

modalButtons.forEach((button) => {
  button.addEventListener('click', (event) => {
    event.preventDefault();
    //определяем текущее открытое окно
    currentModal = document.querySelector(button.dataset.target);
    currentModal.classList.toggle("is-open");

    console.log(button.dataset.target);
    console.log(currentModal);
  })

})
document.addEventListener("keyup", (event) => {
  if (event.key == "Escape" && currentModal.classList.contains("is-open")) {
    currentModal.classList.toggle("is-open");
  }
});


const forms = document.querySelectorAll('form');

forms.forEach((form) => {
  const validation = new JustValidate(form, {
    errorFieldCssClass: "is-invalid",
  });
  // console.log(forms);
  validation
    .addField("[name=username]", [
      {
        rule: 'required',
        errorMessage: 'Укажите имя'
      },
      {
        rule: "maxLength",
        value: 50,
        errorMessage: 'Максимально 50 символов'
      },
    ])
    .addField("[name=userphone]", [
      {
        rule: "required",
        errorMessage: "Укажите телефон",
      },
      {
        rule: "required",
        errorMessage: "Phone is invalid!",
      }

    ])
    .onSuccess((event) => {
      const thisForm = event.target;//наша форма
      const formData = new FormData(thisForm);//данные из нашей формы
      const ajaxSend = (formData) => {
        fetch(thisForm.getAttribute("action"), {
          method: thisForm.getAttribute("method"),
          body: formData,

        }).then((response) => {
          if (response.ok) {
            thisForm.reset();
            currentModal.classList.remove('is-open');
            alertModal.classList.add('is-open');
            currentModal = alertModal;
            modalDialog = document.querySelector('.modal-dialog');
            currentModal.addEventListener('click', (event) => {
              if (!event.composedPath().includes(modalDialog)) {
                currentModal.classList.remove("is-open");
              }
            });
            // alert('форма отправлена');
          } else {
            alert(response.statusText);
          }
        });

      };
      ajaxSend(formData);
    })
});


/* Создаем префикс +7, даже если вводят 8 или 9 */
const prefixNumber = (str) => {
  /* если вводят семерку, добавляем ей скобку */
  if (str === "7") {
    return "7 (";
  }
  /* если вводят восьмерку, ставим вместо нее +7 ( */
  if (str === "8") {
    return "+7 (";
  }
  /* если пишут девятку, заменяем на +7 (9  */
  if (str === "9") {
    return "7 (9";
  }
  /* в других случаях просто 7 (  */
  return "7 (";
}; /* профикс в любом раскладе будет +7 () */

/* Ловим события ввода в любом поле */
document.addEventListener("input", (e) => {
  /* Проверяем, что это поле имеет класс phone-mask */
  if (e.target.classList.contains("phone-mask")) {
    /* поле с телефоном помещаем в переменную input */
    const input = e.target;
    /* вставляем плюс в начале номера */
    const value = input.value.replace(/\D+/g, "");
    /* длинна номера 11 символов */
    const numberLength = 11;

    /* Создаем переменную, куда будем записывать номер */
    let result;
    /* Если пользователь ввел 8... */
    if (input.value.includes("+8") || input.value[0] === "8") {
      /* Стираем восьмерку */
      result = "";
    } else {
      /* Оставляем плюсик в поле */
      result = "+";
    }

    /* Запускаем цикл, где переберем каждую цифру от 0 до 11 */
    for (let i = 0; i < value.length && i < numberLength; i++) {
      switch (i) {
        case 0:
          /* в самом начале ставим префикс +7 ( */
          result += prefixNumber(value[i]);
          continue;
        case 4:
          /* добавляем после "+7 (" круглую скобку ")" */
          result += ") ";
          break;
        case 7:
          /* дефис после 7 символа */
          result += "-";
          break;
        case 9:
          /* еще дефис  */
          result += "-";
          break;
        default:
          break;
      }
      /* на каждом шаге цикла добавляем новую цифру к номеру */
      result += value[i];
    }
    /* итог: номер в формате +7 (999) 123-45-67 */
    input.value = result;
  }
});