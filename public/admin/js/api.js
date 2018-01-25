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
/******/ 	return __webpack_require__(__webpack_require__.s = 194);
/******/ })
/************************************************************************/
/******/ ({

/***/ 194:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(195);


/***/ }),

/***/ 195:
/***/ (function(module, exports, __webpack_require__) {

Vue.component('example', __webpack_require__(196));

Vue.component('passport-clients', __webpack_require__(199));

Vue.component('passport-authorized-clients', __webpack_require__(205));

Vue.component('passport-personal-access-tokens', __webpack_require__(210));

var app = new Vue({
    el: '#app'
});

axios.defaults.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

/***/ }),

/***/ 196:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(197)
/* template */
var __vue_template__ = __webpack_require__(198)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/admin/js/components/Example.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-18421ac3", Component.options)
  } else {
    hotAPI.reload("data-v-18421ac3", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 197:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    mounted: function mounted() {
        console.log('Component mounted.');
    }
});

/***/ }),

/***/ 198:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _vm._m(0)
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "container" }, [
      _c("div", { staticClass: "row" }, [
        _c("div", { staticClass: "col-md-8 col-md-offset-2" }, [
          _c("div", { staticClass: "panel panel-default" }, [
            _c("div", { staticClass: "panel-heading" }, [
              _vm._v("Example Component")
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "panel-body" }, [
              _vm._v(
                "\n                    I'm an example component!\n                "
              )
            ])
          ])
        ])
      ])
    ])
  }
]
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-18421ac3", module.exports)
  }
}

/***/ }),

/***/ 199:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
function injectStyle (ssrContext) {
  if (disposed) return
  __webpack_require__(200)
}
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(203)
/* template */
var __vue_template__ = __webpack_require__(204)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = injectStyle
/* scopeId */
var __vue_scopeId__ = "data-v-47785342"
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/admin/js/components/passport/Clients.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-47785342", Component.options)
  } else {
    hotAPI.reload("data-v-47785342", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 2:
/***/ (function(module, exports) {

/* globals __VUE_SSR_CONTEXT__ */

// IMPORTANT: Do NOT use ES2015 features in this file.
// This module is a runtime utility for cleaner component module output and will
// be included in the final webpack user bundle.

module.exports = function normalizeComponent (
  rawScriptExports,
  compiledTemplate,
  functionalTemplate,
  injectStyles,
  scopeId,
  moduleIdentifier /* server only */
) {
  var esModule
  var scriptExports = rawScriptExports = rawScriptExports || {}

  // ES6 modules interop
  var type = typeof rawScriptExports.default
  if (type === 'object' || type === 'function') {
    esModule = rawScriptExports
    scriptExports = rawScriptExports.default
  }

  // Vue.extend constructor export interop
  var options = typeof scriptExports === 'function'
    ? scriptExports.options
    : scriptExports

  // render functions
  if (compiledTemplate) {
    options.render = compiledTemplate.render
    options.staticRenderFns = compiledTemplate.staticRenderFns
    options._compiled = true
  }

  // functional template
  if (functionalTemplate) {
    options.functional = true
  }

  // scopedId
  if (scopeId) {
    options._scopeId = scopeId
  }

  var hook
  if (moduleIdentifier) { // server build
    hook = function (context) {
      // 2.3 injection
      context =
        context || // cached call
        (this.$vnode && this.$vnode.ssrContext) || // stateful
        (this.parent && this.parent.$vnode && this.parent.$vnode.ssrContext) // functional
      // 2.2 with runInNewContext: true
      if (!context && typeof __VUE_SSR_CONTEXT__ !== 'undefined') {
        context = __VUE_SSR_CONTEXT__
      }
      // inject component styles
      if (injectStyles) {
        injectStyles.call(this, context)
      }
      // register component module identifier for async chunk inferrence
      if (context && context._registeredComponents) {
        context._registeredComponents.add(moduleIdentifier)
      }
    }
    // used by ssr in case component is cached and beforeCreate
    // never gets called
    options._ssrRegister = hook
  } else if (injectStyles) {
    hook = injectStyles
  }

  if (hook) {
    var functional = options.functional
    var existing = functional
      ? options.render
      : options.beforeCreate

    if (!functional) {
      // inject component registration as beforeCreate hook
      options.beforeCreate = existing
        ? [].concat(existing, hook)
        : [hook]
    } else {
      // for template-only hot-reload because in that case the render fn doesn't
      // go through the normalizer
      options._injectStyles = hook
      // register for functioal component in vue file
      options.render = function renderWithStyleInjection (h, context) {
        hook.call(context)
        return existing(h, context)
      }
    }
  }

  return {
    esModule: esModule,
    exports: scriptExports,
    options: options
  }
}


/***/ }),

/***/ 200:
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(201);
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add the styles to the DOM
var update = __webpack_require__(61)("4ece792a", content, false);
// Hot Module Replacement
if(false) {
 // When the styles change, update the <style> tags
 if(!content.locals) {
   module.hot.accept("!!../../../../../../node_modules/css-loader/index.js!../../../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-47785342\",\"scoped\":true,\"hasInlineConfig\":true}!../../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./Clients.vue", function() {
     var newContent = require("!!../../../../../../node_modules/css-loader/index.js!../../../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-47785342\",\"scoped\":true,\"hasInlineConfig\":true}!../../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./Clients.vue");
     if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
     update(newContent);
   });
 }
 // When the module is disposed, remove the <style> tags
 module.hot.dispose(function() { update(); });
}

/***/ }),

/***/ 201:
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(3)(undefined);
// imports


// module
exports.push([module.i, "\n.action-link[data-v-47785342] {\n    cursor: pointer;\n}\n.m-b-none[data-v-47785342] {\n    margin-bottom: 0;\n}\n", ""]);

// exports


/***/ }),

