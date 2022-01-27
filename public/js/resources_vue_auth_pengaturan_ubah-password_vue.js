"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_vue_auth_pengaturan_ubah-password_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/vue/auth/pengaturan/ubah-password.vue?vue&type=script&lang=js&":
/*!**************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/vue/auth/pengaturan/ubah-password.vue?vue&type=script&lang=js& ***!
  \**************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
      form: new Form({
        pass_lama: "",
        pass_baru: "",
        konfirmasi_pass: ""
      }),
      typeInput: false,
      password_confirmed: ""
    };
  },
  mounted: function mounted() {
    titlePage("Ubah Password", "onlyPage");
  },
  methods: {
    ubah_password: function ubah_password() {
      var _this = this;

      this.$toast.df102();
      this.$Progress.start();
      this.form.put("api/ubah-password").then(function () {
        _this.$Progress.finish();

        _this.$toast.df200();

        _this.password_confirmed = false;

        _this.form.reset();
      })["catch"](function (e) {
        _this.$Progress.fail();

        if (e.response.status == 400) {
          Swal.fire({
            icon: "warning",
            title: e.response.data.message
          });
        }
      });
    },
    show_password: function show_password(id) {
      this.typeInput = !this.typeInput;

      if (this.typeInput) {
        $("#password_" + id).attr("type", "text");
      } else {
        $("#password_" + id).attr("type", "password");
      }
    },
    proses_konfirmasi: function proses_konfirmasi() {
      if (this.form.pass_baru == this.form.konfirmasi_pass && this.form.pass_baru != "") {
        this.password_confirmed = true;
        $("#btn-ubah-password").attr("disabled", false);
      } else {
        this.password_confirmed = false;
        $("#password_konfirmasi").addClass("border-danger");
        $("#password_baru").addClass("border-danger");
        $("#btn-ubah-password").attr("disabled", "true");
      }
    }
  }
});

/***/ }),

/***/ "./resources/vue/auth/pengaturan/ubah-password.vue":
/*!*********************************************************!*\
  !*** ./resources/vue/auth/pengaturan/ubah-password.vue ***!
  \*********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _ubah_password_vue_vue_type_template_id_de4e17b4___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./ubah-password.vue?vue&type=template&id=de4e17b4& */ "./resources/vue/auth/pengaturan/ubah-password.vue?vue&type=template&id=de4e17b4&");
/* harmony import */ var _ubah_password_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./ubah-password.vue?vue&type=script&lang=js& */ "./resources/vue/auth/pengaturan/ubah-password.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _ubah_password_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _ubah_password_vue_vue_type_template_id_de4e17b4___WEBPACK_IMPORTED_MODULE_0__.render,
  _ubah_password_vue_vue_type_template_id_de4e17b4___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/vue/auth/pengaturan/ubah-password.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/vue/auth/pengaturan/ubah-password.vue?vue&type=script&lang=js&":
