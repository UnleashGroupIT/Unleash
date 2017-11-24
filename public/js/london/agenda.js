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
/******/ 	return __webpack_require__(__webpack_require__.s = 8);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/london/agenda.js":
/***/ (function(module, exports) {


//FIX TO SCROLL

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

$(function () {

  var rmv = $("#rmv");

  $(window).scroll(function () {

    if ($(window).width() > 1920) {
      if ($(this).scrollTop() >= 1200) {
        $('.cnt').addClass("fxd");
      } else {
        $('.cnt').removeClass("fxd");
        $('.cnt').removeClass("opa");
      }
    } else {
      if ($(this).scrollTop() >= 500) {
        $('.cnt').addClass("fxd");
      } else {
        $('.cnt').removeClass("fxd");
        $('.cnt').removeClass("opa");
      }
    }
  });
  $(window).scroll(function (event) {
    rmv.each(function (i, rmv) {
      var rmv = $(rmv);
      if (rmv.visible(true)) {
        $('.cnt').removeClass("fxd");
      }
    });
  });
});

/*var fix = $(".cnt");
if ($(window).scrollTop() >= (scrollBottom - 930)) {
        $('.cnt').removeClass("fxd");    
      }
var rmv = $(".testimonial-left-img");
          

  win.scroll(function(event) {
  
  fix.each(function(i, fix) {
    var fix = $(fix);
    if (fix.visible(true)) {
      fix.addClass("fxd"); 
    }else{
      animRight.removeClass("fxd");
    } 
  });

});*/

//FIX TO SCROLL END

var ColorPalette = {};
ColorPalette.color = '#3E80B3';
ColorPalette.defaultcolor = '#3E80B3';
ColorPalette.colorArray = '';
ColorPalette.active = 1;

var agendaTracks = [1, 2, 3, 15, 16, 7, 5, 6, 10, 11, 9, 13, 12, 17, 18];
var pointer = 0;
//Get all the colors


function nextItem() {
  pointer = pointer + 1; // increase i by one
  pointer = pointer % agendaTracks.length; // if we've gone too high, start from `0` again
  desktop_agenda($('[data-desktopstage=' + agendaTracks[pointer] + ']')); // give us back the item of where we are now
}

function prevItem() {
  if (pointer === 0) {
    // i would become 0
    pointer = agendaTracks.length; // so put it at the other end of the array
  }
  pointer = pointer - 1; // decrease by one
  desktop_agenda($('[data-desktopstage=' + agendaTracks[pointer] + ']')); // give us back the item of where we are now
}

function desktop_agenda(elem) {
  var mode = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 0;


  if (mode == 0) {
    var category = elem.data('desktopstage');
  } else {
    var category = elem;
  }

  ColorPalette.active = category;

  $(".BreakoutDesktop .BreakoutDesktopIcon").removeClass("ActiveBreakoutIcon");
  $(".BreakoutDesktop .TooltipContent").removeClass("ActiveTooltipContent");

  var thisBreakout = elem;

  //Fade out the break-out panel
  $('#SessionCategoriesDesktop').fadeOut();
  $(thisBreakout).children(".BreakoutDesktopIcon").addClass("ActiveBreakoutIcon");
  $(thisBreakout).children(".TooltipContent").addClass("ActiveTooltipContent");

  $.ajax({
    url: 'controllers/ajax.php',
    type: 'POST',
    dataType: "json",
    data: { action: "agenda_desktop_breakout", category: category },
    success: function success(data) {

      //Fade out and fade in the containers
      $('#DesktopAgenda').css("opacity", 0);

      setTimeout(function () {

        //Check if we have data for day 1
        if (typeof data[0] == "undefined" || data[0] == "error") {
          $('#AgendaDayOne').css('display', 'none');
          $('#SessionsDayOne').css('display', 'none');
        } else {
          $('#AgendaDayOne').css('display', 'block');
          $('#SessionsDayOne').css('display', 'block');
        }

        //Check if we have data for day 2
        if (typeof data[1] == "undefined" || data[1] == "error") {
          $('#AgendaDayTwo').css('display', 'none');
          $('#SessionsDayTwo').css('display', 'none');
        } else {
          $('#AgendaDayTwo').css('display', 'block');
          $('#SessionsDayTwo').css('display', 'block');
        }

        //Content Change


        //Track description
        $("#SelectedStageText").html(data[4]);

        //Floor
        // 6: disruptHR
        // 16: Think Tank I
        // 17: Think Tank II
        // 18: Think Tank III
        // 19: Workshop


        $('#LevelNum').html(data[3]["level"]);
        /*
                              if(category == 6){
                                   $('#LevelNum').html('1');
                              }else {
                                   $('#LevelNum').html('2');
                              }*/

        //Track Title

        $("#AgendaStageTitle").html(data[3]["category"]);

        //Transform the text for disruptHR
        if (data[3]["category"] == "disruptHR") {
          $("#AgendaStageTitle").addClass('NoCaps');
        } else {
          $("#AgendaStageTitle").removeAttr('class');
        }

        //Room data
        //$('#RoomData').html('<i class="fa fa-dot-circle-o"></i> '+data[3]["room"]);
        $('#RoomData').html(data[3]["room"]);
        $('#LocationContainerDesktop').css('color', data[3]["main_color"]);

        //Track title color
        ColorPalette.color = data[3]["main_color"];
        $("#AgendaStageTitle").css('color', ColorPalette.color);

        //Day 1 Content
        if (typeof data[0] != "undefined" && data[0] != "error") {
          $('#SessionsDayOne').html(data[0]);
        }

        //Day 2 Content  
        if (typeof data[1] != "undefined" && data[1] != "error") {
          $('#SessionsDayTwo').html(data[1]);
        }

        $('#DesktopAgenda').css("opacity", 1);
      }, 350); //set timeout (This is for the opacity)

    } //on ajax success


  }); // ajax call end	

}

/* Navigation Mobile */
$(document).ready(function () {
  $('body').on('click', '.BreakoutHeaderMobile', function (e) {
    var stage = $(this).data("mobilestage");

    var state = $('.BreakoutMobile[data-mobilestage="' + stage + '"]').data('currstate');

    switch (state) {
      case 0:
        $('.BreakoutCollapsibleMobile[data-mobilecontstage="' + stage + '"]').slideToggle(300);
        $(this).toggleClass("BreakoutHeaderMobileActive");
        $('.BreakoutMobile[data-mobilestage="' + stage + '"] .fa').toggleClass("CaretActive");
        break;
    }
  });

  $(".MobileCloseSession").on("click", function () {
    var thisData = $(this).data('closetrack');
    var stage = $(this).data('mobilestage');

    $('html, body').animate({
      scrollTop: $('*[data-mobilestage="' + thisData + '"]').offset().top - 75
    }, 1000);

    $(this).parent('.BreakoutCollapsibleMobile[data-mobilecontstage="' + stage + '"]').slideToggle(1000);

    $('.BreakoutHeaderMobile[data-mobilestage="' + stage + '"]').toggleClass("BreakoutHeaderMobileActive");
    $('.BreakoutHeaderMobile[data-mobilestage="' + stage + '"] .fa').toggleClass("CaretActive");
  });
});
/* END Navigation Mobile */

//Get the track id from url
$(function () {
  var url = window.location.href;

  var parts = url.split('#');
  if (typeof parts[1] != "undefined" && parts[1] != '') {

    $.ajax({
      url: 'controllers/ajax.php',
      type: 'POST',
      dataType: "json",
      data: { action: "url_decoder", url_data: parts[1] },
      success: function success(data) {

        //Válasszuk külön a mobilt és a desktopot 
        if (data[0] == 'stage') {

          if ($(window).width() < 1000) {

            setTimeout(function () {
              $('.BreakoutCollapsibleMobile[data-mobilecontstage="' + data[1] + '"]').slideToggle(300);
              $($('[data-mobilestage="' + data[1] + '"]')).toggleClass("BreakoutHeaderMobileActive");
              $('.BreakoutMobile[data-mobilestage="' + data[1] + '"] .fa').toggleClass("CaretActive");

              $('html, body').animate({
                scrollTop: $($('[data-mobilestage="' + data[1] + '"]')).offset().top - 80
              }, 1000);

              mobile_stage_change(data[1]);
            }, 750);
          } else {
            desktop_agenda($('*[data-desktopstage="' + data[1] + '"]'));
          }
        }

        if (data[0] == 'session') {
          change_stage(data[1]['category']);
        }
      }
    }); // ajax call end
  }
});

$(document).ready(function () {

  /**********************************************************
  Desktop Stage Changer
  ************************************************************/
  $('body').on('click', '.BreakoutDesktop', function (e) {
    var elemId = $(this).data('desktopstage');

    pointer = agendaTracks.indexOf(elemId);

    desktop_agenda($(this));
  });

  $.ajax({
    url: 'controllers/ajax.php',
    type: 'POST',
    data: { action: "display_mobile_agenda" },
    success: function success(data) {

      // $('#AgendaNavMobile').html(data);


    }
  }); // ajax call end


  $('body').on('click', '.BreakoutHeaderMobile', function (e) {
    if ($(this).hasClass('BreakoutHeaderMobileActive')) {

      var track = $(this).data("mobilestage");
      mobile_stage_change(track);
    }
  });
});

function mobile_stage_change(track) {
  $('[data-mobilecontstage="' + track + '"]').html('<div id="canvasloader-container2" class="wrapper MarginBottomMedium"></div>');

  var cl = new CanvasLoader('canvasloader-container2');
  cl.setDiameter(40); // default is 40
  cl.setDensity(103); // default is 40
  cl.setRange(1); // default is 1.3
  cl.setFPS(30); // default is 24
  cl.show(); // Hidden by default

  // This bit is only for positioning - not necessary
  var loaderObj = document.getElementById("canvasLoader");
  loaderObj.style.position = "static";
  loaderObj.style["top"] = cl.getDiameter() * -0.5 + "px";
  loaderObj.style["left"] = cl.getDiameter() * -0.5 + "px";

  $.ajax({
    url: 'controllers/ajax.php',
    type: 'POST',
    data: { action: "display_mobile_agenda_data", track: track },
    success: function success(data) {

      $('[data-mobilecontstage="' + track + '"]').html(data);
    }
  }); // ajax call end
}

function prevNext() {}

/***/ }),

/***/ 8:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__("./resources/assets/js/london/agenda.js");


/***/ })

/******/ });