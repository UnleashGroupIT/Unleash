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
/******/ 	return __webpack_require__(__webpack_require__.s = 4);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/amsterdam/flipclock.min.js":
/***/ (function(module, exports) {

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

/*! flipclock 2015-08-31 */
var Base = function Base() {};Base.extend = function (a, b) {
  "use strict";
  var c = Base.prototype.extend;Base._prototyping = !0;var d = new this();c.call(d, a), d.base = function () {}, delete Base._prototyping;var e = d.constructor,
      f = d.constructor = function () {
    if (!Base._prototyping) if (this._constructing || this.constructor == f) this._constructing = !0, e.apply(this, arguments), delete this._constructing;else if (null !== arguments[0]) return (arguments[0].extend || c).call(arguments[0], d);
  };return f.ancestor = this, f.extend = this.extend, f.forEach = this.forEach, f.implement = this.implement, f.prototype = d, f.toString = this.toString, f.valueOf = function (a) {
    return "object" == a ? f : e.valueOf();
  }, c.call(f, b), "function" == typeof f.init && f.init(), f;
}, Base.prototype = { extend: function extend(a, b) {
    if (arguments.length > 1) {
      var c = this[a];if (c && "function" == typeof b && (!c.valueOf || c.valueOf() != b.valueOf()) && /\bbase\b/.test(b)) {
        var d = b.valueOf();b = function b() {
          var a = this.base || Base.prototype.base;this.base = c;var b = d.apply(this, arguments);return this.base = a, b;
        }, b.valueOf = function (a) {
          return "object" == a ? b : d;
        }, b.toString = Base.toString;
      }this[a] = b;
    } else if (a) {
      var e = Base.prototype.extend;Base._prototyping || "function" == typeof this || (e = this.extend || e);for (var f = { toSource: null }, g = ["constructor", "toString", "valueOf"], h = Base._prototyping ? 0 : 1; i = g[h++];) {
        a[i] != f[i] && e.call(this, i, a[i]);
      }for (var i in a) {
        f[i] || e.call(this, i, a[i]);
      }
    }return this;
  } }, Base = Base.extend({ constructor: function constructor() {
    this.extend(arguments[0]);
  } }, { ancestor: Object, version: "1.1", forEach: function forEach(a, b, c) {
    for (var d in a) {
      void 0 === this.prototype[d] && b.call(c, a[d], d, a);
    }
  }, implement: function implement() {
    for (var a = 0; a < arguments.length; a++) {
      "function" == typeof arguments[a] ? arguments[a](this.prototype) : this.prototype.extend(arguments[a]);
    }return this;
  }, toString: function toString() {
    return String(this.valueOf());
  } });var _FlipClock;!function (a) {
  "use strict";
  _FlipClock = function FlipClock(a, b, c) {
    return b instanceof Object && b instanceof Date == !1 && (c = b, b = 0), new _FlipClock.Factory(a, b, c);
  }, _FlipClock.Lang = {}, _FlipClock.Base = Base.extend({ buildDate: "2014-12-12", version: "0.7.7", constructor: function constructor(b, c) {
      "object" != (typeof b === "undefined" ? "undefined" : _typeof(b)) && (b = {}), "object" != (typeof c === "undefined" ? "undefined" : _typeof(c)) && (c = {}), this.setOptions(a.extend(!0, {}, b, c));
    }, callback: function callback(a) {
      if ("function" == typeof a) {
        for (var b = [], c = 1; c <= arguments.length; c++) {
          arguments[c] && b.push(arguments[c]);
        }a.apply(this, b);
      }
    }, log: function log(a) {
      window.console && console.log && console.log(a);
    }, getOption: function getOption(a) {
      return this[a] ? this[a] : !1;
    }, getOptions: function getOptions() {
      return this;
    }, setOption: function setOption(a, b) {
      this[a] = b;
    }, setOptions: function setOptions(a) {
      for (var b in a) {
        "undefined" != typeof a[b] && this.setOption(b, a[b]);
      }
    } });
}(jQuery), function (a) {
  "use strict";
  _FlipClock.Face = _FlipClock.Base.extend({ autoStart: !0, dividers: [], factory: !1, lists: [], constructor: function constructor(a, b) {
      this.dividers = [], this.lists = [], this.base(b), this.factory = a;
    }, build: function build() {
      this.autoStart && this.start();
    }, createDivider: function createDivider(b, c, d) {
      "boolean" != typeof c && c || (d = c, c = b);var e = ['<span class="' + this.factory.classes.dot + ' top"></span>', '<span class="' + this.factory.classes.dot + ' bottom"></span>'].join("");d && (e = ""), b = this.factory.localize(b);var f = ['<span class="' + this.factory.classes.divider + " " + (c ? c : "").toLowerCase() + '">', '<span class="' + this.factory.classes.label + '">' + (b ? b : "") + "</span>", e, "</span>"],
          g = a(f.join(""));return this.dividers.push(g), g;
    }, createList: function createList(a, b) {
      "object" == (typeof a === "undefined" ? "undefined" : _typeof(a)) && (b = a, a = 0);var c = new _FlipClock.List(this.factory, a, b);return this.lists.push(c), c;
    }, reset: function reset() {
      this.factory.time = new _FlipClock.Time(this.factory, this.factory.original ? Math.round(this.factory.original) : 0, { minimumDigits: this.factory.minimumDigits }), this.flip(this.factory.original, !1);
    }, appendDigitToClock: function appendDigitToClock(a) {
      a.$el.append(!1);
    }, addDigit: function addDigit(a) {
      var b = this.createList(a, { classes: { active: this.factory.classes.active, before: this.factory.classes.before, flip: this.factory.classes.flip } });this.appendDigitToClock(b);
    }, start: function start() {}, stop: function stop() {}, autoIncrement: function autoIncrement() {
      this.factory.countdown ? this.decrement() : this.increment();
    }, increment: function increment() {
      this.factory.time.addSecond();
    }, decrement: function decrement() {
      0 == this.factory.time.getTimeSeconds() ? this.factory.stop() : this.factory.time.subSecond();
    }, flip: function flip(b, c) {
      var d = this;a.each(b, function (a, b) {
        var e = d.lists[a];e ? (c || b == e.digit || e.play(), e.select(b)) : d.addDigit(b);
      });
    } });
}(jQuery), function (a) {
  "use strict";
  _FlipClock.Factory = _FlipClock.Base.extend({ animationRate: 1e3, autoStart: !0, callbacks: { destroy: !1, create: !1, init: !1, interval: !1, start: !1, stop: !1, reset: !1 }, classes: { active: "flip-clock-active", before: "flip-clock-before", divider: "flip-clock-divider", dot: "flip-clock-dot", label: "flip-clock-label", flip: "flip", play: "play", wrapper: "flip-clock-wrapper" }, clockFace: "HourlyCounter", countdown: !1, defaultClockFace: "HourlyCounter", defaultLanguage: "english", $el: !1, face: !0, lang: !1, language: "english", minimumDigits: 0, original: !1, running: !1, time: !1, timer: !1, $wrapper: !1, constructor: function constructor(b, c, d) {
      d || (d = {}), this.lists = [], this.running = !1, this.base(d), this.$el = a(b).addClass(this.classes.wrapper), this.$wrapper = this.$el, this.original = c instanceof Date ? c : c ? Math.round(c) : 0, this.time = new _FlipClock.Time(this, this.original, { minimumDigits: this.minimumDigits, animationRate: this.animationRate }), this.timer = new _FlipClock.Timer(this, d), this.loadLanguage(this.language), this.loadClockFace(this.clockFace, d), this.autoStart && this.start();
    }, loadClockFace: function loadClockFace(a, b) {
      var c,
          d = "Face",
          e = !1;return a = a.ucfirst() + d, this.face.stop && (this.stop(), e = !0), this.$el.html(""), this.time.minimumDigits = this.minimumDigits, c = _FlipClock[a] ? new _FlipClock[a](this, b) : new _FlipClock[this.defaultClockFace + d](this, b), c.build(), this.face = c, e && this.start(), this.face;
    }, loadLanguage: function loadLanguage(a) {
      var b;return b = _FlipClock.Lang[a.ucfirst()] ? _FlipClock.Lang[a.ucfirst()] : _FlipClock.Lang[a] ? _FlipClock.Lang[a] : _FlipClock.Lang[this.defaultLanguage], this.lang = b;
    }, localize: function localize(a, b) {
      var c = this.lang;if (!a) return null;var d = a.toLowerCase();return "object" == (typeof b === "undefined" ? "undefined" : _typeof(b)) && (c = b), c && c[d] ? c[d] : a;
    }, start: function start(a) {
      var b = this;b.running || b.countdown && !(b.countdown && b.time.time > 0) ? b.log("Trying to start timer when countdown already at 0") : (b.face.start(b.time), b.timer.start(function () {
        b.flip(), "function" == typeof a && a();
      }));
    }, stop: function stop(a) {
      this.face.stop(), this.timer.stop(a);for (var b in this.lists) {
        this.lists.hasOwnProperty(b) && this.lists[b].stop();
      }
    }, reset: function reset(a) {
      this.timer.reset(a), this.face.reset();
    }, setTime: function setTime(a) {
      this.time.time = a, this.flip(!0);
    }, getTime: function getTime(a) {
      return this.time;
    }, setCountdown: function setCountdown(a) {
      var b = this.running;this.countdown = a ? !0 : !1, b && (this.stop(), this.start());
    }, flip: function flip(a) {
      this.face.flip(!1, a);
    } });
}(jQuery), function (a) {
  "use strict";
  _FlipClock.List = _FlipClock.Base.extend({ digit: 0, classes: { active: "flip-clock-active", before: "flip-clock-before", flip: "flip" }, factory: !1, $el: !1, $obj: !1, items: [], lastDigit: 0, constructor: function constructor(a, b, c) {
      this.factory = a, this.digit = b, this.lastDigit = b, this.$el = this.createList(), this.$obj = this.$el, b > 0 && this.select(b), this.factory.$el.append(this.$el);
    }, select: function select(a) {
      if ("undefined" == typeof a ? a = this.digit : this.digit = a, this.digit != this.lastDigit) {
        var b = this.$el.find("." + this.classes.before).removeClass(this.classes.before);this.$el.find("." + this.classes.active).removeClass(this.classes.active).addClass(this.classes.before), this.appendListItem(this.classes.active, this.digit), b.remove(), this.lastDigit = this.digit;
      }
    }, play: function play() {
      this.$el.addClass(this.factory.classes.play);
    }, stop: function stop() {
      var a = this;setTimeout(function () {
        a.$el.removeClass(a.factory.classes.play);
      }, this.factory.timer.interval);
    }, createListItem: function createListItem(a, b) {
      return ['<li class="' + (a ? a : "") + '">', '<a href="#">', '<div class="up">', '<div class="shadow"></div>', '<div class="inn">' + (b ? b : "") + "</div>", "</div>", '<div class="down">', '<div class="shadow"></div>', '<div class="inn">' + (b ? b : "") + "</div>", "</div>", "</a>", "</li>"].join("");
    }, appendListItem: function appendListItem(a, b) {
      var c = this.createListItem(a, b);this.$el.append(c);
    }, createList: function createList() {
      var b = this.getPrevDigit() ? this.getPrevDigit() : this.digit,
          c = a(['<ul class="' + this.classes.flip + " " + (this.factory.running ? this.factory.classes.play : "") + '">', this.createListItem(this.classes.before, b), this.createListItem(this.classes.active, this.digit), "</ul>"].join(""));return c;
    }, getNextDigit: function getNextDigit() {
      return 9 == this.digit ? 0 : this.digit + 1;
    }, getPrevDigit: function getPrevDigit() {
      return 0 == this.digit ? 9 : this.digit - 1;
    } });
}(jQuery), function (a) {
  "use strict";
  String.prototype.ucfirst = function () {
    return this.substr(0, 1).toUpperCase() + this.substr(1);
  }, a.fn.FlipClock = function (b, c) {
    return new _FlipClock(a(this), b, c);
  }, a.fn.flipClock = function (b, c) {
    return a.fn.FlipClock(b, c);
  };
}(jQuery), function (a) {
  "use strict";
  _FlipClock.Time = _FlipClock.Base.extend({ time: 0, factory: !1, minimumDigits: 0, constructor: function constructor(a, b, c) {
      "object" != (typeof c === "undefined" ? "undefined" : _typeof(c)) && (c = {}), c.minimumDigits || (c.minimumDigits = a.minimumDigits), this.base(c), this.factory = a, b && (this.time = b);
    }, convertDigitsToArray: function convertDigitsToArray(a) {
      var b = [];a = a.toString();for (var c = 0; c < a.length; c++) {
        a[c].match(/^\d*$/g) && b.push(a[c]);
      }return b;
    }, digit: function digit(a) {
      var b = this.toString(),
          c = b.length;return b[c - a] ? b[c - a] : !1;
    }, digitize: function digitize(b) {
      var c = [];if (a.each(b, function (a, b) {
        b = b.toString(), 1 == b.length && (b = "0" + b);for (var d = 0; d < b.length; d++) {
          c.push(b.charAt(d));
        }
      }), c.length > this.minimumDigits && (this.minimumDigits = c.length), this.minimumDigits > c.length) for (var d = c.length; d < this.minimumDigits; d++) {
        c.unshift("0");
      }return c;
    }, getDateObject: function getDateObject() {
      return this.time instanceof Date ? this.time : new Date(new Date().getTime() + 1e3 * this.getTimeSeconds());
    }, getDayCounter: function getDayCounter(a) {
      var b = [this.getDays(), this.getHours(!0), this.getMinutes(!0)];return a && b.push(this.getSeconds(!0)), this.digitize(b);
    }, getDays: function getDays(a) {
      var b = this.getTimeSeconds() / 60 / 60 / 24;return a && (b %= 7), Math.floor(b);
    }, getHourCounter: function getHourCounter() {
      var a = this.digitize([this.getHours(), this.getMinutes(!0), this.getSeconds(!0)]);return a;
    }, getHourly: function getHourly() {
      return this.getHourCounter();
    }, getHours: function getHours(a) {
      var b = this.getTimeSeconds() / 60 / 60;return a && (b %= 24), Math.floor(b);
    }, getMilitaryTime: function getMilitaryTime(a, b) {
      "undefined" == typeof b && (b = !0), a || (a = this.getDateObject());var c = [a.getHours(), a.getMinutes()];return b === !0 && c.push(a.getSeconds()), this.digitize(c);
    }, getMinutes: function getMinutes(a) {
      var b = this.getTimeSeconds() / 60;return a && (b %= 60), Math.floor(b);
    }, getMinuteCounter: function getMinuteCounter() {
      var a = this.digitize([this.getMinutes(), this.getSeconds(!0)]);return a;
    }, getTimeSeconds: function getTimeSeconds(a) {
      return a || (a = new Date()), this.time instanceof Date ? this.factory.countdown ? Math.max(this.time.getTime() / 1e3 - a.getTime() / 1e3, 0) : a.getTime() / 1e3 - this.time.getTime() / 1e3 : this.time;
    }, getTime: function getTime(a, b) {
      "undefined" == typeof b && (b = !0), a || (a = this.getDateObject()), console.log(a);var c = a.getHours(),
          d = [c > 12 ? c - 12 : 0 === c ? 12 : c, a.getMinutes()];return b === !0 && d.push(a.getSeconds()), this.digitize(d);
    }, getSeconds: function getSeconds(a) {
      var b = this.getTimeSeconds();return a && (60 == b ? b = 0 : b %= 60), Math.ceil(b);
    }, getWeeks: function getWeeks(a) {
      var b = this.getTimeSeconds() / 60 / 60 / 24 / 7;return a && (b %= 52), Math.floor(b);
    }, removeLeadingZeros: function removeLeadingZeros(b, c) {
      var d = 0,
          e = [];return a.each(c, function (a, f) {
        b > a ? d += parseInt(c[a], 10) : e.push(c[a]);
      }), 0 === d ? e : c;
    }, addSeconds: function addSeconds(a) {
      this.time instanceof Date ? this.time.setSeconds(this.time.getSeconds() + a) : this.time += a;
    }, addSecond: function addSecond() {
      this.addSeconds(1);
    }, subSeconds: function subSeconds(a) {
      this.time instanceof Date ? this.time.setSeconds(this.time.getSeconds() - a) : this.time -= a;
    }, subSecond: function subSecond() {
      this.subSeconds(1);
    }, toString: function toString() {
      return this.getTimeSeconds().toString();
    } });
}(jQuery), function (a) {
  "use strict";
  _FlipClock.Timer = _FlipClock.Base.extend({ callbacks: { destroy: !1, create: !1, init: !1, interval: !1, start: !1, stop: !1, reset: !1 }, count: 0, factory: !1, interval: 1e3, animationRate: 1e3, constructor: function constructor(a, b) {
      this.base(b), this.factory = a, this.callback(this.callbacks.init), this.callback(this.callbacks.create);
    }, getElapsed: function getElapsed() {
      return this.count * this.interval;
    }, getElapsedTime: function getElapsedTime() {
      return new Date(this.time + this.getElapsed());
    }, reset: function reset(a) {
      clearInterval(this.timer), this.count = 0, this._setInterval(a), this.callback(this.callbacks.reset);
    }, start: function start(a) {
      this.factory.running = !0, this._createTimer(a), this.callback(this.callbacks.start);
    }, stop: function stop(a) {
      this.factory.running = !1, this._clearInterval(a), this.callback(this.callbacks.stop), this.callback(a);
    }, _clearInterval: function _clearInterval() {
      clearInterval(this.timer);
    }, _createTimer: function _createTimer(a) {
      this._setInterval(a);
    }, _destroyTimer: function _destroyTimer(a) {
      this._clearInterval(), this.timer = !1, this.callback(a), this.callback(this.callbacks.destroy);
    }, _interval: function _interval(a) {
      this.callback(this.callbacks.interval), this.callback(a), this.count++;
    }, _setInterval: function _setInterval(a) {
      var b = this;b._interval(a), b.timer = setInterval(function () {
        b._interval(a);
      }, this.interval);
    } });
}(jQuery), function (a) {
  _FlipClock.TwentyFourHourClockFace = _FlipClock.Face.extend({ constructor: function constructor(a, b) {
      this.base(a, b);
    }, build: function build(b) {
      var c = this,
          d = this.factory.$el.find("ul");this.factory.time.time || (this.factory.original = new Date(), this.factory.time = new _FlipClock.Time(this.factory, this.factory.original));var b = b ? b : this.factory.time.getMilitaryTime(!1, this.showSeconds);b.length > d.length && a.each(b, function (a, b) {
        c.createList(b);
      }), this.createDivider(), this.createDivider(), a(this.dividers[0]).insertBefore(this.lists[this.lists.length - 2].$el), a(this.dividers[1]).insertBefore(this.lists[this.lists.length - 4].$el), this.base();
    }, flip: function flip(a, b) {
      this.autoIncrement(), a = a ? a : this.factory.time.getMilitaryTime(!1, this.showSeconds), this.base(a, b);
    } });
}(jQuery), function (a) {
  _FlipClock.CounterFace = _FlipClock.Face.extend({ shouldAutoIncrement: !1, constructor: function constructor(a, b) {
      "object" != (typeof b === "undefined" ? "undefined" : _typeof(b)) && (b = {}), a.autoStart = b.autoStart ? !0 : !1, b.autoStart && (this.shouldAutoIncrement = !0), a.increment = function () {
        a.countdown = !1, a.setTime(a.getTime().getTimeSeconds() + 1);
      }, a.decrement = function () {
        a.countdown = !0;var b = a.getTime().getTimeSeconds();b > 0 && a.setTime(b - 1);
      }, a.setValue = function (b) {
        a.setTime(b);
      }, a.setCounter = function (b) {
        a.setTime(b);
      }, this.base(a, b);
    }, build: function build() {
      var b = this,
          c = this.factory.$el.find("ul"),
          d = this.factory.getTime().digitize([this.factory.getTime().time]);d.length > c.length && a.each(d, function (a, c) {
        var d = b.createList(c);d.select(c);
      }), a.each(this.lists, function (a, b) {
        b.play();
      }), this.base();
    }, flip: function flip(a, b) {
      this.shouldAutoIncrement && this.autoIncrement(), a || (a = this.factory.getTime().digitize([this.factory.getTime().time])), this.base(a, b);
    }, reset: function reset() {
      this.factory.time = new _FlipClock.Time(this.factory, this.factory.original ? Math.round(this.factory.original) : 0), this.flip();
    } });
}(jQuery), function (a) {
  _FlipClock.DailyCounterFace = _FlipClock.Face.extend({ showSeconds: !0, constructor: function constructor(a, b) {
      this.base(a, b);
    }, build: function build(b) {
      var c = this,
          d = this.factory.$el.find("ul"),
          e = 0;b = b ? b : this.factory.time.getDayCounter(this.showSeconds), b.length > d.length && a.each(b, function (a, b) {
        c.createList(b);
      }), this.showSeconds ? a(this.createDivider("Seconds")).insertBefore(this.lists[this.lists.length - 2].$el) : e = 2, a(this.createDivider("Minutes")).insertBefore(this.lists[this.lists.length - 4 + e].$el), a(this.createDivider("Hours")).insertBefore(this.lists[this.lists.length - 6 + e].$el), a(this.createDivider("Days", !0)).insertBefore(this.lists[0].$el), this.base();
    }, flip: function flip(a, b) {
      a || (a = this.factory.time.getDayCounter(this.showSeconds)), this.autoIncrement(), this.base(a, b);
    } });
}(jQuery), function (a) {
  _FlipClock.HourlyCounterFace = _FlipClock.Face.extend({ constructor: function constructor(a, b) {
      this.base(a, b);
    }, build: function build(b, c) {
      var d = this,
          e = this.factory.$el.find("ul");c = c ? c : this.factory.time.getHourCounter(), c.length > e.length && a.each(c, function (a, b) {
        d.createList(b);
      }), a(this.createDivider("Seconds")).insertBefore(this.lists[this.lists.length - 2].$el), a(this.createDivider("Minutes")).insertBefore(this.lists[this.lists.length - 4].$el), b || a(this.createDivider("Hours", !0)).insertBefore(this.lists[0].$el), this.base();
    }, flip: function flip(a, b) {
      a || (a = this.factory.time.getHourCounter()), this.autoIncrement(), this.base(a, b);
    }, appendDigitToClock: function appendDigitToClock(a) {
      this.base(a), this.dividers[0].insertAfter(this.dividers[0].next());
    } });
}(jQuery), function (a) {
  _FlipClock.MinuteCounterFace = _FlipClock.HourlyCounterFace.extend({ clearExcessDigits: !1, constructor: function constructor(a, b) {
      this.base(a, b);
    }, build: function build() {
      this.base(!0, this.factory.time.getMinuteCounter());
    }, flip: function flip(a, b) {
      a || (a = this.factory.time.getMinuteCounter()), this.base(a, b);
    } });
}(jQuery), function (a) {
  _FlipClock.TwelveHourClockFace = _FlipClock.TwentyFourHourClockFace.extend({ meridium: !1, meridiumText: "AM", build: function build() {
      var b = this.factory.time.getTime(!1, this.showSeconds);this.base(b), this.meridiumText = this.getMeridium(), this.meridium = a(['<ul class="flip-clock-meridium">', "<li>", '<a href="#">' + this.meridiumText + "</a>", "</li>", "</ul>"].join("")), this.meridium.insertAfter(this.lists[this.lists.length - 1].$el);
    }, flip: function flip(a, b) {
      this.meridiumText != this.getMeridium() && (this.meridiumText = this.getMeridium(), this.meridium.find("a").html(this.meridiumText)), this.base(this.factory.time.getTime(!1, this.showSeconds), b);
    }, getMeridium: function getMeridium() {
      return new Date().getHours() >= 12 ? "PM" : "AM";
    }, isPM: function isPM() {
      return "PM" == this.getMeridium() ? !0 : !1;
    }, isAM: function isAM() {
      return "AM" == this.getMeridium() ? !0 : !1;
    } });
}(jQuery), function (a) {
  _FlipClock.Lang.Arabic = { years: "سنوات", months: "شهور", days: "أيام", hours: "ساعات", minutes: "دقائق", seconds: "ثواني" }, _FlipClock.Lang.ar = _FlipClock.Lang.Arabic, _FlipClock.Lang["ar-ar"] = _FlipClock.Lang.Arabic, _FlipClock.Lang.arabic = _FlipClock.Lang.Arabic;
}(jQuery), function (a) {
  _FlipClock.Lang.Danish = { years: "År", months: "Måneder", days: "Dage", hours: "Timer", minutes: "Minutter", seconds: "Sekunder" }, _FlipClock.Lang.da = _FlipClock.Lang.Danish, _FlipClock.Lang["da-dk"] = _FlipClock.Lang.Danish, _FlipClock.Lang.danish = _FlipClock.Lang.Danish;
}(jQuery), function (a) {
  _FlipClock.Lang.German = { years: "Jahre", months: "Monate", days: "Tage", hours: "Stunden", minutes: "Minuten", seconds: "Sekunden" }, _FlipClock.Lang.de = _FlipClock.Lang.German, _FlipClock.Lang["de-de"] = _FlipClock.Lang.German, _FlipClock.Lang.german = _FlipClock.Lang.German;
}(jQuery), function (a) {
  _FlipClock.Lang.English = { years: "Years", months: "Months", days: "Days", hours: "Hours", minutes: "Minutes", seconds: "Seconds" }, _FlipClock.Lang.en = _FlipClock.Lang.English, _FlipClock.Lang["en-us"] = _FlipClock.Lang.English, _FlipClock.Lang.english = _FlipClock.Lang.English;
}(jQuery), function (a) {
  _FlipClock.Lang.Spanish = { years: "Años", months: "Meses", days: "Días", hours: "Horas", minutes: "Minutos", seconds: "Segundos" }, _FlipClock.Lang.es = _FlipClock.Lang.Spanish, _FlipClock.Lang["es-es"] = _FlipClock.Lang.Spanish, _FlipClock.Lang.spanish = _FlipClock.Lang.Spanish;
}(jQuery), function (a) {
  _FlipClock.Lang.Finnish = { years: "Vuotta", months: "Kuukautta", days: "Päivää", hours: "Tuntia", minutes: "Minuuttia", seconds: "Sekuntia" }, _FlipClock.Lang.fi = _FlipClock.Lang.Finnish, _FlipClock.Lang["fi-fi"] = _FlipClock.Lang.Finnish, _FlipClock.Lang.finnish = _FlipClock.Lang.Finnish;
}(jQuery), function (a) {
  _FlipClock.Lang.French = { years: "Ans", months: "Mois", days: "Jours", hours: "Heures", minutes: "Minutes", seconds: "Secondes" }, _FlipClock.Lang.fr = _FlipClock.Lang.French, _FlipClock.Lang["fr-ca"] = _FlipClock.Lang.French, _FlipClock.Lang.french = _FlipClock.Lang.French;
}(jQuery), function (a) {
  _FlipClock.Lang.Italian = { years: "Anni", months: "Mesi", days: "Giorni", hours: "Ore", minutes: "Minuti", seconds: "Secondi" }, _FlipClock.Lang.it = _FlipClock.Lang.Italian, _FlipClock.Lang["it-it"] = _FlipClock.Lang.Italian, _FlipClock.Lang.italian = _FlipClock.Lang.Italian;
}(jQuery), function (a) {
  _FlipClock.Lang.Latvian = { years: "Gadi", months: "Mēneši", days: "Dienas", hours: "Stundas", minutes: "Minūtes", seconds: "Sekundes" }, _FlipClock.Lang.lv = _FlipClock.Lang.Latvian, _FlipClock.Lang["lv-lv"] = _FlipClock.Lang.Latvian, _FlipClock.Lang.latvian = _FlipClock.Lang.Latvian;
}(jQuery), function (a) {
  _FlipClock.Lang.Dutch = { years: "Jaren", months: "Maanden", days: "Dagen", hours: "Uren", minutes: "Minuten", seconds: "Seconden" }, _FlipClock.Lang.nl = _FlipClock.Lang.Dutch, _FlipClock.Lang["nl-be"] = _FlipClock.Lang.Dutch, _FlipClock.Lang.dutch = _FlipClock.Lang.Dutch;
}(jQuery), function (a) {
  _FlipClock.Lang.Norwegian = { years: "År", months: "Måneder", days: "Dager", hours: "Timer", minutes: "Minutter", seconds: "Sekunder" }, _FlipClock.Lang.no = _FlipClock.Lang.Norwegian, _FlipClock.Lang.nb = _FlipClock.Lang.Norwegian, _FlipClock.Lang["no-nb"] = _FlipClock.Lang.Norwegian, _FlipClock.Lang.norwegian = _FlipClock.Lang.Norwegian;
}(jQuery), function (a) {
  _FlipClock.Lang.Portuguese = { years: "Anos", months: "Meses", days: "Dias", hours: "Horas", minutes: "Minutos", seconds: "Segundos" }, _FlipClock.Lang.pt = _FlipClock.Lang.Portuguese, _FlipClock.Lang["pt-br"] = _FlipClock.Lang.Portuguese, _FlipClock.Lang.portuguese = _FlipClock.Lang.Portuguese;
}(jQuery), function (a) {
  _FlipClock.Lang.Russian = { years: "лет", months: "месяцев", days: "дней", hours: "часов", minutes: "минут", seconds: "секунд" }, _FlipClock.Lang.ru = _FlipClock.Lang.Russian, _FlipClock.Lang["ru-ru"] = _FlipClock.Lang.Russian, _FlipClock.Lang.russian = _FlipClock.Lang.Russian;
}(jQuery), function (a) {
  _FlipClock.Lang.Swedish = { years: "År", months: "Månader", days: "Dagar", hours: "Timmar", minutes: "Minuter", seconds: "Sekunder" }, _FlipClock.Lang.sv = _FlipClock.Lang.Swedish, _FlipClock.Lang["sv-se"] = _FlipClock.Lang.Swedish, _FlipClock.Lang.swedish = _FlipClock.Lang.Swedish;
}(jQuery), function (a) {
  _FlipClock.Lang.Chinese = { years: "年", months: "月", days: "日", hours: "时", minutes: "分", seconds: "秒" }, _FlipClock.Lang.zh = _FlipClock.Lang.Chinese, _FlipClock.Lang["zh-cn"] = _FlipClock.Lang.Chinese, _FlipClock.Lang.chinese = _FlipClock.Lang.Chinese;
}(jQuery);

/***/ }),

