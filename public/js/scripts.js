console.log("Bienvenido");

const nav=document.getElementById('nav');
const navBurguer=document.getElementById('nav-burguer');
const navClose=document.getElementById('nav-close');

if(nav&&navBurguer&&navClose){
  navBurguer.addEventListener('click',()=>{
    nav.classList.add('header__nav--show');
    navBurguer.classList.add('header__burguer--show')
  })
  navClose.addEventListener('click',()=>{
    nav.classList.remove('header__nav--show')
    navBurguer.classList.remove('header__burguer--show')
  })
}

$(".banner__slider").slick({
  arrows:false,
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
});
$('.banner__prev').click(function(){
  $('.banner__slider').slick('slickPrev');
})

$('.banner__next').click(function(){
  $('.banner__slider').slick('slickNext');
})

$(".testimonios__slider").slick({
  arrows:false,
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear',
  autoplay: true,
  autoplaySpeed: 2000,
});
$('.testimonios__prev').click(function(){
  $('.testimonios__slider').slick('slickPrev');
})

$('.testimonios__next').click(function(){
  $('.testimonios__slider').slick('slickNext');
})

var acc = document.getElementsByClassName("demostraciones__item__title");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}
document.getElementById("defaultOpen").click();