const hamburger = document.querySelector('.hamburger');
const mobile_menu= document.querySelector('.mobile-nav')
hamburger.addEventListener('click', function(){
    this.classList.toggle('is-active');
    mobile_menu.classList.toggle('is-active');
})
