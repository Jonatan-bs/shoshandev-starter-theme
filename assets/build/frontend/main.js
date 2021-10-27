/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/main.js":
/*!************************!*\
  !*** ./src/js/main.js ***!
  \************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _css_tailwind_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./../css/tailwind.scss */ \"./src/css/tailwind.scss\");\n/* harmony import */ var _css_main_scss__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./../css/main.scss */ \"./src/css/main.scss\");\n/* harmony import */ var _main_menu_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./main/menu.js */ \"./src/js/main/menu.js\");\n/* harmony import */ var _main_menu_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_main_menu_js__WEBPACK_IMPORTED_MODULE_2__);\n/* harmony import */ var _main_loadMore_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./main/loadMore.js */ \"./src/js/main/loadMore.js\");\n/* harmony import */ var _main_loadMore_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_main_loadMore_js__WEBPACK_IMPORTED_MODULE_3__);\n\n\n\n\n\n//# sourceURL=webpack://wordpress-template/./src/js/main.js?");

/***/ }),

/***/ "./src/js/main/loadMore.js":
/*!*********************************!*\
  !*** ./src/js/main/loadMore.js ***!
  \*********************************/
/***/ (() => {

eval("/**\n * Load more posts on click\n */\nlet sst_loadmore_button = document.querySelector('.sst_loadmore_button');\n\nif (sst_loadmore_button) {\n  sst_loadmore_button.addEventListener('click', async () => {\n    const data = {\n      action: 'sst_loadmore',\n      postType: sst_loadmore_button.dataset.postType,\n      postsCount: sst_loadmore_button.dataset.postsCount,\n      postsLoaded: sst_loadmore_button.dataset.postsLoaded,\n      postsPerLoad: sst_loadmore_button.dataset.postsPerLoad,\n      postsOrder: sst_loadmore_button.dataset.postsOrder\n    }; // Return if theres no more posts\n\n    if (Number(data.postsLoaded) >= Number(data.postsCount)) return console.log('No more posts');\n    fetch(sst_params.ajaxurl, {\n      method: 'POST',\n      credentials: 'same-origin',\n      body: new URLSearchParams(data)\n    }).then(response => response.json()).then(({\n      data: {\n        postsLoaded,\n        domObject\n      }\n    }) => {\n      // Update posts loaded count\n      sst_loadmore_button.dataset.postsLoaded = postsLoaded; // Append posts\n\n      sst_loadmore_button.closest('.sst_posts_grid').querySelector('.loadmoretarget').insertAdjacentHTML('beforeend', domObject); // Remove button if theres no more posts\n\n      if (Number(postsLoaded) >= Number(data.postsCount)) {\n        sst_loadmore_button.parentElement.removeChild(sst_loadmore_button);\n      }\n\n      return;\n    }).catch(error => {\n      console.log('Ajax error');\n      console.error(error);\n    });\n  });\n}\n\n//# sourceURL=webpack://wordpress-template/./src/js/main/loadMore.js?");

/***/ }),

/***/ "./src/js/main/menu.js":
/*!*****************************!*\
  !*** ./src/js/main/menu.js ***!
  \*****************************/
/***/ (() => {

eval("/**\n * Toggle mobile nav when bugermenu icon is clicked\n */\nconst mobileNav = document.querySelector('#toggle-nav');\n\nconst hideMenu = () => {\n  mobileNav.classList.remove('active');\n};\n\nconst showMenu = () => {\n  mobileNav.classList.add('active');\n};\n\ndocument.querySelector('#menu-burger').addEventListener('click', () => {\n  const isActive = mobileNav.classList.contains('active');\n\n  if (isActive) {\n    hideMenu();\n  } else {\n    showMenu();\n  }\n});\ndocument.querySelector('#menu-close').addEventListener('click', hideMenu); // Hide mobile nav on window resize\n\nwindow.addEventListener('resize', hideMenu);\n/**\n * Toggle mobile nav submenus\n */\n\nmobileNav.querySelectorAll('.menu-item-has-children').forEach(submenu => {\n  submenu.querySelector('a').addEventListener('click', e => {\n    if (e.target.classList.contains('arrow') && e.currentTarget.href) {\n      e.preventDefault();\n\n      if (submenu.classList.contains('active')) {\n        submenu.classList.remove('active');\n      } else {\n        submenu.classList.add('active');\n      }\n    } else {\n      if (submenu.classList.contains('active')) {\n        submenu.classList.remove('active');\n      } else {\n        submenu.classList.add('active');\n      }\n    }\n  });\n});\n\n//# sourceURL=webpack://wordpress-template/./src/js/main/menu.js?");

/***/ }),

/***/ "./src/css/main.scss":
/*!***************************!*\
  !*** ./src/css/main.scss ***!
  \***************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n\n\n//# sourceURL=webpack://wordpress-template/./src/css/main.scss?");

/***/ }),

/***/ "./src/css/tailwind.scss":
/*!*******************************!*\
  !*** ./src/css/tailwind.scss ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n\n\n//# sourceURL=webpack://wordpress-template/./src/css/tailwind.scss?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./src/js/main.js");
/******/ 	
/******/ })()
;