!function (t, e) {
    "object" == typeof exports && "undefined" != typeof module ? e() : "function" == typeof define && define.amd ? define(e) : e()
}(this, function () {
    "use strict";

    function t(t, e) {
        return e = {exports: {}}, t(e, e.exports), e.exports
    }

    Array.from || (Array.from = function () {
        var t = Object.prototype.toString, e = function (e) {
            return "function" == typeof e || "[object Function]" === t.call(e)
        }, n = function (t) {
            var e = Number(t);
            return isNaN(e) ? 0 : 0 !== e && isFinite(e) ? (e > 0 ? 1 : -1) * Math.floor(Math.abs(e)) : e
        }, i = Math.pow(2, 53) - 1, a = function (t) {
            var e = n(t);
            return Math.min(Math.max(e, 0), i)
        };
        return function (t) {
            var n = this, i = Object(t);
            if (null == t) throw new TypeError("Array.from requires an array-like object - not null or undefined");
            var s, r = arguments.length > 1 ? arguments[1] : void 0;
            if ("undefined" != typeof r) {
                if (!e(r)) throw new TypeError("Array.from: when provided, the second argument must be a function");
                arguments.length > 2 && (s = arguments[2])
            }
            for (var o, l = a(i.length), d = e(n) ? Object(new n(l)) : new Array(l), u = 0; l > u;) o = i[u], r ? d[u] = "undefined" == typeof s ? r(o, u) : r.call(s, o, u) : d[u] = o, u += 1;
            return d.length = l, d
        }
    }());
    var e = "undefined" != typeof window ? window : "undefined" != typeof global ? global : "undefined" != typeof self ? self : {},
        n = t(function (t, n) {
            !function (e, n) {
                t.exports = n()
            }(e, function () {
                function t(t, e) {
                    if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
                }

                !function (t, e) {
                    var n = t.body || t.documentElement, i = n.style, a = "", s = "";
                    "" == i.WebkitAnimation && (a = "-webkit-"), "" == i.MozAnimation && (a = "-moz-"), "" == i.OAnimation && (a = "-o-"), "" == i.WebkitTransition && (s = "-webkit-"), "" == i.MozTransition && (s = "-moz-"), "" == i.OTransition && (s = "-o-"), Object.defineProperty(Object.prototype, "onCSSAnimationEnd", {
                        value: function (t) {
                            var e = function n(e) {
                                t(), e.target.removeEventListener(e.type, n)
                            };
                            return this.addEventListener("webkitAnimationEnd", e), this.addEventListener("mozAnimationEnd", e), this.addEventListener("oAnimationEnd", e), this.addEventListener("oanimationend", e), this.addEventListener("animationend", e), ("" != a || "animation" in i) && "0s" != getComputedStyle(this)[a + "animation-duration"] || t(), this
                        }, enumerable: !1, writable: !0
                    }), Object.defineProperty(Object.prototype, "onCSSTransitionEnd", {
                        value: function (t) {
                            var e = function n(e) {
                                t(), e.target.removeEventListener(e.type, n)
                            };
                            return this.addEventListener("webkitTransitionEnd", e), this.addEventListener("mozTransitionEnd", e), this.addEventListener("oTransitionEnd", e), this.addEventListener("transitionend", e), this.addEventListener("transitionend", e), ("" != s || "transition" in i) && "0s" != getComputedStyle(this)[s + "transition-duration"] || t(), this
                        }, enumerable: !1, writable: !0
                    })
                }(document, window, 0);
                var e = function () {
                    function t(t, e) {
                        for (var n = 0; n < e.length; n++) {
                            var i = e[n];
                            i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(t, i.key, i)
                        }
                    }

                    return function (e, n, i) {
                        return n && t(e.prototype, n), i && t(e, i), e
                    }
                }(), n = function () {
                    function n(e, i) {
                        t(this, n);
                        var a = document.querySelector(e);
                        if (null != a) {
                            var s = {
                                headerClass: ".js-badger-accordion-header",
                                panelClass: ".js-badger-accordion-panel",
                                panelInnerClass: ".js-badger-accordion-panel-inner",
                                hiddenClass: "-ba-is-hidden",
                                initalisedClass: "badger-accordion--initalised",
                                headerDataAttr: "data-badger-accordion-header-id",
                                openMultiplePanels: !1,
                                openHeadersOnLoad: [],
                                headerOpenLabel: "Open accordion panel",
                                headerCloseLabel: "Close accordion panel"
                            };
                            this.settings = Object.assign({}, s, i), this.container = a, this.headers = Array.from(this.container.querySelectorAll(this.settings.headerClass)), this.panels = Array.from(this.container.querySelectorAll(this.settings.panelClass)), this.toggleEl = void 0 !== this.settings.toggleEl ? Array.from(this.container.querySelectorAll(this.settings.toggleEl)) : this.headers, this.states = [].map.call(this.headers, function () {
                                return {state: "closed"}
                            }), this.ids = [].map.call(this.headers, function () {
                                return {id: Math.floor(1e6 * Math.random() + 1)}
                            }), this.toggling = !1, this.container ? this.init() : console.log("Something is wrong with you markup...")
                        }
                    }

                    return e(n, [{
                        key: "init", value: function () {
                            this._setupAttributes(), this._initalState(), this._setPanelHeight(), this._insertDataAttrs(), this._addListeners(), this._finishInitalisation()
                        }
                    }, {
                        key: "_initalState", value: function () {
                            var t = this.settings.openHeadersOnLoad;
                            t.length && this._openHeadersOnLoad(t), this._renderDom()
                        }
                    }, {
                        key: "_insertDataAttrs", value: function () {
                            var t = this;
                            this.headers.forEach(function (e, n) {
                                e.setAttribute(t.settings.headerDataAttr, n)
                            })
                        }
                    }, {
                        key: "_finishInitalisation", value: function () {
                            this.container.classList.add(this.settings.initalisedClass)
                        }
                    }, {
                        key: "_addListeners", value: function () {
                            var t = this;
                            this.headers.forEach(function (e, n) {
                                e.addEventListener("click", function () {
                                    t.handleClick(e, n)
                                })
                            })
                        }
                    }, {
                        key: "handleClick", value: function (t, e) {
                            var n = this.settings.headerClass.substr(1);
                            t.classList.contains(n) && this.toggling === !1 && (this.toggling = !0, this.setState(e), this._renderDom())
                        }
                    }, {
                        key: "setState", value: function (t) {
                            var e = this, n = this.getState();
                            this.settings.openMultiplePanels || n.filter(function (e, n) {
                                n != t && (e.state = "closed")
                            }), n.filter(function (n, i) {
                                if (i == t) {
                                    var a = e.toggleState(n.state);
                                    return n.state = a
                                }
                            })
                        }
                    }, {
                        key: "_renderDom", value: function () {
                            var t = this;
                            this.states.filter(function (e, n) {
                                "open" === e.state && t.open(n)
                            }), this.states.filter(function (e, n) {
                                "closed" === e.state && t.close(n)
                            })
                        }
                    }, {
                        key: "open", value: function (t) {
                            this.togglePanel("open", t)
                        }
                    }, {
                        key: "close", value: function (t) {
                            this.togglePanel("closed", t)
                        }
                    }, {
                        key: "openAll", value: function () {
                            var t = this;
                            this.headers.forEach(function (e) {
                                t.togglePanel("open", e)
                            })
                        }
                    }, {
                        key: "closeAll", value: function () {
                            var t = this;
                            this.headers.forEach(function (e) {
                                t.togglePanel("closed", e)
                            })
                        }
                    }, {
                        key: "togglePanel", value: function (t, e) {
                            var n = this;
                            if (void 0 !== t && void 0 !== e) if ("closed" === t) {
                                var i = this.headers[e], a = this.panels[e];
                                a.classList.add(this.settings.hiddenClass), i.setAttribute("aria-expanded", !1), i.setAttribute("aria-label", this.settings.headerOpenLabel), a.onCSSTransitionEnd(function () {
                                    return n.toggling = !1
                                })
                            } else if ("open" === t) {
                                var s = this.headers[e], r = this.panels[e];
                                r.classList.remove(this.settings.hiddenClass), s.setAttribute("aria-expanded", !0), s.setAttribute("aria-label", this.settings.headerCloseLabel), r.onCSSTransitionEnd(function () {
                                    return n.toggling = !1
                                })
                            }
                        }
                    }, {
                        key: "getState", value: function () {
                            var t = this, e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : [];
                            if (e.length && Array.isArray(e)) {
                                var n = e.map(function (e) {
                                    return t.states[e]
                                });
                                return n
                            }
                            return this.states
                        }
                    }, {
                        key: "toggleState", value: function (t) {
                            return void 0 !== t ? "closed" === t ? "open" : "closed" : void 0
                        }
                    }, {
                        key: "_openHeadersOnLoad", value: function () {
                            var t = this, e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : [];
                            if (e.length && Array.isArray(e)) {
                                var n = e.filter(function (t) {
                                    return void 0 != t
                                });
                                n.forEach(function (e) {
                                    return t.states[e].state = "open"
                                })
                            }
                        }
                    }, {
                        key: "_setPanelHeight", value: function () {
                            var t = this;
                            this.panels.forEach(function (e) {
                                var n = e.querySelector(t.settings.panelInnerClass), i = n.offsetHeight;
                                return e.style.maxHeight = i + "px"
                            })
                        }
                    }, {
                        key: "_setupHeaders", value: function () {
                            var t = this;
                            this.headers.forEach(function (e, n) {
                                e.setAttribute("id", "badger-accordion-header-" + t.ids[n].id), e.setAttribute("aria-controls", "badger-accordion-panel-" + t.ids[n].id), e.setAttribute("aria-label", t.settings.headerOpenLabel)
                            })
                        }
                    }, {
                        key: "_setupPanels", value: function () {
                            var t = this;
                            this.panels.forEach(function (e, n) {
                                e.setAttribute("id", "badger-accordion-panel-" + t.ids[n].id), e.setAttribute("aria-labeledby", "badger-accordion-header-" + t.ids[n].id)
                            })
                        }
                    }, {
                        key: "_setupAttributes", value: function () {
                            this._setupHeaders(), this._setupPanels(), this._insertDataAttrs()
                        }
                    }]), n
                }();
                return n
            })
        });
    new n(".js-badger-accordion")
});
