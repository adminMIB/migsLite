"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_vue_demo_img_compresor_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/vue/demo/img_compresor.vue?vue&type=script&lang=js&":
/*!***************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/vue/demo/img_compresor.vue?vue&type=script&lang=js& ***!
  \***************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var vue_image_compressor__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue-image-compressor */ "./node_modules/vue-image-compressor/src/js/components/vue-image-compressor.vue");
//
//
//
//
//
//
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
      img: "",
      scale: 100,
      quality: 0,
      originalSize: true,
      original: {},
      compressed: ""
    };
  },
  components: {
    imageCompressor: vue_image_compressor__WEBPACK_IMPORTED_MODULE_0__["default"]
  },
  methods: {
    upload: function upload() {
      console.log(this.$refs);
      this.quality = 50;
    },
    getFiles: function getFiles(obj) {
      console.log(obj);
      this.img = obj.compressed.blob;
      this.original = obj.original;
      this.compressed = obj.compressed;
    }
  }
});

/***/ }),

/***/ "./resources/vue/demo/img_compresor.vue":
/*!**********************************************!*\
  !*** ./resources/vue/demo/img_compresor.vue ***!
  \**********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _img_compresor_vue_vue_type_template_id_758abae6___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./img_compresor.vue?vue&type=template&id=758abae6& */ "./resources/vue/demo/img_compresor.vue?vue&type=template&id=758abae6&");
/* harmony import */ var _img_compresor_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./img_compresor.vue?vue&type=script&lang=js& */ "./resources/vue/demo/img_compresor.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _img_compresor_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _img_compresor_vue_vue_type_template_id_758abae6___WEBPACK_IMPORTED_MODULE_0__.render,
  _img_compresor_vue_vue_type_template_id_758abae6___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/vue/demo/img_compresor.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/vue/demo/img_compresor.vue?vue&type=script&lang=js&":
/*!***********************************************************************!*\
  !*** ./resources/vue/demo/img_compresor.vue?vue&type=script&lang=js& ***!
  \***********************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_img_compresor_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./img_compresor.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/vue/demo/img_compresor.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_img_compresor_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/vue/demo/img_compresor.vue?vue&type=template&id=758abae6&":
/*!*****************************************************************************!*\
  !*** ./resources/vue/demo/img_compresor.vue?vue&type=template&id=758abae6& ***!
  \*****************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_img_compresor_vue_vue_type_template_id_758abae6___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_img_compresor_vue_vue_type_template_id_758abae6___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_img_compresor_vue_vue_type_template_id_758abae6___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./img_compresor.vue?vue&type=template&id=758abae6& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/vue/demo/img_compresor.vue?vue&type=template&id=758abae6&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/vue/demo/img_compresor.vue?vue&type=template&id=758abae6&":
/*!********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/vue/demo/img_compresor.vue?vue&type=template&id=758abae6& ***!
  \********************************************************************************************************************************************************************************************************************/
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
    _c(
      "form",
      {
        on: {
          submit: function($event) {
            $event.preventDefault()
            return _vm.upload.apply(null, arguments)
          }
        }
      },
      [
        _c("image-compressor", {
          attrs: { done: _vm.getFiles, scale: _vm.scale, quality: _vm.quality }
        }),
        _vm._v(" "),
        _c("button", { attrs: { type: "submit" } }, [_vm._v("Upload")])
      ],
      1
    ),
    _vm._v(" "),
    _c("input", {
      directives: [
        {
          name: "model",
          rawName: "v-model",
          value: _vm.quality,
          expression: "quality"
        }
      ],
      attrs: { type: "number" },
      domProps: { value: _vm.quality },
      on: {
        input: function($event) {
          if ($event.target.composing) {
            return
          }
          _vm.quality = $event.target.value
        }
      }
    }),
    _vm._v(" "),
    _c("div", [_vm._v("Kompresed Size : " + _vm._s(_vm.compressed.size))]),
    _vm._v(" "),
    _c("div", [_vm._v("Original Size : " + _vm._s(_vm.original.size))]),
    _vm._v(" "),
    _c("img", { staticClass: "w-100", attrs: { alt: "", src: _vm.img } })
  ])
}
var staticRenderFns = []
render._withStripped = true



/***/ })

}]);