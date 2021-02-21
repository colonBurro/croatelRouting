function parallax(element, distance, speed) {
  const item = document.querySelector(element);
  item.style.transform = `translateY(${distance * speed}px)`;
}

let parallexEffect = document.getElementById('parallex-effect');

window.addEventListener('scroll', function() {
  parallax('.parallex-effect', window.scrollY, 0.1);
});