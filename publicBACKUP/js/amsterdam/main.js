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
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 90);
/******/ })
/************************************************************************/
/******/ ({

/***/ 90:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(91);


/***/ }),

/***/ 91:
/***/ (function(module, exports) {


$(document).ready(function () {

	(function () {
		var scroll = $(window).scrollTop();

		if (scroll >= 100) {
			$(".hamb-wrp").addClass("black");
			$("#header-menu").addClass("black");
		} else {
			$(".hamb-wrp").removeClass("black");
			$("#header-menu").removeClass("black");
		}
	})();

	(function () {
		$('#hamburger').on('click', function () {
			// ICON CLICK

			if (!$(this).hasClass("active")) {

				window.scrollTo(0, 0);
				$(this).addClass("active");
				$('.hamb-wrp').addClass("vanish");
				$('#header-menu').addClass("show");
				$('section#header-menu').removeClass("fixed");
			} else {

				$(this).removeClass("active");
				$('.hamb-wrp').removeClass("vanish");

				$('#header-menu').removeClass("show");

				$('section#header-menu').addClass("fixed");
			}

			$('.bar').toggleClass('animate');
		}); // ICON CLICK END
	})(); // FUNC END


	//COUNTER

	var clock = $('.your-clock').FlipClock(3600 * 24 * 3, {
		clockFace: 'DailyCounter',
		countdown: true
	});

	//SPONSORS

	(function () {
		$.fn.visible = function (partial) {

			var $t = $(this),
			    $w = $(window),
			    viewTop = $w.scrollTop(),
			    viewBottom = viewTop + $w.height(),
			    _top = $t.offset().top,
			    _bottom = _top + $t.height(),
			    compareTop = partial === true ? _bottom : _top,
			    compareBottom = partial === true ? _top : _bottom;

			return compareBottom <= viewBottom && compareTop >= viewTop;
		};
	})();

	var win = $(window);

	var allMods = $(".sponsor");
	var allanimRight = $(".content-wrap");
	var allanimTop = $(".wrp");

	allMods.each(function (i, el) {
		var el = $(el);
		if (el.visible(true)) {
			el.addClass("visible");
		}
	});

	win.scroll(function (event) {

		allanimRight.each(function (i, animRight) {
			var animRight = $(animRight);
			if (animRight.visible(true)) {
				animRight.addClass("animated fadeInRight");
			} else {
				animRight.removeClass("animated fadeInRight");
			}
		});
	});

	win.scroll(function (event) {

		allanimTop.each(function (i, allanimTop) {
			var allanimTop = $(allanimTop);
			if (allanimTop.visible(true)) {
				allanimTop.addClass("animated fadeInTop");
			} else {
				allanimTop.removeClass("animated fadeInTop");
			}
		});
	});

	win.scroll(function (event) {

		allMods.each(function (i, el) {
			var el = $(el);
			if (el.visible(true)) {
				el.addClass("come-in");
			}
		});
	}); //SPONSORS END


	//MAINSPONSORS EFFECT

	var mainsponsors = $(".mainsponsors-wrap > div");

	mainsponsors.each(function (i) {
		var el = $(this);
		setTimeout(function () {
			el.addClass("visible");
		}, i * 500);
	});

	//MENU

	$("#more > a").mouseover(function () {
		$(".first-ul li").each(function () {
			$(this).show();
			$(this).find(".second-ul").removeClass("visib");
		});
	});

	$(".second-ul").mouseleave(function () {
		$(".first-ul li").each(function () {
			$(this).show();
			$(this).find(".second-ul").removeClass("visib");
		});
	});

	$(".first-ul > li").click(function () {
		$(this).siblings().hide();
		$(this).find(".second-ul").addClass("visib");
	});

	//SCROLLING BAR

	$(window).scroll(function () {
		var scroll = $(window).scrollTop();

		if (scroll >= 100) {
			$(".hamb-wrp").addClass("black");
			$("#header-menu").addClass("black");
		} else {
			$(".hamb-wrp").removeClass("black");
			$("#header-menu").removeClass("black");
		}
	});

	$(window).resize(function () {
		$(window).trigger('resize.px.parallax');
		var viewportWidth = $(window).width();
		if (viewportWidth > 1100) {
			$('#header-menu').removeClass("show");
			$('#hamburger').removeClass("active");
			$('.bar').removeClass('animate');
		}
	});

	//PARALLAX

	$('#keynote').parallax({
		imageSrc: '../../gfx/amsterdam/arianna-bg.jpg',
		speed: '0.8'
	});
	$('#keynote-2').parallax({
		imageSrc: '../../gfx/amsterdam/speakers-bg2.jpg',
		speed: '0.8'
	});
	$('#expo').parallax({
		imageSrc: '../../gfx/amsterdam/expo-bg.jpg',
		speed: '0.8'
	});
	$('#clients').parallax({
		imageSrc: '../../gfx/amsterdam/clients-bg.jpg',
		speed: '0.8'
	});
	$('#testimonial').parallax({
		imageSrc: '../../gfx/amsterdam/testimonial-bg.jpg',
		speed: '0.8'
	});
	$('#show-bg').parallax({
		imageSrc: '../../gfx/amsterdam/show-bg.jpg',
		speed: '0.8'
	});
	$('#team-bg').parallax({
		imageSrc: '../../gfx/amsterdam/team-bg.jpg',
		speed: '0.8'
	});
	$('#team2-bg').parallax({
		imageSrc: '../../gfx/amsterdam/team2-bg.jpg',
		speed: '0.8'
	});
}); // READY END

/***/ })

/******/ });