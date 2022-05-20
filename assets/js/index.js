(()=>{"use strict";var e,o={197:(e,o,t)=>{var r=t(9886),n=document.querySelector("#theme-button"),c="dark-theme",a="bx-sun",l=localStorage.getItem("selectedTheme"),i=localStorage.getItem("selectedIcon");l&&(document.body.classList["dark"===l?"add":"remove"](c),null==n||n.classList["bx bx-moon"===i?"add":"remove"](a));const s=function(){if(!n)throw new Error("[".concat("HTML Structure","]: page should contain theme change button"));n.addEventListener("click",(function(){document.body.classList.toggle(c),n.classList.toggle(a),localStorage.setItem("selectedTheme",document.body.classList.contains(c)?"dark":"light"),localStorage.setItem("selectedIcon",null!=n&&n.classList.contains(a)?"bx bx-moon":"bx bx-sun")}))};function d(){var e=document.querySelector("#header");return window.scrollY>=50?e.classList.add("scroll-header"):e.classList.remove("scroll-header")}function u(){var e=document.querySelector("#scroll-up");if(window.scrollY>=350)return null==e?void 0:e.classList.add("show-scroll");null==e||e.classList.remove("show-scroll")}var v={};function h(e,o){var t,r=e.offsetHeight,n=e.offsetTop-58,c=e.getAttribute("id");if(v[c]?t=v[c]:v[c]=t=document.querySelector(".nav__menu a[href*=".concat(c,"]")),!t)throw new Error("[".concat("HTML Structure","]: nav menu should contain anchor with #").concat(c," href"));if(o>n&&o<=n+r)return function(e){if(window.location.hash!==e)history.pushState?history.pushState(null,"",e):window.location.hash=e}("#".concat(c)),t.classList.add("active-link");t.classList.remove("active-link")}var m=document.querySelectorAll("section[id]");function f(){var e=window.pageYOffset;null==m||m.forEach((function(o){try{h(o,e)}catch(e){console.error(e.message)}}))}const g=function(){window.addEventListener("scroll",d),window.addEventListener("scroll",u),window.addEventListener("scroll",f)};var _="HTML Structure",p=document.querySelectorAll(".value__accordion-item");function w(e){var o=e.querySelector(".value__accordion-content");if(!o)throw new Error("[".concat(_,"]: accordion item should contain content element"));if(e.classList.contains("accordion-open"))return null==o||o.removeAttribute("style"),void e.classList.remove("accordion-open");o.style.height="".concat(o.scrollHeight,"px"),e.classList.add("accordion-open")}const y=function(){null==p||p.forEach((function(e){var o=e.querySelector(".value__accordion-header");if(!o)throw new Error("[".concat(_,"]: accordion item should contain header element"));o.addEventListener("click",(function(){try{var o=document.querySelector(".accordion-open");o&&o!==e&&w(o),w(e)}catch(e){console.error(e.message)}}))}))};var b=(0,t(8401).Z)({origin:"top",distance:"60px",duration:2500,delay:400});const L=function(){b.reveal(".home__title"),b.reveal(".home__description",{delay:500}),b.reveal(".home__search",{delay:600}),b.reveal(".home__value",{delay:700}),b.reveal(".home__images",{delay:800,origin:"bottom"}),b.reveal(".logos__img",{interval:100}),b.reveal(".popular__container"),b.reveal(".value__images",{origin:"left"}),b.reveal(".value__content",{origin:"right"}),b.reveal(".contact__content",{origin:"left"}),b.reveal(".contact__images",{origin:"right"}),b.reveal(".subscribe__container"),b.reveal(".footer__container"),b.reveal(".footer__info",{delay:500})};try{s()}catch(e){console.error(e.message)}g();try{y()}catch(e){console.error(e.message)}new r.ZP(".popular__container",{modules:[r.W_],loop:!0,spaceBetween:32,slidesPerView:"auto",grabCursor:!0,centeredSlides:!0,navigation:{prevEl:".swiper-button-prev",nextEl:".swiper-button-next"}}),L()}},t={};function r(e){var n=t[e];if(void 0!==n)return n.exports;var c=t[e]={exports:{}};return o[e](c,c.exports,r),c.exports}r.m=o,e=[],r.O=(o,t,n,c)=>{if(!t){var a=1/0;for(d=0;d<e.length;d++){for(var[t,n,c]=e[d],l=!0,i=0;i<t.length;i++)(!1&c||a>=c)&&Object.keys(r.O).every((e=>r.O[e](t[i])))?t.splice(i--,1):(l=!1,c<a&&(a=c));if(l){e.splice(d--,1);var s=n();void 0!==s&&(o=s)}}return o}c=c||0;for(var d=e.length;d>0&&e[d-1][2]>c;d--)e[d]=e[d-1];e[d]=[t,n,c]},r.d=(e,o)=>{for(var t in o)r.o(o,t)&&!r.o(e,t)&&Object.defineProperty(e,t,{enumerable:!0,get:o[t]})},r.o=(e,o)=>Object.prototype.hasOwnProperty.call(e,o),(()=>{var e={826:0};r.O.j=o=>0===e[o];var o=(o,t)=>{var n,c,[a,l,i]=t,s=0;if(a.some((o=>0!==e[o]))){for(n in l)r.o(l,n)&&(r.m[n]=l[n]);if(i)var d=i(r)}for(o&&o(t);s<a.length;s++)c=a[s],r.o(e,c)&&e[c]&&e[c][0](),e[c]=0;return r.O(d)},t=self.webpackChunk=self.webpackChunk||[];t.forEach(o.bind(null,0)),t.push=o.bind(null,t.push.bind(t))})(),r.O(void 0,[717],(()=>r(1202)));var n=r.O(void 0,[717],(()=>r(197)));n=r.O(n)})();