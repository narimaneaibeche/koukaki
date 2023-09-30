const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting){
            document.querySelectorAll(".banner ")[0].
            classList.add("fadeInTop");   
        }
    })
})
observer.observe(document.querySelector(".site-main"));


/* Annimation de h2 (histoir) en scroll */

const slidingNewsletterr = document.querySelector('.title-h');

window.addEventListener('scroll', () => {

    const {scrollTop, clientHeight} = document.documentElement;

    const topElementToTopViewport = slidingNewsletterr.getBoundingClientRect().top;

    console.log(topElementToTopViewport);

    if(scrollTop > (scrollTop + topElementToTopViewport).toFixed() - clientHeight * 0.8){
        slidingNewsletterr.classList.add('active')
    }
})
/* Annimation de h2 (studio koukaki) en scroll */

const slidingNewsletter = document.querySelector('.title-s');

window.addEventListener('scroll', () => {
    
    const {scrollTop, clientHeight} = document.documentElement;

    const topElementToTopViewport = slidingNewsletter.getBoundingClientRect().top;

    console.log(topElementToTopViewport);

    if(scrollTop > (scrollTop + topElementToTopViewport).toFixed() - clientHeight * 0.2){
        slidingNewsletter.classList.add('active')
    }
})

/* l'effet de caroussel avec swiper js */

    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 35,
        centeredSlides: true,
        loop:true,
        autoplay: {
        delay: 3000
         }
      
    });

/* Parallex de nuage */
const slidNuage = document.querySelector('.nuage');

window.addEventListener('scroll', () => {

    const {scrollTop, clientHeight} = document.documentElement;
    const topElementToTopViewport = slidNuage.getBoundingClientRect().top;

    console.log(topElementToTopViewport);

    if(scrollTop > (scrollTop + topElementToTopViewport).toFixed() - clientHeight * 0.2){
        slidNuage.classList.add('active')
    }
})

/* Menu Burgere */
let openBtn = document.getElementById("openBtn");
let closeBtn = document.getElementById("closeBtn");

let backdrop = document.getElementById("backdrop");

openBtn.addEventListener("click", () => {
  if(getComputedStyle(backdrop).display != "none"){
    backdrop.style.display = "none";
    
  } else {
    backdrop.style.display = "block";
    openBtn.style.display = "none";
    closeBtn.style.display = "block";
    
  }
})
closeBtn.addEventListener("click", () => {
    if(getComputedStyle(backdrop).display != "none"){
      backdrop.style.display = "none";
      openBtn.style.display = "block";
      closeBtn.style.display = "none";
    } else {
      backdrop.style.display = "block";
      closeBtn.style.display = "block"; 
      
    }
  })
  
