(function (e, t) {
    if (typeof define === "function" && define.amd) {
        define([], t)
    } else {
        e.htmx = t()
    }
})(typeof self !== "undefined" ? self : this, function () {
    return function () {
        "use strict";
        var t = ["get", "post", "put", "delete", "patch"];
        var r = t.map(function (e) {
            return "[hx-" + e + "], [data-hx-" + e + "]"
        }).join(", ");

        function a(e) {
            if (e == null || e === "null" || e === "false" || e === "") {
                return null
            } else if (e.lastIndexOf("ms") === e.length - 2) {
                return parseFloat(e.substr(0, e.length - 2))
            } else if (e.lastIndexOf("s") === e.length - 1) {
                return parseFloat(e.substr(0, e.length - 1)) * 1e3
            } else {
                return parseFloat(e)
            }
        }

        function u(e, t) {
            return e.getAttribute && e.getAttribute(t)
        }

        function l(e, t) {
            return e.hasAttribute && (e.hasAttribute(t) || e.hasAttribute("data-" + t))
        }

        function w(e, t) {
            return u(e, t) || u(e, "data-" + t)
        }

        function o(e) {
            return e.parentElement
        }

        function E() {
            return document
        }

        function f(e, t) {
            if (t(e)) {
                return e
            } else if (o(e)) {
                return f(o(e), t)
            } else {
                return null
            }
        }

        function O(e, t) {
            var r = null;
            f(e, function (e) {
                return r = w(e, t)
            });
            return r
        }

        function s(e, t) {
            var r = e.matches || e.matchesSelector || e.msMatchesSelector || e.mozMatchesSelector || e.webkitMatchesSelector || e.oMatchesSelector;
            return r && r.call(e, t)
        }

        function n(e) {
            var t = /<([a-z][^\/\0>\x20\t\r\n\f]*)/i;
            var r = t.exec(e);
            if (r) {
                return r[1].toLowerCase()
            } else {
                return ""
            }
        }

        function i(e, t) {
            var r = new DOMParser;
            var n = r.parseFromString(e, "text/html");
            var i = n.body;
            while (t > 0) {
                t--;
                i = i.firstChild
            }
            if (i == null) {
                i = E().createDocumentFragment()
            }
            return i
        }

        function c(e) {
            var t = n(e);
            switch (t) {
                case"thead":
                case"tbody":
                case"tfoot":
                case"colgroup":
                case"caption":
                    return i("<table>" + e + "</table>", 1);
                case"col":
                    return i("<table><colgroup>" + e + "</colgroup></table>", 2);
                case"tr":
                    return i("<table><tbody>" + e + "</tbody></table>", 2);
                case"td":
                case"th":
                    return i("<table><tbody><tr>" + e + "</tr></tbody></table>", 3);
                default:
                    return i(e, 0)
            }
        }

        function h(e, t) {
            return Object.prototype.toString.call(e) === "[object " + t + "]"
        }

        function v(e) {
            return h(e, "Function")
        }

        function d(e) {
            return h(e, "Object")
        }

        function L(e) {
            var t = "htmx-internal-data";
            var r = e[t];
            if (!r) {
                r = e[t] = {}
            }
            return r
        }

        function m(e) {
            var t = [];
            if (e) {
                for (var r = 0; r < e.length; r++) {
                    t.push(e[r])
                }
            }
            return t
        }

        function C(e, t) {
            if (e) {
                for (var r = 0; r < e.length; r++) {
                    t(e[r])
                }
            }
        }

        function g(e) {
            var t = e.getBoundingClientRect();
            var r = t.top;
            var n = t.bottom;
            return r < window.innerHeight && n >= 0
        }

        function T(e) {
            return E().body.contains(e)
        }

        function p(e) {
            return e.split(/\s+/)
        }

        function N(e, t) {
            for (var r in t) {
                if (t.hasOwnProperty(r)) {
                    e[r] = t[r]
                }
            }
            return e
        }

        function y(e) {
            try {
                return JSON.parse(e)
            } catch (e) {
                Me(e);
                return null
            }
        }

        function e(e) {
            return eval(e)
        }

        function x(t) {
            var e = htmx.on("load.htmx", function (e) {
                t(e.detail.elt)
            });
            return e
        }

        function b() {
            htmx.logger = function (e, t, r) {
                if (console) {
                    console.log(t, e, r)
                }
            }
        }

        function S(e, t) {
            if (t) {
                return e.querySelector(t)
            } else {
                return E().body.querySelector(e)
            }
        }

        function A(e, t) {
            if (t) {
                return e.querySelectorAll(t)
            } else {
                return E().body.querySelectorAll(e)
            }
        }

        function q(e, t) {
            if (t) {
                setTimeout(function () {
                    q(e)
                }, t)
            } else {
                e.parentElement.removeChild(e)
            }
        }

        function H(e, t, r) {
            if (r) {
                setTimeout(function () {
                    H(e, t)
                }, r)
            } else {
                e.classList.add(t)
            }
        }

        function k(e, t, r) {
            if (r) {
                setTimeout(function () {
                    k(e, t)
                }, r)
            } else {
                e.classList.remove(t)
            }
        }

        function R(e, t) {
            e.classList.toggle(t)
        }

        function D(e, t) {
            C(e.parentElement.children, function (e) {
                k(e, t)
            });
            H(e, t)
        }

        function M(e, t) {
            do {
                if (e == null || s(e, t)) return e
            } while (e = e && o(e))
        }

        function I(e, t, r) {
            if (v(t)) {
                return {target: E().body, event: e, listener: t}
            } else {
                return {target: e, event: t, listener: r}
            }
        }

        function X(t, r, n) {
            vt(function () {
                var e = I(t, r, n);
                e.target.addEventListener(e.event, e.listener)
            });
            var e = v(r);
            return e ? r : n
        }

        function F(t, r, n) {
            vt(function () {
                var e = I(t, r, n);
                e.target.removeEventListener(e.event, e.listener)
            });
            return v(r) ? r : n
        }

        function P(e) {
            var t = f(e, function (e) {
                return w(e, "hx-target") !== null
            });
            if (t) {
                var r = w(t, "hx-target");
                if (r === "this") {
                    return t
                } else if (r.indexOf("closest ") === 0) {
                    return M(e, r.substr(8))
                } else {
                    return E().querySelector(r)
                }
            } else {
                var n = L(e);
                if (n.boosted) {
                    return E().body
                } else {
                    return e
                }
            }
        }

        var j = ["id", "value"];

        function _(t, r) {
            C(t.attributes, function (e) {
                if (!r.hasAttribute(e.name) && j.indexOf(e.name) === -1) {
                    t.removeAttribute(e.name)
                }
            });
            C(r.attributes, function (e) {
                if (j.indexOf(e.name) === -1) {
                    t.setAttribute(e.name, e.value)
                }
            })
        }

        function z(e, t) {
            var r = ht(t);
            for (var n = 0; n < r.length; n++) {
                var i = r[n];
                try {
                    if (i.isInlineSwap(e)) {
                        return true
                    }
                } catch (e) {
                    Me(e)
                }
            }
            return e === "outerHTML"
        }

        function B(e, t, r) {
            if (e === "true") {
                e = "outerHTML"
            }
            var n = E().getElementById(t.id);
            if (n) {
                var i;
                i = E().createDocumentFragment();
                i.appendChild(t);
                if (!z(e, n)) {
                    i = t
                }
                re(e, n, n, i, r)
            } else {
                t.parentNode.removeChild(t);
                ke(E().body, "oobErrorNoTarget.htmx", {content: t})
            }
            return e
        }

        function U(e, r) {
            C(m(e.children), function (e) {
                var t = w(e, "hx-swap-oob");
                if (t != null) {
                    B(t, e, r)
                }
            })
        }

        function V(n, e, i) {
            C(e.querySelectorAll("[id]"), function (e) {
                if (e.id && e.id.length > 0) {
                    var t = n.querySelector(e.tagName + "[id=" + e.id + "]");
                    if (t && t !== n) {
                        var r = e.cloneNode();
                        _(e, t);
                        i.tasks.push(function () {
                            _(e, r)
                        })
                    }
                }
            })
        }

        function W(e) {
            return function () {
                qe(e, true);
                Ce(e);
                Ie(e, "load.htmx", {})
            }
        }

        function J(e, t, r, n) {
            V(e, r, n);
            while (r.childNodes.length > 0) {
                var i = r.firstChild;
                e.insertBefore(i, t);
                if (i.nodeType !== Node.TEXT_NODE && i.nodeType !== Node.COMMENT_NODE) {
                    n.tasks.push(W(i))
                }
            }
        }

        function G(e) {
            var t = L(e);
            if (t.webSocket) {
                t.webSocket.close()
            }
            if (t.sseEventSource) {
                t.sseEventSource.close()
            }
            if (e.children) {
                C(e.children, function (e) {
                    G(e)
                })
            }
        }

        function Y(e, t, r) {
            if (e.tagName === "BODY") {
                return ee(e, t)
            } else {
                var n = e.previousSibling;
                J(o(e), e, t, r);
                if (n == null) {
                    var i = o(e).firstChild
                } else {
                    var i = n.nextSibling
                }
                while (i && i != e) {
                    r.elts.push(i);
                    i = i.nextSibling
                }
                G(e);
                o(e).removeChild(e)
            }
        }

        function K(e, t, r) {
            return J(e, e.firstChild, t, r)
        }

        function Q(e, t, r) {
            return J(o(e), e, t, r)
        }

        function Z(e, t, r) {
            return J(e, null, t, r)
        }

        function $(e, t, r) {
            return J(o(e), e.nextSibling, t, r)
        }

        function ee(e, t, r) {
            var n = e.firstChild;
            J(e, n, t, r);
            if (n) {
                while (n.nextSibling) {
                    e.removeChild(n.nextSibling)
                }
                e.removeChild(n)
            }
        }

        function te(e, t) {
            var r = O(e, "hx-select");
            if (r) {
                var n = E().createDocumentFragment();
                C(t.querySelectorAll(r), function (e) {
                    n.appendChild(e)
                });
                t = n
            }
            return t
        }

        function re(e, t, r, n, i) {
            switch (e) {
                case"none":
                    return;
                case"outerHTML":
                    Y(r, n, i);
                    return;
                case"afterbegin":
                    K(r, n, i);
                    return;
                case"beforebegin":
                    Q(r, n, i);
                    return;
                case"beforeend":
                    Z(r, n, i);
                    return;
                case"afterend":
                    $(r, n, i);
                    return;
                default:
                    var o = ht(t);
                    for (var a = 0; a < o.length; a++) {
                        var u = o[a];
                        try {
                            var l = u.handleSwap(e, r, n, i);
                            if (l) {
                                if (typeof l.length !== "undefined") {
                                    for (var f = 0; f < l.length; f++) {
                                        var s = l[f];
                                        if (s.nodeType !== Node.TEXT_NODE && s.nodeType !== Node.COMMENT_NODE) {
                                            i.tasks.push(W(s))
                                        }
                                    }
                                }
                                return
                            }
                        } catch (e) {
                            Me(e)
                        }
                    }
                    ee(r, n, i)
            }
        }

        function ne(e, t, r, n, i) {
            var o = c(n);
            if (o) {
                U(o, i);
                o = te(r, o);
                return re(e, r, t, o, i)
            }
        }

        function ie(e, t) {
            if (t) {
                if (t.indexOf("{") === 0) {
                    var r = y(t);
                    for (var n in r) {
                        if (r.hasOwnProperty(n)) {
                            var i = r[n];
                            if (!d(i)) {
                                i = {value: i}
                            }
                            Ie(e, n, i)
                        }
                    }
                } else {
                    Ie(e, t, [])
                }
            }
        }

        function oe(e) {
            var t = w(e, "hx-trigger");
            if (t) {
                var r = t.split(",").map(function (e) {
                    var t = p(e.trim());
                    var r = t[0];
                    if (!r) return null;
                    if (r === "every") return {trigger: "every", pollInterval: a(t[1])};
                    if (r.indexOf("sse:") === 0) return {trigger: "sse", sseEvent: r.substr(4)};
                    var n = {trigger: r};
                    for (var i = 1; i < t.length; i++) {
                        var o = t[i].trim();
                        if (o === "changed") {
                            n.changed = true
                        }
                        if (o === "once") {
                            n.once = true
                        }
                        if (o.indexOf("delay:") === 0) {
                            n.delay = a(o.substr(6))
                        }
                        if (o.indexOf("throttle:") === 0) {
                            n.throttle = a(o.substr(9))
                        }
                    }
                    return n
                }).filter(function (e) {
                    return e !== null
                });
                if (r.length) return r
            }
            if (s(e, "form")) return [{trigger: "submit"}];
            if (s(e, "input, textarea, select")) return [{trigger: "change"}];
            return [{trigger: "click"}]
        }

        function ae(e) {
            L(e).cancelled = true
        }

        function ue(e, t, r, n) {
            var i = L(e);
            i.timeout = setTimeout(function () {
                if (T(e) && i.cancelled !== true) {
                    ut(e, t, r);
                    ue(e, t, w(e, "hx-" + t), n)
                }
            }, n)
        }

        function le(e) {
            return location.hostname === e.hostname && u(e, "href") && u(e, "href").indexOf("#") !== 0
        }

        function fe(t, r, e) {
            if (t.tagName === "A" && le(t) || t.tagName === "FORM") {
                r.boosted = true;
                var n, i;
                if (t.tagName === "A") {
                    n = "get";
                    i = u(t, "href")
                } else {
                    var o = u(t, "method");
                    n = o ? o.toLowerCase() : "get";
                    i = u(t, "action")
                }
                e.forEach(function (e) {
                    he(t, n, i, r, e, true)
                })
            }
        }

        function se(e) {
            return e.tagName === "FORM" || s(e, 'input[type="submit"], button') && M(e, "form") !== null || e.tagName === "A" && e.href && e.href.indexOf("#") !== 0
        }

        function ce(e, t) {
            return L(e).boosted && e.tagName === "A" && t.type === "click" && t.ctrlKey
        }

        function he(n, i, o, e, a, u) {
            var t = function (e) {
                if (ce(n, e)) {
                    return
                }
                if (u || se(n)) {
                    e.preventDefault()
                }
                var t = L(e);
                var r = L(n);
                if (!t.handled) {
                    t.handled = true;
                    if (a.once) {
                        if (r.triggeredOnce) {
                            return
                        } else {
                            r.triggeredOnce = true
                        }
                    }
                    if (a.changed) {
                        if (r.lastValue === n.value) {
                            return
                        } else {
                            r.lastValue = n.value
                        }
                    }
                    if (r.delayed) {
                        clearTimeout(r.delayed)
                    }
                    if (r.throttle) {
                        return
                    }
                    if (a.throttle) {
                        r.throttle = setTimeout(function () {
                            ut(n, i, o, e.target);
                            r.throttle = null
                        }, a.throttle)
                    } else if (a.delay) {
                        r.delayed = setTimeout(function () {
                            ut(n, i, o, e.target)
                        }, a.delay)
                    } else {
                        ut(n, i, o, e.target)
                    }
                }
            };
            e.trigger = a.trigger;
            e.eventListener = t;
            n.addEventListener(a.trigger, t)
        }

        function ve() {
            if (!window["htmxScrollHandler"]) {
                var e = function () {
                    C(E().querySelectorAll("[hx-trigger='revealed'],[data-hx-trigger='revealed']"), function (e) {
                        de(e)
                    })
                };
                window["htmxScrollHandler"] = e;
                window.addEventListener("scroll", e)
            }
        }

        function de(e) {
            var t = L(e);
            if (!t.revealed && g(e)) {
                t.revealed = true;
                ut(e, t.verb, t.path)
            }
        }

        function me(e, t, r) {
            var n = r.split(",");
            for (var i = 0; i < n.length; i++) {
                var o = p(n[i]);
                if (o[0] === "connect") {
                    ge(e, o[1])
                }
                if (o[0] === "send") {
                    ye(e)
                }
            }
        }

        function ge(u, e) {
            var t = htmx.createWebSocket(e);
            t.onerror = function (e) {
                ke(u, "wsError.htmx", {error: e, socket: t});
                pe(u)
            };
            L(u).webSocket = t;
            t.addEventListener("message", function (e) {
                if (pe(u)) {
                    return
                }
                var t = e.data;
                De(u, function (e) {
                    t = e.transformResponse(t, null, u)
                });
                var r = at(u);
                var n = c(t);
                var i = m(n.children);
                for (var o = 0; o < i.length; o++) {
                    var a = i[o];
                    B(w(a, "hx-swap-oob") || "true", a, r)
                }
                Be(r.tasks)
            })
        }

        function pe(e) {
            if (!T(e)) {
                L(e).webSocket.close();
                return true
            }
        }

        function ye(i) {
            var o = f(i, function (e) {
                return L(e).webSocket != null
            });
            if (o) {
                var a = L(o).webSocket;
                i.addEventListener(oe(i)[0].trigger, function (e) {
                    var t = rt(i, o, null, i);
                    var r = $e(i, "post");
                    var n = nt(r, i);
                    n["HEADERS"] = t;
                    a.send(JSON.stringify(n));
                    if (se(i)) {
                        e.preventDefault()
                    }
                })
            } else {
                ke(i, "noWebSocketSourceError.htmx")
            }
        }

        function xe(e) {
            if (!T(e)) {
                L(e).sseEventSource.close();
                return true
            }
        }

        function be(e, t, r) {
            var n = r.split(",");
            for (var i = 0; i < n.length; i++) {
                var o = p(n[i]);
                if (o[0] === "connect") {
                    Se(e, o[1])
                }
            }
        }

        function Se(t, e) {
            var r = htmx.createEventSource(e);
            r.onerror = function (e) {
                ke(t, "sseError.htmx", {error: e, source: r});
                xe(t)
            };
            L(t).sseEventSource = r
        }

        function we(e, t, r, n) {
            var i = f(e, function (e) {
                return L(e).sseEventSource != null
            });
            if (i) {
                var o = L(i).sseEventSource;
                var a = function () {
                    if (!xe(i)) {
                        if (T(e)) {
                            ut(e, t, r)
                        } else {
                            o.removeEventListener(n, a)
                        }
                    }
                };
                L(e).sseListener = a;
                o.addEventListener(n, a)
            } else {
                ke(e, "noSSESourceError.htmx")
            }
        }

        function Ee(e, t, r, n, i) {
            var o = function () {
                if (!n.loaded) {
                    n.loaded = true;
                    ut(e, t, r)
                }
            };
            if (i) {
                setTimeout(o, i)
            } else {
                o()
            }
        }

        function Oe(n, i, e) {
            var o = false;
            C(t, function (t) {
                if (l(n, "hx-" + t)) {
                    var r = w(n, "hx-" + t);
                    o = true;
                    i.path = r;
                    i.verb = t;
                    e.forEach(function (e) {
                        if (e.sseEvent) {
                            we(n, t, r, e.sseEvent)
                        } else if (e.trigger === "revealed") {
                            ve();
                            de(n)
                        } else if (e.trigger === "load") {
                            Ee(n, t, r, i, e.delay)
                        } else if (e.pollInterval) {
                            i.polling = true;
                            ue(n, t, r, e.pollInterval)
                        } else {
                            he(n, t, r, i, e)
                        }
                    })
                }
            });
            return o
        }

        function Le(e) {
            if (e.type === "text/javascript") {
                try {
                    eval(e.innerText)
                } catch (e) {
                    Me(e)
                }
            }
        }

        function Ce(e) {
            if (s(e, "script")) {
                Le(e)
            }
            C(A(e, "script"), function (e) {
                Le(e)
            })
        }

        function Te() {
            return typeof _hyperscript !== "undefined"
        }

        function Ne(e) {
            if (e.querySelectorAll) {
                var t = e.querySelectorAll(r + ", a, form, [hx-sse], [data-hx-sse], [hx-ws], [data-hx-ws]");
                return t
            } else {
                return []
            }
        }

        function Ae(e) {
            var t = L(e);
            if (!t.initialized) {
                t.initialized = true;
                if (Te()) {
                    _hyperscript.init(e)
                }
                if (e.value) {
                    t.lastValue = e.value
                }
                var r = oe(e);
                var n = Oe(e, t, r);
                if (!n && O(e, "hx-boost") === "true") {
                    fe(e, t, r)
                }
                var i = w(e, "hx-sse");
                if (i) {
                    be(e, t, i)
                }
                var o = w(e, "hx-ws");
                if (o) {
                    me(e, t, o)
                }
                Ie(e, "processedNode.htmx")
            }
        }

        function qe(e) {
            Ae(e);
            C(Ne(e), function (e) {
                Ae(e)
            })
        }

        function He(e, t) {
            var r;
            if (window.CustomEvent && typeof window.CustomEvent === "function") {
                r = new CustomEvent(e, {bubbles: true, cancelable: true, detail: t})
            } else {
                r = E().createEvent("CustomEvent");
                r.initCustomEvent(e, true, true, t)
            }
            return r
        }

        function ke(e, t, r) {
            Ie(e, t, N({error: t}, r))
        }

        function Re(e) {
            return e === "processedNode.htmx"
        }

        function De(e, t) {
            C(ht(e), function (e) {
                try {
                    t(e)
                } catch (e) {
                    Me(e)
                }
            })
        }

        function Me(e) {
            if (console.error) {
                console.error(e)
            } else if (console.log) {
                console.log("ERROR: ", e)
            }
        }

        function Ie(e, t, r) {
            if (r == null) {
                r = {}
            }
            r["elt"] = e;
            var n = He(t, r);
            if (htmx.logger && !Re(t)) {
                htmx.logger(e, t, r)
            }
            if (r.error) {
                Me(r.error);
                Ie(e, "error.htmx", {errorInfo: r})
            }
            var i = e.dispatchEvent(n);
            De(e, function (e) {
                i = i && e.onEvent(t, n) !== false
            });
            return i
        }

        var Xe = null;

        function Fe() {
            var e = E().querySelector("[hx-history-elt],[data-hx-history-elt]");
            return e || E().body
        }

        function Pe(e, t, r, n) {
            var i = y(localStorage.getItem("htmx-history-cache")) || [];
            for (var o = 0; o < i.length; o++) {
                if (i[o].url === e) {
                    i = i.slice(o, 1);
                    break
                }
            }
            i.push({url: e, content: t, title: r, scroll: n});
            while (i.length > htmx.config.historyCacheSize) {
                i.shift()
            }
            localStorage.setItem("htmx-history-cache", JSON.stringify(i))
        }

        function je(e) {
            var t = y(localStorage.getItem("htmx-history-cache")) || [];
            for (var r = 0; r < t.length; r++) {
                if (t[r].url === e) {
                    return t[r]
                }
            }
            return null
        }

        function _e() {
            var e = Fe();
            var t = Xe || location.pathname + location.search;
            Ie(E().body, "beforeHistorySave.htmx", {path: t, historyElt: e});
            if (htmx.config.historyEnabled) history.replaceState({}, E().title, window.location.href);
            Pe(t, e.innerHTML, E().title, window.scrollY)
        }

        function ze(e) {
            if (htmx.config.historyEnabled) history.pushState({}, "", e);
            Xe = e
        }

        function Be(e) {
            C(e, function (e) {
                e.call()
            })
        }

        function Ue(n) {
            var e = new XMLHttpRequest;
            var i = {path: n, xhr: e};
            Ie(E().body, "historyCacheMiss.htmx", i);
            e.open("GET", n, true);
            e.onload = function () {
                if (this.status >= 200 && this.status < 400) {
                    Ie(E().body, "historyCacheMissLoad.htmx", i);
                    var e = c(this.response);
                    e = e.querySelector("[hx-history-elt],[data-hx-history-elt]") || e;
                    var t = Fe();
                    var r = at(t);
                    ee(t, e, r);
                    Be(r.tasks);
                    Xe = n
                } else {
                    ke(E().body, "historyCacheMissLoadError.htmx", i)
                }
            };
            e.send()
        }

        function Ve(e) {
            _e(Xe);
            e = e || location.pathname + location.search;
            Ie(E().body, "historyRestore.htmx", {path: e});
            var t = je(e);
            if (t) {
                var r = c(t.content);
                var n = Fe();
                var i = at(n);
                ee(n, r, i);
                Be(i.tasks);
                document.title = t.title;
                window.scrollTo(0, t.scroll);
                Xe = e
            } else {
                Ue(e)
            }
        }

        function We(e) {
            return O(e, "hx-push-url") === "true" || e.tagName === "A" && L(e).boosted
        }

        function Je(e) {
            Ye(e, "add")
        }

        function Ge(e) {
            Ye(e, "remove")
        }

        function Ye(e, t) {
            var r = O(e, "hx-indicator");
            if (r) {
                var n = E().querySelectorAll(r)
            } else {
                n = [e]
            }
            C(n, function (e) {
                e.classList[t].call(e.classList, "htmx-request")
            })
        }

        function Ke(e, t) {
            for (var r = 0; r < e.length; r++) {
                var n = e[r];
                if (n.isSameNode(t)) {
                    return true
                }
            }
            return false
        }

        function Qe(e) {
            if (e.name === "" || e.name == null || e.disabled) {
                return false
            }
            if (e.type === "button" || e.type === "submit" || e.tagName === "image" || e.tagName === "reset" || e.tagName === "file") {
                return false
            }
            if (e.type === "checkbox" || e.type === "radio") {
                return e.checked
            }
            return true
        }

        function Ze(t, r, e) {
            if (e == null || Ke(t, e)) {
                return
            } else {
                t.push(e)
            }
            if (Qe(e)) {
                var n = u(e, "name");
                var i = e.value;
                if (n != null && i != null) {
                    var o = r[n];
                    if (o) {
                        if (Array.isArray(o)) {
                            o.push(i)
                        } else {
                            r[n] = [o, i]
                        }
                    } else {
                        r[n] = i
                    }
                }
            }
            if (s(e, "form")) {
                var a = e.elements;
                C(a, function (e) {
                    Ze(t, r, e)
                })
            }
        }

        function $e(e, t) {
            var r = [];
            var n = {};
            if (t !== "get") {
                Ze(r, n, M(e, "form"))
            }
            Ze(r, n, e);
            var i = O(e, "hx-include");
            if (i) {
                var o = E().querySelectorAll(i);
                C(o, function (e) {
                    Ze(r, n, e)
                })
            }
            return n
        }

        function et(e, t, r) {
            if (e !== "") {
                e += "&"
            }
            e += encodeURIComponent(t) + "=" + encodeURIComponent(r);
            return e
        }

        function tt(e) {
            var t = "";
            for (var r in e) {
                if (e.hasOwnProperty(r)) {
                    var n = e[r];
                    if (Array.isArray(n)) {
                        C(n, function (e) {
                            t = et(t, r, e)
                        })
                    } else {
                        t = et(t, r, n)
                    }
                }
            }
            return t
        }

        function rt(e, t, r, n) {
            var i = {
                "HX-Request": "true",
                "HX-Trigger": u(e, "id"),
                "HX-Trigger-Name": u(e, "name"),
                "HX-Target": w(t, "id"),
                "HX-Current-URL": E().location.href
            };
            if (r !== undefined) {
                i["HX-Prompt"] = r
            }
            if (n) {
                i["HX-Event-Target"] = u(n, "id")
            }
            if (E().activeElement) {
                i["HX-Active-Element"] = u(E().activeElement, "id");
                i["HX-Active-Element-Name"] = u(E().activeElement, "name");
                if (E().activeElement.value) {
                    i["HX-Active-Element-Value"] = u(E().activeElement, "value")
                }
            }
            return i
        }

        function nt(t, e) {
            var r = O(e, "hx-params");
            if (r) {
                if (r === "none") {
                    return {}
                } else if (r === "*") {
                    return t
                } else if (r.indexOf("not ") === 0) {
                    C(r.substr(4).split(","), function (e) {
                        e = e.trim();
                        delete t[e]
                    });
                    return t
                } else {
                    var n = {};
                    C(r.split(","), function (e) {
                        e = e.trim();
                        n[e] = t[e]
                    });
                    return n
                }
            } else {
                return t
            }
        }

        function it(e) {
            var t = O(e, "hx-swap");
            var r = {
                swapStyle: htmx.config.defaultSwapStyle,
                swapDelay: htmx.config.defaultSwapDelay,
                settleDelay: htmx.config.defaultSettleDelay
            };
            if (t) {
                var n = p(t);
                if (n.length > 0) {
                    r["swapStyle"] = n[0];
                    for (var i = 1; i < n.length; i++) {
                        var o = n[i];
                        if (o.indexOf("swap:") === 0) {
                            r["swapDelay"] = a(o.substr(5))
                        }
                        if (o.indexOf("settle:") === 0) {
                            r["settleDelay"] = a(o.substr(7))
                        }
                    }
                }
            }
            return r
        }

        function ot(t, r, n) {
            var i = null;
            De(r, function (e) {
                if (i == null) {
                    i = e.encodeParameters(t, n, r)
                }
            });
            if (i != null) {
                return i
            } else {
                return tt(n)
            }
        }

        function at(e) {
            return {tasks: [], elts: [e]}
        }

        function ut(f, e, s, t) {
            var c = P(f);
            if (c == null) {
                ke(f, "targetError.htmx", {target: w(f, "hx-target")});
                return
            }
            var r = L(f);
            if (r.requestInFlight) {
                return
            } else {
                r.requestInFlight = true
            }
            var n = function () {
                r.requestInFlight = false
            };
            var i = O(f, "hx-prompt");
            if (i) {
                var o = prompt(i);
                if (o === null || !Ie(f, "prompt.htmx", {prompt: o, target: c})) return n()
            }
            var a = O(f, "hx-confirm");
            if (a) {
                if (!confirm(a)) return n()
            }
            var h = new XMLHttpRequest;
            var u = rt(f, c, o, t);
            var l = $e(f, e);
            var v = nt(l, f);
            if (e !== "get") {
                u["Content-Type"] = "application/x-www-form-urlencoded; charset=UTF-8"
            }
            if (s == null || s === "") {
                s = E().location.href
            }
            var d = {parameters: v, unfilteredParameters: l, headers: u, target: c, verb: e, path: s};
            if (!Ie(f, "configRequest.htmx", d)) return n();
            s = d.path;
            e = d.verb;
            u = d.headers;
            v = d.parameters;
            var m = s.split("#");
            var g = m[0];
            var p = m[1];
            if (e === "get") {
                var y = g;
                var x = Object.keys(v).length !== 0;
                if (x) {
                    if (y.indexOf("?") < 0) {
                        y += "?"
                    } else {
                        y += "&"
                    }
                    y += tt(v);
                    if (p) {
                        y += "#" + p
                    }
                }
                h.open("GET", y, true)
            } else {
                h.open(e.toUpperCase(), s, true)
            }
            h.overrideMimeType("text/html");
            for (var b in u) {
                if (u.hasOwnProperty(b)) {
                    if (u[b] !== null) h.setRequestHeader(b, u[b])
                }
            }
            var S = {xhr: h, target: c};
            h.onload = function () {
                try {
                    if (!Ie(f, "beforeOnLoad.htmx", S)) return;
                    ie(f, this.getResponseHeader("HX-Trigger"));
                    var o = this.getResponseHeader("HX-Push");
                    var a = We(f) || o;
                    if (this.status >= 200 && this.status < 400) {
                        if (this.status === 286) {
                            ae(f)
                        }
                        if (this.status !== 204) {
                            if (!Ie(c, "beforeSwap.htmx", S)) return;
                            var u = this.response;
                            De(f, function (e) {
                                u = e.transformResponse(u, h, f)
                            });
                            if (a) {
                                _e()
                            }
                            var l = it(f);
                            c.classList.add("htmx-swapping");
                            var e = function () {
                                try {
                                    var e = document.activeElement;
                                    var t = {elt: e, start: e.selectionStart, end: e.selectionEnd};
                                    var r = at(c);
                                    ne(l.swapStyle, c, f, u, r);
                                    if (!T(t.elt) && t.elt.id) {
                                        var n = document.getElementById(t.elt.id);
                                        if (t.start && n.setSelectionRange) {
                                            n.setSelectionRange(t.start, t.end)
                                        }
                                        n.focus()
                                    }
                                    c.classList.remove("htmx-swapping");
                                    C(r.elts, function (e) {
                                        if (e.classList) {
                                            e.classList.add("htmx-settling")
                                        }
                                        Ie(e, "afterSwap.htmx", S)
                                    });
                                    if (p) {
                                        location.hash = p
                                    }
                                    var i = function () {
                                        C(r.tasks, function (e) {
                                            e.call()
                                        });
                                        C(r.elts, function (e) {
                                            if (e.classList) {
                                                e.classList.remove("htmx-settling")
                                            }
                                            Ie(e, "afterSettle.htmx", S)
                                        });
                                        if (a) {
                                            var e = o || y || s;
                                            ze(e);
                                            Ie(E().body, "pushedIntoHistory.htmx", {path: e})
                                        }
                                    };
                                    if (l.settleDelay > 0) {
                                        setTimeout(i, l.settleDelay)
                                    } else {
                                        i()
                                    }
                                } catch (e) {
                                    ke(f, "swapError.htmx", S);
                                    throw e
                                }
                            };
                            if (l.swapDelay > 0) {
                                setTimeout(e, l.swapDelay)
                            } else {
                                e()
                            }
                        }
                    } else {
                        ke(f, "responseError.htmx", N({error: "Response Status Error Code " + this.status + " from " + s}, S))
                    }
                } catch (e) {
                    ke(f, "onLoadError.htmx", N({error: e}, S));
                    throw e
                } finally {
                    Ge(f);
                    Ie(f, "afterRequest.htmx", S);
                    Ie(f, "afterOnLoad.htmx", S);
                    n()
                }
            };
            h.onerror = function () {
                Ge(f);
                ke(f, "afterRequest.htmx", S);
                ke(f, "sendError.htmx", S);
                n()
            };
            if (!Ie(f, "beforeRequest.htmx", S)) return n();
            Je(f);
            h.send(e === "get" ? null : ot(h, f, v))
        }

        var lt = {};

        function ft() {
            return {
                onEvent: function (e, t) {
                    return true
                }, transformResponse: function (e, t, r) {
                    return e
                }, isInlineSwap: function (e) {
                    return false
                }, handleSwap: function (e, t, r, n) {
                    return false
                }, encodeParameters: function (e, t, r) {
                    return null
                }
            }
        }

        function st(e, t) {
            lt[e] = N(ft(), t)
        }

        function ct(e) {
            delete lt[e]
        }

        function ht(e, r) {
            if (e == null) {
                return r
            }
            if (r == null) {
                r = []
            }
            var t = w(e, "hx-ext");
            if (t) {
                C(t.split(","), function (e) {
                    e = e.replace(/ /g, "");
                    var t = lt[e];
                    if (t && r.indexOf(t) < 0) {
                        r.push(t)
                    }
                })
            }
            return ht(o(e), r)
        }

        function vt(e) {
            if (E().readyState !== "loading") {
                e()
            } else {
                E().addEventListener("DOMContentLoaded", e)
            }
        }

        (function () {
            var e = dt();
            if (e === null || e.includeIndicatorStyles !== false) {
                E().head.insertAdjacentHTML("beforeend", "<style>                      .htmx-indicator{opacity:0;transition: opacity 200ms ease-in;}                      .htmx-request .htmx-indicator{opacity:1}                      .htmx-request.htmx-indicator{opacity:1}                    </style>")
            }
        })();

        function dt() {
            var e = E().querySelector('meta[name="htmx-config"]');
            if (e) {
                return y(e.content)
            } else {
                return null
            }
        }

        function mt() {
            var e = dt();
            if (e) {
                htmx.config = N(htmx.config, e)
            }
        }

        vt(function () {
            mt();
            var e = E().body;
            qe(e, true);
            Ie(e, "load.htmx", {});
            window.onpopstate = function () {
                Ve()
            }
        });
        return {
            onLoad: x,
            process: qe,
            on: X,
            off: F,
            trigger: Ie,
            find: S,
            findAll: A,
            closest: M,
            remove: q,
            addClass: H,
            removeClass: k,
            toggleClass: R,
            takeClass: D,
            defineExtension: st,
            removeExtension: ct,
            logAll: b,
            logger: null,
            config: {
                historyEnabled: true,
                historyCacheSize: 10,
                defaultSwapStyle: "innerHTML",
                defaultSwapDelay: 0,
                defaultSettleDelay: 100,
                includeIndicatorStyles: true
            },
            parseInterval: a,
            _: e,
            createEventSource: function (e) {
                return new EventSource(e, {withCredentials: true})
            },
            createWebSocket: function (e) {
                return new WebSocket(e, [])
            }
        }
    }()
});
