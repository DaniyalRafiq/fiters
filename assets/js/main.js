// client Slick Slider

const swiper = new Swiper(".countries-swiper", {
  slidesPerView: "auto", // Automatically adjust the number of visible slides
  spaceBetween: 0, // Space between slides in pixels
  loop: true, // Enable looping
  autoplay: {
    delay: 1500, // Reduced delay between slides (1.5 seconds)
    disableOnInteraction: false, // Continue autoplay after interaction
  },
  speed: 1000, // Slow down transition speed (1 second)
});

(function () {
  "use strict";
  var forms = document.querySelectorAll(".needs-validation");
  // Loop over them and prevent submission
  Array.prototype.slice.call(forms).forEach(function (form) {
    form.addEventListener(
      "submit",
      function (event) {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }

        form.classList.add("was-validated");
      },
      false
    );
  });
})();

$(document).ready(function () {
  $(".navdesktop").hover(
    function () {
      $(this).addClass("show");
      $(this).find(".dropdown-navdesktop").first().addClass("show");
    },
    function () {
      $(this).removeClass("show");
      $(this).find(".dropdown-navdesktop").first().removeClass("show");
    }
  );
});

// Sticky header

window.addEventListener("scroll", function () {
  var header = document.querySelector("header");
  header.classList.toggle("sticky", window.scrollY > 0);
});

// end Sticky header
const span = document.querySelector(".hero-content h1 span");

let targetX = 0,
  targetY = 0;
let currentX = 0,
  currentY = 0;
const speed = 0.07; // easing smoothness

document.addEventListener("mousemove", (e) => {
  targetX = (e.clientX / window.innerWidth - 0.5) * 40; // rotate Y
  targetY = (e.clientY / window.innerHeight - 0.5) * 40; // rotate X
});

// Animation loop for smooth easing
function animate() {
  currentX += (targetX - currentX) * speed;
  currentY += (targetY - currentY) * speed;

  const shadowX = -currentX * 1.5; // move opposite for depth
  const shadowY = -currentY * 1.5;

  span.style.transform = `rotateX(${currentY}deg) rotateY(${currentX}deg) scale(1.08)`;
  span.style.textShadow = `${shadowX}px ${shadowY}px 20px rgba(0,0,0,0.3)`; // soft glow shadow

  requestAnimationFrame(animate);
}
animate();

// Reset with smooth bounce on leave
document.addEventListener("mouseleave", () => {
  targetX = 0;
  targetY = 0;
});

var testiSwiper = new Swiper(".testi-swiper", {
  slidesPerView: 1, // default (for big screens)
  spaceBetween: 30,
  loop: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  breakpoints: {
    992: {
      slidesPerView: 2, // from 992px up
      spaceBetween: 20,
    },
    1200: {
      slidesPerView: 1, // from 1200px up
      spaceBetween: 30,
    },
    768: {
      slidesPerView: 1, // from 768px up
      spaceBetween: 15,
    },
  },
});

(function () {
  "use strict";
  var forms = document.querySelectorAll(".needs-validation");
  // Loop over them and prevent submission
  Array.prototype.slice.call(forms).forEach(function (form) {
    form.addEventListener(
      "submit",
      function (event) {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }

        form.classList.add("was-validated");
      },
      false
    );
  });
})();
