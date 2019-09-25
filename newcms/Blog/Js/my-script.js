
    var element = document.querySelector(".animated-icon1");
    element.onclick = function () {
      element.classList.toggle("open");
    }
  
    var navbar = document.querySelector(".navbar");
    window.onscroll = function () { scrolledNav() };
    function scrolledNav() {
      if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        navbar.style.padding = "0.3rem 2rem ";
      } else {
        navbar.style.padding = "0.7rem 2rem ";
      }
    }
  