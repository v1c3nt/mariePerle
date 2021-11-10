"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["app"],{

/***/ "./assets/js/Components/GSAPComponent.jsx":
/*!************************************************!*\
  !*** ./assets/js/Components/GSAPComponent.jsx ***!
  \************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var _GSAPComponent_css__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./GSAPComponent.css */ "./assets/js/Components/GSAPComponent.css");
/* harmony import */ var gsap__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! gsap */ "./node_modules/gsap/index.js");




function GSAPComponent(props) {
  var header = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createRef();
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(function () {
    gsap__WEBPACK_IMPORTED_MODULE_2__.gsap.to(header.current, {
      color: "8c0",
      duration: 2
    });
  }, [header]);
  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement(react__WEBPACK_IMPORTED_MODULE_0__.Fragment, null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("h1", {
    ref: header
  }, "Hello GSAP World!!"));
}

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (GSAPComponent);

/***/ }),

/***/ "./assets/js/app.js":
/*!**************************!*\
  !*** ./assets/js/app.js ***!
  \**************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _scss_app_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../scss/app.scss */ "./assets/scss/app.scss");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react_dom__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! react-dom */ "./node_modules/react-dom/index.js");
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! axios */ "./node_modules/axios/index.js");
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(axios__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _components_Article__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./components/Article */ "./assets/js/components/Article/index.js");
/* harmony import */ var _Components_GSAPComponent_jsx__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./Components/GSAPComponent.jsx */ "./assets/js/Components/GSAPComponent.jsx");
/* harmony import */ var gsap__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! gsap */ "./node_modules/gsap/index.js");
/* harmony import */ var _images_open_png__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../images/open.png */ "./assets/images/open.png");
/* harmony import */ var _images_close_png__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ../images/close.png */ "./assets/images/close.png");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_8__);
/* provided dependency */ var $ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");





__webpack_require__(/*! @fortawesome/fontawesome-free/css/all.min.css */ "./node_modules/@fortawesome/fontawesome-free/css/all.min.css");

__webpack_require__(/*! @fortawesome/fontawesome-free/js/all.js */ "./node_modules/@fortawesome/fontawesome-free/js/all.js"); // import axios from 'axios';







 // start the Stimulus application
// import './bootstrap';

var app = {
  init: function init() {
    console.log('made with 💖 and little 🍺');
    gsap__WEBPACK_IMPORTED_MODULE_9__.gsap.to(".main-image", {
      duration: 2.5,
      ease: "expo",
      x: -75
    });
    $(".main-image").on('mouseenter', app.scal);
    $(".main-image").on('mouseleave', app.scalOff); // test axios
    //  axios.get('http://127.0.0.1:8000/api/articles')
    //     .then( function (response){
    //         console.log(response);
    //     })
    //     .catch( () => false)
    //     ;
  },
  scal: function scal() {
    gsap__WEBPACK_IMPORTED_MODULE_9__.gsap.to($(this), {
      scale: 1.5,
      duration: 1,
      boxShadow: "1px 1px 10px 10px #2c2c2c"
    });
    gsap__WEBPACK_IMPORTED_MODULE_9__.gsap.to($(this), {
      duration: 1,
      ease: "expo"
    });
    gsap__WEBPACK_IMPORTED_MODULE_9__.gsap.set($(this), {
      zIndex: 2
    });
  },
  scalOff: function scalOff() {
    gsap__WEBPACK_IMPORTED_MODULE_9__.gsap.set($(this), {
      zIndex: 1
    }); // gsap.set(this.target, {zIndex: 0});

    gsap__WEBPACK_IMPORTED_MODULE_9__.gsap.to($(this), {
      scale: 1,
      duration: 1.2,
      boxShadow: "2px 3px 7px 2px #2c2c2c"
    });
  }
};
$(app.init); // reactDOM.render(<Gsap/>, document.getElementById('header'));

/***/ }),

/***/ "./assets/js/components/Article/Button.jsx":
/*!*************************************************!*\
  !*** ./assets/js/components/Article/Button.jsx ***!
  \*************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");


var Button = function Button(_ref) {
  var onClick = _ref.onClick,
      xx = _ref.article;
  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement("div", {
    onClick: onClick,
    className: "learn-more",
    "data-foo": xx
  }, "en savoir plus by react");
};

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Button);

/***/ }),

/***/ "./assets/js/components/Article/index.js":
/*!***********************************************!*\
  !*** ./assets/js/components/Article/index.js ***!
  \***********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of.js */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of.js */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.reflect.construct.js */ "./node_modules/core-js/modules/es.reflect.construct.js");
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.object.create.js */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var _Button__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! ./Button */ "./assets/js/components/Article/Button.jsx");
function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }














function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } else if (call !== void 0) { throw new TypeError("Derived constructors may only return object or undefined"); } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); return true; } catch (e) { return false; } }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }


 // const articles = () => {
