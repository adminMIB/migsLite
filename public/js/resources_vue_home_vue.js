"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_vue_home_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/vue/home.vue?vue&type=script&lang=js&":
/*!*************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/vue/home.vue?vue&type=script&lang=js& ***!
  \*************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var vuex__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vuex */ "./node_modules/vuex/dist/vuex.esm.js");
function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); if (enumerableOnly) { symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; }); } keys.push.apply(keys, symbols); } return keys; }

function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i] != null ? arguments[i] : {}; if (i % 2) { ownKeys(Object(source), true).forEach(function (key) { _defineProperty(target, key, source[key]); }); } else if (Object.getOwnPropertyDescriptors) { Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)); } else { ownKeys(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } } return target; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  data: function data() {
    return {
      in_data: {},
      value: null,
      value_input: "",
      options: ["list", "of", "options"]
    };
  },
  name: "home",
  computed: _objectSpread({}, (0,vuex__WEBPACK_IMPORTED_MODULE_0__.mapState)({
    count: function count(state) {
      return state.count;
    }
  })),
  mounted: function mounted() {},
  methods: {
    konfirmasi_hapus: function konfirmasi_hapus() {
      var _this = this;

      konfirmasiHapus.fire().then(function (result) {
        if (result.isConfirmed) {
          _this.progress_finish();

          _this.$toast.df102();
        }
      });
    },
    progress_finish: function progress_finish() {
      this.$Progress.start();
      this.$Progress.finish();
    },
    progress_fail: function progress_fail() {
      this.$Progress.start();
      this.$Progress.fail();
    },
    cek: function cek(e) {
      console.log(e);
    },
    load: function load() {
      var _this2 = this;

      this.$Progress.start();
      axios.get("https://shop.hamzahbatik.co.id/api/homepage?aktif=1").then(function (respon) {
        _this2.in_data = respon.data.in_section;

        _this2.$Progress.finish();
      })["catch"](function (e) {
        _this2.$Progress.fail();

        _this2.$error["catch"](e);
      });
    }
  }
});

/***/ }),

/***/ "./resources/vue/home.vue":
/*!********************************!*\
  !*** ./resources/vue/home.vue ***!
  \********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _home_vue_vue_type_template_id_13401500___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./home.vue?vue&type=template&id=13401500& */ "./resources/vue/home.vue?vue&type=template&id=13401500&");
/* harmony import */ var _home_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./home.vue?vue&type=script&lang=js& */ "./resources/vue/home.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _home_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _home_vue_vue_type_template_id_13401500___WEBPACK_IMPORTED_MODULE_0__.render,
  _home_vue_vue_type_template_id_13401500___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/vue/home.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/vue/home.vue?vue&type=script&lang=js&":