/***/ 202:
/***/ (function(module, exports) {

/**
 * Translates the list format produced by css-loader into something
 * easier to manipulate.
 */
module.exports = function listToStyles (parentId, list) {
  var styles = []
  var newStyles = {}
  for (var i = 0; i < list.length; i++) {
    var item = list[i]
    var id = item[0]
    var css = item[1]
    var media = item[2]
    var sourceMap = item[3]
    var part = {
      id: parentId + ':' + i,
      css: css,
      media: media,
      sourceMap: sourceMap
    }
    if (!newStyles[id]) {
      styles.push(newStyles[id] = { id: id, parts: [part] })
    } else {
      newStyles[id].parts.push(part)
    }
  }
  return styles
}


/***/ }),

/***/ 203:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    /*
     * The component's data.
     */
    data: function data() {
        return {
            clients: [],

            createForm: {
                errors: [],
                name: '',
                redirect: ''
            },

            editForm: {
                errors: [],
                name: '',
                redirect: ''
            }
        };
    },


    /**
     * Prepare the component (Vue 1.x).
     */
    ready: function ready() {
        this.prepareComponent();
    },


    /**
     * Prepare the component (Vue 2.x).
     */
    mounted: function mounted() {
        this.prepareComponent();
    },


    methods: {
        /**
         * Prepare the component.
         */
        prepareComponent: function prepareComponent() {
            this.getClients();

            $('#modal-create-client').on('shown.bs.modal', function () {
                $('#create-client-name').focus();
            });

            $('#modal-edit-client').on('shown.bs.modal', function () {
                $('#edit-client-name').focus();
            });
        },


        /**
         * Get all of the OAuth clients for the user.
         */
        getClients: function getClients() {
            var _this = this;

            axios.get('/oauth/clients').then(function (response) {
                _this.clients = response.data;
            });
        },


        /**
         * Show the form for creating new clients.
         */
        showCreateClientForm: function showCreateClientForm() {
            $('#modal-create-client').modal('show');
        },


        /**
         * Create a new OAuth client for the user.
         */
        store: function store() {
            this.persistClient('post', '/oauth/clients', this.createForm, '#modal-create-client');
        },


        /**
         * Edit the given client.
         */
        edit: function edit(client) {
            this.editForm.id = client.id;
            this.editForm.name = client.name;
            this.editForm.redirect = client.redirect;

            $('#modal-edit-client').modal('show');
        },


        /**
         * Update the client being edited.
         */
        update: function update() {
            this.persistClient('put', '/oauth/clients/' + this.editForm.id, this.editForm, '#modal-edit-client');
        },


        /**
         * Persist the client to storage using the given form.
         */
        persistClient: function persistClient(method, uri, form, modal) {
            var _this2 = this;

            form.errors = [];

            axios[method](uri, form).then(function (response) {
                _this2.getClients();

                form.name = '';
                form.redirect = '';
                form.errors = [];

                $(modal).modal('hide');
            }).catch(function (error) {
                if (_typeof(error.response.data) === 'object') {
                    form.errors = _.flatten(_.toArray(error.response.data));
                } else {
                    form.errors = ['Something went wrong. Please try again.'];
                }
            });
        },


        /**
         * Destroy the given client.
         */
        destroy: function destroy(client) {
            var _this3 = this;

            axios.delete('/oauth/clients/' + client.id).then(function (response) {
                _this3.getClients();
            });
        }
    }
});

/***/ }),

