!function(e){var t={};function n(o){if(t[o])return t[o].exports;var r=t[o]={i:o,l:!1,exports:{}};return e[o].call(r.exports,r,r.exports,n),r.l=!0,r.exports}n.m=e,n.c=t,n.d=function(e,t,o){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:o})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var o=Object.create(null);if(n.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)n.d(o,r,function(t){return e[t]}.bind(null,r));return o},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=0)}([function(e,t){jQuery(document).ready((function(e){var t=e(".component__app-bar").height();e(window).scroll((function(){e(window).scrollTop()>=100?(e("body").addClass("scrolled"),t=e(".component__app-bar").height(),console.log(t)):(e("body").removeClass("scrolled"),t=e(".component__app-bar").height(),console.log(t))})),e("div.js-scroll-down").click((function(){var n=e("#under-hero");return e("html,body").animate({scrollTop:n.offset().top-t},1e3),!1})),e(document).ready((function(){const t="[data-expandable-item=true]",n="data-expandable-is-expanded";function o(o,r){const a=e(o).closest("[data-expandable-container=true]"),i=e(o).closest(t),l=e(i).children("[data-expandable-content=true]")[0],c="true"==(e(a).attr("data-expandable-scroll-animation")||"false");if("true"==(e(a).attr("data-expandable-one-at-a-time")||"false")&&e(a).children(t).attr(n,!1),e(i).attr(n,r),c){const t=e(a).attr("data-expandable-animation-duration"),n=Number(t)||500,o=e(r?l:i),c=window.innerHeight/10;e("html, body").animate({scrollTop:e(o).offset().top-c},n)}}e(document).on("click","[data-expandable-cta=true]",(function(r){r.preventDefault();o(this,function(o){const r=e(o).closest(t);return!("true"==(e(r).attr(n)||"false"))}(this))})),e(document).on("click","[data-expandable-open-cta=true]",(function(e){e.preventDefault(),o(this,!0)})),e(document).on("click","[data-expandable-close-cta=true]",(function(e){e.preventDefault(),o(this,!1)})),e(".component__app-bar__menu-icon-container").on("click",(function(t){t.preventDefault();const n=e("body").attr("data-app-menu-is-open")||!1,o="true"==n;console.log(n,o),e("body").attr("data-app-menu-is-open",!o)})),e(".hero__cta").on("click",(function(t){t.preventDefault();const n=e(this).closest(".hero").next();console.log(n),e("html, body").animate({scrollTop:e(n).offset().top-.2*window.innerHeight},500)}));try{tns({container:".component__quote-slider__container",items:1,autoplay:!1,nav:!1,prevButton:".component__quote-slider__controls--prev",nextButton:".component__quote-slider__controls--next"})}catch(e){}try{tns({autoplay:!1,container:".component__experience-slider__list",gutter:0,items:1,mouseDrag:!0,mode:"carousel",nav:!1,nextButton:".component__experience-slider__controls--next",prevButton:".component__experience-slider__controls--prev",responsive:{800:{items:2,gutter:20},1100:{items:3}}})}catch(e){}try{tns({autoplay:!1,container:".experience-carousel",gutter:0,items:1,mouseDrag:!0,mode:"carousel",nav:!1,nextButton:".component__experience-slider__controls--next",prevButton:".component__experience-slider__controls--prev",responsive:{800:{items:1},1100:{items:1}}})}catch(e){}})),e(".gallery").each((function(){e(this).magnificPopup({delegate:"a",type:"image",mainClass:"mfp-with-zoom",zoom:{enabled:!0,duration:300,easing:"ease-in-out",opener:function(e){return e.is("img")?e:e.find("img")}},gallery:{enabled:!0,navigateByImgClick:!0,preload:[0,1]},image:{tError:'<a href="%url%">The image #%curr%</a> could not be loaded.'}})})),e(".toggle").click((function(t){e(this).toggleClass("active"),e(this).siblings(".toggle").children(".toggle__answer").slideUp("slow",(function(){})),e(this).siblings(".toggle").removeClass("active"),e(this).children(".toggle__answer").slideToggle("slow",(function(){}))})),e(".read-more-trigger").click((function(t){e(".read-more-wrapper").addClass("expand"),e(this).addClass("hide")}))}))}]);