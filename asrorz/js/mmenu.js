!(function (e) {
    var t = {};
    function n(i) {
        if (t[i]) return t[i].exports;
        var s = (t[i] = { i: i, l: !1, exports: {} });
        return e[i].call(s.exports, s, s.exports, n), (s.l = !0), s.exports;
    }
    (n.m = e),
        (n.c = t),
        (n.d = function (e, t, i) {
            n.o(e, t) || Object.defineProperty(e, t, { enumerable: !0, get: i });
        }),
        (n.r = function (e) {
            "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, { value: "Module" }), Object.defineProperty(e, "__esModule", { value: !0 });
        }),
        (n.t = function (e, t) {
            if ((1 & t && (e = n(e)), 8 & t)) return e;
            if (4 & t && "object" == typeof e && e && e.__esModule) return e;
            var i = Object.create(null);
            if ((n.r(i), Object.defineProperty(i, "default", { enumerable: !0, value: e }), 2 & t && "string" != typeof e))
                for (var s in e)
                    n.d(
                        i,
                        s,
                        function (t) {
                            return e[t];
                        }.bind(null, s)
                    );
            return i;
        }),
        (n.n = function (e) {
            var t =
                e && e.__esModule
                    ? function () {
                        return e.default;
                    }
                    : function () {
                        return e;
                    };
            return n.d(t, "a", t), t;
        }),
        (n.o = function (e, t) {
            return Object.prototype.hasOwnProperty.call(e, t);
        }),
        (n.p = ""),
        n((n.s = 1));
})([
    function (e) {
        e.exports = JSON.parse('{"a":"8.5.13"}');
    },
    function (e, t, n) {
        "use strict";
        n.r(t);
        var i = n(0),
            s = { hooks: {}, extensions: [], wrappers: [], navbar: { add: !0, sticky: !0, title: "Menu", titleLink: "parent" }, onClick: { close: null, preventDefault: null, setSelected: !0 }, slidingSubmenus: !0 },
            a = {
                classNames: { inset: "Inset", nolistview: "NoListview", nopanel: "NoPanel", panel: "Panel", selected: "Selected", vertical: "Vertical" },
                language: null,
                openingInterval: 25,
                panelNodetype: ["ul", "ol", "div"],
                transitionDuration: 400,
            };
        function o(e, t) {
            for (var n in ("object" != r(e) && (e = {}), "object" != r(t) && (t = {}), t)) t.hasOwnProperty(n) && (void 0 === e[n] ? (e[n] = t[n]) : "object" == r(e[n]) && o(e[n], t[n]));
            return e;
        }
        function r(e) {
            return {}.toString
                .call(e)
                .match(/\s([a-zA-Z]+)/)[1]
                .toLowerCase();
        }
        function c(e, t, n) {
            if ("function" == typeof t) {
                var i = t.call(e);
                if (void 0 !== i) return i;
            }
            return (null !== t && "function" != typeof t && void 0 !== t) || void 0 === n ? t : n;
        }
        function m(e, t, n) {
            var i = !1,
                s = function (n) {
                    (void 0 !== n && n.target !== e) || (i || (e.removeEventListener("transitionend", s), e.removeEventListener("webkitTransitionEnd", s), t.call(e)), (i = !0));
                };
            e.addEventListener("transitionend", s), e.addEventListener("webkitTransitionEnd", s), setTimeout(s, 1.1 * n);
        }
        function l() {
            return "mm-" + d++;
        }
        var d = 0;
        function p(e) {
            return "mm-" == e.slice(0, 3) ? e.slice(3) : e;
        }
        var u = {};
        function f(e, t) {
            void 0 === u[t] && (u[t] = {}), o(u[t], e);
        }
        var h = { Menu: "منو" },
            v = { Menu: "Menü" },
            b = { Menu: "Меню" };
        function g(e) {
            var t = e.split("."),
                n = document.createElement(t.shift());
            return (
                t.forEach(function (e) {
                    n.classList.add(e);
                }),
                    n
            );
        }
        function _(e, t) {
            return Array.prototype.slice.call(e.querySelectorAll(t));
        }
        function y(e, t) {
            var n = Array.prototype.slice.call(e.children);
            return t
                ? n.filter(function (e) {
                    return e.matches(t);
                })
                : n;
        }
        function L(e, t) {
            for (var n = [], i = e.parentElement; i; ) n.push(i), (i = i.parentElement);
            return t
                ? n.filter(function (e) {
                    return e.matches(t);
                })
                : n;
        }
        function w(e) {
            return e.filter(function (e) {
                return !e.matches(".mm-hidden");
            });
        }
        function E(e) {
            var t = [];
            return (
                w(e).forEach(function (e) {
                    t.push.apply(t, y(e, "a.mm-listitem__text"));
                }),
                    t.filter(function (e) {
                        return !e.matches(".mm-btn_next");
                    })
            );
        }
        function x(e, t, n) {
            e.matches("." + t) && (e.classList.remove(t), e.classList.add(n));
        }
        var P = {};
        function k(e, t, n) {
            "number" == typeof e && (e = "(min-width: " + e + "px)"), (P[e] = P[e] || []), P[e].push({ yes: t, no: n });
        }
        function S(e, t) {
            for (var n = t.matches ? "yes" : "no", i = 0; i < P[e].length; i++) P[e][i][n]();
        }
        f({ Menu: "Menu" }, "nl"), f(h, "fa"), f(v, "de"), f(b, "ru");
        var M = (function () {
                function e(t, n, i) {
                    return (
                        (this.opts = o(n, e.options)),
                            (this.conf = o(i, e.configs)),
                            (this._api = ["bind", "initPanel", "initListview", "openPanel", "closePanel", "closeAllPanels", "setSelected"]),
                            (this.node = {}),
                            (this.vars = {}),
                            (this.hook = {}),
                            (this.clck = []),
                            (this.node.menu = "string" == typeof t ? document.querySelector(t) : t),
                        "function" == typeof this._deprecatedWarnings && this._deprecatedWarnings(),
                            this._initWrappers(),
                            this._initAddons(),
                            this._initExtensions(),
                            this._initHooks(),
                            this._initAPI(),
                            this._initMenu(),
                            this._initPanels(),
                            this._initOpened(),
                            this._initAnchors(),
                            (function () {
                                var e = function (e) {
                                    var t = window.matchMedia(e);
                                    S(e, t),
                                        (t.onchange = function (n) {
                                            S(e, t);
                                        });
                                };
                                for (var t in P) e(t);
                            })(),
                            this
                    );
                }
                return (
                    (e.prototype.openPanel = function (e, t) {
                        var n = this;
                        if ((this.trigger("openPanel:before", [e]), e && (e.matches(".mm-panel") || (e = e.closest(".mm-panel")), e))) {
                            if (("boolean" != typeof t && (t = !0), e.parentElement.matches(".mm-listitem_vertical"))) {
                                L(e, ".mm-listitem_vertical").forEach(function (e) {
                                    e.classList.add("mm-listitem_opened"),
                                        y(e, ".mm-panel").forEach(function (e) {
                                            e.classList.remove("mm-hidden");
                                        });
                                });
                                var i = L(e, ".mm-panel").filter(function (e) {
                                    return !e.parentElement.matches(".mm-listitem_vertical");
                                });
                                this.trigger("openPanel:start", [e]), i.length && this.openPanel(i[0]), this.trigger("openPanel:finish", [e]);
                            } else {
                                if (e.matches(".mm-panel_opened")) return;
                                var s = y(this.node.pnls, ".mm-panel"),
                                    a = y(this.node.pnls, ".mm-panel_opened")[0];
                                s.filter(function (t) {
                                    return t !== e;
                                }).forEach(function (e) {
                                    e.classList.remove("mm-panel_opened-parent");
                                });
                                for (var o = e.mmParent; o; ) (o = o.closest(".mm-panel")) && (o.parentElement.matches(".mm-listitem_vertical") || o.classList.add("mm-panel_opened-parent"), (o = o.mmParent));
                                s.forEach(function (e) {
                                    e.classList.remove("mm-panel_highest");
                                }),
                                    s
                                        .filter(function (e) {
                                            return e !== a;
                                        })
                                        .filter(function (t) {
                                            return t !== e;
                                        })
                                        .forEach(function (e) {
                                            e.classList.add("mm-hidden");
                                        }),
                                    e.classList.remove("mm-hidden");
                                var r = function () {
                                        a && a.classList.remove("mm-panel_opened"),
                                            e.classList.add("mm-panel_opened"),
                                            e.matches(".mm-panel_opened-parent")
                                                ? (a && a.classList.add("mm-panel_highest"), e.classList.remove("mm-panel_opened-parent"))
                                                : (a && a.classList.add("mm-panel_opened-parent"), e.classList.add("mm-panel_highest")),
                                            n.trigger("openPanel:start", [e]);
                                    },
                                    c = function () {
                                        a && (a.classList.remove("mm-panel_highest"), a.classList.add("mm-hidden")), e.classList.remove("mm-panel_highest"), n.trigger("openPanel:finish", [e]);
                                    };
                                t && !e.matches(".mm-panel_noanimation")
                                    ? setTimeout(function () {
                                        m(
                                            e,
                                            function () {
                                                c();
                                            },
                                            n.conf.transitionDuration
                                        ),
                                            r();
                                    }, this.conf.openingInterval)
                                    : (r(), c());
                            }
                            this.trigger("openPanel:after", [e]);
                        }
                    }),
                        (e.prototype.closePanel = function (e) {
                            this.trigger("closePanel:before", [e]);
                            var t = e.parentElement;
                            t.matches(".mm-listitem_vertical") && (t.classList.remove("mm-listitem_opened"), e.classList.add("mm-hidden"), this.trigger("closePanel", [e])), this.trigger("closePanel:after", [e]);
                        }),
                        (e.prototype.closeAllPanels = function (e) {
                            this.trigger("closeAllPanels:before"),
                                this.node.pnls.querySelectorAll(".mm-listitem").forEach(function (e) {
                                    e.classList.remove("mm-listitem_selected"), e.classList.remove("mm-listitem_opened");
                                });
                            var t = y(this.node.pnls, ".mm-panel"),
                                n = e || t[0];
                            y(this.node.pnls, ".mm-panel").forEach(function (e) {
                                e !== n && (e.classList.remove("mm-panel_opened"), e.classList.remove("mm-panel_opened-parent"), e.classList.remove("mm-panel_highest"), e.classList.add("mm-hidden"));
                            }),
                                this.openPanel(n, !1),
                                this.trigger("closeAllPanels:after");
                        }),
                        (e.prototype.togglePanel = function (e) {
                            var t = e.parentElement;
                            t.matches(".mm-listitem_vertical") && this[t.matches(".mm-listitem_opened") ? "closePanel" : "openPanel"](e);
                        }),
                        (e.prototype.setSelected = function (e) {
                            this.trigger("setSelected:before", [e]),
                                _(this.node.menu, ".mm-listitem_selected").forEach(function (e) {
                                    e.classList.remove("mm-listitem_selected");
                                }),
                                e.classList.add("mm-listitem_selected"),
                                this.trigger("setSelected:after", [e]);
                        }),
                        (e.prototype.bind = function (e, t) {
                            (this.hook[e] = this.hook[e] || []), this.hook[e].push(t);
                        }),
                        (e.prototype.trigger = function (e, t) {
                            if (this.hook[e]) for (var n = 0, i = this.hook[e].length; n < i; n++) this.hook[e][n].apply(this, t);
                        }),
                        (e.prototype._initAPI = function () {
                            var e = this,
                                t = this;
                            (this.API = {}),
                                this._api.forEach(function (n) {
                                    e.API[n] = function () {
                                        var e = t[n].apply(t, arguments);
                                        return void 0 === e ? t.API : e;
                                    };
                                }),
                                (this.node.menu.mmApi = this.API);
                        }),
                        (e.prototype._initHooks = function () {
                            for (var e in this.opts.hooks) this.bind(e, this.opts.hooks[e]);
                        }),
                        (e.prototype._initWrappers = function () {
                            this.trigger("initWrappers:before");
                            for (var t = 0; t < this.opts.wrappers.length; t++) {
                                var n = e.wrappers[this.opts.wrappers[t]];
                                "function" == typeof n && n.call(this);
                            }
                            this.trigger("initWrappers:after");
                        }),
                        (e.prototype._initAddons = function () {
                            for (var t in (this.trigger("initAddons:before"), e.addons)) e.addons[t].call(this);
                            this.trigger("initAddons:after");
                        }),
                        (e.prototype._initExtensions = function () {
                            var e = this;
                            this.trigger("initExtensions:before"),
                            "array" == r(this.opts.extensions) && (this.opts.extensions = { all: this.opts.extensions }),
                                Object.keys(this.opts.extensions).forEach(function (t) {
                                    var n = e.opts.extensions[t].map(function (e) {
                                        return "mm-menu_" + e;
                                    });
                                    n.length &&
                                    k(
                                        t,
                                        function () {
                                            n.forEach(function (t) {
                                                e.node.menu.classList.add(t);
                                            });
                                        },
                                        function () {
                                            n.forEach(function (t) {
                                                e.node.menu.classList.remove(t);
                                            });
                                        }
                                    );
                                }),
                                this.trigger("initExtensions:after");
                        }),
                        (e.prototype._initMenu = function () {
                            var e = this;
                            this.trigger("initMenu:before"), (this.node.wrpr = this.node.wrpr || this.node.menu.parentElement), this.node.wrpr.classList.add("mm-wrapper"), (this.node.menu.id = this.node.menu.id || l());
                            var t = g("div.mm-panels");
                            y(this.node.menu).forEach(function (n) {
                                e.conf.panelNodetype.indexOf(n.nodeName.toLowerCase()) > -1 && t.append(n);
                            }),
                                this.node.menu.append(t),
                                (this.node.pnls = t),
                                this.node.menu.classList.add("mm-menu"),
                                this.trigger("initMenu:after");
                        }),
                        (e.prototype._initPanels = function () {
                            var e = this;
                            this.trigger("initPanels:before"),
                                this.clck.push(function (t, n) {
                                    if (n.inMenu) {
                                        var i = t.getAttribute("href");
                                        if (i && i.length > 1 && "#" == i.slice(0, 1))
                                            try {
                                                var s = _(e.node.menu, i)[0];
                                                if (s && s.matches(".mm-panel")) return t.parentElement.matches(".mm-listitem_vertical") ? e.togglePanel(s) : e.openPanel(s), !0;
                                            } catch (e) {}
                                    }
                                }),
                                y(this.node.pnls).forEach(function (t) {
                                    e.initPanel(t);
                                }),
                                this.trigger("initPanels:after");
                        }),
                        (e.prototype.initPanel = function (e) {
                            var t = this,
                                n = this.conf.panelNodetype.join(", ");
                            if (e.matches(n) && (e.matches(".mm-panel") || (e = this._initPanel(e)), e)) {
                                var i = [];
                                i.push.apply(i, y(e, "." + this.conf.classNames.panel)),
                                    y(e, ".mm-listview").forEach(function (e) {
                                        y(e, ".mm-listitem").forEach(function (e) {
                                            i.push.apply(i, y(e, n));
                                        });
                                    }),
                                    i.forEach(function (e) {
                                        t.initPanel(e);
                                    });
                            }
                        }),
                        (e.prototype._initPanel = function (e) {
                            var t = this;
                            if (
                                (this.trigger("initPanel:before", [e]),
                                    x(e, this.conf.classNames.panel, "mm-panel"),
                                    x(e, this.conf.classNames.nopanel, "mm-nopanel"),
                                    x(e, this.conf.classNames.inset, "mm-listview_inset"),
                                e.matches(".mm-listview_inset") && e.classList.add("mm-nopanel"),
                                    e.matches(".mm-nopanel"))
                            )
                                return null;
                            var n = e.id || l(),
                                i = e.matches("." + this.conf.classNames.vertical) || !this.opts.slidingSubmenus;
                            if ((e.classList.remove(this.conf.classNames.vertical), e.matches("ul, ol"))) {
                                e.removeAttribute("id");
                                var s = g("div");
                                e.before(s), s.append(e), (e = s);
                            }
                            (e.id = n), e.classList.add("mm-panel"), e.classList.add("mm-hidden");
                            var a = [e.parentElement].filter(function (e) {
                                return e.matches("li");
                            })[0];
                            if ((i ? a && a.classList.add("mm-listitem_vertical") : this.node.pnls.append(e), a && ((a.mmChild = e), (e.mmParent = a), a && a.matches(".mm-listitem") && !y(a, ".mm-btn").length))) {
                                var o = y(a, ".mm-listitem__text")[0];
                                if (o) {
                                    var r = g("a.mm-btn.mm-btn_next.mm-listitem__btn");
                                    r.setAttribute("href", "#" + e.id),
                                        o.matches("span") ? (r.classList.add("mm-listitem__text"), (r.innerHTML = o.innerHTML), a.insertBefore(r, o.nextElementSibling), o.remove()) : a.insertBefore(r, y(a, ".mm-panel")[0]);
                                }
                            }
                            return (
                                this._initNavbar(e),
                                    y(e, "ul, ol").forEach(function (e) {
                                        t.initListview(e);
                                    }),
                                    this.trigger("initPanel:after", [e]),
                                    e
                            );
                        }),
                        (e.prototype._initNavbar = function (e) {
                            if ((this.trigger("initNavbar:before", [e]), !y(e, ".mm-navbar").length)) {
                                var t = null,
                                    n = null;
                                if ((e.getAttribute("data-mm-parent") ? (n = _(this.node.pnls, e.getAttribute("data-mm-parent"))[0]) : (t = e.mmParent) && (n = t.closest(".mm-panel")), !t || !t.matches(".mm-listitem_vertical"))) {
                                    var i = g("div.mm-navbar");
                                    if ((this.opts.navbar.add ? this.opts.navbar.sticky && i.classList.add("mm-navbar_sticky") : i.classList.add("mm-hidden"), n)) {
                                        var s = g("a.mm-btn.mm-btn_prev.mm-navbar__btn");
                                        s.setAttribute("href", "#" + n.id), i.append(s);
                                    }
                                    var a = null;
                                    t ? (a = y(t, ".mm-listitem__text")[0]) : n && (a = _(n, 'a[href="#' + e.id + '"]')[0]);
                                    var o = g("a.mm-navbar__title"),
                                        r = g("span");
                                    switch ((o.append(r), (r.innerHTML = e.getAttribute("data-mm-title") || (a ? a.textContent : "") || this.i18n(this.opts.navbar.title) || this.i18n("Menu")), this.opts.navbar.titleLink)) {
                                        case "anchor":
                                            a && o.setAttribute("href", a.getAttribute("href"));
                                            break;
                                        case "parent":
                                            n && o.setAttribute("href", "#" + n.id);
                                    }
                                    i.append(o), e.prepend(i), this.trigger("initNavbar:after", [e]);
                                }
                            }
                        }),
                        (e.prototype.initListview = function (e) {
                            var t = this;
                            this.trigger("initListview:before", [e]),
                                x(e, this.conf.classNames.nolistview, "mm-nolistview"),
                            e.matches(".mm-nolistview") ||
                            (e.classList.add("mm-listview"),
                                y(e).forEach(function (e) {
                                    e.classList.add("mm-listitem"),
                                        x(e, t.conf.classNames.selected, "mm-listitem_selected"),
                                        y(e, "a, span").forEach(function (e) {
                                            e.matches(".mm-btn") || e.classList.add("mm-listitem__text");
                                        });
                                })),
                                this.trigger("initListview:after", [e]);
                        }),
                        (e.prototype._initOpened = function () {
                            this.trigger("initOpened:before");
                            var e = this.node.pnls.querySelectorAll(".mm-listitem_selected"),
                                t = null;
                            e.forEach(function (e) {
                                (t = e), e.classList.remove("mm-listitem_selected");
                            }),
                            t && t.classList.add("mm-listitem_selected");
                            var n = t ? t.closest(".mm-panel") : y(this.node.pnls, ".mm-panel")[0];
                            this.openPanel(n, !1), this.trigger("initOpened:after");
                        }),
                        (e.prototype._initAnchors = function () {
                            var e = this;
                            this.trigger("initAnchors:before"),
                                document.addEventListener(
                                    "click",
                                    function (t) {
                                        var n = t.target.closest("a[href]");
                                        if (n) {
                                            for (
                                                var i = { inMenu: n.closest(".mm-menu") === e.node.menu, inListview: n.matches(".mm-listitem > a"), toExternal: n.matches('[rel="external"]') || n.matches('[target="_blank"]') },
                                                    s = { close: null, setSelected: null, preventDefault: "#" == n.getAttribute("href").slice(0, 1) },
                                                    a = 0;
                                                a < e.clck.length;
                                                a++
                                            ) {
                                                var m = e.clck[a].call(e, n, i);
                                                if (m) {
                                                    if ("boolean" == typeof m) return void t.preventDefault();
                                                    "object" == r(m) && (s = o(m, s));
                                                }
                                            }
                                            i.inMenu &&
                                            i.inListview &&
                                            !i.toExternal &&
                                            (c(n, e.opts.onClick.setSelected, s.setSelected) && e.setSelected(n.parentElement),
                                            c(n, e.opts.onClick.preventDefault, s.preventDefault) && t.preventDefault(),
                                            c(n, e.opts.onClick.close, s.close) && e.opts.offCanvas && "function" == typeof e.close && e.close());
                                        }
                                    },
                                    !0
                                ),
                                this.trigger("initAnchors:after");
                        }),
                        (e.prototype.i18n = function (e) {
                            return (function (e, t) {
                                return ("string" == typeof t && void 0 !== u[t] && u[t][e]) || e;
                            })(e, this.conf.language);
                        }),
                        (e.version = i.a),
                        (e.options = s),
                        (e.configs = a),
                        (e.addons = {}),
                        (e.wrappers = {}),
                        (e.node = {}),
                        (e.vars = {}),
                        e
                );
            })(),
            A = { blockUI: !0, moveBackground: !0 };
        var T = { clone: !1, menu: { insertMethod: "prepend", insertSelector: "body" }, page: { nodetype: "div", selector: null, noSelector: [] } };
        function C(e) {
            return e ? e.charAt(0).toUpperCase() + e.slice(1) : "";
        }
        function N(e, t, n) {
            var i = t.split(".");
            (e[(t = "mmEvent" + C(i[0]) + C(i[1]))] = e[t] || []), e[t].push(n), e.addEventListener(i[0], n);
        }
        function H(e, t) {
            var n = t.split(".");
            (t = "mmEvent" + C(n[0]) + C(n[1])),
                (e[t] || []).forEach(function (t) {
                    e.removeEventListener(n[0], t);
                });
        }
        (M.options.offCanvas = A), (M.configs.offCanvas = T);
        (M.prototype.open = function () {
            var e = this;
            this.trigger("open:before"),
            this.vars.opened ||
            (this._openSetup(),
                setTimeout(function () {
                    e._openStart();
                }, this.conf.openingInterval),
                this.trigger("open:after"));
        }),
            (M.prototype._openSetup = function () {
                var e = this,
                    t = this.opts.offCanvas;
                this.closeAllOthers(),
                    (M.node.page.mmStyle = M.node.page.getAttribute("style") || ""),
                    (function (e, t, n) {
                        var i = t.split(".");
                        (e[(t = "mmEvent" + C(i[0]) + C(i[1]))] || []).forEach(function (e) {
                            e(n || {});
                        });
                    })(window, "resize.page", { force: !0 });
                var n = ["mm-wrapper_opened"];
                t.blockUI && n.push("mm-wrapper_blocking"),
                "modal" == t.blockUI && n.push("mm-wrapper_modal"),
                t.moveBackground && n.push("mm-wrapper_background"),
                    n.forEach(function (t) {
                        e.node.wrpr.classList.add(t);
                    }),
                    setTimeout(function () {
                        e.vars.opened = !0;
                    }, this.conf.openingInterval),
                    this.node.menu.classList.add("mm-menu_opened");
            }),
            (M.prototype._openStart = function () {
                var e = this;
                m(
                    M.node.page,
                    function () {
                        e.trigger("open:finish");
                    },
                    this.conf.transitionDuration
                ),
                    this.trigger("open:start"),
                    this.node.wrpr.classList.add("mm-wrapper_opening");
            }),
            (M.prototype.close = function () {
                var e = this;
                this.trigger("close:before"),
                this.vars.opened &&
                (m(
                    M.node.page,
                    function () {
                        e.node.menu.classList.remove("mm-menu_opened");
                        ["mm-wrapper_opened", "mm-wrapper_blocking", "mm-wrapper_modal", "mm-wrapper_background"].forEach(function (t) {
                            e.node.wrpr.classList.remove(t);
                        }),
                            M.node.page.setAttribute("style", M.node.page.mmStyle),
                            (e.vars.opened = !1),
                            e.trigger("close:finish");
                    },
                    this.conf.transitionDuration
                ),
                    this.trigger("close:start"),
                    this.node.wrpr.classList.remove("mm-wrapper_opening"),
                    this.trigger("close:after"));
            }),
            (M.prototype.closeAllOthers = function () {
                var e = this;
                _(document.body, ".mm-menu_offcanvas").forEach(function (t) {
                    if (t !== e.node.menu) {
                        var n = t.mmApi;
                        n && n.close && n.close();
                    }
                });
            }),
            (M.prototype.setPage = function (e) {
                this.trigger("setPage:before", [e]);
                var t = this.conf.offCanvas;
                if (!e) {
                    var n = "string" == typeof t.page.selector ? _(document.body, t.page.selector) : y(document.body, t.page.nodetype);
                    if (
                        ((n = n.filter(function (e) {
                            return !e.matches(".mm-menu, .mm-wrapper__blocker");
                        })),
                        t.page.noSelector.length &&
                        (n = n.filter(function (e) {
                            return !e.matches(t.page.noSelector.join(", "));
                        })),
                        n.length > 1)
                    ) {
                        var i = g("div");
                        n[0].before(i),
                            n.forEach(function (e) {
                                i.append(e);
                            }),
                            (n = [i]);
                    }
                    e = n[0];
                }
                e.classList.add("mm-page"), e.classList.add("mm-slideout"), (e.id = e.id || l()), (M.node.page = e), this.trigger("setPage:after", [e]);
            });
        var j = function () {
                var e = this;
                H(document.body, "keydown.tabguard"),
                    N(document.body, "keydown.tabguard", function (t) {
                        9 == t.keyCode && e.node.wrpr.matches(".mm-wrapper_opened") && t.preventDefault();
                    });
            },
            D = function () {
                var e = this;
                this.trigger("initBlocker:before");
                var t = this.opts.offCanvas,
                    n = this.conf.offCanvas;
                if (t.blockUI) {
                    if (!M.node.blck) {
                        var i = g("div.mm-wrapper__blocker.mm-slideout");
                        (i.innerHTML = "<a></a>"), document.querySelector(n.menu.insertSelector).append(i), (M.node.blck = i);
                    }
                    var s = function (t) {
                        t.preventDefault(), t.stopPropagation(), e.node.wrpr.matches(".mm-wrapper_modal") || e.close();
                    };
                    M.node.blck.addEventListener("mousedown", s), M.node.blck.addEventListener("touchstart", s), M.node.blck.addEventListener("touchmove", s), this.trigger("initBlocker:after");
                }
            },
            O = { aria: !0, text: !0 };
        var I = { text: { closeMenu: "Close menu", closeSubmenu: "Close submenu", openSubmenu: "Open submenu", toggleSubmenu: "Toggle submenu" } },
            q = { "Close menu": "بستن منو", "Close submenu": "بستن زیرمنو", "Open submenu": "بازکردن زیرمنو", "Toggle submenu": "سوییچ زیرمنو" },
            B = { "Close menu": "Menü schließen", "Close submenu": "Untermenü schließen", "Open submenu": "Untermenü öffnen", "Toggle submenu": "Untermenü wechseln" },
            z = { "Close menu": "Закрыть меню", "Close submenu": "Закрыть подменю", "Open submenu": "Открыть подменю", "Toggle submenu": "Переключить подменю" };
        f({ "Close menu": "Menu sluiten", "Close submenu": "Submenu sluiten", "Open submenu": "Submenu openen", "Toggle submenu": "Submenu wisselen" }, "nl"),
            f(q, "fa"),
            f(B, "de"),
            f(z, "ru"),
            (M.options.screenReader = O),
            (M.configs.screenReader = I);
        var R;
        (R = function (e, t, n) {
            (e[t] = n), n ? e.setAttribute(t, n.toString()) : e.removeAttribute(t);
        }),
            (M.sr_aria = function (e, t, n) {
                R(e, "aria-" + t, n);
            }),
            (M.sr_role = function (e, t) {
                R(e, "role", t);
            }),
            (M.sr_text = function (e) {
                return '<span class="mm-sronly">' + e + "</span>";
            });
        var U = { fix: !0 };
        var W = "ontouchstart" in window || !!navigator.msMaxTouchPoints || !1;
        M.options.scrollBugFix = U;
        var Y = { height: "default" };
        M.options.autoHeight = Y;
        var F = { close: !1, open: !1 };
        M.options.backButton = F;
        var X = { add: !1, visible: { min: 1, max: 3 } };
        M.options.columns = X;
        var V = { add: !1, addTo: "panels", count: !1 };
        (M.options.counters = V), (M.configs.classNames.counters = { counter: "Counter" });
        var Z = { add: !1, addTo: "panels" };
        (M.options.dividers = Z), (M.configs.classNames.divider = "Divider");
        var G = { open: !1, node: null };
        var J = "ontouchstart" in window || !!navigator.msMaxTouchPoints || !1,
            K = { top: 0, right: 0, bottom: 0, left: 0 },
            Q = { start: 15, swipe: 15 },
            $ = { x: ["Right", "Left"], y: ["Down", "Up"] },
            ee = 0,
            te = 1,
            ne = 2,
            ie = function (e, t) {
                return "string" == typeof e && "%" == e.slice(-1) && (e = t * ((e = parseInt(e.slice(0, -1), 10)) / 100)), e;
            },
            se = (function () {
                function e(e, t, n) {
                    (this.surface = e),
                        (this.area = o(t, K)),
                        (this.treshold = o(n, Q)),
                    this.surface.mmHasDragEvents ||
                    (this.surface.addEventListener(J ? "touchstart" : "mousedown", this.start.bind(this)),
                        this.surface.addEventListener(J ? "touchend" : "mouseup", this.stop.bind(this)),
                        this.surface.addEventListener(J ? "touchleave" : "mouseleave", this.stop.bind(this)),
                        this.surface.addEventListener(J ? "touchmove" : "mousemove", this.move.bind(this))),
                        (this.surface.mmHasDragEvents = !0);
                }
                return (
                    (e.prototype.start = function (e) {
                        this.currentPosition = { x: e.touches ? e.touches[0].pageX : e.pageX || 0, y: e.touches ? e.touches[0].pageY : e.pageY || 0 };
                        var t = this.surface.clientWidth,
                            n = this.surface.clientHeight,
                            i = ie(this.area.top, n);
                        if (!("number" == typeof i && this.currentPosition.y < i)) {
                            var s = ie(this.area.right, t);
                            if (!("number" == typeof s && ((s = t - s), this.currentPosition.x > s))) {
                                var a = ie(this.area.bottom, n);
                                if (!("number" == typeof a && ((a = n - a), this.currentPosition.y > a))) {
                                    var o = ie(this.area.left, t);
                                    ("number" == typeof o && this.currentPosition.x < o) || ((this.startPosition = { x: this.currentPosition.x, y: this.currentPosition.y }), (this.state = te));
                                }
                            }
                        }
                    }),
                        (e.prototype.stop = function (e) {
                            if (this.state == ne) {
                                var t = this._dragDirection(),
                                    n = this._eventDetail(t);
                                if ((this._dispatchEvents("drag*End", n), Math.abs(this.movement[this.axis]) > this.treshold.swipe)) {
                                    var i = this._swipeDirection();
                                    (n.direction = i), this._dispatchEvents("swipe*", n);
                                }
                            }
                            this.state = ee;
                        }),
                        (e.prototype.move = function (e) {
                            switch (this.state) {
                                case te:
                                case ne:
                                    var t = { x: e.changedTouches ? e.touches[0].pageX : e.pageX || 0, y: e.changedTouches ? e.touches[0].pageY : e.pageY || 0 };
                                    (this.movement = { x: t.x - this.currentPosition.x, y: t.y - this.currentPosition.y }),
                                        (this.distance = { x: t.x - this.startPosition.x, y: t.y - this.startPosition.y }),
                                        (this.currentPosition = { x: t.x, y: t.y }),
                                        (this.axis = Math.abs(this.distance.x) > Math.abs(this.distance.y) ? "x" : "y");
                                    var n = this._dragDirection(),
                                        i = this._eventDetail(n);
                                    this.state == te && Math.abs(this.distance[this.axis]) > this.treshold.start && (this._dispatchEvents("drag*Start", i), (this.state = ne)), this.state == ne && this._dispatchEvents("drag*Move", i);
                            }
                        }),
                        (e.prototype._eventDetail = function (e) {
                            var t = this.distance.x,
                                n = this.distance.y;
                            return (
                                "x" == this.axis && (t -= t > 0 ? this.treshold.start : 0 - this.treshold.start),
                                "y" == this.axis && (n -= n > 0 ? this.treshold.start : 0 - this.treshold.start),
                                    { axis: this.axis, direction: e, movementX: this.movement.x, movementY: this.movement.y, distanceX: t, distanceY: n }
                            );
                        }),
                        (e.prototype._dispatchEvents = function (e, t) {
                            var n = new CustomEvent(e.replace("*", ""), { detail: t });
                            this.surface.dispatchEvent(n);
                            var i = new CustomEvent(e.replace("*", this.axis.toUpperCase()), { detail: t });
                            this.surface.dispatchEvent(i);
                            var s = new CustomEvent(e.replace("*", t.direction), { detail: t });
                            this.surface.dispatchEvent(s);
                        }),
                        (e.prototype._dragDirection = function () {
                            return $[this.axis][this.distance[this.axis] > 0 ? 0 : 1];
                        }),
                        (e.prototype._swipeDirection = function () {
                            return $[this.axis][this.movement[this.axis] > 0 ? 0 : 1];
                        }),
                        e
                );
            })(),
            ae = null,
            oe = null,
            re = 0,
            ce = function (e) {
                var t = this,
                    n = {},
                    i = !1,
                    s = function () {
                        var e = Object.keys(t.opts.extensions);
                        e.length
                            ? (k(
                            e.join(", "),
                            function () {},
                            function () {
                                n = me(n, [], t.node.menu);
                            }
                            ),
                                e.forEach(function (e) {
                                    k(
                                        e,
                                        function () {
                                            n = me(n, t.opts.extensions[e], t.node.menu);
                                        },
                                        function () {}
                                    );
                                }))
                            : (n = me(n, [], t.node.menu));
                    };
                oe && (H(oe, "dragStart"), H(oe, "dragMove"), H(oe, "dragEnd")),
                    (ae = new se((oe = e))),
                    s(),
                    (s = function () {}),
                oe &&
                (N(oe, "dragStart", function (e) {
                    e.detail.direction == n.direction && ((i = !0), t.node.wrpr.classList.add("mm-wrapper_dragging"), t._openSetup(), t.trigger("open:start"), (re = t.node.menu["x" == n.axis ? "clientWidth" : "clientHeight"]));
                }),
                    N(oe, "dragMove", function (e) {
                        if (e.detail.axis == n.axis && i) {
                            var t = e.detail["distance" + n.axis.toUpperCase()];
                            switch (n.position) {
                                case "right":
                                case "bottom":
                                    t = Math.min(Math.max(t, -re), 0);
                                    break;
                                default:
                                    t = Math.max(Math.min(t, re), 0);
                            }
                            if ("front" == n.zposition)
                                switch (n.position) {
                                    case "right":
                                    case "bottom":
                                        t += re;
                                        break;
                                    default:
                                        t -= re;
                                }
                            n.slideOutNodes.forEach(function (e) {
                                e.style.transform = "translate" + n.axis.toUpperCase() + "(" + t + "px)";
                            });
                        }
                    }),
                    N(oe, "dragEnd", function (e) {
                        if (e.detail.axis == n.axis && i) {
                            (i = !1),
                                t.node.wrpr.classList.remove("mm-wrapper_dragging"),
                                n.slideOutNodes.forEach(function (e) {
                                    e.style.transform = "";
                                });
                            var s = Math.abs(e.detail["distance" + n.axis.toUpperCase()]) >= 0.75 * re;
                            if (!s) {
                                var a = e.detail["movement" + n.axis.toUpperCase()];
                                switch (n.position) {
                                    case "right":
                                    case "bottom":
                                        s = a <= 0;
                                        break;
                                    default:
                                        s = a >= 0;
                                }
                            }
                            s ? t._openStart() : t.close();
                        }
                    }));
            },
            me = function (e, t, n) {
                switch (
                    ((e.position = "left"),
                        (e.zposition = "back"),
                        ["right", "top", "bottom"].forEach(function (n) {
                            t.indexOf("position-" + n) > -1 && (e.position = n);
                        }),
                        ["front", "top", "bottom"].forEach(function (n) {
                            t.indexOf("position-" + n) > -1 && (e.zposition = "front");
                        }),
                        (ae.area = { top: "bottom" == e.position ? "75%" : 0, right: "left" == e.position ? "75%" : 0, bottom: "top" == e.position ? "75%" : 0, left: "right" == e.position ? "75%" : 0 }),
                        e.position)
                    ) {
                    case "top":
                    case "bottom":
                        e.axis = "y";
                        break;
                    default:
                        e.axis = "x";
                }
                switch (e.position) {
                    case "top":
                        e.direction = "Down";
                        break;
                    case "right":
                        e.direction = "Left";
                        break;
                    case "bottom":
                        e.direction = "Up";
                        break;
                    default:
                        e.direction = "Right";
                }
                switch (e.zposition) {
                    case "front":
                        e.slideOutNodes = [n];
                        break;
                    default:
                        e.slideOutNodes = _(document.body, ".mm-slideout");
                }
                return e;
            };
        M.options.drag = G;
        var le = { drop: !1, fitViewport: !0, event: "click", position: {}, tip: !0 };
        var de = { offset: { button: { x: -5, y: 5 }, viewport: { x: 20, y: 20 } }, height: { max: 880 }, width: { max: 440 } };
        (M.options.dropdown = le), (M.configs.dropdown = de);
        var pe = { insertMethod: "append", insertSelector: "body" };
        (M.configs.fixedElements = pe), (M.configs.classNames.fixedElements = { fixed: "Fixed" });
        var ue = { use: !1, top: [], bottom: [], position: "left", type: "default" };
        M.options.iconbar = ue;
        var fe = { add: !1, blockPanel: !0, hideDivider: !1, hideNavbar: !0, visible: 3 };
        M.options.iconPanels = fe;
        var he = { enable: !1, enhance: !1 };
        M.options.keyboardNavigation = he;
        var ve = function (e) {
                var t = this;
                H(document.body, "keydown.tabguard"),
                    H(document.body, "focusin.tabguard"),
                    N(document.body, "focusin.tabguard", function (e) {
                        if (t.node.wrpr.matches(".mm-wrapper_opened")) {
                            var n = e.target;
                            if (n.matches(".mm-tabend")) {
                                var i = void 0;
                                n.parentElement.matches(".mm-menu") && M.node.blck && (i = M.node.blck),
                                n.parentElement.matches(".mm-wrapper__blocker") && (i = _(document.body, ".mm-menu_offcanvas.mm-menu_opened")[0]),
                                i || (i = n.parentElement),
                                i && y(i, ".mm-tabstart")[0].focus();
                            }
                        }
                    }),
                    H(document.body, "keydown.navigate"),
                    N(document.body, "keydown.navigate", function (t) {
                        var n = t.target,
                            i = n.closest(".mm-menu");
                        if (i) {
                            i.mmApi;
                            if (!n.matches("input, textarea"))
                                switch (t.keyCode) {
                                    case 13:
                                        (n.matches(".mm-toggle") || n.matches(".mm-check")) && n.dispatchEvent(new Event("click"));
                                        break;
                                    case 32:
                                    case 37:
                                    case 38:
                                    case 39:
                                    case 40:
                                        t.preventDefault();
                                }
                            if (e)
                                if (n.matches("input"))
                                    switch (t.keyCode) {
                                        case 27:
                                            n.value = "";
                                    }
                                else {
                                    var s = i.mmApi;
                                    switch (t.keyCode) {
                                        case 8:
                                            var a = _(i, ".mm-panel_opened")[0].mmParent;
                                            a && s.openPanel(a.closest(".mm-panel"));
                                            break;
                                        case 27:
                                            i.matches(".mm-menu_offcanvas") && s.close();
                                    }
                                }
                        }
                    });
            },
            be = { load: !1 };
        M.options.lazySubmenus = be;
        var ge = [];
        var _e = { breadcrumbs: { separator: "/", removeFirst: !1 } };
        function ye() {
            var e = this,
                t = this.opts.navbars;
            if (void 0 !== t) {
                t instanceof Array || (t = [t]);
                var n = {};
                t.length &&
                (t.forEach(function (t) {
                    if (
                        !(t = (function (e) {
                            return (
                                "boolean" == typeof e && e && (e = {}),
                                "object" != typeof e && (e = {}),
                                void 0 === e.content && (e.content = ["prev", "title"]),
                                e.content instanceof Array || (e.content = [e.content]),
                                void 0 === e.use && (e.use = !0),
                                "boolean" == typeof e.use && e.use && (e.use = !0),
                                    e
                            );
                        })(t)).use
                    )
                        return !1;
                    var i = g("div.mm-navbar"),
                        s = t.position;
                    "bottom" !== s && (s = "top"), n[s] || (n[s] = g("div.mm-navbars_" + s)), n[s].append(i);
                    for (var a = 0, o = t.content.length; a < o; a++) {
                        var r,
                            c = t.content[a];
                        if ("string" == typeof c)
                            if ("function" == typeof (r = ye.navbarContents[c])) r.call(e, i);
                            else {
                                var m = g("span");
                                m.innerHTML = c;
                                var l = y(m);
                                1 == l.length && (m = l[0]), i.append(m);
                            }
                        else i.append(c);
                    }
                    "string" == typeof t.type && "function" == typeof (r = ye.navbarTypes[t.type]) && r.call(e, i);
                    "boolean" != typeof t.use &&
                    k(
                        t.use,
                        function () {
                            i.classList.remove("mm-hidden"), M.sr_aria(i, "hidden", !1);
                        },
                        function () {
                            i.classList.add("mm-hidden"), M.sr_aria(i, "hidden", !0);
                        }
                    );
                }),
                    this.bind("initMenu:after", function () {
                        for (var t in n) e.node.menu["bottom" == t ? "append" : "prepend"](n[t]);
                    }));
            }
        }
        (M.options.navbars = ge),
            (M.configs.navbars = _e),
            (M.configs.classNames.navbars = { panelPrev: "Prev", panelTitle: "Title" }),
            (ye.navbarContents = {
                breadcrumbs: function (e) {
                    var t = this,
                        n = g("div.mm-navbar__breadcrumbs");
                    e.append(n),
                        this.bind("initNavbar:after", function (e) {
                            if (!e.querySelector(".mm-navbar__breadcrumbs")) {
                                y(e, ".mm-navbar")[0].classList.add("mm-hidden");
                                for (var n = [], i = g("span.mm-navbar__breadcrumbs"), s = e, a = !0; s; ) {
                                    if (!(s = s.closest(".mm-panel")).parentElement.matches(".mm-listitem_vertical")) {
                                        var o = _(s, ".mm-navbar__title span")[0];
                                        if (o) {
                                            var r = o.textContent;
                                            r.length && n.unshift(a ? "<span>" + r + "</span>" : '<a href="#' + s.id + '">' + r + "</a>");
                                        }
                                        a = !1;
                                    }
                                    s = s.mmParent;
                                }
                                t.conf.navbars.breadcrumbs.removeFirst && n.shift(), (i.innerHTML = n.join('<span class="mm-separator">' + t.conf.navbars.breadcrumbs.separator + "</span>")), y(e, ".mm-navbar")[0].append(i);
                            }
                        }),
                        this.bind("openPanel:start", function (e) {
                            var t = e.querySelector(".mm-navbar__breadcrumbs");
                            n.innerHTML = t ? t.innerHTML : "";
                        }),
                        this.bind("initNavbar:after:sr-aria", function (e) {
                            _(e, ".mm-breadcrumbs a").forEach(function (e) {
                                M.sr_aria(e, "owns", e.getAttribute("href").slice(1));
                            });
                        });
                },
                close: function (e) {
                    var t = this,
                        n = g("a.mm-btn.mm-btn_close.mm-navbar__btn");
                    e.append(n),
                        this.bind("setPage:after", function (e) {
                            n.setAttribute("href", "#" + e.id);
                        }),
                        this.bind("setPage:after:sr-text", function () {
                            (n.innerHTML = M.sr_text(t.i18n(t.conf.screenReader.text.closeMenu))), M.sr_aria(n, "owns", n.getAttribute("href").slice(1));
                        });
                },
                prev: function (e) {
                    var t,
                        n,
                        i,
                        s = this,
                        a = g("a.mm-btn.mm-btn_prev.mm-navbar__btn");
                    e.append(a),
                        this.bind("initNavbar:after", function (e) {
                            y(e, ".mm-navbar")[0].classList.add("mm-hidden");
                        }),
                        this.bind("openPanel:start", function (e) {
                            e.parentElement.matches(".mm-listitem_vertical") ||
                            ((t = e.querySelector("." + s.conf.classNames.navbars.panelPrev)) || (t = e.querySelector(".mm-navbar__btn.mm-btn_prev")),
                                (n = t ? t.getAttribute("href") : ""),
                                (i = t ? t.innerHTML : ""),
                                n ? a.setAttribute("href", n) : a.removeAttribute("href"),
                                a.classList[n || i ? "remove" : "add"]("mm-hidden"),
                                (a.innerHTML = i));
                        }),
                        this.bind("initNavbar:after:sr-aria", function (e) {
                            M.sr_aria(e.querySelector(".mm-navbar"), "hidden", !0);
                        }),
                        this.bind("openPanel:start:sr-aria", function (e) {
                            M.sr_aria(a, "hidden", a.matches(".mm-hidden")), M.sr_aria(a, "owns", (a.getAttribute("href") || "").slice(1));
                        });
                },
                searchfield: function (e) {
                    "object" != r(this.opts.searchfield) && (this.opts.searchfield = {});
                    var t = g("div.mm-navbar__searchfield");
                    e.append(t), (this.opts.searchfield.add = !0), (this.opts.searchfield.addTo = [t]);
                },
                title: function (e) {
                    var t,
                        n,
                        i,
                        s,
                        a = this,
                        o = g("a.mm-navbar__title"),
                        r = g("span");
                    o.append(r),
                        e.append(o),
                        this.bind("openPanel:start", function (e) {
                            e.parentElement.matches(".mm-listitem_vertical") ||
                            ((i = e.querySelector("." + a.conf.classNames.navbars.panelTitle)) || (i = e.querySelector(".mm-navbar__title span")),
                                (t = i && i.closest("a") ? i.closest("a").getAttribute("href") : "") ? o.setAttribute("href", t) : o.removeAttribute("href"),
                                (n = i ? i.innerHTML : ""),
                                (r.innerHTML = n));
                        }),
                        this.bind("openPanel:start:sr-aria", function (e) {
                            if (a.opts.screenReader.text) {
                                if (!s)
                                    y(a.node.menu, ".mm-navbars_top, .mm-navbars_bottom").forEach(function (e) {
                                        var t = e.querySelector(".mm-btn_prev");
                                        t && (s = t);
                                    });
                                if (s) {
                                    var t = !0;
                                    "parent" == a.opts.navbar.titleLink && (t = !s.matches(".mm-hidden")), M.sr_aria(o, "hidden", t);
                                }
                            }
                        });
                },
            }),
            (ye.navbarTypes = {
                tabs: function (e) {
                    var t = this;
                    e.classList.add("mm-navbar_tabs"), e.parentElement.classList.add("mm-navbars_has-tabs");
                    var n = y(e, "a");
                    e.addEventListener("click", function (e) {
                        var n = e.target;
                        if (n.matches("a"))
                            if (n.matches(".mm-navbar__tab_selected")) e.stopImmediatePropagation();
                            else
                                try {
                                    t.openPanel(t.node.menu.querySelector(n.getAttribute("href")), !1), e.stopImmediatePropagation();
                                } catch (e) {}
                    }),
                        this.bind("openPanel:start", function e(t) {
                            n.forEach(function (e) {
                                e.classList.remove("mm-navbar__tab_selected");
                            });
                            var i = n.filter(function (e) {
                                return e.matches('[href="#' + t.id + '"]');
                            })[0];
                            if (i) i.classList.add("mm-navbar__tab_selected");
                            else {
                                var s = t.mmParent;
                                s && e.call(this, s.closest(".mm-panel"));
                            }
                        });
                },
            });
        var Le = { scroll: !1, update: !1 };
        var we = { scrollOffset: 0, updateOffset: 50 };
        (M.options.pageScroll = Le), (M.configs.pageScroll = we);
        var Ee = {
            add: !1,
            addTo: "panels",
            cancel: !1,
            noResults: "No results found.",
            placeholder: "Search",
            panel: { add: !1, dividers: !0, fx: "none", id: null, splash: null, title: "Search" },
            search: !0,
            showTextItems: !1,
            showSubPanels: !0,
        };
        var xe = { clear: !1, form: !1, input: !1, submit: !1 },
            Pe = { Search: "جستجو", "No results found.": "نتیجه‌ای یافت نشد.", cancel: "انصراف" },
            ke = { Search: "Suche", "No results found.": "Keine Ergebnisse gefunden.", cancel: "beenden" },
            Se = { Search: "Найти", "No results found.": "Ничего не найдено.", cancel: "отменить" },
            Me = function () {
                for (var e = 0, t = 0, n = arguments.length; t < n; t++) e += arguments[t].length;
                var i = Array(e),
                    s = 0;
                for (t = 0; t < n; t++) for (var a = arguments[t], o = 0, r = a.length; o < r; o++, s++) i[s] = a[o];
                return i;
            };
        f({ Search: "Zoeken", "No results found.": "Geen resultaten gevonden.", cancel: "annuleren" }, "nl"), f(Pe, "fa"), f(ke, "de"), f(Se, "ru"), (M.options.searchfield = Ee), (M.configs.searchfield = xe);
        var Ae = function () {
                var e = this.opts.searchfield,
                    t = (this.conf.searchfield, y(this.node.pnls, ".mm-panel_search")[0]);
                if (t) return t;
                (t = g("div.mm-panel.mm-panel_search.mm-hidden")), e.panel.id && (t.id = e.panel.id), e.panel.title && t.setAttribute("data-mm-title", e.panel.title);
                var n = g("ul");
                switch ((t.append(n), this.node.pnls.append(t), this.initListview(n), this._initNavbar(t), e.panel.fx)) {
                    case !1:
                        break;
                    case "none":
                        t.classList.add("mm-panel_noanimation");
                        break;
                    default:
                        t.classList.add("mm-panel_fx-" + e.panel.fx);
                }
                if (e.panel.splash) {
                    var i = g("div.mm-panel__content");
                    (i.innerHTML = e.panel.splash), t.append(i);
                }
                return t.classList.add("mm-panel"), t.classList.add("mm-hidden"), this.node.pnls.append(t), t;
            },
            Te = function (e) {
                var t = this.opts.searchfield,
                    n = this.conf.searchfield;
                if (e.parentElement.matches(".mm-listitem_vertical")) return null;
                if ((a = _(e, ".mm-searchfield")[0])) return a;
                function i(e, t) {
                    if (t) for (var n in t) e.setAttribute(n, t[n]);
                }
                var s,
                    a = g((n.form ? "form" : "div") + ".mm-searchfield"),
                    o = g("div.mm-searchfield__input"),
                    r = g("input");
                ((r.type = "text"), (r.autocomplete = "off"), (r.placeholder = this.i18n(t.placeholder)), o.append(r), a.append(o), e.prepend(a), i(r, n.input), n.clear) &&
                ((s = g("a.mm-btn.mm-btn_close.mm-searchfield__btn")).setAttribute("href", "#"), o.append(s));
                (i(a, n.form), n.form && n.submit && !n.clear) && ((s = g("a.mm-btn.mm-btn_next.mm-searchfield__btn")).setAttribute("href", "#"), o.append(s));
                t.cancel && ((s = g("a.mm-searchfield__cancel")).setAttribute("href", "#"), (s.textContent = this.i18n("cancel")), a.append(s));
                return a;
            },
            Ce = function (e) {
                var t = this,
                    n = this.opts.searchfield,
                    i = (this.conf.searchfield, {});
                e.closest(".mm-panel_search")
                    ? ((i.panels = _(this.node.pnls, ".mm-panel")), (i.noresults = [e.closest(".mm-panel")]))
                    : e.closest(".mm-panel")
                    ? ((i.panels = [e.closest(".mm-panel")]), (i.noresults = i.panels))
                    : ((i.panels = _(this.node.pnls, ".mm-panel")), (i.noresults = [this.node.menu])),
                    (i.panels = i.panels.filter(function (e) {
                        return !e.matches(".mm-panel_search");
                    })),
                    (i.panels = i.panels.filter(function (e) {
                        return !e.parentElement.matches(".mm-listitem_vertical");
                    })),
                    (i.listitems = []),
                    (i.dividers = []),
                    i.panels.forEach(function (e) {
                        var t, n;
                        (t = i.listitems).push.apply(t, _(e, ".mm-listitem")), (n = i.dividers).push.apply(n, _(e, ".mm-divider"));
                    });
                var s = y(this.node.pnls, ".mm-panel_search")[0],
                    a = _(e, "input")[0],
                    o = _(e, ".mm-searchfield__cancel")[0];
                (a.mmSearchfield = i),
                n.panel.add &&
                n.panel.splash &&
                (H(a, "focus.splash"),
                    N(a, "focus.splash", function (e) {
                        t.openPanel(s);
                    })),
                n.cancel &&
                (H(a, "focus.cancel"),
                    N(a, "focus.cancel", function (e) {
                        o.classList.add("mm-searchfield__cancel-active");
                    }),
                    H(o, "click.splash"),
                    N(o, "click.splash", function (e) {
                        if ((e.preventDefault(), o.classList.remove("mm-searchfield__cancel-active"), s.matches(".mm-panel_opened"))) {
                            var n = y(t.node.pnls, ".mm-panel_opened-parent");
                            n.length && t.openPanel(n[n.length - 1]);
                        }
                    })),
                n.panel.add &&
                "panel" == n.addTo &&
                this.bind("openPanel:finish", function (e) {
                    e === s && a.focus();
                }),
                    H(a, "input.search"),
                    N(a, "input.search", function (e) {
                        switch (e.keyCode) {
                            case 9:
                            case 16:
                            case 17:
                            case 18:
                            case 37:
                            case 38:
                            case 39:
                            case 40:
                                break;
                            default:
                                t.search(a);
                        }
                    }),
                    this.search(a);
            },
            Ne = function (e) {
                if (e) {
                    var t = this.opts.searchfield;
                    this.conf.searchfield;
                    if ((e.closest(".mm-panel") || (e = y(this.node.pnls, ".mm-panel")[0]), !y(e, ".mm-panel__noresultsmsg").length)) {
                        var n = g("div.mm-panel__noresultsmsg.mm-hidden");
                        (n.innerHTML = this.i18n(t.noResults)), e.append(n);
                    }
                }
            };
        M.prototype.search = function (e, t) {
            var n,
                i = this,
                s = this.opts.searchfield;
            this.conf.searchfield;
            t = (t = t || "" + e.value).toLowerCase().trim();
            var a = e.mmSearchfield,
                o = _(e.closest(".mm-searchfield"), ".mm-btn"),
                r = y(this.node.pnls, ".mm-panel_search")[0],
                c = a.panels,
                m = a.noresults,
                l = a.listitems,
                d = a.dividers;
            if (
                (l.forEach(function (e) {
                    e.classList.remove("mm-listitem_nosubitems"), e.classList.remove("mm-listitem_onlysubitems"), e.classList.remove("mm-hidden");
                }),
                r && (y(r, ".mm-listview")[0].innerHTML = ""),
                    c.forEach(function (e) {
                        e.scrollTop = 0;
                    }),
                    t.length)
            ) {
                d.forEach(function (e) {
                    e.classList.add("mm-hidden");
                }),
                    l.forEach(function (e) {
                        var n,
                            i = y(e, ".mm-listitem__text")[0],
                            a = !1;
                        i &&
                        ((n = i),
                            Array.prototype.slice
                                .call(n.childNodes)
                                .filter(function (e) {
                                    return 3 == e.nodeType;
                                })
                                .map(function (e) {
                                    return e.textContent;
                                })
                                .join(" "))
                            .toLowerCase()
                            .indexOf(t) > -1 &&
                        (i.matches(".mm-listitem__btn") ? s.showSubPanels && (a = !0) : i.matches("a") ? (a = !0) : s.showTextItems && (a = !0)),
                        a || e.classList.add("mm-hidden");
                    });
                var p = l.filter(function (e) {
                    return !e.matches(".mm-hidden");
                }).length;
                if (s.panel.add) {
                    var u = [];
                    c.forEach(function (e) {
                        var t = w(_(e, ".mm-listitem"));
                        if (
                            (t = t.filter(function (e) {
                                return !e.matches(".mm-hidden");
                            })).length
                        ) {
                            if (s.panel.dividers) {
                                var n = g("li.mm-divider"),
                                    i = _(e, ".mm-navbar__title")[0];
                                i && ((n.innerHTML = i.innerHTML), u.push(n));
                            }
                            t.forEach(function (e) {
                                u.push(e.cloneNode(!0));
                            });
                        }
                    }),
                        u.forEach(function (e) {
                            e.querySelectorAll(".mm-toggle, .mm-check").forEach(function (e) {
                                e.remove();
                            });
                        }),
                        (n = y(r, ".mm-listview")[0]).append.apply(n, u),
                        this.openPanel(r);
                } else
                    s.showSubPanels &&
                    c.forEach(function (e) {
                        w(_(e, ".mm-listitem")).forEach(function (e) {
                            var t = e.mmChild;
                            t &&
                            _(t, ".mm-listitem").forEach(function (e) {
                                e.classList.remove("mm-hidden");
                            });
                        });
                    }),
                        Me(c)
                            .reverse()
                            .forEach(function (t, n) {
                                var s = t.mmParent;
                                s &&
                                (w(_(t, ".mm-listitem")).length
                                    ? (s.matches(".mm-hidden") && s.classList.remove("mm-hidden"), s.classList.add("mm-listitem_onlysubitems"))
                                    : e.closest(".mm-panel") ||
                                    ((t.matches(".mm-panel_opened") || t.matches(".mm-panel_opened-parent")) &&
                                    setTimeout(function () {
                                        i.openPanel(s.closest(".mm-panel"));
                                    }, (n + 1) * (1.5 * i.conf.openingInterval)),
                                        s.classList.add("mm-listitem_nosubitems")));
                            }),
                        c.forEach(function (e) {
                            w(_(e, ".mm-listitem")).forEach(function (e) {
                                L(e, ".mm-listitem_vertical").forEach(function (e) {
                                    e.matches(".mm-hidden") && (e.classList.remove("mm-hidden"), e.classList.add("mm-listitem_onlysubitems"));
                                });
                            });
                        }),
                        c.forEach(function (e) {
                            w(_(e, ".mm-listitem")).forEach(function (e) {
                                var t = (function (e, t) {
                                    for (var n = [], i = e.previousElementSibling; i; ) (t && !i.matches(t)) || n.push(i), (i = i.previousElementSibling);
                                    return n;
                                })(e, ".mm-divider")[0];
                                t && t.classList.remove("mm-hidden");
                            });
                        });
                o.forEach(function (e) {
                    return e.classList.remove("mm-hidden");
                }),
                    m.forEach(function (e) {
                        _(e, ".mm-panel__noresultsmsg").forEach(function (e) {
                            return e.classList[p ? "add" : "remove"]("mm-hidden");
                        });
                    }),
                s.panel.add &&
                (s.panel.splash &&
                _(r, ".mm-panel__content").forEach(function (e) {
                    return e.classList.add("mm-hidden");
                }),
                    l.forEach(function (e) {
                        return e.classList.remove("mm-hidden");
                    }),
                    d.forEach(function (e) {
                        return e.classList.remove("mm-hidden");
                    }));
            } else if (
                (l.forEach(function (e) {
                    return e.classList.remove("mm-hidden");
                }),
                    d.forEach(function (e) {
                        return e.classList.remove("mm-hidden");
                    }),
                    o.forEach(function (e) {
                        return e.classList.add("mm-hidden");
                    }),
                    m.forEach(function (e) {
                        _(e, ".mm-panel__noresultsmsg").forEach(function (e) {
                            return e.classList.add("mm-hidden");
                        });
                    }),
                    s.panel.add)
            )
                if (s.panel.splash)
                    _(r, ".mm-panel__content").forEach(function (e) {
                        return e.classList.remove("mm-hidden");
                    });
                else if (!e.closest(".mm-panel_search")) {
                    var f = y(this.node.pnls, ".mm-panel_opened-parent");
                    this.openPanel(f.slice(-1)[0]);
                }
            this.trigger("updateListview");
        };
        var He = { add: !1, addTo: "panels" };
        M.options.sectionIndexer = He;
        var je = { current: !0, hover: !1, parent: !1 };
        M.options.setSelected = je;
        var De = { collapsed: { use: !1, blockMenu: !0, hideDivider: !1, hideNavbar: !0 }, expanded: { use: !1, initial: "open" } };
        M.options.sidebar = De;
        M.configs.classNames.toggles = { toggle: "Toggle", check: "Check" };
        /*!
         * mmenu.js
         * mmenujs.com
         *
         * Copyright (c) Fred Heusschen
         * frebsite.nl
         *
         * License: CC-BY-NC-4.0
         * http://creativecommons.org/licenses/by-nc/4.0/
         */
        (M.addons = {
            offcanvas: function () {
                var e = this;
                if (this.opts.offCanvas) {
                    var t = (function (e) {
                        return "object" != typeof e && (e = {}), e;
                    })(this.opts.offCanvas);
                    this.opts.offCanvas = o(t, M.options.offCanvas);
                    var n = this.conf.offCanvas;
                    this._api.push("open", "close", "setPage"),
                        (this.vars.opened = !1),
                        this.bind("initMenu:before", function () {
                            n.clone &&
                            ((e.node.menu = e.node.menu.cloneNode(!0)),
                            e.node.menu.id && (e.node.menu.id = "mm-" + e.node.menu.id),
                                _(e.node.menu, "[id]").forEach(function (e) {
                                    e.id = "mm-" + e.id;
                                })),
                                (e.node.wrpr = document.body),
                                document.querySelector(n.menu.insertSelector)[n.menu.insertMethod](e.node.menu);
                        }),
                        this.bind("initMenu:after", function () {
                            D.call(e), e.setPage(M.node.page), j.call(e), e.node.menu.classList.add("mm-menu_offcanvas");
                            var t = window.location.hash;
                            if (t) {
                                var n = p(e.node.menu.id);
                                n &&
                                n == t.slice(1) &&
                                setTimeout(function () {
                                    e.open();
                                }, 1e3);
                            }
                        }),
                        this.bind("setPage:after", function (e) {
                            M.node.blck &&
                            y(M.node.blck, "a").forEach(function (t) {
                                t.setAttribute("href", "#" + e.id);
                            });
                        }),
                        this.bind("open:start:sr-aria", function () {
                            M.sr_aria(e.node.menu, "hidden", !1);
                        }),
                        this.bind("close:finish:sr-aria", function () {
                            M.sr_aria(e.node.menu, "hidden", !0);
                        }),
                        this.bind("initMenu:after:sr-aria", function () {
                            M.sr_aria(e.node.menu, "hidden", !0);
                        }),
                        this.bind("initBlocker:after:sr-text", function () {
                            y(M.node.blck, "a").forEach(function (t) {
                                t.innerHTML = M.sr_text(e.i18n(e.conf.screenReader.text.closeMenu));
                            });
                        }),
                        this.clck.push(function (t, n) {
                            var i = p(e.node.menu.id);
                            if (i && t.matches('[href="#' + i + '"]')) {
                                if (n.inMenu) return e.open(), !0;
                                var s = t.closest(".mm-menu");
                                if (s) {
                                    var a = s.mmApi;
                                    if (a && a.close)
                                        return (
                                            a.close(),
                                                m(
                                                    s,
                                                    function () {
                                                        e.open();
                                                    },
                                                    e.conf.transitionDuration
                                                ),
                                                !0
                                        );
                                }
                                return e.open(), !0;
                            }
                            if ((i = M.node.page.id) && t.matches('[href="#' + i + '"]')) return e.close(), !0;
                        });
                }
            },
            screenReader: function () {
                var e = this,
                    t = (function (e) {
                        return "boolean" == typeof e && (e = { aria: e, text: e }), "object" != typeof e && (e = {}), e;
                    })(this.opts.screenReader);
                this.opts.screenReader = o(t, M.options.screenReader);
                var n = this.conf.screenReader;
                t.aria &&
                (this.bind("initAddons:after", function () {
                    e.bind("initMenu:after", function () {
                        this.trigger("initMenu:after:sr-aria", [].slice.call(arguments));
                    }),
                        e.bind("initNavbar:after", function () {
                            this.trigger("initNavbar:after:sr-aria", [].slice.call(arguments));
                        }),
                        e.bind("openPanel:start", function () {
                            this.trigger("openPanel:start:sr-aria", [].slice.call(arguments));
                        }),
                        e.bind("close:start", function () {
                            this.trigger("close:start:sr-aria", [].slice.call(arguments));
                        }),
                        e.bind("close:finish", function () {
                            this.trigger("close:finish:sr-aria", [].slice.call(arguments));
                        }),
                        e.bind("open:start", function () {
                            this.trigger("open:start:sr-aria", [].slice.call(arguments));
                        }),
                        e.bind("initOpened:after", function () {
                            this.trigger("initOpened:after:sr-aria", [].slice.call(arguments));
                        });
                }),
                    this.bind("updateListview", function () {
                        e.node.pnls.querySelectorAll(".mm-listitem").forEach(function (e) {
                            M.sr_aria(e, "hidden", e.matches(".mm-hidden"));
                        });
                    }),
                    this.bind("openPanel:start", function (t) {
                        var n = _(e.node.pnls, ".mm-panel")
                                .filter(function (e) {
                                    return e !== t;
                                })
                                .filter(function (e) {
                                    return !e.parentElement.matches(".mm-panel");
                                }),
                            i = [t];
                        _(t, ".mm-listitem_vertical .mm-listitem_opened").forEach(function (e) {
                            i.push.apply(i, y(e, ".mm-panel"));
                        }),
                            n.forEach(function (e) {
                                M.sr_aria(e, "hidden", !0);
                            }),
                            i.forEach(function (e) {
                                M.sr_aria(e, "hidden", !1);
                            });
                    }),
                    this.bind("closePanel", function (e) {
                        M.sr_aria(e, "hidden", !0);
                    }),
                    this.bind("initPanel:after", function (e) {
                        _(e, ".mm-btn").forEach(function (e) {
                            M.sr_aria(e, "haspopup", !0);
                            var t = e.getAttribute("href");
                            t && M.sr_aria(e, "owns", t.replace("#", ""));
                        });
                    }),
                    this.bind("initNavbar:after", function (e) {
                        var t = y(e, ".mm-navbar")[0],
                            n = t.matches(".mm-hidden");
                        M.sr_aria(t, "hidden", n);
                    }),
                t.text &&
                "parent" == this.opts.navbar.titleLink &&
                this.bind("initNavbar:after", function (e) {
                    var t = y(e, ".mm-navbar")[0],
                        n = !!t.querySelector(".mm-btn_prev");
                    M.sr_aria(_(t, ".mm-navbar__title")[0], "hidden", n);
                })),
                t.text &&
                (this.bind("initAddons:after", function () {
                    e.bind("setPage:after", function () {
                        this.trigger("setPage:after:sr-text", [].slice.call(arguments));
                    }),
                        e.bind("initBlocker:after", function () {
                            this.trigger("initBlocker:after:sr-text", [].slice.call(arguments));
                        });
                }),
                    this.bind("initNavbar:after", function (t) {
                        var i = y(t, ".mm-navbar")[0];
                        if (i) {
                            var s = y(i, ".mm-btn_prev")[0];
                            s && (s.innerHTML = M.sr_text(e.i18n(n.text.closeSubmenu)));
                        }
                    }),
                    this.bind("initListview:after", function (t) {
                        var i = t.closest(".mm-panel").mmParent;
                        if (i) {
                            var s = y(i, ".mm-btn_next")[0];
                            if (s) {
                                var a = e.i18n(n.text[s.parentElement.matches(".mm-listitem_vertical") ? "toggleSubmenu" : "openSubmenu"]);
                                s.innerHTML += M.sr_text(a);
                            }
                        }
                    }));
            },
            scrollBugFix: function () {
                var e = this;
                if (W && this.opts.offCanvas && this.opts.offCanvas.blockUI) {
                    var t = (function (e) {
                        return "boolean" == typeof e && (e = { fix: e }), "object" != typeof e && (e = {}), e;
                    })(this.opts.scrollBugFix);
                    if (((this.opts.scrollBugFix = o(t, M.options.scrollBugFix)), t.fix)) {
                        var n,
                            i,
                            s =
                                ((n = this.node.menu),
                                    (i = ""),
                                    n.addEventListener("touchmove", function (e) {
                                        (i = ""), e.movementY > 0 ? (i = "down") : e.movementY < 0 && (i = "up");
                                    }),
                                    {
                                        get: function () {
                                            return i;
                                        },
                                    });
                        this.node.menu.addEventListener("scroll", a, { passive: !1 }),
                            this.node.menu.addEventListener(
                                "touchmove",
                                function (e) {
                                    var t = e.target.closest(".mm-panel, .mm-iconbar__top, .mm-iconbar__bottom");
                                    t && t.closest(".mm-listitem_vertical") && (t = L(t, ".mm-panel").pop()),
                                        t ? (t.scrollHeight === t.offsetHeight ? a(e) : ((0 == t.scrollTop && "down" == s.get()) || (t.scrollHeight == t.scrollTop + t.offsetHeight && "up" == s.get())) && a(e)) : a(e);
                                },
                                { passive: !1 }
                            ),
                            this.bind("open:start", function () {
                                var t = y(e.node.pnls, ".mm-panel_opened")[0];
                                t && (t.scrollTop = 0);
                            }),
                            window.addEventListener("orientationchange", function (t) {
                                var n = y(e.node.pnls, ".mm-panel_opened")[0];
                                n && ((n.scrollTop = 0), (n.style["-webkit-overflow-scrolling"] = "auto"), (n.style["-webkit-overflow-scrolling"] = "touch"));
                            });
                    }
                }
                function a(e) {
                    e.preventDefault(), e.stopPropagation();
                }
            },
            autoHeight: function () {
                var e = this,
                    t = (function (e) {
                        return "boolean" == typeof e && e && (e = { height: "auto" }), "string" == typeof e && (e = { height: e }), "object" != typeof e && (e = {}), e;
                    })(this.opts.autoHeight);
                if (((this.opts.autoHeight = o(t, M.options.autoHeight)), "auto" == t.height || "highest" == t.height)) {
                    var n,
                        i =
                            ((n = function (e) {
                                return (
                                    e.parentElement.matches(".mm-listitem_vertical") &&
                                    (e = L(e, ".mm-panel").filter(function (e) {
                                        return !e.parentElement.matches(".mm-listitem_vertical");
                                    })[0]),
                                        e
                                );
                            }),
                                function () {
                                    if (!e.opts.offCanvas || e.vars.opened) {
                                        var i,
                                            s,
                                            a = 0,
                                            o = e.node.menu.offsetHeight - e.node.pnls.offsetHeight;
                                        e.node.menu.classList.add("mm-menu_autoheight-measuring"),
                                            "auto" == t.height
                                                ? ((s = y(e.node.pnls, ".mm-panel_opened")[0]) && (s = n(s)), s || (s = y(e.node.pnls, ".mm-panel")[0]), (a = s.scrollHeight))
                                                : "highest" == t.height &&
                                                ((i = 0),
                                                    y(e.node.pnls, ".mm-panel").forEach(function (e) {
                                                        (e = n(e)), (i = Math.max(i, e.scrollHeight));
                                                    }),
                                                    (a = i)),
                                            (e.node.menu.style.height = a + o + "px"),
                                            e.node.menu.classList.remove("mm-menu_autoheight-measuring");
                                    }
                                });
                    this.bind("initMenu:after", function () {
                        e.node.menu.classList.add("mm-menu_autoheight");
                    }),
                    this.opts.offCanvas && this.bind("open:start", i),
                    "highest" == t.height && this.bind("initPanels:after", i),
                    "auto" == t.height && (this.bind("updateListview", i), this.bind("openPanel:start", i));
                }
            },
            backButton: function () {
                var e = this;
                if (this.opts.offCanvas) {
                    var t = (function (e) {
                        return "boolean" == typeof e && (e = { close: e }), "object" != typeof e && (e = {}), e;
                    })(this.opts.backButton);
                    this.opts.backButton = o(t, M.options.backButton);
                    var n = "#" + this.node.menu.id;
                    if (t.close) {
                        var i = [],
                            s = function () {
                                (i = [n]),
                                    y(e.node.pnls, ".mm-panel_opened, .mm-panel_opened-parent").forEach(function (e) {
                                        i.push("#" + e.id);
                                    });
                            };
                        this.bind("open:finish", function () {
                            history.pushState(null, document.title, n);
                        }),
                            this.bind("open:finish", s),
                            this.bind("openPanel:finish", s),
                            this.bind("close:finish", function () {
                                (i = []), history.back(), history.pushState(null, document.title, location.pathname + location.search);
                            }),
                            window.addEventListener("popstate", function (t) {
                                if (e.vars.opened && i.length) {
                                    var s = (i = i.slice(0, -1))[i.length - 1];
                                    s == n ? e.close() : (e.openPanel(e.node.menu.querySelector(s)), history.pushState(null, document.title, n));
                                }
                            });
                    }
                    t.open &&
                    window.addEventListener("popstate", function (t) {
                        e.vars.opened || location.hash != n || e.open();
                    });
                }
            },
            columns: function () {
                var e = this,
                    t = (function (e) {
                        return (
                            "boolean" == typeof e && (e = { add: e }),
                            "number" == typeof e && (e = { add: !0, visible: e }),
                            "object" != typeof e && (e = {}),
                            "number" == typeof e.visible && (e.visible = { min: e.visible, max: e.visible }),
                                e
                        );
                    })(this.opts.columns);
                if (((this.opts.columns = o(t, M.options.columns)), t.add)) {
                    (t.visible.min = Math.max(1, Math.min(6, t.visible.min))), (t.visible.max = Math.max(t.visible.min, Math.min(6, t.visible.max)));
                    for (var n = [], i = [], s = ["mm-panel_opened", "mm-panel_opened-parent", "mm-panel_highest"], a = 0; a <= t.visible.max; a++) n.push("mm-menu_columns-" + a), i.push("mm-panel_columns-" + a);
                    s.push.apply(s, i),
                        this.bind("openPanel:before", function (t) {
                            var n;
                            if ((t && (n = t.mmParent), n && !n.classList.contains("mm-listitem_vertical") && (n = n.closest(".mm-panel")))) {
                                var i = n.className;
                                if (i.length && (i = i.split("mm-panel_columns-")[1]))
                                    for (var a = parseInt(i.split(" ")[0], 10) + 1; a > 0; ) {
                                        if (!(t = y(e.node.pnls, ".mm-panel_columns-" + a)[0])) {
                                            a = -1;
                                            break;
                                        }
                                        a++,
                                            t.classList.add("mm-hidden"),
                                            s.forEach(function (e) {
                                                t.classList.remove(e);
                                            });
                                    }
                            }
                        }),
                        this.bind("openPanel:start", function (s) {
                            if (s) {
                                var a = s.mmParent;
                                if (a && a.classList.contains("mm-listitem_vertical")) return;
                            }
                            var o = y(e.node.pnls, ".mm-panel_opened-parent").length;
                            s.matches(".mm-panel_opened-parent") || o++,
                                (o = Math.min(t.visible.max, Math.max(t.visible.min, o))),
                                n.forEach(function (t) {
                                    e.node.menu.classList.remove(t);
                                }),
                                e.node.menu.classList.add("mm-menu_columns-" + o);
                            var r = [];
                            y(e.node.pnls, ".mm-panel").forEach(function (e) {
                                i.forEach(function (t) {
                                    e.classList.remove(t);
                                }),
                                e.matches(".mm-panel_opened-parent") && r.push(e);
                            }),
                                r.push(s),
                                r.slice(-t.visible.max).forEach(function (e, t) {
                                    e.classList.add("mm-panel_columns-" + t);
                                });
                        });
                }
            },
            counters: function () {
                var e = this,
                    t = (function (e) {
                        return "boolean" == typeof e && (e = { add: e, addTo: "panels", count: e }), "object" != typeof e && (e = {}), "panels" == e.addTo && (e.addTo = ".mm-listview"), e;
                    })(this.opts.counters);
                if (
                    ((this.opts.counters = o(t, M.options.counters)),
                        this.bind("initListview:after", function (t) {
                            var n = e.conf.classNames.counters.counter;
                            _(t, "." + n).forEach(function (e) {
                                x(e, n, "mm-counter");
                            });
                        }),
                    t.add &&
                    this.bind("initListview:after", function (e) {
                        if (e.matches(t.addTo)) {
                            var n = e.closest(".mm-panel").mmParent;
                            if (n && !_(n, ".mm-counter").length) {
                                var i = y(n, ".mm-btn")[0];
                                i && i.prepend(g("span.mm-counter"));
                            }
                        }
                    }),
                        t.count)
                ) {
                    var n = function (t) {
                        (t ? [t.closest(".mm-panel")] : y(e.node.pnls, ".mm-panel")).forEach(function (e) {
                            var t = e.mmParent;
                            if (t) {
                                var n = _(t, ".mm-counter")[0];
                                if (n) {
                                    var i = [];
                                    y(e, ".mm-listview").forEach(function (e) {
                                        i.push.apply(i, y(e));
                                    }),
                                        (n.innerHTML = w(i).length.toString());
                                }
                            }
                        });
                    };
                    this.bind("initListview:after", n), this.bind("updateListview", n);
                }
            },
            dividers: function () {
                var e = this,
                    t = (function (e) {
                        return "boolean" == typeof e && (e = { add: e }), "object" != typeof e && (e = {}), "panels" == e.addTo && (e.addTo = ".mm-listview"), e;
                    })(this.opts.dividers);
                (this.opts.dividers = o(t, M.options.dividers)),
                    this.bind("initListview:after", function (t) {
                        y(t).forEach(function (t) {
                            x(t, e.conf.classNames.divider, "mm-divider"), t.matches(".mm-divider") && t.classList.remove("mm-listitem");
                        });
                    }),
                t.add &&
                this.bind("initListview:after", function (e) {
                    if (e.matches(t.addTo)) {
                        _(e, ".mm-divider").forEach(function (e) {
                            e.remove();
                        });
                        var n = "";
                        w(y(e)).forEach(function (t) {
                            var i = y(t, ".mm-listitem__text")[0].textContent.trim().toLowerCase()[0];
                            if (i.length && i != n) {
                                n = i;
                                var s = g("li.mm-divider");
                                (s.textContent = i), e.insertBefore(s, t);
                            }
                        });
                    }
                });
            },
            drag: function () {
                var e = this;
                if (this.opts.offCanvas) {
                    var t = (function (e) {
                        return "boolean" == typeof e && (e = { open: e }), "object" != typeof e && (e = {}), e;
                    })(this.opts.drag);
                    (this.opts.drag = o(t, M.options.drag)),
                    t.open &&
                    this.bind("setPage:after", function (n) {
                        ce.call(e, t.node || n);
                    });
                }
            },
            dropdown: function () {
                var e = this;
                if (this.opts.offCanvas) {
                    var t = (function (e) {
                        return "boolean" == typeof e && e && (e = { drop: e }), "object" != typeof e && (e = {}), "string" == typeof e.position && (e.position = { of: e.position }), e;
                    })(this.opts.dropdown);
                    this.opts.dropdown = o(t, M.options.dropdown);
                    var n = this.conf.dropdown;
                    if (t.drop) {
                        var i;
                        this.bind("initMenu:after", function () {
                            if ((e.node.menu.classList.add("mm-menu_dropdown"), "string" != typeof t.position.of)) {
                                var n = p(e.node.menu.id);
                                n && (t.position.of = '[href="#' + n + '"]');
                            }
                            if ("string" == typeof t.position.of) {
                                i = _(document.body, t.position.of)[0];
                                var s = t.event.split(" ");
                                1 == s.length && (s[1] = s[0]),
                                "hover" == s[0] &&
                                i.addEventListener(
                                    "mouseenter",
                                    function () {
                                        e.open();
                                    },
                                    { passive: !0 }
                                ),
                                "hover" == s[1] &&
                                e.node.menu.addEventListener(
                                    "mouseleave",
                                    function () {
                                        e.close();
                                    },
                                    { passive: !0 }
                                );
                            }
                        }),
                            this.bind("open:start", function () {
                                (e.node.menu.mmStyle = e.node.menu.getAttribute("style")), e.node.wrpr.classList.add("mm-wrapper_dropdown");
                            }),
                            this.bind("close:finish", function () {
                                e.node.menu.setAttribute("style", e.node.menu.mmStyle), e.node.wrpr.classList.remove("mm-wrapper_dropdown");
                            });
                        var s = function (e, s) {
                            var a,
                                o,
                                r,
                                c = s[0],
                                m = s[1],
                                l = "x" == e ? "offsetWidth" : "offsetHeight",
                                d = "x" == e ? "left" : "top",
                                p = "x" == e ? "right" : "bottom",
                                u = "x" == e ? "width" : "height",
                                f = "x" == e ? "innerWidth" : "innerHeight",
                                h = "x" == e ? "maxWidth" : "maxHeight",
                                v = null,
                                b = ((a = d), i.getBoundingClientRect()[a] + document.body["left" === a ? "scrollLeft" : "scrollTop"]),
                                g = b + i[l],
                                _ = window[f],
                                y = n.offset.button[e] + n.offset.viewport[e];
                            if (t.position[e])
                                switch (t.position[e]) {
                                    case "left":
                                    case "bottom":
                                        v = "after";
                                        break;
                                    case "right":
                                    case "top":
                                        v = "before";
                                }
                            return (
                                null === v && (v = b + (g - b) / 2 < _ / 2 ? "after" : "before"),
                                    "after" == v
                                        ? ((r = _ - ((o = "x" == e ? b : g) + y)), (c[d] = o + n.offset.button[e] + "px"), (c[p] = "auto"), t.tip && m.push("mm-menu_tip-" + ("x" == e ? "left" : "top")))
                                        : ((r = (o = "x" == e ? g : b) - y), (c[p] = "calc( 100% - " + (o - n.offset.button[e]) + "px )"), (c[d] = "auto"), t.tip && m.push("mm-menu_tip-" + ("x" == e ? "right" : "bottom"))),
                                t.fitViewport && (c[h] = Math.min(n[u].max, r) + "px"),
                                    [c, m]
                            );
                        };
                        this.bind("open:start", a),
                            window.addEventListener(
                                "resize",
                                function (t) {
                                    a.call(e);
                                },
                                { passive: !0 }
                            ),
                        this.opts.offCanvas.blockUI ||
                        window.addEventListener(
                            "scroll",
                            function (t) {
                                a.call(e);
                            },
                            { passive: !0 }
                        );
                    }
                }
                function a() {
                    var e = this;
                    if (this.vars.opened) {
                        this.node.menu.setAttribute("style", this.node.menu.mmStyle);
                        var n = [{}, []];
                        for (var i in ((n = s.call(this, "y", n)), (n = s.call(this, "x", n))[0])) this.node.menu.style[i] = n[0][i];
                        if (t.tip) {
                            ["mm-menu_tip-left", "mm-menu_tip-right", "mm-menu_tip-top", "mm-menu_tip-bottom"].forEach(function (t) {
                                e.node.menu.classList.remove(t);
                            }),
                                n[1].forEach(function (t) {
                                    e.node.menu.classList.add(t);
                                });
                        }
                    }
                }
            },
            fixedElements: function () {
                var e = this;
                if (this.opts.offCanvas) {
                    var t,
                        n,
                        i = this.conf.fixedElements;
                    this.bind("setPage:after", function (s) {
                        (t = e.conf.classNames.fixedElements.fixed),
                            (n = _(document, i.insertSelector)[0]),
                            _(s, "." + t).forEach(function (e) {
                                x(e, t, "mm-slideout"), n[i.insertMethod](e);
                            });
                    });
                }
            },
            iconbar: function () {
                var e,
                    t = this,
                    n = (function (e) {
                        return "array" == r(e) && (e = { use: !0, top: e }), "object" != r(e) && (e = {}), void 0 === e.use && (e.use = !0), "boolean" == typeof e.use && e.use && (e.use = !0), e;
                    })(this.opts.iconbar);
                if (
                    ((this.opts.iconbar = o(n, M.options.iconbar)), n.use) &&
                    (["top", "bottom"].forEach(function (t, i) {
                        var s = n[t];
                        "array" != r(s) && (s = [s]);
                        for (var a = g("div.mm-iconbar__" + t), o = 0, c = s.length; o < c; o++) "string" == typeof s[o] ? (a.innerHTML += s[o]) : a.append(s[o]);
                        a.children.length && (e || (e = g("div.mm-iconbar")), e.append(a));
                    }),
                        e)
                ) {
                    this.bind("initMenu:after", function () {
                        t.node.menu.prepend(e);
                    });
                    var i = "mm-menu_iconbar-" + n.position,
                        s = function () {
                            t.node.menu.classList.add(i), M.sr_aria(e, "hidden", !1);
                        };
                    if (
                        ("boolean" == typeof n.use
                            ? this.bind("initMenu:after", s)
                            : k(n.use, s, function () {
                                t.node.menu.classList.remove(i), M.sr_aria(e, "hidden", !0);
                            }),
                        "tabs" == n.type)
                    ) {
                        e.classList.add("mm-iconbar_tabs"),
                            e.addEventListener("click", function (e) {
                                var n = e.target;
                                if (n.matches("a"))
                                    if (n.matches(".mm-iconbar__tab_selected")) e.stopImmediatePropagation();
                                    else
                                        try {
                                            var i = t.node.menu.querySelector(n.getAttribute("href"))[0];
                                            i && i.matches(".mm-panel") && (e.preventDefault(), e.stopImmediatePropagation(), t.openPanel(i, !1));
                                        } catch (e) {}
                            });
                        var a = function (t) {
                            _(e, "a").forEach(function (e) {
                                e.classList.remove("mm-iconbar__tab_selected");
                            });
                            var n = _(e, '[href="#' + t.id + '"]')[0];
                            if (n) n.classList.add("mm-iconbar__tab_selected");
                            else {
                                var i = t.mmParent;
                                i && a(i.closest(".mm-panel"));
                            }
                        };
                        this.bind("openPanel:start", a);
                    }
                }
            },
            iconPanels: function () {
                var e = this,
                    t = (function (e) {
                        return "boolean" == typeof e && (e = { add: e }), ("number" != typeof e && "string" != typeof e) || (e = { add: !0, visible: e }), "object" != typeof e && (e = {}), e;
                    })(this.opts.iconPanels);
                this.opts.iconPanels = o(t, M.options.iconPanels);
                var n = !1;
                if (("first" == t.visible && ((n = !0), (t.visible = 1)), (t.visible = Math.min(3, Math.max(1, t.visible))), t.visible++, t.add)) {
                    this.bind("initMenu:after", function () {
                        var n = ["mm-menu_iconpanel"];
                        t.hideNavbar && n.push("mm-menu_hidenavbar"),
                        t.hideDivider && n.push("mm-menu_hidedivider"),
                            n.forEach(function (t) {
                                e.node.menu.classList.add(t);
                            });
                    });
                    var i = [];
                    if (!n) for (var s = 0; s <= t.visible; s++) i.push("mm-panel_iconpanel-" + s);
                    this.bind("openPanel:start", function (s) {
                        var a = y(e.node.pnls, ".mm-panel");
                        if (!(s = s || a[0]).parentElement.matches(".mm-listitem_vertical"))
                            if (n)
                                a.forEach(function (e, t) {
                                    e.classList[0 == t ? "add" : "remove"]("mm-panel_iconpanel-first");
                                });
                            else {
                                a.forEach(function (e) {
                                    i.forEach(function (t) {
                                        e.classList.remove(t);
                                    });
                                }),
                                    (a = a.filter(function (e) {
                                        return e.matches(".mm-panel_opened-parent");
                                    }));
                                var o = !1;
                                a.forEach(function (e) {
                                    s === e && (o = !0);
                                }),
                                o || a.push(s),
                                    a.forEach(function (e) {
                                        e.classList.remove("mm-hidden");
                                    }),
                                    (a = a.slice(-t.visible)).forEach(function (e, t) {
                                        e.classList.add("mm-panel_iconpanel-" + t);
                                    });
                            }
                    }),
                        this.bind("initPanel:after", function (e) {
                            if (t.blockPanel && !e.parentElement.matches(".mm-listitem_vertical") && !y(e, ".mm-panel__blocker")[0]) {
                                var n = g("a.mm-panel__blocker");
                                n.setAttribute("href", "#" + e.closest(".mm-panel").id), e.prepend(n);
                            }
                        });
                }
            },
            keyboardNavigation: function () {
                var e = this;
                if (!W) {
                    var t = (function (e) {
                        return ("boolean" != typeof e && "string" != typeof e) || (e = { enable: e }), "object" != typeof e && (e = {}), e;
                    })(this.opts.keyboardNavigation);
                    if (((this.opts.keyboardNavigation = o(t, M.options.keyboardNavigation)), t.enable)) {
                        var n = g("button.mm-tabstart.mm-sronly"),
                            i = g("button.mm-tabend.mm-sronly"),
                            s = g("button.mm-tabend.mm-sronly");
                        this.bind("initMenu:after", function () {
                            t.enhance && e.node.menu.classList.add("mm-menu_keyboardfocus"), ve.call(e, t.enhance);
                        }),
                            this.bind("initOpened:before", function () {
                                e.node.menu.prepend(n),
                                    e.node.menu.append(i),
                                    y(e.node.menu, ".mm-navbars-top, .mm-navbars-bottom").forEach(function (e) {
                                        e.querySelectorAll(".mm-navbar__title").forEach(function (e) {
                                            e.setAttribute("tabindex", "-1");
                                        });
                                    });
                            }),
                            this.bind("initBlocker:after", function () {
                                M.node.blck.append(s), y(M.node.blck, "a")[0].classList.add("mm-tabstart");
                            });
                        var a = "input, select, textarea, button, label, a[href]",
                            r = function (n) {
                                n = n || y(e.node.pnls, ".mm-panel_opened")[0];
                                var i = null,
                                    s = document.activeElement.closest(".mm-navbar");
                                if (!s || s.closest(".mm-menu") != e.node.menu) {
                                    if ("default" == t.enable && ((i = _(n, ".mm-listview a[href]:not(.mm-hidden)")[0]) || (i = _(n, a + ":not(.mm-hidden)")[0]), !i)) {
                                        var o = [];
                                        y(e.node.menu, ".mm-navbars_top, .mm-navbars_bottom").forEach(function (e) {
                                            o.push.apply(o, _(e, a + ":not(.mm-hidden)"));
                                        }),
                                            (i = o[0]);
                                    }
                                    i || (i = y(e.node.menu, ".mm-tabstart")[0]), i && i.focus();
                                }
                            };
                        this.bind("open:finish", r),
                            this.bind("openPanel:finish", r),
                            this.bind("initOpened:after:sr-aria", function () {
                                [e.node.menu, M.node.blck].forEach(function (e) {
                                    y(e, ".mm-tabstart, .mm-tabend").forEach(function (e) {
                                        M.sr_aria(e, "hidden", !0), M.sr_role(e, "presentation");
                                    });
                                });
                            });
                    }
                }
            },
            lazySubmenus: function () {
                var e = this,
                    t = (function (e) {
                        return "boolean" == typeof e && (e = { load: e }), "object" != typeof e && (e = {}), e;
                    })(this.opts.lazySubmenus);
                (this.opts.lazySubmenus = o(t, M.options.lazySubmenus)),
                t.load &&
                (this.bind("initPanels:before", function () {
                    var t = [];
                    _(e.node.pnls, "li").forEach(function (n) {
                        t.push.apply(t, y(n, e.conf.panelNodetype.join(", ")));
                    }),
                        t
                            .filter(function (e) {
                                return !e.matches(".mm-listview_inset");
                            })
                            .filter(function (e) {
                                return !e.matches(".mm-nolistview");
                            })
                            .filter(function (e) {
                                return !e.matches(".mm-nopanel");
                            })
                            .forEach(function (e) {
                                ["mm-panel_lazysubmenu", "mm-nolistview", "mm-nopanel"].forEach(function (t) {
                                    e.classList.add(t);
                                });
                            });
                }),
                    this.bind("initPanels:before", function () {
                        var t = [];
                        _(e.node.pnls, "." + e.conf.classNames.selected).forEach(function (e) {
                            t.push.apply(t, L(e, ".mm-panel_lazysubmenu"));
                        }),
                        t.length &&
                        t.forEach(function (e) {
                            console.log(e);
                            ["mm-panel_lazysubmenu", "mm-nolistview", "mm-nopanel"].forEach(function (t) {
                                e.classList.remove(t);
                            });
                        });
                    }),
                    this.bind("openPanel:before", function (t) {
                        var n = _(t, ".mm-panel_lazysubmenu").filter(function (e) {
                            return !e.matches(".mm-panel_lazysubmenu .mm-panel_lazysubmenu");
                        });
                        t.matches(".mm-panel_lazysubmenu") && n.unshift(t),
                            n.forEach(function (t) {
                                ["mm-panel_lazysubmenu", "mm-nolistview", "mm-nopanel"].forEach(function (e) {
                                    t.classList.remove(e);
                                }),
                                    e.initPanel(t);
                            });
                    }));
            },
            navbars: ye,
            pageScroll: function () {
                var e = this,
                    t = (function (e) {
                        return "boolean" == typeof e && (e = { scroll: e }), "object" != typeof e && (e = {}), e;
                    })(this.opts.pageScroll);
                this.opts.pageScroll = o(t, M.options.pageScroll);
                var n,
                    i = this.conf.pageScroll;
                function s() {
                    n && window.scrollTo({ top: n.getBoundingClientRect().top + document.scrollingElement.scrollTop - i.scrollOffset, behavior: "smooth" }), (n = null);
                }
                function a(e) {
                    try {
                        return "#" != e && "#" == e.slice(0, 1) ? M.node.page.querySelector(e) : null;
                    } catch (e) {
                        return null;
                    }
                }
                if (
                    (t.scroll &&
                    this.bind("close:finish", function () {
                        s();
                    }),
                    this.opts.offCanvas &&
                    t.scroll &&
                    this.clck.push(function (t, i) {
                        if (((n = null), i.inMenu)) {
                            var o = t.getAttribute("href");
                            if ((n = a(o))) return e.node.menu.matches(".mm-menu_sidebar-expanded") && e.node.wrpr.matches(".mm-wrapper_sidebar-expanded") ? void s() : { close: !0 };
                        }
                    }),
                        t.update)
                ) {
                    var r = [];
                    this.bind("initListview:after", function (e) {
                        E(y(e, ".mm-listitem")).forEach(function (e) {
                            var t = a(e.getAttribute("href"));
                            t && r.unshift(t);
                        });
                    });
                    var c = -1;
                    window.addEventListener("scroll", function (t) {
                        for (var n = window.scrollY, s = 0; s < r.length; s++)
                            if (r[s].offsetTop < n + i.updateOffset) {
                                if (c !== s) {
                                    c = s;
                                    var a = E(_(y(e.node.pnls, ".mm-panel_opened")[0], ".mm-listitem"));
                                    (a = a.filter(function (e) {
                                        return e.matches('[href="#' + r[s].id + '"]');
                                    })).length && e.setSelected(a[0].parentElement);
                                }
                                break;
                            }
                    });
                }
            },
            searchfield: function () {
                var e = this,
                    t = (function (e) {
                        return (
                            "boolean" == typeof e && (e = { add: e }),
                            "object" != typeof e && (e = {}),
                            "boolean" == typeof e.panel && (e.panel = { add: e.panel }),
                            "object" != typeof e.panel && (e.panel = {}),
                            "panel" == e.addTo && (e.panel.add = !0),
                            e.panel.add && ((e.showSubPanels = !1), e.panel.splash && (e.cancel = !0)),
                                e
                        );
                    })(this.opts.searchfield);
                this.opts.searchfield = o(t, M.options.searchfield);
                this.conf.searchfield;
                t.add &&
                (this.bind("close:start", function () {
                    _(e.node.menu, ".mm-searchfield").forEach(function (e) {
                        e.blur();
                    });
                }),
                    this.bind("initPanel:after", function (n) {
                        var i = null;
                        t.panel.add && (i = Ae.call(e));
                        var s = null;
                        switch (t.addTo) {
                            case "panels":
                                s = [n];
                                break;
                            case "panel":
                                s = [i];
                                break;
                            default:
                                "string" == typeof t.addTo ? (s = _(e.node.menu, t.addTo)) : "array" == r(t.addTo) && (s = t.addTo);
                        }
                        s.forEach(function (n) {
                            (n = Te.call(e, n)), t.search && n && Ce.call(e, n);
                        }),
                        t.noResults && Ne.call(e, t.panel.add ? i : n);
                    }),
                    this.clck.push(function (t, n) {
                        if (n.inMenu && t.matches(".mm-searchfield__btn")) {
                            if (t.matches(".mm-btn_close")) {
                                var i = _((s = t.closest(".mm-searchfield")), "input")[0];
                                return (i.value = ""), e.search(i), !0;
                            }
                            var s;
                            if (t.matches(".mm-btn_next")) return (s = t.closest("form")) && s.submit(), !0;
                        }
                    }));
            },
            sectionIndexer: function () {
                var e = this,
                    t = (function (e) {
                        return "boolean" == typeof e && (e = { add: e }), "object" != typeof e && (e = {}), e;
                    })(this.opts.sectionIndexer);
                (this.opts.sectionIndexer = o(t, M.options.sectionIndexer)),
                t.add &&
                this.bind("initPanels:after", function () {
                    if (!e.node.indx) {
                        var t = "";
                        "abcdefghijklmnopqrstuvwxyz".split("").forEach(function (e) {
                            t += '<a href="#">' + e + "</a>";
                        });
                        var n = g("div.mm-sectionindexer");
                        (n.innerHTML = t),
                            e.node.pnls.prepend(n),
                            (e.node.indx = n),
                            e.node.indx.addEventListener("click", function (e) {
                                e.target.matches("a") && e.preventDefault();
                            });
                        var i = function (t) {
                            if (t.target.matches("a")) {
                                var n = t.target.textContent,
                                    i = y(e.node.pnls, ".mm-panel_opened")[0],
                                    s = -1,
                                    a = i.scrollTop;
                                (i.scrollTop = 0),
                                    _(i, ".mm-divider")
                                        .filter(function (e) {
                                            return !e.matches(".mm-hidden");
                                        })
                                        .forEach(function (e) {
                                            s < 0 && n == e.textContent.trim().slice(0, 1).toLowerCase() && (s = e.offsetTop);
                                        }),
                                    (i.scrollTop = s > -1 ? s : a);
                            }
                        };
                        W ? (e.node.indx.addEventListener("touchstart", i), e.node.indx.addEventListener("touchmove", i)) : e.node.indx.addEventListener("mouseover", i);
                    }
                    e.bind("openPanel:start", function (t) {
                        var n = _(t, ".mm-divider").filter(function (e) {
                            return !e.matches(".mm-hidden");
                        }).length;
                        e.node.indx.classList[n ? "add" : "remove"]("mm-sectionindexer_active");
                    });
                });
            },
            setSelected: function () {
                var e = this,
                    t = (function (e) {
                        return "boolean" == typeof e && (e = { hover: e, parent: e }), "object" != typeof e && (e = {}), e;
                    })(this.opts.setSelected);
                if (((this.opts.setSelected = o(t, M.options.setSelected)), "detect" == t.current)) {
                    var n = function (t) {
                        t = t.split("?")[0].split("#")[0];
                        var i = e.node.menu.querySelector('a[href="' + t + '"], a[href="' + t + '/"]');
                        if (i) e.setSelected(i.parentElement);
                        else {
                            var s = t.split("/").slice(0, -1);
                            s.length && n(s.join("/"));
                        }
                    };
                    this.bind("initMenu:after", function () {
                        n.call(e, window.location.href);
                    });
                } else
                    t.current ||
                    this.bind("initListview:after", function (e) {
                        y(e, ".mm-listitem_selected").forEach(function (e) {
                            e.classList.remove("mm-listitem_selected");
                        });
                    });
                t.hover &&
                this.bind("initMenu:after", function () {
                    e.node.menu.classList.add("mm-menu_selected-hover");
                }),
                t.parent &&
                (this.bind("openPanel:finish", function (t) {
                    _(e.node.pnls, ".mm-listitem_selected-parent").forEach(function (e) {
                        e.classList.remove("mm-listitem_selected-parent");
                    });
                    for (var n = t.mmParent; n; ) n.matches(".mm-listitem_vertical") || n.classList.add("mm-listitem_selected-parent"), (n = (n = n.closest(".mm-panel")).mmParent);
                }),
                    this.bind("initMenu:after", function () {
                        e.node.menu.classList.add("mm-menu_selected-parent");
                    }));
            },
            sidebar: function () {
                var e = this;
                if (this.opts.offCanvas) {
                    var t = (function (e) {
                        return (
                            ("string" == typeof e || ("boolean" == typeof e && e) || "number" == typeof e) && (e = { expanded: e }),
                            "object" != typeof e && (e = {}),
                            "boolean" == typeof e.collapsed && e.collapsed && (e.collapsed = { use: !0 }),
                            ("string" != typeof e.collapsed && "number" != typeof e.collapsed) || (e.collapsed = { use: e.collapsed }),
                            "object" != typeof e.collapsed && (e.collapsed = {}),
                            "boolean" == typeof e.expanded && e.expanded && (e.expanded = { use: !0 }),
                            ("string" != typeof e.expanded && "number" != typeof e.expanded) || (e.expanded = { use: e.expanded }),
                            "object" != typeof e.expanded && (e.expanded = {}),
                                e
                        );
                    })(this.opts.sidebar);
                    if (((this.opts.sidebar = o(t, M.options.sidebar)), t.collapsed.use)) {
                        this.bind("initMenu:after", function () {
                            if ((e.node.menu.classList.add("mm-menu_sidebar-collapsed"), t.collapsed.blockMenu && e.opts.offCanvas && !y(e.node.menu, ".mm-menu__blocker")[0])) {
                                var n = g("a.mm-menu__blocker");
                                n.setAttribute("href", "#" + e.node.menu.id), e.node.menu.prepend(n);
                            }
                            t.collapsed.hideNavbar && e.node.menu.classList.add("mm-menu_hidenavbar"), t.collapsed.hideDivider && e.node.menu.classList.add("mm-menu_hidedivider");
                        });
                        var n = function () {
                                e.node.wrpr.classList.add("mm-wrapper_sidebar-collapsed");
                            },
                            i = function () {
                                e.node.wrpr.classList.remove("mm-wrapper_sidebar-collapsed");
                            };
                        "boolean" == typeof t.collapsed.use ? this.bind("initMenu:after", n) : k(t.collapsed.use, n, i);
                    }
                    if (t.expanded.use) {
                        this.bind("initMenu:after", function () {
                            e.node.menu.classList.add("mm-menu_sidebar-expanded");
                        });
                        (n = function () {
                            e.node.wrpr.classList.add("mm-wrapper_sidebar-expanded"), e.node.wrpr.matches(".mm-wrapper_sidebar-closed") || e.open();
                        }),
                            (i = function () {
                                e.node.wrpr.classList.remove("mm-wrapper_sidebar-expanded"), e.close();
                            });
                        "boolean" == typeof t.expanded.use ? this.bind("initMenu:after", n) : k(t.expanded.use, n, i),
                            this.bind("close:start", function () {
                                e.node.wrpr.matches(".mm-wrapper_sidebar-expanded") &&
                                (e.node.wrpr.classList.add("mm-wrapper_sidebar-closed"), "remember" == t.expanded.initial && window.localStorage.setItem("mmenuExpandedState", "closed"));
                            }),
                            this.bind("open:start", function () {
                                e.node.wrpr.matches(".mm-wrapper_sidebar-expanded") &&
                                (e.node.wrpr.classList.remove("mm-wrapper_sidebar-closed"), "remember" == t.expanded.initial && window.localStorage.setItem("mmenuExpandedState", "open"));
                            });
                        var s = t.expanded.initial;
                        if ("remember" == t.expanded.initial) {
                            var a = window.localStorage.getItem("mmenuExpandedState");
                            switch (a) {
                                case "open":
                                case "closed":
                                    s = a;
                            }
                        }
                        "closed" == s &&
                        this.bind("initMenu:after", function () {
                            e.node.wrpr.classList.add("mm-wrapper_sidebar-closed");
                        }),
                            this.clck.push(function (n, i) {
                                if (i.inMenu && i.inListview && e.node.wrpr.matches(".mm-wrapper_sidebar-expanded")) return { close: "closed" == t.expanded.initial };
                            });
                    }
                }
            },
            toggles: function () {
                var e = this;
                this.bind("initPanel:after", function (t) {
                    _(t, "input").forEach(function (t) {
                        x(t, e.conf.classNames.toggles.toggle, "mm-toggle"), x(t, e.conf.classNames.toggles.check, "mm-check");
                    });
                });
            },
        }),
            (M.wrappers = {
                angular: function () {
                    this.opts.onClick = { close: !0, preventDefault: !1, setSelected: !0 };
                },
                bootstrap: function () {
                    var e = this;
                    if (this.node.menu.matches(".navbar-collapse")) {
                        this.conf.offCanvas && (this.conf.offCanvas.clone = !1);
                        var t = g("nav"),
                            n = g("div");
                        t.append(n),
                            y(this.node.menu).forEach(function (t) {
                                switch (!0) {
                                    case t.matches(".navbar-nav"):
                                        n.append(
                                            (function (e) {
                                                var t = g("ul");
                                                return (
                                                    _(e, ".nav-item").forEach(function (e) {
                                                        var n = g("li");
                                                        if ((e.matches(".active") && n.classList.add("Selected"), !e.matches(".nav-link"))) {
                                                            var i = y(e, ".dropdown-menu")[0];
                                                            i && n.append(o(i)), (e = y(e, ".nav-link")[0]);
                                                        }
                                                        n.prepend(a(e)), t.append(n);
                                                    }),
                                                        t
                                                );
                                            })(t)
                                        );
                                        break;
                                    case t.matches(".dropdown-menu"):
                                        n.append(o(t));
                                        break;
                                    case t.matches(".form-inline"):
                                        (e.conf.searchfield.form = { action: t.getAttribute("action") || null, method: t.getAttribute("method") || null }),
                                            (e.conf.searchfield.input = { name: t.querySelector("input").getAttribute("name") || null }),
                                            (e.conf.searchfield.clear = !1),
                                            (e.conf.searchfield.submit = !0);
                                        break;
                                    default:
                                        n.append(t.cloneNode(!0));
                                }
                            }),
                            this.bind("initMenu:before", function () {
                                document.body.prepend(t), (e.node.menu = t);
                            });
                        var i = this.node.menu.parentElement;
                        if (i) {
                            var s = i.querySelector(".navbar-toggler");
                            s &&
                            (s.removeAttribute("data-target"),
                                s.removeAttribute("aria-controls"),
                                (s.outerHTML = s.outerHTML),
                                (s = i.querySelector(".navbar-toggler")).addEventListener("click", function (t) {
                                    t.preventDefault(), t.stopImmediatePropagation(), e[e.vars.opened ? "close" : "open"]();
                                }));
                        }
                    }
                    function a(e) {
                        for (var t = g(e.matches("a") ? "a" : "span"), n = ["href", "title", "target"], i = 0; i < n.length; i++) void 0 !== e.getAttribute(n[i]) && t.setAttribute(n[i], e.getAttribute(n[i]));
                        return (
                            (t.innerHTML = e.innerHTML),
                                _(t, ".sr-only").forEach(function (e) {
                                    e.remove();
                                }),
                                t
                        );
                    }
                    function o(e) {
                        var t = g("ul");
                        return (
                            y(e).forEach(function (e) {
                                var n = g("li");
                                e.matches(".dropdown-divider") ? n.classList.add("Divider") : e.matches(".dropdown-item") && n.append(a(e)), t.append(n);
                            }),
                                t
                        );
                    }
                },
                olark: function () {
                    this.conf.offCanvas.page.noSelector.push("#olark");
                },
                turbolinks: function () {
                    var e;
                    document.addEventListener("turbolinks:before-visit", function (t) {
                        e = document
                            .querySelector(".mm-wrapper")
                            .className.split(" ")
                            .filter(function (e) {
                                return /mm-/.test(e);
                            });
                    }),
                        document.addEventListener("turbolinks:load", function (t) {
                            void 0 !== e && (document.querySelector(".mm-wrapper").className = e);
                        });
                },
                wordpress: function () {
                    this.conf.classNames.selected = "current-menu-item";
                    var e = document.getElementById("wpadminbar");
                    e && ((e.style.position = "fixed"), e.classList.add("mm-slideout"));
                },
            });
        var Oe;
        t.default = M;
        window && (window.Mmenu = M),
        (Oe = window.jQuery || window.Zepto || null) &&
        (Oe.fn.mmenu = function (e, t) {
            var n = Oe();
            return (
                this.each(function (i, s) {
                    if (!s.mmApi) {
                        var a = new M(s, e, t),
                            o = Oe(a.node.menu);
                        o.data("mmenu", a.API), (n = n.add(o));
                    }
                }),
                    n
            );
        });
    },
]);