/***/ 204:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _c("div", { staticClass: "panel panel-default" }, [
      _c("div", { staticClass: "panel-heading" }, [
        _c(
          "div",
          {
            staticStyle: {
              display: "flex",
              "justify-content": "space-between",
              "align-items": "center"
            }
          },
          [
            _c("span", [
              _vm._v("\n                    OAuth Clients\n                ")
            ]),
            _vm._v(" "),
            _c(
              "a",
              {
                staticClass: "action-link",
                on: { click: _vm.showCreateClientForm }
              },
              [
                _vm._v(
                  "\n                    Create New Client\n                "
                )
              ]
            )
          ]
        )
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "panel-body" }, [
        _vm.clients.length === 0
          ? _c("p", { staticClass: "m-b-none" }, [
              _vm._v(
                "\n                You have not created any OAuth clients.\n            "
              )
            ])
          : _vm._e(),
        _vm._v(" "),
        _vm.clients.length > 0
          ? _c("table", { staticClass: "table table-borderless m-b-none" }, [
              _vm._m(0),
              _vm._v(" "),
              _c(
                "tbody",
                _vm._l(_vm.clients, function(client) {
                  return _c("tr", [
                    _c("td", { staticStyle: { "vertical-align": "middle" } }, [
                      _vm._v(
                        "\n                            " +
                          _vm._s(client.id) +
                          "\n                        "
                      )
                    ]),
                    _vm._v(" "),
                    _c("td", { staticStyle: { "vertical-align": "middle" } }, [
                      _vm._v(
                        "\n                            " +
                          _vm._s(client.name) +
                          "\n                        "
                      )
                    ]),
                    _vm._v(" "),
                    _c("td", { staticStyle: { "vertical-align": "middle" } }, [
                      _c("code", [_vm._v(_vm._s(client.secret))])
                    ]),
                    _vm._v(" "),
                    _c("td", { staticStyle: { "vertical-align": "middle" } }, [
                      _c(
                        "a",
                        {
                          staticClass: "action-link",
                          on: {
                            click: function($event) {
                              _vm.edit(client)
                            }
                          }
                        },
                        [
                          _vm._v(
                            "\n                                Edit\n                            "
                          )
                        ]
                      )
                    ]),
                    _vm._v(" "),
                    _c("td", { staticStyle: { "vertical-align": "middle" } }, [
                      _c(
                        "a",
                        {
                          staticClass: "action-link text-danger",
                          on: {
                            click: function($event) {
                              _vm.destroy(client)
                            }
                          }
                        },
                        [
                          _vm._v(
                            "\n                                Delete\n                            "
                          )
                        ]
                      )
                    ])
                  ])
                })
              )
            ])
          : _vm._e()
      ])
    ]),
    _vm._v(" "),
    _c(
      "div",
      {
        staticClass: "modal fade",
        attrs: { id: "modal-create-client", tabindex: "-1", role: "dialog" }
      },
      [
        _c("div", { staticClass: "modal-dialog" }, [
          _c("div", { staticClass: "modal-content" }, [
            _vm._m(1),
            _vm._v(" "),
            _c("div", { staticClass: "modal-body" }, [
              _vm.createForm.errors.length > 0
                ? _c("div", { staticClass: "alert alert-danger" }, [
                    _vm._m(2),
                    _vm._v(" "),
                    _c("br"),
                    _vm._v(" "),
                    _c(
                      "ul",
                      _vm._l(_vm.createForm.errors, function(error) {
                        return _c("li", [
                          _vm._v(
                            "\n                                " +
                              _vm._s(error) +
                              "\n                            "
                          )
                        ])
                      })
                    )
                  ])
                : _vm._e(),
              _vm._v(" "),
              _c(
                "form",
                { staticClass: "form-horizontal", attrs: { role: "form" } },
                [
                  _c("div", { staticClass: "form-group" }, [
                    _c("label", { staticClass: "col-md-3 control-label" }, [
                      _vm._v("Name")
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "col-md-7" }, [
                      _c("input", {
                        directives: [
                          {
                            name: "model",
                            rawName: "v-model",
                            value: _vm.createForm.name,
                            expression: "createForm.name"
                          }
                        ],
                        staticClass: "form-control",
                        attrs: { id: "create-client-name", type: "text" },
                        domProps: { value: _vm.createForm.name },
                        on: {
                          keyup: function($event) {
                            if (
                              !("button" in $event) &&
                              _vm._k($event.keyCode, "enter", 13, $event.key)
                            ) {
                              return null
                            }
                            _vm.store($event)
                          },
                          input: function($event) {
                            if ($event.target.composing) {
                              return
                            }
                            _vm.$set(
                              _vm.createForm,
                              "name",
                              $event.target.value
                            )
                          }
                        }
                      }),
                      _vm._v(" "),
                      _c("span", { staticClass: "help-block" }, [
                        _vm._v(
                          "\n                                    Something your users will recognize and trust.\n                                "
                        )
                      ])
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "form-group" }, [
                    _c("label", { staticClass: "col-md-3 control-label" }, [
                      _vm._v("Redirect URL")
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "col-md-7" }, [
                      _c("input", {
                        directives: [
                          {
                            name: "model",
                            rawName: "v-model",
                            value: _vm.createForm.redirect,
                            expression: "createForm.redirect"
                          }
                        ],
                        staticClass: "form-control",
                        attrs: { type: "text", name: "redirect" },
                        domProps: { value: _vm.createForm.redirect },
                        on: {
                          keyup: function($event) {
                            if (
                              !("button" in $event) &&
                              _vm._k($event.keyCode, "enter", 13, $event.key)
                            ) {
                              return null
                            }
                            _vm.store($event)
                          },
                          input: function($event) {
                            if ($event.target.composing) {
                              return
                            }
                            _vm.$set(
                              _vm.createForm,
                              "redirect",
                              $event.target.value
                            )
                          }
                        }
                      }),
                      _vm._v(" "),
                      _c("span", { staticClass: "help-block" }, [
                        _vm._v(
                          "\n                                    Your application's authorization callback URL.\n                                "
                        )
                      ])
                    ])
                  ])
                ]
              )
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "modal-footer" }, [
              _c(
                "button",
                {
                  staticClass: "btn btn-default",
                  attrs: { type: "button", "data-dismiss": "modal" }
                },
                [_vm._v("Close")]
              ),
              _vm._v(" "),
              _c(
                "button",
                {
                  staticClass: "btn btn-primary",
                  attrs: { type: "button" },
                  on: { click: _vm.store }
                },
                [
                  _vm._v(
                    "\n                        Create\n                    "
                  )
                ]
              )
            ])
          ])
        ])
      ]
    ),
    _vm._v(" "),
    _c(
      "div",
      {
        staticClass: "modal fade",
        attrs: { id: "modal-edit-client", tabindex: "-1", role: "dialog" }
      },
      [
        _c("div", { staticClass: "modal-dialog" }, [
          _c("div", { staticClass: "modal-content" }, [
            _vm._m(3),
            _vm._v(" "),
            _c("div", { staticClass: "modal-body" }, [
              _vm.editForm.errors.length > 0
                ? _c("div", { staticClass: "alert alert-danger" }, [
                    _vm._m(4),
                    _vm._v(" "),
                    _c("br"),
                    _vm._v(" "),
                    _c(
                      "ul",
                      _vm._l(_vm.editForm.errors, function(error) {
                        return _c("li", [
                          _vm._v(
                            "\n                                " +
                              _vm._s(error) +
                              "\n                            "
                          )
                        ])
                      })
                    )
                  ])
                : _vm._e(),
              _vm._v(" "),
              _c(
                "form",
                { staticClass: "form-horizontal", attrs: { role: "form" } },
                [
                  _c("div", { staticClass: "form-group" }, [
                    _c("label", { staticClass: "col-md-3 control-label" }, [
                      _vm._v("Name")
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "col-md-7" }, [
                      _c("input", {
                        directives: [
                          {
                            name: "model",
                            rawName: "v-model",
                            value: _vm.editForm.name,
                            expression: "editForm.name"
                          }
                        ],
                        staticClass: "form-control",
                        attrs: { id: "edit-client-name", type: "text" },
                        domProps: { value: _vm.editForm.name },
                        on: {
                          keyup: function($event) {
                            if (
                              !("button" in $event) &&
                              _vm._k($event.keyCode, "enter", 13, $event.key)
                            ) {
                              return null
                            }
                            _vm.update($event)
                          },
                          input: function($event) {
                            if ($event.target.composing) {
                              return
                            }
                            _vm.$set(_vm.editForm, "name", $event.target.value)
                          }
                        }
                      }),
                      _vm._v(" "),
                      _c("span", { staticClass: "help-block" }, [
                        _vm._v(
                          "\n                                    Something your users will recognize and trust.\n                                "
                        )
                      ])
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "form-group" }, [
                    _c("label", { staticClass: "col-md-3 control-label" }, [
                      _vm._v("Redirect URL")
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "col-md-7" }, [
                      _c("input", {
                        directives: [
                          {
                            name: "model",
                            rawName: "v-model",
                            value: _vm.editForm.redirect,
                            expression: "editForm.redirect"
                          }
                        ],
                        staticClass: "form-control",
                        attrs: { type: "text", name: "redirect" },
                        domProps: { value: _vm.editForm.redirect },
                        on: {
                          keyup: function($event) {
                            if (
                              !("button" in $event) &&
                              _vm._k($event.keyCode, "enter", 13, $event.key)
                            ) {
                              return null
                            }
                            _vm.update($event)
                          },
                          input: function($event) {
                            if ($event.target.composing) {
                              return
                            }
                            _vm.$set(
                              _vm.editForm,
                              "redirect",
                              $event.target.value
                            )
                          }
                        }
                      }),
                      _vm._v(" "),
                      _c("span", { staticClass: "help-block" }, [
                        _vm._v(
                          "\n                                    Your application's authorization callback URL.\n                                "
                        )
                      ])
                    ])
                  ])
                ]
              )
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "modal-footer" }, [
              _c(
                "button",
                {
                  staticClass: "btn btn-default",
                  attrs: { type: "button", "data-dismiss": "modal" }
                },
                [_vm._v("Close")]
              ),
              _vm._v(" "),
              _c(
                "button",
                {
                  staticClass: "btn btn-primary",
                  attrs: { type: "button" },
                  on: { click: _vm.update }
                },
                [
                  _vm._v(
                    "\n                        Save Changes\n                    "
                  )
                ]
              )
            ])
          ])
        ])
      ]
    )
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("thead", [
      _c("tr", [
        _c("th", [_vm._v("Client ID")]),
        _vm._v(" "),
        _c("th", [_vm._v("Name")]),
        _vm._v(" "),
        _c("th", [_vm._v("Secret")]),
        _vm._v(" "),
        _c("th"),
        _vm._v(" "),
        _c("th")
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "modal-header" }, [
      _c(
        "button",
        {
          staticClass: "close",
          attrs: {
            type: "button",
            "data-dismiss": "modal",
            "aria-hidden": "true"
          }
        },
        [_vm._v("×")]
      ),
      _vm._v(" "),
      _c("h4", { staticClass: "modal-title" }, [
        _vm._v("\n                        Create Client\n                    ")
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("p", [
      _c("strong", [_vm._v("Whoops!")]),
      _vm._v(" Something went wrong!")
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "modal-header" }, [
      _c(
        "button",
        {
          staticClass: "close",
          attrs: {
            type: "button",
            "data-dismiss": "modal",
            "aria-hidden": "true"
          }
        },
        [_vm._v("×")]
      ),
      _vm._v(" "),
      _c("h4", { staticClass: "modal-title" }, [
        _vm._v("\n                        Edit Client\n                    ")
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("p", [
      _c("strong", [_vm._v("Whoops!")]),
      _vm._v(" Something went wrong!")
    ])
  }
]
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-47785342", module.exports)
  }
}

/***/ }),

/***/ 205:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
function injectStyle (ssrContext) {
  if (disposed) return
  __webpack_require__(206)
}
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(208)
/* template */
var __vue_template__ = __webpack_require__(209)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = injectStyle
/* scopeId */
var __vue_scopeId__ = "data-v-6504a427"
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/admin/js/components/passport/AuthorizedClients.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-6504a427", Component.options)
  } else {
    hotAPI.reload("data-v-6504a427", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 206:
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(207);
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add the styles to the DOM
var update = __webpack_require__(61)("0a56ce6a", content, false);
// Hot Module Replacement
if(false) {
 // When the styles change, update the <style> tags
 if(!content.locals) {
   module.hot.accept("!!../../../../../../node_modules/css-loader/index.js!../../../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-6504a427\",\"scoped\":true,\"hasInlineConfig\":true}!../../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./AuthorizedClients.vue", function() {
     var newContent = require("!!../../../../../../node_modules/css-loader/index.js!../../../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-6504a427\",\"scoped\":true,\"hasInlineConfig\":true}!../../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./AuthorizedClients.vue");
     if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
     update(newContent);
   });
 }
 // When the module is disposed, remove the <style> tags
 module.hot.dispose(function() { update(); });
}

/***/ }),

/***/ 207:
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(3)(undefined);
// imports


// module
exports.push([module.i, "\n.action-link[data-v-6504a427] {\n    cursor: pointer;\n}\n.m-b-none[data-v-6504a427] {\n    margin-bottom: 0;\n}\n", ""]);

// exports


/***/ }),

/***/ 208:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    /*
     * The component's data.
     */
    data: function data() {
        return {
            tokens: []
        };
    },


    /**
     * Prepare the component (Vue 1.x).
     */
    ready: function ready() {
        this.prepareComponent();
    },


    /**
     * Prepare the component (Vue 2.x).
     */
    mounted: function mounted() {
        this.prepareComponent();
    },


    methods: {
        /**
         * Prepare the component (Vue 2.x).
         */
        prepareComponent: function prepareComponent() {
            this.getTokens();
        },


        /**
         * Get all of the authorized tokens for the user.
         */
        getTokens: function getTokens() {
            var _this = this;

            axios.get('/oauth/tokens').then(function (response) {
                _this.tokens = response.data;
            });
        },


        /**
         * Revoke the given token.
         */
        revoke: function revoke(token) {
            var _this2 = this;

            axios.delete('/oauth/tokens/' + token.id).then(function (response) {
                _this2.getTokens();
            });
        }
    }
});

/***/ }),

/***/ 209:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _vm.tokens.length > 0
      ? _c("div", [
          _c("div", { staticClass: "panel panel-default" }, [
            _c("div", { staticClass: "panel-heading" }, [
              _vm._v("Authorized Applications")
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "panel-body" }, [
              _c("table", { staticClass: "table table-borderless m-b-none" }, [
                _vm._m(0),
                _vm._v(" "),
                _c(
                  "tbody",
                  _vm._l(_vm.tokens, function(token) {
                    return _c("tr", [
                      _c(
                        "td",
                        { staticStyle: { "vertical-align": "middle" } },
                        [
                          _vm._v(
                            "\n                                " +
                              _vm._s(token.client.name) +
                              "\n                            "
                          )
                        ]
                      ),
                      _vm._v(" "),
                      _c(
                        "td",
                        { staticStyle: { "vertical-align": "middle" } },
                        [
                          token.scopes.length > 0
                            ? _c("span", [
                                _vm._v(
                                  "\n                                    " +
                                    _vm._s(token.scopes.join(", ")) +
                                    "\n                                "
                                )
                              ])
                            : _vm._e()
                        ]
                      ),
                      _vm._v(" "),
                      _c(
                        "td",
                        { staticStyle: { "vertical-align": "middle" } },
                        [
                          _c(
                            "a",
                            {
                              staticClass: "action-link text-danger",
                              on: {
                                click: function($event) {
                                  _vm.revoke(token)
                                }
                              }
                            },
                            [
                              _vm._v(
                                "\n                                    Revoke\n                                "
                              )
                            ]
                          )
                        ]
                      )
                    ])
                  })
                )
              ])
            ])
          ])
        ])
      : _vm._e()
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("thead", [
      _c("tr", [
        _c("th", [_vm._v("Name")]),
        _vm._v(" "),
        _c("th", [_vm._v("Scopes")]),
        _vm._v(" "),
        _c("th")
      ])
    ])
  }
]
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-6504a427", module.exports)
  }
}

