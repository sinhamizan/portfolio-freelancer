(function ($) {
  "use strict";

  var mixer = mixitup('.portfolio__list');


  var testimonial_slider = new Swiper(".testimonial__slider", {
    loop: true,
    spaceBetween: 10,
    slidesPerView: 1,
    speed: 1800,
  });


  const smoother = ScrollSmoother.create({
    smooth: 1.35,
    effects: true,
    smoothTouch: 0.1,
    normalizeScroll: false,
    ignoreMobileResize: true,
  });


  let sidebar_links = gsap.utils.toArray(".main-menu li a");
  sidebar_links.forEach(a => {
    let element = document.querySelector(a.getAttribute("href")),
      linkST = ScrollTrigger.create({
        trigger: element,
        start: "top top",
      });
    ScrollTrigger.create({
      trigger: element,
      start: "top center",
      end: "bottom center",
      onToggle: self => self.isActive && setActive(a)
    });
    a.addEventListener("click", e => {
      e.preventDefault();
      gsap.to(window, {
        duration: 0.1,
        scrollTo: linkST.start,
        overwrite: "auto"
      });
    });
  });

  function setActive(link) {
    sidebar_links.forEach(el => el.classList.remove("active"));
    link.classList.add("active");
  }


  let go_top = document.getElementById("go_top");
  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
      go_top.style.opacity = "1";
      go_top.style.transform = "translateY(0px)";
    } else {
      go_top.style.opacity = "0";
      go_top.style.transform = "translateY(20px)";
    }
  }

  go_top.addEventListener('click', function(){
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  });

  
})(jQuery);