/*!*********************************************************!*\
  !*** ./resources/vue/home.vue?vue&type=script&lang=js& ***!
  \*********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_home_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../node_modules/vue-loader/lib/index.js??vue-loader-options!./home.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/vue/home.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_home_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/vue/home.vue?vue&type=template&id=13401500&":
/*!***************************************************************!*\
  !*** ./resources/vue/home.vue?vue&type=template&id=13401500& ***!
  \***************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_home_vue_vue_type_template_id_13401500___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_home_vue_vue_type_template_id_13401500___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_home_vue_vue_type_template_id_13401500___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../node_modules/vue-loader/lib/index.js??vue-loader-options!./home.vue?vue&type=template&id=13401500& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/vue/home.vue?vue&type=template&id=13401500&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/vue/home.vue?vue&type=template&id=13401500&":
/*!******************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/vue/home.vue?vue&type=template&id=13401500& ***!
  \******************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "text-center container" }, [
    _c("h3", { staticClass: "font-weight-bolder" }, [
      _vm._v("New Amrullah Apps Dev Boiler")
    ]),
    _vm._v(" "),
    _c("hr"),
    _vm._v(" "),
    _c("div", { staticClass: "row" }, [
      _c("div", { staticClass: "col-sm-4" }, [
        _c("div", { staticClass: "m-1 border p-2 bg-white" }, [
          _c("label", { attrs: { for: "" } }, [_vm._v("Progress Bar")]),
          _vm._v(" "),
          _c("br"),
          _vm._v(" "),
          _c(
            "button",
            {
              staticClass: "m-1 btn btn-primary",
              on: {
                click: function($event) {
                  return _vm.$Progress.start()
                }
              }
            },
            [_vm._v("Prgress Start")]
          ),
          _vm._v(" "),
          _c(
            "button",
            {
              staticClass: "m-1 btn btn-success",
              on: { click: _vm.progress_finish }
            },
            [_vm._v("Prgress Finish")]
          ),
          _vm._v(" "),
          _c(
            "button",
            {
              staticClass: "m-1 btn btn-danger",
              on: { click: _vm.progress_fail }
            },
            [_vm._v("Prgress Fail")]
          )
        ])
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "col-sm-4" }, [
        _c("div", { staticClass: "m-1 border p-2 bg-white" }, [
          _c("label", { attrs: { for: "" } }, [_vm._v("Toast Group")]),
          _vm._v(" "),
          _c("br"),
          _vm._v(" "),
          _c(
            "button",
            {
              staticClass: "m-1 btn btn-primary",
              on: {
                click: function($event) {
                  return _vm.$toast.df102()
                }
              }
            },
            [_vm._v("Loading")]
          ),
          _vm._v(" "),
          _c(
            "button",
            {
              staticClass: "m-1 btn btn-success",
              on: {
                click: function($event) {
                  return _vm.$toast.df200()
                }
              }
            },
            [_vm._v("Success")]
          ),
          _vm._v(" "),
          _c(
            "button",
            {
              staticClass: "m-1 btn btn-warning",
              on: {
                click: function($event) {
                  return _vm.$toast.df500()
                }
              }
            },
            [_vm._v("Test HTTP 500")]
          ),
          _vm._v(" "),
          _c(
            "button",
            {
              staticClass: "m-1 btn btn-danger",
              on: {
                click: function($event) {
                  return _vm.$error.catch()
                }
              }
            },
            [_vm._v("Catch Error")]
          ),
          _vm._v(" "),
          _c(
            "button",
            {
              staticClass: "m-1 btn btn-dark",
              on: { click: _vm.konfirmasi_hapus }
            },
            [_vm._v("Delete Confirmation")]
          )
        ])
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "col-sm-4" }, [
        _c("div", { staticClass: "m-1 border p-2 bg-white" }, [
          _c("label", { attrs: { for: "" } }, [
            _vm._v("Test Vuext Setter Getter")
          ]),
          _vm._v(" "),
          _c("h1", [_vm._v(_vm._s(_vm.count))]),
          _vm._v(" "),
          _c(
            "button",
            {
              staticClass: "m-1 btn btn-primary",
              on: {
                click: function($event) {
                  return _vm.$store.commit("INCREMENT")
                }
              }
            },
            [_vm._v("INCREMENT")]
          )
        ])
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "col-sm-4" }, [
        _c("div", { staticClass: "m-1 border p-2 bg-white" }, [
          _c("label", { attrs: { for: "" } }, [_vm._v("Default Component")]),
          _vm._v(" "),
          _c("div", [_c("kembali")], 1),
          _vm._v(" "),
          _c("div", [_c("loading")], 1),
          _vm._v(" "),
          _c("div", [_c("kosong")], 1)
        ])
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "col-sm-4" }, [
        _c("div", { staticClass: "m-1 border p-2 bg-white" }, [
          _c("label", { attrs: { for: "" } }, [_vm._v("V-Money Input")]),
          _vm._v(" "),
          _c(
            "div",
            [
              _c("money", {
                staticClass: "form-control",
                model: {
                  value: _vm.value_input,
                  callback: function($$v) {
                    _vm.value_input = $$v
                  },
                  expression: "value_input"
                }
              })
            ],
            1
          )
        ])
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "col-sm-4" }, [
        _c("div", { staticClass: "m-1 border p-2 bg-white" }, [
          _c("label", { attrs: { for: "" } }, [_vm._v("V-Carouse")]),
          _vm._v(" "),
          _c(
            "div",
            [
              _c(
                "carousel",
                { attrs: { "per-page": 1, "mouse-drag": true } },
                [
                  _c("slide", [
                    _c("div", { staticClass: "bg-secondary text-white p-3" }, [
                      _vm._v("Slide 1 Content")
                    ])
                  ]),
                  _vm._v(" "),
                  _c("slide", [
                    _c("div", { staticClass: "bg-secondary text-white p-3" }, [
                      _vm._v("Slide 2 Content")
                    ])
                  ])
                ],
                1
              )
            ],
            1
          )
        ])
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "col-sm-4" }, [
        _c("div", { staticClass: "m-1 border p-2 bg-white" }, [
          _c("label", { attrs: { for: "" } }, [_vm._v("V-MultiSelect")]),
          _vm._v(" "),
          _c(
            "div",
            [
              _c("multiselect", {
                attrs: { options: _vm.options },
                model: {
                  value: _vm.value,
                  callback: function($$v) {
                    _vm.value = $$v
                  },
                  expression: "value"
                }
              })
            ],
            1
          )
        ])
      ])
    ])
  ])
}
var staticRenderFns = []
render._withStripped = true



/***/ })

}]);