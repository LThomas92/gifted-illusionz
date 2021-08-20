/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/dist/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);
__webpack_require__(2);

/***/ }),
/* 1 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 2 */
/***/ (function(module, exports) {

$ = jQuery.noConflict();
let windowSize = false;
let windowHeight = $(window).height();
let gutenbergScrollAnims = false;
let blockTriggerHeight = $(window).height() * 0.33;

$(document).ready(function () {
  if (jQuery(".project-block-section > *").length && !(window.location.hash != "" && jQuery(window.location.hash).length)) {
    gutenbergScrollAnims = true;
    jQuery(".project-block-section > *").each(function () {
      let offset = jQuery(this).get(0).getBoundingClientRect().top;
      jQuery(this).data("offset", offset);
      jQuery(this).addClass("to-reveal");
    });

    let numRevealed = 0;
    jQuery(".project-block-section .to-reveal").each(function () {
      if (jQuery(window).scrollTop() + windowHeight - blockTriggerHeight >= jQuery(this).data("offset")) {
        numRevealed++;
        const thisRef = $(this);
        setTimeout(function () {
          thisRef.removeClass("to-reveal");
          thisRef.addClass("revealed");
        }, 700 + numRevealed * 600);
      }
    });
  }

  $(window).scroll(() => {
    let scrolled = $(window).scrollTop();

    // gutenberg scroll anims
    if (gutenbergScrollAnims) {
      $(".project-block-section .to-reveal").each(function () {
        console.log($(this).data("offset"));
        console.log(scrolled + windowHeight - blockTriggerHeight);
        if (scrolled + windowHeight - blockTriggerHeight >= $(this).data("offset")) {
          $(this).removeClass("to-reveal");
          $(this).addClass("revealed");
        }
      });
    }
  });

  $(window).resize(() => {
    if (jQuery(".project-block-section > *").length && !(window.location.hash != "" && jQuery(window.location.hash).length)) {
      gutenbergScrollAnims = true;
      // console.log(window.scrollY + $(window).height());
      // console.log($('.gutenberg-styles > *'));
      jQuery(".project-block-section > *").each(function () {
        let offset = jQuery(this).get(0).getBoundingClientRect().top;
        // console.log(offset);
        jQuery(this).data("offset", offset);
        jQuery(this).addClass("to-reveal");
      });

      let numRevealed = 0;
      jQuery(".project-block-section .to-reveal").each(function () {
        if (jQuery(window).scrollTop() + (windowHeight - blockTriggerHeight) >= jQuery(this).data("offset")) {
          numRevealed++;
          const thisRef = $(this);
          setTimeout(function () {
            thisRef.removeClass("to-reveal");
            thisRef.addClass("revealed");
          }, 700 + numRevealed * 600);
        }
      });
    }
  });

  $(".image-slideshow").slick({
    dots: false,
    arrows: true,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 3000,
    slidesToShow: 1,
    prevArrow: jQuery(".prev-arrow"),
    nextArrow: jQuery(".next-arrow")
  });

  $(".collections").slick({
    dots: true,
    arrows: false,
    infinite: true,
    autoplay: false,
    autoplaySpeed: 3000,
    slidesToShow: 1
    // prevArrow: jQuery('.prev-arrow'),
    // nextArrow: jQuery('.next-arrow')
  });

  //Testimonials Slider

  $('.testimonials').slick({
    dots: false,
    arrows: true,
    infinite: true,
    autoplay: false,
    autoplaySpeed: 3000,
    slidesToShow: 1,
    prevArrow: jQuery('.testimonials__arrow-left'),
    nextArrow: jQuery('.testimonials__arrow-right')
  });

  $('.portfolio__name').click(function () {
    var portfolioName = $(this).attr('key');
    $(this).toggleClass('portfolio__name-line').siblings().removeClass('portfolio__name-line');

    $('.portfolio__grid picture').each(function () {
      if (portfolioName !== $(this).attr('key')) {
        $(this).addClass('hide-portfolio-img');
      } else {
        $(this).removeClass('hide-portfolio-img');
      }
    });
  });

  $('.all-collections').click(function () {
    $('.portfolio__grid picture').each(function () {
      $(this).removeClass('hide-portfolio-img');
    });
  });

  $('.search-icon').click(function () {
    $('.search-overlay').addClass('search-overlay__active');
  });

  $('.search-overlay__close-btn').click(function () {
    $('.search-overlay').removeClass('search-overlay__active');
  });

  $('.menu-icon__checkbox').click(function () {
    $('.mobile-navigation').toggleClass('mobile-navigation__active');
  });

  $('.mobile-navigation__close').click(function () {
    $('.mobile-navigation').removeClass('mobile-navigation__active');
  });
});

/***/ })
/******/ ]);
//# sourceMappingURL=main.js.map