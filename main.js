let searchBtn =document.querySelector('#search-btn');
let searchBar =document.querySelector('.search-bar-container');
let formBtn =document.querySelector('#login-btn');
let formBtn2 =document.querySelector('#login2-btn');
let reBtn =document.querySelector('#register-btn');
let loginForm =document.querySelector('.login-form-container');
let registerForm =document.querySelector('.register-form-container');
let formClose =document.querySelector('#form-close');
let formClosere =document.querySelector('#form-closere');
let formClosere1 =document.querySelector('#login2-btn');
let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');

let videoBtn = document.querySelectorAll('.vid-btn');
    




window.onscroll =() =>{
    searchBtn.classList.remove('fa-times');
    searchBar.classList.remove('active');
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
    loginForm.classList.remove('active');
}

menu.addEventListener('click',() =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
 });
 


searchBtn.addEventListener('click',() =>{
   searchBtn.classList.toggle('fa-times');
   searchBar.classList.toggle('active');
});

formBtn.addEventListener('click',() =>{
    loginForm.classList.add('active');
 });

formBtn2.addEventListener('click',() =>{
   loginForm.classList.add('active');
});

formClosere1.addEventListener('click',() =>{
   registerForm.classList.remove('active');
});

reBtn.addEventListener('click',() =>{
   registerForm.classList.add('active');
 });

reBtn.addEventListener('click',() =>{
   loginForm.classList.remove('active');
});

 formClose.addEventListener('click',() =>{
    loginForm.classList.remove('active');
 });

 formClosere.addEventListener('click',() =>{
   registerForm.classList.remove('active');
});

 videoBtn.forEach(btn =>{
     btn.addEventListener('click',()=>{
        document.querySelector('.controls .active').classList.remove('active');
        btn.classList.add('active');
        let src = btn.getAttribute('data-src');
        document.querySelector('#video-slider').src = src;
     });
 });

 var swiper = new Swiper(".review-slider ", {
     spaceBetween:20,
     loop:true,
     autoplay:{
      delay:2500,
      disableOnIneraction:false,
     },
     breakpoints:{
      640:{
         slidesPerview:1,
      },
      768:{
         slidesPerview:2,
      },
      1024:{
         slidesPerview:3,
      },
     },
 });

 
 var swiper = new Swiper(".brand-slider ", {
   spaceBetween:20,
   loop:true,
   autoplay:{
    delay:2500,
    disableOnIneraction:false,
   },
   breakpoints:{
      450:{
         slidesPerview:2,
      },
   
    768:{
       slidesPerview:3,
    },
    991:{
      slidesPerview:4,
   },
    1200:{
       slidesPerview:5,
    },
   },
});