webpackJsonp([2],{

/***/ 46:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(47);


/***/ }),

/***/ 47:
/***/ (function(module, exports) {


// Highlight current active page
var header = document.getElementById("menu");
var btns = header.getElementsByClassName("btn-menu");

for (var i = 0; i < btns.length; i++) {
   btns[i].addEventListener("click", function () {
      var current = document.getElementsByClassName("active");

      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
   });
}

/***/ })

},[46]);