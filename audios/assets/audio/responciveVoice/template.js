; /* Start:"a:4:{s:4:"full";s:57:"/bitrix/templates/main/js/jquery.2.min.js?147575796084245";s:6:"source";s:41:"/bitrix/templates/main/js/jquery.2.min.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
/*! jQuery v2.1.1 | (c) 2005, 2014 jQuery Foundation, Inc. | jquery.org/license */
!function (a, b) {
    "object" == typeof module && "object" == typeof module.exports ? module.exports = a.document ? b(a, !0) : function (a) {
        if (!a.document) throw new Error("jQuery requires a window with a document");
        return b(a)
    } : b(a)
}("undefined" != typeof window ? window : this, function (a, b) {
    var c = [], d = c.slice, e = c.concat, f = c.push, g = c.indexOf, h = {}, i = h.toString, j = h.hasOwnProperty,
        k = {}, l = a.document, m = "2.1.1", n = function (a, b) {
            return new n.fn.init(a, b)
        }, o = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g, p = /^-ms-/, q = /-([\da-z])/gi, r = function (a, b) {
            return b.toUpperCase()
        };
    n.fn = n.prototype = {
        jquery: m, constructor: n, selector: "", length: 0, toArray: function () {
            return d.call(this)
        }, get: function (a) {
            return null != a ? 0 > a ? this[a + this.length] : this[a] : d.call(this)
        }, pushStack: function (a) {
            var b = n.merge(this.constructor(), a);
            return b.prevObject = this, b.context = this.context, b
        }, each: function (a, b) {
            return n.each(this, a, b)
        }, map: function (a) {
            return this.pushStack(n.map(this, function (b, c) {
                return a.call(b, c, b)
            }))
        }, slice: function () {
            return this.pushStack(d.apply(this, arguments))
        }, first: function () {
            return this.eq(0)
        }, last: function () {
            return this.eq(-1)
        }, eq: function (a) {
            var b = this.length, c = +a + (0 > a ? b : 0);
            return this.pushStack(c >= 0 && b > c ? [this[c]] : [])
        }, end: function () {
            return this.prevObject || this.constructor(null)
        }, push: f, sort: c.sort, splice: c.splice
    }, n.extend = n.fn.extend = function () {
        var a, b, c, d, e, f, g = arguments[0] || {}, h = 1, i = arguments.length, j = !1;
        for ("boolean" == typeof g && (j = g, g = arguments[h] || {}, h++), "object" == typeof g || n.isFunction(g) || (g = {}), h === i && (g = this, h--); i > h; h++) if (null != (a = arguments[h])) for (b in a) c = g[b], d = a[b], g !== d && (j && d && (n.isPlainObject(d) || (e = n.isArray(d))) ? (e ? (e = !1, f = c && n.isArray(c) ? c : []) : f = c && n.isPlainObject(c) ? c : {}, g[b] = n.extend(j, f, d)) : void 0 !== d && (g[b] = d));
        return g
    }, n.extend({
        expando: "jQuery" + (m + Math.random()).replace(/\D/g, ""), isReady: !0, error: function (a) {
            throw new Error(a)
        }, noop: function () {
        }, isFunction: function (a) {
            return "function" === n.type(a)
        }, isArray: Array.isArray, isWindow: function (a) {
            return null != a && a === a.window
        }, isNumeric: function (a) {
            return !n.isArray(a) && a - parseFloat(a) >= 0
        }, isPlainObject: function (a) {
            return "object" !== n.type(a) || a.nodeType || n.isWindow(a) ? !1 : a.constructor && !j.call(a.constructor.prototype, "isPrototypeOf") ? !1 : !0
        }, isEmptyObject: function (a) {
            var b;
            for (b in a) return !1;
            return !0
        }, type: function (a) {
            return null == a ? a + "" : "object" == typeof a || "function" == typeof a ? h[i.call(a)] || "object" : typeof a
        }, globalEval: function (a) {
            var b, c = eval;
            a = n.trim(a), a && (1 === a.indexOf("use strict") ? (b = l.createElement("script"), b.text = a, l.head.appendChild(b).parentNode.removeChild(b)) : c(a))
        }, camelCase: function (a) {
            return a.replace(p, "ms-").replace(q, r)
        }, nodeName: function (a, b) {
            return a.nodeName && a.nodeName.toLowerCase() === b.toLowerCase()
        }, each: function (a, b, c) {
            var d, e = 0, f = a.length, g = s(a);
            if (c) {
                if (g) {
                    for (; f > e; e++) if (d = b.apply(a[e], c), d === !1) break
                } else for (e in a) if (d = b.apply(a[e], c), d === !1) break
            } else if (g) {
                for (; f > e; e++) if (d = b.call(a[e], e, a[e]), d === !1) break
            } else for (e in a) if (d = b.call(a[e], e, a[e]), d === !1) break;
            return a
        }, trim: function (a) {
            return null == a ? "" : (a + "").replace(o, "")
        }, makeArray: function (a, b) {
            var c = b || [];
            return null != a && (s(Object(a)) ? n.merge(c, "string" == typeof a ? [a] : a) : f.call(c, a)), c
        }, inArray: function (a, b, c) {
            return null == b ? -1 : g.call(b, a, c)
        }, merge: function (a, b) {
            for (var c = +b.length, d = 0, e = a.length; c > d; d++) a[e++] = b[d];
            return a.length = e, a
        }, grep: function (a, b, c) {
            for (var d, e = [], f = 0, g = a.length, h = !c; g > f; f++) d = !b(a[f], f), d !== h && e.push(a[f]);
            return e
        }, map: function (a, b, c) {
            var d, f = 0, g = a.length, h = s(a), i = [];
            if (h) for (; g > f; f++) d = b(a[f], f, c), null != d && i.push(d); else for (f in a) d = b(a[f], f, c), null != d && i.push(d);
            return e.apply([], i)
        }, guid: 1, proxy: function (a, b) {
            var c, e, f;
            return "string" == typeof b && (c = a[b], b = a, a = c), n.isFunction(a) ? (e = d.call(arguments, 2), f = function () {
                return a.apply(b || this, e.concat(d.call(arguments)))
            }, f.guid = a.guid = a.guid || n.guid++, f) : void 0
        }, now: Date.now, support: k
    }), n.each("Boolean Number String Function Array Date RegExp Object Error".split(" "), function (a, b) {
        h["[object " + b + "]"] = b.toLowerCase()
    });

    function s(a) {
        var b = a.length, c = n.type(a);
        return "function" === c || n.isWindow(a) ? !1 : 1 === a.nodeType && b ? !0 : "array" === c || 0 === b || "number" == typeof b && b > 0 && b - 1 in a
    }

    var t = function (a) {
        var b, c, d, e, f, g, h, i, j, k, l, m, n, o, p, q, r, s, t, u = "sizzle" + -new Date, v = a.document, w = 0,
            x = 0, y = gb(), z = gb(), A = gb(), B = function (a, b) {
                return a === b && (l = !0), 0
            }, C = "undefined", D = 1 << 31, E = {}.hasOwnProperty, F = [], G = F.pop, H = F.push, I = F.push, J = F.slice,
            K = F.indexOf || function (a) {
                for (var b = 0, c = this.length; c > b; b++) if (this[b] === a) return b;
                return -1
            },
            L = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
            M = "[\\x20\\t\\r\\n\\f]", N = "(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+", O = N.replace("w", "w#"),
            P = "\\[" + M + "*(" + N + ")(?:" + M + "*([*^$|!~]?=)" + M + "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + O + "))|)" + M + "*\\]",
            Q = ":(" + N + ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" + P + ")*)|.*)\\)|)",
            R = new RegExp("^" + M + "+|((?:^|[^\\\\])(?:\\\\.)*)" + M + "+$", "g"),
            S = new RegExp("^" + M + "*," + M + "*"), T = new RegExp("^" + M + "*([>+~]|" + M + ")" + M + "*"),
            U = new RegExp("=" + M + "*([^\\]'\"]*?)" + M + "*\\]", "g"), V = new RegExp(Q),
            W = new RegExp("^" + O + "$"), X = {
                ID: new RegExp("^#(" + N + ")"),
                CLASS: new RegExp("^\\.(" + N + ")"),
                TAG: new RegExp("^(" + N.replace("w", "w*") + ")"),
                ATTR: new RegExp("^" + P),
                PSEUDO: new RegExp("^" + Q),
                CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + M + "*(even|odd|(([+-]|)(\\d*)n|)" + M + "*(?:([+-]|)" + M + "*(\\d+)|))" + M + "*\\)|)", "i"),
                bool: new RegExp("^(?:" + L + ")$", "i"),
                needsContext: new RegExp("^" + M + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + M + "*((?:-\\d)?\\d*)" + M + "*\\)|)(?=[^-]|$)", "i")
            }, Y = /^(?:input|select|textarea|button)$/i, Z = /^h\d$/i, $ = /^[^{]+\{\s*\[native \w/,
            _ = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/, ab = /[+~]/, bb = /'|\\/g,
            cb = new RegExp("\\\\([\\da-f]{1,6}" + M + "?|(" + M + ")|.)", "ig"), db = function (a, b, c) {
                var d = "0x" + b - 65536;
                return d !== d || c ? b : 0 > d ? String.fromCharCode(d + 65536) : String.fromCharCode(d >> 10 | 55296, 1023 & d | 56320)
            };
        try {
            I.apply(F = J.call(v.childNodes), v.childNodes), F[v.childNodes.length].nodeType
        } catch (eb) {
            I = {
                apply: F.length ? function (a, b) {
                    H.apply(a, J.call(b))
                } : function (a, b) {
                    var c = a.length, d = 0;
                    while (a[c++] = b[d++]) ;
                    a.length = c - 1
                }
            }
        }

        function fb(a, b, d, e) {
            var f, h, j, k, l, o, r, s, w, x;
            if ((b ? b.ownerDocument || b : v) !== n && m(b), b = b || n, d = d || [], !a || "string" != typeof a) return d;
            if (1 !== (k = b.nodeType) && 9 !== k) return [];
            if (p && !e) {
                if (f = _.exec(a)) if (j = f[1]) {
                    if (9 === k) {
                        if (h = b.getElementById(j), !h || !h.parentNode) return d;
                        if (h.id === j) return d.push(h), d
                    } else if (b.ownerDocument && (h = b.ownerDocument.getElementById(j)) && t(b, h) && h.id === j) return d.push(h), d
                } else {
                    if (f[2]) return I.apply(d, b.getElementsByTagName(a)), d;
                    if ((j = f[3]) && c.getElementsByClassName && b.getElementsByClassName) return I.apply(d, b.getElementsByClassName(j)), d
                }
                if (c.qsa && (!q || !q.test(a))) {
                    if (s = r = u, w = b, x = 9 === k && a, 1 === k && "object" !== b.nodeName.toLowerCase()) {
                        o = g(a), (r = b.getAttribute("id")) ? s = r.replace(bb, "\\$&") : b.setAttribute("id", s), s = "[id='" + s + "'] ", l = o.length;
                        while (l--) o[l] = s + qb(o[l]);
                        w = ab.test(a) && ob(b.parentNode) || b, x = o.join(",")
                    }
                    if (x) try {
                        return I.apply(d, w.querySelectorAll(x)), d
                    } catch (y) {
                    } finally {
                        r || b.removeAttribute("id")
                    }
                }
            }
            return i(a.replace(R, "$1"), b, d, e)
        }

        function gb() {
            var a = [];

            function b(c, e) {
                return a.push(c + " ") > d.cacheLength && delete b[a.shift()], b[c + " "] = e
            }

            return b
        }

        function hb(a) {
            return a[u] = !0, a
        }

        function ib(a) {
            var b = n.createElement("div");
            try {
                return !!a(b)
            } catch (c) {
                return !1
            } finally {
                b.parentNode && b.parentNode.removeChild(b), b = null
            }
        }

        function jb(a, b) {
            var c = a.split("|"), e = a.length;
            while (e--) d.attrHandle[c[e]] = b
        }

        function kb(a, b) {
            var c = b && a,
                d = c && 1 === a.nodeType && 1 === b.nodeType && (~b.sourceIndex || D) - (~a.sourceIndex || D);
            if (d) return d;
            if (c) while (c = c.nextSibling) if (c === b) return -1;
            return a ? 1 : -1
        }

        function lb(a) {
            return function (b) {
                var c = b.nodeName.toLowerCase();
                return "input" === c && b.type === a
            }
        }

        function mb(a) {
            return function (b) {
                var c = b.nodeName.toLowerCase();
                return ("input" === c || "button" === c) && b.type === a
            }
        }

        function nb(a) {
            return hb(function (b) {
                return b = +b, hb(function (c, d) {
                    var e, f = a([], c.length, b), g = f.length;
                    while (g--) c[e = f[g]] && (c[e] = !(d[e] = c[e]))
                })
            })
        }

        function ob(a) {
            return a && typeof a.getElementsByTagName !== C && a
        }

        c = fb.support = {}, f = fb.isXML = function (a) {
            var b = a && (a.ownerDocument || a).documentElement;
            return b ? "HTML" !== b.nodeName : !1
        }, m = fb.setDocument = function (a) {
            var b, e = a ? a.ownerDocument || a : v, g = e.defaultView;
            return e !== n && 9 === e.nodeType && e.documentElement ? (n = e, o = e.documentElement, p = !f(e), g && g !== g.top && (g.addEventListener ? g.addEventListener("unload", function () {
                m()
            }, !1) : g.attachEvent && g.attachEvent("onunload", function () {
                m()
            })), c.attributes = ib(function (a) {
                return a.className = "i", !a.getAttribute("className")
            }), c.getElementsByTagName = ib(function (a) {
                return a.appendChild(e.createComment("")), !a.getElementsByTagName("*").length
            }), c.getElementsByClassName = $.test(e.getElementsByClassName) && ib(function (a) {
                return a.innerHTML = "<div class='a'></div><div class='a i'></div>", a.firstChild.className = "i", 2 === a.getElementsByClassName("i").length
            }), c.getById = ib(function (a) {
                return o.appendChild(a).id = u, !e.getElementsByName || !e.getElementsByName(u).length
            }), c.getById ? (d.find.ID = function (a, b) {
                if (typeof b.getElementById !== C && p) {
                    var c = b.getElementById(a);
                    return c && c.parentNode ? [c] : []
                }
            }, d.filter.ID = function (a) {
                var b = a.replace(cb, db);
                return function (a) {
                    return a.getAttribute("id") === b
                }
            }) : (delete d.find.ID, d.filter.ID = function (a) {
                var b = a.replace(cb, db);
                return function (a) {
                    var c = typeof a.getAttributeNode !== C && a.getAttributeNode("id");
                    return c && c.value === b
                }
            }), d.find.TAG = c.getElementsByTagName ? function (a, b) {
                return typeof b.getElementsByTagName !== C ? b.getElementsByTagName(a) : void 0
            } : function (a, b) {
                var c, d = [], e = 0, f = b.getElementsByTagName(a);
                if ("*" === a) {
                    while (c = f[e++]) 1 === c.nodeType && d.push(c);
                    return d
                }
                return f
            }, d.find.CLASS = c.getElementsByClassName && function (a, b) {
                return typeof b.getElementsByClassName !== C && p ? b.getElementsByClassName(a) : void 0
            }, r = [], q = [], (c.qsa = $.test(e.querySelectorAll)) && (ib(function (a) {
                a.innerHTML = "<select msallowclip=''><option selected=''></option></select>", a.querySelectorAll("[msallowclip^='']").length && q.push("[*^$]=" + M + "*(?:''|\"\")"), a.querySelectorAll("[selected]").length || q.push("\\[" + M + "*(?:value|" + L + ")"), a.querySelectorAll(":checked").length || q.push(":checked")
            }), ib(function (a) {
                var b = e.createElement("input");
                b.setAttribute("type", "hidden"), a.appendChild(b).setAttribute("name", "D"), a.querySelectorAll("[name=d]").length && q.push("name" + M + "*[*^$|!~]?="), a.querySelectorAll(":enabled").length || q.push(":enabled", ":disabled"), a.querySelectorAll("*,:x"), q.push(",.*:")
            })), (c.matchesSelector = $.test(s = o.matches || o.webkitMatchesSelector || o.mozMatchesSelector || o.oMatchesSelector || o.msMatchesSelector)) && ib(function (a) {
                c.disconnectedMatch = s.call(a, "div"), s.call(a, "[s!='']:x"), r.push("!=", Q)
            }), q = q.length && new RegExp(q.join("|")), r = r.length && new RegExp(r.join("|")), b = $.test(o.compareDocumentPosition), t = b || $.test(o.contains) ? function (a, b) {
                var c = 9 === a.nodeType ? a.documentElement : a, d = b && b.parentNode;
                return a === d || !(!d || 1 !== d.nodeType || !(c.contains ? c.contains(d) : a.compareDocumentPosition && 16 & a.compareDocumentPosition(d)))
            } : function (a, b) {
                if (b) while (b = b.parentNode) if (b === a) return !0;
                return !1
            }, B = b ? function (a, b) {
                if (a === b) return l = !0, 0;
                var d = !a.compareDocumentPosition - !b.compareDocumentPosition;
                return d ? d : (d = (a.ownerDocument || a) === (b.ownerDocument || b) ? a.compareDocumentPosition(b) : 1, 1 & d || !c.sortDetached && b.compareDocumentPosition(a) === d ? a === e || a.ownerDocument === v && t(v, a) ? -1 : b === e || b.ownerDocument === v && t(v, b) ? 1 : k ? K.call(k, a) - K.call(k, b) : 0 : 4 & d ? -1 : 1)
            } : function (a, b) {
                if (a === b) return l = !0, 0;
                var c, d = 0, f = a.parentNode, g = b.parentNode, h = [a], i = [b];
                if (!f || !g) return a === e ? -1 : b === e ? 1 : f ? -1 : g ? 1 : k ? K.call(k, a) - K.call(k, b) : 0;
                if (f === g) return kb(a, b);
                c = a;
                while (c = c.parentNode) h.unshift(c);
                c = b;
                while (c = c.parentNode) i.unshift(c);
                while (h[d] === i[d]) d++;
                return d ? kb(h[d], i[d]) : h[d] === v ? -1 : i[d] === v ? 1 : 0
            }, e) : n
        }, fb.matches = function (a, b) {
            return fb(a, null, null, b)
        }, fb.matchesSelector = function (a, b) {
            if ((a.ownerDocument || a) !== n && m(a), b = b.replace(U, "='$1']"), !(!c.matchesSelector || !p || r && r.test(b) || q && q.test(b))) try {
                var d = s.call(a, b);
                if (d || c.disconnectedMatch || a.document && 11 !== a.document.nodeType) return d
            } catch (e) {
            }
            return fb(b, n, null, [a]).length > 0
        }, fb.contains = function (a, b) {
            return (a.ownerDocument || a) !== n && m(a), t(a, b)
        }, fb.attr = function (a, b) {
            (a.ownerDocument || a) !== n && m(a);
            var e = d.attrHandle[b.toLowerCase()],
                f = e && E.call(d.attrHandle, b.toLowerCase()) ? e(a, b, !p) : void 0;
            return void 0 !== f ? f : c.attributes || !p ? a.getAttribute(b) : (f = a.getAttributeNode(b)) && f.specified ? f.value : null
        }, fb.error = function (a) {
            throw new Error("Syntax error, unrecognized expression: " + a)
        }, fb.uniqueSort = function (a) {
            var b, d = [], e = 0, f = 0;
            if (l = !c.detectDuplicates, k = !c.sortStable && a.slice(0), a.sort(B), l) {
                while (b = a[f++]) b === a[f] && (e = d.push(f));
                while (e--) a.splice(d[e], 1)
            }
            return k = null, a
        }, e = fb.getText = function (a) {
            var b, c = "", d = 0, f = a.nodeType;
            if (f) {
                if (1 === f || 9 === f || 11 === f) {
                    if ("string" == typeof a.textContent) return a.textContent;
                    for (a = a.firstChild; a; a = a.nextSibling) c += e(a)
                } else if (3 === f || 4 === f) return a.nodeValue
            } else while (b = a[d++]) c += e(b);
            return c
        }, d = fb.selectors = {
            cacheLength: 50,
            createPseudo: hb,
            match: X,
            attrHandle: {},
            find: {},
            relative: {
                ">": {dir: "parentNode", first: !0},
                " ": {dir: "parentNode"},
                "+": {dir: "previousSibling", first: !0},
                "~": {dir: "previousSibling"}
            },
            preFilter: {
                ATTR: function (a) {
                    return a[1] = a[1].replace(cb, db), a[3] = (a[3] || a[4] || a[5] || "").replace(cb, db), "~=" === a[2] && (a[3] = " " + a[3] + " "), a.slice(0, 4)
                }, CHILD: function (a) {
                    return a[1] = a[1].toLowerCase(), "nth" === a[1].slice(0, 3) ? (a[3] || fb.error(a[0]), a[4] = +(a[4] ? a[5] + (a[6] || 1) : 2 * ("even" === a[3] || "odd" === a[3])), a[5] = +(a[7] + a[8] || "odd" === a[3])) : a[3] && fb.error(a[0]), a
                }, PSEUDO: function (a) {
                    var b, c = !a[6] && a[2];
                    return X.CHILD.test(a[0]) ? null : (a[3] ? a[2] = a[4] || a[5] || "" : c && V.test(c) && (b = g(c, !0)) && (b = c.indexOf(")", c.length - b) - c.length) && (a[0] = a[0].slice(0, b), a[2] = c.slice(0, b)), a.slice(0, 3))
                }
            },
            filter: {
                TAG: function (a) {
                    var b = a.replace(cb, db).toLowerCase();
                    return "*" === a ? function () {
                        return !0
                    } : function (a) {
                        return a.nodeName && a.nodeName.toLowerCase() === b
                    }
                }, CLASS: function (a) {
                    var b = y[a + " "];
                    return b || (b = new RegExp("(^|" + M + ")" + a + "(" + M + "|$)")) && y(a, function (a) {
                        return b.test("string" == typeof a.className && a.className || typeof a.getAttribute !== C && a.getAttribute("class") || "")
                    })
                }, ATTR: function (a, b, c) {
                    return function (d) {
                        var e = fb.attr(d, a);
                        return null == e ? "!=" === b : b ? (e += "", "=" === b ? e === c : "!=" === b ? e !== c : "^=" === b ? c && 0 === e.indexOf(c) : "*=" === b ? c && e.indexOf(c) > -1 : "$=" === b ? c && e.slice(-c.length) === c : "~=" === b ? (" " + e + " ").indexOf(c) > -1 : "|=" === b ? e === c || e.slice(0, c.length + 1) === c + "-" : !1) : !0
                    }
                }, CHILD: function (a, b, c, d, e) {
                    var f = "nth" !== a.slice(0, 3), g = "last" !== a.slice(-4), h = "of-type" === b;
                    return 1 === d && 0 === e ? function (a) {
                        return !!a.parentNode
                    } : function (b, c, i) {
                        var j, k, l, m, n, o, p = f !== g ? "nextSibling" : "previousSibling", q = b.parentNode,
                            r = h && b.nodeName.toLowerCase(), s = !i && !h;
                        if (q) {
                            if (f) {
                                while (p) {
                                    l = b;
                                    while (l = l[p]) if (h ? l.nodeName.toLowerCase() === r : 1 === l.nodeType) return !1;
                                    o = p = "only" === a && !o && "nextSibling"
                                }
                                return !0
                            }
                            if (o = [g ? q.firstChild : q.lastChild], g && s) {
                                k = q[u] || (q[u] = {}), j = k[a] || [], n = j[0] === w && j[1], m = j[0] === w && j[2], l = n && q.childNodes[n];
                                while (l = ++n && l && l[p] || (m = n = 0) || o.pop()) if (1 === l.nodeType && ++m && l === b) {
                                    k[a] = [w, n, m];
                                    break
                                }
                            } else if (s && (j = (b[u] || (b[u] = {}))[a]) && j[0] === w) m = j[1]; else while (l = ++n && l && l[p] || (m = n = 0) || o.pop()) if ((h ? l.nodeName.toLowerCase() === r : 1 === l.nodeType) && ++m && (s && ((l[u] || (l[u] = {}))[a] = [w, m]), l === b)) break;
                            return m -= e, m === d || m % d === 0 && m / d >= 0
                        }
                    }
                }, PSEUDO: function (a, b) {
                    var c, e = d.pseudos[a] || d.setFilters[a.toLowerCase()] || fb.error("unsupported pseudo: " + a);
                    return e[u] ? e(b) : e.length > 1 ? (c = [a, a, "", b], d.setFilters.hasOwnProperty(a.toLowerCase()) ? hb(function (a, c) {
                        var d, f = e(a, b), g = f.length;
                        while (g--) d = K.call(a, f[g]), a[d] = !(c[d] = f[g])
                    }) : function (a) {
                        return e(a, 0, c)
                    }) : e
                }
            },
            pseudos: {
                not: hb(function (a) {
                    var b = [], c = [], d = h(a.replace(R, "$1"));
                    return d[u] ? hb(function (a, b, c, e) {
                        var f, g = d(a, null, e, []), h = a.length;
                        while (h--) (f = g[h]) && (a[h] = !(b[h] = f))
                    }) : function (a, e, f) {
                        return b[0] = a, d(b, null, f, c), !c.pop()
                    }
                }), has: hb(function (a) {
                    return function (b) {
                        return fb(a, b).length > 0
                    }
                }), contains: hb(function (a) {
                    return function (b) {
                        return (b.textContent || b.innerText || e(b)).indexOf(a) > -1
                    }
                }), lang: hb(function (a) {
                    return W.test(a || "") || fb.error("unsupported lang: " + a), a = a.replace(cb, db).toLowerCase(), function (b) {
                        var c;
                        do if (c = p ? b.lang : b.getAttribute("xml:lang") || b.getAttribute("lang")) return c = c.toLowerCase(), c === a || 0 === c.indexOf(a + "-"); while ((b = b.parentNode) && 1 === b.nodeType);
                        return !1
                    }
                }), target: function (b) {
                    var c = a.location && a.location.hash;
                    return c && c.slice(1) === b.id
                }, root: function (a) {
                    return a === o
                }, focus: function (a) {
                    return a === n.activeElement && (!n.hasFocus || n.hasFocus()) && !!(a.type || a.href || ~a.tabIndex)
                }, enabled: function (a) {
                    return a.disabled === !1
                }, disabled: function (a) {
                    return a.disabled === !0
                }, checked: function (a) {
                    var b = a.nodeName.toLowerCase();
                    return "input" === b && !!a.checked || "option" === b && !!a.selected
                }, selected: function (a) {
                    return a.parentNode && a.parentNode.selectedIndex, a.selected === !0
                }, empty: function (a) {
                    for (a = a.firstChild; a; a = a.nextSibling) if (a.nodeType < 6) return !1;
                    return !0
                }, parent: function (a) {
                    return !d.pseudos.empty(a)
                }, header: function (a) {
                    return Z.test(a.nodeName)
                }, input: function (a) {
                    return Y.test(a.nodeName)
                }, button: function (a) {
                    var b = a.nodeName.toLowerCase();
                    return "input" === b && "button" === a.type || "button" === b
                }, text: function (a) {
                    var b;
                    return "input" === a.nodeName.toLowerCase() && "text" === a.type && (null == (b = a.getAttribute("type")) || "text" === b.toLowerCase())
                }, first: nb(function () {
                    return [0]
                }), last: nb(function (a, b) {
                    return [b - 1]
                }), eq: nb(function (a, b, c) {
                    return [0 > c ? c + b : c]
                }), even: nb(function (a, b) {
                    for (var c = 0; b > c; c += 2) a.push(c);
                    return a
                }), odd: nb(function (a, b) {
                    for (var c = 1; b > c; c += 2) a.push(c);
                    return a
                }), lt: nb(function (a, b, c) {
                    for (var d = 0 > c ? c + b : c; --d >= 0;) a.push(d);
                    return a
                }), gt: nb(function (a, b, c) {
                    for (var d = 0 > c ? c + b : c; ++d < b;) a.push(d);
                    return a
                })
            }
        }, d.pseudos.nth = d.pseudos.eq;
        for (b in {radio: !0, checkbox: !0, file: !0, password: !0, image: !0}) d.pseudos[b] = lb(b);
        for (b in {submit: !0, reset: !0}) d.pseudos[b] = mb(b);

        function pb() {
        }

        pb.prototype = d.filters = d.pseudos, d.setFilters = new pb, g = fb.tokenize = function (a, b) {
            var c, e, f, g, h, i, j, k = z[a + " "];
            if (k) return b ? 0 : k.slice(0);
            h = a, i = [], j = d.preFilter;
            while (h) {
                (!c || (e = S.exec(h))) && (e && (h = h.slice(e[0].length) || h), i.push(f = [])), c = !1, (e = T.exec(h)) && (c = e.shift(), f.push({
                    value: c,
                    type: e[0].replace(R, " ")
                }), h = h.slice(c.length));
                for (g in d.filter) !(e = X[g].exec(h)) || j[g] && !(e = j[g](e)) || (c = e.shift(), f.push({
                    value: c,
                    type: g,
                    matches: e
                }), h = h.slice(c.length));
                if (!c) break
            }
            return b ? h.length : h ? fb.error(a) : z(a, i).slice(0)
        };

        function qb(a) {
            for (var b = 0, c = a.length, d = ""; c > b; b++) d += a[b].value;
            return d
        }

        function rb(a, b, c) {
            var d = b.dir, e = c && "parentNode" === d, f = x++;
            return b.first ? function (b, c, f) {
                while (b = b[d]) if (1 === b.nodeType || e) return a(b, c, f)
            } : function (b, c, g) {
                var h, i, j = [w, f];
                if (g) {
                    while (b = b[d]) if ((1 === b.nodeType || e) && a(b, c, g)) return !0
                } else while (b = b[d]) if (1 === b.nodeType || e) {
                    if (i = b[u] || (b[u] = {}), (h = i[d]) && h[0] === w && h[1] === f) return j[2] = h[2];
                    if (i[d] = j, j[2] = a(b, c, g)) return !0
                }
            }
        }

        function sb(a) {
            return a.length > 1 ? function (b, c, d) {
                var e = a.length;
                while (e--) if (!a[e](b, c, d)) return !1;
                return !0
            } : a[0]
        }

        function tb(a, b, c) {
            for (var d = 0, e = b.length; e > d; d++) fb(a, b[d], c);
            return c
        }

        function ub(a, b, c, d, e) {
            for (var f, g = [], h = 0, i = a.length, j = null != b; i > h; h++) (f = a[h]) && (!c || c(f, d, e)) && (g.push(f), j && b.push(h));
            return g
        }

        function vb(a, b, c, d, e, f) {
            return d && !d[u] && (d = vb(d)), e && !e[u] && (e = vb(e, f)), hb(function (f, g, h, i) {
                var j, k, l, m = [], n = [], o = g.length, p = f || tb(b || "*", h.nodeType ? [h] : h, []),
                    q = !a || !f && b ? p : ub(p, m, a, h, i), r = c ? e || (f ? a : o || d) ? [] : g : q;
                if (c && c(q, r, h, i), d) {
                    j = ub(r, n), d(j, [], h, i), k = j.length;
                    while (k--) (l = j[k]) && (r[n[k]] = !(q[n[k]] = l))
                }
                if (f) {
                    if (e || a) {
                        if (e) {
                            j = [], k = r.length;
                            while (k--) (l = r[k]) && j.push(q[k] = l);
                            e(null, r = [], j, i)
                        }
                        k = r.length;
                        while (k--) (l = r[k]) && (j = e ? K.call(f, l) : m[k]) > -1 && (f[j] = !(g[j] = l))
                    }
                } else r = ub(r === g ? r.splice(o, r.length) : r), e ? e(null, g, r, i) : I.apply(g, r)
            })
        }

        function wb(a) {
            for (var b, c, e, f = a.length, g = d.relative[a[0].type], h = g || d.relative[" "], i = g ? 1 : 0, k = rb(function (a) {
                return a === b
            }, h, !0), l = rb(function (a) {
                return K.call(b, a) > -1
            }, h, !0), m = [function (a, c, d) {
                return !g && (d || c !== j) || ((b = c).nodeType ? k(a, c, d) : l(a, c, d))
            }]; f > i; i++) if (c = d.relative[a[i].type]) m = [rb(sb(m), c)]; else {
                if (c = d.filter[a[i].type].apply(null, a[i].matches), c[u]) {
                    for (e = ++i; f > e; e++) if (d.relative[a[e].type]) break;
                    return vb(i > 1 && sb(m), i > 1 && qb(a.slice(0, i - 1).concat({value: " " === a[i - 2].type ? "*" : ""})).replace(R, "$1"), c, e > i && wb(a.slice(i, e)), f > e && wb(a = a.slice(e)), f > e && qb(a))
                }
                m.push(c)
            }
            return sb(m)
        }

        function xb(a, b) {
            var c = b.length > 0, e = a.length > 0, f = function (f, g, h, i, k) {
                var l, m, o, p = 0, q = "0", r = f && [], s = [], t = j, u = f || e && d.find.TAG("*", k),
                    v = w += null == t ? 1 : Math.random() || .1, x = u.length;
                for (k && (j = g !== n && g); q !== x && null != (l = u[q]); q++) {
                    if (e && l) {
                        m = 0;
                        while (o = a[m++]) if (o(l, g, h)) {
                            i.push(l);
                            break
                        }
                        k && (w = v)
                    }
                    c && ((l = !o && l) && p--, f && r.push(l))
                }
                if (p += q, c && q !== p) {
                    m = 0;
                    while (o = b[m++]) o(r, s, g, h);
                    if (f) {
                        if (p > 0) while (q--) r[q] || s[q] || (s[q] = G.call(i));
                        s = ub(s)
                    }
                    I.apply(i, s), k && !f && s.length > 0 && p + b.length > 1 && fb.uniqueSort(i)
                }
                return k && (w = v, j = t), r
            };
            return c ? hb(f) : f
        }

        return h = fb.compile = function (a, b) {
            var c, d = [], e = [], f = A[a + " "];
            if (!f) {
                b || (b = g(a)), c = b.length;
                while (c--) f = wb(b[c]), f[u] ? d.push(f) : e.push(f);
                f = A(a, xb(e, d)), f.selector = a
            }
            return f
        }, i = fb.select = function (a, b, e, f) {
            var i, j, k, l, m, n = "function" == typeof a && a, o = !f && g(a = n.selector || a);
            if (e = e || [], 1 === o.length) {
                if (j = o[0] = o[0].slice(0), j.length > 2 && "ID" === (k = j[0]).type && c.getById && 9 === b.nodeType && p && d.relative[j[1].type]) {
                    if (b = (d.find.ID(k.matches[0].replace(cb, db), b) || [])[0], !b) return e;
                    n && (b = b.parentNode), a = a.slice(j.shift().value.length)
                }
                i = X.needsContext.test(a) ? 0 : j.length;
                while (i--) {
                    if (k = j[i], d.relative[l = k.type]) break;
                    if ((m = d.find[l]) && (f = m(k.matches[0].replace(cb, db), ab.test(j[0].type) && ob(b.parentNode) || b))) {
                        if (j.splice(i, 1), a = f.length && qb(j), !a) return I.apply(e, f), e;
                        break
                    }
                }
            }
            return (n || h(a, o))(f, b, !p, e, ab.test(a) && ob(b.parentNode) || b), e
        }, c.sortStable = u.split("").sort(B).join("") === u, c.detectDuplicates = !!l, m(), c.sortDetached = ib(function (a) {
            return 1 & a.compareDocumentPosition(n.createElement("div"))
        }), ib(function (a) {
            return a.innerHTML = "<a href='#'></a>", "#" === a.firstChild.getAttribute("href")
        }) || jb("type|href|height|width", function (a, b, c) {
            return c ? void 0 : a.getAttribute(b, "type" === b.toLowerCase() ? 1 : 2)
        }), c.attributes && ib(function (a) {
            return a.innerHTML = "<input/>", a.firstChild.setAttribute("value", ""), "" === a.firstChild.getAttribute("value")
        }) || jb("value", function (a, b, c) {
            return c || "input" !== a.nodeName.toLowerCase() ? void 0 : a.defaultValue
        }), ib(function (a) {
            return null == a.getAttribute("disabled")
        }) || jb(L, function (a, b, c) {
            var d;
            return c ? void 0 : a[b] === !0 ? b.toLowerCase() : (d = a.getAttributeNode(b)) && d.specified ? d.value : null
        }), fb
    }(a);
    n.find = t, n.expr = t.selectors, n.expr[":"] = n.expr.pseudos, n.unique = t.uniqueSort, n.text = t.getText, n.isXMLDoc = t.isXML, n.contains = t.contains;
    var u = n.expr.match.needsContext, v = /^<(\w+)\s*\/?>(?:<\/\1>|)$/, w = /^.[^:#\[\.,]*$/;

    function x(a, b, c) {
        if (n.isFunction(b)) return n.grep(a, function (a, d) {
            return !!b.call(a, d, a) !== c
        });
        if (b.nodeType) return n.grep(a, function (a) {
            return a === b !== c
        });
        if ("string" == typeof b) {
            if (w.test(b)) return n.filter(b, a, c);
            b = n.filter(b, a)
        }
        return n.grep(a, function (a) {
            return g.call(b, a) >= 0 !== c
        })
    }

    n.filter = function (a, b, c) {
        var d = b[0];
        return c && (a = ":not(" + a + ")"), 1 === b.length && 1 === d.nodeType ? n.find.matchesSelector(d, a) ? [d] : [] : n.find.matches(a, n.grep(b, function (a) {
            return 1 === a.nodeType
        }))
    }, n.fn.extend({
        find: function (a) {
            var b, c = this.length, d = [], e = this;
            if ("string" != typeof a) return this.pushStack(n(a).filter(function () {
                for (b = 0; c > b; b++) if (n.contains(e[b], this)) return !0
            }));
            for (b = 0; c > b; b++) n.find(a, e[b], d);
            return d = this.pushStack(c > 1 ? n.unique(d) : d), d.selector = this.selector ? this.selector + " " + a : a, d
        }, filter: function (a) {
            return this.pushStack(x(this, a || [], !1))
        }, not: function (a) {
            return this.pushStack(x(this, a || [], !0))
        }, is: function (a) {
            return !!x(this, "string" == typeof a && u.test(a) ? n(a) : a || [], !1).length
        }
    });
    var y, z = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]*))$/, A = n.fn.init = function (a, b) {
        var c, d;
        if (!a) return this;
        if ("string" == typeof a) {
            if (c = "<" === a[0] && ">" === a[a.length - 1] && a.length >= 3 ? [null, a, null] : z.exec(a), !c || !c[1] && b) return !b || b.jquery ? (b || y).find(a) : this.constructor(b).find(a);
            if (c[1]) {
                if (b = b instanceof n ? b[0] : b, n.merge(this, n.parseHTML(c[1], b && b.nodeType ? b.ownerDocument || b : l, !0)), v.test(c[1]) && n.isPlainObject(b)) for (c in b) n.isFunction(this[c]) ? this[c](b[c]) : this.attr(c, b[c]);
                return this
            }
            return d = l.getElementById(c[2]), d && d.parentNode && (this.length = 1, this[0] = d), this.context = l, this.selector = a, this
        }
        return a.nodeType ? (this.context = this[0] = a, this.length = 1, this) : n.isFunction(a) ? "undefined" != typeof y.ready ? y.ready(a) : a(n) : (void 0 !== a.selector && (this.selector = a.selector, this.context = a.context), n.makeArray(a, this))
    };
    A.prototype = n.fn, y = n(l);
    var B = /^(?:parents|prev(?:Until|All))/, C = {children: !0, contents: !0, next: !0, prev: !0};
    n.extend({
        dir: function (a, b, c) {
            var d = [], e = void 0 !== c;
            while ((a = a[b]) && 9 !== a.nodeType) if (1 === a.nodeType) {
                if (e && n(a).is(c)) break;
                d.push(a)
            }
            return d
        }, sibling: function (a, b) {
            for (var c = []; a; a = a.nextSibling) 1 === a.nodeType && a !== b && c.push(a);
            return c
        }
    }), n.fn.extend({
        has: function (a) {
            var b = n(a, this), c = b.length;
            return this.filter(function () {
                for (var a = 0; c > a; a++) if (n.contains(this, b[a])) return !0
            })
        }, closest: function (a, b) {
            for (var c, d = 0, e = this.length, f = [], g = u.test(a) || "string" != typeof a ? n(a, b || this.context) : 0; e > d; d++) for (c = this[d]; c && c !== b; c = c.parentNode) if (c.nodeType < 11 && (g ? g.index(c) > -1 : 1 === c.nodeType && n.find.matchesSelector(c, a))) {
                f.push(c);
                break
            }
            return this.pushStack(f.length > 1 ? n.unique(f) : f)
        }, index: function (a) {
            return a ? "string" == typeof a ? g.call(n(a), this[0]) : g.call(this, a.jquery ? a[0] : a) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1
        }, add: function (a, b) {
            return this.pushStack(n.unique(n.merge(this.get(), n(a, b))))
        }, addBack: function (a) {
            return this.add(null == a ? this.prevObject : this.prevObject.filter(a))
        }
    });

    function D(a, b) {
        while ((a = a[b]) && 1 !== a.nodeType) ;
        return a
    }

    n.each({
        parent: function (a) {
            var b = a.parentNode;
            return b && 11 !== b.nodeType ? b : null
        }, parents: function (a) {
            return n.dir(a, "parentNode")
        }, parentsUntil: function (a, b, c) {
            return n.dir(a, "parentNode", c)
        }, next: function (a) {
            return D(a, "nextSibling")
        }, prev: function (a) {
            return D(a, "previousSibling")
        }, nextAll: function (a) {
            return n.dir(a, "nextSibling")
        }, prevAll: function (a) {
            return n.dir(a, "previousSibling")
        }, nextUntil: function (a, b, c) {
            return n.dir(a, "nextSibling", c)
        }, prevUntil: function (a, b, c) {
            return n.dir(a, "previousSibling", c)
        }, siblings: function (a) {
            return n.sibling((a.parentNode || {}).firstChild, a)
        }, children: function (a) {
            return n.sibling(a.firstChild)
        }, contents: function (a) {
            return a.contentDocument || n.merge([], a.childNodes)
        }
    }, function (a, b) {
        n.fn[a] = function (c, d) {
            var e = n.map(this, b, c);
            return "Until" !== a.slice(-5) && (d = c), d && "string" == typeof d && (e = n.filter(d, e)), this.length > 1 && (C[a] || n.unique(e), B.test(a) && e.reverse()), this.pushStack(e)
        }
    });
    var E = /\S+/g, F = {};

    function G(a) {
        var b = F[a] = {};
        return n.each(a.match(E) || [], function (a, c) {
            b[c] = !0
        }), b
    }

    n.Callbacks = function (a) {
        a = "string" == typeof a ? F[a] || G(a) : n.extend({}, a);
        var b, c, d, e, f, g, h = [], i = !a.once && [], j = function (l) {
            for (b = a.memory && l, c = !0, g = e || 0, e = 0, f = h.length, d = !0; h && f > g; g++) if (h[g].apply(l[0], l[1]) === !1 && a.stopOnFalse) {
                b = !1;
                break
            }
            d = !1, h && (i ? i.length && j(i.shift()) : b ? h = [] : k.disable())
        }, k = {
            add: function () {
                if (h) {
                    var c = h.length;
                    !function g(b) {
                        n.each(b, function (b, c) {
                            var d = n.type(c);
                            "function" === d ? a.unique && k.has(c) || h.push(c) : c && c.length && "string" !== d && g(c)
                        })
                    }(arguments), d ? f = h.length : b && (e = c, j(b))
                }
                return this
            }, remove: function () {
                return h && n.each(arguments, function (a, b) {
                    var c;
                    while ((c = n.inArray(b, h, c)) > -1) h.splice(c, 1), d && (f >= c && f--, g >= c && g--)
                }), this
            }, has: function (a) {
                return a ? n.inArray(a, h) > -1 : !(!h || !h.length)
            }, empty: function () {
                return h = [], f = 0, this
            }, disable: function () {
                return h = i = b = void 0, this
            }, disabled: function () {
                return !h
            }, lock: function () {
                return i = void 0, b || k.disable(), this
            }, locked: function () {
                return !i
            }, fireWith: function (a, b) {
                return !h || c && !i || (b = b || [], b = [a, b.slice ? b.slice() : b], d ? i.push(b) : j(b)), this
            }, fire: function () {
                return k.fireWith(this, arguments), this
            }, fired: function () {
                return !!c
            }
        };
        return k
    }, n.extend({
        Deferred: function (a) {
            var b = [["resolve", "done", n.Callbacks("once memory"), "resolved"], ["reject", "fail", n.Callbacks("once memory"), "rejected"], ["notify", "progress", n.Callbacks("memory")]],
                c = "pending", d = {
                    state: function () {
                        return c
                    }, always: function () {
                        return e.done(arguments).fail(arguments), this
                    }, then: function () {
                        var a = arguments;
                        return n.Deferred(function (c) {
                            n.each(b, function (b, f) {
                                var g = n.isFunction(a[b]) && a[b];
                                e[f[1]](function () {
                                    var a = g && g.apply(this, arguments);
                                    a && n.isFunction(a.promise) ? a.promise().done(c.resolve).fail(c.reject).progress(c.notify) : c[f[0] + "With"](this === d ? c.promise() : this, g ? [a] : arguments)
                                })
                            }), a = null
                        }).promise()
                    }, promise: function (a) {
                        return null != a ? n.extend(a, d) : d
                    }
                }, e = {};
            return d.pipe = d.then, n.each(b, function (a, f) {
                var g = f[2], h = f[3];
                d[f[1]] = g.add, h && g.add(function () {
                    c = h
                }, b[1 ^ a][2].disable, b[2][2].lock), e[f[0]] = function () {
                    return e[f[0] + "With"](this === e ? d : this, arguments), this
                }, e[f[0] + "With"] = g.fireWith
            }), d.promise(e), a && a.call(e, e), e
        }, when: function (a) {
            var b = 0, c = d.call(arguments), e = c.length, f = 1 !== e || a && n.isFunction(a.promise) ? e : 0,
                g = 1 === f ? a : n.Deferred(), h = function (a, b, c) {
                    return function (e) {
                        b[a] = this, c[a] = arguments.length > 1 ? d.call(arguments) : e, c === i ? g.notifyWith(b, c) : --f || g.resolveWith(b, c)
                    }
                }, i, j, k;
            if (e > 1) for (i = new Array(e), j = new Array(e), k = new Array(e); e > b; b++) c[b] && n.isFunction(c[b].promise) ? c[b].promise().done(h(b, k, c)).fail(g.reject).progress(h(b, j, i)) : --f;
            return f || g.resolveWith(k, c), g.promise()
        }
    });
    var H;
    n.fn.ready = function (a) {
        return n.ready.promise().done(a), this
    }, n.extend({
        isReady: !1, readyWait: 1, holdReady: function (a) {
            a ? n.readyWait++ : n.ready(!0)
        }, ready: function (a) {
            (a === !0 ? --n.readyWait : n.isReady) || (n.isReady = !0, a !== !0 && --n.readyWait > 0 || (H.resolveWith(l, [n]), n.fn.triggerHandler && (n(l).triggerHandler("ready"), n(l).off("ready"))))
        }
    });

    function I() {
        l.removeEventListener("DOMContentLoaded", I, !1), a.removeEventListener("load", I, !1), n.ready()
    }

    n.ready.promise = function (b) {
        return H || (H = n.Deferred(), "complete" === l.readyState ? setTimeout(n.ready) : (l.addEventListener("DOMContentLoaded", I, !1), a.addEventListener("load", I, !1))), H.promise(b)
    }, n.ready.promise();
    var J = n.access = function (a, b, c, d, e, f, g) {
        var h = 0, i = a.length, j = null == c;
        if ("object" === n.type(c)) {
            e = !0;
            for (h in c) n.access(a, b, h, c[h], !0, f, g)
        } else if (void 0 !== d && (e = !0, n.isFunction(d) || (g = !0), j && (g ? (b.call(a, d), b = null) : (j = b, b = function (a, b, c) {
            return j.call(n(a), c)
        })), b)) for (; i > h; h++) b(a[h], c, g ? d : d.call(a[h], h, b(a[h], c)));
        return e ? a : j ? b.call(a) : i ? b(a[0], c) : f
    };
    n.acceptData = function (a) {
        return 1 === a.nodeType || 9 === a.nodeType || !+a.nodeType
    };

    function K() {
        Object.defineProperty(this.cache = {}, 0, {
            get: function () {
                return {}
            }
        }), this.expando = n.expando + Math.random()
    }

    K.uid = 1, K.accepts = n.acceptData, K.prototype = {
        key: function (a) {
            if (!K.accepts(a)) return 0;
            var b = {}, c = a[this.expando];
            if (!c) {
                c = K.uid++;
                try {
                    b[this.expando] = {value: c}, Object.defineProperties(a, b)
                } catch (d) {
                    b[this.expando] = c, n.extend(a, b)
                }
            }
            return this.cache[c] || (this.cache[c] = {}), c
        }, set: function (a, b, c) {
            var d, e = this.key(a), f = this.cache[e];
            if ("string" == typeof b) f[b] = c; else if (n.isEmptyObject(f)) n.extend(this.cache[e], b); else for (d in b) f[d] = b[d];
            return f
        }, get: function (a, b) {
            var c = this.cache[this.key(a)];
            return void 0 === b ? c : c[b]
        }, access: function (a, b, c) {
            var d;
            return void 0 === b || b && "string" == typeof b && void 0 === c ? (d = this.get(a, b), void 0 !== d ? d : this.get(a, n.camelCase(b))) : (this.set(a, b, c), void 0 !== c ? c : b)
        }, remove: function (a, b) {
            var c, d, e, f = this.key(a), g = this.cache[f];
            if (void 0 === b) this.cache[f] = {}; else {
                n.isArray(b) ? d = b.concat(b.map(n.camelCase)) : (e = n.camelCase(b), b in g ? d = [b, e] : (d = e, d = d in g ? [d] : d.match(E) || [])), c = d.length;
                while (c--) delete g[d[c]]
            }
        }, hasData: function (a) {
            return !n.isEmptyObject(this.cache[a[this.expando]] || {})
        }, discard: function (a) {
            a[this.expando] && delete this.cache[a[this.expando]]
        }
    };
    var L = new K, M = new K, N = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/, O = /([A-Z])/g;

    function P(a, b, c) {
        var d;
        if (void 0 === c && 1 === a.nodeType) if (d = "data-" + b.replace(O, "-$1").toLowerCase(), c = a.getAttribute(d), "string" == typeof c) {
            try {
                c = "true" === c ? !0 : "false" === c ? !1 : "null" === c ? null : +c + "" === c ? +c : N.test(c) ? n.parseJSON(c) : c
            } catch (e) {
            }
            M.set(a, b, c)
        } else c = void 0;
        return c
    }

    n.extend({
        hasData: function (a) {
            return M.hasData(a) || L.hasData(a)
        }, data: function (a, b, c) {
            return M.access(a, b, c)
        }, removeData: function (a, b) {
            M.remove(a, b)
        }, _data: function (a, b, c) {
            return L.access(a, b, c)
        }, _removeData: function (a, b) {
            L.remove(a, b)
        }
    }), n.fn.extend({
        data: function (a, b) {
            var c, d, e, f = this[0], g = f && f.attributes;
            if (void 0 === a) {
                if (this.length && (e = M.get(f), 1 === f.nodeType && !L.get(f, "hasDataAttrs"))) {
                    c = g.length;
                    while (c--) g[c] && (d = g[c].name, 0 === d.indexOf("data-") && (d = n.camelCase(d.slice(5)), P(f, d, e[d])));
                    L.set(f, "hasDataAttrs", !0)
                }
                return e
            }
            return "object" == typeof a ? this.each(function () {
                M.set(this, a)
            }) : J(this, function (b) {
                var c, d = n.camelCase(a);
                if (f && void 0 === b) {
                    if (c = M.get(f, a), void 0 !== c) return c;
                    if (c = M.get(f, d), void 0 !== c) return c;
                    if (c = P(f, d, void 0), void 0 !== c) return c
                } else this.each(function () {
                    var c = M.get(this, d);
                    M.set(this, d, b), -1 !== a.indexOf("-") && void 0 !== c && M.set(this, a, b)
                })
            }, null, b, arguments.length > 1, null, !0)
        }, removeData: function (a) {
            return this.each(function () {
                M.remove(this, a)
            })
        }
    }), n.extend({
        queue: function (a, b, c) {
            var d;
            return a ? (b = (b || "fx") + "queue", d = L.get(a, b), c && (!d || n.isArray(c) ? d = L.access(a, b, n.makeArray(c)) : d.push(c)), d || []) : void 0
        }, dequeue: function (a, b) {
            b = b || "fx";
            var c = n.queue(a, b), d = c.length, e = c.shift(), f = n._queueHooks(a, b), g = function () {
                n.dequeue(a, b)
            };
            "inprogress" === e && (e = c.shift(), d--), e && ("fx" === b && c.unshift("inprogress"), delete f.stop, e.call(a, g, f)), !d && f && f.empty.fire()
        }, _queueHooks: function (a, b) {
            var c = b + "queueHooks";
            return L.get(a, c) || L.access(a, c, {
                empty: n.Callbacks("once memory").add(function () {
                    L.remove(a, [b + "queue", c])
                })
            })
        }
    }), n.fn.extend({
        queue: function (a, b) {
            var c = 2;
            return "string" != typeof a && (b = a, a = "fx", c--), arguments.length < c ? n.queue(this[0], a) : void 0 === b ? this : this.each(function () {
                var c = n.queue(this, a, b);
                n._queueHooks(this, a), "fx" === a && "inprogress" !== c[0] && n.dequeue(this, a)
            })
        }, dequeue: function (a) {
            return this.each(function () {
                n.dequeue(this, a)
            })
        }, clearQueue: function (a) {
            return this.queue(a || "fx", [])
        }, promise: function (a, b) {
            var c, d = 1, e = n.Deferred(), f = this, g = this.length, h = function () {
                --d || e.resolveWith(f, [f])
            };
            "string" != typeof a && (b = a, a = void 0), a = a || "fx";
            while (g--) c = L.get(f[g], a + "queueHooks"), c && c.empty && (d++, c.empty.add(h));
            return h(), e.promise(b)
        }
    });
    var Q = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source, R = ["Top", "Right", "Bottom", "Left"], S = function (a, b) {
        return a = b || a, "none" === n.css(a, "display") || !n.contains(a.ownerDocument, a)
    }, T = /^(?:checkbox|radio)$/i;
    !function () {
        var a = l.createDocumentFragment(), b = a.appendChild(l.createElement("div")), c = l.createElement("input");
        c.setAttribute("type", "radio"), c.setAttribute("checked", "checked"), c.setAttribute("name", "t"), b.appendChild(c), k.checkClone = b.cloneNode(!0).cloneNode(!0).lastChild.checked, b.innerHTML = "<textarea>x</textarea>", k.noCloneChecked = !!b.cloneNode(!0).lastChild.defaultValue
    }();
    var U = "undefined";
    k.focusinBubbles = "onfocusin" in a;
    var V = /^key/, W = /^(?:mouse|pointer|contextmenu)|click/, X = /^(?:focusinfocus|focusoutblur)$/,
        Y = /^([^.]*)(?:\.(.+)|)$/;

    function Z() {
        return !0
    }

    function $() {
        return !1
    }

    function _() {
        try {
            return l.activeElement
        } catch (a) {
        }
    }

    n.event = {
        global: {},
        add: function (a, b, c, d, e) {
            var f, g, h, i, j, k, l, m, o, p, q, r = L.get(a);
            if (r) {
                c.handler && (f = c, c = f.handler, e = f.selector), c.guid || (c.guid = n.guid++), (i = r.events) || (i = r.events = {}), (g = r.handle) || (g = r.handle = function (b) {
                    return typeof n !== U && n.event.triggered !== b.type ? n.event.dispatch.apply(a, arguments) : void 0
                }), b = (b || "").match(E) || [""], j = b.length;
                while (j--) h = Y.exec(b[j]) || [], o = q = h[1], p = (h[2] || "").split(".").sort(), o && (l = n.event.special[o] || {}, o = (e ? l.delegateType : l.bindType) || o, l = n.event.special[o] || {}, k = n.extend({
                    type: o,
                    origType: q,
                    data: d,
                    handler: c,
                    guid: c.guid,
                    selector: e,
                    needsContext: e && n.expr.match.needsContext.test(e),
                    namespace: p.join(".")
                }, f), (m = i[o]) || (m = i[o] = [], m.delegateCount = 0, l.setup && l.setup.call(a, d, p, g) !== !1 || a.addEventListener && a.addEventListener(o, g, !1)), l.add && (l.add.call(a, k), k.handler.guid || (k.handler.guid = c.guid)), e ? m.splice(m.delegateCount++, 0, k) : m.push(k), n.event.global[o] = !0)
            }
        },
        remove: function (a, b, c, d, e) {
            var f, g, h, i, j, k, l, m, o, p, q, r = L.hasData(a) && L.get(a);
            if (r && (i = r.events)) {
                b = (b || "").match(E) || [""], j = b.length;
                while (j--) if (h = Y.exec(b[j]) || [], o = q = h[1], p = (h[2] || "").split(".").sort(), o) {
                    l = n.event.special[o] || {}, o = (d ? l.delegateType : l.bindType) || o, m = i[o] || [], h = h[2] && new RegExp("(^|\\.)" + p.join("\\.(?:.*\\.|)") + "(\\.|$)"), g = f = m.length;
                    while (f--) k = m[f], !e && q !== k.origType || c && c.guid !== k.guid || h && !h.test(k.namespace) || d && d !== k.selector && ("**" !== d || !k.selector) || (m.splice(f, 1), k.selector && m.delegateCount--, l.remove && l.remove.call(a, k));
                    g && !m.length && (l.teardown && l.teardown.call(a, p, r.handle) !== !1 || n.removeEvent(a, o, r.handle), delete i[o])
                } else for (o in i) n.event.remove(a, o + b[j], c, d, !0);
                n.isEmptyObject(i) && (delete r.handle, L.remove(a, "events"))
            }
        },
        trigger: function (b, c, d, e) {
            var f, g, h, i, k, m, o, p = [d || l], q = j.call(b, "type") ? b.type : b,
                r = j.call(b, "namespace") ? b.namespace.split(".") : [];
            if (g = h = d = d || l, 3 !== d.nodeType && 8 !== d.nodeType && !X.test(q + n.event.triggered) && (q.indexOf(".") >= 0 && (r = q.split("."), q = r.shift(), r.sort()), k = q.indexOf(":") < 0 && "on" + q, b = b[n.expando] ? b : new n.Event(q, "object" == typeof b && b), b.isTrigger = e ? 2 : 3, b.namespace = r.join("."), b.namespace_re = b.namespace ? new RegExp("(^|\\.)" + r.join("\\.(?:.*\\.|)") + "(\\.|$)") : null, b.result = void 0, b.target || (b.target = d), c = null == c ? [b] : n.makeArray(c, [b]), o = n.event.special[q] || {}, e || !o.trigger || o.trigger.apply(d, c) !== !1)) {
                if (!e && !o.noBubble && !n.isWindow(d)) {
                    for (i = o.delegateType || q, X.test(i + q) || (g = g.parentNode); g; g = g.parentNode) p.push(g), h = g;
                    h === (d.ownerDocument || l) && p.push(h.defaultView || h.parentWindow || a)
                }
                f = 0;
                while ((g = p[f++]) && !b.isPropagationStopped()) b.type = f > 1 ? i : o.bindType || q, m = (L.get(g, "events") || {})[b.type] && L.get(g, "handle"), m && m.apply(g, c), m = k && g[k], m && m.apply && n.acceptData(g) && (b.result = m.apply(g, c), b.result === !1 && b.preventDefault());
                return b.type = q, e || b.isDefaultPrevented() || o._default && o._default.apply(p.pop(), c) !== !1 || !n.acceptData(d) || k && n.isFunction(d[q]) && !n.isWindow(d) && (h = d[k], h && (d[k] = null), n.event.triggered = q, d[q](), n.event.triggered = void 0, h && (d[k] = h)), b.result
            }
        },
        dispatch: function (a) {
            a = n.event.fix(a);
            var b, c, e, f, g, h = [], i = d.call(arguments), j = (L.get(this, "events") || {})[a.type] || [],
                k = n.event.special[a.type] || {};
            if (i[0] = a, a.delegateTarget = this, !k.preDispatch || k.preDispatch.call(this, a) !== !1) {
                h = n.event.handlers.call(this, a, j), b = 0;
                while ((f = h[b++]) && !a.isPropagationStopped()) {
                    a.currentTarget = f.elem, c = 0;
                    while ((g = f.handlers[c++]) && !a.isImmediatePropagationStopped()) (!a.namespace_re || a.namespace_re.test(g.namespace)) && (a.handleObj = g, a.data = g.data, e = ((n.event.special[g.origType] || {}).handle || g.handler).apply(f.elem, i), void 0 !== e && (a.result = e) === !1 && (a.preventDefault(), a.stopPropagation()))
                }
                return k.postDispatch && k.postDispatch.call(this, a), a.result
            }
        },
        handlers: function (a, b) {
            var c, d, e, f, g = [], h = b.delegateCount, i = a.target;
            if (h && i.nodeType && (!a.button || "click" !== a.type)) for (; i !== this; i = i.parentNode || this) if (i.disabled !== !0 || "click" !== a.type) {
                for (d = [], c = 0; h > c; c++) f = b[c], e = f.selector + " ", void 0 === d[e] && (d[e] = f.needsContext ? n(e, this).index(i) >= 0 : n.find(e, this, null, [i]).length), d[e] && d.push(f);
                d.length && g.push({elem: i, handlers: d})
            }
            return h < b.length && g.push({elem: this, handlers: b.slice(h)}), g
        },
        props: "altKey bubbles cancelable ctrlKey currentTarget eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(" "),
        fixHooks: {},
        keyHooks: {
            props: "char charCode key keyCode".split(" "), filter: function (a, b) {
                return null == a.which && (a.which = null != b.charCode ? b.charCode : b.keyCode), a
            }
        },
        mouseHooks: {
            props: "button buttons clientX clientY offsetX offsetY pageX pageY screenX screenY toElement".split(" "),
            filter: function (a, b) {
                var c, d, e, f = b.button;
                return null == a.pageX && null != b.clientX && (c = a.target.ownerDocument || l, d = c.documentElement, e = c.body, a.pageX = b.clientX + (d && d.scrollLeft || e && e.scrollLeft || 0) - (d && d.clientLeft || e && e.clientLeft || 0), a.pageY = b.clientY + (d && d.scrollTop || e && e.scrollTop || 0) - (d && d.clientTop || e && e.clientTop || 0)), a.which || void 0 === f || (a.which = 1 & f ? 1 : 2 & f ? 3 : 4 & f ? 2 : 0), a
            }
        },
        fix: function (a) {
            if (a[n.expando]) return a;
            var b, c, d, e = a.type, f = a, g = this.fixHooks[e];
            g || (this.fixHooks[e] = g = W.test(e) ? this.mouseHooks : V.test(e) ? this.keyHooks : {}), d = g.props ? this.props.concat(g.props) : this.props, a = new n.Event(f), b = d.length;
            while (b--) c = d[b], a[c] = f[c];
            return a.target || (a.target = l), 3 === a.target.nodeType && (a.target = a.target.parentNode), g.filter ? g.filter(a, f) : a
        },
        special: {
            load: {noBubble: !0}, focus: {
                trigger: function () {
                    return this !== _() && this.focus ? (this.focus(), !1) : void 0
                }, delegateType: "focusin"
            }, blur: {
                trigger: function () {
                    return this === _() && this.blur ? (this.blur(), !1) : void 0
                }, delegateType: "focusout"
            }, click: {
                trigger: function () {
                    return "checkbox" === this.type && this.click && n.nodeName(this, "input") ? (this.click(), !1) : void 0
                }, _default: function (a) {
                    return n.nodeName(a.target, "a")
                }
            }, beforeunload: {
                postDispatch: function (a) {
                    void 0 !== a.result && a.originalEvent && (a.originalEvent.returnValue = a.result)
                }
            }
        },
        simulate: function (a, b, c, d) {
            var e = n.extend(new n.Event, c, {type: a, isSimulated: !0, originalEvent: {}});
            d ? n.event.trigger(e, null, b) : n.event.dispatch.call(b, e), e.isDefaultPrevented() && c.preventDefault()
        }
    }, n.removeEvent = function (a, b, c) {
        a.removeEventListener && a.removeEventListener(b, c, !1)
    }, n.Event = function (a, b) {
        return this instanceof n.Event ? (a && a.type ? (this.originalEvent = a, this.type = a.type, this.isDefaultPrevented = a.defaultPrevented || void 0 === a.defaultPrevented && a.returnValue === !1 ? Z : $) : this.type = a, b && n.extend(this, b), this.timeStamp = a && a.timeStamp || n.now(), void (this[n.expando] = !0)) : new n.Event(a, b)
    }, n.Event.prototype = {
        isDefaultPrevented: $,
        isPropagationStopped: $,
        isImmediatePropagationStopped: $,
        preventDefault: function () {
            var a = this.originalEvent;
            this.isDefaultPrevented = Z, a && a.preventDefault && a.preventDefault()
        },
        stopPropagation: function () {
            var a = this.originalEvent;
            this.isPropagationStopped = Z, a && a.stopPropagation && a.stopPropagation()
        },
        stopImmediatePropagation: function () {
            var a = this.originalEvent;
            this.isImmediatePropagationStopped = Z, a && a.stopImmediatePropagation && a.stopImmediatePropagation(), this.stopPropagation()
        }
    }, n.each({
        mouseenter: "mouseover",
        mouseleave: "mouseout",
        pointerenter: "pointerover",
        pointerleave: "pointerout"
    }, function (a, b) {
        n.event.special[a] = {
            delegateType: b, bindType: b, handle: function (a) {
                var c, d = this, e = a.relatedTarget, f = a.handleObj;
                return (!e || e !== d && !n.contains(d, e)) && (a.type = f.origType, c = f.handler.apply(this, arguments), a.type = b), c
            }
        }
    }), k.focusinBubbles || n.each({focus: "focusin", blur: "focusout"}, function (a, b) {
        var c = function (a) {
            n.event.simulate(b, a.target, n.event.fix(a), !0)
        };
        n.event.special[b] = {
            setup: function () {
                var d = this.ownerDocument || this, e = L.access(d, b);
                e || d.addEventListener(a, c, !0), L.access(d, b, (e || 0) + 1)
            }, teardown: function () {
                var d = this.ownerDocument || this, e = L.access(d, b) - 1;
                e ? L.access(d, b, e) : (d.removeEventListener(a, c, !0), L.remove(d, b))
            }
        }
    }), n.fn.extend({
        on: function (a, b, c, d, e) {
            var f, g;
            if ("object" == typeof a) {
                "string" != typeof b && (c = c || b, b = void 0);
                for (g in a) this.on(g, b, c, a[g], e);
                return this
            }
            if (null == c && null == d ? (d = b, c = b = void 0) : null == d && ("string" == typeof b ? (d = c, c = void 0) : (d = c, c = b, b = void 0)), d === !1) d = $; else if (!d) return this;
            return 1 === e && (f = d, d = function (a) {
                return n().off(a), f.apply(this, arguments)
            }, d.guid = f.guid || (f.guid = n.guid++)), this.each(function () {
                n.event.add(this, a, d, c, b)
            })
        }, one: function (a, b, c, d) {
            return this.on(a, b, c, d, 1)
        }, off: function (a, b, c) {
            var d, e;
            if (a && a.preventDefault && a.handleObj) return d = a.handleObj, n(a.delegateTarget).off(d.namespace ? d.origType + "." + d.namespace : d.origType, d.selector, d.handler), this;
            if ("object" == typeof a) {
                for (e in a) this.off(e, b, a[e]);
                return this
            }
            return (b === !1 || "function" == typeof b) && (c = b, b = void 0), c === !1 && (c = $), this.each(function () {
                n.event.remove(this, a, c, b)
            })
        }, trigger: function (a, b) {
            return this.each(function () {
                n.event.trigger(a, b, this)
            })
        }, triggerHandler: function (a, b) {
            var c = this[0];
            return c ? n.event.trigger(a, b, c, !0) : void 0
        }
    });
    var ab = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/gi, bb = /<([\w:]+)/,
        cb = /<|&#?\w+;/, db = /<(?:script|style|link)/i, eb = /checked\s*(?:[^=]|=\s*.checked.)/i,
        fb = /^$|\/(?:java|ecma)script/i, gb = /^true\/(.*)/, hb = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g, ib = {
            option: [1, "<select multiple='multiple'>", "</select>"],
            thead: [1, "<table>", "</table>"],
            col: [2, "<table><colgroup>", "</colgroup></table>"],
            tr: [2, "<table><tbody>", "</tbody></table>"],
            td: [3, "<table><tbody><tr>", "</tr></tbody></table>"],
            _default: [0, "", ""]
        };
    ib.optgroup = ib.option, ib.tbody = ib.tfoot = ib.colgroup = ib.caption = ib.thead, ib.th = ib.td;

    function jb(a, b) {
        return n.nodeName(a, "table") && n.nodeName(11 !== b.nodeType ? b : b.firstChild, "tr") ? a.getElementsByTagName("tbody")[0] || a.appendChild(a.ownerDocument.createElement("tbody")) : a
    }

    function kb(a) {
        return a.type = (null !== a.getAttribute("type")) + "/" + a.type, a
    }

    function lb(a) {
        var b = gb.exec(a.type);
        return b ? a.type = b[1] : a.removeAttribute("type"), a
    }

    function mb(a, b) {
        for (var c = 0, d = a.length; d > c; c++) L.set(a[c], "globalEval", !b || L.get(b[c], "globalEval"))
    }

    function nb(a, b) {
        var c, d, e, f, g, h, i, j;
        if (1 === b.nodeType) {
            if (L.hasData(a) && (f = L.access(a), g = L.set(b, f), j = f.events)) {
                delete g.handle, g.events = {};
                for (e in j) for (c = 0, d = j[e].length; d > c; c++) n.event.add(b, e, j[e][c])
            }
            M.hasData(a) && (h = M.access(a), i = n.extend({}, h), M.set(b, i))
        }
    }

    function ob(a, b) {
        var c = a.getElementsByTagName ? a.getElementsByTagName(b || "*") : a.querySelectorAll ? a.querySelectorAll(b || "*") : [];
        return void 0 === b || b && n.nodeName(a, b) ? n.merge([a], c) : c
    }

    function pb(a, b) {
        var c = b.nodeName.toLowerCase();
        "input" === c && T.test(a.type) ? b.checked = a.checked : ("input" === c || "textarea" === c) && (b.defaultValue = a.defaultValue)
    }

    n.extend({
        clone: function (a, b, c) {
            var d, e, f, g, h = a.cloneNode(!0), i = n.contains(a.ownerDocument, a);
            if (!(k.noCloneChecked || 1 !== a.nodeType && 11 !== a.nodeType || n.isXMLDoc(a))) for (g = ob(h), f = ob(a), d = 0, e = f.length; e > d; d++) pb(f[d], g[d]);
            if (b) if (c) for (f = f || ob(a), g = g || ob(h), d = 0, e = f.length; e > d; d++) nb(f[d], g[d]); else nb(a, h);
            return g = ob(h, "script"), g.length > 0 && mb(g, !i && ob(a, "script")), h
        }, buildFragment: function (a, b, c, d) {
            for (var e, f, g, h, i, j, k = b.createDocumentFragment(), l = [], m = 0, o = a.length; o > m; m++) if (e = a[m], e || 0 === e) if ("object" === n.type(e)) n.merge(l, e.nodeType ? [e] : e); else if (cb.test(e)) {
                f = f || k.appendChild(b.createElement("div")), g = (bb.exec(e) || ["", ""])[1].toLowerCase(), h = ib[g] || ib._default, f.innerHTML = h[1] + e.replace(ab, "<$1></$2>") + h[2], j = h[0];
                while (j--) f = f.lastChild;
                n.merge(l, f.childNodes), f = k.firstChild, f.textContent = ""
            } else l.push(b.createTextNode(e));
            k.textContent = "", m = 0;
            while (e = l[m++]) if ((!d || -1 === n.inArray(e, d)) && (i = n.contains(e.ownerDocument, e), f = ob(k.appendChild(e), "script"), i && mb(f), c)) {
                j = 0;
                while (e = f[j++]) fb.test(e.type || "") && c.push(e)
            }
            return k
        }, cleanData: function (a) {
            for (var b, c, d, e, f = n.event.special, g = 0; void 0 !== (c = a[g]); g++) {
                if (n.acceptData(c) && (e = c[L.expando], e && (b = L.cache[e]))) {
                    if (b.events) for (d in b.events) f[d] ? n.event.remove(c, d) : n.removeEvent(c, d, b.handle);
                    L.cache[e] && delete L.cache[e]
                }
                delete M.cache[c[M.expando]]
            }
        }
    }), n.fn.extend({
        text: function (a) {
            return J(this, function (a) {
                return void 0 === a ? n.text(this) : this.empty().each(function () {
                    (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) && (this.textContent = a)
                })
            }, null, a, arguments.length)
        }, append: function () {
            return this.domManip(arguments, function (a) {
                if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                    var b = jb(this, a);
                    b.appendChild(a)
                }
            })
        }, prepend: function () {
            return this.domManip(arguments, function (a) {
                if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                    var b = jb(this, a);
                    b.insertBefore(a, b.firstChild)
                }
            })
        }, before: function () {
            return this.domManip(arguments, function (a) {
                this.parentNode && this.parentNode.insertBefore(a, this)
            })
        }, after: function () {
            return this.domManip(arguments, function (a) {
                this.parentNode && this.parentNode.insertBefore(a, this.nextSibling)
            })
        }, remove: function (a, b) {
            for (var c, d = a ? n.filter(a, this) : this, e = 0; null != (c = d[e]); e++) b || 1 !== c.nodeType || n.cleanData(ob(c)), c.parentNode && (b && n.contains(c.ownerDocument, c) && mb(ob(c, "script")), c.parentNode.removeChild(c));
            return this
        }, empty: function () {
            for (var a, b = 0; null != (a = this[b]); b++) 1 === a.nodeType && (n.cleanData(ob(a, !1)), a.textContent = "");
            return this
        }, clone: function (a, b) {
            return a = null == a ? !1 : a, b = null == b ? a : b, this.map(function () {
                return n.clone(this, a, b)
            })
        }, html: function (a) {
            return J(this, function (a) {
                var b = this[0] || {}, c = 0, d = this.length;
                if (void 0 === a && 1 === b.nodeType) return b.innerHTML;
                if ("string" == typeof a && !db.test(a) && !ib[(bb.exec(a) || ["", ""])[1].toLowerCase()]) {
                    a = a.replace(ab, "<$1></$2>");
                    try {
                        for (; d > c; c++) b = this[c] || {}, 1 === b.nodeType && (n.cleanData(ob(b, !1)), b.innerHTML = a);
                        b = 0
                    } catch (e) {
                    }
                }
                b && this.empty().append(a)
            }, null, a, arguments.length)
        }, replaceWith: function () {
            var a = arguments[0];
            return this.domManip(arguments, function (b) {
                a = this.parentNode, n.cleanData(ob(this)), a && a.replaceChild(b, this)
            }), a && (a.length || a.nodeType) ? this : this.remove()
        }, detach: function (a) {
            return this.remove(a, !0)
        }, domManip: function (a, b) {
            a = e.apply([], a);
            var c, d, f, g, h, i, j = 0, l = this.length, m = this, o = l - 1, p = a[0], q = n.isFunction(p);
            if (q || l > 1 && "string" == typeof p && !k.checkClone && eb.test(p)) return this.each(function (c) {
                var d = m.eq(c);
                q && (a[0] = p.call(this, c, d.html())), d.domManip(a, b)
            });
            if (l && (c = n.buildFragment(a, this[0].ownerDocument, !1, this), d = c.firstChild, 1 === c.childNodes.length && (c = d), d)) {
                for (f = n.map(ob(c, "script"), kb), g = f.length; l > j; j++) h = c, j !== o && (h = n.clone(h, !0, !0), g && n.merge(f, ob(h, "script"))), b.call(this[j], h, j);
                if (g) for (i = f[f.length - 1].ownerDocument, n.map(f, lb), j = 0; g > j; j++) h = f[j], fb.test(h.type || "") && !L.access(h, "globalEval") && n.contains(i, h) && (h.src ? n._evalUrl && n._evalUrl(h.src) : n.globalEval(h.textContent.replace(hb, "")))
            }
            return this
        }
    }), n.each({
        appendTo: "append",
        prependTo: "prepend",
        insertBefore: "before",
        insertAfter: "after",
        replaceAll: "replaceWith"
    }, function (a, b) {
        n.fn[a] = function (a) {
            for (var c, d = [], e = n(a), g = e.length - 1, h = 0; g >= h; h++) c = h === g ? this : this.clone(!0), n(e[h])[b](c), f.apply(d, c.get());
            return this.pushStack(d)
        }
    });
    var qb, rb = {};

    function sb(b, c) {
        var d, e = n(c.createElement(b)).appendTo(c.body),
            f = a.getDefaultComputedStyle && (d = a.getDefaultComputedStyle(e[0])) ? d.display : n.css(e[0], "display");
        return e.detach(), f
    }

    function tb(a) {
        var b = l, c = rb[a];
        return c || (c = sb(a, b), "none" !== c && c || (qb = (qb || n("<iframe frameborder='0' width='0' height='0'/>")).appendTo(b.documentElement), b = qb[0].contentDocument, b.write(), b.close(), c = sb(a, b), qb.detach()), rb[a] = c), c
    }

    var ub = /^margin/, vb = new RegExp("^(" + Q + ")(?!px)[a-z%]+$", "i"), wb = function (a) {
        return a.ownerDocument.defaultView.getComputedStyle(a, null)
    };

    function xb(a, b, c) {
        var d, e, f, g, h = a.style;
        return c = c || wb(a), c && (g = c.getPropertyValue(b) || c[b]), c && ("" !== g || n.contains(a.ownerDocument, a) || (g = n.style(a, b)), vb.test(g) && ub.test(b) && (d = h.width, e = h.minWidth, f = h.maxWidth, h.minWidth = h.maxWidth = h.width = g, g = c.width, h.width = d, h.minWidth = e, h.maxWidth = f)), void 0 !== g ? g + "" : g
    }

    function yb(a, b) {
        return {
            get: function () {
                return a() ? void delete this.get : (this.get = b).apply(this, arguments)
            }
        }
    }

    !function () {
        var b, c, d = l.documentElement, e = l.createElement("div"), f = l.createElement("div");
        if (f.style) {
            f.style.backgroundClip = "content-box", f.cloneNode(!0).style.backgroundClip = "", k.clearCloneStyle = "content-box" === f.style.backgroundClip, e.style.cssText = "border:0;width:0;height:0;top:0;left:-9999px;margin-top:1px;position:absolute", e.appendChild(f);

            function g() {
                f.style.cssText = "-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;display:block;margin-top:1%;top:1%;border:1px;padding:1px;width:4px;position:absolute", f.innerHTML = "", d.appendChild(e);
                var g = a.getComputedStyle(f, null);
                b = "1%" !== g.top, c = "4px" === g.width, d.removeChild(e)
            }

            a.getComputedStyle && n.extend(k, {
                pixelPosition: function () {
                    return g(), b
                }, boxSizingReliable: function () {
                    return null == c && g(), c
                }, reliableMarginRight: function () {
                    var b, c = f.appendChild(l.createElement("div"));
                    return c.style.cssText = f.style.cssText = "-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;display:block;margin:0;border:0;padding:0", c.style.marginRight = c.style.width = "0", f.style.width = "1px", d.appendChild(e), b = !parseFloat(a.getComputedStyle(c, null).marginRight), d.removeChild(e), b
                }
            })
        }
    }(), n.swap = function (a, b, c, d) {
        var e, f, g = {};
        for (f in b) g[f] = a.style[f], a.style[f] = b[f];
        e = c.apply(a, d || []);
        for (f in b) a.style[f] = g[f];
        return e
    };
    var zb = /^(none|table(?!-c[ea]).+)/, Ab = new RegExp("^(" + Q + ")(.*)$", "i"),
        Bb = new RegExp("^([+-])=(" + Q + ")", "i"),
        Cb = {position: "absolute", visibility: "hidden", display: "block"},
        Db = {letterSpacing: "0", fontWeight: "400"}, Eb = ["Webkit", "O", "Moz", "ms"];

    function Fb(a, b) {
        if (b in a) return b;
        var c = b[0].toUpperCase() + b.slice(1), d = b, e = Eb.length;
        while (e--) if (b = Eb[e] + c, b in a) return b;
        return d
    }

    function Gb(a, b, c) {
        var d = Ab.exec(b);
        return d ? Math.max(0, d[1] - (c || 0)) + (d[2] || "px") : b
    }

    function Hb(a, b, c, d, e) {
        for (var f = c === (d ? "border" : "content") ? 4 : "width" === b ? 1 : 0, g = 0; 4 > f; f += 2) "margin" === c && (g += n.css(a, c + R[f], !0, e)), d ? ("content" === c && (g -= n.css(a, "padding" + R[f], !0, e)), "margin" !== c && (g -= n.css(a, "border" + R[f] + "Width", !0, e))) : (g += n.css(a, "padding" + R[f], !0, e), "padding" !== c && (g += n.css(a, "border" + R[f] + "Width", !0, e)));
        return g
    }

    function Ib(a, b, c) {
        var d = !0, e = "width" === b ? a.offsetWidth : a.offsetHeight, f = wb(a),
            g = "border-box" === n.css(a, "boxSizing", !1, f);
        if (0 >= e || null == e) {
            if (e = xb(a, b, f), (0 > e || null == e) && (e = a.style[b]), vb.test(e)) return e;
            d = g && (k.boxSizingReliable() || e === a.style[b]), e = parseFloat(e) || 0
        }
        return e + Hb(a, b, c || (g ? "border" : "content"), d, f) + "px"
    }

    function Jb(a, b) {
        for (var c, d, e, f = [], g = 0, h = a.length; h > g; g++) d = a[g], d.style && (f[g] = L.get(d, "olddisplay"), c = d.style.display, b ? (f[g] || "none" !== c || (d.style.display = ""), "" === d.style.display && S(d) && (f[g] = L.access(d, "olddisplay", tb(d.nodeName)))) : (e = S(d), "none" === c && e || L.set(d, "olddisplay", e ? c : n.css(d, "display"))));
        for (g = 0; h > g; g++) d = a[g], d.style && (b && "none" !== d.style.display && "" !== d.style.display || (d.style.display = b ? f[g] || "" : "none"));
        return a
    }

    n.extend({
        cssHooks: {
            opacity: {
                get: function (a, b) {
                    if (b) {
                        var c = xb(a, "opacity");
                        return "" === c ? "1" : c
                    }
                }
            }
        },
        cssNumber: {
            columnCount: !0,
            fillOpacity: !0,
            flexGrow: !0,
            flexShrink: !0,
            fontWeight: !0,
            lineHeight: !0,
            opacity: !0,
            order: !0,
            orphans: !0,
            widows: !0,
            zIndex: !0,
            zoom: !0
        },
        cssProps: {"float": "cssFloat"},
        style: function (a, b, c, d) {
            if (a && 3 !== a.nodeType && 8 !== a.nodeType && a.style) {
                var e, f, g, h = n.camelCase(b), i = a.style;
                return b = n.cssProps[h] || (n.cssProps[h] = Fb(i, h)), g = n.cssHooks[b] || n.cssHooks[h], void 0 === c ? g && "get" in g && void 0 !== (e = g.get(a, !1, d)) ? e : i[b] : (f = typeof c, "string" === f && (e = Bb.exec(c)) && (c = (e[1] + 1) * e[2] + parseFloat(n.css(a, b)), f = "number"), null != c && c === c && ("number" !== f || n.cssNumber[h] || (c += "px"), k.clearCloneStyle || "" !== c || 0 !== b.indexOf("background") || (i[b] = "inherit"), g && "set" in g && void 0 === (c = g.set(a, c, d)) || (i[b] = c)), void 0)
            }
        },
        css: function (a, b, c, d) {
            var e, f, g, h = n.camelCase(b);
            return b = n.cssProps[h] || (n.cssProps[h] = Fb(a.style, h)), g = n.cssHooks[b] || n.cssHooks[h], g && "get" in g && (e = g.get(a, !0, c)), void 0 === e && (e = xb(a, b, d)), "normal" === e && b in Db && (e = Db[b]), "" === c || c ? (f = parseFloat(e), c === !0 || n.isNumeric(f) ? f || 0 : e) : e
        }
    }), n.each(["height", "width"], function (a, b) {
        n.cssHooks[b] = {
            get: function (a, c, d) {
                return c ? zb.test(n.css(a, "display")) && 0 === a.offsetWidth ? n.swap(a, Cb, function () {
                    return Ib(a, b, d)
                }) : Ib(a, b, d) : void 0
            }, set: function (a, c, d) {
                var e = d && wb(a);
                return Gb(a, c, d ? Hb(a, b, d, "border-box" === n.css(a, "boxSizing", !1, e), e) : 0)
            }
        }
    }), n.cssHooks.marginRight = yb(k.reliableMarginRight, function (a, b) {
        return b ? n.swap(a, {display: "inline-block"}, xb, [a, "marginRight"]) : void 0
    }), n.each({margin: "", padding: "", border: "Width"}, function (a, b) {
        n.cssHooks[a + b] = {
            expand: function (c) {
                for (var d = 0, e = {}, f = "string" == typeof c ? c.split(" ") : [c]; 4 > d; d++) e[a + R[d] + b] = f[d] || f[d - 2] || f[0];
                return e
            }
        }, ub.test(a) || (n.cssHooks[a + b].set = Gb)
    }), n.fn.extend({
        css: function (a, b) {
            return J(this, function (a, b, c) {
                var d, e, f = {}, g = 0;
                if (n.isArray(b)) {
                    for (d = wb(a), e = b.length; e > g; g++) f[b[g]] = n.css(a, b[g], !1, d);
                    return f
                }
                return void 0 !== c ? n.style(a, b, c) : n.css(a, b)
            }, a, b, arguments.length > 1)
        }, show: function () {
            return Jb(this, !0)
        }, hide: function () {
            return Jb(this)
        }, toggle: function (a) {
            return "boolean" == typeof a ? a ? this.show() : this.hide() : this.each(function () {
                S(this) ? n(this).show() : n(this).hide()
            })
        }
    });

    function Kb(a, b, c, d, e) {
        return new Kb.prototype.init(a, b, c, d, e)
    }

    n.Tween = Kb, Kb.prototype = {
        constructor: Kb, init: function (a, b, c, d, e, f) {
            this.elem = a, this.prop = c, this.easing = e || "swing", this.options = b, this.start = this.now = this.cur(), this.end = d, this.unit = f || (n.cssNumber[c] ? "" : "px")
        }, cur: function () {
            var a = Kb.propHooks[this.prop];
            return a && a.get ? a.get(this) : Kb.propHooks._default.get(this)
        }, run: function (a) {
            var b, c = Kb.propHooks[this.prop];
            return this.pos = b = this.options.duration ? n.easing[this.easing](a, this.options.duration * a, 0, 1, this.options.duration) : a, this.now = (this.end - this.start) * b + this.start, this.options.step && this.options.step.call(this.elem, this.now, this), c && c.set ? c.set(this) : Kb.propHooks._default.set(this), this
        }
    }, Kb.prototype.init.prototype = Kb.prototype, Kb.propHooks = {
        _default: {
            get: function (a) {
                var b;
                return null == a.elem[a.prop] || a.elem.style && null != a.elem.style[a.prop] ? (b = n.css(a.elem, a.prop, ""), b && "auto" !== b ? b : 0) : a.elem[a.prop]
            }, set: function (a) {
                n.fx.step[a.prop] ? n.fx.step[a.prop](a) : a.elem.style && (null != a.elem.style[n.cssProps[a.prop]] || n.cssHooks[a.prop]) ? n.style(a.elem, a.prop, a.now + a.unit) : a.elem[a.prop] = a.now
            }
        }
    }, Kb.propHooks.scrollTop = Kb.propHooks.scrollLeft = {
        set: function (a) {
            a.elem.nodeType && a.elem.parentNode && (a.elem[a.prop] = a.now)
        }
    }, n.easing = {
        linear: function (a) {
            return a
        }, swing: function (a) {
            return .5 - Math.cos(a * Math.PI) / 2
        }
    }, n.fx = Kb.prototype.init, n.fx.step = {};
    var Lb, Mb, Nb = /^(?:toggle|show|hide)$/, Ob = new RegExp("^(?:([+-])=|)(" + Q + ")([a-z%]*)$", "i"),
        Pb = /queueHooks$/, Qb = [Vb], Rb = {
            "*": [function (a, b) {
                var c = this.createTween(a, b), d = c.cur(), e = Ob.exec(b), f = e && e[3] || (n.cssNumber[a] ? "" : "px"),
                    g = (n.cssNumber[a] || "px" !== f && +d) && Ob.exec(n.css(c.elem, a)), h = 1, i = 20;
                if (g && g[3] !== f) {
                    f = f || g[3], e = e || [], g = +d || 1;
                    do h = h || ".5", g /= h, n.style(c.elem, a, g + f); while (h !== (h = c.cur() / d) && 1 !== h && --i)
                }
                return e && (g = c.start = +g || +d || 0, c.unit = f, c.end = e[1] ? g + (e[1] + 1) * e[2] : +e[2]), c
            }]
        };

    function Sb() {
        return setTimeout(function () {
            Lb = void 0
        }), Lb = n.now()
    }

    function Tb(a, b) {
        var c, d = 0, e = {height: a};
        for (b = b ? 1 : 0; 4 > d; d += 2 - b) c = R[d], e["margin" + c] = e["padding" + c] = a;
        return b && (e.opacity = e.width = a), e
    }

    function Ub(a, b, c) {
        for (var d, e = (Rb[b] || []).concat(Rb["*"]), f = 0, g = e.length; g > f; f++) if (d = e[f].call(c, b, a)) return d
    }

    function Vb(a, b, c) {
        var d, e, f, g, h, i, j, k, l = this, m = {}, o = a.style, p = a.nodeType && S(a), q = L.get(a, "fxshow");
        c.queue || (h = n._queueHooks(a, "fx"), null == h.unqueued && (h.unqueued = 0, i = h.empty.fire, h.empty.fire = function () {
            h.unqueued || i()
        }), h.unqueued++, l.always(function () {
            l.always(function () {
                h.unqueued--, n.queue(a, "fx").length || h.empty.fire()
            })
        })), 1 === a.nodeType && ("height" in b || "width" in b) && (c.overflow = [o.overflow, o.overflowX, o.overflowY], j = n.css(a, "display"), k = "none" === j ? L.get(a, "olddisplay") || tb(a.nodeName) : j, "inline" === k && "none" === n.css(a, "float") && (o.display = "inline-block")), c.overflow && (o.overflow = "hidden", l.always(function () {
            o.overflow = c.overflow[0], o.overflowX = c.overflow[1], o.overflowY = c.overflow[2]
        }));
        for (d in b) if (e = b[d], Nb.exec(e)) {
            if (delete b[d], f = f || "toggle" === e, e === (p ? "hide" : "show")) {
                if ("show" !== e || !q || void 0 === q[d]) continue;
                p = !0
            }
            m[d] = q && q[d] || n.style(a, d)
        } else j = void 0;
        if (n.isEmptyObject(m)) "inline" === ("none" === j ? tb(a.nodeName) : j) && (o.display = j); else {
            q ? "hidden" in q && (p = q.hidden) : q = L.access(a, "fxshow", {}), f && (q.hidden = !p), p ? n(a).show() : l.done(function () {
                n(a).hide()
            }), l.done(function () {
                var b;
                L.remove(a, "fxshow");
                for (b in m) n.style(a, b, m[b])
            });
            for (d in m) g = Ub(p ? q[d] : 0, d, l), d in q || (q[d] = g.start, p && (g.end = g.start, g.start = "width" === d || "height" === d ? 1 : 0))
        }
    }

    function Wb(a, b) {
        var c, d, e, f, g;
        for (c in a) if (d = n.camelCase(c), e = b[d], f = a[c], n.isArray(f) && (e = f[1], f = a[c] = f[0]), c !== d && (a[d] = f, delete a[c]), g = n.cssHooks[d], g && "expand" in g) {
            f = g.expand(f), delete a[d];
            for (c in f) c in a || (a[c] = f[c], b[c] = e)
        } else b[d] = e
    }

    function Xb(a, b, c) {
        var d, e, f = 0, g = Qb.length, h = n.Deferred().always(function () {
            delete i.elem
        }), i = function () {
            if (e) return !1;
            for (var b = Lb || Sb(), c = Math.max(0, j.startTime + j.duration - b), d = c / j.duration || 0, f = 1 - d, g = 0, i = j.tweens.length; i > g; g++) j.tweens[g].run(f);
            return h.notifyWith(a, [j, f, c]), 1 > f && i ? c : (h.resolveWith(a, [j]), !1)
        }, j = h.promise({
            elem: a,
            props: n.extend({}, b),
            opts: n.extend(!0, {specialEasing: {}}, c),
            originalProperties: b,
            originalOptions: c,
            startTime: Lb || Sb(),
            duration: c.duration,
            tweens: [],
            createTween: function (b, c) {
                var d = n.Tween(a, j.opts, b, c, j.opts.specialEasing[b] || j.opts.easing);
                return j.tweens.push(d), d
            },
            stop: function (b) {
                var c = 0, d = b ? j.tweens.length : 0;
                if (e) return this;
                for (e = !0; d > c; c++) j.tweens[c].run(1);
                return b ? h.resolveWith(a, [j, b]) : h.rejectWith(a, [j, b]), this
            }
        }), k = j.props;
        for (Wb(k, j.opts.specialEasing); g > f; f++) if (d = Qb[f].call(j, a, k, j.opts)) return d;
        return n.map(k, Ub, j), n.isFunction(j.opts.start) && j.opts.start.call(a, j), n.fx.timer(n.extend(i, {
            elem: a,
            anim: j,
            queue: j.opts.queue
        })), j.progress(j.opts.progress).done(j.opts.done, j.opts.complete).fail(j.opts.fail).always(j.opts.always)
    }

    n.Animation = n.extend(Xb, {
        tweener: function (a, b) {
            n.isFunction(a) ? (b = a, a = ["*"]) : a = a.split(" ");
            for (var c, d = 0, e = a.length; e > d; d++) c = a[d], Rb[c] = Rb[c] || [], Rb[c].unshift(b)
        }, prefilter: function (a, b) {
            b ? Qb.unshift(a) : Qb.push(a)
        }
    }), n.speed = function (a, b, c) {
        var d = a && "object" == typeof a ? n.extend({}, a) : {
            complete: c || !c && b || n.isFunction(a) && a,
            duration: a,
            easing: c && b || b && !n.isFunction(b) && b
        };
        return d.duration = n.fx.off ? 0 : "number" == typeof d.duration ? d.duration : d.duration in n.fx.speeds ? n.fx.speeds[d.duration] : n.fx.speeds._default, (null == d.queue || d.queue === !0) && (d.queue = "fx"), d.old = d.complete, d.complete = function () {
            n.isFunction(d.old) && d.old.call(this), d.queue && n.dequeue(this, d.queue)
        }, d
    }, n.fn.extend({
        fadeTo: function (a, b, c, d) {
            return this.filter(S).css("opacity", 0).show().end().animate({opacity: b}, a, c, d)
        }, animate: function (a, b, c, d) {
            var e = n.isEmptyObject(a), f = n.speed(b, c, d), g = function () {
                var b = Xb(this, n.extend({}, a), f);
                (e || L.get(this, "finish")) && b.stop(!0)
            };
            return g.finish = g, e || f.queue === !1 ? this.each(g) : this.queue(f.queue, g)
        }, stop: function (a, b, c) {
            var d = function (a) {
                var b = a.stop;
                delete a.stop, b(c)
            };
            return "string" != typeof a && (c = b, b = a, a = void 0), b && a !== !1 && this.queue(a || "fx", []), this.each(function () {
                var b = !0, e = null != a && a + "queueHooks", f = n.timers, g = L.get(this);
                if (e) g[e] && g[e].stop && d(g[e]); else for (e in g) g[e] && g[e].stop && Pb.test(e) && d(g[e]);
                for (e = f.length; e--;) f[e].elem !== this || null != a && f[e].queue !== a || (f[e].anim.stop(c), b = !1, f.splice(e, 1));
                (b || !c) && n.dequeue(this, a)
            })
        }, finish: function (a) {
            return a !== !1 && (a = a || "fx"), this.each(function () {
                var b, c = L.get(this), d = c[a + "queue"], e = c[a + "queueHooks"], f = n.timers, g = d ? d.length : 0;
                for (c.finish = !0, n.queue(this, a, []), e && e.stop && e.stop.call(this, !0), b = f.length; b--;) f[b].elem === this && f[b].queue === a && (f[b].anim.stop(!0), f.splice(b, 1));
                for (b = 0; g > b; b++) d[b] && d[b].finish && d[b].finish.call(this);
                delete c.finish
            })
        }
    }), n.each(["toggle", "show", "hide"], function (a, b) {
        var c = n.fn[b];
        n.fn[b] = function (a, d, e) {
            return null == a || "boolean" == typeof a ? c.apply(this, arguments) : this.animate(Tb(b, !0), a, d, e)
        }
    }), n.each({
        slideDown: Tb("show"),
        slideUp: Tb("hide"),
        slideToggle: Tb("toggle"),
        fadeIn: {opacity: "show"},
        fadeOut: {opacity: "hide"},
        fadeToggle: {opacity: "toggle"}
    }, function (a, b) {
        n.fn[a] = function (a, c, d) {
            return this.animate(b, a, c, d)
        }
    }), n.timers = [], n.fx.tick = function () {
        var a, b = 0, c = n.timers;
        for (Lb = n.now(); b < c.length; b++) a = c[b], a() || c[b] !== a || c.splice(b--, 1);
        c.length || n.fx.stop(), Lb = void 0
    }, n.fx.timer = function (a) {
        n.timers.push(a), a() ? n.fx.start() : n.timers.pop()
    }, n.fx.interval = 13, n.fx.start = function () {
        Mb || (Mb = setInterval(n.fx.tick, n.fx.interval))
    }, n.fx.stop = function () {
        clearInterval(Mb), Mb = null
    }, n.fx.speeds = {slow: 600, fast: 200, _default: 400}, n.fn.delay = function (a, b) {
        return a = n.fx ? n.fx.speeds[a] || a : a, b = b || "fx", this.queue(b, function (b, c) {
            var d = setTimeout(b, a);
            c.stop = function () {
                clearTimeout(d)
            }
        })
    }, function () {
        var a = l.createElement("input"), b = l.createElement("select"), c = b.appendChild(l.createElement("option"));
        a.type = "checkbox", k.checkOn = "" !== a.value, k.optSelected = c.selected, b.disabled = !0, k.optDisabled = !c.disabled, a = l.createElement("input"), a.value = "t", a.type = "radio", k.radioValue = "t" === a.value
    }();
    var Yb, Zb, $b = n.expr.attrHandle;
    n.fn.extend({
        attr: function (a, b) {
            return J(this, n.attr, a, b, arguments.length > 1)
        }, removeAttr: function (a) {
            return this.each(function () {
                n.removeAttr(this, a)
            })
        }
    }), n.extend({
        attr: function (a, b, c) {
            var d, e, f = a.nodeType;
            if (a && 3 !== f && 8 !== f && 2 !== f) return typeof a.getAttribute === U ? n.prop(a, b, c) : (1 === f && n.isXMLDoc(a) || (b = b.toLowerCase(), d = n.attrHooks[b] || (n.expr.match.bool.test(b) ? Zb : Yb)), void 0 === c ? d && "get" in d && null !== (e = d.get(a, b)) ? e : (e = n.find.attr(a, b), null == e ? void 0 : e) : null !== c ? d && "set" in d && void 0 !== (e = d.set(a, c, b)) ? e : (a.setAttribute(b, c + ""), c) : void n.removeAttr(a, b))
        }, removeAttr: function (a, b) {
            var c, d, e = 0, f = b && b.match(E);
            if (f && 1 === a.nodeType) while (c = f[e++]) d = n.propFix[c] || c, n.expr.match.bool.test(c) && (a[d] = !1), a.removeAttribute(c)
        }, attrHooks: {
            type: {
                set: function (a, b) {
                    if (!k.radioValue && "radio" === b && n.nodeName(a, "input")) {
                        var c = a.value;
                        return a.setAttribute("type", b), c && (a.value = c), b
                    }
                }
            }
        }
    }), Zb = {
        set: function (a, b, c) {
            return b === !1 ? n.removeAttr(a, c) : a.setAttribute(c, c), c
        }
    }, n.each(n.expr.match.bool.source.match(/\w+/g), function (a, b) {
        var c = $b[b] || n.find.attr;
        $b[b] = function (a, b, d) {
            var e, f;
            return d || (f = $b[b], $b[b] = e, e = null != c(a, b, d) ? b.toLowerCase() : null, $b[b] = f), e
        }
    });
    var _b = /^(?:input|select|textarea|button)$/i;
    n.fn.extend({
        prop: function (a, b) {
            return J(this, n.prop, a, b, arguments.length > 1)
        }, removeProp: function (a) {
            return this.each(function () {
                delete this[n.propFix[a] || a]
            })
        }
    }), n.extend({
        propFix: {"for": "htmlFor", "class": "className"}, prop: function (a, b, c) {
            var d, e, f, g = a.nodeType;
            if (a && 3 !== g && 8 !== g && 2 !== g) return f = 1 !== g || !n.isXMLDoc(a), f && (b = n.propFix[b] || b, e = n.propHooks[b]), void 0 !== c ? e && "set" in e && void 0 !== (d = e.set(a, c, b)) ? d : a[b] = c : e && "get" in e && null !== (d = e.get(a, b)) ? d : a[b]
        }, propHooks: {
            tabIndex: {
                get: function (a) {
                    return a.hasAttribute("tabindex") || _b.test(a.nodeName) || a.href ? a.tabIndex : -1
                }
            }
        }
    }), k.optSelected || (n.propHooks.selected = {
        get: function (a) {
            var b = a.parentNode;
            return b && b.parentNode && b.parentNode.selectedIndex, null
        }
    }), n.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap", "frameBorder", "contentEditable"], function () {
        n.propFix[this.toLowerCase()] = this
    });
    var ac = /[\t\r\n\f]/g;
    n.fn.extend({
        addClass: function (a) {
            var b, c, d, e, f, g, h = "string" == typeof a && a, i = 0, j = this.length;
            if (n.isFunction(a)) return this.each(function (b) {
                n(this).addClass(a.call(this, b, this.className))
            });
            if (h) for (b = (a || "").match(E) || []; j > i; i++) if (c = this[i], d = 1 === c.nodeType && (c.className ? (" " + c.className + " ").replace(ac, " ") : " ")) {
                f = 0;
                while (e = b[f++]) d.indexOf(" " + e + " ") < 0 && (d += e + " ");
                g = n.trim(d), c.className !== g && (c.className = g)
            }
            return this
        }, removeClass: function (a) {
            var b, c, d, e, f, g, h = 0 === arguments.length || "string" == typeof a && a, i = 0, j = this.length;
            if (n.isFunction(a)) return this.each(function (b) {
                n(this).removeClass(a.call(this, b, this.className))
            });
            if (h) for (b = (a || "").match(E) || []; j > i; i++) if (c = this[i], d = 1 === c.nodeType && (c.className ? (" " + c.className + " ").replace(ac, " ") : "")) {
                f = 0;
                while (e = b[f++]) while (d.indexOf(" " + e + " ") >= 0) d = d.replace(" " + e + " ", " ");
                g = a ? n.trim(d) : "", c.className !== g && (c.className = g)
            }
            return this
        }, toggleClass: function (a, b) {
            var c = typeof a;
            return "boolean" == typeof b && "string" === c ? b ? this.addClass(a) : this.removeClass(a) : this.each(n.isFunction(a) ? function (c) {
                n(this).toggleClass(a.call(this, c, this.className, b), b)
            } : function () {
                if ("string" === c) {
                    var b, d = 0, e = n(this), f = a.match(E) || [];
                    while (b = f[d++]) e.hasClass(b) ? e.removeClass(b) : e.addClass(b)
                } else (c === U || "boolean" === c) && (this.className && L.set(this, "__className__", this.className), this.className = this.className || a === !1 ? "" : L.get(this, "__className__") || "")
            })
        }, hasClass: function (a) {
            for (var b = " " + a + " ", c = 0, d = this.length; d > c; c++) if (1 === this[c].nodeType && (" " + this[c].className + " ").replace(ac, " ").indexOf(b) >= 0) return !0;
            return !1
        }
    });
    var bc = /\r/g;
    n.fn.extend({
        val: function (a) {
            var b, c, d, e = this[0];
            {
                if (arguments.length) return d = n.isFunction(a), this.each(function (c) {
                    var e;
                    1 === this.nodeType && (e = d ? a.call(this, c, n(this).val()) : a, null == e ? e = "" : "number" == typeof e ? e += "" : n.isArray(e) && (e = n.map(e, function (a) {
                        return null == a ? "" : a + ""
                    })), b = n.valHooks[this.type] || n.valHooks[this.nodeName.toLowerCase()], b && "set" in b && void 0 !== b.set(this, e, "value") || (this.value = e))
                });
                if (e) return b = n.valHooks[e.type] || n.valHooks[e.nodeName.toLowerCase()], b && "get" in b && void 0 !== (c = b.get(e, "value")) ? c : (c = e.value, "string" == typeof c ? c.replace(bc, "") : null == c ? "" : c)
            }
        }
    }), n.extend({
        valHooks: {
            option: {
                get: function (a) {
                    var b = n.find.attr(a, "value");
                    return null != b ? b : n.trim(n.text(a))
                }
            }, select: {
                get: function (a) {
                    for (var b, c, d = a.options, e = a.selectedIndex, f = "select-one" === a.type || 0 > e, g = f ? null : [], h = f ? e + 1 : d.length, i = 0 > e ? h : f ? e : 0; h > i; i++) if (c = d[i], !(!c.selected && i !== e || (k.optDisabled ? c.disabled : null !== c.getAttribute("disabled")) || c.parentNode.disabled && n.nodeName(c.parentNode, "optgroup"))) {
                        if (b = n(c).val(), f) return b;
                        g.push(b)
                    }
                    return g
                }, set: function (a, b) {
                    var c, d, e = a.options, f = n.makeArray(b), g = e.length;
                    while (g--) d = e[g], (d.selected = n.inArray(d.value, f) >= 0) && (c = !0);
                    return c || (a.selectedIndex = -1), f
                }
            }
        }
    }), n.each(["radio", "checkbox"], function () {
        n.valHooks[this] = {
            set: function (a, b) {
                return n.isArray(b) ? a.checked = n.inArray(n(a).val(), b) >= 0 : void 0
            }
        }, k.checkOn || (n.valHooks[this].get = function (a) {
            return null === a.getAttribute("value") ? "on" : a.value
        })
    }), n.each("blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error contextmenu".split(" "), function (a, b) {
        n.fn[b] = function (a, c) {
            return arguments.length > 0 ? this.on(b, null, a, c) : this.trigger(b)
        }
    }), n.fn.extend({
        hover: function (a, b) {
            return this.mouseenter(a).mouseleave(b || a)
        }, bind: function (a, b, c) {
            return this.on(a, null, b, c)
        }, unbind: function (a, b) {
            return this.off(a, null, b)
        }, delegate: function (a, b, c, d) {
            return this.on(b, a, c, d)
        }, undelegate: function (a, b, c) {
            return 1 === arguments.length ? this.off(a, "**") : this.off(b, a || "**", c)
        }
    });
    var cc = n.now(), dc = /\?/;
    n.parseJSON = function (a) {
        return JSON.parse(a + "")
    }, n.parseXML = function (a) {
        var b, c;
        if (!a || "string" != typeof a) return null;
        try {
            c = new DOMParser, b = c.parseFromString(a, "text/xml")
        } catch (d) {
            b = void 0
        }
        return (!b || b.getElementsByTagName("parsererror").length) && n.error("Invalid XML: " + a), b
    };
    var ec, fc, gc = /#.*$/, hc = /([?&])_=[^&]*/, ic = /^(.*?):[ \t]*([^\r\n]*)$/gm,
        jc = /^(?:about|app|app-storage|.+-extension|file|res|widget):$/, kc = /^(?:GET|HEAD)$/, lc = /^\/\//,
        mc = /^([\w.+-]+:)(?:\/\/(?:[^\/?#]*@|)([^\/?#:]*)(?::(\d+)|)|)/, nc = {}, oc = {}, pc = "*/".concat("*");
    try {
        fc = location.href
    } catch (qc) {
        fc = l.createElement("a"), fc.href = "", fc = fc.href
    }
    ec = mc.exec(fc.toLowerCase()) || [];

    function rc(a) {
        return function (b, c) {
            "string" != typeof b && (c = b, b = "*");
            var d, e = 0, f = b.toLowerCase().match(E) || [];
            if (n.isFunction(c)) while (d = f[e++]) "+" === d[0] ? (d = d.slice(1) || "*", (a[d] = a[d] || []).unshift(c)) : (a[d] = a[d] || []).push(c)
        }
    }

    function sc(a, b, c, d) {
        var e = {}, f = a === oc;

        function g(h) {
            var i;
            return e[h] = !0, n.each(a[h] || [], function (a, h) {
                var j = h(b, c, d);
                return "string" != typeof j || f || e[j] ? f ? !(i = j) : void 0 : (b.dataTypes.unshift(j), g(j), !1)
            }), i
        }

        return g(b.dataTypes[0]) || !e["*"] && g("*")
    }

    function tc(a, b) {
        var c, d, e = n.ajaxSettings.flatOptions || {};
        for (c in b) void 0 !== b[c] && ((e[c] ? a : d || (d = {}))[c] = b[c]);
        return d && n.extend(!0, a, d), a
    }

    function uc(a, b, c) {
        var d, e, f, g, h = a.contents, i = a.dataTypes;
        while ("*" === i[0]) i.shift(), void 0 === d && (d = a.mimeType || b.getResponseHeader("Content-Type"));
        if (d) for (e in h) if (h[e] && h[e].test(d)) {
            i.unshift(e);
            break
        }
        if (i[0] in c) f = i[0]; else {
            for (e in c) {
                if (!i[0] || a.converters[e + " " + i[0]]) {
                    f = e;
                    break
                }
                g || (g = e)
            }
            f = f || g
        }
        return f ? (f !== i[0] && i.unshift(f), c[f]) : void 0
    }

    function vc(a, b, c, d) {
        var e, f, g, h, i, j = {}, k = a.dataTypes.slice();
        if (k[1]) for (g in a.converters) j[g.toLowerCase()] = a.converters[g];
        f = k.shift();
        while (f) if (a.responseFields[f] && (c[a.responseFields[f]] = b), !i && d && a.dataFilter && (b = a.dataFilter(b, a.dataType)), i = f, f = k.shift()) if ("*" === f) f = i; else if ("*" !== i && i !== f) {
            if (g = j[i + " " + f] || j["* " + f], !g) for (e in j) if (h = e.split(" "), h[1] === f && (g = j[i + " " + h[0]] || j["* " + h[0]])) {
                g === !0 ? g = j[e] : j[e] !== !0 && (f = h[0], k.unshift(h[1]));
                break
            }
            if (g !== !0) if (g && a["throws"]) b = g(b); else try {
                b = g(b)
            } catch (l) {
                return {state: "parsererror", error: g ? l : "No conversion from " + i + " to " + f}
            }
        }
        return {state: "success", data: b}
    }

    n.extend({
        active: 0,
        lastModified: {},
        etag: {},
        ajaxSettings: {
            url: fc,
            type: "GET",
            isLocal: jc.test(ec[1]),
            global: !0,
            processData: !0,
            async: !0,
            contentType: "application/x-www-form-urlencoded; charset=UTF-8",
            accepts: {
                "*": pc,
                text: "text/plain",
                html: "text/html",
                xml: "application/xml, text/xml",
                json: "application/json, text/javascript"
            },
            contents: {xml: /xml/, html: /html/, json: /json/},
            responseFields: {xml: "responseXML", text: "responseText", json: "responseJSON"},
            converters: {"* text": String, "text html": !0, "text json": n.parseJSON, "text xml": n.parseXML},
            flatOptions: {url: !0, context: !0}
        },
        ajaxSetup: function (a, b) {
            return b ? tc(tc(a, n.ajaxSettings), b) : tc(n.ajaxSettings, a)
        },
        ajaxPrefilter: rc(nc),
        ajaxTransport: rc(oc),
        ajax: function (a, b) {
            "object" == typeof a && (b = a, a = void 0), b = b || {};
            var c, d, e, f, g, h, i, j, k = n.ajaxSetup({}, b), l = k.context || k,
                m = k.context && (l.nodeType || l.jquery) ? n(l) : n.event, o = n.Deferred(),
                p = n.Callbacks("once memory"), q = k.statusCode || {}, r = {}, s = {}, t = 0, u = "canceled", v = {
                    readyState: 0, getResponseHeader: function (a) {
                        var b;
                        if (2 === t) {
                            if (!f) {
                                f = {};
                                while (b = ic.exec(e)) f[b[1].toLowerCase()] = b[2]
                            }
                            b = f[a.toLowerCase()]
                        }
                        return null == b ? null : b
                    }, getAllResponseHeaders: function () {
                        return 2 === t ? e : null
                    }, setRequestHeader: function (a, b) {
                        var c = a.toLowerCase();
                        return t || (a = s[c] = s[c] || a, r[a] = b), this
                    }, overrideMimeType: function (a) {
                        return t || (k.mimeType = a), this
                    }, statusCode: function (a) {
                        var b;
                        if (a) if (2 > t) for (b in a) q[b] = [q[b], a[b]]; else v.always(a[v.status]);
                        return this
                    }, abort: function (a) {
                        var b = a || u;
                        return c && c.abort(b), x(0, b), this
                    }
                };
            if (o.promise(v).complete = p.add, v.success = v.done, v.error = v.fail, k.url = ((a || k.url || fc) + "").replace(gc, "").replace(lc, ec[1] + "//"), k.type = b.method || b.type || k.method || k.type, k.dataTypes = n.trim(k.dataType || "*").toLowerCase().match(E) || [""], null == k.crossDomain && (h = mc.exec(k.url.toLowerCase()), k.crossDomain = !(!h || h[1] === ec[1] && h[2] === ec[2] && (h[3] || ("http:" === h[1] ? "80" : "443")) === (ec[3] || ("http:" === ec[1] ? "80" : "443")))), k.data && k.processData && "string" != typeof k.data && (k.data = n.param(k.data, k.traditional)), sc(nc, k, b, v), 2 === t) return v;
            i = k.global, i && 0 === n.active++ && n.event.trigger("ajaxStart"), k.type = k.type.toUpperCase(), k.hasContent = !kc.test(k.type), d = k.url, k.hasContent || (k.data && (d = k.url += (dc.test(d) ? "&" : "?") + k.data, delete k.data), k.cache === !1 && (k.url = hc.test(d) ? d.replace(hc, "$1_=" + cc++) : d + (dc.test(d) ? "&" : "?") + "_=" + cc++)), k.ifModified && (n.lastModified[d] && v.setRequestHeader("If-Modified-Since", n.lastModified[d]), n.etag[d] && v.setRequestHeader("If-None-Match", n.etag[d])), (k.data && k.hasContent && k.contentType !== !1 || b.contentType) && v.setRequestHeader("Content-Type", k.contentType), v.setRequestHeader("Accept", k.dataTypes[0] && k.accepts[k.dataTypes[0]] ? k.accepts[k.dataTypes[0]] + ("*" !== k.dataTypes[0] ? ", " + pc + "; q=0.01" : "") : k.accepts["*"]);
            for (j in k.headers) v.setRequestHeader(j, k.headers[j]);
            if (k.beforeSend && (k.beforeSend.call(l, v, k) === !1 || 2 === t)) return v.abort();
            u = "abort";
            for (j in {success: 1, error: 1, complete: 1}) v[j](k[j]);
            if (c = sc(oc, k, b, v)) {
                v.readyState = 1, i && m.trigger("ajaxSend", [v, k]), k.async && k.timeout > 0 && (g = setTimeout(function () {
                    v.abort("timeout")
                }, k.timeout));
                try {
                    t = 1, c.send(r, x)
                } catch (w) {
                    if (!(2 > t)) throw w;
                    x(-1, w)
                }
            } else x(-1, "No Transport");

            function x(a, b, f, h) {
                var j, r, s, u, w, x = b;
                2 !== t && (t = 2, g && clearTimeout(g), c = void 0, e = h || "", v.readyState = a > 0 ? 4 : 0, j = a >= 200 && 300 > a || 304 === a, f && (u = uc(k, v, f)), u = vc(k, u, v, j), j ? (k.ifModified && (w = v.getResponseHeader("Last-Modified"), w && (n.lastModified[d] = w), w = v.getResponseHeader("etag"), w && (n.etag[d] = w)), 204 === a || "HEAD" === k.type ? x = "nocontent" : 304 === a ? x = "notmodified" : (x = u.state, r = u.data, s = u.error, j = !s)) : (s = x, (a || !x) && (x = "error", 0 > a && (a = 0))), v.status = a, v.statusText = (b || x) + "", j ? o.resolveWith(l, [r, x, v]) : o.rejectWith(l, [v, x, s]), v.statusCode(q), q = void 0, i && m.trigger(j ? "ajaxSuccess" : "ajaxError", [v, k, j ? r : s]), p.fireWith(l, [v, x]), i && (m.trigger("ajaxComplete", [v, k]), --n.active || n.event.trigger("ajaxStop")))
            }

            return v
        },
        getJSON: function (a, b, c) {
            return n.get(a, b, c, "json")
        },
        getScript: function (a, b) {
            return n.get(a, void 0, b, "script")
        }
    }), n.each(["get", "post"], function (a, b) {
        n[b] = function (a, c, d, e) {
            return n.isFunction(c) && (e = e || d, d = c, c = void 0), n.ajax({
                url: a,
                type: b,
                dataType: e,
                data: c,
                success: d
            })
        }
    }), n.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], function (a, b) {
        n.fn[b] = function (a) {
            return this.on(b, a)
        }
    }), n._evalUrl = function (a) {
        return n.ajax({url: a, type: "GET", dataType: "script", async: !1, global: !1, "throws": !0})
    }, n.fn.extend({
        wrapAll: function (a) {
            var b;
            return n.isFunction(a) ? this.each(function (b) {
                n(this).wrapAll(a.call(this, b))
            }) : (this[0] && (b = n(a, this[0].ownerDocument).eq(0).clone(!0), this[0].parentNode && b.insertBefore(this[0]), b.map(function () {
                var a = this;
                while (a.firstElementChild) a = a.firstElementChild;
                return a
            }).append(this)), this)
        }, wrapInner: function (a) {
            return this.each(n.isFunction(a) ? function (b) {
                n(this).wrapInner(a.call(this, b))
            } : function () {
                var b = n(this), c = b.contents();
                c.length ? c.wrapAll(a) : b.append(a)
            })
        }, wrap: function (a) {
            var b = n.isFunction(a);
            return this.each(function (c) {
                n(this).wrapAll(b ? a.call(this, c) : a)
            })
        }, unwrap: function () {
            return this.parent().each(function () {
                n.nodeName(this, "body") || n(this).replaceWith(this.childNodes)
            }).end()
        }
    }), n.expr.filters.hidden = function (a) {
        return a.offsetWidth <= 0 && a.offsetHeight <= 0
    }, n.expr.filters.visible = function (a) {
        return !n.expr.filters.hidden(a)
    };
    var wc = /%20/g, xc = /\[\]$/, yc = /\r?\n/g, zc = /^(?:submit|button|image|reset|file)$/i,
        Ac = /^(?:input|select|textarea|keygen)/i;

    function Bc(a, b, c, d) {
        var e;
        if (n.isArray(b)) n.each(b, function (b, e) {
            c || xc.test(a) ? d(a, e) : Bc(a + "[" + ("object" == typeof e ? b : "") + "]", e, c, d)
        }); else if (c || "object" !== n.type(b)) d(a, b); else for (e in b) Bc(a + "[" + e + "]", b[e], c, d)
    }

    n.param = function (a, b) {
        var c, d = [], e = function (a, b) {
            b = n.isFunction(b) ? b() : null == b ? "" : b, d[d.length] = encodeURIComponent(a) + "=" + encodeURIComponent(b)
        };
        if (void 0 === b && (b = n.ajaxSettings && n.ajaxSettings.traditional), n.isArray(a) || a.jquery && !n.isPlainObject(a)) n.each(a, function () {
            e(this.name, this.value)
        }); else for (c in a) Bc(c, a[c], b, e);
        return d.join("&").replace(wc, "+")
    }, n.fn.extend({
        serialize: function () {
            return n.param(this.serializeArray())
        }, serializeArray: function () {
            return this.map(function () {
                var a = n.prop(this, "elements");
                return a ? n.makeArray(a) : this
            }).filter(function () {
                var a = this.type;
                return this.name && !n(this).is(":disabled") && Ac.test(this.nodeName) && !zc.test(a) && (this.checked || !T.test(a))
            }).map(function (a, b) {
                var c = n(this).val();
                return null == c ? null : n.isArray(c) ? n.map(c, function (a) {
                    return {name: b.name, value: a.replace(yc, "\r\n")}
                }) : {name: b.name, value: c.replace(yc, "\r\n")}
            }).get()
        }
    }), n.ajaxSettings.xhr = function () {
        try {
            return new XMLHttpRequest
        } catch (a) {
        }
    };
    var Cc = 0, Dc = {}, Ec = {0: 200, 1223: 204}, Fc = n.ajaxSettings.xhr();
    a.ActiveXObject && n(a).on("unload", function () {
        for (var a in Dc) Dc[a]()
    }), k.cors = !!Fc && "withCredentials" in Fc, k.ajax = Fc = !!Fc, n.ajaxTransport(function (a) {
        var b;
        return k.cors || Fc && !a.crossDomain ? {
            send: function (c, d) {
                var e, f = a.xhr(), g = ++Cc;
                if (f.open(a.type, a.url, a.async, a.username, a.password), a.xhrFields) for (e in a.xhrFields) f[e] = a.xhrFields[e];
                a.mimeType && f.overrideMimeType && f.overrideMimeType(a.mimeType), a.crossDomain || c["X-Requested-With"] || (c["X-Requested-With"] = "XMLHttpRequest");
                for (e in c) f.setRequestHeader(e, c[e]);
                b = function (a) {
                    return function () {
                        b && (delete Dc[g], b = f.onload = f.onerror = null, "abort" === a ? f.abort() : "error" === a ? d(f.status, f.statusText) : d(Ec[f.status] || f.status, f.statusText, "string" == typeof f.responseText ? {text: f.responseText} : void 0, f.getAllResponseHeaders()))
                    }
                }, f.onload = b(), f.onerror = b("error"), b = Dc[g] = b("abort");
                try {
                    f.send(a.hasContent && a.data || null)
                } catch (h) {
                    if (b) throw h
                }
            }, abort: function () {
                b && b()
            }
        } : void 0
    }), n.ajaxSetup({
        accepts: {script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"},
        contents: {script: /(?:java|ecma)script/},
        converters: {
            "text script": function (a) {
                return n.globalEval(a), a
            }
        }
    }), n.ajaxPrefilter("script", function (a) {
        void 0 === a.cache && (a.cache = !1), a.crossDomain && (a.type = "GET")
    }), n.ajaxTransport("script", function (a) {
        if (a.crossDomain) {
            var b, c;
            return {
                send: function (d, e) {
                    b = n("<script>").prop({
                        async: !0,
                        charset: a.scriptCharset,
                        src: a.url
                    }).on("load error", c = function (a) {
                        b.remove(), c = null, a && e("error" === a.type ? 404 : 200, a.type)
                    }), l.head.appendChild(b[0])
                }, abort: function () {
                    c && c()
                }
            }
        }
    });
    var Gc = [], Hc = /(=)\?(?=&|$)|\?\?/;
    n.ajaxSetup({
        jsonp: "callback", jsonpCallback: function () {
            var a = Gc.pop() || n.expando + "_" + cc++;
            return this[a] = !0, a
        }
    }), n.ajaxPrefilter("json jsonp", function (b, c, d) {
        var e, f, g,
            h = b.jsonp !== !1 && (Hc.test(b.url) ? "url" : "string" == typeof b.data && !(b.contentType || "").indexOf("application/x-www-form-urlencoded") && Hc.test(b.data) && "data");
        return h || "jsonp" === b.dataTypes[0] ? (e = b.jsonpCallback = n.isFunction(b.jsonpCallback) ? b.jsonpCallback() : b.jsonpCallback, h ? b[h] = b[h].replace(Hc, "$1" + e) : b.jsonp !== !1 && (b.url += (dc.test(b.url) ? "&" : "?") + b.jsonp + "=" + e), b.converters["script json"] = function () {
            return g || n.error(e + " was not called"), g[0]
        }, b.dataTypes[0] = "json", f = a[e], a[e] = function () {
            g = arguments
        }, d.always(function () {
            a[e] = f, b[e] && (b.jsonpCallback = c.jsonpCallback, Gc.push(e)), g && n.isFunction(f) && f(g[0]), g = f = void 0
        }), "script") : void 0
    }), n.parseHTML = function (a, b, c) {
        if (!a || "string" != typeof a) return null;
        "boolean" == typeof b && (c = b, b = !1), b = b || l;
        var d = v.exec(a), e = !c && [];
        return d ? [b.createElement(d[1])] : (d = n.buildFragment([a], b, e), e && e.length && n(e).remove(), n.merge([], d.childNodes))
    };
    var Ic = n.fn.load;
    n.fn.load = function (a, b, c) {
        if ("string" != typeof a && Ic) return Ic.apply(this, arguments);
        var d, e, f, g = this, h = a.indexOf(" ");
        return h >= 0 && (d = n.trim(a.slice(h)), a = a.slice(0, h)), n.isFunction(b) ? (c = b, b = void 0) : b && "object" == typeof b && (e = "POST"), g.length > 0 && n.ajax({
            url: a,
            type: e,
            dataType: "html",
            data: b
        }).done(function (a) {
            f = arguments, g.html(d ? n("<div>").append(n.parseHTML(a)).find(d) : a)
        }).complete(c && function (a, b) {
            g.each(c, f || [a.responseText, b, a])
        }), this
    }, n.expr.filters.animated = function (a) {
        return n.grep(n.timers, function (b) {
            return a === b.elem
        }).length
    };
    var Jc = a.document.documentElement;

    function Kc(a) {
        return n.isWindow(a) ? a : 9 === a.nodeType && a.defaultView
    }

    n.offset = {
        setOffset: function (a, b, c) {
            var d, e, f, g, h, i, j, k = n.css(a, "position"), l = n(a), m = {};
            "static" === k && (a.style.position = "relative"), h = l.offset(), f = n.css(a, "top"), i = n.css(a, "left"), j = ("absolute" === k || "fixed" === k) && (f + i).indexOf("auto") > -1, j ? (d = l.position(), g = d.top, e = d.left) : (g = parseFloat(f) || 0, e = parseFloat(i) || 0), n.isFunction(b) && (b = b.call(a, c, h)), null != b.top && (m.top = b.top - h.top + g), null != b.left && (m.left = b.left - h.left + e), "using" in b ? b.using.call(a, m) : l.css(m)
        }
    }, n.fn.extend({
        offset: function (a) {
            if (arguments.length) return void 0 === a ? this : this.each(function (b) {
                n.offset.setOffset(this, a, b)
            });
            var b, c, d = this[0], e = {top: 0, left: 0}, f = d && d.ownerDocument;
            if (f) return b = f.documentElement, n.contains(b, d) ? (typeof d.getBoundingClientRect !== U && (e = d.getBoundingClientRect()), c = Kc(f), {
                top: e.top + c.pageYOffset - b.clientTop,
                left: e.left + c.pageXOffset - b.clientLeft
            }) : e
        }, position: function () {
            if (this[0]) {
                var a, b, c = this[0], d = {top: 0, left: 0};
                return "fixed" === n.css(c, "position") ? b = c.getBoundingClientRect() : (a = this.offsetParent(), b = this.offset(), n.nodeName(a[0], "html") || (d = a.offset()), d.top += n.css(a[0], "borderTopWidth", !0), d.left += n.css(a[0], "borderLeftWidth", !0)), {
                    top: b.top - d.top - n.css(c, "marginTop", !0),
                    left: b.left - d.left - n.css(c, "marginLeft", !0)
                }
            }
        }, offsetParent: function () {
            return this.map(function () {
                var a = this.offsetParent || Jc;
                while (a && !n.nodeName(a, "html") && "static" === n.css(a, "position")) a = a.offsetParent;
                return a || Jc
            })
        }
    }), n.each({scrollLeft: "pageXOffset", scrollTop: "pageYOffset"}, function (b, c) {
        var d = "pageYOffset" === c;
        n.fn[b] = function (e) {
            return J(this, function (b, e, f) {
                var g = Kc(b);
                return void 0 === f ? g ? g[c] : b[e] : void (g ? g.scrollTo(d ? a.pageXOffset : f, d ? f : a.pageYOffset) : b[e] = f)
            }, b, e, arguments.length, null)
        }
    }), n.each(["top", "left"], function (a, b) {
        n.cssHooks[b] = yb(k.pixelPosition, function (a, c) {
            return c ? (c = xb(a, b), vb.test(c) ? n(a).position()[b] + "px" : c) : void 0
        })
    }), n.each({Height: "height", Width: "width"}, function (a, b) {
        n.each({padding: "inner" + a, content: b, "": "outer" + a}, function (c, d) {
            n.fn[d] = function (d, e) {
                var f = arguments.length && (c || "boolean" != typeof d),
                    g = c || (d === !0 || e === !0 ? "margin" : "border");
                return J(this, function (b, c, d) {
                    var e;
                    return n.isWindow(b) ? b.document.documentElement["client" + a] : 9 === b.nodeType ? (e = b.documentElement, Math.max(b.body["scroll" + a], e["scroll" + a], b.body["offset" + a], e["offset" + a], e["client" + a])) : void 0 === d ? n.css(b, c, g) : n.style(b, c, d, g)
                }, b, f ? d : void 0, f, null)
            }
        })
    }), n.fn.size = function () {
        return this.length
    }, n.fn.andSelf = n.fn.addBack, "function" == typeof define && define.amd && define("jquery", [], function () {
        return n
    });
    var Lc = a.jQuery, Mc = a.$;
    return n.noConflict = function (b) {
        return a.$ === n && (a.$ = Mc), b && a.jQuery === n && (a.jQuery = Lc), n
    }, typeof b === U && (a.jQuery = a.$ = n), n
});

/* End */
;
; /* Start:"a:4:{s:4:"full";s:58:"/bitrix/templates/main/js/bootstrap.min.js?147575796036816";s:6:"source";s:42:"/bitrix/templates/main/js/bootstrap.min.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
/*!
 * Bootstrap v3.3.5 (http://getbootstrap.com)
 * Copyright 2011-2015 Twitter, Inc.
 * Licensed under the MIT license
 */
if ("undefined" == typeof jQuery) throw new Error("Bootstrap's JavaScript requires jQuery");
+function (a) {
    "use strict";
    var b = a.fn.jquery.split(" ")[0].split(".");
    if (b[0] < 2 && b[1] < 9 || 1 == b[0] && 9 == b[1] && b[2] < 1) throw new Error("Bootstrap's JavaScript requires jQuery version 1.9.1 or higher")
}(jQuery), +function (a) {
    "use strict";

    function b() {
        var a = document.createElement("bootstrap"), b = {
            WebkitTransition: "webkitTransitionEnd",
            MozTransition: "transitionend",
            OTransition: "oTransitionEnd otransitionend",
            transition: "transitionend"
        };
        for (var c in b) if (void 0 !== a.style[c]) return {end: b[c]};
        return !1
    }

    a.fn.emulateTransitionEnd = function (b) {
        var c = !1, d = this;
        a(this).one("bsTransitionEnd", function () {
            c = !0
        });
        var e = function () {
            c || a(d).trigger(a.support.transition.end)
        };
        return setTimeout(e, b), this
    }, a(function () {
        a.support.transition = b(), a.support.transition && (a.event.special.bsTransitionEnd = {
            bindType: a.support.transition.end,
            delegateType: a.support.transition.end,
            handle: function (b) {
                return a(b.target).is(this) ? b.handleObj.handler.apply(this, arguments) : void 0
            }
        })
    })
}(jQuery), +function (a) {
    "use strict";

    function b(b) {
        return this.each(function () {
            var c = a(this), e = c.data("bs.alert");
            e || c.data("bs.alert", e = new d(this)), "string" == typeof b && e[b].call(c)
        })
    }

    var c = '[data-dismiss="alert"]', d = function (b) {
        a(b).on("click", c, this.close)
    };
    d.VERSION = "3.3.5", d.TRANSITION_DURATION = 150, d.prototype.close = function (b) {
        function c() {
            g.detach().trigger("closed.bs.alert").remove()
        }

        var e = a(this), f = e.attr("data-target");
        f || (f = e.attr("href"), f = f && f.replace(/.*(?=#[^\s]*$)/, ""));
        var g = a(f);
        b && b.preventDefault(), g.length || (g = e.closest(".alert")), g.trigger(b = a.Event("close.bs.alert")), b.isDefaultPrevented() || (g.removeClass("in"), a.support.transition && g.hasClass("fade") ? g.one("bsTransitionEnd", c).emulateTransitionEnd(d.TRANSITION_DURATION) : c())
    };
    var e = a.fn.alert;
    a.fn.alert = b, a.fn.alert.Constructor = d, a.fn.alert.noConflict = function () {
        return a.fn.alert = e, this
    }, a(document).on("click.bs.alert.data-api", c, d.prototype.close)
}(jQuery), +function (a) {
    "use strict";

    function b(b) {
        return this.each(function () {
            var d = a(this), e = d.data("bs.button"), f = "object" == typeof b && b;
            e || d.data("bs.button", e = new c(this, f)), "toggle" == b ? e.toggle() : b && e.setState(b)
        })
    }

    var c = function (b, d) {
        this.$element = a(b), this.options = a.extend({}, c.DEFAULTS, d), this.isLoading = !1
    };
    c.VERSION = "3.3.5", c.DEFAULTS = {loadingText: "loading..."}, c.prototype.setState = function (b) {
        var c = "disabled", d = this.$element, e = d.is("input") ? "val" : "html", f = d.data();
        b += "Text", null == f.resetText && d.data("resetText", d[e]()), setTimeout(a.proxy(function () {
            d[e](null == f[b] ? this.options[b] : f[b]), "loadingText" == b ? (this.isLoading = !0, d.addClass(c).attr(c, c)) : this.isLoading && (this.isLoading = !1, d.removeClass(c).removeAttr(c))
        }, this), 0)
    }, c.prototype.toggle = function () {
        var a = !0, b = this.$element.closest('[data-toggle="buttons"]');
        if (b.length) {
            var c = this.$element.find("input");
            "radio" == c.prop("type") ? (c.prop("checked") && (a = !1), b.find(".active").removeClass("active"), this.$element.addClass("active")) : "checkbox" == c.prop("type") && (c.prop("checked") !== this.$element.hasClass("active") && (a = !1), this.$element.toggleClass("active")), c.prop("checked", this.$element.hasClass("active")), a && c.trigger("change")
        } else this.$element.attr("aria-pressed", !this.$element.hasClass("active")), this.$element.toggleClass("active")
    };
    var d = a.fn.button;
    a.fn.button = b, a.fn.button.Constructor = c, a.fn.button.noConflict = function () {
        return a.fn.button = d, this
    }, a(document).on("click.bs.button.data-api", '[data-toggle^="button"]', function (c) {
        var d = a(c.target);
        d.hasClass("btn") || (d = d.closest(".btn")), b.call(d, "toggle"), a(c.target).is('input[type="radio"]') || a(c.target).is('input[type="checkbox"]') || c.preventDefault()
    }).on("focus.bs.button.data-api blur.bs.button.data-api", '[data-toggle^="button"]', function (b) {
        a(b.target).closest(".btn").toggleClass("focus", /^focus(in)?$/.test(b.type))
    })
}(jQuery), +function (a) {
    "use strict";

    function b(b) {
        return this.each(function () {
            var d = a(this), e = d.data("bs.carousel"),
                f = a.extend({}, c.DEFAULTS, d.data(), "object" == typeof b && b),
                g = "string" == typeof b ? b : f.slide;
            e || d.data("bs.carousel", e = new c(this, f)), "number" == typeof b ? e.to(b) : g ? e[g]() : f.interval && e.pause().cycle()
        })
    }

    var c = function (b, c) {
        this.$element = a(b), this.$indicators = this.$element.find(".carousel-indicators"), this.options = c, this.paused = null, this.sliding = null, this.interval = null, this.$active = null, this.$items = null, this.options.keyboard && this.$element.on("keydown.bs.carousel", a.proxy(this.keydown, this)), "hover" == this.options.pause && !("ontouchstart" in document.documentElement) && this.$element.on("mouseenter.bs.carousel", a.proxy(this.pause, this)).on("mouseleave.bs.carousel", a.proxy(this.cycle, this))
    };
    c.VERSION = "3.3.5", c.TRANSITION_DURATION = 600, c.DEFAULTS = {
        interval: 5e3,
        pause: "hover",
        wrap: !0,
        keyboard: !0
    }, c.prototype.keydown = function (a) {
        if (!/input|textarea/i.test(a.target.tagName)) {
            switch (a.which) {
                case 37:
                    this.prev();
                    break;
                case 39:
                    this.next();
                    break;
                default:
                    return
            }
            a.preventDefault()
        }
    }, c.prototype.cycle = function (b) {
        return b || (this.paused = !1), this.interval && clearInterval(this.interval), this.options.interval && !this.paused && (this.interval = setInterval(a.proxy(this.next, this), this.options.interval)), this
    }, c.prototype.getItemIndex = function (a) {
        return this.$items = a.parent().children(".item"), this.$items.index(a || this.$active)
    }, c.prototype.getItemForDirection = function (a, b) {
        var c = this.getItemIndex(b), d = "prev" == a && 0 === c || "next" == a && c == this.$items.length - 1;
        if (d && !this.options.wrap) return b;
        var e = "prev" == a ? -1 : 1, f = (c + e) % this.$items.length;
        return this.$items.eq(f)
    }, c.prototype.to = function (a) {
        var b = this, c = this.getItemIndex(this.$active = this.$element.find(".item.active"));
        return a > this.$items.length - 1 || 0 > a ? void 0 : this.sliding ? this.$element.one("slid.bs.carousel", function () {
            b.to(a)
        }) : c == a ? this.pause().cycle() : this.slide(a > c ? "next" : "prev", this.$items.eq(a))
    }, c.prototype.pause = function (b) {
        return b || (this.paused = !0), this.$element.find(".next, .prev").length && a.support.transition && (this.$element.trigger(a.support.transition.end), this.cycle(!0)), this.interval = clearInterval(this.interval), this
    }, c.prototype.next = function () {
        return this.sliding ? void 0 : this.slide("next")
    }, c.prototype.prev = function () {
        return this.sliding ? void 0 : this.slide("prev")
    }, c.prototype.slide = function (b, d) {
        var e = this.$element.find(".item.active"), f = d || this.getItemForDirection(b, e), g = this.interval,
            h = "next" == b ? "left" : "right", i = this;
        if (f.hasClass("active")) return this.sliding = !1;
        var j = f[0], k = a.Event("slide.bs.carousel", {relatedTarget: j, direction: h});
        if (this.$element.trigger(k), !k.isDefaultPrevented()) {
            if (this.sliding = !0, g && this.pause(), this.$indicators.length) {
                this.$indicators.find(".active").removeClass("active");
                var l = a(this.$indicators.children()[this.getItemIndex(f)]);
                l && l.addClass("active")
            }
            var m = a.Event("slid.bs.carousel", {relatedTarget: j, direction: h});
            return a.support.transition && this.$element.hasClass("slide") ? (f.addClass(b), f[0].offsetWidth, e.addClass(h), f.addClass(h), e.one("bsTransitionEnd", function () {
                f.removeClass([b, h].join(" ")).addClass("active"), e.removeClass(["active", h].join(" ")), i.sliding = !1, setTimeout(function () {
                    i.$element.trigger(m)
                }, 0)
            }).emulateTransitionEnd(c.TRANSITION_DURATION)) : (e.removeClass("active"), f.addClass("active"), this.sliding = !1, this.$element.trigger(m)), g && this.cycle(), this
        }
    };
    var d = a.fn.carousel;
    a.fn.carousel = b, a.fn.carousel.Constructor = c, a.fn.carousel.noConflict = function () {
        return a.fn.carousel = d, this
    };
    var e = function (c) {
        var d, e = a(this), f = a(e.attr("data-target") || (d = e.attr("href")) && d.replace(/.*(?=#[^\s]+$)/, ""));
        if (f.hasClass("carousel")) {
            var g = a.extend({}, f.data(), e.data()), h = e.attr("data-slide-to");
            h && (g.interval = !1), b.call(f, g), h && f.data("bs.carousel").to(h), c.preventDefault()
        }
    };
    a(document).on("click.bs.carousel.data-api", "[data-slide]", e).on("click.bs.carousel.data-api", "[data-slide-to]", e), a(window).on("load", function () {
        a('[data-ride="carousel"]').each(function () {
            var c = a(this);
            b.call(c, c.data())
        })
    })
}(jQuery), +function (a) {
    "use strict";

    function b(b) {
        var c, d = b.attr("data-target") || (c = b.attr("href")) && c.replace(/.*(?=#[^\s]+$)/, "");
        return a(d)
    }

    function c(b) {
        return this.each(function () {
            var c = a(this), e = c.data("bs.collapse"),
                f = a.extend({}, d.DEFAULTS, c.data(), "object" == typeof b && b);
            !e && f.toggle && /show|hide/.test(b) && (f.toggle = !1), e || c.data("bs.collapse", e = new d(this, f)), "string" == typeof b && e[b]()
        })
    }

    var d = function (b, c) {
        this.$element = a(b), this.options = a.extend({}, d.DEFAULTS, c), this.$trigger = a('[data-toggle="collapse"][href="#' + b.id + '"],[data-toggle="collapse"][data-target="#' + b.id + '"]'), this.transitioning = null, this.options.parent ? this.$parent = this.getParent() : this.addAriaAndCollapsedClass(this.$element, this.$trigger), this.options.toggle && this.toggle()
    };
    d.VERSION = "3.3.5", d.TRANSITION_DURATION = 350, d.DEFAULTS = {toggle: !0}, d.prototype.dimension = function () {
        var a = this.$element.hasClass("width");
        return a ? "width" : "height"
    }, d.prototype.show = function () {
        if (!this.transitioning && !this.$element.hasClass("in")) {
            var b, e = this.$parent && this.$parent.children(".panel").children(".in, .collapsing");
            if (!(e && e.length && (b = e.data("bs.collapse"), b && b.transitioning))) {
                var f = a.Event("show.bs.collapse");
                if (this.$element.trigger(f), !f.isDefaultPrevented()) {
                    e && e.length && (c.call(e, "hide"), b || e.data("bs.collapse", null));
                    var g = this.dimension();
                    this.$element.removeClass("collapse").addClass("collapsing")[g](0).attr("aria-expanded", !0), this.$trigger.removeClass("collapsed").attr("aria-expanded", !0), this.transitioning = 1;
                    var h = function () {
                        this.$element.removeClass("collapsing").addClass("collapse in")[g](""), this.transitioning = 0, this.$element.trigger("shown.bs.collapse")
                    };
                    if (!a.support.transition) return h.call(this);
                    var i = a.camelCase(["scroll", g].join("-"));
                    this.$element.one("bsTransitionEnd", a.proxy(h, this)).emulateTransitionEnd(d.TRANSITION_DURATION)[g](this.$element[0][i])
                }
            }
        }
    }, d.prototype.hide = function () {
        if (!this.transitioning && this.$element.hasClass("in")) {
            var b = a.Event("hide.bs.collapse");
            if (this.$element.trigger(b), !b.isDefaultPrevented()) {
                var c = this.dimension();
                this.$element[c](this.$element[c]())[0].offsetHeight, this.$element.addClass("collapsing").removeClass("collapse in").attr("aria-expanded", !1), this.$trigger.addClass("collapsed").attr("aria-expanded", !1), this.transitioning = 1;
                var e = function () {
                    this.transitioning = 0, this.$element.removeClass("collapsing").addClass("collapse").trigger("hidden.bs.collapse")
                };
                return a.support.transition ? void this.$element[c](0).one("bsTransitionEnd", a.proxy(e, this)).emulateTransitionEnd(d.TRANSITION_DURATION) : e.call(this)
            }
        }
    }, d.prototype.toggle = function () {
        this[this.$element.hasClass("in") ? "hide" : "show"]()
    }, d.prototype.getParent = function () {
        return a(this.options.parent).find('[data-toggle="collapse"][data-parent="' + this.options.parent + '"]').each(a.proxy(function (c, d) {
            var e = a(d);
            this.addAriaAndCollapsedClass(b(e), e)
        }, this)).end()
    }, d.prototype.addAriaAndCollapsedClass = function (a, b) {
        var c = a.hasClass("in");
        a.attr("aria-expanded", c), b.toggleClass("collapsed", !c).attr("aria-expanded", c)
    };
    var e = a.fn.collapse;
    a.fn.collapse = c, a.fn.collapse.Constructor = d, a.fn.collapse.noConflict = function () {
        return a.fn.collapse = e, this
    }, a(document).on("click.bs.collapse.data-api", '[data-toggle="collapse"]', function (d) {
        var e = a(this);
        e.attr("data-target") || d.preventDefault();
        var f = b(e), g = f.data("bs.collapse"), h = g ? "toggle" : e.data();
        c.call(f, h)
    })
}(jQuery), +function (a) {
    "use strict";

    function b(b) {
        var c = b.attr("data-target");
        c || (c = b.attr("href"), c = c && /#[A-Za-z]/.test(c) && c.replace(/.*(?=#[^\s]*$)/, ""));
        var d = c && a(c);
        return d && d.length ? d : b.parent()
    }

    function c(c) {
        c && 3 === c.which || (a(e).remove(), a(f).each(function () {
            var d = a(this), e = b(d), f = {relatedTarget: this};
            e.hasClass("open") && (c && "click" == c.type && /input|textarea/i.test(c.target.tagName) && a.contains(e[0], c.target) || (e.trigger(c = a.Event("hide.bs.dropdown", f)), c.isDefaultPrevented() || (d.attr("aria-expanded", "false"), e.removeClass("open").trigger("hidden.bs.dropdown", f))))
        }))
    }

    function d(b) {
        return this.each(function () {
            var c = a(this), d = c.data("bs.dropdown");
            d || c.data("bs.dropdown", d = new g(this)), "string" == typeof b && d[b].call(c)
        })
    }

    var e = ".dropdown-backdrop", f = '[data-toggle="dropdown"]', g = function (b) {
        a(b).on("click.bs.dropdown", this.toggle)
    };
    g.VERSION = "3.3.5", g.prototype.toggle = function (d) {
        var e = a(this);
        if (!e.is(".disabled, :disabled")) {
            var f = b(e), g = f.hasClass("open");
            if (c(), !g) {
                "ontouchstart" in document.documentElement && !f.closest(".navbar-nav").length && a(document.createElement("div")).addClass("dropdown-backdrop").insertAfter(a(this)).on("click", c);
                var h = {relatedTarget: this};
                if (f.trigger(d = a.Event("show.bs.dropdown", h)), d.isDefaultPrevented()) return;
                e.trigger("focus").attr("aria-expanded", "true"), f.toggleClass("open").trigger("shown.bs.dropdown", h)
            }
            return !1
        }
    }, g.prototype.keydown = function (c) {
        if (/(38|40|27|32)/.test(c.which) && !/input|textarea/i.test(c.target.tagName)) {
            var d = a(this);
            if (c.preventDefault(), c.stopPropagation(), !d.is(".disabled, :disabled")) {
                var e = b(d), g = e.hasClass("open");
                if (!g && 27 != c.which || g && 27 == c.which) return 27 == c.which && e.find(f).trigger("focus"), d.trigger("click");
                var h = " li:not(.disabled):visible a", i = e.find(".dropdown-menu" + h);
                if (i.length) {
                    var j = i.index(c.target);
                    38 == c.which && j > 0 && j--, 40 == c.which && j < i.length - 1 && j++, ~j || (j = 0), i.eq(j).trigger("focus")
                }
            }
        }
    };
    var h = a.fn.dropdown;
    a.fn.dropdown = d, a.fn.dropdown.Constructor = g, a.fn.dropdown.noConflict = function () {
        return a.fn.dropdown = h, this
    }, a(document).on("click.bs.dropdown.data-api", c).on("click.bs.dropdown.data-api", ".dropdown form", function (a) {
        a.stopPropagation()
    }).on("click.bs.dropdown.data-api", f, g.prototype.toggle).on("keydown.bs.dropdown.data-api", f, g.prototype.keydown).on("keydown.bs.dropdown.data-api", ".dropdown-menu", g.prototype.keydown)
}(jQuery), +function (a) {
    "use strict";

    function b(b, d) {
        return this.each(function () {
            var e = a(this), f = e.data("bs.modal"), g = a.extend({}, c.DEFAULTS, e.data(), "object" == typeof b && b);
            f || e.data("bs.modal", f = new c(this, g)), "string" == typeof b ? f[b](d) : g.show && f.show(d)
        })
    }

    var c = function (b, c) {
        this.options = c, this.$body = a(document.body), this.$element = a(b), this.$dialog = this.$element.find(".modal-dialog"), this.$backdrop = null, this.isShown = null, this.originalBodyPad = null, this.scrollbarWidth = 0, this.ignoreBackdropClick = !1, this.options.remote && this.$element.find(".modal-content").load(this.options.remote, a.proxy(function () {
            this.$element.trigger("loaded.bs.modal")
        }, this))
    };
    c.VERSION = "3.3.5", c.TRANSITION_DURATION = 300, c.BACKDROP_TRANSITION_DURATION = 150, c.DEFAULTS = {
        backdrop: !0,
        keyboard: !0,
        show: !0
    }, c.prototype.toggle = function (a) {
        return this.isShown ? this.hide() : this.show(a)
    }, c.prototype.show = function (b) {
        var d = this, e = a.Event("show.bs.modal", {relatedTarget: b});
        this.$element.trigger(e), this.isShown || e.isDefaultPrevented() || (this.isShown = !0, this.checkScrollbar(), this.setScrollbar(), this.$body.addClass("modal-open"), this.escape(), this.resize(), this.$element.on("click.dismiss.bs.modal", '[data-dismiss="modal"]', a.proxy(this.hide, this)), this.$dialog.on("mousedown.dismiss.bs.modal", function () {
            d.$element.one("mouseup.dismiss.bs.modal", function (b) {
                a(b.target).is(d.$element) && (d.ignoreBackdropClick = !0)
            })
        }), this.backdrop(function () {
            var e = a.support.transition && d.$element.hasClass("fade");
            d.$element.parent().length || d.$element.appendTo(d.$body), d.$element.show().scrollTop(0), d.adjustDialog(), e && d.$element[0].offsetWidth, d.$element.addClass("in"), d.enforceFocus();
            var f = a.Event("shown.bs.modal", {relatedTarget: b});
            e ? d.$dialog.one("bsTransitionEnd", function () {
                d.$element.trigger("focus").trigger(f)
            }).emulateTransitionEnd(c.TRANSITION_DURATION) : d.$element.trigger("focus").trigger(f)
        }))
    }, c.prototype.hide = function (b) {
        b && b.preventDefault(), b = a.Event("hide.bs.modal"), this.$element.trigger(b), this.isShown && !b.isDefaultPrevented() && (this.isShown = !1, this.escape(), this.resize(), a(document).off("focusin.bs.modal"), this.$element.removeClass("in").off("click.dismiss.bs.modal").off("mouseup.dismiss.bs.modal"), this.$dialog.off("mousedown.dismiss.bs.modal"), a.support.transition && this.$element.hasClass("fade") ? this.$element.one("bsTransitionEnd", a.proxy(this.hideModal, this)).emulateTransitionEnd(c.TRANSITION_DURATION) : this.hideModal())
    }, c.prototype.enforceFocus = function () {
        a(document).off("focusin.bs.modal").on("focusin.bs.modal", a.proxy(function (a) {
            this.$element[0] === a.target || this.$element.has(a.target).length || this.$element.trigger("focus")
        }, this))
    }, c.prototype.escape = function () {
        this.isShown && this.options.keyboard ? this.$element.on("keydown.dismiss.bs.modal", a.proxy(function (a) {
            27 == a.which && this.hide()
        }, this)) : this.isShown || this.$element.off("keydown.dismiss.bs.modal")
    }, c.prototype.resize = function () {
        this.isShown ? a(window).on("resize.bs.modal", a.proxy(this.handleUpdate, this)) : a(window).off("resize.bs.modal")
    }, c.prototype.hideModal = function () {
        var a = this;
        this.$element.hide(), this.backdrop(function () {
            a.$body.removeClass("modal-open"), a.resetAdjustments(), a.resetScrollbar(), a.$element.trigger("hidden.bs.modal")
        })
    }, c.prototype.removeBackdrop = function () {
        this.$backdrop && this.$backdrop.remove(), this.$backdrop = null
    }, c.prototype.backdrop = function (b) {
        var d = this, e = this.$element.hasClass("fade") ? "fade" : "";
        if (this.isShown && this.options.backdrop) {
            var f = a.support.transition && e;
            if (this.$backdrop = a(document.createElement("div")).addClass("modal-backdrop " + e).appendTo(this.$body), this.$element.on("click.dismiss.bs.modal", a.proxy(function (a) {
                return this.ignoreBackdropClick ? void (this.ignoreBackdropClick = !1) : void (a.target === a.currentTarget && ("static" == this.options.backdrop ? this.$element[0].focus() : this.hide()))
            }, this)), f && this.$backdrop[0].offsetWidth, this.$backdrop.addClass("in"), !b) return;
            f ? this.$backdrop.one("bsTransitionEnd", b).emulateTransitionEnd(c.BACKDROP_TRANSITION_DURATION) : b()
        } else if (!this.isShown && this.$backdrop) {
            this.$backdrop.removeClass("in");
            var g = function () {
                d.removeBackdrop(), b && b()
            };
            a.support.transition && this.$element.hasClass("fade") ? this.$backdrop.one("bsTransitionEnd", g).emulateTransitionEnd(c.BACKDROP_TRANSITION_DURATION) : g()
        } else b && b()
    }, c.prototype.handleUpdate = function () {
        this.adjustDialog()
    }, c.prototype.adjustDialog = function () {
        var a = this.$element[0].scrollHeight > document.documentElement.clientHeight;
        this.$element.css({
            paddingLeft: !this.bodyIsOverflowing && a ? this.scrollbarWidth : "",
            paddingRight: this.bodyIsOverflowing && !a ? this.scrollbarWidth : ""
        })
    }, c.prototype.resetAdjustments = function () {
        this.$element.css({paddingLeft: "", paddingRight: ""})
    }, c.prototype.checkScrollbar = function () {
        var a = window.innerWidth;
        if (!a) {
            var b = document.documentElement.getBoundingClientRect();
            a = b.right - Math.abs(b.left)
        }
        this.bodyIsOverflowing = document.body.clientWidth < a, this.scrollbarWidth = this.measureScrollbar()
    }, c.prototype.setScrollbar = function () {
        var a = parseInt(this.$body.css("padding-right") || 0, 10);
        this.originalBodyPad = document.body.style.paddingRight || "", this.bodyIsOverflowing && this.$body.css("padding-right", a + this.scrollbarWidth)
    }, c.prototype.resetScrollbar = function () {
        this.$body.css("padding-right", this.originalBodyPad)
    }, c.prototype.measureScrollbar = function () {
        var a = document.createElement("div");
        a.className = "modal-scrollbar-measure", this.$body.append(a);
        var b = a.offsetWidth - a.clientWidth;
        return this.$body[0].removeChild(a), b
    };
    var d = a.fn.modal;
    a.fn.modal = b, a.fn.modal.Constructor = c, a.fn.modal.noConflict = function () {
        return a.fn.modal = d, this
    }, a(document).on("click.bs.modal.data-api", '[data-toggle="modal"]', function (c) {
        var d = a(this), e = d.attr("href"), f = a(d.attr("data-target") || e && e.replace(/.*(?=#[^\s]+$)/, "")),
            g = f.data("bs.modal") ? "toggle" : a.extend({remote: !/#/.test(e) && e}, f.data(), d.data());
        d.is("a") && c.preventDefault(), f.one("show.bs.modal", function (a) {
            a.isDefaultPrevented() || f.one("hidden.bs.modal", function () {
                d.is(":visible") && d.trigger("focus")
            })
        }), b.call(f, g, this)
    })
}(jQuery), +function (a) {
    "use strict";

    function b(b) {
        return this.each(function () {
            var d = a(this), e = d.data("bs.tooltip"), f = "object" == typeof b && b;
            (e || !/destroy|hide/.test(b)) && (e || d.data("bs.tooltip", e = new c(this, f)), "string" == typeof b && e[b]())
        })
    }

    var c = function (a, b) {
        this.type = null, this.options = null, this.enabled = null, this.timeout = null, this.hoverState = null, this.$element = null, this.inState = null, this.init("tooltip", a, b)
    };
    c.VERSION = "3.3.5", c.TRANSITION_DURATION = 150, c.DEFAULTS = {
        animation: !0,
        placement: "top",
        selector: !1,
        template: '<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',
        trigger: "hover focus",
        title: "",
        delay: 0,
        html: !1,
        container: !1,
        viewport: {selector: "body", padding: 0}
    }, c.prototype.init = function (b, c, d) {
        if (this.enabled = !0, this.type = b, this.$element = a(c), this.options = this.getOptions(d), this.$viewport = this.options.viewport && a(a.isFunction(this.options.viewport) ? this.options.viewport.call(this, this.$element) : this.options.viewport.selector || this.options.viewport), this.inState = {
            click: !1,
            hover: !1,
            focus: !1
        }, this.$element[0] instanceof document.constructor && !this.options.selector) throw new Error("`selector` option must be specified when initializing " + this.type + " on the window.document object!");
        for (var e = this.options.trigger.split(" "), f = e.length; f--;) {
            var g = e[f];
            if ("click" == g) this.$element.on("click." + this.type, this.options.selector, a.proxy(this.toggle, this)); else if ("manual" != g) {
                var h = "hover" == g ? "mouseenter" : "focusin", i = "hover" == g ? "mouseleave" : "focusout";
                this.$element.on(h + "." + this.type, this.options.selector, a.proxy(this.enter, this)), this.$element.on(i + "." + this.type, this.options.selector, a.proxy(this.leave, this))
            }
        }
        this.options.selector ? this._options = a.extend({}, this.options, {
            trigger: "manual",
            selector: ""
        }) : this.fixTitle()
    }, c.prototype.getDefaults = function () {
        return c.DEFAULTS
    }, c.prototype.getOptions = function (b) {
        return b = a.extend({}, this.getDefaults(), this.$element.data(), b), b.delay && "number" == typeof b.delay && (b.delay = {
            show: b.delay,
            hide: b.delay
        }), b
    }, c.prototype.getDelegateOptions = function () {
        var b = {}, c = this.getDefaults();
        return this._options && a.each(this._options, function (a, d) {
            c[a] != d && (b[a] = d)
        }), b
    }, c.prototype.enter = function (b) {
        var c = b instanceof this.constructor ? b : a(b.currentTarget).data("bs." + this.type);
        return c || (c = new this.constructor(b.currentTarget, this.getDelegateOptions()), a(b.currentTarget).data("bs." + this.type, c)), b instanceof a.Event && (c.inState["focusin" == b.type ? "focus" : "hover"] = !0), c.tip().hasClass("in") || "in" == c.hoverState ? void (c.hoverState = "in") : (clearTimeout(c.timeout), c.hoverState = "in", c.options.delay && c.options.delay.show ? void (c.timeout = setTimeout(function () {
            "in" == c.hoverState && c.show()
        }, c.options.delay.show)) : c.show())
    }, c.prototype.isInStateTrue = function () {
        for (var a in this.inState) if (this.inState[a]) return !0;
        return !1
    }, c.prototype.leave = function (b) {
        var c = b instanceof this.constructor ? b : a(b.currentTarget).data("bs." + this.type);
        return c || (c = new this.constructor(b.currentTarget, this.getDelegateOptions()), a(b.currentTarget).data("bs." + this.type, c)), b instanceof a.Event && (c.inState["focusout" == b.type ? "focus" : "hover"] = !1), c.isInStateTrue() ? void 0 : (clearTimeout(c.timeout), c.hoverState = "out", c.options.delay && c.options.delay.hide ? void (c.timeout = setTimeout(function () {
            "out" == c.hoverState && c.hide()
        }, c.options.delay.hide)) : c.hide())
    }, c.prototype.show = function () {
        var b = a.Event("show.bs." + this.type);
        if (this.hasContent() && this.enabled) {
            this.$element.trigger(b);
            var d = a.contains(this.$element[0].ownerDocument.documentElement, this.$element[0]);
            if (b.isDefaultPrevented() || !d) return;
            var e = this, f = this.tip(), g = this.getUID(this.type);
            this.setContent(), f.attr("id", g), this.$element.attr("aria-describedby", g), this.options.animation && f.addClass("fade");
            var h = "function" == typeof this.options.placement ? this.options.placement.call(this, f[0], this.$element[0]) : this.options.placement,
                i = /\s?auto?\s?/i, j = i.test(h);
            j && (h = h.replace(i, "") || "top"), f.detach().css({
                top: 0,
                left: 0,
                display: "block"
            }).addClass(h).data("bs." + this.type, this), this.options.container ? f.appendTo(this.options.container) : f.insertAfter(this.$element), this.$element.trigger("inserted.bs." + this.type);
            var k = this.getPosition(), l = f[0].offsetWidth, m = f[0].offsetHeight;
            if (j) {
                var n = h, o = this.getPosition(this.$viewport);
                h = "bottom" == h && k.bottom + m > o.bottom ? "top" : "top" == h && k.top - m < o.top ? "bottom" : "right" == h && k.right + l > o.width ? "left" : "left" == h && k.left - l < o.left ? "right" : h, f.removeClass(n).addClass(h)
            }
            var p = this.getCalculatedOffset(h, k, l, m);
            this.applyPlacement(p, h);
            var q = function () {
                var a = e.hoverState;
                e.$element.trigger("shown.bs." + e.type), e.hoverState = null, "out" == a && e.leave(e)
            };
            a.support.transition && this.$tip.hasClass("fade") ? f.one("bsTransitionEnd", q).emulateTransitionEnd(c.TRANSITION_DURATION) : q()
        }
    }, c.prototype.applyPlacement = function (b, c) {
        var d = this.tip(), e = d[0].offsetWidth, f = d[0].offsetHeight, g = parseInt(d.css("margin-top"), 10),
            h = parseInt(d.css("margin-left"), 10);
        isNaN(g) && (g = 0), isNaN(h) && (h = 0), b.top += g, b.left += h, a.offset.setOffset(d[0], a.extend({
            using: function (a) {
                d.css({top: Math.round(a.top), left: Math.round(a.left)})
            }
        }, b), 0), d.addClass("in");
        var i = d[0].offsetWidth, j = d[0].offsetHeight;
        "top" == c && j != f && (b.top = b.top + f - j);
        var k = this.getViewportAdjustedDelta(c, b, i, j);
        k.left ? b.left += k.left : b.top += k.top;
        var l = /top|bottom/.test(c), m = l ? 2 * k.left - e + i : 2 * k.top - f + j,
            n = l ? "offsetWidth" : "offsetHeight";
        d.offset(b), this.replaceArrow(m, d[0][n], l)
    }, c.prototype.replaceArrow = function (a, b, c) {
        this.arrow().css(c ? "left" : "top", 50 * (1 - a / b) + "%").css(c ? "top" : "left", "")
    }, c.prototype.setContent = function () {
        var a = this.tip(), b = this.getTitle();
        a.find(".tooltip-inner")[this.options.html ? "html" : "text"](b), a.removeClass("fade in top bottom left right")
    }, c.prototype.hide = function (b) {
        function d() {
            "in" != e.hoverState && f.detach(), e.$element.removeAttr("aria-describedby").trigger("hidden.bs." + e.type), b && b()
        }

        var e = this, f = a(this.$tip), g = a.Event("hide.bs." + this.type);
        return this.$element.trigger(g), g.isDefaultPrevented() ? void 0 : (f.removeClass("in"), a.support.transition && f.hasClass("fade") ? f.one("bsTransitionEnd", d).emulateTransitionEnd(c.TRANSITION_DURATION) : d(), this.hoverState = null, this)
    }, c.prototype.fixTitle = function () {
        var a = this.$element;
        (a.attr("title") || "string" != typeof a.attr("data-original-title")) && a.attr("data-original-title", a.attr("title") || "").attr("title", "")
    }, c.prototype.hasContent = function () {
        return this.getTitle()
    }, c.prototype.getPosition = function (b) {
        b = b || this.$element;
        var c = b[0], d = "BODY" == c.tagName, e = c.getBoundingClientRect();
        null == e.width && (e = a.extend({}, e, {width: e.right - e.left, height: e.bottom - e.top}));
        var f = d ? {top: 0, left: 0} : b.offset(),
            g = {scroll: d ? document.documentElement.scrollTop || document.body.scrollTop : b.scrollTop()},
            h = d ? {width: a(window).width(), height: a(window).height()} : null;
        return a.extend({}, e, g, h, f)
    }, c.prototype.getCalculatedOffset = function (a, b, c, d) {
        return "bottom" == a ? {
            top: b.top + b.height,
            left: b.left + b.width / 2 - c / 2
        } : "top" == a ? {
            top: b.top - d,
            left: b.left + b.width / 2 - c / 2
        } : "left" == a ? {top: b.top + b.height / 2 - d / 2, left: b.left - c} : {
            top: b.top + b.height / 2 - d / 2,
            left: b.left + b.width
        }
    }, c.prototype.getViewportAdjustedDelta = function (a, b, c, d) {
        var e = {top: 0, left: 0};
        if (!this.$viewport) return e;
        var f = this.options.viewport && this.options.viewport.padding || 0, g = this.getPosition(this.$viewport);
        if (/right|left/.test(a)) {
            var h = b.top - f - g.scroll, i = b.top + f - g.scroll + d;
            h < g.top ? e.top = g.top - h : i > g.top + g.height && (e.top = g.top + g.height - i)
        } else {
            var j = b.left - f, k = b.left + f + c;
            j < g.left ? e.left = g.left - j : k > g.right && (e.left = g.left + g.width - k)
        }
        return e
    }, c.prototype.getTitle = function () {
        var a, b = this.$element, c = this.options;
        return a = b.attr("data-original-title") || ("function" == typeof c.title ? c.title.call(b[0]) : c.title)
    }, c.prototype.getUID = function (a) {
        do a += ~~(1e6 * Math.random()); while (document.getElementById(a));
        return a
    }, c.prototype.tip = function () {
        if (!this.$tip && (this.$tip = a(this.options.template), 1 != this.$tip.length)) throw new Error(this.type + " `template` option must consist of exactly 1 top-level element!");
        return this.$tip
    }, c.prototype.arrow = function () {
        return this.$arrow = this.$arrow || this.tip().find(".tooltip-arrow")
    }, c.prototype.enable = function () {
        this.enabled = !0
    }, c.prototype.disable = function () {
        this.enabled = !1
    }, c.prototype.toggleEnabled = function () {
        this.enabled = !this.enabled
    }, c.prototype.toggle = function (b) {
        var c = this;
        b && (c = a(b.currentTarget).data("bs." + this.type), c || (c = new this.constructor(b.currentTarget, this.getDelegateOptions()), a(b.currentTarget).data("bs." + this.type, c))), b ? (c.inState.click = !c.inState.click, c.isInStateTrue() ? c.enter(c) : c.leave(c)) : c.tip().hasClass("in") ? c.leave(c) : c.enter(c)
    }, c.prototype.destroy = function () {
        var a = this;
        clearTimeout(this.timeout), this.hide(function () {
            a.$element.off("." + a.type).removeData("bs." + a.type), a.$tip && a.$tip.detach(), a.$tip = null, a.$arrow = null, a.$viewport = null
        })
    };
    var d = a.fn.tooltip;
    a.fn.tooltip = b, a.fn.tooltip.Constructor = c, a.fn.tooltip.noConflict = function () {
        return a.fn.tooltip = d, this
    }
}(jQuery), +function (a) {
    "use strict";

    function b(b) {
        return this.each(function () {
            var d = a(this), e = d.data("bs.popover"), f = "object" == typeof b && b;
            (e || !/destroy|hide/.test(b)) && (e || d.data("bs.popover", e = new c(this, f)), "string" == typeof b && e[b]())
        })
    }

    var c = function (a, b) {
        this.init("popover", a, b)
    };
    if (!a.fn.tooltip) throw new Error("Popover requires tooltip.js");
    c.VERSION = "3.3.5", c.DEFAULTS = a.extend({}, a.fn.tooltip.Constructor.DEFAULTS, {
        placement: "right",
        trigger: "click",
        content: "",
        template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'
    }), c.prototype = a.extend({}, a.fn.tooltip.Constructor.prototype), c.prototype.constructor = c, c.prototype.getDefaults = function () {
        return c.DEFAULTS
    }, c.prototype.setContent = function () {
        var a = this.tip(), b = this.getTitle(), c = this.getContent();
        a.find(".popover-title")[this.options.html ? "html" : "text"](b), a.find(".popover-content").children().detach().end()[this.options.html ? "string" == typeof c ? "html" : "append" : "text"](c), a.removeClass("fade top bottom left right in"), a.find(".popover-title").html() || a.find(".popover-title").hide()
    }, c.prototype.hasContent = function () {
        return this.getTitle() || this.getContent()
    }, c.prototype.getContent = function () {
        var a = this.$element, b = this.options;
        return a.attr("data-content") || ("function" == typeof b.content ? b.content.call(a[0]) : b.content)
    }, c.prototype.arrow = function () {
        return this.$arrow = this.$arrow || this.tip().find(".arrow")
    };
    var d = a.fn.popover;
    a.fn.popover = b, a.fn.popover.Constructor = c, a.fn.popover.noConflict = function () {
        return a.fn.popover = d, this
    }
}(jQuery), +function (a) {
    "use strict";

    function b(c, d) {
        this.$body = a(document.body), this.$scrollElement = a(a(c).is(document.body) ? window : c), this.options = a.extend({}, b.DEFAULTS, d), this.selector = (this.options.target || "") + " .nav li > a", this.offsets = [], this.targets = [], this.activeTarget = null, this.scrollHeight = 0, this.$scrollElement.on("scroll.bs.scrollspy", a.proxy(this.process, this)), this.refresh(), this.process()
    }

    function c(c) {
        return this.each(function () {
            var d = a(this), e = d.data("bs.scrollspy"), f = "object" == typeof c && c;
            e || d.data("bs.scrollspy", e = new b(this, f)), "string" == typeof c && e[c]()
        })
    }

    b.VERSION = "3.3.5", b.DEFAULTS = {offset: 10}, b.prototype.getScrollHeight = function () {
        return this.$scrollElement[0].scrollHeight || Math.max(this.$body[0].scrollHeight, document.documentElement.scrollHeight)
    }, b.prototype.refresh = function () {
        var b = this, c = "offset", d = 0;
        this.offsets = [], this.targets = [], this.scrollHeight = this.getScrollHeight(), a.isWindow(this.$scrollElement[0]) || (c = "position", d = this.$scrollElement.scrollTop()), this.$body.find(this.selector).map(function () {
            var b = a(this), e = b.data("target") || b.attr("href"), f = /^#./.test(e) && a(e);
            return f && f.length && f.is(":visible") && [[f[c]().top + d, e]] || null
        }).sort(function (a, b) {
            return a[0] - b[0]
        }).each(function () {
            b.offsets.push(this[0]), b.targets.push(this[1])
        })
    }, b.prototype.process = function () {
        var a, b = this.$scrollElement.scrollTop() + this.options.offset, c = this.getScrollHeight(),
            d = this.options.offset + c - this.$scrollElement.height(), e = this.offsets, f = this.targets,
            g = this.activeTarget;
        if (this.scrollHeight != c && this.refresh(), b >= d) return g != (a = f[f.length - 1]) && this.activate(a);
        if (g && b < e[0]) return this.activeTarget = null, this.clear();
        for (a = e.length; a--;) g != f[a] && b >= e[a] && (void 0 === e[a + 1] || b < e[a + 1]) && this.activate(f[a])
    }, b.prototype.activate = function (b) {
        this.activeTarget = b, this.clear();
        var c = this.selector + '[data-target="' + b + '"],' + this.selector + '[href="' + b + '"]',
            d = a(c).parents("li").addClass("active");
        d.parent(".dropdown-menu").length && (d = d.closest("li.dropdown").addClass("active")),
            d.trigger("activate.bs.scrollspy")
    }, b.prototype.clear = function () {
        a(this.selector).parentsUntil(this.options.target, ".active").removeClass("active")
    };
    var d = a.fn.scrollspy;
    a.fn.scrollspy = c, a.fn.scrollspy.Constructor = b, a.fn.scrollspy.noConflict = function () {
        return a.fn.scrollspy = d, this
    }, a(window).on("load.bs.scrollspy.data-api", function () {
        a('[data-spy="scroll"]').each(function () {
            var b = a(this);
            c.call(b, b.data())
        })
    })
}(jQuery), +function (a) {
    "use strict";

    function b(b) {
        return this.each(function () {
            var d = a(this), e = d.data("bs.tab");
            e || d.data("bs.tab", e = new c(this)), "string" == typeof b && e[b]()
        })
    }

    var c = function (b) {
        this.element = a(b)
    };
    c.VERSION = "3.3.5", c.TRANSITION_DURATION = 150, c.prototype.show = function () {
        var b = this.element, c = b.closest("ul:not(.dropdown-menu)"), d = b.data("target");
        if (d || (d = b.attr("href"), d = d && d.replace(/.*(?=#[^\s]*$)/, "")), !b.parent("li").hasClass("active")) {
            var e = c.find(".active:last a"), f = a.Event("hide.bs.tab", {relatedTarget: b[0]}),
                g = a.Event("show.bs.tab", {relatedTarget: e[0]});
            if (e.trigger(f), b.trigger(g), !g.isDefaultPrevented() && !f.isDefaultPrevented()) {
                var h = a(d);
                this.activate(b.closest("li"), c), this.activate(h, h.parent(), function () {
                    e.trigger({type: "hidden.bs.tab", relatedTarget: b[0]}), b.trigger({
                        type: "shown.bs.tab",
                        relatedTarget: e[0]
                    })
                })
            }
        }
    }, c.prototype.activate = function (b, d, e) {
        function f() {
            g.removeClass("active").find("> .dropdown-menu > .active").removeClass("active").end().find('[data-toggle="tab"]').attr("aria-expanded", !1), b.addClass("active").find('[data-toggle="tab"]').attr("aria-expanded", !0), h ? (b[0].offsetWidth, b.addClass("in")) : b.removeClass("fade"), b.parent(".dropdown-menu").length && b.closest("li.dropdown").addClass("active").end().find('[data-toggle="tab"]').attr("aria-expanded", !0), e && e()
        }

        var g = d.find("> .active"),
            h = e && a.support.transition && (g.length && g.hasClass("fade") || !!d.find("> .fade").length);
        g.length && h ? g.one("bsTransitionEnd", f).emulateTransitionEnd(c.TRANSITION_DURATION) : f(), g.removeClass("in")
    };
    var d = a.fn.tab;
    a.fn.tab = b, a.fn.tab.Constructor = c, a.fn.tab.noConflict = function () {
        return a.fn.tab = d, this
    };
    var e = function (c) {
        c.preventDefault(), b.call(a(this), "show")
    };
    a(document).on("click.bs.tab.data-api", '[data-toggle="tab"]', e).on("click.bs.tab.data-api", '[data-toggle="pill"]', e)
}(jQuery), +function (a) {
    "use strict";

    function b(b) {
        return this.each(function () {
            var d = a(this), e = d.data("bs.affix"), f = "object" == typeof b && b;
            e || d.data("bs.affix", e = new c(this, f)), "string" == typeof b && e[b]()
        })
    }

    var c = function (b, d) {
        this.options = a.extend({}, c.DEFAULTS, d), this.$target = a(this.options.target).on("scroll.bs.affix.data-api", a.proxy(this.checkPosition, this)).on("click.bs.affix.data-api", a.proxy(this.checkPositionWithEventLoop, this)), this.$element = a(b), this.affixed = null, this.unpin = null, this.pinnedOffset = null, this.checkPosition()
    };
    c.VERSION = "3.3.5", c.RESET = "affix affix-top affix-bottom", c.DEFAULTS = {
        offset: 0,
        target: window
    }, c.prototype.getState = function (a, b, c, d) {
        var e = this.$target.scrollTop(), f = this.$element.offset(), g = this.$target.height();
        if (null != c && "top" == this.affixed) return c > e ? "top" : !1;
        if ("bottom" == this.affixed) return null != c ? e + this.unpin <= f.top ? !1 : "bottom" : a - d >= e + g ? !1 : "bottom";
        var h = null == this.affixed, i = h ? e : f.top, j = h ? g : b;
        return null != c && c >= e ? "top" : null != d && i + j >= a - d ? "bottom" : !1
    }, c.prototype.getPinnedOffset = function () {
        if (this.pinnedOffset) return this.pinnedOffset;
        this.$element.removeClass(c.RESET).addClass("affix");
        var a = this.$target.scrollTop(), b = this.$element.offset();
        return this.pinnedOffset = b.top - a
    }, c.prototype.checkPositionWithEventLoop = function () {
        setTimeout(a.proxy(this.checkPosition, this), 1)
    }, c.prototype.checkPosition = function () {
        if (this.$element.is(":visible")) {
            var b = this.$element.height(), d = this.options.offset, e = d.top, f = d.bottom,
                g = Math.max(a(document).height(), a(document.body).height());
            "object" != typeof d && (f = e = d), "function" == typeof e && (e = d.top(this.$element)), "function" == typeof f && (f = d.bottom(this.$element));
            var h = this.getState(g, b, e, f);
            if (this.affixed != h) {
                null != this.unpin && this.$element.css("top", "");
                var i = "affix" + (h ? "-" + h : ""), j = a.Event(i + ".bs.affix");
                if (this.$element.trigger(j), j.isDefaultPrevented()) return;
                this.affixed = h, this.unpin = "bottom" == h ? this.getPinnedOffset() : null, this.$element.removeClass(c.RESET).addClass(i).trigger(i.replace("affix", "affixed") + ".bs.affix")
            }
            "bottom" == h && this.$element.offset({top: g - b - f})
        }
    };
    var d = a.fn.affix;
    a.fn.affix = b, a.fn.affix.Constructor = c, a.fn.affix.noConflict = function () {
        return a.fn.affix = d, this
    }, a(window).on("load", function () {
        a('[data-spy="affix"]').each(function () {
            var c = a(this), d = c.data();
            d.offset = d.offset || {}, null != d.offsetBottom && (d.offset.bottom = d.offsetBottom), null != d.offsetTop && (d.offset.top = d.offsetTop), b.call(c, d)
        })
    })
}(jQuery);
/* End */
;
; /* Start:"a:4:{s:4:"full";s:72:"/bitrix/templates/main/js/jquery.mousewheel-3.0.6.pack.js?14757579601384";s:6:"source";s:57:"/bitrix/templates/main/js/jquery.mousewheel-3.0.6.pack.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
/*! Copyright (c) 2011 Brandon Aaron (http://brandonaaron.net)
 * Licensed under the MIT License (LICENSE.txt).
 *
 * Thanks to: http://adomas.org/javascript-mouse-wheel/ for some pointers.
 * Thanks to: Mathias Bank(http://www.mathias-bank.de) for a scope bug fix.
 * Thanks to: Seamus Leahy for adding deltaX and deltaY
 *
 * Version: 3.0.6
 *
 * Requires: 1.2.2+
 */
(function (d) {
    function e(a) {
        var b = a || window.event, c = [].slice.call(arguments, 1), f = 0, e = 0, g = 0, a = d.event.fix(b);
        a.type = "mousewheel";
        b.wheelDelta && (f = b.wheelDelta / 120);
        b.detail && (f = -b.detail / 3);
        g = f;
        b.axis !== void 0 && b.axis === b.HORIZONTAL_AXIS && (g = 0, e = -1 * f);
        b.wheelDeltaY !== void 0 && (g = b.wheelDeltaY / 120);
        b.wheelDeltaX !== void 0 && (e = -1 * b.wheelDeltaX / 120);
        c.unshift(a, f, e, g);
        return (d.event.dispatch || d.event.handle).apply(this, c)
    }

    var c = ["DOMMouseScroll", "mousewheel"];
    if (d.event.fixHooks) for (var h = c.length; h;) d.event.fixHooks[c[--h]] =
        d.event.mouseHooks;
    d.event.special.mousewheel = {
        setup: function () {
            if (this.addEventListener) for (var a = c.length; a;) this.addEventListener(c[--a], e, false); else this.onmousewheel = e
        }, teardown: function () {
            if (this.removeEventListener) for (var a = c.length; a;) this.removeEventListener(c[--a], e, false); else this.onmousewheel = null
        }
    };
    d.fn.extend({
        mousewheel: function (a) {
            return a ? this.bind("mousewheel", a) : this.trigger("mousewheel")
        }, unmousewheel: function (a) {
            return this.unbind("mousewheel", a)
        }
    })
})(jQuery);
/* End */
;
; /* Start:"a:4:{s:4:"full";s:65:"/bitrix/templates/main/js/jquery.fancybox.pack.js?147575796023135";s:6:"source";s:49:"/bitrix/templates/main/js/jquery.fancybox.pack.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
/*! fancyBox v2.1.5 fancyapps.com | fancyapps.com/fancybox/#license */
(function (r, G, f, v) {
    var J = f("html"), n = f(r), p = f(G), b = f.fancybox = function () {
        b.open.apply(this, arguments)
    }, I = navigator.userAgent.match(/msie/i), B = null, s = G.createTouch !== v, t = function (a) {
        return a && a.hasOwnProperty && a instanceof f
    }, q = function (a) {
        return a && "string" === f.type(a)
    }, E = function (a) {
        return q(a) && 0 < a.indexOf("%")
    }, l = function (a, d) {
        var e = parseInt(a, 10) || 0;
        d && E(a) && (e *= b.getViewport()[d] / 100);
        return Math.ceil(e)
    }, w = function (a, b) {
        return l(a, b) + "px"
    };
    f.extend(b, {
        version: "2.1.5",
        defaults: {
            padding: 15,
            margin: 20,
            width: 800,
            height: 600,
            minWidth: 100,
            minHeight: 100,
            maxWidth: 9999,
            maxHeight: 9999,
            pixelRatio: 1,
            autoSize: !0,
            autoHeight: !1,
            autoWidth: !1,
            autoResize: !0,
            autoCenter: !s,
            fitToView: !0,
            aspectRatio: !1,
            topRatio: 0.5,
            leftRatio: 0.5,
            scrolling: "auto",
            wrapCSS: "",
            arrows: !0,
            closeBtn: !0,
            closeClick: !1,
            nextClick: !1,
            mouseWheel: !0,
            autoPlay: !1,
            playSpeed: 3E3,
            preload: 3,
            modal: !1,
            loop: !0,
            ajax: {dataType: "html", headers: {"X-fancyBox": !0}},
            iframe: {scrolling: "auto", preload: !0},
            swf: {wmode: "transparent", allowfullscreen: "true", allowscriptaccess: "always"},
            keys: {
                next: {13: "left", 34: "up", 39: "left", 40: "up"},
                prev: {8: "right", 33: "down", 37: "right", 38: "down"},
                close: [27],
                play: [32],
                toggle: [70]
            },
            direction: {next: "left", prev: "right"},
            scrollOutside: !0,
            index: 0,
            type: null,
            href: null,
            content: null,
            title: null,
            tpl: {
                wrap: '<div class="fancybox-wrap" tabIndex="-1"><div class="fancybox-skin"><div class="fancybox-outer"><div class="fancybox-inner"></div></div></div></div>',
                image: '<img class="fancybox-image" src="{href}" alt="" />',
                iframe: '<iframe id="fancybox-frame{rnd}" name="fancybox-frame{rnd}" class="fancybox-iframe" frameborder="0" vspace="0" hspace="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen' +
                    (I ? ' allowtransparency="true"' : "") + "></iframe>",
                error: '<p class="fancybox-error">The requested content cannot be loaded.<br/>Please try again later.</p>',
                closeBtn: '<a title="Close" class="fancybox-item fancybox-close" href="javascript:;"></a>',
                next: '<a title="Next" class="fancybox-nav fancybox-next" href="javascript:;"><span></span></a>',
                prev: '<a title="Previous" class="fancybox-nav fancybox-prev" href="javascript:;"><span></span></a>'
            },
            openEffect: "fade",
            openSpeed: 250,
            openEasing: "swing",
            openOpacity: !0,
            openMethod: "zoomIn",
            closeEffect: "fade",
            closeSpeed: 250,
            closeEasing: "swing",
            closeOpacity: !0,
            closeMethod: "zoomOut",
            nextEffect: "elastic",
            nextSpeed: 250,
            nextEasing: "swing",
            nextMethod: "changeIn",
            prevEffect: "elastic",
            prevSpeed: 250,
            prevEasing: "swing",
            prevMethod: "changeOut",
            helpers: {overlay: !0, title: !0},
            onCancel: f.noop,
            beforeLoad: f.noop,
            afterLoad: f.noop,
            beforeShow: f.noop,
            afterShow: f.noop,
            beforeChange: f.noop,
            beforeClose: f.noop,
            afterClose: f.noop
        },
        group: {},
        opts: {},
        previous: null,
        coming: null,
        current: null,
        isActive: !1,
        isOpen: !1,
        isOpened: !1,
        wrap: null,
        skin: null,
        outer: null,
        inner: null,
        player: {timer: null, isActive: !1},
        ajaxLoad: null,
        imgPreload: null,
        transitions: {},
        helpers: {},
        open: function (a, d) {
            if (a && (f.isPlainObject(d) || (d = {}), !1 !== b.close(!0))) return f.isArray(a) || (a = t(a) ? f(a).get() : [a]), f.each(a, function (e, c) {
                var k = {}, g, h, j, m, l;
                "object" === f.type(c) && (c.nodeType && (c = f(c)), t(c) ? (k = {
                    href: c.data("fancybox-href") || c.attr("href"),
                    title: c.data("fancybox-title") || c.attr("title"),
                    isDom: !0,
                    element: c
                }, f.metadata && f.extend(!0, k,
                    c.metadata())) : k = c);
                g = d.href || k.href || (q(c) ? c : null);
                h = d.title !== v ? d.title : k.title || "";
                m = (j = d.content || k.content) ? "html" : d.type || k.type;
                !m && k.isDom && (m = c.data("fancybox-type"), m || (m = (m = c.prop("class").match(/fancybox\.(\w+)/)) ? m[1] : null));
                q(g) && (m || (b.isImage(g) ? m = "image" : b.isSWF(g) ? m = "swf" : "#" === g.charAt(0) ? m = "inline" : q(c) && (m = "html", j = c)), "ajax" === m && (l = g.split(/\s+/, 2), g = l.shift(), l = l.shift()));
                j || ("inline" === m ? g ? j = f(q(g) ? g.replace(/.*(?=#[^\s]+$)/, "") : g) : k.isDom && (j = c) : "html" === m ? j = g : !m && (!g &&
                    k.isDom) && (m = "inline", j = c));
                f.extend(k, {href: g, type: m, content: j, title: h, selector: l});
                a[e] = k
            }), b.opts = f.extend(!0, {}, b.defaults, d), d.keys !== v && (b.opts.keys = d.keys ? f.extend({}, b.defaults.keys, d.keys) : !1), b.group = a, b._start(b.opts.index)
        },
        cancel: function () {
            var a = b.coming;
            a && !1 !== b.trigger("onCancel") && (b.hideLoading(), b.ajaxLoad && b.ajaxLoad.abort(), b.ajaxLoad = null, b.imgPreload && (b.imgPreload.onload = b.imgPreload.onerror = null), a.wrap && a.wrap.stop(!0, !0).trigger("onReset").remove(), b.coming = null, b.current ||
            b._afterZoomOut(a))
        },
        close: function (a) {
            b.cancel();
            !1 !== b.trigger("beforeClose") && (b.unbindEvents(), b.isActive && (!b.isOpen || !0 === a ? (f(".fancybox-wrap").stop(!0).trigger("onReset").remove(), b._afterZoomOut()) : (b.isOpen = b.isOpened = !1, b.isClosing = !0, f(".fancybox-item, .fancybox-nav").remove(), b.wrap.stop(!0, !0).removeClass("fancybox-opened"), b.transitions[b.current.closeMethod]())))
        },
        play: function (a) {
            var d = function () {
                clearTimeout(b.player.timer)
            }, e = function () {
                d();
                b.current && b.player.isActive && (b.player.timer =
                    setTimeout(b.next, b.current.playSpeed))
            }, c = function () {
                d();
                p.unbind(".player");
                b.player.isActive = !1;
                b.trigger("onPlayEnd")
            };
            if (!0 === a || !b.player.isActive && !1 !== a) {
                if (b.current && (b.current.loop || b.current.index < b.group.length - 1)) b.player.isActive = !0, p.bind({
                    "onCancel.player beforeClose.player": c,
                    "onUpdate.player": e,
                    "beforeLoad.player": d
                }), e(), b.trigger("onPlayStart")
            } else c()
        },
        next: function (a) {
            var d = b.current;
            d && (q(a) || (a = d.direction.next), b.jumpto(d.index + 1, a, "next"))
        },
        prev: function (a) {
            var d = b.current;
            d && (q(a) || (a = d.direction.prev), b.jumpto(d.index - 1, a, "prev"))
        },
        jumpto: function (a, d, e) {
            var c = b.current;
            c && (a = l(a), b.direction = d || c.direction[a >= c.index ? "next" : "prev"], b.router = e || "jumpto", c.loop && (0 > a && (a = c.group.length + a % c.group.length), a %= c.group.length), c.group[a] !== v && (b.cancel(), b._start(a)))
        },
        reposition: function (a, d) {
            var e = b.current, c = e ? e.wrap : null, k;
            c && (k = b._getPosition(d), a && "scroll" === a.type ? (delete k.position, c.stop(!0, !0).animate(k, 200)) : (c.css(k), e.pos = f.extend({}, e.dim, k)))
        },
        update: function (a) {
            var d =
                a && a.type, e = !d || "orientationchange" === d;
            e && (clearTimeout(B), B = null);
            b.isOpen && !B && (B = setTimeout(function () {
                var c = b.current;
                c && !b.isClosing && (b.wrap.removeClass("fancybox-tmp"), (e || "load" === d || "resize" === d && c.autoResize) && b._setDimension(), "scroll" === d && c.canShrink || b.reposition(a), b.trigger("onUpdate"), B = null)
            }, e && !s ? 0 : 300))
        },
        toggle: function (a) {
            b.isOpen && (b.current.fitToView = "boolean" === f.type(a) ? a : !b.current.fitToView, s && (b.wrap.removeAttr("style").addClass("fancybox-tmp"), b.trigger("onUpdate")),
                b.update())
        },
        hideLoading: function () {
            p.unbind(".loading");
            f("#fancybox-loading").remove()
        },
        showLoading: function () {
            var a, d;
            b.hideLoading();
            a = f('<div id="fancybox-loading"><div></div></div>').click(b.cancel).appendTo("body");
            p.bind("keydown.loading", function (a) {
                if (27 === (a.which || a.keyCode)) a.preventDefault(), b.cancel()
            });
            b.defaults.fixed || (d = b.getViewport(), a.css({
                position: "absolute",
                top: 0.5 * d.h + d.y,
                left: 0.5 * d.w + d.x
            }))
        },
        getViewport: function () {
            var a = b.current && b.current.locked || !1, d = {
                x: n.scrollLeft(),
                y: n.scrollTop()
            };
            a ? (d.w = a[0].clientWidth, d.h = a[0].clientHeight) : (d.w = s && r.innerWidth ? r.innerWidth : n.width(), d.h = s && r.innerHeight ? r.innerHeight : n.height());
            return d
        },
        unbindEvents: function () {
            b.wrap && t(b.wrap) && b.wrap.unbind(".fb");
            p.unbind(".fb");
            n.unbind(".fb")
        },
        bindEvents: function () {
            var a = b.current, d;
            a && (n.bind("orientationchange.fb" + (s ? "" : " resize.fb") + (a.autoCenter && !a.locked ? " scroll.fb" : ""), b.update), (d = a.keys) && p.bind("keydown.fb", function (e) {
                var c = e.which || e.keyCode, k = e.target || e.srcElement;
                if (27 === c && b.coming) return !1;
                !e.ctrlKey && (!e.altKey && !e.shiftKey && !e.metaKey && (!k || !k.type && !f(k).is("[contenteditable]"))) && f.each(d, function (d, k) {
                    if (1 < a.group.length && k[c] !== v) return b[d](k[c]), e.preventDefault(), !1;
                    if (-1 < f.inArray(c, k)) return b[d](), e.preventDefault(), !1
                })
            }), f.fn.mousewheel && a.mouseWheel && b.wrap.bind("mousewheel.fb", function (d, c, k, g) {
                for (var h = f(d.target || null), j = !1; h.length && !j && !h.is(".fancybox-skin") && !h.is(".fancybox-wrap");) j = h[0] && !(h[0].style.overflow && "hidden" === h[0].style.overflow) &&
                    (h[0].clientWidth && h[0].scrollWidth > h[0].clientWidth || h[0].clientHeight && h[0].scrollHeight > h[0].clientHeight), h = f(h).parent();
                if (0 !== c && !j && 1 < b.group.length && !a.canShrink) {
                    if (0 < g || 0 < k) b.prev(0 < g ? "down" : "left"); else if (0 > g || 0 > k) b.next(0 > g ? "up" : "right");
                    d.preventDefault()
                }
            }))
        },
        trigger: function (a, d) {
            var e, c = d || b.coming || b.current;
            if (c) {
                f.isFunction(c[a]) && (e = c[a].apply(c, Array.prototype.slice.call(arguments, 1)));
                if (!1 === e) return !1;
                c.helpers && f.each(c.helpers, function (d, e) {
                    if (e && b.helpers[d] && f.isFunction(b.helpers[d][a])) b.helpers[d][a](f.extend(!0,
                        {}, b.helpers[d].defaults, e), c)
                });
                p.trigger(a)
            }
        },
        isImage: function (a) {
            return q(a) && a.match(/(^data:image\/.*,)|(\.(jp(e|g|eg)|gif|png|bmp|webp|svg)((\?|#).*)?$)/i)
        },
        isSWF: function (a) {
            return q(a) && a.match(/\.(swf)((\?|#).*)?$/i)
        },
        _start: function (a) {
            var d = {}, e, c;
            a = l(a);
            e = b.group[a] || null;
            if (!e) return !1;
            d = f.extend(!0, {}, b.opts, e);
            e = d.margin;
            c = d.padding;
            "number" === f.type(e) && (d.margin = [e, e, e, e]);
            "number" === f.type(c) && (d.padding = [c, c, c, c]);
            d.modal && f.extend(!0, d, {
                closeBtn: !1, closeClick: !1, nextClick: !1, arrows: !1,
                mouseWheel: !1, keys: null, helpers: {overlay: {closeClick: !1}}
            });
            d.autoSize && (d.autoWidth = d.autoHeight = !0);
            "auto" === d.width && (d.autoWidth = !0);
            "auto" === d.height && (d.autoHeight = !0);
            d.group = b.group;
            d.index = a;
            b.coming = d;
            if (!1 === b.trigger("beforeLoad")) b.coming = null; else {
                c = d.type;
                e = d.href;
                if (!c) return b.coming = null, b.current && b.router && "jumpto" !== b.router ? (b.current.index = a, b[b.router](b.direction)) : !1;
                b.isActive = !0;
                if ("image" === c || "swf" === c) d.autoHeight = d.autoWidth = !1, d.scrolling = "visible";
                "image" === c && (d.aspectRatio =
                    !0);
                "iframe" === c && s && (d.scrolling = "scroll");
                d.wrap = f(d.tpl.wrap).addClass("fancybox-" + (s ? "mobile" : "desktop") + " fancybox-type-" + c + " fancybox-tmp " + d.wrapCSS).appendTo(d.parent || "body");
                f.extend(d, {
                    skin: f(".fancybox-skin", d.wrap),
                    outer: f(".fancybox-outer", d.wrap),
                    inner: f(".fancybox-inner", d.wrap)
                });
                f.each(["Top", "Right", "Bottom", "Left"], function (a, b) {
                    d.skin.css("padding" + b, w(d.padding[a]))
                });
                b.trigger("onReady");
                if ("inline" === c || "html" === c) {
                    if (!d.content || !d.content.length) return b._error("content")
                } else if (!e) return b._error("href");
                "image" === c ? b._loadImage() : "ajax" === c ? b._loadAjax() : "iframe" === c ? b._loadIframe() : b._afterLoad()
            }
        },
        _error: function (a) {
            f.extend(b.coming, {
                type: "html",
                autoWidth: !0,
                autoHeight: !0,
                minWidth: 0,
                minHeight: 0,
                scrolling: "no",
                hasError: a,
                content: b.coming.tpl.error
            });
            b._afterLoad()
        },
        _loadImage: function () {
            var a = b.imgPreload = new Image;
            a.onload = function () {
                this.onload = this.onerror = null;
                b.coming.width = this.width / b.opts.pixelRatio;
                b.coming.height = this.height / b.opts.pixelRatio;
                b._afterLoad()
            };
            a.onerror = function () {
                this.onload =
                    this.onerror = null;
                b._error("image")
            };
            a.src = b.coming.href;
            !0 !== a.complete && b.showLoading()
        },
        _loadAjax: function () {
            var a = b.coming;
            b.showLoading();
            b.ajaxLoad = f.ajax(f.extend({}, a.ajax, {
                url: a.href, error: function (a, e) {
                    b.coming && "abort" !== e ? b._error("ajax", a) : b.hideLoading()
                }, success: function (d, e) {
                    "success" === e && (a.content = d, b._afterLoad())
                }
            }))
        },
        _loadIframe: function () {
            var a = b.coming,
                d = f(a.tpl.iframe.replace(/\{rnd\}/g, (new Date).getTime())).attr("scrolling", s ? "auto" : a.iframe.scrolling).attr("src", a.href);
            f(a.wrap).bind("onReset", function () {
                try {
                    f(this).find("iframe").hide().attr("src", "//about:blank").end().empty()
                } catch (a) {
                }
            });
            a.iframe.preload && (b.showLoading(), d.one("load", function () {
                f(this).data("ready", 1);
                s || f(this).bind("load.fb", b.update);
                f(this).parents(".fancybox-wrap").width("100%").removeClass("fancybox-tmp").show();
                b._afterLoad()
            }));
            a.content = d.appendTo(a.inner);
            a.iframe.preload || b._afterLoad()
        },
        _preloadImages: function () {
            var a = b.group, d = b.current, e = a.length, c = d.preload ? Math.min(d.preload,
                e - 1) : 0, f, g;
            for (g = 1; g <= c; g += 1) f = a[(d.index + g) % e], "image" === f.type && f.href && ((new Image).src = f.href)
        },
        _afterLoad: function () {
            var a = b.coming, d = b.current, e, c, k, g, h;
            b.hideLoading();
            if (a && !1 !== b.isActive) if (!1 === b.trigger("afterLoad", a, d)) a.wrap.stop(!0).trigger("onReset").remove(), b.coming = null; else {
                d && (b.trigger("beforeChange", d), d.wrap.stop(!0).removeClass("fancybox-opened").find(".fancybox-item, .fancybox-nav").remove());
                b.unbindEvents();
                e = a.content;
                c = a.type;
                k = a.scrolling;
                f.extend(b, {
                    wrap: a.wrap, skin: a.skin,
                    outer: a.outer, inner: a.inner, current: a, previous: d
                });
                g = a.href;
                switch (c) {
                    case "inline":
                    case "ajax":
                    case "html":
                        a.selector ? e = f("<div>").html(e).find(a.selector) : t(e) && (e.data("fancybox-placeholder") || e.data("fancybox-placeholder", f('<div class="fancybox-placeholder"></div>').insertAfter(e).hide()), e = e.show().detach(), a.wrap.bind("onReset", function () {
                            f(this).find(e).length && e.hide().replaceAll(e.data("fancybox-placeholder")).data("fancybox-placeholder", !1)
                        }));
                        break;
                    case "image":
                        e = a.tpl.image.replace("{href}",
                            g);
                        break;
                    case "swf":
                        e = '<object id="fancybox-swf" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="100%" height="100%"><param name="movie" value="' + g + '"></param>', h = "", f.each(a.swf, function (a, b) {
                            e += '<param name="' + a + '" value="' + b + '"></param>';
                            h += " " + a + '="' + b + '"'
                        }), e += '<embed src="' + g + '" type="application/x-shockwave-flash" width="100%" height="100%"' + h + "></embed></object>"
                }
                (!t(e) || !e.parent().is(a.inner)) && a.inner.append(e);
                b.trigger("beforeShow");
                a.inner.css("overflow", "yes" === k ? "scroll" :
                    "no" === k ? "hidden" : k);
                b._setDimension();
                b.reposition();
                b.isOpen = !1;
                b.coming = null;
                b.bindEvents();
                if (b.isOpened) {
                    if (d.prevMethod) b.transitions[d.prevMethod]()
                } else f(".fancybox-wrap").not(a.wrap).stop(!0).trigger("onReset").remove();
                b.transitions[b.isOpened ? a.nextMethod : a.openMethod]();
                b._preloadImages()
            }
        },
        _setDimension: function () {
            var a = b.getViewport(), d = 0, e = !1, c = !1, e = b.wrap, k = b.skin, g = b.inner, h = b.current,
                c = h.width, j = h.height, m = h.minWidth, u = h.minHeight, n = h.maxWidth, p = h.maxHeight,
                s = h.scrolling, q = h.scrollOutside ?
                h.scrollbarWidth : 0, x = h.margin, y = l(x[1] + x[3]), r = l(x[0] + x[2]), v, z, t, C, A, F, B, D, H;
            e.add(k).add(g).width("auto").height("auto").removeClass("fancybox-tmp");
            x = l(k.outerWidth(!0) - k.width());
            v = l(k.outerHeight(!0) - k.height());
            z = y + x;
            t = r + v;
            C = E(c) ? (a.w - z) * l(c) / 100 : c;
            A = E(j) ? (a.h - t) * l(j) / 100 : j;
            if ("iframe" === h.type) {
                if (H = h.content, h.autoHeight && 1 === H.data("ready")) try {
                    H[0].contentWindow.document.location && (g.width(C).height(9999), F = H.contents().find("body"), q && F.css("overflow-x", "hidden"), A = F.outerHeight(!0))
                } catch (G) {
                }
            } else if (h.autoWidth ||
                h.autoHeight) g.addClass("fancybox-tmp"), h.autoWidth || g.width(C), h.autoHeight || g.height(A), h.autoWidth && (C = g.width()), h.autoHeight && (A = g.height()), g.removeClass("fancybox-tmp");
            c = l(C);
            j = l(A);
            D = C / A;
            m = l(E(m) ? l(m, "w") - z : m);
            n = l(E(n) ? l(n, "w") - z : n);
            u = l(E(u) ? l(u, "h") - t : u);
            p = l(E(p) ? l(p, "h") - t : p);
            F = n;
            B = p;
            h.fitToView && (n = Math.min(a.w - z, n), p = Math.min(a.h - t, p));
            z = a.w - y;
            r = a.h - r;
            h.aspectRatio ? (c > n && (c = n, j = l(c / D)), j > p && (j = p, c = l(j * D)), c < m && (c = m, j = l(c / D)), j < u && (j = u, c = l(j * D))) : (c = Math.max(m, Math.min(c, n)), h.autoHeight &&
            "iframe" !== h.type && (g.width(c), j = g.height()), j = Math.max(u, Math.min(j, p)));
            if (h.fitToView) if (g.width(c).height(j), e.width(c + x), a = e.width(), y = e.height(), h.aspectRatio) for (; (a > z || y > r) && (c > m && j > u) && !(19 < d++);) j = Math.max(u, Math.min(p, j - 10)), c = l(j * D), c < m && (c = m, j = l(c / D)), c > n && (c = n, j = l(c / D)), g.width(c).height(j), e.width(c + x), a = e.width(), y = e.height(); else c = Math.max(m, Math.min(c, c - (a - z))), j = Math.max(u, Math.min(j, j - (y - r)));
            q && ("auto" === s && j < A && c + x + q < z) && (c += q);
            g.width(c).height(j);
            e.width(c + x);
            a = e.width();
            y = e.height();
            e = (a > z || y > r) && c > m && j > u;
            c = h.aspectRatio ? c < F && j < B && c < C && j < A : (c < F || j < B) && (c < C || j < A);
            f.extend(h, {
                dim: {width: w(a), height: w(y)},
                origWidth: C,
                origHeight: A,
                canShrink: e,
                canExpand: c,
                wPadding: x,
                hPadding: v,
                wrapSpace: y - k.outerHeight(!0),
                skinSpace: k.height() - j
            });
            !H && (h.autoHeight && j > u && j < p && !c) && g.height("auto")
        },
        _getPosition: function (a) {
            var d = b.current, e = b.getViewport(), c = d.margin, f = b.wrap.width() + c[1] + c[3],
                g = b.wrap.height() + c[0] + c[2], c = {position: "absolute", top: c[0], left: c[3]};
            d.autoCenter && d.fixed &&
            !a && g <= e.h && f <= e.w ? c.position = "fixed" : d.locked || (c.top += e.y, c.left += e.x);
            c.top = w(Math.max(c.top, c.top + (e.h - g) * d.topRatio));
            c.left = w(Math.max(c.left, c.left + (e.w - f) * d.leftRatio));
            return c
        },
        _afterZoomIn: function () {
            var a = b.current;
            a && (b.isOpen = b.isOpened = !0, b.wrap.css("overflow", "visible").addClass("fancybox-opened"), b.update(), (a.closeClick || a.nextClick && 1 < b.group.length) && b.inner.css("cursor", "pointer").bind("click.fb", function (d) {
                !f(d.target).is("a") && !f(d.target).parent().is("a") && (d.preventDefault(),
                    b[a.closeClick ? "close" : "next"]())
            }), a.closeBtn && f(a.tpl.closeBtn).appendTo(b.skin).bind("click.fb", function (a) {
                a.preventDefault();
                b.close()
            }), a.arrows && 1 < b.group.length && ((a.loop || 0 < a.index) && f(a.tpl.prev).appendTo(b.outer).bind("click.fb", b.prev), (a.loop || a.index < b.group.length - 1) && f(a.tpl.next).appendTo(b.outer).bind("click.fb", b.next)), b.trigger("afterShow"), !a.loop && a.index === a.group.length - 1 ? b.play(!1) : b.opts.autoPlay && !b.player.isActive && (b.opts.autoPlay = !1, b.play()))
        },
        _afterZoomOut: function (a) {
            a =
                a || b.current;
            f(".fancybox-wrap").trigger("onReset").remove();
            f.extend(b, {
                group: {},
                opts: {},
                router: !1,
                current: null,
                isActive: !1,
                isOpened: !1,
                isOpen: !1,
                isClosing: !1,
                wrap: null,
                skin: null,
                outer: null,
                inner: null
            });
            b.trigger("afterClose", a)
        }
    });
    b.transitions = {
        getOrigPosition: function () {
            var a = b.current, d = a.element, e = a.orig, c = {}, f = 50, g = 50, h = a.hPadding, j = a.wPadding,
                m = b.getViewport();
            !e && (a.isDom && d.is(":visible")) && (e = d.find("img:first"), e.length || (e = d));
            t(e) ? (c = e.offset(), e.is("img") && (f = e.outerWidth(), g = e.outerHeight())) :
                (c.top = m.y + (m.h - g) * a.topRatio, c.left = m.x + (m.w - f) * a.leftRatio);
            if ("fixed" === b.wrap.css("position") || a.locked) c.top -= m.y, c.left -= m.x;
            return c = {
                top: w(c.top - h * a.topRatio),
                left: w(c.left - j * a.leftRatio),
                width: w(f + j),
                height: w(g + h)
            }
        }, step: function (a, d) {
            var e, c, f = d.prop;
            c = b.current;
            var g = c.wrapSpace, h = c.skinSpace;
            if ("width" === f || "height" === f) e = d.end === d.start ? 1 : (a - d.start) / (d.end - d.start), b.isClosing && (e = 1 - e), c = "width" === f ? c.wPadding : c.hPadding, c = a - c, b.skin[f](l("width" === f ? c : c - g * e)), b.inner[f](l("width" ===
            f ? c : c - g * e - h * e))
        }, zoomIn: function () {
            var a = b.current, d = a.pos, e = a.openEffect, c = "elastic" === e, k = f.extend({opacity: 1}, d);
            delete k.position;
            c ? (d = this.getOrigPosition(), a.openOpacity && (d.opacity = 0.1)) : "fade" === e && (d.opacity = 0.1);
            b.wrap.css(d).animate(k, {
                duration: "none" === e ? 0 : a.openSpeed,
                easing: a.openEasing,
                step: c ? this.step : null,
                complete: b._afterZoomIn
            })
        }, zoomOut: function () {
            var a = b.current, d = a.closeEffect, e = "elastic" === d, c = {opacity: 0.1};
            e && (c = this.getOrigPosition(), a.closeOpacity && (c.opacity = 0.1));
            b.wrap.animate(c,
                {
                    duration: "none" === d ? 0 : a.closeSpeed,
                    easing: a.closeEasing,
                    step: e ? this.step : null,
                    complete: b._afterZoomOut
                })
        }, changeIn: function () {
            var a = b.current, d = a.nextEffect, e = a.pos, c = {opacity: 1}, f = b.direction, g;
            e.opacity = 0.1;
            "elastic" === d && (g = "down" === f || "up" === f ? "top" : "left", "down" === f || "right" === f ? (e[g] = w(l(e[g]) - 200), c[g] = "+=200px") : (e[g] = w(l(e[g]) + 200), c[g] = "-=200px"));
            "none" === d ? b._afterZoomIn() : b.wrap.css(e).animate(c, {
                duration: a.nextSpeed,
                easing: a.nextEasing,
                complete: b._afterZoomIn
            })
        }, changeOut: function () {
            var a =
                b.previous, d = a.prevEffect, e = {opacity: 0.1}, c = b.direction;
            "elastic" === d && (e["down" === c || "up" === c ? "top" : "left"] = ("up" === c || "left" === c ? "-" : "+") + "=200px");
            a.wrap.animate(e, {
                duration: "none" === d ? 0 : a.prevSpeed, easing: a.prevEasing, complete: function () {
                    f(this).trigger("onReset").remove()
                }
            })
        }
    };
    b.helpers.overlay = {
        defaults: {closeClick: !0, speedOut: 200, showEarly: !0, css: {}, locked: !s, fixed: !0},
        overlay: null,
        fixed: !1,
        el: f("html"),
        create: function (a) {
            a = f.extend({}, this.defaults, a);
            this.overlay && this.close();
            this.overlay =
                f('<div class="fancybox-overlay"></div>').appendTo(b.coming ? b.coming.parent : a.parent);
            this.fixed = !1;
            a.fixed && b.defaults.fixed && (this.overlay.addClass("fancybox-overlay-fixed"), this.fixed = !0)
        },
        open: function (a) {
            var d = this;
            a = f.extend({}, this.defaults, a);
            this.overlay ? this.overlay.unbind(".overlay").width("auto").height("auto") : this.create(a);
            this.fixed || (n.bind("resize.overlay", f.proxy(this.update, this)), this.update());
            a.closeClick && this.overlay.bind("click.overlay", function (a) {
                if (f(a.target).hasClass("fancybox-overlay")) return b.isActive ?
                    b.close() : d.close(), !1
            });
            this.overlay.css(a.css).show()
        },
        close: function () {
            var a, b;
            n.unbind("resize.overlay");
            this.el.hasClass("fancybox-lock") && (f(".fancybox-margin").removeClass("fancybox-margin"), a = n.scrollTop(), b = n.scrollLeft(), this.el.removeClass("fancybox-lock"), n.scrollTop(a).scrollLeft(b));
            f(".fancybox-overlay").remove().hide();
            f.extend(this, {overlay: null, fixed: !1})
        },
        update: function () {
            var a = "100%", b;
            this.overlay.width(a).height("100%");
            I ? (b = Math.max(G.documentElement.offsetWidth, G.body.offsetWidth),
            p.width() > b && (a = p.width())) : p.width() > n.width() && (a = p.width());
            this.overlay.width(a).height(p.height())
        },
        onReady: function (a, b) {
            var e = this.overlay;
            f(".fancybox-overlay").stop(!0, !0);
            e || this.create(a);
            a.locked && (this.fixed && b.fixed) && (e || (this.margin = p.height() > n.height() ? f("html").css("margin-right").replace("px", "") : !1), b.locked = this.overlay.append(b.wrap), b.fixed = !1);
            !0 === a.showEarly && this.beforeShow.apply(this, arguments)
        },
        beforeShow: function (a, b) {
            var e, c;
            b.locked && (!1 !== this.margin && (f("*").filter(function () {
                return "fixed" ===
                    f(this).css("position") && !f(this).hasClass("fancybox-overlay") && !f(this).hasClass("fancybox-wrap")
            }).addClass("fancybox-margin"), this.el.addClass("fancybox-margin")), e = n.scrollTop(), c = n.scrollLeft(), this.el.addClass("fancybox-lock"), n.scrollTop(e).scrollLeft(c));
            this.open(a)
        },
        onUpdate: function () {
            this.fixed || this.update()
        },
        afterClose: function (a) {
            this.overlay && !b.coming && this.overlay.fadeOut(a.speedOut, f.proxy(this.close, this))
        }
    };
    b.helpers.title = {
        defaults: {type: "float", position: "bottom"}, beforeShow: function (a) {
            var d =
                b.current, e = d.title, c = a.type;
            f.isFunction(e) && (e = e.call(d.element, d));
            if (q(e) && "" !== f.trim(e)) {
                d = f('<div class="fancybox-title fancybox-title-' + c + '-wrap">' + e + "</div>");
                switch (c) {
                    case "inside":
                        c = b.skin;
                        break;
                    case "outside":
                        c = b.wrap;
                        break;
                    case "over":
                        c = b.inner;
                        break;
                    default:
                        c = b.skin, d.appendTo("body"), I && d.width(d.width()), d.wrapInner('<span class="child"></span>'), b.current.margin[2] += Math.abs(l(d.css("margin-bottom")))
                }
                d["top" === a.position ? "prependTo" : "appendTo"](c)
            }
        }
    };
    f.fn.fancybox = function (a) {
        var d,
            e = f(this), c = this.selector || "", k = function (g) {
                var h = f(this).blur(), j = d, k, l;
                !g.ctrlKey && (!g.altKey && !g.shiftKey && !g.metaKey) && !h.is(".fancybox-wrap") && (k = a.groupAttr || "data-fancybox-group", l = h.attr(k), l || (k = "rel", l = h.get(0)[k]), l && ("" !== l && "nofollow" !== l) && (h = c.length ? f(c) : e, h = h.filter("[" + k + '="' + l + '"]'), j = h.index(this)), a.index = j, !1 !== b.open(h, a) && g.preventDefault())
            };
        a = a || {};
        d = a.index || 0;
        !c || !1 === a.live ? e.unbind("click.fb-start").bind("click.fb-start", k) : p.undelegate(c, "click.fb-start").delegate(c +
            ":not('.fancybox-item, .fancybox-nav')", "click.fb-start", k);
        this.filter("[data-fancybox-start=1]").trigger("click");
        return this
    };
    p.ready(function () {
        var a, d;
        f.scrollbarWidth === v && (f.scrollbarWidth = function () {
            var a = f('<div style="width:50px;height:50px;overflow:auto"><div/></div>').appendTo("body"),
                b = a.children(), b = b.innerWidth() - b.height(99).innerWidth();
            a.remove();
            return b
        });
        if (f.support.fixedPosition === v) {
            a = f.support;
            d = f('<div style="position:fixed;top:20px;"></div>').appendTo("body");
            var e = 20 ===
                d[0].offsetTop || 15 === d[0].offsetTop;
            d.remove();
            a.fixedPosition = e
        }
        f.extend(b.defaults, {scrollbarWidth: f.scrollbarWidth(), fixed: f.support.fixedPosition, parent: f("body")});
        a = f(r).width();
        J.addClass("fancybox-lock-test");
        d = f(r).width();
        J.removeClass("fancybox-lock-test");
        f("<style type='text/css'>.fancybox-margin{margin-right:" + (d - a) + "px;}</style>").appendTo("head")
    })
})(window, document, jQuery);
/* End */
;
; /* Start:"a:4:{s:4:"full";s:59:"/bitrix/templates/main/js/jquery-ui.min.js?1475757960156316";s:6:"source";s:42:"/bitrix/templates/main/js/jquery-ui.min.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
/*! jQuery UI - v1.11.4 - 2015-10-07
* http://jqueryui.com
* Includes: core.js, widget.js, mouse.js, position.js, draggable.js, droppable.js, resizable.js, selectable.js, sortable.js, autocomplete.js, button.js, datepicker.js, menu.js, tooltip.js
* Copyright 2015 jQuery Foundation and other contributors; Licensed MIT */

(function (e) {
    "function" == typeof define && define.amd ? define(["jquery"], e) : e(jQuery)
})(function (e) {
    function t(t, s) {
        var n, a, o, r = t.nodeName.toLowerCase();
        return "area" === r ? (n = t.parentNode, a = n.name, t.href && a && "map" === n.nodeName.toLowerCase() ? (o = e("img[usemap='#" + a + "']")[0], !!o && i(o)) : !1) : (/^(input|select|textarea|button|object)$/.test(r) ? !t.disabled : "a" === r ? t.href || s : s) && i(t)
    }

    function i(t) {
        return e.expr.filters.visible(t) && !e(t).parents().addBack().filter(function () {
            return "hidden" === e.css(this, "visibility")
        }).length
    }

    function s(e) {
        for (var t, i; e.length && e[0] !== document;) {
            if (t = e.css("position"), ("absolute" === t || "relative" === t || "fixed" === t) && (i = parseInt(e.css("zIndex"), 10), !isNaN(i) && 0 !== i)) return i;
            e = e.parent()
        }
        return 0
    }

    function n() {
        this._curInst = null, this._keyEvent = !1, this._disabledInputs = [], this._datepickerShowing = !1, this._inDialog = !1, this._mainDivId = "ui-datepicker-div", this._inlineClass = "ui-datepicker-inline", this._appendClass = "ui-datepicker-append", this._triggerClass = "ui-datepicker-trigger", this._dialogClass = "ui-datepicker-dialog", this._disableClass = "ui-datepicker-disabled", this._unselectableClass = "ui-datepicker-unselectable", this._currentClass = "ui-datepicker-current-day", this._dayOverClass = "ui-datepicker-days-cell-over", this.regional = [], this.regional[""] = {
            closeText: "Done",
            prevText: "Prev",
            nextText: "Next",
            currentText: "Today",
            monthNames: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            monthNamesShort: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            dayNames: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            dayNamesShort: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            dayNamesMin: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"],
            weekHeader: "Wk",
            dateFormat: "mm/dd/yy",
            firstDay: 0,
            isRTL: !1,
            showMonthAfterYear: !1,
            yearSuffix: ""
        }, this._defaults = {
            showOn: "focus",
            showAnim: "fadeIn",
            showOptions: {},
            defaultDate: null,
            appendText: "",
            buttonText: "...",
            buttonImage: "",
            buttonImageOnly: !1,
            hideIfNoPrevNext: !1,
            navigationAsDateFormat: !1,
            gotoCurrent: !1,
            changeMonth: !1,
            changeYear: !1,
            yearRange: "c-10:c+10",
            showOtherMonths: !1,
            selectOtherMonths: !1,
            showWeek: !1,
            calculateWeek: this.iso8601Week,
            shortYearCutoff: "+10",
            minDate: null,
            maxDate: null,
            duration: "fast",
            beforeShowDay: null,
            beforeShow: null,
            onSelect: null,
            onChangeMonthYear: null,
            onClose: null,
            numberOfMonths: 1,
            showCurrentAtPos: 0,
            stepMonths: 1,
            stepBigMonths: 12,
            altField: "",
            altFormat: "",
            constrainInput: !0,
            showButtonPanel: !1,
            autoSize: !1,
            disabled: !1
        }, e.extend(this._defaults, this.regional[""]), this.regional.en = e.extend(!0, {}, this.regional[""]), this.regional["en-US"] = e.extend(!0, {}, this.regional.en), this.dpDiv = a(e("<div id='" + this._mainDivId + "' class='ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all'></div>"))
    }

    function a(t) {
        var i = "button, .ui-datepicker-prev, .ui-datepicker-next, .ui-datepicker-calendar td a";
        return t.delegate(i, "mouseout", function () {
            e(this).removeClass("ui-state-hover"), -1 !== this.className.indexOf("ui-datepicker-prev") && e(this).removeClass("ui-datepicker-prev-hover"), -1 !== this.className.indexOf("ui-datepicker-next") && e(this).removeClass("ui-datepicker-next-hover")
        }).delegate(i, "mouseover", o)
    }

    function o() {
        e.datepicker._isDisabledDatepicker(g.inline ? g.dpDiv.parent()[0] : g.input[0]) || (e(this).parents(".ui-datepicker-calendar").find("a").removeClass("ui-state-hover"), e(this).addClass("ui-state-hover"), -1 !== this.className.indexOf("ui-datepicker-prev") && e(this).addClass("ui-datepicker-prev-hover"), -1 !== this.className.indexOf("ui-datepicker-next") && e(this).addClass("ui-datepicker-next-hover"))
    }

    function r(t, i) {
        e.extend(t, i);
        for (var s in i) null == i[s] && (t[s] = i[s]);
        return t
    }

    e.ui = e.ui || {}, e.extend(e.ui, {
        version: "1.11.4",
        keyCode: {
            BACKSPACE: 8,
            COMMA: 188,
            DELETE: 46,
            DOWN: 40,
            END: 35,
            ENTER: 13,
            ESCAPE: 27,
            HOME: 36,
            LEFT: 37,
            PAGE_DOWN: 34,
            PAGE_UP: 33,
            PERIOD: 190,
            RIGHT: 39,
            SPACE: 32,
            TAB: 9,
            UP: 38
        }
    }), e.fn.extend({
        scrollParent: function (t) {
            var i = this.css("position"), s = "absolute" === i, n = t ? /(auto|scroll|hidden)/ : /(auto|scroll)/,
                a = this.parents().filter(function () {
                    var t = e(this);
                    return s && "static" === t.css("position") ? !1 : n.test(t.css("overflow") + t.css("overflow-y") + t.css("overflow-x"))
                }).eq(0);
            return "fixed" !== i && a.length ? a : e(this[0].ownerDocument || document)
        }, uniqueId: function () {
            var e = 0;
            return function () {
                return this.each(function () {
                    this.id || (this.id = "ui-id-" + ++e)
                })
            }
        }(), removeUniqueId: function () {
            return this.each(function () {
                /^ui-id-\d+$/.test(this.id) && e(this).removeAttr("id")
            })
        }
    }), e.extend(e.expr[":"], {
        data: e.expr.createPseudo ? e.expr.createPseudo(function (t) {
            return function (i) {
                return !!e.data(i, t)
            }
        }) : function (t, i, s) {
            return !!e.data(t, s[3])
        }, focusable: function (i) {
            return t(i, !isNaN(e.attr(i, "tabindex")))
        }, tabbable: function (i) {
            var s = e.attr(i, "tabindex"), n = isNaN(s);
            return (n || s >= 0) && t(i, !n)
        }
    }), e("<a>").outerWidth(1).jquery || e.each(["Width", "Height"], function (t, i) {
        function s(t, i, s, a) {
            return e.each(n, function () {
                i -= parseFloat(e.css(t, "padding" + this)) || 0, s && (i -= parseFloat(e.css(t, "border" + this + "Width")) || 0), a && (i -= parseFloat(e.css(t, "margin" + this)) || 0)
            }), i
        }

        var n = "Width" === i ? ["Left", "Right"] : ["Top", "Bottom"], a = i.toLowerCase(), o = {
            innerWidth: e.fn.innerWidth,
            innerHeight: e.fn.innerHeight,
            outerWidth: e.fn.outerWidth,
            outerHeight: e.fn.outerHeight
        };
        e.fn["inner" + i] = function (t) {
            return void 0 === t ? o["inner" + i].call(this) : this.each(function () {
                e(this).css(a, s(this, t) + "px")
            })
        }, e.fn["outer" + i] = function (t, n) {
            return "number" != typeof t ? o["outer" + i].call(this, t) : this.each(function () {
                e(this).css(a, s(this, t, !0, n) + "px")
            })
        }
    }), e.fn.addBack || (e.fn.addBack = function (e) {
        return this.add(null == e ? this.prevObject : this.prevObject.filter(e))
    }), e("<a>").data("a-b", "a").removeData("a-b").data("a-b") && (e.fn.removeData = function (t) {
        return function (i) {
            return arguments.length ? t.call(this, e.camelCase(i)) : t.call(this)
        }
    }(e.fn.removeData)), e.ui.ie = !!/msie [\w.]+/.exec(navigator.userAgent.toLowerCase()), e.fn.extend({
        focus: function (t) {
            return function (i, s) {
                return "number" == typeof i ? this.each(function () {
                    var t = this;
                    setTimeout(function () {
                        e(t).focus(), s && s.call(t)
                    }, i)
                }) : t.apply(this, arguments)
            }
        }(e.fn.focus), disableSelection: function () {
            var e = "onselectstart" in document.createElement("div") ? "selectstart" : "mousedown";
            return function () {
                return this.bind(e + ".ui-disableSelection", function (e) {
                    e.preventDefault()
                })
            }
        }(), enableSelection: function () {
            return this.unbind(".ui-disableSelection")
        }, zIndex: function (t) {
            if (void 0 !== t) return this.css("zIndex", t);
            if (this.length) for (var i, s, n = e(this[0]); n.length && n[0] !== document;) {
                if (i = n.css("position"), ("absolute" === i || "relative" === i || "fixed" === i) && (s = parseInt(n.css("zIndex"), 10), !isNaN(s) && 0 !== s)) return s;
                n = n.parent()
            }
            return 0
        }
    }), e.ui.plugin = {
        add: function (t, i, s) {
            var n, a = e.ui[t].prototype;
            for (n in s) a.plugins[n] = a.plugins[n] || [], a.plugins[n].push([i, s[n]])
        }, call: function (e, t, i, s) {
            var n, a = e.plugins[t];
            if (a && (s || e.element[0].parentNode && 11 !== e.element[0].parentNode.nodeType)) for (n = 0; a.length > n; n++) e.options[a[n][0]] && a[n][1].apply(e.element, i)
        }
    };
    var h = 0, l = Array.prototype.slice;
    e.cleanData = function (t) {
        return function (i) {
            var s, n, a;
            for (a = 0; null != (n = i[a]); a++) try {
                s = e._data(n, "events"), s && s.remove && e(n).triggerHandler("remove")
            } catch (o) {
            }
            t(i)
        }
    }(e.cleanData), e.widget = function (t, i, s) {
        var n, a, o, r, h = {}, l = t.split(".")[0];
        return t = t.split(".")[1], n = l + "-" + t, s || (s = i, i = e.Widget), e.expr[":"][n.toLowerCase()] = function (t) {
            return !!e.data(t, n)
        }, e[l] = e[l] || {}, a = e[l][t], o = e[l][t] = function (e, t) {
            return this._createWidget ? (arguments.length && this._createWidget(e, t), void 0) : new o(e, t)
        }, e.extend(o, a, {
            version: s.version,
            _proto: e.extend({}, s),
            _childConstructors: []
        }), r = new i, r.options = e.widget.extend({}, r.options), e.each(s, function (t, s) {
            return e.isFunction(s) ? (h[t] = function () {
                var e = function () {
                    return i.prototype[t].apply(this, arguments)
                }, n = function (e) {
                    return i.prototype[t].apply(this, e)
                };
                return function () {
                    var t, i = this._super, a = this._superApply;
                    return this._super = e, this._superApply = n, t = s.apply(this, arguments), this._super = i, this._superApply = a, t
                }
            }(), void 0) : (h[t] = s, void 0)
        }), o.prototype = e.widget.extend(r, {widgetEventPrefix: a ? r.widgetEventPrefix || t : t}, h, {
            constructor: o,
            namespace: l,
            widgetName: t,
            widgetFullName: n
        }), a ? (e.each(a._childConstructors, function (t, i) {
            var s = i.prototype;
            e.widget(s.namespace + "." + s.widgetName, o, i._proto)
        }), delete a._childConstructors) : i._childConstructors.push(o), e.widget.bridge(t, o), o
    }, e.widget.extend = function (t) {
        for (var i, s, n = l.call(arguments, 1), a = 0, o = n.length; o > a; a++) for (i in n[a]) s = n[a][i], n[a].hasOwnProperty(i) && void 0 !== s && (t[i] = e.isPlainObject(s) ? e.isPlainObject(t[i]) ? e.widget.extend({}, t[i], s) : e.widget.extend({}, s) : s);
        return t
    }, e.widget.bridge = function (t, i) {
        var s = i.prototype.widgetFullName || t;
        e.fn[t] = function (n) {
            var a = "string" == typeof n, o = l.call(arguments, 1), r = this;
            return a ? this.each(function () {
                var i, a = e.data(this, s);
                return "instance" === n ? (r = a, !1) : a ? e.isFunction(a[n]) && "_" !== n.charAt(0) ? (i = a[n].apply(a, o), i !== a && void 0 !== i ? (r = i && i.jquery ? r.pushStack(i.get()) : i, !1) : void 0) : e.error("no such method '" + n + "' for " + t + " widget instance") : e.error("cannot call methods on " + t + " prior to initialization; " + "attempted to call method '" + n + "'")
            }) : (o.length && (n = e.widget.extend.apply(null, [n].concat(o))), this.each(function () {
                var t = e.data(this, s);
                t ? (t.option(n || {}), t._init && t._init()) : e.data(this, s, new i(n, this))
            })), r
        }
    }, e.Widget = function () {
    }, e.Widget._childConstructors = [], e.Widget.prototype = {
        widgetName: "widget",
        widgetEventPrefix: "",
        defaultElement: "<div>",
        options: {disabled: !1, create: null},
        _createWidget: function (t, i) {
            i = e(i || this.defaultElement || this)[0], this.element = e(i), this.uuid = h++, this.eventNamespace = "." + this.widgetName + this.uuid, this.bindings = e(), this.hoverable = e(), this.focusable = e(), i !== this && (e.data(i, this.widgetFullName, this), this._on(!0, this.element, {
                remove: function (e) {
                    e.target === i && this.destroy()
                }
            }), this.document = e(i.style ? i.ownerDocument : i.document || i), this.window = e(this.document[0].defaultView || this.document[0].parentWindow)), this.options = e.widget.extend({}, this.options, this._getCreateOptions(), t), this._create(), this._trigger("create", null, this._getCreateEventData()), this._init()
        },
        _getCreateOptions: e.noop,
        _getCreateEventData: e.noop,
        _create: e.noop,
        _init: e.noop,
        destroy: function () {
            this._destroy(), this.element.unbind(this.eventNamespace).removeData(this.widgetFullName).removeData(e.camelCase(this.widgetFullName)), this.widget().unbind(this.eventNamespace).removeAttr("aria-disabled").removeClass(this.widgetFullName + "-disabled " + "ui-state-disabled"), this.bindings.unbind(this.eventNamespace), this.hoverable.removeClass("ui-state-hover"), this.focusable.removeClass("ui-state-focus")
        },
        _destroy: e.noop,
        widget: function () {
            return this.element
        },
        option: function (t, i) {
            var s, n, a, o = t;
            if (0 === arguments.length) return e.widget.extend({}, this.options);
            if ("string" == typeof t) if (o = {}, s = t.split("."), t = s.shift(), s.length) {
                for (n = o[t] = e.widget.extend({}, this.options[t]), a = 0; s.length - 1 > a; a++) n[s[a]] = n[s[a]] || {}, n = n[s[a]];
                if (t = s.pop(), 1 === arguments.length) return void 0 === n[t] ? null : n[t];
                n[t] = i
            } else {
                if (1 === arguments.length) return void 0 === this.options[t] ? null : this.options[t];
                o[t] = i
            }
            return this._setOptions(o), this
        },
        _setOptions: function (e) {
            var t;
            for (t in e) this._setOption(t, e[t]);
            return this
        },
        _setOption: function (e, t) {
            return this.options[e] = t, "disabled" === e && (this.widget().toggleClass(this.widgetFullName + "-disabled", !!t), t && (this.hoverable.removeClass("ui-state-hover"), this.focusable.removeClass("ui-state-focus"))), this
        },
        enable: function () {
            return this._setOptions({disabled: !1})
        },
        disable: function () {
            return this._setOptions({disabled: !0})
        },
        _on: function (t, i, s) {
            var n, a = this;
            "boolean" != typeof t && (s = i, i = t, t = !1), s ? (i = n = e(i), this.bindings = this.bindings.add(i)) : (s = i, i = this.element, n = this.widget()), e.each(s, function (s, o) {
                function r() {
                    return t || a.options.disabled !== !0 && !e(this).hasClass("ui-state-disabled") ? ("string" == typeof o ? a[o] : o).apply(a, arguments) : void 0
                }

                "string" != typeof o && (r.guid = o.guid = o.guid || r.guid || e.guid++);
                var h = s.match(/^([\w:-]*)\s*(.*)$/), l = h[1] + a.eventNamespace, u = h[2];
                u ? n.delegate(u, l, r) : i.bind(l, r)
            })
        },
        _off: function (t, i) {
            i = (i || "").split(" ").join(this.eventNamespace + " ") + this.eventNamespace, t.unbind(i).undelegate(i), this.bindings = e(this.bindings.not(t).get()), this.focusable = e(this.focusable.not(t).get()), this.hoverable = e(this.hoverable.not(t).get())
        },
        _delay: function (e, t) {
            function i() {
                return ("string" == typeof e ? s[e] : e).apply(s, arguments)
            }

            var s = this;
            return setTimeout(i, t || 0)
        },
        _hoverable: function (t) {
            this.hoverable = this.hoverable.add(t), this._on(t, {
                mouseenter: function (t) {
                    e(t.currentTarget).addClass("ui-state-hover")
                }, mouseleave: function (t) {
                    e(t.currentTarget).removeClass("ui-state-hover")
                }
            })
        },
        _focusable: function (t) {
            this.focusable = this.focusable.add(t), this._on(t, {
                focusin: function (t) {
                    e(t.currentTarget).addClass("ui-state-focus")
                }, focusout: function (t) {
                    e(t.currentTarget).removeClass("ui-state-focus")
                }
            })
        },
        _trigger: function (t, i, s) {
            var n, a, o = this.options[t];
            if (s = s || {}, i = e.Event(i), i.type = (t === this.widgetEventPrefix ? t : this.widgetEventPrefix + t).toLowerCase(), i.target = this.element[0], a = i.originalEvent) for (n in a) n in i || (i[n] = a[n]);
            return this.element.trigger(i, s), !(e.isFunction(o) && o.apply(this.element[0], [i].concat(s)) === !1 || i.isDefaultPrevented())
        }
    }, e.each({show: "fadeIn", hide: "fadeOut"}, function (t, i) {
        e.Widget.prototype["_" + t] = function (s, n, a) {
            "string" == typeof n && (n = {effect: n});
            var o, r = n ? n === !0 || "number" == typeof n ? i : n.effect || i : t;
            n = n || {}, "number" == typeof n && (n = {duration: n}), o = !e.isEmptyObject(n), n.complete = a, n.delay && s.delay(n.delay), o && e.effects && e.effects.effect[r] ? s[t](n) : r !== t && s[r] ? s[r](n.duration, n.easing, a) : s.queue(function (i) {
                e(this)[t](), a && a.call(s[0]), i()
            })
        }
    }), e.widget;
    var u = !1;
    e(document).mouseup(function () {
        u = !1
    }), e.widget("ui.mouse", {
        version: "1.11.4",
        options: {cancel: "input,textarea,button,select,option", distance: 1, delay: 0},
        _mouseInit: function () {
            var t = this;
            this.element.bind("mousedown." + this.widgetName, function (e) {
                return t._mouseDown(e)
            }).bind("click." + this.widgetName, function (i) {
                return !0 === e.data(i.target, t.widgetName + ".preventClickEvent") ? (e.removeData(i.target, t.widgetName + ".preventClickEvent"), i.stopImmediatePropagation(), !1) : void 0
            }), this.started = !1
        },
        _mouseDestroy: function () {
            this.element.unbind("." + this.widgetName), this._mouseMoveDelegate && this.document.unbind("mousemove." + this.widgetName, this._mouseMoveDelegate).unbind("mouseup." + this.widgetName, this._mouseUpDelegate)
        },
        _mouseDown: function (t) {
            if (!u) {
                this._mouseMoved = !1, this._mouseStarted && this._mouseUp(t), this._mouseDownEvent = t;
                var i = this, s = 1 === t.which,
                    n = "string" == typeof this.options.cancel && t.target.nodeName ? e(t.target).closest(this.options.cancel).length : !1;
                return s && !n && this._mouseCapture(t) ? (this.mouseDelayMet = !this.options.delay, this.mouseDelayMet || (this._mouseDelayTimer = setTimeout(function () {
                    i.mouseDelayMet = !0
                }, this.options.delay)), this._mouseDistanceMet(t) && this._mouseDelayMet(t) && (this._mouseStarted = this._mouseStart(t) !== !1, !this._mouseStarted) ? (t.preventDefault(), !0) : (!0 === e.data(t.target, this.widgetName + ".preventClickEvent") && e.removeData(t.target, this.widgetName + ".preventClickEvent"), this._mouseMoveDelegate = function (e) {
                    return i._mouseMove(e)
                }, this._mouseUpDelegate = function (e) {
                    return i._mouseUp(e)
                }, this.document.bind("mousemove." + this.widgetName, this._mouseMoveDelegate).bind("mouseup." + this.widgetName, this._mouseUpDelegate), t.preventDefault(), u = !0, !0)) : !0
            }
        },
        _mouseMove: function (t) {
            if (this._mouseMoved) {
                if (e.ui.ie && (!document.documentMode || 9 > document.documentMode) && !t.button) return this._mouseUp(t);
                if (!t.which) return this._mouseUp(t)
            }
            return (t.which || t.button) && (this._mouseMoved = !0), this._mouseStarted ? (this._mouseDrag(t), t.preventDefault()) : (this._mouseDistanceMet(t) && this._mouseDelayMet(t) && (this._mouseStarted = this._mouseStart(this._mouseDownEvent, t) !== !1, this._mouseStarted ? this._mouseDrag(t) : this._mouseUp(t)), !this._mouseStarted)
        },
        _mouseUp: function (t) {
            return this.document.unbind("mousemove." + this.widgetName, this._mouseMoveDelegate).unbind("mouseup." + this.widgetName, this._mouseUpDelegate), this._mouseStarted && (this._mouseStarted = !1, t.target === this._mouseDownEvent.target && e.data(t.target, this.widgetName + ".preventClickEvent", !0), this._mouseStop(t)), u = !1, !1
        },
        _mouseDistanceMet: function (e) {
            return Math.max(Math.abs(this._mouseDownEvent.pageX - e.pageX), Math.abs(this._mouseDownEvent.pageY - e.pageY)) >= this.options.distance
        },
        _mouseDelayMet: function () {
            return this.mouseDelayMet
        },
        _mouseStart: function () {
        },
        _mouseDrag: function () {
        },
        _mouseStop: function () {
        },
        _mouseCapture: function () {
            return !0
        }
    }), function () {
        function t(e, t, i) {
            return [parseFloat(e[0]) * (p.test(e[0]) ? t / 100 : 1), parseFloat(e[1]) * (p.test(e[1]) ? i / 100 : 1)]
        }

        function i(t, i) {
            return parseInt(e.css(t, i), 10) || 0
        }

        function s(t) {
            var i = t[0];
            return 9 === i.nodeType ? {
                width: t.width(),
                height: t.height(),
                offset: {top: 0, left: 0}
            } : e.isWindow(i) ? {
                width: t.width(),
                height: t.height(),
                offset: {top: t.scrollTop(), left: t.scrollLeft()}
            } : i.preventDefault ? {
                width: 0,
                height: 0,
                offset: {top: i.pageY, left: i.pageX}
            } : {width: t.outerWidth(), height: t.outerHeight(), offset: t.offset()}
        }

        e.ui = e.ui || {};
        var n, a, o = Math.max, r = Math.abs, h = Math.round, l = /left|center|right/, u = /top|center|bottom/,
            d = /[\+\-]\d+(\.[\d]+)?%?/, c = /^\w+/, p = /%$/, f = e.fn.position;
        e.position = {
            scrollbarWidth: function () {
                if (void 0 !== n) return n;
                var t, i,
                    s = e("<div style='display:block;position:absolute;width:50px;height:50px;overflow:hidden;'><div style='height:100px;width:auto;'></div></div>"),
                    a = s.children()[0];
                return e("body").append(s), t = a.offsetWidth, s.css("overflow", "scroll"), i = a.offsetWidth, t === i && (i = s[0].clientWidth), s.remove(), n = t - i
            }, getScrollInfo: function (t) {
                var i = t.isWindow || t.isDocument ? "" : t.element.css("overflow-x"),
                    s = t.isWindow || t.isDocument ? "" : t.element.css("overflow-y"),
                    n = "scroll" === i || "auto" === i && t.width < t.element[0].scrollWidth,
                    a = "scroll" === s || "auto" === s && t.height < t.element[0].scrollHeight;
                return {width: a ? e.position.scrollbarWidth() : 0, height: n ? e.position.scrollbarWidth() : 0}
            }, getWithinInfo: function (t) {
                var i = e(t || window), s = e.isWindow(i[0]), n = !!i[0] && 9 === i[0].nodeType;
                return {
                    element: i,
                    isWindow: s,
                    isDocument: n,
                    offset: i.offset() || {left: 0, top: 0},
                    scrollLeft: i.scrollLeft(),
                    scrollTop: i.scrollTop(),
                    width: s || n ? i.width() : i.outerWidth(),
                    height: s || n ? i.height() : i.outerHeight()
                }
            }
        }, e.fn.position = function (n) {
            if (!n || !n.of) return f.apply(this, arguments);
            n = e.extend({}, n);
            var p, m, g, v, y, b, _ = e(n.of), x = e.position.getWithinInfo(n.within), w = e.position.getScrollInfo(x),
                k = (n.collision || "flip").split(" "), T = {};
            return b = s(_), _[0].preventDefault && (n.at = "left top"), m = b.width, g = b.height, v = b.offset, y = e.extend({}, v), e.each(["my", "at"], function () {
                var e, t, i = (n[this] || "").split(" ");
                1 === i.length && (i = l.test(i[0]) ? i.concat(["center"]) : u.test(i[0]) ? ["center"].concat(i) : ["center", "center"]), i[0] = l.test(i[0]) ? i[0] : "center", i[1] = u.test(i[1]) ? i[1] : "center", e = d.exec(i[0]), t = d.exec(i[1]), T[this] = [e ? e[0] : 0, t ? t[0] : 0], n[this] = [c.exec(i[0])[0], c.exec(i[1])[0]]
            }), 1 === k.length && (k[1] = k[0]), "right" === n.at[0] ? y.left += m : "center" === n.at[0] && (y.left += m / 2), "bottom" === n.at[1] ? y.top += g : "center" === n.at[1] && (y.top += g / 2), p = t(T.at, m, g), y.left += p[0], y.top += p[1], this.each(function () {
                var s, l, u = e(this), d = u.outerWidth(), c = u.outerHeight(), f = i(this, "marginLeft"),
                    b = i(this, "marginTop"), D = d + f + i(this, "marginRight") + w.width,
                    S = c + b + i(this, "marginBottom") + w.height, N = e.extend({}, y),
                    M = t(T.my, u.outerWidth(), u.outerHeight());
                "right" === n.my[0] ? N.left -= d : "center" === n.my[0] && (N.left -= d / 2), "bottom" === n.my[1] ? N.top -= c : "center" === n.my[1] && (N.top -= c / 2), N.left += M[0], N.top += M[1], a || (N.left = h(N.left), N.top = h(N.top)), s = {
                    marginLeft: f,
                    marginTop: b
                }, e.each(["left", "top"], function (t, i) {
                    e.ui.position[k[t]] && e.ui.position[k[t]][i](N, {
                        targetWidth: m,
                        targetHeight: g,
                        elemWidth: d,
                        elemHeight: c,
                        collisionPosition: s,
                        collisionWidth: D,
                        collisionHeight: S,
                        offset: [p[0] + M[0], p[1] + M[1]],
                        my: n.my,
                        at: n.at,
                        within: x,
                        elem: u
                    })
                }), n.using && (l = function (e) {
                    var t = v.left - N.left, i = t + m - d, s = v.top - N.top, a = s + g - c, h = {
                        target: {element: _, left: v.left, top: v.top, width: m, height: g},
                        element: {element: u, left: N.left, top: N.top, width: d, height: c},
                        horizontal: 0 > i ? "left" : t > 0 ? "right" : "center",
                        vertical: 0 > a ? "top" : s > 0 ? "bottom" : "middle"
                    };
                    d > m && m > r(t + i) && (h.horizontal = "center"), c > g && g > r(s + a) && (h.vertical = "middle"), h.important = o(r(t), r(i)) > o(r(s), r(a)) ? "horizontal" : "vertical", n.using.call(this, e, h)
                }), u.offset(e.extend(N, {using: l}))
            })
        }, e.ui.position = {
            fit: {
                left: function (e, t) {
                    var i, s = t.within, n = s.isWindow ? s.scrollLeft : s.offset.left, a = s.width,
                        r = e.left - t.collisionPosition.marginLeft, h = n - r, l = r + t.collisionWidth - a - n;
                    t.collisionWidth > a ? h > 0 && 0 >= l ? (i = e.left + h + t.collisionWidth - a - n, e.left += h - i) : e.left = l > 0 && 0 >= h ? n : h > l ? n + a - t.collisionWidth : n : h > 0 ? e.left += h : l > 0 ? e.left -= l : e.left = o(e.left - r, e.left)
                }, top: function (e, t) {
                    var i, s = t.within, n = s.isWindow ? s.scrollTop : s.offset.top, a = t.within.height,
                        r = e.top - t.collisionPosition.marginTop, h = n - r, l = r + t.collisionHeight - a - n;
                    t.collisionHeight > a ? h > 0 && 0 >= l ? (i = e.top + h + t.collisionHeight - a - n, e.top += h - i) : e.top = l > 0 && 0 >= h ? n : h > l ? n + a - t.collisionHeight : n : h > 0 ? e.top += h : l > 0 ? e.top -= l : e.top = o(e.top - r, e.top)
                }
            }, flip: {
                left: function (e, t) {
                    var i, s, n = t.within, a = n.offset.left + n.scrollLeft, o = n.width,
                        h = n.isWindow ? n.scrollLeft : n.offset.left, l = e.left - t.collisionPosition.marginLeft,
                        u = l - h, d = l + t.collisionWidth - o - h,
                        c = "left" === t.my[0] ? -t.elemWidth : "right" === t.my[0] ? t.elemWidth : 0,
                        p = "left" === t.at[0] ? t.targetWidth : "right" === t.at[0] ? -t.targetWidth : 0,
                        f = -2 * t.offset[0];
                    0 > u ? (i = e.left + c + p + f + t.collisionWidth - o - a, (0 > i || r(u) > i) && (e.left += c + p + f)) : d > 0 && (s = e.left - t.collisionPosition.marginLeft + c + p + f - h, (s > 0 || d > r(s)) && (e.left += c + p + f))
                }, top: function (e, t) {
                    var i, s, n = t.within, a = n.offset.top + n.scrollTop, o = n.height,
                        h = n.isWindow ? n.scrollTop : n.offset.top, l = e.top - t.collisionPosition.marginTop,
                        u = l - h, d = l + t.collisionHeight - o - h, c = "top" === t.my[1],
                        p = c ? -t.elemHeight : "bottom" === t.my[1] ? t.elemHeight : 0,
                        f = "top" === t.at[1] ? t.targetHeight : "bottom" === t.at[1] ? -t.targetHeight : 0,
                        m = -2 * t.offset[1];
                    0 > u ? (s = e.top + p + f + m + t.collisionHeight - o - a, (0 > s || r(u) > s) && (e.top += p + f + m)) : d > 0 && (i = e.top - t.collisionPosition.marginTop + p + f + m - h, (i > 0 || d > r(i)) && (e.top += p + f + m))
                }
            }, flipfit: {
                left: function () {
                    e.ui.position.flip.left.apply(this, arguments), e.ui.position.fit.left.apply(this, arguments)
                }, top: function () {
                    e.ui.position.flip.top.apply(this, arguments), e.ui.position.fit.top.apply(this, arguments)
                }
            }
        }, function () {
            var t, i, s, n, o, r = document.getElementsByTagName("body")[0], h = document.createElement("div");
            t = document.createElement(r ? "div" : "body"), s = {
                visibility: "hidden",
                width: 0,
                height: 0,
                border: 0,
                margin: 0,
                background: "none"
            }, r && e.extend(s, {position: "absolute", left: "-1000px", top: "-1000px"});
            for (o in s) t.style[o] = s[o];
            t.appendChild(h), i = r || document.documentElement, i.insertBefore(t, i.firstChild), h.style.cssText = "position: absolute; left: 10.7432222px;", n = e(h).offset().left, a = n > 10 && 11 > n, t.innerHTML = "", i.removeChild(t)
        }()
    }(), e.ui.position, e.widget("ui.draggable", e.ui.mouse, {
        version: "1.11.4",
        widgetEventPrefix: "drag",
        options: {
            addClasses: !0,
            appendTo: "parent",
            axis: !1,
            connectToSortable: !1,
            containment: !1,
            cursor: "auto",
            cursorAt: !1,
            grid: !1,
            handle: !1,
            helper: "original",
            iframeFix: !1,
            opacity: !1,
            refreshPositions: !1,
            revert: !1,
            revertDuration: 500,
            scope: "default",
            scroll: !0,
            scrollSensitivity: 20,
            scrollSpeed: 20,
            snap: !1,
            snapMode: "both",
            snapTolerance: 20,
            stack: !1,
            zIndex: !1,
            drag: null,
            start: null,
            stop: null
        },
        _create: function () {
            "original" === this.options.helper && this._setPositionRelative(), this.options.addClasses && this.element.addClass("ui-draggable"), this.options.disabled && this.element.addClass("ui-draggable-disabled"), this._setHandleClassName(), this._mouseInit()
        },
        _setOption: function (e, t) {
            this._super(e, t), "handle" === e && (this._removeHandleClassName(), this._setHandleClassName())
        },
        _destroy: function () {
            return (this.helper || this.element).is(".ui-draggable-dragging") ? (this.destroyOnClear = !0, void 0) : (this.element.removeClass("ui-draggable ui-draggable-dragging ui-draggable-disabled"), this._removeHandleClassName(), this._mouseDestroy(), void 0)
        },
        _mouseCapture: function (t) {
            var i = this.options;
            return this._blurActiveElement(t), this.helper || i.disabled || e(t.target).closest(".ui-resizable-handle").length > 0 ? !1 : (this.handle = this._getHandle(t), this.handle ? (this._blockFrames(i.iframeFix === !0 ? "iframe" : i.iframeFix), !0) : !1)
        },
        _blockFrames: function (t) {
            this.iframeBlocks = this.document.find(t).map(function () {
                var t = e(this);
                return e("<div>").css("position", "absolute").appendTo(t.parent()).outerWidth(t.outerWidth()).outerHeight(t.outerHeight()).offset(t.offset())[0]
            })
        },
        _unblockFrames: function () {
            this.iframeBlocks && (this.iframeBlocks.remove(), delete this.iframeBlocks)
        },
        _blurActiveElement: function (t) {
            var i = this.document[0];
            if (this.handleElement.is(t.target)) try {
                i.activeElement && "body" !== i.activeElement.nodeName.toLowerCase() && e(i.activeElement).blur()
            } catch (s) {
            }
        },
        _mouseStart: function (t) {
            var i = this.options;
            return this.helper = this._createHelper(t), this.helper.addClass("ui-draggable-dragging"), this._cacheHelperProportions(), e.ui.ddmanager && (e.ui.ddmanager.current = this), this._cacheMargins(), this.cssPosition = this.helper.css("position"), this.scrollParent = this.helper.scrollParent(!0), this.offsetParent = this.helper.offsetParent(), this.hasFixedAncestor = this.helper.parents().filter(function () {
                return "fixed" === e(this).css("position")
            }).length > 0, this.positionAbs = this.element.offset(), this._refreshOffsets(t), this.originalPosition = this.position = this._generatePosition(t, !1), this.originalPageX = t.pageX, this.originalPageY = t.pageY, i.cursorAt && this._adjustOffsetFromHelper(i.cursorAt), this._setContainment(), this._trigger("start", t) === !1 ? (this._clear(), !1) : (this._cacheHelperProportions(), e.ui.ddmanager && !i.dropBehaviour && e.ui.ddmanager.prepareOffsets(this, t), this._normalizeRightBottom(), this._mouseDrag(t, !0), e.ui.ddmanager && e.ui.ddmanager.dragStart(this, t), !0)
        },
        _refreshOffsets: function (e) {
            this.offset = {
                top: this.positionAbs.top - this.margins.top,
                left: this.positionAbs.left - this.margins.left,
                scroll: !1,
                parent: this._getParentOffset(),
                relative: this._getRelativeOffset()
            }, this.offset.click = {left: e.pageX - this.offset.left, top: e.pageY - this.offset.top}
        },
        _mouseDrag: function (t, i) {
            if (this.hasFixedAncestor && (this.offset.parent = this._getParentOffset()), this.position = this._generatePosition(t, !0), this.positionAbs = this._convertPositionTo("absolute"), !i) {
                var s = this._uiHash();
                if (this._trigger("drag", t, s) === !1) return this._mouseUp({}), !1;
                this.position = s.position
            }
            return this.helper[0].style.left = this.position.left + "px", this.helper[0].style.top = this.position.top + "px", e.ui.ddmanager && e.ui.ddmanager.drag(this, t), !1
        },
        _mouseStop: function (t) {
            var i = this, s = !1;
            return e.ui.ddmanager && !this.options.dropBehaviour && (s = e.ui.ddmanager.drop(this, t)), this.dropped && (s = this.dropped, this.dropped = !1), "invalid" === this.options.revert && !s || "valid" === this.options.revert && s || this.options.revert === !0 || e.isFunction(this.options.revert) && this.options.revert.call(this.element, s) ? e(this.helper).animate(this.originalPosition, parseInt(this.options.revertDuration, 10), function () {
                i._trigger("stop", t) !== !1 && i._clear()
            }) : this._trigger("stop", t) !== !1 && this._clear(), !1
        },
        _mouseUp: function (t) {
            return this._unblockFrames(), e.ui.ddmanager && e.ui.ddmanager.dragStop(this, t), this.handleElement.is(t.target) && this.element.focus(), e.ui.mouse.prototype._mouseUp.call(this, t)
        },
        cancel: function () {
            return this.helper.is(".ui-draggable-dragging") ? this._mouseUp({}) : this._clear(), this
        },
        _getHandle: function (t) {
            return this.options.handle ? !!e(t.target).closest(this.element.find(this.options.handle)).length : !0
        },
        _setHandleClassName: function () {
            this.handleElement = this.options.handle ? this.element.find(this.options.handle) : this.element, this.handleElement.addClass("ui-draggable-handle")
        },
        _removeHandleClassName: function () {
            this.handleElement.removeClass("ui-draggable-handle")
        },
        _createHelper: function (t) {
            var i = this.options, s = e.isFunction(i.helper),
                n = s ? e(i.helper.apply(this.element[0], [t])) : "clone" === i.helper ? this.element.clone().removeAttr("id") : this.element;
            return n.parents("body").length || n.appendTo("parent" === i.appendTo ? this.element[0].parentNode : i.appendTo), s && n[0] === this.element[0] && this._setPositionRelative(), n[0] === this.element[0] || /(fixed|absolute)/.test(n.css("position")) || n.css("position", "absolute"), n
        },
        _setPositionRelative: function () {
            /^(?:r|a|f)/.test(this.element.css("position")) || (this.element[0].style.position = "relative")
        },
        _adjustOffsetFromHelper: function (t) {
            "string" == typeof t && (t = t.split(" ")), e.isArray(t) && (t = {
                left: +t[0],
                top: +t[1] || 0
            }), "left" in t && (this.offset.click.left = t.left + this.margins.left), "right" in t && (this.offset.click.left = this.helperProportions.width - t.right + this.margins.left), "top" in t && (this.offset.click.top = t.top + this.margins.top), "bottom" in t && (this.offset.click.top = this.helperProportions.height - t.bottom + this.margins.top)
        },
        _isRootNode: function (e) {
            return /(html|body)/i.test(e.tagName) || e === this.document[0]
        },
        _getParentOffset: function () {
            var t = this.offsetParent.offset(), i = this.document[0];
            return "absolute" === this.cssPosition && this.scrollParent[0] !== i && e.contains(this.scrollParent[0], this.offsetParent[0]) && (t.left += this.scrollParent.scrollLeft(), t.top += this.scrollParent.scrollTop()), this._isRootNode(this.offsetParent[0]) && (t = {
                top: 0,
                left: 0
            }), {
                top: t.top + (parseInt(this.offsetParent.css("borderTopWidth"), 10) || 0),
                left: t.left + (parseInt(this.offsetParent.css("borderLeftWidth"), 10) || 0)
            }
        },
        _getRelativeOffset: function () {
            if ("relative" !== this.cssPosition) return {top: 0, left: 0};
            var e = this.element.position(), t = this._isRootNode(this.scrollParent[0]);
            return {
                top: e.top - (parseInt(this.helper.css("top"), 10) || 0) + (t ? 0 : this.scrollParent.scrollTop()),
                left: e.left - (parseInt(this.helper.css("left"), 10) || 0) + (t ? 0 : this.scrollParent.scrollLeft())
            }
        },
        _cacheMargins: function () {
            this.margins = {
                left: parseInt(this.element.css("marginLeft"), 10) || 0,
                top: parseInt(this.element.css("marginTop"), 10) || 0,
                right: parseInt(this.element.css("marginRight"), 10) || 0,
                bottom: parseInt(this.element.css("marginBottom"), 10) || 0
            }
        },
        _cacheHelperProportions: function () {
            this.helperProportions = {width: this.helper.outerWidth(), height: this.helper.outerHeight()}
        },
        _setContainment: function () {
            var t, i, s, n = this.options, a = this.document[0];
            return this.relativeContainer = null, n.containment ? "window" === n.containment ? (this.containment = [e(window).scrollLeft() - this.offset.relative.left - this.offset.parent.left, e(window).scrollTop() - this.offset.relative.top - this.offset.parent.top, e(window).scrollLeft() + e(window).width() - this.helperProportions.width - this.margins.left, e(window).scrollTop() + (e(window).height() || a.body.parentNode.scrollHeight) - this.helperProportions.height - this.margins.top], void 0) : "document" === n.containment ? (this.containment = [0, 0, e(a).width() - this.helperProportions.width - this.margins.left, (e(a).height() || a.body.parentNode.scrollHeight) - this.helperProportions.height - this.margins.top], void 0) : n.containment.constructor === Array ? (this.containment = n.containment, void 0) : ("parent" === n.containment && (n.containment = this.helper[0].parentNode), i = e(n.containment), s = i[0], s && (t = /(scroll|auto)/.test(i.css("overflow")), this.containment = [(parseInt(i.css("borderLeftWidth"), 10) || 0) + (parseInt(i.css("paddingLeft"), 10) || 0), (parseInt(i.css("borderTopWidth"), 10) || 0) + (parseInt(i.css("paddingTop"), 10) || 0), (t ? Math.max(s.scrollWidth, s.offsetWidth) : s.offsetWidth) - (parseInt(i.css("borderRightWidth"), 10) || 0) - (parseInt(i.css("paddingRight"), 10) || 0) - this.helperProportions.width - this.margins.left - this.margins.right, (t ? Math.max(s.scrollHeight, s.offsetHeight) : s.offsetHeight) - (parseInt(i.css("borderBottomWidth"), 10) || 0) - (parseInt(i.css("paddingBottom"), 10) || 0) - this.helperProportions.height - this.margins.top - this.margins.bottom], this.relativeContainer = i), void 0) : (this.containment = null, void 0)
        },
        _convertPositionTo: function (e, t) {
            t || (t = this.position);
            var i = "absolute" === e ? 1 : -1, s = this._isRootNode(this.scrollParent[0]);
            return {
                top: t.top + this.offset.relative.top * i + this.offset.parent.top * i - ("fixed" === this.cssPosition ? -this.offset.scroll.top : s ? 0 : this.offset.scroll.top) * i,
                left: t.left + this.offset.relative.left * i + this.offset.parent.left * i - ("fixed" === this.cssPosition ? -this.offset.scroll.left : s ? 0 : this.offset.scroll.left) * i
            }
        },
        _generatePosition: function (e, t) {
            var i, s, n, a, o = this.options, r = this._isRootNode(this.scrollParent[0]), h = e.pageX, l = e.pageY;
            return r && this.offset.scroll || (this.offset.scroll = {
                top: this.scrollParent.scrollTop(),
                left: this.scrollParent.scrollLeft()
            }), t && (this.containment && (this.relativeContainer ? (s = this.relativeContainer.offset(), i = [this.containment[0] + s.left, this.containment[1] + s.top, this.containment[2] + s.left, this.containment[3] + s.top]) : i = this.containment, e.pageX - this.offset.click.left < i[0] && (h = i[0] + this.offset.click.left), e.pageY - this.offset.click.top < i[1] && (l = i[1] + this.offset.click.top), e.pageX - this.offset.click.left > i[2] && (h = i[2] + this.offset.click.left), e.pageY - this.offset.click.top > i[3] && (l = i[3] + this.offset.click.top)), o.grid && (n = o.grid[1] ? this.originalPageY + Math.round((l - this.originalPageY) / o.grid[1]) * o.grid[1] : this.originalPageY, l = i ? n - this.offset.click.top >= i[1] || n - this.offset.click.top > i[3] ? n : n - this.offset.click.top >= i[1] ? n - o.grid[1] : n + o.grid[1] : n, a = o.grid[0] ? this.originalPageX + Math.round((h - this.originalPageX) / o.grid[0]) * o.grid[0] : this.originalPageX, h = i ? a - this.offset.click.left >= i[0] || a - this.offset.click.left > i[2] ? a : a - this.offset.click.left >= i[0] ? a - o.grid[0] : a + o.grid[0] : a), "y" === o.axis && (h = this.originalPageX), "x" === o.axis && (l = this.originalPageY)), {
                top: l - this.offset.click.top - this.offset.relative.top - this.offset.parent.top + ("fixed" === this.cssPosition ? -this.offset.scroll.top : r ? 0 : this.offset.scroll.top),
                left: h - this.offset.click.left - this.offset.relative.left - this.offset.parent.left + ("fixed" === this.cssPosition ? -this.offset.scroll.left : r ? 0 : this.offset.scroll.left)
            }
        },
        _clear: function () {
            this.helper.removeClass("ui-draggable-dragging"), this.helper[0] === this.element[0] || this.cancelHelperRemoval || this.helper.remove(), this.helper = null, this.cancelHelperRemoval = !1, this.destroyOnClear && this.destroy()
        },
        _normalizeRightBottom: function () {
            "y" !== this.options.axis && "auto" !== this.helper.css("right") && (this.helper.width(this.helper.width()), this.helper.css("right", "auto")), "x" !== this.options.axis && "auto" !== this.helper.css("bottom") && (this.helper.height(this.helper.height()), this.helper.css("bottom", "auto"))
        },
        _trigger: function (t, i, s) {
            return s = s || this._uiHash(), e.ui.plugin.call(this, t, [i, s, this], !0), /^(drag|start|stop)/.test(t) && (this.positionAbs = this._convertPositionTo("absolute"), s.offset = this.positionAbs), e.Widget.prototype._trigger.call(this, t, i, s)
        },
        plugins: {},
        _uiHash: function () {
            return {
                helper: this.helper,
                position: this.position,
                originalPosition: this.originalPosition,
                offset: this.positionAbs
            }
        }
    }), e.ui.plugin.add("draggable", "connectToSortable", {
        start: function (t, i, s) {
            var n = e.extend({}, i, {item: s.element});
            s.sortables = [], e(s.options.connectToSortable).each(function () {
                var i = e(this).sortable("instance");
                i && !i.options.disabled && (s.sortables.push(i), i.refreshPositions(), i._trigger("activate", t, n))
            })
        }, stop: function (t, i, s) {
            var n = e.extend({}, i, {item: s.element});
            s.cancelHelperRemoval = !1, e.each(s.sortables, function () {
                var e = this;
                e.isOver ? (e.isOver = 0, s.cancelHelperRemoval = !0, e.cancelHelperRemoval = !1, e._storedCSS = {
                    position: e.placeholder.css("position"),
                    top: e.placeholder.css("top"),
                    left: e.placeholder.css("left")
                }, e._mouseStop(t), e.options.helper = e.options._helper) : (e.cancelHelperRemoval = !0, e._trigger("deactivate", t, n))
            })
        }, drag: function (t, i, s) {
            e.each(s.sortables, function () {
                var n = !1, a = this;
                a.positionAbs = s.positionAbs, a.helperProportions = s.helperProportions, a.offset.click = s.offset.click, a._intersectsWith(a.containerCache) && (n = !0, e.each(s.sortables, function () {
                    return this.positionAbs = s.positionAbs, this.helperProportions = s.helperProportions, this.offset.click = s.offset.click, this !== a && this._intersectsWith(this.containerCache) && e.contains(a.element[0], this.element[0]) && (n = !1), n
                })), n ? (a.isOver || (a.isOver = 1, s._parent = i.helper.parent(), a.currentItem = i.helper.appendTo(a.element).data("ui-sortable-item", !0), a.options._helper = a.options.helper, a.options.helper = function () {
                    return i.helper[0]
                }, t.target = a.currentItem[0], a._mouseCapture(t, !0), a._mouseStart(t, !0, !0), a.offset.click.top = s.offset.click.top, a.offset.click.left = s.offset.click.left, a.offset.parent.left -= s.offset.parent.left - a.offset.parent.left, a.offset.parent.top -= s.offset.parent.top - a.offset.parent.top, s._trigger("toSortable", t), s.dropped = a.element, e.each(s.sortables, function () {
                    this.refreshPositions()
                }), s.currentItem = s.element, a.fromOutside = s), a.currentItem && (a._mouseDrag(t), i.position = a.position)) : a.isOver && (a.isOver = 0, a.cancelHelperRemoval = !0, a.options._revert = a.options.revert, a.options.revert = !1, a._trigger("out", t, a._uiHash(a)), a._mouseStop(t, !0), a.options.revert = a.options._revert, a.options.helper = a.options._helper, a.placeholder && a.placeholder.remove(), i.helper.appendTo(s._parent), s._refreshOffsets(t), i.position = s._generatePosition(t, !0), s._trigger("fromSortable", t), s.dropped = !1, e.each(s.sortables, function () {
                    this.refreshPositions()
                }))
            })
        }
    }), e.ui.plugin.add("draggable", "cursor", {
        start: function (t, i, s) {
            var n = e("body"), a = s.options;
            n.css("cursor") && (a._cursor = n.css("cursor")), n.css("cursor", a.cursor)
        }, stop: function (t, i, s) {
            var n = s.options;
            n._cursor && e("body").css("cursor", n._cursor)
        }
    }), e.ui.plugin.add("draggable", "opacity", {
        start: function (t, i, s) {
            var n = e(i.helper), a = s.options;
            n.css("opacity") && (a._opacity = n.css("opacity")), n.css("opacity", a.opacity)
        }, stop: function (t, i, s) {
            var n = s.options;
            n._opacity && e(i.helper).css("opacity", n._opacity)
        }
    }), e.ui.plugin.add("draggable", "scroll", {
        start: function (e, t, i) {
            i.scrollParentNotHidden || (i.scrollParentNotHidden = i.helper.scrollParent(!1)), i.scrollParentNotHidden[0] !== i.document[0] && "HTML" !== i.scrollParentNotHidden[0].tagName && (i.overflowOffset = i.scrollParentNotHidden.offset())
        }, drag: function (t, i, s) {
            var n = s.options, a = !1, o = s.scrollParentNotHidden[0], r = s.document[0];
            o !== r && "HTML" !== o.tagName ? (n.axis && "x" === n.axis || (s.overflowOffset.top + o.offsetHeight - t.pageY < n.scrollSensitivity ? o.scrollTop = a = o.scrollTop + n.scrollSpeed : t.pageY - s.overflowOffset.top < n.scrollSensitivity && (o.scrollTop = a = o.scrollTop - n.scrollSpeed)), n.axis && "y" === n.axis || (s.overflowOffset.left + o.offsetWidth - t.pageX < n.scrollSensitivity ? o.scrollLeft = a = o.scrollLeft + n.scrollSpeed : t.pageX - s.overflowOffset.left < n.scrollSensitivity && (o.scrollLeft = a = o.scrollLeft - n.scrollSpeed))) : (n.axis && "x" === n.axis || (t.pageY - e(r).scrollTop() < n.scrollSensitivity ? a = e(r).scrollTop(e(r).scrollTop() - n.scrollSpeed) : e(window).height() - (t.pageY - e(r).scrollTop()) < n.scrollSensitivity && (a = e(r).scrollTop(e(r).scrollTop() + n.scrollSpeed))), n.axis && "y" === n.axis || (t.pageX - e(r).scrollLeft() < n.scrollSensitivity ? a = e(r).scrollLeft(e(r).scrollLeft() - n.scrollSpeed) : e(window).width() - (t.pageX - e(r).scrollLeft()) < n.scrollSensitivity && (a = e(r).scrollLeft(e(r).scrollLeft() + n.scrollSpeed)))), a !== !1 && e.ui.ddmanager && !n.dropBehaviour && e.ui.ddmanager.prepareOffsets(s, t)
        }
    }), e.ui.plugin.add("draggable", "snap", {
        start: function (t, i, s) {
            var n = s.options;
            s.snapElements = [], e(n.snap.constructor !== String ? n.snap.items || ":data(ui-draggable)" : n.snap).each(function () {
                var t = e(this), i = t.offset();
                this !== s.element[0] && s.snapElements.push({
                    item: this,
                    width: t.outerWidth(),
                    height: t.outerHeight(),
                    top: i.top,
                    left: i.left
                })
            })
        }, drag: function (t, i, s) {
            var n, a, o, r, h, l, u, d, c, p, f = s.options, m = f.snapTolerance, g = i.offset.left,
                v = g + s.helperProportions.width, y = i.offset.top, b = y + s.helperProportions.height;
            for (c = s.snapElements.length - 1; c >= 0; c--) h = s.snapElements[c].left - s.margins.left, l = h + s.snapElements[c].width, u = s.snapElements[c].top - s.margins.top, d = u + s.snapElements[c].height, h - m > v || g > l + m || u - m > b || y > d + m || !e.contains(s.snapElements[c].item.ownerDocument, s.snapElements[c].item) ? (s.snapElements[c].snapping && s.options.snap.release && s.options.snap.release.call(s.element, t, e.extend(s._uiHash(), {snapItem: s.snapElements[c].item})), s.snapElements[c].snapping = !1) : ("inner" !== f.snapMode && (n = m >= Math.abs(u - b), a = m >= Math.abs(d - y), o = m >= Math.abs(h - v), r = m >= Math.abs(l - g), n && (i.position.top = s._convertPositionTo("relative", {
                top: u - s.helperProportions.height,
                left: 0
            }).top), a && (i.position.top = s._convertPositionTo("relative", {
                top: d,
                left: 0
            }).top), o && (i.position.left = s._convertPositionTo("relative", {
                top: 0,
                left: h - s.helperProportions.width
            }).left), r && (i.position.left = s._convertPositionTo("relative", {
                top: 0,
                left: l
            }).left)), p = n || a || o || r, "outer" !== f.snapMode && (n = m >= Math.abs(u - y), a = m >= Math.abs(d - b), o = m >= Math.abs(h - g), r = m >= Math.abs(l - v), n && (i.position.top = s._convertPositionTo("relative", {
                top: u,
                left: 0
            }).top), a && (i.position.top = s._convertPositionTo("relative", {
                top: d - s.helperProportions.height,
                left: 0
            }).top), o && (i.position.left = s._convertPositionTo("relative", {
                top: 0,
                left: h
            }).left), r && (i.position.left = s._convertPositionTo("relative", {
                top: 0,
                left: l - s.helperProportions.width
            }).left)), !s.snapElements[c].snapping && (n || a || o || r || p) && s.options.snap.snap && s.options.snap.snap.call(s.element, t, e.extend(s._uiHash(), {snapItem: s.snapElements[c].item})), s.snapElements[c].snapping = n || a || o || r || p)
        }
    }), e.ui.plugin.add("draggable", "stack", {
        start: function (t, i, s) {
            var n, a = s.options, o = e.makeArray(e(a.stack)).sort(function (t, i) {
                return (parseInt(e(t).css("zIndex"), 10) || 0) - (parseInt(e(i).css("zIndex"), 10) || 0)
            });
            o.length && (n = parseInt(e(o[0]).css("zIndex"), 10) || 0, e(o).each(function (t) {
                e(this).css("zIndex", n + t)
            }), this.css("zIndex", n + o.length))
        }
    }), e.ui.plugin.add("draggable", "zIndex", {
        start: function (t, i, s) {
            var n = e(i.helper), a = s.options;
            n.css("zIndex") && (a._zIndex = n.css("zIndex")), n.css("zIndex", a.zIndex)
        }, stop: function (t, i, s) {
            var n = s.options;
            n._zIndex && e(i.helper).css("zIndex", n._zIndex)
        }
    }), e.ui.draggable, e.widget("ui.droppable", {
        version: "1.11.4",
        widgetEventPrefix: "drop",
        options: {
            accept: "*",
            activeClass: !1,
            addClasses: !0,
            greedy: !1,
            hoverClass: !1,
            scope: "default",
            tolerance: "intersect",
            activate: null,
            deactivate: null,
            drop: null,
            out: null,
            over: null
        },
        _create: function () {
            var t, i = this.options, s = i.accept;
            this.isover = !1, this.isout = !0, this.accept = e.isFunction(s) ? s : function (e) {
                return e.is(s)
            }, this.proportions = function () {
                return arguments.length ? (t = arguments[0], void 0) : t ? t : t = {
                    width: this.element[0].offsetWidth,
                    height: this.element[0].offsetHeight
                }
            }, this._addToManager(i.scope), i.addClasses && this.element.addClass("ui-droppable")
        },
        _addToManager: function (t) {
            e.ui.ddmanager.droppables[t] = e.ui.ddmanager.droppables[t] || [], e.ui.ddmanager.droppables[t].push(this)
        },
        _splice: function (e) {
            for (var t = 0; e.length > t; t++) e[t] === this && e.splice(t, 1)
        },
        _destroy: function () {
            var t = e.ui.ddmanager.droppables[this.options.scope];
            this._splice(t), this.element.removeClass("ui-droppable ui-droppable-disabled")
        },
        _setOption: function (t, i) {
            if ("accept" === t) this.accept = e.isFunction(i) ? i : function (e) {
                return e.is(i)
            }; else if ("scope" === t) {
                var s = e.ui.ddmanager.droppables[this.options.scope];
                this._splice(s), this._addToManager(i)
            }
            this._super(t, i)
        },
        _activate: function (t) {
            var i = e.ui.ddmanager.current;
            this.options.activeClass && this.element.addClass(this.options.activeClass), i && this._trigger("activate", t, this.ui(i))
        },
        _deactivate: function (t) {
            var i = e.ui.ddmanager.current;
            this.options.activeClass && this.element.removeClass(this.options.activeClass), i && this._trigger("deactivate", t, this.ui(i))
        },
        _over: function (t) {
            var i = e.ui.ddmanager.current;
            i && (i.currentItem || i.element)[0] !== this.element[0] && this.accept.call(this.element[0], i.currentItem || i.element) && (this.options.hoverClass && this.element.addClass(this.options.hoverClass), this._trigger("over", t, this.ui(i)))
        },
        _out: function (t) {
            var i = e.ui.ddmanager.current;
            i && (i.currentItem || i.element)[0] !== this.element[0] && this.accept.call(this.element[0], i.currentItem || i.element) && (this.options.hoverClass && this.element.removeClass(this.options.hoverClass), this._trigger("out", t, this.ui(i)))
        },
        _drop: function (t, i) {
            var s = i || e.ui.ddmanager.current, n = !1;
            return s && (s.currentItem || s.element)[0] !== this.element[0] ? (this.element.find(":data(ui-droppable)").not(".ui-draggable-dragging").each(function () {
                var i = e(this).droppable("instance");
                return i.options.greedy && !i.options.disabled && i.options.scope === s.options.scope && i.accept.call(i.element[0], s.currentItem || s.element) && e.ui.intersect(s, e.extend(i, {offset: i.element.offset()}), i.options.tolerance, t) ? (n = !0, !1) : void 0
            }), n ? !1 : this.accept.call(this.element[0], s.currentItem || s.element) ? (this.options.activeClass && this.element.removeClass(this.options.activeClass), this.options.hoverClass && this.element.removeClass(this.options.hoverClass), this._trigger("drop", t, this.ui(s)), this.element) : !1) : !1
        },
        ui: function (e) {
            return {
                draggable: e.currentItem || e.element,
                helper: e.helper,
                position: e.position,
                offset: e.positionAbs
            }
        }
    }), e.ui.intersect = function () {
        function e(e, t, i) {
            return e >= t && t + i > e
        }

        return function (t, i, s, n) {
            if (!i.offset) return !1;
            var a = (t.positionAbs || t.position.absolute).left + t.margins.left,
                o = (t.positionAbs || t.position.absolute).top + t.margins.top, r = a + t.helperProportions.width,
                h = o + t.helperProportions.height, l = i.offset.left, u = i.offset.top, d = l + i.proportions().width,
                c = u + i.proportions().height;
            switch (s) {
                case"fit":
                    return a >= l && d >= r && o >= u && c >= h;
                case"intersect":
                    return a + t.helperProportions.width / 2 > l && d > r - t.helperProportions.width / 2 && o + t.helperProportions.height / 2 > u && c > h - t.helperProportions.height / 2;
                case"pointer":
                    return e(n.pageY, u, i.proportions().height) && e(n.pageX, l, i.proportions().width);
                case"touch":
                    return (o >= u && c >= o || h >= u && c >= h || u > o && h > c) && (a >= l && d >= a || r >= l && d >= r || l > a && r > d);
                default:
                    return !1
            }
        }
    }(), e.ui.ddmanager = {
        current: null, droppables: {"default": []}, prepareOffsets: function (t, i) {
            var s, n, a = e.ui.ddmanager.droppables[t.options.scope] || [], o = i ? i.type : null,
                r = (t.currentItem || t.element).find(":data(ui-droppable)").addBack();
            e:for (s = 0; a.length > s; s++) if (!(a[s].options.disabled || t && !a[s].accept.call(a[s].element[0], t.currentItem || t.element))) {
                for (n = 0; r.length > n; n++) if (r[n] === a[s].element[0]) {
                    a[s].proportions().height = 0;
                    continue e
                }
                a[s].visible = "none" !== a[s].element.css("display"), a[s].visible && ("mousedown" === o && a[s]._activate.call(a[s], i), a[s].offset = a[s].element.offset(), a[s].proportions({
                    width: a[s].element[0].offsetWidth,
                    height: a[s].element[0].offsetHeight
                }))
            }
        }, drop: function (t, i) {
            var s = !1;
            return e.each((e.ui.ddmanager.droppables[t.options.scope] || []).slice(), function () {
                this.options && (!this.options.disabled && this.visible && e.ui.intersect(t, this, this.options.tolerance, i) && (s = this._drop.call(this, i) || s), !this.options.disabled && this.visible && this.accept.call(this.element[0], t.currentItem || t.element) && (this.isout = !0, this.isover = !1, this._deactivate.call(this, i)))
            }), s
        }, dragStart: function (t, i) {
            t.element.parentsUntil("body").bind("scroll.droppable", function () {
                t.options.refreshPositions || e.ui.ddmanager.prepareOffsets(t, i)
            })
        }, drag: function (t, i) {
            t.options.refreshPositions && e.ui.ddmanager.prepareOffsets(t, i), e.each(e.ui.ddmanager.droppables[t.options.scope] || [], function () {
                if (!this.options.disabled && !this.greedyChild && this.visible) {
                    var s, n, a, o = e.ui.intersect(t, this, this.options.tolerance, i),
                        r = !o && this.isover ? "isout" : o && !this.isover ? "isover" : null;
                    r && (this.options.greedy && (n = this.options.scope, a = this.element.parents(":data(ui-droppable)").filter(function () {
                        return e(this).droppable("instance").options.scope === n
                    }), a.length && (s = e(a[0]).droppable("instance"), s.greedyChild = "isover" === r)), s && "isover" === r && (s.isover = !1, s.isout = !0, s._out.call(s, i)), this[r] = !0, this["isout" === r ? "isover" : "isout"] = !1, this["isover" === r ? "_over" : "_out"].call(this, i), s && "isout" === r && (s.isout = !1, s.isover = !0, s._over.call(s, i)))
                }
            })
        }, dragStop: function (t, i) {
            t.element.parentsUntil("body").unbind("scroll.droppable"), t.options.refreshPositions || e.ui.ddmanager.prepareOffsets(t, i)
        }
    }, e.ui.droppable, e.widget("ui.resizable", e.ui.mouse, {
        version: "1.11.4",
        widgetEventPrefix: "resize",
        options: {
            alsoResize: !1,
            animate: !1,
            animateDuration: "slow",
            animateEasing: "swing",
            aspectRatio: !1,
            autoHide: !1,
            containment: !1,
            ghost: !1,
            grid: !1,
            handles: "e,s,se",
            helper: !1,
            maxHeight: null,
            maxWidth: null,
            minHeight: 10,
            minWidth: 10,
            zIndex: 90,
            resize: null,
            start: null,
            stop: null
        },
        _num: function (e) {
            return parseInt(e, 10) || 0
        },
        _isNumber: function (e) {
            return !isNaN(parseInt(e, 10))
        },
        _hasScroll: function (t, i) {
            if ("hidden" === e(t).css("overflow")) return !1;
            var s = i && "left" === i ? "scrollLeft" : "scrollTop", n = !1;
            return t[s] > 0 ? !0 : (t[s] = 1, n = t[s] > 0, t[s] = 0, n)
        },
        _create: function () {
            var t, i, s, n, a, o = this, r = this.options;
            if (this.element.addClass("ui-resizable"), e.extend(this, {
                _aspectRatio: !!r.aspectRatio,
                aspectRatio: r.aspectRatio,
                originalElement: this.element,
                _proportionallyResizeElements: [],
                _helper: r.helper || r.ghost || r.animate ? r.helper || "ui-resizable-helper" : null
            }), this.element[0].nodeName.match(/^(canvas|textarea|input|select|button|img)$/i) && (this.element.wrap(e("<div class='ui-wrapper' style='overflow: hidden;'></div>").css({
                position: this.element.css("position"),
                width: this.element.outerWidth(),
                height: this.element.outerHeight(),
                top: this.element.css("top"),
                left: this.element.css("left")
            })), this.element = this.element.parent().data("ui-resizable", this.element.resizable("instance")), this.elementIsWrapper = !0, this.element.css({
                marginLeft: this.originalElement.css("marginLeft"),
                marginTop: this.originalElement.css("marginTop"),
                marginRight: this.originalElement.css("marginRight"),
                marginBottom: this.originalElement.css("marginBottom")
            }), this.originalElement.css({
                marginLeft: 0,
                marginTop: 0,
                marginRight: 0,
                marginBottom: 0
            }), this.originalResizeStyle = this.originalElement.css("resize"), this.originalElement.css("resize", "none"), this._proportionallyResizeElements.push(this.originalElement.css({
                position: "static",
                zoom: 1,
                display: "block"
            })), this.originalElement.css({margin: this.originalElement.css("margin")}), this._proportionallyResize()), this.handles = r.handles || (e(".ui-resizable-handle", this.element).length ? {
                n: ".ui-resizable-n",
                e: ".ui-resizable-e",
                s: ".ui-resizable-s",
                w: ".ui-resizable-w",
                se: ".ui-resizable-se",
                sw: ".ui-resizable-sw",
                ne: ".ui-resizable-ne",
                nw: ".ui-resizable-nw"
            } : "e,s,se"), this._handles = e(), this.handles.constructor === String) for ("all" === this.handles && (this.handles = "n,e,s,w,se,sw,ne,nw"), t = this.handles.split(","), this.handles = {}, i = 0; t.length > i; i++) s = e.trim(t[i]), a = "ui-resizable-" + s, n = e("<div class='ui-resizable-handle " + a + "'></div>"), n.css({zIndex: r.zIndex}), "se" === s && n.addClass("ui-icon ui-icon-gripsmall-diagonal-se"), this.handles[s] = ".ui-resizable-" + s, this.element.append(n);
            this._renderAxis = function (t) {
                var i, s, n, a;
                t = t || this.element;
                for (i in this.handles) this.handles[i].constructor === String ? this.handles[i] = this.element.children(this.handles[i]).first().show() : (this.handles[i].jquery || this.handles[i].nodeType) && (this.handles[i] = e(this.handles[i]), this._on(this.handles[i], {mousedown: o._mouseDown})), this.elementIsWrapper && this.originalElement[0].nodeName.match(/^(textarea|input|select|button)$/i) && (s = e(this.handles[i], this.element), a = /sw|ne|nw|se|n|s/.test(i) ? s.outerHeight() : s.outerWidth(), n = ["padding", /ne|nw|n/.test(i) ? "Top" : /se|sw|s/.test(i) ? "Bottom" : /^e$/.test(i) ? "Right" : "Left"].join(""), t.css(n, a), this._proportionallyResize()), this._handles = this._handles.add(this.handles[i])
            }, this._renderAxis(this.element), this._handles = this._handles.add(this.element.find(".ui-resizable-handle")), this._handles.disableSelection(), this._handles.mouseover(function () {
                o.resizing || (this.className && (n = this.className.match(/ui-resizable-(se|sw|ne|nw|n|e|s|w)/i)), o.axis = n && n[1] ? n[1] : "se")
            }), r.autoHide && (this._handles.hide(), e(this.element).addClass("ui-resizable-autohide").mouseenter(function () {
                r.disabled || (e(this).removeClass("ui-resizable-autohide"), o._handles.show())
            }).mouseleave(function () {
                r.disabled || o.resizing || (e(this).addClass("ui-resizable-autohide"), o._handles.hide())
            })), this._mouseInit()
        },
        _destroy: function () {
            this._mouseDestroy();
            var t, i = function (t) {
                e(t).removeClass("ui-resizable ui-resizable-disabled ui-resizable-resizing").removeData("resizable").removeData("ui-resizable").unbind(".resizable").find(".ui-resizable-handle").remove()
            };
            return this.elementIsWrapper && (i(this.element), t = this.element, this.originalElement.css({
                position: t.css("position"),
                width: t.outerWidth(),
                height: t.outerHeight(),
                top: t.css("top"),
                left: t.css("left")
            }).insertAfter(t), t.remove()), this.originalElement.css("resize", this.originalResizeStyle), i(this.originalElement), this
        },
        _mouseCapture: function (t) {
            var i, s, n = !1;
            for (i in this.handles) s = e(this.handles[i])[0], (s === t.target || e.contains(s, t.target)) && (n = !0);
            return !this.options.disabled && n
        },
        _mouseStart: function (t) {
            var i, s, n, a = this.options, o = this.element;
            return this.resizing = !0, this._renderProxy(), i = this._num(this.helper.css("left")), s = this._num(this.helper.css("top")), a.containment && (i += e(a.containment).scrollLeft() || 0, s += e(a.containment).scrollTop() || 0), this.offset = this.helper.offset(), this.position = {
                left: i,
                top: s
            }, this.size = this._helper ? {
                width: this.helper.width(),
                height: this.helper.height()
            } : {width: o.width(), height: o.height()}, this.originalSize = this._helper ? {
                width: o.outerWidth(),
                height: o.outerHeight()
            } : {width: o.width(), height: o.height()}, this.sizeDiff = {
                width: o.outerWidth() - o.width(),
                height: o.outerHeight() - o.height()
            }, this.originalPosition = {left: i, top: s}, this.originalMousePosition = {
                left: t.pageX,
                top: t.pageY
            }, this.aspectRatio = "number" == typeof a.aspectRatio ? a.aspectRatio : this.originalSize.width / this.originalSize.height || 1, n = e(".ui-resizable-" + this.axis).css("cursor"), e("body").css("cursor", "auto" === n ? this.axis + "-resize" : n), o.addClass("ui-resizable-resizing"), this._propagate("start", t), !0
        },
        _mouseDrag: function (t) {
            var i, s, n = this.originalMousePosition, a = this.axis, o = t.pageX - n.left || 0,
                r = t.pageY - n.top || 0, h = this._change[a];
            return this._updatePrevProperties(), h ? (i = h.apply(this, [t, o, r]), this._updateVirtualBoundaries(t.shiftKey), (this._aspectRatio || t.shiftKey) && (i = this._updateRatio(i, t)), i = this._respectSize(i, t), this._updateCache(i), this._propagate("resize", t), s = this._applyChanges(), !this._helper && this._proportionallyResizeElements.length && this._proportionallyResize(), e.isEmptyObject(s) || (this._updatePrevProperties(), this._trigger("resize", t, this.ui()), this._applyChanges()), !1) : !1
        },
        _mouseStop: function (t) {
            this.resizing = !1;
            var i, s, n, a, o, r, h, l = this.options, u = this;
            return this._helper && (i = this._proportionallyResizeElements, s = i.length && /textarea/i.test(i[0].nodeName), n = s && this._hasScroll(i[0], "left") ? 0 : u.sizeDiff.height, a = s ? 0 : u.sizeDiff.width, o = {
                width: u.helper.width() - a,
                height: u.helper.height() - n
            }, r = parseInt(u.element.css("left"), 10) + (u.position.left - u.originalPosition.left) || null, h = parseInt(u.element.css("top"), 10) + (u.position.top - u.originalPosition.top) || null, l.animate || this.element.css(e.extend(o, {
                top: h,
                left: r
            })), u.helper.height(u.size.height), u.helper.width(u.size.width), this._helper && !l.animate && this._proportionallyResize()), e("body").css("cursor", "auto"), this.element.removeClass("ui-resizable-resizing"), this._propagate("stop", t), this._helper && this.helper.remove(), !1
        },
        _updatePrevProperties: function () {
            this.prevPosition = {
                top: this.position.top,
                left: this.position.left
            }, this.prevSize = {width: this.size.width, height: this.size.height}
        },
        _applyChanges: function () {
            var e = {};
            return this.position.top !== this.prevPosition.top && (e.top = this.position.top + "px"), this.position.left !== this.prevPosition.left && (e.left = this.position.left + "px"), this.size.width !== this.prevSize.width && (e.width = this.size.width + "px"), this.size.height !== this.prevSize.height && (e.height = this.size.height + "px"), this.helper.css(e), e
        },
        _updateVirtualBoundaries: function (e) {
            var t, i, s, n, a, o = this.options;
            a = {
                minWidth: this._isNumber(o.minWidth) ? o.minWidth : 0,
                maxWidth: this._isNumber(o.maxWidth) ? o.maxWidth : 1 / 0,
                minHeight: this._isNumber(o.minHeight) ? o.minHeight : 0,
                maxHeight: this._isNumber(o.maxHeight) ? o.maxHeight : 1 / 0
            }, (this._aspectRatio || e) && (t = a.minHeight * this.aspectRatio, s = a.minWidth / this.aspectRatio, i = a.maxHeight * this.aspectRatio, n = a.maxWidth / this.aspectRatio, t > a.minWidth && (a.minWidth = t), s > a.minHeight && (a.minHeight = s), a.maxWidth > i && (a.maxWidth = i), a.maxHeight > n && (a.maxHeight = n)), this._vBoundaries = a
        },
        _updateCache: function (e) {
            this.offset = this.helper.offset(), this._isNumber(e.left) && (this.position.left = e.left), this._isNumber(e.top) && (this.position.top = e.top), this._isNumber(e.height) && (this.size.height = e.height), this._isNumber(e.width) && (this.size.width = e.width)
        },
        _updateRatio: function (e) {
            var t = this.position, i = this.size, s = this.axis;
            return this._isNumber(e.height) ? e.width = e.height * this.aspectRatio : this._isNumber(e.width) && (e.height = e.width / this.aspectRatio), "sw" === s && (e.left = t.left + (i.width - e.width), e.top = null), "nw" === s && (e.top = t.top + (i.height - e.height), e.left = t.left + (i.width - e.width)), e
        },
        _respectSize: function (e) {
            var t = this._vBoundaries, i = this.axis, s = this._isNumber(e.width) && t.maxWidth && t.maxWidth < e.width,
                n = this._isNumber(e.height) && t.maxHeight && t.maxHeight < e.height,
                a = this._isNumber(e.width) && t.minWidth && t.minWidth > e.width,
                o = this._isNumber(e.height) && t.minHeight && t.minHeight > e.height,
                r = this.originalPosition.left + this.originalSize.width, h = this.position.top + this.size.height,
                l = /sw|nw|w/.test(i), u = /nw|ne|n/.test(i);
            return a && (e.width = t.minWidth), o && (e.height = t.minHeight), s && (e.width = t.maxWidth), n && (e.height = t.maxHeight), a && l && (e.left = r - t.minWidth), s && l && (e.left = r - t.maxWidth), o && u && (e.top = h - t.minHeight), n && u && (e.top = h - t.maxHeight), e.width || e.height || e.left || !e.top ? e.width || e.height || e.top || !e.left || (e.left = null) : e.top = null, e
        },
        _getPaddingPlusBorderDimensions: function (e) {
            for (var t = 0, i = [], s = [e.css("borderTopWidth"), e.css("borderRightWidth"), e.css("borderBottomWidth"), e.css("borderLeftWidth")], n = [e.css("paddingTop"), e.css("paddingRight"), e.css("paddingBottom"), e.css("paddingLeft")]; 4 > t; t++) i[t] = parseInt(s[t], 10) || 0, i[t] += parseInt(n[t], 10) || 0;
            return {height: i[0] + i[2], width: i[1] + i[3]}
        },
        _proportionallyResize: function () {
            if (this._proportionallyResizeElements.length) for (var e, t = 0, i = this.helper || this.element; this._proportionallyResizeElements.length > t; t++) e = this._proportionallyResizeElements[t], this.outerDimensions || (this.outerDimensions = this._getPaddingPlusBorderDimensions(e)), e.css({
                height: i.height() - this.outerDimensions.height || 0,
                width: i.width() - this.outerDimensions.width || 0
            })
        },
        _renderProxy: function () {
            var t = this.element, i = this.options;
            this.elementOffset = t.offset(), this._helper ? (this.helper = this.helper || e("<div style='overflow:hidden;'></div>"), this.helper.addClass(this._helper).css({
                width: this.element.outerWidth() - 1,
                height: this.element.outerHeight() - 1,
                position: "absolute",
                left: this.elementOffset.left + "px",
                top: this.elementOffset.top + "px",
                zIndex: ++i.zIndex
            }), this.helper.appendTo("body").disableSelection()) : this.helper = this.element
        },
        _change: {
            e: function (e, t) {
                return {width: this.originalSize.width + t}
            }, w: function (e, t) {
                var i = this.originalSize, s = this.originalPosition;
                return {left: s.left + t, width: i.width - t}
            }, n: function (e, t, i) {
                var s = this.originalSize, n = this.originalPosition;
                return {top: n.top + i, height: s.height - i}
            }, s: function (e, t, i) {
                return {height: this.originalSize.height + i}
            }, se: function (t, i, s) {
                return e.extend(this._change.s.apply(this, arguments), this._change.e.apply(this, [t, i, s]))
            }, sw: function (t, i, s) {
                return e.extend(this._change.s.apply(this, arguments), this._change.w.apply(this, [t, i, s]))
            }, ne: function (t, i, s) {
                return e.extend(this._change.n.apply(this, arguments), this._change.e.apply(this, [t, i, s]))
            }, nw: function (t, i, s) {
                return e.extend(this._change.n.apply(this, arguments), this._change.w.apply(this, [t, i, s]))
            }
        },
        _propagate: function (t, i) {
            e.ui.plugin.call(this, t, [i, this.ui()]), "resize" !== t && this._trigger(t, i, this.ui())
        },
        plugins: {},
        ui: function () {
            return {
                originalElement: this.originalElement,
                element: this.element,
                helper: this.helper,
                position: this.position,
                size: this.size,
                originalSize: this.originalSize,
                originalPosition: this.originalPosition
            }
        }
    }), e.ui.plugin.add("resizable", "animate", {
        stop: function (t) {
            var i = e(this).resizable("instance"), s = i.options, n = i._proportionallyResizeElements,
                a = n.length && /textarea/i.test(n[0].nodeName),
                o = a && i._hasScroll(n[0], "left") ? 0 : i.sizeDiff.height, r = a ? 0 : i.sizeDiff.width,
                h = {width: i.size.width - r, height: i.size.height - o},
                l = parseInt(i.element.css("left"), 10) + (i.position.left - i.originalPosition.left) || null,
                u = parseInt(i.element.css("top"), 10) + (i.position.top - i.originalPosition.top) || null;
            i.element.animate(e.extend(h, u && l ? {top: u, left: l} : {}), {
                duration: s.animateDuration,
                easing: s.animateEasing,
                step: function () {
                    var s = {
                        width: parseInt(i.element.css("width"), 10),
                        height: parseInt(i.element.css("height"), 10),
                        top: parseInt(i.element.css("top"), 10),
                        left: parseInt(i.element.css("left"), 10)
                    };
                    n && n.length && e(n[0]).css({
                        width: s.width,
                        height: s.height
                    }), i._updateCache(s), i._propagate("resize", t)
                }
            })
        }
    }), e.ui.plugin.add("resizable", "containment", {
        start: function () {
            var t, i, s, n, a, o, r, h = e(this).resizable("instance"), l = h.options, u = h.element, d = l.containment,
                c = d instanceof e ? d.get(0) : /parent/.test(d) ? u.parent().get(0) : d;
            c && (h.containerElement = e(c), /document/.test(d) || d === document ? (h.containerOffset = {
                left: 0,
                top: 0
            }, h.containerPosition = {left: 0, top: 0}, h.parentData = {
                element: e(document),
                left: 0,
                top: 0,
                width: e(document).width(),
                height: e(document).height() || document.body.parentNode.scrollHeight
            }) : (t = e(c), i = [], e(["Top", "Right", "Left", "Bottom"]).each(function (e, s) {
                i[e] = h._num(t.css("padding" + s))
            }), h.containerOffset = t.offset(), h.containerPosition = t.position(), h.containerSize = {
                height: t.innerHeight() - i[3],
                width: t.innerWidth() - i[1]
            }, s = h.containerOffset, n = h.containerSize.height, a = h.containerSize.width, o = h._hasScroll(c, "left") ? c.scrollWidth : a, r = h._hasScroll(c) ? c.scrollHeight : n, h.parentData = {
                element: c,
                left: s.left,
                top: s.top,
                width: o,
                height: r
            }))
        }, resize: function (t) {
            var i, s, n, a, o = e(this).resizable("instance"), r = o.options, h = o.containerOffset, l = o.position,
                u = o._aspectRatio || t.shiftKey, d = {top: 0, left: 0}, c = o.containerElement, p = !0;
            c[0] !== document && /static/.test(c.css("position")) && (d = h), l.left < (o._helper ? h.left : 0) && (o.size.width = o.size.width + (o._helper ? o.position.left - h.left : o.position.left - d.left), u && (o.size.height = o.size.width / o.aspectRatio, p = !1), o.position.left = r.helper ? h.left : 0), l.top < (o._helper ? h.top : 0) && (o.size.height = o.size.height + (o._helper ? o.position.top - h.top : o.position.top), u && (o.size.width = o.size.height * o.aspectRatio, p = !1), o.position.top = o._helper ? h.top : 0), n = o.containerElement.get(0) === o.element.parent().get(0), a = /relative|absolute/.test(o.containerElement.css("position")), n && a ? (o.offset.left = o.parentData.left + o.position.left, o.offset.top = o.parentData.top + o.position.top) : (o.offset.left = o.element.offset().left, o.offset.top = o.element.offset().top), i = Math.abs(o.sizeDiff.width + (o._helper ? o.offset.left - d.left : o.offset.left - h.left)), s = Math.abs(o.sizeDiff.height + (o._helper ? o.offset.top - d.top : o.offset.top - h.top)), i + o.size.width >= o.parentData.width && (o.size.width = o.parentData.width - i, u && (o.size.height = o.size.width / o.aspectRatio, p = !1)), s + o.size.height >= o.parentData.height && (o.size.height = o.parentData.height - s, u && (o.size.width = o.size.height * o.aspectRatio, p = !1)), p || (o.position.left = o.prevPosition.left, o.position.top = o.prevPosition.top, o.size.width = o.prevSize.width, o.size.height = o.prevSize.height)
        }, stop: function () {
            var t = e(this).resizable("instance"), i = t.options, s = t.containerOffset, n = t.containerPosition,
                a = t.containerElement, o = e(t.helper), r = o.offset(), h = o.outerWidth() - t.sizeDiff.width,
                l = o.outerHeight() - t.sizeDiff.height;
            t._helper && !i.animate && /relative/.test(a.css("position")) && e(this).css({
                left: r.left - n.left - s.left,
                width: h,
                height: l
            }), t._helper && !i.animate && /static/.test(a.css("position")) && e(this).css({
                left: r.left - n.left - s.left,
                width: h,
                height: l
            })
        }
    }), e.ui.plugin.add("resizable", "alsoResize", {
        start: function () {
            var t = e(this).resizable("instance"), i = t.options;
            e(i.alsoResize).each(function () {
                var t = e(this);
                t.data("ui-resizable-alsoresize", {
                    width: parseInt(t.width(), 10),
                    height: parseInt(t.height(), 10),
                    left: parseInt(t.css("left"), 10),
                    top: parseInt(t.css("top"), 10)
                })
            })
        }, resize: function (t, i) {
            var s = e(this).resizable("instance"), n = s.options, a = s.originalSize, o = s.originalPosition, r = {
                height: s.size.height - a.height || 0,
                width: s.size.width - a.width || 0,
                top: s.position.top - o.top || 0,
                left: s.position.left - o.left || 0
            };
            e(n.alsoResize).each(function () {
                var t = e(this), s = e(this).data("ui-resizable-alsoresize"), n = {},
                    a = t.parents(i.originalElement[0]).length ? ["width", "height"] : ["width", "height", "top", "left"];
                e.each(a, function (e, t) {
                    var i = (s[t] || 0) + (r[t] || 0);
                    i && i >= 0 && (n[t] = i || null)
                }), t.css(n)
            })
        }, stop: function () {
            e(this).removeData("resizable-alsoresize")
        }
    }), e.ui.plugin.add("resizable", "ghost", {
        start: function () {
            var t = e(this).resizable("instance"), i = t.options, s = t.size;
            t.ghost = t.originalElement.clone(), t.ghost.css({
                opacity: .25,
                display: "block",
                position: "relative",
                height: s.height,
                width: s.width,
                margin: 0,
                left: 0,
                top: 0
            }).addClass("ui-resizable-ghost").addClass("string" == typeof i.ghost ? i.ghost : ""), t.ghost.appendTo(t.helper)
        }, resize: function () {
            var t = e(this).resizable("instance");
            t.ghost && t.ghost.css({position: "relative", height: t.size.height, width: t.size.width})
        }, stop: function () {
            var t = e(this).resizable("instance");
            t.ghost && t.helper && t.helper.get(0).removeChild(t.ghost.get(0))
        }
    }), e.ui.plugin.add("resizable", "grid", {
        resize: function () {
            var t, i = e(this).resizable("instance"), s = i.options, n = i.size, a = i.originalSize,
                o = i.originalPosition, r = i.axis, h = "number" == typeof s.grid ? [s.grid, s.grid] : s.grid,
                l = h[0] || 1, u = h[1] || 1, d = Math.round((n.width - a.width) / l) * l,
                c = Math.round((n.height - a.height) / u) * u, p = a.width + d, f = a.height + c,
                m = s.maxWidth && p > s.maxWidth, g = s.maxHeight && f > s.maxHeight, v = s.minWidth && s.minWidth > p,
                y = s.minHeight && s.minHeight > f;
            s.grid = h, v && (p += l), y && (f += u), m && (p -= l), g && (f -= u), /^(se|s|e)$/.test(r) ? (i.size.width = p, i.size.height = f) : /^(ne)$/.test(r) ? (i.size.width = p, i.size.height = f, i.position.top = o.top - c) : /^(sw)$/.test(r) ? (i.size.width = p, i.size.height = f, i.position.left = o.left - d) : ((0 >= f - u || 0 >= p - l) && (t = i._getPaddingPlusBorderDimensions(this)), f - u > 0 ? (i.size.height = f, i.position.top = o.top - c) : (f = u - t.height, i.size.height = f, i.position.top = o.top + a.height - f), p - l > 0 ? (i.size.width = p, i.position.left = o.left - d) : (p = l - t.width, i.size.width = p, i.position.left = o.left + a.width - p))
        }
    }), e.ui.resizable, e.widget("ui.selectable", e.ui.mouse, {
        version: "1.11.4",
        options: {
            appendTo: "body",
            autoRefresh: !0,
            distance: 0,
            filter: "*",
            tolerance: "touch",
            selected: null,
            selecting: null,
            start: null,
            stop: null,
            unselected: null,
            unselecting: null
        },
        _create: function () {
            var t, i = this;
            this.element.addClass("ui-selectable"), this.dragged = !1, this.refresh = function () {
                t = e(i.options.filter, i.element[0]), t.addClass("ui-selectee"), t.each(function () {
                    var t = e(this), i = t.offset();
                    e.data(this, "selectable-item", {
                        element: this,
                        $element: t,
                        left: i.left,
                        top: i.top,
                        right: i.left + t.outerWidth(),
                        bottom: i.top + t.outerHeight(),
                        startselected: !1,
                        selected: t.hasClass("ui-selected"),
                        selecting: t.hasClass("ui-selecting"),
                        unselecting: t.hasClass("ui-unselecting")
                    })
                })
            }, this.refresh(), this.selectees = t.addClass("ui-selectee"), this._mouseInit(), this.helper = e("<div class='ui-selectable-helper'></div>")
        },
        _destroy: function () {
            this.selectees.removeClass("ui-selectee").removeData("selectable-item"), this.element.removeClass("ui-selectable ui-selectable-disabled"), this._mouseDestroy()
        },
        _mouseStart: function (t) {
            var i = this, s = this.options;
            this.opos = [t.pageX, t.pageY], this.options.disabled || (this.selectees = e(s.filter, this.element[0]), this._trigger("start", t), e(s.appendTo).append(this.helper), this.helper.css({
                left: t.pageX,
                top: t.pageY,
                width: 0,
                height: 0
            }), s.autoRefresh && this.refresh(), this.selectees.filter(".ui-selected").each(function () {
                var s = e.data(this, "selectable-item");
                s.startselected = !0, t.metaKey || t.ctrlKey || (s.$element.removeClass("ui-selected"), s.selected = !1, s.$element.addClass("ui-unselecting"), s.unselecting = !0, i._trigger("unselecting", t, {unselecting: s.element}))
            }), e(t.target).parents().addBack().each(function () {
                var s, n = e.data(this, "selectable-item");
                return n ? (s = !t.metaKey && !t.ctrlKey || !n.$element.hasClass("ui-selected"), n.$element.removeClass(s ? "ui-unselecting" : "ui-selected").addClass(s ? "ui-selecting" : "ui-unselecting"), n.unselecting = !s, n.selecting = s, n.selected = s, s ? i._trigger("selecting", t, {selecting: n.element}) : i._trigger("unselecting", t, {unselecting: n.element}), !1) : void 0
            }))
        },
        _mouseDrag: function (t) {
            if (this.dragged = !0, !this.options.disabled) {
                var i, s = this, n = this.options, a = this.opos[0], o = this.opos[1], r = t.pageX, h = t.pageY;
                return a > r && (i = r, r = a, a = i), o > h && (i = h, h = o, o = i), this.helper.css({
                    left: a,
                    top: o,
                    width: r - a,
                    height: h - o
                }), this.selectees.each(function () {
                    var i = e.data(this, "selectable-item"), l = !1;
                    i && i.element !== s.element[0] && ("touch" === n.tolerance ? l = !(i.left > r || a > i.right || i.top > h || o > i.bottom) : "fit" === n.tolerance && (l = i.left > a && r > i.right && i.top > o && h > i.bottom), l ? (i.selected && (i.$element.removeClass("ui-selected"), i.selected = !1), i.unselecting && (i.$element.removeClass("ui-unselecting"), i.unselecting = !1), i.selecting || (i.$element.addClass("ui-selecting"), i.selecting = !0, s._trigger("selecting", t, {selecting: i.element}))) : (i.selecting && ((t.metaKey || t.ctrlKey) && i.startselected ? (i.$element.removeClass("ui-selecting"), i.selecting = !1, i.$element.addClass("ui-selected"), i.selected = !0) : (i.$element.removeClass("ui-selecting"), i.selecting = !1, i.startselected && (i.$element.addClass("ui-unselecting"), i.unselecting = !0), s._trigger("unselecting", t, {unselecting: i.element}))), i.selected && (t.metaKey || t.ctrlKey || i.startselected || (i.$element.removeClass("ui-selected"), i.selected = !1, i.$element.addClass("ui-unselecting"), i.unselecting = !0, s._trigger("unselecting", t, {unselecting: i.element})))))
                }), !1
            }
        },
        _mouseStop: function (t) {
            var i = this;
            return this.dragged = !1, e(".ui-unselecting", this.element[0]).each(function () {
                var s = e.data(this, "selectable-item");
                s.$element.removeClass("ui-unselecting"), s.unselecting = !1, s.startselected = !1, i._trigger("unselected", t, {unselected: s.element})
            }), e(".ui-selecting", this.element[0]).each(function () {
                var s = e.data(this, "selectable-item");
                s.$element.removeClass("ui-selecting").addClass("ui-selected"), s.selecting = !1, s.selected = !0, s.startselected = !0, i._trigger("selected", t, {selected: s.element})
            }), this._trigger("stop", t), this.helper.remove(), !1
        }
    }), e.widget("ui.sortable", e.ui.mouse, {
        version: "1.11.4",
        widgetEventPrefix: "sort",
        ready: !1,
        options: {
            appendTo: "parent",
            axis: !1,
            connectWith: !1,
            containment: !1,
            cursor: "auto",
            cursorAt: !1,
            dropOnEmpty: !0,
            forcePlaceholderSize: !1,
            forceHelperSize: !1,
            grid: !1,
            handle: !1,
            helper: "original",
            items: "> *",
            opacity: !1,
            placeholder: !1,
            revert: !1,
            scroll: !0,
            scrollSensitivity: 20,
            scrollSpeed: 20,
            scope: "default",
            tolerance: "intersect",
            zIndex: 1e3,
            activate: null,
            beforeStop: null,
            change: null,
            deactivate: null,
            out: null,
            over: null,
            receive: null,
            remove: null,
            sort: null,
            start: null,
            stop: null,
            update: null
        },
        _isOverAxis: function (e, t, i) {
            return e >= t && t + i > e
        },
        _isFloating: function (e) {
            return /left|right/.test(e.css("float")) || /inline|table-cell/.test(e.css("display"))
        },
        _create: function () {
            this.containerCache = {}, this.element.addClass("ui-sortable"), this.refresh(), this.offset = this.element.offset(), this._mouseInit(), this._setHandleClassName(), this.ready = !0
        },
        _setOption: function (e, t) {
            this._super(e, t), "handle" === e && this._setHandleClassName()
        },
        _setHandleClassName: function () {
            this.element.find(".ui-sortable-handle").removeClass("ui-sortable-handle"), e.each(this.items, function () {
                (this.instance.options.handle ? this.item.find(this.instance.options.handle) : this.item).addClass("ui-sortable-handle")
            })
        },
        _destroy: function () {
            this.element.removeClass("ui-sortable ui-sortable-disabled").find(".ui-sortable-handle").removeClass("ui-sortable-handle"), this._mouseDestroy();
            for (var e = this.items.length - 1; e >= 0; e--) this.items[e].item.removeData(this.widgetName + "-item");
            return this
        },
        _mouseCapture: function (t, i) {
            var s = null, n = !1, a = this;
            return this.reverting ? !1 : this.options.disabled || "static" === this.options.type ? !1 : (this._refreshItems(t), e(t.target).parents().each(function () {
                return e.data(this, a.widgetName + "-item") === a ? (s = e(this), !1) : void 0
            }), e.data(t.target, a.widgetName + "-item") === a && (s = e(t.target)), s ? !this.options.handle || i || (e(this.options.handle, s).find("*").addBack().each(function () {
                this === t.target && (n = !0)
            }), n) ? (this.currentItem = s, this._removeCurrentsFromItems(), !0) : !1 : !1)
        },
        _mouseStart: function (t, i, s) {
            var n, a, o = this.options;
            if (this.currentContainer = this, this.refreshPositions(), this.helper = this._createHelper(t), this._cacheHelperProportions(), this._cacheMargins(), this.scrollParent = this.helper.scrollParent(), this.offset = this.currentItem.offset(), this.offset = {
                top: this.offset.top - this.margins.top,
                left: this.offset.left - this.margins.left
            }, e.extend(this.offset, {
                click: {left: t.pageX - this.offset.left, top: t.pageY - this.offset.top},
                parent: this._getParentOffset(),
                relative: this._getRelativeOffset()
            }), this.helper.css("position", "absolute"), this.cssPosition = this.helper.css("position"), this.originalPosition = this._generatePosition(t), this.originalPageX = t.pageX, this.originalPageY = t.pageY, o.cursorAt && this._adjustOffsetFromHelper(o.cursorAt), this.domPosition = {
                prev: this.currentItem.prev()[0],
                parent: this.currentItem.parent()[0]
            }, this.helper[0] !== this.currentItem[0] && this.currentItem.hide(), this._createPlaceholder(), o.containment && this._setContainment(), o.cursor && "auto" !== o.cursor && (a = this.document.find("body"), this.storedCursor = a.css("cursor"), a.css("cursor", o.cursor), this.storedStylesheet = e("<style>*{ cursor: " + o.cursor + " !important; }</style>").appendTo(a)), o.opacity && (this.helper.css("opacity") && (this._storedOpacity = this.helper.css("opacity")), this.helper.css("opacity", o.opacity)), o.zIndex && (this.helper.css("zIndex") && (this._storedZIndex = this.helper.css("zIndex")), this.helper.css("zIndex", o.zIndex)), this.scrollParent[0] !== this.document[0] && "HTML" !== this.scrollParent[0].tagName && (this.overflowOffset = this.scrollParent.offset()), this._trigger("start", t, this._uiHash()), this._preserveHelperProportions || this._cacheHelperProportions(), !s) for (n = this.containers.length - 1; n >= 0; n--) this.containers[n]._trigger("activate", t, this._uiHash(this));
            return e.ui.ddmanager && (e.ui.ddmanager.current = this), e.ui.ddmanager && !o.dropBehaviour && e.ui.ddmanager.prepareOffsets(this, t), this.dragging = !0, this.helper.addClass("ui-sortable-helper"), this._mouseDrag(t), !0
        },
        _mouseDrag: function (t) {
            var i, s, n, a, o = this.options, r = !1;
            for (this.position = this._generatePosition(t), this.positionAbs = this._convertPositionTo("absolute"), this.lastPositionAbs || (this.lastPositionAbs = this.positionAbs), this.options.scroll && (this.scrollParent[0] !== this.document[0] && "HTML" !== this.scrollParent[0].tagName ? (this.overflowOffset.top + this.scrollParent[0].offsetHeight - t.pageY < o.scrollSensitivity ? this.scrollParent[0].scrollTop = r = this.scrollParent[0].scrollTop + o.scrollSpeed : t.pageY - this.overflowOffset.top < o.scrollSensitivity && (this.scrollParent[0].scrollTop = r = this.scrollParent[0].scrollTop - o.scrollSpeed), this.overflowOffset.left + this.scrollParent[0].offsetWidth - t.pageX < o.scrollSensitivity ? this.scrollParent[0].scrollLeft = r = this.scrollParent[0].scrollLeft + o.scrollSpeed : t.pageX - this.overflowOffset.left < o.scrollSensitivity && (this.scrollParent[0].scrollLeft = r = this.scrollParent[0].scrollLeft - o.scrollSpeed)) : (t.pageY - this.document.scrollTop() < o.scrollSensitivity ? r = this.document.scrollTop(this.document.scrollTop() - o.scrollSpeed) : this.window.height() - (t.pageY - this.document.scrollTop()) < o.scrollSensitivity && (r = this.document.scrollTop(this.document.scrollTop() + o.scrollSpeed)), t.pageX - this.document.scrollLeft() < o.scrollSensitivity ? r = this.document.scrollLeft(this.document.scrollLeft() - o.scrollSpeed) : this.window.width() - (t.pageX - this.document.scrollLeft()) < o.scrollSensitivity && (r = this.document.scrollLeft(this.document.scrollLeft() + o.scrollSpeed))), r !== !1 && e.ui.ddmanager && !o.dropBehaviour && e.ui.ddmanager.prepareOffsets(this, t)), this.positionAbs = this._convertPositionTo("absolute"), this.options.axis && "y" === this.options.axis || (this.helper[0].style.left = this.position.left + "px"), this.options.axis && "x" === this.options.axis || (this.helper[0].style.top = this.position.top + "px"), i = this.items.length - 1; i >= 0; i--) if (s = this.items[i], n = s.item[0], a = this._intersectsWithPointer(s), a && s.instance === this.currentContainer && n !== this.currentItem[0] && this.placeholder[1 === a ? "next" : "prev"]()[0] !== n && !e.contains(this.placeholder[0], n) && ("semi-dynamic" === this.options.type ? !e.contains(this.element[0], n) : !0)) {
                if (this.direction = 1 === a ? "down" : "up", "pointer" !== this.options.tolerance && !this._intersectsWithSides(s)) break;
                this._rearrange(t, s), this._trigger("change", t, this._uiHash());
                break
            }
            return this._contactContainers(t), e.ui.ddmanager && e.ui.ddmanager.drag(this, t), this._trigger("sort", t, this._uiHash()), this.lastPositionAbs = this.positionAbs, !1
        },
        _mouseStop: function (t, i) {
            if (t) {
                if (e.ui.ddmanager && !this.options.dropBehaviour && e.ui.ddmanager.drop(this, t), this.options.revert) {
                    var s = this, n = this.placeholder.offset(), a = this.options.axis, o = {};
                    a && "x" !== a || (o.left = n.left - this.offset.parent.left - this.margins.left + (this.offsetParent[0] === this.document[0].body ? 0 : this.offsetParent[0].scrollLeft)), a && "y" !== a || (o.top = n.top - this.offset.parent.top - this.margins.top + (this.offsetParent[0] === this.document[0].body ? 0 : this.offsetParent[0].scrollTop)), this.reverting = !0, e(this.helper).animate(o, parseInt(this.options.revert, 10) || 500, function () {
                        s._clear(t)
                    })
                } else this._clear(t, i);
                return !1
            }
        },
        cancel: function () {
            if (this.dragging) {
                this._mouseUp({target: null}), "original" === this.options.helper ? this.currentItem.css(this._storedCSS).removeClass("ui-sortable-helper") : this.currentItem.show();
                for (var t = this.containers.length - 1; t >= 0; t--) this.containers[t]._trigger("deactivate", null, this._uiHash(this)), this.containers[t].containerCache.over && (this.containers[t]._trigger("out", null, this._uiHash(this)), this.containers[t].containerCache.over = 0)
            }
            return this.placeholder && (this.placeholder[0].parentNode && this.placeholder[0].parentNode.removeChild(this.placeholder[0]), "original" !== this.options.helper && this.helper && this.helper[0].parentNode && this.helper.remove(), e.extend(this, {
                helper: null,
                dragging: !1,
                reverting: !1,
                _noFinalSort: null
            }), this.domPosition.prev ? e(this.domPosition.prev).after(this.currentItem) : e(this.domPosition.parent).prepend(this.currentItem)), this
        },
        serialize: function (t) {
            var i = this._getItemsAsjQuery(t && t.connected), s = [];
            return t = t || {}, e(i).each(function () {
                var i = (e(t.item || this).attr(t.attribute || "id") || "").match(t.expression || /(.+)[\-=_](.+)/);
                i && s.push((t.key || i[1] + "[]") + "=" + (t.key && t.expression ? i[1] : i[2]))
            }), !s.length && t.key && s.push(t.key + "="), s.join("&")
        },
        toArray: function (t) {
            var i = this._getItemsAsjQuery(t && t.connected), s = [];
            return t = t || {}, i.each(function () {
                s.push(e(t.item || this).attr(t.attribute || "id") || "")
            }), s
        },
        _intersectsWith: function (e) {
            var t = this.positionAbs.left, i = t + this.helperProportions.width, s = this.positionAbs.top,
                n = s + this.helperProportions.height, a = e.left, o = a + e.width, r = e.top, h = r + e.height,
                l = this.offset.click.top, u = this.offset.click.left,
                d = "x" === this.options.axis || s + l > r && h > s + l,
                c = "y" === this.options.axis || t + u > a && o > t + u, p = d && c;
            return "pointer" === this.options.tolerance || this.options.forcePointerForContainers || "pointer" !== this.options.tolerance && this.helperProportions[this.floating ? "width" : "height"] > e[this.floating ? "width" : "height"] ? p : t + this.helperProportions.width / 2 > a && o > i - this.helperProportions.width / 2 && s + this.helperProportions.height / 2 > r && h > n - this.helperProportions.height / 2
        },
        _intersectsWithPointer: function (e) {
            var t = "x" === this.options.axis || this._isOverAxis(this.positionAbs.top + this.offset.click.top, e.top, e.height),
                i = "y" === this.options.axis || this._isOverAxis(this.positionAbs.left + this.offset.click.left, e.left, e.width),
                s = t && i, n = this._getDragVerticalDirection(), a = this._getDragHorizontalDirection();
            return s ? this.floating ? a && "right" === a || "down" === n ? 2 : 1 : n && ("down" === n ? 2 : 1) : !1
        },
        _intersectsWithSides: function (e) {
            var t = this._isOverAxis(this.positionAbs.top + this.offset.click.top, e.top + e.height / 2, e.height),
                i = this._isOverAxis(this.positionAbs.left + this.offset.click.left, e.left + e.width / 2, e.width),
                s = this._getDragVerticalDirection(), n = this._getDragHorizontalDirection();
            return this.floating && n ? "right" === n && i || "left" === n && !i : s && ("down" === s && t || "up" === s && !t)
        },
        _getDragVerticalDirection: function () {
            var e = this.positionAbs.top - this.lastPositionAbs.top;
            return 0 !== e && (e > 0 ? "down" : "up")
        },
        _getDragHorizontalDirection: function () {
            var e = this.positionAbs.left - this.lastPositionAbs.left;
            return 0 !== e && (e > 0 ? "right" : "left")
        },
        refresh: function (e) {
            return this._refreshItems(e), this._setHandleClassName(), this.refreshPositions(), this
        },
        _connectWith: function () {
            var e = this.options;
            return e.connectWith.constructor === String ? [e.connectWith] : e.connectWith
        },
        _getItemsAsjQuery: function (t) {
            function i() {
                r.push(this)
            }

            var s, n, a, o, r = [], h = [], l = this._connectWith();
            if (l && t) for (s = l.length - 1; s >= 0; s--) for (a = e(l[s], this.document[0]), n = a.length - 1; n >= 0; n--) o = e.data(a[n], this.widgetFullName), o && o !== this && !o.options.disabled && h.push([e.isFunction(o.options.items) ? o.options.items.call(o.element) : e(o.options.items, o.element).not(".ui-sortable-helper").not(".ui-sortable-placeholder"), o]);
            for (h.push([e.isFunction(this.options.items) ? this.options.items.call(this.element, null, {
                options: this.options,
                item: this.currentItem
            }) : e(this.options.items, this.element).not(".ui-sortable-helper").not(".ui-sortable-placeholder"), this]), s = h.length - 1; s >= 0; s--) h[s][0].each(i);
            return e(r)
        },
        _removeCurrentsFromItems: function () {
            var t = this.currentItem.find(":data(" + this.widgetName + "-item)");
            this.items = e.grep(this.items, function (e) {
                for (var i = 0; t.length > i; i++) if (t[i] === e.item[0]) return !1;
                return !0
            })
        },
        _refreshItems: function (t) {
            this.items = [], this.containers = [this];
            var i, s, n, a, o, r, h, l, u = this.items,
                d = [[e.isFunction(this.options.items) ? this.options.items.call(this.element[0], t, {item: this.currentItem}) : e(this.options.items, this.element), this]],
                c = this._connectWith();
            if (c && this.ready) for (i = c.length - 1; i >= 0; i--) for (n = e(c[i], this.document[0]), s = n.length - 1; s >= 0; s--) a = e.data(n[s], this.widgetFullName), a && a !== this && !a.options.disabled && (d.push([e.isFunction(a.options.items) ? a.options.items.call(a.element[0], t, {item: this.currentItem}) : e(a.options.items, a.element), a]), this.containers.push(a));
            for (i = d.length - 1; i >= 0; i--) for (o = d[i][1], r = d[i][0], s = 0, l = r.length; l > s; s++) h = e(r[s]), h.data(this.widgetName + "-item", o), u.push({
                item: h,
                instance: o,
                width: 0,
                height: 0,
                left: 0,
                top: 0
            })
        },
        refreshPositions: function (t) {
            this.floating = this.items.length ? "x" === this.options.axis || this._isFloating(this.items[0].item) : !1, this.offsetParent && this.helper && (this.offset.parent = this._getParentOffset());
            var i, s, n, a;
            for (i = this.items.length - 1; i >= 0; i--) s = this.items[i], s.instance !== this.currentContainer && this.currentContainer && s.item[0] !== this.currentItem[0] || (n = this.options.toleranceElement ? e(this.options.toleranceElement, s.item) : s.item, t || (s.width = n.outerWidth(), s.height = n.outerHeight()), a = n.offset(), s.left = a.left, s.top = a.top);
            if (this.options.custom && this.options.custom.refreshContainers) this.options.custom.refreshContainers.call(this); else for (i = this.containers.length - 1; i >= 0; i--) a = this.containers[i].element.offset(), this.containers[i].containerCache.left = a.left, this.containers[i].containerCache.top = a.top, this.containers[i].containerCache.width = this.containers[i].element.outerWidth(), this.containers[i].containerCache.height = this.containers[i].element.outerHeight();
            return this
        },
        _createPlaceholder: function (t) {
            t = t || this;
            var i, s = t.options;
            s.placeholder && s.placeholder.constructor !== String || (i = s.placeholder, s.placeholder = {
                element: function () {
                    var s = t.currentItem[0].nodeName.toLowerCase(),
                        n = e("<" + s + ">", t.document[0]).addClass(i || t.currentItem[0].className + " ui-sortable-placeholder").removeClass("ui-sortable-helper");
                    return "tbody" === s ? t._createTrPlaceholder(t.currentItem.find("tr").eq(0), e("<tr>", t.document[0]).appendTo(n)) : "tr" === s ? t._createTrPlaceholder(t.currentItem, n) : "img" === s && n.attr("src", t.currentItem.attr("src")), i || n.css("visibility", "hidden"), n
                }, update: function (e, n) {
                    (!i || s.forcePlaceholderSize) && (n.height() || n.height(t.currentItem.innerHeight() - parseInt(t.currentItem.css("paddingTop") || 0, 10) - parseInt(t.currentItem.css("paddingBottom") || 0, 10)), n.width() || n.width(t.currentItem.innerWidth() - parseInt(t.currentItem.css("paddingLeft") || 0, 10) - parseInt(t.currentItem.css("paddingRight") || 0, 10)))
                }
            }), t.placeholder = e(s.placeholder.element.call(t.element, t.currentItem)), t.currentItem.after(t.placeholder), s.placeholder.update(t, t.placeholder)
        },
        _createTrPlaceholder: function (t, i) {
            var s = this;
            t.children().each(function () {
                e("<td>&#160;</td>", s.document[0]).attr("colspan", e(this).attr("colspan") || 1).appendTo(i)
            })
        },
        _contactContainers: function (t) {
            var i, s, n, a, o, r, h, l, u, d, c = null, p = null;
            for (i = this.containers.length - 1; i >= 0; i--) if (!e.contains(this.currentItem[0], this.containers[i].element[0])) if (this._intersectsWith(this.containers[i].containerCache)) {
                if (c && e.contains(this.containers[i].element[0], c.element[0])) continue;
                c = this.containers[i], p = i
            } else this.containers[i].containerCache.over && (this.containers[i]._trigger("out", t, this._uiHash(this)), this.containers[i].containerCache.over = 0);
            if (c) if (1 === this.containers.length) this.containers[p].containerCache.over || (this.containers[p]._trigger("over", t, this._uiHash(this)), this.containers[p].containerCache.over = 1); else {
                for (n = 1e4, a = null, u = c.floating || this._isFloating(this.currentItem), o = u ? "left" : "top", r = u ? "width" : "height", d = u ? "clientX" : "clientY", s = this.items.length - 1; s >= 0; s--) e.contains(this.containers[p].element[0], this.items[s].item[0]) && this.items[s].item[0] !== this.currentItem[0] && (h = this.items[s].item.offset()[o], l = !1, t[d] - h > this.items[s][r] / 2 && (l = !0), n > Math.abs(t[d] - h) && (n = Math.abs(t[d] - h), a = this.items[s], this.direction = l ? "up" : "down"));
                if (!a && !this.options.dropOnEmpty) return;
                if (this.currentContainer === this.containers[p]) return this.currentContainer.containerCache.over || (this.containers[p]._trigger("over", t, this._uiHash()), this.currentContainer.containerCache.over = 1), void 0;
                a ? this._rearrange(t, a, null, !0) : this._rearrange(t, null, this.containers[p].element, !0), this._trigger("change", t, this._uiHash()), this.containers[p]._trigger("change", t, this._uiHash(this)), this.currentContainer = this.containers[p], this.options.placeholder.update(this.currentContainer, this.placeholder), this.containers[p]._trigger("over", t, this._uiHash(this)), this.containers[p].containerCache.over = 1
            }
        },
        _createHelper: function (t) {
            var i = this.options,
                s = e.isFunction(i.helper) ? e(i.helper.apply(this.element[0], [t, this.currentItem])) : "clone" === i.helper ? this.currentItem.clone() : this.currentItem;
            return s.parents("body").length || e("parent" !== i.appendTo ? i.appendTo : this.currentItem[0].parentNode)[0].appendChild(s[0]), s[0] === this.currentItem[0] && (this._storedCSS = {
                width: this.currentItem[0].style.width,
                height: this.currentItem[0].style.height,
                position: this.currentItem.css("position"),
                top: this.currentItem.css("top"),
                left: this.currentItem.css("left")
            }), (!s[0].style.width || i.forceHelperSize) && s.width(this.currentItem.width()), (!s[0].style.height || i.forceHelperSize) && s.height(this.currentItem.height()), s
        },
        _adjustOffsetFromHelper: function (t) {
            "string" == typeof t && (t = t.split(" ")), e.isArray(t) && (t = {
                left: +t[0],
                top: +t[1] || 0
            }), "left" in t && (this.offset.click.left = t.left + this.margins.left), "right" in t && (this.offset.click.left = this.helperProportions.width - t.right + this.margins.left), "top" in t && (this.offset.click.top = t.top + this.margins.top), "bottom" in t && (this.offset.click.top = this.helperProportions.height - t.bottom + this.margins.top)
        },
        _getParentOffset: function () {
            this.offsetParent = this.helper.offsetParent();
            var t = this.offsetParent.offset();
            return "absolute" === this.cssPosition && this.scrollParent[0] !== this.document[0] && e.contains(this.scrollParent[0], this.offsetParent[0]) && (t.left += this.scrollParent.scrollLeft(), t.top += this.scrollParent.scrollTop()), (this.offsetParent[0] === this.document[0].body || this.offsetParent[0].tagName && "html" === this.offsetParent[0].tagName.toLowerCase() && e.ui.ie) && (t = {
                top: 0,
                left: 0
            }), {
                top: t.top + (parseInt(this.offsetParent.css("borderTopWidth"), 10) || 0),
                left: t.left + (parseInt(this.offsetParent.css("borderLeftWidth"), 10) || 0)
            }
        },
        _getRelativeOffset: function () {
            if ("relative" === this.cssPosition) {
                var e = this.currentItem.position();
                return {
                    top: e.top - (parseInt(this.helper.css("top"), 10) || 0) + this.scrollParent.scrollTop(),
                    left: e.left - (parseInt(this.helper.css("left"), 10) || 0) + this.scrollParent.scrollLeft()
                }
            }
            return {top: 0, left: 0}
        },
        _cacheMargins: function () {
            this.margins = {
                left: parseInt(this.currentItem.css("marginLeft"), 10) || 0,
                top: parseInt(this.currentItem.css("marginTop"), 10) || 0
            }
        },
        _cacheHelperProportions: function () {
            this.helperProportions = {width: this.helper.outerWidth(), height: this.helper.outerHeight()}
        },
        _setContainment: function () {
            var t, i, s, n = this.options;
            "parent" === n.containment && (n.containment = this.helper[0].parentNode), ("document" === n.containment || "window" === n.containment) && (this.containment = [0 - this.offset.relative.left - this.offset.parent.left, 0 - this.offset.relative.top - this.offset.parent.top, "document" === n.containment ? this.document.width() : this.window.width() - this.helperProportions.width - this.margins.left, ("document" === n.containment ? this.document.width() : this.window.height() || this.document[0].body.parentNode.scrollHeight) - this.helperProportions.height - this.margins.top]), /^(document|window|parent)$/.test(n.containment) || (t = e(n.containment)[0], i = e(n.containment).offset(), s = "hidden" !== e(t).css("overflow"), this.containment = [i.left + (parseInt(e(t).css("borderLeftWidth"), 10) || 0) + (parseInt(e(t).css("paddingLeft"), 10) || 0) - this.margins.left, i.top + (parseInt(e(t).css("borderTopWidth"), 10) || 0) + (parseInt(e(t).css("paddingTop"), 10) || 0) - this.margins.top, i.left + (s ? Math.max(t.scrollWidth, t.offsetWidth) : t.offsetWidth) - (parseInt(e(t).css("borderLeftWidth"), 10) || 0) - (parseInt(e(t).css("paddingRight"), 10) || 0) - this.helperProportions.width - this.margins.left, i.top + (s ? Math.max(t.scrollHeight, t.offsetHeight) : t.offsetHeight) - (parseInt(e(t).css("borderTopWidth"), 10) || 0) - (parseInt(e(t).css("paddingBottom"), 10) || 0) - this.helperProportions.height - this.margins.top])
        },
        _convertPositionTo: function (t, i) {
            i || (i = this.position);
            var s = "absolute" === t ? 1 : -1,
                n = "absolute" !== this.cssPosition || this.scrollParent[0] !== this.document[0] && e.contains(this.scrollParent[0], this.offsetParent[0]) ? this.scrollParent : this.offsetParent,
                a = /(html|body)/i.test(n[0].tagName);
            return {
                top: i.top + this.offset.relative.top * s + this.offset.parent.top * s - ("fixed" === this.cssPosition ? -this.scrollParent.scrollTop() : a ? 0 : n.scrollTop()) * s,
                left: i.left + this.offset.relative.left * s + this.offset.parent.left * s - ("fixed" === this.cssPosition ? -this.scrollParent.scrollLeft() : a ? 0 : n.scrollLeft()) * s
            }
        },
        _generatePosition: function (t) {
            var i, s, n = this.options, a = t.pageX, o = t.pageY,
                r = "absolute" !== this.cssPosition || this.scrollParent[0] !== this.document[0] && e.contains(this.scrollParent[0], this.offsetParent[0]) ? this.scrollParent : this.offsetParent,
                h = /(html|body)/i.test(r[0].tagName);
            return "relative" !== this.cssPosition || this.scrollParent[0] !== this.document[0] && this.scrollParent[0] !== this.offsetParent[0] || (this.offset.relative = this._getRelativeOffset()), this.originalPosition && (this.containment && (t.pageX - this.offset.click.left < this.containment[0] && (a = this.containment[0] + this.offset.click.left), t.pageY - this.offset.click.top < this.containment[1] && (o = this.containment[1] + this.offset.click.top), t.pageX - this.offset.click.left > this.containment[2] && (a = this.containment[2] + this.offset.click.left), t.pageY - this.offset.click.top > this.containment[3] && (o = this.containment[3] + this.offset.click.top)), n.grid && (i = this.originalPageY + Math.round((o - this.originalPageY) / n.grid[1]) * n.grid[1], o = this.containment ? i - this.offset.click.top >= this.containment[1] && i - this.offset.click.top <= this.containment[3] ? i : i - this.offset.click.top >= this.containment[1] ? i - n.grid[1] : i + n.grid[1] : i, s = this.originalPageX + Math.round((a - this.originalPageX) / n.grid[0]) * n.grid[0], a = this.containment ? s - this.offset.click.left >= this.containment[0] && s - this.offset.click.left <= this.containment[2] ? s : s - this.offset.click.left >= this.containment[0] ? s - n.grid[0] : s + n.grid[0] : s)), {
                top: o - this.offset.click.top - this.offset.relative.top - this.offset.parent.top + ("fixed" === this.cssPosition ? -this.scrollParent.scrollTop() : h ? 0 : r.scrollTop()),
                left: a - this.offset.click.left - this.offset.relative.left - this.offset.parent.left + ("fixed" === this.cssPosition ? -this.scrollParent.scrollLeft() : h ? 0 : r.scrollLeft())
            }
        },
        _rearrange: function (e, t, i, s) {
            i ? i[0].appendChild(this.placeholder[0]) : t.item[0].parentNode.insertBefore(this.placeholder[0], "down" === this.direction ? t.item[0] : t.item[0].nextSibling), this.counter = this.counter ? ++this.counter : 1;
            var n = this.counter;
            this._delay(function () {
                n === this.counter && this.refreshPositions(!s)
            })
        },
        _clear: function (e, t) {
            function i(e, t, i) {
                return function (s) {
                    i._trigger(e, s, t._uiHash(t))
                }
            }

            this.reverting = !1;
            var s, n = [];
            if (!this._noFinalSort && this.currentItem.parent().length && this.placeholder.before(this.currentItem), this._noFinalSort = null, this.helper[0] === this.currentItem[0]) {
                for (s in this._storedCSS) ("auto" === this._storedCSS[s] || "static" === this._storedCSS[s]) && (this._storedCSS[s] = "");
                this.currentItem.css(this._storedCSS).removeClass("ui-sortable-helper")
            } else this.currentItem.show();
            for (this.fromOutside && !t && n.push(function (e) {
                this._trigger("receive", e, this._uiHash(this.fromOutside))
            }), !this.fromOutside && this.domPosition.prev === this.currentItem.prev().not(".ui-sortable-helper")[0] && this.domPosition.parent === this.currentItem.parent()[0] || t || n.push(function (e) {
                this._trigger("update", e, this._uiHash())
            }), this !== this.currentContainer && (t || (n.push(function (e) {
                this._trigger("remove", e, this._uiHash())
            }), n.push(function (e) {
                return function (t) {
                    e._trigger("receive", t, this._uiHash(this))
                }
            }.call(this, this.currentContainer)), n.push(function (e) {
                return function (t) {
                    e._trigger("update", t, this._uiHash(this))
                }
            }.call(this, this.currentContainer)))), s = this.containers.length - 1; s >= 0; s--) t || n.push(i("deactivate", this, this.containers[s])), this.containers[s].containerCache.over && (n.push(i("out", this, this.containers[s])), this.containers[s].containerCache.over = 0);
            if (this.storedCursor && (this.document.find("body").css("cursor", this.storedCursor), this.storedStylesheet.remove()), this._storedOpacity && this.helper.css("opacity", this._storedOpacity), this._storedZIndex && this.helper.css("zIndex", "auto" === this._storedZIndex ? "" : this._storedZIndex), this.dragging = !1, t || this._trigger("beforeStop", e, this._uiHash()), this.placeholder[0].parentNode.removeChild(this.placeholder[0]), this.cancelHelperRemoval || (this.helper[0] !== this.currentItem[0] && this.helper.remove(), this.helper = null), !t) {
                for (s = 0; n.length > s; s++) n[s].call(this, e);
                this._trigger("stop", e, this._uiHash())
            }
            return this.fromOutside = !1, !this.cancelHelperRemoval
        },
        _trigger: function () {
            e.Widget.prototype._trigger.apply(this, arguments) === !1 && this.cancel()
        },
        _uiHash: function (t) {
            var i = t || this;
            return {
                helper: i.helper,
                placeholder: i.placeholder || e([]),
                position: i.position,
                originalPosition: i.originalPosition,
                offset: i.positionAbs,
                item: i.currentItem,
                sender: t ? t.element : null
            }
        }
    }), e.widget("ui.menu", {
        version: "1.11.4",
        defaultElement: "<ul>",
        delay: 300,
        options: {
            icons: {submenu: "ui-icon-carat-1-e"},
            items: "> *",
            menus: "ul",
            position: {my: "left-1 top", at: "right top"},
            role: "menu",
            blur: null,
            focus: null,
            select: null
        },
        _create: function () {
            this.activeMenu = this.element, this.mouseHandled = !1, this.element.uniqueId().addClass("ui-menu ui-widget ui-widget-content").toggleClass("ui-menu-icons", !!this.element.find(".ui-icon").length).attr({
                role: this.options.role,
                tabIndex: 0
            }), this.options.disabled && this.element.addClass("ui-state-disabled").attr("aria-disabled", "true"), this._on({
                "mousedown .ui-menu-item": function (e) {
                    e.preventDefault()
                }, "click .ui-menu-item": function (t) {
                    var i = e(t.target);
                    !this.mouseHandled && i.not(".ui-state-disabled").length && (this.select(t), t.isPropagationStopped() || (this.mouseHandled = !0), i.has(".ui-menu").length ? this.expand(t) : !this.element.is(":focus") && e(this.document[0].activeElement).closest(".ui-menu").length && (this.element.trigger("focus", [!0]), this.active && 1 === this.active.parents(".ui-menu").length && clearTimeout(this.timer)))
                }, "mouseenter .ui-menu-item": function (t) {
                    if (!this.previousFilter) {
                        var i = e(t.currentTarget);
                        i.siblings(".ui-state-active").removeClass("ui-state-active"), this.focus(t, i)
                    }
                }, mouseleave: "collapseAll", "mouseleave .ui-menu": "collapseAll", focus: function (e, t) {
                    var i = this.active || this.element.find(this.options.items).eq(0);
                    t || this.focus(e, i)
                }, blur: function (t) {
                    this._delay(function () {
                        e.contains(this.element[0], this.document[0].activeElement) || this.collapseAll(t)
                    })
                }, keydown: "_keydown"
            }), this.refresh(), this._on(this.document, {
                click: function (e) {
                    this._closeOnDocumentClick(e) && this.collapseAll(e), this.mouseHandled = !1
                }
            })
        },
        _destroy: function () {
            this.element.removeAttr("aria-activedescendant").find(".ui-menu").addBack().removeClass("ui-menu ui-widget ui-widget-content ui-menu-icons ui-front").removeAttr("role").removeAttr("tabIndex").removeAttr("aria-labelledby").removeAttr("aria-expanded").removeAttr("aria-hidden").removeAttr("aria-disabled").removeUniqueId().show(), this.element.find(".ui-menu-item").removeClass("ui-menu-item").removeAttr("role").removeAttr("aria-disabled").removeUniqueId().removeClass("ui-state-hover").removeAttr("tabIndex").removeAttr("role").removeAttr("aria-haspopup").children().each(function () {
                var t = e(this);
                t.data("ui-menu-submenu-carat") && t.remove()
            }), this.element.find(".ui-menu-divider").removeClass("ui-menu-divider ui-widget-content")
        },
        _keydown: function (t) {
            var i, s, n, a, o = !0;
            switch (t.keyCode) {
                case e.ui.keyCode.PAGE_UP:
                    this.previousPage(t);
                    break;
                case e.ui.keyCode.PAGE_DOWN:
                    this.nextPage(t);
                    break;
                case e.ui.keyCode.HOME:
                    this._move("first", "first", t);
                    break;
                case e.ui.keyCode.END:
                    this._move("last", "last", t);
                    break;
                case e.ui.keyCode.UP:
                    this.previous(t);
                    break;
                case e.ui.keyCode.DOWN:
                    this.next(t);
                    break;
                case e.ui.keyCode.LEFT:
                    this.collapse(t);
                    break;
                case e.ui.keyCode.RIGHT:
                    this.active && !this.active.is(".ui-state-disabled") && this.expand(t);
                    break;
                case e.ui.keyCode.ENTER:
                case e.ui.keyCode.SPACE:
                    this._activate(t);
                    break;
                case e.ui.keyCode.ESCAPE:
                    this.collapse(t);
                    break;
                default:
                    o = !1, s = this.previousFilter || "", n = String.fromCharCode(t.keyCode), a = !1, clearTimeout(this.filterTimer), n === s ? a = !0 : n = s + n, i = this._filterMenuItems(n), i = a && -1 !== i.index(this.active.next()) ? this.active.nextAll(".ui-menu-item") : i, i.length || (n = String.fromCharCode(t.keyCode), i = this._filterMenuItems(n)), i.length ? (this.focus(t, i), this.previousFilter = n, this.filterTimer = this._delay(function () {
                        delete this.previousFilter
                    }, 1e3)) : delete this.previousFilter
            }
            o && t.preventDefault()
        },
        _activate: function (e) {
            this.active.is(".ui-state-disabled") || (this.active.is("[aria-haspopup='true']") ? this.expand(e) : this.select(e))
        },
        refresh: function () {
            var t, i, s = this, n = this.options.icons.submenu, a = this.element.find(this.options.menus);
            this.element.toggleClass("ui-menu-icons", !!this.element.find(".ui-icon").length), a.filter(":not(.ui-menu)").addClass("ui-menu ui-widget ui-widget-content ui-front").hide().attr({
                role: this.options.role,
                "aria-hidden": "true",
                "aria-expanded": "false"
            }).each(function () {
                var t = e(this), i = t.parent(),
                    s = e("<span>").addClass("ui-menu-icon ui-icon " + n).data("ui-menu-submenu-carat", !0);
                i.attr("aria-haspopup", "true").prepend(s), t.attr("aria-labelledby", i.attr("id"))
            }), t = a.add(this.element), i = t.find(this.options.items), i.not(".ui-menu-item").each(function () {
                var t = e(this);
                s._isDivider(t) && t.addClass("ui-widget-content ui-menu-divider")
            }), i.not(".ui-menu-item, .ui-menu-divider").addClass("ui-menu-item").uniqueId().attr({
                tabIndex: -1,
                role: this._itemRole()
            }), i.filter(".ui-state-disabled").attr("aria-disabled", "true"), this.active && !e.contains(this.element[0], this.active[0]) && this.blur()
        },
        _itemRole: function () {
            return {menu: "menuitem", listbox: "option"}[this.options.role]
        },
        _setOption: function (e, t) {
            "icons" === e && this.element.find(".ui-menu-icon").removeClass(this.options.icons.submenu).addClass(t.submenu), "disabled" === e && this.element.toggleClass("ui-state-disabled", !!t).attr("aria-disabled", t), this._super(e, t)
        },
        focus: function (e, t) {
            var i, s;
            this.blur(e, e && "focus" === e.type), this._scrollIntoView(t), this.active = t.first(), s = this.active.addClass("ui-state-focus").removeClass("ui-state-active"), this.options.role && this.element.attr("aria-activedescendant", s.attr("id")), this.active.parent().closest(".ui-menu-item").addClass("ui-state-active"), e && "keydown" === e.type ? this._close() : this.timer = this._delay(function () {
                this._close()
            }, this.delay), i = t.children(".ui-menu"), i.length && e && /^mouse/.test(e.type) && this._startOpening(i), this.activeMenu = t.parent(), this._trigger("focus", e, {item: t})
        },
        _scrollIntoView: function (t) {
            var i, s, n, a, o, r;
            this._hasScroll() && (i = parseFloat(e.css(this.activeMenu[0], "borderTopWidth")) || 0, s = parseFloat(e.css(this.activeMenu[0], "paddingTop")) || 0, n = t.offset().top - this.activeMenu.offset().top - i - s, a = this.activeMenu.scrollTop(), o = this.activeMenu.height(), r = t.outerHeight(), 0 > n ? this.activeMenu.scrollTop(a + n) : n + r > o && this.activeMenu.scrollTop(a + n - o + r))
        },
        blur: function (e, t) {
            t || clearTimeout(this.timer), this.active && (this.active.removeClass("ui-state-focus"), this.active = null, this._trigger("blur", e, {item: this.active}))
        },
        _startOpening: function (e) {
            clearTimeout(this.timer), "true" === e.attr("aria-hidden") && (this.timer = this._delay(function () {
                this._close(), this._open(e)
            }, this.delay))
        },
        _open: function (t) {
            var i = e.extend({of: this.active}, this.options.position);
            clearTimeout(this.timer), this.element.find(".ui-menu").not(t.parents(".ui-menu")).hide().attr("aria-hidden", "true"), t.show().removeAttr("aria-hidden").attr("aria-expanded", "true").position(i)
        },
        collapseAll: function (t, i) {
            clearTimeout(this.timer), this.timer = this._delay(function () {
                var s = i ? this.element : e(t && t.target).closest(this.element.find(".ui-menu"));
                s.length || (s = this.element), this._close(s), this.blur(t), this.activeMenu = s
            }, this.delay)
        },
        _close: function (e) {
            e || (e = this.active ? this.active.parent() : this.element), e.find(".ui-menu").hide().attr("aria-hidden", "true").attr("aria-expanded", "false").end().find(".ui-state-active").not(".ui-state-focus").removeClass("ui-state-active")
        },
        _closeOnDocumentClick: function (t) {
            return !e(t.target).closest(".ui-menu").length
        },
        _isDivider: function (e) {
            return !/[^\-\u2014\u2013\s]/.test(e.text())
        },
        collapse: function (e) {
            var t = this.active && this.active.parent().closest(".ui-menu-item", this.element);
            t && t.length && (this._close(), this.focus(e, t))
        },
        expand: function (e) {
            var t = this.active && this.active.children(".ui-menu ").find(this.options.items).first();
            t && t.length && (this._open(t.parent()), this._delay(function () {
                this.focus(e, t)
            }))
        },
        next: function (e) {
            this._move("next", "first", e)
        },
        previous: function (e) {
            this._move("prev", "last", e)
        },
        isFirstItem: function () {
            return this.active && !this.active.prevAll(".ui-menu-item").length
        },
        isLastItem: function () {
            return this.active && !this.active.nextAll(".ui-menu-item").length
        },
        _move: function (e, t, i) {
            var s;
            this.active && (s = "first" === e || "last" === e ? this.active["first" === e ? "prevAll" : "nextAll"](".ui-menu-item").eq(-1) : this.active[e + "All"](".ui-menu-item").eq(0)), s && s.length && this.active || (s = this.activeMenu.find(this.options.items)[t]()), this.focus(i, s)
        },
        nextPage: function (t) {
            var i, s, n;
            return this.active ? (this.isLastItem() || (this._hasScroll() ? (s = this.active.offset().top, n = this.element.height(), this.active.nextAll(".ui-menu-item").each(function () {
                return i = e(this), 0 > i.offset().top - s - n
            }), this.focus(t, i)) : this.focus(t, this.activeMenu.find(this.options.items)[this.active ? "last" : "first"]())), void 0) : (this.next(t), void 0)
        },
        previousPage: function (t) {
            var i, s, n;
            return this.active ? (this.isFirstItem() || (this._hasScroll() ? (s = this.active.offset().top, n = this.element.height(), this.active.prevAll(".ui-menu-item").each(function () {
                return i = e(this), i.offset().top - s + n > 0
            }), this.focus(t, i)) : this.focus(t, this.activeMenu.find(this.options.items).first())), void 0) : (this.next(t), void 0)
        },
        _hasScroll: function () {
            return this.element.outerHeight() < this.element.prop("scrollHeight")
        },
        select: function (t) {
            this.active = this.active || e(t.target).closest(".ui-menu-item");
            var i = {item: this.active};
            this.active.has(".ui-menu").length || this.collapseAll(t, !0), this._trigger("select", t, i)
        },
        _filterMenuItems: function (t) {
            var i = t.replace(/[\-\[\]{}()*+?.,\\\^$|#\s]/g, "\\$&"), s = RegExp("^" + i, "i");
            return this.activeMenu.find(this.options.items).filter(".ui-menu-item").filter(function () {
                return s.test(e.trim(e(this).text()))
            })
        }
    }), e.widget("ui.autocomplete", {
        version: "1.11.4",
        defaultElement: "<input>",
        options: {
            appendTo: null,
            autoFocus: !1,
            delay: 300,
            minLength: 1,
            position: {my: "left top", at: "left bottom", collision: "none"},
            source: null,
            change: null,
            close: null,
            focus: null,
            open: null,
            response: null,
            search: null,
            select: null
        },
        requestIndex: 0,
        pending: 0,
        _create: function () {
            var t, i, s, n = this.element[0].nodeName.toLowerCase(), a = "textarea" === n, o = "input" === n;
            this.isMultiLine = a ? !0 : o ? !1 : this.element.prop("isContentEditable"), this.valueMethod = this.element[a || o ? "val" : "text"], this.isNewMenu = !0, this.element.addClass("ui-autocomplete-input").attr("autocomplete", "off"), this._on(this.element, {
                keydown: function (n) {
                    if (this.element.prop("readOnly")) return t = !0, s = !0, i = !0, void 0;
                    t = !1, s = !1, i = !1;
                    var a = e.ui.keyCode;
                    switch (n.keyCode) {
                        case a.PAGE_UP:
                            t = !0, this._move("previousPage", n);
                            break;
                        case a.PAGE_DOWN:
                            t = !0, this._move("nextPage", n);
                            break;
                        case a.UP:
                            t = !0, this._keyEvent("previous", n);
                            break;
                        case a.DOWN:
                            t = !0, this._keyEvent("next", n);
                            break;
                        case a.ENTER:
                            this.menu.active && (t = !0, n.preventDefault(), this.menu.select(n));
                            break;
                        case a.TAB:
                            this.menu.active && this.menu.select(n);
                            break;
                        case a.ESCAPE:
                            this.menu.element.is(":visible") && (this.isMultiLine || this._value(this.term), this.close(n), n.preventDefault());
                            break;
                        default:
                            i = !0, this._searchTimeout(n)
                    }
                }, keypress: function (s) {
                    if (t) return t = !1, (!this.isMultiLine || this.menu.element.is(":visible")) && s.preventDefault(), void 0;
                    if (!i) {
                        var n = e.ui.keyCode;
                        switch (s.keyCode) {
                            case n.PAGE_UP:
                                this._move("previousPage", s);
                                break;
                            case n.PAGE_DOWN:
                                this._move("nextPage", s);
                                break;
                            case n.UP:
                                this._keyEvent("previous", s);
                                break;
                            case n.DOWN:
                                this._keyEvent("next", s)
                        }
                    }
                }, input: function (e) {
                    return s ? (s = !1, e.preventDefault(), void 0) : (this._searchTimeout(e), void 0)
                }, focus: function () {
                    this.selectedItem = null, this.previous = this._value()
                }, blur: function (e) {
                    return this.cancelBlur ? (delete this.cancelBlur, void 0) : (clearTimeout(this.searching), this.close(e), this._change(e), void 0)
                }
            }), this._initSource(), this.menu = e("<ul>").addClass("ui-autocomplete ui-front").appendTo(this._appendTo()).menu({role: null}).hide().menu("instance"), this._on(this.menu.element, {
                mousedown: function (t) {
                    t.preventDefault(), this.cancelBlur = !0, this._delay(function () {
                        delete this.cancelBlur
                    });
                    var i = this.menu.element[0];
                    e(t.target).closest(".ui-menu-item").length || this._delay(function () {
                        var t = this;
                        this.document.one("mousedown", function (s) {
                            s.target === t.element[0] || s.target === i || e.contains(i, s.target) || t.close()
                        })
                    })
                }, menufocus: function (t, i) {
                    var s, n;
                    return this.isNewMenu && (this.isNewMenu = !1, t.originalEvent && /^mouse/.test(t.originalEvent.type)) ? (this.menu.blur(), this.document.one("mousemove", function () {
                        e(t.target).trigger(t.originalEvent)
                    }), void 0) : (n = i.item.data("ui-autocomplete-item"), !1 !== this._trigger("focus", t, {item: n}) && t.originalEvent && /^key/.test(t.originalEvent.type) && this._value(n.value), s = i.item.attr("aria-label") || n.value, s && e.trim(s).length && (this.liveRegion.children().hide(), e("<div>").text(s).appendTo(this.liveRegion)), void 0)
                }, menuselect: function (e, t) {
                    var i = t.item.data("ui-autocomplete-item"), s = this.previous;
                    this.element[0] !== this.document[0].activeElement && (this.element.focus(), this.previous = s, this._delay(function () {
                        this.previous = s, this.selectedItem = i
                    })), !1 !== this._trigger("select", e, {item: i}) && this._value(i.value), this.term = this._value(), this.close(e), this.selectedItem = i
                }
            }), this.liveRegion = e("<span>", {
                role: "status",
                "aria-live": "assertive",
                "aria-relevant": "additions"
            }).addClass("ui-helper-hidden-accessible").appendTo(this.document[0].body), this._on(this.window, {
                beforeunload: function () {
                    this.element.removeAttr("autocomplete")
                }
            })
        },
        _destroy: function () {
            clearTimeout(this.searching), this.element.removeClass("ui-autocomplete-input").removeAttr("autocomplete"), this.menu.element.remove(), this.liveRegion.remove()
        },
        _setOption: function (e, t) {
            this._super(e, t), "source" === e && this._initSource(), "appendTo" === e && this.menu.element.appendTo(this._appendTo()), "disabled" === e && t && this.xhr && this.xhr.abort()
        },
        _appendTo: function () {
            var t = this.options.appendTo;
            return t && (t = t.jquery || t.nodeType ? e(t) : this.document.find(t).eq(0)), t && t[0] || (t = this.element.closest(".ui-front")), t.length || (t = this.document[0].body), t
        },
        _initSource: function () {
            var t, i, s = this;
            e.isArray(this.options.source) ? (t = this.options.source, this.source = function (i, s) {
                s(e.ui.autocomplete.filter(t, i.term))
            }) : "string" == typeof this.options.source ? (i = this.options.source, this.source = function (t, n) {
                s.xhr && s.xhr.abort(), s.xhr = e.ajax({
                    url: i, data: t, dataType: "json", success: function (e) {
                        n(e)
                    }, error: function () {
                        n([])
                    }
                })
            }) : this.source = this.options.source
        },
        _searchTimeout: function (e) {
            clearTimeout(this.searching), this.searching = this._delay(function () {
                var t = this.term === this._value(), i = this.menu.element.is(":visible"),
                    s = e.altKey || e.ctrlKey || e.metaKey || e.shiftKey;
                (!t || t && !i && !s) && (this.selectedItem = null, this.search(null, e))
            }, this.options.delay)
        },
        search: function (e, t) {
            return e = null != e ? e : this._value(), this.term = this._value(), e.length < this.options.minLength ? this.close(t) : this._trigger("search", t) !== !1 ? this._search(e) : void 0
        },
        _search: function (e) {
            this.pending++, this.element.addClass("ui-autocomplete-loading"), this.cancelSearch = !1, this.source({term: e}, this._response())
        },
        _response: function () {
            var t = ++this.requestIndex;
            return e.proxy(function (e) {
                t === this.requestIndex && this.__response(e), this.pending--, this.pending || this.element.removeClass("ui-autocomplete-loading")
            }, this)
        },
        __response: function (e) {
            e && (e = this._normalize(e)), this._trigger("response", null, {content: e}), !this.options.disabled && e && e.length && !this.cancelSearch ? (this._suggest(e), this._trigger("open")) : this._close()
        },
        close: function (e) {
            this.cancelSearch = !0, this._close(e)
        },
        _close: function (e) {
            this.menu.element.is(":visible") && (this.menu.element.hide(), this.menu.blur(), this.isNewMenu = !0, this._trigger("close", e))
        },
        _change: function (e) {
            this.previous !== this._value() && this._trigger("change", e, {item: this.selectedItem})
        },
        _normalize: function (t) {
            return t.length && t[0].label && t[0].value ? t : e.map(t, function (t) {
                return "string" == typeof t ? {label: t, value: t} : e.extend({}, t, {
                    label: t.label || t.value,
                    value: t.value || t.label
                })
            })
        },
        _suggest: function (t) {
            var i = this.menu.element.empty();
            this._renderMenu(i, t), this.isNewMenu = !0, this.menu.refresh(), i.show(), this._resizeMenu(), i.position(e.extend({of: this.element}, this.options.position)), this.options.autoFocus && this.menu.next()
        },
        _resizeMenu: function () {
            var e = this.menu.element;
            e.outerWidth(Math.max(e.width("").outerWidth() + 1, this.element.outerWidth()))
        },
        _renderMenu: function (t, i) {
            var s = this;
            e.each(i, function (e, i) {
                s._renderItemData(t, i)
            })
        },
        _renderItemData: function (e, t) {
            return this._renderItem(e, t).data("ui-autocomplete-item", t)
        },
        _renderItem: function (t, i) {
            return e("<li>").text(i.label).appendTo(t)
        },
        _move: function (e, t) {
            return this.menu.element.is(":visible") ? this.menu.isFirstItem() && /^previous/.test(e) || this.menu.isLastItem() && /^next/.test(e) ? (this.isMultiLine || this._value(this.term), this.menu.blur(), void 0) : (this.menu[e](t), void 0) : (this.search(null, t), void 0)
        },
        widget: function () {
            return this.menu.element
        },
        _value: function () {
            return this.valueMethod.apply(this.element, arguments)
        },
        _keyEvent: function (e, t) {
            (!this.isMultiLine || this.menu.element.is(":visible")) && (this._move(e, t), t.preventDefault())
        }
    }), e.extend(e.ui.autocomplete, {
        escapeRegex: function (e) {
            return e.replace(/[\-\[\]{}()*+?.,\\\^$|#\s]/g, "\\$&")
        }, filter: function (t, i) {
            var s = RegExp(e.ui.autocomplete.escapeRegex(i), "i");
            return e.grep(t, function (e) {
                return s.test(e.label || e.value || e)
            })
        }
    }), e.widget("ui.autocomplete", e.ui.autocomplete, {
        options: {
            messages: {
                noResults: "No search results.",
                results: function (e) {
                    return e + (e > 1 ? " results are" : " result is") + " available, use up and down arrow keys to navigate."
                }
            }
        }, __response: function (t) {
            var i;
            this._superApply(arguments), this.options.disabled || this.cancelSearch || (i = t && t.length ? this.options.messages.results(t.length) : this.options.messages.noResults, this.liveRegion.children().hide(), e("<div>").text(i).appendTo(this.liveRegion))
        }
    }), e.ui.autocomplete;
    var d, c = "ui-button ui-widget ui-state-default ui-corner-all",
        p = "ui-button-icons-only ui-button-icon-only ui-button-text-icons ui-button-text-icon-primary ui-button-text-icon-secondary ui-button-text-only",
        f = function () {
            var t = e(this);
            setTimeout(function () {
                t.find(":ui-button").button("refresh")
            }, 1)
        }, m = function (t) {
            var i = t.name, s = t.form, n = e([]);
            return i && (i = i.replace(/'/g, "\\'"), n = s ? e(s).find("[name='" + i + "'][type=radio]") : e("[name='" + i + "'][type=radio]", t.ownerDocument).filter(function () {
                return !this.form
            })), n
        };
    e.widget("ui.button", {
        version: "1.11.4",
        defaultElement: "<button>",
        options: {disabled: null, text: !0, label: null, icons: {primary: null, secondary: null}},
        _create: function () {
            this.element.closest("form").unbind("reset" + this.eventNamespace).bind("reset" + this.eventNamespace, f), "boolean" != typeof this.options.disabled ? this.options.disabled = !!this.element.prop("disabled") : this.element.prop("disabled", this.options.disabled), this._determineButtonType(), this.hasTitle = !!this.buttonElement.attr("title");
            var t = this, i = this.options, s = "checkbox" === this.type || "radio" === this.type,
                n = s ? "" : "ui-state-active";
            null === i.label && (i.label = "input" === this.type ? this.buttonElement.val() : this.buttonElement.html()), this._hoverable(this.buttonElement), this.buttonElement.addClass(c).attr("role", "button").bind("mouseenter" + this.eventNamespace, function () {
                i.disabled || this === d && e(this).addClass("ui-state-active")
            }).bind("mouseleave" + this.eventNamespace, function () {
                i.disabled || e(this).removeClass(n)
            }).bind("click" + this.eventNamespace, function (e) {
                i.disabled && (e.preventDefault(), e.stopImmediatePropagation())
            }), this._on({
                focus: function () {
                    this.buttonElement.addClass("ui-state-focus")
                }, blur: function () {
                    this.buttonElement.removeClass("ui-state-focus")
                }
            }), s && this.element.bind("change" + this.eventNamespace, function () {
                t.refresh()
            }), "checkbox" === this.type ? this.buttonElement.bind("click" + this.eventNamespace, function () {
                return i.disabled ? !1 : void 0
            }) : "radio" === this.type ? this.buttonElement.bind("click" + this.eventNamespace, function () {
                if (i.disabled) return !1;
                e(this).addClass("ui-state-active"), t.buttonElement.attr("aria-pressed", "true");
                var s = t.element[0];
                m(s).not(s).map(function () {
                    return e(this).button("widget")[0]
                }).removeClass("ui-state-active").attr("aria-pressed", "false")
            }) : (this.buttonElement.bind("mousedown" + this.eventNamespace, function () {
                return i.disabled ? !1 : (e(this).addClass("ui-state-active"), d = this, t.document.one("mouseup", function () {
                    d = null
                }), void 0)
            }).bind("mouseup" + this.eventNamespace, function () {
                return i.disabled ? !1 : (e(this).removeClass("ui-state-active"), void 0)
            }).bind("keydown" + this.eventNamespace, function (t) {
                return i.disabled ? !1 : ((t.keyCode === e.ui.keyCode.SPACE || t.keyCode === e.ui.keyCode.ENTER) && e(this).addClass("ui-state-active"), void 0)
            }).bind("keyup" + this.eventNamespace + " blur" + this.eventNamespace, function () {
                e(this).removeClass("ui-state-active")
            }), this.buttonElement.is("a") && this.buttonElement.keyup(function (t) {
                t.keyCode === e.ui.keyCode.SPACE && e(this).click()
            })), this._setOption("disabled", i.disabled), this._resetButton()
        },
        _determineButtonType: function () {
            var e, t, i;
            this.type = this.element.is("[type=checkbox]") ? "checkbox" : this.element.is("[type=radio]") ? "radio" : this.element.is("input") ? "input" : "button", "checkbox" === this.type || "radio" === this.type ? (e = this.element.parents().last(), t = "label[for='" + this.element.attr("id") + "']", this.buttonElement = e.find(t), this.buttonElement.length || (e = e.length ? e.siblings() : this.element.siblings(), this.buttonElement = e.filter(t), this.buttonElement.length || (this.buttonElement = e.find(t))), this.element.addClass("ui-helper-hidden-accessible"), i = this.element.is(":checked"), i && this.buttonElement.addClass("ui-state-active"), this.buttonElement.prop("aria-pressed", i)) : this.buttonElement = this.element
        },
        widget: function () {
            return this.buttonElement
        },
        _destroy: function () {
            this.element.removeClass("ui-helper-hidden-accessible"), this.buttonElement.removeClass(c + " ui-state-active " + p).removeAttr("role").removeAttr("aria-pressed").html(this.buttonElement.find(".ui-button-text").html()), this.hasTitle || this.buttonElement.removeAttr("title")
        },
        _setOption: function (e, t) {
            return this._super(e, t), "disabled" === e ? (this.widget().toggleClass("ui-state-disabled", !!t), this.element.prop("disabled", !!t), t && ("checkbox" === this.type || "radio" === this.type ? this.buttonElement.removeClass("ui-state-focus") : this.buttonElement.removeClass("ui-state-focus ui-state-active")), void 0) : (this._resetButton(), void 0)
        },
        refresh: function () {
            var t = this.element.is("input, button") ? this.element.is(":disabled") : this.element.hasClass("ui-button-disabled");
            t !== this.options.disabled && this._setOption("disabled", t), "radio" === this.type ? m(this.element[0]).each(function () {
                e(this).is(":checked") ? e(this).button("widget").addClass("ui-state-active").attr("aria-pressed", "true") : e(this).button("widget").removeClass("ui-state-active").attr("aria-pressed", "false")
            }) : "checkbox" === this.type && (this.element.is(":checked") ? this.buttonElement.addClass("ui-state-active").attr("aria-pressed", "true") : this.buttonElement.removeClass("ui-state-active").attr("aria-pressed", "false"))
        },
        _resetButton: function () {
            if ("input" === this.type) return this.options.label && this.element.val(this.options.label), void 0;
            var t = this.buttonElement.removeClass(p),
                i = e("<span></span>", this.document[0]).addClass("ui-button-text").html(this.options.label).appendTo(t.empty()).text(),
                s = this.options.icons, n = s.primary && s.secondary, a = [];
            s.primary || s.secondary ? (this.options.text && a.push("ui-button-text-icon" + (n ? "s" : s.primary ? "-primary" : "-secondary")), s.primary && t.prepend("<span class='ui-button-icon-primary ui-icon " + s.primary + "'></span>"), s.secondary && t.append("<span class='ui-button-icon-secondary ui-icon " + s.secondary + "'></span>"), this.options.text || (a.push(n ? "ui-button-icons-only" : "ui-button-icon-only"), this.hasTitle || t.attr("title", e.trim(i)))) : a.push("ui-button-text-only"), t.addClass(a.join(" "))
        }
    }), e.widget("ui.buttonset", {
        version: "1.11.4",
        options: {items: "button, input[type=button], input[type=submit], input[type=reset], input[type=checkbox], input[type=radio], a, :data(ui-button)"},
        _create: function () {
            this.element.addClass("ui-buttonset")
        },
        _init: function () {
            this.refresh()
        },
        _setOption: function (e, t) {
            "disabled" === e && this.buttons.button("option", e, t), this._super(e, t)
        },
        refresh: function () {
            var t = "rtl" === this.element.css("direction"), i = this.element.find(this.options.items),
                s = i.filter(":ui-button");
            i.not(":ui-button").button(), s.button("refresh"), this.buttons = i.map(function () {
                return e(this).button("widget")[0]
            }).removeClass("ui-corner-all ui-corner-left ui-corner-right").filter(":first").addClass(t ? "ui-corner-right" : "ui-corner-left").end().filter(":last").addClass(t ? "ui-corner-left" : "ui-corner-right").end().end()
        },
        _destroy: function () {
            this.element.removeClass("ui-buttonset"), this.buttons.map(function () {
                return e(this).button("widget")[0]
            }).removeClass("ui-corner-left ui-corner-right").end().button("destroy")
        }
    }), e.ui.button, e.extend(e.ui, {datepicker: {version: "1.11.4"}});
    var g;
    e.extend(n.prototype, {
        markerClassName: "hasDatepicker",
        maxRows: 4,
        _widgetDatepicker: function () {
            return this.dpDiv
        },
        setDefaults: function (e) {
            return r(this._defaults, e || {}), this
        },
        _attachDatepicker: function (t, i) {
            var s, n, a;
            s = t.nodeName.toLowerCase(), n = "div" === s || "span" === s, t.id || (this.uuid += 1, t.id = "dp" + this.uuid), a = this._newInst(e(t), n), a.settings = e.extend({}, i || {}), "input" === s ? this._connectDatepicker(t, a) : n && this._inlineDatepicker(t, a)
        },
        _newInst: function (t, i) {
            var s = t[0].id.replace(/([^A-Za-z0-9_\-])/g, "\\\\$1");
            return {
                id: s,
                input: t,
                selectedDay: 0,
                selectedMonth: 0,
                selectedYear: 0,
                drawMonth: 0,
                drawYear: 0,
                inline: i,
                dpDiv: i ? a(e("<div class='" + this._inlineClass + " ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all'></div>")) : this.dpDiv
            }
        },
        _connectDatepicker: function (t, i) {
            var s = e(t);
            i.append = e([]), i.trigger = e([]), s.hasClass(this.markerClassName) || (this._attachments(s, i), s.addClass(this.markerClassName).keydown(this._doKeyDown).keypress(this._doKeyPress).keyup(this._doKeyUp), this._autoSize(i), e.data(t, "datepicker", i), i.settings.disabled && this._disableDatepicker(t))
        },
        _attachments: function (t, i) {
            var s, n, a, o = this._get(i, "appendText"), r = this._get(i, "isRTL");
            i.append && i.append.remove(), o && (i.append = e("<span class='" + this._appendClass + "'>" + o + "</span>"), t[r ? "before" : "after"](i.append)), t.unbind("focus", this._showDatepicker), i.trigger && i.trigger.remove(), s = this._get(i, "showOn"), ("focus" === s || "both" === s) && t.focus(this._showDatepicker), ("button" === s || "both" === s) && (n = this._get(i, "buttonText"), a = this._get(i, "buttonImage"), i.trigger = e(this._get(i, "buttonImageOnly") ? e("<img/>").addClass(this._triggerClass).attr({
                src: a,
                alt: n,
                title: n
            }) : e("<button type='button'></button>").addClass(this._triggerClass).html(a ? e("<img/>").attr({
                src: a,
                alt: n,
                title: n
            }) : n)), t[r ? "before" : "after"](i.trigger), i.trigger.click(function () {
                return e.datepicker._datepickerShowing && e.datepicker._lastInput === t[0] ? e.datepicker._hideDatepicker() : e.datepicker._datepickerShowing && e.datepicker._lastInput !== t[0] ? (e.datepicker._hideDatepicker(), e.datepicker._showDatepicker(t[0])) : e.datepicker._showDatepicker(t[0]), !1
            }))
        },
        _autoSize: function (e) {
            if (this._get(e, "autoSize") && !e.inline) {
                var t, i, s, n, a = new Date(2009, 11, 20), o = this._get(e, "dateFormat");
                o.match(/[DM]/) && (t = function (e) {
                    for (i = 0, s = 0, n = 0; e.length > n; n++) e[n].length > i && (i = e[n].length, s = n);
                    return s
                }, a.setMonth(t(this._get(e, o.match(/MM/) ? "monthNames" : "monthNamesShort"))), a.setDate(t(this._get(e, o.match(/DD/) ? "dayNames" : "dayNamesShort")) + 20 - a.getDay())), e.input.attr("size", this._formatDate(e, a).length)
            }
        },
        _inlineDatepicker: function (t, i) {
            var s = e(t);
            s.hasClass(this.markerClassName) || (s.addClass(this.markerClassName).append(i.dpDiv), e.data(t, "datepicker", i), this._setDate(i, this._getDefaultDate(i), !0), this._updateDatepicker(i), this._updateAlternate(i), i.settings.disabled && this._disableDatepicker(t), i.dpDiv.css("display", "block"))
        },
        _dialogDatepicker: function (t, i, s, n, a) {
            var o, h, l, u, d, c = this._dialogInst;
            return c || (this.uuid += 1, o = "dp" + this.uuid, this._dialogInput = e("<input type='text' id='" + o + "' style='position: absolute; top: -100px; width: 0px;'/>"), this._dialogInput.keydown(this._doKeyDown), e("body").append(this._dialogInput), c = this._dialogInst = this._newInst(this._dialogInput, !1), c.settings = {}, e.data(this._dialogInput[0], "datepicker", c)), r(c.settings, n || {}), i = i && i.constructor === Date ? this._formatDate(c, i) : i, this._dialogInput.val(i), this._pos = a ? a.length ? a : [a.pageX, a.pageY] : null, this._pos || (h = document.documentElement.clientWidth, l = document.documentElement.clientHeight, u = document.documentElement.scrollLeft || document.body.scrollLeft, d = document.documentElement.scrollTop || document.body.scrollTop, this._pos = [h / 2 - 100 + u, l / 2 - 150 + d]), this._dialogInput.css("left", this._pos[0] + 20 + "px").css("top", this._pos[1] + "px"), c.settings.onSelect = s, this._inDialog = !0, this.dpDiv.addClass(this._dialogClass), this._showDatepicker(this._dialogInput[0]), e.blockUI && e.blockUI(this.dpDiv), e.data(this._dialogInput[0], "datepicker", c), this
        },
        _destroyDatepicker: function (t) {
            var i, s = e(t), n = e.data(t, "datepicker");
            s.hasClass(this.markerClassName) && (i = t.nodeName.toLowerCase(), e.removeData(t, "datepicker"), "input" === i ? (n.append.remove(), n.trigger.remove(), s.removeClass(this.markerClassName).unbind("focus", this._showDatepicker).unbind("keydown", this._doKeyDown).unbind("keypress", this._doKeyPress).unbind("keyup", this._doKeyUp)) : ("div" === i || "span" === i) && s.removeClass(this.markerClassName).empty(), g === n && (g = null))
        },
        _enableDatepicker: function (t) {
            var i, s, n = e(t), a = e.data(t, "datepicker");
            n.hasClass(this.markerClassName) && (i = t.nodeName.toLowerCase(), "input" === i ? (t.disabled = !1, a.trigger.filter("button").each(function () {
                this.disabled = !1
            }).end().filter("img").css({
                opacity: "1.0",
                cursor: ""
            })) : ("div" === i || "span" === i) && (s = n.children("." + this._inlineClass), s.children().removeClass("ui-state-disabled"), s.find("select.ui-datepicker-month, select.ui-datepicker-year").prop("disabled", !1)), this._disabledInputs = e.map(this._disabledInputs, function (e) {
                return e === t ? null : e
            }))
        },
        _disableDatepicker: function (t) {
            var i, s, n = e(t), a = e.data(t, "datepicker");
            n.hasClass(this.markerClassName) && (i = t.nodeName.toLowerCase(), "input" === i ? (t.disabled = !0, a.trigger.filter("button").each(function () {
                this.disabled = !0
            }).end().filter("img").css({
                opacity: "0.5",
                cursor: "default"
            })) : ("div" === i || "span" === i) && (s = n.children("." + this._inlineClass), s.children().addClass("ui-state-disabled"), s.find("select.ui-datepicker-month, select.ui-datepicker-year").prop("disabled", !0)), this._disabledInputs = e.map(this._disabledInputs, function (e) {
                return e === t ? null : e
            }), this._disabledInputs[this._disabledInputs.length] = t)
        },
        _isDisabledDatepicker: function (e) {
            if (!e) return !1;
            for (var t = 0; this._disabledInputs.length > t; t++) if (this._disabledInputs[t] === e) return !0;
            return !1
        },
        _getInst: function (t) {
            try {
                return e.data(t, "datepicker")
            } catch (i) {
                throw"Missing instance data for this datepicker"
            }
        },
        _optionDatepicker: function (t, i, s) {
            var n, a, o, h, l = this._getInst(t);
            return 2 === arguments.length && "string" == typeof i ? "defaults" === i ? e.extend({}, e.datepicker._defaults) : l ? "all" === i ? e.extend({}, l.settings) : this._get(l, i) : null : (n = i || {}, "string" == typeof i && (n = {}, n[i] = s), l && (this._curInst === l && this._hideDatepicker(), a = this._getDateDatepicker(t, !0), o = this._getMinMaxDate(l, "min"), h = this._getMinMaxDate(l, "max"), r(l.settings, n), null !== o && void 0 !== n.dateFormat && void 0 === n.minDate && (l.settings.minDate = this._formatDate(l, o)), null !== h && void 0 !== n.dateFormat && void 0 === n.maxDate && (l.settings.maxDate = this._formatDate(l, h)), "disabled" in n && (n.disabled ? this._disableDatepicker(t) : this._enableDatepicker(t)), this._attachments(e(t), l), this._autoSize(l), this._setDate(l, a), this._updateAlternate(l), this._updateDatepicker(l)), void 0)
        },
        _changeDatepicker: function (e, t, i) {
            this._optionDatepicker(e, t, i)
        },
        _refreshDatepicker: function (e) {
            var t = this._getInst(e);
            t && this._updateDatepicker(t)
        },
        _setDateDatepicker: function (e, t) {
            var i = this._getInst(e);
            i && (this._setDate(i, t), this._updateDatepicker(i), this._updateAlternate(i))
        },
        _getDateDatepicker: function (e, t) {
            var i = this._getInst(e);
            return i && !i.inline && this._setDateFromField(i, t), i ? this._getDate(i) : null
        },
        _doKeyDown: function (t) {
            var i, s, n, a = e.datepicker._getInst(t.target), o = !0, r = a.dpDiv.is(".ui-datepicker-rtl");
            if (a._keyEvent = !0, e.datepicker._datepickerShowing) switch (t.keyCode) {
                case 9:
                    e.datepicker._hideDatepicker(), o = !1;
                    break;
                case 13:
                    return n = e("td." + e.datepicker._dayOverClass + ":not(." + e.datepicker._currentClass + ")", a.dpDiv), n[0] && e.datepicker._selectDay(t.target, a.selectedMonth, a.selectedYear, n[0]), i = e.datepicker._get(a, "onSelect"), i ? (s = e.datepicker._formatDate(a), i.apply(a.input ? a.input[0] : null, [s, a])) : e.datepicker._hideDatepicker(), !1;
                case 27:
                    e.datepicker._hideDatepicker();
                    break;
                case 33:
                    e.datepicker._adjustDate(t.target, t.ctrlKey ? -e.datepicker._get(a, "stepBigMonths") : -e.datepicker._get(a, "stepMonths"), "M");
                    break;
                case 34:
                    e.datepicker._adjustDate(t.target, t.ctrlKey ? +e.datepicker._get(a, "stepBigMonths") : +e.datepicker._get(a, "stepMonths"), "M");
                    break;
                case 35:
                    (t.ctrlKey || t.metaKey) && e.datepicker._clearDate(t.target), o = t.ctrlKey || t.metaKey;
                    break;
                case 36:
                    (t.ctrlKey || t.metaKey) && e.datepicker._gotoToday(t.target), o = t.ctrlKey || t.metaKey;
                    break;
                case 37:
                    (t.ctrlKey || t.metaKey) && e.datepicker._adjustDate(t.target, r ? 1 : -1, "D"), o = t.ctrlKey || t.metaKey, t.originalEvent.altKey && e.datepicker._adjustDate(t.target, t.ctrlKey ? -e.datepicker._get(a, "stepBigMonths") : -e.datepicker._get(a, "stepMonths"), "M");
                    break;
                case 38:
                    (t.ctrlKey || t.metaKey) && e.datepicker._adjustDate(t.target, -7, "D"), o = t.ctrlKey || t.metaKey;
                    break;
                case 39:
                    (t.ctrlKey || t.metaKey) && e.datepicker._adjustDate(t.target, r ? -1 : 1, "D"), o = t.ctrlKey || t.metaKey, t.originalEvent.altKey && e.datepicker._adjustDate(t.target, t.ctrlKey ? +e.datepicker._get(a, "stepBigMonths") : +e.datepicker._get(a, "stepMonths"), "M");
                    break;
                case 40:
                    (t.ctrlKey || t.metaKey) && e.datepicker._adjustDate(t.target, 7, "D"), o = t.ctrlKey || t.metaKey;
                    break;
                default:
                    o = !1
            } else 36 === t.keyCode && t.ctrlKey ? e.datepicker._showDatepicker(this) : o = !1;
            o && (t.preventDefault(), t.stopPropagation())
        },
        _doKeyPress: function (t) {
            var i, s, n = e.datepicker._getInst(t.target);
            return e.datepicker._get(n, "constrainInput") ? (i = e.datepicker._possibleChars(e.datepicker._get(n, "dateFormat")), s = String.fromCharCode(null == t.charCode ? t.keyCode : t.charCode), t.ctrlKey || t.metaKey || " " > s || !i || i.indexOf(s) > -1) : void 0
        },
        _doKeyUp: function (t) {
            var i, s = e.datepicker._getInst(t.target);
            if (s.input.val() !== s.lastVal) try {
                i = e.datepicker.parseDate(e.datepicker._get(s, "dateFormat"), s.input ? s.input.val() : null, e.datepicker._getFormatConfig(s)), i && (e.datepicker._setDateFromField(s), e.datepicker._updateAlternate(s), e.datepicker._updateDatepicker(s))
            } catch (n) {
            }
            return !0
        },
        _showDatepicker: function (t) {
            if (t = t.target || t, "input" !== t.nodeName.toLowerCase() && (t = e("input", t.parentNode)[0]), !e.datepicker._isDisabledDatepicker(t) && e.datepicker._lastInput !== t) {
                var i, n, a, o, h, l, u;
                i = e.datepicker._getInst(t), e.datepicker._curInst && e.datepicker._curInst !== i && (e.datepicker._curInst.dpDiv.stop(!0, !0), i && e.datepicker._datepickerShowing && e.datepicker._hideDatepicker(e.datepicker._curInst.input[0])), n = e.datepicker._get(i, "beforeShow"), a = n ? n.apply(t, [t, i]) : {}, a !== !1 && (r(i.settings, a), i.lastVal = null, e.datepicker._lastInput = t, e.datepicker._setDateFromField(i), e.datepicker._inDialog && (t.value = ""), e.datepicker._pos || (e.datepicker._pos = e.datepicker._findPos(t), e.datepicker._pos[1] += t.offsetHeight), o = !1, e(t).parents().each(function () {
                    return o |= "fixed" === e(this).css("position"), !o
                }), h = {
                    left: e.datepicker._pos[0],
                    top: e.datepicker._pos[1]
                }, e.datepicker._pos = null, i.dpDiv.empty(), i.dpDiv.css({
                    position: "absolute",
                    display: "block",
                    top: "-1000px"
                }), e.datepicker._updateDatepicker(i), h = e.datepicker._checkOffset(i, h, o), i.dpDiv.css({
                    position: e.datepicker._inDialog && e.blockUI ? "static" : o ? "fixed" : "absolute",
                    display: "none",
                    left: h.left + "px",
                    top: h.top + "px"
                }), i.inline || (l = e.datepicker._get(i, "showAnim"), u = e.datepicker._get(i, "duration"), i.dpDiv.css("z-index", s(e(t)) + 1), e.datepicker._datepickerShowing = !0, e.effects && e.effects.effect[l] ? i.dpDiv.show(l, e.datepicker._get(i, "showOptions"), u) : i.dpDiv[l || "show"](l ? u : null), e.datepicker._shouldFocusInput(i) && i.input.focus(), e.datepicker._curInst = i))
            }
        },
        _updateDatepicker: function (t) {
            this.maxRows = 4, g = t, t.dpDiv.empty().append(this._generateHTML(t)), this._attachHandlers(t);
            var i, s = this._getNumberOfMonths(t), n = s[1], a = 17, r = t.dpDiv.find("." + this._dayOverClass + " a");
            r.length > 0 && o.apply(r.get(0)), t.dpDiv.removeClass("ui-datepicker-multi-2 ui-datepicker-multi-3 ui-datepicker-multi-4").width(""), n > 1 && t.dpDiv.addClass("ui-datepicker-multi-" + n).css("width", a * n + "em"), t.dpDiv[(1 !== s[0] || 1 !== s[1] ? "add" : "remove") + "Class"]("ui-datepicker-multi"), t.dpDiv[(this._get(t, "isRTL") ? "add" : "remove") + "Class"]("ui-datepicker-rtl"), t === e.datepicker._curInst && e.datepicker._datepickerShowing && e.datepicker._shouldFocusInput(t) && t.input.focus(), t.yearshtml && (i = t.yearshtml, setTimeout(function () {
                i === t.yearshtml && t.yearshtml && t.dpDiv.find("select.ui-datepicker-year:first").replaceWith(t.yearshtml), i = t.yearshtml = null
            }, 0))
        },
        _shouldFocusInput: function (e) {
            return e.input && e.input.is(":visible") && !e.input.is(":disabled") && !e.input.is(":focus")
        },
        _checkOffset: function (t, i, s) {
            var n = t.dpDiv.outerWidth(), a = t.dpDiv.outerHeight(), o = t.input ? t.input.outerWidth() : 0,
                r = t.input ? t.input.outerHeight() : 0,
                h = document.documentElement.clientWidth + (s ? 0 : e(document).scrollLeft()),
                l = document.documentElement.clientHeight + (s ? 0 : e(document).scrollTop());
            return i.left -= this._get(t, "isRTL") ? n - o : 0, i.left -= s && i.left === t.input.offset().left ? e(document).scrollLeft() : 0, i.top -= s && i.top === t.input.offset().top + r ? e(document).scrollTop() : 0, i.left -= Math.min(i.left, i.left + n > h && h > n ? Math.abs(i.left + n - h) : 0), i.top -= Math.min(i.top, i.top + a > l && l > a ? Math.abs(a + r) : 0), i
        },
        _findPos: function (t) {
            for (var i, s = this._getInst(t), n = this._get(s, "isRTL"); t && ("hidden" === t.type || 1 !== t.nodeType || e.expr.filters.hidden(t));) t = t[n ? "previousSibling" : "nextSibling"];
            return i = e(t).offset(), [i.left, i.top]
        },
        _hideDatepicker: function (t) {
            var i, s, n, a, o = this._curInst;
            !o || t && o !== e.data(t, "datepicker") || this._datepickerShowing && (i = this._get(o, "showAnim"), s = this._get(o, "duration"), n = function () {
                e.datepicker._tidyDialog(o)
            }, e.effects && (e.effects.effect[i] || e.effects[i]) ? o.dpDiv.hide(i, e.datepicker._get(o, "showOptions"), s, n) : o.dpDiv["slideDown" === i ? "slideUp" : "fadeIn" === i ? "fadeOut" : "hide"](i ? s : null, n), i || n(), this._datepickerShowing = !1, a = this._get(o, "onClose"), a && a.apply(o.input ? o.input[0] : null, [o.input ? o.input.val() : "", o]), this._lastInput = null, this._inDialog && (this._dialogInput.css({
                position: "absolute",
                left: "0",
                top: "-100px"
            }), e.blockUI && (e.unblockUI(), e("body").append(this.dpDiv))), this._inDialog = !1)
        },
        _tidyDialog: function (e) {
            e.dpDiv.removeClass(this._dialogClass).unbind(".ui-datepicker-calendar")
        },
        _checkExternalClick: function (t) {
            if (e.datepicker._curInst) {
                var i = e(t.target), s = e.datepicker._getInst(i[0]);
                (i[0].id !== e.datepicker._mainDivId && 0 === i.parents("#" + e.datepicker._mainDivId).length && !i.hasClass(e.datepicker.markerClassName) && !i.closest("." + e.datepicker._triggerClass).length && e.datepicker._datepickerShowing && (!e.datepicker._inDialog || !e.blockUI) || i.hasClass(e.datepicker.markerClassName) && e.datepicker._curInst !== s) && e.datepicker._hideDatepicker()
            }
        },
        _adjustDate: function (t, i, s) {
            var n = e(t), a = this._getInst(n[0]);
            this._isDisabledDatepicker(n[0]) || (this._adjustInstDate(a, i + ("M" === s ? this._get(a, "showCurrentAtPos") : 0), s), this._updateDatepicker(a))
        },
        _gotoToday: function (t) {
            var i, s = e(t), n = this._getInst(s[0]);
            this._get(n, "gotoCurrent") && n.currentDay ? (n.selectedDay = n.currentDay, n.drawMonth = n.selectedMonth = n.currentMonth, n.drawYear = n.selectedYear = n.currentYear) : (i = new Date, n.selectedDay = i.getDate(), n.drawMonth = n.selectedMonth = i.getMonth(), n.drawYear = n.selectedYear = i.getFullYear()), this._notifyChange(n), this._adjustDate(s)
        },
        _selectMonthYear: function (t, i, s) {
            var n = e(t), a = this._getInst(n[0]);
            a["selected" + ("M" === s ? "Month" : "Year")] = a["draw" + ("M" === s ? "Month" : "Year")] = parseInt(i.options[i.selectedIndex].value, 10), this._notifyChange(a), this._adjustDate(n)
        },
        _selectDay: function (t, i, s, n) {
            var a, o = e(t);
            e(n).hasClass(this._unselectableClass) || this._isDisabledDatepicker(o[0]) || (a = this._getInst(o[0]), a.selectedDay = a.currentDay = e("a", n).html(), a.selectedMonth = a.currentMonth = i, a.selectedYear = a.currentYear = s, this._selectDate(t, this._formatDate(a, a.currentDay, a.currentMonth, a.currentYear)))
        },
        _clearDate: function (t) {
            var i = e(t);
            this._selectDate(i, "")
        },
        _selectDate: function (t, i) {
            var s, n = e(t), a = this._getInst(n[0]);
            i = null != i ? i : this._formatDate(a), a.input && a.input.val(i), this._updateAlternate(a), s = this._get(a, "onSelect"), s ? s.apply(a.input ? a.input[0] : null, [i, a]) : a.input && a.input.trigger("change"), a.inline ? this._updateDatepicker(a) : (this._hideDatepicker(), this._lastInput = a.input[0], "object" != typeof a.input[0] && a.input.focus(), this._lastInput = null)
        },
        _updateAlternate: function (t) {
            var i, s, n, a = this._get(t, "altField");
            a && (i = this._get(t, "altFormat") || this._get(t, "dateFormat"), s = this._getDate(t), n = this.formatDate(i, s, this._getFormatConfig(t)), e(a).each(function () {
                e(this).val(n)
            }))
        },
        noWeekends: function (e) {
            var t = e.getDay();
            return [t > 0 && 6 > t, ""]
        },
        iso8601Week: function (e) {
            var t, i = new Date(e.getTime());
            return i.setDate(i.getDate() + 4 - (i.getDay() || 7)), t = i.getTime(), i.setMonth(0), i.setDate(1), Math.floor(Math.round((t - i) / 864e5) / 7) + 1
        },
        parseDate: function (t, i, s) {
            if (null == t || null == i) throw"Invalid arguments";
            if (i = "object" == typeof i ? "" + i : i + "", "" === i) return null;
            var n, a, o, r, h = 0, l = (s ? s.shortYearCutoff : null) || this._defaults.shortYearCutoff,
                u = "string" != typeof l ? l : (new Date).getFullYear() % 100 + parseInt(l, 10),
                d = (s ? s.dayNamesShort : null) || this._defaults.dayNamesShort,
                c = (s ? s.dayNames : null) || this._defaults.dayNames,
                p = (s ? s.monthNamesShort : null) || this._defaults.monthNamesShort,
                f = (s ? s.monthNames : null) || this._defaults.monthNames, m = -1, g = -1, v = -1, y = -1, b = !1,
                _ = function (e) {
                    var i = t.length > n + 1 && t.charAt(n + 1) === e;
                    return i && n++, i
                }, x = function (e) {
                    var t = _(e), s = "@" === e ? 14 : "!" === e ? 20 : "y" === e && t ? 4 : "o" === e ? 3 : 2,
                        n = "y" === e ? s : 1, a = RegExp("^\\d{" + n + "," + s + "}"), o = i.substring(h).match(a);
                    if (!o) throw"Missing number at position " + h;
                    return h += o[0].length, parseInt(o[0], 10)
                }, w = function (t, s, n) {
                    var a = -1, o = e.map(_(t) ? n : s, function (e, t) {
                        return [[t, e]]
                    }).sort(function (e, t) {
                        return -(e[1].length - t[1].length)
                    });
                    if (e.each(o, function (e, t) {
                        var s = t[1];
                        return i.substr(h, s.length).toLowerCase() === s.toLowerCase() ? (a = t[0], h += s.length, !1) : void 0
                    }), -1 !== a) return a + 1;
                    throw"Unknown name at position " + h
                }, k = function () {
                    if (i.charAt(h) !== t.charAt(n)) throw"Unexpected literal at position " + h;
                    h++
                };
            for (n = 0; t.length > n; n++) if (b) "'" !== t.charAt(n) || _("'") ? k() : b = !1; else switch (t.charAt(n)) {
                case"d":
                    v = x("d");
                    break;
                case"D":
                    w("D", d, c);
                    break;
                case"o":
                    y = x("o");
                    break;
                case"m":
                    g = x("m");
                    break;
                case"M":
                    g = w("M", p, f);
                    break;
                case"y":
                    m = x("y");
                    break;
                case"@":
                    r = new Date(x("@")), m = r.getFullYear(), g = r.getMonth() + 1, v = r.getDate();
                    break;
                case"!":
                    r = new Date((x("!") - this._ticksTo1970) / 1e4), m = r.getFullYear(), g = r.getMonth() + 1, v = r.getDate();
                    break;
                case"'":
                    _("'") ? k() : b = !0;
                    break;
                default:
                    k()
            }
            if (i.length > h && (o = i.substr(h), !/^\s+/.test(o))) throw"Extra/unparsed characters found in date: " + o;
            if (-1 === m ? m = (new Date).getFullYear() : 100 > m && (m += (new Date).getFullYear() - (new Date).getFullYear() % 100 + (u >= m ? 0 : -100)), y > -1) for (g = 1, v = y; ;) {
                if (a = this._getDaysInMonth(m, g - 1), a >= v) break;
                g++, v -= a
            }
            if (r = this._daylightSavingAdjust(new Date(m, g - 1, v)), r.getFullYear() !== m || r.getMonth() + 1 !== g || r.getDate() !== v) throw"Invalid date";
            return r
        },
        ATOM: "yy-mm-dd",
        COOKIE: "D, dd M yy",
        ISO_8601: "yy-mm-dd",
        RFC_822: "D, d M y",
        RFC_850: "DD, dd-M-y",
        RFC_1036: "D, d M y",
        RFC_1123: "D, d M yy",
        RFC_2822: "D, d M yy",
        RSS: "D, d M y",
        TICKS: "!",
        TIMESTAMP: "@",
        W3C: "yy-mm-dd",
        _ticksTo1970: 1e7 * 60 * 60 * 24 * (718685 + Math.floor(492.5) - Math.floor(19.7) + Math.floor(4.925)),
        formatDate: function (e, t, i) {
            if (!t) return "";
            var s, n = (i ? i.dayNamesShort : null) || this._defaults.dayNamesShort,
                a = (i ? i.dayNames : null) || this._defaults.dayNames,
                o = (i ? i.monthNamesShort : null) || this._defaults.monthNamesShort,
                r = (i ? i.monthNames : null) || this._defaults.monthNames, h = function (t) {
                    var i = e.length > s + 1 && e.charAt(s + 1) === t;
                    return i && s++, i
                }, l = function (e, t, i) {
                    var s = "" + t;
                    if (h(e)) for (; i > s.length;) s = "0" + s;
                    return s
                }, u = function (e, t, i, s) {
                    return h(e) ? s[t] : i[t]
                }, d = "", c = !1;
            if (t) for (s = 0; e.length > s; s++) if (c) "'" !== e.charAt(s) || h("'") ? d += e.charAt(s) : c = !1; else switch (e.charAt(s)) {
                case"d":
                    d += l("d", t.getDate(), 2);
                    break;
                case"D":
                    d += u("D", t.getDay(), n, a);
                    break;
                case"o":
                    d += l("o", Math.round((new Date(t.getFullYear(), t.getMonth(), t.getDate()).getTime() - new Date(t.getFullYear(), 0, 0).getTime()) / 864e5), 3);
                    break;
                case"m":
                    d += l("m", t.getMonth() + 1, 2);
                    break;
                case"M":
                    d += u("M", t.getMonth(), o, r);
                    break;
                case"y":
                    d += h("y") ? t.getFullYear() : (10 > t.getYear() % 100 ? "0" : "") + t.getYear() % 100;
                    break;
                case"@":
                    d += t.getTime();
                    break;
                case"!":
                    d += 1e4 * t.getTime() + this._ticksTo1970;
                    break;
                case"'":
                    h("'") ? d += "'" : c = !0;
                    break;
                default:
                    d += e.charAt(s)
            }
            return d
        },
        _possibleChars: function (e) {
            var t, i = "", s = !1, n = function (i) {
                var s = e.length > t + 1 && e.charAt(t + 1) === i;
                return s && t++, s
            };
            for (t = 0; e.length > t; t++) if (s) "'" !== e.charAt(t) || n("'") ? i += e.charAt(t) : s = !1; else switch (e.charAt(t)) {
                case"d":
                case"m":
                case"y":
                case"@":
                    i += "0123456789";
                    break;
                case"D":
                case"M":
                    return null;
                case"'":
                    n("'") ? i += "'" : s = !0;
                    break;
                default:
                    i += e.charAt(t)
            }
            return i
        },
        _get: function (e, t) {
            return void 0 !== e.settings[t] ? e.settings[t] : this._defaults[t]
        },
        _setDateFromField: function (e, t) {
            if (e.input.val() !== e.lastVal) {
                var i = this._get(e, "dateFormat"), s = e.lastVal = e.input ? e.input.val() : null,
                    n = this._getDefaultDate(e), a = n, o = this._getFormatConfig(e);
                try {
                    a = this.parseDate(i, s, o) || n
                } catch (r) {
                    s = t ? "" : s
                }
                e.selectedDay = a.getDate(), e.drawMonth = e.selectedMonth = a.getMonth(), e.drawYear = e.selectedYear = a.getFullYear(), e.currentDay = s ? a.getDate() : 0, e.currentMonth = s ? a.getMonth() : 0, e.currentYear = s ? a.getFullYear() : 0, this._adjustInstDate(e)
            }
        },
        _getDefaultDate: function (e) {
            return this._restrictMinMax(e, this._determineDate(e, this._get(e, "defaultDate"), new Date))
        },
        _determineDate: function (t, i, s) {
            var n = function (e) {
                    var t = new Date;
                    return t.setDate(t.getDate() + e), t
                }, a = function (i) {
                    try {
                        return e.datepicker.parseDate(e.datepicker._get(t, "dateFormat"), i, e.datepicker._getFormatConfig(t))
                    } catch (s) {
                    }
                    for (var n = (i.toLowerCase().match(/^c/) ? e.datepicker._getDate(t) : null) || new Date, a = n.getFullYear(), o = n.getMonth(), r = n.getDate(), h = /([+\-]?[0-9]+)\s*(d|D|w|W|m|M|y|Y)?/g, l = h.exec(i); l;) {
                        switch (l[2] || "d") {
                            case"d":
                            case"D":
                                r += parseInt(l[1], 10);
                                break;
                            case"w":
                            case"W":
                                r += 7 * parseInt(l[1], 10);
                                break;
                            case"m":
                            case"M":
                                o += parseInt(l[1], 10), r = Math.min(r, e.datepicker._getDaysInMonth(a, o));
                                break;
                            case"y":
                            case"Y":
                                a += parseInt(l[1], 10), r = Math.min(r, e.datepicker._getDaysInMonth(a, o))
                        }
                        l = h.exec(i)
                    }
                    return new Date(a, o, r)
                },
                o = null == i || "" === i ? s : "string" == typeof i ? a(i) : "number" == typeof i ? isNaN(i) ? s : n(i) : new Date(i.getTime());
            return o = o && "Invalid Date" == "" + o ? s : o, o && (o.setHours(0), o.setMinutes(0), o.setSeconds(0), o.setMilliseconds(0)), this._daylightSavingAdjust(o)
        },
        _daylightSavingAdjust: function (e) {
            return e ? (e.setHours(e.getHours() > 12 ? e.getHours() + 2 : 0), e) : null
        },
        _setDate: function (e, t, i) {
            var s = !t, n = e.selectedMonth, a = e.selectedYear,
                o = this._restrictMinMax(e, this._determineDate(e, t, new Date));
            e.selectedDay = e.currentDay = o.getDate(), e.drawMonth = e.selectedMonth = e.currentMonth = o.getMonth(), e.drawYear = e.selectedYear = e.currentYear = o.getFullYear(), n === e.selectedMonth && a === e.selectedYear || i || this._notifyChange(e), this._adjustInstDate(e), e.input && e.input.val(s ? "" : this._formatDate(e))
        },
        _getDate: function (e) {
            var t = !e.currentYear || e.input && "" === e.input.val() ? null : this._daylightSavingAdjust(new Date(e.currentYear, e.currentMonth, e.currentDay));
            return t
        },
        _attachHandlers: function (t) {
            var i = this._get(t, "stepMonths"), s = "#" + t.id.replace(/\\\\/g, "\\");
            t.dpDiv.find("[data-handler]").map(function () {
                var t = {
                    prev: function () {
                        e.datepicker._adjustDate(s, -i, "M")
                    }, next: function () {
                        e.datepicker._adjustDate(s, +i, "M")
                    }, hide: function () {
                        e.datepicker._hideDatepicker()
                    }, today: function () {
                        e.datepicker._gotoToday(s)
                    }, selectDay: function () {
                        return e.datepicker._selectDay(s, +this.getAttribute("data-month"), +this.getAttribute("data-year"), this), !1
                    }, selectMonth: function () {
                        return e.datepicker._selectMonthYear(s, this, "M"), !1
                    }, selectYear: function () {
                        return e.datepicker._selectMonthYear(s, this, "Y"), !1
                    }
                };
                e(this).bind(this.getAttribute("data-event"), t[this.getAttribute("data-handler")])
            })
        },
        _generateHTML: function (e) {
            var t, i, s, n, a, o, r, h, l, u, d, c, p, f, m, g, v, y, b, _, x, w, k, T, D, S, N, M, C, P, A, I, H, z, F,
                E, W, O, L, j = new Date,
                R = this._daylightSavingAdjust(new Date(j.getFullYear(), j.getMonth(), j.getDate())),
                Y = this._get(e, "isRTL"), J = this._get(e, "showButtonPanel"), B = this._get(e, "hideIfNoPrevNext"),
                K = this._get(e, "navigationAsDateFormat"), U = this._getNumberOfMonths(e),
                V = this._get(e, "showCurrentAtPos"), q = this._get(e, "stepMonths"), G = 1 !== U[0] || 1 !== U[1],
                X = this._daylightSavingAdjust(e.currentDay ? new Date(e.currentYear, e.currentMonth, e.currentDay) : new Date(9999, 9, 9)),
                Q = this._getMinMaxDate(e, "min"), $ = this._getMinMaxDate(e, "max"), Z = e.drawMonth - V,
                et = e.drawYear;
            if (0 > Z && (Z += 12, et--), $) for (t = this._daylightSavingAdjust(new Date($.getFullYear(), $.getMonth() - U[0] * U[1] + 1, $.getDate())), t = Q && Q > t ? Q : t; this._daylightSavingAdjust(new Date(et, Z, 1)) > t;) Z--, 0 > Z && (Z = 11, et--);
            for (e.drawMonth = Z, e.drawYear = et, i = this._get(e, "prevText"), i = K ? this.formatDate(i, this._daylightSavingAdjust(new Date(et, Z - q, 1)), this._getFormatConfig(e)) : i, s = this._canAdjustMonth(e, -1, et, Z) ? "<a class='ui-datepicker-prev ui-corner-all' data-handler='prev' data-event='click' title='" + i + "'><span class='ui-icon ui-icon-circle-triangle-" + (Y ? "e" : "w") + "'>" + i + "</span></a>" : B ? "" : "<a class='ui-datepicker-prev ui-corner-all ui-state-disabled' title='" + i + "'><span class='ui-icon ui-icon-circle-triangle-" + (Y ? "e" : "w") + "'>" + i + "</span></a>", n = this._get(e, "nextText"), n = K ? this.formatDate(n, this._daylightSavingAdjust(new Date(et, Z + q, 1)), this._getFormatConfig(e)) : n, a = this._canAdjustMonth(e, 1, et, Z) ? "<a class='ui-datepicker-next ui-corner-all' data-handler='next' data-event='click' title='" + n + "'><span class='ui-icon ui-icon-circle-triangle-" + (Y ? "w" : "e") + "'>" + n + "</span></a>" : B ? "" : "<a class='ui-datepicker-next ui-corner-all ui-state-disabled' title='" + n + "'><span class='ui-icon ui-icon-circle-triangle-" + (Y ? "w" : "e") + "'>" + n + "</span></a>", o = this._get(e, "currentText"), r = this._get(e, "gotoCurrent") && e.currentDay ? X : R, o = K ? this.formatDate(o, r, this._getFormatConfig(e)) : o, h = e.inline ? "" : "<button type='button' class='ui-datepicker-close ui-state-default ui-priority-primary ui-corner-all' data-handler='hide' data-event='click'>" + this._get(e, "closeText") + "</button>", l = J ? "<div class='ui-datepicker-buttonpane ui-widget-content'>" + (Y ? h : "") + (this._isInRange(e, r) ? "<button type='button' class='ui-datepicker-current ui-state-default ui-priority-secondary ui-corner-all' data-handler='today' data-event='click'>" + o + "</button>" : "") + (Y ? "" : h) + "</div>" : "", u = parseInt(this._get(e, "firstDay"), 10), u = isNaN(u) ? 0 : u, d = this._get(e, "showWeek"), c = this._get(e, "dayNames"), p = this._get(e, "dayNamesMin"), f = this._get(e, "monthNames"), m = this._get(e, "monthNamesShort"), g = this._get(e, "beforeShowDay"), v = this._get(e, "showOtherMonths"), y = this._get(e, "selectOtherMonths"), b = this._getDefaultDate(e), _ = "", w = 0; U[0] > w; w++) {
                for (k = "", this.maxRows = 4, T = 0; U[1] > T; T++) {
                    if (D = this._daylightSavingAdjust(new Date(et, Z, e.selectedDay)), S = " ui-corner-all", N = "", G) {
                        if (N += "<div class='ui-datepicker-group", U[1] > 1) switch (T) {
                            case 0:
                                N += " ui-datepicker-group-first", S = " ui-corner-" + (Y ? "right" : "left");
                                break;
                            case U[1] - 1:
                                N += " ui-datepicker-group-last", S = " ui-corner-" + (Y ? "left" : "right");
                                break;
                            default:
                                N += " ui-datepicker-group-middle", S = ""
                        }
                        N += "'>"
                    }
                    for (N += "<div class='ui-datepicker-header ui-widget-header ui-helper-clearfix" + S + "'>" + (/all|left/.test(S) && 0 === w ? Y ? a : s : "") + (/all|right/.test(S) && 0 === w ? Y ? s : a : "") + this._generateMonthYearHeader(e, Z, et, Q, $, w > 0 || T > 0, f, m) + "</div><table class='ui-datepicker-calendar'><thead>" + "<tr>", M = d ? "<th class='ui-datepicker-week-col'>" + this._get(e, "weekHeader") + "</th>" : "", x = 0; 7 > x; x++) C = (x + u) % 7, M += "<th scope='col'" + ((x + u + 6) % 7 >= 5 ? " class='ui-datepicker-week-end'" : "") + ">" + "<span title='" + c[C] + "'>" + p[C] + "</span></th>";
                    for (N += M + "</tr></thead><tbody>", P = this._getDaysInMonth(et, Z), et === e.selectedYear && Z === e.selectedMonth && (e.selectedDay = Math.min(e.selectedDay, P)), A = (this._getFirstDayOfMonth(et, Z) - u + 7) % 7, I = Math.ceil((A + P) / 7), H = G ? this.maxRows > I ? this.maxRows : I : I, this.maxRows = H, z = this._daylightSavingAdjust(new Date(et, Z, 1 - A)), F = 0; H > F; F++) {
                        for (N += "<tr>", E = d ? "<td class='ui-datepicker-week-col'>" + this._get(e, "calculateWeek")(z) + "</td>" : "", x = 0; 7 > x; x++) W = g ? g.apply(e.input ? e.input[0] : null, [z]) : [!0, ""], O = z.getMonth() !== Z, L = O && !y || !W[0] || Q && Q > z || $ && z > $, E += "<td class='" + ((x + u + 6) % 7 >= 5 ? " ui-datepicker-week-end" : "") + (O ? " ui-datepicker-other-month" : "") + (z.getTime() === D.getTime() && Z === e.selectedMonth && e._keyEvent || b.getTime() === z.getTime() && b.getTime() === D.getTime() ? " " + this._dayOverClass : "") + (L ? " " + this._unselectableClass + " ui-state-disabled" : "") + (O && !v ? "" : " " + W[1] + (z.getTime() === X.getTime() ? " " + this._currentClass : "") + (z.getTime() === R.getTime() ? " ui-datepicker-today" : "")) + "'" + (O && !v || !W[2] ? "" : " title='" + W[2].replace(/'/g, "&#39;") + "'") + (L ? "" : " data-handler='selectDay' data-event='click' data-month='" + z.getMonth() + "' data-year='" + z.getFullYear() + "'") + ">" + (O && !v ? "&#xa0;" : L ? "<span class='ui-state-default'>" + z.getDate() + "</span>" : "<a class='ui-state-default" + (z.getTime() === R.getTime() ? " ui-state-highlight" : "") + (z.getTime() === X.getTime() ? " ui-state-active" : "") + (O ? " ui-priority-secondary" : "") + "' href='#'>" + z.getDate() + "</a>") + "</td>", z.setDate(z.getDate() + 1), z = this._daylightSavingAdjust(z);
                        N += E + "</tr>"
                    }
                    Z++, Z > 11 && (Z = 0, et++), N += "</tbody></table>" + (G ? "</div>" + (U[0] > 0 && T === U[1] - 1 ? "<div class='ui-datepicker-row-break'></div>" : "") : ""), k += N
                }
                _ += k
            }
            return _ += l, e._keyEvent = !1, _
        },
        _generateMonthYearHeader: function (e, t, i, s, n, a, o, r) {
            var h, l, u, d, c, p, f, m, g = this._get(e, "changeMonth"), v = this._get(e, "changeYear"),
                y = this._get(e, "showMonthAfterYear"), b = "<div class='ui-datepicker-title'>", _ = "";
            if (a || !g) _ += "<span class='ui-datepicker-month'>" + o[t] + "</span>"; else {
                for (h = s && s.getFullYear() === i, l = n && n.getFullYear() === i, _ += "<select class='ui-datepicker-month' data-handler='selectMonth' data-event='change'>", u = 0; 12 > u; u++) (!h || u >= s.getMonth()) && (!l || n.getMonth() >= u) && (_ += "<option value='" + u + "'" + (u === t ? " selected='selected'" : "") + ">" + r[u] + "</option>");
                _ += "</select>"
            }
            if (y || (b += _ + (!a && g && v ? "" : "&#xa0;")), !e.yearshtml) if (e.yearshtml = "", a || !v) b += "<span class='ui-datepicker-year'>" + i + "</span>"; else {
                for (d = this._get(e, "yearRange").split(":"), c = (new Date).getFullYear(), p = function (e) {
                    var t = e.match(/c[+\-].*/) ? i + parseInt(e.substring(1), 10) : e.match(/[+\-].*/) ? c + parseInt(e, 10) : parseInt(e, 10);
                    return isNaN(t) ? c : t
                }, f = p(d[0]), m = Math.max(f, p(d[1] || "")), f = s ? Math.max(f, s.getFullYear()) : f, m = n ? Math.min(m, n.getFullYear()) : m, e.yearshtml += "<select class='ui-datepicker-year' data-handler='selectYear' data-event='change'>"; m >= f; f++) e.yearshtml += "<option value='" + f + "'" + (f === i ? " selected='selected'" : "") + ">" + f + "</option>";
                e.yearshtml += "</select>", b += e.yearshtml, e.yearshtml = null
            }
            return b += this._get(e, "yearSuffix"), y && (b += (!a && g && v ? "" : "&#xa0;") + _), b += "</div>"
        },
        _adjustInstDate: function (e, t, i) {
            var s = e.drawYear + ("Y" === i ? t : 0), n = e.drawMonth + ("M" === i ? t : 0),
                a = Math.min(e.selectedDay, this._getDaysInMonth(s, n)) + ("D" === i ? t : 0),
                o = this._restrictMinMax(e, this._daylightSavingAdjust(new Date(s, n, a)));
            e.selectedDay = o.getDate(), e.drawMonth = e.selectedMonth = o.getMonth(), e.drawYear = e.selectedYear = o.getFullYear(), ("M" === i || "Y" === i) && this._notifyChange(e)
        },
        _restrictMinMax: function (e, t) {
            var i = this._getMinMaxDate(e, "min"), s = this._getMinMaxDate(e, "max"), n = i && i > t ? i : t;
            return s && n > s ? s : n
        },
        _notifyChange: function (e) {
            var t = this._get(e, "onChangeMonthYear");
            t && t.apply(e.input ? e.input[0] : null, [e.selectedYear, e.selectedMonth + 1, e])
        },
        _getNumberOfMonths: function (e) {
            var t = this._get(e, "numberOfMonths");
            return null == t ? [1, 1] : "number" == typeof t ? [1, t] : t
        },
        _getMinMaxDate: function (e, t) {
            return this._determineDate(e, this._get(e, t + "Date"), null)
        },
        _getDaysInMonth: function (e, t) {
            return 32 - this._daylightSavingAdjust(new Date(e, t, 32)).getDate()
        },
        _getFirstDayOfMonth: function (e, t) {
            return new Date(e, t, 1).getDay()
        },
        _canAdjustMonth: function (e, t, i, s) {
            var n = this._getNumberOfMonths(e),
                a = this._daylightSavingAdjust(new Date(i, s + (0 > t ? t : n[0] * n[1]), 1));
            return 0 > t && a.setDate(this._getDaysInMonth(a.getFullYear(), a.getMonth())), this._isInRange(e, a)
        },
        _isInRange: function (e, t) {
            var i, s, n = this._getMinMaxDate(e, "min"), a = this._getMinMaxDate(e, "max"), o = null, r = null,
                h = this._get(e, "yearRange");
            return h && (i = h.split(":"), s = (new Date).getFullYear(), o = parseInt(i[0], 10), r = parseInt(i[1], 10), i[0].match(/[+\-].*/) && (o += s), i[1].match(/[+\-].*/) && (r += s)), (!n || t.getTime() >= n.getTime()) && (!a || t.getTime() <= a.getTime()) && (!o || t.getFullYear() >= o) && (!r || r >= t.getFullYear())
        },
        _getFormatConfig: function (e) {
            var t = this._get(e, "shortYearCutoff");
            return t = "string" != typeof t ? t : (new Date).getFullYear() % 100 + parseInt(t, 10), {
                shortYearCutoff: t,
                dayNamesShort: this._get(e, "dayNamesShort"),
                dayNames: this._get(e, "dayNames"),
                monthNamesShort: this._get(e, "monthNamesShort"),
                monthNames: this._get(e, "monthNames")
            }
        },
        _formatDate: function (e, t, i, s) {
            t || (e.currentDay = e.selectedDay, e.currentMonth = e.selectedMonth, e.currentYear = e.selectedYear);
            var n = t ? "object" == typeof t ? t : this._daylightSavingAdjust(new Date(s, i, t)) : this._daylightSavingAdjust(new Date(e.currentYear, e.currentMonth, e.currentDay));
            return this.formatDate(this._get(e, "dateFormat"), n, this._getFormatConfig(e))
        }
    }), e.fn.datepicker = function (t) {
        if (!this.length) return this;
        e.datepicker.initialized || (e(document).mousedown(e.datepicker._checkExternalClick), e.datepicker.initialized = !0), 0 === e("#" + e.datepicker._mainDivId).length && e("body").append(e.datepicker.dpDiv);
        var i = Array.prototype.slice.call(arguments, 1);
        return "string" != typeof t || "isDisabled" !== t && "getDate" !== t && "widget" !== t ? "option" === t && 2 === arguments.length && "string" == typeof arguments[1] ? e.datepicker["_" + t + "Datepicker"].apply(e.datepicker, [this[0]].concat(i)) : this.each(function () {
            "string" == typeof t ? e.datepicker["_" + t + "Datepicker"].apply(e.datepicker, [this].concat(i)) : e.datepicker._attachDatepicker(this, t)
        }) : e.datepicker["_" + t + "Datepicker"].apply(e.datepicker, [this[0]].concat(i))
    }, e.datepicker = new n, e.datepicker.initialized = !1, e.datepicker.uuid = (new Date).getTime(), e.datepicker.version = "1.11.4", e.datepicker, e.widget("ui.tooltip", {
        version: "1.11.4", options: {
            content: function () {
                var t = e(this).attr("title") || "";
                return e("<a>").text(t).html()
            },
            hide: !0,
            items: "[title]:not([disabled])",
            position: {my: "left top+15", at: "left bottom", collision: "flipfit flip"},
            show: !0,
            tooltipClass: null,
            track: !1,
            close: null,
            open: null
        }, _addDescribedBy: function (t, i) {
            var s = (t.attr("aria-describedby") || "").split(/\s+/);
            s.push(i), t.data("ui-tooltip-id", i).attr("aria-describedby", e.trim(s.join(" ")))
        }, _removeDescribedBy: function (t) {
            var i = t.data("ui-tooltip-id"), s = (t.attr("aria-describedby") || "").split(/\s+/), n = e.inArray(i, s);
            -1 !== n && s.splice(n, 1), t.removeData("ui-tooltip-id"), s = e.trim(s.join(" ")), s ? t.attr("aria-describedby", s) : t.removeAttr("aria-describedby")
        }, _create: function () {
            this._on({
                mouseover: "open",
                focusin: "open"
            }), this.tooltips = {}, this.parents = {}, this.options.disabled && this._disable(), this.liveRegion = e("<div>").attr({
                role: "log",
                "aria-live": "assertive",
                "aria-relevant": "additions"
            }).addClass("ui-helper-hidden-accessible").appendTo(this.document[0].body)
        }, _setOption: function (t, i) {
            var s = this;
            return "disabled" === t ? (this[i ? "_disable" : "_enable"](), this.options[t] = i, void 0) : (this._super(t, i), "content" === t && e.each(this.tooltips, function (e, t) {
                s._updateContent(t.element)
            }), void 0)
        }, _disable: function () {
            var t = this;
            e.each(this.tooltips, function (i, s) {
                var n = e.Event("blur");
                n.target = n.currentTarget = s.element[0], t.close(n, !0)
            }), this.element.find(this.options.items).addBack().each(function () {
                var t = e(this);
                t.is("[title]") && t.data("ui-tooltip-title", t.attr("title")).removeAttr("title")
            })
        }, _enable: function () {
            this.element.find(this.options.items).addBack().each(function () {
                var t = e(this);
                t.data("ui-tooltip-title") && t.attr("title", t.data("ui-tooltip-title"))
            })
        }, open: function (t) {
            var i = this, s = e(t ? t.target : this.element).closest(this.options.items);
            s.length && !s.data("ui-tooltip-id") && (s.attr("title") && s.data("ui-tooltip-title", s.attr("title")), s.data("ui-tooltip-open", !0), t && "mouseover" === t.type && s.parents().each(function () {
                var t, s = e(this);
                s.data("ui-tooltip-open") && (t = e.Event("blur"), t.target = t.currentTarget = this, i.close(t, !0)), s.attr("title") && (s.uniqueId(), i.parents[this.id] = {
                    element: this,
                    title: s.attr("title")
                }, s.attr("title", ""))
            }), this._registerCloseHandlers(t, s), this._updateContent(s, t))
        }, _updateContent: function (e, t) {
            var i, s = this.options.content, n = this, a = t ? t.type : null;
            return "string" == typeof s ? this._open(t, e, s) : (i = s.call(e[0], function (i) {
                n._delay(function () {
                    e.data("ui-tooltip-open") && (t && (t.type = a), this._open(t, e, i))
                })
            }), i && this._open(t, e, i), void 0)
        }, _open: function (t, i, s) {
            function n(e) {
                l.of = e, o.is(":hidden") || o.position(l)
            }

            var a, o, r, h, l = e.extend({}, this.options.position);
            if (s) {
                if (a = this._find(i)) return a.tooltip.find(".ui-tooltip-content").html(s), void 0;
                i.is("[title]") && (t && "mouseover" === t.type ? i.attr("title", "") : i.removeAttr("title")), a = this._tooltip(i), o = a.tooltip, this._addDescribedBy(i, o.attr("id")), o.find(".ui-tooltip-content").html(s), this.liveRegion.children().hide(), s.clone ? (h = s.clone(), h.removeAttr("id").find("[id]").removeAttr("id")) : h = s, e("<div>").html(h).appendTo(this.liveRegion), this.options.track && t && /^mouse/.test(t.type) ? (this._on(this.document, {mousemove: n}), n(t)) : o.position(e.extend({of: i}, this.options.position)), o.hide(), this._show(o, this.options.show), this.options.show && this.options.show.delay && (r = this.delayedShow = setInterval(function () {
                    o.is(":visible") && (n(l.of), clearInterval(r))
                }, e.fx.interval)), this._trigger("open", t, {tooltip: o})
            }
        }, _registerCloseHandlers: function (t, i) {
            var s = {
                keyup: function (t) {
                    if (t.keyCode === e.ui.keyCode.ESCAPE) {
                        var s = e.Event(t);
                        s.currentTarget = i[0], this.close(s, !0)
                    }
                }
            };
            i[0] !== this.element[0] && (s.remove = function () {
                this._removeTooltip(this._find(i).tooltip)
            }), t && "mouseover" !== t.type || (s.mouseleave = "close"), t && "focusin" !== t.type || (s.focusout = "close"), this._on(!0, i, s)
        }, close: function (t) {
            var i, s = this, n = e(t ? t.currentTarget : this.element), a = this._find(n);
            return a ? (i = a.tooltip, a.closing || (clearInterval(this.delayedShow), n.data("ui-tooltip-title") && !n.attr("title") && n.attr("title", n.data("ui-tooltip-title")), this._removeDescribedBy(n), a.hiding = !0, i.stop(!0), this._hide(i, this.options.hide, function () {
                s._removeTooltip(e(this))
            }), n.removeData("ui-tooltip-open"), this._off(n, "mouseleave focusout keyup"), n[0] !== this.element[0] && this._off(n, "remove"), this._off(this.document, "mousemove"), t && "mouseleave" === t.type && e.each(this.parents, function (t, i) {
                e(i.element).attr("title", i.title), delete s.parents[t]
            }), a.closing = !0, this._trigger("close", t, {tooltip: i}), a.hiding || (a.closing = !1)), void 0) : (n.removeData("ui-tooltip-open"), void 0)
        }, _tooltip: function (t) {
            var i = e("<div>").attr("role", "tooltip").addClass("ui-tooltip ui-widget ui-corner-all ui-widget-content " + (this.options.tooltipClass || "")),
                s = i.uniqueId().attr("id");
            return e("<div>").addClass("ui-tooltip-content").appendTo(i), i.appendTo(this.document[0].body), this.tooltips[s] = {
                element: t,
                tooltip: i
            }
        }, _find: function (e) {
            var t = e.data("ui-tooltip-id");
            return t ? this.tooltips[t] : null
        }, _removeTooltip: function (e) {
            e.remove(), delete this.tooltips[e.attr("id")]
        }, _destroy: function () {
            var t = this;
            e.each(this.tooltips, function (i, s) {
                var n = e.Event("blur"), a = s.element;
                n.target = n.currentTarget = a[0], t.close(n, !0), e("#" + i).remove(), a.data("ui-tooltip-title") && (a.attr("title") || a.attr("title", a.data("ui-tooltip-title")), a.removeData("ui-tooltip-title"))
            }), this.liveRegion.remove()
        }
    })
});
/* End */
;
; /* Start:"a:4:{s:4:"full";s:54:"/bitrix/templates/main/js/amcharts.js?1475757960200058";s:6:"source";s:37:"/bitrix/templates/main/js/amcharts.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
(function () {
    var d;
    window.AmCharts ? d = window.AmCharts : (d = {}, window.AmCharts = d, d.themes = {}, d.maps = {}, d.inheriting = {}, d.charts = [], d.onReadyArray = [], d.useUTC = !1, d.updateRate = 60, d.uid = 0, d.lang = {}, d.translations = {}, d.mapTranslations = {}, d.windows = {}, d.initHandlers = []);
    d.Class = function (a) {
        var b = function () {
            arguments[0] !== d.inheriting && (this.events = {}, this.construct.apply(this, arguments))
        };
        a.inherits ? (b.prototype = new a.inherits(d.inheriting), b.base = a.inherits.prototype, delete a.inherits) : (b.prototype.createEvents = function () {
            for (var a = 0; a < arguments.length; a++) this.events[arguments[a]] = []
        }, b.prototype.listenTo = function (a, b, c) {
            this.removeListener(a, b, c);
            a.events[b].push({handler: c, scope: this})
        }, b.prototype.addListener = function (a, b, c) {
            this.removeListener(this, a, b);
            a && this.events[a] && this.events[a].push({handler: b, scope: c})
        }, b.prototype.removeListener = function (a, b, c) {
            if (a && a.events && (a = a.events[b])) for (b = a.length - 1; 0 <= b; b--) a[b].handler === c && a.splice(b, 1)
        }, b.prototype.fire = function (a) {
            for (var b = this.events[a.type], c = 0; c < b.length; c++) {
                var d = b[c];
                d.handler.call(d.scope, a)
            }
        });
        for (var c in a) b.prototype[c] = a[c];
        return b
    };
    d.addChart = function (a) {
        window.requestAnimationFrame ? d.animationRequested || (d.animationRequested = !0, window.requestAnimationFrame(d.update)) : d.updateInt || (d.updateInt = setInterval(function () {
            d.update()
        }, Math.round(1E3 / d.updateRate)));
        d.charts.push(a)
    };
    d.removeChart = function (a) {
        for (var b = d.charts, c = b.length - 1; 0 <= c; c--) b[c] == a && b.splice(c, 1);
        0 === b.length && d.updateInt && (clearInterval(d.updateInt), d.updateInt = NaN)
    };
    d.isModern = !0;
    d.getIEVersion = function () {
        var a = 0, b, c;
        "Microsoft Internet Explorer" == navigator.appName && (b = navigator.userAgent, c = /MSIE ([0-9]{1,}[.0-9]{0,})/, null !== c.exec(b) && (a = parseFloat(RegExp.$1)));
        return a
    };
    d.applyLang = function (a, b) {
        var c = d.translations;
        b.dayNames = d.extend({}, d.dayNames);
        b.shortDayNames = d.extend({}, d.shortDayNames);
        b.monthNames = d.extend({}, d.monthNames);
        b.shortMonthNames = d.extend({}, d.shortMonthNames);
        b.amString = "am";
        b.pmString = "pm";
        c && (c = c[a]) && (d.lang = c, c.monthNames && (b.dayNames = d.extend({}, c.dayNames), b.shortDayNames = d.extend({}, c.shortDayNames), b.monthNames = d.extend({}, c.monthNames), b.shortMonthNames = d.extend({}, c.shortMonthNames)), c.am && (b.amString = c.am), c.pm && (b.pmString = c.pm))
    };
    d.IEversion = d.getIEVersion();
    9 > d.IEversion && 0 < d.IEversion && (d.isModern = !1, d.isIE = !0);
    d.dx = 0;
    d.dy = 0;
    if (document.addEventListener || window.opera) d.isNN = !0, d.isIE = !1, d.dx = .5, d.dy = .5;
    document.attachEvent && (d.isNN = !1, d.isIE = !0, d.isModern || (d.dx = 0, d.dy = 0));
    window.chrome && (d.chrome = !0);
    d.handleMouseUp = function (a) {
        for (var b = d.charts, c = 0; c < b.length; c++) {
            var e = b[c];
            e && e.handleReleaseOutside && e.handleReleaseOutside(a)
        }
    };
    d.handleMouseMove = function (a) {
        for (var b = d.charts, c = 0; c < b.length; c++) {
            var e = b[c];
            e && e.handleMouseMove && e.handleMouseMove(a)
        }
    };
    d.handleWheel = function (a) {
        for (var b = d.charts, c = 0; c < b.length; c++) {
            var e = b[c];
            if (e && e.mouseIsOver) {
                e.mouseWheelScrollEnabled || e.mouseWheelZoomEnabled ? e.handleWheel && e.handleWheel(a) : a.stopPropagation && a.stopPropagation();
                break
            }
        }
    };
    d.resetMouseOver = function () {
        for (var a = d.charts, b = 0; b < a.length; b++) {
            var c = a[b];
            c && (c.mouseIsOver = !1)
        }
    };
    d.ready = function (a) {
        d.onReadyArray.push(a)
    };
    d.handleLoad = function () {
        d.isReady = !0;
        for (var a = d.onReadyArray, b = 0; b < a.length; b++) {
            var c = a[b];
            isNaN(d.processDelay) ? c() : setTimeout(c, d.processDelay * b)
        }
    };
    d.addInitHandler = function (a, b) {
        d.initHandlers.push({method: a, types: b})
    };
    d.callInitHandler = function (a) {
        var b = d.initHandlers;
        if (d.initHandlers) for (var c = 0; c < b.length; c++) {
            var e = b[c];
            e.types ? d.isInArray(e.types, a.type) && e.method(a) : e.method(a)
        }
    };
    d.getUniqueId = function () {
        d.uid++;
        return "AmChartsEl-" + d.uid
    };
    d.isNN && (document.addEventListener("mousemove", d.handleMouseMove), document.addEventListener("mouseup", d.handleMouseUp, !0), window.addEventListener("load", d.handleLoad, !0), window.addEventListener("DOMMouseScroll", d.handleWheel, !0), document.addEventListener("mousewheel", d.handleWheel, !0));
    d.isIE && (document.attachEvent("onmousemove", d.handleMouseMove), document.attachEvent("onmouseup", d.handleMouseUp), window.attachEvent("onload", d.handleLoad), document.attachEvent("onmousewheel", d.handleWheel));
    d.clear = function () {
        var a = d.charts;
        if (a) for (var b = a.length - 1; 0 <= b; b--) a[b].clear();
        d.updateInt && clearInterval(d.updateInt);
        d.charts = [];
        d.isNN && (document.removeEventListener("mousemove", d.handleMouseMove, !0), document.removeEventListener("mouseup", d.handleMouseUp, !0), window.removeEventListener("load", d.handleLoad, !0), window.removeEventListener("DOMMouseScroll", d.handleWheel, !0), document.removeEventListener("mousewheel", d.handleWheel, !0));
        d.isIE && (document.detachEvent("onmousemove", d.handleMouseMove), document.detachEvent("onmouseup", d.handleMouseUp), window.detachEvent("onload", d.handleLoad))
    };
    d.makeChart = function (a, b, c) {
        var e = b.type, h = b.theme;
        d.isString(h) && (h = d.themes[h], b.theme = h);
        var f;
        switch (e) {
            case"serial":
                f = new d.AmSerialChart(h);
                break;
            case"xy":
                f = new d.AmXYChart(h);
                break;
            case"pie":
                f = new d.AmPieChart(h);
                break;
            case"radar":
                f = new d.AmRadarChart(h);
                break;
            case"gauge":
                f = new d.AmAngularGauge(h);
                break;
            case"funnel":
                f = new d.AmFunnelChart(h);
                break;
            case"map":
                f = new d.AmMap(h);
                break;
            case"stock":
                f = new d.AmStockChart(h);
                break;
            case"gantt":
                f = new d.AmGanttChart(h)
        }
        d.extend(f, b);
        d.isReady ? isNaN(c) ? f.write(a) : setTimeout(function () {
            d.realWrite(f, a)
        }, c) : d.ready(function () {
            isNaN(c) ? f.write(a) : setTimeout(function () {
                d.realWrite(f, a)
            }, c)
        });
        return f
    };
    d.realWrite = function (a, b) {
        a.write(b)
    };
    d.updateCount = 0;
    d.validateAt = Math.round(d.updateRate / 10);
    d.update = function () {
        var a = d.charts;
        d.updateCount++;
        var b = !1;
        d.updateCount == d.validateAt && (b = !0, d.updateCount = 0);
        if (a) for (var c = a.length - 1; 0 <= c; c--) a[c].update && a[c].update(), b && (a[c].autoResize ? a[c].validateSize && a[c].validateSize() : a[c].premeasure && a[c].premeasure());
        window.requestAnimationFrame && window.requestAnimationFrame(d.update)
    };
    d.bezierX = 3;
    d.bezierY = 6;
    "complete" == document.readyState && d.handleLoad()
})();
(function () {
    var d = window.AmCharts;
    d.toBoolean = function (a, b) {
        if (void 0 === a) return b;
        switch (String(a).toLowerCase()) {
            case"true":
            case"yes":
            case"1":
                return !0;
            case"false":
            case"no":
            case"0":
            case null:
                return !1;
            default:
                return !!a
        }
    };
    d.removeFromArray = function (a, b) {
        var c;
        if (void 0 !== b && void 0 !== a) for (c = a.length - 1; 0 <= c; c--) a[c] == b && a.splice(c, 1)
    };
    d.getPath = function () {
        var a = document.getElementsByTagName("script");
        if (a) for (var b = 0; b < a.length; b++) {
            var c = a[b].src;
            if (-1 !== c.search(/\/(amcharts|ammap)\.js/)) return c.replace(/\/(amcharts|ammap)\.js.*/, "/")
        }
    };
    d.normalizeUrl = function (a) {
        return "" !== a && -1 === a.search(/\/$/) ? a + "/" : a
    };
    d.isAbsolute = function (a) {
        return 0 === a.search(/^http[s]?:|^\//)
    };
    d.isInArray = function (a, b) {
        for (var c = 0; c < a.length; c++) if (a[c] == b) return !0;
        return !1
    };
    d.getDecimals = function (a) {
        var b = 0;
        isNaN(a) || (a = String(a), -1 != a.indexOf("e-") ? b = Number(a.split("-")[1]) : -1 != a.indexOf(".") && (b = a.split(".")[1].length));
        return b
    };
    d.wordwrap = function (a, b, c, e) {
        var h, f, g, k;
        a += "";
        if (1 > b) return a;
        h = -1;
        for (a = (k = a.split(/\r\n|\n|\r/)).length; ++h < a; k[h] += g) {
            g = k[h];
            for (k[h] = ""; g.length > b; k[h] += d.trim(g.slice(0, f)) + ((g = g.slice(f)).length ? c : "")) f = 2 == e || (f = g.slice(0, b + 1).match(/\S*(\s)?$/))[1] ? b : f.input.length - f[0].length || 1 == e && b || f.input.length + (f = g.slice(b).match(/^\S*/))[0].length;
            g = d.trim(g)
        }
        return k.join(c)
    };
    d.trim = function (a) {
        return a.replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g, "")
    };
    d.wrappedText = function (a, b, c, e, h, f, g, k) {
        var l = d.text(a, b, c, e, h, f, g);
        if (l) {
            var m = l.getBBox();
            if (m.width > k) {
                var n = "\n";
                d.isModern || (n = "<br>");
                k = Math.floor(k / (m.width /
                    b.length));
                2 < k && (k -= 2);
                b = d.wordwrap(b, k, n, !0);
                l.remove();
                l = d.text(a, b, c, e, h, f, g)
            }
        }
        return l
    };
    d.getStyle = function (a, b) {
        var c = "";
        if (document.defaultView && document.defaultView.getComputedStyle) try {
            c = document.defaultView.getComputedStyle(a, "").getPropertyValue(b)
        } catch (e) {
        } else a.currentStyle && (b = b.replace(/\-(\w)/g, function (a, b) {
            return b.toUpperCase()
        }), c = a.currentStyle[b]);
        return c
    };
    d.removePx = function (a) {
        if (void 0 !== a) return Number(a.substring(0, a.length - 2))
    };
    d.getURL = function (a, b) {
        if (a) if ("_self" != b && b) if ("_top" == b && window.top) window.top.location.href = a; else if ("_parent" == b && window.parent) window.parent.location.href = a; else if ("_blank" == b) window.open(a); else {
            var c = document.getElementsByName(b)[0];
            c ? c.src = a : (c = d.windows[b]) ? c.opener && !c.opener.closed ? c.location.href = a : d.windows[b] = window.open(a) : d.windows[b] = window.open(a)
        } else window.location.href = a
    };
    d.ifArray = function (a) {
        return a && "object" == typeof a && 0 < a.length ? !0 : !1
    };
    d.callMethod = function (a, b) {
        var c;
        for (c = 0; c < b.length; c++) {
            var e = b[c];
            if (e) {
                if (e[a]) e[a]();
                var d = e.length;
                if (0 < d) {
                    var f;
                    for (f = 0; f < d; f++) {
                        var g = e[f];
                        if (g && g[a]) g[a]()
                    }
                }
            }
        }
    };
    d.toNumber = function (a) {
        return "number" == typeof a ? a : Number(String(a).replace(/[^0-9\-.]+/g, ""))
    };
    d.toColor = function (a) {
        if ("" !== a && void 0 !== a) if (-1 != a.indexOf(",")) {
            a = a.split(",");
            var b;
            for (b = 0; b < a.length; b++) {
                var c = a[b].substring(a[b].length - 6, a[b].length);
                a[b] = "#" + c
            }
        } else a = a.substring(a.length - 6, a.length), a = "#" + a;
        return a
    };
    d.toCoordinate = function (a, b, c) {
        var e;
        void 0 !== a && (a = String(a), c && c < b && (b = c), e = Number(a), -1 != a.indexOf("!") && (e = b - Number(a.substr(1))), -1 != a.indexOf("%") && (e = b * Number(a.substr(0, a.length - 1)) / 100));
        return e
    };
    d.fitToBounds = function (a, b, c) {
        a < b && (a = b);
        a > c && (a = c);
        return a
    };
    d.isDefined = function (a) {
        return void 0 === a ? !1 : !0
    };
    d.stripNumbers = function (a) {
        return a.replace(/[0-9]+/g, "")
    };
    d.roundTo = function (a, b) {
        if (0 > b) return a;
        var c = Math.pow(10, b);
        return Math.round(a * c) / c
    };
    d.toFixed = function (a, b) {
        var c = String(Math.round(a * Math.pow(10, b)));
        if (0 < b) {
            var e = c.length;
            if (e < b) {
                var d;
                for (d = 0; d < b - e; d++) c = "0" + c
            }
            e = c.substring(0,
                c.length - b);
            "" === e && (e = 0);
            return e + "." + c.substring(c.length - b, c.length)
        }
        return String(c)
    };
    d.formatDuration = function (a, b, c, e, h, f) {
        var g = d.intervals, k = f.decimalSeparator;
        if (a >= g[b].contains) {
            var l = a - Math.floor(a / g[b].contains) * g[b].contains;
            "ss" == b ? (l = d.formatNumber(l, f), 1 == l.split(k)[0].length && (l = "0" + l)) : l = d.roundTo(l, f.precision);
            ("mm" == b || "hh" == b) && 10 > l && (l = "0" + l);
            c = l + "" + e[b] + "" + c;
            a = Math.floor(a / g[b].contains);
            b = g[b].nextInterval;
            return d.formatDuration(a, b, c, e, h, f)
        }
        "ss" == b && (a = d.formatNumber(a, f), 1 == a.split(k)[0].length && (a = "0" + a));
        ("mm" == b || "hh" == b) && 10 > a && (a = "0" + a);
        c = a + "" + e[b] + "" + c;
        if (g[h].count > g[b].count) for (a = g[b].count; a < g[h].count; a++) b = g[b].nextInterval, "ss" == b || "mm" == b || "hh" == b ? c = "00" + e[b] + "" + c : "DD" == b && (c = "0" + e[b] + "" + c);
        ":" == c.charAt(c.length - 1) && (c = c.substring(0, c.length - 1));
        return c
    };
    d.formatNumber = function (a, b, c, e, h) {
        a = d.roundTo(a, b.precision);
        isNaN(c) && (c = b.precision);
        var f = b.decimalSeparator;
        b = b.thousandsSeparator;
        var g;
        g = 0 > a ? "-" : "";
        a = Math.abs(a);
        var k = String(a), l = !1;
        -1 != k.indexOf("e") && (l = !0);
        0 <= c && !l && (k = d.toFixed(a, c));
        var m = "";
        if (l) m = k; else {
            var k = k.split("."), l = String(k[0]), n;
            for (n = l.length; 0 <= n; n -= 3) m = n != l.length ? 0 !== n ? l.substring(n - 3, n) + b + m : l.substring(n - 3, n) + m : l.substring(n - 3, n);
            void 0 !== k[1] && (m = m + f + k[1]);
            void 0 !== c && 0 < c && "0" != m && (m = d.addZeroes(m, f, c))
        }
        m = g + m;
        "" === g && !0 === e && 0 !== a && (m = "+" + m);
        !0 === h && (m += "%");
        return m
    };
    d.addZeroes = function (a, b, c) {
        a = a.split(b);
        void 0 === a[1] && 0 < c && (a[1] = "0");
        return a[1].length < c ? (a[1] += "0", d.addZeroes(a[0] + b + a[1], b, c)) : void 0 !== a[1] ? a[0] + b + a[1] : a[0]
    };
    d.scientificToNormal = function (a) {
        var b;
        a = String(a).split("e");
        var c;
        if ("-" == a[1].substr(0, 1)) {
            b = "0.";
            for (c = 0; c < Math.abs(Number(a[1])) - 1; c++) b += "0";
            b += a[0].split(".").join("")
        } else {
            var e = 0;
            b = a[0].split(".");
            b[1] && (e = b[1].length);
            b = a[0].split(".").join("");
            for (c = 0; c < Math.abs(Number(a[1])) - e; c++) b += "0"
        }
        return b
    };
    d.toScientific = function (a, b) {
        if (0 === a) return "0";
        var c = Math.floor(Math.log(Math.abs(a)) * Math.LOG10E), e = String(e).split(".").join(b);
        return String(e) + "e" + c
    };
    d.randomColor = function () {
        return "#" + ("00000" + (16777216 * Math.random() << 0).toString(16)).substr(-6)
    };
    d.hitTest = function (a, b, c) {
        var e = !1, h = a.x, f = a.x + a.width, g = a.y, k = a.y + a.height, l = d.isInRectangle;
        e || (e = l(h, g, b));
        e || (e = l(h, k, b));
        e || (e = l(f, g, b));
        e || (e = l(f, k, b));
        e || !0 === c || (e = d.hitTest(b, a, !0));
        return e
    };
    d.isInRectangle = function (a, b, c) {
        return a >= c.x - 5 && a <= c.x + c.width + 5 && b >= c.y - 5 && b <= c.y + c.height + 5 ? !0 : !1
    };
    d.isPercents = function (a) {
        if (-1 != String(a).indexOf("%")) return !0
    };
    d.formatValue = function (a, b, c, e, h, f, g, k) {
        if (b) {
            void 0 === h && (h = "");
            var l;
            for (l = 0; l < c.length; l++) {
                var m = c[l], n = b[m];
                void 0 !== n && (n = f ? d.addPrefix(n, k, g, e) : d.formatNumber(n, e), a = a.replace(new RegExp("\\[\\[" + h + "" + m + "\\]\\]", "g"), n))
            }
        }
        return a
    };
    d.formatDataContextValue = function (a, b) {
        if (a) {
            var c = a.match(/\[\[.*?\]\]/g), e;
            for (e = 0; e < c.length; e++) {
                var d = c[e], d = d.substr(2, d.length - 4);
                void 0 !== b[d] && (a = a.replace(new RegExp("\\[\\[" + d + "\\]\\]", "g"), b[d]))
            }
        }
        return a
    };
    d.massReplace = function (a, b) {
        for (var c in b) if (b.hasOwnProperty(c)) {
            var e = b[c];
            void 0 === e && (e = "");
            a = a.replace(c, e)
        }
        return a
    };
    d.cleanFromEmpty = function (a) {
        return a.replace(/\[\[[^\]]*\]\]/g, "")
    };
    d.addPrefix = function (a, b, c, e, h) {
        var f = d.formatNumber(a, e), g = "", k, l, m;
        if (0 === a) return "0";
        0 > a && (g = "-");
        a = Math.abs(a);
        if (1 < a) for (k = b.length - 1; -1 < k; k--) {
            if (a >= b[k].number && (l = a / b[k].number, m = Number(e.precision), 1 > m && (m = 1), c = d.roundTo(l, m), m = d.formatNumber(c, {
                precision: -1,
                decimalSeparator: e.decimalSeparator,
                thousandsSeparator: e.thousandsSeparator
            }), !h || l == c)) {
                f = g + "" + m + "" + b[k].prefix;
                break
            }
        } else for (k = 0; k < c.length; k++) if (a <= c[k].number) {
            l = a / c[k].number;
            m = Math.abs(Math.floor(Math.log(l) * Math.LOG10E));
            l = d.roundTo(l, m);
            f = g + "" + l + "" + c[k].prefix;
            break
        }
        return f
    };
    d.remove = function (a) {
        a && a.remove()
    };
    d.getEffect = function (a) {
        ">" == a && (a = "easeOutSine");
        "<" == a && (a = "easeInSine");
        "elastic" == a && (a = "easeOutElastic");
        return a
    };
    d.getObjById = function (a, b) {
        var c, e;
        for (e = 0; e < a.length; e++) {
            var d = a[e];
            if (d.id == b) {
                c = d;
                break
            }
        }
        return c
    };
    d.applyTheme = function (a, b, c) {
        b || (b = d.theme);
        b && b[c] && d.extend(a, b[c])
    };
    d.isString = function (a) {
        return "string" == typeof a ? !0 : !1
    };
    d.extend = function (a, b, c) {
        var e;
        a || (a = {});
        for (e in b) c ? a.hasOwnProperty(e) || (a[e] = b[e]) : a[e] = b[e];
        return a
    };
    d.copyProperties = function (a, b) {
        for (var c in a) a.hasOwnProperty(c) && "events" != c && void 0 !== a[c] && "function" != typeof a[c] && "cname" != c && (b[c] = a[c])
    };
    d.processObject = function (a, b, c, e) {
        if (!1 === a instanceof b && (a = e ? d.extend(new b(c), a) : d.extend(a, new b(c), !0), a.listeners)) for (var h in a.listeners) b = a.listeners[h], a.addListener(b.event, b.method);
        return a
    };
    d.fixNewLines = function (a) {
        var b = RegExp("\\n", "g");
        a && (a = a.replace(b, "<br />"));
        return a
    };
    d.fixBrakes = function (a) {
        if (d.isModern) {
            var b = RegExp("<br>", "g");
            a && (a = a.replace(b, "\n"))
        } else a = d.fixNewLines(a);
        return a
    };
    d.deleteObject = function (a, b) {
        if (a) {
            if (void 0 === b || null === b) b = 20;
            if (0 !== b) if ("[object Array]" === Object.prototype.toString.call(a)) for (var c = 0; c < a.length; c++) d.deleteObject(a[c], b - 1), a[c] = null; else if (a && !a.tagName) try {
                for (c in a) a[c] && ("object" == typeof a[c] && d.deleteObject(a[c], b - 1), "function" != typeof a[c] && (a[c] = null))
            } catch (e) {
            }
        }
    };
    d.bounce = function (a, b, c, e, d) {
        return (b /= d) < 1 / 2.75 ? 7.5625 * e * b * b + c : b < 2 / 2.75 ? e * (7.5625 * (b -= 1.5 / 2.75) * b + .75) + c : b < 2.5 / 2.75 ? e * (7.5625 * (b -= 2.25 / 2.75) * b + .9375) + c : e * (7.5625 * (b -= 2.625 / 2.75) * b + .984375) + c
    };
    d.easeInOutQuad = function (a, b, c, e, d) {
        b /= d / 2;
        if (1 > b) return e / 2 * b * b + c;
        b--;
        return -e / 2 * (b * (b - 2) - 1) + c
    };
    d.easeInSine = function (a, b, c, e, d) {
        return -e * Math.cos(b / d * (Math.PI / 2)) + e + c
    };
    d.easeOutSine = function (a, b, c, e, d) {
        return e * Math.sin(b / d * (Math.PI / 2)) + c
    };
    d.easeOutElastic = function (a, b, c, e, d) {
        a = 1.70158;
        var f = 0, g = e;
        if (0 === b) return c;
        if (1 == (b /= d)) return c + e;
        f || (f = .3 * d);
        g < Math.abs(e) ? (g = e, a = f / 4) : a = f / (2 * Math.PI) * Math.asin(e / g);
        return g * Math.pow(2, -10 * b) * Math.sin(2 * (b * d - a) * Math.PI / f) + e + c
    };
    d.fixStepE = function (a) {
        a = a.toExponential(0).split("e");
        var b = Number(a[1]);
        9 == Number(a[0]) && b++;
        return d.generateNumber(1, b)
    };
    d.generateNumber = function (a, b) {
        var c = "", e;
        e = 0 > b ? Math.abs(b) - 1 : Math.abs(b);
        var d;
        for (d = 0; d < e; d++) c += "0";
        return 0 > b ? Number("0." + c + String(a)) : Number(String(a) + c)
    };
    d.setCN = function (a, b, c, e) {
        if (a.addClassNames && b && (b = b.node) && c) {
            var d = b.getAttribute("class");
            a = a.classNamePrefix + "-";
            e && (a = "");
            d ? b.setAttribute("class", d + " " + a + c) : b.setAttribute("class", a + c)
        }
    };
    d.parseDefs = function (a, b) {
        for (var c in a) {
            var e = typeof a[c];
            if (0 < a[c].length && "object" == e) for (var h = 0; h < a[c].length; h++) e = document.createElementNS(d.SVG_NS, c), b.appendChild(e), d.parseDefs(a[c][h], e); else "object" == e ? (e = document.createElementNS(d.SVG_NS, c), b.appendChild(e), d.parseDefs(a[c], e)) : b.setAttribute(c, a[c])
        }
    }
})();
(function () {
    var d = window.AmCharts;
    d.AxisBase = d.Class({
        construct: function (a) {
            this.createEvents("clickItem", "rollOverItem", "rollOutItem");
            this.titleDY = this.y = this.x = this.dy = this.dx = 0;
            this.axisThickness = 1;
            this.axisColor = "#000000";
            this.axisAlpha = 1;
            this.gridCount = this.tickLength = 5;
            this.gridAlpha = .15;
            this.gridThickness = 1;
            this.gridColor = "#000000";
            this.dashLength = 0;
            this.labelFrequency = 1;
            this.showLastLabel = this.showFirstLabel = !0;
            this.fillColor = "#FFFFFF";
            this.fillAlpha = 0;
            this.labelsEnabled = !0;
            this.labelRotation = 0;
            this.autoGridCount = !0;
            this.offset = 0;
            this.guides = [];
            this.visible = !0;
            this.counter = 0;
            this.guides = [];
            this.ignoreAxisWidth = this.inside = !1;
            this.minHorizontalGap = 75;
            this.minVerticalGap = 35;
            this.titleBold = !0;
            this.minorGridEnabled = !1;
            this.minorGridAlpha = .07;
            this.autoWrap = !1;
            this.titleAlign = "middle";
            this.labelOffset = 0;
            this.bcn = "axis-";
            this.centerLabels = !1;
            this.firstDayOfWeek = 1;
            this.centerLabelOnFullPeriod = this.markPeriodChange = this.boldPeriodBeginning = !0;
            this.periods = [{period: "ss", count: 1}, {period: "ss", count: 5}, {
                period: "ss",
                count: 10
            }, {period: "ss", count: 30}, {period: "mm", count: 1}, {period: "mm", count: 5}, {
                period: "mm",
                count: 10
            }, {period: "mm", count: 30}, {period: "hh", count: 1}, {period: "hh", count: 3}, {
                period: "hh",
                count: 6
            }, {period: "hh", count: 12}, {period: "DD", count: 1}, {period: "DD", count: 2}, {
                period: "DD",
                count: 3
            }, {period: "DD", count: 4}, {period: "DD", count: 5}, {period: "WW", count: 1}, {
                period: "MM",
                count: 1
            }, {period: "MM", count: 2}, {period: "MM", count: 3}, {period: "MM", count: 6}, {
                period: "YYYY",
                count: 1
            }, {period: "YYYY", count: 2}, {period: "YYYY", count: 5}, {period: "YYYY", count: 10}, {
                period: "YYYY",
                count: 50
            }, {period: "YYYY", count: 100}];
            this.dateFormats = [{period: "fff", format: "JJ:NN:SS"}, {period: "ss", format: "JJ:NN:SS"}, {
                period: "mm",
                format: "JJ:NN"
            }, {period: "hh", format: "JJ:NN"}, {period: "DD", format: "MMM DD"}, {
                period: "WW",
                format: "MMM DD"
            }, {period: "MM", format: "MMM"}, {period: "YYYY", format: "YYYY"}];
            this.nextPeriod = {fff: "ss", ss: "mm", mm: "hh", hh: "DD", DD: "MM", MM: "YYYY"};
            d.applyTheme(this, a, "AxisBase")
        }, zoom: function (a, b) {
            this.start = a;
            this.end = b;
            this.dataChanged = !0;
            this.draw()
        }, fixAxisPosition: function () {
            var a = this.position;
            "H" == this.orientation ? ("left" == a && (a = "bottom"), "right" == a && (a = "top")) : ("bottom" == a && (a = "left"), "top" == a && (a = "right"));
            this.position = a
        }, init: function () {
            this.createBalloon()
        }, draw: function () {
            var a = this.chart;
            this.prevBY = this.prevBX = NaN;
            this.allLabels = [];
            this.counter = 0;
            this.destroy();
            this.fixAxisPosition();
            this.setBalloonBounds();
            this.labels = [];
            var b = a.container, c = b.set();
            a.gridSet.push(c);
            this.set = c;
            b = b.set();
            a.axesLabelsSet.push(b);
            this.labelsSet = b;
            this.axisLine = new this.axisRenderer(this);
            this.autoGridCount ? ("V" == this.orientation ? (a = this.height / this.minVerticalGap, 3 > a && (a = 3)) : a = this.width / this.minHorizontalGap, this.gridCountR = Math.max(a, 1)) : this.gridCountR = this.gridCount;
            this.axisWidth = this.axisLine.axisWidth;
            this.addTitle()
        }, setOrientation: function (a) {
            this.orientation = a ? "H" : "V"
        }, addTitle: function () {
            var a = this.title;
            this.titleLabel = null;
            if (a) {
                var b = this.chart, c = this.titleColor;
                void 0 === c && (c = b.color);
                var e = this.titleFontSize;
                isNaN(e) && (e = b.fontSize + 1);
                a = d.text(b.container, a, c, b.fontFamily, e, this.titleAlign, this.titleBold);
                d.setCN(b, a, this.bcn + "title");
                this.titleLabel = a
            }
        }, positionTitle: function () {
            var a = this.titleLabel;
            if (a) {
                var b, c, e = this.labelsSet, h = {};
                0 < e.length() ? h = e.getBBox() : (h.x = 0, h.y = 0, h.width = this.width, h.height = this.height, d.VML && (h.y += this.y, h.x += this.x));
                e.push(a);
                var e = h.x, f = h.y;
                d.VML && (this.rotate ? e -= this.x : f -= this.y);
                var g = h.width, h = h.height, k = this.width, l = this.height, m = 0, n = a.getBBox().height / 2,
                    q = this.inside, p = this.titleAlign;
                switch (this.position) {
                    case"top":
                        b = "left" == p ? -1 : "right" == p ? k : k / 2;
                        c = f - 10 - n;
                        break;
                    case"bottom":
                        b = "left" == p ? -1 : "right" == p ? k : k / 2;
                        c = f + h + 10 + n;
                        break;
                    case"left":
                        b = e - 10 - n;
                        q && (b -= 5);
                        m = -90;
                        c = ("left" == p ? l + 1 : "right" == p ? -1 : l / 2) + this.titleDY;
                        break;
                    case"right":
                        b = e + g + 10 + n, q && (b += 7), c = ("left" == p ? l + 2 : "right" == p ? -2 : l / 2) + this.titleDY, m = -90
                }
                this.marginsChanged ? (a.translate(b, c), this.tx = b, this.ty = c) : a.translate(this.tx, this.ty);
                this.marginsChanged = !1;
                isNaN(this.titleRotation) || (m = this.titleRotation);
                0 !== m && a.rotate(m)
            }
        }, pushAxisItem: function (a, b) {
            var c = this, e = a.graphics();
            0 < e.length() && (b ? c.labelsSet.push(e) : c.set.push(e));
            if (e = a.getLabel()) this.labelsSet.push(e), e.click(function (b) {
                c.handleMouse(b, a, "clickItem")
            }).mouseover(function (b) {
                c.handleMouse(b, a, "rollOverItem")
            }).mouseout(function (b) {
                c.handleMouse(b, a, "rollOutItem")
            })
        }, handleMouse: function (a, b, c) {
            this.fire({
                type: c,
                value: b.value,
                serialDataItem: b.serialDataItem,
                axis: this,
                target: b.label,
                chart: this.chart,
                event: a
            })
        }, addGuide: function (a) {
            for (var b = this.guides, c = !1, e = b.length, h = 0; h < b.length; h++) b[h] == a && (c = !0, e = h);
            a = d.processObject(a, d.Guide, this.theme);
            a.id || (a.id = "guideAuto" + e + "_" + (new Date).getTime());
            c || b.push(a)
        }, removeGuide: function (a) {
            var b = this.guides, c;
            for (c = 0; c < b.length; c++) b[c] == a && b.splice(c, 1)
        }, handleGuideOver: function (a) {
            clearTimeout(this.chart.hoverInt);
            var b = a.graphics.getBBox(), c = this.x + b.x + b.width / 2, b = this.y + b.y + b.height / 2,
                e = a.fillColor;
            void 0 === e && (e = a.lineColor);
            this.chart.showBalloon(a.balloonText, e, !0, c, b)
        }, handleGuideOut: function () {
            this.chart.hideBalloon()
        }, addEventListeners: function (a, b) {
            var c = this;
            a.mouseover(function () {
                c.handleGuideOver(b)
            });
            a.touchstart(function () {
                c.handleGuideOver(b)
            });
            a.mouseout(function () {
                c.handleGuideOut(b)
            })
        }, getBBox: function () {
            var a;
            this.labelsSet && (a = this.labelsSet.getBBox());
            a ? d.VML || (a = {x: a.x + this.x, y: a.y + this.y, width: a.width, height: a.height}) : a = {
                x: 0,
                y: 0,
                width: 0,
                height: 0
            };
            return a
        }, destroy: function () {
            d.remove(this.set);
            d.remove(this.labelsSet);
            var a = this.axisLine;
            a && d.remove(a.axisSet);
            d.remove(this.grid0)
        }, chooseMinorFrequency: function (a) {
            for (var b = 10; 0 < b; b--) if (a / b == Math.round(a / b)) return a / b
        }, parseDatesDraw: function () {
            var a, b = this.chart, c = this.showFirstLabel, e = this.showLastLabel, h, f = "",
                g = d.extractPeriod(this.minPeriod), k = d.getPeriodDuration(g.period, g.count), l, m, n, q, p,
                t = this.firstDayOfWeek, r = this.boldPeriodBeginning;
            a = this.minorGridEnabled;
            var u, w = this.gridAlpha, y, x = this.choosePeriod(0), A = x.period, x = x.count,
                z = d.getPeriodDuration(A, x);
            z < k && (A = g.period, x = g.count, z = k);
            g = A;
            "WW" == g && (g = "DD");
            this.stepWidth = this.getStepWidth(this.timeDifference);
            var B = Math.ceil(this.timeDifference / z) + 5,
                C = l = d.resetDateToMin(new Date(this.startTime - z), A, x, t).getTime();
            if (g == A && 1 == x && this.centerLabelOnFullPeriod || this.autoWrap || this.centerLabels) n = z * this.stepWidth, this.autoWrap && !this.centerLabels && (n = -n);
            this.cellWidth = k * this.stepWidth;
            q = Math.round(l / z);
            k = -1;
            q / 2 == Math.round(q / 2) && (k = -2, l -= z);
            q = this.firstTime;
            var D = 0, L = 0;
            a && 1 < x && (u = this.chooseMinorFrequency(x), y = d.getPeriodDuration(A, u), "DD" == A && (y += d.getPeriodDuration("hh")));
            if (0 < this.gridCountR) for (B - 5 - k > this.autoRotateCount && !isNaN(this.autoRotateAngle) && (this.labelRotationR = this.autoRotateAngle), a = k; a <= B; a++) {
                p = q + z * (a + Math.floor((C - q) / z)) - D;
                "DD" == A && (p += 36E5);
                p = d.resetDateToMin(new Date(p), A, x, t).getTime();
                "MM" == A && (h = (p - l) / z, 1.5 <= (p - l) / z && (p = p - (h - 1) * z + d.getPeriodDuration("DD", 3), p = d.resetDateToMin(new Date(p), A, 1).getTime(), D += z));
                h = (p - this.startTime) * this.stepWidth;
                if ("radar" == b.type) {
                    if (h = this.axisWidth - h, 0 > h || h > this.axisWidth) continue
                } else this.rotate ? "date" == this.type && "middle" == this.gridPosition &&
                    (L = -z * this.stepWidth / 2) : "date" == this.type && (h = this.axisWidth - h);
                f = !1;
                this.nextPeriod[g] && (f = this.checkPeriodChange(this.nextPeriod[g], 1, p, l, g));
                l = !1;
                f && this.markPeriodChange ? (f = this.dateFormatsObject[this.nextPeriod[g]], this.twoLineMode && (f = this.dateFormatsObject[g] + "\n" + f, f = d.fixBrakes(f)), l = !0) : f = this.dateFormatsObject[g];
                r || (l = !1);
                this.currentDateFormat = f;
                f = d.formatDate(new Date(p), f, b);
                if (a == k && !c || a == B && !e) f = " ";
                this.labelFunction && (f = this.labelFunction(f, new Date(p), this, A, x, m).toString());
                this.boldLabels && (l = !0);
                m = new this.axisItemRenderer(this, h, f, !1, n, L, !1, l);
                this.pushAxisItem(m);
                m = l = p;
                if (!isNaN(u)) for (h = 1; h < x; h += u) this.gridAlpha = this.minorGridAlpha, f = p + y * h, f = d.resetDateToMin(new Date(f), A, u, t).getTime(), f = new this.axisItemRenderer(this, (f - this.startTime) * this.stepWidth, void 0, void 0, void 0, void 0, void 0, void 0, void 0, !0), this.pushAxisItem(f);
                this.gridAlpha = w
            }
        }, choosePeriod: function (a) {
            var b = d.getPeriodDuration(this.periods[a].period, this.periods[a].count), c = this.periods;
            return this.timeDifference < b && 0 < a ? c[a - 1] : Math.ceil(this.timeDifference / b) <= this.gridCountR ? c[a] : a + 1 < c.length ? this.choosePeriod(a + 1) : c[a]
        }, getStepWidth: function (a) {
            var b;
            this.startOnAxis ? (b = this.axisWidth / (a - 1), 1 == a && (b = this.axisWidth)) : b = this.axisWidth / a;
            return b
        }, timeZoom: function (a, b) {
            this.startTime = a;
            this.endTime = b
        }, minDuration: function () {
            var a = d.extractPeriod(this.minPeriod);
            return d.getPeriodDuration(a.period, a.count)
        }, checkPeriodChange: function (a, b, c, e, h) {
            c = new Date(c);
            var f = new Date(e), g = this.firstDayOfWeek;
            e = b;
            "DD" == a && (b = 1);
            c = d.resetDateToMin(c, a, b, g).getTime();
            b = d.resetDateToMin(f, a, b, g).getTime();
            return "DD" == a && "hh" != h && c - b < d.getPeriodDuration(a, e) ? !1 : c != b ? !0 : !1
        }, generateDFObject: function () {
            this.dateFormatsObject = {};
            var a;
            for (a = 0; a < this.dateFormats.length; a++) {
                var b = this.dateFormats[a];
                this.dateFormatsObject[b.period] = b.format
            }
        }, hideBalloon: function () {
            this.balloon && this.balloon.hide && this.balloon.hide();
            this.prevBY = this.prevBX = NaN
        }, formatBalloonText: function (a) {
            return a
        }, showBalloon: function (a, b, c, e) {
            var d = this.offset;
            switch (this.position) {
                case"bottom":
                    b = this.height + d;
                    break;
                case"top":
                    b = -d;
                    break;
                case"left":
                    a = -d;
                    break;
                case"right":
                    a = this.width + d
            }
            c || (c = this.currentDateFormat);
            if ("V" == this.orientation) {
                if (0 > b || b > this.height) return;
                if (isNaN(b)) {
                    this.hideBalloon();
                    return
                }
                b = this.adjustBalloonCoordinate(b, e);
                e = this.coordinateToValue(b)
            } else {
                if (0 > a || a > this.width) return;
                if (isNaN(a)) {
                    this.hideBalloon();
                    return
                }
                a = this.adjustBalloonCoordinate(a, e);
                e = this.coordinateToValue(a)
            }
            var f;
            if (d = this.chart.chartCursor) f = d.index;
            if (this.balloon && void 0 !== e && this.balloon.enabled) {
                if (this.balloonTextFunction) {
                    if ("date" == this.type || !0 === this.parseDates) e = new Date(e);
                    e = this.balloonTextFunction(e)
                } else this.balloonText ? e = this.formatBalloonText(this.balloonText, f, c) : isNaN(e) || (e = this.formatValue(e, c));
                if (a != this.prevBX || b != this.prevBY) this.balloon.setPosition(a, b), this.prevBX = a, this.prevBY = b, e && this.balloon.showBalloon(e)
            }
        }, adjustBalloonCoordinate: function (a) {
            return a
        }, createBalloon: function () {
            var a = this.chart, b = a.chartCursor;
            b && (b = b.cursorPosition, "mouse" != b && (this.stickBalloonToCategory = !0), "start" == b && (this.stickBalloonToStart = !0), "ValueAxis" == this.cname && (this.stickBalloonToCategory = !1));
            this.balloon && (this.balloon.destroy && this.balloon.destroy(), d.extend(this.balloon, a.balloon, !0))
        }, setBalloonBounds: function () {
            var a = this.balloon;
            if (a) {
                var b = this.chart;
                a.cornerRadius = 0;
                a.shadowAlpha = 0;
                a.borderThickness = 1;
                a.borderAlpha = 1;
                a.adjustBorderColor = !1;
                a.showBullet = !1;
                this.balloon = a;
                a.chart = b;
                a.mainSet = b.plotBalloonsSet;
                a.pointerWidth = this.tickLength;
                if (this.parseDates || "date" == this.type) a.pointerWidth = 0;
                b = "V";
                "V" == this.orientation && (b = "H");
                this.stickBalloonToCategory || (a.animationDuration = 0);
                var c, e, d, f, g = this.inside, k = this.width, l = this.height;
                switch (this.position) {
                    case"bottom":
                        c = 0;
                        e = k;
                        g ? (d = 0, f = l) : (d = l, f = l + 1E3);
                        break;
                    case"top":
                        c = 0;
                        e = k;
                        g ? (d = 0, f = l) : (d = -1E3, f = 0);
                        break;
                    case"left":
                        d = 0;
                        f = l;
                        g ? (c = 0, e = k) : (c = -1E3, e = 0);
                        break;
                    case"right":
                        d = 0, f = l, g ? (c = 0, e = k) : (c = k, e = k + 1E3)
                }
                a.drop || (a.pointerOrientation = b);
                a.setBounds(c, d, e, f)
            }
        }
    })
})();
(function () {
    var d = window.AmCharts;
    d.ValueAxis = d.Class({
        inherits: d.AxisBase, construct: function (a) {
            this.cname = "ValueAxis";
            this.createEvents("axisChanged", "logarithmicAxisFailed", "axisZoomed", "axisIntZoomed");
            d.ValueAxis.base.construct.call(this, a);
            this.dataChanged = !0;
            this.stackType = "none";
            this.position = "left";
            this.unitPosition = "right";
            this.includeAllValues = this.recalculateToPercents = this.includeHidden = this.includeGuidesInMinMax = this.integersOnly = !1;
            this.durationUnits = {DD: "d. ", hh: ":", mm: ":", ss: ""};
            this.scrollbar = !1;
            this.baseValue = 0;
            this.radarCategoriesEnabled = !0;
            this.gridType = "polygons";
            this.useScientificNotation = !1;
            this.axisTitleOffset = 10;
            this.pointPosition = "axis";
            this.minMaxMultiplier = 1;
            this.logGridLimit = 2;
            this.totalTextOffset = this.treatZeroAs = 0;
            this.minPeriod = "ss";
            this.relativeStart = 0;
            this.relativeEnd = 1;
            d.applyTheme(this, a, this.cname)
        }, updateData: function () {
            0 >= this.gridCountR && (this.gridCountR = 1);
            this.totals = [];
            this.data = this.chart.chartData;
            var a = this.chart;
            "xy" != a.type && (this.stackGraphs("smoothedLine"), this.stackGraphs("line"), this.stackGraphs("column"), this.stackGraphs("step"));
            this.recalculateToPercents && this.recalculate();
            this.synchronizationMultiplier && this.synchronizeWith ? (d.isString(this.synchronizeWith) && (this.synchronizeWith = a.getValueAxisById(this.synchronizeWith)), this.synchronizeWith && (this.synchronizeWithAxis(this.synchronizeWith), this.foundGraphs = !0)) : (this.foundGraphs = !1, this.getMinMax(), 0 === this.start && this.end == this.data.length - 1 && isNaN(this.minZoom) && isNaN(this.maxZoom) && (this.fullMin = this.min, this.fullMax = this.max, "date" != this.type && (isNaN(this.minimum) || (this.fullMin = this.minimum), isNaN(this.maximum) || (this.fullMax = this.maximum)), this.logarithmic && (this.fullMin = this.logMin, 0 === this.fullMin && (this.fullMin = this.treatZeroAs)), "date" == this.type && (this.minimumDate || (this.fullMin = this.minRR), this.maximumDate || (this.fullMax = this.maxRR))))
        }, draw: function () {
            d.ValueAxis.base.draw.call(this);
            var a = this.chart, b = this.set;
            this.labelRotationR = this.labelRotation;
            d.setCN(a, this.set, "value-axis value-axis-" +
                this.id);
            d.setCN(a, this.labelsSet, "value-axis value-axis-" + this.id);
            d.setCN(a, this.axisLine.axisSet, "value-axis value-axis-" + this.id);
            var c = this.type;
            "duration" == c && (this.duration = "ss");
            !0 === this.dataChanged && (this.updateData(), this.dataChanged = !1);
            "date" == c && (this.logarithmic = !1, this.min = this.minRR, this.max = this.maxRR, this.reversed = !1, this.getDateMinMax());
            if (this.logarithmic) {
                var e = this.treatZeroAs, h = this.getExtremes(0, this.data.length - 1).min;
                this.logMin = h;
                this.minReal < h && (this.minReal = h);
                isNaN(this.minReal) && (this.minReal = h);
                0 < e && 0 === h && (this.minReal = h = e);
                if (0 >= h || 0 >= this.minimum) {
                    this.fire({type: "logarithmicAxisFailed", chart: a});
                    return
                }
            }
            this.grid0 = null;
            var f, g, k = a.dx, l = a.dy, e = !1, h = this.logarithmic;
            if (isNaN(this.min) || isNaN(this.max) || !this.foundGraphs || Infinity == this.min || -Infinity == this.max) e = !0; else {
                "date" == this.type && this.min == this.max && (this.max += this.minDuration(), this.min -= this.minDuration());
                var m = this.labelFrequency, n = this.showFirstLabel, q = this.showLastLabel, p = 1, t = 0;
                this.minCalc = this.min;
                this.maxCalc = this.max;
                this.strictMinMax && (isNaN(this.minimum) || (this.min = this.minimum), isNaN(this.maximum) || (this.max = this.maximum));
                isNaN(this.minZoom) || (this.minReal = this.min = this.minZoom);
                isNaN(this.maxZoom) || (this.max = this.maxZoom);
                if (this.logarithmic) {
                    g = Math.log(this.fullMax) * Math.LOG10E - Math.log(this.fullMin) * Math.LOG10E;
                    var r = Math.log(this.max) / Math.LN10 - Math.log(this.fullMin) * Math.LOG10E;
                    this.relativeStart = (Math.log(this.minReal) / Math.LN10 - Math.log(this.fullMin) * Math.LOG10E) / g;
                    this.relativeEnd = r / g
                } else this.relativeStart =
                    d.fitToBounds((this.min - this.fullMin) / (this.fullMax - this.fullMin), 0, 1), this.relativeEnd = d.fitToBounds((this.max - this.fullMin) / (this.fullMax - this.fullMin), 0, 1);
                var r = Math.round((this.maxCalc - this.minCalc) / this.step) + 1, u;
                !0 === h ? (u = Math.log(this.max) * Math.LOG10E - Math.log(this.minReal) * Math.LOG10E, this.stepWidth = this.axisWidth / u, u > this.logGridLimit && (r = Math.ceil(Math.log(this.max) * Math.LOG10E) + 1, t = Math.round(Math.log(this.minReal) * Math.LOG10E), r > this.gridCountR && (p = Math.ceil(r / this.gridCountR)))) : this.stepWidth =
                    this.axisWidth / (this.max - this.min);
                var w = 0;
                1 > this.step && -1 < this.step && (w = d.getDecimals(this.step));
                this.integersOnly && (w = 0);
                w > this.maxDecCount && (w = this.maxDecCount);
                var y = this.precision;
                isNaN(y) || (w = y);
                isNaN(this.maxZoom) && (this.max = d.roundTo(this.max, this.maxDecCount), this.min = d.roundTo(this.min, this.maxDecCount));
                g = {};
                g.precision = w;
                g.decimalSeparator = a.nf.decimalSeparator;
                g.thousandsSeparator = a.nf.thousandsSeparator;
                this.numberFormatter = g;
                this.exponential = !1;
                for (g = t; g < r; g += p) {
                    var x = d.roundTo(this.step * g + this.min, w);
                    -1 != String(x).indexOf("e") && (this.exponential = !0)
                }
                this.duration && (this.maxInterval = d.getMaxInterval(this.max, this.duration));
                var w = this.step, A, x = this.minorGridAlpha;
                this.minorGridEnabled && (A = this.getMinorGridStep(w, this.stepWidth * w));
                if (this.autoGridCount || 0 !== this.gridCount) if ("date" == c) this.generateDFObject(), this.timeDifference = this.max - this.min, this.maxTime = this.lastTime = this.max, this.startTime = this.firstTime = this.min, this.parseDatesDraw(); else for (r >= this.autoRotateCount && !isNaN(this.autoRotateAngle) && (this.labelRotationR = this.autoRotateAngle), h && r++, g = t; g < r; g += p) if (c = w * g + this.minCalc, c = d.roundTo(c, this.maxDecCount + 1), !this.integersOnly || Math.round(c) == c) if (isNaN(y) || Number(d.toFixed(c, y)) == c) {
                    !0 === h && (0 === c && (c = this.minReal), u > this.logGridLimit && (c = Math.pow(10, g)));
                    t = this.formatValue(c, !1, g);
                    Math.round(g / m) != g / m && (t = void 0);
                    if (0 === g && !n || g == r - 1 && !q) t = " ";
                    f = this.getCoordinate(c);
                    var z;
                    this.rotate && this.autoWrap && (z = this.stepWidth * w - 10);
                    t = new this.axisItemRenderer(this, f, t, void 0, z, void 0, void 0, this.boldLabels);
                    this.pushAxisItem(t);
                    if (c == this.baseValue && "radar" != a.type) {
                        var B, C, t = this.width, D = this.height;
                        "H" == this.orientation ? 0 <= f && f <= t + 1 && (B = [f, f, f + k], C = [D, 0, l]) : 0 <= f && f <= D + 1 && (B = [0, t, t + k], C = [f, f, f + l]);
                        B && (t = d.fitToBounds(2 * this.gridAlpha, 0, 1), isNaN(this.zeroGridAlpha) || (t = this.zeroGridAlpha), t = d.line(a.container, B, C, this.gridColor, t, 1, this.dashLength), t.translate(this.x, this.y), this.grid0 = t, a.axesSet.push(t), t.toBack(), d.setCN(a, t, this.bcn + "zero-grid-" + this.id), d.setCN(a, t, this.bcn + "zero-grid"))
                    }
                    if (!isNaN(A) && 0 < x && g < r - 1) {
                        t = w / A;
                        h && (A = w * (g + p) + this.minCalc, A = d.roundTo(A, this.maxDecCount + 1), u > this.logGridLimit && (A = Math.pow(10, g + p)), t = 10, A = (A - c) / t);
                        f = this.gridAlpha;
                        this.gridAlpha = this.minorGridAlpha;
                        for (D = 1; D < t; D++) {
                            var L = this.getCoordinate(c + A * D),
                                L = new this.axisItemRenderer(this, L, "", !1, 0, 0, !1, !1, 0, !0);
                            this.pushAxisItem(L)
                        }
                        this.gridAlpha = f
                    }
                }
                u = this.guides;
                z = u.length;
                if (0 < z) {
                    B = this.fillAlpha;
                    for (g = this.fillAlpha = 0; g < z; g++) C = u[g], k = NaN, A = C.above, isNaN(C.toValue) || (k = this.getCoordinate(C.toValue), t = new this.axisItemRenderer(this,
                        k, "", !0, NaN, NaN, C), this.pushAxisItem(t, A)), l = NaN, isNaN(C.value) || (l = this.getCoordinate(C.value), t = new this.axisItemRenderer(this, l, C.label, !0, NaN, (k - l) / 2, C), this.pushAxisItem(t, A)), isNaN(k) && (l -= 3, k = l + 3), isNaN(k - l) || (k = new this.guideFillRenderer(this, l, k, C), this.pushAxisItem(k, A), A = k.graphics(), C.graphics = A, C.balloonText && this.addEventListeners(A, C));
                    this.fillAlpha = B
                }
                g = this.baseValue;
                this.min > this.baseValue && this.max > this.baseValue && (g = this.min);
                this.min < this.baseValue && this.max < this.baseValue && (g =
                    this.max);
                h && g < this.minReal && (g = this.minReal);
                this.baseCoord = this.getCoordinate(g, !0);
                g = {type: "axisChanged", target: this, chart: a};
                g.min = h ? this.minReal : this.min;
                g.max = this.max;
                this.fire(g);
                this.axisCreated = !0
            }
            h = this.axisLine.set;
            g = this.labelsSet;
            b.translate(this.x, this.y);
            g.translate(this.x, this.y);
            this.positionTitle();
            "radar" != a.type && h.toFront();
            !this.visible || e ? (b.hide(), h.hide(), g.hide()) : (b.show(), h.show(), g.show());
            this.axisY = this.y;
            this.axisX = this.x
        }, getDateMinMax: function () {
            this.minimumDate && (this.minimumDate instanceof Date || (this.minimumDate = d.getDate(this.minimumDate, this.chart.dataDateFormat, "fff")), this.min = this.minimumDate.getTime());
            this.maximumDate && (this.maximumDate instanceof Date || (this.maximumDate = d.getDate(this.maximumDate, this.chart.dataDateFormat, "fff")), this.max = this.maximumDate.getTime())
        }, formatValue: function (a, b, c) {
            var e = this.exponential, h = this.logarithmic, f = this.numberFormatter, g = this.chart;
            if (f) return !0 === this.logarithmic && (e = -1 != String(a).indexOf("e") ? !0 : !1), this.useScientificNotation && (e = !0), this.usePrefixes && (e = !1), e ? (c = -1 == String(a).indexOf("e") ? a.toExponential(15) : String(a), e = c.split("e"), c = Number(e[0]), e = Number(e[1]), c = d.roundTo(c, 14), 10 == c && (c = 1, e += 1), c = c + "e" + e, 0 === a && (c = "0"), 1 == a && (c = "1")) : (h && (e = String(a).split("."), e[1] ? (f.precision = e[1].length, 0 > c && (f.precision = Math.abs(c)), b && 1 < a && (f.precision = 0)) : f.precision = -1), c = this.usePrefixes ? d.addPrefix(a, g.prefixesOfBigNumbers, g.prefixesOfSmallNumbers, f, !b) : d.formatNumber(a, f, f.precision)), this.duration && (b && (f.precision = 0), c = d.formatDuration(a, this.duration, "", this.durationUnits, this.maxInterval, f)), "date" == this.type && (c = d.formatDate(new Date(a), this.currentDateFormat, g)), this.recalculateToPercents ? c += "%" : (b = this.unit) && (c = "left" == this.unitPosition ? b + c : c + b), this.labelFunction && (c = "date" == this.type ? this.labelFunction(c, new Date(a), this).toString() : this.labelFunction(a, c, this).toString()), c
        }, getMinorGridStep: function (a, b) {
            var c = [5, 4, 2];
            60 > b && c.shift();
            for (var e = Math.floor(Math.log(Math.abs(a)) * Math.LOG10E), d = 0; d < c.length; d++) {
                var f = a / c[d], g = Math.floor(Math.log(Math.abs(f)) * Math.LOG10E);
                if (!(1 < Math.abs(e - g))) if (1 > a) {
                    if (g = Math.pow(10, -g) * f, g == Math.round(g)) return f
                } else if (f == Math.round(f)) return f
            }
        }, stackGraphs: function (a) {
            var b = this.stackType;
            "stacked" == b && (b = "regular");
            "line" == b && (b = "none");
            "100% stacked" == b && (b = "100%");
            this.stackType = b;
            var c = [], e = [], h = [], f = [], g, k = this.chart.graphs, l, m, n, q, p, t = this.baseValue, r = !1;
            if ("line" == a || "step" == a || "smoothedLine" == a) r = !0;
            if (r && ("regular" == b || "100%" == b)) for (q = 0; q < k.length; q++) n = k[q], n.stackGraph = null, n.hidden || (m = n.type, n.chart == this.chart && n.valueAxis == this && a == m && n.stackable && (l && (n.stackGraph = l), l = n));
            n = this.start - 10;
            l = this.end + 10;
            q = this.data.length - 1;
            n = d.fitToBounds(n, 0, q);
            l = d.fitToBounds(l, 0, q);
            for (p = n; p <= l; p++) {
                var u = 0;
                for (q = 0; q < k.length; q++) if (n = k[q], n.hidden) n.newStack && (h[p] = NaN, e[p] = NaN); else if (m = n.type, n.chart == this.chart && n.valueAxis == this && a == m && n.stackable) if (m = this.data[p].axes[this.id].graphs[n.id], g = m.values.value, isNaN(g)) n.newStack && (h[p] = NaN, e[p] = NaN); else {
                    var w = d.getDecimals(g);
                    u < w && (u = w);
                    isNaN(f[p]) ? f[p] = Math.abs(g) : f[p] += Math.abs(g);
                    f[p] = d.roundTo(f[p], u);
                    w = n.fillToGraph;
                    r && w && (w = this.data[p].axes[this.id].graphs[w.id]) && (m.values.open = w.values.value);
                    "regular" == b && (r && (isNaN(c[p]) ? (c[p] = g, m.values.close = g, m.values.open = this.baseValue) : (isNaN(g) ? m.values.close = c[p] : m.values.close = g + c[p], m.values.open = c[p], c[p] = m.values.close)), "column" == a && (n.newStack && (h[p] = NaN, e[p] = NaN), m.values.close = g, 0 > g ? (m.values.close = g, isNaN(e[p]) ? m.values.open = t : (m.values.close += e[p], m.values.open = e[p]), e[p] = m.values.close) : (m.values.close = g, isNaN(h[p]) ? m.values.open = t : (m.values.close += h[p], m.values.open = h[p]), h[p] = m.values.close)))
                }
            }
            for (p = this.start; p <= this.end; p++) for (q = 0; q < k.length; q++) (n = k[q], n.hidden) ? n.newStack && (h[p] = NaN, e[p] = NaN) : (m = n.type, n.chart == this.chart && n.valueAxis == this && a == m && n.stackable && (m = this.data[p].axes[this.id].graphs[n.id], g = m.values.value, isNaN(g) || (c = g / f[p] * 100, m.values.percents = c, m.values.total = f[p], n.newStack && (h[p] = NaN, e[p] = NaN), "100%" == b && (isNaN(e[p]) && (e[p] = 0), isNaN(h[p]) && (h[p] = 0), 0 > c ? (m.values.close = d.fitToBounds(c + e[p], -100, 100), m.values.open = e[p], e[p] = m.values.close) : (m.values.close = d.fitToBounds(c + h[p], -100, 100), m.values.open = h[p], h[p] = m.values.close)))))
        }, recalculate: function () {
            var a = this.chart, b = a.graphs, c;
            for (c = 0; c < b.length; c++) {
                var e = b[c];
                if (e.valueAxis == this) {
                    var h = "value";
                    if ("candlestick" == e.type || "ohlc" == e.type) h = "open";
                    var f, g, k = this.end + 2, k = d.fitToBounds(this.end + 1, 0, this.data.length - 1),
                        l = this.start;
                    0 < l && l--;
                    var m;
                    g = this.start;
                    e.compareFromStart && (g = 0);
                    if (!isNaN(a.startTime) && (m = a.categoryAxis)) {
                        var n = m.minDuration(), n = new Date(a.startTime + n / 2),
                            q = d.resetDateToMin(new Date(a.startTime), m.minPeriod).getTime();
                        d.resetDateToMin(new Date(n), m.minPeriod).getTime() > q && g++
                    }
                    if (m = a.recalculateFromDate) m = d.getDate(m, a.dataDateFormat, "fff"), g = a.getClosestIndex(a.chartData, "time", m.getTime(), !0, 0, a.chartData.length), k = a.chartData.length - 1;
                    for (m = g; m <= k && (g = this.data[m].axes[this.id].graphs[e.id], f = g.values[h], e.recalculateValue && (f = g.dataContext[e.valueField +
                    e.recalculateValue]), isNaN(f)); m++) ;
                    this.recBaseValue = f;
                    for (h = l; h <= k; h++) {
                        g = this.data[h].axes[this.id].graphs[e.id];
                        g.percents = {};
                        var l = g.values, p;
                        for (p in l) g.percents[p] = "percents" != p ? l[p] / f * 100 - 100 : l[p]
                    }
                }
            }
        }, getMinMax: function () {
            var a = !1, b = this.chart, c = b.graphs, e;
            for (e = 0; e < c.length; e++) {
                var h = c[e].type;
                ("line" == h || "step" == h || "smoothedLine" == h) && this.expandMinMax && (a = !0)
            }
            a && (0 < this.start && this.start--, this.end < this.data.length - 1 && this.end++);
            "serial" == b.type && (!0 !== b.categoryAxis.parseDates || a || this.end < this.data.length - 1 && this.end++);
            this.includeAllValues && (this.start = 0, this.end = this.data.length - 1);
            a = this.minMaxMultiplier;
            b = this.getExtremes(this.start, this.end);
            this.min = b.min;
            this.max = b.max;
            this.minRR = this.min;
            this.maxRR = this.max;
            a = (this.max - this.min) * (a - 1);
            this.min -= a;
            this.max += a;
            a = this.guides.length;
            if (this.includeGuidesInMinMax && 0 < a) for (b = 0; b < a; b++) c = this.guides[b], c.toValue < this.min && (this.min = c.toValue), c.value < this.min && (this.min = c.value), c.toValue > this.max && (this.max = c.toValue), c.value > this.max && (this.max = c.value);
            isNaN(this.minimum) || (this.min = this.minimum);
            isNaN(this.maximum) || (this.max = this.maximum);
            "date" == this.type && this.getDateMinMax();
            this.min > this.max && (a = this.max, this.max = this.min, this.min = a);
            isNaN(this.minZoom) || (this.min = this.minZoom);
            isNaN(this.maxZoom) || (this.max = this.maxZoom);
            this.minCalc = this.min;
            this.maxCalc = this.max;
            this.minReal = this.min;
            this.maxReal = this.max;
            0 === this.min && 0 === this.max && (this.max = 9);
            this.min > this.max && (this.min = this.max - 1);
            a = this.min;
            b = this.max;
            c = this.max - this.min;
            e = 0 === c ? Math.pow(10, Math.floor(Math.log(Math.abs(this.max)) * Math.LOG10E)) / 10 : Math.pow(10, Math.floor(Math.log(Math.abs(c)) * Math.LOG10E)) / 10;
            isNaN(this.maximum) && (this.max = Math.ceil(this.max / e) * e + e);
            isNaN(this.minimum) && (this.min = Math.floor(this.min / e) * e - e);
            0 > this.min && 0 <= a && (this.min = 0);
            0 < this.max && 0 >= b && (this.max = 0);
            "100%" == this.stackType && (this.min = 0 > this.min ? -100 : 0, this.max = 0 > this.max ? 0 : 100);
            c = this.max - this.min;
            e = Math.pow(10, Math.floor(Math.log(Math.abs(c)) * Math.LOG10E)) /
                10;
            this.step = Math.ceil(c / this.gridCountR / e) * e;
            c = Math.pow(10, Math.floor(Math.log(Math.abs(this.step)) * Math.LOG10E));
            c = d.fixStepE(c);
            e = Math.ceil(this.step / c);
            5 < e && (e = 10);
            5 >= e && 2 < e && (e = 5);
            this.step = Math.ceil(this.step / (c * e)) * c * e;
            1 > c ? (this.maxDecCount = Math.abs(Math.log(Math.abs(c)) * Math.LOG10E), this.maxDecCount = Math.round(this.maxDecCount), this.step = d.roundTo(this.step, this.maxDecCount + 1)) : this.maxDecCount = 0;
            this.min = this.step * Math.floor(this.min / this.step);
            this.max = this.step * Math.ceil(this.max / this.step);
            0 > this.min && 0 <= a && (this.min = 0);
            0 < this.max && 0 >= b && (this.max = 0);
            1 < this.minReal && 1 < this.max - this.minReal && (this.minReal = Math.floor(this.minReal));
            c = Math.pow(10, Math.floor(Math.log(Math.abs(this.minReal)) * Math.LOG10E));
            0 === this.min && (this.minReal = c);
            0 === this.min && 1 < this.minReal && (this.minReal = 1);
            0 < this.min && 0 < this.minReal - this.step && (this.minReal = this.min + this.step < this.minReal ? this.min + this.step : this.min);
            this.logarithmic && (2 < Math.log(b) * Math.LOG10E - Math.log(a) * Math.LOG10E ? (this.minReal = this.min = Math.pow(10, Math.floor(Math.log(Math.abs(a)) * Math.LOG10E)), this.max = Math.pow(10, Math.ceil(Math.log(Math.abs(b)) * Math.LOG10E))) : (a = Math.pow(10, Math.floor(Math.log(Math.abs(a)) * Math.LOG10E)) / 10, Math.pow(10, Math.floor(Math.log(Math.abs(this.min)) * Math.LOG10E)) / 10 < a && (this.minReal = this.min = 10 * a)))
        }, getExtremes: function (a, b) {
            var c, e, d;
            for (d = a; d <= b; d++) {
                var f = this.data[d].axes[this.id].graphs, g;
                for (g in f) if (f.hasOwnProperty(g)) {
                    var k = this.chart.graphsById[g];
                    if (k.includeInMinMax && (!k.hidden || this.includeHidden)) {
                        isNaN(c) &&
                        (c = Infinity);
                        isNaN(e) && (e = -Infinity);
                        this.foundGraphs = !0;
                        k = f[g].values;
                        this.recalculateToPercents && (k = f[g].percents);
                        var l;
                        if (this.minMaxField) l = k[this.minMaxField], l < c && (c = l), l > e && (e = l); else for (var m in k) k.hasOwnProperty(m) && "percents" != m && "total" != m && (l = k[m], l < c && (c = l), l > e && (e = l))
                    }
                }
            }
            return {min: c, max: e}
        }, zoomOut: function () {
            this.maxZoom = this.minZoom = NaN;
            this.zoomToRelativeValues(0, 1)
        }, zoomToRelativeValues: function (a, b, c) {
            if (this.reversed) {
                var e = a;
                a = 1 - b;
                b = 1 - e
            }
            var d = this.fullMax, e = this.fullMin, f = e + (d - e) * a, g = e + (d - e) * b;
            this.logarithmic && (d = Math.log(d) * Math.LOG10E - Math.log(e) * Math.LOG10E, f = Math.pow(10, d * a + Math.log(e) * Math.LOG10E), g = Math.pow(10, d * b + Math.log(e) * Math.LOG10E));
            return this.zoomToValues(f, g, c)
        }, zoomToValues: function (a, b, c) {
            if (b < a) {
                var e = b;
                b = a;
                a = e
            }
            var h = this.fullMax, e = this.fullMin;
            this.relativeStart = (a - e) / (h - e);
            this.relativeEnd = (b - e) / (h - e);
            if (this.logarithmic) {
                var h = Math.log(h) * Math.LOG10E - Math.log(e) * Math.LOG10E,
                    f = Math.log(b) / Math.LN10 - Math.log(e) * Math.LOG10E;
                this.relativeStart = (Math.log(a) /
                    Math.LN10 - Math.log(e) * Math.LOG10E) / h;
                this.relativeEnd = f / h
            }
            if (this.minZoom != a || this.maxZoom != b) {
                if (0 !== this.relativeStart || 1 != this.relativeEnd) this.minZoom = a, this.maxZoom = b;
                e = {type: "axisZoomed"};
                e.chart = this.chart;
                e.valueAxis = this;
                e.startValue = a;
                e.endValue = b;
                e.relativeStart = this.relativeStart;
                e.relativeEnd = this.relativeEnd;
                this.prevStartValue == a && this.prevEndValue == b || this.fire(e);
                this.prevStartValue = a;
                this.prevEndValue = b;
                c || (a = {}, d.copyProperties(e, a), a.type = "axisIntZoomed", this.fire(a));
                return !0
            }
        },
        coordinateToValue: function (a) {
            if (isNaN(a)) return NaN;
            var b = this.axisWidth, c = this.stepWidth, e = this.reversed, d = this.rotate, f = this.min,
                g = this.minReal;
            return !0 === this.logarithmic ? Math.pow(10, (d ? !0 === e ? (b - a) / c : a / c : !0 === e ? a / c : (b - a) / c) + Math.log(g) * Math.LOG10E) : !0 === e ? d ? f - (a - b) / c : a / c + f : d ? a / c + f : f - (a - b) / c
        }, getCoordinate: function (a, b) {
            if (isNaN(a)) return NaN;
            var c = this.rotate, e = this.reversed, d = this.axisWidth, f = this.stepWidth, g = this.min,
                k = this.minReal;
            !0 === this.logarithmic ? (0 === a && (a = this.treatZeroAs), g = Math.log(a) *
                Math.LOG10E - Math.log(k) * Math.LOG10E, c = c ? !0 === e ? d - f * g : f * g : !0 === e ? f * g : d - f * g) : c = !0 === e ? c ? d - f * (a - g) : f * (a - g) : c ? f * (a - g) : d - f * (a - g);
            1E7 < Math.abs(c) && (c = c / Math.abs(c) * 1E7);
            b || (c = Math.round(c));
            return c
        }, synchronizeWithAxis: function (a) {
            this.synchronizeWith = a;
            this.listenTo(this.synchronizeWith, "axisChanged", this.handleSynchronization)
        }, handleSynchronization: function () {
            if (this.synchronizeWith) {
                d.isString(this.synchronizeWith) && (this.synchronizeWith = this.chart.getValueAxisById(this.synchronizeWith));
                var a = this.synchronizeWith, b = a.min, c = a.max, a = a.step, e = this.synchronizationMultiplier;
                e && (this.min = b * e, this.max = c * e, this.step = a * e, b = Math.abs(Math.log(Math.abs(Math.pow(10, Math.floor(Math.log(Math.abs(this.step)) * Math.LOG10E)))) * Math.LOG10E), this.maxDecCount = b = Math.round(b), this.draw())
            }
        }
    })
})();
(function () {
    var d = window.AmCharts;
    d.RecAxis = d.Class({
        construct: function (a) {
            var b = a.chart, c = a.axisThickness, e = a.axisColor, h = a.axisAlpha, f = a.offset, g = a.dx, k = a.dy,
                l = a.x, m = a.y, n = a.height, q = a.width, p = b.container;
            "H" == a.orientation ? (e = d.line(p, [0, q], [0, 0], e, h, c), this.axisWidth = a.width, "bottom" == a.position ? (k = c / 2 + f + n + m - 1, c = l) : (k = -c / 2 - f + m + k, c = g + l)) : (this.axisWidth = a.height, "right" == a.position ? (e = d.line(p, [0, 0, -g], [0, n, n - k], e, h, c), k = m + k, c = c / 2 + f + g + q + l - 1) : (e = d.line(p, [0, 0], [0, n], e, h, c), k = m, c = -c / 2 - f + l));
            e.translate(c, k);
            c = b.container.set();
            c.push(e);
            b.axesSet.push(c);
            d.setCN(b, e, a.bcn + "line");
            this.axisSet = c;
            this.set = e
        }
    })
})();
(function () {
    var d = window.AmCharts;
    d.RecItem = d.Class({
        construct: function (a, b, c, e, h, f, g, k, l, m, n, q) {
            b = Math.round(b);
            var p = a.chart;
            this.value = c;
            void 0 == c && (c = "");
            l || (l = 0);
            void 0 == e && (e = !0);
            var t = p.fontFamily, r = a.fontSize;
            void 0 == r && (r = p.fontSize);
            var u = a.color;
            void 0 == u && (u = p.color);
            void 0 !== n && (u = n);
            var w = a.chart.container, y = w.set();
            this.set = y;
            var x = a.axisThickness, A = a.axisColor, z = a.axisAlpha, B = a.tickLength, C = a.gridAlpha,
                D = a.gridThickness, L = a.gridColor, I = a.dashLength, S = a.fillColor, O = a.fillAlpha,
                Q = a.labelsEnabled;
            n = a.labelRotationR;
            var ia = a.counter, H = a.inside, Z = a.labelOffset, va = a.dx, ma = a.dy, Oa = a.orientation,
                ea = a.position, ca = a.previousCoord, X = a.height, ya = a.width, da = a.offset, fa, za;
            g ? (void 0 !== g.id && (q = p.classNamePrefix + "-guide-" + g.id), Q = !0, isNaN(g.tickLength) || (B = g.tickLength), void 0 != g.lineColor && (L = g.lineColor), void 0 != g.color && (u = g.color), isNaN(g.lineAlpha) || (C = g.lineAlpha), isNaN(g.dashLength) || (I = g.dashLength), isNaN(g.lineThickness) || (D = g.lineThickness), !0 === g.inside && (H = !0, 0 < da && (da = 0)), isNaN(g.labelRotation) || (n = g.labelRotation), isNaN(g.fontSize) || (r = g.fontSize), g.position && (ea = g.position), void 0 !== g.boldLabel && (k = g.boldLabel), isNaN(g.labelOffset) || (Z = g.labelOffset)) : "" === c && (B = 0);
            m && !isNaN(a.minorTickLength) && (B = a.minorTickLength);
            var ga = "start";
            0 < h && (ga = "middle");
            a.centerLabels && (ga = "middle");
            var T = n * Math.PI / 180, Y, Ca, G = 0, v = 0, na = 0, ha = Y = 0, Pa = 0;
            "V" == Oa && (n = 0);
            var ba;
            Q && "" !== c && (ba = a.autoWrap && 0 === n ? d.wrappedText(w, c, u, t, r, ga, k, Math.abs(h), 0) : d.text(w, c, u, t, r, ga, k), ga = ba.getBBox(), ha = ga.width, Pa = ga.height);
            if ("H" == Oa) {
                if (0 <= b && b <= ya + 1 && (0 < B && 0 < z && b + l <= ya + 1 && (fa = d.line(w, [b + l, b + l], [0, B], A, z, D), y.push(fa)), 0 < C && (za = d.line(w, [b, b + va, b + va], [X, X + ma, ma], L, C, D, I), y.push(za))), v = 0, G = b, g && 90 == n && H && (G -= r), !1 === e ? (ga = "start", v = "bottom" == ea ? H ? v + B : v - B : H ? v - B : v + B, G += 3, 0 < h && (G += h / 2 - 3, ga = "middle"), 0 < n && (ga = "middle")) : ga = "middle", 1 == ia && 0 < O && !g && !m && ca < ya && (e = d.fitToBounds(b, 0, ya), ca = d.fitToBounds(ca, 0, ya), Y = e - ca, 0 < Y && (Ca = d.rect(w, Y, a.height, S, O), Ca.translate(e - Y + va, ma), y.push(Ca))), "bottom" == ea ? (v += X + r / 2 + da, H ? (0 < n ? (v = X - ha / 2 * Math.sin(T) - B - 3, G += ha / 2 * Math.cos(T) - 4 + 2) : 0 > n ? (v = X + ha * Math.sin(T) - B - 3 + 2, G += -ha * Math.cos(T) - Pa * Math.sin(T) - 4) : v -= B + r + 3 + 3, v -= Z) : (0 < n ? (v = X + ha / 2 * Math.sin(T) + B + 3, G -= ha / 2 * Math.cos(T)) : 0 > n ? (v = X + B + 3 - ha / 2 * Math.sin(T) + 2, G += ha / 2 * Math.cos(T)) : v += B + x + 3 + 3, v += Z)) : (v += ma + r / 2 - da, G += va, H ? (0 < n ? (v = ha / 2 * Math.sin(T) + B + 3, G -= ha / 2 * Math.cos(T)) : v += B + 3, v += Z) : (0 < n ? (v = -(ha / 2) * Math.sin(T) - B - 6, G += ha / 2 * Math.cos(T)) : v -= B + r + 3 + x + 3, v -= Z)), "bottom" == ea ? Y = (H ? X - B - 1 : X + x - 1) + da : (na = va, Y = (H ? ma : ma - B - x + 1) - da), f && (G += f), f = G, 0 < n && (f += ha / 2 * Math.cos(T)), ba && (r = 0, H && (r = ha / 2 * Math.cos(T)), f + r > ya + 2 || 0 > f)) ba.remove(), ba = null
            } else {
                0 <= b && b <= X + 1 && (0 < B && 0 < z && b + l <= X + 1 && (fa = d.line(w, [0, B + 1], [b + l, b + l], A, z, D), y.push(fa)), 0 < C && (za = d.line(w, [0, va, ya + va], [b, b + ma, b + ma], L, C, D, I), y.push(za)));
                ga = "end";
                if (!0 === H && "left" == ea || !1 === H && "right" == ea) ga = "start";
                v = b - Pa / 2 + 2;
                1 == ia && 0 < O && !g && !m && (e = d.fitToBounds(b, 0, X), ca = d.fitToBounds(ca, 0, X), T = e - ca, Ca = d.polygon(w, [0, a.width, a.width, 0], [0, 0, T, T], S, O), Ca.translate(va, e - T + ma), y.push(Ca));
                v += r / 2;
                "right" == ea ? (G += va + ya + da, v += ma, H ? (f || (v -= r / 2 + 3), G = G - (B + 4) - Z) : (G += B + 4 + x, v -= 2, G += Z)) : H ? (G += B + 4 - da, f || (v -= r / 2 + 3), g && (G += va, v += ma), G += Z) : (G += -B - x - 4 - 2 - da, v -= 2, G -= Z);
                fa && ("right" == ea ? (na += va + da + ya - 1, Y += ma, na = H ? na - x : na + x) : (na -= da, H || (na -= B + x)));
                f && (v += f);
                H = -3;
                "right" == ea && (H += ma);
                ba && (v > X + 1 || v < H) && (ba.remove(), ba = null)
            }
            fa && (fa.translate(na, Y), d.setCN(p, fa, a.bcn + "tick"), d.setCN(p, fa, q, !0), g && d.setCN(p, fa, "guide"));
            !1 === a.visible && (fa && fa.remove(), ba && (ba.remove(), ba = null));
            ba && (ba.attr({"text-anchor": ga}), ba.translate(G, v, NaN, !0), 0 !== n && ba.rotate(-n, a.chart.backgroundColor), a.allLabels.push(ba), this.label = ba, d.setCN(p, ba, a.bcn + "label"), d.setCN(p, ba, q, !0), g && d.setCN(p, ba, "guide"));
            za && (d.setCN(p, za, a.bcn + "grid"), d.setCN(p, za, q, !0), g && d.setCN(p, za, "guide"));
            Ca && (d.setCN(p, Ca, a.bcn + "fill"), d.setCN(p, Ca, q, !0));
            m ? za && d.setCN(p, za, a.bcn + "grid-minor") : (a.counter = 0 === ia ? 1 : 0, a.previousCoord = b);
            0 === this.set.node.childNodes.length && this.set.remove()
        }, graphics: function () {
            return this.set
        }, getLabel: function () {
            return this.label
        }
    })
})();
(function () {
    var d = window.AmCharts;
    d.RecFill = d.Class({
        construct: function (a, b, c, e) {
            var h = a.dx, f = a.dy, g = a.orientation, k = 0;
            if (c < b) {
                var l = b;
                b = c;
                c = l
            }
            var m = e.fillAlpha;
            isNaN(m) && (m = 0);
            var l = a.chart.container, n = e.fillColor;
            "V" == g ? (b = d.fitToBounds(b, 0, a.height), c = d.fitToBounds(c, 0, a.height)) : (b = d.fitToBounds(b, 0, a.width), c = d.fitToBounds(c, 0, a.width));
            c -= b;
            isNaN(c) && (c = 4, k = 2, m = 0);
            0 > c && "object" == typeof n && (n = n.join(",").split(",").reverse());
            "V" == g ? (g = d.rect(l, a.width, c, n, m), g.translate(h, b - k + f)) : (g = d.rect(l, c, a.height, n, m), g.translate(b - k + h, f));
            d.setCN(a.chart, g, "guide-fill");
            e.id && d.setCN(a.chart, g, "guide-fill-" + e.id);
            this.set = l.set([g])
        }, graphics: function () {
            return this.set
        }, getLabel: function () {
        }
    })
})();
(function () {
    var d = window.AmCharts;
    d.AmChart = d.Class({
        construct: function (a) {
            this.svgIcons = this.tapToActivate = !0;
            this.theme = a;
            this.classNamePrefix = "amcharts";
            this.addClassNames = !1;
            this.version = "3.19.3";
            d.addChart(this);
            this.createEvents("buildStarted", "dataUpdated", "init", "rendered", "drawn", "failed", "resized", "animationFinished");
            this.height = this.width = "100%";
            this.dataChanged = !0;
            this.chartCreated = !1;
            this.previousWidth = this.previousHeight = 0;
            this.backgroundColor = "#FFFFFF";
            this.borderAlpha = this.backgroundAlpha = 0;
            this.color = this.borderColor = "#000000";
            this.fontFamily = "Verdana";
            this.fontSize = 11;
            this.usePrefixes = !1;
            this.autoResize = !0;
            this.autoDisplay = !1;
            this.addCodeCredits = !0;
            this.touchStartTime = this.touchClickDuration = 0;
            this.precision = -1;
            this.percentPrecision = 2;
            this.decimalSeparator = ".";
            this.thousandsSeparator = ",";
            this.labels = [];
            this.allLabels = [];
            this.titles = [];
            this.marginRight = this.marginLeft = this.autoMarginOffset = 0;
            this.timeOuts = [];
            this.creditsPosition = "top-left";
            var b = document.createElement("div"), c = b.style;
            c.overflow = "hidden";
            c.position = "relative";
            c.textAlign = "left";
            this.chartDiv = b;
            b = document.createElement("div");
            c = b.style;
            c.overflow = "hidden";
            c.position = "relative";
            c.textAlign = "left";
            this.legendDiv = b;
            this.titleHeight = 0;
            this.hideBalloonTime = 150;
            this.handDrawScatter = 2;
            this.handDrawThickness = 1;
            this.prefixesOfBigNumbers = [{number: 1E3, prefix: "k"}, {number: 1E6, prefix: "M"}, {
                number: 1E9,
                prefix: "G"
            }, {number: 1E12, prefix: "T"}, {number: 1E15, prefix: "P"}, {number: 1E18, prefix: "E"}, {
                number: 1E21,
                prefix: "Z"
            }, {number: 1E24, prefix: "Y"}];
            this.prefixesOfSmallNumbers = [{number: 1E-24, prefix: "y"}, {number: 1E-21, prefix: "z"}, {
                number: 1E-18,
                prefix: "a"
            }, {number: 1E-15, prefix: "f"}, {number: 1E-12, prefix: "p"}, {number: 1E-9, prefix: "n"}, {
                number: 1E-6,
                prefix: "\u03bc"
            }, {number: .001, prefix: "m"}];
            this.panEventsEnabled = !0;
            this.product = "amcharts";
            this.animations = [];
            this.balloon = new d.AmBalloon(this.theme);
            this.balloon.chart = this;
            this.processTimeout = 0;
            this.processCount = 1E3;
            this.animatable = [];
            d.applyTheme(this, a, "AmChart")
        }, drawChart: function () {
            0 < this.realWidth && 0 < this.realHeight && (this.drawBackground(), this.redrawLabels(), this.drawTitles(), this.brr(), this.renderFix(), this.chartDiv && (this.boundingRect = this.chartDiv.getBoundingClientRect()))
        }, drawBackground: function () {
            d.remove(this.background);
            var a = this.container, b = this.backgroundColor, c = this.backgroundAlpha, e = this.set;
            d.isModern || 0 !== c || (c = .001);
            var h = this.updateWidth();
            this.realWidth = h;
            var f = this.updateHeight();
            this.realHeight = f;
            b = d.polygon(a, [0, h - 1, h - 1, 0], [0, 0, f - 1, f - 1], b, c, 1, this.borderColor, this.borderAlpha);
            d.setCN(this, b, "bg");
            this.background = b;
            e.push(b);
            if (b = this.backgroundImage) a = a.image(b, 0, 0, h, f), d.setCN(this, b, "bg-image"), this.bgImg = a, e.push(a)
        }, drawTitles: function (a) {
            var b = this.titles;
            this.titleHeight = 0;
            if (d.ifArray(b)) {
                var c = 20, e;
                for (e = 0; e < b.length; e++) {
                    var h = b[e], h = d.processObject(h, d.Title, this.theme);
                    if (!1 !== h.enabled) {
                        var f = h.color;
                        void 0 === f && (f = this.color);
                        var g = h.size;
                        isNaN(g) && (g = this.fontSize + 2);
                        isNaN(h.alpha);
                        var k = this.marginLeft, l = !0;
                        void 0 !== h.bold && (l = h.bold);
                        f = d.wrappedText(this.container, h.text, f, this.fontFamily, g, "middle", l, this.realWidth - 35);
                        f.translate(k + (this.realWidth - this.marginRight - k) / 2, c);
                        f.node.style.pointerEvents = "none";
                        h.sprite = f;
                        d.setCN(this, f, "title");
                        h.id && d.setCN(this, f, "title-" + h.id);
                        f.attr({opacity: h.alpha});
                        c += f.getBBox().height + 5;
                        a ? f.remove() : this.freeLabelsSet.push(f)
                    }
                }
                this.titleHeight = c - 10
            }
        }, write: function (a) {
            var b = this;
            if (b.listeners) for (var c = 0; c < b.listeners.length; c++) {
                var e = b.listeners[c];
                b.addListener(e.event, e.method)
            }
            b.fire({
                type: "buildStarted",
                chart: b
            });
            b.afterWriteTO && clearTimeout(b.afterWriteTO);
            0 < b.processTimeout ? b.afterWriteTO = setTimeout(function () {
                b.afterWrite.call(b, a)
            }, b.processTimeout) : b.afterWrite(a)
        }, afterWrite: function (a) {
            if (a = "object" != typeof a ? document.getElementById(a) : a) {
                for (; a.firstChild;) a.removeChild(a.firstChild);
                this.div = a;
                a.style.overflow = "hidden";
                a.style.textAlign = "left";
                var b = this.chartDiv, c = this.legendDiv, e = this.legend, h = c.style, f = b.style;
                this.measure();
                this.previousHeight = this.divRealHeight;
                this.previousWidth = this.divRealWidth;
                var g, k = document.createElement("div");
                g = k.style;
                g.position = "relative";
                this.containerDiv = k;
                k.className = this.classNamePrefix + "-main-div";
                b.className = this.classNamePrefix + "-chart-div";
                a.appendChild(k);
                var l = this.exportConfig;
                l && d.AmExport && !this.AmExport && (this.AmExport = new d.AmExport(this, l));
                this.amExport && d.AmExport && (this.AmExport = d.extend(this.amExport, new d.AmExport(this), !0));
                this.AmExport && this.AmExport.init && this.AmExport.init();
                if (e) {
                    e = this.addLegend(e, e.divId);
                    if (e.enabled) switch (h.left = null, h.top = null, h.right = null, f.left = null, f.right = null, f.top = null, h.position = "relative", f.position = "relative", e.position) {
                        case"bottom":
                            k.appendChild(b);
                            k.appendChild(c);
                            break;
                        case"top":
                            k.appendChild(c);
                            k.appendChild(b);
                            break;
                        case"absolute":
                            g.width = a.style.width;
                            g.height = a.style.height;
                            h.position = "absolute";
                            f.position = "absolute";
                            void 0 !== e.left && (h.left = e.left + "px");
                            void 0 !== e.right && (h.right = e.right + "px");
                            void 0 !== e.top && (h.top = e.top + "px");
                            void 0 !== e.bottom && (h.bottom = e.bottom + "px");
                            e.marginLeft = 0;
                            e.marginRight = 0;
                            k.appendChild(b);
                            k.appendChild(c);
                            break;
                        case"right":
                            g.width = a.style.width;
                            g.height = a.style.height;
                            h.position = "relative";
                            f.position = "absolute";
                            k.appendChild(b);
                            k.appendChild(c);
                            break;
                        case"left":
                            g.width = a.style.width;
                            g.height = a.style.height;
                            h.position = "absolute";
                            f.position = "relative";
                            k.appendChild(b);
                            k.appendChild(c);
                            break;
                        case"outside":
                            k.appendChild(b)
                    } else k.appendChild(b);
                    this.prevLegendPosition = e.position
                } else k.appendChild(b);
                this.listenersAdded || (this.addListeners(), this.listenersAdded = !0);
                this.initChart()
            }
        }, createLabelsSet: function () {
            d.remove(this.labelsSet);
            this.labelsSet = this.container.set();
            this.freeLabelsSet.push(this.labelsSet)
        }, initChart: function () {
            this.balloon = d.processObject(this.balloon, d.AmBalloon, this.theme);
            window.AmCharts_path && (this.path = window.AmCharts_path);
            void 0 === this.path && (this.path = d.getPath());
            void 0 === this.path && (this.path = "amcharts/");
            this.path = d.normalizeUrl(this.path);
            void 0 === this.pathToImages && (this.pathToImages = this.path + "images/");
            this.initHC || (d.callInitHandler(this), this.initHC = !0);
            d.applyLang(this.language, this);
            var a = this.numberFormatter;
            a && (isNaN(a.precision) || (this.precision = a.precision), void 0 !== a.thousandsSeparator && (this.thousandsSeparator = a.thousandsSeparator), void 0 !== a.decimalSeparator && (this.decimalSeparator = a.decimalSeparator));
            (a = this.percentFormatter) && !isNaN(a.precision) && (this.percentPrecision = a.precision);
            this.nf = {
                precision: this.precision,
                thousandsSeparator: this.thousandsSeparator,
                decimalSeparator: this.decimalSeparator
            };
            this.pf = {
                precision: this.percentPrecision,
                thousandsSeparator: this.thousandsSeparator,
                decimalSeparator: this.decimalSeparator
            };
            this.destroy();
            (a = this.container) ? (a.container.innerHTML = "", a.width = this.realWidth, a.height = this.realHeight, a.addDefs(this), this.chartDiv.appendChild(a.container)) : a = new d.AmDraw(this.chartDiv, this.realWidth, this.realHeight, this);
            this.container = a;
            this.extension = ".png";
            this.svgIcons && d.SVG && (this.extension = ".svg");
            this.checkDisplay();
            a.chart = this;
            d.VML || d.SVG ? (a.handDrawn = this.handDrawn, a.handDrawScatter = this.handDrawScatter, a.handDrawThickness = this.handDrawThickness, d.remove(this.set), this.set = a.set(), d.remove(this.gridSet), this.gridSet = a.set(), d.remove(this.cursorLineSet), this.cursorLineSet = a.set(), d.remove(this.graphsBehindSet), this.graphsBehindSet = a.set(), d.remove(this.bulletBehindSet), this.bulletBehindSet = a.set(), d.remove(this.columnSet), this.columnSet = a.set(), d.remove(this.graphsSet), this.graphsSet = a.set(), d.remove(this.trendLinesSet), this.trendLinesSet = a.set(), d.remove(this.axesSet), this.axesSet = a.set(), d.remove(this.cursorSet), this.cursorSet = a.set(), d.remove(this.scrollbarsSet), this.scrollbarsSet = a.set(), d.remove(this.bulletSet), this.bulletSet = a.set(), d.remove(this.freeLabelsSet), this.freeLabelsSet = a.set(), d.remove(this.axesLabelsSet), this.axesLabelsSet = a.set(), d.remove(this.balloonsSet), this.balloonsSet = a.set(), d.remove(this.plotBalloonsSet), this.plotBalloonsSet = a.set(), d.remove(this.zoomButtonSet), this.zoomButtonSet = a.set(), d.remove(this.zbSet), this.zbSet = null, d.remove(this.linkSet), this.linkSet = a.set()) : this.fire({
                type: "failed",
                chart: this
            })
        }, premeasure: function () {
            var a = this.div;
            if (a) {
                try {
                    this.boundingRect = this.chartDiv.getBoundingClientRect()
                } catch (e) {
                }
                var b = a.offsetWidth, c = a.offsetHeight;
                a.clientHeight && (b = a.clientWidth, c = a.clientHeight);
                if (b != this.mw || c != this.mh) this.mw = b, this.mh = c, this.measure()
            }
        }, measure: function () {
            var a = this.div;
            if (a) {
                var b = this.chartDiv, c = a.offsetWidth, e = a.offsetHeight, h = this.container;
                a.clientHeight && (c = a.clientWidth, e = a.clientHeight);
                var f = d.removePx(d.getStyle(a, "padding-left")), g = d.removePx(d.getStyle(a, "padding-right")),
                    k = d.removePx(d.getStyle(a, "padding-top")), l = d.removePx(d.getStyle(a, "padding-bottom"));
                isNaN(f) || (c -= f);
                isNaN(g) || (c -= g);
                isNaN(k) || (e -= k);
                isNaN(l) || (e -= l);
                f = a.style;
                a = f.width;
                f = f.height;
                -1 != a.indexOf("px") && (c = d.removePx(a));
                -1 != f.indexOf("px") && (e = d.removePx(f));
                e = Math.round(e);
                c = Math.round(c);
                a = Math.round(d.toCoordinate(this.width, c));
                f = Math.round(d.toCoordinate(this.height, e));
                (c != this.previousWidth || e != this.previousHeight) && 0 < a && 0 < f && (b.style.width = a + "px", b.style.height = f + "px", b.style.padding = 0, h && h.setSize(a, f), this.balloon = d.processObject(this.balloon, d.AmBalloon, this.theme));
                this.balloon.setBounds && this.balloon.setBounds(2, 2, a - 2, f);
                this.balloon.chart = this;
                this.realWidth = a;
                this.realHeight = f;
                this.divRealWidth = c;
                this.divRealHeight = e
            }
        }, checkDisplay: function () {
            if (this.autoDisplay && this.container) {
                var a = d.rect(this.container, 10, 10), b = a.getBBox();
                0 === b.width && 0 === b.height && (this.divRealHeight = this.divRealWidth = this.realHeight = this.realWidth = 0, this.previousWidth = this.previousHeight = NaN);
                a.remove()
            }
        }, destroy: function () {
            this.chartDiv.innerHTML = "";
            this.clearTimeOuts();
            this.legend && this.legend.destroy()
        }, clearTimeOuts: function () {
            var a = this.timeOuts;
            if (a) {
                var b;
                for (b = 0; b < a.length; b++) clearTimeout(a[b])
            }
            this.timeOuts = []
        }, clear: function (a) {
            d.callMethod("clear", [this.chartScrollbar, this.scrollbarV, this.scrollbarH, this.chartCursor]);
            this.chartCursor = this.scrollbarH = this.scrollbarV = this.chartScrollbar = null;
            this.clearTimeOuts();
            this.container && (this.container.remove(this.chartDiv), this.container.remove(this.legendDiv));
            a || d.removeChart(this);
            if (a = this.div) for (; a.firstChild;) a.removeChild(a.firstChild);
            this.legend && this.legend.destroy()
        }, setMouseCursor: function (a) {
            "auto" == a && d.isNN && (a = "default");
            this.chartDiv.style.cursor = a;
            this.legendDiv.style.cursor = a
        }, redrawLabels: function () {
            this.labels = [];
            var a = this.allLabels;
            this.createLabelsSet();
            var b;
            for (b = 0; b < a.length; b++) this.drawLabel(a[b])
        }, drawLabel: function (a) {
            var b = this;
            if (b.container && !1 !== a.enabled) {
                a = d.processObject(a, d.Label, b.theme);
                var c = a.y, e = a.text, h = a.align, f = a.size, g = a.color, k = a.rotation, l = a.alpha, m = a.bold,
                    n = d.toCoordinate(a.x, b.realWidth), c = d.toCoordinate(c, b.realHeight);
                n || (n = 0);
                c || (c = 0);
                void 0 === g && (g = b.color);
                isNaN(f) && (f = b.fontSize);
                h || (h = "start");
                "left" == h && (h = "start");
                "right" == h && (h = "end");
                "center" == h && (h = "middle", k ? c = b.realHeight - c + c / 2 : n = b.realWidth / 2 - n);
                void 0 === l && (l = 1);
                void 0 === k && (k = 0);
                c += f / 2;
                e = d.text(b.container, e, g, b.fontFamily, f, h, m, l);
                e.translate(n, c);
                d.setCN(b, e, "label");
                a.id && d.setCN(b, e, "label-" + a.id);
                0 !== k && e.rotate(k);
                a.url ? (e.setAttr("cursor", "pointer"), e.click(function () {
                    d.getURL(a.url, b.urlTarget)
                })) : e.node.style.pointerEvents = "none";
                b.labelsSet.push(e);
                b.labels.push(e)
            }
        }, addLabel: function (a, b, c, e, d, f, g, k, l, m) {
            a = {x: a, y: b, text: c, align: e, size: d, color: f, alpha: k, rotation: g, bold: l, url: m, enabled: !0};
            this.container && this.drawLabel(a);
            this.allLabels.push(a)
        }, clearLabels: function () {
            var a = this.labels, b;
            for (b = a.length - 1; 0 <= b; b--) a[b].remove();
            this.labels = [];
            this.allLabels = []
        }, updateHeight: function () {
            var a = this.divRealHeight, b = this.legend;
            if (b) {
                var c = this.legendDiv.offsetHeight, b = b.position;
                if ("top" == b || "bottom" == b) {
                    a -= c;
                    if (0 > a || isNaN(a)) a = 0;
                    this.chartDiv.style.height = a + "px"
                }
            }
            return a
        }, updateWidth: function () {
            var a = this.divRealWidth, b = this.divRealHeight, c = this.legend;
            if (c) {
                var e = this.legendDiv, d = e.offsetWidth;
                isNaN(c.width) || (d = c.width);
                c.ieW && (d = c.ieW);
                var f = e.offsetHeight, e = e.style, g = this.chartDiv.style, c = c.position;
                if ("right" == c || "left" == c) {
                    a -= d;
                    if (0 > a || isNaN(a)) a = 0;
                    g.width = a + "px";
                    this.balloon.setBounds(2, 2, a - 2, this.realHeight);
                    "left" == c ? (g.left = d + "px", e.left = "0px") : (g.left = "0px", e.left = a + "px");
                    b > f && (e.top = (b - f) / 2 + "px")
                }
            }
            return a
        }, getTitleHeight: function () {
            this.drawTitles(!0);
            return this.titleHeight
        }, addTitle: function (a, b, c, e, d) {
            isNaN(b) && (b = this.fontSize + 2);
            a = {text: a, size: b, color: c, alpha: e, bold: d, enabled: !0};
            this.titles.push(a);
            return a
        }, handleWheel: function (a) {
            var b = 0;
            a || (a = window.event);
            a.wheelDelta ? b = a.wheelDelta / 120 : a.detail && (b = -a.detail / 3);
            b && this.handleWheelReal(b, a.shiftKey);
            a.preventDefault && a.preventDefault()
        }, handleWheelReal: function () {
        },
        handleDocTouchStart: function () {
            this.hideBalloonReal();
            this.handleMouseMove();
            this.tmx = this.mouseX;
            this.tmy = this.mouseY;
            this.touchStartTime = (new Date).getTime()
        }, handleDocTouchEnd: function () {
            -.5 < this.tmx && this.tmx < this.divRealWidth + 1 && 0 < this.tmy && this.tmy < this.divRealHeight ? (this.handleMouseMove(), 4 > Math.abs(this.mouseX - this.tmx) && 4 > Math.abs(this.mouseY - this.tmy) && (this.tapped = !0)) : this.tapped = !1
        }, checkTouchDuration: function () {
            if ((new Date).getTime() - this.touchStartTime > this.touchClickDuration) return !0
        }, checkTouchMoved: function () {
            if (4 < Math.abs(this.mouseX - this.tmx) || 4 < Math.abs(this.mouseY - this.tmy)) return !0
        }, addListeners: function () {
            var a = this, b = a.chartDiv;
            document.addEventListener ? (a.panEventsEnabled && (b.style.msTouchAction = "none", b.style.touchAction = "none"), "ontouchstart" in document.documentElement && (b.addEventListener("touchstart", function (b) {
                a.handleTouchStart.call(a, b)
            }, !0), b.addEventListener("touchmove", function (b) {
                a.handleMouseMove.call(a, b)
            }, !0), b.addEventListener("touchend", function (b) {
                a.handleTouchEnd.call(a, b)
            }, !0), document.addEventListener("touchstart", function (b) {
                a.handleDocTouchStart.call(a, b)
            }), document.addEventListener("touchend", function (b) {
                a.handleDocTouchEnd.call(a, b)
            })), b.addEventListener("mousedown", function (b) {
                a.mouseIsOver = !0;
                a.handleMouseMove.call(a, b);
                a.handleMouseDown.call(a, b)
            }, !0), b.addEventListener("mouseover", function (b) {
                a.handleMouseOver.call(a, b)
            }, !0), b.addEventListener("mouseout", function (b) {
                a.handleMouseOut.call(a, b)
            }, !0)) : (b.attachEvent("onmousedown", function (b) {
                a.handleMouseDown.call(a, b)
            }), b.attachEvent("onmouseover", function (b) {
                a.handleMouseOver.call(a, b)
            }), b.attachEvent("onmouseout", function (b) {
                a.handleMouseOut.call(a, b)
            }))
        }, dispDUpd: function () {
            this.skipEvents || (this.dispatchDataUpdated && (this.dispatchDataUpdated = !1, this.fire({
                type: "dataUpdated",
                chart: this
            })), this.chartCreated || (this.chartCreated = !0, this.fire({
                type: "init",
                chart: this
            })), this.chartRendered || (this.fire({
                type: "rendered",
                chart: this
            }), this.chartRendered = !0), this.fire({type: "drawn", chart: this}));
            this.skipEvents = !1
        }, validateSize: function () {
            var a = this;
            a.premeasure();
            a.checkDisplay();
            if (a.divRealWidth != a.previousWidth || a.divRealHeight != a.previousHeight) {
                var b = a.legend;
                if (0 < a.realWidth && 0 < a.realHeight) {
                    a.sizeChanged = !0;
                    if (b) {
                        a.legendInitTO && clearTimeout(a.legendInitTO);
                        var c = setTimeout(function () {
                            b.invalidateSize()
                        }, 10);
                        a.timeOuts.push(c);
                        a.legendInitTO = c
                    }
                    a.marginsUpdated = !1;
                    clearTimeout(a.initTO);
                    c = setTimeout(function () {
                        a.initChart()
                    }, 10);
                    a.timeOuts.push(c);
                    a.initTO = c
                }
                a.renderFix();
                b && b.renderFix && b.renderFix();
                clearTimeout(a.resizedTO);
                a.resizedTO = setTimeout(function () {
                    a.fire({type: "resized", chart: a})
                }, 10);
                a.previousHeight = a.divRealHeight;
                a.previousWidth = a.divRealWidth
            }
        }, invalidateSize: function () {
            this.previousHeight = this.previousWidth = NaN;
            this.invalidateSizeReal()
        }, invalidateSizeReal: function () {
            var a = this;
            a.marginsUpdated = !1;
            clearTimeout(a.validateTO);
            var b = setTimeout(function () {
                a.validateSize()
            }, 5);
            a.timeOuts.push(b);
            a.validateTO = b
        }, validateData: function (a) {
            this.chartCreated && (this.dataChanged = !0, this.marginsUpdated = !1, this.initChart(a))
        }, validateNow: function (a, b) {
            this.initTO && clearTimeout(this.initTO);
            a && (this.dataChanged = !0, this.marginsUpdated = !1);
            this.skipEvents = b;
            this.chartRendered = !1;
            var c = this.legend;
            c && c.position != this.prevLegendPosition && (this.previousWidth = this.mw = 0, c.invalidateSize && (c.invalidateSize(), this.validateSize()));
            this.write(this.div)
        }, showItem: function (a) {
            a.hidden = !1;
            this.initChart()
        }, hideItem: function (a) {
            a.hidden = !0;
            this.initChart()
        }, hideBalloon: function () {
            var a = this;
            clearTimeout(a.hoverInt);
            clearTimeout(a.balloonTO);
            a.hoverInt = setTimeout(function () {
                a.hideBalloonReal.call(a)
            }, a.hideBalloonTime)
        }, cleanChart: function () {
        }, hideBalloonReal: function () {
            var a = this.balloon;
            a && a.hide && a.hide()
        }, showBalloon: function (a, b, c, e, d) {
            var f = this;
            clearTimeout(f.balloonTO);
            clearTimeout(f.hoverInt);
            f.balloonTO = setTimeout(function () {
                f.showBalloonReal.call(f, a, b, c, e, d)
            }, 1)
        }, showBalloonReal: function (a, b, c, e, d) {
            this.handleMouseMove();
            var f = this.balloon;
            f.enabled && (f.followCursor(!1), f.changeColor(b), !c || f.fixedPosition ? (f.setPosition(e, d), isNaN(e) || isNaN(d) ? f.followCursor(!0) : f.followCursor(!1)) : f.followCursor(!0), a && f.showBalloon(a))
        }, handleMouseOver: function () {
            this.outTO && clearTimeout(this.outTO);
            d.resetMouseOver();
            this.mouseIsOver = !0
        }, handleMouseOut: function () {
            var a = this;
            d.resetMouseOver();
            a.outTO && clearTimeout(a.outTO);
            a.outTO = setTimeout(function () {
                a.handleMouseOutReal()
            }, 10)
        }, handleMouseOutReal: function () {
            this.mouseIsOver = !1
        }, handleMouseMove: function (a) {
            a || (a = window.event);
            this.mouse2Y = this.mouse2X = NaN;
            var b, c, e, d;
            if (a) {
                if (a.touches) {
                    var f = a.touches.item(1);
                    f && this.panEventsEnabled && this.boundingRect && (e = f.clientX - this.boundingRect.left, d = f.clientY - this.boundingRect.top);
                    a = a.touches.item(0);
                    if (!a) return
                } else this.wasTouched = !1;
                this.boundingRect && a.clientX && (b = a.clientX - this.boundingRect.left, c = a.clientY - this.boundingRect.top);
                isNaN(e) ? this.mouseX = b : (this.mouseX = Math.min(b, e), this.mouse2X = Math.max(b, e));
                isNaN(d) ? this.mouseY = c : (this.mouseY = Math.min(c, d), this.mouse2Y = Math.max(c, d))
            }
        }, handleTouchStart: function (a) {
            this.hideBalloonReal();
            a && (a.touches && this.tapToActivate && !this.tapped || !this.panRequired) || (this.handleMouseMove(a), this.handleMouseDown(a))
        }, handleTouchEnd: function (a) {
            this.wasTouched = !0;
            this.handleMouseMove(a);
            d.resetMouseOver();
            this.handleReleaseOutside(a)
        }, handleReleaseOutside: function () {
        }, handleMouseDown: function (a) {
            d.resetMouseOver();
            this.mouseIsOver = !0;
            a && a.preventDefault && (this.panEventsEnabled ? a.preventDefault() : a.touches || a.preventDefault())
        }, addLegend: function (a, b) {
            a = d.processObject(a, d.AmLegend, this.theme);
            a.divId = b;
            a.ieW = 0;
            var c;
            c = "object" != typeof b && b ? document.getElementById(b) : b;
            this.legend = a;
            a.chart = this;
            c ? (a.div = c, a.position = "outside", a.autoMargins = !1) : a.div = this.legendDiv;
            return a
        }, removeLegend: function () {
            this.legend = void 0;
            this.legendDiv.innerHTML = ""
        }, handleResize: function () {
            (d.isPercents(this.width) || d.isPercents(this.height)) && this.invalidateSizeReal();
            this.renderFix()
        }, renderFix: function () {
            if (!d.VML) {
                var a = this.container;
                a && a.renderFix()
            }
        }, getSVG: function () {
            if (d.hasSVG) return this.container
        }, animate: function (a, b, c, e, h, f, g) {
            a["an_" + b] && d.removeFromArray(this.animations, a["an_" + b]);
            c = {obj: a, frame: 0, attribute: b, from: c, to: e, time: h, effect: f, suffix: g};
            a["an_" + b] = c;
            this.animations.push(c);
            return c
        }, setLegendData: function (a) {
            var b = this.legend;
            b && b.setData(a)
        }, stopAnim: function (a) {
            d.removeFromArray(this.animations, a)
        }, updateAnimations: function () {
            var a;
            this.container && this.container.update();
            if (this.animations) for (a = this.animations.length - 1; 0 <= a; a--) {
                var b = this.animations[a], c = d.updateRate * b.time, e = b.frame + 1, h = b.obj, f = b.attribute;
                if (e <= c) {
                    b.frame++;
                    var g = Number(b.from), k = Number(b.to) - g, c = d[b.effect](0, e, g, k, c);
                    0 === k ? (this.animations.splice(a, 1), h.node.style[f] = Number(b.to) + b.suffix) : h.node.style[f] = c + b.suffix
                } else h.node.style[f] = Number(b.to) + b.suffix, h.animationFinished = !0, this.animations.splice(a, 1)
            }
        }, update: function () {
            this.updateAnimations();
            var a = this.animatable;
            if (0 < a.length) {
                for (var b = !0, c = a.length - 1; 0 <= c; c--) {
                    var e = a[c];
                    e && (e.animationFinished ? a.splice(c, 1) : b = !1)
                }
                b && (this.fire({type: "animationFinished", chart: this}), this.animatable = [])
            }
        }, inIframe: function () {
            try {
                return window.self !== window.top
            } catch (a) {
                return !0
            }
        }, brr: function () {
            if (!this.hideCredits) {
                var a = "amcharts.com", b = window.location.hostname.split("."), c;
                2 <= b.length && (c = b[b.length - 2] + "." + b[b.length - 1]);
                this.amLink && (b = this.amLink.parentNode) && b.removeChild(this.amLink);
                b = this.creditsPosition;
                if (c != a || !0 === this.inIframe()) {
                    var a = "http://www." + a, e = c = 0, d = this.realWidth, f = this.realHeight, g = this.type;
                    if ("serial" == g || "xy" == g || "gantt" == g) c = this.marginLeftReal, e = this.marginTopReal, d = c + this.plotAreaWidth, f = e + this.plotAreaHeight;
                    var g = a + "/javascript-charts/", k = "JavaScript charts", l = "JS chart by amCharts";
                    "ammap" == this.product && (g = a + "/javascript-maps/", k = "Interactive JavaScript maps", l = "JS map by amCharts");
                    a = document.createElement("a");
                    l = document.createTextNode(l);
                    a.setAttribute("href", g);
                    a.setAttribute("title", k);
                    a.appendChild(l);
                    this.chartDiv.appendChild(a);
                    this.amLink = a;
                    g = a.style;
                    g.position = "absolute";
                    g.textDecoration = "none";
                    g.color = this.color;
                    g.fontFamily = this.fontFamily;
                    g.fontSize = "11px";
                    g.opacity = .7;
                    g.display = "block";
                    var k = a.offsetWidth, a = a.offsetHeight, l = 5 + c, m = e + 5;
                    "bottom-left" == b && (l = 5 + c, m = f - a - 3);
                    "bottom-right" == b && (l = d - k - 5, m = f - a - 3);
                    "top-right" == b && (l = d - k - 5, m = e + 5);
                    g.left = l + "px";
                    g.top = m + "px"
                }
            }
        }
    });
    d.Slice = d.Class({
        construct: function () {
        }
    });
    d.SerialDataItem = d.Class({
        construct: function () {
        }
    });
    d.GraphDataItem = d.Class({
        construct: function () {
        }
    });
    d.Guide = d.Class({
        construct: function (a) {
            this.cname = "Guide";
            d.applyTheme(this, a, this.cname)
        }
    });
    d.Title = d.Class({
        construct: function (a) {
            this.cname = "Title";
            d.applyTheme(this, a, this.cname)
        }
    });
    d.Label = d.Class({
        construct: function (a) {
            this.cname = "Label";
            d.applyTheme(this, a, this.cname)
        }
    })
})();
(function () {
    var d = window.AmCharts;
    d.AmGraph = d.Class({
        construct: function (a) {
            this.cname = "AmGraph";
            this.createEvents("rollOverGraphItem", "rollOutGraphItem", "clickGraphItem", "doubleClickGraphItem", "rightClickGraphItem", "clickGraph", "rollOverGraph", "rollOutGraph");
            this.type = "line";
            this.stackable = !0;
            this.columnCount = 1;
            this.columnIndex = 0;
            this.centerCustomBullets = this.showBalloon = !0;
            this.maxBulletSize = 50;
            this.minBulletSize = 4;
            this.balloonText = "[[value]]";
            this.hidden = this.scrollbar = this.animationPlayed = !1;
            this.pointPosition = "middle";
            this.depthCount = 1;
            this.includeInMinMax = !0;
            this.negativeBase = 0;
            this.visibleInLegend = !0;
            this.showAllValueLabels = !1;
            this.showBulletsAt = this.showBalloonAt = "close";
            this.lineThickness = 1;
            this.dashLength = 0;
            this.connect = !0;
            this.lineAlpha = 1;
            this.bullet = "none";
            this.bulletBorderThickness = 2;
            this.bulletBorderAlpha = 0;
            this.bulletAlpha = 1;
            this.bulletSize = 8;
            this.cornerRadiusTop = this.hideBulletsCount = this.bulletOffset = 0;
            this.cursorBulletAlpha = 1;
            this.gradientOrientation = "vertical";
            this.dy = this.dx = 0;
            this.periodValue = "";
            this.clustered = !0;
            this.periodSpan = 1;
            this.y = this.x = 0;
            this.switchable = !0;
            this.tcc = this.minDistance = 1;
            this.labelRotation = 0;
            this.labelAnchor = "auto";
            this.labelOffset = 3;
            this.bcn = "graph-";
            this.dateFormat = "MMM DD, YYYY";
            this.noRounding = !0;
            d.applyTheme(this, a, this.cname)
        }, init: function () {
            this.createBalloon()
        }, draw: function () {
            var a = this.chart, b = a.type;
            if (a.drawGraphs) {
                isNaN(this.precision) || (this.numberFormatter ? this.numberFormatter.precision = this.precision : this.numberFormatter = {
                    precision: this.precision,
                    decimalSeparator: a.decimalSeparator,
                    thousandsSeparator: a.thousandsSeparator
                });
                var c = a.container;
                this.container = c;
                this.destroy();
                var e = c.set();
                this.set = e;
                e.translate(this.x, this.y);
                var h = c.set();
                this.bulletSet = h;
                h.translate(this.x, this.y);
                this.behindColumns ? (a.graphsBehindSet.push(e), a.bulletBehindSet.push(h)) : (a.graphsSet.push(e), a.bulletSet.push(h));
                var f = this.bulletAxis;
                d.isString(f) && (this.bulletAxis = a.getValueAxisById(f));
                c = c.set();
                d.remove(this.columnsSet);
                this.columnsSet = c;
                d.setCN(a, e, "graph-" + this.type);
                d.setCN(a, e, "graph-" + this.id);
                d.setCN(a, h, "graph-" + this.type);
                d.setCN(a, h, "graph-" + this.id);
                this.columnsArray = [];
                this.ownColumns = [];
                this.allBullets = [];
                this.animationArray = [];
                h = this.labelPosition;
                h || (f = this.valueAxis.stackType, h = "top", "column" == this.type && (a.rotate && (h = "right"), "100%" == f || "regular" == f) && (h = "middle"), this.labelPosition = h);
                d.ifArray(this.data) && (a = !1, "xy" == b ? this.xAxis.axisCreated && this.yAxis.axisCreated && (a = !0) : this.valueAxis.axisCreated && (a = !0), !this.hidden && a && this.createGraph());
                e.push(c)
            }
        }, createGraph: function () {
            var a = this, b = a.chart;
            a.startAlpha = b.startAlpha;
            a.seqAn = b.sequencedAnimation;
            a.baseCoord = a.valueAxis.baseCoord;
            void 0 === a.fillAlphas && (a.fillAlphas = 0);
            a.bulletColorR = a.bulletColor;
            void 0 === a.bulletColorR && (a.bulletColorR = a.lineColorR, a.bulletColorNegative = a.negativeLineColor);
            void 0 === a.bulletAlpha && (a.bulletAlpha = a.lineAlpha);
            if ("step" == c || d.VML) a.noRounding = !1;
            var c = b.type;
            "gantt" == c && (c = "serial");
            clearTimeout(a.playedTO);
            if (!isNaN(a.valueAxis.min) && !isNaN(a.valueAxis.max)) {
                switch (c) {
                    case"serial":
                        a.categoryAxis && (a.createSerialGraph(), "candlestick" == a.type && 1 > a.valueAxis.minMaxMultiplier && a.positiveClip(a.set));
                        break;
                    case"radar":
                        a.createRadarGraph();
                        break;
                    case"xy":
                        a.createXYGraph()
                }
                a.playedTO = setTimeout(function () {
                    a.setAnimationPlayed.call(a)
                }, 500 * a.chart.startDuration)
            }
        }, setAnimationPlayed: function () {
            this.animationPlayed = !0
        }, createXYGraph: function () {
            var a = [], b = [], c = this.xAxis, e = this.yAxis;
            this.pmh = e.height;
            this.pmw = c.width;
            this.pmy = this.pmx = 0;
            var d;
            for (d = this.start; d <= this.end; d++) {
                var f = this.data[d].axes[c.id].graphs[this.id], g = f.values, k = g.x, l = g.y,
                    g = c.getCoordinate(k, this.noRounding), m = e.getCoordinate(l, this.noRounding);
                if (!isNaN(k) && !isNaN(l) && (a.push(g), b.push(m), f.x = g, f.y = m, k = this.createBullet(f, g, m, d), l = this.labelText)) {
                    var l = this.createLabel(f, l), n = 0;
                    k && (n = k.size);
                    this.positionLabel(f, g, m, l, n)
                }
            }
            this.drawLineGraph(a, b);
            this.launchAnimation()
        }, createRadarGraph: function () {
            var a = this.valueAxis.stackType, b = [], c = [], e = [], d = [], f, g, k, l, m;
            for (m = this.start; m <= this.end; m++) {
                var n = this.data[m].axes[this.valueAxis.id].graphs[this.id], q, p;
                "none" == a || "3d" == a ? q = n.values.value : (q = n.values.close, p = n.values.open);
                if (isNaN(q)) this.connect || (this.drawLineGraph(b, c, e, d), b = [], c = [], e = [], d = []); else {
                    var t = this.valueAxis.getCoordinate(q, this.noRounding) - this.height,
                        t = t * this.valueAxis.rMultiplier, r = -360 / (this.end - this.start + 1) * m;
                    "middle" == this.valueAxis.pointPosition && (r -= 180 / (this.end - this.start + 1));
                    q = t * Math.sin(r / 180 * Math.PI);
                    t *= Math.cos(r / 180 * Math.PI);
                    b.push(q);
                    c.push(t);
                    if (!isNaN(p)) {
                        var u = this.valueAxis.getCoordinate(p, this.noRounding) - this.height,
                            u = u * this.valueAxis.rMultiplier, w = u * Math.sin(r / 180 * Math.PI),
                            r = u * Math.cos(r / 180 * Math.PI);
                        e.push(w);
                        d.push(r);
                        isNaN(k) && (k = w);
                        isNaN(l) && (l = r)
                    }
                    r = this.createBullet(n, q, t, m);
                    n.x = q;
                    n.y = t;
                    if (w = this.labelText) w = this.createLabel(n, w), u = 0, r && (u = r.size), this.positionLabel(n, q, t, w, u);
                    isNaN(f) && (f = q);
                    isNaN(g) && (g = t)
                }
            }
            b.push(f);
            c.push(g);
            isNaN(k) || (e.push(k), d.push(l));
            this.drawLineGraph(b, c, e, d);
            this.launchAnimation()
        }, positionLabel: function (a, b, c, e, d) {
            if (e) {
                var f = this.chart, g = this.valueAxis, k = "middle", l = !1, m = this.labelPosition, n = e.getBBox(),
                    q = this.chart.rotate, p = a.isNegative;
                c -= n.height / 4 / 2;
                void 0 !== a.labelIsNegative && (p = a.labelIsNegative);
                switch (m) {
                    case"right":
                        m = q ? p ? "left" : "right" : "right";
                        break;
                    case"top":
                        m = q ? "top" : p ? "bottom" : "top";
                        break;
                    case"bottom":
                        m = q ? "bottom" : p ? "top" : "bottom";
                        break;
                    case"left":
                        m = q ? p ? "right" : "left" : "left"
                }
                var t = a.columnGraphics, r = 0, u = 0;
                t && (r = t.x, u = t.y);
                var w = this.labelOffset;
                switch (m) {
                    case"right":
                        k = "start";
                        b += d / 2 + w;
                        break;
                    case"top":
                        c = g.reversed ? c + (d / 2 + n.height / 2 + w) : c - (d / 2 + n.height / 2 + w);
                        break;
                    case"bottom":
                        c = g.reversed ? c - (d / 2 + n.height / 2 + w) : c + (d / 2 + n.height / 2 + w);
                        break;
                    case"left":
                        k = "end";
                        b -= d / 2 + w;
                        break;
                    case"inside":
                        "column" == this.type && (l = !0, q ? p ? (k = "end", b = r - 3 - w) : (k = "start", b = r + 3 + w) : c = p ? u + 7 + w : u - 10 - w);
                        break;
                    case"middle":
                        "column" == this.type && (l = !0, q ? b -= (b - r) / 2 + w - 3 : c -= (c - u) / 2 + w - 3)
                }
                "auto" != this.labelAnchor && (k = this.labelAnchor);
                e.attr({"text-anchor": k});
                this.labelRotation && e.rotate(this.labelRotation);
                e.translate(b, c);
                !this.showAllValueLabels && t && l && (n = e.getBBox(), n.height > a.columnHeight || n.width > a.columnWidth) && (e.remove(), e = null);
                e && "radar" != f.type && (0 > b || b > this.width || 0 > c || c > this.height) && (e.remove(), e = null);
                if (e && ("serial" == f.type || "gantt" == f.type)) if (q) {
                    if (0 > c || c > this.height) e.remove(), e = null
                } else if (0 > b || b > this.width) e.remove(), e = null;
                e && this.allBullets.push(e);
                return e
            }
        }, getGradRotation: function () {
            var a = 270;
            "horizontal" == this.gradientOrientation && (a = 0);
            return this.gradientRotation = a
        }, createSerialGraph: function () {
            this.dashLengthSwitched = this.fillColorsSwitched = this.lineColorSwitched = void 0;
            var a = this.chart, b = this.id, c = this.index, e = this.data, h = this.chart.container,
                f = this.valueAxis, g = this.type, k = this.columnWidthReal, l = this.showBulletsAt;
            isNaN(this.columnWidth) || (k = this.columnWidth);
            isNaN(k) && (k = .8);
            var m = this.useNegativeColorIfDown, n = this.width, q = this.height, p = this.y, t = this.rotate,
                r = this.columnCount, u = d.toCoordinate(this.cornerRadiusTop, k / 2), w = this.connect, y = [], x = [],
                A, z, B, C, D = this.chart.graphs.length, L, I = this.dx / this.tcc, S = this.dy /
                this.tcc, O = f.stackType, Q = this.start, ia = this.end, H = this.scrollbar, Z = "graph-column-";
            H && (Z = "scrollbar-graph-column-");
            var va = this.categoryAxis, ma = this.baseCoord, Oa = this.negativeBase, ea = this.columnIndex,
                ca = this.lineThickness, X = this.lineAlpha, ya = this.lineColorR, da = this.dashLength, fa = this.set,
                za, ga = this.getGradRotation(), T = this.chart.columnSpacing, Y = va.cellWidth, Ca = (Y * k - r) / r;
            T > Ca && (T = Ca);
            var G, v, na, ha = q, Pa = n, ba = 0, tb = 0, ub, vb, gb, hb, wb = this.fillColorsR,
                Qa = this.negativeFillColors, Ja = this.negativeLineColor,
                Ya = this.fillAlphas, Za = this.negativeFillAlphas;
            "object" == typeof Ya && (Ya = Ya[0]);
            "object" == typeof Za && (Za = Za[0]);
            var xb = this.noRounding;
            "step" == g && (xb = !1);
            var ib = f.getCoordinate(f.min);
            f.logarithmic && (ib = f.getCoordinate(f.minReal));
            this.minCoord = ib;
            this.resetBullet && (this.bullet = "none");
            if (!(H || "line" != g && "smoothedLine" != g && "step" != g || (1 == e.length && "step" != g && "none" == this.bullet && (this.bullet = "round", this.resetBullet = !0), !Qa && void 0 == Ja || m))) {
                var Ua = Oa;
                Ua > f.max && (Ua = f.max);
                Ua < f.min && (Ua = f.min);
                f.logarithmic && (Ua = f.minReal);
                var Ka = f.getCoordinate(Ua), Lb = f.getCoordinate(f.max);
                t ? (ha = q, Pa = Math.abs(Lb - Ka), ub = q, vb = Math.abs(ib - Ka), hb = tb = 0, f.reversed ? (ba = 0, gb = Ka) : (ba = Ka, gb = 0)) : (Pa = n, ha = Math.abs(Lb - Ka), vb = n, ub = Math.abs(ib - Ka), gb = ba = 0, f.reversed ? (hb = p, tb = Ka) : hb = Ka)
            }
            var La = Math.round;
            this.pmx = La(ba);
            this.pmy = La(tb);
            this.pmh = La(ha);
            this.pmw = La(Pa);
            this.nmx = La(gb);
            this.nmy = La(hb);
            this.nmh = La(ub);
            this.nmw = La(vb);
            d.isModern || (this.nmy = this.nmx = 0, this.nmh = this.height);
            this.clustered || (r = 1);
            k = "column" == g ? (Y * k - T * (r - 1)) /
                r : Y * k;
            1 > k && (k = 1);
            var Mb = this.fixedColumnWidth;
            isNaN(Mb) || (k = Mb);
            var K;
            if ("line" == g || "step" == g || "smoothedLine" == g) {
                if (0 < Q) {
                    for (K = Q - 1; -1 < K; K--) if (G = e[K], v = G.axes[f.id].graphs[b], na = v.values.value, !isNaN(na)) {
                        Q = K;
                        break
                    }
                    if (this.lineColorField) for (K = Q; -1 < K; K--) if (G = e[K], v = G.axes[f.id].graphs[b], v.lineColor) {
                        this.bulletColorSwitched = this.lineColorSwitched = v.lineColor;
                        break
                    }
                    if (this.fillColorsField) for (K = Q; -1 < K; K--) if (G = e[K], v = G.axes[f.id].graphs[b], v.fillColors) {
                        this.fillColorsSwitched = v.fillColors;
                        break
                    }
                    if (this.dashLengthField) for (K = Q; -1 < K; K--) if (G = e[K], v = G.axes[f.id].graphs[b], !isNaN(v.dashLength)) {
                        this.dashLengthSwitched = v.dashLength;
                        break
                    }
                }
                if (ia < e.length - 1) for (K = ia + 1; K < e.length; K++) if (G = e[K], v = G.axes[f.id].graphs[b], na = v.values.value, !isNaN(na)) {
                    ia = K;
                    break
                }
            }
            ia < e.length - 1 && ia++;
            var U = [], V = [], Ra = !1;
            if ("line" == g || "step" == g || "smoothedLine" == g) if (this.stackable && "regular" == O || "100%" == O || this.fillToGraph) Ra = !0;
            var Nb = this.noStepRisers, jb = -1E3, kb = -1E3, lb = this.minDistance, Sa = !0, $a = !1;
            for (K = Q; K <= ia; K++) {
                G = e[K];
                v = G.axes[f.id].graphs[b];
                v.index = K;
                var ab, Ta = NaN;
                if (m && void 0 == this.openField) for (var yb = K + 1; yb < e.length && (!e[yb] || !(ab = e[K + 1].axes[f.id].graphs[b]) || !ab.values || (Ta = ab.values.value, isNaN(Ta))); yb++) ;
                var R, P, J, aa, ja = NaN, E = NaN, F = NaN, N = NaN, M = NaN, pa = NaN, qa = NaN, ra = NaN, sa = NaN,
                    wa = NaN, Da = NaN, ka = NaN, la = NaN, W = NaN, zb = NaN, Ab = NaN, ta = NaN, ua = void 0, Ma = wb,
                    Va = Ya, Ha = ya, Aa, Ea, Bb = this.proCandlesticks, mb = this.topRadius, Fa = q - 1, oa = n - 1,
                    bb = this.pattern;
                void 0 != v.pattern && (bb = v.pattern);
                isNaN(v.alpha) || (Va = v.alpha);
                isNaN(v.dashLength) || (da = v.dashLength);
                var Ia = v.values;
                f.recalculateToPercents && (Ia = v.percents);
                if (Ia) {
                    W = this.stackable && "none" != O && "3d" != O ? Ia.close : Ia.value;
                    if ("candlestick" == g || "ohlc" == g) W = Ia.close, Ab = Ia.low, qa = f.getCoordinate(Ab), zb = Ia.high, sa = f.getCoordinate(zb);
                    ta = Ia.open;
                    F = f.getCoordinate(W, xb);
                    isNaN(ta) || (M = f.getCoordinate(ta, xb), m && "regular" != O && "100%" != O && (Ta = ta, ta = M = NaN));
                    m && (void 0 == this.openField ? ab && (ab.isNegative = Ta < W ? !0 : !1, isNaN(Ta) && (v.isNegative = !Sa)) : v.isNegative = Ta > W ? !0 : !1);
                    if (!H) switch (this.showBalloonAt) {
                        case"close":
                            v.y = F;
                            break;
                        case"open":
                            v.y = M;
                            break;
                        case"high":
                            v.y = sa;
                            break;
                        case"low":
                            v.y = qa
                    }
                    var ja = G.x[va.id], Wa = this.periodSpan - 1;
                    "step" != g || isNaN(G.cellWidth) || (Y = G.cellWidth);
                    var xa = Math.floor(Y / 2) + Math.floor(Wa * Y / 2), Ga = xa, nb = 0;
                    "left" == this.stepDirection && (nb = (2 * Y + Wa * Y) / 2, ja -= nb);
                    "center" == this.stepDirection && (nb = Y / 2, ja -= nb);
                    "start" == this.pointPosition && (ja -= Y / 2 + Math.floor(Wa * Y / 2), xa = 0, Ga = Math.floor(Y) + Math.floor(Wa * Y));
                    "end" == this.pointPosition && (ja += Y / 2 + Math.floor(Wa * Y / 2), xa = Math.floor(Y) + Math.floor(Wa * Y), Ga =
                        0);
                    if (Nb) {
                        var Cb = this.columnWidth;
                        isNaN(Cb) || (xa *= Cb, Ga *= Cb)
                    }
                    H || (v.x = ja);
                    -1E5 > ja && (ja = -1E5);
                    ja > n + 1E5 && (ja = n + 1E5);
                    t ? (E = F, N = M, M = F = ja, isNaN(ta) && !this.fillToGraph && (N = ma), pa = qa, ra = sa) : (N = E = ja, isNaN(ta) && !this.fillToGraph && (M = ma));
                    if (!Bb && W < ta || Bb && W < za) v.isNegative = !0, Qa && (Ma = Qa), Za && (Va = Za), void 0 != Ja && (Ha = Ja);
                    $a = !1;
                    isNaN(W) || (m ? W > Ta ? (Sa && ($a = !0), Sa = !1) : (Sa || ($a = !0), Sa = !0) : v.isNegative = W < Oa ? !0 : !1, za = W);
                    var Ob = !1;
                    H && a.chartScrollbar.ignoreCustomColors && (Ob = !0);
                    Ob || (void 0 != v.color && (Ma = v.color), v.fillColors && (Ma = v.fillColors));
                    switch (g) {
                        case"line":
                            if (isNaN(W)) w || (this.drawLineGraph(y, x, U, V), y = [], x = [], U = [], V = []); else {
                                if (Math.abs(E - jb) >= lb || Math.abs(F - kb) >= lb) y.push(E), x.push(F), jb = E, kb = F;
                                wa = E;
                                Da = F;
                                ka = E;
                                la = F;
                                !Ra || isNaN(M) || isNaN(N) || (U.push(N), V.push(M));
                                if ($a || void 0 != v.lineColor && v.lineColor != this.lineColorSwitched || void 0 != v.fillColors && v.fillColors != this.fillColorsSwitched || !isNaN(v.dashLength)) this.drawLineGraph(y, x, U, V), y = [E], x = [F], U = [], V = [], !Ra || isNaN(M) || isNaN(N) || (U.push(N), V.push(M)), m ? Sa ? (this.lineColorSwitched = ya, this.fillColorsSwitched = wb) : (this.lineColorSwitched = Ja, this.fillColorsSwitched = Qa) : (this.lineColorSwitched = v.lineColor, this.fillColorsSwitched = v.fillColors), this.dashLengthSwitched = v.dashLength;
                                v.gap && (this.drawLineGraph(y, x, U, V), y = [], x = [], U = [], V = [])
                            }
                            break;
                        case"smoothedLine":
                            if (isNaN(W)) w || (this.drawSmoothedGraph(y, x, U, V), y = [], x = [], U = [], V = []); else {
                                if (Math.abs(E - jb) >= lb || Math.abs(F - kb) >= lb) y.push(E), x.push(F), jb = E, kb = F;
                                wa = E;
                                Da = F;
                                ka = E;
                                la = F;
                                !Ra || isNaN(M) || isNaN(N) || (U.push(N), V.push(M));
                                void 0 == v.lineColor && void 0 == v.fillColors && isNaN(v.dashLength) || (this.drawSmoothedGraph(y, x, U, V), y = [E], x = [F], U = [], V = [], !Ra || isNaN(M) || isNaN(N) || (U.push(N), V.push(M)), this.lineColorSwitched = v.lineColor, this.fillColorsSwitched = v.fillColors, this.dashLengthSwitched = v.dashLength);
                                v.gap && (this.drawSmoothedGraph(y, x, U, V), y = [], x = [], U = [], V = [])
                            }
                            break;
                        case"step":
                            if (!isNaN(W)) {
                                t ? (isNaN(A) || (y.push(A), x.push(F - xa)), x.push(F - xa), y.push(E), x.push(F + Ga), y.push(E), !Ra || isNaN(M) || isNaN(N) || (isNaN(B) || (U.push(B), V.push(M -
                                    xa)), U.push(N), V.push(M - xa), U.push(N), V.push(M + Ga))) : (isNaN(z) || (x.push(z), y.push(E - xa)), y.push(E - xa), x.push(F), y.push(E + Ga), x.push(F), !Ra || isNaN(M) || isNaN(N) || (isNaN(C) || (U.push(N - xa), V.push(C)), U.push(N - xa), V.push(M), U.push(N + Ga), V.push(M)));
                                A = E;
                                z = F;
                                B = N;
                                C = M;
                                wa = E;
                                Da = F;
                                ka = E;
                                la = F;
                                if ($a || void 0 != v.lineColor || void 0 != v.fillColors || !isNaN(v.dashLength)) {
                                    var cc = y[y.length - 2], dc = x[x.length - 2];
                                    y.pop();
                                    x.pop();
                                    this.drawLineGraph(y, x, U, V);
                                    y = [cc];
                                    x = [dc];
                                    t ? (x.push(F + Ga), y.push(E)) : (y.push(E + Ga), x.push(F));
                                    U = [];
                                    V = [];
                                    this.lineColorSwitched = v.lineColor;
                                    this.fillColorsSwitched = v.fillColors;
                                    this.dashLengthSwitched = v.dashLength;
                                    m && (Sa ? (this.lineColorSwitched = ya, this.fillColorsSwitched = wb) : (this.lineColorSwitched = Ja, this.fillColorsSwitched = Qa))
                                }
                                if (Nb || v.gap) A = z = NaN, this.drawLineGraph(y, x, U, V), y = [], x = [], U = [], V = []
                            } else if (!w) {
                                if (1 >= this.periodSpan || 1 < this.periodSpan && E - A > xa + Ga) A = z = NaN;
                                this.drawLineGraph(y, x, U, V);
                                y = [];
                                x = [];
                                U = [];
                                V = []
                            }
                            break;
                        case"column":
                            Aa = Ha;
                            void 0 != v.lineColor && (Aa = v.lineColor);
                            if (!isNaN(W)) {
                                m || (v.isNegative = W < Oa ? !0 : !1);
                                v.isNegative && (Qa && (Ma = Qa), void 0 != Ja && (Aa = Ja));
                                var Pb = f.min, Qb = f.max, ob = ta;
                                isNaN(ob) && (ob = Oa);
                                if (!(W < Pb && ob < Pb || W > Qb && ob > Qb)) {
                                    var Ba;
                                    if (t) {
                                        "3d" == O ? (P = F - (r / 2 - this.depthCount + 1) * (k + T) + T / 2 + S * ea, R = N + I * ea, Ba = ea) : (P = Math.floor(F - (r / 2 - ea) * (k + T) + T / 2), R = N, Ba = 0);
                                        J = k;
                                        wa = E;
                                        Da = P + k / 2;
                                        ka = E;
                                        la = P + k / 2;
                                        P + J > q + Ba * S && (J = q - P + Ba * S);
                                        P < Ba * S && (J += P, P = Ba * S);
                                        aa = E - N;
                                        var ec = R;
                                        R = d.fitToBounds(R, 0, n);
                                        aa += ec - R;
                                        aa = d.fitToBounds(aa, -R, n - R + I * ea);
                                        v.labelIsNegative = 0 > aa ? !0 : !1;
                                        0 === aa && 1 / W === 1 / -0 && (v.labelIsNegative = !0);
                                        isNaN(G.percentWidthValue) || (J = this.height * G.percentWidthValue / 100, P = ja - J / 2, Da = P + J / 2);
                                        J = d.roundTo(J, 2);
                                        aa = d.roundTo(aa, 2);
                                        P < q && 0 < J && (ua = new d.Cuboid(h, aa, J, I - a.d3x, S - a.d3y, Ma, Va, ca, Aa, X, ga, u, t, da, bb, mb, Z), v.columnWidth = Math.abs(aa), v.columnHeight = Math.abs(J))
                                    } else {
                                        "3d" == O ? (R = E - (r / 2 - this.depthCount + 1) * (k + T) + T / 2 + I * ea, P = M + S * ea, Ba = ea) : (R = E - (r / 2 - ea) * (k + T) + T / 2, P = M, Ba = 0);
                                        J = k;
                                        wa = R + k / 2;
                                        Da = F;
                                        ka = R + k / 2;
                                        la = F;
                                        R + J > n + Ba * I && (J = n - R + Ba * I);
                                        R < Ba * I && (J += R - Ba * I, R = Ba * I);
                                        aa = F - M;
                                        v.labelIsNegative = 0 < aa ? !0 : !1;
                                        0 === aa && -0 === W && (v.labelIsNegative = !0);
                                        var fc = P;
                                        P = d.fitToBounds(P, this.dy, q);
                                        aa += fc - P;
                                        aa = d.fitToBounds(aa, -P + S * ea, q - P);
                                        isNaN(G.percentWidthValue) || (J = this.width * G.percentWidthValue / 100, R = ja - J / 2, wa = R + J / 2);
                                        J = d.roundTo(J, 2);
                                        aa = d.roundTo(aa, 2);
                                        R < n + ea * I && 0 < J && (this.showOnAxis && (P -= S / 2), ua = new d.Cuboid(h, J, aa, I - a.d3x, S - a.d3y, Ma, Va, ca, Aa, this.lineAlpha, ga, u, t, da, bb, mb, Z), v.columnHeight = Math.abs(aa), v.columnWidth = Math.abs(J))
                                    }
                                }
                                if (ua) {
                                    Ea = ua.set;
                                    d.setCN(a, ua.set, "graph-" + this.type);
                                    d.setCN(a, ua.set, "graph-" + this.id);
                                    v.className && d.setCN(a, ua.set, v.className, !0);
                                    v.columnGraphics = Ea;
                                    R = d.roundTo(R, 2);
                                    P = d.roundTo(P, 2);
                                    Ea.translate(R, P);
                                    (v.url || this.showHandOnHover) && Ea.setAttr("cursor", "pointer");
                                    if (!H) {
                                        "none" == O && (L = t ? (this.end + 1 - K) * D - c : D * K + c);
                                        "3d" == O && (t ? (L = (this.end + 1 - K) * D - c - 1E3 * this.depthCount, wa += I * this.columnIndex, ka += I * this.columnIndex, v.y += I * this.columnIndex) : (L = (D - c) * (K + 1) + 1E3 * this.depthCount, Da += S * this.columnIndex, la += S * this.columnIndex, v.y += S * this.columnIndex));
                                        if ("regular" == O || "100%" == O) L = t ? 0 < Ia.value ? (this.end + 1 -
                                            K) * D + c : (this.end + 1 - K) * D - c : 0 < Ia.value ? D * K + c : D * K - c;
                                        this.columnsArray.push({column: ua, depth: L});
                                        v.x = t ? P + J / 2 : R + J / 2;
                                        this.ownColumns.push(ua);
                                        this.animateColumns(ua, K, E, N, F, M);
                                        this.addListeners(Ea, v)
                                    }
                                    this.columnsSet.push(Ea)
                                }
                            }
                            break;
                        case"candlestick":
                            if (!isNaN(ta) && !isNaN(W)) {
                                var Xa, cb;
                                Aa = Ha;
                                void 0 != v.lineColor && (Aa = v.lineColor);
                                wa = E;
                                la = Da = F;
                                ka = E;
                                if (t) {
                                    "open" == l && (ka = N);
                                    "high" == l && (ka = ra);
                                    "low" == l && (ka = pa);
                                    E = d.fitToBounds(E, 0, oa);
                                    N = d.fitToBounds(N, 0, oa);
                                    pa = d.fitToBounds(pa, 0, oa);
                                    ra = d.fitToBounds(ra, 0, oa);
                                    if (0 === E && 0 === N && 0 === pa && 0 === ra) continue;
                                    if (E == oa && N == oa && pa == oa && ra == oa) continue;
                                    P = F - k / 2;
                                    R = N;
                                    J = k;
                                    P + J > q && (J = q - P);
                                    0 > P && (J += P, P = 0);
                                    if (P < q && 0 < J) {
                                        var Db, Eb;
                                        W > ta ? (Db = [E, ra], Eb = [N, pa]) : (Db = [N, ra], Eb = [E, pa]);
                                        !isNaN(ra) && !isNaN(pa) && F < q && 0 < F && (Xa = d.line(h, Db, [F, F], Aa, X, ca), cb = d.line(h, Eb, [F, F], Aa, X, ca));
                                        aa = E - N;
                                        ua = new d.Cuboid(h, aa, J, I, S, Ma, Ya, ca, Aa, X, ga, u, t, da, bb, mb, Z)
                                    }
                                } else {
                                    "open" == l && (la = M);
                                    "high" == l && (la = sa);
                                    "low" == l && (la = qa);
                                    F = d.fitToBounds(F, 0, Fa);
                                    M = d.fitToBounds(M, 0, Fa);
                                    qa = d.fitToBounds(qa, 0, Fa);
                                    sa = d.fitToBounds(sa, 0, Fa);
                                    if (0 === F && 0 === M && 0 === qa && 0 === sa) continue;
                                    if (F == Fa && M == Fa && qa == Fa && sa == Fa) continue;
                                    R = E - k / 2;
                                    P = M + ca / 2;
                                    J = k;
                                    R + J > n && (J = n - R);
                                    0 > R && (J += R, R = 0);
                                    aa = F - M;
                                    if (R < n && 0 < J) {
                                        Bb && W >= ta && (Va = 0);
                                        var ua = new d.Cuboid(h, J, aa, I, S, Ma, Va, ca, Aa, X, ga, u, t, da, bb, mb, Z),
                                            Fb, Gb;
                                        W > ta ? (Fb = [F, sa], Gb = [M, qa]) : (Fb = [M, sa], Gb = [F, qa]);
                                        !isNaN(sa) && !isNaN(qa) && E < n && 0 < E && (Xa = d.line(h, [E, E], Fb, Aa, X, ca), cb = d.line(h, [E, E], Gb, Aa, X, ca), d.setCN(a, Xa, this.bcn + "line-high"), v.className && d.setCN(a, Xa, v.className, !0), d.setCN(a, cb, this.bcn + "line-low"), v.className && d.setCN(a, cb, v.className, !0))
                                    }
                                }
                                ua && (Ea = ua.set, v.columnGraphics = Ea, fa.push(Ea), Ea.translate(R, P - ca / 2), (v.url || this.showHandOnHover) && Ea.setAttr("cursor", "pointer"), Xa && (fa.push(Xa), fa.push(cb)), H || (v.x = t ? P + J / 2 : R + J / 2, this.animateColumns(ua, K, E, N, F, M), this.addListeners(Ea, v)))
                            }
                            break;
                        case"ohlc":
                            if (!(isNaN(ta) || isNaN(zb) || isNaN(Ab) || isNaN(W))) {
                                var Rb = h.set();
                                fa.push(Rb);
                                W < ta && (v.isNegative = !0, void 0 != Ja && (Ha = Ja));
                                var pb, qb, rb;
                                if (t) {
                                    la = F;
                                    ka = E;
                                    "open" == l && (ka = N);
                                    "high" == l && (ka = ra);
                                    "low" == l && (ka = pa);
                                    pa = d.fitToBounds(pa, 0, oa);
                                    ra = d.fitToBounds(ra, 0, oa);
                                    if (0 === E && 0 === N && 0 === pa && 0 === ra) continue;
                                    if (E == oa && N == oa && pa == oa && ra == oa) continue;
                                    var Hb = F - k / 2, Hb = d.fitToBounds(Hb, 0, q), Sb = d.fitToBounds(F, 0, q),
                                        Ib = F + k / 2, Ib = d.fitToBounds(Ib, 0, q);
                                    0 <= N && N <= oa && (qb = d.line(h, [N, N], [Hb, Sb], Ha, X, ca, da));
                                    0 < F && F < q && (pb = d.line(h, [pa, ra], [F, F], Ha, X, ca, da));
                                    0 <= E && E <= oa && (rb = d.line(h, [E, E], [Sb, Ib], Ha, X, ca, da))
                                } else {
                                    la = F;
                                    "open" == l && (la = M);
                                    "high" == l && (la = sa);
                                    "low" == l && (la = qa);
                                    var ka = E, qa = d.fitToBounds(qa, 0, Fa), sa = d.fitToBounds(sa, 0, Fa),
                                        Jb = E - k / 2, Jb = d.fitToBounds(Jb, 0, n), Tb = d.fitToBounds(E, 0, n),
                                        Kb = E + k / 2, Kb = d.fitToBounds(Kb, 0, n);
                                    0 <= M && M <= Fa && (qb = d.line(h, [Jb, Tb], [M, M], Ha, X, ca, da));
                                    0 < E && E < n && (pb = d.line(h, [E, E], [qa, sa], Ha, X, ca, da));
                                    0 <= F && F <= Fa && (rb = d.line(h, [Tb, Kb], [F, F], Ha, X, ca, da))
                                }
                                fa.push(qb);
                                fa.push(pb);
                                fa.push(rb);
                                d.setCN(a, qb, this.bcn + "stroke-open");
                                d.setCN(a, rb, this.bcn + "stroke-close");
                                d.setCN(a, pb, this.bcn + "stroke");
                                v.className && d.setCN(a, Rb, v.className, !0);
                                wa = E;
                                Da = F
                            }
                    }
                    if (!H && !isNaN(W)) {
                        var Ub = this.hideBulletsCount;
                        if (this.end - this.start <= Ub || 0 === Ub) {
                            var Vb = this.createBullet(v, ka, la, K), Wb = this.labelText;
                            if (Wb && !isNaN(wa) && !isNaN(wa)) {
                                var gc = this.createLabel(v, Wb), Xb = 0;
                                Vb && (Xb = Vb.size);
                                this.positionLabel(v, wa, Da, gc, Xb)
                            }
                            if ("regular" == O || "100%" == O) {
                                var Yb = f.totalText;
                                if (Yb) {
                                    var Na = this.createLabel(v, Yb, f.totalTextColor);
                                    d.setCN(a, Na, this.bcn + "label-total");
                                    this.allBullets.push(Na);
                                    if (Na) {
                                        var Zb = Na.getBBox(), $b = Zb.width, ac = Zb.height, db, eb,
                                            sb = f.totalTextOffset, bc = f.totals[K];
                                        bc && bc.remove();
                                        var fb = 0;
                                        "column" != g && (fb = this.bulletSize);
                                        t ? (eb = Da, db = 0 > W ? E - $b / 2 - 2 - fb - sb : E + $b / 2 + 3 + fb + sb) : (db = wa, eb = 0 > W ? F + ac / 2 + fb + sb : F - ac / 2 - 3 - fb - sb);
                                        Na.translate(db, eb);
                                        f.totals[K] = Na;
                                        t ? (0 > eb || eb > q) && Na.remove() : (0 > db || db > n) && Na.remove()
                                    }
                                }
                            }
                        }
                    }
                }
            }
            if ("line" == g || "step" == g || "smoothedLine" == g) "smoothedLine" == g ? this.drawSmoothedGraph(y, x, U, V) : this.drawLineGraph(y, x, U, V), H || this.launchAnimation();
            this.bulletsHidden && this.hideBullets();
            this.customBulletsHidden && this.hideCustomBullets()
        }, animateColumns: function (a, b) {
            var c = this, e = c.chart.startDuration;
            0 < e && !c.animationPlayed && (c.seqAn ? (a.set.hide(), c.animationArray.push(a), e = setTimeout(function () {
                c.animate.call(c)
            }, e / (c.end - c.start + 1) * (b - c.start) * 1E3), c.timeOuts.push(e)) : c.animate(a), c.chart.animatable.push(a))
        }, createLabel: function (a, b, c) {
            var e = this.chart, h = a.labelColor;
            h || (h = this.color);
            h || (h = e.color);
            c && (h = c);
            c = this.fontSize;
            void 0 === c && (this.fontSize = c = e.fontSize);
            var f = this.labelFunction;
            b = e.formatString(b, a);
            b = d.cleanFromEmpty(b);
            f && (b = f(a, b));
            if (void 0 !== b && "" !== b) return a = d.text(this.container, b, h, e.fontFamily, c), a.node.style.pointerEvents = "none", d.setCN(e, a, this.bcn + "label"), this.bulletSet.push(a), a
        }, positiveClip: function (a) {
            a.clipRect(this.pmx, this.pmy, this.pmw, this.pmh)
        }, negativeClip: function (a) {
            a.clipRect(this.nmx, this.nmy, this.nmw, this.nmh)
        }, drawLineGraph: function (a, b, c, e) {
            var h = this;
            if (1 < a.length) {
                var f = h.noRounding, g = h.set, k = h.chart, l = h.container, m = l.set(), n = l.set();
                g.push(n);
                g.push(m);
                var q = h.lineAlpha, p = h.lineThickness, g = h.fillAlphas, t = h.lineColorR, r = h.negativeLineAlpha;
                isNaN(r) && (r = q);
                var u = h.lineColorSwitched;
                u && (t = u);
                var u = h.fillColorsR, w = h.fillColorsSwitched;
                w && (u = w);
                var y = h.dashLength;
                (w = h.dashLengthSwitched) && (y = w);
                var w = h.negativeLineColor, x = h.negativeFillColors, A = h.negativeFillAlphas, z = h.baseCoord;
                0 !== h.negativeBase && (z = h.valueAxis.getCoordinate(h.negativeBase, f), z > h.height && (z = h.height), 0 > z && (z = 0));
                q = d.line(l, a, b, t, q, p, y, !1, !0, f);
                d.setCN(k, q, h.bcn + "stroke");
                m.push(q);
                m.click(function (a) {
                    h.handleGraphEvent(a, "clickGraph")
                }).mouseover(function (a) {
                    h.handleGraphEvent(a, "rollOverGraph")
                }).mouseout(function (a) {
                    h.handleGraphEvent(a, "rollOutGraph")
                }).touchmove(function (a) {
                    h.chart.handleMouseMove(a)
                }).touchend(function (a) {
                    h.chart.handleTouchEnd(a)
                });
                void 0 === w || h.useNegativeColorIfDown || (p = d.line(l, a, b, w, r, p, y, !1, !0, f), d.setCN(k, p, h.bcn + "stroke"), d.setCN(k, p, h.bcn + "stroke-negative"), n.push(p));
                if (0 < g || 0 < A) if (p = a.join(";").split(";"), r = b.join(";").split(";"), q = k.type, "serial" == q || "radar" == q ? 0 < c.length ? (c.reverse(), e.reverse(), p = a.concat(c), r = b.concat(e)) : "radar" == q ? (r.push(0), p.push(0)) : h.rotate ? (r.push(r[r.length - 1]), p.push(z), r.push(r[0]), p.push(z), r.push(r[0]), p.push(p[0])) : (p.push(p[p.length - 1]), r.push(z), p.push(p[0]), r.push(z), p.push(a[0]), r.push(r[0])) : "xy" == q && (b = h.fillToAxis) && (d.isString(b) && (b = k.getValueAxisById(b)), "H" == b.orientation ? (z = "top" == b.position ? 0 : b.height, p.push(p[p.length - 1]), r.push(z), p.push(p[0]), r.push(z), p.push(a[0]), r.push(r[0])) : (z = "left" == b.position ? 0 : b.width, r.push(r[r.length - 1]), p.push(z), r.push(r[0]), p.push(z), r.push(r[0]), p.push(p[0]))), a = h.gradientRotation, 0 < g && (b = d.polygon(l, p, r, u, g, 1, "#000", 0, a, f), b.pattern(h.pattern, NaN, k.path), d.setCN(k, b, h.bcn + "fill"), m.push(b)), x || void 0 !== w) isNaN(A) && (A = g), x || (x = w), f = d.polygon(l, p, r, x, A, 1, "#000", 0, a, f), d.setCN(k, f, h.bcn + "fill"), d.setCN(k, f, h.bcn + "fill-negative"), f.pattern(h.pattern, NaN, k.path), n.push(f), n.click(function (a) {
                    h.handleGraphEvent(a, "clickGraph")
                }).mouseover(function (a) {
                    h.handleGraphEvent(a, "rollOverGraph")
                }).mouseout(function (a) {
                    h.handleGraphEvent(a, "rollOutGraph")
                }).touchmove(function (a) {
                    h.chart.handleMouseMove(a)
                }).touchend(function (a) {
                    h.chart.handleTouchEnd(a)
                });
                h.applyMask(n, m)
            }
        }, applyMask: function (a, b) {
            var c = a.length();
            "serial" != this.chart.type || this.scrollbar || (this.positiveClip(b), 0 < c && this.negativeClip(a))
        }, drawSmoothedGraph: function (a, b, c, e) {
            if (1 < a.length) {
                var h = this.set, f = this.chart, g = this.container, k = g.set(), l = g.set();
                h.push(l);
                h.push(k);
                var m = this.lineAlpha, n = this.lineThickness, h = this.dashLength, q = this.fillAlphas,
                    p = this.lineColorR, t = this.fillColorsR, r = this.negativeLineColor, u = this.negativeFillColors,
                    w = this.negativeFillAlphas, y = this.baseCoord, x = this.lineColorSwitched;
                x && (p = x);
                (x = this.fillColorsSwitched) && (t = x);
                x = this.negativeLineAlpha;
                isNaN(x) && (x = m);
                m = new d.Bezier(g, a, b, p, m, n, t, 0, h);
                d.setCN(f, m, this.bcn + "stroke");
                k.push(m.path);
                void 0 !== r && (n = new d.Bezier(g, a, b, r, x, n, t, 0, h), d.setCN(f, n, this.bcn + "stroke"), d.setCN(f, n, this.bcn + "stroke-negative"), l.push(n.path));
                0 < q && (m = a.join(";").split(";"), p = b.join(";").split(";"), n = "", 0 < c.length ? (c.push("M"), e.push("M"), c.reverse(), e.reverse(), m = a.concat(c), p = b.concat(e)) : (this.rotate ? (n += " L" + y + "," + b[b.length - 1], n += " L" + y + "," + b[0]) : (n += " L" + a[a.length - 1] + "," + y, n += " L" + a[0] + "," + y), n += " L" + a[0] + "," + b[0]), c = new d.Bezier(g, m, p, NaN, 0, 0, t, q, h, n), d.setCN(f, c, this.bcn + "fill"), c.path.pattern(this.pattern, NaN, f.path), k.push(c.path), u || void 0 !== r) && (w || (w = q), u || (u = r), a = new d.Bezier(g, a, b, NaN, 0, 0, u, w, h, n), a.path.pattern(this.pattern, NaN, f.path), d.setCN(f, a, this.bcn + "fill"), d.setCN(f, a, this.bcn + "fill-negative"), l.push(a.path));
                this.applyMask(l, k)
            }
        }, launchAnimation: function () {
            var a = this, b = a.chart.startDuration;
            if (0 < b && !a.animationPlayed) {
                var c = a.set, e = a.bulletSet;
                d.VML || (c.attr({opacity: a.startAlpha}), e.attr({opacity: a.startAlpha}));
                c.hide();
                e.hide();
                a.seqAn ? (b = setTimeout(function () {
                    a.animateGraphs.call(a)
                }, a.index * b * 1E3), a.timeOuts.push(b)) : a.animateGraphs()
            }
        }, animateGraphs: function () {
            var a = this.chart, b = this.set, c = this.bulletSet, e = this.x, d = this.y;
            b.show();
            c.show();
            var f = a.startDuration, g = a.startEffect;
            b && (this.rotate ? (b.translate(-1E3, d), c.translate(-1E3, d)) : (b.translate(e, -1E3), c.translate(e, -1E3)), b.animate({
                opacity: 1, translate: e + "," +
                    d
            }, f, g), c.animate({opacity: 1, translate: e + "," + d}, f, g), a.animatable.push(b))
        }, animate: function (a) {
            var b = this.chart, c = this.animationArray;
            !a && 0 < c.length && (a = c[0], c.shift());
            c = d[d.getEffect(b.startEffect)];
            b = b.startDuration;
            a && (this.rotate ? a.animateWidth(b, c) : a.animateHeight(b, c), a.set.show())
        }, legendKeyColor: function () {
            var a = this.legendColor, b = this.lineAlpha;
            void 0 === a && (a = this.lineColorR, 0 === b && (b = this.fillColorsR) && (a = "object" == typeof b ? b[0] : b));
            return a
        }, legendKeyAlpha: function () {
            var a = this.legendAlpha;
            void 0 === a && (a = this.lineAlpha, this.fillAlphas > a && (a = this.fillAlphas), 0 === a && (a = this.bulletAlpha), 0 === a && (a = 1));
            return a
        }, createBullet: function (a, b, c) {
            if (!isNaN(b) && !isNaN(c) && ("none" != this.bullet || this.customBullet || a.bullet || a.customBullet)) {
                var e = this.chart, h = this.container, f = this.bulletOffset, g = this.bulletSize;
                isNaN(a.bulletSize) || (g = a.bulletSize);
                var k = a.values.value, l = this.maxValue, m = this.minValue, n = this.maxBulletSize,
                    q = this.minBulletSize;
                isNaN(l) || (isNaN(k) || (g = (k - m) / (l - m) * (n - q) + q), m == l && (g =
                    n));
                l = g;
                this.bulletAxis && (g = a.values.error, isNaN(g) || (k = g), g = this.bulletAxis.stepWidth * k);
                g < this.minBulletSize && (g = this.minBulletSize);
                this.rotate ? b = a.isNegative ? b - f : b + f : c = a.isNegative ? c + f : c - f;
                q = this.bulletColorR;
                a.lineColor && (this.bulletColorSwitched = a.lineColor);
                this.bulletColorSwitched && (q = this.bulletColorSwitched);
                a.isNegative && void 0 !== this.bulletColorNegative && (q = this.bulletColorNegative);
                void 0 !== a.color && (q = a.color);
                var p;
                "xy" == e.type && this.valueField && (p = this.pattern, a.pattern && (p = a.pattern));
                f = this.bullet;
                a.bullet && (f = a.bullet);
                var k = this.bulletBorderThickness, m = this.bulletBorderColorR, n = this.bulletBorderAlpha,
                    t = this.bulletAlpha;
                m || (m = q);
                this.useLineColorForBulletBorder && (m = this.lineColorR, this.lineColorSwitched && (m = this.lineColorSwitched));
                var r = a.alpha;
                isNaN(r) || (t = r);
                p = d.bullet(h, f, g, q, t, k, m, n, l, 0, p, e.path);
                l = this.customBullet;
                a.customBullet && (l = a.customBullet);
                l && (p && p.remove(), "function" == typeof l ? (l = new l, l.chart = e, a.bulletConfig && (l.availableSpace = c, l.graph = this, l.graphDataItem = a, l.bulletY = c, a.bulletConfig.minCoord = this.minCoord - c, l.bulletConfig = a.bulletConfig), l.write(h), p && l.showBullet && l.set.push(p), a.customBulletGraphics = l.cset, p = l.set) : (p = h.set(), h = h.image(l, 0, 0, g, g), p.push(h), this.centerCustomBullets && h.translate(-g / 2, -g / 2)));
                if (p) {
                    (a.url || this.showHandOnHover) && p.setAttr("cursor", "pointer");
                    if ("serial" == e.type || "gantt" == e.type) if (-.5 > b || b > this.width || c < -g / 2 || c > this.height) p.remove(), p = null;
                    p && (this.bulletSet.push(p), p.translate(b, c), this.addListeners(p, a), this.allBullets.push(p));
                    a.bx = b;
                    a.by = c;
                    d.setCN(e, p, this.bcn + "bullet");
                    a.className && d.setCN(e, p, a.className, !0)
                }
                p ? (p.size = g || 0, a.bulletGraphics = p) : p = {size: 0};
                p.graphDataItem = a;
                return p
            }
        }, showBullets: function () {
            var a = this.allBullets, b;
            this.bulletsHidden = !1;
            for (b = 0; b < a.length; b++) a[b].show()
        }, hideBullets: function () {
            var a = this.allBullets, b;
            this.bulletsHidden = !0;
            for (b = 0; b < a.length; b++) a[b].hide()
        }, showCustomBullets: function () {
            var a = this.allBullets, b;
            this.customBulletsHidden = !1;
            for (b = 0; b < a.length; b++) {
                var c = a[b].graphDataItem;
                c.customBulletGraphics && c.customBulletGraphics.show()
            }
        }, hideCustomBullets: function () {
            var a = this.allBullets, b;
            this.customBulletsHidden = !0;
            for (b = 0; b < a.length; b++) {
                var c = a[b].graphDataItem;
                c.customBulletGraphics && c.customBulletGraphics.hide()
            }
        }, addListeners: function (a, b) {
            var c = this;
            a.mouseover(function (a) {
                c.handleRollOver(b, a)
            }).mouseout(function (a) {
                c.handleRollOut(b, a)
            }).touchend(function (a) {
                c.handleRollOver(b, a);
                c.chart.panEventsEnabled && c.handleClick(b, a)
            }).touchstart(function (a) {
                c.handleRollOver(b, a)
            }).click(function (a) {
                c.handleClick(b, a)
            }).dblclick(function (a) {
                c.handleDoubleClick(b, a)
            }).contextmenu(function (a) {
                c.handleRightClick(b, a)
            })
        }, handleRollOver: function (a, b) {
            this.handleGraphEvent(b, "rollOverGraph");
            if (a) {
                var c = this.chart, e = {
                    type: "rollOverGraphItem",
                    item: a,
                    index: a.index,
                    graph: this,
                    target: this,
                    chart: this.chart,
                    event: b
                };
                this.fire(e);
                c.fire(e);
                clearTimeout(c.hoverInt);
                (c = c.chartCursor) && c.valueBalloonsEnabled || this.showGraphBalloon(a, "V", !0)
            }
        }, handleRollOut: function (a, b) {
            if (a) {
                var c = {
                    type: "rollOutGraphItem",
                    item: a,
                    index: a.index,
                    graph: this,
                    target: this,
                    chart: this.chart,
                    event: b
                };
                this.fire(c);
                this.chart.fire(c)
            }
            this.handleGraphEvent(b, "rollOutGraph");
            (c = this.chart.chartCursor) && c.valueBalloonsEnabled || this.hideBalloon()
        }, handleClick: function (a, b) {
            if (!this.chart.checkTouchMoved() && this.chart.checkTouchDuration()) {
                if (a) {
                    var c = {
                        type: "clickGraphItem",
                        item: a,
                        index: a.index,
                        graph: this,
                        target: this,
                        chart: this.chart,
                        event: b
                    };
                    this.fire(c);
                    this.chart.fire(c);
                    d.getURL(a.url, this.urlTarget)
                }
                this.handleGraphEvent(b, "clickGraph")
            }
        }, handleGraphEvent: function (a, b) {
            var c = {type: b, graph: this, target: this, chart: this.chart, event: a};
            this.fire(c);
            this.chart.fire(c)
        }, handleRightClick: function (a, b) {
            if (a) {
                var c = {
                    type: "rightClickGraphItem",
                    item: a,
                    index: a.index,
                    graph: this,
                    target: this,
                    chart: this.chart,
                    event: b
                };
                this.fire(c);
                this.chart.fire(c)
            }
        }, handleDoubleClick: function (a, b) {
            if (a) {
                var c = {
                    type: "doubleClickGraphItem",
                    item: a,
                    index: a.index,
                    graph: this,
                    target: this,
                    chart: this.chart,
                    event: b
                };
                this.fire(c);
                this.chart.fire(c)
            }
        }, zoom: function (a, b) {
            this.start = a;
            this.end = b;
            this.draw()
        }, changeOpacity: function (a) {
            var b = this.set;
            b && b.setAttr("opacity", a);
            if (b = this.ownColumns) {
                var c;
                for (c = 0; c < b.length; c++) {
                    var e = b[c].set;
                    e && e.setAttr("opacity", a)
                }
            }
            (b = this.bulletSet) && b.setAttr("opacity", a)
        }, destroy: function () {
            d.remove(this.set);
            d.remove(this.bulletSet);
            var a = this.timeOuts;
            if (a) {
                var b;
                for (b = 0; b < a.length; b++) clearTimeout(a[b])
            }
            this.timeOuts = []
        }, createBalloon: function () {
            var a = this.chart;
            this.balloon ? this.balloon.destroy && this.balloon.destroy() : this.balloon = {};
            var b = this.balloon;
            d.extend(b, a.balloon, !0);
            b.chart = a;
            b.mainSet = a.plotBalloonsSet
        }, hideBalloon: function () {
            var a = this, b = a.chart;
            b.chartCursor ? b.chartCursor.valueBalloonsEnabled || b.hideBalloon() : b.hideBalloon();
            clearTimeout(a.hoverInt);
            a.hoverInt = setTimeout(function () {
                a.hideBalloonReal.call(a)
            }, b.hideBalloonTime)
        }, hideBalloonReal: function () {
            this.balloon && this.balloon.hide();
            this.fixBulletSize()
        }, fixBulletSize: function () {
            if (d.isModern) {
                var a = this.resizedDItem;
                if (a) {
                    var b = a.bulletGraphics;
                    b && !b.doNotScale && (b.translate(a.bx, a.by, 1), b.setAttr("fill-opacity", this.bulletAlpha), b.setAttr("stroke-opacity", this.bulletBorderAlpha))
                }
                this.resizedDItem = null
            }
        }, showGraphBalloon: function (a, b, c, e, h) {
            var f = this.chart, g = this.balloon, k = 0, l = 0, m = f.chartCursor, n = !0;
            m ? m.valueBalloonsEnabled || (g = f.balloon, k = this.x, l = this.y, n = !1) : (g = f.balloon, k = this.x, l = this.y, n = !1);
            clearTimeout(this.hoverInt);
            f.chartCursor && (this.currentDataItem = a);
            this.resizeBullet(a, e, h);
            if (g && g.enabled && this.showBalloon && !this.hidden) {
                var m = f.formatString(this.balloonText, a, !0), q = this.balloonFunction;
                q && (m = q(a, a.graph));
                m && (m = d.cleanFromEmpty(m));
                m && "" !== m ? (e = f.getBalloonColor(this, a), g.drop || (g.pointerOrientation = b), b = a.x, h = a.y, f.rotate && (b = a.y, h = a.x), b += k, h += l, isNaN(b) || isNaN(h) ? this.hideBalloonReal() : (a = this.width, q = this.height, n && g.setBounds(k, l, a + k, q + l), g.changeColor(e), g.setPosition(b, h), g.fixPrevious(), g.fixedPosition && (c = !1), !c && "radar" != f.type && (b < k || b > a + k || h < l || h > q + l) ? (g.showBalloon(m), g.hide(0)) : (g.followCursor(c), g.showBalloon(m)))) : (this.hideBalloonReal(), this.resizeBullet(a, e, h))
            } else this.hideBalloonReal()
        }, resizeBullet: function (a, b, c) {
            this.fixBulletSize();
            if (a && d.isModern && (1 != b || !isNaN(c))) {
                var e = a.bulletGraphics;
                e && !e.doNotScale && (e.translate(a.bx, a.by, b), isNaN(c) || (e.setAttr("fill-opacity", c), e.setAttr("stroke-opacity", c)), this.resizedDItem = a)
            }
        }
    })
})();
(function () {
    var d = window.AmCharts;
    d.ChartCursor = d.Class({
        construct: function (a) {
            this.cname = "ChartCursor";
            this.createEvents("changed", "zoomed", "onHideCursor", "onShowCursor", "draw", "selected", "moved", "panning", "zoomStarted");
            this.enabled = !0;
            this.cursorAlpha = 1;
            this.selectionAlpha = .2;
            this.cursorColor = "#CC0000";
            this.categoryBalloonAlpha = 1;
            this.color = "#FFFFFF";
            this.type = "cursor";
            this.zoomed = !1;
            this.zoomable = !0;
            this.pan = !1;
            this.categoryBalloonDateFormat = "MMM DD, YYYY";
            this.categoryBalloonText = "[[category]]";
            this.categoryBalloonEnabled = this.valueBalloonsEnabled = !0;
            this.rolledOver = !1;
            this.cursorPosition = "middle";
            this.bulletsEnabled = this.skipZoomDispatch = !1;
            this.bulletSize = 8;
            this.selectWithoutZooming = this.oneBalloonOnly = !1;
            this.graphBulletSize = 1.7;
            this.animationDuration = .3;
            this.zooming = !1;
            this.adjustment = 0;
            this.avoidBalloonOverlapping = !0;
            this.leaveCursor = !1;
            this.leaveAfterTouch = !0;
            this.valueZoomable = !1;
            this.balloonPointerOrientation = "horizontal";
            this.hLineEnabled = this.vLineEnabled = !0;
            this.vZoomEnabled = this.hZoomEnabled = !1;
            d.applyTheme(this, a, this.cname)
        }, draw: function () {
            this.destroy();
            var a = this.chart;
            a.panRequired = !0;
            var b = a.container;
            this.rotate = a.rotate;
            this.container = b;
            this.prevLineHeight = this.prevLineWidth = NaN;
            b = b.set();
            b.translate(this.x, this.y);
            this.set = b;
            a.cursorSet.push(b);
            this.createElements();
            d.isString(this.limitToGraph) && (this.limitToGraph = d.getObjById(a.graphs, this.limitToGraph), this.fullWidth = !1, this.cursorPosition = "middle");
            this.pointer = this.balloonPointerOrientation.substr(0, 1).toUpperCase();
            this.isHidden = !1;
            this.hideLines();
            this.valueLineAxis || (this.valueLineAxis = a.valueAxes[0])
        }, createElements: function () {
            var a = this.chart, b = a.dx, c = a.dy, e = this.width, h = this.height, f, g, k = this.cursorAlpha;
            f = this.valueLineAlpha;
            this.rotate ? g = k : (g = f, f = k);
            "xy" == a.type && (f = g = k);
            this.vvLine = d.line(this.container, [b, 0, 0], [c, 0, h], this.cursorColor, f, 1);
            d.setCN(a, this.vvLine, "cursor-line");
            d.setCN(a, this.vvLine, "cursor-line-vertical");
            this.hhLine = d.line(this.container, [0, e, e + b], [0, 0, c], this.cursorColor, g, 1);
            d.setCN(a, this.hhLine, "cursor-line");
            d.setCN(a, this.hhLine, "cursor-line-horizontal");
            this.vLine = this.rotate ? this.vvLine : this.hhLine;
            this.set.push(this.vvLine);
            this.set.push(this.hhLine);
            this.set.node.style.pointerEvents = "none";
            this.fullLines = this.container.set();
            a = a.cursorLineSet;
            a.push(this.fullLines);
            a.translate(this.x, this.y);
            a.clipRect(0, 0, e, h);
            this.set.clipRect(0, 0, e, h)
        }, update: function () {
            var a = this.chart, b = a.mouseX - this.x, c = a.mouseY - this.y;
            this.mouseX = b;
            this.mouseY = c;
            this.mouse2X = a.mouse2X - this.x;
            this.mouse2Y = a.mouse2Y - this.y;
            var e;
            if (a.chartData && 0 < a.chartData.length) {
                this.mouseIsOver() ? (this.hideGraphBalloons = !1, this.rolledOver = e = !0, this.updateDrawing(), this.vvLine && isNaN(this.fx) && (a.rotate || !this.limitToGraph) && this.vvLine.translate(b, 0), !this.hhLine || !isNaN(this.fy) || a.rotate && this.limitToGraph || this.hhLine.translate(0, c), isNaN(this.mouse2X) ? this.dispatchMovedEvent(b, c) : e = !1) : this.forceShow || this.hideCursor();
                if (this.zooming) {
                    if (!isNaN(this.mouse2X)) {
                        isNaN(this.mouse2X0) || this.dispatchPanEvent();
                        return
                    }
                    if (this.pan) {
                        this.dispatchPanEvent();
                        return
                    }
                    (this.hZoomEnabled || this.vZoomEnabled) && this.zooming && this.updateSelection()
                }
                e && this.showCursor()
            }
        }, updateDrawing: function () {
            this.drawing && this.chart.setMouseCursor("crosshair");
            this.drawingNow && (d.remove(this.drawingLine), this.drawingLine = d.line(this.container, [this.drawStartX, this.mouseX], [this.drawStartY, this.mouseY], this.cursorColor, 1, 1))
        }, fixWidth: function (a) {
            if (this.fullWidth && this.prevLineWidth != a) {
                var b = this.vvLine, c = 0;
                b && (b.remove(), c = b.x);
                b = this.container.set();
                b.translate(c, 0);
                c = d.rect(this.container, a, this.height, this.cursorColor, this.cursorAlpha, 0);
                d.setCN(this.chart, c, "cursor-fill");
                c.translate(-a / 2, 0);
                b.push(c);
                this.vvLine = b;
                this.fullLines.push(b);
                this.prevLineWidth = a
            }
        }, fixHeight: function (a) {
            if (this.fullWidth && this.prevLineHeight != a) {
                var b = this.hhLine, c = 0;
                b && (b.remove(), c = b.y);
                b = this.container.set();
                b.translate(0, c);
                c = d.rect(this.container, this.width, a, this.cursorColor, this.cursorAlpha);
                c.translate(0, -a / 2);
                b.push(c);
                this.fullLines.push(b);
                this.hhLine = b;
                this.prevLineHeight = a
            }
        }, fixVLine: function (a, b) {
            if (!isNaN(a)) {
                if (isNaN(this.prevLineX)) {
                    var c = 0, e = this.mouseX;
                    if (this.limitToGraph) {
                        var d = this.chart.categoryAxis;
                        d && (this.chart.rotate || (c = "bottom" == d.position ? this.height : -this.height), e = a)
                    }
                    this.vvLine.translate(e, c)
                } else this.prevLineX != a && this.vvLine.translate(this.prevLineX, this.prevLineY);
                this.fx = a;
                this.prevLineX != a && (c = this.animationDuration, this.zooming && (c = 0), this.vvLine.stop(), this.vvLine.animate({translate: a + "," + b}, c, "easeOutSine"), this.prevLineX = a, this.prevLineY = b)
            }
        }, fixHLine: function (a, b) {
            if (!isNaN(a)) {
                if (isNaN(this.prevLineY)) {
                    var c = 0, e = this.mouseY;
                    if (this.limitToGraph) {
                        var d = this.chart.categoryAxis;
                        d && (this.chart.rotate && (c = "right" == d.position ? this.width : -this.width), e = a)
                    }
                    this.hhLine.translate(c, e)
                } else this.prevLineY != a && this.hhLine.translate(this.prevLineX, this.prevLineY);
                this.fy = a;
                this.prevLineY != a && (c = this.animationDuration, this.zooming && (c = 0), this.hhLine.stop(), this.hhLine.animate({translate: b + "," + a}, c, "easeOutSine"), this.prevLineY = a, this.prevLineX = b)
            }
        }, hideCursor: function (a) {
            this.forceShow = !1;
            this.chart.wasTouched && this.leaveAfterTouch || this.isHidden || this.leaveCursor || (this.hideLines(), this.isHidden = !0, this.index = this.prevLineY = this.prevLineX = this.mouseY0 = this.mouseX0 = this.fy = this.fx = NaN, a ? this.chart.handleCursorHide() : this.fire({
                target: this,
                chart: this.chart,
                type: "onHideCursor"
            }), this.chart.setMouseCursor("auto"))
        }, hideLines: function () {
            this.vvLine && this.vvLine.hide();
            this.hhLine && this.hhLine.hide();
            this.fullLines && this.fullLines.hide();
            this.isHidden = !0;
            this.chart.handleCursorHide()
        }, showCursor: function (a) {
            this.drawing || (this.vLineEnabled && this.vvLine && this.vvLine.show(), this.hLineEnabled && this.hhLine && this.hhLine.show(), this.isHidden = !1, this.updateFullLine(), a || this.fire({
                target: this,
                chart: this.chart,
                type: "onShowCursor"
            }), this.pan && this.chart.setMouseCursor("move"))
        }, updateFullLine: function () {
            this.zooming && this.fullWidth && this.selection && (this.rotate ? 0 < this.selection.height && this.hhLine.hide() : 0 < this.selection.width && this.vvLine.hide())
        }, updateSelection: function () {
            if (!this.pan) {
                var a = this.mouseX, b = this.mouseY;
                isNaN(this.fx) || (a = this.fx);
                isNaN(this.fy) || (b = this.fy);
                this.clearSelection();
                var c = this.mouseX0, e = this.mouseY0, h = this.width, f = this.height, a = d.fitToBounds(a, 0, h),
                    b = d.fitToBounds(b, 0, f), g;
                a < c && (g = a, a = c, c = g);
                b < e && (g = b, b = e, e = g);
                this.hZoomEnabled ? h = a - c : c = 0;
                this.vZoomEnabled ? f = b - e : e = 0;
                isNaN(this.mouse2X) && 0 < Math.abs(h) && 0 < Math.abs(f) && (a = this.chart, b = d.rect(this.container, h, f, this.cursorColor, this.selectionAlpha), d.setCN(a, b, "cursor-selection"), b.width = h, b.height = f, b.translate(c, e), this.set.push(b), this.selection = b);
                this.updateFullLine()
            }
        }, mouseIsOver: function () {
            var a = this.mouseX, b = this.mouseY;
            if (this.justReleased) return this.justReleased = !1, !0;
            if (this.mouseIsDown) return !0;
            if (!this.chart.mouseIsOver) return this.handleMouseOut(), !1;
            if (0 < a && a < this.width && 0 < b && b < this.height) return !0;
            this.handleMouseOut()
        }, fixPosition: function () {
            this.prevY = this.prevX = NaN
        }, handleMouseDown: function () {
            this.update();
            if (this.mouseIsOver()) if (this.mouseIsDown = !0, this.mouseX0 = this.mouseX, this.mouseY0 = this.mouseY, this.mouse2X0 = this.mouse2X, this.mouse2Y0 = this.mouse2Y, this.drawing) this.drawStartY = this.mouseY, this.drawStartX = this.mouseX, this.drawingNow = !0; else if (this.dispatchMovedEvent(this.mouseX, this.mouseY), !this.pan && isNaN(this.mouse2X0) && (isNaN(this.fx) || (this.mouseX0 = this.fx), isNaN(this.fy) || (this.mouseY0 = this.fy)), this.hZoomEnabled || this.vZoomEnabled) {
                this.zooming = !0;
                var a = {chart: this.chart, target: this, type: "zoomStarted"};
                a.x = this.mouseX / this.width;
                a.y = this.mouseY / this.height;
                this.index0 = a.index = this.index;
                this.timestamp0 = this.timestamp;
                this.fire(a)
            }
        }, registerInitialMouse: function () {
        }, handleReleaseOutside: function () {
            this.mouseIsDown = !1;
            if (this.drawingNow) {
                this.drawingNow = !1;
                d.remove(this.drawingLine);
                var a = this.drawStartX, b = this.drawStartY, c = this.mouseX, e = this.mouseY, h = this.chart;
                (2 < Math.abs(a - c) || 2 < Math.abs(b - e)) && this.fire({
                    type: "draw",
                    target: this,
                    chart: h,
                    initialX: a,
                    initialY: b,
                    finalX: c,
                    finalY: e
                })
            }
            this.zooming && (this.zooming = !1, this.selectWithoutZooming ? this.dispatchZoomEvent("selected") : (this.hZoomEnabled || this.vZoomEnabled) && this.dispatchZoomEvent("zoomed"), this.rolledOver && this.dispatchMovedEvent(this.mouseX, this.mouseY));
            this.mouse2Y0 = this.mouse2X0 = this.mouseY0 = this.mouseX0 = NaN
        }, dispatchZoomEvent: function (a) {
            if (!this.pan) {
                var b = this.selection;
                if (b && 3 < Math.abs(b.width) && 3 < Math.abs(b.height)) {
                    var c = Math.min(this.index, this.index0), e = Math.max(this.index, this.index0), d = c, f = e,
                        g = this.chart, k = g.chartData, l = g.categoryAxis;
                    l && l.parseDates && !l.equalSpacing && (d = k[c] ? k[c].time : Math.min(this.timestamp0, this.timestamp), f = k[e] ? g.getEndTime(k[e].time) : Math.max(this.timestamp0, this.timestamp));
                    var b = {
                        type: a,
                        chart: this.chart,
                        target: this,
                        end: f,
                        start: d,
                        startIndex: c,
                        endIndex: e,
                        selectionHeight: b.height,
                        selectionWidth: b.width,
                        selectionY: b.y,
                        selectionX: b.x
                    }, m;
                    this.hZoomEnabled && 4 < Math.abs(this.mouseX0 - this.mouseX) && (b.startX = this.mouseX0 / this.width, b.endX = this.mouseX / this.width, m = !0);
                    this.vZoomEnabled && 4 < Math.abs(this.mouseY0 - this.mouseY) && (b.startY = 1 - this.mouseY0 /
                        this.height, b.endY = 1 - this.mouseY / this.height, m = !0);
                    m && (this.prevY = this.prevX = NaN, this.fire(b), "selected" != a && this.clearSelection());
                    this.hideCursor()
                }
            }
        }, dispatchMovedEvent: function (a, b, c, e) {
            a = Math.round(a);
            b = Math.round(b);
            if (!this.isHidden && (a != this.prevX || b != this.prevY || "changed" == c)) {
                c || (c = "moved");
                var d = this.fx, f = this.fy;
                isNaN(d) && (d = a);
                isNaN(f) && (f = b);
                var g = !1;
                this.zooming && this.pan && (g = !0);
                g = {
                    hidden: this.isHidden,
                    type: c,
                    chart: this.chart,
                    target: this,
                    x: a,
                    y: b,
                    finalX: d,
                    finalY: f,
                    zooming: this.zooming,
                    panning: g,
                    mostCloseGraph: this.mostCloseGraph,
                    index: this.index,
                    skip: e,
                    hideBalloons: this.hideGraphBalloons
                };
                this.rotate ? (g.position = b, g.finalPosition = f) : (g.position = a, g.finalPosition = d);
                this.prevX = a;
                this.prevY = b;
                e ? this.chart.handleCursorMove(g) : (this.fire(g), "changed" == c && this.chart.fire(g))
            }
        }, dispatchPanEvent: function () {
            if (this.mouseIsDown) {
                var a = d.roundTo((this.mouseX - this.mouseX0) / this.width, 3),
                    b = d.roundTo((this.mouseY - this.mouseY0) / this.height, 3),
                    c = d.roundTo((this.mouse2X - this.mouse2X0) / this.width,
                        3), e = d.roundTo((this.mouse2Y - this.mouse2Y0) / this.height, 2), h = !1;
                0 !== Math.abs(a) && 0 !== Math.abs(b) && (h = !0);
                if (this.prevDeltaX == a || this.prevDeltaY == b) h = !1;
                isNaN(c) || isNaN(e) || (0 !== Math.abs(c) && 0 !== Math.abs(e) && (h = !0), this.prevDelta2X != c && this.prevDelta2Y != e) || (h = !1);
                h && (this.hideLines(), this.fire({
                    type: "panning",
                    chart: this.chart,
                    target: this,
                    deltaX: a,
                    deltaY: b,
                    delta2X: c,
                    delta2Y: e,
                    index: this.index
                }), this.prevDeltaX = a, this.prevDeltaY = b, this.prevDelta2X = c, this.prevDelta2Y = e)
            }
        }, clearSelection: function () {
            var a =
                this.selection;
            a && (a.width = 0, a.height = 0, a.remove())
        }, destroy: function () {
            this.clear();
            d.remove(this.selection);
            this.selection = null;
            clearTimeout(this.syncTO);
            d.remove(this.set)
        }, clear: function () {
        }, setTimestamp: function (a) {
            this.timestamp = a
        }, setIndex: function (a, b) {
            a != this.index && (this.index = a, b || this.isHidden || this.dispatchMovedEvent(this.mouseX, this.mouseY, "changed"))
        }, handleMouseOut: function () {
            this.enabled && this.rolledOver && (this.leaveCursor || this.setIndex(void 0), this.forceShow = !1, this.hideCursor(), this.rolledOver = !1)
        }, showCursorAt: function (a) {
            var b = this.chart.categoryAxis;
            b && this.setPosition(b.categoryToCoordinate(a))
        }, setPosition: function (a) {
            var b = this.chart, c = b.categoryAxis;
            if (c) {
                var e, d, f = c.coordinateToValue(a);
                c.showBalloonAt(f);
                this.forceShow = !0;
                c.stickBalloonToCategory ? b.rotate ? this.fixHLine(a, 0) : this.fixVLine(a, 0) : (this.showCursor(), b.rotate ? this.hhLine.translate(0, a) : this.vvLine.translate(a, 0));
                b.rotate ? e = a : d = a;
                this.dispatchMovedEvent(d, e);
                b.rotate ? (this.vvLine && this.vvLine.hide(), this.hhLine && this.hhLine.show()) : (this.hhLine && this.hhLine.hide(), this.vvLine && this.vvLine.show());
                this.updateFullLine();
                this.isHidden = !1;
                this.dispatchMovedEvent(d, e, "moved", !0)
            }
        }, enableDrawing: function (a) {
            this.enabled = !a;
            this.hideCursor();
            this.drawing = a
        }, syncWithCursor: function (a, b) {
            clearTimeout(this.syncTO);
            a && (a.isHidden ? this.hideCursor(!0) : this.syncWithCursorReal(a, b))
        }, isZooming: function (a) {
            this.zooming = a
        }, syncWithCursorReal: function (a, b) {
            var c = a.vvLine, e = a.hhLine;
            this.index = a.index;
            this.forceShow = !0;
            this.zooming && this.pan || this.showCursor(!0);
            this.hideGraphBalloons = b;
            this.justReleased = a.justReleased;
            this.zooming = a.zooming;
            this.index0 = a.index0;
            this.mouseX0 = a.mouseX0;
            this.mouseY0 = a.mouseY0;
            this.mouse2X0 = a.mouse2X0;
            this.mouse2Y0 = a.mouse2Y0;
            this.timestamp0 = a.timestamp0;
            this.prevDeltaX = a.prevDeltaX;
            this.prevDeltaY = a.prevDeltaY;
            this.prevDelta2X = a.prevDelta2X;
            this.prevDelta2Y = a.prevDelta2Y;
            this.fx = a.fx;
            this.fy = a.fy;
            this.index = a.index;
            a.zooming && this.updateSelection();
            var d = a.mouseX, f = a.mouseY;
            this.rotate ? (d = NaN, this.vvLine && this.vvLine.hide(), this.hhLine && e && (isNaN(a.fy) ? this.hhLine.translate(0, a.mouseY) : this.fixHLine(a.fy, 0))) : (f = NaN, this.hhLine && this.hhLine.hide(), this.vvLine && c && (isNaN(a.fx) ? this.vvLine.translate(a.mouseX, 0) : this.fixVLine(a.fx, 0)));
            this.dispatchMovedEvent(d, f, "moved", !0)
        }
    })
})();
(function () {
    var d = window.AmCharts;
    d.SimpleChartScrollbar = d.Class({
        construct: function (a) {
            this.createEvents("zoomed", "zoomStarted", "zoomEnded");
            this.backgroundColor = "#D4D4D4";
            this.backgroundAlpha = 1;
            this.selectedBackgroundColor = "#EFEFEF";
            this.scrollDuration = this.selectedBackgroundAlpha = 1;
            this.resizeEnabled = !0;
            this.hideResizeGrips = !1;
            this.scrollbarHeight = 20;
            this.updateOnReleaseOnly = !1;
            9 > document.documentMode && (this.updateOnReleaseOnly = !0);
            this.dragIconHeight = this.dragIconWidth = 35;
            this.dragIcon = "dragIconRoundBig";
            this.dragCursorHover = "cursor: cursor: grab; cursor:-moz-grab; cursor:-webkit-grab;";
            this.dragCursorDown = "cursor: cursor: grab; cursor:-moz-grabbing; cursor:-webkit-grabbing;";
            this.enabled = !0;
            this.percentStart = this.offset = 0;
            this.percentEnd = 1;
            d.applyTheme(this, a, "SimpleChartScrollbar")
        }, draw: function () {
            var a = this;
            a.destroy();
            if (a.enabled) {
                var b = a.chart.container, c = a.rotate, e = a.chart;
                e.panRequired = !0;
                var h = b.set();
                a.set = h;
                e.scrollbarsSet.push(h);
                var f, g;
                c ? (f = a.scrollbarHeight, g = e.plotAreaHeight) : (g = a.scrollbarHeight, f = e.plotAreaWidth);
                a.width = f;
                if ((a.height = g) && f) {
                    var k = d.rect(b, f, g, a.backgroundColor, a.backgroundAlpha, 1, a.backgroundColor, a.backgroundAlpha);
                    d.setCN(e, k, "scrollbar-bg");
                    a.bg = k;
                    h.push(k);
                    k = d.rect(b, f, g, "#000", .005);
                    h.push(k);
                    a.invisibleBg = k;
                    k.click(function () {
                        a.handleBgClick()
                    }).mouseover(function () {
                        a.handleMouseOver()
                    }).mouseout(function () {
                        a.handleMouseOut()
                    }).touchend(function () {
                        a.handleBgClick()
                    });
                    k = d.rect(b, f, g, a.selectedBackgroundColor, a.selectedBackgroundAlpha);
                    d.setCN(e, k, "scrollbar-bg-selected");
                    a.selectedBG = k;
                    h.push(k);
                    f = d.rect(b, f, g, "#000", .005);
                    a.dragger = f;
                    h.push(f);
                    f.mousedown(function (b) {
                        a.handleDragStart(b)
                    }).mouseup(function () {
                        a.handleDragStop()
                    }).mouseover(function () {
                        a.handleDraggerOver()
                    }).mouseout(function () {
                        a.handleMouseOut()
                    }).touchstart(function (b) {
                        a.handleDragStart(b)
                    }).touchend(function () {
                        a.handleDragStop()
                    });
                    f = e.pathToImages;
                    g = a.dragIcon.replace(/\.[a-z]*$/i, "");
                    c ? (k = f + g + "H" + e.extension, f = a.dragIconWidth, c = a.dragIconHeight) : (k = f + g + e.extension, c = a.dragIconWidth, f = a.dragIconHeight);
                    g = b.image(k, 0, 0, c, f);
                    d.setCN(e, g, "scrollbar-grip-left");
                    k = b.image(k, 0, 0, c, f);
                    d.setCN(e, k, "scrollbar-grip-right");
                    var l = 10, m = 20;
                    e.panEventsEnabled && (l = 25, m = a.scrollbarHeight);
                    var n = d.rect(b, l, m, "#000", .005), q = d.rect(b, l, m, "#000", .005);
                    q.translate(-(l - c) / 2, -(m - f) / 2);
                    n.translate(-(l - c) / 2, -(m - f) / 2);
                    c = b.set([g, q]);
                    b = b.set([k, n]);
                    a.iconLeft = c;
                    h.push(a.iconLeft);
                    a.iconRight = b;
                    h.push(b);
                    c.mousedown(function () {
                        a.leftDragStart()
                    }).mouseup(function () {
                        a.leftDragStop()
                    }).mouseover(function () {
                        a.iconRollOver()
                    }).mouseout(function () {
                        a.iconRollOut()
                    }).touchstart(function () {
                        a.leftDragStart()
                    }).touchend(function () {
                        a.leftDragStop()
                    });
                    b.mousedown(function () {
                        a.rightDragStart()
                    }).mouseup(function () {
                        a.rightDragStop()
                    }).mouseover(function () {
                        a.iconRollOver()
                    }).mouseout(function () {
                        a.iconRollOut()
                    }).touchstart(function () {
                        a.rightDragStart()
                    }).touchend(function () {
                        a.rightDragStop()
                    });
                    d.ifArray(e.chartData) ? h.show() : h.hide();
                    a.hideDragIcons();
                    a.clipDragger(!1)
                }
                h.translate(a.x, a.y);
                h.node.style.msTouchAction = "none";
                h.node.style.touchAction = "none"
            }
        }, updateScrollbarSize: function (a, b) {
            if (!isNaN(a) && !isNaN(b)) {
                a = Math.round(a);
                b = Math.round(b);
                var c = this.dragger, e, d, f, g, k;
                this.rotate ? (e = 0, d = a, f = this.width + 1, g = b - a, c.setAttr("height", b - a), c.setAttr("y", d)) : (e = a, d = 0, f = b - a, g = this.height + 1, k = b - a, c.setAttr("x", e), c.setAttr("width", k));
                this.clipAndUpdate(e, d, f, g)
            }
        }, update: function () {
            var a, b = !1, c, e, d = this.x, f = this.y, g = this.dragger, k = this.getDBox();
            if (k) {
                c = k.x + d;
                e = k.y + f;
                var l = k.width, k = k.height, m = this.rotate, n = this.chart, q = this.width, p = this.height,
                    t = n.mouseX, r = n.mouseY;
                a = this.initialMouse;
                this.forceClip && this.clipDragger(!0);
                n.mouseIsOver && (this.dragging && (n = this.initialCoord, m ? (a = n + (r - a), 0 > a && (a = 0), n = p - k, a > n && (a = n), g.setAttr("y", a)) : (a = n + (t - a), 0 > a && (a = 0), n = q - l, a > n && (a = n), g.setAttr("x", a)), this.clipDragger(!0)), this.resizingRight && (m ? (a = r - e, a + e > p + f && (a = p - e + f), 0 > a ? (this.resizingRight = !1, b = this.resizingLeft = !0) : (0 === a && (a = .1), g.setAttr("height", a))) : (a = t - c, a + c > q + d && (a = q - c + d), 0 > a ? (this.resizingRight = !1, b = this.resizingLeft = !0) : (0 === a && (a = .1), g.setAttr("width", a))), this.clipDragger(!0)), this.resizingLeft && (m ? (c = e, e = r, e < f && (e = f), isNaN(e) && (e = f), e > p + f && (e = p + f), a = !0 === b ? c - e : k + c - e, 0 > a ? (this.resizingRight = !0, this.resizingLeft = !1, g.setAttr("y", c + k - f)) : (0 === a && (a = .1), g.setAttr("y", e - f), g.setAttr("height", a))) : (e = t, e < d && (e = d), isNaN(e) && (e = d), e > q + d && (e = q + d), a = !0 === b ? c - e : l + c - e, 0 > a ? (this.resizingRight = !0, this.resizingLeft = !1, g.setAttr("x", c + l - d)) : (0 === a && (a = .1), g.setAttr("x", e - d), g.setAttr("width", a))), this.clipDragger(!0)))
            }
        }, stopForceClip: function () {
            this.animating = this.forceClip = !1
        }, clipDragger: function (a) {
            var b = this.getDBox();
            if (b) {
                var c = b.x, e = b.y, d = b.width, b = b.height, f = !1;
                if (this.rotate) {
                    if (c = 0, d = this.width + 1, this.clipY != e || this.clipH != b) f = !0
                } else if (e = 0, b = this.height + 1, this.clipX != c || this.clipW != d) f = !0;
                f && (this.clipAndUpdate(c, e, d, b), a && (this.updateOnReleaseOnly || this.dispatchScrollbarEvent()))
            }
        }, maskGraphs: function () {
        }, clipAndUpdate: function (a, b, c, e) {
            this.clipX = a;
            this.clipY = b;
            this.clipW = c;
            this.clipH = e;
            this.selectedBG.setAttr("width", c);
            this.selectedBG.setAttr("height", e);
            this.selectedBG.translate(a, b);
            this.updateDragIconPositions();
            this.maskGraphs(a, b, c, e)
        }, dispatchScrollbarEvent: function () {
            if (this.skipEvent) this.skipEvent = !1; else {
                var a = this.chart;
                a.hideBalloon();
                var b = this.getDBox(), c = b.x, e = b.y, d = b.width, f = b.height, g, k;
                this.rotate ? (b = e, g = this.height / f, k = 1 - e / this.height, c = 1 - (e + f) / this.height) : (b = c, g = this.width / d, k = c / this.width, c = (c + d) / this.width);
                this.fire({
                    type: "zoomed",
                    position: b,
                    chart: a,
                    target: this,
                    multiplier: g,
                    relativeStart: c,
                    relativeEnd: k
                })
            }
        }, updateDragIconPositions: function () {
            var a = this.getDBox(), b = a.x, c = a.y, e = this.iconLeft, d = this.iconRight,
                f, g, k = this.scrollbarHeight;
            this.rotate ? (f = this.dragIconWidth, g = this.dragIconHeight, e.translate((k - g) / 2, c - f / 2), d.translate((k - g) / 2, c + a.height - f / 2)) : (f = this.dragIconHeight, g = this.dragIconWidth, e.translate(b - g / 2, (k - f) / 2), d.translate(b - g / 2 + a.width, (k - f) / 2))
        }, showDragIcons: function () {
            this.resizeEnabled && (this.iconLeft.show(), this.iconRight.show())
        }, hideDragIcons: function () {
            if (!this.resizingLeft && !this.resizingRight && !this.dragging) {
                if (this.hideResizeGrips || !this.resizeEnabled) this.iconLeft.hide(), this.iconRight.hide();
                this.removeCursors()
            }
        }, removeCursors: function () {
            this.chart.setMouseCursor("auto")
        }, fireZoomEvent: function (a) {
            this.fire({type: a, chart: this.chart, target: this})
        }, percentZoom: function (a, b) {
            if (this.dragger && this.enabled) {
                this.dragger.stop();
                isNaN(a) && (a = 0);
                isNaN(b) && (b = 1);
                var c, e, d;
                this.rotate ? (c = this.height, e = c - c * b, d = c - c * a) : (c = this.width, d = c * b, e = c * a);
                this.updateScrollbarSize(e, d);
                this.clipDragger(!1);
                this.percentStart = a;
                this.percentEnd = b
            }
        }, destroy: function () {
            this.clear();
            d.remove(this.set);
            d.remove(this.iconRight);
            d.remove(this.iconLeft)
        }, clear: function () {
        }, handleDragStart: function () {
            if (this.enabled) {
                this.fireZoomEvent("zoomStarted");
                var a = this.chart;
                this.dragger.stop();
                this.removeCursors();
                d.isModern && this.dragger.node.setAttribute("style", this.dragCursorDown);
                this.dragging = !0;
                var b = this.getDBox();
                this.rotate ? (this.initialCoord = b.y, this.initialMouse = a.mouseY) : (this.initialCoord = b.x, this.initialMouse = a.mouseX)
            }
        }, handleDragStop: function () {
            this.updateOnReleaseOnly && (this.update(), this.skipEvent = !1, this.dispatchScrollbarEvent());
            this.dragging = !1;
            this.mouseIsOver && this.removeCursors();
            d.isModern && this.dragger.node.setAttribute("style", this.dragCursorHover);
            this.update();
            this.fireZoomEvent("zoomEnded")
        }, handleDraggerOver: function () {
            this.handleMouseOver();
            d.isModern && this.dragger.node.setAttribute("style", this.dragCursorHover)
        }, leftDragStart: function () {
            this.fireZoomEvent("zoomStarted");
            this.dragger.stop();
            this.resizingLeft = !0
        }, leftDragStop: function () {
            this.resizingLeft = !1;
            this.mouseIsOver || this.removeCursors();
            this.updateOnRelease();
            this.fireZoomEvent("zoomEnded")
        }, rightDragStart: function () {
            this.fireZoomEvent("zoomStarted");
            this.dragger.stop();
            this.resizingRight = !0
        }, rightDragStop: function () {
            this.resizingRight = !1;
            this.mouseIsOver || this.removeCursors();
            this.updateOnRelease();
            this.fireZoomEvent("zoomEnded")
        }, iconRollOut: function () {
            this.removeCursors()
        }, iconRollOver: function () {
            this.rotate ? this.chart.setMouseCursor("ns-resize") : this.chart.setMouseCursor("ew-resize");
            this.handleMouseOver()
        }, getDBox: function () {
            if (this.dragger) return this.dragger.getBBox()
        }, handleBgClick: function () {
            var a = this;
            if (!a.resizingRight && !a.resizingLeft) {
                a.zooming = !0;
                var b, c, e = a.scrollDuration, h = a.dragger;
                b = a.getDBox();
                var f = b.height, g = b.width;
                c = a.chart;
                var k = a.y, l = a.x, m = a.rotate;
                m ? (b = "y", c = c.mouseY - f / 2 - k, c = d.fitToBounds(c, 0, a.height - f)) : (b = "x", c = c.mouseX - g / 2 - l, c = d.fitToBounds(c, 0, a.width - g));
                a.updateOnReleaseOnly ? (a.skipEvent = !1, h.setAttr(b, c), a.dispatchScrollbarEvent(), a.clipDragger()) : (a.animating = !0, c = Math.round(c), m ? h.animate({y: c}, e, ">") : h.animate({x: c}, e, ">"), a.forceClip = !0, clearTimeout(a.forceTO), a.forceTO = setTimeout(function () {
                    a.stopForceClip.call(a)
                }, 5E3 * e))
            }
        }, updateOnRelease: function () {
            this.updateOnReleaseOnly && (this.update(), this.skipEvent = !1, this.dispatchScrollbarEvent())
        }, handleReleaseOutside: function () {
            if (this.set) {
                if (this.resizingLeft || this.resizingRight || this.dragging) this.updateOnRelease(), this.removeCursors();
                this.animating = this.mouseIsOver = this.dragging = this.resizingRight = this.resizingLeft = !1;
                this.hideDragIcons();
                this.update()
            }
        }, handleMouseOver: function () {
            this.mouseIsOver = !0;
            this.showDragIcons()
        }, handleMouseOut: function () {
            this.mouseIsOver = !1;
            this.hideDragIcons();
            this.removeCursors()
        }
    })
})();
(function () {
    var d = window.AmCharts;
    d.ChartScrollbar = d.Class({
        inherits: d.SimpleChartScrollbar, construct: function (a) {
            this.cname = "ChartScrollbar";
            d.ChartScrollbar.base.construct.call(this, a);
            this.graphLineColor = "#BBBBBB";
            this.graphLineAlpha = 0;
            this.graphFillColor = "#BBBBBB";
            this.graphFillAlpha = 1;
            this.selectedGraphLineColor = "#888888";
            this.selectedGraphLineAlpha = 0;
            this.selectedGraphFillColor = "#888888";
            this.selectedGraphFillAlpha = 1;
            this.gridCount = 0;
            this.gridColor = "#FFFFFF";
            this.gridAlpha = .7;
            this.skipEvent = this.autoGridCount = !1;
            this.color = "#FFFFFF";
            this.scrollbarCreated = !1;
            this.oppositeAxis = !0;
            d.applyTheme(this, a, this.cname)
        }, init: function () {
            var a = this.categoryAxis, b = this.chart, c = this.gridAxis;
            a || ("CategoryAxis" == this.gridAxis.cname ? (this.catScrollbar = !0, a = new d.CategoryAxis, a.id = "scrollbar") : (a = new d.ValueAxis, a.data = b.chartData, a.id = c.id, a.type = c.type, a.maximumDate = c.maximumDate, a.minimumDate = c.minimumDate, a.minPeriod = c.minPeriod), this.categoryAxis = a);
            a.chart = b;
            a.dateFormats = c.dateFormats;
            a.markPeriodChange = c.markPeriodChange;
            a.boldPeriodBeginning = c.boldPeriodBeginning;
            a.labelFunction = c.labelFunction;
            a.axisItemRenderer = d.RecItem;
            a.axisRenderer = d.RecAxis;
            a.guideFillRenderer = d.RecFill;
            a.inside = !0;
            a.fontSize = this.fontSize;
            a.tickLength = 0;
            a.axisAlpha = 0;
            d.isString(this.graph) && (this.graph = d.getObjById(b.graphs, this.graph));
            (a = this.graph) && this.catScrollbar && (c = this.valueAxis, c || (this.valueAxis = c = new d.ValueAxis, c.visible = !1, c.scrollbar = !0, c.axisItemRenderer = d.RecItem, c.axisRenderer = d.RecAxis, c.guideFillRenderer = d.RecFill, c.labelsEnabled = !1, c.chart = b), b = this.unselectedGraph, b || (b = new d.AmGraph, b.scrollbar = !0, this.unselectedGraph = b, b.negativeBase = a.negativeBase, b.noStepRisers = a.noStepRisers), b = this.selectedGraph, b || (b = new d.AmGraph, b.scrollbar = !0, this.selectedGraph = b, b.negativeBase = a.negativeBase, b.noStepRisers = a.noStepRisers));
            this.scrollbarCreated = !0
        }, draw: function () {
            var a = this;
            d.ChartScrollbar.base.draw.call(a);
            if (a.enabled) {
                a.scrollbarCreated || a.init();
                var b = a.chart, c = b.chartData, e = a.categoryAxis, h = a.rotate, f = a.x, g = a.y, k = a.width,
                    l = a.height, m = a.gridAxis, n = a.set;
                e.setOrientation(!h);
                e.parseDates = m.parseDates;
                "ValueAxis" == a.categoryAxis.cname && (e.rotate = !h);
                e.equalSpacing = m.equalSpacing;
                e.minPeriod = m.minPeriod;
                e.startOnAxis = m.startOnAxis;
                e.width = k - 1;
                e.height = l;
                e.gridCount = a.gridCount;
                e.gridColor = a.gridColor;
                e.gridAlpha = a.gridAlpha;
                e.color = a.color;
                e.tickLength = 0;
                e.axisAlpha = 0;
                e.autoGridCount = a.autoGridCount;
                e.parseDates && !e.equalSpacing && e.timeZoom(b.firstTime, b.lastTime);
                e.minimum = a.gridAxis.fullMin;
                e.maximum = a.gridAxis.fullMax;
                e.strictMinMax = !0;
                e.zoom(0, c.length - 1);
                if ((m = a.graph) && a.catScrollbar) {
                    var q = a.valueAxis, p = m.valueAxis;
                    q.id = p.id;
                    q.rotate = h;
                    q.setOrientation(h);
                    q.width = k;
                    q.height = l;
                    q.dataProvider = c;
                    q.reversed = p.reversed;
                    q.logarithmic = p.logarithmic;
                    q.gridAlpha = 0;
                    q.axisAlpha = 0;
                    n.push(q.set);
                    h ? (q.y = g, q.x = 0) : (q.x = f, q.y = 0);
                    var f = Infinity, g = -Infinity, t;
                    for (t = 0; t < c.length; t++) {
                        var r = c[t].axes[p.id].graphs[m.id].values, u;
                        for (u in r) if (r.hasOwnProperty(u) && "percents" != u && "total" != u) {
                            var w = r[u];
                            w < f && (f = w);
                            w > g && (g = w)
                        }
                    }
                    Infinity != f && (q.minimum = f);
                    -Infinity != g && (q.maximum = g + .1 * (g - f));
                    f == g && (--q.minimum, q.maximum += 1);
                    void 0 !== a.minimum && (q.minimum = a.minimum);
                    void 0 !== a.maximum && (q.maximum = a.maximum);
                    q.zoom(0, c.length - 1);
                    u = a.unselectedGraph;
                    u.id = m.id;
                    u.bcn = "scrollbar-graph-";
                    u.rotate = h;
                    u.chart = b;
                    u.data = c;
                    u.valueAxis = q;
                    u.chart = m.chart;
                    u.categoryAxis = a.categoryAxis;
                    u.periodSpan = m.periodSpan;
                    u.valueField = m.valueField;
                    u.openField = m.openField;
                    u.closeField = m.closeField;
                    u.highField = m.highField;
                    u.lowField = m.lowField;
                    u.lineAlpha = a.graphLineAlpha;
                    u.lineColorR = a.graphLineColor;
                    u.fillAlphas = a.graphFillAlpha;
                    u.fillColorsR = a.graphFillColor;
                    u.connect = m.connect;
                    u.hidden = m.hidden;
                    u.width = k;
                    u.height = l;
                    u.pointPosition = m.pointPosition;
                    u.stepDirection = m.stepDirection;
                    u.periodSpan = m.periodSpan;
                    p = a.selectedGraph;
                    p.id = m.id;
                    p.bcn = u.bcn + "selected-";
                    p.rotate = h;
                    p.chart = b;
                    p.data = c;
                    p.valueAxis = q;
                    p.chart = m.chart;
                    p.categoryAxis = e;
                    p.periodSpan = m.periodSpan;
                    p.valueField = m.valueField;
                    p.openField = m.openField;
                    p.closeField = m.closeField;
                    p.highField = m.highField;
                    p.lowField = m.lowField;
                    p.lineAlpha = a.selectedGraphLineAlpha;
                    p.lineColorR = a.selectedGraphLineColor;
                    p.fillAlphas = a.selectedGraphFillAlpha;
                    p.fillColorsR = a.selectedGraphFillColor;
                    p.connect = m.connect;
                    p.hidden = m.hidden;
                    p.width = k;
                    p.height = l;
                    p.pointPosition = m.pointPosition;
                    p.stepDirection = m.stepDirection;
                    p.periodSpan = m.periodSpan;
                    b = a.graphType;
                    b || (b = m.type);
                    u.type = b;
                    p.type = b;
                    c = c.length - 1;
                    u.zoom(0, c);
                    p.zoom(0, c);
                    p.set.click(function () {
                        a.handleBackgroundClick()
                    }).mouseover(function () {
                        a.handleMouseOver()
                    }).mouseout(function () {
                        a.handleMouseOut()
                    });
                    u.set.click(function () {
                        a.handleBackgroundClick()
                    }).mouseover(function () {
                        a.handleMouseOver()
                    }).mouseout(function () {
                        a.handleMouseOut()
                    });
                    n.push(u.set);
                    n.push(p.set)
                }
                n.push(e.set);
                n.push(e.labelsSet);
                a.bg.toBack();
                a.invisibleBg.toFront();
                a.dragger.toFront();
                a.iconLeft.toFront();
                a.iconRight.toFront()
            }
        }, timeZoom: function (a, b, c) {
            this.startTime = a;
            this.endTime = b;
            this.timeDifference = b - a;
            this.skipEvent = !d.toBoolean(c);
            this.zoomScrollbar();
            this.skipEvent || this.dispatchScrollbarEvent()
        }, zoom: function (a, b) {
            this.start = a;
            this.end = b;
            this.skipEvent = !0;
            this.zoomScrollbar()
        }, dispatchScrollbarEvent: function () {
            if ("ValueAxis" == this.categoryAxis.cname) d.ChartScrollbar.base.dispatchScrollbarEvent.call(this); else if (this.skipEvent) this.skipEvent = !1; else {
                var a = this.chart.chartData, b, c, e = this.dragger.getBBox();
                b = e.x;
                var h = e.y, f = e.width, e = e.height, g = this.chart;
                this.rotate ? (b = h, c = e) : c = f;
                f = {type: "zoomed", target: this};
                f.chart = g;
                var k = this.categoryAxis, l = this.stepWidth, h = g.minSelectedTime, e = g.maxSelectedTime, m = !1;
                if (k.parseDates && !k.equalSpacing) {
                    if (a = g.lastTime, g = g.firstTime, k = Math.round(b / l) + g, b = this.dragging ? k + this.timeDifference : Math.round((b + c) / l) + g, k > b && (k = b), 0 < h && b - k < h && (b = Math.round(k + (b - k) / 2), m = Math.round(h / 2), k = b - m, b += m, m = !0), 0 < e && b - k > e && (b = Math.round(k + (b - k) / 2), m = Math.round(e / 2), k = b - m, b += m, m = !0), b > a && (b = a), b - h < k && (k = b - h), k < g && (k = g), k + h > b && (b = k + h), k != this.startTime || b != this.endTime) this.startTime = k, this.endTime = b, f.start = k, f.end = b, f.startDate = new Date(k), f.endDate = new Date(b), this.fire(f)
                } else if (k.startOnAxis ||
                (b += l / 2), c -= this.stepWidth / 2, h = k.xToIndex(b), b = k.xToIndex(b + c), h != this.start || this.end != b) k.startOnAxis && (this.resizingRight && h == b && b++, this.resizingLeft && h == b && (0 < h ? h-- : b = 1)), this.start = h, this.end = this.dragging ? this.start + this.difference : b, f.start = this.start, f.end = this.end, k.parseDates && (a[this.start] && (f.startDate = new Date(a[this.start].time)), a[this.end] && (f.endDate = new Date(a[this.end].time))), this.fire(f);
                m && this.zoomScrollbar(!0)
            }
        }, zoomScrollbar: function (a) {
            if ((!(this.dragging || this.resizingLeft || this.resizingRight || this.animating) || a) && this.dragger && this.enabled) {
                var b;
                a = this.chart;
                var c = a.chartData, e = this.categoryAxis;
                e.parseDates && !e.equalSpacing ? (c = e.stepWidth, e = a.firstTime, a = c * (this.startTime - e), b = c * (this.endTime - e)) : (a = c[this.start].x[e.id], b = c[this.end].x[e.id], c = e.stepWidth, e.startOnAxis || (e = c / 2, a -= e, b += e));
                this.stepWidth = c;
                this.updateScrollbarSize(a, b)
            }
        }, maskGraphs: function (a, b, c, e) {
            var d = this.selectedGraph;
            d && d.set.clipRect(a, b, c, e)
        }, handleDragStart: function () {
            d.ChartScrollbar.base.handleDragStart.call(this);
            this.difference = this.end - this.start;
            this.timeDifference = this.endTime - this.startTime;
            0 > this.timeDifference && (this.timeDifference = 0)
        }, handleBackgroundClick: function () {
            d.ChartScrollbar.base.handleBackgroundClick.call(this);
            this.dragging || (this.difference = this.end - this.start, this.timeDifference = this.endTime - this.startTime, 0 > this.timeDifference && (this.timeDifference = 0))
        }
    })
})();
(function () {
    var d = window.AmCharts;
    d.AmBalloon = d.Class({
        construct: function (a) {
            this.cname = "AmBalloon";
            this.enabled = !0;
            this.fillColor = "#FFFFFF";
            this.fillAlpha = .8;
            this.borderThickness = 2;
            this.borderColor = "#FFFFFF";
            this.borderAlpha = 1;
            this.cornerRadius = 0;
            this.maxWidth = 220;
            this.horizontalPadding = 8;
            this.verticalPadding = 4;
            this.pointerWidth = 6;
            this.pointerOrientation = "V";
            this.color = "#000000";
            this.adjustBorderColor = !0;
            this.show = this.follow = this.showBullet = !1;
            this.bulletSize = 3;
            this.shadowAlpha = .4;
            this.shadowColor = "#000000";
            this.fadeOutDuration = this.animationDuration = .3;
            this.fixedPosition = !0;
            this.offsetY = 6;
            this.offsetX = 1;
            this.textAlign = "center";
            this.disableMouseEvents = !0;
            this.deltaSignX = this.deltaSignY = 1;
            d.isModern || (this.offsetY *= 1.5);
            this.sdy = this.sdx = 0;
            d.applyTheme(this, a, this.cname)
        }, draw: function () {
            var a = this.pointToX, b = this.pointToY;
            d.isModern || (this.drop = !1);
            var c = this.chart;
            d.VML && (this.fadeOutDuration = 0);
            this.xAnim && c.stopAnim(this.xAnim);
            this.yAnim && c.stopAnim(this.yAnim);
            this.sdy = this.sdx = 0;
            if (!isNaN(a)) {
                var e = this.follow, h = c.container, f = this.set;
                d.remove(f);
                this.removeDiv();
                f = h.set();
                f.node.style.pointerEvents = "none";
                this.set = f;
                this.mainSet ? (this.mainSet.push(this.set), this.sdx = this.mainSet.x, this.sdy = this.mainSet.y) : c.balloonsSet.push(f);
                if (this.show) {
                    var g = this.l, k = this.t, l = this.r, m = this.b, n = this.balloonColor, q = this.fillColor,
                        p = this.borderColor, t = q;
                    void 0 != n && (this.adjustBorderColor ? t = p = n : q = n);
                    var r = this.horizontalPadding, u = this.verticalPadding, w = this.pointerWidth,
                        y = this.pointerOrientation, x = this.cornerRadius, A = c.fontFamily, z = this.fontSize;
                    void 0 == z && (z = c.fontSize);
                    var n = document.createElement("div"), B = c.classNamePrefix;
                    n.className = B + "-balloon-div";
                    this.className && (n.className = n.className + " " + B + "-balloon-div-" + this.className);
                    B = n.style;
                    this.disableMouseEvents && (B.pointerEvents = "none");
                    B.position = "absolute";
                    var C = this.minWidth, D = "";
                    isNaN(C) || (D = "min-width:" + (C - 2 * r) + "px; ");
                    n.innerHTML = '<div style="text-align:' + this.textAlign + "; " + D + "max-width:" + this.maxWidth + "px; font-size:" + z + "px; color:" + this.color + "; font-family:" +
                        A + '">' + this.text + "</div>";
                    c.chartDiv.appendChild(n);
                    this.textDiv = n;
                    var L = n.offsetWidth, I = n.offsetHeight;
                    n.clientHeight && (L = n.clientWidth, I = n.clientHeight);
                    A = I + 2 * u;
                    D = L + 2 * r;
                    !isNaN(C) && D < C && (D = C);
                    window.opera && (A += 2);
                    var S = !1, z = this.offsetY;
                    c.handDrawn && (z += c.handDrawScatter + 2);
                    "H" != y ? (C = a - D / 2, b < k + A + 10 && "down" != y ? (S = !0, e && (b += z), z = b + w, this.deltaSignY = -1) : (e && (b -= z), z = b - A - w, this.deltaSignY = 1)) : (2 * w > A && (w = A / 2), z = b - A / 2, a < g + (l - g) / 2 ? (C = a + w, this.deltaSignX = -1) : (C = a - D - w, this.deltaSignX = 1));
                    z + A >= m && (z = m - A);
                    z < k && (z = k);
                    C < g && (C = g);
                    C + D > l && (C = l - D);
                    var k = z + u, m = C + r, O = this.shadowAlpha, Q = this.shadowColor, r = this.borderThickness,
                        ia = this.bulletSize, H, u = this.fillAlpha, Z = this.borderAlpha;
                    this.showBullet && (H = d.circle(h, ia, t, u), f.push(H));
                    this.drop ? (g = D / 1.6, l = 0, "V" == y && (y = "down"), "H" == y && (y = "left"), "down" == y && (C = a + 1, z = b - g - g / 3), "up" == y && (l = 180, C = a + 1, z = b + g + g / 3), "left" == y && (l = 270, C = a + g + g / 3 + 2, z = b), "right" == y && (l = 90, C = a - g - g / 3 + 2, z = b), k = z - I / 2 + 1, m = C - L / 2 - 1, q = d.drop(h, g, l, q, u, r, p, Z)) : 0 < x || 0 === w ? (0 < O && (a = d.rect(h, D, A, q, 0, r + 1, Q, O, x), d.isModern ? a.translate(1, 1) : a.translate(4, 4), f.push(a)), q = d.rect(h, D, A, q, u, r, p, Z, x)) : (t = [], x = [], "H" != y ? (g = a - C, g > D - w && (g = D - w), g < w && (g = w), t = [0, g - w, a - C, g + w, D, D, 0, 0], x = S ? [0, 0, b - z, 0, 0, A, A, 0] : [A, A, b - z, A, A, 0, 0, A]) : (y = b - z, y > A - w && (y = A - w), y < w && (y = w), x = [0, y - w, b - z, y + w, A, A, 0, 0], t = a < g + (l - g) / 2 ? [0, 0, C < a ? 0 : a - C, 0, 0, D, D, 0] : [D, D, C + D > a ? D : a - C, D, D, 0, 0, D]), 0 < O && (a = d.polygon(h, t, x, q, 0, r, Q, O), a.translate(1, 1), f.push(a)), q = d.polygon(h, t, x, q, u, r, p, Z));
                    this.bg = q;
                    f.push(q);
                    q.toFront();
                    d.setCN(c, q, "balloon-bg");
                    this.className &&
                    d.setCN(c, q, "balloon-bg-" + this.className);
                    h = 1 * this.deltaSignX;
                    m += this.sdx;
                    k += this.sdy;
                    B.left = m + "px";
                    B.top = k + "px";
                    f.translate(C - h, z, 1, !0);
                    q = q.getBBox();
                    this.bottom = z + A + 1;
                    this.yPos = q.y + z;
                    H && H.translate(this.pointToX - C + h, b - z);
                    b = this.animationDuration;
                    0 < this.animationDuration && !e && !isNaN(this.prevX) && (f.translate(this.prevX, this.prevY, NaN, !0), f.animate({translate: C - h + "," + z}, b, "easeOutSine"), n && (B.left = this.prevTX + "px", B.top = this.prevTY + "px", this.xAnim = c.animate({node: n}, "left", this.prevTX, m, b, "easeOutSine", "px"), this.yAnim = c.animate({node: n}, "top", this.prevTY, k, b, "easeOutSine", "px")));
                    this.prevX = C - h;
                    this.prevY = z;
                    this.prevTX = m;
                    this.prevTY = k
                }
            }
        }, fixPrevious: function () {
            this.rPrevX = this.prevX;
            this.rPrevY = this.prevY;
            this.rPrevTX = this.prevTX;
            this.rPrevTY = this.prevTY
        }, restorePrevious: function () {
            this.prevX = this.rPrevX;
            this.prevY = this.rPrevY;
            this.prevTX = this.rPrevTX;
            this.prevTY = this.rPrevTY
        }, followMouse: function () {
            if (this.follow && this.show) {
                var a = this.chart.mouseX - this.offsetX * this.deltaSignX - this.sdx, b = this.chart.mouseY -
                    this.sdy;
                this.pointToX = a;
                this.pointToY = b;
                if (a != this.previousX || b != this.previousY) if (this.previousX = a, this.previousY = b, 0 === this.cornerRadius) this.draw(); else {
                    var c = this.set;
                    if (c) {
                        var d = c.getBBox(), a = a - d.width / 2, h = b - d.height - 10;
                        a < this.l && (a = this.l);
                        a > this.r - d.width && (a = this.r - d.width);
                        h < this.t && (h = b + 10);
                        c.translate(a, h);
                        b = this.textDiv.style;
                        b.left = a + this.horizontalPadding + "px";
                        b.top = h + this.verticalPadding + "px"
                    }
                }
            }
        }, changeColor: function (a) {
            this.balloonColor = a
        }, setBounds: function (a, b, c, d) {
            this.l = a;
            this.t = b;
            this.r = c;
            this.b = d;
            this.destroyTO && clearTimeout(this.destroyTO)
        }, showBalloon: function (a) {
            if (this.text != a || this.positionChanged) this.text = a, this.isHiding = !1, this.show = !0, this.destroyTO && clearTimeout(this.destroyTO), a = this.chart, this.fadeAnim1 && a.stopAnim(this.fadeAnim1), this.fadeAnim2 && a.stopAnim(this.fadeAnim2), this.draw(), this.positionChanged = !1
        }, hide: function (a) {
            var b = this;
            b.text = void 0;
            isNaN(a) && (a = b.fadeOutDuration);
            var c = b.chart;
            if (0 < a && !b.isHiding) {
                b.isHiding = !0;
                b.destroyTO && clearTimeout(b.destroyTO);
                b.destroyTO = setTimeout(function () {
                    b.destroy.call(b)
                }, 1E3 * a);
                b.follow = !1;
                b.show = !1;
                var d = b.set;
                d && (d.setAttr("opacity", b.fillAlpha), b.fadeAnim1 = d.animate({opacity: 0}, a, "easeInSine"));
                b.textDiv && (b.fadeAnim2 = c.animate({node: b.textDiv}, "opacity", 1, 0, a, "easeInSine", ""))
            } else b.show = !1, b.follow = !1, b.destroy()
        }, setPosition: function (a, b) {
            if (a != this.pointToX || b != this.pointToY) this.previousX = this.pointToX, this.previousY = this.pointToY, this.pointToX = a, this.pointToY = b, this.positionChanged = !0
        }, followCursor: function (a) {
            var b = this;
            b.follow = a;
            clearInterval(b.interval);
            var c = b.chart.mouseX - b.sdx, d = b.chart.mouseY - b.sdy;
            !isNaN(c) && a && (b.pointToX = c - b.offsetX * b.deltaSignX, b.pointToY = d, b.followMouse(), b.interval = setInterval(function () {
                b.followMouse.call(b)
            }, 40))
        }, removeDiv: function () {
            if (this.textDiv) {
                var a = this.textDiv.parentNode;
                a && a.removeChild(this.textDiv)
            }
        }, destroy: function () {
            clearInterval(this.interval);
            d.remove(this.set);
            this.removeDiv();
            this.set = null
        }
    })
})();
(function () {
    var d = window.AmCharts;
    d.AmCoordinateChart = d.Class({
        inherits: d.AmChart, construct: function (a) {
            d.AmCoordinateChart.base.construct.call(this, a);
            this.theme = a;
            this.createEvents("rollOverGraphItem", "rollOutGraphItem", "clickGraphItem", "doubleClickGraphItem", "rightClickGraphItem", "clickGraph", "rollOverGraph", "rollOutGraph");
            this.startAlpha = 1;
            this.startDuration = 0;
            this.startEffect = "elastic";
            this.sequencedAnimation = !0;
            this.colors = "#FF6600 #FCD202 #B0DE09 #0D8ECF #2A0CD0 #CD0D74 #CC0000 #00CC00 #0000CC #DDDDDD #999999 #333333 #990000".split(" ");
            this.balloonDateFormat = "MMM DD, YYYY";
            this.valueAxes = [];
            this.graphs = [];
            this.guides = [];
            this.gridAboveGraphs = !1;
            d.applyTheme(this, a, "AmCoordinateChart")
        }, initChart: function () {
            d.AmCoordinateChart.base.initChart.call(this);
            this.drawGraphs = !0;
            var a = this.categoryAxis;
            a && (this.categoryAxis = d.processObject(a, d.CategoryAxis, this.theme));
            this.processValueAxes();
            this.createValueAxes();
            this.processGraphs();
            this.processGuides();
            d.VML && (this.startAlpha = 1);
            this.setLegendData(this.graphs);
            this.gridAboveGraphs && (this.gridSet.toFront(), this.bulletSet.toFront(), this.balloonsSet.toFront())
        }, createValueAxes: function () {
            if (0 === this.valueAxes.length) {
                var a = new d.ValueAxis;
                this.addValueAxis(a)
            }
        }, parseData: function () {
            this.processValueAxes();
            this.processGraphs()
        }, parseSerialData: function (a) {
            this.chartData = [];
            if (a) if (0 < this.processTimeout) {
                1 > this.processCount && (this.processCount = 1);
                var b = a.length / this.processCount;
                this.parseCount = Math.ceil(b) - 1;
                for (var c = 0; c < b; c++) this.delayParseSerialData(a, c)
            } else this.parseCount = 0, this.parsePartSerialData(a, 0, a.length, 0); else this.onDataUpdated()
        }, delayParseSerialData: function (a, b) {
            var c = this, d = c.processCount;
            setTimeout(function () {
                c.parsePartSerialData.call(c, a, b * d, (b + 1) * d, b)
            }, c.processTimeout)
        }, parsePartSerialData: function (a, b, c, e) {
            c > a.length && (c = a.length);
            var h = this.graphs, f = {}, g = this.seriesIdField;
            g || (g = this.categoryField);
            var k = !1, l, m = this.categoryAxis, n, q, p;
            m && (k = m.parseDates, n = m.forceShowField, p = m.classNameField, q = m.labelColorField, l = m.categoryFunction);
            var t, r, u = {}, w;
            k && (t = d.extractPeriod(m.minPeriod), r = t.period, t = t.count, w = d.getPeriodDuration(r, t));
            var y = {};
            this.lookupTable = y;
            var x, A = this.dataDateFormat, z = {};
            for (x = b; x < c; x++) {
                var B = {}, C = a[x];
                b = C[this.categoryField];
                B.dataContext = C;
                B.category = l ? l(b, C, m) : String(b);
                n && (B.forceShow = C[n]);
                p && (B.className = C[p]);
                q && (B.labelColor = C[q]);
                y[C[g]] = B;
                if (k && (m.categoryFunction ? b = m.categoryFunction(b, C, m) : (!A || b instanceof Date || (b = b.toString() + " |"), b = d.getDate(b, A, m.minPeriod)), b = d.resetDateToMin(b, r, t, m.firstDayOfWeek), B.category = b, B.time = b.getTime(), isNaN(B.time))) continue;
                var D = this.valueAxes;
                B.axes = {};
                B.x = {};
                var L;
                for (L = 0; L < D.length; L++) {
                    var I = D[L].id;
                    B.axes[I] = {};
                    B.axes[I].graphs = {};
                    var S;
                    for (S = 0; S < h.length; S++) {
                        b = h[S];
                        var O = b.id, Q = 1.1;
                        isNaN(b.gapPeriod) || (Q = b.gapPeriod);
                        var ia = b.periodValue;
                        if (b.valueAxis.id == I) {
                            B.axes[I].graphs[O] = {};
                            var H = {};
                            H.index = x;
                            var Z = C;
                            b.dataProvider && (Z = f);
                            H.values = this.processValues(Z, b, ia);
                            !b.connect && z && z[O] && 0 < Q && B.time - u[O] >= w * Q && (z[O].gap = !0);
                            this.processFields(b, H, Z);
                            H.category = B.category;
                            H.serialDataItem = B;
                            H.graph = b;
                            B.axes[I].graphs[O] = H;
                            u[O] = B.time;
                            z[O] = H
                        }
                    }
                }
                this.chartData[x] = B
            }
            if (this.parseCount == e) {
                for (a = 0; a < h.length; a++) b = h[a], b.dataProvider && this.parseGraphData(b);
                this.dataChanged = !1;
                this.dispatchDataUpdated = !0;
                this.onDataUpdated()
            }
        }, processValues: function (a, b, c) {
            var e = {}, h, f = !1;
            "candlestick" != b.type && "ohlc" != b.type || "" === c || (f = !0);
            for (var g = "value error open close low high".split(" "), k = 0; k < g.length; k++) {
                var l = g[k];
                "value" != l && "error" != l && f && (c = l.charAt(0).toUpperCase() + l.slice(1));
                var m = a[b[l + "Field"] + c];
                null !== m && (h = Number(m), isNaN(h) || (e[l] = h), "date" == b.valueAxis.type && void 0 !== m && (h = d.getDate(m, b.chart.dataDateFormat), e[l] = h.getTime()))
            }
            return e
        }, parseGraphData: function (a) {
            var b = a.dataProvider, c = a.seriesIdField;
            c || (c = this.seriesIdField);
            c || (c = this.categoryField);
            var d;
            for (d = 0; d < b.length; d++) {
                var h = b[d], f = this.lookupTable[String(h[c])], g = a.valueAxis.id;
                f && (g = f.axes[g].graphs[a.id], g.serialDataItem = f, g.values = this.processValues(h, a, a.periodValue), this.processFields(a, g, h))
            }
        }, addValueAxis: function (a) {
            a.chart = this;
            this.valueAxes.push(a);
            this.validateData()
        }, removeValueAxesAndGraphs: function () {
            var a = this.valueAxes, b;
            for (b = a.length - 1; -1 < b; b--) this.removeValueAxis(a[b])
        }, removeValueAxis: function (a) {
            var b = this.graphs, c;
            for (c = b.length - 1; 0 <= c; c--) {
                var d = b[c];
                d && d.valueAxis == a && this.removeGraph(d)
            }
            b = this.valueAxes;
            for (c = b.length - 1; 0 <= c; c--) b[c] == a && b.splice(c, 1);
            this.validateData()
        }, addGraph: function (a) {
            this.graphs.push(a);
            this.chooseGraphColor(a, this.graphs.length - 1);
            this.validateData()
        }, removeGraph: function (a) {
            var b = this.graphs, c;
            for (c = b.length - 1; 0 <= c; c--) b[c] == a && (b.splice(c, 1), a.destroy());
            this.validateData()
        }, handleValueAxisZoom: function () {
        }, processValueAxes: function () {
            var a = this.valueAxes, b;
            for (b = 0; b < a.length; b++) {
                var c = a[b], c = d.processObject(c, d.ValueAxis, this.theme);
                a[b] = c;
                c.chart = this;
                c.init();
                this.listenTo(c, "axisIntZoomed", this.handleValueAxisZoom);
                c.id || (c.id = "valueAxisAuto" + b + "_" + (new Date).getTime());
                void 0 === c.usePrefixes && (c.usePrefixes = this.usePrefixes)
            }
        }, processGuides: function () {
            var a = this.guides, b = this.categoryAxis;
            if (a) for (var c = 0; c < a.length; c++) {
                var e = a[c];
                (void 0 !== e.category || void 0 !== e.date) && b && b.addGuide(e);
                e.id || (e.id = "guideAuto" + c + "_" + (new Date).getTime());
                var h = e.valueAxis;
                h ? (d.isString(h) && (h = this.getValueAxisById(h)), h ? h.addGuide(e) : this.valueAxes[0].addGuide(e)) : isNaN(e.value) || this.valueAxes[0].addGuide(e)
            }
        }, processGraphs: function () {
            var a = this.graphs, b;
            this.graphsById = {};
            for (b = 0; b < a.length; b++) {
                var c = a[b], c = d.processObject(c, d.AmGraph, this.theme);
                a[b] = c;
                this.chooseGraphColor(c, b);
                c.chart = this;
                c.init();
                d.isString(c.valueAxis) && (c.valueAxis = this.getValueAxisById(c.valueAxis));
                c.valueAxis || (c.valueAxis = this.valueAxes[0]);
                c.id || (c.id = "graphAuto" + b + "_" + (new Date).getTime());
                this.graphsById[c.id] = c
            }
        }, formatString: function (a, b, c) {
            var e = b.graph, h = e.valueAxis;
            h.duration && b.values.value && (h = d.formatDuration(b.values.value, h.duration, "", h.durationUnits, h.maxInterval, h.numberFormatter), a = a.split("[[value]]").join(h));
            a = d.massReplace(a, {"[[title]]": e.title, "[[description]]": b.description});
            a = c ? d.fixNewLines(a) : d.fixBrakes(a);
            return a = d.cleanFromEmpty(a)
        }, getBalloonColor: function (a, b, c) {
            var e = a.lineColor, h = a.balloonColor;
            c && (h = e);
            c = a.fillColorsR;
            "object" == typeof c ? e = c[0] : void 0 !== c && (e = c);
            b.isNegative && (c = a.negativeLineColor, a = a.negativeFillColors, "object" == typeof a ? c = a[0] : void 0 !== a && (c = a), void 0 !== c && (e = c));
            void 0 !== b.color && (e = b.color);
            void 0 !== b.lineColor && (e = b.lineColor);
            b = b.fillColors;
            void 0 !== b && (e = b, d.ifArray(b) && (e = b[0]));
            void 0 === h && (h = e);
            return h
        }, getGraphById: function (a) {
            return d.getObjById(this.graphs, a)
        }, getValueAxisById: function (a) {
            return d.getObjById(this.valueAxes, a)
        }, processFields: function (a, b, c) {
            if (a.itemColors) {
                var e = a.itemColors, h = b.index;
                b.color = h < e.length ? e[h] : d.randomColor()
            }
            e = "lineColor color alpha fillColors description bullet customBullet bulletSize bulletConfig url labelColor dashLength pattern gap className".split(" ");
            for (h = 0; h < e.length; h++) {
                var f = e[h], g = a[f + "Field"];
                g && (g = c[g], d.isDefined(g) && (b[f] = g))
            }
            b.dataContext = c
        }, chooseGraphColor: function (a, b) {
            if (a.lineColor) a.lineColorR = a.lineColor; else {
                var c;
                c = this.colors.length > b ? this.colors[b] : a.lineColorR ? a.lineColorR : d.randomColor();
                a.lineColorR = c
            }
            a.fillColorsR = a.fillColors ? a.fillColors : a.lineColorR;
            a.bulletBorderColorR = a.bulletBorderColor ? a.bulletBorderColor : a.useLineColorForBulletBorder ? a.lineColorR : a.bulletColor;
            a.bulletColorR = a.bulletColor ? a.bulletColor : a.lineColorR;
            if (c = this.patterns) a.pattern = c[b]
        }, handleLegendEvent: function (a) {
            var b = a.type;
            a = a.dataItem;
            if (!this.legend.data && a) {
                var c = a.hidden, d = a.showBalloon;
                switch (b) {
                    case"clickMarker":
                        this.textClickEnabled && (d ? this.hideGraphsBalloon(a) : this.showGraphsBalloon(a));
                        break;
                    case"clickLabel":
                        d ? this.hideGraphsBalloon(a) : this.showGraphsBalloon(a);
                        break;
                    case"rollOverItem":
                        c || this.highlightGraph(a);
                        break;
                    case"rollOutItem":
                        c || this.unhighlightGraph();
                        break;
                    case"hideItem":
                        this.hideGraph(a);
                        break;
                    case"showItem":
                        this.showGraph(a)
                }
            }
        }, highlightGraph: function (a) {
            var b = this.graphs, c, d = .2;
            this.legend && (d = this.legend.rollOverGraphAlpha);
            if (1 != d) for (c = 0; c < b.length; c++) {
                var h = b[c];
                h != a && h.changeOpacity(d)
            }
        }, unhighlightGraph: function () {
            var a;
            this.legend && (a = this.legend.rollOverGraphAlpha);
            if (1 != a) {
                a = this.graphs;
                var b;
                for (b = 0; b < a.length; b++) a[b].changeOpacity(1)
            }
        }, showGraph: function (a) {
            a.switchable && (a.hidden = !1, this.dataChanged = !0, "xy" != this.type && (this.marginsUpdated = !1), this.chartCreated && this.initChart())
        }, hideGraph: function (a) {
            a.switchable && (this.dataChanged = !0, "xy" != this.type && (this.marginsUpdated = !1), a.hidden = !0, this.chartCreated && this.initChart())
        }, hideGraphsBalloon: function (a) {
            a.showBalloon = !1;
            this.updateLegend()
        }, showGraphsBalloon: function (a) {
            a.showBalloon = !0;
            this.updateLegend()
        }, updateLegend: function () {
            this.legend && this.legend.invalidateSize()
        }, resetAnimation: function () {
            var a = this.graphs;
            if (a) {
                var b;
                for (b = 0; b < a.length; b++) a[b].animationPlayed = !1
            }
        }, animateAgain: function () {
            this.resetAnimation();
            this.validateNow()
        }
    })
})();
(function () {
    var d = window.AmCharts;
    d.TrendLine = d.Class({
        construct: function (a) {
            this.cname = "TrendLine";
            this.createEvents("click");
            this.isProtected = !1;
            this.dashLength = 0;
            this.lineColor = "#00CC00";
            this.lineThickness = this.lineAlpha = 1;
            d.applyTheme(this, a, this.cname)
        }, draw: function () {
            var a = this;
            a.destroy();
            var b = a.chart, c = b.container, e, h, f, g, k = a.categoryAxis, l = a.initialDate, m = a.initialCategory,
                n = a.finalDate, q = a.finalCategory, p = a.valueAxis, t = a.valueAxisX, r = a.initialXValue,
                u = a.finalXValue, w = a.initialValue, y = a.finalValue, x = p.recalculateToPercents,
                A = b.dataDateFormat;
            k && (l && (l = d.getDate(l, A, "fff"), a.initialDate = l, e = k.dateToCoordinate(l)), m && (e = k.categoryToCoordinate(m)), n && (n = d.getDate(n, A, "fff"), a.finalDate = n, h = k.dateToCoordinate(n)), q && (h = k.categoryToCoordinate(q)));
            t && !x && (isNaN(r) || (e = t.getCoordinate(r)), isNaN(u) || (h = t.getCoordinate(u)));
            p && !x && (isNaN(w) || (f = p.getCoordinate(w)), isNaN(y) || (g = p.getCoordinate(y)));
            if (!(isNaN(e) || isNaN(h) || isNaN(f) || isNaN(f))) {
                b.rotate ? (k = [f, g], g = [e, h]) : (k = [e, h], g = [f, g]);
                l = a.lineColor;
                f = d.line(c, k, g, l, a.lineAlpha, a.lineThickness, a.dashLength);
                e = k;
                h = g;
                q = k[1] - k[0];
                p = g[1] - g[0];
                0 === q && (q = .01);
                0 === p && (p = .01);
                m = q / Math.abs(q);
                n = p / Math.abs(p);
                p = 90 * Math.PI / 180 - Math.asin(q / (q * p / Math.abs(q * p) * Math.sqrt(Math.pow(q, 2) + Math.pow(p, 2))));
                q = Math.abs(5 * Math.cos(p));
                p = Math.abs(5 * Math.sin(p));
                e.push(k[1] - m * p, k[0] - m * p);
                h.push(g[1] + n * q, g[0] + n * q);
                g = d.polygon(c, e, h, l, .005, 0);
                c = c.set([g, f]);
                c.translate(b.marginLeftReal, b.marginTopReal);
                b.trendLinesSet.push(c);
                d.setCN(b, f, "trend-line");
                d.setCN(b, f, "trend-line-" + a.id);
                a.line = f;
                a.set = c;
                if (f = a.initialImage) f = d.processObject(f, d.Image, a.theme), f.chart = b, f.draw(), f.translate(e[0] + f.offsetX, h[0] + f.offsetY), c.push(f.set);
                if (f = a.finalImage) f = d.processObject(f, d.Image, a.theme), f.chart = b, f.draw(), f.translate(e[1] + f.offsetX, h[1] + f.offsetY), c.push(f.set);
                g.mouseup(function () {
                    a.handleLineClick()
                }).mouseover(function () {
                    a.handleLineOver()
                }).mouseout(function () {
                    a.handleLineOut()
                });
                g.touchend && g.touchend(function () {
                    a.handleLineClick()
                });
                c.clipRect(0, 0, b.plotAreaWidth, b.plotAreaHeight)
            }
        }, handleLineClick: function () {
            this.fire({type: "click", trendLine: this, chart: this.chart})
        }, handleLineOver: function () {
            var a = this.rollOverColor;
            void 0 !== a && this.line.attr({stroke: a});
            this.balloonText && (clearTimeout(this.chart.hoverInt), a = this.line.getBBox(), this.chart.showBalloon(this.balloonText, this.lineColor, !0, this.x + a.x + a.width / 2, this.y + a.y + a.height / 2))
        }, handleLineOut: function () {
            this.line.attr({stroke: this.lineColor});
            this.balloonText && this.chart.hideBalloon()
        }, destroy: function () {
            d.remove(this.set)
        }
    })
})();
(function () {
    var d = window.AmCharts;
    d.Image = d.Class({
        construct: function (a) {
            this.cname = "Image";
            this.height = this.width = 20;
            this.rotation = this.offsetY = this.offsetX = 0;
            this.balloonColor = this.color = "#000000";
            this.opacity = 1;
            d.applyTheme(this, a, this.cname)
        }, draw: function () {
            var a = this;
            a.set && a.set.remove();
            var b = a.chart.container;
            a.set = b.set();
            var c, d;
            a.url ? (c = b.image(a.url, 0, 0, a.width, a.height), d = 1) : a.svgPath && (c = b.path(a.svgPath), c.setAttr("fill", a.color), c.setAttr("stroke", a.outlineColor), b = c.getBBox(), d = Math.min(a.width / b.width, a.height / b.height));
            c && (c.setAttr("opacity", a.opacity), a.set.rotate(a.rotation), c.translate(-a.width / 2, -a.height / 2, d), a.balloonText && c.mouseover(function () {
                a.chart.showBalloon(a.balloonText, a.balloonColor, !0)
            }).mouseout(function () {
                a.chart.hideBalloon()
            }).touchend(function () {
                a.chart.hideBalloon()
            }).touchstart(function () {
                a.chart.showBalloon(a.balloonText, a.balloonColor, !0)
            }), a.set.push(c))
        }, translate: function (a, b) {
            this.set && this.set.translate(a, b)
        }
    })
})();
(function () {
    var d = window.AmCharts;
    d.circle = function (a, b, c, e, h, f, g, k, l) {
        0 >= b && (b = .001);
        if (void 0 == h || 0 === h) h = .01;
        void 0 === f && (f = "#000000");
        void 0 === g && (g = 0);
        e = {fill: c, stroke: f, "fill-opacity": e, "stroke-width": h, "stroke-opacity": g};
        a = isNaN(l) ? a.circle(0, 0, b).attr(e) : a.ellipse(0, 0, b, l).attr(e);
        k && a.gradient("radialGradient", [c, d.adjustLuminosity(c, -.6)]);
        return a
    };
    d.text = function (a, b, c, e, h, f, g, k) {
        f || (f = "middle");
        "right" == f && (f = "end");
        "left" == f && (f = "start");
        isNaN(k) && (k = 1);
        void 0 !== b && (b = String(b), d.isIE && !d.isModern && (b = b.replace("&amp;", "&"), b = b.replace("&", "&amp;")));
        c = {fill: c, "font-family": e, "font-size": h + "px", opacity: k};
        !0 === g && (c["font-weight"] = "bold");
        c["text-anchor"] = f;
        return a.text(b, c)
    };
    d.polygon = function (a, b, c, e, h, f, g, k, l, m, n) {
        isNaN(f) && (f = .01);
        isNaN(k) && (k = h);
        var q = e, p = !1;
        "object" == typeof q && 1 < q.length && (p = !0, q = q[0]);
        void 0 === g && (g = q);
        h = {fill: q, stroke: g, "fill-opacity": h, "stroke-width": f, "stroke-opacity": k};
        void 0 !== n && 0 < n && (h["stroke-dasharray"] = n);
        n = d.dx;
        f = d.dy;
        a.handDrawn && (c = d.makeHD(b, c, a.handDrawScatter), b = c[0], c = c[1]);
        g = Math.round;
        m && (b[t] = d.roundTo(b[t], 5), c[t] = d.roundTo(c[t], 5), g = Number);
        k = "M" + (g(b[0]) + n) + "," + (g(c[0]) + f);
        for (var t = 1; t < b.length; t++) m && (b[t] = d.roundTo(b[t], 5), c[t] = d.roundTo(c[t], 5)), k += " L" + (g(b[t]) + n) + "," + (g(c[t]) + f);
        a = a.path(k + " Z").attr(h);
        p && a.gradient("linearGradient", e, l);
        return a
    };
    d.rect = function (a, b, c, e, h, f, g, k, l, m, n) {
        if (isNaN(b) || isNaN(c)) return a.set();
        isNaN(f) && (f = 0);
        void 0 === l && (l = 0);
        void 0 === m && (m = 270);
        isNaN(h) && (h = 0);
        var q = e, p = !1;
        "object" == typeof q && (q = q[0], p = !0);
        void 0 === g && (g = q);
        void 0 === k && (k = h);
        b = Math.round(b);
        c = Math.round(c);
        var t = 0, r = 0;
        0 > b && (b = Math.abs(b), t = -b);
        0 > c && (c = Math.abs(c), r = -c);
        t += d.dx;
        r += d.dy;
        h = {fill: q, stroke: g, "fill-opacity": h, "stroke-opacity": k};
        void 0 !== n && 0 < n && (h["stroke-dasharray"] = n);
        a = a.rect(t, r, b, c, l, f).attr(h);
        p && a.gradient("linearGradient", e, m);
        return a
    };
    d.bullet = function (a, b, c, e, h, f, g, k, l, m, n, q, p) {
        var t;
        "circle" == b && (b = "round");
        switch (b) {
            case"round":
                t = d.circle(a, c / 2, e, h, f, g, k);
                break;
            case"square":
                t = d.polygon(a, [-c /
                2, c / 2, c / 2, -c / 2], [c / 2, c / 2, -c / 2, -c / 2], e, h, f, g, k, m - 180, void 0, p);
                break;
            case"rectangle":
                t = d.polygon(a, [-c, c, c, -c], [c / 2, c / 2, -c / 2, -c / 2], e, h, f, g, k, m - 180, void 0, p);
                break;
            case"diamond":
                t = d.polygon(a, [-c / 2, 0, c / 2, 0], [0, -c / 2, 0, c / 2], e, h, f, g, k);
                break;
            case"triangleUp":
                t = d.triangle(a, c, 0, e, h, f, g, k);
                break;
            case"triangleDown":
                t = d.triangle(a, c, 180, e, h, f, g, k);
                break;
            case"triangleLeft":
                t = d.triangle(a, c, 270, e, h, f, g, k);
                break;
            case"triangleRight":
                t = d.triangle(a, c, 90, e, h, f, g, k);
                break;
            case"bubble":
                t = d.circle(a, c / 2, e, h, f, g, k, !0);
                break;
            case"line":
                t = d.line(a, [-c / 2, c / 2], [0, 0], e, h, f, g, k);
                break;
            case"yError":
                t = a.set();
                t.push(d.line(a, [0, 0], [-c / 2, c / 2], e, h, f));
                t.push(d.line(a, [-l, l], [-c / 2, -c / 2], e, h, f));
                t.push(d.line(a, [-l, l], [c / 2, c / 2], e, h, f));
                break;
            case"xError":
                t = a.set(), t.push(d.line(a, [-c / 2, c / 2], [0, 0], e, h, f)), t.push(d.line(a, [-c / 2, -c / 2], [-l, l], e, h, f)), t.push(d.line(a, [c / 2, c / 2], [-l, l], e, h, f))
        }
        t && t.pattern(n, NaN, q);
        return t
    };
    d.triangle = function (a, b, c, d, h, f, g, k) {
        if (void 0 === f || 0 === f) f = 1;
        void 0 === g && (g = "#000");
        void 0 === k && (k = 0);
        d = {fill: d, stroke: g, "fill-opacity": h, "stroke-width": f, "stroke-opacity": k};
        b /= 2;
        var l;
        0 === c && (l = " M" + -b + "," + b + " L0," + -b + " L" + b + "," + b + " Z");
        180 == c && (l = " M" + -b + "," + -b + " L0," + b + " L" + b + "," + -b + " Z");
        90 == c && (l = " M" + -b + "," + -b + " L" + b + ",0 L" + -b + "," + b + " Z");
        270 == c && (l = " M" + -b + ",0 L" + b + "," + b + " L" + b + "," + -b + " Z");
        return a.path(l).attr(d)
    };
    d.line = function (a, b, c, e, h, f, g, k, l, m, n) {
        if (a.handDrawn && !n) return d.handDrawnLine(a, b, c, e, h, f, g, k, l, m, n);
        f = {fill: "none", "stroke-width": f};
        void 0 !== g && 0 < g && (f["stroke-dasharray"] = g);
        isNaN(h) || (f["stroke-opacity"] = h);
        e && (f.stroke = e);
        e = Math.round;
        m && (e = Number, b[0] = d.roundTo(b[0], 5), c[0] = d.roundTo(c[0], 5));
        m = d.dx;
        h = d.dy;
        g = "M" + (e(b[0]) + m) + "," + (e(c[0]) + h);
        for (k = 1; k < b.length; k++) b[k] = d.roundTo(b[k], 5), c[k] = d.roundTo(c[k], 5), g += " L" + (e(b[k]) + m) + "," + (e(c[k]) + h);
        if (d.VML) return a.path(g, void 0, !0).attr(f);
        l && (g += " M0,0 L0,0");
        return a.path(g).attr(f)
    };
    d.makeHD = function (a, b, c) {
        for (var d = [], h = [], f = 1; f < a.length; f++) for (var g = Number(a[f - 1]), k = Number(b[f - 1]), l = Number(a[f]), m = Number(b[f]), n = Math.round(Math.sqrt(Math.pow(l - g, 2) + Math.pow(m - k, 2)) / 50) + 1, l = (l - g) / n, m = (m - k) / n, q = 0; q <= n; q++) {
            var p = k + q * m + Math.random() * c;
            d.push(g + q * l + Math.random() * c);
            h.push(p)
        }
        return [d, h]
    };
    d.handDrawnLine = function (a, b, c, e, h, f, g, k, l, m) {
        var n, q = a.set();
        for (n = 1; n < b.length; n++) for (var p = [b[n - 1], b[n]], t = [c[n - 1], c[n]], t = d.makeHD(p, t, a.handDrawScatter), p = t[0], t = t[1], r = 1; r < p.length; r++) q.push(d.line(a, [p[r - 1], p[r]], [t[r - 1], t[r]], e, h, f + Math.random() * a.handDrawThickness - a.handDrawThickness / 2, g, k, l, m, !0));
        return q
    };
    d.doNothing =
        function (a) {
            return a
        };
    d.drop = function (a, b, c, d, h, f, g, k) {
        var l = 1 / 180 * Math.PI, m = c - 20, n = Math.sin(m * l) * b, q = Math.cos(m * l) * b,
            p = Math.sin((m + 40) * l) * b, t = Math.cos((m + 40) * l) * b, r = .8 * b, u = -b / 3, w = b / 3;
        0 === c && (u = -u, w = 0);
        180 == c && (w = 0);
        90 == c && (u = 0);
        270 == c && (u = 0, w = -w);
        c = {fill: d, stroke: g, "stroke-width": f, "stroke-opacity": k, "fill-opacity": h};
        b = "M" + n + "," + q + " A" + b + "," + b + ",0,1,1," + p + "," + t + (" A" + r + "," + r + ",0,0,0," + (Math.sin((m + 20) * l) * b + w) + "," + (Math.cos((m + 20) * l) * b + u));
        b += " A" + r + "," + r + ",0,0,0," + n + "," + q;
        return a.path(b, void 0, void 0, "1000,1000").attr(c)
    };
    d.wedge = function (a, b, c, e, h, f, g, k, l, m, n, q, p, t) {
        var r = Math.round;
        f = r(f);
        g = r(g);
        k = r(k);
        var u = r(g / f * k), w = d.VML, y = 359.5 + f / 100;
        359.94 < y && (y = 359.94);
        h >= y && (h = y);
        var x = 1 / 180 * Math.PI, y = b + Math.sin(e * x) * k, A = c - Math.cos(e * x) * u,
            z = b + Math.sin(e * x) * f, B = c - Math.cos(e * x) * g, C = b + Math.sin((e + h) * x) * f,
            D = c - Math.cos((e + h) * x) * g, L = b + Math.sin((e + h) * x) * k, x = c - Math.cos((e + h) * x) * u,
            I = {fill: d.adjustLuminosity(m.fill, -.2), "stroke-opacity": 0, "fill-opacity": m["fill-opacity"]}, S = 0;
        180 < Math.abs(h) && (S = 1);
        e = a.set();
        var O;
        w && (y = r(10 * y), z = r(10 * z), C = r(10 * C), L = r(10 * L), A = r(10 * A), B = r(10 * B), D = r(10 * D), x = r(10 * x), b = r(10 * b), l = r(10 * l), c = r(10 * c), f *= 10, g *= 10, k *= 10, u *= 10, 1 > Math.abs(h) && 1 >= Math.abs(C - z) && 1 >= Math.abs(D - B) && (O = !0));
        h = "";
        var Q;
        q && (I["fill-opacity"] = 0, I["stroke-opacity"] = m["stroke-opacity"] / 2, I.stroke = m.stroke);
        if (0 < l) {
            Q = " M" + y + "," + (A + l) + " L" + z + "," + (B + l);
            w ? (O || (Q += " A" + (b - f) + "," + (l + c - g) + "," + (b + f) + "," + (l + c + g) + "," + z + "," + (B + l) + "," + C + "," + (D + l)), Q += " L" + L + "," + (x + l), 0 < k && (O || (Q += " B" + (b - k) + "," + (l + c - u) + "," + (b + k) + "," +
                (l + c + u) + "," + L + "," + (l + x) + "," + y + "," + (l + A)))) : (Q += " A" + f + "," + g + ",0," + S + ",1," + C + "," + (D + l) + " L" + L + "," + (x + l), 0 < k && (Q += " A" + k + "," + u + ",0," + S + ",0," + y + "," + (A + l)));
            Q += " Z";
            var ia = l;
            w && (ia /= 10);
            for (var H = 0; H < ia; H += 10) {
                var Z = a.path(Q, void 0, void 0, "1000,1000").attr(I);
                e.push(Z);
                Z.translate(0, -H)
            }
            Q = a.path(" M" + y + "," + A + " L" + y + "," + (A + l) + " L" + z + "," + (B + l) + " L" + z + "," + B + " L" + y + "," + A + " Z", void 0, void 0, "1000,1000").attr(I);
            l = a.path(" M" + C + "," + D + " L" + C + "," + (D + l) + " L" + L + "," + (x + l) + " L" + L + "," + x + " L" + C + "," + D + " Z", void 0, void 0, "1000,1000").attr(I);
            e.push(Q);
            e.push(l)
        }
        w ? (O || (h = " A" + r(b - f) + "," + r(c - g) + "," + r(b + f) + "," + r(c + g) + "," + r(z) + "," + r(B) + "," + r(C) + "," + r(D)), g = " M" + r(y) + "," + r(A) + " L" + r(z) + "," + r(B) + h + " L" + r(L) + "," + r(x)) : g = " M" + y + "," + A + " L" + z + "," + B + (" A" + f + "," + g + ",0," + S + ",1," + C + "," + D) + " L" + L + "," + x;
        0 < k && (w ? O || (g += " B" + (b - k) + "," + (c - u) + "," + (b + k) + "," + (c + u) + "," + L + "," + x + "," + y + "," + A) : g += " A" + k + "," + u + ",0," + S + ",0," + y + "," + A);
        a.handDrawn && (k = d.line(a, [y, z], [A, B], m.stroke, m.thickness * Math.random() * a.handDrawThickness, m["stroke-opacity"]), e.push(k));
        k = a.path(g + " Z", void 0, void 0, "1000,1000").attr(m);
        if (n) {
            u = [];
            for (w = 0; w < n.length; w++) u.push(d.adjustLuminosity(m.fill, n[w]));
            "radial" != t || d.isModern || (u = []);
            0 < u.length && k.gradient(t + "Gradient", u)
        }
        d.isModern && "radial" == t && k.grad && (k.grad.setAttribute("gradientUnits", "userSpaceOnUse"), k.grad.setAttribute("r", f), k.grad.setAttribute("gradientTransform", "translate(" + (b - a.width / 2) + "," + (c - a.height / 2) + ")"), k.grad.setAttribute("cx", b), k.grad.setAttribute("cy", c));
        k.pattern(q, NaN, p);
        e.wedge = k;
        e.push(k);
        return e
    };
    d.rgb2hex = function (a) {
        return (a = a.match(/^rgba?[\s+]?\([\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?/i)) && 4 === a.length ? "#" + ("0" + parseInt(a[1], 10).toString(16)).slice(-2) + ("0" + parseInt(a[2], 10).toString(16)).slice(-2) + ("0" + parseInt(a[3], 10).toString(16)).slice(-2) : ""
    };
    d.adjustLuminosity = function (a, b) {
        a && -1 != a.indexOf("rgb") && (a = d.rgb2hex(a));
        a = String(a).replace(/[^0-9a-f]/gi, "");
        6 > a.length && (a = String(a[0]) + String(a[0]) + String(a[1]) + String(a[1]) + String(a[2]) + String(a[2]));
        b = b || 0;
        var c = "#", e, h;
        for (h = 0; 3 > h; h++) e = parseInt(a.substr(2 * h, 2), 16), e = Math.round(Math.min(Math.max(0, e + e * b), 255)).toString(16), c += ("00" + e).substr(e.length);
        return c
    }
})();
(function () {
    var d = window.AmCharts;
    d.Bezier = d.Class({
        construct: function (a, b, c, e, h, f, g, k, l, m) {
            "object" == typeof g && (g = g[0]);
            "object" == typeof k && (k = k[0]);
            0 === k && (g = "none");
            f = {fill: g, "fill-opacity": k, "stroke-width": f};
            void 0 !== l && 0 < l && (f["stroke-dasharray"] = l);
            isNaN(h) || (f["stroke-opacity"] = h);
            e && (f.stroke = e);
            e = "M" + Math.round(b[0]) + "," + Math.round(c[0]);
            h = [];
            for (l = 0; l < b.length; l++) h.push({x: Number(b[l]), y: Number(c[l])});
            1 < h.length && (b = this.interpolate(h), e += this.drawBeziers(b));
            m ? e += m : d.VML || (e += "M0,0 L0,0");
            this.path = a.path(e).attr(f);
            this.node = this.path.node
        }, interpolate: function (a) {
            var b = [];
            b.push({x: a[0].x, y: a[0].y});
            var c = a[1].x - a[0].x, e = a[1].y - a[0].y, h = d.bezierX, f = d.bezierY;
            b.push({x: a[0].x + c / h, y: a[0].y + e / f});
            var g;
            for (g = 1; g < a.length - 1; g++) {
                var k = a[g - 1], l = a[g], e = a[g + 1];
                isNaN(e.x) && (e = l);
                isNaN(l.x) && (l = k);
                isNaN(k.x) && (k = l);
                c = e.x - l.x;
                e = e.y - k.y;
                k = l.x - k.x;
                k > c && (k = c);
                b.push({x: l.x - k / h, y: l.y - e / f});
                b.push({x: l.x, y: l.y});
                b.push({x: l.x + k / h, y: l.y + e / f})
            }
            e = a[a.length - 1].y - a[a.length - 2].y;
            c = a[a.length - 1].x -
                a[a.length - 2].x;
            b.push({x: a[a.length - 1].x - c / h, y: a[a.length - 1].y - e / f});
            b.push({x: a[a.length - 1].x, y: a[a.length - 1].y});
            return b
        }, drawBeziers: function (a) {
            var b = "", c;
            for (c = 0; c < (a.length - 1) / 3; c++) b += this.drawBezierMidpoint(a[3 * c], a[3 * c + 1], a[3 * c + 2], a[3 * c + 3]);
            return b
        }, drawBezierMidpoint: function (a, b, c, d) {
            var h = Math.round, f = this.getPointOnSegment(a, b, .75), g = this.getPointOnSegment(d, c, .75),
                k = (d.x - a.x) / 16, l = (d.y - a.y) / 16, m = this.getPointOnSegment(a, b, .375);
            a = this.getPointOnSegment(f, g, .375);
            a.x -= k;
            a.y -= l;
            b = this.getPointOnSegment(g,
                f, .375);
            b.x += k;
            b.y += l;
            c = this.getPointOnSegment(d, c, .375);
            k = this.getMiddle(m, a);
            f = this.getMiddle(f, g);
            g = this.getMiddle(b, c);
            m = " Q" + h(m.x) + "," + h(m.y) + "," + h(k.x) + "," + h(k.y);
            m += " Q" + h(a.x) + "," + h(a.y) + "," + h(f.x) + "," + h(f.y);
            m += " Q" + h(b.x) + "," + h(b.y) + "," + h(g.x) + "," + h(g.y);
            return m += " Q" + h(c.x) + "," + h(c.y) + "," + h(d.x) + "," + h(d.y)
        }, getMiddle: function (a, b) {
            return {x: (a.x + b.x) / 2, y: (a.y + b.y) / 2}
        }, getPointOnSegment: function (a, b, c) {
            return {x: a.x + (b.x - a.x) * c, y: a.y + (b.y - a.y) * c}
        }
    })
})();
(function () {
    var d = window.AmCharts;
    d.AmDraw = d.Class({
        construct: function (a, b, c, e) {
            d.SVG_NS = "http://www.w3.org/2000/svg";
            d.SVG_XLINK = "http://www.w3.org/1999/xlink";
            d.hasSVG = !!document.createElementNS && !!document.createElementNS(d.SVG_NS, "svg").createSVGRect;
            1 > b && (b = 10);
            1 > c && (c = 10);
            this.div = a;
            this.width = b;
            this.height = c;
            this.rBin = document.createElement("div");
            d.hasSVG ? (d.SVG = !0, b = this.createSvgElement("svg"), a.appendChild(b), this.container = b, this.addDefs(e), this.R = new d.SVGRenderer(this)) : d.isIE && d.VMLRenderer &&
                (d.VML = !0, d.vmlStyleSheet || (document.namespaces.add("amvml", "urn:schemas-microsoft-com:vml"), 31 > document.styleSheets.length ? (b = document.createStyleSheet(), b.addRule(".amvml", "behavior:url(#default#VML); display:inline-block; antialias:true"), d.vmlStyleSheet = b) : document.styleSheets[0].addRule(".amvml", "behavior:url(#default#VML); display:inline-block; antialias:true")), this.container = a, this.R = new d.VMLRenderer(this, e), this.R.disableSelection(a))
        }, createSvgElement: function (a) {
            return document.createElementNS(d.SVG_NS, a)
        }, circle: function (a, b, c, e) {
            var h = new d.AmDObject("circle", this);
            h.attr({r: c, cx: a, cy: b});
            this.addToContainer(h.node, e);
            return h
        }, ellipse: function (a, b, c, e, h) {
            var f = new d.AmDObject("ellipse", this);
            f.attr({rx: c, ry: e, cx: a, cy: b});
            this.addToContainer(f.node, h);
            return f
        }, setSize: function (a, b) {
            0 < a && 0 < b && (this.container.style.width = a + "px", this.container.style.height = b + "px")
        }, rect: function (a, b, c, e, h, f, g) {
            var k = new d.AmDObject("rect", this);
            d.VML && (h = Math.round(100 * h / Math.min(c, e)), c += 2 * f, e += 2 * f, k.bw = f, k.node.style.marginLeft = -f, k.node.style.marginTop = -f);
            1 > c && (c = 1);
            1 > e && (e = 1);
            k.attr({x: a, y: b, width: c, height: e, rx: h, ry: h, "stroke-width": f});
            this.addToContainer(k.node, g);
            return k
        }, image: function (a, b, c, e, h, f) {
            var g = new d.AmDObject("image", this);
            g.attr({x: b, y: c, width: e, height: h});
            this.R.path(g, a);
            this.addToContainer(g.node, f);
            return g
        }, addToContainer: function (a, b) {
            b || (b = this.container);
            b.appendChild(a)
        }, text: function (a, b, c) {
            return this.R.text(a, b, c)
        }, path: function (a, b, c, e) {
            var h = new d.AmDObject("path", this);
            e || (e = "100,100");
            h.attr({cs: e});
            c ? h.attr({dd: a}) : h.attr({d: a});
            this.addToContainer(h.node, b);
            return h
        }, set: function (a) {
            return this.R.set(a)
        }, remove: function (a) {
            if (a) {
                var b = this.rBin;
                b.appendChild(a);
                b.innerHTML = ""
            }
        }, renderFix: function () {
            var a = this.container, b = a.style;
            b.top = "0px";
            b.left = "0px";
            try {
                var c = a.getBoundingClientRect(), d = c.left - Math.round(c.left), h = c.top - Math.round(c.top);
                d && (b.left = d + "px");
                h && (b.top = h + "px")
            } catch (f) {
            }
        }, update: function () {
            this.R.update()
        }, addDefs: function (a) {
            if (d.hasSVG) {
                var b = this.createSvgElement("desc"), c = this.container;
                c.setAttribute("version", "1.1");
                c.style.position = "absolute";
                this.setSize(this.width, this.height);
                d.rtl && (c.setAttribute("direction", "rtl"), c.style.left = "auto", c.style.right = "0px");
                a && (a.addCodeCredits && b.appendChild(document.createTextNode("JavaScript chart by amCharts " + a.version)), c.appendChild(b), a.defs && (b = this.createSvgElement("defs"), c.appendChild(b), d.parseDefs(a.defs, b), this.defs = b))
            }
        }
    })
})();
(function () {
    var d = window.AmCharts;
    d.AmDObject = d.Class({
        construct: function (a, b) {
            this.D = b;
            this.R = b.R;
            this.node = this.R.create(this, a);
            this.y = this.x = 0;
            this.scale = 1
        }, attr: function (a) {
            this.R.attr(this, a);
            return this
        }, getAttr: function (a) {
            return this.node.getAttribute(a)
        }, setAttr: function (a, b) {
            this.R.setAttr(this, a, b);
            return this
        }, clipRect: function (a, b, c, d) {
            this.R.clipRect(this, a, b, c, d)
        }, translate: function (a, b, c, d) {
            d || (a = Math.round(a), b = Math.round(b));
            this.R.move(this, a, b, c);
            this.x = a;
            this.y = b;
            this.scale = c;
            this.angle && this.rotate(this.angle)
        }, rotate: function (a, b) {
            this.R.rotate(this, a, b);
            this.angle = a
        }, animate: function (a, b, c) {
            for (var e in a) if (a.hasOwnProperty(e)) {
                var h = e, f = a[e];
                c = d.getEffect(c);
                this.R.animate(this, h, f, b, c)
            }
        }, push: function (a) {
            if (a) {
                var b = this.node;
                b.appendChild(a.node);
                var c = a.clipPath;
                c && b.appendChild(c);
                (a = a.grad) && b.appendChild(a)
            }
        }, text: function (a) {
            this.R.setText(this, a)
        }, remove: function () {
            this.stop();
            this.R.remove(this)
        }, clear: function () {
            var a = this.node;
            if (a.hasChildNodes()) for (; 1 <= a.childNodes.length;) a.removeChild(a.firstChild)
        }, hide: function () {
            this.setAttr("visibility", "hidden")
        }, show: function () {
            this.setAttr("visibility", "visible")
        }, getBBox: function () {
            return this.R.getBBox(this)
        }, toFront: function () {
            var a = this.node;
            if (a) {
                this.prevNextNode = a.nextSibling;
                var b = a.parentNode;
                b && b.appendChild(a)
            }
        }, toPrevious: function () {
            var a = this.node;
            a && this.prevNextNode && (a = a.parentNode) && a.insertBefore(this.prevNextNode, null)
        }, toBack: function () {
            var a = this.node;
            if (a) {
                this.prevNextNode = a.nextSibling;
                var b = a.parentNode;
                if (b) {
                    var c = b.firstChild;
                    c && b.insertBefore(a, c)
                }
            }
        }, mouseover: function (a) {
            this.R.addListener(this, "mouseover", a);
            return this
        }, mouseout: function (a) {
            this.R.addListener(this, "mouseout", a);
            return this
        }, click: function (a) {
            this.R.addListener(this, "click", a);
            return this
        }, dblclick: function (a) {
            this.R.addListener(this, "dblclick", a);
            return this
        }, mousedown: function (a) {
            this.R.addListener(this, "mousedown", a);
            return this
        }, mouseup: function (a) {
            this.R.addListener(this, "mouseup", a);
            return this
        }, touchmove: function (a) {
            this.R.addListener(this, "touchmove", a);
            return this
        }, touchstart: function (a) {
            this.R.addListener(this, "touchstart", a);
            return this
        }, touchend: function (a) {
            this.R.addListener(this, "touchend", a);
            return this
        }, contextmenu: function (a) {
            this.node.addEventListener ? this.node.addEventListener("contextmenu", a, !0) : this.R.addListener(this, "contextmenu", a);
            return this
        }, stop: function () {
            d.removeFromArray(this.R.animations, this.an_translate);
            d.removeFromArray(this.R.animations, this.an_y);
            d.removeFromArray(this.R.animations, this.an_x)
        }, length: function () {
            return this.node.childNodes.length
        }, gradient: function (a, b, c) {
            this.R.gradient(this, a, b, c)
        }, pattern: function (a, b, c) {
            a && this.R.pattern(this, a, b, c)
        }
    })
})();
(function () {
    var d = window.AmCharts;
    d.VMLRenderer = d.Class({
        construct: function (a, b) {
            this.chart = b;
            this.D = a;
            this.cNames = {circle: "oval", ellipse: "oval", rect: "roundrect", path: "shape"};
            this.styleMap = {
                x: "left",
                y: "top",
                width: "width",
                height: "height",
                "font-family": "fontFamily",
                "font-size": "fontSize",
                visibility: "visibility"
            }
        }, create: function (a, b) {
            var c;
            if ("group" == b) c = document.createElement("div"), a.type = "div"; else if ("text" == b) c = document.createElement("div"), a.type = "text"; else if ("image" == b) c = document.createElement("img"), a.type = "image"; else {
                a.type = "shape";
                a.shapeType = this.cNames[b];
                c = document.createElement("amvml:" + this.cNames[b]);
                var d = document.createElement("amvml:stroke");
                c.appendChild(d);
                a.stroke = d;
                var h = document.createElement("amvml:fill");
                c.appendChild(h);
                a.fill = h;
                h.className = "amvml";
                d.className = "amvml";
                c.className = "amvml"
            }
            c.style.position = "absolute";
            c.style.top = 0;
            c.style.left = 0;
            return c
        }, path: function (a, b) {
            a.node.setAttribute("src", b)
        }, setAttr: function (a, b, c) {
            if (void 0 !== c) {
                var e;
                8 === document.documentMode && (e = !0);
                var h = a.node, f = a.type, g = h.style;
                "r" == b && (g.width = 2 * c, g.height = 2 * c);
                "oval" == a.shapeType && ("rx" == b && (g.width = 2 * c), "ry" == b && (g.height = 2 * c));
                "roundrect" == a.shapeType && ("width" != b && "height" != b || --c);
                "cursor" == b && (g.cursor = c);
                "cx" == b && (g.left = c - d.removePx(g.width) / 2);
                "cy" == b && (g.top = c - d.removePx(g.height) / 2);
                var k = this.styleMap[b];
                "width" == k && 0 > c && (c = 0);
                void 0 !== k && (g[k] = c);
                "text" == f && ("text-anchor" == b && (a.anchor = c, k = h.clientWidth, "end" == c && (g.marginLeft = -k + "px"), "middle" == c && (g.marginLeft = -(k / 2) +
                    "px", g.textAlign = "center"), "start" == c && (g.marginLeft = "0px")), "fill" == b && (g.color = c), "font-weight" == b && (g.fontWeight = c));
                if (g = a.children) for (k = 0; k < g.length; k++) g[k].setAttr(b, c);
                if ("shape" == f) {
                    "cs" == b && (h.style.width = "100px", h.style.height = "100px", h.setAttribute("coordsize", c));
                    "d" == b && h.setAttribute("path", this.svgPathToVml(c));
                    "dd" == b && h.setAttribute("path", c);
                    f = a.stroke;
                    a = a.fill;
                    "stroke" == b && (e ? f.color = c : f.setAttribute("color", c));
                    "stroke-width" == b && (e ? f.weight = c : f.setAttribute("weight", c));
                    "stroke-opacity" == b && (e ? f.opacity = c : f.setAttribute("opacity", c));
                    "stroke-dasharray" == b && (g = "solid", 0 < c && 3 > c && (g = "dot"), 3 <= c && 6 >= c && (g = "dash"), 6 < c && (g = "longdash"), e ? f.dashstyle = g : f.setAttribute("dashstyle", g));
                    if ("fill-opacity" == b || "opacity" == b) 0 === c ? e ? a.on = !1 : a.setAttribute("on", !1) : e ? a.opacity = c : a.setAttribute("opacity", c);
                    "fill" == b && (e ? a.color = c : a.setAttribute("color", c));
                    "rx" == b && (e ? h.arcSize = c + "%" : h.setAttribute("arcsize", c + "%"))
                }
            }
        }, attr: function (a, b) {
            for (var c in b) b.hasOwnProperty(c) && this.setAttr(a, c, b[c])
        }, text: function (a, b, c) {
            var e = new d.AmDObject("text", this.D), h = e.node;
            h.style.whiteSpace = "pre";
            h.innerHTML = a;
            this.D.addToContainer(h, c);
            this.attr(e, b);
            return e
        }, getBBox: function (a) {
            return this.getBox(a.node)
        }, getBox: function (a) {
            var b = a.offsetLeft, c = a.offsetTop, d = a.offsetWidth, h = a.offsetHeight, f;
            if (a.hasChildNodes()) {
                var g, k, l;
                for (l = 0; l < a.childNodes.length; l++) {
                    f = this.getBox(a.childNodes[l]);
                    var m = f.x;
                    isNaN(m) || (isNaN(g) ? g = m : m < g && (g = m));
                    var n = f.y;
                    isNaN(n) || (isNaN(k) ? k = n : n < k && (k = n));
                    m = f.width + m;
                    isNaN(m) || (d = Math.max(d, m));
                    f = f.height + n;
                    isNaN(f) || (h = Math.max(h, f))
                }
                0 > g && (b += g);
                0 > k && (c += k)
            }
            return {x: b, y: c, width: d, height: h}
        }, setText: function (a, b) {
            var c = a.node;
            c && (c.innerHTML = b);
            this.setAttr(a, "text-anchor", a.anchor)
        }, addListener: function (a, b, c) {
            a.node["on" + b] = c
        }, move: function (a, b, c) {
            var e = a.node, h = e.style;
            "text" == a.type && (c -= d.removePx(h.fontSize) / 2 - 1);
            "oval" == a.shapeType && (b -= d.removePx(h.width) / 2, c -= d.removePx(h.height) / 2);
            a = a.bw;
            isNaN(a) || (b -= a, c -= a);
            isNaN(b) || isNaN(c) || (e.style.left = b + "px", e.style.top =
                c + "px")
        }, svgPathToVml: function (a) {
            var b = a.split(" ");
            a = "";
            var c, d = Math.round, h;
            for (h = 0; h < b.length; h++) {
                var f = b[h], g = f.substring(0, 1), f = f.substring(1), k = f.split(","), l = d(k[0]) + "," + d(k[1]);
                "M" == g && (a += " m " + l);
                "L" == g && (a += " l " + l);
                "Z" == g && (a += " x e");
                if ("Q" == g) {
                    var m = c.length, n = c[m - 1], q = k[0], p = k[1], l = k[2], t = k[3];
                    c = d(c[m - 2] / 3 + 2 / 3 * q);
                    n = d(n / 3 + 2 / 3 * p);
                    q = d(2 / 3 * q + l / 3);
                    p = d(2 / 3 * p + t / 3);
                    a += " c " + c + "," + n + "," + q + "," + p + "," + l + "," + t
                }
                "A" == g && (a += " wa " + f);
                "B" == g && (a += " at " + f);
                c = k
            }
            return a
        }, animate: function (a, b, c, d, h) {
            var f = a.node, g = this.chart;
            a.animationFinished = !1;
            if ("translate" == b) {
                b = c.split(",");
                c = b[1];
                var k = f.offsetTop;
                g.animate(a, "left", f.offsetLeft, b[0], d, h, "px");
                g.animate(a, "top", k, c, d, h, "px")
            }
        }, clipRect: function (a, b, c, d, h) {
            a = a.node;
            0 === b && 0 === c ? (a.style.width = d + "px", a.style.height = h + "px", a.style.overflow = "hidden") : a.style.clip = "rect(" + c + "px " + (b + d) + "px " + (c + h) + "px " + b + "px)"
        }, rotate: function (a, b, c) {
            if (0 !== Number(b)) {
                var e = a.node;
                a = e.style;
                c || (c = this.getBGColor(e.parentNode));
                a.backgroundColor = c;
                a.paddingLeft = 1;
                c = b * Math.PI / 180;
                var h = Math.cos(c), f = Math.sin(c), g = d.removePx(a.left), k = d.removePx(a.top), l = e.offsetWidth,
                    e = e.offsetHeight;
                b /= Math.abs(b);
                a.left = g + l / 2 - l / 2 * Math.cos(c) - b * e / 2 * Math.sin(c) + 3;
                a.top = k - b * l / 2 * Math.sin(c) + b * e / 2 * Math.sin(c);
                a.cssText = a.cssText + "; filter:progid:DXImageTransform.Microsoft.Matrix(M11='" + h + "', M12='" + -f + "', M21='" + f + "', M22='" + h + "', sizingmethod='auto expand');"
            }
        }, getBGColor: function (a) {
            var b = "#FFFFFF";
            if (a.style) {
                var c = a.style.backgroundColor;
                "" !== c ? b = c : a.parentNode && (b = this.getBGColor(a.parentNode))
            }
            return b
        }, set: function (a) {
            var b = new d.AmDObject("group", this.D);
            this.D.container.appendChild(b.node);
            if (a) {
                var c;
                for (c = 0; c < a.length; c++) b.push(a[c])
            }
            return b
        }, gradient: function (a, b, c, d) {
            var h = "";
            "radialGradient" == b && (b = "gradientradial", c.reverse());
            "linearGradient" == b && (b = "gradient");
            var f;
            for (f = 0; f < c.length; f++) h += Math.round(100 * f / (c.length - 1)) + "% " + c[f], f < c.length - 1 && (h += ",");
            a = a.fill;
            90 == d ? d = 0 : 270 == d ? d = 180 : 180 == d ? d = 90 : 0 === d && (d = 270);
            8 === document.documentMode ? (a.type = b, a.angle = d) : (a.setAttribute("type", b), a.setAttribute("angle", d));
            h && (a.colors.value = h)
        }, remove: function (a) {
            a.clipPath && this.D.remove(a.clipPath);
            this.D.remove(a.node)
        }, disableSelection: function (a) {
            a.onselectstart = function () {
                return !1
            };
            a.style.cursor = "default"
        }, pattern: function (a, b, c, e) {
            c = a.node;
            a = a.fill;
            var h = "none";
            b.color && (h = b.color);
            c.fillColor = h;
            b = b.url;
            d.isAbsolute(b) || (b = e + b);
            8 === document.documentMode ? (a.type = "tile", a.src = b) : (a.setAttribute("type", "tile"), a.setAttribute("src", b))
        }, update: function () {
        }
    })
})();
(function () {
    var d = window.AmCharts;
    d.SVGRenderer = d.Class({
        construct: function (a) {
            this.D = a;
            this.animations = []
        }, create: function (a, b) {
            return document.createElementNS(d.SVG_NS, b)
        }, attr: function (a, b) {
            for (var c in b) b.hasOwnProperty(c) && this.setAttr(a, c, b[c])
        }, setAttr: function (a, b, c) {
            void 0 !== c && a.node.setAttribute(b, c)
        }, animate: function (a, b, c, e, h) {
            a.animationFinished = !1;
            var f = a.node;
            a["an_" + b] && d.removeFromArray(this.animations, a["an_" + b]);
            "translate" == b ? (f = (f = f.getAttribute("transform")) ? String(f).substring(10, f.length - 1) : "0,0", f = f.split(", ").join(" "), f = f.split(" ").join(","), 0 === f && (f = "0,0")) : f = Number(f.getAttribute(b));
            c = {obj: a, frame: 0, attribute: b, from: f, to: c, time: e, effect: h};
            this.animations.push(c);
            a["an_" + b] = c
        }, update: function () {
            var a, b = this.animations;
            for (a = b.length - 1; 0 <= a; a--) {
                var c = b[a], e = c.time * d.updateRate, h = c.frame + 1, f = c.obj, g = c.attribute, k, l, m;
                h <= e ? (c.frame++, "translate" == g ? (k = c.from.split(","), g = Number(k[0]), k = Number(k[1]), isNaN(k) && (k = 0), l = c.to.split(","), m = Number(l[0]), l = Number(l[1]), m = 0 === m - g ? m : Math.round(d[c.effect](0, h, g, m - g, e)), c = 0 === l - k ? l : Math.round(d[c.effect](0, h, k, l - k, e)), g = "transform", c = "translate(" + m + "," + c + ")") : (l = Number(c.from), k = Number(c.to), m = k - l, c = d[c.effect](0, h, l, m, e), isNaN(c) && (c = k), 0 === m && this.animations.splice(a, 1)), this.setAttr(f, g, c)) : ("translate" == g ? (l = c.to.split(","), m = Number(l[0]), l = Number(l[1]), f.translate(m, l)) : (k = Number(c.to), this.setAttr(f, g, k)), f.animationFinished = !0, this.animations.splice(a, 1))
            }
        }, getBBox: function (a) {
            if (a = a.node) try {
                return a.getBBox()
            } catch (b) {
            }
            return {width: 0, height: 0, x: 0, y: 0}
        }, path: function (a, b) {
            a.node.setAttributeNS(d.SVG_XLINK, "xlink:href", b)
        }, clipRect: function (a, b, c, e, h) {
            var f = a.node, g = a.clipPath;
            g && this.D.remove(g);
            var k = f.parentNode;
            k && (f = document.createElementNS(d.SVG_NS, "clipPath"), g = d.getUniqueId(), f.setAttribute("id", g), this.D.rect(b, c, e, h, 0, 0, f), k.appendChild(f), b = "#", d.baseHref && !d.isIE && (b = this.removeTarget(window.location.href) + b), this.setAttr(a, "clip-path", "url(" + b + g + ")"), this.clipPathC++, a.clipPath = f)
        }, text: function (a, b, c) {
            var e = new d.AmDObject("text", this.D);
            a = String(a).split("\n");
            var h = d.removePx(b["font-size"]), f;
            for (f = 0; f < a.length; f++) {
                var g = this.create(null, "tspan");
                g.appendChild(document.createTextNode(a[f]));
                g.setAttribute("y", (h + 2) * f + Math.round(h / 2));
                g.setAttribute("x", 0);
                e.node.appendChild(g)
            }
            e.node.setAttribute("y", Math.round(h / 2));
            this.attr(e, b);
            this.D.addToContainer(e.node, c);
            return e
        }, setText: function (a, b) {
            var c = a.node;
            c && (c.removeChild(c.firstChild), c.appendChild(document.createTextNode(b)))
        }, move: function (a, b, c, d) {
            isNaN(b) && (b = 0);
            isNaN(c) && (c = 0);
            b = "translate(" + b + "," + c + ")";
            d && (b = b + " scale(" + d + ")");
            this.setAttr(a, "transform", b)
        }, rotate: function (a, b) {
            var c = a.node.getAttribute("transform"), d = "rotate(" + b + ")";
            c && (d = c + " " + d);
            this.setAttr(a, "transform", d)
        }, set: function (a) {
            var b = new d.AmDObject("g", this.D);
            this.D.container.appendChild(b.node);
            if (a) {
                var c;
                for (c = 0; c < a.length; c++) b.push(a[c])
            }
            return b
        }, addListener: function (a, b, c) {
            a.node["on" + b] = c
        }, gradient: function (a, b, c, e) {
            var h = a.node, f = a.grad;
            f && this.D.remove(f);
            b = document.createElementNS(d.SVG_NS, b);
            f = d.getUniqueId();
            b.setAttribute("id", f);
            if (!isNaN(e)) {
                var g = 0, k = 0, l = 0, m = 0;
                90 == e ? l = 100 : 270 == e ? m = 100 : 180 == e ? g = 100 : 0 === e && (k = 100);
                b.setAttribute("x1", g + "%");
                b.setAttribute("x2", k + "%");
                b.setAttribute("y1", l + "%");
                b.setAttribute("y2", m + "%")
            }
            for (e = 0; e < c.length; e++) g = document.createElementNS(d.SVG_NS, "stop"), k = 100 * e / (c.length - 1), 0 === e && (k = 0), g.setAttribute("offset", k + "%"), g.setAttribute("stop-color", c[e]), b.appendChild(g);
            h.parentNode.appendChild(b);
            c = "#";
            d.baseHref && !d.isIE && (c = this.removeTarget(window.location.href) +
                c);
            h.setAttribute("fill", "url(" + c + f + ")");
            a.grad = b
        }, removeTarget: function (a) {
            return a.split("#")[0]
        }, pattern: function (a, b, c, e) {
            var h = a.node;
            isNaN(c) && (c = 1);
            var f = a.patternNode;
            f && this.D.remove(f);
            var f = document.createElementNS(d.SVG_NS, "pattern"), g = d.getUniqueId(), k = b;
            b.url && (k = b.url);
            d.isAbsolute(k) || -1 != k.indexOf("data:image") || (k = e + k);
            e = Number(b.width);
            isNaN(e) && (e = 4);
            var l = Number(b.height);
            isNaN(l) && (l = 4);
            e /= c;
            l /= c;
            c = b.x;
            isNaN(c) && (c = 0);
            var m = -Math.random() * Number(b.randomX);
            isNaN(m) || (c = m);
            m = b.y;
            isNaN(m) && (m = 0);
            var n = -Math.random() * Number(b.randomY);
            isNaN(n) || (m = n);
            f.setAttribute("id", g);
            f.setAttribute("width", e);
            f.setAttribute("height", l);
            f.setAttribute("patternUnits", "userSpaceOnUse");
            f.setAttribute("xlink:href", k);
            b.color && (n = document.createElementNS(d.SVG_NS, "rect"), n.setAttributeNS(null, "height", e), n.setAttributeNS(null, "width", l), n.setAttributeNS(null, "fill", b.color), f.appendChild(n));
            this.D.image(k, 0, 0, e, l, f).translate(c, m);
            k = "#";
            d.baseHref && !d.isIE && (k = this.removeTarget(window.location.href) +
                k);
            h.setAttribute("fill", "url(" + k + g + ")");
            a.patternNode = f;
            h.parentNode.appendChild(f)
        }, remove: function (a) {
            a.clipPath && this.D.remove(a.clipPath);
            a.grad && this.D.remove(a.grad);
            a.patternNode && this.D.remove(a.patternNode);
            this.D.remove(a.node)
        }
    })
})();
(function () {
    var d = window.AmCharts;
    d.AmLegend = d.Class({
        construct: function (a) {
            this.enabled = !0;
            this.cname = "AmLegend";
            this.createEvents("rollOverMarker", "rollOverItem", "rollOutMarker", "rollOutItem", "showItem", "hideItem", "clickMarker", "rollOverItem", "rollOutItem", "clickLabel");
            this.position = "bottom";
            this.borderColor = this.color = "#000000";
            this.borderAlpha = 0;
            this.markerLabelGap = 5;
            this.verticalGap = 10;
            this.align = "left";
            this.horizontalGap = 0;
            this.spacing = 10;
            this.markerDisabledColor = "#AAB3B3";
            this.markerType = "square";
            this.markerSize = 16;
            this.markerBorderThickness = this.markerBorderAlpha = 1;
            this.marginBottom = this.marginTop = 0;
            this.marginLeft = this.marginRight = 20;
            this.autoMargins = !0;
            this.valueWidth = 50;
            this.switchable = !0;
            this.switchType = "x";
            this.switchColor = "#FFFFFF";
            this.rollOverColor = "#CC0000";
            this.reversedOrder = !1;
            this.labelText = "[[title]]";
            this.valueText = "[[value]]";
            this.useMarkerColorForLabels = !1;
            this.rollOverGraphAlpha = 1;
            this.textClickEnabled = !1;
            this.equalWidths = !0;
            this.backgroundColor = "#FFFFFF";
            this.backgroundAlpha = 0;
            this.useGraphSettings = !1;
            this.showEntries = !0;
            d.applyTheme(this, a, this.cname)
        }, setData: function (a) {
            this.legendData = a;
            this.invalidateSize()
        }, invalidateSize: function () {
            this.destroy();
            this.entries = [];
            this.valueLabels = [];
            var a = this.legendData;
            this.enabled && (d.ifArray(a) || d.ifArray(this.data)) && this.drawLegend()
        }, drawLegend: function () {
            var a = this.chart, b = this.position, c = this.width, e = a.divRealWidth, h = a.divRealHeight,
                f = this.div, g = this.legendData;
            this.data && (g = this.data);
            isNaN(this.fontSize) && (this.fontSize = a.fontSize);
            this.maxColumnsReal = this.maxColumns;
            if ("right" == b || "left" == b) this.maxColumnsReal = 1, this.autoMargins && (this.marginLeft = this.marginRight = 10); else if (this.autoMargins) {
                this.marginRight = a.marginRight;
                this.marginLeft = a.marginLeft;
                var k = a.autoMarginOffset;
                "bottom" == b ? (this.marginBottom = k, this.marginTop = 0) : (this.marginTop = k, this.marginBottom = 0)
            }
            c = void 0 !== c ? d.toCoordinate(c, e) : "right" != b && "left" != b ? a.realWidth : 0 < this.ieW ? this.ieW : a.realWidth;
            "outside" == b ? (c = f.offsetWidth, h = f.offsetHeight, f.clientHeight && (c = f.clientWidth, h = f.clientHeight)) : (isNaN(c) || (f.style.width = c + "px"), f.className = "amChartsLegend " + a.classNamePrefix + "-legend-div");
            this.divWidth = c;
            (b = this.container) ? (b.container.innerHTML = "", f.appendChild(b.container), b.width = c, b.height = h, b.setSize(c, h), b.addDefs(a)) : b = new d.AmDraw(f, c, h, a);
            this.container = b;
            this.lx = 0;
            this.ly = 8;
            h = this.markerSize;
            h > this.fontSize && (this.ly = h / 2 - 1);
            0 < h && (this.lx += h + this.markerLabelGap);
            this.titleWidth = 0;
            if (h = this.title) h = d.text(this.container, h, this.color, a.fontFamily, this.fontSize, "start", !0), d.setCN(a, h, "legend-title"), h.translate(this.marginLeft, this.marginTop + this.verticalGap + this.ly + 1), a = h.getBBox(), this.titleWidth = a.width + 15, this.titleHeight = a.height + 6;
            this.index = this.maxLabelWidth = 0;
            if (this.showEntries) {
                for (a = 0; a < g.length; a++) this.createEntry(g[a]);
                for (a = this.index = 0; a < g.length; a++) this.createValue(g[a])
            }
            this.arrangeEntries();
            this.updateValues()
        }, arrangeEntries: function () {
            var a = this.position, b = this.marginLeft + this.titleWidth, c = this.marginRight, e = this.marginTop,
                h = this.marginBottom, f = this.horizontalGap, g = this.div, k = this.divWidth, l = this.maxColumnsReal,
                m = this.verticalGap, n = this.spacing, q = k - c - b, p = 0, t = 0, r = this.container;
            this.set && this.set.remove();
            var u = r.set();
            this.set = u;
            var w = r.set();
            u.push(w);
            var y = this.entries, x, A;
            for (A = 0; A < y.length; A++) {
                x = y[A].getBBox();
                var z = x.width;
                z > p && (p = z);
                x = x.height;
                x > t && (t = x)
            }
            var z = t = 0, B = f, C = 0, D = 0;
            for (A = 0; A < y.length; A++) {
                var L = y[A];
                this.reversedOrder && (L = y[y.length - A - 1]);
                x = L.getBBox();
                var I;
                this.equalWidths ? I = z * (p + n + this.markerLabelGap) : (I = B, B = B + x.width + f + n);
                x.height > D && (D = x.height);
                I + x.width > q && 0 < A && 0 !== z && (t++, I = z = 0, B = I + x.width + f + n, C = C + D + m, D = 0);
                L.translate(I, C);
                z++;
                !isNaN(l) && z >= l && (z = 0, t++, C = C + D + m, B = f, D = 0);
                w.push(L)
            }
            x = w.getBBox();
            l = x.height + 2 * m - 1;
            "left" == a || "right" == a ? (n = x.width + 2 * f, k = n + b + c, g.style.width = k + "px", this.ieW = k) : n = k - b - c - 1;
            c = d.polygon(this.container, [0, n, n, 0], [0, 0, l, l], this.backgroundColor, this.backgroundAlpha, 1, this.borderColor, this.borderAlpha);
            d.setCN(this.chart, c, "legend-bg");
            u.push(c);
            u.translate(b, e);
            c.toBack();
            b = f;
            if ("top" == a || "bottom" == a || "absolute" == a || "outside" == a) "center" == this.align ? b = f + (n - x.width) / 2 : "right" == this.align && (b = f + n - x.width);
            w.translate(b, m + 1);
            this.titleHeight > l && (l = this.titleHeight);
            a = l + e + h + 1;
            0 > a && (a = 0);
            a > this.chart.divRealHeight && (g.style.top = "0px");
            g.style.height = Math.round(a) + "px";
            r.setSize(this.divWidth, a)
        }, createEntry: function (a) {
            if (!1 !== a.visibleInLegend && !a.hideFromLegend) {
                var b = this.chart, c = a.markerType;
                a.legendEntryWidth = this.markerSize;
                c || (c = this.markerType);
                var e = a.color, h =
                    a.alpha;
                a.legendKeyColor && (e = a.legendKeyColor());
                a.legendKeyAlpha && (h = a.legendKeyAlpha());
                var f;
                !0 === a.hidden && (f = e = this.markerDisabledColor);
                var g = a.pattern, k = a.customMarker;
                k || (k = this.customMarker);
                var l = this.container, m = this.markerSize, n = 0, q = 0, p = m / 2;
                if (this.useGraphSettings) {
                    c = a.type;
                    this.switchType = void 0;
                    if ("line" == c || "step" == c || "smoothedLine" == c || "ohlc" == c) g = l.set(), a.hidden || (e = a.lineColorR, f = a.bulletBorderColorR), n = d.line(l, [0, 2 * m], [m / 2, m / 2], e, a.lineAlpha, a.lineThickness, a.dashLength), d.setCN(b, n, "graph-stroke"), g.push(n), a.bullet && (a.hidden || (e = a.bulletColorR), n = d.bullet(l, a.bullet, a.bulletSize, e, a.bulletAlpha, a.bulletBorderThickness, f, a.bulletBorderAlpha)) && (d.setCN(b, n, "graph-bullet"), n.translate(m + 1, m / 2), g.push(n)), p = 0, n = m, q = m / 3; else {
                        var t;
                        a.getGradRotation && (t = a.getGradRotation(), 0 === t && (t = 180));
                        n = a.fillColorsR;
                        !0 === a.hidden && (n = e);
                        if (g = this.createMarker("rectangle", n, a.fillAlphas, a.lineThickness, e, a.lineAlpha, t, g, a.dashLength)) p = m, g.translate(p, m / 2);
                        n = m
                    }
                    d.setCN(b, g, "graph-" + c);
                    d.setCN(b, g, "graph-" + a.id)
                } else if (k) g = l.image(k, 0, 0, m, m); else {
                    var r;
                    isNaN(this.gradientRotation) || (r = 180 + this.gradientRotation);
                    (g = this.createMarker(c, e, h, void 0, void 0, void 0, r, g)) && g.translate(m / 2, m / 2)
                }
                d.setCN(b, g, "legend-marker");
                this.addListeners(g, a);
                l = l.set([g]);
                this.switchable && a.switchable && l.setAttr("cursor", "pointer");
                void 0 !== a.id && d.setCN(b, l, "legend-item-" + a.id);
                d.setCN(b, l, a.className, !0);
                f = this.switchType;
                var u;
                f && "none" != f && 0 < m && ("x" == f ? (u = this.createX(), u.translate(m / 2, m / 2)) : u = this.createV(), u.dItem = a, !0 !== a.hidden ? "x" == f ? u.hide() : u.show() : "x" != f && u.hide(), this.switchable || u.hide(), this.addListeners(u, a), a.legendSwitch = u, l.push(u), d.setCN(b, u, "legend-switch"));
                f = this.color;
                a.showBalloon && this.textClickEnabled && void 0 !== this.selectedColor && (f = this.selectedColor);
                this.useMarkerColorForLabels && (f = e);
                !0 === a.hidden && (f = this.markerDisabledColor);
                e = d.massReplace(this.labelText, {"[[title]]": a.title});
                t = this.fontSize;
                g && (m <= t && (m = m / 2 + this.ly - t / 2 + (t + 2 - m) / 2 - q, g.translate(p, m), u && u.translate(u.x,
                    m)), a.legendEntryWidth = g.getBBox().width);
                var w;
                e && (e = d.fixBrakes(e), a.legendTextReal = e, w = this.labelWidth, w = isNaN(w) ? d.text(this.container, e, f, b.fontFamily, t, "start") : d.wrappedText(this.container, e, f, b.fontFamily, t, "start", !1, w, 0), d.setCN(b, w, "legend-label"), w.translate(this.lx + n, this.ly), l.push(w), b = w.getBBox().width, this.maxLabelWidth < b && (this.maxLabelWidth = b));
                this.entries[this.index] = l;
                a.legendEntry = this.entries[this.index];
                a.legendLabel = w;
                this.index++
            }
        }, addListeners: function (a, b) {
            var c = this;
            a && a.mouseover(function (a) {
                c.rollOverMarker(b, a)
            }).mouseout(function (a) {
                c.rollOutMarker(b, a)
            }).click(function (a) {
                c.clickMarker(b, a)
            })
        }, rollOverMarker: function (a, b) {
            this.switchable && this.dispatch("rollOverMarker", a, b);
            this.dispatch("rollOverItem", a, b)
        }, rollOutMarker: function (a, b) {
            this.switchable && this.dispatch("rollOutMarker", a, b);
            this.dispatch("rollOutItem", a, b)
        }, clickMarker: function (a, b) {
            this.switchable && (!0 === a.hidden ? this.dispatch("showItem", a, b) : this.dispatch("hideItem", a, b));
            this.dispatch("clickMarker", a, b)
        }, rollOverLabel: function (a, b) {
            a.hidden || (this.textClickEnabled && a.legendLabel && a.legendLabel.attr({fill: this.rollOverColor}), this.dispatch("rollOverItem", a, b))
        }, rollOutLabel: function (a, b) {
            if (!a.hidden) {
                if (this.textClickEnabled && a.legendLabel) {
                    var c = this.color;
                    void 0 !== this.selectedColor && a.showBalloon && (c = this.selectedColor);
                    this.useMarkerColorForLabels && (c = a.lineColor, void 0 === c && (c = a.color));
                    a.legendLabel.attr({fill: c})
                }
                this.dispatch("rollOutItem", a, b)
            }
        }, clickLabel: function (a, b) {
            this.textClickEnabled ? a.hidden || this.dispatch("clickLabel", a, b) : this.switchable && (!0 === a.hidden ? this.dispatch("showItem", a, b) : this.dispatch("hideItem", a, b))
        }, dispatch: function (a, b, c) {
            a = {type: a, dataItem: b, target: this, event: c, chart: this.chart};
            this.chart && this.chart.handleLegendEvent(a);
            this.fire(a)
        }, createValue: function (a) {
            var b = this, c = b.fontSize, e = b.chart;
            if (!1 !== a.visibleInLegend && !a.hideFromLegend) {
                var h = b.maxLabelWidth;
                b.forceWidth && (h = b.labelWidth);
                b.equalWidths || (b.valueAlign = "left");
                "left" == b.valueAlign && (h = a.legendEntry.getBBox().width);
                var f = h;
                if (b.valueText && 0 < b.valueWidth) {
                    var g = b.color;
                    b.useMarkerColorForValues && (g = a.color, a.legendKeyColor && (g = a.legendKeyColor()));
                    !0 === a.hidden && (g = b.markerDisabledColor);
                    var k = b.valueText, h = h + b.lx + b.markerLabelGap + b.valueWidth, l = "end";
                    "left" == b.valueAlign && (h -= b.valueWidth, l = "start");
                    g = d.text(b.container, k, g, b.chart.fontFamily, c, l);
                    d.setCN(e, g, "legend-value");
                    g.translate(h, b.ly);
                    b.entries[b.index].push(g);
                    f += b.valueWidth + 2 * b.markerLabelGap;
                    g.dItem = a;
                    b.valueLabels.push(g)
                }
                b.index++;
                e = b.markerSize;
                e < c + 7 && (e = c + 7, d.VML && (e += 3));
                c = b.container.rect(a.legendEntryWidth, 0, f, e, 0, 0).attr({
                    stroke: "none",
                    fill: "#fff",
                    "fill-opacity": .005
                });
                c.dItem = a;
                b.entries[b.index - 1].push(c);
                c.mouseover(function (c) {
                    b.rollOverLabel(a, c)
                }).mouseout(function (c) {
                    b.rollOutLabel(a, c)
                }).click(function (c) {
                    b.clickLabel(a, c)
                })
            }
        }, createV: function () {
            var a = this.markerSize;
            return d.polygon(this.container, [a / 5, a / 2, a - a / 5, a / 2], [a / 3, a - a / 5, a / 5, a / 1.7], this.switchColor)
        }, createX: function () {
            var a = (this.markerSize - 4) / 2, b = {
                stroke: this.switchColor,
                "stroke-width": 3
            }, c = this.container, e = d.line(c, [-a, a], [-a, a]).attr(b), a = d.line(c, [-a, a], [a, -a]).attr(b);
            return this.container.set([e, a])
        }, createMarker: function (a, b, c, e, h, f, g, k, l) {
            var m = this.markerSize, n = this.container;
            h || (h = this.markerBorderColor);
            h || (h = b);
            isNaN(e) && (e = this.markerBorderThickness);
            isNaN(f) && (f = this.markerBorderAlpha);
            return d.bullet(n, a, m, b, c, e, h, f, m, g, k, this.chart.path, l)
        }, validateNow: function () {
            this.invalidateSize()
        }, updateValues: function () {
            var a = this.valueLabels, b = this.chart, c, e = this.data;
            if (a) for (c = 0; c < a.length; c++) {
                var h = a[c], f = h.dItem, g = " ";
                if (e) f.value ? h.text(f.value) : h.text(""); else {
                    var k;
                    if (void 0 !== f.type) {
                        k = f.currentDataItem;
                        var l = this.periodValueText;
                        f.legendPeriodValueText && (l = f.legendPeriodValueText);
                        k ? (g = this.valueText, f.legendValueText && (g = f.legendValueText), g = b.formatString(g, k)) : l && b.formatPeriodString && (l = d.massReplace(l, {"[[title]]": f.title}), g = b.formatPeriodString(l, f))
                    } else g = b.formatString(this.valueText, f);
                    if (l = this.valueFunction) k && (f = k), g = l(f, g);
                    h.text(g)
                }
            }
        }, renderFix: function () {
            if (!d.VML && this.enabled) {
                var a = this.container;
                a && a.renderFix()
            }
        }, destroy: function () {
            this.div.innerHTML = "";
            d.remove(this.set)
        }
    })
})();
(function () {
    var d = window.AmCharts;
    d.formatMilliseconds = function (a, b) {
        if (-1 != a.indexOf("fff")) {
            var c = b.getMilliseconds(), d = String(c);
            10 > c && (d = "00" + c);
            10 <= c && 100 > c && (d = "0" + c);
            a = a.replace(/fff/g, d)
        }
        return a
    };
    d.extractPeriod = function (a) {
        var b = d.stripNumbers(a), c = 1;
        b != a && (c = Number(a.slice(0, a.indexOf(b))));
        return {period: b, count: c}
    };
    d.getDate = function (a, b, c) {
        return a instanceof Date ? d.newDate(a, c) : b && isNaN(a) ? d.stringToDate(a, b) : new Date(a)
    };
    d.daysInMonth = function (a) {
        return (new Date(a.getYear(), a.getMonth() +
            1, 0)).getDate()
    };
    d.newDate = function (a, b) {
        return b && -1 == b.indexOf("fff") ? new Date(a) : new Date(a.getFullYear(), a.getMonth(), a.getDate(), a.getHours(), a.getMinutes(), a.getSeconds(), a.getMilliseconds())
    };
    d.resetDateToMin = function (a, b, c, e) {
        void 0 === e && (e = 1);
        var h, f, g, k, l, m, n;
        d.useUTC ? (h = a.getUTCFullYear(), f = a.getUTCMonth(), g = a.getUTCDate(), k = a.getUTCHours(), l = a.getUTCMinutes(), m = a.getUTCSeconds(), n = a.getUTCMilliseconds(), a = a.getUTCDay()) : (h = a.getFullYear(), f = a.getMonth(), g = a.getDate(), k = a.getHours(), l = a.getMinutes(), m = a.getSeconds(), n = a.getMilliseconds(), a = a.getDay());
        switch (b) {
            case"YYYY":
                h = Math.floor(h / c) * c;
                f = 0;
                g = 1;
                n = m = l = k = 0;
                break;
            case"MM":
                f = Math.floor(f / c) * c;
                g = 1;
                n = m = l = k = 0;
                break;
            case"WW":
                g = a >= e ? g - a + e : g - (7 + a) + e;
                n = m = l = k = 0;
                break;
            case"DD":
                n = m = l = k = 0;
                break;
            case"hh":
                k = Math.floor(k / c) * c;
                n = m = l = 0;
                break;
            case"mm":
                l = Math.floor(l / c) * c;
                n = m = 0;
                break;
            case"ss":
                m = Math.floor(m / c) * c;
                n = 0;
                break;
            case"fff":
                n = Math.floor(n / c) * c
        }
        d.useUTC ? (a = new Date, a.setUTCFullYear(h, f, g), a.setUTCHours(k, l, m, n)) : a = new Date(h, f, g, k, l, m, n);
        return a
    };
    d.getPeriodDuration = function (a, b) {
        void 0 === b && (b = 1);
        var c;
        switch (a) {
            case"YYYY":
                c = 316224E5;
                break;
            case"MM":
                c = 26784E5;
                break;
            case"WW":
                c = 6048E5;
                break;
            case"DD":
                c = 864E5;
                break;
            case"hh":
                c = 36E5;
                break;
            case"mm":
                c = 6E4;
                break;
            case"ss":
                c = 1E3;
                break;
            case"fff":
                c = 1
        }
        return c * b
    };
    d.intervals = {
        s: {nextInterval: "ss", contains: 1E3},
        ss: {nextInterval: "mm", contains: 60, count: 0},
        mm: {nextInterval: "hh", contains: 60, count: 1},
        hh: {nextInterval: "DD", contains: 24, count: 2},
        DD: {nextInterval: "", contains: Infinity, count: 3}
    };
    d.getMaxInterval = function (a, b) {
        var c = d.intervals;
        return a >= c[b].contains ? (a = Math.round(a / c[b].contains), b = c[b].nextInterval, d.getMaxInterval(a, b)) : "ss" == b ? c[b].nextInterval : b
    };
    d.dayNames = "Sunday Monday Tuesday Wednesday Thursday Friday Saturday".split(" ");
    d.shortDayNames = "Sun Mon Tue Wed Thu Fri Sat".split(" ");
    d.monthNames = "January February March April May June July August September October November December".split(" ");
    d.shortMonthNames = "Jan Feb Mar Apr May Jun Jul Aug Sep Oct Nov Dec".split(" ");
    d.getWeekNumber = function (a) {
        a = new Date(a);
        a.setHours(0, 0, 0);
        a.setDate(a.getDate() + 4 - (a.getDay() || 7));
        var b = new Date(a.getFullYear(), 0, 1);
        return Math.ceil(((a - b) / 864E5 + 1) / 7)
    };
    d.stringToDate = function (a, b) {
        var c = {}, e = [{pattern: "YYYY", period: "year"}, {pattern: "YY", period: "year"}, {
                pattern: "MM",
                period: "month"
            }, {pattern: "M", period: "month"}, {pattern: "DD", period: "date"}, {
                pattern: "D",
                period: "date"
            }, {pattern: "JJ", period: "hours"}, {pattern: "J", period: "hours"}, {
                pattern: "HH",
                period: "hours"
            }, {pattern: "H", period: "hours"},
                {pattern: "KK", period: "hours"}, {pattern: "K", period: "hours"}, {
                    pattern: "LL",
                    period: "hours"
                }, {pattern: "L", period: "hours"}, {pattern: "NN", period: "minutes"}, {
                    pattern: "N",
                    period: "minutes"
                }, {pattern: "SS", period: "seconds"}, {pattern: "S", period: "seconds"}, {
                    pattern: "QQQ",
                    period: "milliseconds"
                }, {pattern: "QQ", period: "milliseconds"}, {pattern: "Q", period: "milliseconds"}], h = !0,
            f = b.indexOf("AA");
        -1 != f && (a.substr(f, 2), "pm" == a.toLowerCase && (h = !1));
        var f = b, g, k, l;
        for (l = 0; l < e.length; l++) k = e[l].period, c[k] = 0, "date" == k && (c[k] = 1);
        for (l = 0; l < e.length; l++) if (g = e[l].pattern, k = e[l].period, -1 != b.indexOf(g)) {
            var m = d.getFromDateString(g, a, f);
            b = b.replace(g, "");
            if ("KK" == g || "K" == g || "LL" == g || "L" == g) h || (m += 12);
            c[k] = m
        }
        d.useUTC ? (e = new Date, e.setUTCFullYear(c.year, c.month, c.date), e.setUTCHours(c.hours, c.minutes, c.seconds, c.milliseconds)) : e = new Date(c.year, c.month, c.date, c.hours, c.minutes, c.seconds, c.milliseconds);
        return e
    };
    d.getFromDateString = function (a, b, c) {
        if (void 0 !== b) return c = c.indexOf(a), b = String(b), b = b.substr(c, a.length), "0" == b.charAt(0) && (b = b.substr(1, b.length - 1)), b = Number(b), isNaN(b) && (b = 0), -1 != a.indexOf("M") && b--, b
    };
    d.formatDate = function (a, b, c) {
        c || (c = d);
        var e, h, f, g, k, l, m, n, q = d.getWeekNumber(a);
        d.useUTC ? (e = a.getUTCFullYear(), h = a.getUTCMonth(), f = a.getUTCDate(), g = a.getUTCDay(), k = a.getUTCHours(), l = a.getUTCMinutes(), m = a.getUTCSeconds(), n = a.getUTCMilliseconds()) : (e = a.getFullYear(), h = a.getMonth(), f = a.getDate(), g = a.getDay(), k = a.getHours(), l = a.getMinutes(), m = a.getSeconds(), n = a.getMilliseconds());
        var p = String(e).substr(2, 2), t = "0" + g;
        b = b.replace(/W/g, q);
        q = k;
        24 == q && (q = 0);
        var r = q;
        10 > r && (r = "0" + r);
        b = b.replace(/JJ/g, r);
        b = b.replace(/J/g, q);
        r = k;
        0 === r && (r = 24, -1 != b.indexOf("H") && (f--, 0 === f && (e = new Date(a), e.setDate(e.getDate() - 1), h = e.getMonth(), f = e.getDate(), e = e.getFullYear())));
        a = h + 1;
        9 > h && (a = "0" + a);
        q = f;
        10 > f && (q = "0" + f);
        var u = r;
        10 > u && (u = "0" + u);
        b = b.replace(/HH/g, u);
        b = b.replace(/H/g, r);
        r = k;
        11 < r && (r -= 12);
        u = r;
        10 > u && (u = "0" + u);
        b = b.replace(/KK/g, u);
        b = b.replace(/K/g, r);
        r = k;
        0 === r && (r = 12);
        12 < r && (r -= 12);
        u = r;
        10 > u && (u = "0" + u);
        b = b.replace(/LL/g, u);
        b = b.replace(/L/g, r);
        r = l;
        10 > r && (r = "0" + r);
        b = b.replace(/NN/g, r);
        b = b.replace(/N/g, l);
        l = m;
        10 > l && (l = "0" + l);
        b = b.replace(/SS/g, l);
        b = b.replace(/S/g, m);
        m = n;
        10 > m && (m = "00" + m);
        100 > m && (m = "0" + m);
        l = n;
        10 > l && (l = "00" + l);
        b = b.replace(/QQQ/g, m);
        b = b.replace(/QQ/g, l);
        b = b.replace(/Q/g, n);
        b = 12 > k ? b.replace(/A/g, c.amString) : b.replace(/A/g, c.pmString);
        b = b.replace(/YYYY/g, "@IIII@");
        b = b.replace(/YY/g, "@II@");
        b = b.replace(/MMMM/g, "@XXXX@");
        b = b.replace(/MMM/g, "@XXX@");
        b = b.replace(/MM/g, "@XX@");
        b = b.replace(/M/g, "@X@");
        b = b.replace(/DD/g, "@RR@");
        b = b.replace(/D/g, "@R@");
        b = b.replace(/EEEE/g, "@PPPP@");
        b = b.replace(/EEE/g, "@PPP@");
        b = b.replace(/EE/g, "@PP@");
        b = b.replace(/E/g, "@P@");
        b = b.replace(/@IIII@/g, e);
        b = b.replace(/@II@/g, p);
        b = b.replace(/@XXXX@/g, c.monthNames[h]);
        b = b.replace(/@XXX@/g, c.shortMonthNames[h]);
        b = b.replace(/@XX@/g, a);
        b = b.replace(/@X@/g, h + 1);
        b = b.replace(/@RR@/g, q);
        b = b.replace(/@R@/g, f);
        b = b.replace(/@PPPP@/g, c.dayNames[g]);
        b = b.replace(/@PPP@/g, c.shortDayNames[g]);
        b = b.replace(/@PP@/g, t);
        return b = b.replace(/@P@/g, g)
    };
    d.changeDate = function (a, b, c, e, h) {
        if (d.useUTC) return d.changeUTCDate(a, b, c, e, h);
        var f = -1;
        void 0 === e && (e = !0);
        void 0 === h && (h = !1);
        !0 === e && (f = 1);
        switch (b) {
            case"YYYY":
                a.setFullYear(a.getFullYear() + c * f);
                e || h || a.setDate(a.getDate() + 1);
                break;
            case"MM":
                b = a.getMonth();
                a.setMonth(a.getMonth() + c * f);
                a.getMonth() > b + c * f && a.setDate(a.getDate() - 1);
                e || h || a.setDate(a.getDate() + 1);
                break;
            case"DD":
                a.setDate(a.getDate() + c * f);
                break;
            case"WW":
                a.setDate(a.getDate() + c * f * 7);
                break;
            case"hh":
                a.setHours(a.getHours() + c * f);
                break;
            case"mm":
                a.setMinutes(a.getMinutes() + c * f);
                break;
            case"ss":
                a.setSeconds(a.getSeconds() +
                    c * f);
                break;
            case"fff":
                a.setMilliseconds(a.getMilliseconds() + c * f)
        }
        return a
    };
    d.changeUTCDate = function (a, b, c, d, h) {
        var f = -1;
        void 0 === d && (d = !0);
        void 0 === h && (h = !1);
        !0 === d && (f = 1);
        switch (b) {
            case"YYYY":
                a.setUTCFullYear(a.getUTCFullYear() + c * f);
                d || h || a.setUTCDate(a.getUTCDate() + 1);
                break;
            case"MM":
                b = a.getUTCMonth();
                a.setUTCMonth(a.getUTCMonth() + c * f);
                a.getUTCMonth() > b + c * f && a.setUTCDate(a.getUTCDate() - 1);
                d || h || a.setUTCDate(a.getUTCDate() + 1);
                break;
            case"DD":
                a.setUTCDate(a.getUTCDate() + c * f);
                break;
            case"WW":
                a.setUTCDate(a.getUTCDate() +
                    c * f * 7);
                break;
            case"hh":
                a.setUTCHours(a.getUTCHours() + c * f);
                break;
            case"mm":
                a.setUTCMinutes(a.getUTCMinutes() + c * f);
                break;
            case"ss":
                a.setUTCSeconds(a.getUTCSeconds() + c * f);
                break;
            case"fff":
                a.setUTCMilliseconds(a.getUTCMilliseconds() + c * f)
        }
        return a
    }
})();
/* End */
;
; /* Start:"a:4:{s:4:"full";s:51:"/bitrix/templates/main/js/serial.js?147575796046606";s:6:"source";s:35:"/bitrix/templates/main/js/serial.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
(function () {
    var e = window.AmCharts;
    e.AmRectangularChart = e.Class({
        inherits: e.AmCoordinateChart, construct: function (a) {
            e.AmRectangularChart.base.construct.call(this, a);
            this.theme = a;
            this.createEvents("zoomed", "changed");
            this.marginRight = this.marginBottom = this.marginTop = this.marginLeft = 20;
            this.depth3D = this.angle = 0;
            this.plotAreaFillColors = "#FFFFFF";
            this.plotAreaFillAlphas = 0;
            this.plotAreaBorderColor = "#000000";
            this.plotAreaBorderAlpha = 0;
            this.maxZoomFactor = 20;
            this.zoomOutButtonImageSize = 19;
            this.zoomOutButtonImage = "lens";
            this.zoomOutText = "Show all";
            this.zoomOutButtonColor = "#e5e5e5";
            this.zoomOutButtonAlpha = 0;
            this.zoomOutButtonRollOverAlpha = 1;
            this.zoomOutButtonPadding = 8;
            this.trendLines = [];
            this.autoMargins = !0;
            this.marginsUpdated = !1;
            this.autoMarginOffset = 10;
            e.applyTheme(this, a, "AmRectangularChart")
        }, initChart: function () {
            e.AmRectangularChart.base.initChart.call(this);
            this.updateDxy();
            !this.marginsUpdated && this.autoMargins && (this.resetMargins(), this.drawGraphs = !1);
            this.processScrollbars();
            this.updateMargins();
            this.updatePlotArea();
            this.updateScrollbars();
            this.updateTrendLines();
            this.updateChartCursor();
            this.updateValueAxes();
            this.scrollbarOnly || this.updateGraphs()
        }, drawChart: function () {
            e.AmRectangularChart.base.drawChart.call(this);
            this.drawPlotArea();
            if (e.ifArray(this.chartData)) {
                var a = this.chartCursor;
                a && a.draw()
            }
        }, resetMargins: function () {
            var a = {}, b;
            if ("xy" == this.type) {
                var c = this.xAxes, d = this.yAxes;
                for (b = 0; b < c.length; b++) {
                    var g = c[b];
                    g.ignoreAxisWidth || (g.setOrientation(!0), g.fixAxisPosition(), a[g.position] = !0)
                }
                for (b = 0; b < d.length; b++) c = d[b], c.ignoreAxisWidth || (c.setOrientation(!1), c.fixAxisPosition(), a[c.position] = !0)
            } else {
                d = this.valueAxes;
                for (b = 0; b < d.length; b++) c = d[b], c.ignoreAxisWidth || (c.setOrientation(this.rotate), c.fixAxisPosition(), a[c.position] = !0);
                (b = this.categoryAxis) && !b.ignoreAxisWidth && (b.setOrientation(!this.rotate), b.fixAxisPosition(), b.fixAxisPosition(), a[b.position] = !0)
            }
            a.left && (this.marginLeft = 0);
            a.right && (this.marginRight = 0);
            a.top && (this.marginTop = 0);
            a.bottom && (this.marginBottom = 0);
            this.fixMargins = a
        }, measureMargins: function () {
            var a = this.valueAxes, b, c = this.autoMarginOffset, d = this.fixMargins, g = this.realWidth,
                h = this.realHeight, f = c, e = c, l = g;
            b = h;
            var m;
            for (m = 0; m < a.length; m++) a[m].handleSynchronization(), b = this.getAxisBounds(a[m], f, l, e, b), f = Math.round(b.l), l = Math.round(b.r), e = Math.round(b.t), b = Math.round(b.b);
            if (a = this.categoryAxis) b = this.getAxisBounds(a, f, l, e, b), f = Math.round(b.l), l = Math.round(b.r), e = Math.round(b.t), b = Math.round(b.b);
            d.left && f < c && (this.marginLeft = Math.round(-f + c));
            d.right && l >= g - c && (this.marginRight = Math.round(l - g + c));
            d.top && e < c + this.titleHeight && (this.marginTop = Math.round(this.marginTop - e + c + this.titleHeight));
            d.bottom && b > h - c && (this.marginBottom = Math.round(this.marginBottom + b - h + c));
            this.initChart()
        }, getAxisBounds: function (a, b, c, d, g) {
            if (!a.ignoreAxisWidth) {
                var e = a.labelsSet, f = a.tickLength;
                a.inside && (f = 0);
                if (e) switch (e = a.getBBox(), a.position) {
                    case"top":
                        a = e.y;
                        d > a && (d = a);
                        break;
                    case"bottom":
                        a = e.y + e.height;
                        g < a && (g = a);
                        break;
                    case"right":
                        a = e.x + e.width + f + 3;
                        c < a && (c = a);
                        break;
                    case"left":
                        a = e.x - f, b > a && (b = a)
                }
            }
            return {l: b, t: d, r: c, b: g}
        }, drawZoomOutButton: function () {
            var a = this;
            if (!a.zbSet) {
                var b = a.container.set();
                a.zoomButtonSet.push(b);
                var c = a.color, d = a.fontSize, g = a.zoomOutButtonImageSize,
                    h = a.zoomOutButtonImage.replace(/\.[a-z]*$/i, ""), f = e.lang.zoomOutText || a.zoomOutText,
                    k = a.zoomOutButtonColor, l = a.zoomOutButtonAlpha, m = a.zoomOutButtonFontSize,
                    q = a.zoomOutButtonPadding;
                isNaN(m) || (d = m);
                (m = a.zoomOutButtonFontColor) && (c = m);
                var m = a.zoomOutButton, n;
                m && (m.fontSize && (d = m.fontSize), m.color && (c = m.color), m.backgroundColor && (k = m.backgroundColor), isNaN(m.backgroundAlpha) || (a.zoomOutButtonRollOverAlpha = m.backgroundAlpha));
                var p = m = 0;
                void 0 !== a.pathToImages && h && (n = a.container.image(a.pathToImages + h + a.extension, 0, 0, g, g), e.setCN(a, n, "zoom-out-image"), b.push(n), n = n.getBBox(), m = n.width + 5);
                void 0 !== f && (c = e.text(a.container, f, c, a.fontFamily, d, "start"), e.setCN(a, c, "zoom-out-label"), d = c.getBBox(), p = n ? n.height / 2 - 3 : d.height / 2, c.translate(m, p), b.push(c));
                n = b.getBBox();
                c = 1;
                e.isModern || (c = 0);
                k = e.rect(a.container, n.width +
                    2 * q + 5, n.height + 2 * q - 2, k, 1, 1, k, c);
                k.setAttr("opacity", l);
                k.translate(-q, -q);
                e.setCN(a, k, "zoom-out-bg");
                b.push(k);
                k.toBack();
                a.zbBG = k;
                n = k.getBBox();
                b.translate(a.marginLeftReal + a.plotAreaWidth - n.width + q, a.marginTopReal + q);
                b.hide();
                b.mouseover(function () {
                    a.rollOverZB()
                }).mouseout(function () {
                    a.rollOutZB()
                }).click(function () {
                    a.clickZB()
                }).touchstart(function () {
                    a.rollOverZB()
                }).touchend(function () {
                    a.rollOutZB();
                    a.clickZB()
                });
                for (l = 0; l < b.length; l++) b[l].attr({cursor: "pointer"});
                a.zbSet = b
            }
        }, rollOverZB: function () {
            this.rolledOverZB = !0;
            this.zbBG.setAttr("opacity", this.zoomOutButtonRollOverAlpha)
        }, rollOutZB: function () {
            this.rolledOverZB = !1;
            this.zbBG.setAttr("opacity", this.zoomOutButtonAlpha)
        }, clickZB: function () {
            this.rolledOverZB = !1;
            this.zoomOut()
        }, zoomOut: function () {
            this.zoomOutValueAxes()
        }, drawPlotArea: function () {
            var a = this.dx, b = this.dy, c = this.marginLeftReal, d = this.marginTopReal, g = this.plotAreaWidth - 1,
                h = this.plotAreaHeight - 1, f = this.plotAreaFillColors, k = this.plotAreaFillAlphas,
                l = this.plotAreaBorderColor, m = this.plotAreaBorderAlpha;
            "object" == typeof k && (k = k[0]);
            f = e.polygon(this.container, [0, g, g, 0, 0], [0, 0, h, h, 0], f, k, 1, l, m, this.plotAreaGradientAngle);
            e.setCN(this, f, "plot-area");
            f.translate(c + a, d + b);
            this.set.push(f);
            0 !== a && 0 !== b && (f = this.plotAreaFillColors, "object" == typeof f && (f = f[0]), f = e.adjustLuminosity(f, -.15), g = e.polygon(this.container, [0, a, g + a, g, 0], [0, b, b, 0, 0], f, k, 1, l, m), e.setCN(this, g, "plot-area-bottom"), g.translate(c, d + h), this.set.push(g), a = e.polygon(this.container, [0, 0, a, a, 0], [0, h, h + b, b, 0], f, k, 1, l, m), e.setCN(this, a, "plot-area-left"), a.translate(c, d), this.set.push(a));
            (c = this.bbset) && this.scrollbarOnly && c.remove()
        }, updatePlotArea: function () {
            var a = this.updateWidth(), b = this.updateHeight(), c = this.container;
            this.realWidth = a;
            this.realWidth = b;
            c && this.container.setSize(a, b);
            var c = this.marginLeftReal, d = this.marginTopReal, a = a - c - this.marginRightReal - this.dx,
                b = b - d - this.marginBottomReal;
            1 > a && (a = 1);
            1 > b && (b = 1);
            this.plotAreaWidth = Math.round(a);
            this.plotAreaHeight = Math.round(b);
            this.plotBalloonsSet.translate(c, d)
        }, updateDxy: function () {
            this.dx = Math.round(this.depth3D * Math.cos(this.angle * Math.PI / 180));
            this.dy = Math.round(-this.depth3D * Math.sin(this.angle * Math.PI / 180));
            this.d3x = Math.round(this.columnSpacing3D * Math.cos(this.angle * Math.PI / 180));
            this.d3y = Math.round(-this.columnSpacing3D * Math.sin(this.angle * Math.PI / 180))
        }, updateMargins: function () {
            var a = this.getTitleHeight();
            this.titleHeight = a;
            this.marginTopReal = this.marginTop - this.dy;
            this.fixMargins && !this.fixMargins.top && (this.marginTopReal += a);
            this.marginBottomReal = this.marginBottom;
            this.marginLeftReal = this.marginLeft;
            this.marginRightReal = this.marginRight
        }, updateValueAxes: function () {
            var a = this.valueAxes, b;
            for (b = 0; b < a.length; b++) {
                var c = a[b];
                this.setAxisRenderers(c);
                this.updateObjectSize(c)
            }
        }, setAxisRenderers: function (a) {
            a.axisRenderer = e.RecAxis;
            a.guideFillRenderer = e.RecFill;
            a.axisItemRenderer = e.RecItem;
            a.marginsChanged = !0
        }, updateGraphs: function () {
            var a = this.graphs, b;
            for (b = 0; b < a.length; b++) {
                var c = a[b];
                c.index = b;
                c.rotate = this.rotate;
                this.updateObjectSize(c)
            }
        }, updateObjectSize: function (a) {
            a.width = this.plotAreaWidth -
                1;
            a.height = this.plotAreaHeight - 1;
            a.x = this.marginLeftReal;
            a.y = this.marginTopReal;
            a.dx = this.dx;
            a.dy = this.dy
        }, updateChartCursor: function () {
            var a = this.chartCursor;
            a && (a = e.processObject(a, e.ChartCursor, this.theme), this.updateObjectSize(a), this.addChartCursor(a), a.chart = this)
        }, processScrollbars: function () {
            var a = this.chartScrollbar;
            a && (a = e.processObject(a, e.ChartScrollbar, this.theme), this.addChartScrollbar(a))
        }, updateScrollbars: function () {
        }, removeChartCursor: function () {
            e.callMethod("destroy", [this.chartCursor]);
            this.chartCursor = null
        }, zoomTrendLines: function () {
            var a = this.trendLines, b;
            for (b = 0; b < a.length; b++) {
                var c = a[b];
                c.valueAxis.recalculateToPercents ? c.set && c.set.hide() : (c.x = this.marginLeftReal, c.y = this.marginTopReal, c.draw())
            }
        }, handleCursorValueZoom: function () {
        }, addTrendLine: function (a) {
            this.trendLines.push(a)
        }, zoomOutValueAxes: function () {
            for (var a = this.valueAxes, b = 0; b < a.length; b++) a[b].zoomOut()
        }, removeTrendLine: function (a) {
            var b = this.trendLines, c;
            for (c = b.length - 1; 0 <= c; c--) b[c] == a && b.splice(c, 1)
        }, adjustMargins: function (a, b) {
            var c = a.position, d = a.scrollbarHeight + a.offset;
            a.enabled && ("top" == c ? b ? this.marginLeftReal += d : this.marginTopReal += d : b ? this.marginRightReal += d : this.marginBottomReal += d)
        }, getScrollbarPosition: function (a, b, c) {
            var d = "bottom", g = "top";
            a.oppositeAxis || (g = d, d = "top");
            a.position = b ? "bottom" == c || "left" == c ? d : g : "top" == c || "right" == c ? d : g
        }, updateChartScrollbar: function (a, b) {
            if (a) {
                a.rotate = b;
                var c = this.marginTopReal, d = this.marginLeftReal, g = a.scrollbarHeight, e = this.dx, f = this.dy,
                    k = a.offset;
                "top" == a.position ? b ? (a.y = c, a.x = d - g - k) : (a.y = c - g + f - k, a.x = d + e) : b ? (a.y = c + f, a.x = d + this.plotAreaWidth + e + k) : (a.y = c + this.plotAreaHeight + k, a.x = this.marginLeftReal)
            }
        }, showZB: function (a) {
            var b = this.zbSet;
            a && (b = this.zoomOutText, "" !== b && b && this.drawZoomOutButton());
            if (b = this.zbSet) this.zoomButtonSet.push(b), a ? b.show() : b.hide(), this.rollOutZB()
        }, handleReleaseOutside: function (a) {
            e.AmRectangularChart.base.handleReleaseOutside.call(this, a);
            (a = this.chartCursor) && a.handleReleaseOutside && a.handleReleaseOutside()
        }, handleMouseDown: function (a) {
            e.AmRectangularChart.base.handleMouseDown.call(this, a);
            var b = this.chartCursor;
            b && b.handleMouseDown && !this.rolledOverZB && b.handleMouseDown(a)
        }, update: function () {
            e.AmRectangularChart.base.update.call(this);
            this.chartCursor && this.chartCursor.update && this.chartCursor.update()
        }, handleScrollbarValueZoom: function (a) {
            this.relativeZoomValueAxes(a.target.valueAxes, a.relativeStart, a.relativeEnd);
            this.zoomAxesAndGraphs()
        }, zoomValueScrollbar: function (a) {
            if (a && a.enabled) {
                var b = a.valueAxes[0], c = b.relativeStart, d = b.relativeEnd;
                b.reversed && (d = 1 - c, c = 1 - b.relativeEnd);
                a.percentZoom(c, d)
            }
        }, zoomAxesAndGraphs: function () {
            if (!this.scrollbarOnly) {
                var a = this.valueAxes, b;
                for (b = 0; b < a.length; b++) a[b].zoom(this.start, this.end);
                a = this.graphs;
                for (b = 0; b < a.length; b++) a[b].zoom(this.start, this.end);
                (b = this.chartCursor) && b.clearSelection();
                this.zoomTrendLines()
            }
        }, handleValueAxisZoomReal: function (a, b) {
            var c = a.relativeStart, d = a.relativeEnd;
            if (c > d) var g = c, c = d, d = g;
            this.relativeZoomValueAxes(b, c, d);
            this.updateAfterValueZoom()
        }, updateAfterValueZoom: function () {
            this.zoomAxesAndGraphs();
            this.zoomScrollbar()
        }, relativeZoomValueAxes: function (a, b, c) {
            b = e.fitToBounds(b, 0, 1);
            c = e.fitToBounds(c, 0, 1);
            if (b > c) {
                var d = b;
                b = c;
                c = d
            }
            var d = 1 / this.maxZoomFactor, g = e.getDecimals(d) + 4;
            c - b < d && (c = b + (c - b) / 2, b = c - d / 2, c += d / 2);
            b = e.roundTo(b, g);
            c = e.roundTo(c, g);
            d = !1;
            if (a) {
                for (g = 0; g < a.length; g++) {
                    var h = a[g].zoomToRelativeValues(b, c, !0);
                    h && (d = h)
                }
                this.showZB()
            }
            return d
        }, addChartCursor: function (a) {
            e.callMethod("destroy", [this.chartCursor]);
            a && (this.listenTo(a, "moved", this.handleCursorMove), this.listenTo(a, "zoomed",
                this.handleCursorZoom), this.listenTo(a, "zoomStarted", this.handleCursorZoomStarted), this.listenTo(a, "panning", this.handleCursorPanning), this.listenTo(a, "onHideCursor", this.handleCursorHide));
            this.chartCursor = a
        }, handleCursorChange: function () {
        }, handleCursorMove: function (a) {
            var b, c = this.valueAxes;
            for (b = 0; b < c.length; b++) a.panning || c[b].showBalloon(a.x, a.y)
        }, handleCursorZoom: function (a) {
            if (this.skipZoomed) this.skipZoomed = !1; else {
                var b = this.startX0, c = this.endX0, d = this.endY0, g = this.startY0, e = a.startX, f = a.endX,
                    k = a.startY, l = a.endY;
                this.startX0 = this.endX0 = this.startY0 = this.endY0 = NaN;
                this.handleCursorZoomReal(b + e * (c - b), b + f * (c - b), g + k * (d - g), g + l * (d - g), a)
            }
        }, handleCursorHide: function () {
            var a, b = this.valueAxes;
            for (a = 0; a < b.length; a++) b[a].hideBalloon();
            b = this.graphs;
            for (a = 0; a < b.length; a++) b[a].hideBalloonReal()
        }
    })
})();
(function () {
    var e = window.AmCharts;
    e.AmSerialChart = e.Class({
        inherits: e.AmRectangularChart, construct: function (a) {
            this.type = "serial";
            e.AmSerialChart.base.construct.call(this, a);
            this.cname = "AmSerialChart";
            this.theme = a;
            this.columnSpacing = 5;
            this.columnSpacing3D = 0;
            this.columnWidth = .8;
            var b = new e.CategoryAxis(a);
            b.chart = this;
            this.categoryAxis = b;
            this.zoomOutOnDataUpdate = !0;
            this.mouseWheelZoomEnabled = this.mouseWheelScrollEnabled = this.rotate = this.skipZoom = !1;
            this.minSelectedTime = 0;
            e.applyTheme(this, a, this.cname)
        }, initChart: function () {
            e.AmSerialChart.base.initChart.call(this);
            this.updateCategoryAxis(this.categoryAxis, this.rotate, "categoryAxis");
            if (this.dataChanged) this.parseData(); else this.onDataUpdated();
            this.drawGraphs = !0
        }, onDataUpdated: function () {
            var a = this.countColumns(), b = this.chartData, c = this.graphs, d;
            for (d = 0; d < c.length; d++) {
                var g = c[d];
                g.data = b;
                g.columnCount = a
            }
            0 < b.length && (this.firstTime = this.getStartTime(b[0].time), this.lastTime = this.getEndTime(b[b.length - 1].time));
            this.drawChart();
            this.autoMargins && !this.marginsUpdated ? (this.marginsUpdated = !0, this.measureMargins()) : this.dispDUpd()
        }, handleWheelReal: function (a, b) {
            if (!this.wheelBusy) {
                var c = this.categoryAxis, d = c.parseDates, g = c.minDuration(), e = c = 1;
                this.mouseWheelZoomEnabled ? b || (c = -1) : b && (c = -1);
                var f = this.chartData.length, k = this.lastTime, l = this.firstTime;
                0 > a ? d ? (f = this.endTime - this.startTime, d = this.startTime + c * g, g = this.endTime + e * g, 0 < e && 0 < c && g >= k && (g = k, d = k - f), this.zoomToDates(new Date(d), new Date(g))) : (0 < e && 0 < c && this.end >= f - 1 && (c = e = 0), d = this.start +
                    c, g = this.end + e, this.zoomToIndexes(d, g)) : d ? (f = this.endTime - this.startTime, d = this.startTime - c * g, g = this.endTime - e * g, 0 < e && 0 < c && d <= l && (d = l, g = l + f), this.zoomToDates(new Date(d), new Date(g))) : (0 < e && 0 < c && 1 > this.start && (c = e = 0), d = this.start - c, g = this.end - e, this.zoomToIndexes(d, g))
            }
        }, validateData: function (a) {
            this.marginsUpdated = !1;
            this.zoomOutOnDataUpdate && !a && (this.endTime = this.end = this.startTime = this.start = NaN);
            e.AmSerialChart.base.validateData.call(this)
        }, drawChart: function () {
            if (0 < this.realWidth && 0 < this.realHeight) {
                e.AmSerialChart.base.drawChart.call(this);
                var a = this.chartData;
                if (e.ifArray(a)) {
                    var b = this.chartScrollbar;
                    !b || !this.marginsUpdated && this.autoMargins || b.draw();
                    (b = this.valueScrollbar) && b.draw();
                    var a = a.length - 1, c, b = this.categoryAxis;
                    if (b.parseDates && !b.equalSpacing) {
                        if (b = this.startTime, c = this.endTime, isNaN(b) || isNaN(c)) b = this.firstTime, c = this.lastTime
                    } else if (b = this.start, c = this.end, isNaN(b) || isNaN(c)) b = 0, c = a;
                    this.endTime = this.startTime = this.end = this.start = void 0;
                    this.zoom(b, c)
                }
            } else this.cleanChart()
        }, cleanChart: function () {
            e.callMethod("destroy", [this.valueAxes, this.graphs, this.categoryAxis, this.chartScrollbar, this.chartCursor, this.valueScrollbar])
        }, updateCategoryAxis: function (a, b, c) {
            a.chart = this;
            a.id = c;
            a.rotate = b;
            a.setOrientation(!this.rotate);
            a.init();
            this.setAxisRenderers(a);
            this.updateObjectSize(a)
        }, updateValueAxes: function () {
            e.AmSerialChart.base.updateValueAxes.call(this);
            var a = this.valueAxes, b;
            for (b = 0; b < a.length; b++) {
                var c = a[b], d = this.rotate;
                c.rotate = d;
                c.setOrientation(d);
                d = this.categoryAxis;
                if (!d.startOnAxis || d.parseDates) c.expandMinMax = !0
            }
        }, getStartTime: function (a) {
            var b = this.categoryAxis;
            return e.resetDateToMin(new Date(a), b.minPeriod, 1, b.firstDayOfWeek).getTime()
        }, getEndTime: function (a) {
            var b = e.extractPeriod(this.categoryAxis.minPeriod);
            return e.changeDate(new Date(a), b.period, b.count, !0).getTime() - 1
        }, updateMargins: function () {
            e.AmSerialChart.base.updateMargins.call(this);
            var a = this.chartScrollbar;
            a && (this.getScrollbarPosition(a, this.rotate, this.categoryAxis.position), this.adjustMargins(a, this.rotate));
            if (a = this.valueScrollbar) this.getScrollbarPosition(a, !this.rotate, this.valueAxes[0].position), this.adjustMargins(a, !this.rotate)
        }, updateScrollbars: function () {
            e.AmSerialChart.base.updateScrollbars.call(this);
            this.updateChartScrollbar(this.chartScrollbar, this.rotate);
            this.updateChartScrollbar(this.valueScrollbar, !this.rotate)
        }, zoom: function (a, b) {
            var c = this.categoryAxis;
            c.parseDates && !c.equalSpacing ? this.timeZoom(a, b) : this.indexZoom(a, b);
            isNaN(a) && this.zoomOutValueAxes();
            this.updateLegendValues()
        }, timeZoom: function (a, b) {
            var c = this.maxSelectedTime;
            isNaN(c) || (b != this.endTime && b - a > c && (a = b - c), a != this.startTime && b - a > c && (b = a + c));
            var d = this.minSelectedTime;
            if (0 < d && b - a < d) {
                var g = Math.round(a + (b - a) / 2), d = Math.round(d / 2);
                a = g - d;
                b = g + d
            }
            d = this.chartData;
            g = this.categoryAxis;
            if (e.ifArray(d) && (a != this.startTime || b != this.endTime)) {
                var h = g.minDuration(), f = this.firstTime, k = this.lastTime;
                a || (a = f, isNaN(c) || (a = k - c));
                b || (b = k);
                a > k && (a = k);
                b < f && (b = f);
                a < f && (a = f);
                b > k && (b = k);
                b < a && (b = a + h);
                b - a < h / 5 && (b < k ? b = a + h / 5 : a = b - h / 5);
                this.startTime = a;
                this.endTime = b;
                c = d.length - 1;
                h = this.getClosestIndex(d,
                    "time", a, !0, 0, c);
                d = this.getClosestIndex(d, "time", b, !1, h, c);
                g.timeZoom(a, b);
                g.zoom(h, d);
                this.start = e.fitToBounds(h, 0, c);
                this.end = e.fitToBounds(d, 0, c);
                this.zoomAxesAndGraphs();
                this.zoomScrollbar();
                this.fixCursor();
                this.showZB();
                this.updateColumnsDepth();
                this.dispatchTimeZoomEvent()
            }
        }, showZB: function () {
            var a, b = this.categoryAxis;
            b && b.parseDates && !b.equalSpacing && (this.startTime > this.firstTime && (a = !0), this.endTime < this.lastTime && (a = !0));
            0 < this.start && (a = !0);
            this.end < this.chartData.length - 1 && (a = !0);
            if (b = this.valueAxes) b = b[0], 0 !== b.relativeStart && (a = !0), 1 != b.relativeEnd && (a = !0);
            e.AmSerialChart.base.showZB.call(this, a)
        }, updateAfterValueZoom: function () {
            e.AmSerialChart.base.updateAfterValueZoom.call(this);
            this.updateColumnsDepth()
        }, indexZoom: function (a, b) {
            var c = this.maxSelectedSeries;
            isNaN(c) || (b != this.end && b - a > c && (a = b - c), a != this.start && b - a > c && (b = a + c));
            if (a != this.start || b != this.end) {
                var d = this.chartData.length - 1;
                isNaN(a) && (a = 0, isNaN(c) || (a = d - c));
                isNaN(b) && (b = d);
                b < a && (b = a);
                b > d && (b = d);
                a > d && (a = d - 1);
                0 > a && (a = 0);
                this.start = a;
                this.end = b;
                this.categoryAxis.zoom(a, b);
                this.zoomAxesAndGraphs();
                this.zoomScrollbar();
                this.fixCursor();
                0 !== a || b != this.chartData.length - 1 ? this.showZB(!0) : this.showZB(!1);
                this.updateColumnsDepth();
                this.dispatchIndexZoomEvent()
            }
        }, updateGraphs: function () {
            e.AmSerialChart.base.updateGraphs.call(this);
            var a = this.graphs, b;
            for (b = 0; b < a.length; b++) {
                var c = a[b];
                c.columnWidthReal = this.columnWidth;
                c.categoryAxis = this.categoryAxis;
                e.isString(c.fillToGraph) && (c.fillToGraph = this.graphsById[c.fillToGraph])
            }
        }, zoomAxesAndGraphs: function () {
            e.AmSerialChart.base.zoomAxesAndGraphs.call(this);
            this.updateColumnsDepth()
        }, updateColumnsDepth: function () {
            if (0 !== this.depth3D || 0 !== this.angle) {
                var a, b = this.graphs, c;
                this.columnsArray = [];
                for (a = 0; a < b.length; a++) {
                    c = b[a];
                    var d = c.columnsArray;
                    if (d) {
                        var g;
                        for (g = 0; g < d.length; g++) this.columnsArray.push(d[g])
                    }
                }
                this.columnsArray.sort(this.compareDepth);
                if (0 < this.columnsArray.length) {
                    b = this.columnsSet;
                    d = this.container.set();
                    this.columnSet.push(d);
                    for (a = 0; a < this.columnsArray.length; a++) d.push(this.columnsArray[a].column.set);
                    c && d.translate(c.x, c.y);
                    this.columnsSet = d;
                    e.remove(b)
                }
            }
        }, compareDepth: function (a, b) {
            return a.depth > b.depth ? 1 : -1
        }, zoomScrollbar: function () {
            var a = this.chartScrollbar, b = this.categoryAxis;
            if (a) {
                if (!this.zoomedByScrollbar) {
                    var c = a.dragger;
                    c && c.stop()
                }
                this.zoomedByScrollbar = !1;
                b.parseDates && !b.equalSpacing ? a.timeZoom(this.startTime, this.endTime) : a.zoom(this.start, this.end)
            }
            this.zoomValueScrollbar(this.valueScrollbar)
        }, updateTrendLines: function () {
            var a = this.trendLines, b;
            for (b = 0; b < a.length; b++) {
                var c = a[b], c = e.processObject(c, e.TrendLine, this.theme);
                a[b] = c;
                c.chart = this;
                c.id || (c.id = "trendLineAuto" + b + "_" + (new Date).getTime());
                e.isString(c.valueAxis) && (c.valueAxis = this.getValueAxisById(c.valueAxis));
                c.valueAxis || (c.valueAxis = this.valueAxes[0]);
                c.categoryAxis = this.categoryAxis
            }
        }, countColumns: function () {
            var a = 0, b = this.valueAxes.length, c = this.graphs.length, d, g, e = !1, f, k;
            for (k = 0; k < b; k++) {
                g = this.valueAxes[k];
                var l = g.stackType;
                if ("100%" == l || "regular" == l) for (e = !1, f = 0; f < c; f++) d = this.graphs[f], d.tcc = 1, d.valueAxis == g && "column" == d.type && (!e && d.stackable && (a++, e = !0), (!d.stackable && d.clustered || d.newStack) && a++, d.columnIndex = a - 1, d.clustered || (d.columnIndex = 0));
                if ("none" == l || "3d" == l) {
                    e = !1;
                    for (f = 0; f < c; f++) d = this.graphs[f], d.valueAxis == g && "column" == d.type && (d.clustered ? (d.tcc = 1, d.newStack && (a = 0), d.hidden || (d.columnIndex = a, a++)) : d.hidden || (e = !0, d.tcc = 1, d.columnIndex = 0));
                    e && 0 === a && (a = 1)
                }
                if ("3d" == l) {
                    g = 1;
                    for (k = 0; k < c; k++) d = this.graphs[k], d.newStack && g++, d.depthCount = g, d.tcc = a;
                    a = g
                }
            }
            return a
        }, parseData: function () {
            e.AmSerialChart.base.parseData.call(this);
            this.parseSerialData(this.dataProvider)
        }, getCategoryIndexByValue: function (a) {
            var b = this.chartData, c;
            for (c = 0; c < b.length; c++) if (b[c].category == a) return c
        }, handleScrollbarZoom: function (a) {
            this.zoomedByScrollbar = !0;
            this.zoom(a.start, a.end)
        }, dispatchTimeZoomEvent: function () {
            if (this.drawGraphs && (this.prevStartTime != this.startTime || this.prevEndTime != this.endTime)) {
                var a = {type: "zoomed"};
                a.startDate = new Date(this.startTime);
                a.endDate = new Date(this.endTime);
                a.startIndex = this.start;
                a.endIndex = this.end;
                this.startIndex = this.start;
                this.endIndex = this.end;
                this.startDate = a.startDate;
                this.endDate = a.endDate;
                this.prevStartTime = this.startTime;
                this.prevEndTime = this.endTime;
                var b = this.categoryAxis, c = e.extractPeriod(b.minPeriod).period, b = b.dateFormatsObject[c];
                a.startValue = e.formatDate(a.startDate, b, this);
                a.endValue = e.formatDate(a.endDate, b, this);
                a.chart = this;
                a.target = this;
                this.fire(a)
            }
        }, dispatchIndexZoomEvent: function () {
            if (this.drawGraphs && (this.prevStartIndex != this.start || this.prevEndIndex != this.end)) {
                this.startIndex = this.start;
                this.endIndex = this.end;
                var a = this.chartData;
                if (e.ifArray(a) && !isNaN(this.start) && !isNaN(this.end)) {
                    var b = {chart: this, target: this, type: "zoomed"};
                    b.startIndex = this.start;
                    b.endIndex = this.end;
                    b.startValue = a[this.start].category;
                    b.endValue = a[this.end].category;
                    this.categoryAxis.parseDates && (this.startTime = a[this.start].time, this.endTime = a[this.end].time, b.startDate = new Date(this.startTime), b.endDate = new Date(this.endTime));
                    this.prevStartIndex = this.start;
                    this.prevEndIndex = this.end;
                    this.fire(b)
                }
            }
        }, updateLegendValues: function () {
            this.legend && this.legend.updateValues()
        }, getClosestIndex: function (a, b, c, d, e, h) {
            0 > e && (e = 0);
            h > a.length - 1 && (h = a.length - 1);
            var f = e + Math.round((h - e) / 2), k = a[f][b];
            return c == k ? f : 1 >= h - e ? d ? e : Math.abs(a[e][b] - c) < Math.abs(a[h][b] - c) ? e : h : c == k ? f : c < k ? this.getClosestIndex(a, b, c, d, e, f) : this.getClosestIndex(a, b, c, d, f, h)
        }, zoomToIndexes: function (a, b) {
            var c = this.chartData;
            if (c) {
                var d = c.length;
                0 < d && (0 > a && (a = 0), b > d - 1 && (b = d - 1), d = this.categoryAxis, d.parseDates && !d.equalSpacing ? this.zoom(c[a].time, this.getEndTime(c[b].time)) : this.zoom(a,
                    b))
            }
        }, zoomToDates: function (a, b) {
            var c = this.chartData;
            if (c) if (this.categoryAxis.equalSpacing) {
                var d = this.getClosestIndex(c, "time", a.getTime(), !0, 0, c.length);
                b = e.resetDateToMin(b, this.categoryAxis.minPeriod, 1);
                c = this.getClosestIndex(c, "time", b.getTime(), !1, 0, c.length);
                this.zoom(d, c)
            } else this.zoom(a.getTime(), b.getTime())
        }, zoomToCategoryValues: function (a, b) {
            this.chartData && this.zoom(this.getCategoryIndexByValue(a), this.getCategoryIndexByValue(b))
        }, formatPeriodString: function (a, b) {
            if (b) {
                var c = ["value", "open", "low", "high", "close"],
                    d = "value open low high close average sum count".split(" "), g = b.valueAxis, h = this.chartData,
                    f = b.numberFormatter;
                f || (f = this.nf);
                for (var k = 0; k < c.length; k++) {
                    for (var l = c[k], m = 0, q = 0, n, p, x, u, B, r = 0, t = 0, C, v, w, A, z, G = this.start; G <= this.end; G++) {
                        var y = h[G];
                        if (y && (y = y.axes[g.id].graphs[b.id])) {
                            if (y.values) {
                                var D = y.values[l];
                                if (this.rotate) {
                                    if (0 > y.x || y.x > y.graph.height) D = NaN
                                } else if (0 > y.x || y.x > y.graph.width) D = NaN;
                                if (!isNaN(D)) {
                                    isNaN(n) && (n = D);
                                    p = D;
                                    if (isNaN(x) || x > D) x = D;
                                    if (isNaN(u) || u < D) u = D;
                                    B = e.getDecimals(m);
                                    var F = e.getDecimals(D), m = m + D, m = e.roundTo(m, Math.max(B, F));
                                    q++;
                                    B = m / q
                                }
                            }
                            if (y.percents && (y = y.percents[l], !isNaN(y))) {
                                isNaN(C) && (C = y);
                                v = y;
                                if (isNaN(w) || w > y) w = y;
                                if (isNaN(A) || A < y) A = y;
                                z = e.getDecimals(r);
                                D = e.getDecimals(y);
                                r += y;
                                r = e.roundTo(r, Math.max(z, D));
                                t++;
                                z = r / t
                            }
                        }
                    }
                    r = {open: C, close: v, high: A, low: w, average: z, sum: r, count: t};
                    a = e.formatValue(a, {
                        open: n,
                        close: p,
                        high: u,
                        low: x,
                        average: B,
                        sum: m,
                        count: q
                    }, d, f, l + "\\.", this.usePrefixes, this.prefixesOfSmallNumbers, this.prefixesOfBigNumbers);
                    a = e.formatValue(a, r, d, this.pf, "percents\\." + l + "\\.")
                }
            }
            return a = e.cleanFromEmpty(a)
        }, formatString: function (a, b, c) {
            if (b) {
                var d = b.graph;
                if (void 0 !== a) {
                    if (-1 != a.indexOf("[[category]]")) {
                        var g = b.serialDataItem.category;
                        if (this.categoryAxis.parseDates) {
                            var h = this.balloonDateFormat, f = this.chartCursor;
                            f && f.categoryBalloonDateFormat && (h = f.categoryBalloonDateFormat);
                            h = e.formatDate(g, h, this);
                            -1 != h.indexOf("fff") && (h = e.formatMilliseconds(h, g));
                            g = h
                        }
                        a = a.replace(/\[\[category\]\]/g, String(g))
                    }
                    g = d.numberFormatter;
                    g || (g = this.nf);
                    h = b.graph.valueAxis;
                    (f = h.duration) && !isNaN(b.values.value) && (f = e.formatDuration(b.values.value, f, "", h.durationUnits, h.maxInterval, g), a = a.replace(RegExp("\\[\\[value\\]\\]", "g"), f));
                    "date" == h.type && (h = e.formatDate(new Date(b.values.value), d.dateFormat, this), f = RegExp("\\[\\[value\\]\\]", "g"), a = a.replace(f, h), h = e.formatDate(new Date(b.values.open), d.dateFormat, this), f = RegExp("\\[\\[open\\]\\]", "g"), a = a.replace(f, h));
                    d = "value open low high close total".split(" ");
                    h = this.pf;
                    a = e.formatValue(a, b.percents, d, h, "percents\\.");
                    a = e.formatValue(a, b.values, d, g, "", this.usePrefixes, this.prefixesOfSmallNumbers, this.prefixesOfBigNumbers);
                    a = e.formatValue(a, b.values, ["percents"], h);
                    -1 != a.indexOf("[[") && (a = e.formatDataContextValue(a, b.dataContext));
                    -1 != a.indexOf("[[") && b.graph.customData && (a = e.formatDataContextValue(a, b.graph.customData));
                    a = e.AmSerialChart.base.formatString.call(this, a, b, c)
                }
                return a
            }
        }, updateChartCursor: function () {
            e.AmSerialChart.base.updateChartCursor.call(this);
            var a = this.chartCursor, b = this.categoryAxis;
            if (a) {
                var c = a.categoryBalloonAlpha, d = a.categoryBalloonColor, g = a.color;
                void 0 === d && (d = a.cursorColor);
                var h = a.valueZoomable, f = a.zoomable, k = a.valueLineEnabled;
                this.rotate ? (a.vLineEnabled = k, a.hZoomEnabled = h, a.vZoomEnabled = f) : (a.hLineEnabled = k, a.vZoomEnabled = h, a.hZoomEnabled = f);
                if (a.valueLineBalloonEnabled) for (k = 0; k < this.valueAxes.length; k++) h = this.valueAxes[k], (f = h.balloon) || (f = {}), f = e.extend(f, this.balloon, !0), f.fillColor = d, f.balloonColor = d, f.fillAlpha = c, f.borderColor = d, f.color = g, h.balloon = f; else for (f = 0; f < this.valueAxes.length; f++) h = this.valueAxes[f], h.balloon && (h.balloon = null);
                b && (b.balloonTextFunction = a.categoryBalloonFunction, a.categoryLineAxis = b, b.balloonText = a.categoryBalloonText, a.categoryBalloonEnabled && ((f = b.balloon) || (f = {}), f = e.extend(f, this.balloon, !0), f.fillColor = d, f.balloonColor = d, f.fillAlpha = c, f.borderColor = d, f.color = g, b.balloon = f), b.balloon && (b.balloon.enabled = a.categoryBalloonEnabled))
            }
        }, addChartScrollbar: function (a) {
            e.callMethod("destroy", [this.chartScrollbar]);
            a && (a.chart = this, this.listenTo(a, "zoomed", this.handleScrollbarZoom));
            this.rotate ? void 0 === a.width && (a.width = a.scrollbarHeight) : void 0 === a.height && (a.height = a.scrollbarHeight);
            a.gridAxis = this.categoryAxis;
            this.chartScrollbar = a
        }, addValueScrollbar: function (a) {
            e.callMethod("destroy", [this.valueScrollbar]);
            a && (a.chart = this, this.listenTo(a, "zoomed", this.handleScrollbarValueZoom), this.listenTo(a, "zoomStarted", this.handleCursorZoomStarted));
            var b = a.scrollbarHeight;
            this.rotate ? void 0 === a.height && (a.height = b) : void 0 === a.width && (a.width = b);
            a.gridAxis || (a.gridAxis = this.valueAxes[0]);
            a.valueAxes = this.valueAxes;
            this.valueScrollbar = a
        }, removeChartScrollbar: function () {
            e.callMethod("destroy", [this.chartScrollbar]);
            this.chartScrollbar = null
        }, removeValueScrollbar: function () {
            e.callMethod("destroy", [this.valueScrollbar]);
            this.valueScrollbar = null
        }, handleReleaseOutside: function (a) {
            e.AmSerialChart.base.handleReleaseOutside.call(this, a);
            e.callMethod("handleReleaseOutside", [this.chartScrollbar, this.valueScrollbar])
        }, update: function () {
            e.AmSerialChart.base.update.call(this);
            this.chartScrollbar && this.chartScrollbar.update && this.chartScrollbar.update();
            this.valueScrollbar && this.valueScrollbar.update && this.valueScrollbar.update()
        }, processScrollbars: function () {
            e.AmSerialChart.base.processScrollbars.call(this);
            var a = this.valueScrollbar;
            a && (a = e.processObject(a, e.ChartScrollbar, this.theme), a.id = "valueScrollbar", this.addValueScrollbar(a))
        }, handleValueAxisZoom: function (a) {
            this.handleValueAxisZoomReal(a, this.valueAxes)
        }, zoomOut: function () {
            e.AmSerialChart.base.zoomOut.call(this);
            this.zoom()
        }, getNextItem: function (a) {
            var b = a.index, c = this.chartData, d = a.graph;
            if (b + 1 < c.length) for (b += 1; b < c.length; b++) if (a = c[b]) if (a = a.axes[d.valueAxis.id].graphs[d.id], !isNaN(a.y)) return a
        }, handleCursorZoomReal: function (a, b, c, d, e) {
            var h = e.target, f, k;
            this.rotate ? (isNaN(a) || isNaN(b) || this.relativeZoomValueAxes(this.valueAxes, a, b) && this.updateAfterValueZoom(), h.vZoomEnabled && (f = e.start, k = e.end)) : (isNaN(c) || isNaN(d) || this.relativeZoomValueAxes(this.valueAxes, c, d) && this.updateAfterValueZoom(), h.hZoomEnabled && (f = e.start, k = e.end));
            isNaN(f) || isNaN(k) || (a = this.categoryAxis, a.parseDates && !a.equalSpacing ? this.zoomToDates(new Date(f), new Date(k)) : this.zoomToIndexes(f, k))
        }, handleCursorZoomStarted: function () {
            var a = this.valueAxes;
            if (a) {
                var a = a[0], b = a.relativeStart, c = a.relativeEnd;
                a.reversed && (b = 1 - a.relativeEnd, c = 1 - a.relativeStart);
                this.rotate ? (this.startX0 = b, this.endX0 = c) : (this.startY0 = b, this.endY0 = c)
            }
            this.categoryAxis && (this.start0 = this.start, this.end0 = this.end, this.startTime0 = this.startTime, this.endTime0 = this.endTime)
        }, fixCursor: function () {
            this.chartCursor && this.chartCursor.fixPosition();
            this.prevCursorItem = null
        }, handleCursorMove: function (a) {
            e.AmSerialChart.base.handleCursorMove.call(this, a);
            var b = a.target, c = this.categoryAxis;
            if (a.panning) this.handleCursorHide(a); else if (this.chartData && !b.isHidden) {
                var d = this.graphs;
                if (d) {
                    var g;
                    g = c.xToIndex(this.rotate ? a.y : a.x);
                    if (g = this.chartData[g]) {
                        var h, f, k, l;
                        if (b.oneBalloonOnly && b.valueBalloonsEnabled) {
                            var m = Infinity;
                            for (h = 0; h < d.length; h++) if (f = d[h], f.balloon.enabled && f.showBalloon && !f.hidden) {
                                k = f.valueAxis.id;
                                k = g.axes[k].graphs[f.id];
                                k = k.y;
                                "top" == f.showBalloonAt && (k = 0);
                                "bottom" == f.showBalloonAt && (k = this.height);
                                var q = b.mouseX, n = b.mouseY;
                                k = this.rotate ? Math.abs(q - k) : Math.abs(n - k);
                                k < m && (m = k, l = f)
                            }
                            b.mostCloseGraph = l
                        }
                        if (this.prevCursorItem != g || l != this.prevMostCloseGraph) {
                            m = [];
                            for (h = 0; h < d.length; h++) f = d[h], k = f.valueAxis.id, k = g.axes[k].graphs[f.id], b.showNextAvailable && isNaN(k.y) && (k = this.getNextItem(k)), l && f != l ? (f.showGraphBalloon(k, b.pointer, !1, b.graphBulletSize, b.graphBulletAlpha), f.balloon.hide(0)) : b.valueBalloonsEnabled ? (f.balloon.showBullet = b.bulletsEnabled, f.balloon.bulletSize = b.bulletSize / 2, a.hideBalloons || (f.showGraphBalloon(k, b.pointer, !1, b.graphBulletSize, b.graphBulletAlpha), f.balloon.set && m.push({
                                balloon: f.balloon,
                                y: f.balloon.pointToY
                            }))) : (f.currentDataItem = k, f.resizeBullet(k, b.graphBulletSize, b.graphBulletAlpha));
                            b.avoidBalloonOverlapping && this.arrangeBalloons(m);
                            this.prevCursorItem = g
                        }
                        this.prevMostCloseGraph = l
                    }
                }
                c.showBalloon(a.x, a.y, b.categoryBalloonDateFormat, a.skip);
                this.updateLegendValues()
            }
        }, handleCursorHide: function (a) {
            e.AmSerialChart.base.handleCursorHide.call(this, a);
            a = this.categoryAxis;
            this.prevCursorItem = null;
            this.updateLegendValues();
            a && a.hideBalloon();
            a = this.graphs;
            var b;
            for (b = 0; b < a.length; b++) a[b].currentDataItem = null
        }, handleCursorPanning: function (a) {
            var b = a.target, c, d = a.deltaX, g = a.deltaY, h = a.delta2X, f = a.delta2Y;
            a = !1;
            if (this.rotate) {
                isNaN(h) && (h = d, a = !0);
                var k = this.endX0;
                c = this.startX0;
                var l = k - c, k = k - l * h, m = l;
                a || (m = 0);
                a = e.fitToBounds(c - l * d, 0, 1 - m)
            } else isNaN(f) && (f = g, a = !0), k = this.endY0, c = this.startY0, l = k - c, k += l * g, m = l, a || (m = 0), a = e.fitToBounds(c + l * f, 0, 1 - m);
            c = e.fitToBounds(k, m, 1);
            var q;
            b.valueZoomable && (q = this.relativeZoomValueAxes(this.valueAxes, a, c));
            var n;
            c = this.categoryAxis;
            this.rotate && (d = g, h = f);
            a = !1;
            isNaN(h) && (h = d, a = !0);
            if (b.zoomable && (0 < Math.abs(d) || 0 < Math.abs(h))) if (c.parseDates && !c.equalSpacing) {
                if (f = this.startTime0, g = this.endTime0, c = g - f, h *= c, l = this.firstTime, k = this.lastTime, m = c, a || (m = 0), a = Math.round(e.fitToBounds(f - c * d, l, k - m)), h = Math.round(e.fitToBounds(g -
                    h, l + m, k)), this.startTime != a || this.endTime != h) n = {
                    chart: this,
                    target: b,
                    type: "zoomed",
                    start: a,
                    end: h
                }, this.skipZoomed = !0, b.fire(n), this.zoom(a, h), n = !0
            } else if (f = this.start0, g = this.end0, c = g - f, d = Math.round(c * d), h = Math.round(c * h), l = this.chartData.length - 1, a || (c = 0), a = e.fitToBounds(f - d, 0, l - c), c = e.fitToBounds(g - h, c, l), this.start != a || this.end != c) this.skipZoomed = !0, b.fire({
                chart: this,
                target: b,
                type: "zoomed",
                start: a,
                end: c
            }), this.zoom(a, c), n = !0;
            !n && q && this.updateAfterValueZoom()
        }, arrangeBalloons: function (a) {
            var b = this.plotAreaHeight;
            a.sort(this.compareY);
            var c, d, e, h = this.plotAreaWidth, f = a.length;
            for (c = 0; c < f; c++) d = a[c].balloon, d.setBounds(0, 0, h, b), d.restorePrevious(), d.draw(), b = d.yPos - 3;
            a.reverse();
            for (c = 0; c < f; c++) {
                d = a[c].balloon;
                var b = d.bottom, k = d.bottom - d.yPos;
                0 < c && b - k < e + 3 && (d.setBounds(0, e + 3, h, e + k + 3), d.restorePrevious(), d.draw());
                d.set && d.set.show();
                e = d.bottom
            }
        }, compareY: function (a, b) {
            return a.y < b.y ? 1 : -1
        }
    })
})();
(function () {
    var e = window.AmCharts;
    e.Cuboid = e.Class({
        construct: function (a, b, c, d, e, h, f, k, l, m, q, n, p, x, u, B, r) {
            this.set = a.set();
            this.container = a;
            this.h = Math.round(c);
            this.w = Math.round(b);
            this.dx = d;
            this.dy = e;
            this.colors = h;
            this.alpha = f;
            this.bwidth = k;
            this.bcolor = l;
            this.balpha = m;
            this.dashLength = x;
            this.topRadius = B;
            this.pattern = u;
            this.rotate = p;
            this.bcn = r;
            p ? 0 > b && 0 === q && (q = 180) : 0 > c && 270 == q && (q = 90);
            this.gradientRotation = q;
            0 === d && 0 === e && (this.cornerRadius = n);
            this.draw()
        }, draw: function () {
            var a = this.set;
            a.clear();
            var b = this.container, c = b.chart, d = this.w, g = this.h, h = this.dx, f = this.dy, k = this.colors,
                l = this.alpha, m = this.bwidth, q = this.bcolor, n = this.balpha, p = this.gradientRotation,
                x = this.cornerRadius, u = this.dashLength, B = this.pattern, r = this.topRadius, t = this.bcn, C = k,
                v = k;
            "object" == typeof k && (C = k[0], v = k[k.length - 1]);
            var w, A, z, G, y, D, F, L, M, Q = l;
            B && (l = 0);
            var E, H, I, J, K = this.rotate;
            if (0 < Math.abs(h) || 0 < Math.abs(f)) if (isNaN(r)) F = v, v = e.adjustLuminosity(C, -.2), v = e.adjustLuminosity(C, -.2), w = e.polygon(b, [0, h, d + h, d, 0], [0, f, f, 0, 0], v, l, 1, q, 0, p), 0 < n && (M = e.line(b, [0, h, d + h], [0, f, f], q, n, m, u)), A = e.polygon(b, [0, 0, d, d, 0], [0, g, g, 0, 0], v, l, 1, q, 0, p), A.translate(h, f), 0 < n && (z = e.line(b, [h, h], [f, f + g], q, n, m, u)), G = e.polygon(b, [0, 0, h, h, 0], [0, g, g + f, f, 0], v, l, 1, q, 0, p), y = e.polygon(b, [d, d, d + h, d + h, d], [0, g, g + f, f, 0], v, l, 1, q, 0, p), 0 < n && (D = e.line(b, [d, d + h, d + h, d], [0, f, g + f, g], q, n, m, u)), v = e.adjustLuminosity(F, .2), F = e.polygon(b, [0, h, d + h, d, 0], [g, g + f, g + f, g, g], v, l, 1, q, 0, p), 0 < n && (L = e.line(b, [0, h, d + h], [g, g + f, g + f], q, n, m, u)); else {
                var N, O, P;
                K ? (N = g / 2, v = h / 2, P = g / 2, O = d + h / 2, H = Math.abs(g / 2), E = Math.abs(h / 2)) : (v = d / 2, N = f / 2, O = d / 2, P = g + f / 2 + 1, E = Math.abs(d / 2), H = Math.abs(f / 2));
                I = E * r;
                J = H * r;
                .1 < E && .1 < E && (w = e.circle(b, E, C, l, m, q, n, !1, H), w.translate(v, N));
                .1 < I && .1 < I && (F = e.circle(b, I, e.adjustLuminosity(C, .5), l, m, q, n, !1, J), F.translate(O, P))
            }
            l = Q;
            1 > Math.abs(g) && (g = 0);
            1 > Math.abs(d) && (d = 0);
            !isNaN(r) && (0 < Math.abs(h) || 0 < Math.abs(f)) ? (k = [C], k = {
                fill: k,
                stroke: q,
                "stroke-width": m,
                "stroke-opacity": n,
                "fill-opacity": l
            }, K ? (l = "M0,0 L" + d + "," + (g / 2 - g / 2 * r), m = " B", 0 < d && (m = " A"), e.VML ? (l += m + Math.round(d -
                I) + "," + Math.round(g / 2 - J) + "," + Math.round(d + I) + "," + Math.round(g / 2 + J) + "," + d + ",0," + d + "," + g, l = l + (" L0," + g) + (m + Math.round(-E) + "," + Math.round(g / 2 - H) + "," + Math.round(E) + "," + Math.round(g / 2 + H) + ",0," + g + ",0,0")) : (l += "A" + I + "," + J + ",0,0,0," + d + "," + (g - g / 2 * (1 - r)) + "L0," + g, l += "A" + E + "," + H + ",0,0,1,0,0"), E = 90) : (m = d / 2 - d / 2 * r, l = "M0,0 L" + m + "," + g, e.VML ? (l = "M0,0 L" + m + "," + g, m = " B", 0 > g && (m = " A"), l += m + Math.round(d / 2 - I) + "," + Math.round(g - J) + "," + Math.round(d / 2 + I) + "," + Math.round(g + J) + ",0," + g + "," + d + "," + g, l += " L" + d + ",0", l += m + Math.round(d /
                2 + E) + "," + Math.round(H) + "," + Math.round(d / 2 - E) + "," + Math.round(-H) + "," + d + ",0,0,0") : (l += "A" + I + "," + J + ",0,0,0," + (d - d / 2 * (1 - r)) + "," + g + "L" + d + ",0", l += "A" + E + "," + H + ",0,0,1,0,0"), E = 180), b = b.path(l).attr(k), b.gradient("linearGradient", [C, e.adjustLuminosity(C, -.3), e.adjustLuminosity(C, -.3), C], E), K ? b.translate(h / 2, 0) : b.translate(0, f / 2)) : b = 0 === g ? e.line(b, [0, d], [0, 0], q, n, m, u) : 0 === d ? e.line(b, [0, 0], [0, g], q, n, m, u) : 0 < x ? e.rect(b, d, g, k, l, m, q, n, x, p, u) : e.polygon(b, [0, 0, d, d, 0], [0, g, g, 0, 0], k, l, m, q, n, p, !1, u);
            d = isNaN(r) ? 0 > g ? [w, M, A, z, G, y, D, F, L, b] : [F, L, A, z, G, y, w, M, D, b] : K ? 0 < d ? [w, b, F] : [F, b, w] : 0 > g ? [w, b, F] : [F, b, w];
            e.setCN(c, b, t + "front");
            e.setCN(c, A, t + "back");
            e.setCN(c, F, t + "top");
            e.setCN(c, w, t + "bottom");
            e.setCN(c, G, t + "left");
            e.setCN(c, y, t + "right");
            for (w = 0; w < d.length; w++) if (A = d[w]) a.push(A), e.setCN(c, A, t + "element");
            B && b.pattern(B, NaN, c.path)
        }, width: function (a) {
            isNaN(a) && (a = 0);
            this.w = Math.round(a);
            this.draw()
        }, height: function (a) {
            isNaN(a) && (a = 0);
            this.h = Math.round(a);
            this.draw()
        }, animateHeight: function (a, b) {
            var c = this;
            c.animationFinished = !1;
            c.easing = b;
            c.totalFrames = a * e.updateRate;
            c.rh = c.h;
            c.frame = 0;
            c.height(1);
            setTimeout(function () {
                c.updateHeight.call(c)
            }, 1E3 / e.updateRate)
        }, updateHeight: function () {
            var a = this;
            a.frame++;
            var b = a.totalFrames;
            a.frame <= b ? (b = a.easing(0, a.frame, 1, a.rh - 1, b), a.height(b), window.requestAnimationFrame ? window.requestAnimationFrame(function () {
                a.updateHeight.call(a)
            }) : setTimeout(function () {
                a.updateHeight.call(a)
            }, 1E3 / e.updateRate)) : (a.height(a.rh), a.animationFinished = !0)
        }, animateWidth: function (a, b) {
            var c = this;
            c.animationFinished = !1;
            c.easing = b;
            c.totalFrames = a * e.updateRate;
            c.rw = c.w;
            c.frame = 0;
            c.width(1);
            setTimeout(function () {
                c.updateWidth.call(c)
            }, 1E3 / e.updateRate)
        }, updateWidth: function () {
            var a = this;
            a.frame++;
            var b = a.totalFrames;
            a.frame <= b ? (b = a.easing(0, a.frame, 1, a.rw - 1, b), a.width(b), window.requestAnimationFrame ? window.requestAnimationFrame(function () {
                a.updateWidth.call(a)
            }) : setTimeout(function () {
                a.updateWidth.call(a)
            }, 1E3 / e.updateRate)) : (a.width(a.rw), a.animationFinished = !0)
        }
    })
})();
(function () {
    var e = window.AmCharts;
    e.CategoryAxis = e.Class({
        inherits: e.AxisBase, construct: function (a) {
            this.cname = "CategoryAxis";
            e.CategoryAxis.base.construct.call(this, a);
            this.minPeriod = "DD";
            this.equalSpacing = this.parseDates = !1;
            this.position = "bottom";
            this.startOnAxis = !1;
            this.gridPosition = "middle";
            this.safeDistance = 30;
            this.stickBalloonToCategory = !1;
            e.applyTheme(this, a, this.cname)
        }, draw: function () {
            e.CategoryAxis.base.draw.call(this);
            this.generateDFObject();
            var a = this.chart.chartData;
            this.data = a;
            this.labelRotationR = this.labelRotation;
            this.type = null;
            if (e.ifArray(a)) {
                var b, c = this.chart;
                "scrollbar" != this.id ? (e.setCN(c, this.set, "category-axis"), e.setCN(c, this.labelsSet, "category-axis"), e.setCN(c, this.axisLine.axisSet, "category-axis")) : this.bcn = this.id + "-";
                var d = this.start, g = this.labelFrequency, h = 0, f = this.end - d + 1, k = this.gridCountR,
                    l = this.showFirstLabel, m = this.showLastLabel, q, n, p = "", p = e.extractPeriod(this.minPeriod),
                    x = e.getPeriodDuration(p.period, p.count), u, B, r, t, C = this.rotate;
                q = this.firstDayOfWeek;
                n = this.boldPeriodBeginning;
                b = e.resetDateToMin(new Date(a[a.length - 1].time + 1.05 * x), this.minPeriod, 1, q).getTime();
                this.firstTime = c.firstTime;
                this.endTime > b && (this.endTime = b);
                t = this.minorGridEnabled;
                B = this.gridAlpha;
                var v, w = 0, A = 0;
                if (this.widthField) for (b = this.start; b <= this.end; b++) if (v = this.data[b]) {
                    var z = Number(this.data[b].dataContext[this.widthField]);
                    isNaN(z) || (w += z, v.widthValue = z)
                }
                if (this.parseDates && !this.equalSpacing) this.lastTime = a[a.length - 1].time, this.maxTime = e.resetDateToMin(new Date(this.lastTime + 1.05 * x), this.minPeriod, 1, q).getTime(), this.timeDifference = this.endTime - this.startTime, this.parseDatesDraw(); else if (!this.parseDates) {
                    if (this.cellWidth = this.getStepWidth(f), f < k && (k = f), h += this.start, this.stepWidth = this.getStepWidth(f), 0 < k) for (k = Math.floor(f / k), f = this.chooseMinorFrequency(k), p = h, p / 2 == Math.round(p / 2) && p--, 0 > p && (p = 0), v = 0, this.widthField && (p = this.start), this.end - p + 1 >= this.autoRotateCount && (this.labelRotationR = this.autoRotateAngle), b = p; b <= this.end + 2; b++) {
                        n = !1;
                        0 <= b && b < this.data.length ? (u = this.data[b], p = u.category, n = u.forceShow) : p = "";
                        if (t && !isNaN(f)) if (b / f == Math.round(b / f) || n) b / k == Math.round(b / k) || n || (this.gridAlpha = this.minorGridAlpha, p = void 0); else continue; else if (b / k != Math.round(b / k) && !n) continue;
                        q = this.getCoordinate(b - h);
                        r = 0;
                        "start" == this.gridPosition && (q -= this.cellWidth / 2, r = this.cellWidth / 2);
                        n = !0;
                        a = r;
                        "start" == this.tickPosition && (a = 0, n = !1, r = 0);
                        if (b == d && !l || b == this.end && !m) p = void 0;
                        Math.round(v / g) != v / g && (p = void 0);
                        v++;
                        z = this.cellWidth;
                        C && (z = NaN, this.ignoreAxisWidth || !c.autoMargins) && (z = "right" == this.position ? c.marginRight : c.marginLeft, z -= this.tickLength + 10);
                        this.labelFunction && u && (p = this.labelFunction(p, u, this));
                        p = e.fixBrakes(p);
                        x = !1;
                        this.boldLabels && (x = !0);
                        b > this.end && "start" == this.tickPosition && (p = " ");
                        this.rotate && this.inside && (r -= 2);
                        isNaN(u.widthValue) || (u.percentWidthValue = u.widthValue / w * 100, z = this.rotate ? this.height * u.widthValue / w : this.width * u.widthValue / w, q = A, A += z, r = z / 2);
                        r = new this.axisItemRenderer(this, q, p, n, z, r, void 0, x, a, !1, u.labelColor, u.className);
                        r.serialDataItem = u;
                        this.pushAxisItem(r);
                        this.gridAlpha = B
                    }
                } else if (this.parseDates && this.equalSpacing) {
                    h = this.start;
                    this.startTime = this.data[this.start].time;
                    this.endTime = this.data[this.end].time;
                    this.timeDifference = this.endTime - this.startTime;
                    b = this.choosePeriod(0);
                    g = b.period;
                    u = b.count;
                    b = e.getPeriodDuration(g, u);
                    b < x && (g = p.period, u = p.count, b = x);
                    B = g;
                    "WW" == B && (B = "DD");
                    this.currentDateFormat = this.dateFormatsObject[B];
                    this.stepWidth = this.getStepWidth(f);
                    k = Math.ceil(this.timeDifference / b) + 1;
                    x = e.resetDateToMin(new Date(this.startTime - b), g, u, q).getTime();
                    this.cellWidth = this.getStepWidth(f);
                    p = Math.round(x / b);
                    d = -1;
                    p / 2 == Math.round(p / 2) && (d = -2, x -= b);
                    p = this.start;
                    p / 2 == Math.round(p / 2) && p--;
                    0 > p && (p = 0);
                    A = this.end + 2;
                    A >= this.data.length && (A = this.data.length);
                    v = !1;
                    v = !l;
                    this.previousPos = -1E3;
                    20 < this.labelRotationR && (this.safeDistance = 5);
                    a = p;
                    if (this.data[p].time != e.resetDateToMin(new Date(this.data[p].time), g, u, q).getTime()) for (q = 0, z = x, b = p; b < A; b++) f = this.data[b].time, this.checkPeriodChange(g, u, f, z) && (q++, 2 <= q && (a = b, b = A), z = f);
                    t && 1 < u && (f = this.chooseMinorFrequency(u), e.getPeriodDuration(g, f));
                    if (0 < this.gridCountR) for (b = p; b < A; b++) if (f = this.data[b].time, this.checkPeriodChange(g, u, f, x) && b >= a) {
                        q = this.getCoordinate(b - this.start);
                        t = !1;
                        this.nextPeriod[B] && (t = this.checkPeriodChange(this.nextPeriod[B], 1, f, x, B));
                        x = !1;
                        t && this.markPeriodChange ? (t = this.dateFormatsObject[this.nextPeriod[B]], x = !0) : t = this.dateFormatsObject[B];
                        p = e.formatDate(new Date(f), t, c);
                        if (b == d && !l || b == k && !m) p = " ";
                        v ? v = !1 : (n || (x = !1), q - this.previousPos > this.safeDistance * Math.cos(this.labelRotationR * Math.PI / 180) && (this.labelFunction && (p = this.labelFunction(p, new Date(f), this, g, u, r)), this.boldLabels && (x = !0), r = new this.axisItemRenderer(this, q, p, void 0, void 0, void 0, void 0, x), t = r.graphics(), this.pushAxisItem(r), t = t.getBBox().width, e.isModern || (t -= q), this.previousPos = q + t));
                        r = x = f
                    }
                }
                for (b = l = 0; b < this.data.length; b++) if (v = this.data[b]) this.parseDates && !this.equalSpacing ? (m = v.time, d = this.cellWidth, "MM" == this.minPeriod && (d = 864E5 * e.daysInMonth(new Date(m)) * this.stepWidth, v.cellWidth = d), m = Math.round((m - this.startTime) * this.stepWidth + d / 2)) : m = this.getCoordinate(b - h), v.x[this.id] = m;
                if (this.widthField) for (b = this.start; b <= this.end; b++) v = this.data[b], d = v.widthValue, v.percentWidthValue = d / w * 100, this.rotate ? (m = this.height * d / w / 2 + l, l = this.height * d / w + l) : (m = this.width * d / w / 2 + l, l = this.width * d / w + l), v.x[this.id] = m;
                w = this.guides.length;
                for (b = 0; b < w; b++) l = this.guides[b], n = k = k = t = d = NaN, m = l.above, l.toCategory && (k = c.getCategoryIndexByValue(l.toCategory), isNaN(k) || (d = this.getCoordinate(k - h), l.expand && (d += this.cellWidth / 2), r = new this.axisItemRenderer(this, d, "", !0, NaN, NaN, l), this.pushAxisItem(r, m))), l.category && (n = c.getCategoryIndexByValue(l.category), isNaN(n) || (t = this.getCoordinate(n - h), l.expand && (t -= this.cellWidth / 2), k = (d - t) / 2, r = new this.axisItemRenderer(this, t, l.label, !0, NaN, k, l), this.pushAxisItem(r, m))), n = c.dataDateFormat, l.toDate && (!n || l.toDate instanceof Date || (l.toDate = l.toDate.toString() + " |"), l.toDate = e.getDate(l.toDate, n), this.equalSpacing ? (k = c.getClosestIndex(this.data, "time", l.toDate.getTime(), !1, 0, this.data.length - 1), isNaN(k) || (d = this.getCoordinate(k -
                    h))) : d = (l.toDate.getTime() - this.startTime) * this.stepWidth, r = new this.axisItemRenderer(this, d, "", !0, NaN, NaN, l), this.pushAxisItem(r, m)), l.date && (!n || l.date instanceof Date || (l.date = l.date.toString() + " |"), l.date = e.getDate(l.date, n), this.equalSpacing ? (n = c.getClosestIndex(this.data, "time", l.date.getTime(), !1, 0, this.data.length - 1), isNaN(n) || (t = this.getCoordinate(n - h))) : t = (l.date.getTime() - this.startTime) * this.stepWidth, k = (d - t) / 2, n = !0, l.toDate && (n = !1), r = "H" == this.orientation ? new this.axisItemRenderer(this,
                    t, l.label, n, 2 * k, NaN, l) : new this.axisItemRenderer(this, t, l.label, !1, NaN, k, l), this.pushAxisItem(r, m)), (0 < d || 0 < t) && (d < this.width || t < this.width) && (d = new this.guideFillRenderer(this, t, d, l), t = d.graphics(), this.pushAxisItem(d, m), l.graphics = t, t.index = b, l.balloonText && this.addEventListeners(t, l));
                if (c = c.chartCursor) C ? c.fixHeight(this.cellWidth) : (c.fixWidth(this.cellWidth), c.fullWidth && this.balloon && (this.balloon.minWidth = this.cellWidth));
                this.previousHeight = G
            }
            this.axisCreated = !0;
            this.set.translate(this.x, this.y);
            this.labelsSet.translate(this.x, this.y);
            this.labelsSet.show();
            this.positionTitle();
            (C = this.axisLine.set) && C.toFront();
            var G = this.getBBox().height;
            2 < G - this.previousHeight && this.autoWrap && !this.parseDates && (this.axisCreated = this.chart.marginsUpdated = !1)
        }, xToIndex: function (a) {
            var b = this.data, c = this.chart, d = c.rotate, g = this.stepWidth, h;
            if (this.parseDates && !this.equalSpacing) a = this.startTime + Math.round(a / g) - this.minDuration() / 2, h = c.getClosestIndex(b, "time", a, !1, this.start, this.end + 1); else if (this.widthField) for (c =
                                                                                                                                                                                                                              Infinity, g = this.start; g <= this.end; g++) {
                var f = this.data[g];
                f && (f = Math.abs(f.x[this.id] - a), f < c && (c = f, h = g))
            } else this.startOnAxis || (a -= g / 2), h = this.start + Math.round(a / g);
            h = e.fitToBounds(h, 0, b.length - 1);
            var k;
            b[h] && (k = b[h].x[this.id]);
            d ? k > this.height + 1 && h-- : k > this.width + 1 && h--;
            0 > k && h++;
            return h = e.fitToBounds(h, 0, b.length - 1)
        }, dateToCoordinate: function (a) {
            return this.parseDates && !this.equalSpacing ? (a.getTime() - this.startTime) * this.stepWidth : this.parseDates && this.equalSpacing ? (a = this.chart.getClosestIndex(this.data, "time", a.getTime(), !1, 0, this.data.length - 1), this.getCoordinate(a - this.start)) : NaN
        }, categoryToCoordinate: function (a) {
            if (this.chart) {
                var b = this.chart.getCategoryIndexByValue(a);
                if (!isNaN(b)) return this.getCoordinate(b - this.start);
                if (this.parseDates) return this.dateToCoordinate(new Date(a))
            } else return NaN
        }, coordinateToDate: function (a) {
            return this.equalSpacing ? (a = this.xToIndex(a), new Date(this.data[a].time)) : new Date(this.startTime + a / this.stepWidth)
        }, coordinateToValue: function (a) {
            a = this.xToIndex(a);
            if (a = this.data[a]) return this.parseDates ? a.time : a.category
        }, getCoordinate: function (a) {
            a *= this.stepWidth;
            this.startOnAxis || (a += this.stepWidth / 2);
            return Math.round(a)
        }, formatValue: function (a, b) {
            b || (b = this.currentDateFormat);
            this.parseDates && (a = e.formatDate(new Date(a), b, this.chart));
            return a
        }, showBalloonAt: function (a) {
            a = this.parseDates ? this.dateToCoordinate(new Date(a)) : this.categoryToCoordinate(a);
            return this.adjustBalloonCoordinate(a)
        }, formatBalloonText: function (a, b, c) {
            var d = "", g = "", h = this.chart, f = this.data[b];
            if (f) if (this.parseDates) d = e.formatDate(f.category, c, h), b = e.changeDate(new Date(f.category), this.minPeriod, 1), g = e.formatDate(b, c, h), -1 != d.indexOf("fff") && (d = e.formatMilliseconds(d, f.category), g = e.formatMilliseconds(g, b)); else {
                var k;
                this.data[b + 1] && (k = this.data[b + 1]);
                d = e.fixNewLines(f.category);
                k && (g = e.fixNewLines(k.category))
            }
            a = a.replace(/\[\[category\]\]/g, String(d));
            return a = a.replace(/\[\[toCategory\]\]/g, String(g))
        }, adjustBalloonCoordinate: function (a, b) {
            var c = this.xToIndex(a), d = this.chart.chartCursor;
            if (this.stickBalloonToCategory) {
                var e = this.data[c];
                e && (a = e.x[this.id]);
                this.stickBalloonToStart && (a -= this.cellWidth / 2);
                var h = 0;
                if (d) {
                    var f = d.limitToGraph;
                    f && (h = e.axes[f.valueAxis.id].graphs[f.id].y);
                    this.rotate ? ("left" == this.position ? (f && (h -= d.width), 0 < h && (h = 0)) : 0 > h && (h = 0), d.fixHLine(a, h)) : ("top" == this.position ? (f && (h -= d.height), 0 < h && (h = 0)) : 0 > h && (h = 0), d.fixVLine(a, h))
                }
            }
            d && !b && (d.setIndex(c), this.parseDates && d.setTimestamp(this.coordinateToDate(a).getTime()));
            return a
        }
    })
})();
/* End */
;
; /* Start:"a:4:{s:4:"full";s:58:"/bitrix/templates/main/js/dataloader.min.js?15369242706795";s:6:"source";s:43:"/bitrix/templates/main/js/dataloader.min.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
AmCharts.translations.dataLoader = {}, AmCharts.addInitHandler(function (t) {
    function e(r, o, n, u) {
        void 0 === u && (u = "dataProvider"), n.showCurtain && s(void 0, n.noStyles), c.remaining++, c.percentLoaded[r] = 0, void 0 !== n.progress && "function" == typeof n.progress && void 0 === n._progress && (n._progress = n.progress, n.progress = function (t) {
            c.percentLoaded[r] = t;
            var e = 0, a = 0;
            for (var o in c.percentLoaded) c.percentLoaded.hasOwnProperty(o) && (a++, e += c.percentLoaded[o]);
            var i = Math.round(e / a * 100) / 100;
            n._progress.call(this, i, Math.round(100 * t) / 100, r)
        }), AmCharts.loadFile(r, n, function (s) {
            if (!1 === s) l(n.error, n, t), i(AmCharts.__("Error loading the file", t.language) + ": " + r, !1, n); else {
                switch (void 0 === n.format && (n.format = "json"), n.format = n.format.toLowerCase(), n.format) {
                    case"json":
                        if (o[u] = AmCharts.parseJSON(s), !1 === o[u]) return l(n.error, n, t), i(AmCharts.__("Error parsing JSON file", t.language) + ": " + c.url, !1, n), void (o[u] = []);
                        o[u] = a(o[u], n), l(n.load, n, t);
                        break;
                    case"csv":
                        if (o[u] = AmCharts.parseCSV(s, n), !1 === o[u]) return l(n.error, n, t), i(AmCharts.__("Error parsing CSV file", t.language) + ": " + c.url, !1, n), void (o[u] = []);
                        o[u] = a(o[u], n), l(n.load, n, t);
                        break;
                    default:
                        return l(n.error, n, t), void i(AmCharts.__("Unsupported data format", t.language) + ": " + n.format, !1, n.noStyles)
                }
                if (c.remaining--, 0 === c.remaining && (l(n.complete, t), n.async)) if ("map" === t.type) t.validateNow(!0), d(); else if ("gauge" !== t.type && t.addListener("dataUpdated", function (e) {
                    "stock" !== t.type || n.reloading || void 0 === t.periodSelector || t.periodSelector.setDefaultPeriod(), d(), t.events.dataUpdated.pop()
                }), "gauge" === t.type ? (d(), t.validateNow()) : t.validateData(), c.startDuration) if ("stock" === t.type) {
                    t.panelsSettings.startDuration = c.startDuration;
                    for (var p = 0; p < t.panels.length; p++) t.panels[p].startDuration = c.startDuration, t.panels[p].animateAgain()
                } else t.startDuration = c.startDuration, void 0 !== t.animateAgain && t.animateAgain()
            }
            n.reload && (n.timeout && clearTimeout(n.timeout), n.timeout = setTimeout(e, 1e3 * n.reload, r, o, n, u), n.reloading = !0)
        })
    }

    function a(e, a) {
        if (void 0 === a.postProcess || !r(a.postProcess)) return e;
        try {
            return a.postProcess.call(c, e, a, t)
        } catch (r) {
            return i(AmCharts.__("Error loading file", t.language) + ": " + a.url, !1, a), e
        }
    }

    function r(t) {
        return "function" == typeof t
    }

    function o(t) {
        for (var e in p) p.hasOwnProperty(e) && n(t, e, p[e])
    }

    function n(t, e, a) {
        void 0 === t[e] && (t[e] = a)
    }

    function i(t, e, a) {
        a.showErrors ? s(t, a.noStyles) : (d(), console.log(t))
    }

    function s(e, a) {
        d(), void 0 === e && (e = AmCharts.__("Loading data...", t.language));
        var r = document.createElement("div");
        if (r.setAttribute("id", t.div.id + "-curtain"), r.className = "amcharts-dataloader-curtain", !0 !== a) {
            r.style.position = "absolute", r.style.top = 0, r.style.left = 0, r.style.width = (void 0 !== t.realWidth ? t.realWidth : t.divRealWidth) + "px", r.style.height = (void 0 !== t.realHeight ? t.realHeight : t.divRealHeight) + "px", r.style.textAlign = "center", r.style.display = "table", r.style.fontSize = "20px";
            try {
                r.style.background = "rgba(255, 255, 255, 0.3)"
            } catch (t) {
                r.style.background = "rgb(255, 255, 255)"
            }
            r.innerHTML = '<div style="display: table-cell; vertical-align: middle;">' + e + "</div>"
        } else r.innerHTML = e;
        t.containerDiv.appendChild(r), c.curtain = r
    }

    function d() {
        try {
            void 0 !== c.curtain && t.containerDiv.removeChild(c.curtain)
        } catch (t) {
        }
        c.curtain = void 0
    }

    function l(t, e, a, r) {
        "function" == typeof t && t.call(c, e, a, r)
    }

    void 0 !== t.dataLoader && function (t) {
        return "object" == typeof t
    }(t.dataLoader) || (t.dataLoader = {});
    var u = t.version.split(".");
    if (!(Number(u[0]) < 3 || 3 === Number(u[0]) && Number(u[1]) < 13)) {
        var c = t.dataLoader;
        c.remaining = 0, c.percentLoaded = {};
        var p = {
            async: !0,
            format: "json",
            showErrors: !0,
            showCurtain: !0,
            noStyles: !1,
            reload: 0,
            timestamp: !1,
            delimiter: ",",
            skip: 0,
            skipEmpty: !0,
            emptyAs: void 0,
            useColumnNames: !1,
            init: !1,
            progress: !1,
            reverse: !1,
            reloading: !1,
            complete: !1,
            error: !1,
            numberFields: [],
            headers: [],
            chart: t
        };
        c.loadData = function () {
            if ("stock" === t.type) setTimeout(function () {
                0 > t.panelsSettings.startDuration && (c.startDuration = t.panelsSettings.startDuration, t.panelsSettings.startDuration = 0);
                for (var a = 0; a < t.dataSets.length; a++) {
                    var r = t.dataSets[a];
                    void 0 !== r.dataLoader && void 0 !== r.dataLoader.url && (l(r.dataLoader.init, r.dataLoader, t), r.dataProvider = [], o(r.dataLoader), e(r.dataLoader.url, r, r.dataLoader, "dataProvider")), void 0 !== r.eventDataLoader && void 0 !== r.eventDataLoader.url && (l(r.eventDataLoader.init, r.eventDataLoader, t), r.events = [], o(r.eventDataLoader), e(r.eventDataLoader.url, r, r.eventDataLoader, "stockEvents"))
                }
            }, 100); else {
                if (l(c.init, c, t), o(c), void 0 === c.url) return;
                void 0 !== t.startDuration && 0 < t.startDuration && (c.startDuration = t.startDuration, t.startDuration = 0), "gauge" === t.type ? (void 0 === t.arrows && (t.arrows = []), e(c.url, t, c, "arrows")) : (void 0 === t.dataProvider && (t.dataProvider = "map" === t.type ? {} : []), e(c.url, t, c, "dataProvider"))
            }
        }, c.loadData()
    }
}, ["pie", "serial", "xy", "funnel", "radar", "gauge", "gantt", "stock", "map"]), void 0 === AmCharts.__ && (AmCharts.__ = function (t, e) {
    return void 0 !== e && void 0 !== AmCharts.translations.dataLoader[e] && void 0 !== AmCharts.translations.dataLoader[e][t] ? AmCharts.translations.dataLoader[e][t] : t
}), AmCharts.loadFile = function (t, e, a) {
    "object" != typeof e && (e = {}), void 0 === e.async && (e.async = !0);
    var r;
    r = window.XMLHttpRequest ? new XMLHttpRequest : new ActiveXObject("Microsoft.XMLHTTP");
    try {
        r.open("GET", e.timestamp ? AmCharts.timestampUrl(t) : t, e.async)
    } catch (t) {
        a.call(this, !1)
    }
    if (void 0 !== e.headers && e.headers.length) for (var o = 0; o < e.headers.length; o++) {
        var n = e.headers[o];
        r.setRequestHeader(n.key, n.value)
    }
    void 0 !== e.progress && "function" == typeof e.progress && (r.onprogress = function (t) {
        var a = t.loaded / t.total * 100;
        e.progress.call(this, a)
    }), r.onreadystatechange = function () {
        4 !== r.readyState || 404 !== r.status && 500 !== r.status ? 4 === r.readyState && 200 === r.status && a.call(this, r.responseText) : a.call(this, !1)
    };
    try {
        r.send()
    } catch (t) {
        a.call(this, !1)
    }
}, AmCharts.parseJSON = function (response) {
    try {
        return void 0 !== JSON ? JSON.parse(response) : eval(response)
    } catch (t) {
        return !1
    }
}, AmCharts.parseCSV = function (t, e) {
    var a, r, o = AmCharts.CSVToArray(t, e.delimiter), n = e.numberFields && e.numberFields.length > 0, i = [], s = [];
    if (e.useColumnNames) {
        s = o.shift();
        for (var d = 0; d < s.length; d++) "" === (a = s[d].replace(/^\s+|\s+$/gm, "")) && (a = "col" + d), s[d] = a;
        0 < e.skip && e.skip--
    }
    for (r = 0; r < e.skip; r++) o.shift();
    for (var l; l = e.reverse ? o.pop() : o.shift();) if (!e.skipEmpty || 1 !== l.length || "" !== l[0]) {
        var u = {};
        for (r = 0; r < l.length; r++) u[a = void 0 === s[r] ? "col" + r : s[r]] = "" === l[r] ? e.emptyAs : l[r], n && -1 !== e.numberFields.indexOf(a) && (u[a] = Number(u[a]));
        i.push(u)
    }
    return i
}, AmCharts.CSVToArray = function (t, e) {
    e = e || ",";
    for (var a = new RegExp("(\\" + e + '|\\r?\\n|\\r|^)(?:"([^"]*(?:""[^"]*)*)"|([^"\\' + e + "\\r\\n]*))", "gi"), r = [[]], o = null; o = a.exec(t);) {
        var n = o[1];
        n.length && n !== e && r.push([]);
        var i;
        i = o[2] ? o[2].replace(new RegExp('""', "g"), '"') : o[3], r[r.length - 1].push(i)
    }
    return r
}, AmCharts.timestampUrl = function (t) {
    var e = t.split("?");
    return 1 === e.length ? e[1] = (new Date).getTime() : e[1] += "&" + (new Date).getTime(), e.join("?")
};
/* End */
;
; /* Start:"a:4:{s:4:"full";s:49:"/bitrix/templates/main/js/light.js?14757579602914";s:6:"source";s:34:"/bitrix/templates/main/js/light.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
AmCharts.themes.light = {
    themeName: "light",
    AmChart: {color: "#000000", backgroundColor: "#FFFFFF"},
    AmCoordinateChart: {colors: ["#67b7dc", "#fdd400", "#84b761", "#cc4748", "#cd82ad", "#2f4074", "#448e4d", "#b7b83f", "#b9783f", "#b93e3d", "#913167"]},
    AmStockChart: {colors: ["#67b7dc", "#fdd400", "#84b761", "#cc4748", "#cd82ad", "#2f4074", "#448e4d", "#b7b83f", "#b9783f", "#b93e3d", "#913167"]},
    AmSlicedChart: {
        colors: ["#67b7dc", "#fdd400", "#84b761", "#cc4748", "#cd82ad", "#2f4074", "#448e4d", "#b7b83f", "#b9783f", "#b93e3d", "#913167"],
        outlineAlpha: 1,
        outlineThickness: 2,
        labelTickColor: "#000000",
        labelTickAlpha: 0.3
    },
    AmRectangularChart: {zoomOutButtonColor: '#000000', zoomOutButtonRollOverAlpha: 0.15, zoomOutButtonImage: "lens"},
    AxisBase: {axisColor: "#000000", axisAlpha: 0.3, gridAlpha: 0.1, gridColor: "#000000"},
    ChartScrollbar: {
        backgroundColor: "#000000",
        backgroundAlpha: 0.12,
        graphFillAlpha: 0.5,
        graphLineAlpha: 0,
        selectedBackgroundColor: "#FFFFFF",
        selectedBackgroundAlpha: 0.4,
        gridAlpha: 0.15
    },
    ChartCursor: {cursorColor: "#000000", color: "#FFFFFF", cursorAlpha: 0.5},
    AmLegend: {color: "#000000"},
    AmGraph: {lineAlpha: 0.9},
    GaugeArrow: {
        color: "#000000",
        alpha: 0.8,
        nailAlpha: 0,
        innerRadius: "40%",
        nailRadius: 15,
        startWidth: 15,
        borderAlpha: 0.8,
        nailBorderAlpha: 0
    },
    GaugeAxis: {
        tickColor: "#000000",
        tickAlpha: 1,
        tickLength: 15,
        minorTickLength: 8,
        axisThickness: 3,
        axisColor: '#000000',
        axisAlpha: 1,
        bandAlpha: 0.8
    },
    TrendLine: {lineColor: "#c03246", lineAlpha: 0.8},
    AreasSettings: {
        alpha: 0.8,
        color: "#67b7dc",
        colorSolid: "#003767",
        unlistedAreasAlpha: 0.4,
        unlistedAreasColor: "#000000",
        outlineColor: "#FFFFFF",
        outlineAlpha: 0.5,
        outlineThickness: 0.5,
        rollOverColor: "#3c5bdc",
        rollOverOutlineColor: "#FFFFFF",
        selectedOutlineColor: "#FFFFFF",
        selectedColor: "#f15135",
        unlistedAreasOutlineColor: "#FFFFFF",
        unlistedAreasOutlineAlpha: 0.5
    },
    LinesSettings: {color: "#000000", alpha: 0.8},
    ImagesSettings: {alpha: 0.8, labelColor: "#000000", color: "#000000", labelRollOverColor: "#3c5bdc"},
    ZoomControl: {buttonFillAlpha: 0.7, buttonIconColor: "#a7a7a7"},
    SmallMap: {
        mapColor: "#000000",
        rectangleColor: "#f15135",
        backgroundColor: "#FFFFFF",
        backgroundAlpha: 0.7,
        borderThickness: 1,
        borderAlpha: 0.8
    },
    PeriodSelector: {color: "#000000"},
    PeriodButton: {
        color: "#000000",
        background: "transparent",
        opacity: 0.7,
        border: "1px solid rgba(0, 0, 0, .3)",
        MozBorderRadius: "5px",
        borderRadius: "5px",
        margin: "1px",
        outline: "none",
        boxSizing: "border-box"
    },
    PeriodButtonSelected: {
        color: "#000000",
        backgroundColor: "#b9cdf5",
        border: "1px solid rgba(0, 0, 0, .3)",
        MozBorderRadius: "5px",
        borderRadius: "5px",
        margin: "1px",
        outline: "none",
        opacity: 1,
        boxSizing: "border-box"
    },
    PeriodInputField: {
        color: "#000000",
        background: "transparent",
        border: "1px solid rgba(0, 0, 0, .3)",
        outline: "none"
    },
    DataSetSelector: {color: "#000000", selectedBackgroundColor: "#b9cdf5", rollOverBackgroundColor: "#a8b0e4"},
    DataSetCompareList: {
        color: "#000000",
        lineHeight: "100%",
        boxSizing: "initial",
        webkitBoxSizing: "initial",
        border: "1px solid rgba(0, 0, 0, .3)"
    },
    DataSetSelect: {border: "1px solid rgba(0, 0, 0, .3)", outline: "none"}
};
/* End */
;
; /* Start:"a:4:{s:4:"full";s:61:"/bitrix/templates/main/js/jquery.inputmask.js?150849299226630";s:6:"source";s:45:"/bitrix/templates/main/js/jquery.inputmask.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
/*
 Input Mask plugin for jquery
 http://github.com/RobinHerbots/jquery.inputmask
 Copyright (c) 2010 - 2014 Robin Herbots
 Licensed under the MIT license (http://www.opensource.org/licenses/mit-license.php)
 Version: 2.5.10
*/
(function (e) {
    if (void 0 === e.fn.inputmask) {
        var Q = function (e) {
                var l = document.createElement("input");
                e = "on" + e;
                var a = e in l;
                a || (l.setAttribute(e, "return;"), a = "function" == typeof l[e]);
                return a
            }, E = function (d, l, a) {
                return (d = a.aliases[d]) ? (d.alias && E(d.alias, void 0, a), e.extend(!0, a, d), e.extend(!0, a, l), !0) : !1
            }, D = function (d) {
                function l(a) {
                    d.numericInput && (a = a.split("").reverse().join(""));
                    var g = !1, l = 0, n = d.greedy, p = d.repeat;
                    "*" == p && (n = !1);
                    1 == a.length && !1 == n && 0 != p && (d.placeholder = "");
                    a = e.map(a.split(""), function (a,
                                                     e) {
                        var k = [];
                        if (a == d.escapeChar) g = !0; else if (a != d.optionalmarker.start && a != d.optionalmarker.end || g) {
                            var p = d.definitions[a];
                            if (p && !g) for (var r = 0; r < p.cardinality; r++) k.push(d.placeholder.charAt((l + r) % d.placeholder.length)); else k.push(a), g = !1;
                            l += k.length;
                            return k
                        }
                    });
                    for (var s = a.slice(), r = 1; r < p && n; r++) s = s.concat(a.slice());
                    return {mask: s, repeat: p, greedy: n}
                }

                function a(a) {
                    d.numericInput && (a = a.split("").reverse().join(""));
                    var g = !1, l = !1, p = !1;
                    return e.map(a.split(""), function (a, e) {
                        var k = [];
                        if (a == d.escapeChar) l =
                            !0; else {
                            if (a != d.optionalmarker.start || l) {
                                if (a != d.optionalmarker.end || l) {
                                    var m = d.definitions[a];
                                    if (m && !l) {
                                        for (var u = m.prevalidator, w = u ? u.length : 0, v = 1; v < m.cardinality; v++) {
                                            var C = w >= v ? u[v - 1] : [], K = C.validator, C = C.cardinality;
                                            k.push({
                                                fn: K ? "string" == typeof K ? RegExp(K) : new function () {
                                                    this.test = K
                                                } : /./,
                                                cardinality: C ? C : 1,
                                                optionality: g,
                                                newBlockMarker: !0 == g ? p : !1,
                                                offset: 0,
                                                casing: m.casing,
                                                def: m.definitionSymbol || a
                                            });
                                            !0 == g && (p = !1)
                                        }
                                        k.push({
                                            fn: m.validator ? "string" == typeof m.validator ? RegExp(m.validator) : new function () {
                                                this.test =
                                                    m.validator
                                            } : /./,
                                            cardinality: m.cardinality,
                                            optionality: g,
                                            newBlockMarker: p,
                                            offset: 0,
                                            casing: m.casing,
                                            def: m.definitionSymbol || a
                                        })
                                    } else k.push({
                                        fn: null,
                                        cardinality: 0,
                                        optionality: g,
                                        newBlockMarker: p,
                                        offset: 0,
                                        casing: null,
                                        def: a
                                    }), l = !1;
                                    p = !1;
                                    return k
                                }
                                g = !1
                            } else g = !0;
                            p = !0
                        }
                    })
                }

                function m(a) {
                    for (var e = a.length, g = 0; g < e && a.charAt(g) != d.optionalmarker.start; g++) ;
                    var l = [a.substring(0, g)];
                    g < e && l.push(a.substring(g + 1, e));
                    return l
                }

                function g(k, t, w) {
                    for (var n = 0, v = 0, s = t.length, r = 0; r < s && !(t.charAt(r) == d.optionalmarker.start &&
                    n++, t.charAt(r) == d.optionalmarker.end && v++, 0 < n && n == v); r++) ;
                    n = [t.substring(0, r)];
                    r < s && n.push(t.substring(r + 1, s));
                    r = m(n[0]);
                    1 < r.length ? (t = k + r[0] + (d.optionalmarker.start + r[1] + d.optionalmarker.end) + (1 < n.length ? n[1] : ""), -1 == e.inArray(t, p) && "" != t && (p.push(t), s = l(t), u.push({
                        mask: t,
                        _buffer: s.mask,
                        buffer: s.mask.slice(),
                        tests: a(t),
                        lastValidPosition: -1,
                        greedy: s.greedy,
                        repeat: s.repeat,
                        metadata: w
                    })), t = k + r[0] + (1 < n.length ? n[1] : ""), -1 == e.inArray(t, p) && "" != t && (p.push(t), s = l(t), u.push({
                        mask: t, _buffer: s.mask, buffer: s.mask.slice(),
                        tests: a(t), lastValidPosition: -1, greedy: s.greedy, repeat: s.repeat, metadata: w
                    })), 1 < m(r[1]).length && g(k + r[0], r[1] + n[1], w), 1 < n.length && 1 < m(n[1]).length && (g(k + r[0] + (d.optionalmarker.start + r[1] + d.optionalmarker.end), n[1], w), g(k + r[0], n[1], w))) : (t = k + n, -1 == e.inArray(t, p) && "" != t && (p.push(t), s = l(t), u.push({
                        mask: t,
                        _buffer: s.mask,
                        buffer: s.mask.slice(),
                        tests: a(t),
                        lastValidPosition: -1,
                        greedy: s.greedy,
                        repeat: s.repeat,
                        metadata: w
                    })))
                }

                var u = [], p = [];
                e.isFunction(d.mask) && (d.mask = d.mask.call(this, d));
                e.isArray(d.mask) ?
                    e.each(d.mask, function (a, e) {
                        void 0 != e.mask ? g("", e.mask.toString(), e) : g("", e.toString())
                    }) : g("", d.mask.toString());
                return d.greedy ? u : u.sort(function (a, e) {
                    return a.mask.length - e.mask.length
                })
            },
            fa = "function" === typeof ScriptEngineMajorVersion ? ScriptEngineMajorVersion() : 10 <= (new Function("/*@cc_on return @_jscript_version; @*/"))(),
            w = navigator.userAgent, ga = null !== w.match(/iphone/i), ha = null !== w.match(/android.*safari.*/i),
            ia = null !== w.match(/android.*chrome.*/i), Y = null !== w.match(/android.*firefox.*/i), Z =
            /Kindle/i.test(w) || /Silk/i.test(w) || /KFTT/i.test(w) || /KFOT/i.test(w) || /KFJWA/i.test(w) || /KFJWI/i.test(w) || /KFSOWI/i.test(w) || /KFTHWA/i.test(w) || /KFTHWI/i.test(w) || /KFAPWA/i.test(w) || /KFAPWI/i.test(w),
            S = Q("paste") ? "paste" : Q("input") ? "input" : "propertychange", v = function (d, l, a, m) {
                function g() {
                    return d[l]
                }

                function u() {
                    return g().tests
                }

                function p() {
                    return g()._buffer
                }

                function k() {
                    return g().buffer
                }

                function t(h, c, b) {
                    function f(h, b, c, f) {
                        for (var e = v(h), g = c ? 1 : 0, B = "", y = b.buffer, d = b.tests[e].cardinality; d > g; d--) B +=
                            I(y, e - (d - 1));
                        c && (B += c);
                        return null != b.tests[e].fn ? b.tests[e].fn.test(B, y, h, f, a) : c == I(b._buffer.slice(), h, !0) || c == a.skipOptionalPartCharacter ? {
                            refresh: !0,
                            c: I(b._buffer.slice(), h, !0),
                            pos: h
                        } : !1
                    }

                    if (b = !0 === b) {
                        var y = f(h, g(), c, b);
                        !0 === y && (y = {pos: h});
                        return y
                    }
                    var B = [], y = !1, L = l, p = k().slice(), m = g().lastValidPosition;
                    G(h);
                    var t = [];
                    e.each(d, function (a, e) {
                        if ("object" == typeof e) {
                            l = a;
                            var d = h, x = g().lastValidPosition, q;
                            if (x == m) {
                                if (1 < d - m) for (x = -1 == x ? 0 : x; x < d && (q = f(x, g(), p[x], !0), !1 !== q); x++) H(k(), x, p[x], !0), !0 === q &&
                                (q = {pos: x}), q = q.pos || x, g().lastValidPosition < q && (g().lastValidPosition = q);
                                if (!n(d) && !f(d, g(), c, b)) {
                                    x = r(d) - d;
                                    for (q = 0; q < x && !1 === f(++d, g(), c, b); q++) ;
                                    t.push(l)
                                }
                            }
                            (g().lastValidPosition >= m || l == L) && 0 <= d && d < s() && (y = f(d, g(), c, b), !1 !== y && (!0 === y && (y = {pos: d}), q = y.pos || d, g().lastValidPosition < q && (g().lastValidPosition = q)), B.push({
                                activeMasksetIndex: a,
                                result: y
                            }))
                        }
                    });
                    l = L;
                    return function (a, b) {
                        var g = !1;
                        e.each(b, function (h, b) {
                            if (g = -1 == e.inArray(b.activeMasksetIndex, a) && !1 !== b.result) return !1
                        });
                        if (g) b = e.map(b, function (h,
                                                      b) {
                            if (-1 == e.inArray(h.activeMasksetIndex, a)) return h;
                            d[h.activeMasksetIndex].lastValidPosition = m
                        }); else {
                            var B = -1, y = -1, k;
                            e.each(b, function (h, b) {
                                -1 != e.inArray(b.activeMasksetIndex, a) && !1 !== b.result & (-1 == B || B > b.result.pos) && (B = b.result.pos, y = b.activeMasksetIndex)
                            });
                            b = e.map(b, function (b, g) {
                                if (-1 != e.inArray(b.activeMasksetIndex, a)) {
                                    if (b.result.pos == B) return b;
                                    if (!1 !== b.result) {
                                        for (var L = h; L < B; L++) if (k = f(L, d[b.activeMasksetIndex], d[y].buffer[L], !0), !1 === k) {
                                            d[b.activeMasksetIndex].lastValidPosition = B - 1;
                                            break
                                        } else H(d[b.activeMasksetIndex].buffer, L, d[y].buffer[L], !0), d[b.activeMasksetIndex].lastValidPosition = L;
                                        k = f(B, d[b.activeMasksetIndex], c, !0);
                                        !1 !== k && (H(d[b.activeMasksetIndex].buffer, B, c, !0), d[b.activeMasksetIndex].lastValidPosition = B);
                                        return b
                                    }
                                }
                            })
                        }
                        return b
                    }(t, B)
                }

                function w() {
                    var a = l, c = {activeMasksetIndex: 0, lastValidPosition: -1, next: -1};
                    e.each(d, function (a, h) {
                        "object" == typeof h && (l = a, g().lastValidPosition > c.lastValidPosition ? (c.activeMasksetIndex = a, c.lastValidPosition = g().lastValidPosition, c.next =
                            r(g().lastValidPosition)) : g().lastValidPosition == c.lastValidPosition && (-1 == c.next || c.next > r(g().lastValidPosition)) && (c.activeMasksetIndex = a, c.lastValidPosition = g().lastValidPosition, c.next = r(g().lastValidPosition)))
                    });
                    l = -1 != c.lastValidPosition && d[a].lastValidPosition == c.lastValidPosition ? a : c.activeMasksetIndex;
                    a != l && (K(k(), r(c.lastValidPosition), s()), g().writeOutBuffer = !0);
                    q.data("_inputmask").activeMasksetIndex = l
                }

                function n(a) {
                    a = v(a);
                    a = u()[a];
                    return void 0 != a ? a.fn : !1
                }

                function v(a) {
                    return a % u().length
                }

                function s() {
                    var h = p(), c = g().greedy, b = g().repeat, f = k();
                    if (e.isFunction(a.getMaskLength)) return a.getMaskLength(h, c, b, f, a);
                    var y = h.length;
                    c || ("*" == b ? y = f.length + 1 : 1 < b && (y += h.length * (b - 1)));
                    return y
                }

                function r(a) {
                    var c = s();
                    if (a >= c) return c;
                    for (; ++a < c && !n(a);) ;
                    return a
                }

                function G(a) {
                    if (0 >= a) return 0;
                    for (; 0 < --a && !n(a);) ;
                    return a
                }

                function H(a, c, b, f) {
                    f && (c = E(a, c));
                    f = u()[v(c)];
                    var e = b;
                    if (void 0 != e && void 0 != f) switch (f.casing) {
                        case "upper":
                            e = b.toUpperCase();
                            break;
                        case "lower":
                            e = b.toLowerCase()
                    }
                    a[c] = e
                }

                function I(a,
                           c, b) {
                    b && (c = E(a, c));
                    return a[c]
                }

                function E(a, c) {
                    for (var b; void 0 == a[c] && a.length < s();) for (b = 0; void 0 !== p()[b];) a.push(p()[b++]);
                    return c
                }

                function C(a, c, b) {
                    a._valueSet(c.join(""));
                    void 0 != b && z(a, b)
                }

                function K(a, c, b, f) {
                    for (var e = s(); c < b && c < e; c++) !0 === f ? n(c) || H(a, c, "") : H(a, c, I(p().slice(), c, !0))
                }

                function D(a, c) {
                    var b = v(c);
                    H(a, c, I(p(), b))
                }

                function O(h) {
                    return a.placeholder.charAt(h % a.placeholder.length)
                }

                function J(a, c, b, f, y) {
                    f = void 0 != f ? f.slice() : T(a._valueGet()).split("");
                    e.each(d, function (a, b) {
                        "object" ==
                        typeof b && (b.buffer = b._buffer.slice(), b.lastValidPosition = -1, b.p = -1)
                    });
                    !0 !== b && (l = 0);
                    c && a._valueSet("");
                    s();
                    e.each(f, function (f, d) {
                        if (!0 === y) {
                            var k = g().p, k = -1 == k ? k : G(k), l = -1 == k ? f : r(k);
                            -1 == e.inArray(d, p().slice(k + 1, l)) && R.call(a, void 0, !0, d.charCodeAt(0), c, b, f)
                        } else R.call(a, void 0, !0, d.charCodeAt(0), c, b, f), b = b || 0 < f && f > g().p
                    });
                    !0 === b && -1 != g().p && (g().lastValidPosition = G(g().p))
                }

                function Q(a) {
                    return e.inputmask.escapeRegex.call(this, a)
                }

                function T(a) {
                    return a.replace(RegExp("(" + Q(p().join("")) + ")*$"),
                        "")
                }

                function U(a) {
                    var c = k(), b = c.slice(), f, e;
                    for (e = b.length - 1; 0 <= e; e--) if (f = v(e), u()[f].optionality) if (n(e) && t(e, c[e], !0)) break; else b.pop(); else break;
                    C(a, b)
                }

                function ja(h, c) {
                    if (!u() || !0 !== c && h.hasClass("hasDatepicker")) return h[0]._valueGet();
                    var b = e.map(k(), function (a, b) {
                        return n(b) && t(b, a, !0) ? a : null
                    }), b = (A ? b.reverse() : b).join(""), f = (A ? k().reverse() : k()).join("");
                    return e.isFunction(a.onUnMask) ? a.onUnMask.call(h, f, b, a) : b
                }

                function M(h) {
                    !A || "number" != typeof h || a.greedy && "" == a.placeholder || (h = k().length -
                        h);
                    return h
                }

                function z(h, c, b) {
                    var f = h.jquery && 0 < h.length ? h[0] : h;
                    if ("number" == typeof c) c = M(c), b = M(b), e(f).is(":visible") && (b = "number" == typeof b ? b : c, f.scrollLeft = f.scrollWidth, !1 == a.insertMode && c == b && b++, f.setSelectionRange ? (f.selectionStart = c, f.selectionEnd = b) : f.createTextRange && (h = f.createTextRange(), h.collapse(!0), h.moveEnd("character", b), h.moveStart("character", c), h.select())); else {
                        if (!e(h).is(":visible")) return {begin: 0, end: 0};
                        f.setSelectionRange ? (c = f.selectionStart, b = f.selectionEnd) : document.selection &&
                            document.selection.createRange && (h = document.selection.createRange(), c = 0 - h.duplicate().moveStart("character", -1E5), b = c + h.text.length);
                        c = M(c);
                        b = M(b);
                        return {begin: c, end: b}
                    }
                }

                function P(h) {
                    if (e.isFunction(a.isComplete)) return a.isComplete.call(q, h, a);
                    if ("*" != a.repeat) {
                        var c = !1, b = 0, f = l;
                        e.each(d, function (a, f) {
                            if ("object" == typeof f) {
                                l = a;
                                var e = G(s());
                                if (f.lastValidPosition >= b && f.lastValidPosition == e) {
                                    for (var g = !0, d = 0; d <= e; d++) {
                                        var k = n(d), m = v(d);
                                        if (k && (void 0 == h[d] || h[d] == O(d)) || !k && h[d] != p()[m]) {
                                            g = !1;
                                            break
                                        }
                                    }
                                    if (c =
                                        c || g) return !1
                                }
                                b = f.lastValidPosition
                            }
                        });
                        l = f;
                        return c
                    }
                }

                function ka(a) {
                    a = e._data(a).events;
                    e.each(a, function (a, b) {
                        e.each(b, function (a, b) {
                            if ("inputmask" == b.namespace && "setvalue" != b.type) {
                                var c = b.handler;
                                b.handler = function (a) {
                                    if (this.readOnly || this.disabled) a.preventDefault; else return c.apply(this, arguments)
                                }
                            }
                        })
                    })
                }

                function la(a) {
                    function c(a) {
                        if (void 0 == e.valHooks[a] || !0 != e.valHooks[a].inputmaskpatch) {
                            var b = e.valHooks[a] && e.valHooks[a].get ? e.valHooks[a].get : function (a) {
                                return a.value
                            }, c = e.valHooks[a] &&
                            e.valHooks[a].set ? e.valHooks[a].set : function (a, b) {
                                a.value = b;
                                return a
                            };
                            e.valHooks[a] = {
                                get: function (a) {
                                    var c = e(a);
                                    if (c.data("_inputmask")) {
                                        if (c.data("_inputmask").opts.autoUnmask) return c.inputmask("unmaskedvalue");
                                        a = b(a);
                                        c = c.data("_inputmask");
                                        return a != c.masksets[c.activeMasksetIndex]._buffer.join("") ? a : ""
                                    }
                                    return b(a)
                                }, set: function (a, b) {
                                    var f = e(a), h = c(a, b);
                                    f.data("_inputmask") && f.triggerHandler("setvalue.inputmask");
                                    return h
                                }, inputmaskpatch: !0
                            }
                        }
                    }

                    var b;
                    Object.getOwnPropertyDescriptor && (b = Object.getOwnPropertyDescriptor(a,
                        "value"));
                    if (b && b.get) {
                        if (!a._valueGet) {
                            var f = b.get, g = b.set;
                            a._valueGet = function () {
                                return A ? f.call(this).split("").reverse().join("") : f.call(this)
                            };
                            a._valueSet = function (a) {
                                g.call(this, A ? a.split("").reverse().join("") : a)
                            };
                            Object.defineProperty(a, "value", {
                                get: function () {
                                    var a = e(this), b = e(this).data("_inputmask"), c = b.masksets,
                                        h = b.activeMasksetIndex;
                                    return b && b.opts.autoUnmask ? a.inputmask("unmaskedvalue") : f.call(this) != c[h]._buffer.join("") ? f.call(this) : ""
                                }, set: function (a) {
                                    g.call(this, a);
                                    e(this).triggerHandler("setvalue.inputmask")
                                }
                            })
                        }
                    } else document.__lookupGetter__ &&
                    a.__lookupGetter__("value") ? a._valueGet || (f = a.__lookupGetter__("value"), g = a.__lookupSetter__("value"), a._valueGet = function () {
                        return A ? f.call(this).split("").reverse().join("") : f.call(this)
                    }, a._valueSet = function (a) {
                        g.call(this, A ? a.split("").reverse().join("") : a)
                    }, a.__defineGetter__("value", function () {
                        var a = e(this), b = e(this).data("_inputmask"), c = b.masksets, h = b.activeMasksetIndex;
                        return b && b.opts.autoUnmask ? a.inputmask("unmaskedvalue") : f.call(this) != c[h]._buffer.join("") ? f.call(this) : ""
                    }), a.__defineSetter__("value",
                        function (a) {
                            g.call(this, a);
                            e(this).triggerHandler("setvalue.inputmask")
                        })) : (a._valueGet || (a._valueGet = function () {
                        return A ? this.value.split("").reverse().join("") : this.value
                    }, a._valueSet = function (a) {
                        this.value = A ? a.split("").reverse().join("") : a
                    }), c(a.type))
                }

                function $(a, c, b, f) {
                    var e = k();
                    if (!1 !== f) for (; !n(a) && 0 <= a - 1;) a--;
                    for (f = a; f < c && f < s(); f++) if (n(f)) {
                        D(e, f);
                        var d = r(f), l = I(e, d);
                        if (l != O(d)) if (d < s() && !1 !== t(f, l, !0) && u()[v(f)].def == u()[v(d)].def) H(e, f, l, !0); else if (n(f)) break
                    } else D(e, f);
                    void 0 != b && H(e,
                        G(c), b);
                    if (!1 == g().greedy) {
                        c = T(e.join("")).split("");
                        e.length = c.length;
                        f = 0;
                        for (b = e.length; f < b; f++) e[f] = c[f];
                        0 == e.length && (g().buffer = p().slice())
                    }
                    return a
                }

                function aa(a, c, b) {
                    var e = k();
                    if (I(e, a, !0) != O(a)) for (var d = G(c); d > a && 0 <= d; d--) if (n(d)) {
                        var l = G(d), m = I(e, l);
                        m != O(l) && !1 !== t(d, m, !0) && u()[v(d)].def == u()[v(l)].def && (H(e, d, m, !0), D(e, l))
                    } else D(e, d);
                    void 0 != b && I(e, a) == O(a) && H(e, a, b);
                    a = e.length;
                    if (!1 == g().greedy) {
                        b = T(e.join("")).split("");
                        e.length = b.length;
                        d = 0;
                        for (l = e.length; d < l; d++) e[d] = b[d];
                        0 == e.length &&
                        (g().buffer = p().slice())
                    }
                    return c - (a - e.length)
                }

                function ba(e, c, b) {
                    if (a.numericInput || A) {
                        switch (c) {
                            case a.keyCode.BACKSPACE:
                                c = a.keyCode.DELETE;
                                break;
                            case a.keyCode.DELETE:
                                c = a.keyCode.BACKSPACE
                        }
                        if (A) {
                            var f = b.end;
                            b.end = b.begin;
                            b.begin = f
                        }
                    }
                    f = !0;
                    b.begin == b.end ? (f = c == a.keyCode.BACKSPACE ? b.begin - 1 : b.begin, a.isNumeric && "" != a.radixPoint && k()[f] == a.radixPoint && (b.begin = k().length - 1 == f ? b.begin : c == a.keyCode.BACKSPACE ? f : r(f), b.end = b.begin), f = !1, c == a.keyCode.BACKSPACE ? b.begin-- : c == a.keyCode.DELETE && b.end++) : 1 !=
                        b.end - b.begin || a.insertMode || (f = !1, c == a.keyCode.BACKSPACE && b.begin--);
                    K(k(), b.begin, b.end);
                    var d = s();
                    if (!1 == a.greedy && (isNaN(a.repeat) || 0 < a.repeat)) $(b.begin, d, void 0, !A && c == a.keyCode.BACKSPACE && !f); else {
                        for (var l = b.begin, m = b.begin; m < b.end; m++) if (n(m) || !f) l = $(b.begin, d, void 0, !A && c == a.keyCode.BACKSPACE && !f);
                        f || (b.begin = l)
                    }
                    c = r(-1);
                    K(k(), b.begin, b.end, !0);
                    J(e, !1, !1, k());
                    g().lastValidPosition < c ? (g().lastValidPosition = -1, g().p = c) : g().p = b.begin
                }

                function V(d) {
                    W = !1;
                    var c = this, b = e(c), f = d.keyCode, l = z(c);
                    f ==
                    a.keyCode.BACKSPACE || f == a.keyCode.DELETE || ga && 127 == f || d.ctrlKey && 88 == f ? (d.preventDefault(), 88 == f && (N = k().join("")), ba(c, f, l), w(), C(c, k(), g().p), c._valueGet() == p().join("") && b.trigger("cleared"), a.showTooltip && b.prop("title", g().mask)) : f == a.keyCode.END || f == a.keyCode.PAGE_DOWN ? setTimeout(function () {
                        var b = r(g().lastValidPosition);
                        a.insertMode || b != s() || d.shiftKey || b--;
                        z(c, d.shiftKey ? l.begin : b, b)
                    }, 0) : f == a.keyCode.HOME && !d.shiftKey || f == a.keyCode.PAGE_UP ? z(c, 0, d.shiftKey ? l.begin : 0) : f == a.keyCode.ESCAPE ||
                    90 == f && d.ctrlKey ? (J(c, !0, !1, N.split("")), b.click()) : f != a.keyCode.INSERT || d.shiftKey || d.ctrlKey ? !1 != a.insertMode || d.shiftKey || (f == a.keyCode.RIGHT ? setTimeout(function () {
                        var a = z(c);
                        z(c, a.begin)
                    }, 0) : f == a.keyCode.LEFT && setTimeout(function () {
                        var a = z(c);
                        z(c, a.begin - 1)
                    }, 0)) : (a.insertMode = !a.insertMode, z(c, a.insertMode || l.begin != s() ? l.begin : l.begin - 1));
                    b = z(c);
                    !0 === a.onKeyDown.call(this, d, k(), a) && z(c, b.begin, b.end);
                    ca = -1 != e.inArray(f, a.ignorables)
                }

                function R(h, c, b, f, m, p) {
                    if (void 0 == b && W) return !1;
                    W = !0;
                    var q =
                        e(this);
                    h = h || window.event;
                    b = c ? b : h.which || h.charCode || h.keyCode;
                    if (!(!0 === c || h.ctrlKey && h.altKey) && (h.ctrlKey || h.metaKey || ca)) return !0;
                    if (b) {
                        !0 !== c && 46 == b && !1 == h.shiftKey && "," == a.radixPoint && (b = 44);
                        var n, v, u = String.fromCharCode(b);
                        c ? (b = m ? p : g().lastValidPosition + 1, n = {begin: b, end: b}) : n = z(this);
                        p = A ? 1 < n.begin - n.end || 1 == n.begin - n.end && a.insertMode : 1 < n.end - n.begin || 1 == n.end - n.begin && a.insertMode;
                        var E = l;
                        p && (e.each(d, function (a, b) {
                            "object" == typeof b && (l = a, g().undoBuffer = k().join(""))
                        }), l = E, ba(this, a.keyCode.DELETE,
                            n), a.insertMode || e.each(d, function (a, b) {
                            "object" == typeof b && (l = a, aa(n.begin, s()), g().lastValidPosition = r(g().lastValidPosition))
                        }), l = E);
                        var D = k().join("").indexOf(a.radixPoint);
                        a.isNumeric && !0 !== c && -1 != D && (a.greedy && n.begin <= D ? (n.begin = G(n.begin), n.end = n.begin) : u == a.radixPoint && (n.begin = D, n.end = n.begin));
                        var F = n.begin;
                        b = t(F, u, m);
                        !0 === m && (b = [{activeMasksetIndex: l, result: b}]);
                        var x = -1;
                        e.each(b, function (b, e) {
                            l = e.activeMasksetIndex;
                            g().writeOutBuffer = !0;
                            var c = e.result;
                            if (!1 !== c) {
                                var f = !1, d = k();
                                !0 !== c &&
                                (f = c.refresh, F = void 0 != c.pos ? c.pos : F, u = void 0 != c.c ? c.c : u);
                                if (!0 !== f) {
                                    if (!0 == a.insertMode) {
                                        c = s();
                                        for (d = d.slice(); I(d, c, !0) != O(c) && c >= F;) c = 0 == c ? -1 : G(c);
                                        c >= F ? (aa(F, s(), u), d = g().lastValidPosition, c = r(d), c != s() && d >= F && I(k().slice(), c, !0) != O(c) && (g().lastValidPosition = c)) : g().writeOutBuffer = !1
                                    } else H(d, F, u, !0);
                                    if (-1 == x || x > r(F)) x = r(F)
                                } else !m && (d = F < s() ? F + 1 : F, -1 == x || x > d) && (x = d);
                                x > g().p && (g().p = x)
                            }
                        });
                        !0 !== m && (l = E, w());
                        if (!1 !== f) if (e.each(b, function (a, b) {
                            if (b.activeMasksetIndex == l) return v = b, !1
                        }), void 0 != v) {
                            var K =
                                this;
                            setTimeout(function () {
                                a.onKeyValidation.call(K, v.result, a)
                            }, 0);
                            if (g().writeOutBuffer && !1 !== v.result) {
                                var J = k();
                                f = c ? void 0 : a.numericInput ? F > D ? G(x) : u == a.radixPoint ? x - 1 : G(x - 1) : x;
                                C(this, J, f);
                                !0 !== c && setTimeout(function () {
                                    !0 === P(J) && q.trigger("complete");
                                    X = !0;
                                    q.trigger("input")
                                }, 0)
                            } else p && (g().buffer = g().undoBuffer.split(""))
                        } else p && (g().buffer = g().undoBuffer.split(""));
                        a.showTooltip && q.prop("title", g().mask);
                        h && (h.preventDefault ? h.preventDefault() : h.returnValue = !1)
                    }
                }

                function da(d) {
                    var c = e(this),
                        b = d.keyCode, f = k();
                    a.onKeyUp.call(this, d, f, a);
                    b == a.keyCode.TAB && a.showMaskOnFocus && (c.hasClass("focus.inputmask") && 0 == this._valueGet().length ? (f = p().slice(), C(this, f), z(this, 0), N = k().join("")) : (C(this, f), f.join("") == p().join("") && -1 != e.inArray(a.radixPoint, f) ? (z(this, M(0)), c.click()) : z(this, M(0), M(s()))))
                }

                function ea(d) {
                    if (!0 === X && "input" == d.type) return X = !1, !0;
                    var c = this, b = e(c);
                    if ("propertychange" == d.type && c._valueGet().length <= s()) return !0;
                    setTimeout(function () {
                        var d = e.isFunction(a.onBeforePaste) ?
                            a.onBeforePaste.call(c, c._valueGet(), a) : c._valueGet();
                        J(c, !1, !1, d.split(""), !0);
                        C(c, k());
                        !0 === P(k()) && b.trigger("complete");
                        b.click()
                    }, 0)
                }

                function ma(d) {
                    var c = e(this), b = z(this), f = this._valueGet(),
                        f = f.replace(RegExp("(" + Q(p().join("")) + ")*"), "");
                    b.begin > f.length && (z(this, f.length), b = z(this));
                    1 != k().length - f.length || f.charAt(b.begin) == k()[b.begin] || f.charAt(b.begin + 1) == k()[b.begin] || n(b.begin) ? (J(this, !1, !1, f.split("")), C(this, k()), !0 === P(k()) && c.trigger("complete"), c.click()) : (d.keyCode = a.keyCode.BACKSPACE,
                        V.call(this, d));
                    d.preventDefault()
                }

                function na(h) {
                    q = e(h);
                    if (q.is(":input")) {
                        q.data("_inputmask", {masksets: d, activeMasksetIndex: l, opts: a, isRTL: !1});
                        a.showTooltip && q.prop("title", g().mask);
                        g().greedy = g().greedy ? g().greedy : 0 == g().repeat;
                        if (null != q.attr("maxLength")) {
                            var c = q.prop("maxLength");
                            -1 < c && e.each(d, function (a, b) {
                                "object" == typeof b && "*" == b.repeat && (b.repeat = c)
                            });
                            s() >= c && -1 < c && (c < p().length && (p().length = c), !1 == g().greedy && (g().repeat = Math.round(c / p().length)), q.prop("maxLength", 2 * s()))
                        }
                        la(h);
                        a.numericInput &&
                        (a.isNumeric = a.numericInput);
                        ("rtl" == h.dir || a.numericInput && a.rightAlignNumerics || a.isNumeric && a.rightAlignNumerics) && q.css("text-align", "right");
                        if ("rtl" == h.dir || a.numericInput) {
                            h.dir = "ltr";
                            q.removeAttr("dir");
                            var b = q.data("_inputmask");
                            b.isRTL = !0;
                            q.data("_inputmask", b);
                            A = !0
                        }
                        q.unbind(".inputmask");
                        q.removeClass("focus.inputmask");
                        q.closest("form").bind("submit", function () {
                            N != k().join("") && q.change()
                        }).bind("reset", function () {
                            setTimeout(function () {
                                q.trigger("setvalue")
                            }, 0)
                        });
                        q.bind("mouseenter.inputmask",
                            function () {
                                !e(this).hasClass("focus.inputmask") && a.showMaskOnHover && this._valueGet() != k().join("") && C(this, k())
                            }).bind("blur.inputmask", function () {
                            var b = e(this), c = this._valueGet(), f = k();
                            b.removeClass("focus.inputmask");
                            N != k().join("") && b.change();
                            a.clearMaskOnLostFocus && "" != c && (c == p().join("") ? this._valueSet("") : U(this));
                            !1 === P(f) && (b.trigger("incomplete"), a.clearIncomplete && (e.each(d, function (a, b) {
                                "object" == typeof b && (b.buffer = b._buffer.slice(), b.lastValidPosition = -1)
                            }), l = 0, a.clearMaskOnLostFocus ?
                                this._valueSet("") : (f = p().slice(), C(this, f))))
                        }).bind("focus.inputmask", function () {
                            var b = e(this), c = this._valueGet();
                            a.showMaskOnFocus && !b.hasClass("focus.inputmask") && (!a.showMaskOnHover || a.showMaskOnHover && "" == c) && this._valueGet() != k().join("") && C(this, k(), r(g().lastValidPosition));
                            b.addClass("focus.inputmask");
                            N = k().join("")
                        }).bind("mouseleave.inputmask", function () {
                            var b = e(this);
                            a.clearMaskOnLostFocus && (b.hasClass("focus.inputmask") || this._valueGet() == b.attr("placeholder") || (this._valueGet() == p().join("") ||
                            "" == this._valueGet() ? this._valueSet("") : U(this)))
                        }).bind("click.inputmask", function () {
                            var b = this;
                            setTimeout(function () {
                                var c = z(b), d = k();
                                if (c.begin == c.end) {
                                    var c = A ? M(c.begin) : c.begin, f = g().lastValidPosition,
                                        d = a.isNumeric ? !1 === a.skipRadixDance && "" != a.radixPoint && -1 != e.inArray(a.radixPoint, d) ? a.numericInput ? r(e.inArray(a.radixPoint, d)) : e.inArray(a.radixPoint, d) : r(f) : r(f);
                                    c < d ? n(c) ? z(b, c) : z(b, r(c)) : z(b, d)
                                }
                            }, 0)
                        }).bind("dblclick.inputmask", function () {
                            var a = this;
                            setTimeout(function () {
                                    z(a, 0, r(g().lastValidPosition))
                                },
                                0)
                        }).bind(S + ".inputmask dragdrop.inputmask drop.inputmask", ea).bind("setvalue.inputmask", function () {
                            J(this, !0);
                            N = k().join("");
                            this._valueGet() == p().join("") && this._valueSet("")
                        }).bind("complete.inputmask", a.oncomplete).bind("incomplete.inputmask", a.onincomplete).bind("cleared.inputmask", a.oncleared);
                        q.bind("keydown.inputmask", V).bind("keypress.inputmask", R).bind("keyup.inputmask", da);
                        if (ha || Y || ia || Z) if (q.attr("autocomplete", "off").attr("autocorrect", "off").attr("autocapitalize", "off").attr("spellcheck",
                            !1), Y || Z) q.unbind("keydown.inputmask", V).unbind("keypress.inputmask", R).unbind("keyup.inputmask", da), "input" == S && q.unbind(S + ".inputmask"), q.bind("input.inputmask", ma);
                        fa && q.bind("input.inputmask", ea);
                        b = e.isFunction(a.onBeforeMask) ? a.onBeforeMask.call(h, h._valueGet(), a) : h._valueGet();
                        J(h, !0, !1, b.split(""));
                        N = k().join("");
                        var f;
                        try {
                            f = document.activeElement
                        } catch (m) {
                        }
                        f === h ? (q.addClass("focus.inputmask"), z(h, r(g().lastValidPosition))) : a.clearMaskOnLostFocus ? k().join("") == p().join("") ? h._valueSet("") :
                            U(h) : C(h, k());
                        ka(h)
                    }
                }

                var A = !1, N = k().join(""), q, W = !1, X = !1, ca = !1;
                if (void 0 != m) switch (m.action) {
                    case "isComplete":
                        return P(m.buffer);
                    case "unmaskedvalue":
                        return A = m.$input.data("_inputmask").isRTL, ja(m.$input, m.skipDatepickerCheck);
                    case "mask":
                        na(m.el);
                        break;
                    case "format":
                        return q = e({}), q.data("_inputmask", {
                            masksets: d,
                            activeMasksetIndex: l,
                            opts: a,
                            isRTL: a.numericInput
                        }), a.numericInput && (a.isNumeric = a.numericInput, A = !0), m = m.value.split(""), J(q, !1, !1, A ? m.reverse() : m, !0), A ? k().reverse().join("") : k().join("");
                    case "isValid":
                        return q = e({}), q.data("_inputmask", {
                            masksets: d,
                            activeMasksetIndex: l,
                            opts: a,
                            isRTL: a.numericInput
                        }), a.numericInput && (a.isNumeric = a.numericInput, A = !0), m = m.value.split(""), J(q, !1, !0, A ? m.reverse() : m), P(k())
                }
            };
        e.inputmask = {
            defaults: {
                placeholder: "_",
                optionalmarker: {start: "[", end: "]"},
                quantifiermarker: {start: "{", end: "}"},
                groupmarker: {start: "(", end: ")"},
                escapeChar: "\\",
                mask: null,
                oncomplete: e.noop,
                onincomplete: e.noop,
                oncleared: e.noop,
                repeat: 0,
                greedy: !0,
                autoUnmask: !1,
                clearMaskOnLostFocus: !0,
                insertMode: !0,
                clearIncomplete: !1,
                aliases: {},
                onKeyUp: e.noop,
                onKeyDown: e.noop,
                onBeforeMask: void 0,
                onBeforePaste: void 0,
                onUnMask: void 0,
                showMaskOnFocus: !0,
                showMaskOnHover: !0,
                onKeyValidation: e.noop,
                skipOptionalPartCharacter: " ",
                showTooltip: !1,
                numericInput: !1,
                isNumeric: !1,
                radixPoint: "",
                skipRadixDance: !1,
                rightAlignNumerics: !0,
                definitions: {
                    9: {validator: "[0-9]", cardinality: 1, definitionSymbol: "*"},
                    a: {validator: "[A-Za-z\u0410-\u044f\u0401\u0451]", cardinality: 1, definitionSymbol: "*"},
                    "*": {
                        validator: "[A-Za-z\u0410-\u044f\u0401\u04510-9]",
                        cardinality: 1
                    }
                },
                keyCode: {
                    ALT: 18,
                    BACKSPACE: 8,
                    CAPS_LOCK: 20,
                    COMMA: 188,
                    COMMAND: 91,
                    COMMAND_LEFT: 91,
                    COMMAND_RIGHT: 93,
                    CONTROL: 17,
                    DELETE: 46,
                    DOWN: 40,
                    END: 35,
                    ENTER: 13,
                    ESCAPE: 27,
                    HOME: 36,
                    INSERT: 45,
                    LEFT: 37,
                    MENU: 93,
                    NUMPAD_ADD: 107,
                    NUMPAD_DECIMAL: 110,
                    NUMPAD_DIVIDE: 111,
                    NUMPAD_ENTER: 108,
                    NUMPAD_MULTIPLY: 106,
                    NUMPAD_SUBTRACT: 109,
                    PAGE_DOWN: 34,
                    PAGE_UP: 33,
                    PERIOD: 190,
                    RIGHT: 39,
                    SHIFT: 16,
                    SPACE: 32,
                    TAB: 9,
                    UP: 38,
                    WINDOWS: 91
                },
                ignorables: [8, 9, 13, 19, 27, 33, 34, 35, 36, 37, 38, 39, 40, 45, 46, 93, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123],
                getMaskLength: void 0,
                isComplete: void 0
            }, escapeRegex: function (e) {
                return e.replace(RegExp("(\\/|\\.|\\*|\\+|\\?|\\||\\(|\\)|\\[|\\]|\\{|\\}|\\\\)", "gim"), "\\$1")
            }, format: function (d, l) {
                var a = e.extend(!0, {}, e.inputmask.defaults, l);
                E(a.alias, l, a);
                return v(D(a), 0, a, {action: "format", value: d})
            }, isValid: function (d, l) {
                var a = e.extend(!0, {}, e.inputmask.defaults, l);
                E(a.alias, l, a);
                return v(D(a), 0, a, {action: "isValid", value: d})
            }
        };
        e.fn.inputmask = function (d, l) {
            var a = e.extend(!0, {}, e.inputmask.defaults, l), m, g = 0;
            if ("string" ===
                typeof d) switch (d) {
                case "mask":
                    return E(a.alias, l, a), m = D(a), 0 == m.length ? this : this.each(function () {
                        v(e.extend(!0, {}, m), 0, a, {action: "mask", el: this})
                    });
                case "unmaskedvalue":
                    var u = e(this);
                    return u.data("_inputmask") ? (m = u.data("_inputmask").masksets, g = u.data("_inputmask").activeMasksetIndex, a = u.data("_inputmask").opts, v(m, g, a, {
                        action: "unmaskedvalue",
                        $input: u
                    })) : u.val();
                case "remove":
                    return this.each(function () {
                        var d = e(this);
                        if (d.data("_inputmask")) {
                            m = d.data("_inputmask").masksets;
                            g = d.data("_inputmask").activeMasksetIndex;
                            a = d.data("_inputmask").opts;
                            this._valueSet(v(m, g, a, {action: "unmaskedvalue", $input: d, skipDatepickerCheck: !0}));
                            d.removeData("_inputmask");
                            d.unbind(".inputmask");
                            d.removeClass("focus.inputmask");
                            var k;
                            Object.getOwnPropertyDescriptor && (k = Object.getOwnPropertyDescriptor(this, "value"));
                            k && k.get ? this._valueGet && Object.defineProperty(this, "value", {
                                get: this._valueGet,
                                set: this._valueSet
                            }) : document.__lookupGetter__ && this.__lookupGetter__("value") && this._valueGet && (this.__defineGetter__("value", this._valueGet),
                                this.__defineSetter__("value", this._valueSet));
                            try {
                                delete this._valueGet, delete this._valueSet
                            } catch (l) {
                                this._valueSet = this._valueGet = void 0
                            }
                        }
                    });
                case "getemptymask":
                    return this.data("_inputmask") ? (m = this.data("_inputmask").masksets, g = this.data("_inputmask").activeMasksetIndex, m[g]._buffer.join("")) : "";
                case "hasMaskedValue":
                    return this.data("_inputmask") ? !this.data("_inputmask").opts.autoUnmask : !1;
                case "isComplete":
                    return this.data("_inputmask") ? (m = this.data("_inputmask").masksets, g = this.data("_inputmask").activeMasksetIndex,
                        a = this.data("_inputmask").opts, v(m, g, a, {
                        action: "isComplete",
                        buffer: this[0]._valueGet().split("")
                    })) : !0;
                case "getmetadata":
                    if (this.data("_inputmask")) return m = this.data("_inputmask").masksets, g = this.data("_inputmask").activeMasksetIndex, m[g].metadata;
                    break;
                default:
                    return E(d, l, a) || (a.mask = d), m = D(a), 0 == m.length ? this : this.each(function () {
                        v(e.extend(!0, {}, m), g, a, {action: "mask", el: this})
                    })
            } else {
                if ("object" == typeof d) return a = e.extend(!0, {}, e.inputmask.defaults, d), E(a.alias, d, a), m = D(a), 0 == m.length ? this :
                    this.each(function () {
                        v(e.extend(!0, {}, m), g, a, {action: "mask", el: this})
                    });
                if (void 0 == d) return this.each(function () {
                    var d = e(this).attr("data-inputmask");
                    if (d && "" != d) try {
                        var d = d.replace(RegExp("'", "g"), '"'), g = e.parseJSON("{" + d + "}");
                        e.extend(!0, g, l);
                        a = e.extend(!0, {}, e.inputmask.defaults, g);
                        E(a.alias, g, a);
                        a.alias = void 0;
                        e(this).inputmask(a)
                    } catch (m) {
                    }
                })
            }
        }
    }
})(jQuery);

/* End */
;
; /* Start:"a:4:{s:4:"full";s:50:"/bitrix/templates/main/js/CBUJQ.js?157554771520493";s:6:"source";s:34:"/bitrix/templates/main/js/CBUJQ.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
/* Custom Jquery */
$('html').append("<style>");


$(window).load(function () {

    (function () {
        var demo, fixedTable;

        fixedTable = function (el) {
            var $body, $header, $sidebar;
            $body = $(el).find('.fixedTable-body');
            $sidebar = $(el).find('.fixedTable-sidebar table');
            $header = $(el).find('.fixedTable-header table');
            return $($body).scroll(function () {
                $($sidebar).css('margin-top', -$($body).scrollTop());
                return $($header).css('margin-left', -$($body).scrollLeft());
            });
        };

        demo = new fixedTable($('#js-fixed-table'));

        $('.fixedTable-body tr').each(function (index, el) {
            $(this).hover(function () {
                var hoverTr = $(this).index();
                $('.fixedTable-sidebar tr').eq(hoverTr).css({'background-color': '#f5f5f5'});
            }, function () {
                var hoverTr = $(this).index();
                $('.fixedTable-sidebar tr').eq(hoverTr).css({'background-color': '#fff'});
            });
        });

    }).call(this);

    $('.modal.active').modal('show');
    if ($('.date_up_inner').length > 0) {
        $('.date_up_inner').parent().css({
            "position": "relative"
        })
    }

    function chng_clr(path_el_clr) {
        path_el_clr.each(function () {
            $(this).css({'background': '#' + $(this).text()});
            $(this).click(function () {
                path_el_clr.removeClass('active-clr');
                $(this).addClass('active-clr');
                $(this).parents('.info-clr').find('.input_txt').val($(this).text());
            });
        });
    }

    chng_clr($('.bg-chng li'));
    chng_clr($('.border-chng li'));
    chng_clr($('.text-chng li'));
    $('.bg-chng li:eq(7)').trigger('click');
    $('.border-chng li:eq(7)').trigger('click');
    $('.text-chng li:eq(0)').trigger('click');

    var contElement = $("#sCity + ul li:eq(0)");
    $("#sCity").val(contElement.text());
    $('.phone_frm').text(contElement.attr('data-phone'));
    $('.addres_frm').attr('href', contElement.attr('data-addres'));

// console.log($('.carousel'));
    $('.carousel').carousel('pause');

    function number_format(str) {
        return String(str).replace(/(\s)+/g, '').replace(/(\d{1,3})(?=(?:\d{3})+$)/g, '$1 ');
    }

    function rates_calc(item, num, equal, maths) {
        item.keyup(function () {
            var rate = num.attr('data-rate');
            if (!maths) {
                var str = $(this).val() * rate;
            } else {
                var str = ($(this).val() / rate).toFixed(2);
            }
            var str_ = number_format(str);
            if (!maths) {
                var str_title = number_format(str) + " UZS";
            } else {
                var str_title = number_format(str) + " " + num.val();
            }
            equal.val(str_);
            equal.attr('title', str_title);
        });
        item.trigger('keyup');
    }

    rates_calc($('#in-num'), $('#online-4'), $('#equal-uzs'), false);
    rates_calc($('#in-num_2'), $('#online-5'), $('#equal-uzs_2'), true);

    /* Уголок для активных элементов меню */

    function active_corn(active_link, hCorner, chk_width) {
        active_link.prepend('<i></i>');
        if (chk_width) {
            var wActive = (active_link.outerWidth() / 2);
            active_link.children('i').css({
                'border-width': hCorner + "px " + wActive + 'px',
                'bottom': '-' + (hCorner * 2) + 'px',
            });
        } else {
            var wActive = (active_link.outerHeight() / 2) + 20;
            // console.log(active_link.outerHeight());
            active_link.children('i').css({
                'border-width': wActive + 'px ' + hCorner + 'px'
            });
        }

    }

    $(window).resize(function () {
        active_corn($('.active-nav'), "15", true);
        active_corn($('.active-alt-aside'), "15", false);
        $('.owner-page article label').each(function () {
            active_corn($(this), "12", true);
        });
    });
    $(window).trigger('resize');

    /* END = Уголок для активных элементов меню */

    function frm_chk(id_inp, div_chk, img_chk) {
        if (div_chk) {
            if (id_inp.val() === "") {
                id_inp.val(id_inp.siblings('.sCity_list').children('li').eq(0).text());
            } else {
                $('#online-6').siblings('ul').children().each(function () {
                    if ($('#online-6').val() == $(this).text()) {
                        // console.log($(this).attr(''));
                        $("#" + $(this).attr('data-id-region-online')).css('visibility', "visible");
                    } else {
                        $("#" + $(this).attr('data-id-region-online')).css('visibility', "hidden");
                    }
                    // if($('#online-6').val() == $(this).text()) {
                    // 	$(this).parents('.region-city-hidden').css('visibility',"visible");
                    // } else {
                    // 	$(this).parents('.region-city-hidden').css('visibility',"hidden");
                    // }
                });
            }
        }
        id_inp.click(function (ff) {
            var list = id_inp.siblings('ul');
            if (list.css('display') == "block") {
                list.hide();
                id_inp.parent().removeClass('mark_open');
                return false;
            }
            list.css('display', 'block');
            $(this).parent().addClass('mark_open');

            list.children().each(function () {
                if (img_chk) {
                    if ($(this).find('span').text() == id_inp.val()) {
                        $(this).css('background', '#deecd9');
                        $(this).css('color', '#013646');
                    } else {
                        $(this).css('background', '#fff');
                        $(this).css('color', '#666');
                    }
                } else {
                    if ($(this).text() == id_inp.val()) {
                        $(this).css('background', '#deecd9');
                        $(this).css('color', '#013646');
                    } else {
                        $(this).css('background', '#fff');
                        $(this).css('color', '#013646');
                    }
                }

                $(this).click(function () {
                    if (img_chk) {
                        id_inp.val($(this).find('span').text());
                        id_inp.siblings('img').attr('src', $(this).find('img').attr('src'));
                    } else {
                        id_inp.val($(this).text());
                    }
                    list.hide();
                    id_inp.parent().removeClass('mark_open');
                    if ($(this).attr('data-name')) {
                        $('.choose_form').attr('action', $(this).attr('data-name'));
                    }
                    if ($(this).attr('data-rate')) {
                        id_inp.attr('data-rate', $(this).attr('data-rate'));
                    }
                    if ($(this).attr('data-phone')) {
                        if ($('.phone_frm').length == 0) {
                            $('.up_3_1_1').append('<p class="phone_frm">');
                        }
                        $('.phone_frm').text($(this).attr('data-phone'));
                    }
                    if ($(this).attr('data-addres')) {
                        $('.addres_frm').attr("href", $(this).attr('data-addres'));
                    }
                    if ($(this).attr('data-status')) {
                        $(this).parents("input").attr("data-status", $(this).attr('data-status'));
                    }
                    if ($(this).attr("data-year")) {
                        $(this).parents('form').attr('data-action-year', $(this).attr('data-year'));
                    }
                    if ($(this).attr("data-month")) {
                        $(this).parents('form').attr('data-action-month', $(this).attr('data-month'));
                    }
                    if ($(this).attr("data-id-region-online")) {
                        $("#" + $(this).attr('data-id-region-online')).css('visibility', 'visible');
                        $('.region-city-hidden:not(#' + $(this).attr('data-id-region-online') + ')').css('visibility', 'hidden');
                        if (div_chk) {
                            $("#" + $(this).attr('data-id-region-online')).parent().children('.choos-form').val($("#" + $(this).attr('data-id-region-online')).children('li').eq(0).text());
                        }
                    }
                    if (id_inp.attr("id") == "c-region" || id_inp.attr("id") == "c-bank") {
                        $(this).parents('form').attr('data-region-id', $(this).attr('data-id-region'));
                        if (id_inp.attr("id") == "c-region") {
                            region_independ();
                        }
                    }

                    if (img_chk) {
                        var rate = id_inp.parents('form').find('.item-num').val();
                        if (id_inp.attr('id') == 'online-5') {
                            var str = (rate / id_inp.attr('data-rate')).toFixed(2);
                        } else {
                            var str = id_inp.attr('data-rate') * rate;
                        }
                        var str_ = String(str).replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ');
                        if (id_inp.attr('id') != 'online-5') {
                            var str_title = String(str).replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ') + " UZS";
                        } else {
                            var str_title = String(str).replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ') + " " + id_inp.val();
                        }
                        id_inp.parents('form').find('.equal-uzs').val(str_);
                        id_inp.parents('form').find('.equal-uzs').attr('title', str_title);
                    }
                })

            });
            ff.stopPropagation();
        });
        $('body').click(function () {
            id_inp.siblings(".but").css({"border-bottom-width": "2px"});
            id_inp.siblings('ul').hide();
            id_inp.parent().removeClass('mark_open');
        });
        if (id_inp.attr("id") == "c-month" || id_inp.attr("id") == "c-year") {
            $("#c-month").click(function () {
                id_inp.not("#" + $(this).attr('id')).siblings('ul').hide();
            })
            $("#c-year").click(function () {
                id_inp.not("#" + $(this).attr('id')).siblings('ul').hide();
            })
        }
        if (id_inp.attr("id") == "c-region" || id_inp.attr("id") == "c-bank") {
            $("#c-region").click(function () {
                id_inp.not("#" + $(this).attr('id')).siblings('ul').hide();
            })
            $("#c-bank").click(function () {
                id_inp.not("#" + $(this).attr('id')).siblings('ul').hide();
            });
        }
        if (id_inp.attr("id") == "online-9" || id_inp.attr("id") == "online-6") {
            $("#online-9").click(function () {
                id_inp.not("#" + $(this).attr('id')).siblings('ul').hide();
            })
            $("#online-6").click(function () {
                id_inp.not("#" + $(this).attr('id')).siblings('ul').hide();
            });
        }
    }

    if ($('#c-month').length > 0) {
        $('.news-page .choose_form .green-btn').click(function () {
            link_active_year = $('.news-page .choose_form').attr('data-action-year');
            link_active_month = $('.news-page .choose_form').attr('data-action-month');
            console.log(link_active_year + ' - - ' + link_active_month);
            $('.news-page .choose_form').attr('action', $('.news-page .choose_form').attr('action') + link_active_year + '/' + link_active_month + '/');
        })
    }


    frm_chk($("#sCity"), false, false);
    frm_chk($("#c-month"), false, false);
    frm_chk($("#c-year"), false, false);
    frm_chk($("#c-region"), false, false);
    frm_chk($("#c-bank"), false, false);
    frm_chk($("#online-1"), false, false);
    frm_chk($("#online-2"), false, false);
    frm_chk($("#online-4"), false, true);
    frm_chk($("#online-5"), false, true);
    frm_chk($("#online-6"), true, false);
    frm_chk($("#online-7"), false, false);
    frm_chk($("#online-8"), false, false);
    frm_chk($("#online-9"), true, false);
    frm_chk($("#c-laws"), false, false);
    frm_chk($("#c-vyear"), false, false);
    frm_chk($("#to-bank"), false, false);

    $('.table:not(.table-no-overflow).table-hover').each(function () {
        $(this).wrap('<div class="table-overflow"></div>');
    })

    function region_independ() {
        var idReg = $('#c-region').parents('form').attr('data-region-id');
        bbb = false;
        $('#c-bank').next('ul').children('li').each(function (a) {
            var elementArr = new Array();
            elementArr[a] = $(this).attr('data-vis-region').split(',');
            for (var i = elementArr[a].length - 1; i >= 0; i--) {
                if (idReg == elementArr[a][i]) {
                    if (bbb == false) {
                        $('#c-bank').val($(this).text());
                        bbb = true;
                    }
                    $(this).show();
                    return true;
                } else {
                    $(this).hide();
                }
            }
            ;
        });
    }

    // region_independ();

    $($("#c-region").next('ul').children()).trigger('click');

    $('input[type="file"]').each(function () {
        $(this).change(function () {
            // console.log($(this).attr("name"));
            $(this).parent().parent().find('.input_txt').val('"' + $(this).val().slice($(this).val().lastIndexOf("\\") + 1) + '"');
        });
    })

    $(window).scroll(function () {
        var block_btn = $(".b_fix");
        var offset = block_btn.offset();
        if (offset.top <= 214) {
            $("#nav").removeClass('nav_fixed');
        } else {
            $("#nav").addClass('nav_fixed');
        }
    });
    $('#site-map').change(function () {
        if ($(this).is(':checked')) {
            $('.sticky').removeClass('sticky');
        }
    })

    function minini_slider(item, shif, nm, idd) {
        if (item.length > 0) {
            item.each(function (z) {
                z = z + 1;
                v = z - item.length - 1;
                v = String(v).replace('-', '');
                if (v == 1) {
                    item.parent().parent().prepend('<input type="radio" name="' + nm + '" id="' + idd + '_' + v + '" checked="checked">');
                } else {
                    item.parent().parent().prepend('<input type="radio" name="' + nm + '" id="' + idd + '_' + v + '">');
                }
                item.parent().parent().find('.l-block').append('<label for="' + idd + '_' + z + '" id="' + nm + '_label-' + z + '"></label>');
            });
            inp = item.parent().parent().children('input');
            inp.each(function (a) {
                b = a + 1;
                g = b + 1;
                if (g > inp.length) {
                    g = 1;
                }
                if (a == 0) {
                    v = inp.length;
                } else {
                    v = a;
                }
                if (shif != 0) {
                    n = shif * a;
                    $('style').prepend("#" + $(this).attr('id') + ":checked ~ ." + item.parent().attr("class") + " {transform: translateX(-" + n + "px);-webkit-transform:translateX(-" + n + "px);}");
                } else {
                    $('style').prepend("#" + $(this).attr('id') + ":checked ~ ." + item.parent().attr("class") + " > div:nth-child(" + b + ") {position:relative;display:block;z-index:2}");
                }
                $('style').append('#' + $(this).attr("id") + ':checked ~ .l-block > #' + nm + '_label-' + g + ':after {content:""}');
                $('style').append('#' + $(this).attr("id") + ':checked ~ .l-block > #' + nm + '_label-' + v + ':before {content:""}');
                $('style').append('#' + $(this).attr("id") + ':checked ~ section > label[for="trk_' + b + '"] {color: #013646;border-bottom: 4px solid #013646;}');
            });
            inp.each(function (x) {
                $(this).click(function () {
                    di = $(this).attr('id').replace(/[A-z]/g, '');
                    $('.l-block > i').text(di);
                })
            })
        } else {
            return false;
        }
    }

    minini_slider($('.track_sl > div'), 0, 'truk_n', 'trk');

    $('.owner-page .inp-radio-c').each(function (a) {
        b = a;
        a++;
        $(this).attr("id", "own-" + a);
        $('#own-' + a + ' + label').attr("for", "own-" + a);
        $('.owner-page section:eq(' + b + ')').attr("class", "ans_owner_" + a);
        $(".ans_owner_" + a).wrapInner('<div class="extra-wrapper"></div>');
        h = $(".ans_owner_" + a).find('.extra-wrapper').height() + 20 + "px";
        if (h == "50px") {
            h = "auto";
        }
        ;
        $('style').append(".owner-page article > #own-" + a + ":checked ~ section.ans_owner_" + a + " {height:" + h + ";margin: 10px 0;}");

    });

    function again_click(path_agclick) {
        path_agclick.each(function () {
            $(this).click(function () {
                if ($(this).prev().is(':checked')) {
                    $(this).prev().removeAttr('checked');
                    return false;
                }
            })
        })
    }

    again_click($('.owner-page:not(.reg-page) article label'));

    function wiyzjalka(path, children_in, duration_h, down) {
        path.each(function () {
            $(this).find("span").bind("click", function () {
                path.children(children_in).slideUp();
                path.removeClass("op_mm");
                if (down) {
                    if ($(this).prev().is(children_in)) {
                        if ($(this).prev().is(":visible")) {
                            $(this).parent().removeClass("op_mm");
                            $(this).prev().slideUp(duration_h);
                            $(this).text($(this).siblings('strong').attr('alt'));
                        } else {
                            $(this).parent().addClass("op_mm");
                            $(this).prev().slideDown(duration_h);
                            $(this).text($(this).siblings('strong').text());
                        }
                    }
                } else {
                    if ($(this).next().is(children_in)) {
                        if ($(this).next().is(":visible")) {
                            $(this).parent().removeClass("op_mm");
                            $(this).next().slideUp(duration_h);
                        } else {
                            $(this).parent().addClass("op_mm");
                            $(this).next().slideDown(duration_h);
                        }
                    }
                }
            })
        })
    }

    wiyzjalka($(".faq-page ul li"), "div", "slow");
    wiyzjalka($(".more_rates li"), "div", "slow", true);

    $(function () {
        // прячем кнопку #back-top
        $("#back-top").hide();

        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $("#back-top").fadeIn();
            } else {
                $("#back-top").fadeOut();
            }
        });

        // при клике на ссылку плавно поднимаемся вверх
        $("#back-top a").click(function () {
            $("body,html").animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });

    if ($('.js-agree-label').size()) {
        $('.js-agree-label').click(function () {
            if (!$('.js-agree').is(":checked")) {
                $('.js-agree-button').attr('disabled', false);
            } else {
                $('.js-agree-button').attr('disabled', true);
            }
        });
    }
    ;

})


$(function () {
    var a = document.querySelector('#aside1'), b = null, K = null, Z = 0, P = 0;
    window.addEventListener('scroll', Ascroll, false);
    document.body.addEventListener('scroll', Ascroll, false);

    function Ascroll() {
        var Ra = a.getBoundingClientRect(),
            R1bottom = document.querySelector('#article').getBoundingClientRect().bottom;
        if (Ra.bottom < R1bottom) {
            if (b == null) {
                var Sa = getComputedStyle(a, ''), s = '';
                for (var i = 0; i < Sa.length; i++) {
                    if (Sa[i].indexOf('overflow') == 0 || Sa[i].indexOf('padding') == 0 || Sa[i].indexOf('border') == 0 || Sa[i].indexOf('outline') == 0 || Sa[i].indexOf('box-shadow') == 0 || Sa[i].indexOf('background') == 0) {
                        s += Sa[i] + ': ' + Sa.getPropertyValue(Sa[i]) + '; '
                    }
                }
                b = document.createElement('div');
                b.className = "stop";
                b.style.cssText = s + ' box-sizing: border-box; width: ' + a.offsetWidth + 'px;';
                a.insertBefore(b, a.firstChild);
                var l = a.childNodes.length;
                for (var i = 1; i < l; i++) {
                    b.appendChild(a.childNodes[1]);
                }
                a.style.height = b.getBoundingClientRect().height + 'px';
                a.style.padding = '0';
                a.style.border = '0';
            }
            var Rb = b.getBoundingClientRect(),
                Rh = Ra.top + Rb.height,
                W = document.documentElement.clientHeight,
                R1 = Math.round(Rh - R1bottom),
                R2 = Math.round(Rh - W);
            if (Rb.height > W) {
                if (Ra.top < K) {  // скролл вниз
                    if (R2 > R1) {  // не дойти до низа
                        if (Rb.bottom - W <= 0) {  // подцепиться
                            b.className = 'sticky';
                            b.style.top = W - Rb.height + 'px';
                            Z = Ra.top + Rb.height - W;
                        } else {
                            b.className = 'stop';
                            b.style.top = -Z + 'px';
                        }
                    } else {
                        b.className = 'stop';
                        b.style.top = -R1 + 'px';
                        Z = R1;
                    }
                } else {  // скролл вверх
                    if (Ra.top - P < 0) {  // не дойти до верха
                        if (Rb.top - P >= 0) {  // подцепиться
                            b.className = 'sticky';
                            b.style.top = P + 'px';
                            Z = Ra.top - P;
                        } else {
                            b.className = 'stop';
                            b.style.top = -Z + 'px';
                        }
                    } else {
                        b.className = '';
                        b.style.top = '';
                        Z = 0;
                    }
                }
                K = Ra.top;
            } else {
                if ((Ra.top - P) <= 0) {
                    if ((Ra.top - P) <= R1) {
                        b.className = 'stop';
                        b.style.top = -R1 + 'px';
                    } else {
                        b.className = 'sticky';
                        b.style.top = P + 'px';
                    }
                } else {
                    b.className = '';
                    b.style.top = '';
                }
            }
            window.addEventListener('resize', function () {
                a.children[0].style.width = getComputedStyle(a, '').width
            }, false);
        }
    }
})

/* Калькулятор курса валют */

function bxFormOngoing() {
    var field_fiz = new Array(
        "Организация:*",
        "ФИО руководителя:*"
    );

    var field_you = new Array(
        "Имя:*",
        "Фамилия:*"
    );


    if ($('label[for="fiz"]').length > 0 && $('label[for="you"]').length > 0) {
        $('label[for="fiz"]').click(function () {
            for (var i = field_fiz.length - 1; i >= 0; i--) {
                $('.name-fields').each(function (t) {
                    // console.log();
                    if (field_fiz[i] == $(this).text()) {
                        $(this).parents('tr').hide();
                        $(this).parents('tr').find('input').attr("value", "-");
                    }
                });
            }
            ;
            for (var j = field_you.length - 1; j >= 0; j--) {
                $('.name-fields').each(function (t) {
                    // console.log();
                    if (field_you[j] == $(this).text()) {
                        $(this).parents('tr').show();
                        $(this).parents('tr').find('input').attr("value", "");
                    }
                });
            }
            ;
            $('#js-my').attr('value', "fiz-sub");
        })
        $('label[for="you"]').click(function () {
            for (var i = field_you.length - 1; i >= 0; i--) {
                $('.name-fields').each(function (t) {
                    // console.log();
                    if (field_you[i] == $(this).text()) {
                        $(this).parents('tr').hide();
                        $(this).parents('tr').find('input').attr("value", "-");
                    }
                });
            }
            ;
            for (var l = field_fiz.length - 1; l >= 0; l--) {
                $('.name-fields').each(function (t) {
                    // console.log();
                    if (field_fiz[l] == $(this).text()) {
                        $(this).parents('tr').show();
                        $(this).parents('tr').find('input').attr("value", "");
                    }
                });
            }
            ;
            $('#js-my').attr('value', "you-sub");
        })
        if ($('.f-check').length > 0) {
            $('.f-check').trigger('click');
        } else {
            $('label[for="fiz"]').trigger('click');
        }
    }
}

window.onload = bxFormOngoing;

/* End */
;
; /* /bitrix/templates/main/js/jquery.2.min.js?147575796084245*/
; /* /bitrix/templates/main/js/bootstrap.min.js?147575796036816*/
; /* /bitrix/templates/main/js/jquery.mousewheel-3.0.6.pack.js?14757579601384*/
; /* /bitrix/templates/main/js/jquery.fancybox.pack.js?147575796023135*/
; /* /bitrix/templates/main/js/jquery-ui.min.js?1475757960156316*/
; /* /bitrix/templates/main/js/amcharts.js?1475757960200058*/
; /* /bitrix/templates/main/js/serial.js?147575796046606*/
; /* /bitrix/templates/main/js/dataloader.min.js?15369242706795*/
; /* /bitrix/templates/main/js/light.js?14757579602914*/
; /* /bitrix/templates/main/js/jquery.inputmask.js?150849299226630*/
; /* /bitrix/templates/main/js/CBUJQ.js?157554771520493*/