/***/ }),

/***/ 210:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
function injectStyle (ssrContext) {
  if (disposed) return
  __webpack_require__(211)
}
var normalizeComponent = __webpack_require__(2)
/* script */
var __vue_script__ = __webpack_require__(213)
/* template */
var __vue_template__ = __webpack_require__(214)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = injectStyle
/* scopeId */
var __vue_scopeId__ = "data-v-3bc83a98"
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/admin/js/components/passport/PersonalAccessTokens.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-3bc83a98", Component.options)
  } else {
    hotAPI.reload("data-v-3bc83a98", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 211:
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(212);
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add the styles to the DOM
var update = __webpack_require__(61)("9c79d898", content, false);
// Hot Module Replacement
if(false) {
 // When the styles change, update the <style> tags
 if(!content.locals) {
   module.hot.accept("!!../../../../../../node_modules/css-loader/index.js!../../../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-3bc83a98\",\"scoped\":true,\"hasInlineConfig\":true}!../../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./PersonalAccessTokens.vue", function() {
     var newContent = require("!!../../../../../../node_modules/css-loader/index.js!../../../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-3bc83a98\",\"scoped\":true,\"hasInlineConfig\":true}!../../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./PersonalAccessTokens.vue");
     if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
     update(newContent);
   });
 }
 // When the module is disposed, remove the <style> tags
 module.hot.dispose(function() { update(); });
}

/***/ }),