/*!**********************************************************************************!*\
  !*** ./resources/vue/auth/pengaturan/ubah-password.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_ubah_password_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./ubah-password.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/vue/auth/pengaturan/ubah-password.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_ubah_password_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/vue/auth/pengaturan/ubah-password.vue?vue&type=template&id=de4e17b4&":
/*!****************************************************************************************!*\
  !*** ./resources/vue/auth/pengaturan/ubah-password.vue?vue&type=template&id=de4e17b4& ***!
  \****************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_ubah_password_vue_vue_type_template_id_de4e17b4___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_ubah_password_vue_vue_type_template_id_de4e17b4___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_ubah_password_vue_vue_type_template_id_de4e17b4___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./ubah-password.vue?vue&type=template&id=de4e17b4& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/vue/auth/pengaturan/ubah-password.vue?vue&type=template&id=de4e17b4&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/vue/auth/pengaturan/ubah-password.vue?vue&type=template&id=de4e17b4&":
/*!*******************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/vue/auth/pengaturan/ubah-password.vue?vue&type=template&id=de4e17b4& ***!
  \*******************************************************************************************************************************************************************************************************************************/
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
  return _c("div", [
    _c("div", { staticClass: "container" }, [
      _c("div", { staticClass: "row" }, [
        _c("div", { staticClass: "col-sm" }, [
          _c("div", { staticClass: "bg-white p-3 rounded elevation-1" }, [
            _vm._m(0),
            _vm._v(" "),
            _c(
              "form",
              {
                on: {
                  submit: function($event) {
                    $event.preventDefault()
                    return _vm.ubah_password.apply(null, arguments)
                  }
                }
              },
              [
                _c("div", { staticClass: "form-group" }, [
                  _c("label", { attrs: { for: "" } }, [
                    _vm._v("Masukan Password Lama")
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "input-group" }, [
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.form.pass_lama,
                          expression: "form.pass_lama"
                        }
                      ],
                      staticClass: "form-control",
                      attrs: {
                        id: "password_lama",
                        type: "password",
                        required: ""
                      },
                      domProps: { value: _vm.form.pass_lama },
                      on: {
                        keyup: _vm.proses_konfirmasi,
                        input: function($event) {
                          if ($event.target.composing) {
                            return
                          }
                          _vm.$set(_vm.form, "pass_lama", $event.target.value)
                        }
                      }
                    }),
                    _vm._v(" "),
                    _c("span", { staticClass: "input-group-prepend" }, [
                      _c(
                        "div",
                        {
                          staticClass: "p-2 btn als round-right",
                          on: {
                            click: function($event) {
                              return _vm.show_password("lama")
                            }
                          }
                        },
                        [_c("i", { staticClass: "fa fa-eye" })]
                      )
                    ])
                  ])
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "form-group" }, [
                  _c("label", { attrs: { for: "" } }, [
                    _vm._v("Masukan Password Baru")
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "input-group" }, [
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.form.pass_baru,
                          expression: "form.pass_baru"
                        }
                      ],
                      staticClass: "form-control",
                      class: { "border-success": _vm.password_confirmed },
                      attrs: {
                        id: "password_baru",
                        type: "password",
                        required: ""
                      },
                      domProps: { value: _vm.form.pass_baru },
                      on: {
                        keyup: _vm.proses_konfirmasi,
                        input: function($event) {
                          if ($event.target.composing) {
                            return
                          }
                          _vm.$set(_vm.form, "pass_baru", $event.target.value)
                        }
                      }
                    }),
                    _vm._v(" "),
                    _c("span", { staticClass: "input-group-prepend" }, [
                      _c(
                        "div",
                        {
                          staticClass: "p-2 btn als round-right",
                          on: {
                            click: function($event) {
                              return _vm.show_password("baru")
                            }
                          }
                        },
                        [_c("i", { staticClass: "fa fa-eye" })]
                      )
                    ])
                  ])
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "form-group" }, [
                  _c("label", { attrs: { for: "" } }, [
                    _vm._v("Konfirmasi Password Baru")
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "input-group" }, [
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.form.konfirmasi_pass,
                          expression: "form.konfirmasi_pass"
                        }
                      ],
                      staticClass: "form-control",
                      class: { "border-success": _vm.password_confirmed },
                      attrs: { id: "password_konfirmasi", type: "password" },
                      domProps: { value: _vm.form.konfirmasi_pass },
                      on: {
                        keyup: _vm.proses_konfirmasi,
                        input: function($event) {
                          if ($event.target.composing) {
                            return
                          }
                          _vm.$set(
                            _vm.form,
                            "konfirmasi_pass",
                            $event.target.value
                          )
                        }
                      }
                    }),
                    _vm._v(" "),
                    _c("span", { staticClass: "input-group-prepend" }, [
                      _c(
                        "div",
                        {
                          staticClass: "p-2 btn als round-right",
                          on: {
                            click: function($event) {
                              return _vm.show_password("konfirmasi")
                            }
                          }
                        },
                        [_c("i", { staticClass: "fa fa-eye" })]
                      )
                    ])
                  ]),
                  _vm._v(" "),
                  _vm.password_confirmed === false
                    ? _c("span", { staticClass: "text-danger" }, [
                        _c("i", {
                          staticClass: "fa fa-exclamation-circle mr-2"
                        }),
                        _vm._v(
                          "\n                        Konfirmasi Password dan password lama tidak sama\n                     "
                        )
                      ])
                    : _vm._e()
                ]),
                _vm._v(" "),
                _c(
                  "button",
                  {
                    staticClass: "btn btn-outline-primary btn-block",
                    attrs: { type: "submit", id: "btn-ubah-password" }
                  },
                  [_vm._v("Simpan Perubahan Password")]
                )
              ]
            )
          ])
        ])
      ])
    ])
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("h4", [
      _c("i", { staticClass: "fa fa-lock" }),
      _vm._v(" Ubah Password\n               ")
    ])
  }
]
render._withStripped = true



/***/ })

}]);