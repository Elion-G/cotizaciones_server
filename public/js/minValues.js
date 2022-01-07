/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***********************************!*\
  !*** ./resources/js/minValues.js ***!
  \***********************************/
window.valueValidation = function valueValidation() {
  var div = document.getElementById('minValues');
  var tds = div.getElementsByTagName('td');
  var section = document.getElementById("cotizaciones_section");
  var total_tds = section.getElementsByTagName("td");

  for (var i = 0; i < tds.length; i++) {
    var minValue = tds[i];

    for (var j = 0; j < total_tds.length; j++) {
      var element = total_tds[j];

      if (element.textContent == minValue.textContent) {
        element.style.background = '#008000';
        element.style.color = "#fff";
      }
    } // if (element.textContent == '6.780') {
    //     element.style.color = '#f00';
    // }

  } // $('td').each(function(i, item) {
  //     $(item).css('color', '#f00');
  // });

};
/******/ })()
;