/***/ 212:
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(3)(undefined);
// imports


// module
exports.push([module.i, "\n.action-link[data-v-3bc83a98] {\n    cursor: pointer;\n}\n.m-b-none[data-v-3bc83a98] {\n    margin-bottom: 0;\n}\n", ""]);

// exports


/***/ }),

/***/ 213:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    /*
     * The component's data.
     */
    data: function data() {
        return {
            accessToken: null,

            tokens: [],
            scopes: [],

            form: {
                name: '',
                scopes: [],
                errors: []
            }
        };
    },


    /**
     * Prepare the component (Vue 1.x).
     */
    ready: function ready() {
        this.prepareComponent();
    },


    /**
     * Prepare the component (Vue 2.x).
     */
    mounted: function mounted() {
        this.prepareComponent();
    },


    methods: {
        /**
         * Prepare the component.
         */
        prepareComponent: function prepareComponent() {
            this.getTokens();
            this.getScopes();

            $('#modal-create-token').on('shown.bs.modal', function () {
                $('#create-token-name').focus();
            });
        },


        /**
         * Get all of the personal access tokens for the user.
         */
        getTokens: function getTokens() {
            var _this = this;

            axios.get('/oauth/personal-access-tokens').then(function (response) {
                _this.tokens = response.data;
            });
        },


        /**
         * Get all of the available scopes.
         */
        getScopes: function getScopes() {
            var _this2 = this;

            axios.get('/oauth/scopes').then(function (response) {
                _this2.scopes = response.data;
            });
        },


        /**
         * Show the form for creating new tokens.
         */
        showCreateTokenForm: function showCreateTokenForm() {
            $('#modal-create-token').modal('show');
        },


        /**
         * Create a new personal access token.
         */
        store: function store() {
            var _this3 = this;

            this.accessToken = null;

            this.form.errors = [];

            axios.post('/oauth/personal-access-tokens', this.form).then(function (response) {
                _this3.form.name = '';
                _this3.form.scopes = [];
                _this3.form.errors = [];

                _this3.tokens.push(response.data.token);

                _this3.showAccessToken(response.data.accessToken);
            }).catch(function (error) {
                if (_typeof(error.response.data) === 'object') {
                    _this3.form.errors = _.flatten(_.toArray(error.response.data));
                } else {
                    _this3.form.errors = ['Something went wrong. Please try again.'];
                }
            });
        },


        /**
         * Toggle the given scope in the list of assigned scopes.
         */
        toggleScope: function toggleScope(scope) {
            if (this.scopeIsAssigned(scope)) {
                this.form.scopes = _.reject(this.form.scopes, function (s) {
                    return s == scope;
                });
            } else {
                this.form.scopes.push(scope);
            }
        },


        /**
         * Determine if the given scope has been assigned to the token.
         */
        scopeIsAssigned: function scopeIsAssigned(scope) {
            return _.indexOf(this.form.scopes, scope) >= 0;
        },


        /**
         * Show the given access token to the user.
         */
        showAccessToken: function showAccessToken(accessToken) {
            $('#modal-create-token').modal('hide');

            this.accessToken = accessToken;

            $('#modal-access-token').modal('show');
        },


        /**
         * Revoke the given token.
         */
        revoke: function revoke(token) {
            var _this4 = this;

            axios.delete('/oauth/personal-access-tokens/' + token.id).then(function (response) {
                _this4.getTokens();
            });
        }
    }
});

