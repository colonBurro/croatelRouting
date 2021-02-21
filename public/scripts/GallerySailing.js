$(document).ready(function() {
  // GALLERY AND PAGINATION
  // GALLERY 1
  const galleryItems1 = document.querySelector(".gallery-items-1").children;
  const prev1 = document.querySelector(".prev-1");
  const next1 = document.querySelector(".next-1");
  const page1 = document.querySelector(".page-num-1");

  const maxItem = 6;
  let index = 1;

  // GALLERY 1
  const pagination1 = Math.ceil(galleryItems1.length / maxItem);
  console.log(pagination1);
  prev1.addEventListener("click",function() {
    index--;
    check1();
    showImages1();
  })

  next1.addEventListener("click",function() {
    index++;
    check1();
    showImages1();  
  });

  function check1() {
    if ( index == pagination1) { next1.classList.add("disabled"); }
    else { next1.classList.remove("disabled");	 }
    if (index == 1) { prev1.classList.add("disabled"); }
    else { prev1.classList.remove("disabled");	 }
  };
  function showImages1() {
      for (let i = 0 ;i < galleryItems1.length; i++ ) {
        galleryItems1[i].classList.remove("show");
        galleryItems1[i].classList.add("hide");

        if ( i >= (index * maxItem) - maxItem && i < index * maxItem ) {
          // if i greater than and equal to (index*maxItem)-maxItem;
        // means  (1*8)-8=0 if index=2 then (2*8)-8=8
          galleryItems1[i].classList.remove("hide");
          galleryItems1[i].classList.add("show");
        }
        page1.innerHTML=index;
      }  
  }
  showImages1();
  check1();


// GALLERY 2

const galleryItems2 = document.querySelector(".gallery-items-2").children;
const prev2 = document.querySelector(".prev-2");
const next2 = document.querySelector(".next-2");
const page2 = document.querySelector(".page-num-2");

// const maxItem = 8;
// let index = 1;

const pagination2 = Math.ceil(galleryItems2.length / maxItem);
  console.log(pagination2)
  prev2.addEventListener("click",function(){
    index--;
    check2();
    showImages2();
  })
  next2.addEventListener("click",function(){
    index++;
    check2();
    showImages2();  
  })
  function check2(){
    if ( index == pagination2) { next2.classList.add("disabled"); }
    else { next2.classList.remove("disabled");	 }
    if (index == 1) { prev2.classList.add("disabled"); }
    else { prev2.classList.remove("disabled");	 }
  }
  function showImages2() {
      for (let i = 0 ;i < galleryItems2.length; i++ ) {
        galleryItems2[i].classList.remove("show");
        galleryItems2[i].classList.add("hide");

        if ( i >= (index * maxItem) - maxItem && i < index * maxItem ) {
          // if i greater than and equal to (index*maxItem)-maxItem;
        // means  (1*8)-8=0 if index=2 then (2*8)-8=8
          galleryItems2[i].classList.remove("hide");
          galleryItems2[i].classList.add("show");
        }
        page2.innerHTML=index;
      }  
  }
  showImages2();
  check2();


});