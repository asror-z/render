!function(t){var s={};function e(n){if(s[n])return s[n].exports;var i=s[n]={i:n,l:!1,exports:{}};return t[n].call(i.exports,i,i.exports,e),i.l=!0,i.exports}e.m=t,e.c=s,e.d=function(t,s,n){e.o(t,s)||Object.defineProperty(t,s,{enumerable:!0,get:n})},e.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},e.t=function(t,s){if(1&s&&(t=e(t)),8&s)return t;if(4&s&&"object"==typeof t&&t&&t.__esModule)return t;var n=Object.create(null);if(e.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:t}),2&s&&"string"!=typeof t)for(var i in t)e.d(n,i,function(s){return t[s]}.bind(null,i));return n},e.n=function(t){var s=t&&t.__esModule?function(){return t.default}:function(){return t};return e.d(s,"a",s),s},e.o=function(t,s){return Object.prototype.hasOwnProperty.call(t,s)},e.p="",e(e.s=0)}([function(t,s,e){"use strict";e.r(s);var n,i={hooks:{},scroll:{pin:0,unpin:0,tolerance:5}};class o{constructor(t,s=o.options){this.header="string"==typeof t?document.querySelector(t):t,t&&(this.opts=Object.assign(s,o.options),this.initHooks(),this.initScroll())}initScroll(){if(!this.opts.scroll||!1===this.opts.scroll.unpin)return;this.header.classList.add("mh-sticky");var t=2*this.header.offsetHeight;this.opts.scroll.unpin=Math.max(t,this.opts.scroll.unpin||0),this.opts.scroll.pin=Math.max(t,this.opts.scroll.pin||0),this.state=null;var s=0;const e=(t={})=>{var e=document.documentElement.scrollTop||document.body.scrollTop,n=s-e,i=n<0?"down":"up";n=Math.abs(n),s=e,this.state==o.UNPINNED?"up"==i&&(e<this.opts.scroll.pin||n>this.opts.scroll.tolerance)&&this.pin():this.state==o.PINNED?"down"==i&&e>this.opts.scroll.unpin&&n>this.opts.scroll.tolerance&&this.unpin():this.pin()};window.addEventListener("scroll",e,{passive:!0}),e()}pin(){this.header.classList.add("mh-pinned"),this.header.classList.remove("mh-unpinned"),this.state=o.PINNED,this.trigger("pinned")}unpin(){this.header.classList.remove("mh-pinned"),this.header.classList.add("mh-unpinned"),this.state=o.UNPINNED,this.trigger("unpinned")}initHooks(){this.hooks={};for(let t in this.opts.hooks)this.bind(t,this.opts.hooks[t])}bind(t,s){this.hooks[t]=this.hooks[t]||[],this.hooks[t].push(s)}trigger(t,s){if(this.hooks[t])for(var e=0,n=this.hooks[t].length;e<n;e++)this.hooks[t][e].apply(this,s)}}o.version="2.0.0",o.options=i,o.PINNED="pinned",o.UNPINNED="unpinned",
/*!
 * mhead.js
 * mmenu.frebsite.nl/mhead-plugin
 *
 * Copyright (c) Fred Heusschen
 * www.frebsite.nl
 *
 * License: CC-BY-4.0
 * http://creativecommons.org/licenses/by/4.0/
 */
window.Mhead=o,(n=window.jQuery||window.Zepto||null)&&(n.fn.mhead=function(t){return this.each((s,e)=>{new o(e,t)})})}]);