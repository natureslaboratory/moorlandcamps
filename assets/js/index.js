(()=>{"use strict";var e={912:function(e,t,s){var n=this&&this.__spreadArray||function(e,t){for(var s=0,n=t.length,o=e.length;s<n;s++,o++)e[o]=t[s];return e};Object.defineProperty(t,"__esModule",{value:!0});var o=s(453),r=function(){function e(e){this.questions=[],this.node=e;for(var t=e.getElementsByClassName("c-faq__question"),s=0;s<t.length;s++){var r=t[s];this.questions=n(n([],this.questions),[new o.default(r)])}this.attachEventListeners()}return e.prototype.closeAllMenus=function(){this.questions.forEach((function(e){e.hide()}))},e.prototype.attachEventListeners=function(){var e=this;this.questions.forEach((function(t){t.node.addEventListener("click",(function(){console.log("click"),console.log(t.isShowing),t.isShowing?e.closeAllMenus():(e.closeAllMenus(),t.show())}))}))},e}();t.default=r},453:(e,t)=>{Object.defineProperty(t,"__esModule",{value:!0});var s=function(){function e(e){this.node=e;var t=this.node.parentElement.getElementsByClassName("c-faq__answer");t&&(this.answer=t[0])}return Object.defineProperty(e.prototype,"isShowing",{get:function(){return!!this.answer.style.maxHeight},enumerable:!1,configurable:!0}),e.prototype.show=function(){this.answer.style.maxHeight=this.answer.scrollHeight+"px"},e.prototype.hide=function(){this.answer.style.maxHeight=null},e}();t.default=s}},t={};function s(n){var o=t[n];if(void 0!==o)return o.exports;var r=t[n]={exports:{}};return e[n].call(r.exports,r,r.exports,s),r.exports}(()=>{var e=s(912),t=document.getElementsByClassName("c-hamburger__menu")[0],n=document.getElementsByClassName("c-hamburger__button")[0],o=document.getElementsByTagName("body")[0],r=document.getElementsByClassName("c-hamburger__close")[0];n.addEventListener("click",(function(){console.log(t.classList),t.classList.add("show"),o.classList.add("no-scroll")})),r.addEventListener("click",(function(){t.classList.remove("show"),o.classList.remove("no-scroll")}));for(var i=document.getElementsByClassName("c-faq"),a=0;a<i.length;a++){var l=i[a];new e.default(l)}})()})();
//# sourceMappingURL=index.js.map