// axios
//   .get("http://127.0.0.1:8000/api/articles")
//   .then(function (response) {
//     console.log(response.data);
//   })
//   .catch(() => false);
// };

var Article = /*#__PURE__*/function (_React$Component) {
  _inherits(Article, _React$Component);

  var _super = _createSuper(Article);

  function Article() {
    _classCallCheck(this, Article);

    return _super.call(this);
  }

  _createClass(Article, [{
    key: "handleClick",
    value: function handleClick(evt) {
      console.log("clique", evt.target);
    }
  }, {
    key: "render",
    value: function render() {
      return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_12__.createElement("div", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_12__.createElement(_Button__WEBPACK_IMPORTED_MODULE_13__.default, {
        onClick: this.handleClick,
        article: this.props.article.id
      }));
    }
  }]);

  return Article;
}(react__WEBPACK_IMPORTED_MODULE_12__.Component);

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Article);

/***/ }),

/***/ "./assets/js/Components/GSAPComponent.css":
/*!************************************************!*\
  !*** ./assets/js/Components/GSAPComponent.css ***!
  \************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./assets/scss/app.scss":
/*!******************************!*\
  !*** ./assets/scss/app.scss ***!
  \******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./assets/images/close.png":
/*!*********************************!*\
  !*** ./assets/images/close.png ***!
  \*********************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

module.exports = __webpack_require__.p + "images/close.af0e9dbd.png";

/***/ }),

