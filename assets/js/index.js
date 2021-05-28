/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/classes/Faq.ts":
/*!****************************!*\
  !*** ./src/classes/Faq.ts ***!
  \****************************/
/***/ (function(__unused_webpack_module, exports, __webpack_require__) {


var __spreadArray = (this && this.__spreadArray) || function (to, from) {
    for (var i = 0, il = from.length, j = to.length; i < il; i++, j++)
        to[j] = from[i];
    return to;
};
Object.defineProperty(exports, "__esModule", ({ value: true }));
var Question_1 = __webpack_require__(/*! ./Question */ "./src/classes/Question.ts");
var Faq = /** @class */ (function () {
    function Faq(node) {
        this.questions = [];
        this.node = node;
        var questions = node.getElementsByClassName("c-faq__question");
        for (var i = 0; i < questions.length; i++) {
            var question = questions[i];
            this.questions = __spreadArray(__spreadArray([], this.questions), [new Question_1.default(question)]);
        }
        this.attachEventListeners();
    }
    Faq.prototype.closeAllMenus = function () {
        this.questions.forEach(function (q) {
            q.hide();
        });
    };
    Faq.prototype.attachEventListeners = function () {
        var _this = this;
        this.questions.forEach(function (q) {
            q.node.addEventListener("click", function () {
                console.log("click");
                console.log(q.isShowing);
                if (q.isShowing) {
                    _this.closeAllMenus();
                }
                else {
                    _this.closeAllMenus();
                    q.show();
                }
            });
        });
    };
    return Faq;
}());
exports.default = Faq;


/***/ }),

/***/ "./src/classes/Question.ts":
/*!*********************************!*\
  !*** ./src/classes/Question.ts ***!
  \*********************************/
/***/ ((__unused_webpack_module, exports) => {


Object.defineProperty(exports, "__esModule", ({ value: true }));
var Question = /** @class */ (function () {
    function Question(node) {
        this.node = node;
        var answers = this.node.parentElement.getElementsByClassName("c-faq__answer");
        if (answers) {
            this.answer = answers[0];
        }
    }
    Object.defineProperty(Question.prototype, "isShowing", {
        get: function () {
            if (this.answer.style.maxHeight) {
                return true;
            }
            return false;
        },
        enumerable: false,
        configurable: true
    });
    Question.prototype.show = function () {
        this.answer.style.maxHeight = this.answer.scrollHeight + "px";
    };
    Question.prototype.hide = function () {
        this.answer.style.maxHeight = null;
    };
    return Question;
}());
exports.default = Question;


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
/******/ 		__webpack_modules__[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
var exports = __webpack_exports__;
/*!**********************!*\
  !*** ./src/index.ts ***!
  \**********************/

Object.defineProperty(exports, "__esModule", ({ value: true }));
var Faq_1 = __webpack_require__(/*! ./classes/Faq */ "./src/classes/Faq.ts");
var hamburgerMenu = document.getElementsByClassName("c-hamburger__menu")[0];
var hamburgerButton = document.getElementsByClassName("c-hamburger__button")[0];
var body = document.getElementsByTagName("body")[0];
var hamburgerClose = document.getElementsByClassName("c-hamburger__close")[0];
hamburgerButton.addEventListener("click", function () {
    console.log(hamburgerMenu.classList);
    hamburgerMenu.classList.add("show");
    body.classList.add("no-scroll");
});
hamburgerClose.addEventListener("click", function () {
    hamburgerMenu.classList.remove("show");
    body.classList.remove("no-scroll");
});
var faqs = document.getElementsByClassName("c-faq");
for (var i = 0; i < faqs.length; i++) {
    var faq = faqs[i];
    new Faq_1.default(faq);
}

})();

/******/ })()
;
//# sourceMappingURL=index.js.map