/***/ "./resources/assets/js/main.js":
/***/ (function(module, exports) {


$(document).ready(function () {

	(function () {
		$('#hamburger .bar-wrp').on('click', function () {
			// ICON CLICK

			if (!$(this).parent().hasClass("active")) {

				window.scrollTo(0, 0);
				$(this).parent().addClass("active");
				$('body').addClass("hide");
				$('header').addClass("opnd");
				$('.sub-menu').addClass("pnd");
				$('.hamb-wrp').addClass("vanish");
				$('#header-menu').addClass("show");
				$('section#header-menu').removeClass("fixed");
			} else {

				$(this).parent().removeClass("active");
				$('body').removeClass("hide");
				$('.hamb-wrp').removeClass("vanish");
				$('header').removeClass("opnd");
				$('.sub-menu').removeClass("pnd");
				$('#header-menu').removeClass("show");

				$('section#header-menu').addClass("fixed");
			}

			$('.bar').toggleClass('animate');
		}); // ICON CLICK END
	})(); // FUNC END


	//COUNTER

	var clock = $('.your-clock').FlipClock(new Date("October 24, 2017 07:30:00"), {
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

	$(".first-ul > li").click(function () {
		if ($(this).find(".subs-ul").hasClass("hvr")) {
			$(this).find(".subs-ul").removeClass("hvr");
		} else {
			$(this).find(".subs-ul").addClass("hvr");
		}
	});

	$(".more-a").click(function (e) {
		var viewportWidth = $(window).width();
		if (viewportWidth < 1200) {
			if ($(this).siblings(".dropdownbox").hasClass("clk")) {
				$(this).siblings(".dropdownbox").removeClass("clk");
			} else {
				$(this).siblings(".dropdownbox").addClass("clk");
			}
		}
	});

	$(".more").mouseover(function () {
		$("#desktop-menu").addClass("blck");
		$("#unleash-logo").addClass("show");
		$(".dropdownbox").addClass("hvr");
		$(".sub-menu").addClass("mrg");
	});

	$(".more").mouseleave(function () {
		if ($('.dropdownbox').is(':hover') === false) {
			$(".dropdownbox").removeClass("hvr");
			$(".sub-menu").removeClass("mrg");
		}

		if ($('.dropdownbox').is(':hover') === false && $(window).scrollTop() == 0) {
			$(".dropdownbox").removeClass("hvr");
			$("#desktop-menu").removeClass("blck");
			$("#unleash-logo").removeClass("show");
		}
	});

	$(".dropdownbox").mouseleave(function () {
		if ($('.sub-menu').is(':hover') === false) {
			$(".dropdownbox").removeClass("hvr");
			$(".sub-menu").removeClass("mrg");
		} else {
			$(".sub-menu").mouseleave(function () {
				if ($('.dropdownbox').is(':hover') === false) {
					$(".dropdownbox").removeClass("hvr");
					$(".sub-menu").removeClass("mrg");
				}
			});
		}

		if ($(window).scrollTop() == 0) {
			$(".dropdownbox").removeClass("hvr");
			$("#desktop-menu").removeClass("blck");
			$("#unleash-logo").removeClass("show");
		}
	});

	//SCROLLING BAR

	if ($(window).scrollTop()) {
		$("#unleash-logo").addClass("show");
		$("#desktop-menu").addClass("blck");
		$("#hamburger").addClass("blck");
	} else {
		$("#unleash-logo").removeClass("show");
		$("#desktop-menu").removeClass("blck");
		$("#hamburger").removeClass("blck");
	}

	if ($(window).scrollTop() >= 850) {
		$(".sub-menu").addClass("fxd");
	} else {
		$(".sub-menu").removeClass("fxd");
	}

	$(window).scroll(function () {
		var scroll = $(window).scrollTop();

		if (scroll >= 100) {
			$("#unleash-logo").addClass("show");
			$("#desktop-menu").addClass("blck");
			$("#hamburger").addClass("blck");
		} else {
			$("#hamburger").removeClass("blck");
			if ($('.more').is(':hover') === false) {
				$("#unleash-logo").removeClass("show");
				$("#desktop-menu").removeClass("blck");
			}
		}

		if ($('#desktop-menu .menu-ul li.more').is(':hover') === false) {

			if (scroll > $(window).height() - 66) {

				$(".sub-menu").addClass("fxd");
			} else {
				$(".sub-menu").removeClass("fxd");
			}
		} else {
			if (scroll > $(window).height() - 400) {

				$(".sub-menu").addClass("fxd");
			} else {
				$(".sub-menu").removeClass("fxd");
			}
		}
	});
	$(".prevent").click(function (e) {
		var viewportWidth = $(window).width();
		if (viewportWidth < 1200) {
			e.preventDefault();
		}
	});

	$(window).resize(function () {
		var viewportWidth = $(window).width();
		if (viewportWidth > 1100) {
			$('body').removeClass("hide");
			$(".dropdownbox").removeClass("hvr");
			$(".dropdownbox").removeClass("clk");
			$('#header-menu').removeClass("show");
			$('#hamburger').removeClass("active");
			$('.bar').removeClass('animate');
			$('.more').removeClass("showmob");
			$('header').removeClass("opnd");
			$('.sub-menu').removeClass("pnd");
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

/***/ }),

/***/ 4:
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__("./resources/assets/js/amsterdam/flipclock.min.js");
module.exports = __webpack_require__("./resources/assets/js/main.js");


/***/ })

/******/ });