/***/ }),

/***/ 214:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _c("div", [
      _c("div", { staticClass: "panel panel-default" }, [
        _c("div", { staticClass: "panel-heading" }, [
          _c(
            "div",
            {
              staticStyle: {
                display: "flex",
                "justify-content": "space-between",
                "align-items": "center"
              }
            },
            [
              _c("span", [
                _vm._v(
                  "\n                        Personal Access Tokens\n                    "
                )
              ]),
              _vm._v(" "),
              _c(
                "a",
                {
                  staticClass: "action-link",
                  on: { click: _vm.showCreateTokenForm }
                },
                [
                  _vm._v(
                    "\n                        Create New Token\n                    "
                  )
                ]
              )
            ]
          )
        ]),
        _vm._v(" "),
        _c("div", { staticClass: "panel-body" }, [
          _vm.tokens.length === 0
            ? _c("p", { staticClass: "m-b-none" }, [
                _vm._v(
                  "\n                    You have not created any personal access tokens.\n                "
                )
              ])
            : _vm._e(),
          _vm._v(" "),
          _vm.tokens.length > 0
            ? _c("table", { staticClass: "table table-borderless m-b-none" }, [
                _vm._m(0),
                _vm._v(" "),
                _c(
                  "tbody",
                  _vm._l(_vm.tokens, function(token) {
                    return _c("tr", [
                      _c(
                        "td",
                        { staticStyle: { "vertical-align": "middle" } },
                        [
                          _vm._v(
                            "\n                                " +
                              _vm._s(token.name) +
                              "\n                            "
                          )
                        ]
                      ),
                      _vm._v(" "),
                      _c(
                        "td",
                        { staticStyle: { "vertical-align": "middle" } },
                        [
                          _c(
                            "a",
                            {
                              staticClass: "action-link text-danger",
                              on: {
                                click: function($event) {
                                  _vm.revoke(token)
                                }
                              }
                            },
                            [
                              _vm._v(
                                "\n                                    Delete\n                                "
                              )
                            ]
                          )
                        ]
                      )
                    ])
                  })
                )
              ])
            : _vm._e()
        ])
      ])
    ]),
    _vm._v(" "),
    _c(
      "div",
      {
        staticClass: "modal fade",
        attrs: { id: "modal-create-token", tabindex: "-1", role: "dialog" }
      },
      [
        _c("div", { staticClass: "modal-dialog" }, [
          _c("div", { staticClass: "modal-content" }, [
            _vm._m(1),
            _vm._v(" "),
            _c("div", { staticClass: "modal-body" }, [
              _vm.form.errors.length > 0
                ? _c("div", { staticClass: "alert alert-danger" }, [
                    _vm._m(2),
                    _vm._v(" "),
                    _c("br"),
                    _vm._v(" "),
                    _c(
                      "ul",
                      _vm._l(_vm.form.errors, function(error) {
                        return _c("li", [
                          _vm._v(
                            "\n                                " +
                              _vm._s(error) +
                              "\n                            "
                          )
                        ])
                      })
                    )
                  ])
                : _vm._e(),
              _vm._v(" "),
              _c(
                "form",
                {
                  staticClass: "form-horizontal",
                  attrs: { role: "form" },
                  on: {
                    submit: function($event) {
                      $event.preventDefault()
                      _vm.store($event)
                    }
                  }
                },
                [
                  _c("div", { staticClass: "form-group" }, [
                    _c("label", { staticClass: "col-md-4 control-label" }, [
                      _vm._v("Name")
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "col-md-6" }, [
                      _c("input", {
                        directives: [
                          {
                            name: "model",
                            rawName: "v-model",
                            value: _vm.form.name,
                            expression: "form.name"
                          }
                        ],
                        staticClass: "form-control",
                        attrs: {
                          id: "create-token-name",
                          type: "text",
                          name: "name"
                        },
                        domProps: { value: _vm.form.name },
                        on: {
                          input: function($event) {
                            if ($event.target.composing) {
                              return
                            }
                            _vm.$set(_vm.form, "name", $event.target.value)
                          }
                        }
                      })
                    ])
                  ]),
                  _vm._v(" "),
                  _vm.scopes.length > 0
                    ? _c("div", { staticClass: "form-group" }, [
                        _c("label", { staticClass: "col-md-4 control-label" }, [
                          _vm._v("Scopes")
                        ]),
                        _vm._v(" "),
                        _c(
                          "div",
                          { staticClass: "col-md-6" },
                          _vm._l(_vm.scopes, function(scope) {
                            return _c("div", [
                              _c("div", { staticClass: "checkbox" }, [
                                _c("label", [
                                  _c("input", {
                                    attrs: { type: "checkbox" },
                                    domProps: {
                                      checked: _vm.scopeIsAssigned(scope.id)
                                    },
                                    on: {
                                      click: function($event) {
                                        _vm.toggleScope(scope.id)
                                      }
                                    }
                                  }),
                                  _vm._v(
                                    "\n\n                                                " +
                                      _vm._s(scope.id) +
                                      "\n                                        "
                                  )
                                ])
                              ])
                            ])
                          })
                        )
                      ])
                    : _vm._e()
                ]
              )
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "modal-footer" }, [
              _c(
                "button",
                {
                  staticClass: "btn btn-default",
                  attrs: { type: "button", "data-dismiss": "modal" }
                },
                [_vm._v("Close")]
              ),
              _vm._v(" "),
              _c(
                "button",
                {
                  staticClass: "btn btn-primary",
                  attrs: { type: "button" },
                  on: { click: _vm.store }
                },
                [
                  _vm._v(
                    "\n                        Create\n                    "
                  )
                ]
              )
            ])
          ])
        ])
      ]
    ),
    _vm._v(" "),
    _c(
      "div",
      {
        staticClass: "modal fade",
        attrs: { id: "modal-access-token", tabindex: "-1", role: "dialog" }
      },
      [
        _c("div", { staticClass: "modal-dialog" }, [
          _c("div", { staticClass: "modal-content" }, [
            _vm._m(3),
            _vm._v(" "),
            _c("div", { staticClass: "modal-body" }, [
              _c("p", [
                _vm._v(
                  "\n                        Here is your new personal access token. This is the only time it will be shown so don't lose it!\n                        You may now use this token to make API requests.\n                    "
                )
              ]),
              _vm._v(" "),
              _c("pre", [_c("code", [_vm._v(_vm._s(_vm.accessToken))])])
            ]),
            _vm._v(" "),
            _vm._m(4)
          ])
        ])
      ]
    )
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("thead", [
      _c("tr", [_c("th", [_vm._v("Name")]), _vm._v(" "), _c("th")])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "modal-header" }, [
      _c(
        "button",
        {
          staticClass: "close",
          attrs: {
            type: "button",
            "data-dismiss": "modal",
            "aria-hidden": "true"
          }
        },
        [_vm._v("×")]
      ),
      _vm._v(" "),
      _c("h4", { staticClass: "modal-title" }, [
        _vm._v("\n                        Create Token\n                    ")
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("p", [
      _c("strong", [_vm._v("Whoops!")]),
      _vm._v(" Something went wrong!")
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "modal-header" }, [
      _c(
        "button",
        {
          staticClass: "close",
          attrs: {
            type: "button",
            "data-dismiss": "modal",
            "aria-hidden": "true"
          }
        },
        [_vm._v("×")]
      ),
      _vm._v(" "),
      _c("h4", { staticClass: "modal-title" }, [
        _vm._v(
          "\n                        Personal Access Token\n                    "
        )
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "modal-footer" }, [
      _c(
        "button",
        {
          staticClass: "btn btn-default",
          attrs: { type: "button", "data-dismiss": "modal" }
        },
        [_vm._v("Close")]
      )
    ])
  }
]
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-3bc83a98", module.exports)
  }
}

/***/ }),

