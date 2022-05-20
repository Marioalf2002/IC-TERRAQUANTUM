// Scroll up

document.getElementById("button-up").addEventListener("click", scrollUp);

function scrollUp() {

    var currentScroll = document.documentElement.scrollTop || document.body.scrollTop;

    if (currentScroll > 0) {
        window.requestAnimationFrame(scrollUp);
        window.scrollTo(0, currentScroll - (currentScroll / 15));
        buttonUp.style.transform = "translateX(60px)";
    }
}

buttonUp = document.getElementById("button-up");

window.onscroll = function () {

    var scroll = document.documentElement.scrollTop;

    if (scroll > 500) {
        buttonUp.style.transform = "translateX(0)";
    } else if (scroll < 500) {
        buttonUp.style.transform = "translateX(60px)";
    }
}

// End Scroll up


// Acordeon

const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");

accordionItemHeaders.forEach(accordionItemHeader => {
  accordionItemHeader.addEventListener("click", event => {
    
    // Uncomment in case you only want to allow for the display of only one collapsed item at a time!
    
    const currentlyActiveAccordionItemHeader = document.querySelector(".accordion-item-header.active");
    if(currentlyActiveAccordionItemHeader && currentlyActiveAccordionItemHeader!==accordionItemHeader) {
      currentlyActiveAccordionItemHeader.classList.toggle("active");
      currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
    }

    accordionItemHeader.classList.toggle("active");
    const accordionItemBody = accordionItemHeader.nextElementSibling;
    if(accordionItemHeader.classList.contains("active")) {
      accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
    }
    else {
      accordionItemBody.style.maxHeight = 0;
    }
    
  });
});

// End Acordeon

// Slider Imagenes

const slider = document.querySelector("#slider");
let sliderSection = document.querySelectorAll(".slider-section");
let sliderSectionLast = sliderSection[sliderSection.length -1];

const btnLeft = document.querySelector("#btn-left");
const btnRight = document.querySelector("#btn-right");

slider.insertAdjacentElement('afterbegin', sliderSectionLast);

function Next() {
  let sliderSectionFirst = document.querySelectorAll(".slider-section")[0];
  slider.style.marginLeft = "-200%";
  slider.style.transition = "all .5s";
  setTimeout(function(){
    slider.style.transition = "none";
    slider.insertAdjacentElement('beforeend', sliderSectionFirst);
    slider.style.marginLeft = "-100%";
  }, 500);
}

function Prev() {
  let sliderSection = document.querySelectorAll(".slider-section");
  let sliderSectionLast = sliderSection[sliderSection.length -1];
  slider.style.marginLeft = "0";
  slider.style.transition = "all .5s";
  setTimeout(function(){
    slider.style.transition = "none";
    slider.insertAdjacentElement('afterbegin', sliderSectionLast);
    slider.style.marginLeft = "-100%";
  }, 500);
}

btnRight.addEventListener('click', function(){
  Next();
});

btnLeft.addEventListener('click', function(){
  Prev();
});

setInterval(function(){ //funcion para que se ejecute cada 5seg automaticamente
  Next();
}, 10000);

// End Slider