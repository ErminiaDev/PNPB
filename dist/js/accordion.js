"use strict";document.querySelectorAll(".accordion").forEach(function(t){t.addEventListener("click",function(o){var e=t.closest(".accordion-wrapper"),c=e.querySelector(".accordion-content"),l=e.querySelector(".accordion");l.classList.toggle("is-open"),console.log(l),c.style.maxHeight?(c.style.maxHeight=null,c.style.color="transparent"):(c.style.maxHeight=c.scrollHeight+"px",c.style.color="black")})}),document.querySelectorAll(".accordion-2").forEach(function(t){t.addEventListener("click",function(o){var e=t.closest(".accordion-wrapper-2"),c=e.querySelector(".accordion-content-2"),l=e.querySelector(".accordion-2");l.classList.toggle("is-closed"),console.log(l),"0px"===c.style.maxHeight?(console.log("accordion was closed"),c.style.maxHeight=c.scrollHeight+"px",c.style.color="black"):(console.log("accordion was open"),c.style.maxHeight="0px",c.style.color="transparent")})});