/***/ 3:
/***/ (function(module, exports) {

/*
	MIT License http://www.opensource.org/licenses/mit-license.php
	Author Tobias Koppers @sokra
*/
// css base code, injected by the css-loader
module.exports = function(useSourceMap) {
	var list = [];

	// return the list of modules as css string
	list.toString = function toString() {
		return this.map(function (item) {
			var content = cssWithMappingToString(item, useSourceMap);
			if(item[2]) {
				return "@media " + item[2] + "{" + content + "}";
			} else {
				return content;
			}
		}).join("");
	};

	// import a list of modules into the list
	list.i = function(modules, mediaQuery) {
		if(typeof modules === "string")
			modules = [[null, modules, ""]];
		var alreadyImportedModules = {};
		for(var i = 0; i < this.length; i++) {
			var id = this[i][0];
			if(typeof id === "number")
				alreadyImportedModules[id] = true;
		}
		for(i = 0; i < modules.length; i++) {
			var item = modules[i];
			// skip already imported module
			// this implementation is not 100% perfect for weird media query combinations
			//  when a module is imported multiple times with different media queries.
			//  I hope this will never occur (Hey this way we have smaller bundles)
			if(typeof item[0] !== "number" || !alreadyImportedModules[item[0]]) {
				if(mediaQuery && !item[2]) {
					item[2] = mediaQuery;
				} else if(mediaQuery) {
					item[2] = "(" + item[2] + ") and (" + mediaQuery + ")";
				}
				list.push(item);
			}
		}
	};
	return list;
};

function cssWithMappingToString(item, useSourceMap) {
	var content = item[1] || '';
	var cssMapping = item[3];
	if (!cssMapping) {
		return content;
	}

	if (useSourceMap && typeof btoa === 'function') {
		var sourceMapping = toComment(cssMapping);
		var sourceURLs = cssMapping.sources.map(function (source) {
			return '/*# sourceURL=' + cssMapping.sourceRoot + source + ' */'
		});

		return [content].concat(sourceURLs).concat([sourceMapping]).join('\n');
	}

	return [content].join('\n');
}

// Adapted from convert-source-map (MIT)
function toComment(sourceMap) {
	// eslint-disable-next-line no-undef
	var base64 = btoa(unescape(encodeURIComponent(JSON.stringify(sourceMap))));
	var data = 'sourceMappingURL=data:application/json;charset=utf-8;base64,' + base64;

	return '/*# ' + data + ' */';
}


/***/ }),

