
$(document).ready(function() {

  let burger = document.querySelector('.burger');
  let navMobile = document.querySelector('.nav-mobile');
  let navBar = document.getElementById("navBar");
  
  burger.addEventListener('click', () => {
    //Burger Animation
    burger.classList.toggle('toggle');
    navMobile.classList.toggle('is-active');
  });  

  // HIDE NAVIGATION ON SCROLL
  var prevScrollpos = window.pageYOffset;
  window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
      navBar.style.top = "0";
    } else {
      navBar.style.top = "-8vh";
    }
    prevScrollpos = currentScrollPos;
  }

});