// RABBIT
  var balls = document.getElementsByClassName("ball");
  document.onmousemove = function(){
    var x = event.clientX * 100 / window.innerWidth + "%";
    var y = event.clientY * 100 / window.innerHeight + "%";
    //event.clientX => get the horizontal coordinate of the mouse
    //event.clientY => get the Vertical coordinate of the mouse
    //window.innerWidth => get the browser width
    //window.innerHeight => get the browser height

    for(var i=0;i<2;i++){
      balls[i].style.left = x;
      balls[i].style.top = y;
      balls[i].style.transform = "translate(-"+x+",-"+y+")";
    }
  }
// ------------------------------------------------------------------------------------------------------------
// navbar
  const body = document.querySelector("body");
  const navbar = document.querySelector(".navbar_");
  const rabbit = document.querySelector(".rabbit");
  const menuBtn = document.querySelector(".menu-btn");
  const cancelBtn = document.querySelector(".cancel-btn");
  menuBtn.onclick = () => {
    navbar.classList.add("show");
    menuBtn.classList.add("hide");
    body.classList.add("disabled");
  }
  cancelBtn.onclick = () => {
    body.classList.remove("disabled");
    navbar.classList.remove("show");
    menuBtn.classList.remove("hide");
  }
  window.onscroll = () => {
    this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
    this.scrollY > 20 ? rabbit.classList.add("rabbit-small") : rabbit.classList.remove("rabbit-small");
  }
  // -----------------------------------------------------------------------------------------------------------

window.addEventListener('scroll', reveal);

function reveal() {
  var reveals = document.querySelectorAll('.reveal');

  for(var i =0; i < reveals.length; i++){

    var windowheight = window.innerHeight;
    var revealtop = reveals[i].getBoundingClientRect().top;
    var revealpoint = 80;

    if(revealtop < windowheight - revealpoint) {
      reveals[i].classList.add('active');
    }
    else {
      reveals[i].classList.remove('active');
    }
  }
}
// -----------------------------------------------------------------------------------------------------------
$("#Limpiar").click(function(event) {

setTimeout (function() {
 $("#formreset")[0].reset();
}, 2500);
   });
