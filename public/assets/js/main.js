
/*=============== SWIPER POPULAR ===============*/
var swiper = new Swiper(".popular__container", {
    spaceBetween:32,
    grabCursor:true,
    centreSlides:true,
    slidesPerView: 'auto',
    // loop:true,

    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
 
/*=============== VALUE ACCORDION ===============*/
const accordionItem=document.querySelectorAll('.value__accordion__item');
accordionItem.forEach((item)=>{
    const accordionHeader =item.querySelector('.value__accordion-header');
    accordionHeader.addEventListener('click',()=>{
        const openItem=document.querySelector('accordion-open')
        toggleItem(item)
        if(openItem && openItem !== item){
            toggleItem(openItem)
        }
    })
})

const toggleItem=item=>{
    const accordionContent =item.querySelector('.value__accordion-content');
    if(item.classList.contains('accordion-open')){
        accordionContent.removeAttribute('style')
        item.classList.remove('accordion-open');
    }
    else{
        accordionContent.style.height=accordionContent.scrollHeight + 'px'
        item.classList.add('accordion-open')
    }
}



/*=============== SCROLL REVEAL ANIMATION ===============*/
const scrollAnim=ScrollReveal({
    origin:'top',
    distance:'60px',
    duration:2500,
    delay:400,
    // reset:true
})
scrollAnim.reveal('.home__title ,.popular__container , .subscribe__container')
scrollAnim.reveal('.home__description , .footer__info',{delay:300})
scrollAnim.reveal('.home__search',{delay:400})
scrollAnim.reveal('.home__value',{delay:500})
scrollAnim.reveal('.value__images',{delay:600,origin:'bottom'})
scrollAnim.reveal('.home__images',{delay:400,origin:'bottom'})
scrollAnim.reveal('.logos__img',{interval:100})
scrollAnim.reveal('.value__images , .contact__content',{origin:'left'})
scrollAnim.reveal('.value__content , .contact__images',{origin:'right'})