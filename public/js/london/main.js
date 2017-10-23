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
/******/ 	return __webpack_require__(__webpack_require__.s = 116);
/******/ })
/************************************************************************/
/******/ ({

/***/ 116:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(117);


/***/ }),

/***/ 117:
/***/ (function(module, exports) {


$(document).ready(function () {

	$(".hrg").click(function () {
		$('#hamburger').removeClass("active");
		$('#header-menu').removeClass("show");
		$('.hamb-wrp').removeClass("vanish");
		$('.bar').toggleClass('animate');
	});

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

	var clock = $('.your-clock').FlipClock(new Date("March 20, 2018 07:30:00"), {
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

	var viewportWidth = $(window).width();
	if (viewportWidth < 1100) {
		$(".more > a").click(function (event) {
			if (!$(this).parent().hasClass("showmob")) {
				$(this).parent().addClass("showmob");
				$(this).parent().siblings().removeClass("showmob");
			} else {
				$(this).parent().removeClass("showmob");
			}
			event.preventDefault();
		});
	}

	$(window).resize(function () {
		var viewportWidth = $(window).width();
		if (viewportWidth < 1100) {
			$(".more > a").click(function (event) {
				if (!$(this).parent().hasClass("showmob")) {
					$(this).parent().addClass("showmob");
					$(this).parent().siblings().removeClass("showmob");
				} else {
					$(this).parent().removeClass("showmob");
				}
				event.preventDefault();
			});
		}
	});

	$(".more").mouseover(function () {
		$("#header-menu").addClass("black");
	});
	$(".dropdownbox").mouseleave(function () {
		if ($(window).scrollTop() == 0) {
			$("#header-menu").removeClass("black");
		}
	});

	$(".more > a").mouseover(function () {
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

	//SCROLLING BAR

	$(window).scroll(function () {
		var scroll = $(window).scrollTop();

		if (scroll >= 100) {
			$("#unleash-logo").addClass("show");
		} else {
			$("#unleash-logo").removeClass("show");
		}
	});

	$(window).resize(function () {
		$(window).trigger('resize.px.parallax');
		var viewportWidth = $(window).width();
		if (viewportWidth > 1100) {
			$('#header-menu').removeClass("show");
			$('#hamburger').removeClass("active");
			$('.bar').removeClass('animate');
			$('.more').removeClass("showmob");
		}
	});

	// Get the modal
	var modal = document.getElementsByClassName('myModal');

	// Get the button that opens the modal
	var btn = document.getElementsByClassName('book');

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	$('.popup').click(function () {
		var popupName = $(this).data('popupdata');
		$('#' + popupName).css("display", "flex");
	});

	$('.close').click(function () {
		$('.modal').css("display", "none");
	});

	// Form handle 
	$(document).on("change", "#FullName", function () {
		var c = $(this).val().split(" "),
		    a = "",
		    b = "";
		$.each(c, function (e, d) {
			e == c.length - 1 ? b += d : a += d + " ";
		});
		a.slice(0, -1);
		$('[data-field="fname"]').val(a);
		$('[data-field="fname"]').html(a);
		$('[data-field="lname"]').val(b);
		$('[data-field="lname"]').html(b);
	});

	if (window.location.href.indexOf('#ThankYouForEnquiry') != -1) {
		$('#thankyou').css("display", "flex");
	}
}); // READY END

/***/ })

/******/ });