/***/ 61:
/***/ (function(module, exports, __webpack_require__) {

/*
  MIT License http://www.opensource.org/licenses/mit-license.php
  Author Tobias Koppers @sokra
  Modified by Evan You @yyx990803
*/

var hasDocument = typeof document !== 'undefined'

if (typeof DEBUG !== 'undefined' && DEBUG) {
  if (!hasDocument) {
    throw new Error(
    'vue-style-loader cannot be used in a non-browser environment. ' +
    "Use { target: 'node' } in your Webpack config to indicate a server-rendering environment."
  ) }
}

var listToStyles = __webpack_require__(202)

/*
type StyleObject = {
  id: number;
  parts: Array<StyleObjectPart>
}

type StyleObjectPart = {
  css: string;
  media: string;
  sourceMap: ?string
}
*/

var stylesInDom = {/*
  [id: number]: {
    id: number,
    refs: number,
    parts: Array<(obj?: StyleObjectPart) => void>
  }
*/}

var head = hasDocument && (document.head || document.getElementsByTagName('head')[0])
var singletonElement = null
var singletonCounter = 0
var isProduction = false
var noop = function () {}

// Force single-tag solution on IE6-9, which has a hard limit on the # of <style>
// tags it will allow on a page
var isOldIE = typeof navigator !== 'undefined' && /msie [6-9]\b/.test(navigator.userAgent.toLowerCase())

module.exports = function (parentId, list, _isProduction) {
  isProduction = _isProduction

  var styles = listToStyles(parentId, list)
  addStylesToDom(styles)

  return function update (newList) {
    var mayRemove = []
    for (var i = 0; i < styles.length; i++) {
      var item = styles[i]
      var domStyle = stylesInDom[item.id]
      domStyle.refs--
      mayRemove.push(domStyle)
    }
    if (newList) {
      styles = listToStyles(parentId, newList)
      addStylesToDom(styles)
    } else {
      styles = []
    }
    for (var i = 0; i < mayRemove.length; i++) {
      var domStyle = mayRemove[i]
      if (domStyle.refs === 0) {
        for (var j = 0; j < domStyle.parts.length; j++) {
          domStyle.parts[j]()
        }
        delete stylesInDom[domStyle.id]
      }
    }
  }
}

function addStylesToDom (styles /* Array<StyleObject> */) {
  for (var i = 0; i < styles.length; i++) {
    var item = styles[i]
    var domStyle = stylesInDom[item.id]
    if (domStyle) {
      domStyle.refs++
      for (var j = 0; j < domStyle.parts.length; j++) {
        domStyle.parts[j](item.parts[j])
      }
      for (; j < item.parts.length; j++) {
        domStyle.parts.push(addStyle(item.parts[j]))
      }
      if (domStyle.parts.length > item.parts.length) {
        domStyle.parts.length = item.parts.length
      }
    } else {
      var parts = []
      for (var j = 0; j < item.parts.length; j++) {
        parts.push(addStyle(item.parts[j]))
      }
      stylesInDom[item.id] = { id: item.id, refs: 1, parts: parts }
    }
  }
}

function createStyleElement () {
  var styleElement = document.createElement('style')
  styleElement.type = 'text/css'
  head.appendChild(styleElement)
  return styleElement
}

function addStyle (obj /* StyleObjectPart */) {
  var update, remove
  var styleElement = document.querySelector('style[data-vue-ssr-id~="' + obj.id + '"]')

  if (styleElement) {
    if (isProduction) {
      // has SSR styles and in production mode.
      // simply do nothing.
      return noop
    } else {
      // has SSR styles but in dev mode.
      // for some reason Chrome can't handle source map in server-rendered
      // style tags - source maps in <style> only works if the style tag is
      // created and inserted dynamically. So we remove the server rendered
      // styles and inject new ones.
      styleElement.parentNode.removeChild(styleElement)
    }
  }

  if (isOldIE) {
    // use singleton mode for IE9.
    var styleIndex = singletonCounter++
    styleElement = singletonElement || (singletonElement = createStyleElement())
    update = applyToSingletonTag.bind(null, styleElement, styleIndex, false)
    remove = applyToSingletonTag.bind(null, styleElement, styleIndex, true)
  } else {
    // use multi-style-tag mode in all other cases
    styleElement = createStyleElement()
    update = applyToTag.bind(null, styleElement)
    remove = function () {
      styleElement.parentNode.removeChild(styleElement)
    }
  }

  update(obj)

  return function updateStyle (newObj /* StyleObjectPart */) {
    if (newObj) {
      if (newObj.css === obj.css &&
          newObj.media === obj.media &&
          newObj.sourceMap === obj.sourceMap) {
        return
      }
      update(obj = newObj)
    } else {
      remove()
    }
  }
}

var replaceText = (function () {
  var textStore = []

  return function (index, replacement) {
    textStore[index] = replacement
    return textStore.filter(Boolean).join('\n')
  }
})()

function applyToSingletonTag (styleElement, index, remove, obj) {
  var css = remove ? '' : obj.css

  if (styleElement.styleSheet) {
    styleElement.styleSheet.cssText = replaceText(index, css)
  } else {
    var cssNode = document.createTextNode(css)
    var childNodes = styleElement.childNodes
    if (childNodes[index]) styleElement.removeChild(childNodes[index])
    if (childNodes.length) {
      styleElement.insertBefore(cssNode, childNodes[index])
    } else {
      styleElement.appendChild(cssNode)
    }
  }
}

function applyToTag (styleElement, obj) {
  var css = obj.css
  var media = obj.media
  var sourceMap = obj.sourceMap

  if (media) {
    styleElement.setAttribute('media', media)
  }

  if (sourceMap) {
    // https://developer.chrome.com/devtools/docs/javascript-debugging
    // this makes source maps inside style tags work properly in Chrome
    css += '\n/*# sourceURL=' + sourceMap.sources[0] + ' */'
    // http://stackoverflow.com/a/26603875
    css += '\n/*# sourceMappingURL=data:application/json;base64,' + btoa(unescape(encodeURIComponent(JSON.stringify(sourceMap)))) + ' */'
  }

  if (styleElement.styleSheet) {
    styleElement.styleSheet.cssText = css
  } else {
    while (styleElement.firstChild) {
      styleElement.removeChild(styleElement.firstChild)
    }
    styleElement.appendChild(document.createTextNode(css))
  }
}


/***/ })

/******/ });