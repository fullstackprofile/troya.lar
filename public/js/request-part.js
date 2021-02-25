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
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/main/request-part.js":
/*!*******************************************!*\
  !*** ./resources/js/main/request-part.js ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  $('select').styler();
  $('.choose-country-cont').click(function () {
    $('.choose-country').toggleClass("active");
  });
  $('.choose-country-drop > div').click(function () {
    $(".main-form input[name='phone']").removeAttr('class');
    $('.choose-country').removeClass("active");
    var choose_class = $(this).attr("data-target");
    var choose = $(this).html();
    $('.choose-country-cont').html(choose);
    $(".main-form input[name='phone']").addClass(choose_class);
    $(function () {
      $.mask.definitions['~'] = "[+-]";
      $("input.ru").mask("+ 7 (999) 999 99 99").attr("placeholder", "+ 7 926 000 10 10");
      $("input.uk").mask("+38 099 999 99 99").attr("placeholder", "+38 050 253 19 27");
      $("input.bel").mask("+375 99 999999").attr("placeholder", "+375 17 531927");
      $("input").blur(function () {
        $("#info").html("Unmasked value: " + $(this).mask());
      }).dblclick(function () {
        $(this).unmask();
      });
    });
  });
  $(function () {
    $.mask.definitions['~'] = "[+-]";
    $("input.ru").mask("+ 7 (999) 999 99 99");
    $("input.uk").mask("+38 099 999 99 99");
    $("input.bel").mask("+375 99 999999");
    $("input").blur(function () {// todo: need to check where this functionality is used!
      // $("#info").html("Unmasked value: " + $(this).mask());
    }).dblclick(function () {
      $(this).unmask();
    });
    $('#tabs1.tabs-con').addClass("active");
    $('.clients-requests-content.view-request #tabs1.tabs-con').removeClass("active");
    $('.clients-requests-content.view-request #tabs2.tabs-con').addClass("active");
  });
  $('.tabs-nav').on('click', 'li:not(.active)', function () {
    $(this).addClass('active').siblings().removeClass('active').closest('div.tabs-nav').find('div.tab-content').removeClass('active').eq($(this).index()).addClass("active");
  });
  /* toggle */

  $('.toggle').click(function () {
    var toggle_id = $('#' + $(this).attr("data-target"));
    $(this).toggleClass("active");
    $(toggle_id).toggleClass("active");
  });
  /* toggle */

  /* Tabs */

  $('.tabs-navigation li a').click(function () {
    var tabs_id = $('#' + $(this).attr("data-target"));
    $(this).closest("ul").find("li").removeClass("active");
    $(this).closest(".tabs").find(">.tabs-con").removeClass("active");
    $('.del-active .tabs-con').removeClass("active");
    $(this).parent().addClass("active");
    $(tabs_id).addClass("active");
  });
  /* Tabs */

  /* Checkbox */

  $("#check-all-eng").click(function () {
    $(".checkbox-eng").prop('checked', $(this).prop('checked'));
  });
  /* Checkbox */

  /* Datepicker */

  $(function () {
    var reg = 'ru'; // 'uk' // todo: need to check where we get the region parameter from

    $.datepicker.setDefaults($.datepicker.regional[reg]);
    $(".set-datepicker").datepicker();
  });
  /* Client request page */

  /* Event tap */

  $('.event-select-status').on('change', function () {
    var val = $(this).val();

    if (val && val !== '') {
      $('.status-custom').hide();
      $("#psrequest_status_new_form .status-custom.status-".concat(val)).show();
    }
  });
  $('#psrequest_status_new_form .select-upload-option').on('change', function () {
    var val = $(this).val();

    if (val && val !== "") {
      $(this).parent().parent('.field').children('.file-option').hide();
      $(this).parent().parent('.field').children(".file-option.file-option-".concat(val)).show();
    }
  });
  $('.toggle-create-directory').on('click', function (e) {
    e.preventDefault();
    $('.new-directory').toggle();
  });
  $('.toggle-upload-file').on('click', function (e) {
    e.preventDefault();
    $('.project_files_form').toggle();
  });
});

/***/ }),

/***/ 2:
/*!*************************************************!*\
  !*** multi ./resources/js/main/request-part.js ***!
  \*************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! E:\OpenServer\domains\troya.lar\resources\js\main\request-part.js */"./resources/js/main/request-part.js");


/***/ })

/******/ });