/***/ "./assets/images/open.png":
/*!********************************!*\
  !*** ./assets/images/open.png ***!
  \********************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

module.exports = __webpack_require__.p + "images/open.c7234ede.png";

/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_fortawesome_fontawesome-free_js_all_js-node_modules_axios_index_js-node_-f5d772"], () => (__webpack_exec__("./assets/js/app.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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SyxXQUFPLEVBQUVGLE9BQWQ7QUFDQyxhQUFTLEVBQUMsWUFEWDtBQUN3QixnQkFBVUM7QUFEbEMsK0JBRGM7QUFBQSxDQUFmOztBQU1BLGlFQUFlRixNQUFmOzs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7QUNSQTtDQUdBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0lBQ01wQjs7Ozs7QUFDSixxQkFBYztBQUFBOztBQUFBO0FBRWI7Ozs7V0FHRCxxQkFBWXdCLEdBQVosRUFBaUI7QUFDZmhCLE1BQUFBLE9BQU8sQ0FBQ0MsR0FBUixDQUFZLFFBQVosRUFBc0JlLEdBQUcsQ0FBQ0MsTUFBMUI7QUFDRDs7O1dBRUQsa0JBQVM7QUFFUCwwQkFDQSw0RUFDRSxrREFBQyw2Q0FBRDtBQUFRLGVBQU8sRUFBRSxLQUFLQyxXQUF0QjtBQUFtQyxlQUFPLEVBQUUsS0FBS3BDLEtBQUwsQ0FBV2lDLE9BQVgsQ0FBbUJJO0FBQS9ELFFBREYsQ0FEQTtBQUtEOzs7O0VBakJtQnpDOztBQW9CdEIsaUVBQWVjLE9BQWY7Ozs7Ozs7Ozs7O0FDL0JBOzs7Ozs7Ozs7Ozs7QUNBQSIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL2Fzc2V0cy9qcy9Db21wb25lbnRzL0dTQVBDb21wb25lbnQuanN4Iiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9hcHAuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL2NvbXBvbmVudHMvQXJ0aWNsZS9CdXR0b24uanN4Iiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9jb21wb25lbnRzL0FydGljbGUvaW5kZXguanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL0NvbXBvbmVudHMvR1NBUENvbXBvbmVudC5jc3MiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL3Njc3MvYXBwLnNjc3MiXSwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IFJlYWN0LCB7IHVzZUVmZmVjdCB9IGZyb20gJ3JlYWN0JztcbmltcG9ydCAnLi9HU0FQQ29tcG9uZW50LmNzcyc7XG5pbXBvcnQgeyBnc2FwIH0gZnJvbSAnZ3NhcCc7XG5cbmZ1bmN0aW9uIEdTQVBDb21wb25lbnQocHJvcHMpIHtcbiAgICBjb25zdCBoZWFkZXIgPSBSZWFjdC5jcmVhdGVSZWYoKTtcblxuICAgIHVzZUVmZmVjdCgoKSA9PiB7XG4gICAgICAgIGdzYXAudG8oaGVhZGVyLmN1cnJlbnQsIHtjb2xvcjogXCI4YzBcIiwgZHVyYXRpb246IDJ9KVxuICAgIH0sIFtoZWFkZXJdKTtcblxuICAgIHJldHVybiAoPD5cbiAgICAgICAgPGgxIHJlZj17aGVhZGVyfT5cbiAgICAgICAgICAgIEhlbGxvIEdTQVAgV29ybGQhIVxuICAgICAgICA8L2gxPlxuICAgICAgICA8Lz5cbiAgICApO1xufVxuXG5leHBvcnQgZGVmYXVsdCBHU0FQQ29tcG9uZW50OyIsImltcG9ydCAnLi4vc2Nzcy9hcHAuc2Nzcyc7XG5pbXBvcnQgUmVhY3QgZnJvbSAncmVhY3QnO1xuaW1wb3J0IHJlYWN0RE9NIGZyb20gJ3JlYWN0LWRvbSc7XG5pbXBvcnQgYXhpb3MgZnJvbSAnYXhpb3MnO1xuXG5cbnJlcXVpcmUoJ0Bmb3J0YXdlc29tZS9mb250YXdlc29tZS1mcmVlL2Nzcy9hbGwubWluLmNzcycpO1xucmVxdWlyZSgnQGZvcnRhd2Vzb21lL2ZvbnRhd2Vzb21lLWZyZWUvanMvYWxsLmpzJyk7XG4vLyBpbXBvcnQgYXhpb3MgZnJvbSAnYXhpb3MnO1xuaW1wb3J0IEFydGljbGUgZnJvbSAnLi9jb21wb25lbnRzL0FydGljbGUnO1xuaW1wb3J0IEdzYXAgZnJvbSAnLi9Db21wb25lbnRzL0dTQVBDb21wb25lbnQuanN4JztcbmltcG9ydCB7IGdzYXAgfSBmcm9tICdnc2FwJztcblxuaW1wb3J0IG9wZW4gZnJvbSAnLi4vaW1hZ2VzL29wZW4ucG5nJztcbmltcG9ydCBjbG9zZSBmcm9tICcuLi9pbWFnZXMvY2xvc2UucG5nJztcbmltcG9ydCB7IGNzcywgdGltZXJzIH0gZnJvbSAnanF1ZXJ5JztcblxuLy8gc3RhcnQgdGhlIFN0aW11bHVzIGFwcGxpY2F0aW9uXG4vLyBpbXBvcnQgJy4vYm9vdHN0cmFwJztcbnZhciBhcHAgPSB7XG4gICAgIGluaXQ6IGZ1bmN0aW9uICgpIHsgXG4gICAgICAgICBjb25zb2xlLmxvZygnbWFkZSB3aXRoIPCfkpYgYW5kIGxpdHRsZSDwn426Jyk7XG5cbiAgICAgICAgZ3NhcC50byhcIi5tYWluLWltYWdlXCIsIHtkdXJhdGlvbjogMi41LCBlYXNlOiBcImV4cG9cIiwgeDogLTc1fSk7XG4gICAgICAgICQoXCIubWFpbi1pbWFnZVwiKS5vbignbW91c2VlbnRlcicsIGFwcC5zY2FsKTtcbiAgICAgICAgJChcIi5tYWluLWltYWdlXCIpLm9uKCdtb3VzZWxlYXZlJywgYXBwLnNjYWxPZmYpO1xuICAgICAgICAvLyB0ZXN0IGF4aW9zXG4gICAgICAgIC8vICBheGlvcy5nZXQoJ2h0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hcGkvYXJ0aWNsZXMnKVxuICAgICAgICAvLyAgICAgLnRoZW4oIGZ1bmN0aW9uIChyZXNwb25zZSl7XG4gICAgICAgIC8vICAgICAgICAgY29uc29sZS5sb2cocmVzcG9uc2UpO1xuICAgICAgICAvLyAgICAgfSlcbiAgICAgICAgLy8gICAgIC5jYXRjaCggKCkgPT4gZmFsc2UpXG4gICAgICAgIC8vICAgICA7XG4gICAgICAgICB9LFxuICAgICAgICBzY2FsOiBmdW5jdGlvbigpIHtcblxuICAgICAgICAgICAgZ3NhcC50bygkKHRoaXMpLCB7c2NhbGU6IDEuNSwgZHVyYXRpb246IDEsIGJveFNoYWRvdzpcIjFweCAxcHggMTBweCAxMHB4ICMyYzJjMmNcIiwgfSk7XG4gICAgICAgICAgICBnc2FwLnRvKCQodGhpcyksIHsgIGR1cmF0aW9uOiAxLCBlYXNlOiBcImV4cG9cIn0pXG4gICAgICAgICAgICA7XG4gICAgICAgICAgICBnc2FwLnNldCgkKHRoaXMpLCB7ekluZGV4OiAyLH0pO1xuICAgICAgICB9LFxuICAgICAgICBzY2FsT2ZmOiBmdW5jdGlvbigpIHtcbiAgICAgICAgICAgIGdzYXAuc2V0KCQodGhpcyksIHt6SW5kZXg6IDF9KTtcbiAgICAgICAgICAgIC8vIGdzYXAuc2V0KHRoaXMudGFyZ2V0LCB7ekluZGV4OiAwfSk7XG4gICAgICAgICAgICBnc2FwLnRvKCQodGhpcyksIHtzY2FsZTogMSwgZHVyYXRpb246IDEuMiwgIGJveFNoYWRvdzpcIjJweCAzcHggN3B4IDJweCAjMmMyYzJjXCJ9KVxuXG4gICAgICAgICAgICA7XG4gICAgICAgIH1cbiAgICB9XG4kKGFwcC5pbml0KTtcblxuXG4vLyByZWFjdERPTS5yZW5kZXIoPEdzYXAvPiwgZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2hlYWRlcicpKTtcbiIsImltcG9ydCBSZWFjdCBmcm9tIFwicmVhY3RcIjtcblxuY29uc3QgQnV0dG9uID0gKHtvbkNsaWNrLCBhcnRpY2xlOnh4fSkgPT4gKFxuXHQ8ZGl2IG9uQ2xpY2s9e29uQ2xpY2t9XG5cdFx0Y2xhc3NOYW1lPVwibGVhcm4tbW9yZVwiIGRhdGEtZm9vPXt4eH0+ZW4gc2F2b2lyIHBsdXMgYnkgcmVhY3Rcblx0PC9kaXY+XG5cdCk7XG5cbmV4cG9ydCBkZWZhdWx0IEJ1dHRvbjtcbiIsImltcG9ydCBSZWFjdCBmcm9tIFwicmVhY3RcIjtcbmltcG9ydCBCdXR0b24gZnJvbSBcIi4vQnV0dG9uXCI7XG5cbi8vIGNvbnN0IGFydGljbGVzID0gKCkgPT4ge1xuLy8gYXhpb3Ncbi8vICAgLmdldChcImh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hcGkvYXJ0aWNsZXNcIilcbi8vICAgLnRoZW4oZnVuY3Rpb24gKHJlc3BvbnNlKSB7XG4vLyAgICAgY29uc29sZS5sb2cocmVzcG9uc2UuZGF0YSk7XG4vLyAgIH0pXG4vLyAgIC5jYXRjaCgoKSA9PiBmYWxzZSk7XG4vLyB9O1xuY2xhc3MgQXJ0aWNsZSBleHRlbmRzIFJlYWN0LkNvbXBvbmVudCB7XG4gIGNvbnN0cnVjdG9yKCkge1xuICAgIHN1cGVyKCk7XG4gIH1cbiAgXG5cbiAgaGFuZGxlQ2xpY2soZXZ0KSB7XG4gICAgY29uc29sZS5sb2coXCJjbGlxdWVcIiwgZXZ0LnRhcmdldCk7XG4gIH07XG5cbiAgcmVuZGVyKCkge1xuIFxuICAgIHJldHVybiAoXG4gICAgPGRpdj5cbiAgICAgIDxCdXR0b24gb25DbGljaz17dGhpcy5oYW5kbGVDbGlja30gYXJ0aWNsZT17dGhpcy5wcm9wcy5hcnRpY2xlLmlkfS8+XG4gICAgPC9kaXY+XG4gICAgKTtcbiAgfVxufVxuXG5leHBvcnQgZGVmYXVsdCBBcnRpY2xlO1xuIiwiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luXG5leHBvcnQge307IiwiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luXG5leHBvcnQge307Il0sIm5hbWVzIjpbIlJlYWN0IiwidXNlRWZmZWN0IiwiZ3NhcCIsIkdTQVBDb21wb25lbnQiLCJwcm9wcyIsImhlYWRlciIsImNyZWF0ZVJlZiIsInRvIiwiY3VycmVudCIsImNvbG9yIiwiZHVyYXRpb24iLCJyZWFjdERPTSIsImF4aW9zIiwicmVxdWlyZSIsIkFydGljbGUiLCJHc2FwIiwib3BlbiIsImNsb3NlIiwiY3NzIiwidGltZXJzIiwiYXBwIiwiaW5pdCIsImNvbnNvbGUiLCJsb2ciLCJlYXNlIiwieCIsIiQiLCJvbiIsInNjYWwiLCJzY2FsT2ZmIiwic2NhbGUiLCJib3hTaGFkb3ciLCJzZXQiLCJ6SW5kZXgiLCJCdXR0b24iLCJvbkNsaWNrIiwieHgiLCJhcnRpY2xlIiwiZXZ0IiwidGFyZ2V0IiwiaGFuZGxlQ2xpY2siLCJpZCIsIkNvbXBvbmVudCJdLCJzb3VyY2VSb290IjoiIn0=