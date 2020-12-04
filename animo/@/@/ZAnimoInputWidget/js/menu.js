! function(e, t) {
 "object" == typeof module && "object" == typeof module.exports ? module.exports = e.document ? t(e, !0) : function(e) {
  if (!e.document) throw new Error("jQuery requires a window with a document");
  return t(e)
 } : t(e)
}("undefined" != typeof window ? window : this, function(e, t) {
 function i(e) {
  var t = "length" in e && e.length,
   i = K.type(e);
  return "function" !== i && !K.isWindow(e) && (!(1 !== e.nodeType || !t) || ("array" === i || 0 === t || "number" == typeof t && t > 0 && t - 1 in e))
 }

 function n(e, t, i) {
  if (K.isFunction(t)) return K.grep(e, function(e, n) {
   return !!t.call(e, n, e) !== i
  });
  if (t.nodeType) return K.grep(e, function(e) {
   return e === t !== i
  });
  if ("string" == typeof t) {
   if (ae.test(t)) return K.filter(t, e, i);
   t = K.filter(t, e)
  }
  return K.grep(e, function(e) {
   return U.call(t, e) >= 0 !== i
  })
 }

 function o(e, t) {
  for (;
   (e = e[t]) && 1 !== e.nodeType;);
  return e
 }

 function r(e) {
  var t = pe[e] = {};
  return K.each(e.match(he) || [], function(e, i) {
   t[i] = !0
  }), t
 }

 function s() {
  G.removeEventListener("DOMContentLoaded", s, !1), e.removeEventListener("load", s, !1), K.ready()
 }

 function a() {
  Object.defineProperty(this.cache = {}, 0, {
   get: function() {
    return {}
   }
  }), this.expando = K.expando + a.uid++
 }

 function l(e, t, i) {
  var n;
  if (void 0 === i && 1 === e.nodeType)
   if (n = "data-" + t.replace(be, "-$1").toLowerCase(), "string" == typeof(i = e.getAttribute(n))) {
    try {
     i = "true" === i || "false" !== i && ("null" === i ? null : +i + "" === i ? +i : ye.test(i) ? K.parseJSON(i) : i)
    } catch (e) {}
    ge.set(e, t, i)
   } else i = void 0;
  return i
 }

 function c() {
  return !0
 }

 function d() {
  return !1
 }

 function u() {
  try {
   return G.activeElement
  } catch (e) {}
 }

 function h(e, t) {
  return K.nodeName(e, "table") && K.nodeName(11 !== t.nodeType ? t : t.firstChild, "tr") ? e.getElementsByTagName("tbody")[0] || e.appendChild(e.ownerDocument.createElement("tbody")) : e
 }

 function p(e) {
  return e.type = (null !== e.getAttribute("type")) + "/" + e.type, e
 }

 function f(e) {
  var t = De.exec(e.type);
  return t ? e.type = t[1] : e.removeAttribute("type"), e
 }

 function m(e, t) {
  for (var i = 0, n = e.length; n > i; i++) ve.set(e[i], "globalEval", !t || ve.get(t[i], "globalEval"))
 }

 function v(e, t) {
  var i, n, o, r, s, a, l, c;
  if (1 === t.nodeType) {
   if (ve.hasData(e) && (r = ve.access(e), s = ve.set(t, r), c = r.events)) {
    delete s.handle, s.events = {};
    for (o in c)
     for (i = 0, n = c[o].length; n > i; i++) K.event.add(t, o, c[o][i])
   }
   ge.hasData(e) && (a = ge.access(e), l = K.extend({}, a), ge.set(t, l))
  }
 }

 function g(e, t) {
  var i = e.getElementsByTagName ? e.getElementsByTagName(t || "*") : e.querySelectorAll ? e.querySelectorAll(t || "*") : [];
  return void 0 === t || t && K.nodeName(e, t) ? K.merge([e], i) : i
 }

 function y(e, t) {
  var i = t.nodeName.toLowerCase();
  "input" === i && ke.test(e.type) ? t.checked = e.checked : ("input" === i || "textarea" === i) && (t.defaultValue = e.defaultValue)
 }

 function b(t, i) {
  var n, o = K(i.createElement(t)).appendTo(i.body),
   r = e.getDefaultComputedStyle && (n = e.getDefaultComputedStyle(o[0])) ? n.display : K.css(o[0], "display");
  return o.detach(), r
 }

 function w(e) {
  var t = G,
   i = Oe[e];
  return i || (i = b(e, t), "none" !== i && i || (Ie = (Ie || K("<iframe frameborder='0' width='0' height='0'/>")).appendTo(t.documentElement), t = Ie[0].contentDocument, t.write(), t.close(), i = b(e, t), Ie.detach()), Oe[e] = i), i
 }

 function x(e, t, i) {
  var n, o, r, s, a = e.style;
  return i = i || Ve(e), i && (s = i.getPropertyValue(t) || i[t]), i && ("" !== s || K.contains(e.ownerDocument, e) || (s = K.style(e, t)), Re.test(s) && ze.test(t) && (n = a.width, o = a.minWidth, r = a.maxWidth, a.minWidth = a.maxWidth = a.width = s, s = i.width, a.width = n, a.minWidth = o, a.maxWidth = r)), void 0 !== s ? s + "" : s
 }

 function C(e, t) {
  return {
   get: function() {
    return e() ? void delete this.get : (this.get = t).apply(this, arguments)
   }
  }
 }

 function k(e, t) {
  if (t in e) return t;
  for (var i = t[0].toUpperCase() + t.slice(1), n = t, o = Xe.length; o--;)
   if ((t = Xe[o] + i) in e) return t;
  return n
 }

 function T(e, t, i) {
  var n = We.exec(t);
  return n ? Math.max(0, n[1] - (i || 0)) + (n[2] || "px") : t
 }

 function S(e, t, i, n, o) {
  for (var r = i === (n ? "border" : "content") ? 4 : "width" === t ? 1 : 0, s = 0; 4 > r; r += 2) "margin" === i && (s += K.css(e, i + xe[r], !0, o)), n ? ("content" === i && (s -= K.css(e, "padding" + xe[r], !0, o)), "margin" !== i && (s -= K.css(e, "border" + xe[r] + "Width", !0, o))) : (s += K.css(e, "padding" + xe[r], !0, o), "padding" !== i && (s += K.css(e, "border" + xe[r] + "Width", !0, o)));
  return s
 }

 function $(e, t, i) {
  var n = !0,
   o = "width" === t ? e.offsetWidth : e.offsetHeight,
   r = Ve(e),
   s = "border-box" === K.css(e, "boxSizing", !1, r);
  if (0 >= o || null == o) {
   if (o = x(e, t, r), (0 > o || null == o) && (o = e.style[t]), Re.test(o)) return o;
   n = s && (Z.boxSizingReliable() || o === e.style[t]), o = parseFloat(o) || 0
  }
  return o + S(e, t, i || (s ? "border" : "content"), n, r) + "px"
 }

 function P(e, t) {
  for (var i, n, o, r = [], s = 0, a = e.length; a > s; s++) n = e[s], n.style && (r[s] = ve.get(n, "olddisplay"), i = n.style.display, t ? (r[s] || "none" !== i || (n.style.display = ""), "" === n.style.display && Ce(n) && (r[s] = ve.access(n, "olddisplay", w(n.nodeName)))) : (o = Ce(n), "none" === i && o || ve.set(n, "olddisplay", o ? i : K.css(n, "display"))));
  for (s = 0; a > s; s++) n = e[s], n.style && (t && "none" !== n.style.display && "" !== n.style.display || (n.style.display = t ? r[s] || "" : "none"));
  return e
 }

 function A(e, t, i, n, o) {
  return new A.prototype.init(e, t, i, n, o)
 }

 function E() {
  return setTimeout(function() {
   Ye = void 0
  }), Ye = K.now()
 }

 function j(e, t) {
  var i, n = 0,
   o = {
    height: e
   };
  for (t = t ? 1 : 0; 4 > n; n += 2 - t) i = xe[n], o["margin" + i] = o["padding" + i] = e;
  return t && (o.opacity = o.width = e), o
 }

 function F(e, t, i) {
  for (var n, o = (tt[t] || []).concat(tt["*"]), r = 0, s = o.length; s > r; r++)
   if (n = o[r].call(i, t, e)) return n
 }

 function L(e, t, i) {
  var n, o, r, s, a, l, c, d = this,
   u = {},
   h = e.style,
   p = e.nodeType && Ce(e),
   f = ve.get(e, "fxshow");
  i.queue || (a = K._queueHooks(e, "fx"), null == a.unqueued && (a.unqueued = 0, l = a.empty.fire, a.empty.fire = function() {
   a.unqueued || l()
  }), a.unqueued++, d.always(function() {
   d.always(function() {
    a.unqueued--, K.queue(e, "fx").length || a.empty.fire()
   })
  })), 1 === e.nodeType && ("height" in t || "width" in t) && (i.overflow = [h.overflow, h.overflowX, h.overflowY], c = K.css(e, "display"), "inline" === ("none" === c ? ve.get(e, "olddisplay") || w(e.nodeName) : c) && "none" === K.css(e, "float") && (h.display = "inline-block")), i.overflow && (h.overflow = "hidden", d.always(function() {
   h.overflow = i.overflow[0], h.overflowX = i.overflow[1], h.overflowY = i.overflow[2]
  }));
  for (n in t)
   if (o = t[n], Ge.exec(o)) {
    if (delete t[n], r = r || "toggle" === o, o === (p ? "hide" : "show")) {
     if ("show" !== o || !f || void 0 === f[n]) continue;
     p = !0
    }
    u[n] = f && f[n] || K.style(e, n)
   } else c = void 0;
  if (K.isEmptyObject(u)) "inline" === ("none" === c ? w(e.nodeName) : c) && (h.display = c);
  else {
   f ? "hidden" in f && (p = f.hidden) : f = ve.access(e, "fxshow", {}), r && (f.hidden = !p), p ? K(e).show() : d.done(function() {
    K(e).hide()
   }), d.done(function() {
    var t;
    ve.remove(e, "fxshow");
    for (t in u) K.style(e, t, u[t])
   });
   for (n in u) s = F(p ? f[n] : 0, n, d), n in f || (f[n] = s.start, p && (s.end = s.start, s.start = "width" === n || "height" === n ? 1 : 0))
  }
 }

 function _(e, t) {
  var i, n, o, r, s;
  for (i in e)
   if (n = K.camelCase(i), o = t[n], r = e[i], K.isArray(r) && (o = r[1], r = e[i] = r[0]), i !== n && (e[n] = r, delete e[i]), (s = K.cssHooks[n]) && "expand" in s) {
    r = s.expand(r), delete e[n];
    for (i in r) i in e || (e[i] = r[i], t[i] = o)
   } else t[n] = o
 }

 function N(e, t, i) {
  var n, o, r = 0,
   s = et.length,
   a = K.Deferred().always(function() {
    delete l.elem
   }),
   l = function() {
    if (o) return !1;
    for (var t = Ye || E(), i = Math.max(0, c.startTime + c.duration - t), n = i / c.duration || 0, r = 1 - n, s = 0, l = c.tweens.length; l > s; s++) c.tweens[s].run(r);
    return a.notifyWith(e, [c, r, i]), 1 > r && l ? i : (a.resolveWith(e, [c]), !1)
   },
   c = a.promise({
    elem: e,
    props: K.extend({}, t),
    opts: K.extend(!0, {
     specialEasing: {}
    }, i),
    originalProperties: t,
    originalOptions: i,
    startTime: Ye || E(),
    duration: i.duration,
    tweens: [],
    createTween: function(t, i) {
     var n = K.Tween(e, c.opts, t, i, c.opts.specialEasing[t] || c.opts.easing);
     return c.tweens.push(n), n
    },
    stop: function(t) {
     var i = 0,
      n = t ? c.tweens.length : 0;
     if (o) return this;
     for (o = !0; n > i; i++) c.tweens[i].run(1);
     return t ? a.resolveWith(e, [c, t]) : a.rejectWith(e, [c, t]), this
    }
   }),
   d = c.props;
  for (_(d, c.opts.specialEasing); s > r; r++)
   if (n = et[r].call(c, e, d, c.opts)) return n;
  return K.map(d, F, c), K.isFunction(c.opts.start) && c.opts.start.call(e, c), K.fx.timer(K.extend(l, {
   elem: e,
   anim: c,
   queue: c.opts.queue
  })), c.progress(c.opts.progress).done(c.opts.done, c.opts.complete).fail(c.opts.fail).always(c.opts.always)
 }

 function D(e) {
  return function(t, i) {
   "string" != typeof t && (i = t, t = "*");
   var n, o = 0,
    r = t.toLowerCase().match(he) || [];
   if (K.isFunction(i))
    for (; n = r[o++];) "+" === n[0] ? (n = n.slice(1) || "*", (e[n] = e[n] || []).unshift(i)) : (e[n] = e[n] || []).push(i)
  }
 }

 function M(e, t, i, n) {
  function o(a) {
   var l;
   return r[a] = !0, K.each(e[a] || [], function(e, a) {
    var c = a(t, i, n);
    return "string" != typeof c || s || r[c] ? s ? !(l = c) : void 0 : (t.dataTypes.unshift(c), o(c), !1)
   }), l
  }
  var r = {},
   s = e === gt;
  return o(t.dataTypes[0]) || !r["*"] && o("*")
 }

 function H(e, t) {
  var i, n, o = K.ajaxSettings.flatOptions || {};
  for (i in t) void 0 !== t[i] && ((o[i] ? e : n || (n = {}))[i] = t[i]);
  return n && K.extend(!0, e, n), e
 }

 function I(e, t, i) {
  for (var n, o, r, s, a = e.contents, l = e.dataTypes;
   "*" === l[0];) l.shift(), void 0 === n && (n = e.mimeType || t.getResponseHeader("Content-Type"));
  if (n)
   for (o in a)
    if (a[o] && a[o].test(n)) {
     l.unshift(o);
     break
    } if (l[0] in i) r = l[0];
  else {
   for (o in i) {
    if (!l[0] || e.converters[o + " " + l[0]]) {
     r = o;
     break
    }
    s || (s = o)
   }
   r = r || s
  }
  return r ? (r !== l[0] && l.unshift(r), i[r]) : void 0
 }

 function O(e, t, i, n) {
  var o, r, s, a, l, c = {},
   d = e.dataTypes.slice();
  if (d[1])
   for (s in e.converters) c[s.toLowerCase()] = e.converters[s];
  for (r = d.shift(); r;)
   if (e.responseFields[r] && (i[e.responseFields[r]] = t), !l && n && e.dataFilter && (t = e.dataFilter(t, e.dataType)), l = r, r = d.shift())
    if ("*" === r) r = l;
    else if ("*" !== l && l !== r) {
   if (!(s = c[l + " " + r] || c["* " + r]))
    for (o in c)
     if (a = o.split(" "), a[1] === r && (s = c[l + " " + a[0]] || c["* " + a[0]])) {
      !0 === s ? s = c[o] : !0 !== c[o] && (r = a[0], d.unshift(a[1]));
      break
     } if (!0 !== s)
    if (s && e.throws) t = s(t);
    else try {
     t = s(t)
    } catch (e) {
     return {
      state: "parsererror",
      error: s ? e : "No conversion from " + l + " to " + r
     }
    }
  }
  return {
   state: "success",
   data: t
  }
 }

 function z(e, t, i, n) {
  var o;
  if (K.isArray(t)) K.each(t, function(t, o) {
   i || Ct.test(e) ? n(e, o) : z(e + "[" + ("object" == typeof o ? t : "") + "]", o, i, n)
  });
  else if (i || "object" !== K.type(t)) n(e, t);
  else
   for (o in t) z(e + "[" + o + "]", t[o], i, n)
 }

 function R(e) {
  return K.isWindow(e) ? e : 9 === e.nodeType && e.defaultView
 }
 var V = [],
  q = V.slice,
  W = V.concat,
  B = V.push,
  U = V.indexOf,
  Q = {},
  X = Q.toString,
  Y = Q.hasOwnProperty,
  Z = {},
  G = e.document,
  J = "2.1.4",
  K = function(e, t) {
   return new K.fn.init(e, t)
  },
  ee = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,
  te = /^-ms-/,
  ie = /-([\da-z])/gi,
  ne = function(e, t) {
   return t.toUpperCase()
  };
 K.fn = K.prototype = {
  jquery: J,
  constructor: K,
  selector: "",
  length: 0,
  toArray: function() {
   return q.call(this)
  },
  get: function(e) {
   return null != e ? 0 > e ? this[e + this.length] : this[e] : q.call(this)
  },
  pushStack: function(e) {
   var t = K.merge(this.constructor(), e);
   return t.prevObject = this, t.context = this.context, t
  },
  each: function(e, t) {
   return K.each(this, e, t)
  },
  map: function(e) {
   return this.pushStack(K.map(this, function(t, i) {
    return e.call(t, i, t)
   }))
  },
  slice: function() {
   return this.pushStack(q.apply(this, arguments))
  },
  first: function() {
   return this.eq(0)
  },
  last: function() {
   return this.eq(-1)
  },
  eq: function(e) {
   var t = this.length,
    i = +e + (0 > e ? t : 0);
   return this.pushStack(i >= 0 && t > i ? [this[i]] : [])
  },
  end: function() {
   return this.prevObject || this.constructor(null)
  },
  push: B,
  sort: V.sort,
  splice: V.splice
 }, K.extend = K.fn.extend = function() {
  var e, t, i, n, o, r, s = arguments[0] || {},
   a = 1,
   l = arguments.length,
   c = !1;
  for ("boolean" == typeof s && (c = s, s = arguments[a] || {}, a++), "object" == typeof s || K.isFunction(s) || (s = {}), a === l && (s = this, a--); l > a; a++)
   if (null != (e = arguments[a]))
    for (t in e) i = s[t], n = e[t], s !== n && (c && n && (K.isPlainObject(n) || (o = K.isArray(n))) ? (o ? (o = !1, r = i && K.isArray(i) ? i : []) : r = i && K.isPlainObject(i) ? i : {}, s[t] = K.extend(c, r, n)) : void 0 !== n && (s[t] = n));
  return s
 }, K.extend({
  expando: "jQuery" + (J + Math.random()).replace(/\D/g, ""),
  isReady: !0,
  error: function(e) {
   throw new Error(e)
  },
  noop: function() {},
  isFunction: function(e) {
   return "function" === K.type(e)
  },
  isArray: Array.isArray,
  isWindow: function(e) {
   return null != e && e === e.window
  },
  isNumeric: function(e) {
   return !K.isArray(e) && e - parseFloat(e) + 1 >= 0
  },
  isPlainObject: function(e) {
   return "object" === K.type(e) && !e.nodeType && !K.isWindow(e) && !(e.constructor && !Y.call(e.constructor.prototype, "isPrototypeOf"))
  },
  isEmptyObject: function(e) {
   var t;
   for (t in e) return !1;
   return !0
  },
  type: function(e) {
   return null == e ? e + "" : "object" == typeof e || "function" == typeof e ? Q[X.call(e)] || "object" : typeof e
  },
  globalEval: function(e) {
   var t, i = eval;
   (e = K.trim(e)) && (1 === e.indexOf("use strict") ? (t = G.createElement("script"), t.text = e, G.head.appendChild(t).parentNode.removeChild(t)) : i(e))
  },
  camelCase: function(e) {
   return e.replace(te, "ms-").replace(ie, ne)
  },
  nodeName: function(e, t) {
   return e.nodeName && e.nodeName.toLowerCase() === t.toLowerCase()
  },
  each: function(e, t, n) {
   var o = 0,
    r = e.length,
    s = i(e);
   if (n) {
    if (s)
     for (; r > o && !1 !== t.apply(e[o], n); o++);
    else
     for (o in e)
      if (!1 === t.apply(e[o], n)) break
   } else if (s)
    for (; r > o && !1 !== t.call(e[o], o, e[o]); o++);
   else
    for (o in e)
     if (!1 === t.call(e[o], o, e[o])) break;
   return e
  },
  trim: function(e) {
   return null == e ? "" : (e + "").replace(ee, "")
  },
  makeArray: function(e, t) {
   var n = t || [];
   return null != e && (i(Object(e)) ? K.merge(n, "string" == typeof e ? [e] : e) : B.call(n, e)), n
  },
  inArray: function(e, t, i) {
   return null == t ? -1 : U.call(t, e, i)
  },
  merge: function(e, t) {
   for (var i = +t.length, n = 0, o = e.length; i > n; n++) e[o++] = t[n];
   return e.length = o, e
  },
  grep: function(e, t, i) {
   for (var n = [], o = 0, r = e.length, s = !i; r > o; o++) !t(e[o], o) !== s && n.push(e[o]);
   return n
  },
  map: function(e, t, n) {
   var o, r = 0,
    s = e.length,
    a = i(e),
    l = [];
   if (a)
    for (; s > r; r++) null != (o = t(e[r], r, n)) && l.push(o);
   else
    for (r in e) null != (o = t(e[r], r, n)) && l.push(o);
   return W.apply([], l)
  },
  guid: 1,
  proxy: function(e, t) {
   var i, n, o;
   return "string" == typeof t && (i = e[t], t = e, e = i), K.isFunction(e) ? (n = q.call(arguments, 2), o = function() {
    return e.apply(t || this, n.concat(q.call(arguments)))
   }, o.guid = e.guid = e.guid || K.guid++, o) : void 0
  },
  now: Date.now,
  support: Z
 }), K.each("Boolean Number String Function Array Date RegExp Object Error".split(" "), function(e, t) {
  Q["[object " + t + "]"] = t.toLowerCase()
 });
 var oe = function(e) {
  function t(e, t, i, n) {
   var o, r, s, a, c, u, h, p, f, m;
   if ((t ? t.ownerDocument || t : I) !== j && E(t), t = t || j, i = i || [], a = t.nodeType, "string" != typeof e || !e || 1 !== a && 9 !== a && 11 !== a) return i;
   if (!n && L) {
    if (11 !== a && (o = ve.exec(e)))
     if (s = o[1]) {
      if (9 === a) {
       if (!(r = t.getElementById(s)) || !r.parentNode) return i;
       if (r.id === s) return i.push(r), i
      } else if (t.ownerDocument && (r = t.ownerDocument.getElementById(s)) && M(t, r) && r.id === s) return i.push(r), i
     } else {
      if (o[2]) return Z.apply(i, t.getElementsByTagName(e)), i;
      if ((s = o[3]) && b.getElementsByClassName) return Z.apply(i, t.getElementsByClassName(s)), i
     } if (b.qsa && (!_ || !_.test(e))) {
     if (p = h = H, f = t, m = 1 !== a && e, 1 === a && "object" !== t.nodeName.toLowerCase()) {
      for (u = k(e), (h = t.getAttribute("id")) ? p = h.replace(ye, "\\$&") : t.setAttribute("id", p), p = "[id='" + p + "'] ", c = u.length; c--;) u[c] = p + d(u[c]);
      f = ge.test(e) && l(t.parentNode) || t, m = u.join(",")
     }
     if (m) try {
      return Z.apply(i, f.querySelectorAll(m)), i
     } catch (e) {} finally {
      h || t.removeAttribute("id")
     }
    }
   }
   return S(e.replace(se, "$1"), t, i, n)
  }

  function i() {
   function e(i, n) {
    return t.push(i + " ") > w.cacheLength && delete e[t.shift()], e[i + " "] = n
   }
   var t = [];
   return e
  }

  function n(e) {
   return e[H] = !0, e
  }

  function o(e) {
   var t = j.createElement("div");
   try {
    return !!e(t)
   } catch (e) {
    return !1
   } finally {
    t.parentNode && t.parentNode.removeChild(t), t = null
   }
  }

  function r(e, t) {
   for (var i = e.split("|"), n = e.length; n--;) w.attrHandle[i[n]] = t
  }

  function s(e, t) {
   var i = t && e,
    n = i && 1 === e.nodeType && 1 === t.nodeType && (~t.sourceIndex || B) - (~e.sourceIndex || B);
   if (n) return n;
   if (i)
    for (; i = i.nextSibling;)
     if (i === t) return -1;
   return e ? 1 : -1
  }

  function a(e) {
   return n(function(t) {
    return t = +t, n(function(i, n) {
     for (var o, r = e([], i.length, t), s = r.length; s--;) i[o = r[s]] && (i[o] = !(n[o] = i[o]))
    })
   })
  }

  function l(e) {
   return e && void 0 !== e.getElementsByTagName && e
  }

  function c() {}

  function d(e) {
   for (var t = 0, i = e.length, n = ""; i > t; t++) n += e[t].value;
   return n
  }

  function u(e, t, i) {
   var n = t.dir,
    o = i && "parentNode" === n,
    r = z++;
   return t.first ? function(t, i, r) {
    for (; t = t[n];)
     if (1 === t.nodeType || o) return e(t, i, r)
   } : function(t, i, s) {
    var a, l, c = [O, r];
    if (s) {
     for (; t = t[n];)
      if ((1 === t.nodeType || o) && e(t, i, s)) return !0
    } else
     for (; t = t[n];)
      if (1 === t.nodeType || o) {
       if (l = t[H] || (t[H] = {}), (a = l[n]) && a[0] === O && a[1] === r) return c[2] = a[2];
       if (l[n] = c, c[2] = e(t, i, s)) return !0
      }
   }
  }

  function h(e) {
   return e.length > 1 ? function(t, i, n) {
    for (var o = e.length; o--;)
     if (!e[o](t, i, n)) return !1;
    return !0
   } : e[0]
  }

  function p(e, i, n) {
   for (var o = 0, r = i.length; r > o; o++) t(e, i[o], n);
   return n
  }

  function f(e, t, i, n, o) {
   for (var r, s = [], a = 0, l = e.length, c = null != t; l > a; a++)(r = e[a]) && (!i || i(r, n, o)) && (s.push(r), c && t.push(a));
   return s
  }

  function m(e, t, i, o, r, s) {
   return o && !o[H] && (o = m(o)), r && !r[H] && (r = m(r, s)), n(function(n, s, a, l) {
    var c, d, u, h = [],
     m = [],
     v = s.length,
     g = n || p(t || "*", a.nodeType ? [a] : a, []),
     y = !e || !n && t ? g : f(g, h, e, a, l),
     b = i ? r || (n ? e : v || o) ? [] : s : y;
    if (i && i(y, b, a, l), o)
     for (c = f(b, m), o(c, [], a, l), d = c.length; d--;)(u = c[d]) && (b[m[d]] = !(y[m[d]] = u));
    if (n) {
     if (r || e) {
      if (r) {
       for (c = [], d = b.length; d--;)(u = b[d]) && c.push(y[d] = u);
       r(null, b = [], c, l)
      }
      for (d = b.length; d--;)(u = b[d]) && (c = r ? J(n, u) : h[d]) > -1 && (n[c] = !(s[c] = u))
     }
    } else b = f(b === s ? b.splice(v, b.length) : b), r ? r(null, s, b, l) : Z.apply(s, b)
   })
  }

  function v(e) {
   for (var t, i, n, o = e.length, r = w.relative[e[0].type], s = r || w.relative[" "], a = r ? 1 : 0, l = u(function(e) {
     return e === t
    }, s, !0), c = u(function(e) {
     return J(t, e) > -1
    }, s, !0), p = [function(e, i, n) {
     var o = !r && (n || i !== $) || ((t = i).nodeType ? l(e, i, n) : c(e, i, n));
     return t = null, o
    }]; o > a; a++)
    if (i = w.relative[e[a].type]) p = [u(h(p), i)];
    else {
     if (i = w.filter[e[a].type].apply(null, e[a].matches), i[H]) {
      for (n = ++a; o > n && !w.relative[e[n].type]; n++);
      return m(a > 1 && h(p), a > 1 && d(e.slice(0, a - 1).concat({
       value: " " === e[a - 2].type ? "*" : ""
      })).replace(se, "$1"), i, n > a && v(e.slice(a, n)), o > n && v(e = e.slice(n)), o > n && d(e))
     }
     p.push(i)
    } return h(p)
  }

  function g(e, i) {
   var o = i.length > 0,
    r = e.length > 0,
    s = function(n, s, a, l, c) {
     var d, u, h, p = 0,
      m = "0",
      v = n && [],
      g = [],
      y = $,
      b = n || r && w.find.TAG("*", c),
      x = O += null == y ? 1 : Math.random() || .1,
      C = b.length;
     for (c && ($ = s !== j && s); m !== C && null != (d = b[m]); m++) {
      if (r && d) {
       for (u = 0; h = e[u++];)
        if (h(d, s, a)) {
         l.push(d);
         break
        } c && (O = x)
      }
      o && ((d = !h && d) && p--, n && v.push(d))
     }
     if (p += m, o && m !== p) {
      for (u = 0; h = i[u++];) h(v, g, s, a);
      if (n) {
       if (p > 0)
        for (; m--;) v[m] || g[m] || (g[m] = X.call(l));
       g = f(g)
      }
      Z.apply(l, g), c && !n && g.length > 0 && p + i.length > 1 && t.uniqueSort(l)
     }
     return c && (O = x, $ = y), v
    };
   return o ? n(s) : s
  }
  var y, b, w, x, C, k, T, S, $, P, A, E, j, F, L, _, N, D, M, H = "sizzle" + 1 * new Date,
   I = e.document,
   O = 0,
   z = 0,
   R = i(),
   V = i(),
   q = i(),
   W = function(e, t) {
    return e === t && (A = !0), 0
   },
   B = 1 << 31,
   U = {}.hasOwnProperty,
   Q = [],
   X = Q.pop,
   Y = Q.push,
   Z = Q.push,
   G = Q.slice,
   J = function(e, t) {
    for (var i = 0, n = e.length; n > i; i++)
     if (e[i] === t) return i;
    return -1
   },
   K = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
   ee = "[\\x20\\t\\r\\n\\f]",
   te = "(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+",
   ie = te.replace("w", "w#"),
   ne = "\\[" + ee + "*(" + te + ")(?:" + ee + "*([*^$|!~]?=)" + ee + "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + ie + "))|)" + ee + "*\\]",
   oe = ":(" + te + ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" + ne + ")*)|.*)\\)|)",
   re = new RegExp(ee + "+", "g"),
   se = new RegExp("^" + ee + "+|((?:^|[^\\\\])(?:\\\\.)*)" + ee + "+$", "g"),
   ae = new RegExp("^" + ee + "*," + ee + "*"),
   le = new RegExp("^" + ee + "*([>+~]|" + ee + ")" + ee + "*"),
   ce = new RegExp("=" + ee + "*([^\\]'\"]*?)" + ee + "*\\]", "g"),
   de = new RegExp(oe),
   ue = new RegExp("^" + ie + "$"),
   he = {
    ID: new RegExp("^#(" + te + ")"),
    CLASS: new RegExp("^\\.(" + te + ")"),
    TAG: new RegExp("^(" + te.replace("w", "w*") + ")"),
    ATTR: new RegExp("^" + ne),
    PSEUDO: new RegExp("^" + oe),
    CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + ee + "*(even|odd|(([+-]|)(\\d*)n|)" + ee + "*(?:([+-]|)" + ee + "*(\\d+)|))" + ee + "*\\)|)", "i"),
    bool: new RegExp("^(?:" + K + ")$", "i"),
    needsContext: new RegExp("^" + ee + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + ee + "*((?:-\\d)?\\d*)" + ee + "*\\)|)(?=[^-]|$)", "i")
   },
   pe = /^(?:input|select|textarea|button)$/i,
   fe = /^h\d$/i,
   me = /^[^{]+\{\s*\[native \w/,
   ve = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,
   ge = /[+~]/,
   ye = /'|\\/g,
   be = new RegExp("\\\\([\\da-f]{1,6}" + ee + "?|(" + ee + ")|.)", "ig"),
   we = function(e, t, i) {
    var n = "0x" + t - 65536;
    return n !== n || i ? t : 0 > n ? String.fromCharCode(n + 65536) : String.fromCharCode(n >> 10 | 55296, 1023 & n | 56320)
   },
   xe = function() {
    E()
   };
  try {
   Z.apply(Q = G.call(I.childNodes), I.childNodes), Q[I.childNodes.length].nodeType
  } catch (e) {
   Z = {
    apply: Q.length ? function(e, t) {
     Y.apply(e, G.call(t))
    } : function(e, t) {
     for (var i = e.length, n = 0; e[i++] = t[n++];);
     e.length = i - 1
    }
   }
  }
  b = t.support = {}, C = t.isXML = function(e) {
   var t = e && (e.ownerDocument || e).documentElement;
   return !!t && "HTML" !== t.nodeName
  }, E = t.setDocument = function(e) {
   var t, i, n = e ? e.ownerDocument || e : I;
   return n !== j && 9 === n.nodeType && n.documentElement ? (j = n, F = n.documentElement, i = n.defaultView, i && i !== i.top && (i.addEventListener ? i.addEventListener("unload", xe, !1) : i.attachEvent && i.attachEvent("onunload", xe)), L = !C(n), b.attributes = o(function(e) {
    return e.className = "i", !e.getAttribute("className")
   }), b.getElementsByTagName = o(function(e) {
    return e.appendChild(n.createComment("")), !e.getElementsByTagName("*").length
   }), b.getElementsByClassName = me.test(n.getElementsByClassName), b.getById = o(function(e) {
    return F.appendChild(e).id = H, !n.getElementsByName || !n.getElementsByName(H).length
   }), b.getById ? (w.find.ID = function(e, t) {
    if (void 0 !== t.getElementById && L) {
     var i = t.getElementById(e);
     return i && i.parentNode ? [i] : []
    }
   }, w.filter.ID = function(e) {
    var t = e.replace(be, we);
    return function(e) {
     return e.getAttribute("id") === t
    }
   }) : (delete w.find.ID, w.filter.ID = function(e) {
    var t = e.replace(be, we);
    return function(e) {
     var i = void 0 !== e.getAttributeNode && e.getAttributeNode("id");
     return i && i.value === t
    }
   }), w.find.TAG = b.getElementsByTagName ? function(e, t) {
    return void 0 !== t.getElementsByTagName ? t.getElementsByTagName(e) : b.qsa ? t.querySelectorAll(e) : void 0
   } : function(e, t) {
    var i, n = [],
     o = 0,
     r = t.getElementsByTagName(e);
    if ("*" === e) {
     for (; i = r[o++];) 1 === i.nodeType && n.push(i);
     return n
    }
    return r
   }, w.find.CLASS = b.getElementsByClassName && function(e, t) {
    return L ? t.getElementsByClassName(e) : void 0
   }, N = [], _ = [], (b.qsa = me.test(n.querySelectorAll)) && (o(function(e) {
    F.appendChild(e).innerHTML = "<a id='" + H + "'></a><select id='" + H + "-\f]' msallowcapture=''><option selected=''></option></select>", e.querySelectorAll("[msallowcapture^='']").length && _.push("[*^$]=" + ee + "*(?:''|\"\")"), e.querySelectorAll("[selected]").length || _.push("\\[" + ee + "*(?:value|" + K + ")"), e.querySelectorAll("[id~=" + H + "-]").length || _.push("~="), e.querySelectorAll(":checked").length || _.push(":checked"), e.querySelectorAll("a#" + H + "+*").length || _.push(".#.+[+~]")
   }), o(function(e) {
    var t = n.createElement("input");
    t.setAttribute("type", "hidden"), e.appendChild(t).setAttribute("name", "D"), e.querySelectorAll("[name=d]").length && _.push("name" + ee + "*[*^$|!~]?="), e.querySelectorAll(":enabled").length || _.push(":enabled", ":disabled"), e.querySelectorAll("*,:x"), _.push(",.*:")
   })), (b.matchesSelector = me.test(D = F.matches || F.webkitMatchesSelector || F.mozMatchesSelector || F.oMatchesSelector || F.msMatchesSelector)) && o(function(e) {
    b.disconnectedMatch = D.call(e, "div"), D.call(e, "[s!='']:x"), N.push("!=", oe)
   }), _ = _.length && new RegExp(_.join("|")), N = N.length && new RegExp(N.join("|")), t = me.test(F.compareDocumentPosition), M = t || me.test(F.contains) ? function(e, t) {
    var i = 9 === e.nodeType ? e.documentElement : e,
     n = t && t.parentNode;
    return e === n || !(!n || 1 !== n.nodeType || !(i.contains ? i.contains(n) : e.compareDocumentPosition && 16 & e.compareDocumentPosition(n)))
   } : function(e, t) {
    if (t)
     for (; t = t.parentNode;)
      if (t === e) return !0;
    return !1
   }, W = t ? function(e, t) {
    if (e === t) return A = !0, 0;
    var i = !e.compareDocumentPosition - !t.compareDocumentPosition;
    return i || (i = (e.ownerDocument || e) === (t.ownerDocument || t) ? e.compareDocumentPosition(t) : 1, 1 & i || !b.sortDetached && t.compareDocumentPosition(e) === i ? e === n || e.ownerDocument === I && M(I, e) ? -1 : t === n || t.ownerDocument === I && M(I, t) ? 1 : P ? J(P, e) - J(P, t) : 0 : 4 & i ? -1 : 1)
   } : function(e, t) {
    if (e === t) return A = !0, 0;
    var i, o = 0,
     r = e.parentNode,
     a = t.parentNode,
     l = [e],
     c = [t];
    if (!r || !a) return e === n ? -1 : t === n ? 1 : r ? -1 : a ? 1 : P ? J(P, e) - J(P, t) : 0;
    if (r === a) return s(e, t);
    for (i = e; i = i.parentNode;) l.unshift(i);
    for (i = t; i = i.parentNode;) c.unshift(i);
    for (; l[o] === c[o];) o++;
    return o ? s(l[o], c[o]) : l[o] === I ? -1 : c[o] === I ? 1 : 0
   }, n) : j
  }, t.matches = function(e, i) {
   return t(e, null, null, i)
  }, t.matchesSelector = function(e, i) {
   if ((e.ownerDocument || e) !== j && E(e), i = i.replace(ce, "='$1']"), !(!b.matchesSelector || !L || N && N.test(i) || _ && _.test(i))) try {
    var n = D.call(e, i);
    if (n || b.disconnectedMatch || e.document && 11 !== e.document.nodeType) return n
   } catch (e) {}
   return t(i, j, null, [e]).length > 0
  }, t.contains = function(e, t) {
   return (e.ownerDocument || e) !== j && E(e), M(e, t)
  }, t.attr = function(e, t) {
   (e.ownerDocument || e) !== j && E(e);
   var i = w.attrHandle[t.toLowerCase()],
    n = i && U.call(w.attrHandle, t.toLowerCase()) ? i(e, t, !L) : void 0;
   return void 0 !== n ? n : b.attributes || !L ? e.getAttribute(t) : (n = e.getAttributeNode(t)) && n.specified ? n.value : null
  }, t.error = function(e) {
   throw new Error("Syntax error, unrecognized expression: " + e)
  }, t.uniqueSort = function(e) {
   var t, i = [],
    n = 0,
    o = 0;
   if (A = !b.detectDuplicates, P = !b.sortStable && e.slice(0), e.sort(W), A) {
    for (; t = e[o++];) t === e[o] && (n = i.push(o));
    for (; n--;) e.splice(i[n], 1)
   }
   return P = null, e
  }, x = t.getText = function(e) {
   var t, i = "",
    n = 0,
    o = e.nodeType;
   if (o) {
    if (1 === o || 9 === o || 11 === o) {
     if ("string" == typeof e.textContent) return e.textContent;
     for (e = e.firstChild; e; e = e.nextSibling) i += x(e)
    } else if (3 === o || 4 === o) return e.nodeValue
   } else
    for (; t = e[n++];) i += x(t);
   return i
  }, w = t.selectors = {
   cacheLength: 50,
   createPseudo: n,
   match: he,
   attrHandle: {},
   find: {},
   relative: {
    ">": {
     dir: "parentNode",
     first: !0
    },
    " ": {
     dir: "parentNode"
    },
    "+": {
     dir: "previousSibling",
     first: !0
    },
    "~": {
     dir: "previousSibling"
    }
   },
   preFilter: {
    ATTR: function(e) {
     return e[1] = e[1].replace(be, we), e[3] = (e[3] || e[4] || e[5] || "").replace(be, we), "~=" === e[2] && (e[3] = " " + e[3] + " "), e.slice(0, 4)
    },
    CHILD: function(e) {
     return e[1] = e[1].toLowerCase(), "nth" === e[1].slice(0, 3) ? (e[3] || t.error(e[0]), e[4] = +(e[4] ? e[5] + (e[6] || 1) : 2 * ("even" === e[3] || "odd" === e[3])), e[5] = +(e[7] + e[8] || "odd" === e[3])) : e[3] && t.error(e[0]), e
    },
    PSEUDO: function(e) {
     var t, i = !e[6] && e[2];
     return he.CHILD.test(e[0]) ? null : (e[3] ? e[2] = e[4] || e[5] || "" : i && de.test(i) && (t = k(i, !0)) && (t = i.indexOf(")", i.length - t) - i.length) && (e[0] = e[0].slice(0, t), e[2] = i.slice(0, t)), e.slice(0, 3))
    }
   },
   filter: {
    TAG: function(e) {
     var t = e.replace(be, we).toLowerCase();
     return "*" === e ? function() {
      return !0
     } : function(e) {
      return e.nodeName && e.nodeName.toLowerCase() === t
     }
    },
    CLASS: function(e) {
     var t = R[e + " "];
     return t || (t = new RegExp("(^|" + ee + ")" + e + "(" + ee + "|$)")) && R(e, function(e) {
      return t.test("string" == typeof e.className && e.className || void 0 !== e.getAttribute && e.getAttribute("class") || "")
     })
    },
    ATTR: function(e, i, n) {
     return function(o) {
      var r = t.attr(o, e);
      return null == r ? "!=" === i : !i || (r += "", "=" === i ? r === n : "!=" === i ? r !== n : "^=" === i ? n && 0 === r.indexOf(n) : "*=" === i ? n && r.indexOf(n) > -1 : "$=" === i ? n && r.slice(-n.length) === n : "~=" === i ? (" " + r.replace(re, " ") + " ").indexOf(n) > -1 : "|=" === i && (r === n || r.slice(0, n.length + 1) === n + "-"))
     }
    },
    CHILD: function(e, t, i, n, o) {
     var r = "nth" !== e.slice(0, 3),
      s = "last" !== e.slice(-4),
      a = "of-type" === t;
     return 1 === n && 0 === o ? function(e) {
      return !!e.parentNode
     } : function(t, i, l) {
      var c, d, u, h, p, f, m = r !== s ? "nextSibling" : "previousSibling",
       v = t.parentNode,
       g = a && t.nodeName.toLowerCase(),
       y = !l && !a;
      if (v) {
       if (r) {
        for (; m;) {
         for (u = t; u = u[m];)
          if (a ? u.nodeName.toLowerCase() === g : 1 === u.nodeType) return !1;
         f = m = "only" === e && !f && "nextSibling"
        }
        return !0
       }
       if (f = [s ? v.firstChild : v.lastChild], s && y) {
        for (d = v[H] || (v[H] = {}), c = d[e] || [], p = c[0] === O && c[1], h = c[0] === O && c[2], u = p && v.childNodes[p]; u = ++p && u && u[m] || (h = p = 0) || f.pop();)
         if (1 === u.nodeType && ++h && u === t) {
          d[e] = [O, p, h];
          break
         }
       } else if (y && (c = (t[H] || (t[H] = {}))[e]) && c[0] === O) h = c[1];
       else
        for (;
         (u = ++p && u && u[m] || (h = p = 0) || f.pop()) && ((a ? u.nodeName.toLowerCase() !== g : 1 !== u.nodeType) || !++h || (y && ((u[H] || (u[H] = {}))[e] = [O, h]), u !== t)););
       return (h -= o) === n || h % n == 0 && h / n >= 0
      }
     }
    },
    PSEUDO: function(e, i) {
     var o, r = w.pseudos[e] || w.setFilters[e.toLowerCase()] || t.error("unsupported pseudo: " + e);
     return r[H] ? r(i) : r.length > 1 ? (o = [e, e, "", i], w.setFilters.hasOwnProperty(e.toLowerCase()) ? n(function(e, t) {
      for (var n, o = r(e, i), s = o.length; s--;) n = J(e, o[s]), e[n] = !(t[n] = o[s])
     }) : function(e) {
      return r(e, 0, o)
     }) : r
    }
   },
   pseudos: {
    not: n(function(e) {
     var t = [],
      i = [],
      o = T(e.replace(se, "$1"));
     return o[H] ? n(function(e, t, i, n) {
      for (var r, s = o(e, null, n, []), a = e.length; a--;)(r = s[a]) && (e[a] = !(t[a] = r))
     }) : function(e, n, r) {
      return t[0] = e, o(t, null, r, i), t[0] = null, !i.pop()
     }
    }),
    has: n(function(e) {
     return function(i) {
      return t(e, i).length > 0
     }
    }),
    contains: n(function(e) {
     return e = e.replace(be, we),
      function(t) {
       return (t.textContent || t.innerText || x(t)).indexOf(e) > -1
      }
    }),
    lang: n(function(e) {
     return ue.test(e || "") || t.error("unsupported lang: " + e), e = e.replace(be, we).toLowerCase(),
      function(t) {
       var i;
       do {
        if (i = L ? t.lang : t.getAttribute("xml:lang") || t.getAttribute("lang")) return (i = i.toLowerCase()) === e || 0 === i.indexOf(e + "-")
       } while ((t = t.parentNode) && 1 === t.nodeType);
       return !1
      }
    }),
    target: function(t) {
     var i = e.location && e.location.hash;
     return i && i.slice(1) === t.id
    },
    root: function(e) {
     return e === F
    },
    focus: function(e) {
     return e === j.activeElement && (!j.hasFocus || j.hasFocus()) && !!(e.type || e.href || ~e.tabIndex)
    },
    enabled: function(e) {
     return !1 === e.disabled
    },
    disabled: function(e) {
     return !0 === e.disabled
    },
    checked: function(e) {
     var t = e.nodeName.toLowerCase();
     return "input" === t && !!e.checked || "option" === t && !!e.selected
    },
    selected: function(e) {
     return e.parentNode && e.parentNode.selectedIndex, !0 === e.selected
    },
    empty: function(e) {
     for (e = e.firstChild; e; e = e.nextSibling)
      if (e.nodeType < 6) return !1;
     return !0
    },
    parent: function(e) {
     return !w.pseudos.empty(e)
    },
    header: function(e) {
     return fe.test(e.nodeName)
    },
    input: function(e) {
     return pe.test(e.nodeName)
    },
    button: function(e) {
     var t = e.nodeName.toLowerCase();
     return "input" === t && "button" === e.type || "button" === t
    },
    text: function(e) {
     var t;
     return "input" === e.nodeName.toLowerCase() && "text" === e.type && (null == (t = e.getAttribute("type")) || "text" === t.toLowerCase())
    },
    first: a(function() {
     return [0]
    }),
    last: a(function(e, t) {
     return [t - 1]
    }),
    eq: a(function(e, t, i) {
     return [0 > i ? i + t : i]
    }),
    even: a(function(e, t) {
     for (var i = 0; t > i; i += 2) e.push(i);
     return e
    }),
    odd: a(function(e, t) {
     for (var i = 1; t > i; i += 2) e.push(i);
     return e
    }),
    lt: a(function(e, t, i) {
     for (var n = 0 > i ? i + t : i; --n >= 0;) e.push(n);
     return e
    }),
    gt: a(function(e, t, i) {
     for (var n = 0 > i ? i + t : i; ++n < t;) e.push(n);
     return e
    })
   }
  }, w.pseudos.nth = w.pseudos.eq;
  for (y in {
    radio: !0,
    checkbox: !0,
    file: !0,
    password: !0,
    image: !0
   }) w.pseudos[y] = function(e) {
   return function(t) {
    return "input" === t.nodeName.toLowerCase() && t.type === e
   }
  }(y);
  for (y in {
    submit: !0,
    reset: !0
   }) w.pseudos[y] = function(e) {
   return function(t) {
    var i = t.nodeName.toLowerCase();
    return ("input" === i || "button" === i) && t.type === e
   }
  }(y);
  return c.prototype = w.filters = w.pseudos, w.setFilters = new c, k = t.tokenize = function(e, i) {
   var n, o, r, s, a, l, c, d = V[e + " "];
   if (d) return i ? 0 : d.slice(0);
   for (a = e, l = [], c = w.preFilter; a;) {
    (!n || (o = ae.exec(a))) && (o && (a = a.slice(o[0].length) || a), l.push(r = [])), n = !1, (o = le.exec(a)) && (n = o.shift(), r.push({
     value: n,
     type: o[0].replace(se, " ")
    }), a = a.slice(n.length));
    for (s in w.filter) !(o = he[s].exec(a)) || c[s] && !(o = c[s](o)) || (n = o.shift(), r.push({
     value: n,
     type: s,
     matches: o
    }), a = a.slice(n.length));
    if (!n) break
   }
   return i ? a.length : a ? t.error(e) : V(e, l).slice(0)
  }, T = t.compile = function(e, t) {
   var i, n = [],
    o = [],
    r = q[e + " "];
   if (!r) {
    for (t || (t = k(e)), i = t.length; i--;) r = v(t[i]), r[H] ? n.push(r) : o.push(r);
    r = q(e, g(o, n)), r.selector = e
   }
   return r
  }, S = t.select = function(e, t, i, n) {
   var o, r, s, a, c, u = "function" == typeof e && e,
    h = !n && k(e = u.selector || e);
   if (i = i || [], 1 === h.length) {
    if (r = h[0] = h[0].slice(0), r.length > 2 && "ID" === (s = r[0]).type && b.getById && 9 === t.nodeType && L && w.relative[r[1].type]) {
     if (!(t = (w.find.ID(s.matches[0].replace(be, we), t) || [])[0])) return i;
     u && (t = t.parentNode), e = e.slice(r.shift().value.length)
    }
    for (o = he.needsContext.test(e) ? 0 : r.length; o-- && (s = r[o], !w.relative[a = s.type]);)
     if ((c = w.find[a]) && (n = c(s.matches[0].replace(be, we), ge.test(r[0].type) && l(t.parentNode) || t))) {
      if (r.splice(o, 1), !(e = n.length && d(r))) return Z.apply(i, n), i;
      break
     }
   }
   return (u || T(e, h))(n, t, !L, i, ge.test(e) && l(t.parentNode) || t), i
  }, b.sortStable = H.split("").sort(W).join("") === H, b.detectDuplicates = !!A, E(), b.sortDetached = o(function(e) {
   return 1 & e.compareDocumentPosition(j.createElement("div"))
  }), o(function(e) {
   return e.innerHTML = "<a href='#'></a>", "#" === e.firstChild.getAttribute("href")
  }) || r("type|href|height|width", function(e, t, i) {
   return i ? void 0 : e.getAttribute(t, "type" === t.toLowerCase() ? 1 : 2)
  }), b.attributes && o(function(e) {
   return e.innerHTML = "<input/>", e.firstChild.setAttribute("value", ""), "" === e.firstChild.getAttribute("value")
  }) || r("value", function(e, t, i) {
   return i || "input" !== e.nodeName.toLowerCase() ? void 0 : e.defaultValue
  }), o(function(e) {
   return null == e.getAttribute("disabled")
  }) || r(K, function(e, t, i) {
   var n;
   return i ? void 0 : !0 === e[t] ? t.toLowerCase() : (n = e.getAttributeNode(t)) && n.specified ? n.value : null
  }), t
 }(e);
 K.find = oe, K.expr = oe.selectors, K.expr[":"] = K.expr.pseudos, K.unique = oe.uniqueSort, K.text = oe.getText, K.isXMLDoc = oe.isXML, K.contains = oe.contains;
 var re = K.expr.match.needsContext,
  se = /^<(\w+)\s*\/?>(?:<\/\1>|)$/,
  ae = /^.[^:#\[\.,]*$/;
 K.filter = function(e, t, i) {
  var n = t[0];
  return i && (e = ":not(" + e + ")"), 1 === t.length && 1 === n.nodeType ? K.find.matchesSelector(n, e) ? [n] : [] : K.find.matches(e, K.grep(t, function(e) {
   return 1 === e.nodeType
  }))
 }, K.fn.extend({
  find: function(e) {
   var t, i = this.length,
    n = [],
    o = this;
   if ("string" != typeof e) return this.pushStack(K(e).filter(function() {
    for (t = 0; i > t; t++)
     if (K.contains(o[t], this)) return !0
   }));
   for (t = 0; i > t; t++) K.find(e, o[t], n);
   return n = this.pushStack(i > 1 ? K.unique(n) : n), n.selector = this.selector ? this.selector + " " + e : e, n
  },
  filter: function(e) {
   return this.pushStack(n(this, e || [], !1))
  },
  not: function(e) {
   return this.pushStack(n(this, e || [], !0))
  },
  is: function(e) {
   return !!n(this, "string" == typeof e && re.test(e) ? K(e) : e || [], !1).length
  }
 });
 var le, ce = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]*))$/;
 (K.fn.init = function(e, t) {
  var i, n;
  if (!e) return this;
  if ("string" == typeof e) {
   if (!(i = "<" === e[0] && ">" === e[e.length - 1] && e.length >= 3 ? [null, e, null] : ce.exec(e)) || !i[1] && t) return !t || t.jquery ? (t || le).find(e) : this.constructor(t).find(e);
   if (i[1]) {
    if (t = t instanceof K ? t[0] : t, K.merge(this, K.parseHTML(i[1], t && t.nodeType ? t.ownerDocument || t : G, !0)), se.test(i[1]) && K.isPlainObject(t))
     for (i in t) K.isFunction(this[i]) ? this[i](t[i]) : this.attr(i, t[i]);
    return this
   }
   return n = G.getElementById(i[2]), n && n.parentNode && (this.length = 1, this[0] = n), this.context = G, this.selector = e, this
  }
  return e.nodeType ? (this.context = this[0] = e, this.length = 1, this) : K.isFunction(e) ? void 0 !== le.ready ? le.ready(e) : e(K) : (void 0 !== e.selector && (this.selector = e.selector, this.context = e.context), K.makeArray(e, this))
 }).prototype = K.fn, le = K(G);
 var de = /^(?:parents|prev(?:Until|All))/,
  ue = {
   children: !0,
   contents: !0,
   next: !0,
   prev: !0
  };
 K.extend({
  dir: function(e, t, i) {
   for (var n = [], o = void 0 !== i;
    (e = e[t]) && 9 !== e.nodeType;)
    if (1 === e.nodeType) {
     if (o && K(e).is(i)) break;
     n.push(e)
    } return n
  },
  sibling: function(e, t) {
   for (var i = []; e; e = e.nextSibling) 1 === e.nodeType && e !== t && i.push(e);
   return i
  }
 }), K.fn.extend({
  has: function(e) {
   var t = K(e, this),
    i = t.length;
   return this.filter(function() {
    for (var e = 0; i > e; e++)
     if (K.contains(this, t[e])) return !0
   })
  },
  closest: function(e, t) {
   for (var i, n = 0, o = this.length, r = [], s = re.test(e) || "string" != typeof e ? K(e, t || this.context) : 0; o > n; n++)
    for (i = this[n]; i && i !== t; i = i.parentNode)
     if (i.nodeType < 11 && (s ? s.index(i) > -1 : 1 === i.nodeType && K.find.matchesSelector(i, e))) {
      r.push(i);
      break
     } return this.pushStack(r.length > 1 ? K.unique(r) : r)
  },
  index: function(e) {
   return e ? "string" == typeof e ? U.call(K(e), this[0]) : U.call(this, e.jquery ? e[0] : e) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1
  },
  add: function(e, t) {
   return this.pushStack(K.unique(K.merge(this.get(), K(e, t))))
  },
  addBack: function(e) {
   return this.add(null == e ? this.prevObject : this.prevObject.filter(e))
  }
 }), K.each({
  parent: function(e) {
   var t = e.parentNode;
   return t && 11 !== t.nodeType ? t : null
  },
  parents: function(e) {
   return K.dir(e, "parentNode")
  },
  parentsUntil: function(e, t, i) {
   return K.dir(e, "parentNode", i)
  },
  next: function(e) {
   return o(e, "nextSibling")
  },
  prev: function(e) {
   return o(e, "previousSibling")
  },
  nextAll: function(e) {
   return K.dir(e, "nextSibling")
  },
  prevAll: function(e) {
   return K.dir(e, "previousSibling")
  },
  nextUntil: function(e, t, i) {
   return K.dir(e, "nextSibling", i)
  },
  prevUntil: function(e, t, i) {
   return K.dir(e, "previousSibling", i)
  },
  siblings: function(e) {
   return K.sibling((e.parentNode || {}).firstChild, e)
  },
  children: function(e) {
   return K.sibling(e.firstChild)
  },
  contents: function(e) {
   return e.contentDocument || K.merge([], e.childNodes)
  }
 }, function(e, t) {
  K.fn[e] = function(i, n) {
   var o = K.map(this, t, i);
   return "Until" !== e.slice(-5) && (n = i), n && "string" == typeof n && (o = K.filter(n, o)), this.length > 1 && (ue[e] || K.unique(o), de.test(e) && o.reverse()), this.pushStack(o)
  }
 });
 var he = /\S+/g,
  pe = {};
 K.Callbacks = function(e) {
  e = "string" == typeof e ? pe[e] || r(e) : K.extend({}, e);
  var t, i, n, o, s, a, l = [],
   c = !e.once && [],
   d = function(r) {
    for (t = e.memory && r, i = !0, a = o || 0, o = 0, s = l.length, n = !0; l && s > a; a++)
     if (!1 === l[a].apply(r[0], r[1]) && e.stopOnFalse) {
      t = !1;
      break
     } n = !1, l && (c ? c.length && d(c.shift()) : t ? l = [] : u.disable())
   },
   u = {
    add: function() {
     if (l) {
      var i = l.length;
      ! function t(i) {
       K.each(i, function(i, n) {
        var o = K.type(n);
        "function" === o ? e.unique && u.has(n) || l.push(n) : n && n.length && "string" !== o && t(n)
       })
      }(arguments), n ? s = l.length : t && (o = i, d(t))
     }
     return this
    },
    remove: function() {
     return l && K.each(arguments, function(e, t) {
      for (var i;
       (i = K.inArray(t, l, i)) > -1;) l.splice(i, 1), n && (s >= i && s--, a >= i && a--)
     }), this
    },
    has: function(e) {
     return e ? K.inArray(e, l) > -1 : !(!l || !l.length)
    },
    empty: function() {
     return l = [], s = 0, this
    },
    disable: function() {
     return l = c = t = void 0, this
    },
    disabled: function() {
     return !l
    },
    lock: function() {
     return c = void 0, t || u.disable(), this
    },
    locked: function() {
     return !c
    },
    fireWith: function(e, t) {
     return !l || i && !c || (t = t || [], t = [e, t.slice ? t.slice() : t], n ? c.push(t) : d(t)), this
    },
    fire: function() {
     return u.fireWith(this, arguments), this
    },
    fired: function() {
     return !!i
    }
   };
  return u
 }, K.extend({
  Deferred: function(e) {
   var t = [
     ["resolve", "done", K.Callbacks("once memory"), "resolved"],
     ["reject", "fail", K.Callbacks("once memory"), "rejected"],
     ["notify", "progress", K.Callbacks("memory")]
    ],
    i = "pending",
    n = {
     state: function() {
      return i
     },
     always: function() {
      return o.done(arguments).fail(arguments), this
     },
     then: function() {
      var e = arguments;
      return K.Deferred(function(i) {
       K.each(t, function(t, r) {
        var s = K.isFunction(e[t]) && e[t];
        o[r[1]](function() {
         var e = s && s.apply(this, arguments);
         e && K.isFunction(e.promise) ? e.promise().done(i.resolve).fail(i.reject).progress(i.notify) : i[r[0] + "With"](this === n ? i.promise() : this, s ? [e] : arguments)
        })
       }), e = null
      }).promise()
     },
     promise: function(e) {
      return null != e ? K.extend(e, n) : n
     }
    },
    o = {};
   return n.pipe = n.then, K.each(t, function(e, r) {
    var s = r[2],
     a = r[3];
    n[r[1]] = s.add, a && s.add(function() {
     i = a
    }, t[1 ^ e][2].disable, t[2][2].lock), o[r[0]] = function() {
     return o[r[0] + "With"](this === o ? n : this, arguments), this
    }, o[r[0] + "With"] = s.fireWith
   }), n.promise(o), e && e.call(o, o), o
  },
  when: function(e) {
   var t, i, n, o = 0,
    r = q.call(arguments),
    s = r.length,
    a = 1 !== s || e && K.isFunction(e.promise) ? s : 0,
    l = 1 === a ? e : K.Deferred(),
    c = function(e, i, n) {
     return function(o) {
      i[e] = this, n[e] = arguments.length > 1 ? q.call(arguments) : o, n === t ? l.notifyWith(i, n) : --a || l.resolveWith(i, n)
     }
    };
   if (s > 1)
    for (t = new Array(s), i = new Array(s), n = new Array(s); s > o; o++) r[o] && K.isFunction(r[o].promise) ? r[o].promise().done(c(o, n, r)).fail(l.reject).progress(c(o, i, t)) : --a;
   return a || l.resolveWith(n, r), l.promise()
  }
 });
 var fe;
 K.fn.ready = function(e) {
  return K.ready.promise().done(e), this
 }, K.extend({
  isReady: !1,
  readyWait: 1,
  holdReady: function(e) {
   e ? K.readyWait++ : K.ready(!0)
  },
  ready: function(e) {
   (!0 === e ? --K.readyWait : K.isReady) || (K.isReady = !0, !0 !== e && --K.readyWait > 0 || (fe.resolveWith(G, [K]), K.fn.triggerHandler && (K(G).triggerHandler("ready"), K(G).off("ready"))))
  }
 }), K.ready.promise = function(t) {
  return fe || (fe = K.Deferred(), "complete" === G.readyState ? setTimeout(K.ready) : (G.addEventListener("DOMContentLoaded", s, !1), e.addEventListener("load", s, !1))), fe.promise(t)
 }, K.ready.promise();
 var me = K.access = function(e, t, i, n, o, r, s) {
  var a = 0,
   l = e.length,
   c = null == i;
  if ("object" === K.type(i)) {
   o = !0;
   for (a in i) K.access(e, t, a, i[a], !0, r, s)
  } else if (void 0 !== n && (o = !0, K.isFunction(n) || (s = !0), c && (s ? (t.call(e, n), t = null) : (c = t, t = function(e, t, i) {
    return c.call(K(e), i)
   })), t))
   for (; l > a; a++) t(e[a], i, s ? n : n.call(e[a], a, t(e[a], i)));
  return o ? e : c ? t.call(e) : l ? t(e[0], i) : r
 };
 K.acceptData = function(e) {
  return 1 === e.nodeType || 9 === e.nodeType || !+e.nodeType
 }, a.uid = 1, a.accepts = K.acceptData, a.prototype = {
  key: function(e) {
   if (!a.accepts(e)) return 0;
   var t = {},
    i = e[this.expando];
   if (!i) {
    i = a.uid++;
    try {
     t[this.expando] = {
      value: i
     }, Object.defineProperties(e, t)
    } catch (n) {
     t[this.expando] = i, K.extend(e, t)
    }
   }
   return this.cache[i] || (this.cache[i] = {}), i
  },
  set: function(e, t, i) {
   var n, o = this.key(e),
    r = this.cache[o];
   if ("string" == typeof t) r[t] = i;
   else if (K.isEmptyObject(r)) K.extend(this.cache[o], t);
   else
    for (n in t) r[n] = t[n];
   return r
  },
  get: function(e, t) {
   var i = this.cache[this.key(e)];
   return void 0 === t ? i : i[t]
  },
  access: function(e, t, i) {
   var n;
   return void 0 === t || t && "string" == typeof t && void 0 === i ? (n = this.get(e, t), void 0 !== n ? n : this.get(e, K.camelCase(t))) : (this.set(e, t, i), void 0 !== i ? i : t)
  },
  remove: function(e, t) {
   var i, n, o, r = this.key(e),
    s = this.cache[r];
   if (void 0 === t) this.cache[r] = {};
   else {
    K.isArray(t) ? n = t.concat(t.map(K.camelCase)) : (o = K.camelCase(t), t in s ? n = [t, o] : (n = o, n = n in s ? [n] : n.match(he) || [])), i = n.length;
    for (; i--;) delete s[n[i]]
   }
  },
  hasData: function(e) {
   return !K.isEmptyObject(this.cache[e[this.expando]] || {})
  },
  discard: function(e) {
   e[this.expando] && delete this.cache[e[this.expando]]
  }
 };
 var ve = new a,
  ge = new a,
  ye = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,
  be = /([A-Z])/g;
 K.extend({
  hasData: function(e) {
   return ge.hasData(e) || ve.hasData(e)
  },
  data: function(e, t, i) {
   return ge.access(e, t, i)
  },
  removeData: function(e, t) {
   ge.remove(e, t)
  },
  _data: function(e, t, i) {
   return ve.access(e, t, i)
  },
  _removeData: function(e, t) {
   ve.remove(e, t)
  }
 }), K.fn.extend({
  data: function(e, t) {
   var i, n, o, r = this[0],
    s = r && r.attributes;
   if (void 0 === e) {
    if (this.length && (o = ge.get(r), 1 === r.nodeType && !ve.get(r, "hasDataAttrs"))) {
     for (i = s.length; i--;) s[i] && (n = s[i].name, 0 === n.indexOf("data-") && (n = K.camelCase(n.slice(5)), l(r, n, o[n])));
     ve.set(r, "hasDataAttrs", !0)
    }
    return o
   }
   return "object" == typeof e ? this.each(function() {
    ge.set(this, e)
   }) : me(this, function(t) {
    var i, n = K.camelCase(e);
    if (r && void 0 === t) {
     if (void 0 !== (i = ge.get(r, e))) return i;
     if (void 0 !== (i = ge.get(r, n))) return i;
     if (void 0 !== (i = l(r, n, void 0))) return i
    } else this.each(function() {
     var i = ge.get(this, n);
     ge.set(this, n, t), -1 !== e.indexOf("-") && void 0 !== i && ge.set(this, e, t)
    })
   }, null, t, arguments.length > 1, null, !0)
  },
  removeData: function(e) {
   return this.each(function() {
    ge.remove(this, e)
   })
  }
 }), K.extend({
  queue: function(e, t, i) {
   var n;
   return e ? (t = (t || "fx") + "queue", n = ve.get(e, t), i && (!n || K.isArray(i) ? n = ve.access(e, t, K.makeArray(i)) : n.push(i)), n || []) : void 0
  },
  dequeue: function(e, t) {
   t = t || "fx";
   var i = K.queue(e, t),
    n = i.length,
    o = i.shift(),
    r = K._queueHooks(e, t),
    s = function() {
     K.dequeue(e, t)
    };
   "inprogress" === o && (o = i.shift(), n--), o && ("fx" === t && i.unshift("inprogress"), delete r.stop, o.call(e, s, r)), !n && r && r.empty.fire()
  },
  _queueHooks: function(e, t) {
   var i = t + "queueHooks";
   return ve.get(e, i) || ve.access(e, i, {
    empty: K.Callbacks("once memory").add(function() {
     ve.remove(e, [t + "queue", i])
    })
   })
  }
 }), K.fn.extend({
  queue: function(e, t) {
   var i = 2;
   return "string" != typeof e && (t = e, e = "fx", i--), arguments.length < i ? K.queue(this[0], e) : void 0 === t ? this : this.each(function() {
    var i = K.queue(this, e, t);
    K._queueHooks(this, e), "fx" === e && "inprogress" !== i[0] && K.dequeue(this, e)
   })
  },
  dequeue: function(e) {
   return this.each(function() {
    K.dequeue(this, e)
   })
  },
  clearQueue: function(e) {
   return this.queue(e || "fx", [])
  },
  promise: function(e, t) {
   var i, n = 1,
    o = K.Deferred(),
    r = this,
    s = this.length,
    a = function() {
     --n || o.resolveWith(r, [r])
    };
   for ("string" != typeof e && (t = e, e = void 0), e = e || "fx"; s--;)(i = ve.get(r[s], e + "queueHooks")) && i.empty && (n++, i.empty.add(a));
   return a(), o.promise(t)
  }
 });
 var we = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,
  xe = ["Top", "Right", "Bottom", "Left"],
  Ce = function(e, t) {
   return e = t || e, "none" === K.css(e, "display") || !K.contains(e.ownerDocument, e)
  },
  ke = /^(?:checkbox|radio)$/i;
 ! function() {
  var e = G.createDocumentFragment(),
   t = e.appendChild(G.createElement("div")),
   i = G.createElement("input");
  i.setAttribute("type", "radio"), i.setAttribute("checked", "checked"), i.setAttribute("name", "t"), t.appendChild(i), Z.checkClone = t.cloneNode(!0).cloneNode(!0).lastChild.checked, t.innerHTML = "<textarea>x</textarea>", Z.noCloneChecked = !!t.cloneNode(!0).lastChild.defaultValue
 }();
 var Te = "undefined";
 Z.focusinBubbles = "onfocusin" in e;
 var Se = /^key/,
  $e = /^(?:mouse|pointer|contextmenu)|click/,
  Pe = /^(?:focusinfocus|focusoutblur)$/,
  Ae = /^([^.]*)(?:\.(.+)|)$/;
 K.event = {
  global: {},
  add: function(e, t, i, n, o) {
   var r, s, a, l, c, d, u, h, p, f, m, v = ve.get(e);
   if (v)
    for (i.handler && (r = i, i = r.handler, o = r.selector), i.guid || (i.guid = K.guid++), (l = v.events) || (l = v.events = {}), (s = v.handle) || (s = v.handle = function(t) {
      return typeof K !== Te && K.event.triggered !== t.type ? K.event.dispatch.apply(e, arguments) : void 0
     }), t = (t || "").match(he) || [""], c = t.length; c--;) a = Ae.exec(t[c]) || [], p = m = a[1], f = (a[2] || "").split(".").sort(), p && (u = K.event.special[p] || {}, p = (o ? u.delegateType : u.bindType) || p, u = K.event.special[p] || {}, d = K.extend({
     type: p,
     origType: m,
     data: n,
     handler: i,
     guid: i.guid,
     selector: o,
     needsContext: o && K.expr.match.needsContext.test(o),
     namespace: f.join(".")
    }, r), (h = l[p]) || (h = l[p] = [], h.delegateCount = 0, u.setup && !1 !== u.setup.call(e, n, f, s) || e.addEventListener && e.addEventListener(p, s, !1)), u.add && (u.add.call(e, d), d.handler.guid || (d.handler.guid = i.guid)), o ? h.splice(h.delegateCount++, 0, d) : h.push(d), K.event.global[p] = !0)
  },
  remove: function(e, t, i, n, o) {
   var r, s, a, l, c, d, u, h, p, f, m, v = ve.hasData(e) && ve.get(e);
   if (v && (l = v.events)) {
    for (t = (t || "").match(he) || [""], c = t.length; c--;)
     if (a = Ae.exec(t[c]) || [], p = m = a[1], f = (a[2] || "").split(".").sort(), p) {
      for (u = K.event.special[p] || {}, p = (n ? u.delegateType : u.bindType) || p, h = l[p] || [], a = a[2] && new RegExp("(^|\\.)" + f.join("\\.(?:.*\\.|)") + "(\\.|$)"), s = r = h.length; r--;) d = h[r], !o && m !== d.origType || i && i.guid !== d.guid || a && !a.test(d.namespace) || n && n !== d.selector && ("**" !== n || !d.selector) || (h.splice(r, 1), d.selector && h.delegateCount--, u.remove && u.remove.call(e, d));
      s && !h.length && (u.teardown && !1 !== u.teardown.call(e, f, v.handle) || K.removeEvent(e, p, v.handle), delete l[p])
     } else
      for (p in l) K.event.remove(e, p + t[c], i, n, !0);
    K.isEmptyObject(l) && (delete v.handle, ve.remove(e, "events"))
   }
  },
  trigger: function(t, i, n, o) {
   var r, s, a, l, c, d, u, h = [n || G],
    p = Y.call(t, "type") ? t.type : t,
    f = Y.call(t, "namespace") ? t.namespace.split(".") : [];
   if (s = a = n = n || G, 3 !== n.nodeType && 8 !== n.nodeType && !Pe.test(p + K.event.triggered) && (p.indexOf(".") >= 0 && (f = p.split("."), p = f.shift(), f.sort()), c = p.indexOf(":") < 0 && "on" + p, t = t[K.expando] ? t : new K.Event(p, "object" == typeof t && t), t.isTrigger = o ? 2 : 3, t.namespace = f.join("."), t.namespace_re = t.namespace ? new RegExp("(^|\\.)" + f.join("\\.(?:.*\\.|)") + "(\\.|$)") : null, t.result = void 0, t.target || (t.target = n), i = null == i ? [t] : K.makeArray(i, [t]), u = K.event.special[p] || {}, o || !u.trigger || !1 !== u.trigger.apply(n, i))) {
    if (!o && !u.noBubble && !K.isWindow(n)) {
     for (l = u.delegateType || p, Pe.test(l + p) || (s = s.parentNode); s; s = s.parentNode) h.push(s), a = s;
     a === (n.ownerDocument || G) && h.push(a.defaultView || a.parentWindow || e)
    }
    for (r = 0;
     (s = h[r++]) && !t.isPropagationStopped();) t.type = r > 1 ? l : u.bindType || p, d = (ve.get(s, "events") || {})[t.type] && ve.get(s, "handle"), d && d.apply(s, i), (d = c && s[c]) && d.apply && K.acceptData(s) && (t.result = d.apply(s, i), !1 === t.result && t.preventDefault());
    return t.type = p, o || t.isDefaultPrevented() || u._default && !1 !== u._default.apply(h.pop(), i) || !K.acceptData(n) || c && K.isFunction(n[p]) && !K.isWindow(n) && (a = n[c], a && (n[c] = null), K.event.triggered = p, n[p](), K.event.triggered = void 0, a && (n[c] = a)), t.result
   }
  },
  dispatch: function(e) {
   e = K.event.fix(e);
   var t, i, n, o, r, s = [],
    a = q.call(arguments),
    l = (ve.get(this, "events") || {})[e.type] || [],
    c = K.event.special[e.type] || {};
   if (a[0] = e, e.delegateTarget = this, !c.preDispatch || !1 !== c.preDispatch.call(this, e)) {
    for (s = K.event.handlers.call(this, e, l), t = 0;
     (o = s[t++]) && !e.isPropagationStopped();)
     for (e.currentTarget = o.elem, i = 0;
      (r = o.handlers[i++]) && !e.isImmediatePropagationStopped();)(!e.namespace_re || e.namespace_re.test(r.namespace)) && (e.handleObj = r, e.data = r.data, void 0 !== (n = ((K.event.special[r.origType] || {}).handle || r.handler).apply(o.elem, a)) && !1 === (e.result = n) && (e.preventDefault(), e.stopPropagation()));
    return c.postDispatch && c.postDispatch.call(this, e), e.result
   }
  },
  handlers: function(e, t) {
   var i, n, o, r, s = [],
    a = t.delegateCount,
    l = e.target;
   if (a && l.nodeType && (!e.button || "click" !== e.type))
    for (; l !== this; l = l.parentNode || this)
     if (!0 !== l.disabled || "click" !== e.type) {
      for (n = [], i = 0; a > i; i++) r = t[i], o = r.selector + " ", void 0 === n[o] && (n[o] = r.needsContext ? K(o, this).index(l) >= 0 : K.find(o, this, null, [l]).length), n[o] && n.push(r);
      n.length && s.push({
       elem: l,
       handlers: n
      })
     } return a < t.length && s.push({
    elem: this,
    handlers: t.slice(a)
   }), s
  },
  props: "altKey bubbles cancelable ctrlKey currentTarget eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(" "),
  fixHooks: {},
  keyHooks: {
   props: "char charCode key keyCode".split(" "),
   filter: function(e, t) {
    return null == e.which && (e.which = null != t.charCode ? t.charCode : t.keyCode), e
   }
  },
  mouseHooks: {
   props: "button buttons clientX clientY offsetX offsetY pageX pageY screenX screenY toElement".split(" "),
   filter: function(e, t) {
    var i, n, o, r = t.button;
    return null == e.pageX && null != t.clientX && (i = e.target.ownerDocument || G, n = i.documentElement, o = i.body, e.pageX = t.clientX + (n && n.scrollLeft || o && o.scrollLeft || 0) - (n && n.clientLeft || o && o.clientLeft || 0), e.pageY = t.clientY + (n && n.scrollTop || o && o.scrollTop || 0) - (n && n.clientTop || o && o.clientTop || 0)), e.which || void 0 === r || (e.which = 1 & r ? 1 : 2 & r ? 3 : 4 & r ? 2 : 0), e
   }
  },
  fix: function(e) {
   if (e[K.expando]) return e;
   var t, i, n, o = e.type,
    r = e,
    s = this.fixHooks[o];
   for (s || (this.fixHooks[o] = s = $e.test(o) ? this.mouseHooks : Se.test(o) ? this.keyHooks : {}), n = s.props ? this.props.concat(s.props) : this.props, e = new K.Event(r), t = n.length; t--;) i = n[t], e[i] = r[i];
   return e.target || (e.target = G), 3 === e.target.nodeType && (e.target = e.target.parentNode), s.filter ? s.filter(e, r) : e
  },
  special: {
   load: {
    noBubble: !0
   },
   focus: {
    trigger: function() {
     return this !== u() && this.focus ? (this.focus(), !1) : void 0
    },
    delegateType: "focusin"
   },
   blur: {
    trigger: function() {
     return this === u() && this.blur ? (this.blur(), !1) : void 0
    },
    delegateType: "focusout"
   },
   click: {
    trigger: function() {
     return "checkbox" === this.type && this.click && K.nodeName(this, "input") ? (this.click(), !1) : void 0
    },
    _default: function(e) {
     return K.nodeName(e.target, "a")
    }
   },
   beforeunload: {
    postDispatch: function(e) {
     void 0 !== e.result && e.originalEvent && (e.originalEvent.returnValue = e.result)
    }
   }
  },
  simulate: function(e, t, i, n) {
   var o = K.extend(new K.Event, i, {
    type: e,
    isSimulated: !0,
    originalEvent: {}
   });
   n ? K.event.trigger(o, null, t) : K.event.dispatch.call(t, o), o.isDefaultPrevented() && i.preventDefault()
  }
 }, K.removeEvent = function(e, t, i) {
  e.removeEventListener && e.removeEventListener(t, i, !1)
 }, K.Event = function(e, t) {
  return this instanceof K.Event ? (e && e.type ? (this.originalEvent = e, this.type = e.type, this.isDefaultPrevented = e.defaultPrevented || void 0 === e.defaultPrevented && !1 === e.returnValue ? c : d) : this.type = e, t && K.extend(this, t), this.timeStamp = e && e.timeStamp || K.now(), void(this[K.expando] = !0)) : new K.Event(e, t)
 }, K.Event.prototype = {
  isDefaultPrevented: d,
  isPropagationStopped: d,
  isImmediatePropagationStopped: d,
  preventDefault: function() {
   var e = this.originalEvent;
   this.isDefaultPrevented = c, e && e.preventDefault && e.preventDefault()
  },
  stopPropagation: function() {
   var e = this.originalEvent;
   this.isPropagationStopped = c, e && e.stopPropagation && e.stopPropagation()
  },
  stopImmediatePropagation: function() {
   var e = this.originalEvent;
   this.isImmediatePropagationStopped = c, e && e.stopImmediatePropagation && e.stopImmediatePropagation(), this.stopPropagation()
  }
 }, K.each({
  mouseenter: "mouseover",
  mouseleave: "mouseout",
  pointerenter: "pointerover",
  pointerleave: "pointerout"
 }, function(e, t) {
  K.event.special[e] = {
   delegateType: t,
   bindType: t,
   handle: function(e) {
    var i, n = this,
     o = e.relatedTarget,
     r = e.handleObj;
    return (!o || o !== n && !K.contains(n, o)) && (e.type = r.origType, i = r.handler.apply(this, arguments), e.type = t), i
   }
  }
 }), Z.focusinBubbles || K.each({
  focus: "focusin",
  blur: "focusout"
 }, function(e, t) {
  var i = function(e) {
   K.event.simulate(t, e.target, K.event.fix(e), !0)
  };
  K.event.special[t] = {
   setup: function() {
    var n = this.ownerDocument || this,
     o = ve.access(n, t);
    o || n.addEventListener(e, i, !0), ve.access(n, t, (o || 0) + 1)
   },
   teardown: function() {
    var n = this.ownerDocument || this,
     o = ve.access(n, t) - 1;
    o ? ve.access(n, t, o) : (n.removeEventListener(e, i, !0), ve.remove(n, t))
   }
  }
 }), K.fn.extend({
  on: function(e, t, i, n, o) {
   var r, s;
   if ("object" == typeof e) {
    "string" != typeof t && (i = i || t, t = void 0);
    for (s in e) this.on(s, t, i, e[s], o);
    return this
   }
   if (null == i && null == n ? (n = t, i = t = void 0) : null == n && ("string" == typeof t ? (n = i, i = void 0) : (n = i, i = t, t = void 0)), !1 === n) n = d;
   else if (!n) return this;
   return 1 === o && (r = n, n = function(e) {
    return K().off(e), r.apply(this, arguments)
   }, n.guid = r.guid || (r.guid = K.guid++)), this.each(function() {
    K.event.add(this, e, n, i, t)
   })
  },
  one: function(e, t, i, n) {
   return this.on(e, t, i, n, 1)
  },
  off: function(e, t, i) {
   var n, o;
   if (e && e.preventDefault && e.handleObj) return n = e.handleObj, K(e.delegateTarget).off(n.namespace ? n.origType + "." + n.namespace : n.origType, n.selector, n.handler), this;
   if ("object" == typeof e) {
    for (o in e) this.off(o, t, e[o]);
    return this
   }
   return (!1 === t || "function" == typeof t) && (i = t, t = void 0), !1 === i && (i = d), this.each(function() {
    K.event.remove(this, e, i, t)
   })
  },
  trigger: function(e, t) {
   return this.each(function() {
    K.event.trigger(e, t, this)
   })
  },
  triggerHandler: function(e, t) {
   var i = this[0];
   return i ? K.event.trigger(e, t, i, !0) : void 0
  }
 });
 var Ee = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/gi,
  je = /<([\w:]+)/,
  Fe = /<|&#?\w+;/,
  Le = /<(?:script|style|link)/i,
  _e = /checked\s*(?:[^=]|=\s*.checked.)/i,
  Ne = /^$|\/(?:java|ecma)script/i,
  De = /^true\/(.*)/,
  Me = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g,
  He = {
   option: [1, "<select multiple='multiple'>", "</select>"],
   thead: [1, "<table>", "</table>"],
   col: [2, "<table><colgroup>", "</colgroup></table>"],
   tr: [2, "<table><tbody>", "</tbody></table>"],
   td: [3, "<table><tbody><tr>", "</tr></tbody></table>"],
   _default: [0, "", ""]
  };
 He.optgroup = He.option, He.tbody = He.tfoot = He.colgroup = He.caption = He.thead, He.th = He.td, K.extend({
  clone: function(e, t, i) {
   var n, o, r, s, a = e.cloneNode(!0),
    l = K.contains(e.ownerDocument, e);
   if (!(Z.noCloneChecked || 1 !== e.nodeType && 11 !== e.nodeType || K.isXMLDoc(e)))
    for (s = g(a), r = g(e), n = 0, o = r.length; o > n; n++) y(r[n], s[n]);
   if (t)
    if (i)
     for (r = r || g(e), s = s || g(a), n = 0, o = r.length; o > n; n++) v(r[n], s[n]);
    else v(e, a);
   return s = g(a, "script"), s.length > 0 && m(s, !l && g(e, "script")), a
  },
  buildFragment: function(e, t, i, n) {
   for (var o, r, s, a, l, c, d = t.createDocumentFragment(), u = [], h = 0, p = e.length; p > h; h++)
    if ((o = e[h]) || 0 === o)
     if ("object" === K.type(o)) K.merge(u, o.nodeType ? [o] : o);
     else if (Fe.test(o)) {
    for (r = r || d.appendChild(t.createElement("div")), s = (je.exec(o) || ["", ""])[1].toLowerCase(), a = He[s] || He._default, r.innerHTML = a[1] + o.replace(Ee, "<$1></$2>") + a[2], c = a[0]; c--;) r = r.lastChild;
    K.merge(u, r.childNodes), r = d.firstChild, r.textContent = ""
   } else u.push(t.createTextNode(o));
   for (d.textContent = "", h = 0; o = u[h++];)
    if ((!n || -1 === K.inArray(o, n)) && (l = K.contains(o.ownerDocument, o), r = g(d.appendChild(o), "script"), l && m(r), i))
     for (c = 0; o = r[c++];) Ne.test(o.type || "") && i.push(o);
   return d
  },
  cleanData: function(e) {
   for (var t, i, n, o, r = K.event.special, s = 0; void 0 !== (i = e[s]); s++) {
    if (K.acceptData(i) && (o = i[ve.expando]) && (t = ve.cache[o])) {
     if (t.events)
      for (n in t.events) r[n] ? K.event.remove(i, n) : K.removeEvent(i, n, t.handle);
     ve.cache[o] && delete ve.cache[o]
    }
    delete ge.cache[i[ge.expando]]
   }
  }
 }), K.fn.extend({
  text: function(e) {
   return me(this, function(e) {
    return void 0 === e ? K.text(this) : this.empty().each(function() {
     (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) && (this.textContent = e)
    })
   }, null, e, arguments.length)
  },
  append: function() {
   return this.domManip(arguments, function(e) {
    if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
     h(this, e).appendChild(e)
    }
   })
  },
  prepend: function() {
   return this.domManip(arguments, function(e) {
    if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
     var t = h(this, e);
     t.insertBefore(e, t.firstChild)
    }
   })
  },
  before: function() {
   return this.domManip(arguments, function(e) {
    this.parentNode && this.parentNode.insertBefore(e, this)
   })
  },
  after: function() {
   return this.domManip(arguments, function(e) {
    this.parentNode && this.parentNode.insertBefore(e, this.nextSibling)
   })
  },
  remove: function(e, t) {
   for (var i, n = e ? K.filter(e, this) : this, o = 0; null != (i = n[o]); o++) t || 1 !== i.nodeType || K.cleanData(g(i)), i.parentNode && (t && K.contains(i.ownerDocument, i) && m(g(i, "script")), i.parentNode.removeChild(i));
   return this
  },
  empty: function() {
   for (var e, t = 0; null != (e = this[t]); t++) 1 === e.nodeType && (K.cleanData(g(e, !1)), e.textContent = "");
   return this
  },
  clone: function(e, t) {
   return e = null != e && e, t = null == t ? e : t, this.map(function() {
    return K.clone(this, e, t)
   })
  },
  html: function(e) {
   return me(this, function(e) {
    var t = this[0] || {},
     i = 0,
     n = this.length;
    if (void 0 === e && 1 === t.nodeType) return t.innerHTML;
    if ("string" == typeof e && !Le.test(e) && !He[(je.exec(e) || ["", ""])[1].toLowerCase()]) {
     e = e.replace(Ee, "<$1></$2>");
     try {
      for (; n > i; i++) t = this[i] || {}, 1 === t.nodeType && (K.cleanData(g(t, !1)), t.innerHTML = e);
      t = 0
     } catch (e) {}
    }
    t && this.empty().append(e)
   }, null, e, arguments.length)
  },
  replaceWith: function() {
   var e = arguments[0];
   return this.domManip(arguments, function(t) {
    e = this.parentNode, K.cleanData(g(this)), e && e.replaceChild(t, this)
   }), e && (e.length || e.nodeType) ? this : this.remove()
  },
  detach: function(e) {
   return this.remove(e, !0)
  },
  domManip: function(e, t) {
   e = W.apply([], e);
   var i, n, o, r, s, a, l = 0,
    c = this.length,
    d = this,
    u = c - 1,
    h = e[0],
    m = K.isFunction(h);
   if (m || c > 1 && "string" == typeof h && !Z.checkClone && _e.test(h)) return this.each(function(i) {
    var n = d.eq(i);
    m && (e[0] = h.call(this, i, n.html())), n.domManip(e, t)
   });
   if (c && (i = K.buildFragment(e, this[0].ownerDocument, !1, this), n = i.firstChild, 1 === i.childNodes.length && (i = n), n)) {
    for (o = K.map(g(i, "script"), p), r = o.length; c > l; l++) s = i, l !== u && (s = K.clone(s, !0, !0), r && K.merge(o, g(s, "script"))), t.call(this[l], s, l);
    if (r)
     for (a = o[o.length - 1].ownerDocument, K.map(o, f), l = 0; r > l; l++) s = o[l], Ne.test(s.type || "") && !ve.access(s, "globalEval") && K.contains(a, s) && (s.src ? K._evalUrl && K._evalUrl(s.src) : K.globalEval(s.textContent.replace(Me, "")))
   }
   return this
  }
 }), K.each({
  appendTo: "append",
  prependTo: "prepend",
  insertBefore: "before",
  insertAfter: "after",
  replaceAll: "replaceWith"
 }, function(e, t) {
  K.fn[e] = function(e) {
   for (var i, n = [], o = K(e), r = o.length - 1, s = 0; r >= s; s++) i = s === r ? this : this.clone(!0), K(o[s])[t](i), B.apply(n, i.get());
   return this.pushStack(n)
  }
 });
 var Ie, Oe = {},
  ze = /^margin/,
  Re = new RegExp("^(" + we + ")(?!px)[a-z%]+$", "i"),
  Ve = function(t) {
   return t.ownerDocument.defaultView.opener ? t.ownerDocument.defaultView.getComputedStyle(t, null) : e.getComputedStyle(t, null)
  };
 ! function() {
  function t() {
   s.style.cssText = "-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;display:block;margin-top:1%;top:1%;border:1px;padding:1px;width:4px;position:absolute", s.innerHTML = "", o.appendChild(r);
   var t = e.getComputedStyle(s, null);
   i = "1%" !== t.top, n = "4px" === t.width, o.removeChild(r)
  }
  var i, n, o = G.documentElement,
   r = G.createElement("div"),
   s = G.createElement("div");
  s.style && (s.style.backgroundClip = "content-box", s.cloneNode(!0).style.backgroundClip = "", Z.clearCloneStyle = "content-box" === s.style.backgroundClip, r.style.cssText = "border:0;width:0;height:0;top:0;left:-9999px;margin-top:1px;position:absolute", r.appendChild(s), e.getComputedStyle && K.extend(Z, {
   pixelPosition: function() {
    return t(), i
   },
   boxSizingReliable: function() {
    return null == n && t(), n
   },
   reliableMarginRight: function() {
    var t, i = s.appendChild(G.createElement("div"));
    return i.style.cssText = s.style.cssText = "-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;display:block;margin:0;border:0;padding:0", i.style.marginRight = i.style.width = "0", s.style.width = "1px", o.appendChild(r), t = !parseFloat(e.getComputedStyle(i, null).marginRight), o.removeChild(r), s.removeChild(i), t
   }
  }))
 }(), K.swap = function(e, t, i, n) {
  var o, r, s = {};
  for (r in t) s[r] = e.style[r], e.style[r] = t[r];
  o = i.apply(e, n || []);
  for (r in t) e.style[r] = s[r];
  return o
 };
 var qe = /^(none|table(?!-c[ea]).+)/,
  We = new RegExp("^(" + we + ")(.*)$", "i"),
  Be = new RegExp("^([+-])=(" + we + ")", "i"),
  Ue = {
   position: "absolute",
   visibility: "hidden",
   display: "block"
  },
  Qe = {
   letterSpacing: "0",
   fontWeight: "400"
  },
  Xe = ["Webkit", "O", "Moz", "ms"];
 K.extend({
  cssHooks: {
   opacity: {
    get: function(e, t) {
     if (t) {
      var i = x(e, "opacity");
      return "" === i ? "1" : i
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
  cssProps: {
   float: "cssFloat"
  },
  style: function(e, t, i, n) {
   if (e && 3 !== e.nodeType && 8 !== e.nodeType && e.style) {
    var o, r, s, a = K.camelCase(t),
     l = e.style;
    return t = K.cssProps[a] || (K.cssProps[a] = k(l, a)), s = K.cssHooks[t] || K.cssHooks[a], void 0 === i ? s && "get" in s && void 0 !== (o = s.get(e, !1, n)) ? o : l[t] : (r = typeof i, "string" === r && (o = Be.exec(i)) && (i = (o[1] + 1) * o[2] + parseFloat(K.css(e, t)), r = "number"), void(null != i && i === i && ("number" !== r || K.cssNumber[a] || (i += "px"), Z.clearCloneStyle || "" !== i || 0 !== t.indexOf("background") || (l[t] = "inherit"), s && "set" in s && void 0 === (i = s.set(e, i, n)) || (l[t] = i))))
   }
  },
  css: function(e, t, i, n) {
   var o, r, s, a = K.camelCase(t);
   return t = K.cssProps[a] || (K.cssProps[a] = k(e.style, a)), s = K.cssHooks[t] || K.cssHooks[a], s && "get" in s && (o = s.get(e, !0, i)), void 0 === o && (o = x(e, t, n)), "normal" === o && t in Qe && (o = Qe[t]), "" === i || i ? (r = parseFloat(o), !0 === i || K.isNumeric(r) ? r || 0 : o) : o
  }
 }), K.each(["height", "width"], function(e, t) {
  K.cssHooks[t] = {
   get: function(e, i, n) {
    return i ? qe.test(K.css(e, "display")) && 0 === e.offsetWidth ? K.swap(e, Ue, function() {
     return $(e, t, n)
    }) : $(e, t, n) : void 0
   },
   set: function(e, i, n) {
    var o = n && Ve(e);
    return T(e, i, n ? S(e, t, n, "border-box" === K.css(e, "boxSizing", !1, o), o) : 0)
   }
  }
 }), K.cssHooks.marginRight = C(Z.reliableMarginRight, function(e, t) {
  return t ? K.swap(e, {
   display: "inline-block"
  }, x, [e, "marginRight"]) : void 0
 }), K.each({
  margin: "",
  padding: "",
  border: "Width"
 }, function(e, t) {
  K.cssHooks[e + t] = {
   expand: function(i) {
    for (var n = 0, o = {}, r = "string" == typeof i ? i.split(" ") : [i]; 4 > n; n++) o[e + xe[n] + t] = r[n] || r[n - 2] || r[0];
    return o
   }
  }, ze.test(e) || (K.cssHooks[e + t].set = T)
 }), K.fn.extend({
  css: function(e, t) {
   return me(this, function(e, t, i) {
    var n, o, r = {},
     s = 0;
    if (K.isArray(t)) {
     for (n = Ve(e), o = t.length; o > s; s++) r[t[s]] = K.css(e, t[s], !1, n);
     return r
    }
    return void 0 !== i ? K.style(e, t, i) : K.css(e, t)
   }, e, t, arguments.length > 1)
  },
  show: function() {
   return P(this, !0)
  },
  hide: function() {
   return P(this)
  },
  toggle: function(e) {
   return "boolean" == typeof e ? e ? this.show() : this.hide() : this.each(function() {
    Ce(this) ? K(this).show() : K(this).hide()
   })
  }
 }), K.Tween = A, A.prototype = {
  constructor: A,
  init: function(e, t, i, n, o, r) {
   this.elem = e, this.prop = i, this.easing = o || "swing", this.options = t, this.start = this.now = this.cur(), this.end = n, this.unit = r || (K.cssNumber[i] ? "" : "px")
  },
  cur: function() {
   var e = A.propHooks[this.prop];
   return e && e.get ? e.get(this) : A.propHooks._default.get(this)
  },
  run: function(e) {
   var t, i = A.propHooks[this.prop];
   return this.options.duration ? this.pos = t = K.easing[this.easing](e, this.options.duration * e, 0, 1, this.options.duration) : this.pos = t = e, this.now = (this.end - this.start) * t + this.start, this.options.step && this.options.step.call(this.elem, this.now, this), i && i.set ? i.set(this) : A.propHooks._default.set(this), this
  }
 }, A.prototype.init.prototype = A.prototype, A.propHooks = {
  _default: {
   get: function(e) {
    var t;
    return null == e.elem[e.prop] || e.elem.style && null != e.elem.style[e.prop] ? (t = K.css(e.elem, e.prop, ""), t && "auto" !== t ? t : 0) : e.elem[e.prop]
   },
   set: function(e) {
    K.fx.step[e.prop] ? K.fx.step[e.prop](e) : e.elem.style && (null != e.elem.style[K.cssProps[e.prop]] || K.cssHooks[e.prop]) ? K.style(e.elem, e.prop, e.now + e.unit) : e.elem[e.prop] = e.now
   }
  }
 }, A.propHooks.scrollTop = A.propHooks.scrollLeft = {
  set: function(e) {
   e.elem.nodeType && e.elem.parentNode && (e.elem[e.prop] = e.now)
  }
 }, K.easing = {
  linear: function(e) {
   return e
  },
  swing: function(e) {
   return .5 - Math.cos(e * Math.PI) / 2
  }
 }, K.fx = A.prototype.init, K.fx.step = {};
 var Ye, Ze, Ge = /^(?:toggle|show|hide)$/,
  Je = new RegExp("^(?:([+-])=|)(" + we + ")([a-z%]*)$", "i"),
  Ke = /queueHooks$/,
  et = [L],
  tt = {
   "*": [function(e, t) {
    var i = this.createTween(e, t),
     n = i.cur(),
     o = Je.exec(t),
     r = o && o[3] || (K.cssNumber[e] ? "" : "px"),
     s = (K.cssNumber[e] || "px" !== r && +n) && Je.exec(K.css(i.elem, e)),
     a = 1,
     l = 20;
    if (s && s[3] !== r) {
     r = r || s[3], o = o || [], s = +n || 1;
     do {
      a = a || ".5", s /= a, K.style(i.elem, e, s + r)
     } while (a !== (a = i.cur() / n) && 1 !== a && --l)
    }
    return o && (s = i.start = +s || +n || 0, i.unit = r, i.end = o[1] ? s + (o[1] + 1) * o[2] : +o[2]), i
   }]
  };
 K.Animation = K.extend(N, {
   tweener: function(e, t) {
    K.isFunction(e) ? (t = e, e = ["*"]) : e = e.split(" ");
    for (var i, n = 0, o = e.length; o > n; n++) i = e[n], tt[i] = tt[i] || [], tt[i].unshift(t)
   },
   prefilter: function(e, t) {
    t ? et.unshift(e) : et.push(e)
   }
  }), K.speed = function(e, t, i) {
   var n = e && "object" == typeof e ? K.extend({}, e) : {
    complete: i || !i && t || K.isFunction(e) && e,
    duration: e,
    easing: i && t || t && !K.isFunction(t) && t
   };
   return n.duration = K.fx.off ? 0 : "number" == typeof n.duration ? n.duration : n.duration in K.fx.speeds ? K.fx.speeds[n.duration] : K.fx.speeds._default, (null == n.queue || !0 === n.queue) && (n.queue = "fx"), n.old = n.complete, n.complete = function() {
    K.isFunction(n.old) && n.old.call(this), n.queue && K.dequeue(this, n.queue)
   }, n
  }, K.fn.extend({
   fadeTo: function(e, t, i, n) {
    return this.filter(Ce).css("opacity", 0).show().end().animate({
     opacity: t
    }, e, i, n)
   },
   animate: function(e, t, i, n) {
    var o = K.isEmptyObject(e),
     r = K.speed(t, i, n),
     s = function() {
      var t = N(this, K.extend({}, e), r);
      (o || ve.get(this, "finish")) && t.stop(!0)
     };
    return s.finish = s, o || !1 === r.queue ? this.each(s) : this.queue(r.queue, s)
   },
   stop: function(e, t, i) {
    var n = function(e) {
     var t = e.stop;
     delete e.stop, t(i)
    };
    return "string" != typeof e && (i = t, t = e, e = void 0), t && !1 !== e && this.queue(e || "fx", []), this.each(function() {
     var t = !0,
      o = null != e && e + "queueHooks",
      r = K.timers,
      s = ve.get(this);
     if (o) s[o] && s[o].stop && n(s[o]);
     else
      for (o in s) s[o] && s[o].stop && Ke.test(o) && n(s[o]);
     for (o = r.length; o--;) r[o].elem !== this || null != e && r[o].queue !== e || (r[o].anim.stop(i), t = !1, r.splice(o, 1));
     (t || !i) && K.dequeue(this, e)
    })
   },
   finish: function(e) {
    return !1 !== e && (e = e || "fx"), this.each(function() {
     var t, i = ve.get(this),
      n = i[e + "queue"],
      o = i[e + "queueHooks"],
      r = K.timers,
      s = n ? n.length : 0;
     for (i.finish = !0, K.queue(this, e, []), o && o.stop && o.stop.call(this, !0), t = r.length; t--;) r[t].elem === this && r[t].queue === e && (r[t].anim.stop(!0), r.splice(t, 1));
     for (t = 0; s > t; t++) n[t] && n[t].finish && n[t].finish.call(this);
     delete i.finish
    })
   }
  }), K.each(["toggle", "show", "hide"], function(e, t) {
   var i = K.fn[t];
   K.fn[t] = function(e, n, o) {
    return null == e || "boolean" == typeof e ? i.apply(this, arguments) : this.animate(j(t, !0), e, n, o)
   }
  }), K.each({
   slideDown: j("show"),
   slideUp: j("hide"),
   slideToggle: j("toggle"),
   fadeIn: {
    opacity: "show"
   },
   fadeOut: {
    opacity: "hide"
   },
   fadeToggle: {
    opacity: "toggle"
   }
  }, function(e, t) {
   K.fn[e] = function(e, i, n) {
    return this.animate(t, e, i, n)
   }
  }), K.timers = [], K.fx.tick = function() {
   var e, t = 0,
    i = K.timers;
   for (Ye = K.now(); t < i.length; t++)(e = i[t])() || i[t] !== e || i.splice(t--, 1);
   i.length || K.fx.stop(), Ye = void 0
  }, K.fx.timer = function(e) {
   K.timers.push(e), e() ? K.fx.start() : K.timers.pop()
  }, K.fx.interval = 13, K.fx.start = function() {
   Ze || (Ze = setInterval(K.fx.tick, K.fx.interval))
  }, K.fx.stop = function() {
   clearInterval(Ze), Ze = null
  }, K.fx.speeds = {
   slow: 600,
   fast: 200,
   _default: 400
  }, K.fn.delay = function(e, t) {
   return e = K.fx ? K.fx.speeds[e] || e : e, t = t || "fx", this.queue(t, function(t, i) {
    var n = setTimeout(t, e);
    i.stop = function() {
     clearTimeout(n)
    }
   })
  },
  function() {
   var e = G.createElement("input"),
    t = G.createElement("select"),
    i = t.appendChild(G.createElement("option"));
   e.type = "checkbox", Z.checkOn = "" !== e.value, Z.optSelected = i.selected, t.disabled = !0, Z.optDisabled = !i.disabled, e = G.createElement("input"), e.value = "t", e.type = "radio", Z.radioValue = "t" === e.value
  }();
 var it, nt = K.expr.attrHandle;
 K.fn.extend({
  attr: function(e, t) {
   return me(this, K.attr, e, t, arguments.length > 1)
  },
  removeAttr: function(e) {
   return this.each(function() {
    K.removeAttr(this, e)
   })
  }
 }), K.extend({
  attr: function(e, t, i) {
   var n, o, r = e.nodeType;
   if (e && 3 !== r && 8 !== r && 2 !== r) return typeof e.getAttribute === Te ? K.prop(e, t, i) : (1 === r && K.isXMLDoc(e) || (t = t.toLowerCase(), n = K.attrHooks[t] || (K.expr.match.bool.test(t) ? it : void 0)), void 0 === i ? n && "get" in n && null !== (o = n.get(e, t)) ? o : (o = K.find.attr(e, t), null == o ? void 0 : o) : null !== i ? n && "set" in n && void 0 !== (o = n.set(e, i, t)) ? o : (e.setAttribute(t, i + ""), i) : void K.removeAttr(e, t))
  },
  removeAttr: function(e, t) {
   var i, n, o = 0,
    r = t && t.match(he);
   if (r && 1 === e.nodeType)
    for (; i = r[o++];) n = K.propFix[i] || i, K.expr.match.bool.test(i) && (e[n] = !1), e.removeAttribute(i)
  },
  attrHooks: {
   type: {
    set: function(e, t) {
     if (!Z.radioValue && "radio" === t && K.nodeName(e, "input")) {
      var i = e.value;
      return e.setAttribute("type", t), i && (e.value = i), t
     }
    }
   }
  }
 }), it = {
  set: function(e, t, i) {
   return !1 === t ? K.removeAttr(e, i) : e.setAttribute(i, i), i
  }
 }, K.each(K.expr.match.bool.source.match(/\w+/g), function(e, t) {
  var i = nt[t] || K.find.attr;
  nt[t] = function(e, t, n) {
   var o, r;
   return n || (r = nt[t], nt[t] = o, o = null != i(e, t, n) ? t.toLowerCase() : null, nt[t] = r), o
  }
 });
 var ot = /^(?:input|select|textarea|button)$/i;
 K.fn.extend({
  prop: function(e, t) {
   return me(this, K.prop, e, t, arguments.length > 1)
  },
  removeProp: function(e) {
   return this.each(function() {
    delete this[K.propFix[e] || e]
   })
  }
 }), K.extend({
  propFix: {
   for: "htmlFor",
   class: "className"
  },
  prop: function(e, t, i) {
   var n, o, r, s = e.nodeType;
   if (e && 3 !== s && 8 !== s && 2 !== s) return r = 1 !== s || !K.isXMLDoc(e), r && (t = K.propFix[t] || t, o = K.propHooks[t]), void 0 !== i ? o && "set" in o && void 0 !== (n = o.set(e, i, t)) ? n : e[t] = i : o && "get" in o && null !== (n = o.get(e, t)) ? n : e[t]
  },
  propHooks: {
   tabIndex: {
    get: function(e) {
     return e.hasAttribute("tabindex") || ot.test(e.nodeName) || e.href ? e.tabIndex : -1
    }
   }
  }
 }), Z.optSelected || (K.propHooks.selected = {
  get: function(e) {
   var t = e.parentNode;
   return t && t.parentNode && t.parentNode.selectedIndex, null
  }
 }), K.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap", "frameBorder", "contentEditable"], function() {
  K.propFix[this.toLowerCase()] = this
 });
 var rt = /[\t\r\n\f]/g;
 K.fn.extend({
  addClass: function(e) {
   var t, i, n, o, r, s, a = "string" == typeof e && e,
    l = 0,
    c = this.length;
   if (K.isFunction(e)) return this.each(function(t) {
    K(this).addClass(e.call(this, t, this.className))
   });
   if (a)
    for (t = (e || "").match(he) || []; c > l; l++)
     if (i = this[l], n = 1 === i.nodeType && (i.className ? (" " + i.className + " ").replace(rt, " ") : " ")) {
      for (r = 0; o = t[r++];) n.indexOf(" " + o + " ") < 0 && (n += o + " ");
      s = K.trim(n), i.className !== s && (i.className = s)
     } return this
  },
  removeClass: function(e) {
   var t, i, n, o, r, s, a = 0 === arguments.length || "string" == typeof e && e,
    l = 0,
    c = this.length;
   if (K.isFunction(e)) return this.each(function(t) {
    K(this).removeClass(e.call(this, t, this.className))
   });
   if (a)
    for (t = (e || "").match(he) || []; c > l; l++)
     if (i = this[l], n = 1 === i.nodeType && (i.className ? (" " + i.className + " ").replace(rt, " ") : "")) {
      for (r = 0; o = t[r++];)
       for (; n.indexOf(" " + o + " ") >= 0;) n = n.replace(" " + o + " ", " ");
      s = e ? K.trim(n) : "", i.className !== s && (i.className = s)
     } return this
  },
  toggleClass: function(e, t) {
   var i = typeof e;
   return "boolean" == typeof t && "string" === i ? t ? this.addClass(e) : this.removeClass(e) : this.each(K.isFunction(e) ? function(i) {
    K(this).toggleClass(e.call(this, i, this.className, t), t)
   } : function() {
    if ("string" === i)
     for (var t, n = 0, o = K(this), r = e.match(he) || []; t = r[n++];) o.hasClass(t) ? o.removeClass(t) : o.addClass(t);
    else(i === Te || "boolean" === i) && (this.className && ve.set(this, "__className__", this.className), this.className = this.className || !1 === e ? "" : ve.get(this, "__className__") || "")
   })
  },
  hasClass: function(e) {
   for (var t = " " + e + " ", i = 0, n = this.length; n > i; i++)
    if (1 === this[i].nodeType && (" " + this[i].className + " ").replace(rt, " ").indexOf(t) >= 0) return !0;
   return !1
  }
 });
 var st = /\r/g;
 K.fn.extend({
  val: function(e) {
   var t, i, n, o = this[0];
   return arguments.length ? (n = K.isFunction(e), this.each(function(i) {
    var o;
    1 === this.nodeType && (o = n ? e.call(this, i, K(this).val()) : e, null == o ? o = "" : "number" == typeof o ? o += "" : K.isArray(o) && (o = K.map(o, function(e) {
     return null == e ? "" : e + ""
    })), (t = K.valHooks[this.type] || K.valHooks[this.nodeName.toLowerCase()]) && "set" in t && void 0 !== t.set(this, o, "value") || (this.value = o))
   })) : o ? (t = K.valHooks[o.type] || K.valHooks[o.nodeName.toLowerCase()], t && "get" in t && void 0 !== (i = t.get(o, "value")) ? i : (i = o.value, "string" == typeof i ? i.replace(st, "") : null == i ? "" : i)) : void 0
  }
 }), K.extend({
  valHooks: {
   option: {
    get: function(e) {
     var t = K.find.attr(e, "value");
     return null != t ? t : K.trim(K.text(e))
    }
   },
   select: {
    get: function(e) {
     for (var t, i, n = e.options, o = e.selectedIndex, r = "select-one" === e.type || 0 > o, s = r ? null : [], a = r ? o + 1 : n.length, l = 0 > o ? a : r ? o : 0; a > l; l++)
      if (i = n[l], !(!i.selected && l !== o || (Z.optDisabled ? i.disabled : null !== i.getAttribute("disabled")) || i.parentNode.disabled && K.nodeName(i.parentNode, "optgroup"))) {
       if (t = K(i).val(), r) return t;
       s.push(t)
      } return s
    },
    set: function(e, t) {
     for (var i, n, o = e.options, r = K.makeArray(t), s = o.length; s--;) n = o[s], (n.selected = K.inArray(n.value, r) >= 0) && (i = !0);
     return i || (e.selectedIndex = -1), r
    }
   }
  }
 }), K.each(["radio", "checkbox"], function() {
  K.valHooks[this] = {
   set: function(e, t) {
    return K.isArray(t) ? e.checked = K.inArray(K(e).val(), t) >= 0 : void 0
   }
  }, Z.checkOn || (K.valHooks[this].get = function(e) {
   return null === e.getAttribute("value") ? "on" : e.value
  })
 }), K.each("blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error contextmenu".split(" "), function(e, t) {
  K.fn[t] = function(e, i) {
   return arguments.length > 0 ? this.on(t, null, e, i) : this.trigger(t)
  }
 }), K.fn.extend({
  hover: function(e, t) {
   return this.mouseenter(e).mouseleave(t || e)
  },
  bind: function(e, t, i) {
   return this.on(e, null, t, i)
  },
  unbind: function(e, t) {
   return this.off(e, null, t)
  },
  delegate: function(e, t, i, n) {
   return this.on(t, e, i, n)
  },
  undelegate: function(e, t, i) {
   return 1 === arguments.length ? this.off(e, "**") : this.off(t, e || "**", i)
  }
 });
 var at = K.now(),
  lt = /\?/;
 K.parseJSON = function(e) {
  return JSON.parse(e + "")
 }, K.parseXML = function(e) {
  var t, i;
  if (!e || "string" != typeof e) return null;
  try {
   i = new DOMParser, t = i.parseFromString(e, "text/xml")
  } catch (e) {
   t = void 0
  }
  return (!t || t.getElementsByTagName("parsererror").length) && K.error("Invalid XML: " + e), t
 };
 var ct = /#.*$/,
  dt = /([?&])_=[^&]*/,
  ut = /^(.*?):[ \t]*([^\r\n]*)$/gm,
  ht = /^(?:about|app|app-storage|.+-extension|file|res|widget):$/,
  pt = /^(?:GET|HEAD)$/,
  ft = /^\/\//,
  mt = /^([\w.+-]+:)(?:\/\/(?:[^\/?#]*@|)([^\/?#:]*)(?::(\d+)|)|)/,
  vt = {},
  gt = {},
  yt = "*/".concat("*"),
  bt = e.location.href,
  wt = mt.exec(bt.toLowerCase()) || [];
 K.extend({
  active: 0,
  lastModified: {},
  etag: {},
  ajaxSettings: {
   url: bt,
   type: "GET",
   isLocal: ht.test(wt[1]),
   global: !0,
   processData: !0,
   async: !0,
   contentType: "application/x-www-form-urlencoded; charset=UTF-8",
   accepts: {
    "*": yt,
    text: "text/plain",
    html: "text/html",
    xml: "application/xml, text/xml",
    json: "application/json, text/javascript"
   },
   contents: {
    xml: /xml/,
    html: /html/,
    json: /json/
   },
   responseFields: {
    xml: "responseXML",
    text: "responseText",
    json: "responseJSON"
   },
   converters: {
    "* text": String,
    "text html": !0,
    "text json": K.parseJSON,
    "text xml": K.parseXML
   },
   flatOptions: {
    url: !0,
    context: !0
   }
  },
  ajaxSetup: function(e, t) {
   return t ? H(H(e, K.ajaxSettings), t) : H(K.ajaxSettings, e)
  },
  ajaxPrefilter: D(vt),
  ajaxTransport: D(gt),
  ajax: function(e, t) {
   function i(e, t, i, s) {
    var l, d, g, y, w, C = t;
    2 !== b && (b = 2, a && clearTimeout(a), n = void 0, r = s || "", x.readyState = e > 0 ? 4 : 0, l = e >= 200 && 300 > e || 304 === e, i && (y = I(u, x, i)), y = O(u, y, x, l), l ? (u.ifModified && (w = x.getResponseHeader("Last-Modified"), w && (K.lastModified[o] = w), (w = x.getResponseHeader("etag")) && (K.etag[o] = w)), 204 === e || "HEAD" === u.type ? C = "nocontent" : 304 === e ? C = "notmodified" : (C = y.state, d = y.data, g = y.error, l = !g)) : (g = C, (e || !C) && (C = "error", 0 > e && (e = 0))), x.status = e, x.statusText = (t || C) + "", l ? f.resolveWith(h, [d, C, x]) : f.rejectWith(h, [x, C, g]), x.statusCode(v), v = void 0, c && p.trigger(l ? "ajaxSuccess" : "ajaxError", [x, u, l ? d : g]), m.fireWith(h, [x, C]), c && (p.trigger("ajaxComplete", [x, u]), --K.active || K.event.trigger("ajaxStop")))
   }
   "object" == typeof e && (t = e, e = void 0), t = t || {};
   var n, o, r, s, a, l, c, d, u = K.ajaxSetup({}, t),
    h = u.context || u,
    p = u.context && (h.nodeType || h.jquery) ? K(h) : K.event,
    f = K.Deferred(),
    m = K.Callbacks("once memory"),
    v = u.statusCode || {},
    g = {},
    y = {},
    b = 0,
    w = "canceled",
    x = {
     readyState: 0,
     getResponseHeader: function(e) {
      var t;
      if (2 === b) {
       if (!s)
        for (s = {}; t = ut.exec(r);) s[t[1].toLowerCase()] = t[2];
       t = s[e.toLowerCase()]
      }
      return null == t ? null : t
     },
     getAllResponseHeaders: function() {
      return 2 === b ? r : null
     },
     setRequestHeader: function(e, t) {
      var i = e.toLowerCase();
      return b || (e = y[i] = y[i] || e, g[e] = t), this
     },
     overrideMimeType: function(e) {
      return b || (u.mimeType = e), this
     },
     statusCode: function(e) {
      var t;
      if (e)
       if (2 > b)
        for (t in e) v[t] = [v[t], e[t]];
       else x.always(e[x.status]);
      return this
     },
     abort: function(e) {
      var t = e || w;
      return n && n.abort(t), i(0, t), this
     }
    };
   if (f.promise(x).complete = m.add, x.success = x.done, x.error = x.fail, u.url = ((e || u.url || bt) + "").replace(ct, "").replace(ft, wt[1] + "//"), u.type = t.method || t.type || u.method || u.type, u.dataTypes = K.trim(u.dataType || "*").toLowerCase().match(he) || [""], null == u.crossDomain && (l = mt.exec(u.url.toLowerCase()), u.crossDomain = !(!l || l[1] === wt[1] && l[2] === wt[2] && (l[3] || ("http:" === l[1] ? "80" : "443")) === (wt[3] || ("http:" === wt[1] ? "80" : "443")))), u.data && u.processData && "string" != typeof u.data && (u.data = K.param(u.data, u.traditional)), M(vt, u, t, x), 2 === b) return x;
   c = K.event && u.global, c && 0 == K.active++ && K.event.trigger("ajaxStart"), u.type = u.type.toUpperCase(), u.hasContent = !pt.test(u.type), o = u.url, u.hasContent || (u.data && (o = u.url += (lt.test(o) ? "&" : "?") + u.data, delete u.data), !1 === u.cache && (u.url = dt.test(o) ? o.replace(dt, "$1_=" + at++) : o + (lt.test(o) ? "&" : "?") + "_=" + at++)), u.ifModified && (K.lastModified[o] && x.setRequestHeader("If-Modified-Since", K.lastModified[o]), K.etag[o] && x.setRequestHeader("If-None-Match", K.etag[o])), (u.data && u.hasContent && !1 !== u.contentType || t.contentType) && x.setRequestHeader("Content-Type", u.contentType), x.setRequestHeader("Accept", u.dataTypes[0] && u.accepts[u.dataTypes[0]] ? u.accepts[u.dataTypes[0]] + ("*" !== u.dataTypes[0] ? ", " + yt + "; q=0.01" : "") : u.accepts["*"]);
   for (d in u.headers) x.setRequestHeader(d, u.headers[d]);
   if (u.beforeSend && (!1 === u.beforeSend.call(h, x, u) || 2 === b)) return x.abort();
   w = "abort";
   for (d in {
     success: 1,
     error: 1,
     complete: 1
    }) x[d](u[d]);
   if (n = M(gt, u, t, x)) {
    x.readyState = 1, c && p.trigger("ajaxSend", [x, u]), u.async && u.timeout > 0 && (a = setTimeout(function() {
     x.abort("timeout")
    }, u.timeout));
    try {
     b = 1, n.send(g, i)
    } catch (e) {
     if (!(2 > b)) throw e;
     i(-1, e)
    }
   } else i(-1, "No Transport");
   return x
  },
  getJSON: function(e, t, i) {
   return K.get(e, t, i, "json")
  },
  getScript: function(e, t) {
   return K.get(e, void 0, t, "script")
  }
 }), K.each(["get", "post"], function(e, t) {
  K[t] = function(e, i, n, o) {
   return K.isFunction(i) && (o = o || n, n = i, i = void 0), K.ajax({
    url: e,
    type: t,
    dataType: o,
    data: i,
    success: n
   })
  }
 }), K._evalUrl = function(e) {
  return K.ajax({
   url: e,
   type: "GET",
   dataType: "script",
   async: !1,
   global: !1,
   throws: !0
  })
 }, K.fn.extend({
  wrapAll: function(e) {
   var t;
   return K.isFunction(e) ? this.each(function(t) {
    K(this).wrapAll(e.call(this, t))
   }) : (this[0] && (t = K(e, this[0].ownerDocument).eq(0).clone(!0), this[0].parentNode && t.insertBefore(this[0]), t.map(function() {
    for (var e = this; e.firstElementChild;) e = e.firstElementChild;
    return e
   }).append(this)), this)
  },
  wrapInner: function(e) {
   return this.each(K.isFunction(e) ? function(t) {
    K(this).wrapInner(e.call(this, t))
   } : function() {
    var t = K(this),
     i = t.contents();
    i.length ? i.wrapAll(e) : t.append(e)
   })
  },
  wrap: function(e) {
   var t = K.isFunction(e);
   return this.each(function(i) {
    K(this).wrapAll(t ? e.call(this, i) : e)
   })
  },
  unwrap: function() {
   return this.parent().each(function() {
    K.nodeName(this, "body") || K(this).replaceWith(this.childNodes)
   }).end()
  }
 }), K.expr.filters.hidden = function(e) {
  return e.offsetWidth <= 0 && e.offsetHeight <= 0
 }, K.expr.filters.visible = function(e) {
  return !K.expr.filters.hidden(e)
 };
 var xt = /%20/g,
  Ct = /\[\]$/,
  kt = /\r?\n/g,
  Tt = /^(?:submit|button|image|reset|file)$/i,
  St = /^(?:input|select|textarea|keygen)/i;
 K.param = function(e, t) {
  var i, n = [],
   o = function(e, t) {
    t = K.isFunction(t) ? t() : null == t ? "" : t, n[n.length] = encodeURIComponent(e) + "=" + encodeURIComponent(t)
   };
  if (void 0 === t && (t = K.ajaxSettings && K.ajaxSettings.traditional), K.isArray(e) || e.jquery && !K.isPlainObject(e)) K.each(e, function() {
   o(this.name, this.value)
  });
  else
   for (i in e) z(i, e[i], t, o);
  return n.join("&").replace(xt, "+")
 }, K.fn.extend({
  serialize: function() {
   return K.param(this.serializeArray())
  },
  serializeArray: function() {
   return this.map(function() {
    var e = K.prop(this, "elements");
    return e ? K.makeArray(e) : this
   }).filter(function() {
    var e = this.type;
    return this.name && !K(this).is(":disabled") && St.test(this.nodeName) && !Tt.test(e) && (this.checked || !ke.test(e))
   }).map(function(e, t) {
    var i = K(this).val();
    return null == i ? null : K.isArray(i) ? K.map(i, function(e) {
     return {
      name: t.name,
      value: e.replace(kt, "\r\n")
     }
    }) : {
     name: t.name,
     value: i.replace(kt, "\r\n")
    }
   }).get()
  }
 }), K.ajaxSettings.xhr = function() {
  try {
   return new XMLHttpRequest
  } catch (e) {}
 };
 var $t = 0,
  Pt = {},
  At = {
   0: 200,
   1223: 204
  },
  Et = K.ajaxSettings.xhr();
 e.attachEvent && e.attachEvent("onunload", function() {
  for (var e in Pt) Pt[e]()
 }), Z.cors = !!Et && "withCredentials" in Et, Z.ajax = Et = !!Et, K.ajaxTransport(function(e) {
  var t;
  return Z.cors || Et && !e.crossDomain ? {
   send: function(i, n) {
    var o, r = e.xhr(),
     s = ++$t;
    if (r.open(e.type, e.url, e.async, e.username, e.password), e.xhrFields)
     for (o in e.xhrFields) r[o] = e.xhrFields[o];
    e.mimeType && r.overrideMimeType && r.overrideMimeType(e.mimeType), e.crossDomain || i["X-Requested-With"] || (i["X-Requested-With"] = "XMLHttpRequest");
    for (o in i) r.setRequestHeader(o, i[o]);
    t = function(e) {
     return function() {
      t && (delete Pt[s], t = r.onload = r.onerror = null, "abort" === e ? r.abort() : "error" === e ? n(r.status, r.statusText) : n(At[r.status] || r.status, r.statusText, "string" == typeof r.responseText ? {
       text: r.responseText
      } : void 0, r.getAllResponseHeaders()))
     }
    }, r.onload = t(), r.onerror = t("error"), t = Pt[s] = t("abort");
    try {
     r.send(e.hasContent && e.data || null)
    } catch (e) {
     if (t) throw e
    }
   },
   abort: function() {
    t && t()
   }
  } : void 0
 }), K.ajaxSetup({
  accepts: {
   script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"
  },
  contents: {
   script: /(?:java|ecma)script/
  },
  converters: {
   "text script": function(e) {
    return K.globalEval(e), e
   }
  }
 }), K.ajaxPrefilter("script", function(e) {
  void 0 === e.cache && (e.cache = !1), e.crossDomain && (e.type = "GET")
 }), K.ajaxTransport("script", function(e) {
  if (e.crossDomain) {
   var t, i;
   return {
    send: function(n, o) {
     t = K("<script>").prop({
      async: !0,
      charset: e.scriptCharset,
      src: e.url
     }).on("load error", i = function(e) {
      t.remove(), i = null, e && o("error" === e.type ? 404 : 200, e.type)
     }), G.head.appendChild(t[0])
    },
    abort: function() {
     i && i()
    }
   }
  }
 });
 var jt = [],
  Ft = /(=)\?(?=&|$)|\?\?/;
 K.ajaxSetup({
  jsonp: "callback",
  jsonpCallback: function() {
   var e = jt.pop() || K.expando + "_" + at++;
   return this[e] = !0, e
  }
 }), K.ajaxPrefilter("json jsonp", function(t, i, n) {
  var o, r, s, a = !1 !== t.jsonp && (Ft.test(t.url) ? "url" : "string" == typeof t.data && !(t.contentType || "").indexOf("application/x-www-form-urlencoded") && Ft.test(t.data) && "data");
  return a || "jsonp" === t.dataTypes[0] ? (o = t.jsonpCallback = K.isFunction(t.jsonpCallback) ? t.jsonpCallback() : t.jsonpCallback, a ? t[a] = t[a].replace(Ft, "$1" + o) : !1 !== t.jsonp && (t.url += (lt.test(t.url) ? "&" : "?") + t.jsonp + "=" + o), t.converters["script json"] = function() {
   return s || K.error(o + " was not called"), s[0]
  }, t.dataTypes[0] = "json", r = e[o], e[o] = function() {
   s = arguments
  }, n.always(function() {
   e[o] = r, t[o] && (t.jsonpCallback = i.jsonpCallback, jt.push(o)), s && K.isFunction(r) && r(s[0]), s = r = void 0
  }), "script") : void 0
 }), K.parseHTML = function(e, t, i) {
  if (!e || "string" != typeof e) return null;
  "boolean" == typeof t && (i = t, t = !1), t = t || G;
  var n = se.exec(e),
   o = !i && [];
  return n ? [t.createElement(n[1])] : (n = K.buildFragment([e], t, o), o && o.length && K(o).remove(), K.merge([], n.childNodes))
 };
 var Lt = K.fn.load;
 K.fn.load = function(e, t, i) {
  if ("string" != typeof e && Lt) return Lt.apply(this, arguments);
  var n, o, r, s = this,
   a = e.indexOf(" ");
  return a >= 0 && (n = K.trim(e.slice(a)), e = e.slice(0, a)), K.isFunction(t) ? (i = t, t = void 0) : t && "object" == typeof t && (o = "POST"), s.length > 0 && K.ajax({
   url: e,
   type: o,
   dataType: "html",
   data: t
  }).done(function(e) {
   r = arguments, s.html(n ? K("<div>").append(K.parseHTML(e)).find(n) : e)
  }).complete(i && function(e, t) {
   s.each(i, r || [e.responseText, t, e])
  }), this
 }, K.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], function(e, t) {
  K.fn[t] = function(e) {
   return this.on(t, e)
  }
 }), K.expr.filters.animated = function(e) {
  return K.grep(K.timers, function(t) {
   return e === t.elem
  }).length
 };
 var _t = e.document.documentElement;
 K.offset = {
  setOffset: function(e, t, i) {
   var n, o, r, s, a, l, c, d = K.css(e, "position"),
    u = K(e),
    h = {};
   "static" === d && (e.style.position = "relative"), a = u.offset(), r = K.css(e, "top"), l = K.css(e, "left"), c = ("absolute" === d || "fixed" === d) && (r + l).indexOf("auto") > -1, c ? (n = u.position(), s = n.top, o = n.left) : (s = parseFloat(r) || 0, o = parseFloat(l) || 0), K.isFunction(t) && (t = t.call(e, i, a)), null != t.top && (h.top = t.top - a.top + s), null != t.left && (h.left = t.left - a.left + o), "using" in t ? t.using.call(e, h) : u.css(h)
  }
 }, K.fn.extend({
  offset: function(e) {
   if (arguments.length) return void 0 === e ? this : this.each(function(t) {
    K.offset.setOffset(this, e, t)
   });
   var t, i, n = this[0],
    o = {
     top: 0,
     left: 0
    },
    r = n && n.ownerDocument;
   return r ? (t = r.documentElement, K.contains(t, n) ? (typeof n.getBoundingClientRect !== Te && (o = n.getBoundingClientRect()), i = R(r), {
    top: o.top + i.pageYOffset - t.clientTop,
    left: o.left + i.pageXOffset - t.clientLeft
   }) : o) : void 0
  },
  position: function() {
   if (this[0]) {
    var e, t, i = this[0],
     n = {
      top: 0,
      left: 0
     };
    return "fixed" === K.css(i, "position") ? t = i.getBoundingClientRect() : (e = this.offsetParent(), t = this.offset(), K.nodeName(e[0], "html") || (n = e.offset()), n.top += K.css(e[0], "borderTopWidth", !0), n.left += K.css(e[0], "borderLeftWidth", !0)), {
     top: t.top - n.top - K.css(i, "marginTop", !0),
     left: t.left - n.left - K.css(i, "marginLeft", !0)
    }
   }
  },
  offsetParent: function() {
   return this.map(function() {
    for (var e = this.offsetParent || _t; e && !K.nodeName(e, "html") && "static" === K.css(e, "position");) e = e.offsetParent;
    return e || _t
   })
  }
 }), K.each({
  scrollLeft: "pageXOffset",
  scrollTop: "pageYOffset"
 }, function(t, i) {
  var n = "pageYOffset" === i;
  K.fn[t] = function(o) {
   return me(this, function(t, o, r) {
    var s = R(t);
    return void 0 === r ? s ? s[i] : t[o] : void(s ? s.scrollTo(n ? e.pageXOffset : r, n ? r : e.pageYOffset) : t[o] = r)
   }, t, o, arguments.length, null)
  }
 }), K.each(["top", "left"], function(e, t) {
  K.cssHooks[t] = C(Z.pixelPosition, function(e, i) {
   return i ? (i = x(e, t), Re.test(i) ? K(e).position()[t] + "px" : i) : void 0
  })
 }), K.each({
  Height: "height",
  Width: "width"
 }, function(e, t) {
  K.each({
   padding: "inner" + e,
   content: t,
   "": "outer" + e
  }, function(i, n) {
   K.fn[n] = function(n, o) {
    var r = arguments.length && (i || "boolean" != typeof n),
     s = i || (!0 === n || !0 === o ? "margin" : "border");
    return me(this, function(t, i, n) {
     var o;
     return K.isWindow(t) ? t.document.documentElement["client" + e] : 9 === t.nodeType ? (o = t.documentElement, Math.max(t.body["scroll" + e], o["scroll" + e], t.body["offset" + e], o["offset" + e], o["client" + e])) : void 0 === n ? K.css(t, i, s) : K.style(t, i, n, s)
    }, t, r ? n : void 0, r, null)
   }
  })
 }), K.fn.size = function() {
  return this.length
 }, K.fn.andSelf = K.fn.addBack, "function" == typeof define && define.amd && define("jquery", [], function() {
  return K
 });
 var Nt = e.jQuery,
  Dt = e.$;
 return K.noConflict = function(t) {
  return e.$ === K && (e.$ = Dt), t && e.jQuery === K && (e.jQuery = Nt), K
 }, typeof t === Te && (e.jQuery = e.$ = K), K
}),
function(exports, global) {
 var origDefine = global.define,
  get = function(e) {
   var t, i = e.split("."),
    n = global;
   for (t = 0; t < i.length && n; t++) n = n[i[t]];
   return n
  },
  modules = global.define && global.define.modules || global._define && global._define.modules || {},
  ourDefine = global.define = function(e, t, i) {
   var n;
   "function" == typeof t && (i = t, t = []);
   var o, r = [];
   for (o = 0; o < t.length; o++) r.push(exports[t[o]] ? get(exports[t[o]]) : modules[t[o]] || get(t[o]));
   if (!t.length && i.length) {
    n = {
     exports: {}
    };
    var s = function(e) {
     return exports[e] ? get(exports[e]) : modules[e]
    };
    r.push(s, n.exports, n)
   } else r[0] || "exports" !== t[0] ? r[0] || "module" !== t[0] || (r[0] = {
    id: e
   }) : (n = {
    exports: {}
   }, r[0] = n.exports, "module" === t[1] && (r[1] = n));
   global.define = origDefine;
   var a = i ? i.apply(null, r) : void 0;
   global.define = ourDefine, modules[e] = n && n.exports ? n.exports : a
  };
 global.define.orig = origDefine, global.define.modules = modules, global.define.amd = !0, ourDefine("@loader", [], function() {
  var noop = function() {};
  return {
   get: function() {
    return {
     prepareGlobal: noop,
     retrieveGlobal: noop
    }
   },
   global: global,
   __exec: function(__load) {
    eval("(function() { " + __load.source + " \n }).call(global);")
   }
  }
 })
}({}, window), define("can/util/can", [], function() {
  var e = "undefined" != typeof window ? window : "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? self : global,
   t = {};
  ("undefined" == typeof GLOBALCAN || !1 !== GLOBALCAN) && (e.can = t), t.global = e, t.k = function() {}, t.isDeferred = function(e) {
   return t.dev && t.dev.warn("can.isDeferred: this function is deprecated and will be removed in a future release. can.isPromise replaces the functionality of can.isDeferred."), e && "function" == typeof e.then && "function" == typeof e.pipe
  }, t.isPromise = function(e) {
   return !!e && (window.Promise && e instanceof Promise || t.isFunction(e.then) && (void 0 === t.List || !(e instanceof t.List)))
  }, t.isMapLike = function(e) {
   return t.Map && (e instanceof t.Map || e && e.___get)
  };
  var i = 0;
  t.cid = function(e, t) {
   return e._cid || (i++, e._cid = (t || "") + i), e._cid
  }, t.VERSION = "@EDGE", t.simpleExtend = function(e, t) {
   for (var i in t) e[i] = t[i];
   return e
  }, t.last = function(e) {
   return e && e[e.length - 1]
  }, t.isDOM = function(e) {
   return (e.ownerDocument || e) === t.global.document
  }, t.childNodes = function(e) {
   var t = e.childNodes;
   if ("length" in t) return t;
   for (var i = e.firstChild, n = []; i;) n.push(i), i = i.nextSibling;
   return n
  };
  var n = Function.prototype.bind;
  t.proxy = n ? function(e, t) {
   return n.call(e, t)
  } : function(e, t) {
   return function() {
    return e.apply(t, arguments)
   }
  }, t.frag = function(e, i) {
   var n, o = i || t.document || t.global.document;
   return e && "string" != typeof e ? 11 === e.nodeType ? e : "number" == typeof e.nodeType ? (n = o.createDocumentFragment(), n.appendChild(e), n) : "number" == typeof e.length ? (n = o.createDocumentFragment(), t.each(e, function(e) {
    n.appendChild(t.frag(e))
   }), t.childNodes(n).length || n.appendChild(o.createTextNode("")), n) : (n = t.buildFragment("" + e, o), t.childNodes(n).length || n.appendChild(o.createTextNode("")), n) : (n = t.buildFragment(null == e ? "" : "" + e, o), n.childNodes.length || n.appendChild(o.createTextNode("")), n)
  }, t.scope = t.viewModel = function(e, i, n) {
   e = t.$(e);
   var o = t.data(e, "scope") || t.data(e, "viewModel");
   switch (o || (o = new t.Map, t.data(e, "scope", o), t.data(e, "viewModel", o)), arguments.length) {
    case 0:
    case 1:
     return o;
    case 2:
     return o.attr(i);
    default:
     return o.attr(i, n), e
   }
  };
  var o = function(e) {
   var t = String(e).replace(/^\s+|\s+$/g, "").match(/^([^:\/?#]+:)?(\/\/(?:[^:@]*(?::[^:@]*)?@)?(([^:\/?#]*)(?::(\d*))?))?([^?#]*)(\?[^#]*)?(#[\s\S]*)?/);
   return t ? {
    href: t[0] || "",
    protocol: t[1] || "",
    authority: t[2] || "",
    host: t[3] || "",
    hostname: t[4] || "",
    port: t[5] || "",
    pathname: t[6] || "",
    search: t[7] || "",
    hash: t[8] || ""
   } : null
  };
  return t.joinURIs = function(e, t) {
   return t = o(t || ""), e = o(e || ""), t && e ? (t.protocol || e.protocol) + (t.protocol || t.authority ? t.authority : e.authority) + function(e) {
    var t = [];
    return e.replace(/^(\.\.?(\/|$))+/, "").replace(/\/(\.(\/|$))+/g, "/").replace(/\/\.\.$/, "/../").replace(/\/?[^\/]*/g, function(e) {
     "/.." === e ? t.pop() : t.push(e)
    }), t.join("").replace(/^\//, "/" === e.charAt(0) ? "/" : "")
   }(t.protocol || t.authority || "/" === t.pathname.charAt(0) ? t.pathname : t.pathname ? (e.authority && !e.pathname ? "/" : "") + e.pathname.slice(0, e.pathname.lastIndexOf("/") + 1) + t.pathname : e.pathname) + (t.protocol || t.authority || t.pathname ? t.search : t.search || e.search) + t.hash : null
  }, t.import = function(e, i) {
   var n = new t.Deferred;
   return "object" == typeof window.System && t.isFunction(window.System.import) ? window.System.import(e, {
    name: i
   }).then(t.proxy(n.resolve, n), t.proxy(n.reject, n)) : window.define && window.define.amd ? window.require([e], function(e) {
    n.resolve(e)
   }) : window.steal ? steal.steal(e, function(e) {
    n.resolve(e)
   }) : window.require ? n.resolve(window.require(e)) : n.resolve(), n.promise()
  }, t.__observe = function() {}, t.isNode = "object" == typeof process && "[object process]" === {}.toString.call(process), t.isBrowserWindow = "undefined" != typeof window && "undefined" != typeof document && "undefined" == typeof SimpleDOM, t.isWebWorker = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope, t
 }), define("can/util/attr/attr", ["can/util/can"], function(e) {
  var t = e.global.setImmediate || function(e) {
    return setTimeout(e, 0)
   },
   i = {
    input: !0,
    textarea: !0,
    select: !0
   },
   n = function(t, n) {
    return n in t || e.document && i[t.nodeName.toLowerCase()]
   },
   o = {
    MutationObserver: e.global.MutationObserver || e.global.WebKitMutationObserver || e.global.MozMutationObserver,
    map: {
     class: function(e, t) {
      return t = t || "", "http://www.w3.org/2000/svg" === e.namespaceURI ? e.setAttribute("class", t) : e.className = t, t
     },
     value: "value",
     innertext: "innerText",
     innerhtml: "innerHTML",
     textcontent: "textContent",
     for: "htmlFor",
     checked: !0,
     disabled: !0,
     readonly: function(e, t) {
      return e.readOnly = !(!t && "string" != typeof t), t
     },
     required: !0,
     src: function(e, t) {
      return null == t || "" === t ? (e.removeAttribute("src"), null) : (e.setAttribute("src", t), t)
     },
     style: function() {
      var t = e.global.document && document.createElement("div");
      return t && t.style && "cssText" in t.style ? function(e, t) {
       return e.style.cssText = t || ""
      } : function(e, t) {
       return e.setAttribute("style", t)
      }
     }()
    },
    defaultValue: ["input", "textarea"],
    setAttrOrProp: function(e, t, i) {
     t = t.toLowerCase(), !0 !== o.map[t] || i ? this.set(e, t, i) : this.remove(e, t)
    },
    setSelectValue: function(e, t) {
     if (null != t)
      for (var i = e.getElementsByTagName("option"), n = 0; n < i.length; n++)
       if (t == i[n].value) return void(i[n].selected = !0);
     e.selectedIndex = -1
    },
    set: function(t, i, r) {
     var s = e.isDOM(t) && o.MutationObserver;
     i = i.toLowerCase();
     var a;
     s || (a = o.get(t, i));
     var l, c = o.map[i];
     "function" == typeof c ? l = c(t, r) : !0 === c && n(t, i) ? (l = t[i] = !0, "checked" === i && "radio" === t.type && e.inArray((t.nodeName + "").toLowerCase(), o.defaultValue) >= 0 && (t.defaultChecked = !0)) : "string" == typeof c && n(t, c) ? (l = r, (t[c] !== r || "OPTION" === t.nodeName.toUpperCase()) && (t[c] = r), "value" === c && e.inArray((t.nodeName + "").toLowerCase(), o.defaultValue) >= 0 && (t.defaultValue = r)) : o.setAttribute(t, i, r), s || l === a || o.trigger(t, i, a)
    },
    setAttribute: function() {
     var t = e.global.document;
     if (t && document.createAttribute) try {
      t.createAttribute("{}")
     } catch (e) {
      var i = {},
       n = document.createElement("div");
      return function(e, t, o) {
       var r, s, a = t.charAt(0);
       "{" !== a && "(" !== a && "*" !== a || !e.setAttributeNode ? e.setAttribute(t, o) : (r = i[t], r || (n.innerHTML = "<div " + t + '=""></div>', r = i[t] = n.childNodes[0].attributes[0]), s = r.cloneNode(), s.value = o, e.setAttributeNode(s))
      }
     }
     return function(e, t, i) {
      e.setAttribute(t, i)
     }
    }(),
    trigger: function(i, n, o) {
     return e.data(e.$(i), "canHasAttributesBindings") ? (n = n.toLowerCase(), t(function() {
      e.trigger(i, {
       type: "attributes",
       attributeName: n,
       target: i,
       oldValue: o,
       bubbles: !1
      }, [])
     })) : void 0
    },
    get: function(e, t) {
     t = t.toLowerCase();
     var i = o.map[t];
     return "string" == typeof i && n(e, i) ? e[i] : !0 === i && n(e, t) ? e[t] : e.getAttribute(t)
    },
    remove: function(e, t) {
     t = t.toLowerCase();
     var i;
     o.MutationObserver || (i = o.get(e, t));
     var r = o.map[t];
     "function" == typeof r && r(e, void 0), !0 === r && n(e, t) ? e[t] = !1 : "string" == typeof r && n(e, r) ? e[r] = "" : e.removeAttribute(t), o.MutationObserver || null == i || o.trigger(e, t, i)
    },
    has: function() {
     var t = e.global.document && document.createElement("div");
     return t && t.hasAttribute ? function(e, t) {
      return e.hasAttribute(t)
     } : function(e, t) {
      return null !== e.getAttribute(t)
     }
    }()
   };
  return o
 }), define("can/event/event", ["can/util/can"], function(e) {
  return e.addEvent = function(e, t) {
   var i = this.__bindEvents || (this.__bindEvents = {});
   return (i[e] || (i[e] = [])).push({
    handler: t,
    name: e
   }), this
  }, e.listenTo = function(t, i, n) {
   var o = this.__listenToEvents;
   o || (o = this.__listenToEvents = {});
   var r = e.cid(t),
    s = o[r];
   s || (s = o[r] = {
    obj: t,
    events: {}
   });
   var a = s.events[i];
   a || (a = s.events[i] = []), a.push(n), e.bind.call(t, i, n)
  }, e.stopListening = function(t, i, n) {
   var o = this.__listenToEvents,
    r = o,
    s = 0;
   if (!o) return this;
   if (t) {
    var a = e.cid(t);
    if ((r = {})[a] = o[a], !o[a]) return this
   }
   for (var l in r) {
    var c, d = r[l];
    t = o[l].obj, i ? (c = {})[i] = d.events[i] : c = d.events;
    for (var u in c) {
     var h = c[u] || [];
     for (s = 0; s < h.length;) n && n === h[s] || !n ? (e.unbind.call(t, u, h[s]), h.splice(s, 1)) : s++;
     h.length || delete d.events[u]
    }
    e.isEmptyObject(d.events) && delete o[l]
   }
   return this
  }, e.removeEvent = function(e, t, i) {
   if (!this.__bindEvents) return this;
   for (var n, o = this.__bindEvents[e] || [], r = 0, s = "function" == typeof t; r < o.length;) n = o[r], (i ? i(n, e, t) : s && n.handler === t || !s && (n.cid === t || !t)) ? o.splice(r, 1) : r++;
   return this
  }, e.dispatch = function(e, t) {
   var i = this.__bindEvents;
   if (i) {
    var n;
    "string" == typeof e ? (n = e, e = {
     type: e
    }) : n = e.type;
    var o = i[n];
    if (o) {
     o = o.slice(0);
     var r = [e];
     t && r.push.apply(r, t);
     for (var s = 0, a = o.length; a > s; s++) o[s].handler.apply(this, r);
     return e
    }
   }
  }, e.one = function(t, i) {
   var n = function() {
    return e.unbind.call(this, t, n), i.apply(this, arguments)
   };
   return e.bind.call(this, t, n), this
  }, e.event = {
   on: function() {
    return 0 === arguments.length && e.Control && this instanceof e.Control ? e.Control.prototype.on.call(this) : e.addEvent.apply(this, arguments)
   },
   off: function() {
    return 0 === arguments.length && e.Control && this instanceof e.Control ? e.Control.prototype.off.call(this) : e.removeEvent.apply(this, arguments)
   },
   bind: e.addEvent,
   unbind: e.removeEvent,
   delegate: function(t, i, n) {
    return e.addEvent.call(this, i, n)
   },
   undelegate: function(t, i, n) {
    return e.removeEvent.call(this, i, n)
   },
   trigger: e.dispatch,
   one: e.one,
   addEvent: e.addEvent,
   removeEvent: e.removeEvent,
   listenTo: e.listenTo,
   stopListening: e.stopListening,
   dispatch: e.dispatch
  }, e.event
 }), define("can/util/fragment", ["can/util/can"], function(e) {
  var t = /^\s*<(\w+)[^>]*>/,
   i = {}.toString,
   n = function(n, o, r) {
    void 0 === o && (o = t.test(n) && RegExp.$1), n && "[object Function]" === i.call(n.replace) && (n = n.replace(/<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/gi, "<$1></$2>"));
    var s = r.createElement("div"),
     a = r.createElement("div");
    "tbody" === o || "tfoot" === o || "thead" === o || "colgroup" === o ? (a.innerHTML = "<table>" + n + "</table>", s = 3 === a.firstChild.nodeType ? a.lastChild : a.firstChild) : "col" === o ? (a.innerHTML = "<table><colgroup>" + n + "</colgroup></table>", s = 3 === a.firstChild.nodeType ? a.lastChild : a.firstChild.firstChild) : "tr" === o ? (a.innerHTML = "<table><tbody>" + n + "</tbody></table>", s = 3 === a.firstChild.nodeType ? a.lastChild : a.firstChild.firstChild) : "td" === o || "th" === o ? (a.innerHTML = "<table><tbody><tr>" + n + "</tr></tbody></table>", s = 3 === a.firstChild.nodeType ? a.lastChild : a.firstChild.firstChild.firstChild) : "option" === o ? (a.innerHTML = "<select>" + n + "</select>", s = 3 === a.firstChild.nodeType ? a.lastChild : a.firstChild) : s.innerHTML = "" + n;
    var l = {},
     c = e.childNodes(s);
    l.length = c.length;
    for (var d = 0; d < c.length; d++) l[d] = c[d];
    return [].slice.call(l)
   };
  return e.buildFragment = function(e, t) {
    if (e && 11 === e.nodeType) return e;
    t ? t.length && (t = t[0]) : t = document;
    for (var i = n(e, void 0, t), o = (t || document).createDocumentFragment(), r = 0, s = i.length; s > r; r++) o.appendChild(i[r]);
    return o
   },
   function() {
    var t = "<-\n>";
    if (t !== e.buildFragment(t, document).firstChild.nodeValue) {
     var i = e.buildFragment;
     e.buildFragment = function(e, t) {
      var n = i(e, t);
      return 1 === n.childNodes.length && 3 === n.childNodes[0].nodeType && (n.childNodes[0].nodeValue = e), n
     }
    }
   }(), e
 }), define("can/util/array/isArrayLike", ["can/util/can"], function(e) {
  e.isArrayLike = function(e) {
   var t = e && "boolean" != typeof e && "number" != typeof e && "length" in e && e.length;
   return "function" != typeof arr && (0 === t || "number" == typeof t && t > 0 && t - 1 in e)
  }
 }), define("can/util/array/each", ["can/util/can", "can/util/array/isArrayLike"], function(e) {
  return e.each = function(t, i, n) {
   var o, r, s, a = 0;
   if (t)
    if (e.isArrayLike(t))
     if (e.List && t instanceof e.List)
      for (r = t.attr("length"); r > a && (s = t.attr(a), !1 !== i.call(n || s, s, a, t)); a++);
     else
      for (r = t.length; r > a && (s = t[a], !1 !== i.call(n || s, s, a, t)); a++);
   else if ("object" == typeof t)
    if (e.Map && t instanceof e.Map || t === e.route) {
     var l = e.Map.keys(t);
     for (a = 0, r = l.length; r > a && (o = l[a], s = t.attr(o), !1 !== i.call(n || s, s, o, t)); a++);
    } else
     for (o in t)
      if (Object.prototype.hasOwnProperty.call(t, o) && !1 === i.call(n || t[o], t[o], o, t)) break;
   return t
  }, e
 }), define("can/util/inserted/inserted", ["can/util/can"], function(e) {
  e.inserted = function(t, i) {
   if (t.length) {
    t = e.makeArray(t);
    for (var n, o, r = i || t[0].ownerDocument || t[0], s = !1, a = e.$(r.contains ? r : r.body), l = 0; void 0 !== (o = t[l]); l++) {
     if (!s) {
      if (!o.getElementsByTagName) continue;
      if (!e.has(a, o).length) return;
      s = !0
     }
     if (s && o.getElementsByTagName) {
      n = e.makeArray(o.getElementsByTagName("*")), e.trigger(o, "inserted", [], !1);
      for (var c, d = 0; void 0 !== (c = n[d]); d++) e.trigger(c, "inserted", [], !1)
     }
    }
   }
  }, e.appendChild = function(t, i, n) {
   var o;
   o = 11 === i.nodeType ? e.makeArray(e.childNodes(i)) : [i], t.appendChild(i), e.inserted(o, n)
  }, e.insertBefore = function(t, i, n, o) {
   var r;
   r = 11 === i.nodeType ? e.makeArray(e.childNodes(i)) : [i], t.insertBefore(i, n), e.inserted(r, o)
  }
 }), define("can/util/jquery/jquery", ["jquery/dist/jquery", "can/util/can", "can/util/attr/attr", "can/event/event", "can/util/fragment", "can/util/array/each", "can/util/inserted/inserted"], function(e, t, i, n) {
  var o = function(e) {
   return e.nodeName && (1 === e.nodeType || 9 === e.nodeType) || e == window || e.addEventListener
  };
  e = e || window.jQuery, e.extend(t, e, {
   trigger: function(i, n, r, s) {
    o(i) ? e.event.trigger(n, r, i, !s) : i.trigger ? i.trigger(n, r) : ("string" == typeof n && (n = {
     type: n
    }), n.target = n.target || i, r && (r.length && "string" == typeof r ? r = [r] : r.length || (r = [r])), r || (r = []), t.dispatch.call(i, n, r))
   },
   event: t.event,
   addEvent: t.addEvent,
   removeEvent: t.removeEvent,
   buildFragment: t.buildFragment,
   $: e,
   each: t.each,
   bind: function(i, n) {
    return this.bind && this.bind !== t.bind ? this.bind(i, n) : o(this) ? e.event.add(this, i, n) : t.addEvent.call(this, i, n), this
   },
   unbind: function(i, n) {
    return this.unbind && this.unbind !== t.unbind ? this.unbind(i, n) : o(this) ? e.event.remove(this, i, n) : t.removeEvent.call(this, i, n), this
   },
   delegate: function(i, n, r) {
    return this.delegate ? this.delegate(i, n, r) : o(this) ? e(this).delegate(i, n, r) : t.bind.call(this, n, r), this
   },
   undelegate: function(i, n, r) {
    return this.undelegate ? this.undelegate(i, n, r) : o(this) ? e(this).undelegate(i, n, r) : t.unbind.call(this, n, r), this
   },
   proxy: t.proxy,
   attr: i
  }), t.on = t.bind, t.off = t.unbind, e.each(["append", "filter", "addClass", "remove", "data", "get", "has"], function(e, i) {
   t[i] = function(e) {
    return e[i].apply(e, t.makeArray(arguments).slice(1))
   }
  });
  var r = e.cleanData;
  e.cleanData = function(i) {
   e.each(i, function(e, i) {
    i && t.trigger(i, "removed", [], !1)
   }), r(i)
  };
  var s, a = e.fn.domManip;
  e.fn.domManip = function(e, t, i) {
   for (var n = 1; n < arguments.length; n++)
    if ("function" == typeof arguments[n]) {
     s = n;
     break
    } return a.apply(this, arguments)
  }, e(document.createElement("div")).append(document.createElement("div"));
  var l = function(e) {
   var i = e.childNodes;
   if ("length" in i) return t.makeArray(i);
   for (var n = e.firstChild, o = []; n;) o.push(n), n = n.nextSibling;
   return o
  };
  void 0 === s ? (e.fn.domManip = a, t.each(["after", "prepend", "before", "append", "replaceWith"], function(i) {
   var n = e.fn[i];
   e.fn[i] = function() {
    var e = [],
     i = t.makeArray(arguments);
    null != i[0] && ("string" == typeof i[0] && (i[0] = t.buildFragment(i[0])), e = 11 === i[0].nodeType ? l(i[0]) : t.isArrayLike(i[0]) ? t.makeArray(i[0]) : [i[0]]);
    var o = n.apply(this, i);
    return t.inserted(e), o
   }
  })) : e.fn.domManip = 2 === s ? function(e, i, n) {
   return a.call(this, e, i, function(e) {
    var i;
    11 === e.nodeType && (i = t.makeArray(t.childNodes(e)));
    var o = n.apply(this, arguments);
    return t.inserted(i || [e]), o
   })
  } : function(e, i) {
   return a.call(this, e, function(e) {
    var n;
    11 === e.nodeType && (n = t.makeArray(t.childNodes(e)));
    var o = i.apply(this, arguments);
    return t.inserted(n || [e]), o
   })
  };
  var c = e.attr;
  e.attr = function(e, i) {
   if (t.isDOM(e) && t.attr.MutationObserver) return c.apply(this, arguments);
   var n, o;
   arguments.length >= 3 && (n = c.call(this, e, i));
   var r = c.apply(this, arguments);
   return arguments.length >= 3 && (o = c.call(this, e, i)), o !== n && t.attr.trigger(e, i, n), r
  };
  var d = e.removeAttr;
  return e.removeAttr = function(e, i) {
   if (t.isDOM(e) && t.attr.MutationObserver) return d.apply(this, arguments);
   var n = c.call(this, e, i),
    o = d.apply(this, arguments);
   return null != n && t.attr.trigger(e, i, n), o
  }, e.event.special.attributes = {
   setup: function() {
    if (t.isDOM(this) && t.attr.MutationObserver) {
     var e = this,
      i = new t.attr.MutationObserver(function(i) {
       i.forEach(function(i) {
        var n = t.simpleExtend({}, i);
        t.trigger(e, n, [])
       })
      });
     i.observe(this, {
      attributes: !0,
      attributeOldValue: !0
     }), t.data(t.$(this), "canAttributesObserver", i)
    } else t.data(t.$(this), "canHasAttributesBindings", !0)
   },
   teardown: function() {
    t.isDOM(this) && t.attr.MutationObserver ? (t.data(t.$(this), "canAttributesObserver").disconnect(), e.removeData(this, "canAttributesObserver")) : e.removeData(this, "canHasAttributesBindings")
   }
  }, e.event.special.inserted = {}, e.event.special.removed = {}, t
 }), define("can/util/util", ["can/util/jquery/jquery"], function(e) {
  return e
 }), define("can/util/string/string", ["can/util/util"], function(e) {
  var t = /_|-/,
   i = /\=\=/,
   n = /([A-Z]+)([A-Z][a-z])/g,
   o = /([a-z\d])([A-Z])/g,
   r = /([a-z\d])([A-Z])/g,
   s = /\{([^\}]+)\}/g,
   a = /"/g,
   l = /'/g,
   c = /-+(.)?/g,
   d = /[a-z][A-Z]/g,
   u = function(e, t, i) {
    var n = e[t];
    return void 0 === n && !0 === i && (n = e[t] = {}), n
   },
   h = function(e) {
    return /^f|^o/.test(typeof e)
   },
   p = function(e) {
    return "" + (null === e || void 0 === e || isNaN(e) && "" + e == "NaN" ? "" : e)
   };
  return e.extend(e, {
   esc: function(e) {
    return p(e).replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(a, "&#34;").replace(l, "&#39;")
   },
   getObject: function(t, i, n) {
    var o, r, s, a, l = t ? t.split(".") : [],
     c = l.length,
     d = 0;
    if (i = e.isArray(i) ? i : [i || window], a = i.length, !c) return i[0];
    for (d; a > d; d++) {
     for (o = i[d], s = void 0, r = 0; c > r && h(o); r++) s = o, o = u(s, l[r]);
     if (void 0 !== s && void 0 !== o) break
    }
    if (!1 === n && void 0 !== o && delete s[l[r - 1]], !0 === n && void 0 === o)
     for (o = i[0], r = 0; c > r && h(o); r++) o = u(o, l[r], !0);
    return o
   },
   capitalize: function(e, t) {
    return e.charAt(0).toUpperCase() + e.slice(1)
   },
   camelize: function(e) {
    return p(e).replace(c, function(e, t) {
     return t ? t.toUpperCase() : ""
    })
   },
   hyphenate: function(e) {
    return p(e).replace(d, function(e, t) {
     return e.charAt(0) + "-" + e.charAt(1).toLowerCase()
    })
   },
   underscore: function(e) {
    return e.replace(i, "/").replace(n, "$1_$2").replace(o, "$1_$2").replace(r, "_").toLowerCase()
   },
   sub: function(t, i, n) {
    var o = [];
    return t = t || "", o.push(t.replace(s, function(t, r) {
     var s = e.getObject(r, i, !0 !== n && void 0);
     return void 0 === s || null === s ? (o = null, "") : h(s) && o ? (o.push(s), "") : "" + s
    })), null === o ? o : o.length <= 1 ? o[0] : o
   },
   replacer: s,
   undHash: t
  }), e
 }), define("can/construct/construct", ["can/util/string/string"], function(e) {
  var t, i = 0;
  try {
   Object.getOwnPropertyDescriptor({}), t = !0
  } catch (e) {
   t = !1
  }
  var n = function(e, t) {
    var i = Object.getOwnPropertyDescriptor(e, t);
    return i && (i.get || i.set) ? i : null
   },
   o = function(t, i, o) {
    o = o || t;
    var r;
    for (var s in t)(r = n(t, s)) ? this._defineProperty(o, i, s, r) : e.Construct._overwrite(o, i, s, t[s])
   },
   r = function(t, i, n) {
    n = n || t;
    for (var o in t) e.Construct._overwrite(n, i, o, t[o])
   };
  return e.Construct = function() {
   return arguments.length ? e.Construct.extend.apply(e.Construct, arguments) : void 0
  }, e.extend(e.Construct, {
   constructorExtends: !0,
   newInstance: function() {
    var e, t = this.instance();
    return t.setup && (t.__inSetup = !0, e = t.setup.apply(t, arguments), delete t.__inSetup), t.init && t.init.apply(t, e || arguments), t
   },
   _inherit: t ? o : r,
   _defineProperty: function(e, t, i, n) {
    Object.defineProperty(e, i, n)
   },
   _overwrite: function(e, t, i, n) {
    e[i] = n
   },
   setup: function(t, i) {
    this.defaults = e.extend(!0, {}, t.defaults, this.defaults)
   },
   instance: function() {
    i = 1;
    var e = new this;
    return i = 0, e
   },
   extend: function(t, n, o) {
    function r() {
     return i ? void 0 : this.constructor !== c && arguments.length && c.constructorExtends ? c.extend.apply(c, arguments) : c.newInstance.apply(c, arguments)
    }
    var s = t,
     a = n,
     l = o;
    "string" != typeof s && (l = a, a = s, s = null), l || (l = a, a = null), l = l || {};
    var c, d, u, h, p, f, m, v, g, y = this,
     b = this.prototype;
    g = this.instance(), e.Construct._inherit(l, b, g), s ? (d = s.split("."), m = d.pop()) : a && a.shortName ? m = a.shortName : this.shortName && (m = this.shortName), "undefined" == typeof constructorName && (c = function() {
     return r.apply(this, arguments)
    });
    for (f in y) y.hasOwnProperty(f) && (c[f] = y[f]);
    e.Construct._inherit(a, y, c), s && (u = e.getObject(d.join("."), window, !0), v = u, h = e.underscore(s.replace(/\./g, "_")), p = e.underscore(m), u[m] = c), e.extend(c, {
     constructor: c,
     prototype: g,
     namespace: v,
     _shortName: p,
     fullName: s,
     _fullName: h
    }), void 0 !== m && (c.shortName = m), c.prototype.constructor = c;
    var w = [y].concat(e.makeArray(arguments)),
     x = c.setup.apply(c, w);
    return c.init && c.init.apply(c, x || w), c
   }
  }), e.Construct.prototype.setup = function() {}, e.Construct.prototype.init = function() {}, e.Construct
 }), define("can/util/bind/bind", ["can/util/util"], function(e) {
  return e.bindAndSetup = function() {
   return e.addEvent.apply(this, arguments), this.__inSetup || (this._bindings ? this._bindings++ : (this._bindings = 1, this._bindsetup && this._bindsetup())), this
  }, e.unbindAndTeardown = function(t, i) {
   if (!this.__bindEvents) return this;
   var n = this.__bindEvents[t] || [],
    o = n.length;
   return e.removeEvent.apply(this, arguments), null === this._bindings ? this._bindings = 0 : this._bindings = this._bindings - (o - n.length), !this._bindings && this._bindteardown && this._bindteardown(), this
  }, e
 }), define("can/util/batch/batch", ["can/util/can"], function(e) {
  var t = 1,
   i = 0,
   n = null,
   o = null,
   r = [],
   s = !1;
  e.batch = {
   start: function(e) {
    if (1 === ++i) {
     var n = {
      events: [],
      callbacks: [],
      number: t++
     };
     r.push(n), e && n.callbacks.push(e), o = n
    }
   },
   stop: function(t, a) {
    if (t ? i = 0 : i--, 0 === i) {
     o = null;
     var l;
     if (!1 === s) {
      s = !0;
      for (var c, d = []; l = r.shift();) {
       var u = l.events;
       d.push.apply(d, l.callbacks), n = l, e.batch.batchNum = l.number;
       var h;
       for (a && e.batch.start(), c = 0, h = u.length; h > c; c++) e.dispatch.apply(u[c][0], u[c][1]);
       e.batch._onDispatchedEvents(l.number), n = null, e.batch.batchNum = void 0
      }
      for (c = d.length - 1; c >= 0; c--) d[c]();
      s = !1
     }
    }
   },
   _onDispatchedEvents: function() {},
   trigger: function(t, i, n) {
    t.__inSetup || (i = "string" == typeof i ? {
     type: i
    } : i, o ? (i.batchNum = o.number, o.events.push([t, [i, n]])) : i.batchNum ? e.dispatch.call(t, i, n) : r.length ? (e.batch.start(), i.batchNum = o.number, o.events.push([t, [i, n]]), e.batch.stop()) : e.dispatch.call(t, i, n))
   },
   afterPreviousEvents: function(t) {
    var i = e.last(r);
    if (i) {
     var n = {};
     e.bind.call(n, "ready", t), i.events.push([n, [{
       type: "ready"
      },
      []
     ]])
    } else t({})
   },
   after: function(e) {
    var t = o || n;
    t ? t.callbacks.push(e) : e({})
   }
  }
 }), define("can/compute/read", ["can/util/util"], function(e) {
  var t = function(e, i, o) {
    o = o || {};
    for (var r, s, a = {
      foundObservable: !1
     }, l = n(e, 0, i, o, a), c = i.length, d = 0; c > d;) {
     s = l;
     for (var u = 0, h = t.propertyReaders.length; h > u; u++) {
      var p = t.propertyReaders[u];
      if (p.test(l)) {
       l = p.read(l, i[d], d, o, a);
       break
      }
     }
     if (d += 1, l = n(l, d, i, o, a, s), r = typeof l, d < i.length && (null === l || "function" !== r && "object" !== r)) return o.earlyExit && o.earlyExit(s, d - 1, l), {
      value: void 0,
      parent: s
     }
    }
    return void 0 === l && o.earlyExit && o.earlyExit(s, d - 1), {
     value: l,
     parent: s
    }
   },
   i = function(e, t) {
    var i = t[e - 1];
    return i && i.at
   },
   n = function(e, i, n, o, r, s) {
    var a;
    do {
     a = !1;
     for (var l = 0, c = t.valueReaders.length; c > l; l++) t.valueReaders[l].test(e, i, n, o) && (e = t.valueReaders[l].read(e, i, n, o, r, s))
    } while (a);
    return e
   };
  t.valueReaders = [{
   name: "compute",
   test: function(e, t, n, o) {
    return e && e.isComputed && !i(t, n)
   },
   read: function(t, i, n, o, r) {
    return !1 === o.readCompute && i === n.length ? t : (!r.foundObservable && o.foundObservable && (o.foundObservable(t, i), r.foundObservable = !0), t instanceof e.Compute ? t.get() : t())
   }
  }, {
   name: "function",
   test: function(t, i, n, o) {
    return !("function" != typeof t || t.isComputed || e.Construct && t.prototype instanceof e.Construct || e.route && t === e.route)
   },
   read: function(t, n, o, r, s, a) {
    return i(n, o) ? n === o.length ? e.proxy(t, a) : t : r.callMethodsOnObservables && e.isMapLike(a) ? t.apply(a, r.args || []) : r.isArgument && n === o.length ? !1 !== r.proxyMethods ? e.proxy(t, a) : t : t.apply(a, r.args || [])
   }
  }], t.propertyReaders = [{
   name: "map",
   test: e.isMapLike,
   read: function(e, t, i, n, o) {
    !o.foundObservable && n.foundObservable && (n.foundObservable(e, i), o.foundObservable = !0);
    var r = e.attr(t.key);
    return void 0 !== r ? r : e[t.key]
   }
  }, {
   name: "promise",
   test: function(t) {
    return e.isPromise(t)
   },
   read: function(t, i, n, o, r) {
    !r.foundObservable && o.foundObservable && (o.foundObservable(t, n), r.foundObservable = !0);
    var s = t.__observeData;
    return t.__observeData || (s = t.__observeData = {
     isPending: !0,
     state: "pending",
     isResolved: !1,
     isRejected: !1,
     value: void 0,
     reason: void 0
    }, e.cid(s), e.simpleExtend(s, e.event), t.then(function(e) {
     s.isPending = !1, s.isResolved = !0, s.value = e, s.state = "resolved", s.dispatch("state", ["resolved", "pending"])
    }, function(e) {
     s.isPending = !1, s.isRejected = !0, s.reason = e, s.state = "rejected", s.dispatch("state", ["rejected", "pending"])
    })), e.__observe(s, "state"), i.key in s ? s[i.key] : t[i.key]
   }
  }, {
   name: "object",
   test: function() {
    return !0
   },
   read: function(e, t) {
    return null == e ? void 0 : t.key in e ? e[t.key] : t.at && o[t.key] && "@" + t.key in e ? (t.at = !1, e["@" + t.key]) : void 0
   }
  }];
  var o = {
   index: !0,
   key: !0,
   event: !0,
   element: !0,
   viewModel: !0
  };
  return t.write = function(t, i, n, o) {
   return o = o || {}, e.isMapLike(t) ? !o.isArgument && t._data && t._data[i] && t._data[i].isComputed ? t._data[i](n) : t.attr(i, n) : t[i] && t[i].isComputed ? t[i](n) : void("object" == typeof t && (t[i] = n))
  }, t.reads = function(e) {
   var t = [],
    i = 0,
    n = !1;
   "@" === e.charAt(0) && (i = 1, n = !0);
   for (var o = "", r = i; r < e.length; r++) {
    var s = e.charAt(r);
    "." === s || "@" === s ? "\\" !== e.charAt(r - 1) ? (t.push({
     key: o,
     at: n
    }), n = "@" === s, o = "") : o = o.substr(0, o.length - 1) + "." : o += s
   }
   return t.push({
    key: o,
    at: n
   }), t
  }, t
 }), define("can/compute/get_value_and_bind", ["can/util/util"], function(e) {
  function t(t, i, n) {
   this.newObserved = {}, this.oldObserved = null, this.func = t, this.context = i, this.compute = n, this.onDependencyChange = e.proxy(this.onDependencyChange, this), this.depth = null, this.childDepths = {}, this.ignore = 0, this.inBatch = !1, this.ready = !1, n.observedInfo = this, this.setReady = e.proxy(this._setReady, this)
  }
  e.simpleExtend(t.prototype, {
   getPrimaryDepth: function() {
    return this.compute._primaryDepth
   },
   _setReady: function() {
    this.ready = !0
   },
   getDepth: function() {
    return null !== this.depth ? this.depth : this.depth = this._getDepth()
   },
   _getDepth: function() {
    var e = 0,
     t = this.childDepths;
    for (var i in t) t[i] > e && (e = t[i]);
    return e + 1
   },
   addEdge: function(e) {
    e.obj.bind(e.event, this.onDependencyChange), e.obj.observedInfo && (this.childDepths[e.obj._cid] = e.obj.observedInfo.getDepth(), this.depth = null)
   },
   removeEdge: function(e) {
    e.obj.unbind(e.event, this.onDependencyChange), e.obj.observedInfo && (delete this.childDepths[e.obj._cid], this.depth = null)
   },
   dependencyChange: function(e) {
    this.bound && this.ready && (void 0 !== e.batchNum ? e.batchNum !== this.batchNum && (t.registerUpdate(this), this.batchNum = e.batchNum) : this.updateCompute(e.batchNum))
   },
   onDependencyChange: function(e, t, i) {
    this.dependencyChange(e, t, i)
   },
   updateCompute: function(e) {
    if (this.bound) {
     var t = this.value;
     this.getValueAndBind(), this.compute.updater(this.value, t, e)
    }
   },
   getValueAndBind: function() {
    this.bound = !0, this.oldObserved = this.newObserved || {}, this.ignore = 0, this.newObserved = {}, this.ready = !1, s.push(this), this.value = this.func.call(this.context), s.pop(), this.updateBindings(), e.batch.afterPreviousEvents(this.setReady)
   },
   updateBindings: function() {
    var e, t, i = this.newObserved,
     n = this.oldObserved;
    for (e in i) t = i[e], n[e] ? n[e] = null : this.addEdge(t);
    for (e in n)(t = n[e]) && this.removeEdge(t)
   },
   teardown: function() {
    this.bound = !1;
    for (var e in this.newObserved) {
     var t = this.newObserved[e];
     this.removeEdge(t)
    }
    this.newObserved = {}
   }
  });
  var i, n = [],
   o = 1 / 0,
   r = 0;
  t.registerUpdate = function(e, t) {
   var i = e.getDepth() - 1,
    s = e.getPrimaryDepth();
   o = Math.min(s, o), r = Math.max(s, r);
   var a = n[s] || (n[s] = {
    observeInfos: [],
    current: 1 / 0,
    max: 0
   });
   (a.observeInfos[i] || (a.observeInfos[i] = [])).push(e), a.current = Math.min(i, a.current), a.max = Math.max(i, a.max)
  }, t.updateUntil = function(e, t) {
   for (var s;;) {
    if (!(r >= o && e >= o)) return;
    var a = n[o];
    if (a && a.current <= a.max) {
     if (a.current > t) return;
     var l = a.observeInfos[a.current];
     l && (s = l.pop()) ? s.updateCompute(i) : a.current++
    } else o++
   }
  }, t.batchEnd = function(e) {
   var t;
   for (i = e;;) {
    if (!(r >= o)) return n = [], o = 1 / 0, void(r = 0);
    var s = n[o];
    if (s && s.current <= s.max) {
     var a = s.observeInfos[s.current];
     a && (t = a.pop()) ? t.updateCompute(e) : s.current++
    } else o++
   }
  };
  var s = [];
  return e.__observe = function(e, t) {
   var i = s[s.length - 1];
   if (i && !i.ignore) {
    var n = t + "",
     o = e._cid + "|" + n;
    i.traps ? i.traps.push({
     obj: e,
     event: n,
     name: o
    }) : i.newObserved[o] || (i.newObserved[o] = {
     obj: e,
     event: n
    })
   }
  }, e.__reading = e.__observe, e.__trapObserves = function() {
   if (s.length) {
    var e = s[s.length - 1],
     t = e.traps = [];
    return function() {
     return e.traps = null, t
    }
   }
   return function() {
    return []
   }
  }, e.__observes = function(e) {
   var t = s[s.length - 1];
   if (t)
    for (var i = 0, n = e.length; n > i; i++) {
     var o = e[i],
      r = o.name;
     t.newObserved[r] || (t.newObserved[r] = o)
    }
  }, e.__isRecordingObserves = function() {
   var e = s.length,
    t = s[e - 1];
   return e && 0 === t.ignore && t
  }, e.__notObserve = function(e) {
   return function() {
    if (s.length) {
     var t = s[s.length - 1];
     t.ignore++;
     var i = e.apply(this, arguments);
     return t.ignore--, i
    }
    return e.apply(this, arguments)
   }
  }, e.batch._onDispatchedEvents = t.batchEnd, t
 }), define("can/compute/proto_compute", ["can/util/util", "can/util/bind/bind", "can/compute/read", "can/compute/get_value_and_bind", "can/util/batch/batch"], function(e, t, i, n) {
  e.Compute = function(t, i, n, o) {
   e.cid(this, "compute");
   for (var r = [], s = 0, a = arguments.length; a > s; s++) r[s] = arguments[s];
   var l = typeof r[1];
   "function" == typeof r[0] ? this._setupGetterSetterFn(r[0], r[1], r[2], r[3]) : r[1] ? "string" === l ? this._setupProperty(r[0], r[1], r[2]) : "function" === l ? this._setupSetter(r[0], r[1], r[2]) : r[1] && r[1].fn ? this._setupAsyncCompute(r[0], r[1]) : this._setupSettings(r[0], r[1]) : this._setupSimpleValue(r[0]), this._args = r, this._primaryDepth = 0, this.isComputed = !0
  }, e.simpleExtend(e.Compute.prototype, {
   setPrimaryDepth: function(e) {
    this._primaryDepth = e
   },
   _setupGetterSetterFn: function(t, i, n) {
    this._set = i ? e.proxy(t, i) : t, this._get = i ? e.proxy(t, i) : t, this._canObserve = !1 !== n;
    var o = r(this, t, i || this);
    e.simpleExtend(this, o)
   },
   _setupProperty: function(t, i, n) {
    var o, r = e.isMapLike(t),
     s = this;
    r ? (o = function(e, t, i) {
     s.updater(t, i, e.batchNum)
    }, this.hasDependencies = !0, this._get = function() {
     return t.attr(i)
    }, this._set = function(e) {
     t.attr(i, e)
    }) : (o = function() {
     s.updater(s._get(), s.value)
    }, this._get = function() {
     return e.getObject(i, [t])
    }, this._set = function(n) {
     var o = i.split("."),
      r = o.pop();
     e.getObject(o.join("."), [t])[r] = n
    }), this._on = function(r) {
     e.bind.call(t, n || i, o), this.value = this._get()
    }, this._off = function() {
     return e.unbind.call(t, n || i, o)
    }
   },
   _setupSetter: function(t, i, n) {
    this.value = t, this._set = i, e.simpleExtend(this, n)
   },
   _setupSettings: function(e, t) {
    if (this.value = e, this._set = t.set || this._set, this._get = t.get || this._get, !t.__selfUpdater) {
     var i = this,
      n = this.updater;
     this.updater = function() {
      n.call(i, i._get(), i.value)
     }
    }
    this._on = t.on ? t.on : this._on, this._off = t.off ? t.off : this._off
   },
   _setupAsyncCompute: function(t, i) {
    var n = this;
    this.value = t, this._setUpdates = !0, this.lastSetValue = new e.Compute(t), this._set = function(e) {
     return e === n.lastSetValue.get() ? this.value : n.lastSetValue.set(e)
    }, this._get = function() {
     return s.call(i.context, n.lastSetValue.get())
    };
    var o, s = i.fn;
    if (0 === s.length) o = r(this, s, i.context);
    else if (1 === s.length) o = r(this, function() {
     return s.call(i.context, n.lastSetValue.get())
    }, i);
    else {
     var a = this.updater,
      l = function(e) {
       a.call(n, e, n.value)
      };
     this.updater = function(e) {
      a.call(n, e, n.value)
     }, o = r(this, function() {
      var e = s.call(i.context, n.lastSetValue.get(), l);
      return void 0 !== e ? e : this.value
     }, this)
    }
    e.simpleExtend(this, o)
   },
   _setupSimpleValue: function(e) {
    this.value = e
   },
   _bindsetup: e.__notObserve(function() {
    this.bound = !0, this._on(this.updater)
   }),
   _bindteardown: function() {
    this._off(this.updater), this.bound = !1
   },
   bind: e.bindAndSetup,
   unbind: e.unbindAndTeardown,
   clone: function(t) {
    return t && "function" == typeof this._args[0] ? this._args[1] = t : t && (this._args[2] = t), new e.Compute(this._args[0], this._args[1], this._args[2], this._args[3])
   },
   _on: e.k,
   _off: e.k,
   get: function() {
    var t = e.__isRecordingObserves();
    return t && !1 !== this._canObserve && (e.__observe(this, "change"), this.bound || e.Compute.temporarilyBind(this)), this.bound ? (t && this.getDepth && this.getDepth() >= t.getDepth() && n.updateUntil(this.getPrimaryDepth(), this.getDepth()), this.value) : this._get()
   },
   _get: function() {
    return this.value
   },
   set: function(e) {
    var t = this.value,
     i = this._set(e, t);
    return this._setUpdates ? this.value : this.hasDependencies ? this._get() : (this.value = void 0 === i ? this._get() : i, o(this, this.value, t), this.value)
   },
   _set: function(e) {
    return this.value = e
   },
   updater: function(e, t, i) {
    this.value = e, o(this, e, t, i)
   },
   toFunction: function() {
    return e.proxy(this._computeFn, this)
   },
   _computeFn: function(e) {
    return arguments.length ? this.set(e) : this.get()
   }
  });
  var o = function(t, i, n, o) {
    i !== n && !(i !== i && n !== n) && e.batch.trigger(t, {
     type: "change",
     batchNum: o
    }, [i, n])
   },
   r = function(t, i, o) {
    var r = new n(i, o, t);
    return {
     readInfo: r,
     _on: function() {
      r.getValueAndBind(), t.value = r.value, t.hasDependencies = !e.isEmptyObject(r.newObserved)
     },
     _off: function() {
      r.teardown()
     },
     getDepth: function() {
      return r.getDepth()
     },
     getPrimaryDepth: function() {
      return r.getPrimaryDepth()
     }
    }
   };
  e.Compute.temporarilyBind = function(t) {
   var i = t.computeInstance || t;
   i.bind("change", e.k), s || (s = [], setTimeout(a, 10)), s.push(i)
  };
  var s, a = function() {
   for (var t = 0, i = s.length; i > t; t++) s[t].unbind("change", e.k);
   s = null
  };
  return e.Compute.async = function(t, i, n) {
   return new e.Compute(t, {
    fn: i,
    context: n
   })
  }, e.Compute.truthy = function(t) {
   return new e.Compute(function() {
    var e = t.get();
    return "function" == typeof e && (e = e.get()), !!e
   })
  }, e.Compute.read = i, e.Compute.set = i.write, e.Compute
 }), define("can/compute/compute", ["can/util/util", "can/util/bind/bind", "can/util/batch/batch", "can/compute/proto_compute"], function(e, t) {
  return e.compute = function(t, i, n, o) {
   var r = new e.Compute(t, i, n, o),
    s = r.bind,
    a = r.unbind,
    l = function(e) {
     return arguments.length ? r.set(e) : r.get()
    },
    c = e.cid(l, "compute"),
    d = "__handler" + c;
   return l.bind = function(e, t) {
    var i = t && t[d];
    return t && !i && (i = t[d] = function() {
     t.apply(l, arguments)
    }), s.call(r, e, i)
   }, l.unbind = function(e, t) {
    var i = t && t[d];
    return i ? (delete t[d], r.unbind(e, i)) : a.apply(r, arguments)
   }, l.isComputed = r.isComputed, l.clone = function(n) {
    return "function" == typeof t && (i = n), e.compute(t, i, n, o)
   }, l.computeInstance = r, l
  }, e.compute.truthy = function(t) {
   return e.compute(function() {
    var e = t();
    return "function" == typeof e && (e = e()), !!e
   })
  }, e.compute.async = function(t, i, n) {
   return e.compute(t, {
    fn: i,
    context: n
   })
  }, e.compute.read = e.Compute.read, e.compute.set = e.Compute.set, e.compute.temporarilyBind = e.Compute.temporarilyBind, e.compute
 }), define("can/view/view", ["can/util/util"], function(e) {
  var t = e.isFunction,
   i = e.makeArray,
   n = 1,
   o = function(e) {
    var t = function() {
     return c.frag(e.apply(this, arguments))
    };
    return t.render = function() {
     return e.apply(e, arguments)
    }, t
   },
   r = function(e, t) {
    if (!e.length) throw new Error("can.view: No template or empty template:" + t)
   },
   s = function(i, n) {
    if (t(i)) {
     return e.Deferred().resolve(i)
    }
    var o, s, a, l = "string" == typeof i ? i : i.url,
     d = i.engine && "." + i.engine || l.match(/\.[\w\d]+$/);
    if (l.match(/^#/) && (l = l.substr(1)), (s = document.getElementById(l)) && (d = "." + s.type.match(/\/(x\-)?(.+)/)[2]), d || c.cached[l] || (l += d = c.ext), e.isArray(d) && (d = d[0]), a = c.toId(l), l.match(/^\/\//) && (l = l.substr(2), l = window.steal ? steal.config().root.mapJoin("" + steal.id(l)) : l), window.require && require.toUrl && (l = require.toUrl(l)), o = c.types[d], c.cached[a]) return c.cached[a];
    if (s) return c.registerView(a, s.innerHTML, o);
    var u = new e.Deferred;
    return e.ajax({
     async: n,
     url: l,
     dataType: "text",
     error: function(e) {
      r("", l), u.reject(e)
     },
     success: function(e) {
      r(e, l), c.registerView(a, e, o, u)
     }
    }), u
   },
   a = function(t) {
    var i = [];
    if (e.isPromise(t)) return [t];
    for (var n in t) e.isPromise(t[n]) && i.push(t[n]);
    return i
   },
   l = function(t) {
    return e.isArray(t) && "success" === t[1] ? t[0] : t
   },
   c = e.view = e.template = function(e, i, n, o) {
    return t(n) && (o = n, n = void 0), c.renderAs("fragment", e, i, n, o)
   };
  return e.extend(c, {
   frag: function(e, t) {
    return c.hookup(c.fragment(e), t)
   },
   fragment: function(t) {
    return e.frag(t, document)
   },
   toId: function(t) {
    return e.map(t.toString().split(/\/|\./g), function(e) {
     return e || void 0
    }).join("_")
   },
   toStr: function(e) {
    return null == e ? "" : "" + e
   },
   hookup: function(t, i) {
    var n, o, r = [];
    return e.each(t.childNodes ? e.makeArray(t.childNodes) : t, function(t) {
     1 === t.nodeType && (r.push(t), r.push.apply(r, e.makeArray(t.getElementsByTagName("*"))))
    }), e.each(r, function(e) {
     e.getAttribute && (n = e.getAttribute("data-view-id")) && (o = c.hookups[n]) && (o(e, i, n), delete c.hookups[n], e.removeAttribute("data-view-id"))
    }), t
   },
   hookups: {},
   hook: function(e) {
    return c.hookups[++n] = e, " data-view-id='" + n + "'"
   },
   cached: {},
   cachedRenderers: {},
   cache: !0,
   register: function(t) {
    this.types["." + t.suffix] = t, e[t.suffix] = c[t.suffix] = function(e, i) {
     var n, r;
     if (!i) return r = function() {
      return n || (n = t.fragRenderer ? t.fragRenderer(null, e) : o(t.renderer(null, e))), n.apply(this, arguments)
     }, r.render = function() {
      var i = t.renderer(null, e);
      return i.apply(i, arguments)
     }, r;
     var s = function() {
      return n || (n = t.fragRenderer ? t.fragRenderer(e, i) : t.renderer(e, i)), n.apply(this, arguments)
     };
     return t.fragRenderer ? c.preload(e, s) : c.preloadStringRenderer(e, s)
    }
   },
   types: {},
   ext: ".ejs",
   registerScript: function(e, t, i) {
    return "can.view.preloadStringRenderer('" + t + "'," + c.types["." + e].script(t, i) + ");"
   },
   preload: function(t, i) {
    return (c.cached[t] = (new e.Deferred).resolve(function(e, t) {
     return i.call(e, e, t)
    })).__view_id = t, c.cachedRenderers[t] = i, i
   },
   preloadStringRenderer: function(e, t) {
    return this.preload(e, o(t))
   },
   render: function(t, i, n, o, r) {
    return e.view.renderAs("string", t, i, n, o, r)
   },
   renderTo: function(e, t, i, n, o) {
    return ("string" === e && t.render ? t.render : t)(i, n, o)
   },
   renderAs: function(n, o, r, d, u, h) {
    void 0 !== u && "string" == typeof u.expression && (h = u, u = void 0), t(d) && (u = d, d = void 0);
    var p, f, m, v, g = a(r);
    if (g.length) return p = new e.Deferred, f = e.extend({}, r), g.push(s(o, !0)), e.when.apply(e, g).then(function(t) {
     var o, s = i(arguments),
      a = s.pop();
     if (e.isPromise(r)) f = l(t);
     else
      for (var c in r) e.isPromise(r[c]) && (f[c] = l(s.shift()));
     o = e.view.renderTo(n, a, f, d, h), p.resolve(o, f), u && u(o, f)
    }, function() {
     p.reject.apply(p, arguments)
    }), p;
    if (m = t(u), p = e.__notObserve(s)(o, m), m) v = p, p.then(function(t) {
     u(r ? e.view.renderTo(n, t, r, d, h) : t)
    });
    else {
     if ("resolved" === p.state() && p.__view_id) {
      var y = c.cachedRenderers[p.__view_id];
      return r ? e.view.renderTo(n, y, r, d, h) : y
     }
     p.then(function(t) {
      v = r ? e.view.renderTo(n, t, r, d, h) : t
     })
    }
    return v
   },
   registerView: function(t, i, n, r) {
    var s, a = "object" == typeof n ? n : c.types[n || c.ext];
    return s = a.fragRenderer ? a.fragRenderer(t, i) : o(a.renderer(t, i)), r = r || new e.Deferred, c.cache && (c.cached[t] = r, r.__view_id = t, c.cachedRenderers[t] = s), r.resolve(s)
   },
   simpleHelper: function(t) {
    return function() {
     var i = [],
      n = arguments;
     return e.each(n, function(e, t) {
      if (t <= n.length) {
       for (; e && e.isComputed;) e = e();
       i.push(e)
      }
     }), t.apply(this, i)
    }
   }
  }), e
 }), define("can/control/control", ["can/util/util", "can/construct/construct"], function(e) {
  var t, i = function(t, i, n) {
    return e.bind.call(t, i, n),
     function() {
      e.unbind.call(t, i, n)
     }
   },
   n = e.isFunction,
   o = e.extend,
   r = e.each,
   s = [].slice,
   a = /\{([^\}]+)\}/g,
   l = e.getObject("$.event.special", [e]) || {},
   c = function(t, i, n, o) {
    return e.delegate.call(t, i, n, o),
     function() {
      e.undelegate.call(t, i, n, o)
     }
   },
   d = function(t, n, o, r) {
    return r ? c(t, e.trim(r), n, o) : i(t, n, o)
   },
   u = e.Control = e.Construct({
    setup: function() {
     if (e.Construct.setup.apply(this, arguments), e.Control) {
      var t, i = this;
      i.actions = {};
      for (t in i.prototype) i._isAction(t) && (i.actions[t] = i._action(t))
     }
    },
    _shifter: function(t, i) {
     var o = "string" == typeof i ? t[i] : i;
     return n(o) || (o = t[o]),
      function() {
       return t.called = i, o.apply(t, [this.nodeName ? e.$(this) : this].concat(s.call(arguments, 0)))
      }
    },
    _isAction: function(e) {
     var t = this.prototype[e],
      i = typeof t;
     return "constructor" !== e && ("function" === i || "string" === i && n(this.prototype[t])) && !!(l[e] || h[e] || /[^\w]/.test(e))
    },
    _action: function(i, n) {
     if (a.lastIndex = 0, n || !a.test(i)) {
      var o = n ? e.sub(i, this._lookup(n)) : i;
      if (!o) return null;
      var r = e.isArray(o),
       s = r ? o[1] : o,
       l = s.split(/\s+/g),
       c = l.pop();
      return {
       processor: h[c] || t,
       parts: [s, l.join(" "), c],
       delegate: r ? o[0] : void 0
      }
     }
    },
    _lookup: function(e) {
     return [e, window]
    },
    processors: {},
    defaults: {}
   }, {
    setup: function(t, i) {
     var n, r = this.constructor,
      s = r.pluginName || r._fullName;
     return this.element = e.$(t), s && "can_control" !== s && this.element.addClass(s), n = e.data(this.element, "controls"), n || (n = [], e.data(this.element, "controls", n)), n.push(this), this.options = o({}, r.defaults, i), this.on(), [this.element, this.options]
    },
    on: function(t, i, n, o) {
     if (!t) {
      this.off();
      var r, s, a = this.constructor,
       l = this._bindings,
       c = a.actions,
       u = this.element,
       h = e.Control._shifter(this, "destroy");
      for (r in c) c.hasOwnProperty(r) && (s = c[r] || a._action(r, this.options, this)) && (l.control[r] = s.processor(s.delegate || u, s.parts[2], s.parts[1], r, this));
      return e.bind.call(u, "removed", h), l.user.push(function(t) {
       e.unbind.call(t, "removed", h)
      }), l.user.length
     }
     return "string" == typeof t && (o = n, n = i, i = t, t = this.element), void 0 === o && (o = n, n = i, i = null), "string" == typeof o && (o = e.Control._shifter(this, o)), this._bindings.user.push(d(t, n, o, i)), this._bindings.user.length
    },
    off: function() {
     var e = this.element[0],
      t = this._bindings;
     t && (r(t.user || [], function(t) {
      t(e)
     }), r(t.control || {}, function(t) {
      t(e)
     })), this._bindings = {
      user: [],
      control: {}
     }
    },
    destroy: function() {
     if (null !== this.element) {
      var t, i = this.constructor,
       n = i.pluginName || i._fullName;
      this.off(), n && "can_control" !== n && this.element.removeClass(n), t = e.data(this.element, "controls"), t.splice(e.inArray(this, t), 1), e.trigger(this, "destroyed"), this.element = null
     }
    }
   }),
   h = e.Control.processors;
  return t = function(t, i, n, o, r) {
   return d(t, i, e.Control._shifter(r, o), n)
  }, r(["change", "click", "contextmenu", "dblclick", "keydown", "keyup", "keypress", "mousedown", "mousemove", "mouseout", "mouseover", "mouseup", "reset", "resize", "scroll", "select", "submit", "focusin", "focusout", "mouseenter", "mouseleave", "touchstart", "touchmove", "touchcancel", "touchend", "touchleave", "inserted", "removed", "dragstart", "dragenter", "dragover", "dragleave", "drag", "drop", "dragend"], function(e) {
   h[e] = t
  }), u
 }), define("can/view/elements", ["can/util/util", "can/view/view"], function(e) {
  var t = "undefined" != typeof document ? document : null,
   i = t && function() {
    return 1 === e.$(document.createComment("~")).length
   }(),
   n = {
    tagToContentPropMap: {
     option: t && "textContent" in document.createElement("option") ? "textContent" : "innerText",
     textarea: "value"
    },
    attrMap: e.attr.map,
    attrReg: /([^\s=]+)[\s]*=[\s]*/,
    defaultValue: e.attr.defaultValue,
    tagMap: {
     "": "span",
     colgroup: "col",
     table: "tbody",
     tr: "td",
     ol: "li",
     ul: "li",
     tbody: "tr",
     thead: "tr",
     tfoot: "tr",
     select: "option",
     optgroup: "option"
    },
    reverseTagMap: {
     col: "colgroup",
     tr: "tbody",
     option: "select",
     td: "tr",
     th: "tr",
     li: "ul"
    },
    selfClosingTags: {
     col: !0
    },
    getParentNode: function(e, t) {
     return t && 11 === e.parentNode.nodeType ? t : e.parentNode
    },
    setAttr: e.attr.set,
    getAttr: e.attr.get,
    removeAttr: e.attr.remove,
    contentText: function(e) {
     return "string" == typeof e ? e : e || 0 === e ? "" + e : ""
    },
    after: function(t, i) {
     var n = t[t.length - 1];
     n.nextSibling ? e.insertBefore(n.parentNode, i, n.nextSibling, e.document) : e.appendChild(n.parentNode, i, e.document)
    },
    replace: function(t, o) {
     var r, s = t[0].parentNode;
     "SELECT" === s.nodeName.toUpperCase() && s.selectedIndex >= 0 && (r = s.value), n.after(t, o), e.remove(e.$(t)).length < t.length && !i && e.each(t, function(e) {
      8 === e.nodeType && e.parentNode.removeChild(e)
     }), void 0 !== r && (s.value = r)
    }
   };
  return e.view.elements = n, n
 }), define("can/view/callbacks/callbacks", ["can/util/util", "can/view/view"], function(e) {
  var t = e.view.attr = function(e, t) {
    if (!t) {
     var o = i[e];
     if (!o)
      for (var r = 0, s = n.length; s > r; r++) {
       var a = n[r];
       if (a.match.test(e)) {
        o = a.handler;
        break
       }
      }
     return o
    }
    "string" == typeof e ? i[e] = t : n.push({
     match: e,
     handler: t
    })
   },
   i = {},
   n = [],
   o = /[-\:]/,
   r = e.view.tag = function(t, i) {
    if (!i) {
     var n = s[t.toLowerCase()];
     return !n && o.test(t) && (n = function() {}), n
    }
    e.global.html5 && (e.global.html5.elements += " " + t, e.global.html5.shivDocument()), s[t.toLowerCase()] = i
   },
   s = {};
  return e.view.callbacks = {
   _tags: s,
   _attributes: i,
   _regExpAttributes: n,
   tag: r,
   attr: t,
   tagHandler: function(t, i, n) {
    var o, r = n.options.get("tags." + i, {
      proxyMethods: !1
     }),
     a = r || s[i],
     l = n.scope;
    if ((o = a ? e.__notObserve(a)(t, n) : l) && n.subtemplate) {
     l !== o && (l = l.add(o));
     var c = n.subtemplate(l, n.options),
      d = "string" == typeof c ? e.view.frag(c) : c;
     e.appendChild(t, d)
    }
   }
  }, e.view.callbacks
 }), define("can/view/scanner", ["can/view/view", "can/view/elements", "can/view/callbacks/callbacks"], function(can, elements, viewCallbacks) {
  var newLine = /(\r|\n)+/g,
   notEndTag = /\//,
   clean = function(e) {
    return e.split("\\").join("\\\\").split("\n").join("\\n").split('"').join('\\"').split("\t").join("\\t")
   },
   getTag = function(e, t, i) {
    if (e) return e;
    for (; i < t.length;) {
     if ("<" === t[i] && !notEndTag.test(t[i + 1])) return elements.reverseTagMap[t[i + 1]] || "span";
     i++
    }
    return ""
   },
   bracketNum = function(e) {
    return --e.split("{").length - --e.split("}").length
   },
   myEval = function(script) {
    eval(script)
   },
   attrReg = /([^\s]+)[\s]*=[\s]*$/,
   startTxt = "var ___v1ew = [];",
   finishTxt = "return ___v1ew.join('')",
   put_cmd = "___v1ew.push(\n",
   insert_cmd = put_cmd,
   htmlTag = null,
   quote = null,
   beforeQuote = null,
   rescan = null,
   getAttrName = function() {
    var e = beforeQuote.match(attrReg);
    return e && e[1]
   },
   status = function() {
    return quote ? "'" + getAttrName() + "'" : htmlTag ? 1 : 0
   },
   top = function(e) {
    return e[e.length - 1]
   },
   Scanner;
  return can.view.Scanner = Scanner = function(e) {
   can.extend(this, {
    text: {},
    tokens: []
   }, e), this.text.options = this.text.options || "", this.tokenReg = [], this.tokenSimple = {
    "<": "<",
    ">": ">",
    '"': '"',
    "'": "'"
   }, this.tokenComplex = [], this.tokenMap = {};
   for (var t, i = 0; t = this.tokens[i]; i++) t[2] ? (this.tokenReg.push(t[2]), this.tokenComplex.push({
    abbr: t[1],
    re: new RegExp(t[2]),
    rescan: t[3]
   })) : (this.tokenReg.push(t[1]), this.tokenSimple[t[1]] = t[0]), this.tokenMap[t[0]] = t[1];
   this.tokenReg = new RegExp("(" + this.tokenReg.slice(0).concat(["<", ">", '"', "'"]).join("|") + ")", "g")
  }, Scanner.prototype = {
   helpers: [],
   scan: function(e, t) {
    var i = [],
     n = 0,
     o = this.tokenSimple,
     r = this.tokenComplex;
    e = e.replace(newLine, "\n"), this.transform && (e = this.transform(e)), e.replace(this.tokenReg, function(t, s) {
     var a = arguments[arguments.length - 2];
     if (a > n && i.push(e.substring(n, a)), o[t]) i.push(t);
     else
      for (var l, c = 0; l = r[c]; c++)
       if (l.re.test(t)) {
        i.push(l.abbr), l.rescan && i.push(l.rescan(s));
        break
       } n = a + s.length
    }), n < e.length && i.push(e.substr(n));
    var s, a, l, c, d = "",
     u = [startTxt + (this.text.start || "")],
     h = function(e, t) {
      u.push(put_cmd, '"', clean(e), '"' + (t || "") + ");")
     },
     p = [],
     f = null,
     m = !1,
     v = {
      attributeHookups: [],
      tagHookups: [],
      lastTagHookup: ""
     },
     g = function() {
      v.lastTagHookup = v.tagHookups.pop() + v.tagHookups.length
     },
     y = "",
     b = [],
     w = !1,
     x = !1,
     C = 0,
     k = this.tokenMap;
    for (htmlTag = quote = beforeQuote = null; void 0 !== (l = i[C++]);) {
     if (null === f) switch (l) {
      case k.left:
      case k.escapeLeft:
      case k.returnLeft:
       m = htmlTag && 1;
      case k.commentLeft:
       f = l, d.length && h(d), d = "";
       break;
      case k.escapeFull:
       m = htmlTag && 1, rescan = 1, f = k.escapeLeft, d.length && h(d), rescan = i[C++], d = rescan.content || rescan, rescan.before && h(rescan.before), i.splice(C, 0, k.right);
       break;
      case k.commentFull:
       break;
      case k.templateLeft:
       d += k.left;
       break;
      case "<":
       0 !== i[C].indexOf("!--") && (htmlTag = 1, m = 0), d += l;
       break;
      case ">":
       htmlTag = 0;
       var T = "/" === d.substr(d.length - 1) || "--" === d.substr(d.length - 2),
        S = "";
       if (v.attributeHookups.length && (S = "attrs: ['" + v.attributeHookups.join("','") + "'], ", v.attributeHookups = []), y + v.tagHookups.length !== v.lastTagHookup && y === top(v.tagHookups)) T && (d = d.substr(0, d.length - 1)), u.push(put_cmd, '"', clean(d), '"', ",can.view.pending({tagName:'" + y + "'," + S + "scope: " + (this.text.scope || "this") + this.text.options), T ? (u.push("}));"), d = "/>", g()) : "<" === i[C] && i[C + 1] === "/" + y ? (u.push("}));"), d = l, g()) : (u.push(",subtemplate: function(" + this.text.argNames + "){\n" + startTxt + (this.text.start || "")), d = "");
       else if (m || !w && elements.tagToContentPropMap[b[b.length - 1]] || S) {
        var $ = ",can.view.pending({" + S + "scope: " + (this.text.scope || "this") + this.text.options + '}),"';
        T ? h(d.substr(0, d.length - 1), $ + '/>"') : h(d, $ + '>"'), d = "", m = 0
       } else d += l;
       (T || w) && (b.pop(), y = b[b.length - 1], w = !1), v.attributeHookups = [];
       break;
      case "'":
      case '"':
       if (htmlTag)
        if (quote && quote === l) {
         quote = null;
         var P = getAttrName();
         if (viewCallbacks.attr(P) && v.attributeHookups.push(P), x) {
          d += l, h(d), u.push(finishTxt, "}));\n"), d = "", x = !1;
          break
         }
        } else if (null === quote && (quote = l, beforeQuote = s, c = getAttrName(), "img" === y && "src" === c || "style" === c)) {
        h(d.replace(attrReg, "")), d = "", x = !0, u.push(insert_cmd, "can.view.txt(2,'" + getTag(y, i, C) + "'," + status() + ",this,function(){", startTxt), h(c + "=" + l);
        break
       }
      default:
       if ("<" === s) {
        y = "!--" === l.substr(0, 3) ? "!--" : l.split(/\s/)[0];
        var A, E = !1;
        0 === y.indexOf("/") && (E = !0, A = y.substr(1)), E ? (top(b) === A && (y = A, w = !0), top(v.tagHookups) === A && (h(d.substr(0, d.length - 1)), u.push(finishTxt + "}}) );"), d = "><", g())) : (y.lastIndexOf("/") === y.length - 1 && (y = y.substr(0, y.length - 1)), "!--" !== y && viewCallbacks.tag(y) && ("content" === y && elements.tagMap[top(b)] && (l = l.replace("content", elements.tagMap[top(b)])), v.tagHookups.push(y)), b.push(y))
       }
       d += l
     } else switch (l) {
      case k.right:
      case k.returnRight:
       switch (f) {
        case k.left:
         a = bracketNum(d), 1 === a ? (u.push(insert_cmd, "can.view.txt(0,'" + getTag(y, i, C) + "'," + status() + ",this,function(){", startTxt, d), p.push({
          before: "",
          after: finishTxt + "}));\n"
         })) : (n = p.length && -1 === a ? p.pop() : {
          after: ";"
         }, n.before && u.push(n.before), u.push(d, ";", n.after));
         break;
        case k.escapeLeft:
        case k.returnLeft:
         (a = bracketNum(d)) && p.push({
          before: finishTxt,
          after: "}));\n"
         });
         for (var j = f === k.escapeLeft ? 1 : 0, F = {
           insert: insert_cmd,
           tagName: getTag(y, i, C),
           status: status(),
           specialAttribute: x
          }, L = 0; L < this.helpers.length; L++) {
          var _ = this.helpers[L];
          if (_.name.test(d)) {
           d = _.fn(d, F), _.name.source === /^>[\s]*\w*/.source && (j = 0);
           break
          }
         }
         "object" == typeof d ? d.startTxt && d.end && x ? u.push(insert_cmd, "can.view.toStr( ", d.content, "() ) );") : (d.startTxt ? u.push(insert_cmd, "can.view.txt(\n" + ("string" == typeof status() || (null != d.escaped ? d.escaped : j)) + ",\n'" + y + "',\n" + status() + ",\nthis,\n") : d.startOnlyTxt && u.push(insert_cmd, "can.view.onlytxt(this,\n"), u.push(d.content), d.end && u.push("));")) : x ? u.push(insert_cmd, d, ");") : u.push(insert_cmd, "can.view.txt(\n" + ("string" == typeof status() || j) + ",\n'" + y + "',\n" + status() + ",\nthis,\nfunction(){ " + (this.text.escape || "") + "return ", d, a ? startTxt : "}));\n"), rescan && rescan.after && rescan.after.length && (h(rescan.after.length), rescan = null)
       }
       f = null, d = "";
       break;
      case k.templateLeft:
       d += k.left;
       break;
      default:
       d += l
     }
     s = l
    }
    d.length && h(d), u.push(";");
    var N = u.join(""),
     D = {
      out: (this.text.outStart || "") + N + " " + finishTxt + (this.text.outEnd || "")
     };
    return myEval.call(D, "this.fn = (function(" + this.text.argNames + "){" + D.out + "});\r\n//# sourceURL=" + t + ".js"), D
   }
  }, can.view.pending = function(e) {
   var t = can.view.getHooks();
   return can.view.hook(function(i) {
    can.each(t, function(e) {
     e(i)
    }), e.templateType = "legacy", e.tagName && viewCallbacks.tagHandler(i, e.tagName, e), can.each(e && e.attrs || [], function(t) {
     e.attributeName = t;
     var n = viewCallbacks.attr(t);
     n && n(i, e)
    })
   })
  }, can.view.tag("content", function(e, t) {
   return t.scope
  }), can.view.Scanner = Scanner, Scanner
 }), define("can/view/node_lists/node_lists", ["can/util/util", "can/view/elements"], function(e) {
  var t = !0;
  try {
   document.createTextNode("")._ = 0
  } catch (e) {
   t = !1
  }
  var i = {},
   n = {},
   o = "ejs_" + Math.random(),
   r = 0,
   s = function(e, i) {
    var s = i || n,
     l = a(e, s);
    return l || (t || 3 !== e.nodeType ? (++r, e[o] = (e.nodeName ? "element_" : "obj_") + r) : (++r, s["text_" + r] = e, "text_" + r))
   },
   a = function(e, i) {
    if (t || 3 !== e.nodeType) return e[o];
    for (var n in i)
     if (i[n] === e) return n
   },
   l = [].splice,
   c = [].push,
   d = function(e) {
    for (var t = 0, i = 0, n = e.length; n > i; i++) {
     var o = e[i];
     o.nodeType ? t++ : t += d(o)
    }
    return t
   },
   u = function(e, t) {
    for (var i = {}, n = 0, o = e.length; o > n; n++) {
     var r = p.first(e[n]);
     i[s(r, t)] = e[n]
    }
    return i
   },
   h = function(e, t, i) {
    for (var n in t) i[n] || e.newDeepChildren.push(t[n])
   },
   p = {
    id: s,
    update: function(t, i) {
     var n = p.unregisterChildren(t);
     i = e.makeArray(i);
     var o = t.length;
     return l.apply(t, [0, o].concat(i)), t.replacements ? (p.nestReplacements(t), t.deepChildren = t.newDeepChildren, t.newDeepChildren = []) : p.nestList(t), n
    },
    nestReplacements: function(e) {
     for (var t = 0, i = {}, n = u(e.replacements, i), o = e.replacements.length, r = {}; t < e.length && o;) {
      var s = e[t],
       l = a(s, i),
       c = n[l];
      c && (e.splice(t, d(c), c), r[l] = !0, o--), t++
     }
     o && h(e, n, r), e.replacements = []
    },
    nestList: function(e) {
     for (var t = 0; t < e.length;) {
      var n = e[t],
       o = i[s(n)];
      o ? o !== e && e.splice(t, d(o), o) : i[s(n)] = e, t++
     }
    },
    last: function(e) {
     var t = e[e.length - 1];
     return t.nodeType ? t : p.last(t)
    },
    first: function(e) {
     var t = e[0];
     return t.nodeType ? t : p.first(t)
    },
    flatten: function(e) {
     for (var t = [], i = 0; i < e.length; i++) {
      var n = e[i];
      n.nodeType ? t.push(n) : t.push.apply(t, p.flatten(n))
     }
     return t
    },
    register: function(t, i, n, o) {
     return e.cid(t), t.unregistered = i, t.parentList = n, t.nesting = n && void 0 !== n.nesting ? n.nesting + 1 : 0, n ? (t.deepChildren = [], t.newDeepChildren = [], t.replacements = [], !0 !== n && (o ? n.replacements.push(t) : n.newDeepChildren.push(t))) : p.nestList(t), t
    },
    unregisterChildren: function(t) {
     var n = [];
     return e.each(t, function(e) {
      e.nodeType ? (t.replacements || delete i[s(e)], n.push(e)) : c.apply(n, p.unregister(e, !0))
     }), e.each(t.deepChildren, function(e) {
      p.unregister(e, !0)
     }), n
    },
    unregister: function(e, t) {
     var i = p.unregisterChildren(e, !0);
     if (e.unregistered) {
      var n = e.unregistered;
      if (e.replacements = e.unregistered = null, !t) {
       var o = e.parentList && e.parentList.deepChildren;
       if (o) {
        var r = o.indexOf(e); - 1 !== r && o.splice(r, 1)
       }
      }
      n()
     }
     return i
    },
    nodeMap: i
   };
  return e.view.nodeLists = p, p
 }), define("can/view/parser/parser", [], function() {
  function e(e, t) {
   for (var i = 0; i < e.length; i++) t(e[i], i)
  }

  function t(t) {
   var i = {};
   return e(t.split(","), function(e) {
    i[e] = !0
   }), i
  }

  function i(e, t) {
   for (var i = 0, n = e.length; n > i; i++) {
    var o = e[i];
    t[o.tokenType].apply(t, o.args)
   }
   return e
  }
  var n = "A-Za-z0-9",
   o = "-:_" + n,
   r = new RegExp("^<([" + n + "][" + o + "]*)((?:\\s*(?:(?:(?:[^=>\\s\\/]+)?(?:\\s*=\\s*(?:(?:\\{\\{[^\\}]\\}\\}\\}?)|(?:\\{[^\\}\\{]\\})|(?:\"[^\"]*\")|(?:'[^']*')|[^>\\s]+))?)|(?:\\{\\{[^\\}]*\\}\\}\\}?)+))*)\\s*(\\/?)>"),
   s = new RegExp("^<\\/([" + o + "]+)[^>]*>"),
   a = new RegExp("\\{\\{([^\\}]*)\\}\\}\\}?", "g"),
   l = /<|\{\{/,
   c = /\s/,
   d = t("area,base,basefont,br,col,frame,hr,img,input,isindex,link,meta,param,embed"),
   u = t("a,address,article,applet,aside,audio,blockquote,button,canvas,center,dd,del,dir,div,dl,dt,fieldset,figcaption,figure,footer,form,frameset,h1,h2,h3,h4,h5,h6,header,hgroup,hr,iframe,ins,isindex,li,map,menu,noframes,noscript,object,ol,output,p,pre,section,script,table,tbody,td,tfoot,th,thead,tr,ul,video"),
   h = t("a,abbr,acronym,applet,b,basefont,bdo,big,br,button,cite,code,del,dfn,em,font,i,iframe,img,input,ins,kbd,label,map,object,q,s,samp,script,select,small,span,strike,strong,sub,sup,textarea,tt,u,var"),
   p = t("altGlyph,altGlyphDef,altGlyphItem,animateColor,animateMotion,animateTransform,clipPath,feBlend,feColorMatrix,feComponentTransfer,feComposite,feConvolveMatrix,feDiffuseLighting,feDisplacementMap,feDistantLight,feFlood,feFuncA,feFuncB,feFuncG,feFuncR,feGaussianBlur,feImage,feMerge,feMergeNode,feMorphology,feOffset,fePointLight,feSpecularLighting,feSpotLight,feTile,feTurbulence,foreignObject,glyphRef,linearGradient,radialGradient,textPath"),
   f = t("colgroup,dd,dt,li,options,p,td,tfoot,th,thead,tr"),
   m = t("script"),
   v = "start,end,close,attrStart,attrEnd,attrValue,chars,comment,special,done".split(","),
   g = function() {},
   y = function(t, n, o) {
    function c(e, t, i, o) {
     if (t = p[t] ? t : t.toLowerCase(), u[t] && !h[t])
      for (var r = $.last(); r && h[r] && !u[r];) b("", r), r = $.last();
     f[t] && $.last() === t && b("", t), o = d[t] || !!o, n.start(t, o), o || $.push(t), y.parseAttrs(i, n), n.end(t, o)
    }

    function b(e, t) {
     var i;
     if (t)
      for (t = p[t] ? t : t.toLowerCase(), i = $.length - 1; i >= 0 && $[i] !== t; i--);
     else i = 0;
     if (i >= 0) {
      for (var o = $.length - 1; o >= i; o--) n.close && n.close($[o]);
      $.length = i
     }
    }

    function w(e, t) {
     n.special && n.special(t)
    }
    if ("object" == typeof t) return i(t, n);
    var x = [];
    n = n || {}, o && e(v, function(e) {
     var t = n[e] || g;
     n[e] = function() {
      !1 !== t.apply(this, arguments) && x.push({
       tokenType: e,
       args: [].slice.call(arguments, 0)
      })
     }
    });
    var C, k, T, S = function() {
      A && n.chars && n.chars(A), A = ""
     },
     $ = [],
     P = t,
     A = "";
    for ($.last = function() {
      return this[this.length - 1]
     }; t;) {
     if (k = !0, $.last() && m[$.last()]) t = t.replace(new RegExp("([\\s\\S]*?)</" + $.last() + "[^>]*>"), function(e, t) {
      return t = t.replace(/<!--([\s\S]*?)-->|<!\[CDATA\[([\s\S]*?)]]>/g, "$1$2"), n.chars && n.chars(t), ""
     }), b("", $.last());
     else if (0 === t.indexOf("\x3c!--") ? (C = t.indexOf("--\x3e")) >= 0 && (S(), n.comment && n.comment(t.substring(4, C)), t = t.substring(C + 3), k = !1) : 0 === t.indexOf("</") ? (T = t.match(s)) && (S(), t = t.substring(T[0].length), T[0].replace(s, b), k = !1) : 0 === t.indexOf("<") ? (T = t.match(r)) && (S(), t = t.substring(T[0].length), T[0].replace(r, c), k = !1) : 0 === t.indexOf("{{") && (T = t.match(a)) && (S(), t = t.substring(T[0].length), T[0].replace(a, w)), k) {
      0 === (C = t.search(l)) && t === P && (A += t.charAt(0), t = t.substr(1), C = t.search(l));
      var E = 0 > C ? t : t.substring(0, C);
      t = 0 > C ? "" : t.substring(C), E && (A += E)
     }
     if (t === P) throw new Error("Parse Error: " + t);
     P = t
    }
    return S(), b(), n.done(), x
   },
   b = function(e, t, i, n) {
    e.attrStart = n.substring("number" == typeof e.nameStart ? e.nameStart : t, t), i.attrStart(e.attrStart), e.inName = !1
   },
   w = function(e, t, i, n) {
    void 0 !== e.valueStart && e.valueStart < t ? i.attrValue(n.substring(e.valueStart, t)) : e.inValue, i.attrEnd(e.attrStart), e.attrStart = void 0, e.valueStart = void 0, e.inValue = !1, e.inName = !1, e.lookingForEq = !1, e.inQuote = !1, e.lookingForName = !0
   };
  return y.parseAttrs = function(e, t) {
   if (e) {
    for (var i, n = 0, o = {
      inDoubleCurly: !1,
      inName: !1,
      nameStart: void 0,
      inValue: !1,
      valueStart: void 0,
      inQuote: !1,
      attrStart: void 0,
      lookingForName: !0,
      lookingForValue: !1,
      lookingForEq: !1
     }; n < e.length;) {
     i = n;
     var r = e.charAt(n),
      s = e.charAt(n + 1),
      a = e.charAt(n + 2);
     if (n++, "{" === r && "{" === s) o.inValue && i > o.valueStart ? t.attrValue(e.substring(o.valueStart, i)) : o.inName && o.nameStart < i ? (b(o, i, t, e), w(o, i, t, e)) : o.lookingForValue ? o.inValue = !0 : o.lookingForEq && o.attrStart && w(o, i, t, e), o.inDoubleCurly = !0, o.doubleCurlyStart = i + 2, n++;
     else if (o.inDoubleCurly) {
      if ("}" === r && "}" === s) {
       var l = "}" === a ? 1 : 0;
       t.special(e.substring(o.doubleCurlyStart, i)), o.inDoubleCurly = !1, o.inValue && (o.valueStart = i + 2 + l), n += 1 + l
      }
     } else o.inValue ? o.inQuote ? r === o.inQuote && w(o, i, t, e) : c.test(r) && w(o, i, t, e) : "=" === r && (o.lookingForEq || o.lookingForName || o.inName) ? (o.attrStart || b(o, i, t, e), o.lookingForValue = !0, o.lookingForEq = !1, o.lookingForName = !1) : o.inName ? c.test(r) && (b(o, i, t, e), o.lookingForEq = !0) : o.lookingForName ? c.test(r) || (o.attrStart && w(o, i, t, e), o.nameStart = i, o.inName = !0) : o.lookingForValue && (c.test(r) || (o.lookingForValue = !1, o.inValue = !0, "'" === r || '"' === r ? (o.inQuote = r, o.valueStart = i + 1) : o.valueStart = i))
    }
    o.inName ? (b(o, i + 1, t, e), w(o, i + 1, t, e)) : o.lookingForEq ? w(o, i + 1, t, e) : o.inValue && w(o, i + 1, t, e)
   }
  }, y
 }), define("can/util/array/diff", [], function() {
  var e = [].slice;
  return function(t, i) {
   for (var n = 0, o = 0, r = t.length, s = i.length, a = []; r > n && s > o;) {
    var l = t[n],
     c = i[o];
    if (l !== c)
     if (s > o + 1 && i[o + 1] === l) a.push({
      index: o,
      deleteCount: 0,
      insert: [i[o]]
     }), n++, o += 2;
     else {
      if (!(r > n + 1 && t[n + 1] === c)) return a.push({
       index: o,
       deleteCount: r - n,
       insert: e.call(i, o)
      }), a;
      a.push({
       index: o,
       deleteCount: 1,
       insert: []
      }), n += 2, o++
     }
    else n++, o++
   }
   return o === s && n === r ? a : (a.push({
    index: o,
    deleteCount: r - n,
    insert: e.call(i, o)
   }), a)
  }
 }), define("can/view/live/live", ["can/util/util", "can/view/elements", "can/view/view", "can/view/node_lists/node_lists", "can/view/parser/parser", "can/util/array/diff"], function(e, t, i, n, o, r) {
  t = t || e.view.elements, n = n || e.view.NodeLists, o = o || e.view.parser;
  var s = function(t, i, n) {
    var o = !1,
     r = function() {
      return o || (o = !0, n(s), e.unbind.call(t, "removed", r)), !0
     },
     s = {
      teardownCheck: function(e) {
       return !e && r()
      }
     };
    return e.bind.call(t, "removed", r), i(s), s
   },
   a = function(e) {
    var t = e.childNodes;
    if ("length" in t) return t;
    for (var i = e.firstChild, n = []; i;) n.push(i), i = i.nextSibling;
    return n
   },
   l = function(e, t, i) {
    return s(e, function() {
     t.computeInstance.bind("change", i)
    }, function(e) {
     t.computeInstance.unbind("change", i), e.nodeList && n.unregister(e.nodeList)
    })
   },
   c = function(e) {
    var t, i = {};
    return o.parseAttrs(e, {
     attrStart: function(e) {
      i[e] = "", t = e
     },
     attrValue: function(e) {
      i[t] += e
     },
     attrEnd: function() {}
    }), i
   },
   d = [].splice,
   u = function(e) {
    return e && e.nodeType
   },
   h = function(e) {
    e.firstChild || e.appendChild(e.ownerDocument.createTextNode(""))
   },
   p = function(t) {
    var i = "string" == typeof t,
     n = e.frag(t);
    return i ? e.view.hookup(n) : n
   },
   f = function(t, i, o, r, s) {
    var l = [];
    i && (n.register(l, null, !0, !0), l.parentList = i, l.expression = "#each SUBEXPRESSION");
    var c = o.apply(r, s.concat([l])),
     d = p(c),
     u = e.makeArray(a(d));
    return i ? (n.update(l, u), t.push(l)) : t.push(n.register(u)), d
   },
   m = function(t, i, o) {
    var r = t.splice(i + 1, o),
     s = [];
    return e.each(r, function(e) {
     var t = n.unregister(e);
     [].push.apply(s, t)
    }), s
   },
   v = function(e, i, n, o) {
    if (i && 0 === e.length) {
     var r = [],
      s = f(r, o, i, e, [e]);
     t.after([n[0]], s), n.push(r[0])
    }
   },
   g = {},
   y = {
    registerChildMutationCallback: function(e, t) {
     return t ? void(g[e] = t) : g[e]
    },
    callChildMutationCallback: function(e) {
     var t = e && g[e.nodeName.toLowerCase()];
     t && t(e)
    },
    list: function(i, o, a, l, c, u, h) {
     var p, g = u || [i],
      b = [],
      w = !1,
      x = !1,
      C = function(i, o, r) {
       if (w) {
        var s = $.ownerDocument.createDocumentFragment(),
         c = [],
         h = [];
        e.each(o, function(t, i) {
         var n = e.compute(i + r),
          o = f(c, u, a, l, [t, n]);
         s.appendChild(o), h.push(n)
        });
        var p = r + 1;
        if (!b.length) {
         var v = m(g, 0, g.length - 1);
         e.remove(e.$(v))
        }
        if (g[p]) {
         var x = n.first(g[p]);
         e.insertBefore(x.parentNode, s, x)
        } else t.after(1 === p ? [$] : [n.last(g[p - 1])], s);
        d.apply(g, [p, 0].concat(c)), d.apply(b, [r, 0].concat(h));
        for (var C = r + h.length, k = b.length; k > C; C++) b[C](C);
        !1 !== i.callChildMutationCallback && y.callChildMutationCallback($.parentNode)
       }
      },
      k = function(e, t, i) {
       T({}, {
        length: 1
       }, i, !0), C({}, [t], i)
      },
      T = function(t, i, o, r, s) {
       if (w && (r || !E.teardownCheck($.parentNode))) {
        0 > o && (o = b.length + o);
        var a = m(g, o, i.length);
        b.splice(o, i.length);
        for (var l = o, c = b.length; c > l; l++) b[l](l);
        s ? n.unregister(g) : (v(p, h, g, u), e.remove(e.$(a)), !1 !== t.callChildMutationCallback && y.callChildMutationCallback($.parentNode))
       }
      },
      S = function(t, i, o, r) {
       if (w) {
        o += 1, r += 1;
        var s, a = g[o],
         l = e.frag(n.flatten(g[r]));
        s = o > r ? n.last(a).nextSibling : n.first(a);
        g[0].parentNode.insertBefore(l, s);
        var c = g[r];
        [].splice.apply(g, [r, 1]), [].splice.apply(g, [o, 0, c]), o -= 1, r -= 1;
        var d = b[r];
        [].splice.apply(b, [r, 1]), [].splice.apply(b, [o, 0, d]);
        var u = Math.min(r, o),
         h = b.length;
        for (h; h > u; u++) b[u](u);
        !1 !== t.callChildMutationCallback && y.callChildMutationCallback($.parentNode)
       }
      },
      $ = i.ownerDocument.createTextNode(""),
      P = function(e) {
       p && p.unbind && p.unbind("add", C).unbind("set", k).unbind("remove", T).unbind("move", S), T({
        callChildMutationCallback: !!e
       }, {
        length: g.length - 1
       }, 0, !0, e)
      },
      A = function(t, i, n) {
       if (!x) {
        if (w = !0, i && n) {
         p = i || [];
         var o = r(n, i);
         n.unbind && n.unbind("add", C).unbind("set", k).unbind("remove", T).unbind("move", S);
         for (var s = 0, a = o.length; a > s; s++) {
          var l = o[s];
          l.deleteCount && T({
           callChildMutationCallback: !1
          }, {
           length: l.deleteCount
          }, l.index, !0), l.insert.length && C({
           callChildMutationCallback: !1
          }, l.insert, l.index)
         }
        } else n && P(), p = i || [], C({
         callChildMutationCallback: !1
        }, p, 0), v(p, h, g, u);
        y.callChildMutationCallback($.parentNode), w = !1, p.bind && p.bind("add", C).bind("set", k).bind("remove", T).bind("move", S), e.batch.afterPreviousEvents(function() {
         w = !0
        })
       }
      };
     c = t.getParentNode(i, c);
     var E = s(c, function() {
      e.isFunction(o) && o.bind("change", A)
     }, function() {
      e.isFunction(o) && o.unbind("change", A), P(!0)
     });
     u ? (t.replace(g, $), n.update(g, [$]), u.unregistered = function() {
      E.teardownCheck(), x = !0
     }) : y.replace(g, $, E.teardownCheck), A(0, e.isFunction(o) ? o() : o)
    },
    html: function(i, o, r, s) {
     var c;
     r = t.getParentNode(i, r), c = l(r, o, function(e, t, i) {
      n.first(d).parentNode && p(t);
      var o = n.first(d).parentNode;
      c.teardownCheck(o), y.callChildMutationCallback(o)
     });
     var d = s || [i],
      p = function(i) {
       var o = "function" == typeof i,
        s = u(i),
        l = e.frag(o ? "" : i),
        c = e.makeArray(d);
       h(l), s || o || (l = e.view.hookup(l, r)), c = n.update(d, a(l)), o && i(l.firstChild), t.replace(c, l)
      };
     c.nodeList = d, s ? s.unregistered = c.teardownCheck : n.register(d, c.teardownCheck), p(o())
    },
    replace: function(i, o, r) {
     var s = i.slice(0),
      l = e.frag(o);
     return n.register(i, r), "string" == typeof o && (l = e.view.hookup(l, i[0].parentNode)), n.update(i, a(l)), t.replace(s, l), i
    },
    text: function(i, o, r, s) {
     var a = t.getParentNode(i, r),
      c = l(a, o, function(t, i, n) {
       "unknown" != typeof d.nodeValue && (d.nodeValue = e.view.toStr(i)), c.teardownCheck(d.parentNode)
      }),
      d = i.ownerDocument.createTextNode(e.view.toStr(o()));
     s ? (s.unregistered = c.teardownCheck, c.nodeList = s, n.update(s, [d]), t.replace([i], d)) : c.nodeList = y.replace([i], d, c.teardownCheck)
    },
    setAttributes: function(t, i) {
     var n = c(i);
     for (var o in n) e.attr.set(t, o, n[o])
    },
    attributes: function(i, n, o) {
     var r = {},
      s = function(n) {
       var o, s = c(n);
       for (o in s) {
        var a = s[o];
        a !== r[o] && e.attr.set(i, o, a), delete r[o]
       }
       for (o in r) t.removeAttr(i, o);
       r = s
      };
     l(i, n, function(e, t) {
      s(t)
     }), arguments.length >= 3 ? r = c(o) : s(n())
    },
    attributePlaceholder: "__!!__",
    attributeReplace: /__!!__/g,
    attribute: function(i, n, o) {
     l(i, o, function(e, o) {
      t.setAttr(i, n, a.render())
     });
     var r, s = e.$(i);
     (r = e.data(s, "hooks")) || e.data(s, "hooks", r = {});
     var a, c = String(t.getAttr(i, n)),
      d = c.split(y.attributePlaceholder),
      u = [];
     u.push(d.shift(), d.join(y.attributePlaceholder)), r[n] ? r[n].computes.push(o) : r[n] = {
      render: function() {
       var e = 0;
       return c ? c.replace(y.attributeReplace, function() {
        return t.contentText(a.computes[e++]())
       }) : t.contentText(a.computes[e++]())
      },
      computes: [o],
      batchNum: void 0
     }, a = r[n], u.splice(1, 0, o()), t.setAttr(i, n, u.join(""))
    },
    specialAttribute: function(e, i, n) {
     l(e, n, function(n, o) {
      t.setAttr(e, i, w(o))
     }), t.setAttr(e, i, w(n()))
    },
    simpleAttribute: function(e, i, n) {
     l(e, n, function(n, o) {
      t.setAttr(e, i, o)
     }), t.setAttr(e, i, n())
    }
   };
  y.attr = y.simpleAttribute, y.attrs = y.attributes, y.getAttributeParts = c;
  var b = /(\r|\n)+/g,
   w = function(e) {
    var i = /^["'].*["']$/;
    return e = e.replace(t.attrReg, "").replace(b, ""), i.test(e) ? e.substr(1, e.length - 2) : e
   };
  return e.view.live = y, y
 }), define("can/view/render", ["can/view/view", "can/view/elements", "can/view/live/live", "can/util/string/string"], function(e, t, i) {
  var n, o = [],
   r = function(e) {
    var i = t.tagMap[e] || "span";
    return "span" === i ? "@@!!@@" : "<" + i + ">" + r(i) + "</" + i + ">"
   },
   s = function(t, i) {
    if ("string" == typeof t) return t;
    if (!t && 0 !== t) return "";
    var n = t.hookup && function(e, i) {
     t.hookup.call(t, e, i)
    } || "function" == typeof t && t;
    return n ? i ? "<" + i + " " + e.view.hook(n) + "></" + i + ">" : (o.push(n), "") : "" + t
   },
   a = function(t, i) {
    return "string" == typeof t || "number" == typeof t ? e.esc(t) : s(t, i)
   },
   l = !1,
   c = function() {};
  return e.extend(e.view, {
   live: i,
   setupLists: function() {
    var t, i = e.view.lists;
    return e.view.lists = function(e, i) {
      return t = {
       list: e,
       renderer: i
      }, Math.random()
     },
     function() {
      return e.view.lists = i, t
     }
   },
   getHooks: function() {
    var e = o.slice(0);
    return n = e, o = [], e
   },
   onlytxt: function(e, t) {
    return a(t.call(e))
   },
   txt: function(d, u, h, p, f) {
    var m, v, g, y, b = t.tagMap[u] || "span",
     w = !1,
     x = c;
    if (l) m = f.call(p);
    else {
     ("string" == typeof h || 1 === h) && (l = !0);
     var C = e.view.setupLists();
     x = function() {
      g.unbind("change", c)
     }, g = e.compute(f, p, !1), g.bind("change", c), v = C(), m = g(), l = !1, w = g.computeInstance.hasDependencies
    }
    if (v) return x(), "<" + b + e.view.hook(function(e, t) {
     i.list(e, v.list, v.renderer, p, t)
    }) + "></" + b + ">";
    if (!w || "function" == typeof m) return x(), (l || 2 === d || !d ? s : a)(m, 0 === h && b);
    var k = t.tagToContentPropMap[u];
    if (0 !== h || k) return 1 === h ? (o.push(function(e) {
     i.attributes(e, g, g()), x()
    }), g()) : 2 === d ? (y = h, o.push(function(e) {
     i.specialAttribute(e, y, g), x()
    }), g()) : (y = 0 === h ? k : h, (0 === h ? n : o).push(function(e) {
     i.attribute(e, y, g), x()
    }), i.attributePlaceholder);
    var T = !!t.selfClosingTags[b];
    return "<" + b + e.view.hook(d && "object" != typeof m ? function(e, t) {
     i.text(e, g, t), x()
    } : function(e, t) {
     i.html(e, g, t), x()
    }) + (T ? "/>" : ">" + r(b) + "</" + b + ">")
   }
  }), e
 }), define("can/view/ejs/ejs", ["can/util/util", "can/view/view", "can/util/string/string", "can/compute/compute", "can/view/scanner", "can/view/render"], function(e) {
  var t = e.extend,
   i = function(e) {
    if (this.constructor !== i) {
     var n = new i(e);
     return function(e, t) {
      return n.render(e, t)
     }
    }
    return "function" == typeof e ? void(this.template = {
     fn: e
    }) : (t(this, e), void(this.template = this.scanner.scan(this.text, this.name)))
   };
  return e.EJS = i, i.prototype.render = function(e, t) {
   return e = e || {}, this.template.fn.call(e, e, new i.Helpers(e, t || {}))
  }, t(i.prototype, {
   scanner: new e.view.Scanner({
    text: {
     outStart: "with(_VIEW) { with (_CONTEXT) {",
     outEnd: "}}",
     argNames: "_CONTEXT,_VIEW",
     context: "this"
    },
    tokens: [
     ["templateLeft", "<%%"],
     ["templateRight", "%>"],
     ["returnLeft", "<%=="],["escapeLeft","<%="],["commentLeft","<%#"],["left","<%"],["right","%>"],
     ["returnRight", "%>"]
    ],
    helpers: [{
     name: /\s*\(([\$\w]+)\)\s*->([^\n]*)/,
     fn: function(e) {
      var t = /\s*\(([\$\w]+)\)\s*->([^\n]*)/,
       i = e.match(t);
      return "can.proxy(function(__){var " + i[1] + "=can.$(__);" + i[2] + "}, this);"
     }
    }],
    transform: function(e) {
     return e.replace(/<%([\s\S]+?)%>/gm, function(e, t) {
      var i, n, o = [];
      t.replace(/[{}]/gm, function(e, t) {
       o.push([e, t])
      });
      do {
       for (i = !1, n = o.length - 2; n >= 0; n--)
        if ("{" === o[n][0] && "}" === o[n + 1][0]) {
         o.splice(n, 2), i = !0;
         break
        }
      } while (i);
      if (o.length >= 2) {
       var r, s = ["<%"],a=0;for(n=0;r=o[n];n++)s.push(t.substring(a,a=r[1])),"{"===r[0]&&n<o.length-1||"}"===r[0]&&n>0?s.push("{"===r[0]?"{ %><% ":" %><% }"):s.push(r[0]),++a;return s.push(t.substring(a),"%>"),
        s.join("")
      }
      return "<%"+t+"%>"
     })
    }
   })
  }), i.Helpers = function(e, i) {
   this._data = e, this._extras = i, t(this, i)
  }, i.Helpers.prototype = {
   list: function(t, i) {
    e.each(t, function(e, n) {
     i(e, n, t)
    })
   },
   each: function(t, i) {
    e.isArray(t) ? this.list(t, i) : e.view.lists(t, i)
   }
  }, e.view.register({
   suffix: "ejs",
   script: function(e, t) {
    return "can.EJS(function(_CONTEXT,_VIEW) { " + new i({
     text: t,
     name: e
    }).template.out + " })"
   },
   renderer: function(e, t) {
    return i({
     text: t,
     name: e
    })
   }
  }), e.ejs.Helpers = i.Helpers, e
 }), define("can/construct/super/super", ["can/util/util", "can/construct/construct"], function(e, t) {
  var i = e.isFunction,
   n = /xyz/.test(function() {
    return this.xyz
   }) ? /\b_super\b/ : /.*/,
   o = ["get", "set"],
   r = function(e, t, i) {
    return function() {
     var n, o = this._super;
     return this._super = e[t], n = i.apply(this, arguments), this._super = o, n
    }
   };
  return e.Construct._defineProperty = function(t, n, s, a) {
   var l = Object.getOwnPropertyDescriptor(n, s);
   l && e.each(o, function(e) {
    i(l[e]) && i(a[e]) ? a[e] = r(l, e, a[e]) : i(a[e]) || (a[e] = l[e])
   }), Object.defineProperty(t, s, a)
  }, e.Construct._overwrite = function(e, t, o, s) {
   e[o] = i(s) && i(t[o]) && n.test(s) ? r(t, o, s) : s
  }, e
 }), define("can/control/plugin/plugin", ["jquery/dist/jquery", "can/util/util", "can/control/control"], function(e, t) {
  e = e || window.$;
  var i, n = function(e, t) {
    var n = e.constructor.pluginName || e.constructor._shortName;
    for (i = 0; i < t.length; i++)
     if ("string" == typeof t[i] ? n === t[i] : e instanceof t[i]) return !0;
    return !1
   },
   o = t.makeArray,
   r = t.Control.setup;
  return t.Control.setup = function() {
   if (this !== t.Control) {
    var e = this.pluginName || this._fullName;
    "can_control" !== e && this.plugin(e), r.apply(this, arguments)
   }
  }, e.fn.extend({
   controls: function() {
    var e, i, r = o(arguments),
     s = [];
    return this.each(function() {
     if (e = t.$(this).data("controls"))
      for (var o = 0; o < e.length; o++) i = e[o], (!r.length || n(i, r)) && s.push(i)
    }), s
   },
   control: function(e) {
    return this.controls.apply(this, arguments)[0]
   }
  }), t.Control.plugin = function(i) {
   var n = this;
   e.fn[i] || (e.fn[i] = function(i) {
    var r, s = o(arguments),
     a = "string" == typeof i && e.isFunction(n.prototype[i]),
     l = s[0];
    return this.each(function() {
     var e = t.$(this).control(n);
     e ? a ? r = e[l].apply(e, s.slice(1)) : e.update.apply(e, s) : n.newInstance.apply(n, [this].concat(s))
    }), void 0 !== r ? r : this
   })
  }, t.Control.prototype.update = function(e) {
   t.extend(this.options, e), this.on()
  }, t
 }), define("can/view/ejs/system", ["can/view/ejs/ejs"], function(e) {
  function t(t) {
   return "define(['can/view/ejs/ejs'],function(can){return can.view.preloadStringRenderer('" + t.metadata.pluginArgument + "',can.EJS(function(_CONTEXT,_VIEW) { " + new e.EJS({
    text: t.source,
    name: t.name
   }).template.out + " }))})"
  }
  return {
   translate: t
  }
 }),
 function() {
  window._define = window.define, window.define = window.define.orig
 }(),
 function(e) {
  "function" == typeof define && define.amd ? define(["jquery"], e) : "object" == typeof module && module.exports ? module.exports = e(require("jquery")) : e(jQuery)
 }(function(e) {
  e.extend(e.fn, {
   validate: function(t) {
    if (!this.length) return void(t && t.debug && window.console && console.warn("Nothing selected, can't validate, returning nothing."));
    var i = e.data(this[0], "validator");
    return i || (this.attr("novalidate", "novalidate"), i = new e.validator(t, this[0]), e.data(this[0], "validator", i), i.settings.onsubmit && (this.on("click.validate", ":submit", function(t) {
     i.settings.submitHandler && (i.submitButton = t.target), e(this).hasClass("cancel") && (i.cancelSubmit = !0), void 0 !== e(this).attr("formnovalidate") && (i.cancelSubmit = !0)
    }), this.on("submit.validate", function(t) {
     function n() {
      var n, o;
      return !i.settings.submitHandler || (i.submitButton && (n = e("<input type='hidden'/>").attr("name", i.submitButton.name).val(e(i.submitButton).val()).appendTo(i.currentForm)), o = i.settings.submitHandler.call(i, i.currentForm, t), i.submitButton && n.remove(), void 0 !== o && o)
     }
     return i.settings.debug && t.preventDefault(), i.cancelSubmit ? (i.cancelSubmit = !1, n()) : i.form() ? i.pendingRequest ? (i.formSubmitted = !0, !1) : n() : (i.focusInvalid(), !1)
    })), i)
   },
   valid: function() {
    var t, i, n;
    return e(this[0]).is("form") ? t = this.validate().form() : (n = [], t = !0, i = e(this[0].form).validate(), this.each(function() {
     (t = i.element(this) && t) || (n = n.concat(i.errorList))
    }), i.errorList = n), t
   },
   rules: function(t, i) {
    if (this.length) {
     var n, o, r, s, a, l, c = this[0];
     if (t) switch (n = e.data(c.form, "validator").settings, o = n.rules, r = e.validator.staticRules(c), t) {
      case "add":
       e.extend(r, e.validator.normalizeRule(i)), delete r.messages, o[c.name] = r, i.messages && (n.messages[c.name] = e.extend(n.messages[c.name], i.messages));
       break;
      case "remove":
       return i ? (l = {}, e.each(i.split(/\s/), function(t, i) {
        l[i] = r[i], delete r[i], "required" === i && e(c).removeAttr("aria-required")
       }), l) : (delete o[c.name], r)
     }
     return s = e.validator.normalizeRules(e.extend({}, e.validator.classRules(c), e.validator.attributeRules(c), e.validator.dataRules(c), e.validator.staticRules(c)), c), s.required && (a = s.required, delete s.required, s = e.extend({
      required: a
     }, s), e(c).attr("aria-required", "true")), s.remote && (a = s.remote, delete s.remote, s = e.extend(s, {
      remote: a
     })), s
    }
   }
  }), e.extend(e.expr[":"], {
   blank: function(t) {
    return !e.trim("" + e(t).val())
   },
   filled: function(t) {
    var i = e(t).val();
    return null !== i && !!e.trim("" + i)
   },
   unchecked: function(t) {
    return !e(t).prop("checked")
   }
  }), e.validator = function(t, i) {
   this.settings = e.extend(!0, {}, e.validator.defaults, t), this.currentForm = i, this.init()
  }, e.validator.format = function(t, i) {
   return 1 === arguments.length ? function() {
    var i = e.makeArray(arguments);
    return i.unshift(t), e.validator.format.apply(this, i)
   } : void 0 === i ? t : (arguments.length > 2 && i.constructor !== Array && (i = e.makeArray(arguments).slice(1)), i.constructor !== Array && (i = [i]), e.each(i, function(e, i) {
    t = t.replace(new RegExp("\\{" + e + "\\}", "g"), function() {
     return i
    })
   }), t)
  }, e.extend(e.validator, {
   defaults: {
    messages: {},
    groups: {},
    rules: {},
    errorClass: "error",
    pendingClass: "pending",
    validClass: "valid",
    errorElement: "label",
    focusCleanup: !1,
    focusInvalid: !0,
    errorContainer: e([]),
    errorLabelContainer: e([]),
    onsubmit: !0,
    ignore: ":hidden",
    ignoreTitle: !1,
    onfocusin: function(e) {
     this.lastActive = e, this.settings.focusCleanup && (this.settings.unhighlight && this.settings.unhighlight.call(this, e, this.settings.errorClass, this.settings.validClass), this.hideThese(this.errorsFor(e)))
    },
    onfocusout: function(e) {
     this.checkable(e) || !(e.name in this.submitted) && this.optional(e) || this.element(e)
    },
    onkeyup: function(t, i) {
     var n = [16, 17, 18, 20, 35, 36, 37, 38, 39, 40, 45, 144, 225];
     9 === i.which && "" === this.elementValue(t) || -1 !== e.inArray(i.keyCode, n) || (t.name in this.submitted || t.name in this.invalid) && this.element(t)
    },
    onclick: function(e) {
     e.name in this.submitted ? this.element(e) : e.parentNode.name in this.submitted && this.element(e.parentNode)
    },
    highlight: function(t, i, n) {
     "radio" === t.type ? this.findByName(t.name).addClass(i).removeClass(n) : e(t).addClass(i).removeClass(n)
    },
    unhighlight: function(t, i, n) {
     "radio" === t.type ? this.findByName(t.name).removeClass(i).addClass(n) : e(t).removeClass(i).addClass(n)
    }
   },
   setDefaults: function(t) {
    e.extend(e.validator.defaults, t)
   },
   messages: {
    required: "This field is required.",
    remote: "Please fix this field.",
    email: "Please enter a valid email address.",
    url: "Please enter a valid URL.",
    date: "Please enter a valid date.",
    dateISO: "Please enter a valid date ( ISO ).",
    number: "Please enter a valid number.",
    digits: "Please enter only digits.",
    equalTo: "Please enter the same value again.",
    maxlength: e.validator.format("Please enter no more than {0} characters."),
    minlength: e.validator.format("Please enter at least {0} characters."),
    rangelength: e.validator.format("Please enter a value between {0} and {1} characters long."),
    range: e.validator.format("Please enter a value between {0} and {1}."),
    max: e.validator.format("Please enter a value less than or equal to {0}."),
    min: e.validator.format("Please enter a value greater than or equal to {0}."),
    step: e.validator.format("Please enter a multiple of {0}.")
   },
   autoCreateRanges: !1,
   prototype: {
    init: function() {
     function t(t) {
      var i = e.data(this.form, "validator"),
       n = "on" + t.type.replace(/^validate/, ""),
       o = i.settings;
      o[n] && !e(this).is(o.ignore) && o[n].call(i, this, t)
     }
     this.labelContainer = e(this.settings.errorLabelContainer), this.errorContext = this.labelContainer.length && this.labelContainer || e(this.currentForm), this.containers = e(this.settings.errorContainer).add(this.settings.errorLabelContainer), this.submitted = {}, this.valueCache = {}, this.pendingRequest = 0, this.pending = {}, this.invalid = {}, this.reset();
     var i, n = this.groups = {};
     e.each(this.settings.groups, function(t, i) {
       "string" == typeof i && (i = i.split(/\s/)), e.each(i, function(e, i) {
        n[i] = t
       })
      }), i = this.settings.rules, e.each(i, function(t, n) {
       i[t] = e.validator.normalizeRule(n)
      }),
      e(this.currentForm).on("focusin.validate focusout.validate keyup.validate", ":text, [type='password'], [type='file'], select, textarea, [type='number'], [type='search'], [type='tel'], [type='url'], [type='email'], [type='datetime'], [type='date'], [type='month'], [type='week'], [type='time'], [type='datetime-local'], [type='range'], [type='color'], [type='radio'], [type='checkbox'], [contenteditable]", t).on("click.validate", "select, option, [type='radio'], [type='checkbox']", t), this.settings.invalidHandler && e(this.currentForm).on("invalid-form.validate", this.settings.invalidHandler), e(this.currentForm).find("[required], [data-rule-required], .required").attr("aria-required", "true")
    },
    form: function() {
     return this.checkForm(), e.extend(this.submitted, this.errorMap), this.invalid = e.extend({}, this.errorMap), this.valid() || e(this.currentForm).triggerHandler("invalid-form", [this]), this.showErrors(), this.valid()
    },
    checkForm: function() {
     this.prepareForm();
     for (var e = 0, t = this.currentElements = this.elements(); t[e]; e++) this.check(t[e]);
     return this.valid()
    },
    element: function(t) {
     var i, n, o = this.clean(t),
      r = this.validationTargetFor(o),
      s = this,
      a = !0;
     return void 0 === r ? delete this.invalid[o.name] : (this.prepareElement(r), this.currentElements = e(r), n = this.groups[r.name], n && e.each(this.groups, function(e, t) {
      t === n && e !== r.name && (o = s.validationTargetFor(s.clean(s.findByName(e)))) && o.name in s.invalid && (s.currentElements.push(o), a = a && s.check(o))
     }), i = !1 !== this.check(r), a = a && i, this.invalid[r.name] = !i, this.numberOfInvalids() || (this.toHide = this.toHide.add(this.containers)), this.showErrors(), e(t).attr("aria-invalid", !i)), a
    },
    showErrors: function(t) {
     if (t) {
      var i = this;
      e.extend(this.errorMap, t), this.errorList = e.map(this.errorMap, function(e, t) {
       return {
        message: e,
        element: i.findByName(t)[0]
       }
      }), this.successList = e.grep(this.successList, function(e) {
       return !(e.name in t)
      })
     }
     this.settings.showErrors ? this.settings.showErrors.call(this, this.errorMap, this.errorList) : this.defaultShowErrors()
    },
    resetForm: function() {
     e.fn.resetForm && e(this.currentForm).resetForm(), this.invalid = {}, this.submitted = {}, this.prepareForm(), this.hideErrors();
     var t = this.elements().removeData("previousValue").removeAttr("aria-invalid");
     this.resetElements(t)
    },
    resetElements: function(e) {
     var t;
     if (this.settings.unhighlight)
      for (t = 0; e[t]; t++) this.settings.unhighlight.call(this, e[t], this.settings.errorClass, ""), this.findByName(e[t].name).removeClass(this.settings.validClass);
     else e.removeClass(this.settings.errorClass).removeClass(this.settings.validClass)
    },
    numberOfInvalids: function() {
     return this.objectLength(this.invalid)
    },
    objectLength: function(e) {
     var t, i = 0;
     for (t in e) e[t] && i++;
     return i
    },
    hideErrors: function() {
     this.hideThese(this.toHide)
    },
    hideThese: function(e) {
     e.not(this.containers).text(""), this.addWrapper(e).hide()
    },
    valid: function() {
     return 0 === this.size()
    },
    size: function() {
     return this.errorList.length
    },
    focusInvalid: function() {
     if (this.settings.focusInvalid) try {
      e(this.findLastActive() || this.errorList.length && this.errorList[0].element || []).filter(":visible").focus().trigger("focusin")
     } catch (e) {}
    },
    findLastActive: function() {
     var t = this.lastActive;
     return t && 1 === e.grep(this.errorList, function(e) {
      return e.element.name === t.name
     }).length && t
    },
    elements: function() {
     var t = this,
      i = {};
     return e(this.currentForm).find("input, select, textarea, [contenteditable]").not(":submit, :reset, :image, :disabled").not(this.settings.ignore).filter(function() {
      var n = this.name || e(this).attr("name");
      return !n && t.settings.debug && window.console && console.error("%o has no name assigned", this), this.hasAttribute("contenteditable") && (this.form = e(this).closest("form")[0]), !(n in i || !t.objectLength(e(this).rules())) && (i[n] = !0, !0)
     })
    },
    clean: function(t) {
     return e(t)[0]
    },
    errors: function() {
     var t = this.settings.errorClass.split(" ").join(".");
     return e(this.settings.errorElement + "." + t, this.errorContext)
    },
    resetInternals: function() {
     this.successList = [], this.errorList = [], this.errorMap = {}, this.toShow = e([]), this.toHide = e([])
    },
    reset: function() {
     this.resetInternals(), this.currentElements = e([])
    },
    prepareForm: function() {
     this.reset(), this.toHide = this.errors().add(this.containers)
    },
    prepareElement: function(e) {
     this.reset(), this.toHide = this.errorsFor(e)
    },
    elementValue: function(t) {
     var i, n, o = e(t),
      r = t.type;
     return "radio" === r || "checkbox" === r ? this.findByName(t.name).filter(":checked").val() : "number" === r && void 0 !== t.validity ? t.validity.badInput ? "NaN" : o.val() : (i = t.hasAttribute("contenteditable") ? o.text() : o.val(), "file" === r ? "C:\\fakepath\\" === i.substr(0, 12) ? i.substr(12) : (n = i.lastIndexOf("/"), n >= 0 ? i.substr(n + 1) : (n = i.lastIndexOf("\\"), n >= 0 ? i.substr(n + 1) : i)) : "string" == typeof i ? i.replace(/\r/g, "") : i)
    },
    check: function(t) {
     t = this.validationTargetFor(this.clean(t));
     var i, n, o, r = e(t).rules(),
      s = e.map(r, function(e, t) {
       return t
      }).length,
      a = !1,
      l = this.elementValue(t);
     if ("function" == typeof r.normalizer) {
      if ("string" != typeof(l = r.normalizer.call(t, l))) throw new TypeError("The normalizer should return a string value.");
      delete r.normalizer
     }
     for (n in r) {
      o = {
       method: n,
       parameters: r[n]
      };
      try {
       if ("dependency-mismatch" === (i = e.validator.methods[n].call(this, l, t, o.parameters)) && 1 === s) {
        a = !0;
        continue
       }
       if (a = !1, "pending" === i) return void(this.toHide = this.toHide.not(this.errorsFor(t)));
       if (!i) return this.formatAndAdd(t, o), !1
      } catch (e) {
       throw this.settings.debug && window.console && console.log("Exception occurred when checking element " + t.id + ", check the '" + o.method + "' method.", e), e instanceof TypeError && (e.message += ".  Exception occurred when checking element " + t.id + ", check the '" + o.method + "' method."), e
      }
     }
     if (!a) return this.objectLength(r) && this.successList.push(t), !0
    },
    customDataMessage: function(t, i) {
     return e(t).data("msg" + i.charAt(0).toUpperCase() + i.substring(1).toLowerCase()) || e(t).data("msg")
    },
    customMessage: function(e, t) {
     var i = this.settings.messages[e];
     return i && (i.constructor === String ? i : i[t])
    },
    findDefined: function() {
     for (var e = 0; e < arguments.length; e++)
      if (void 0 !== arguments[e]) return arguments[e]
    },
    defaultMessage: function(t, i) {
     var n = this.findDefined(this.customMessage(t.name, i.method), this.customDataMessage(t, i.method), !this.settings.ignoreTitle && t.title || void 0, e.validator.messages[i.method], "<strong>Warning: No message defined for " + t.name + "</strong>"),
      o = /\$?\{(\d+)\}/g;
     return "function" == typeof n ? n = n.call(this, i.parameters, t) : o.test(n) && (n = e.validator.format(n.replace(o, "{$1}"), i.parameters)), n
    },
    formatAndAdd: function(e, t) {
     var i = this.defaultMessage(e, t);
     this.errorList.push({
      message: i,
      element: e,
      method: t.method
     }), this.errorMap[e.name] = i, this.submitted[e.name] = i
    },
    addWrapper: function(e) {
     return this.settings.wrapper && (e = e.add(e.parent(this.settings.wrapper))), e
    },
    defaultShowErrors: function() {
     var e, t, i;
     for (e = 0; this.errorList[e]; e++) i = this.errorList[e], this.settings.highlight && this.settings.highlight.call(this, i.element, this.settings.errorClass, this.settings.validClass), this.showLabel(i.element, i.message);
     if (this.errorList.length && (this.toShow = this.toShow.add(this.containers)), this.settings.success)
      for (e = 0; this.successList[e]; e++) this.showLabel(this.successList[e]);
     if (this.settings.unhighlight)
      for (e = 0, t = this.validElements(); t[e]; e++) this.settings.unhighlight.call(this, t[e], this.settings.errorClass, this.settings.validClass);
     this.toHide = this.toHide.not(this.toShow), this.hideErrors(), this.addWrapper(this.toShow).show()
    },
    validElements: function() {
     return this.currentElements.not(this.invalidElements())
    },
    invalidElements: function() {
     return e(this.errorList).map(function() {
      return this.element
     })
    },
    showLabel: function(t, i) {
     var n, o, r, s, a = this.errorsFor(t),
      l = this.idOrName(t),
      c = e(t).attr("aria-describedby");
     a.length ? (a.removeClass(this.settings.validClass).addClass(this.settings.errorClass), a.html(i)) : (a = e("<" + this.settings.errorElement + ">").attr("id", l + "-error").addClass(this.settings.errorClass).html(i || ""), n = a, this.settings.wrapper && (n = a.hide().show().wrap("<" + this.settings.wrapper + "/>").parent()), this.labelContainer.length ? this.labelContainer.append(n) : this.settings.errorPlacement ? this.settings.errorPlacement(n, e(t)) : n.insertAfter(t), a.is("label") ? a.attr("for", l) : 0 === a.parents("label[for='" + this.escapeCssMeta(l) + "']").length && (r = a.attr("id"), c ? c.match(new RegExp("\\b" + this.escapeCssMeta(r) + "\\b")) || (c += " " + r) : c = r, e(t).attr("aria-describedby", c), (o = this.groups[t.name]) && (s = this, e.each(s.groups, function(t, i) {
      i === o && e("[name='" + s.escapeCssMeta(t) + "']", s.currentForm).attr("aria-describedby", a.attr("id"))
     })))), !i && this.settings.success && (a.text(""), "string" == typeof this.settings.success ? a.addClass(this.settings.success) : this.settings.success(a, t)), this.toShow = this.toShow.add(a)
    },
    errorsFor: function(t) {
     var i = this.escapeCssMeta(this.idOrName(t)),
      n = e(t).attr("aria-describedby"),
      o = "label[for='" + i + "'], label[for='" + i + "'] *";
     return n && (o = o + ", #" + this.escapeCssMeta(n).replace(/\s+/g, ", #")), this.errors().filter(o)
    },
    escapeCssMeta: function(e) {
     return e.replace(/([\\!"#$%&'()*+,.\/:;<=>?@\[\]^`{|}~])/g, "\\$1")
    },
    idOrName: function(e) {
     return this.groups[e.name] || (this.checkable(e) ? e.name : e.id || e.name)
    },
    validationTargetFor: function(t) {
     return this.checkable(t) && (t = this.findByName(t.name)), e(t).not(this.settings.ignore)[0]
    },
    checkable: function(e) {
     return /radio|checkbox/i.test(e.type)
    },
    findByName: function(t) {
     return e(this.currentForm).find("[name='" + this.escapeCssMeta(t) + "']")
    },
    getLength: function(t, i) {
     switch (i.nodeName.toLowerCase()) {
      case "select":
       return e("option:selected", i).length;
      case "input":
       if (this.checkable(i)) return this.findByName(i.name).filter(":checked").length
     }
     return t.length
    },
    depend: function(e, t) {
     return !this.dependTypes[typeof e] || this.dependTypes[typeof e](e, t)
    },
    dependTypes: {
     boolean: function(e) {
      return e
     },
     string: function(t, i) {
      return !!e(t, i.form).length
     },
     function: function(e, t) {
      return e(t)
     }
    },
    optional: function(t) {
     var i = this.elementValue(t);
     return !e.validator.methods.required.call(this, i, t) && "dependency-mismatch"
    },
    startRequest: function(t) {
     this.pending[t.name] || (this.pendingRequest++, e(t).addClass(this.settings.pendingClass), this.pending[t.name] = !0)
    },
    stopRequest: function(t, i) {
     this.pendingRequest--, this.pendingRequest < 0 && (this.pendingRequest = 0), delete this.pending[t.name], e(t).removeClass(this.settings.pendingClass), i && 0 === this.pendingRequest && this.formSubmitted && this.form() ? (e(this.currentForm).submit(), this.formSubmitted = !1) : !i && 0 === this.pendingRequest && this.formSubmitted && (e(this.currentForm).triggerHandler("invalid-form", [this]), this.formSubmitted = !1)
    },
    previousValue: function(t, i) {
     return e.data(t, "previousValue") || e.data(t, "previousValue", {
      old: null,
      valid: !0,
      message: this.defaultMessage(t, {
       method: i
      })
     })
    },
    destroy: function() {
     this.resetForm(), e(this.currentForm).off(".validate").removeData("validator").find(".validate-equalTo-blur").off(".validate-equalTo").removeClass("validate-equalTo-blur")
    }
   },
   classRuleSettings: {
    required: {
     required: !0
    },
    email: {
     email: !0
    },
    url: {
     url: !0
    },
    date: {
     date: !0
    },
    dateISO: {
     dateISO: !0
    },
    number: {
     number: !0
    },
    digits: {
     digits: !0
    },
    creditcard: {
     creditcard: !0
    }
   },
   addClassRules: function(t, i) {
    t.constructor === String ? this.classRuleSettings[t] = i : e.extend(this.classRuleSettings, t)
   },
   classRules: function(t) {
    var i = {},
     n = e(t).attr("class");
    return n && e.each(n.split(" "), function() {
     this in e.validator.classRuleSettings && e.extend(i, e.validator.classRuleSettings[this])
    }), i
   },
   normalizeAttributeRule: function(e, t, i, n) {
    /min|max|step/.test(i) && (null === t || /number|range|text/.test(t)) && (n = Number(n), isNaN(n) && (n = void 0)), n || 0 === n ? e[i] = n : t === i && "range" !== t && (e[i] = !0)
   },
   attributeRules: function(t) {
    var i, n, o = {},
     r = e(t),
     s = t.getAttribute("type");
    for (i in e.validator.methods) "required" === i ? (n = t.getAttribute(i), "" === n && (n = !0), n = !!n) : n = r.attr(i), this.normalizeAttributeRule(o, s, i, n);
    return o.maxlength && /-1|2147483647|524288/.test(o.maxlength) && delete o.maxlength, o
   },
   dataRules: function(t) {
    var i, n, o = {},
     r = e(t),
     s = t.getAttribute("type");
    for (i in e.validator.methods) n = r.data("rule" + i.charAt(0).toUpperCase() + i.substring(1).toLowerCase()), this.normalizeAttributeRule(o, s, i, n);
    return o
   },
   staticRules: function(t) {
    var i = {},
     n = e.data(t.form, "validator");
    return n.settings.rules && (i = e.validator.normalizeRule(n.settings.rules[t.name]) || {}), i
   },
   normalizeRules: function(t, i) {
    return e.each(t, function(n, o) {
     if (!1 === o) return void delete t[n];
     if (o.param || o.depends) {
      var r = !0;
      switch (typeof o.depends) {
       case "string":
        r = !!e(o.depends, i.form).length;
        break;
       case "function":
        r = o.depends.call(i, i)
      }
      r ? t[n] = void 0 === o.param || o.param : (e.data(i.form, "validator").resetElements(e(i)), delete t[n])
     }
    }), e.each(t, function(n, o) {
     t[n] = e.isFunction(o) && "normalizer" !== n ? o(i) : o
    }), e.each(["minlength", "maxlength"], function() {
     t[this] && (t[this] = Number(t[this]))
    }), e.each(["rangelength", "range"], function() {
     var i;
     t[this] && (e.isArray(t[this]) ? t[this] = [Number(t[this][0]), Number(t[this][1])] : "string" == typeof t[this] && (i = t[this].replace(/[\[\]]/g, "").split(/[\s,]+/), t[this] = [Number(i[0]), Number(i[1])]))
    }), e.validator.autoCreateRanges && (null != t.min && null != t.max && (t.range = [t.min, t.max], delete t.min, delete t.max), null != t.minlength && null != t.maxlength && (t.rangelength = [t.minlength, t.maxlength], delete t.minlength, delete t.maxlength)), t
   },
   normalizeRule: function(t) {
    if ("string" == typeof t) {
     var i = {};
     e.each(t.split(/\s/), function() {
      i[this] = !0
     }), t = i
    }
    return t
   },
   addMethod: function(t, i, n) {
    e.validator.methods[t] = i, e.validator.messages[t] = void 0 !== n ? n : e.validator.messages[t], i.length < 3 && e.validator.addClassRules(t, e.validator.normalizeRule(t))
   },
   methods: {
    required: function(t, i, n) {
     if (!this.depend(n, i)) return "dependency-mismatch";
     if ("select" === i.nodeName.toLowerCase()) {
      var o = e(i).val();
      return o && o.length > 0
     }
     return this.checkable(i) ? this.getLength(t, i) > 0 : t.length > 0
    },
    email: function(e, t) {
     return this.optional(t) || /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/.test(e)
    },
    url: function(e, t) {
     return this.optional(t) || /^(?:(?:(?:https?|ftp):)?\/\/)(?:\S+(?::\S*)?@)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})).?)(?::\d{2,5})?(?:[\/?#]\S*)?$/i.test(e)
    },
    date: function(e, t) {
     return this.optional(t) || !/Invalid|NaN/.test(new Date(e).toString())
    },
    dateISO: function(e, t) {
     return this.optional(t) || /^\d{4}[\/\-](0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])$/.test(e)
    },
    number: function(e, t) {
     return this.optional(t) || /^(?:-?\d+|-?\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$/.test(e)
    },
    digits: function(e, t) {
     return this.optional(t) || /^\d+$/.test(e)
    },
    minlength: function(t, i, n) {
     var o = e.isArray(t) ? t.length : this.getLength(t, i);
     return this.optional(i) || o >= n
    },
    maxlength: function(t, i, n) {
     var o = e.isArray(t) ? t.length : this.getLength(t, i);
     return this.optional(i) || n >= o
    },
    rangelength: function(t, i, n) {
     var o = e.isArray(t) ? t.length : this.getLength(t, i);
     return this.optional(i) || o >= n[0] && o <= n[1]
    },
    min: function(e, t, i) {
     return this.optional(t) || e >= i
    },
    max: function(e, t, i) {
     return this.optional(t) || i >= e
    },
    range: function(e, t, i) {
     return this.optional(t) || e >= i[0] && e <= i[1]
    },
    step: function(t, i, n) {
     var o = e(i).attr("type"),
      r = "Step attribute on input type " + o + " is not supported.",
      s = ["text", "number", "range"],
      a = new RegExp("\\b" + o + "\\b");
     if (o && !a.test(s.join())) throw new Error(r);
     return this.optional(i) || t % n == 0
    },
    equalTo: function(t, i, n) {
     var o = e(n);
     return this.settings.onfocusout && o.not(".validate-equalTo-blur").length && o.addClass("validate-equalTo-blur").on("blur.validate-equalTo", function() {
      e(i).valid()
     }), t === o.val()
    },
    remote: function(t, i, n, o) {
     if (this.optional(i)) return "dependency-mismatch";
     o = "string" == typeof o && o || "remote";
     var r, s, a, l = this.previousValue(i, o);
     return this.settings.messages[i.name] || (this.settings.messages[i.name] = {}), l.originalMessage = l.originalMessage || this.settings.messages[i.name][o], this.settings.messages[i.name][o] = l.message, n = "string" == typeof n && {
      url: n
     } || n, a = e.param(e.extend({
      data: t
     }, n.data)), l.old === a ? l.valid : (l.old = a, r = this, this.startRequest(i), s = {}, s[i.name] = t, e.ajax(e.extend(!0, {
      mode: "abort",
      port: "validate" + i.name,
      dataType: "json",
      data: s,
      context: r.currentForm,
      success: function(e) {
       var n, s, a, c = !0 === e || "true" === e;
       r.settings.messages[i.name][o] = l.originalMessage, c ? (a = r.formSubmitted, r.resetInternals(), r.toHide = r.errorsFor(i), r.formSubmitted = a, r.successList.push(i), r.invalid[i.name] = !1, r.showErrors()) : (n = {}, s = e || r.defaultMessage(i, {
        method: o,
        parameters: t
       }), n[i.name] = l.message = s, r.invalid[i.name] = !0, r.showErrors(n)), l.valid = c, r.stopRequest(i, c)
      }
     }, n)), "pending")
    }
   }
  });
  var t, i = {};
  e.ajaxPrefilter ? e.ajaxPrefilter(function(e, t, n) {
   var o = e.port;
   "abort" === e.mode && (i[o] && i[o].abort(), i[o] = n)
  }) : (t = e.ajax, e.ajax = function(n) {
   var o = ("mode" in n ? n : e.ajaxSettings).mode,
    r = ("port" in n ? n : e.ajaxSettings).port;
   return "abort" === o ? (i[r] && i[r].abort(), i[r] = t.apply(this, arguments), i[r]) : t.apply(this, arguments)
  })
 }),
 function(e) {
  "function" == typeof define && define.amd ? define(["jquery", "./jquery.validate.min"], e) : "object" == typeof module && module.exports ? module.exports = e(require("jquery")) : e(jQuery)
 }(function(e) {
  ! function() {
   function t(e) {
    return e.replace(/<.[^<>]*?>/g, " ").replace(/&nbsp;|&#160;/gi, " ").replace(/[.(),;:!?%#$'\"_+=\/\-“”’]*/g, "")
   }
   e.validator.addMethod("maxWords", function(e, i, n) {
    return this.optional(i) || t(e).match(/\b\w+\b/g).length <= n
   }, e.validator.format("Please enter {0} words or less.")), e.validator.addMethod("minWords", function(e, i, n) {
    return this.optional(i) || t(e).match(/\b\w+\b/g).length >= n
   }, e.validator.format("Please enter at least {0} words.")), e.validator.addMethod("rangeWords", function(e, i, n) {
    var o = t(e),
     r = /\b\w+\b/g;
    return this.optional(i) || o.match(r).length >= n[0] && o.match(r).length <= n[1]
   }, e.validator.format("Please enter between {0} and {1} words."))
  }(), e.validator.addMethod("accept", function(t, i, n) {
   var o, r, s, a = "string" == typeof n ? n.replace(/\s/g, "") : "image/*",
    l = this.optional(i);
   if (l) return l;
   if ("file" === e(i).attr("type") && (a = a.replace(/[\-\[\]\/\{\}\(\)\+\?\.\\\^\$\|]/g, "\\$&").replace(/,/g, "|").replace("/*", "/.*"), i.files && i.files.length))
    for (s = new RegExp(".?(" + a + ")$", "i"), o = 0; o < i.files.length; o++)
     if (r = i.files[o], !r.type.match(s)) return !1;
   return !0
  }, e.validator.format("Please enter a value with a valid mimetype.")), e.validator.addMethod("alphanumeric", function(e, t) {
   return this.optional(t) || /^\w+$/i.test(e)
  }, "Letters, numbers, and underscores only please"), e.validator.addMethod("bankaccountNL", function(e, t) {
   if (this.optional(t)) return !0;
   if (!/^[0-9]{9}|([0-9]{2} ){3}[0-9]{3}$/.test(e)) return !1;
   var i, n, o, r = e.replace(/ /g, ""),
    s = 0,
    a = r.length;
   for (i = 0; a > i; i++) n = a - i, o = r.substring(i, i + 1), s += n * o;
   return s % 11 == 0
  }, "Please specify a valid bank account number"), e.validator.addMethod("bankorgiroaccountNL", function(t, i) {
   return this.optional(i) || e.validator.methods.bankaccountNL.call(this, t, i) || e.validator.methods.giroaccountNL.call(this, t, i)
  }, "Please specify a valid bank or giro account number"), e.validator.addMethod("bic", function(e, t) {
   return this.optional(t) || /^([A-Z]{6}[A-Z2-9][A-NP-Z1-9])(X{3}|[A-WY-Z0-9][A-Z0-9]{2})?$/.test(e.toUpperCase())
  }, "Please specify a valid BIC code"), e.validator.addMethod("cifES", function(e) {
   "use strict";
   var t, i, n, o, r, s, a = [];
   if (e = e.toUpperCase(), !e.match("((^[A-Z]{1}[0-9]{7}[A-Z0-9]{1}$|^[T]{1}[A-Z0-9]{8}$)|^[0-9]{8}[A-Z]{1}$)")) return !1;
   for (n = 0; 9 > n; n++) a[n] = parseInt(e.charAt(n), 10);
   for (i = a[2] + a[4] + a[6], o = 1; 8 > o; o += 2) r = (2 * a[o]).toString(), s = r.charAt(1), i += parseInt(r.charAt(0), 10) + ("" === s ? 0 : parseInt(s, 10));
   return !!/^[ABCDEFGHJNPQRSUVW]{1}/.test(e) && (i += "", t = 10 - parseInt(i.charAt(i.length - 1), 10), e += t, a[8].toString() === String.fromCharCode(64 + t) || a[8].toString() === e.charAt(e.length - 1))
  }, "Please specify a valid CIF number."), e.validator.addMethod("cpfBR", function(e) {
   if (e = e.replace(/([~!@#$%^&*()_+=`{}\[\]\-|\\:;'<>,.\/? ])+/g, ""), 11 !== e.length) return !1;
   var t, i, n, o, r = 0;
   if (t = parseInt(e.substring(9, 10), 10), i = parseInt(e.substring(10, 11), 10), n = function(e, t) {
     var i = 10 * e % 11;
     return 10 !== i && 11 !== i || (i = 0), i === t
    }, "" === e || "00000000000" === e || "11111111111" === e || "22222222222" === e || "33333333333" === e || "44444444444" === e || "55555555555" === e || "66666666666" === e || "77777777777" === e || "88888888888" === e || "99999999999" === e) return !1;
   for (o = 1; 9 >= o; o++) r += parseInt(e.substring(o - 1, o), 10) * (11 - o);
   if (n(r, t)) {
    for (r = 0, o = 1; 10 >= o; o++) r += parseInt(e.substring(o - 1, o), 10) * (12 - o);
    return n(r, i)
   }
   return !1
  }, "Please specify a valid CPF number"), e.validator.addMethod("creditcard", function(e, t) {
   if (this.optional(t)) return "dependency-mismatch";
   if (/[^0-9 \-]+/.test(e)) return !1;
   var i, n, o = 0,
    r = 0,
    s = !1;
   if (e = e.replace(/\D/g, ""), e.length < 13 || e.length > 19) return !1;
   for (i = e.length - 1; i >= 0; i--) n = e.charAt(i), r = parseInt(n, 10), s && (r *= 2) > 9 && (r -= 9), o += r, s = !s;
   return o % 10 == 0
  }, "Please enter a valid credit card number."), e.validator.addMethod("creditcardtypes", function(e, t, i) {
   if (/[^0-9\-]+/.test(e)) return !1;
   e = e.replace(/\D/g, "");
   var n = 0;
   return i.mastercard && (n |= 1), i.visa && (n |= 2), i.amex && (n |= 4), i.dinersclub && (n |= 8), i.enroute && (n |= 16), i.discover && (n |= 32), i.jcb && (n |= 64), i.unknown && (n |= 128), i.all && (n = 255), 1 & n && /^(5[12345])/.test(e) ? 16 === e.length : 2 & n && /^(4)/.test(e) ? 16 === e.length : 4 & n && /^(3[47])/.test(e) ? 15 === e.length : 8 & n && /^(3(0[012345]|[68]))/.test(e) ? 14 === e.length : 16 & n && /^(2(014|149))/.test(e) ? 15 === e.length : 32 & n && /^(6011)/.test(e) ? 16 === e.length : 64 & n && /^(3)/.test(e) ? 16 === e.length : 64 & n && /^(2131|1800)/.test(e) ? 15 === e.length : !!(128 & n)
  }, "Please enter a valid credit card number."), e.validator.addMethod("currency", function(e, t, i) {
   var n, o = "string" == typeof i,
    r = o ? i : i[0],
    s = !!o || i[1];
   return r = r.replace(/,/g, ""), r = s ? r + "]" : r + "]?", n = "^[" + r + "([1-9]{1}[0-9]{0,2}(\\,[0-9]{3})*(\\.[0-9]{0,2})?|[1-9]{1}[0-9]{0,}(\\.[0-9]{0,2})?|0(\\.[0-9]{0,2})?|(\\.[0-9]{1,2})?)$", n = new RegExp(n), this.optional(t) || n.test(e)
  }, "Please specify a valid currency"), e.validator.addMethod("dateFA", function(e, t) {
   return this.optional(t) || /^[1-4]\d{3}\/((0?[1-6]\/((3[0-1])|([1-2][0-9])|(0?[1-9])))|((1[0-2]|(0?[7-9]))\/(30|([1-2][0-9])|(0?[1-9]))))$/.test(e)
  }, e.validator.messages.date), e.validator.addMethod("dateITA", function(e, t) {
   var i, n, o, r, s, a = !1;
   return /^\d{1,2}\/\d{1,2}\/\d{4}$/.test(e) ? (i = e.split("/"), n = parseInt(i[0], 10), o = parseInt(i[1], 10), r = parseInt(i[2], 10), s = new Date(Date.UTC(r, o - 1, n, 12, 0, 0, 0)), a = s.getUTCFullYear() === r && s.getUTCMonth() === o - 1 && s.getUTCDate() === n) : a = !1, this.optional(t) || a
  }, e.validator.messages.date), e.validator.addMethod("dateNL", function(e, t) {
   return this.optional(t) || /^(0?[1-9]|[12]\d|3[01])[\.\/\-](0?[1-9]|1[012])[\.\/\-]([12]\d)?(\d\d)$/.test(e)
  }, e.validator.messages.date), e.validator.addMethod("extension", function(e, t, i) {
   return i = "string" == typeof i ? i.replace(/,/g, "|") : "png|jpe?g|gif", this.optional(t) || e.match(new RegExp("\\.(" + i + ")$", "i"))
  }, e.validator.format("Please enter a value with a valid extension.")), e.validator.addMethod("giroaccountNL", function(e, t) {
   return this.optional(t) || /^[0-9]{1,7}$/.test(e)
  }, "Please specify a valid giro account number"), e.validator.addMethod("iban", function(e, t) {
   if (this.optional(t)) return !0;
   var i, n, o, r, s, a, l, c, d, u = e.replace(/ /g, "").toUpperCase(),
    h = "",
    p = !0,
    f = "",
    m = "";
   if (i = u.substring(0, 2), a = {
     AL: "\\d{8}[\\dA-Z]{16}",
     AD: "\\d{8}[\\dA-Z]{12}",
     AT: "\\d{16}",
     AZ: "[\\dA-Z]{4}\\d{20}",
     BE: "\\d{12}",
     BH: "[A-Z]{4}[\\dA-Z]{14}",
     BA: "\\d{16}",
     BR: "\\d{23}[A-Z][\\dA-Z]",
     BG: "[A-Z]{4}\\d{6}[\\dA-Z]{8}",
     CR: "\\d{17}",
     HR: "\\d{17}",
     CY: "\\d{8}[\\dA-Z]{16}",
     CZ: "\\d{20}",
     DK: "\\d{14}",
     DO: "[A-Z]{4}\\d{20}",
     EE: "\\d{16}",
     FO: "\\d{14}",
     FI: "\\d{14}",
     FR: "\\d{10}[\\dA-Z]{11}\\d{2}",
     GE: "[\\dA-Z]{2}\\d{16}",
     DE: "\\d{18}",
     GI: "[A-Z]{4}[\\dA-Z]{15}",
     GR: "\\d{7}[\\dA-Z]{16}",
     GL: "\\d{14}",
     GT: "[\\dA-Z]{4}[\\dA-Z]{20}",
     HU: "\\d{24}",
     IS: "\\d{22}",
     IE: "[\\dA-Z]{4}\\d{14}",
     IL: "\\d{19}",
     IT: "[A-Z]\\d{10}[\\dA-Z]{12}",
     KZ: "\\d{3}[\\dA-Z]{13}",
     KW: "[A-Z]{4}[\\dA-Z]{22}",
     LV: "[A-Z]{4}[\\dA-Z]{13}",
     LB: "\\d{4}[\\dA-Z]{20}",
     LI: "\\d{5}[\\dA-Z]{12}",
     LT: "\\d{16}",
     LU: "\\d{3}[\\dA-Z]{13}",
     MK: "\\d{3}[\\dA-Z]{10}\\d{2}",
     MT: "[A-Z]{4}\\d{5}[\\dA-Z]{18}",
     MR: "\\d{23}",
     MU: "[A-Z]{4}\\d{19}[A-Z]{3}",
     MC: "\\d{10}[\\dA-Z]{11}\\d{2}",
     MD: "[\\dA-Z]{2}\\d{18}",
     ME: "\\d{18}",
     NL: "[A-Z]{4}\\d{10}",
     NO: "\\d{11}",
     PK: "[\\dA-Z]{4}\\d{16}",
     PS: "[\\dA-Z]{4}\\d{21}",
     PL: "\\d{24}",
     PT: "\\d{21}",
     RO: "[A-Z]{4}[\\dA-Z]{16}",
     SM: "[A-Z]\\d{10}[\\dA-Z]{12}",
     SA: "\\d{2}[\\dA-Z]{18}",
     RS: "\\d{18}",
     SK: "\\d{20}",
     SI: "\\d{15}",
     ES: "\\d{20}",
     SE: "\\d{20}",
     CH: "\\d{5}[\\dA-Z]{12}",
     TN: "\\d{20}",
     TR: "\\d{5}[\\dA-Z]{17}",
     AE: "\\d{3}\\d{16}",
     GB: "[A-Z]{4}\\d{14}",
     VG: "[\\dA-Z]{4}\\d{16}"
    }, void 0 !== (s = a[i]) && (l = new RegExp("^[A-Z]{2}\\d{2}" + s + "$", ""), !l.test(u))) return !1;
   for (n = u.substring(4, u.length) + u.substring(0, 4), c = 0; c < n.length; c++) o = n.charAt(c), "0" !== o && (p = !1), p || (h += "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ".indexOf(o));
   for (d = 0; d < h.length; d++) r = h.charAt(d), m = "" + f + r, f = m % 97;
   return 1 === f
  }, "Please specify a valid IBAN"), e.validator.addMethod("integer", function(e, t) {
   return this.optional(t) || /^-?\d+$/.test(e)
  }, "A positive or negative non-decimal number please"), e.validator.addMethod("ipv4", function(e, t) {
   return this.optional(t) || /^(25[0-5]|2[0-4]\d|[01]?\d\d?)\.(25[0-5]|2[0-4]\d|[01]?\d\d?)\.(25[0-5]|2[0-4]\d|[01]?\d\d?)\.(25[0-5]|2[0-4]\d|[01]?\d\d?)$/i.test(e)
  }, "Please enter a valid IP v4 address."), e.validator.addMethod("ipv6", function(e, t) {
   return this.optional(t) || /^((([0-9A-Fa-f]{1,4}:){7}[0-9A-Fa-f]{1,4})|(([0-9A-Fa-f]{1,4}:){6}:[0-9A-Fa-f]{1,4})|(([0-9A-Fa-f]{1,4}:){5}:([0-9A-Fa-f]{1,4}:)?[0-9A-Fa-f]{1,4})|(([0-9A-Fa-f]{1,4}:){4}:([0-9A-Fa-f]{1,4}:){0,2}[0-9A-Fa-f]{1,4})|(([0-9A-Fa-f]{1,4}:){3}:([0-9A-Fa-f]{1,4}:){0,3}[0-9A-Fa-f]{1,4})|(([0-9A-Fa-f]{1,4}:){2}:([0-9A-Fa-f]{1,4}:){0,4}[0-9A-Fa-f]{1,4})|(([0-9A-Fa-f]{1,4}:){6}((\b((25[0-5])|(1\d{2})|(2[0-4]\d)|(\d{1,2}))\b)\.){3}(\b((25[0-5])|(1\d{2})|(2[0-4]\d)|(\d{1,2}))\b))|(([0-9A-Fa-f]{1,4}:){0,5}:((\b((25[0-5])|(1\d{2})|(2[0-4]\d)|(\d{1,2}))\b)\.){3}(\b((25[0-5])|(1\d{2})|(2[0-4]\d)|(\d{1,2}))\b))|(::([0-9A-Fa-f]{1,4}:){0,5}((\b((25[0-5])|(1\d{2})|(2[0-4]\d)|(\d{1,2}))\b)\.){3}(\b((25[0-5])|(1\d{2})|(2[0-4]\d)|(\d{1,2}))\b))|([0-9A-Fa-f]{1,4}::([0-9A-Fa-f]{1,4}:){0,5}[0-9A-Fa-f]{1,4})|(::([0-9A-Fa-f]{1,4}:){0,6}[0-9A-Fa-f]{1,4})|(([0-9A-Fa-f]{1,4}:){1,7}:))$/i.test(e)
  }, "Please enter a valid IP v6 address."), e.validator.addMethod("lettersonly", function(e, t) {
   return this.optional(t) || /^[a-z]+$/i.test(e)
  }, "Letters only please"), e.validator.addMethod("letterswithbasicpunc", function(e, t) {
   return this.optional(t) || /^[a-z\-.,()'"\s]+$/i.test(e)
  }, "Letters or punctuation only please"), e.validator.addMethod("mobileNL", function(e, t) {
   return this.optional(t) || /^((\+|00(\s|\s?\-\s?)?)31(\s|\s?\-\s?)?(\(0\)[\-\s]?)?|0)6((\s|\s?\-\s?)?[0-9]){8}$/.test(e)
  }, "Please specify a valid mobile number"), e.validator.addMethod("mobileUK", function(e, t) {
   return e = e.replace(/\(|\)|\s+|-/g, ""), this.optional(t) || e.length > 9 && e.match(/^(?:(?:(?:00\s?|\+)44\s?|0)7(?:[1345789]\d{2}|624)\s?\d{3}\s?\d{3})$/)
  }, "Please specify a valid mobile number"), e.validator.addMethod("nieES", function(e) {
   "use strict";
   return e = e.toUpperCase(), !!e.match("((^[A-Z]{1}[0-9]{7}[A-Z0-9]{1}$|^[T]{1}[A-Z0-9]{8}$)|^[0-9]{8}[A-Z]{1}$)") && (/^[T]{1}/.test(e) ? e[8] === /^[T]{1}[A-Z0-9]{8}$/.test(e) : !!/^[XYZ]{1}/.test(e) && e[8] === "TRWAGMYFPDXBNJZSQVHLCKE".charAt(e.replace("X", "0").replace("Y", "1").replace("Z", "2").substring(0, 8) % 23))
  }, "Please specify a valid NIE number."), e.validator.addMethod("nifES", function(e) {
   "use strict";
   return e = e.toUpperCase(), !!e.match("((^[A-Z]{1}[0-9]{7}[A-Z0-9]{1}$|^[T]{1}[A-Z0-9]{8}$)|^[0-9]{8}[A-Z]{1}$)") && (/^[0-9]{8}[A-Z]{1}$/.test(e) ? "TRWAGMYFPDXBNJZSQVHLCKE".charAt(e.substring(8, 0) % 23) === e.charAt(8) : !!/^[KLM]{1}/.test(e) && e[8] === String.fromCharCode(64))
  }, "Please specify a valid NIF number."), jQuery.validator.addMethod("notEqualTo", function(t, i, n) {
   return this.optional(i) || !e.validator.methods.equalTo.call(this, t, i, n)
  }, "Please enter a different value, values must not be the same."), e.validator.addMethod("nowhitespace", function(e, t) {
   return this.optional(t) || /^\S+$/i.test(e)
  }, "No white space please"), e.validator.addMethod("pattern", function(e, t, i) {
   return !!this.optional(t) || ("string" == typeof i && (i = new RegExp("^(?:" + i + ")$")), i.test(e))
  }, "Invalid format."), e.validator.addMethod("phoneNL", function(e, t) {
   return this.optional(t) || /^((\+|00(\s|\s?\-\s?)?)31(\s|\s?\-\s?)?(\(0\)[\-\s]?)?|0)[1-9]((\s|\s?\-\s?)?[0-9]){8}$/.test(e)
  }, "Please specify a valid phone number."), e.validator.addMethod("phoneUK", function(e, t) {
   return e = e.replace(/\(|\)|\s+|-/g, ""), this.optional(t) || e.length > 9 && e.match(/^(?:(?:(?:00\s?|\+)44\s?)|(?:\(?0))(?:\d{2}\)?\s?\d{4}\s?\d{4}|\d{3}\)?\s?\d{3}\s?\d{3,4}|\d{4}\)?\s?(?:\d{5}|\d{3}\s?\d{3})|\d{5}\)?\s?\d{4,5})$/)
  }, "Please specify a valid phone number"), e.validator.addMethod("phoneUS", function(e, t) {
   return e = e.replace(/\s+/g, ""), this.optional(t) || e.length > 9 && e.match(/^(\+?1-?)?(\([2-9]([02-9]\d|1[02-9])\)|[2-9]([02-9]\d|1[02-9]))-?[2-9]([02-9]\d|1[02-9])-?\d{4}$/)
  }, "Please specify a valid phone number"), e.validator.addMethod("phonesUK", function(e, t) {
   return e = e.replace(/\(|\)|\s+|-/g, ""), this.optional(t) || e.length > 9 && e.match(/^(?:(?:(?:00\s?|\+)44\s?|0)(?:1\d{8,9}|[23]\d{9}|7(?:[1345789]\d{8}|624\d{6})))$/)
  }, "Please specify a valid uk phone number"), e.validator.addMethod("postalCodeCA", function(e, t) {
   return this.optional(t) || /^[ABCEGHJKLMNPRSTVXY]\d[ABCEGHJKLMNPRSTVWXYZ] *\d[ABCEGHJKLMNPRSTVWXYZ]\d$/i.test(e)
  }, "Please specify a valid postal code"), e.validator.addMethod("postalcodeBR", function(e, t) {
   return this.optional(t) || /^\d{2}.\d{3}-\d{3}?$|^\d{5}-?\d{3}?$/.test(e)
  }, "Informe um CEP válido."), e.validator.addMethod("postalcodeIT", function(e, t) {
   return this.optional(t) || /^\d{5}$/.test(e)
  }, "Please specify a valid postal code"), e.validator.addMethod("postalcodeNL", function(e, t) {
   return this.optional(t) || /^[1-9][0-9]{3}\s?[a-zA-Z]{2}$/.test(e)
  }, "Please specify a valid postal code"), e.validator.addMethod("postcodeUK", function(e, t) {
   return this.optional(t) || /^((([A-PR-UWYZ][0-9])|([A-PR-UWYZ][0-9][0-9])|([A-PR-UWYZ][A-HK-Y][0-9])|([A-PR-UWYZ][A-HK-Y][0-9][0-9])|([A-PR-UWYZ][0-9][A-HJKSTUW])|([A-PR-UWYZ][A-HK-Y][0-9][ABEHMNPRVWXY]))\s?([0-9][ABD-HJLNP-UW-Z]{2})|(GIR)\s?(0AA))$/i.test(e)
  }, "Please specify a valid UK postcode"), e.validator.addMethod("require_from_group", function(t, i, n) {
   var o = e(n[1], i.form),
    r = o.eq(0),
    s = r.data("valid_req_grp") ? r.data("valid_req_grp") : e.extend({}, this),
    a = o.filter(function() {
     return s.elementValue(this)
    }).length >= n[0];
   return r.data("valid_req_grp", s), e(i).data("being_validated") || (o.data("being_validated", !0), o.each(function() {
    s.element(this)
   }), o.data("being_validated", !1)), a
  }, e.validator.format("Please fill at least {0} of these fields.")), e.validator.addMethod("skip_or_fill_minimum", function(t, i, n) {
   var o = e(n[1], i.form),
    r = o.eq(0),
    s = r.data("valid_skip") ? r.data("valid_skip") : e.extend({}, this),
    a = o.filter(function() {
     return s.elementValue(this)
    }).length,
    l = 0 === a || a >= n[0];
   return r.data("valid_skip", s), e(i).data("being_validated") || (o.data("being_validated", !0), o.each(function() {
    s.element(this)
   }), o.data("being_validated", !1)), l
  }, e.validator.format("Please either skip these fields or fill at least {0} of them.")), e.validator.addMethod("stateUS", function(e, t, i) {
   var n, o = void 0 === i,
    r = !o && void 0 !== i.caseSensitive && i.caseSensitive,
    s = !o && void 0 !== i.includeTerritories && i.includeTerritories,
    a = !o && void 0 !== i.includeMilitary && i.includeMilitary;
   return n = s || a ? s && a ? "^(A[AEKLPRSZ]|C[AOT]|D[CE]|FL|G[AU]|HI|I[ADLN]|K[SY]|LA|M[ADEINOPST]|N[CDEHJMVY]|O[HKR]|P[AR]|RI|S[CD]|T[NX]|UT|V[AIT]|W[AIVY])$" : s ? "^(A[KLRSZ]|C[AOT]|D[CE]|FL|G[AU]|HI|I[ADLN]|K[SY]|LA|M[ADEINOPST]|N[CDEHJMVY]|O[HKR]|P[AR]|RI|S[CD]|T[NX]|UT|V[AIT]|W[AIVY])$" : "^(A[AEKLPRZ]|C[AOT]|D[CE]|FL|GA|HI|I[ADLN]|K[SY]|LA|M[ADEINOST]|N[CDEHJMVY]|O[HKR]|PA|RI|S[CD]|T[NX]|UT|V[AT]|W[AIVY])$" : "^(A[KLRZ]|C[AOT]|D[CE]|FL|GA|HI|I[ADLN]|K[SY]|LA|M[ADEINOST]|N[CDEHJMVY]|O[HKR]|PA|RI|S[CD]|T[NX]|UT|V[AT]|W[AIVY])$", n = r ? new RegExp(n) : new RegExp(n, "i"), this.optional(t) || n.test(e)
  }, "Please specify a valid state"), e.validator.addMethod("strippedminlength", function(t, i, n) {
   return e(t).text().length >= n
  }, e.validator.format("Please enter at least {0} characters")), e.validator.addMethod("time", function(e, t) {
   return this.optional(t) || /^([01]\d|2[0-3]|[0-9])(:[0-5]\d){1,2}$/.test(e)
  }, "Please enter a valid time, between 00:00 and 23:59"), e.validator.addMethod("time12h", function(e, t) {
   return this.optional(t) || /^((0?[1-9]|1[012])(:[0-5]\d){1,2}(\ ?[AP]M))$/i.test(e)
  }, "Please enter a valid time in 12-hour am/pm format"), e.validator.addMethod("url2", function(e, t) {
   return this.optional(t) || /^(https?|ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)*(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(e)
  }, e.validator.messages.url), e.validator.addMethod("vinUS", function(e) {
   if (17 !== e.length) return !1;
   var t, i, n, o, r, s, a = ["A", "B", "C", "D", "E", "F", "G", "H", "J", "K", "L", "M", "N", "P", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"],
    l = [1, 2, 3, 4, 5, 6, 7, 8, 1, 2, 3, 4, 5, 7, 9, 2, 3, 4, 5, 6, 7, 8, 9],
    c = [8, 7, 6, 5, 4, 3, 2, 10, 0, 9, 8, 7, 6, 5, 4, 3, 2],
    d = 0;
   for (t = 0; 17 > t; t++) {
    if (o = c[t], n = e.slice(t, t + 1), 8 === t && (s = n), isNaN(n)) {
     for (i = 0; i < a.length; i++)
      if (n.toUpperCase() === a[i]) {
       n = l[i], n *= o, isNaN(s) && 8 === i && (s = a[i]);
       break
      }
    } else n *= o;
    d += n
   }
   return r = d % 11, 10 === r && (r = "X"), r === s
  }, "The specified vehicle identification number (VIN) is invalid."), e.validator.addMethod("zipcodeUS", function(e, t) {
   return this.optional(t) || /^\d{5}(-\d{4})?$/.test(e)
  }, "The specified US ZIP Code is invalid"), e.validator.addMethod("ziprange", function(e, t) {
   return this.optional(t) || /^90[2-5]\d\{2\}-\d{4}$/.test(e)
  }, "Your ZIP-code must be in the range 902xx-xxxx to 905xx-xxxx")
 }),
 function(e) {
  var t = !1;
  if ("function" == typeof define && define.amd && (define(e), t = !0), "object" == typeof exports && (module.exports = e(), t = !0), !t) {
   var i = window.Cookies,
    n = window.Cookies = e();
   n.noConflict = function() {
    return window.Cookies = i, n
   }
  }
 }(function() {
  function e() {
   for (var e = 0, t = {}; e < arguments.length; e++) {
    var i = arguments[e];
    for (var n in i) t[n] = i[n]
   }
   return t
  }

  function t(i) {
   function n(t, o, r) {
    var s;
    if ("undefined" != typeof document) {
     if (arguments.length > 1) {
      if (r = e({
        path: "/"
       }, n.defaults, r), "number" == typeof r.expires) {
       var a = new Date;
       a.setMilliseconds(a.getMilliseconds() + 864e5 * r.expires), r.expires = a
      }
      try {
       s = JSON.stringify(o), /^[\{\[]/.test(s) && (o = s)
      } catch (e) {}
      return o = i.write ? i.write(o, t) : encodeURIComponent(String(o)).replace(/%(23|24|26|2B|3A|3C|3E|3D|2F|3F|40|5B|5D|5E|60|7B|7D|7C)/g, decodeURIComponent), t = encodeURIComponent(String(t)), t = t.replace(/%(23|24|26|2B|5E|60|7C)/g, decodeURIComponent), t = t.replace(/[\(\)]/g, escape), document.cookie = [t, "=", o, r.expires ? "; expires=" + r.expires.toUTCString() : "", r.path ? "; path=" + r.path : "", r.domain ? "; domain=" + r.domain : "", r.secure ? "; secure" : ""].join("")
     }
     t || (s = {});
     for (var l = document.cookie ? document.cookie.split("; ") : [], c = /(%[0-9A-Z]{2})+/g, d = 0; d < l.length; d++) {
      var u = l[d].split("="),
       h = u.slice(1).join("=");
      '"' === h.charAt(0) && (h = h.slice(1, -1));
      try {
       var p = u[0].replace(c, decodeURIComponent);
       if (h = i.read ? i.read(h, p) : i(h, p) || h.replace(c, decodeURIComponent), this.json) try {
        h = JSON.parse(h)
       } catch (e) {}
       if (t === p) {
        s = h;
        break
       }
       t || (s[p] = h)
      } catch (e) {}
     }
     return s
    }
   }
   return n.set = n, n.get = function(e) {
    return n.call(n, e)
   }, n.getJSON = function() {
    return n.apply({
     json: !0
    }, [].slice.call(arguments))
   }, n.defaults = {}, n.remove = function(t, i) {
    n(t, "", e(i, {
     expires: -1
    }))
   }, n.withConverter = t, n
  }
  return t(function() {})
 }),
 function() {
  var e, t, i, n, o, r, s, a, l = [].slice,
   c = {}.hasOwnProperty,
   d = function(e, t) {
    function i() {
     this.constructor = e
    }
    for (var n in t) c.call(t, n) && (e[n] = t[n]);
    return i.prototype = t.prototype, e.prototype = new i, e.__super__ = t.prototype, e
   };
  s = function() {}, t = function() {
   function e() {}
   return e.prototype.addEventListener = e.prototype.on, e.prototype.on = function(e, t) {
    return this._callbacks = this._callbacks || {}, this._callbacks[e] || (this._callbacks[e] = []), this._callbacks[e].push(t), this
   }, e.prototype.emit = function() {
    var e, t, i, n, o, r;
    if (n = arguments[0], e = 2 <= arguments.length ? l.call(arguments, 1) : [], this._callbacks = this._callbacks || {}, i = this._callbacks[n])
     for (o = 0, r = i.length; r > o; o++) t = i[o], t.apply(this, e);
    return this
   }, e.prototype.removeListener = e.prototype.off, e.prototype.removeAllListeners = e.prototype.off, e.prototype.removeEventListener = e.prototype.off, e.prototype.off = function(e, t) {
    var i, n, o, r;
    if (!this._callbacks || 0 === arguments.length) return this._callbacks = {}, this;
    if (!(i = this._callbacks[e])) return this;
    if (1 === arguments.length) return delete this._callbacks[e], this;
    for (n = o = 0, r = i.length; r > o; n = ++o)
     if (i[n] === t) {
      i.splice(n, 1);
      break
     } return this
   }, e
  }(), e = function(e) {
   function i(e, t) {
    var o, r, s;
    if (this.element = e, this.version = i.version, this.defaultOptions.previewTemplate = this.defaultOptions.previewTemplate.replace(/\n*/g, ""), this.clickableElements = [], this.listeners = [], this.files = [], "string" == typeof this.element && (this.element = document.querySelector(this.element)), !this.element || null == this.element.nodeType) throw new Error("Invalid dropzone element.");
    if (this.element.dropzone) throw new Error("Dropzone already attached.");
    if (i.instances.push(this), this.element.dropzone = this, o = null != (s = i.optionsForElement(this.element)) ? s : {}, this.options = n({}, this.defaultOptions, o, null != t ? t : {}), this.options.forceFallback || !i.isBrowserSupported()) return this.options.fallback.call(this);
    if (null == this.options.url && (this.options.url = this.element.getAttribute("action")), !this.options.url) throw new Error("No URL provided.");
    if (this.options.acceptedFiles && this.options.acceptedMimeTypes) throw new Error("You can't provide both 'acceptedFiles' and 'acceptedMimeTypes'. 'acceptedMimeTypes' is deprecated.");
    this.options.acceptedMimeTypes && (this.options.acceptedFiles = this.options.acceptedMimeTypes, delete this.options.acceptedMimeTypes), this.options.method = this.options.method.toUpperCase(), (r = this.getExistingFallback()) && r.parentNode && r.parentNode.removeChild(r), !1 !== this.options.previewsContainer && (this.previewsContainer = this.options.previewsContainer ? i.getElement(this.options.previewsContainer, "previewsContainer") : this.element), this.options.clickable && (this.clickableElements = !0 === this.options.clickable ? [this.element] : i.getElements(this.options.clickable, "clickable")), this.init()
   }
   var n, o;
   return d(i, e), i.prototype.Emitter = t, i.prototype.events = ["drop", "dragstart", "dragend", "dragenter", "dragover", "dragleave", "addedfile", "addedfiles", "removedfile", "thumbnail", "error", "errormultiple", "processing", "processingmultiple", "uploadprogress", "totaluploadprogress", "sending", "sendingmultiple", "success", "successmultiple", "canceled", "canceledmultiple", "complete", "completemultiple", "reset", "maxfilesexceeded", "maxfilesreached", "queuecomplete"], i.prototype.defaultOptions = {
    url: null,
    method: "post",
    withCredentials: !1,
    parallelUploads: 2,
    uploadMultiple: !1,
    maxFilesize: 256,
    paramName: "file",
    createImageThumbnails: !0,
    maxThumbnailFilesize: 10,
    thumbnailWidth: 120,
    thumbnailHeight: 120,
    filesizeBase: 1e3,
    maxFiles: null,
    params: {},
    clickable: !0,
    ignoreHiddenFiles: !0,
    acceptedFiles: null,
    acceptedMimeTypes: null,
    autoProcessQueue: !0,
    autoQueue: !0,
    addRemoveLinks: !1,
    previewsContainer: null,
    hiddenInputContainer: "body",
    capture: null,
    renameFilename: null,
    dictDefaultMessage: "Drop files here to upload",
    dictFallbackMessage: "Your browser does not support drag'n'drop file uploads.",
    dictFallbackText: "Please use the fallback form below to upload your files like in the olden days.",
    dictFileTooBig: "File is too big ({{filesize}}MiB). Max filesize: {{maxFilesize}}MiB.",
    dictInvalidFileType: "You can't upload files of this type.",
    dictResponseError: "Server responded with {{statusCode}} code.",
    dictCancelUpload: "Cancel upload",
    dictCancelUploadConfirmation: "Are you sure you want to cancel this upload?",
    dictRemoveFile: "Remove file",
    dictRemoveFileConfirmation: null,
    dictMaxFilesExceeded: "You can not upload any more files.",
    accept: function(e, t) {
     return t()
    },
    init: function() {
     return s
    },
    forceFallback: !1,
    fallback: function() {
     var e, t, n, o, r, s;
     for (this.element.className = this.element.className + " dz-browser-not-supported", s = this.element.getElementsByTagName("div"), o = 0, r = s.length; r > o; o++) e = s[o], /(^| )dz-message($| )/.test(e.className) && (t = e, e.className = "dz-message");
     return t || (t = i.createElement('<div class="dz-message"><span></span></div>'), this.element.appendChild(t)), n = t.getElementsByTagName("span")[0], n && (null != n.textContent ? n.textContent = this.options.dictFallbackMessage : null != n.innerText && (n.innerText = this.options.dictFallbackMessage)), this.element.appendChild(this.getFallbackForm())
    },
    resize: function(e) {
     var t, i, n;
     return t = {
      srcX: 0,
      srcY: 0,
      srcWidth: e.width,
      srcHeight: e.height
     }, i = e.width / e.height, t.optWidth = this.options.thumbnailWidth, t.optHeight = this.options.thumbnailHeight, null == t.optWidth && null == t.optHeight ? (t.optWidth = t.srcWidth, t.optHeight = t.srcHeight) : null == t.optWidth ? t.optWidth = i * t.optHeight : null == t.optHeight && (t.optHeight = 1 / i * t.optWidth), n = t.optWidth / t.optHeight, e.height < t.optHeight || e.width < t.optWidth ? (t.trgHeight = t.srcHeight, t.trgWidth = t.srcWidth) : i > n ? (t.srcHeight = e.height, t.srcWidth = t.srcHeight * n) : (t.srcWidth = e.width, t.srcHeight = t.srcWidth / n), t.srcX = (e.width - t.srcWidth) / 2, t.srcY = (e.height - t.srcHeight) / 2, t
    },
    drop: function() {
     return this.element.classList.remove("dz-drag-hover")
    },
    dragstart: s,
    dragend: function() {
     return this.element.classList.remove("dz-drag-hover")
    },
    dragenter: function() {
     return this.element.classList.add("dz-drag-hover")
    },
    dragover: function() {
     return this.element.classList.add("dz-drag-hover")
    },
    dragleave: function() {
     return this.element.classList.remove("dz-drag-hover")
    },
    paste: s,
    reset: function() {
     return this.element.classList.remove("dz-started")
    },
    addedfile: function(e) {
     var t, n, o, r, s, a, l, c, d, u, h, p, f;
     if (this.element === this.previewsContainer && this.element.classList.add("dz-started"), this.previewsContainer) {
      for (e.previewElement = i.createElement(this.options.previewTemplate.trim()), e.previewTemplate = e.previewElement, this.previewsContainer.appendChild(e.previewElement), u = e.previewElement.querySelectorAll("[data-dz-name]"), r = 0, l = u.length; l > r; r++) t = u[r], t.textContent = this._renameFilename(e.name);
      for (h = e.previewElement.querySelectorAll("[data-dz-size]"), s = 0, c = h.length; c > s; s++) t = h[s], t.innerHTML = this.filesize(e.size);
      for (this.options.addRemoveLinks && (e._removeLink = i.createElement('<a class="dz-remove" href="javascript:undefined;" data-dz-remove>' + this.options.dictRemoveFile + "</a>"), e.previewElement.appendChild(e._removeLink)), n = function(t) {
        return function(n) {
         return n.preventDefault(), n.stopPropagation(), e.status === i.UPLOADING ? i.confirm(t.options.dictCancelUploadConfirmation, function() {
          return t.removeFile(e)
         }) : t.options.dictRemoveFileConfirmation ? i.confirm(t.options.dictRemoveFileConfirmation, function() {
          return t.removeFile(e)
         }) : t.removeFile(e)
        }
       }(this), p = e.previewElement.querySelectorAll("[data-dz-remove]"), f = [], a = 0, d = p.length; d > a; a++) o = p[a], f.push(o.addEventListener("click", n));
      return f
     }
    },
    removedfile: function(e) {
     var t;
     return e.previewElement && null != (t = e.previewElement) && t.parentNode.removeChild(e.previewElement), this._updateMaxFilesReachedClass()
    },
    thumbnail: function(e, t) {
     var i, n, o, r;
     if (e.previewElement) {
      for (e.previewElement.classList.remove("dz-file-preview"), r = e.previewElement.querySelectorAll("[data-dz-thumbnail]"), n = 0, o = r.length; o > n; n++) i = r[n], i.alt = e.name, i.src = t;
      return setTimeout(function() {
       return function() {
        return e.previewElement.classList.add("dz-image-preview")
       }
      }(), 1)
     }
    },
    error: function(e, t) {
     var i, n, o, r, s;
     if (e.previewElement) {
      for (e.previewElement.classList.add("dz-error"), "String" != typeof t && t.error && (t = t.error), r = e.previewElement.querySelectorAll("[data-dz-errormessage]"), s = [], n = 0, o = r.length; o > n; n++) i = r[n], s.push(i.textContent = t);
      return s
     }
    },
    errormultiple: s,
    processing: function(e) {
     return e.previewElement && (e.previewElement.classList.add("dz-processing"), e._removeLink) ? e._removeLink.textContent = this.options.dictCancelUpload : void 0
    },
    processingmultiple: s,
    uploadprogress: function(e, t) {
     var i, n, o, r, s;
     if (e.previewElement) {
      for (r = e.previewElement.querySelectorAll("[data-dz-uploadprogress]"), s = [], n = 0, o = r.length; o > n; n++) i = r[n], s.push("PROGRESS" === i.nodeName ? i.value = t : i.style.width = t + "%");
      return s
     }
    },
    totaluploadprogress: s,
    sending: s,
    sendingmultiple: s,
    success: function(e) {
     return e.previewElement ? e.previewElement.classList.add("dz-success") : void 0
    },
    successmultiple: s,
    canceled: function(e) {
     return this.emit("error", e, "Upload canceled.")
    },
    canceledmultiple: s,
    complete: function(e) {
     return e._removeLink && (e._removeLink.textContent = this.options.dictRemoveFile), e.previewElement ? e.previewElement.classList.add("dz-complete") : void 0
    },
    completemultiple: s,
    maxfilesexceeded: s,
    maxfilesreached: s,
    queuecomplete: s,
    addedfiles: s,
    previewTemplate: '<div class="dz-preview dz-file-preview">\n  <div class="dz-image"><img data-dz-thumbnail /></div>\n  <div class="dz-details">\n    <div class="dz-size"><span data-dz-size></span></div>\n    <div class="dz-filename"><span data-dz-name></span></div>\n  </div>\n  <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div>\n  <div class="dz-error-message"><span data-dz-errormessage></span></div>\n  <div class="dz-success-mark">\n    <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">\n      <title>Check</title>\n      <defs></defs>\n      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">\n        <path d="M23.5,31.8431458 L17.5852419,25.9283877 C16.0248253,24.3679711 13.4910294,24.366835 11.9289322,25.9289322 C10.3700136,27.4878508 10.3665912,30.0234455 11.9283877,31.5852419 L20.4147581,40.0716123 C20.5133999,40.1702541 20.6159315,40.2626649 20.7218615,40.3488435 C22.2835669,41.8725651 24.794234,41.8626202 26.3461564,40.3106978 L43.3106978,23.3461564 C44.8771021,21.7797521 44.8758057,19.2483887 43.3137085,17.6862915 C41.7547899,16.1273729 39.2176035,16.1255422 37.6538436,17.6893022 L23.5,31.8431458 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" stroke-opacity="0.198794158" stroke="#747474" fill-opacity="0.816519475" fill="#FFFFFF" sketch:type="MSShapeGroup"></path>\n      </g>\n    </svg>\n  </div>\n  <div class="dz-error-mark">\n    <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">\n      <title>Error</title>\n      <defs></defs>\n      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">\n        <g id="Check-+-Oval-2" sketch:type="MSLayerGroup" stroke="#747474" stroke-opacity="0.198794158" fill="#FFFFFF" fill-opacity="0.816519475">\n          <path d="M32.6568542,29 L38.3106978,23.3461564 C39.8771021,21.7797521 39.8758057,19.2483887 38.3137085,17.6862915 C36.7547899,16.1273729 34.2176035,16.1255422 32.6538436,17.6893022 L27,23.3431458 L21.3461564,17.6893022 C19.7823965,16.1255422 17.2452101,16.1273729 15.6862915,17.6862915 C14.1241943,19.2483887 14.1228979,21.7797521 15.6893022,23.3461564 L21.3431458,29 L15.6893022,34.6538436 C14.1228979,36.2202479 14.1241943,38.7516113 15.6862915,40.3137085 C17.2452101,41.8726271 19.7823965,41.8744578 21.3461564,40.3106978 L27,34.6568542 L32.6538436,40.3106978 C34.2176035,41.8744578 36.7547899,41.8726271 38.3137085,40.3137085 C39.8758057,38.7516113 39.8771021,36.2202479 38.3106978,34.6538436 L32.6568542,29 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" sketch:type="MSShapeGroup"></path>\n        </g>\n      </g>\n    </svg>\n  </div>\n</div>'
   }, n = function() {
    var e, t, i, n, o, r, s;
    for (n = arguments[0], i = 2 <= arguments.length ? l.call(arguments, 1) : [], r = 0, s = i.length; s > r; r++) {
     t = i[r];
     for (e in t) o = t[e], n[e] = o
    }
    return n
   }, i.prototype.getAcceptedFiles = function() {
    var e, t, i, n, o;
    for (n = this.files, o = [], t = 0, i = n.length; i > t; t++) e = n[t], e.accepted && o.push(e);
    return o
   }, i.prototype.getRejectedFiles = function() {
    var e, t, i, n, o;
    for (n = this.files, o = [], t = 0, i = n.length; i > t; t++) e = n[t], e.accepted || o.push(e);
    return o
   }, i.prototype.getFilesWithStatus = function(e) {
    var t, i, n, o, r;
    for (o = this.files, r = [], i = 0, n = o.length; n > i; i++) t = o[i], t.status === e && r.push(t);
    return r
   }, i.prototype.getQueuedFiles = function() {
    return this.getFilesWithStatus(i.QUEUED)
   }, i.prototype.getUploadingFiles = function() {
    return this.getFilesWithStatus(i.UPLOADING)
   }, i.prototype.getAddedFiles = function() {
    return this.getFilesWithStatus(i.ADDED)
   }, i.prototype.getActiveFiles = function() {
    var e, t, n, o, r;
    for (o = this.files, r = [], t = 0, n = o.length; n > t; t++) e = o[t], (e.status === i.UPLOADING || e.status === i.QUEUED) && r.push(e);
    return r
   }, i.prototype.init = function() {
    var e, t, n, o, r, s, a;
    for ("form" === this.element.tagName && this.element.setAttribute("enctype", "multipart/form-data"), this.element.classList.contains("dropzone") && !this.element.querySelector(".dz-message") && this.element.appendChild(i.createElement('<div class="dz-default dz-message"><span>' + this.options.dictDefaultMessage + "</span></div>")), this.clickableElements.length && (n = function(e) {
      return function() {
       return e.hiddenFileInput && e.hiddenFileInput.parentNode.removeChild(e.hiddenFileInput), e.hiddenFileInput = document.createElement("input"), e.hiddenFileInput.setAttribute("type", "file"), (null == e.options.maxFiles || e.options.maxFiles > 1) && e.hiddenFileInput.setAttribute("multiple", "multiple"), e.hiddenFileInput.className = "dz-hidden-input", null != e.options.acceptedFiles && e.hiddenFileInput.setAttribute("accept", e.options.acceptedFiles), null != e.options.capture && e.hiddenFileInput.setAttribute("capture", e.options.capture), e.hiddenFileInput.style.visibility = "hidden", e.hiddenFileInput.style.position = "absolute", e.hiddenFileInput.style.top = "0", e.hiddenFileInput.style.left = "0", e.hiddenFileInput.style.height = "0", e.hiddenFileInput.style.width = "0", document.querySelector(e.options.hiddenInputContainer).appendChild(e.hiddenFileInput), e.hiddenFileInput.addEventListener("change", function() {
        var t, i, o, r;
        if (i = e.hiddenFileInput.files, i.length)
         for (o = 0, r = i.length; r > o; o++) t = i[o], e.addFile(t);
        return e.emit("addedfiles", i), n()
       })
      }
     }(this))(), this.URL = null != (s = window.URL) ? s : window.webkitURL, a = this.events, o = 0, r = a.length; r > o; o++) e = a[o], this.on(e, this.options[e]);
    return this.on("uploadprogress", function(e) {
     return function() {
      return e.updateTotalUploadProgress()
     }
    }(this)), this.on("removedfile", function(e) {
     return function() {
      return e.updateTotalUploadProgress()
     }
    }(this)), this.on("canceled", function(e) {
     return function(t) {
      return e.emit("complete", t)
     }
    }(this)), this.on("complete", function(e) {
     return function() {
      return 0 === e.getAddedFiles().length && 0 === e.getUploadingFiles().length && 0 === e.getQueuedFiles().length ? setTimeout(function() {
       return e.emit("queuecomplete")
      }, 0) : void 0
     }
    }(this)), t = function(e) {
     return e.stopPropagation(), e.preventDefault ? e.preventDefault() : e.returnValue = !1
    }, this.listeners = [{
     element: this.element,
     events: {
      dragstart: function(e) {
       return function(t) {
        return e.emit("dragstart", t)
       }
      }(this),
      dragenter: function(e) {
       return function(i) {
        return t(i), e.emit("dragenter", i)
       }
      }(this),
      dragover: function(e) {
       return function(i) {
        var n;
        try {
         n = i.dataTransfer.effectAllowed
        } catch (e) {}
        return i.dataTransfer.dropEffect = "move" === n || "linkMove" === n ? "move" : "copy", t(i), e.emit("dragover", i)
       }
      }(this),
      dragleave: function(e) {
       return function(t) {
        return e.emit("dragleave", t)
       }
      }(this),
      drop: function(e) {
       return function(i) {
        return t(i), e.drop(i)
       }
      }(this),
      dragend: function(e) {
       return function(t) {
        return e.emit("dragend", t)
       }
      }(this)
     }
    }], this.clickableElements.forEach(function(e) {
     return function(t) {
      return e.listeners.push({
       element: t,
       events: {
        click: function(n) {
         return (t !== e.element || n.target === e.element || i.elementInside(n.target, e.element.querySelector(".dz-message"))) && e.hiddenFileInput.click(), !0
        }
       }
      })
     }
    }(this)), this.enable(), this.options.init.call(this)
   }, i.prototype.destroy = function() {
    var e;
    return this.disable(), this.removeAllFiles(!0), (null != (e = this.hiddenFileInput) ? e.parentNode : void 0) && (this.hiddenFileInput.parentNode.removeChild(this.hiddenFileInput), this.hiddenFileInput = null), delete this.element.dropzone, i.instances.splice(i.instances.indexOf(this), 1)
   }, i.prototype.updateTotalUploadProgress = function() {
    var e, t, i, n, o, r, s, a;
    if (n = 0, i = 0, e = this.getActiveFiles(), e.length) {
     for (a = this.getActiveFiles(), r = 0, s = a.length; s > r; r++) t = a[r], n += t.upload.bytesSent, i += t.upload.total;
     o = 100 * n / i
    } else o = 100;
    return this.emit("totaluploadprogress", o, i, n)
   }, i.prototype._getParamName = function(e) {
    return "function" == typeof this.options.paramName ? this.options.paramName(e) : this.options.paramName + (this.options.uploadMultiple ? "[" + e + "]" : "")
   }, i.prototype._renameFilename = function(e) {
    return "function" != typeof this.options.renameFilename ? e : this.options.renameFilename(e)
   }, i.prototype.getFallbackForm = function() {
    var e, t, n, o;
    return (e = this.getExistingFallback()) ? e : (n = '<div class="dz-fallback">', this.options.dictFallbackText && (n += "<p>" + this.options.dictFallbackText + "</p>"), n += '<input type="file" name="' + this._getParamName(0) + '" ' + (this.options.uploadMultiple ? 'multiple="multiple"' : void 0) + ' /><input type="submit" value="Upload!"></div>', t = i.createElement(n), "FORM" !== this.element.tagName ? (o = i.createElement('<form action="' + this.options.url + '" enctype="multipart/form-data" method="' + this.options.method + '"></form>'), o.appendChild(t)) : (this.element.setAttribute("enctype", "multipart/form-data"), this.element.setAttribute("method", this.options.method)), null != o ? o : t)
   }, i.prototype.getExistingFallback = function() {
    var e, t, i, n, o, r;
    for (t = function(e) {
      var t, i, n;
      for (i = 0, n = e.length; n > i; i++)
       if (t = e[i], /(^| )fallback($| )/.test(t.className)) return t
     }, r = ["div", "form"], n = 0, o = r.length; o > n; n++)
     if (i = r[n], e = t(this.element.getElementsByTagName(i))) return e
   }, i.prototype.setupEventListeners = function() {
    var e, t, i, n, o, r, s;
    for (r = this.listeners, s = [], n = 0, o = r.length; o > n; n++) e = r[n], s.push(function() {
     var n, o;
     n = e.events, o = [];
     for (t in n) i = n[t], o.push(e.element.addEventListener(t, i, !1));
     return o
    }());
    return s
   }, i.prototype.removeEventListeners = function() {
    var e, t, i, n, o, r, s;
    for (r = this.listeners, s = [], n = 0, o = r.length; o > n; n++) e = r[n], s.push(function() {
     var n, o;
     n = e.events, o = [];
     for (t in n) i = n[t], o.push(e.element.removeEventListener(t, i, !1));
     return o
    }());
    return s
   }, i.prototype.disable = function() {
    var e, t, i, n, o;
    for (this.clickableElements.forEach(function(e) {
      return e.classList.remove("dz-clickable")
     }), this.removeEventListeners(), n = this.files, o = [], t = 0, i = n.length; i > t; t++) e = n[t], o.push(this.cancelUpload(e));
    return o
   }, i.prototype.enable = function() {
    return this.clickableElements.forEach(function(e) {
     return e.classList.add("dz-clickable")
    }), this.setupEventListeners()
   }, i.prototype.filesize = function(e) {
    var t, i, n, o, r, s, a, l;
    if (n = 0, o = "b", e > 0) {
     for (s = ["TB", "GB", "MB", "KB", "b"], i = a = 0, l = s.length; l > a; i = ++a)
      if (r = s[i], t = Math.pow(this.options.filesizeBase, 4 - i) / 10, e >= t) {
       n = e / Math.pow(this.options.filesizeBase, 4 - i), o = r;
       break
      } n = Math.round(10 * n) / 10
    }
    return "<strong>" + n + "</strong> " + o
   }, i.prototype._updateMaxFilesReachedClass = function() {
    return null != this.options.maxFiles && this.getAcceptedFiles().length >= this.options.maxFiles ? (this.getAcceptedFiles().length === this.options.maxFiles && this.emit("maxfilesreached", this.files), this.element.classList.add("dz-max-files-reached")) : this.element.classList.remove("dz-max-files-reached")
   }, i.prototype.drop = function(e) {
    var t, i;
    e.dataTransfer && (this.emit("drop", e), t = e.dataTransfer.files, this.emit("addedfiles", t), t.length && (i = e.dataTransfer.items, i && i.length && null != i[0].webkitGetAsEntry ? this._addFilesFromItems(i) : this.handleFiles(t)))
   }, i.prototype.paste = function(e) {
    var t, i;
    if (null != (null != e && null != (i = e.clipboardData) ? i.items : void 0)) return this.emit("paste", e), t = e.clipboardData.items, t.length ? this._addFilesFromItems(t) : void 0
   }, i.prototype.handleFiles = function(e) {
    var t, i, n, o;
    for (o = [], i = 0, n = e.length; n > i; i++) t = e[i], o.push(this.addFile(t));
    return o
   }, i.prototype._addFilesFromItems = function(e) {
    var t, i, n, o, r;
    for (r = [], n = 0, o = e.length; o > n; n++) i = e[n], r.push(null != i.webkitGetAsEntry && (t = i.webkitGetAsEntry()) ? t.isFile ? this.addFile(i.getAsFile()) : t.isDirectory ? this._addFilesFromDirectory(t, t.name) : void 0 : null != i.getAsFile && (null == i.kind || "file" === i.kind) ? this.addFile(i.getAsFile()) : void 0);
    return r
   }, i.prototype._addFilesFromDirectory = function(e, t) {
    var i, n, o;
    return i = e.createReader(), n = function(e) {
     return "undefined" != typeof console && null !== console && "function" == typeof console.log ? console.log(e) : void 0
    }, (o = function(e) {
     return function() {
      return i.readEntries(function(i) {
       var n, r, s;
       if (i.length > 0) {
        for (r = 0, s = i.length; s > r; r++) n = i[r], n.isFile ? n.file(function(i) {
         return e.options.ignoreHiddenFiles && "." === i.name.substring(0, 1) ? void 0 : (i.fullPath = t + "/" + i.name, e.addFile(i))
        }) : n.isDirectory && e._addFilesFromDirectory(n, t + "/" + n.name);
        o()
       }
       return null
      }, n)
     }
    }(this))()
   }, i.prototype.accept = function(e, t) {
    return e.size > 1024 * this.options.maxFilesize * 1024 ? t(this.options.dictFileTooBig.replace("{{filesize}}", Math.round(e.size / 1024 / 10.24) / 100).replace("{{maxFilesize}}", this.options.maxFilesize)) : i.isValidFile(e, this.options.acceptedFiles) ? null != this.options.maxFiles && this.getAcceptedFiles().length >= this.options.maxFiles ? (t(this.options.dictMaxFilesExceeded.replace("{{maxFiles}}", this.options.maxFiles)), this.emit("maxfilesexceeded", e)) : this.options.accept.call(this, e, t) : t(this.options.dictInvalidFileType)
   }, i.prototype.addFile = function(e) {
    return e.upload = {
     progress: 0,
     total: e.size,
     bytesSent: 0
    }, this.files.push(e), e.status = i.ADDED, this.emit("addedfile", e), this._enqueueThumbnail(e), this.accept(e, function(t) {
     return function(i) {
      return i ? (e.accepted = !1, t._errorProcessing([e], i)) : (e.accepted = !0, t.options.autoQueue && t.enqueueFile(e)), t._updateMaxFilesReachedClass()
     }
    }(this))
   }, i.prototype.enqueueFiles = function(e) {
    var t, i, n;
    for (i = 0, n = e.length; n > i; i++) t = e[i], this.enqueueFile(t);
    return null
   }, i.prototype.enqueueFile = function(e) {
    if (e.status !== i.ADDED || !0 !== e.accepted) throw new Error("This file can't be queued because it has already been processed or was rejected.");
    return e.status = i.QUEUED, this.options.autoProcessQueue ? setTimeout(function(e) {
     return function() {
      return e.processQueue()
     }
    }(this), 0) : void 0
   }, i.prototype._thumbnailQueue = [], i.prototype._processingThumbnail = !1, i.prototype._enqueueThumbnail = function(e) {
    return this.options.createImageThumbnails && e.type.match(/image.*/) && e.size <= 1024 * this.options.maxThumbnailFilesize * 1024 ? (this._thumbnailQueue.push(e), setTimeout(function(e) {
     return function() {
      return e._processThumbnailQueue()
     }
    }(this), 0)) : void 0
   }, i.prototype._processThumbnailQueue = function() {
    return this._processingThumbnail || 0 === this._thumbnailQueue.length ? void 0 : (this._processingThumbnail = !0, this.createThumbnail(this._thumbnailQueue.shift(), function(e) {
     return function() {
      return e._processingThumbnail = !1, e._processThumbnailQueue()
     }
    }(this)))
   }, i.prototype.removeFile = function(e) {
    return e.status === i.UPLOADING && this.cancelUpload(e), this.files = a(this.files, e), this.emit("removedfile", e), 0 === this.files.length ? this.emit("reset") : void 0
   }, i.prototype.removeAllFiles = function(e) {
    var t, n, o, r;
    for (null == e && (e = !1), r = this.files.slice(), n = 0, o = r.length; o > n; n++) t = r[n], (t.status !== i.UPLOADING || e) && this.removeFile(t);
    return null
   }, i.prototype.createThumbnail = function(e, t) {
    var i;
    return i = new FileReader, i.onload = function(n) {
     return function() {
      return "image/svg+xml" === e.type ? (n.emit("thumbnail", e, i.result), void(null != t && t())) : n.createThumbnailFromUrl(e, i.result, t)
     }
    }(this), i.readAsDataURL(e)
   }, i.prototype.createThumbnailFromUrl = function(e, t, i, n) {
    var o;
    return o = document.createElement("img"), n && (o.crossOrigin = n), o.onload = function(t) {
     return function() {
      var n, s, a, l, c, d, u, h;
      return e.width = o.width, e.height = o.height, a = t.options.resize.call(t, e), null == a.trgWidth && (a.trgWidth = a.optWidth), null == a.trgHeight && (a.trgHeight = a.optHeight), n = document.createElement("canvas"), s = n.getContext("2d"), n.width = a.trgWidth, n.height = a.trgHeight, r(s, o, null != (c = a.srcX) ? c : 0, null != (d = a.srcY) ? d : 0, a.srcWidth, a.srcHeight, null != (u = a.trgX) ? u : 0, null != (h = a.trgY) ? h : 0, a.trgWidth, a.trgHeight), l = n.toDataURL("image/png"), t.emit("thumbnail", e, l), null != i ? i() : void 0
     }
    }(this), null != i && (o.onerror = i), o.src = t
   }, i.prototype.processQueue = function() {
    var e, t, i, n;
    if (t = this.options.parallelUploads, i = this.getUploadingFiles().length, e = i, !(i >= t) && (n = this.getQueuedFiles(), n.length > 0)) {
     if (this.options.uploadMultiple) return this.processFiles(n.slice(0, t - i));
     for (; t > e;) {
      if (!n.length) return;
      this.processFile(n.shift()), e++
     }
    }
   }, i.prototype.processFile = function(e) {
    return this.processFiles([e])
   }, i.prototype.processFiles = function(e) {
    var t, n, o;
    for (n = 0, o = e.length; o > n; n++) t = e[n], t.processing = !0, t.status = i.UPLOADING, this.emit("processing", t);
    return this.options.uploadMultiple && this.emit("processingmultiple", e), this.uploadFiles(e)
   }, i.prototype._getFilesWithXhr = function(e) {
    var t;
    return function() {
     var i, n, o, r;
     for (o = this.files, r = [], i = 0, n = o.length; n > i; i++) t = o[i], t.xhr === e && r.push(t);
     return r
    }.call(this)
   }, i.prototype.cancelUpload = function(e) {
    var t, n, o, r, s, a, l;
    if (e.status === i.UPLOADING) {
     for (n = this._getFilesWithXhr(e.xhr), o = 0, s = n.length; s > o; o++) t = n[o], t.status = i.CANCELED;
     for (e.xhr.abort(), r = 0, a = n.length; a > r; r++) t = n[r], this.emit("canceled", t);
     this.options.uploadMultiple && this.emit("canceledmultiple", n)
    } else((l = e.status) === i.ADDED || l === i.QUEUED) && (e.status = i.CANCELED, this.emit("canceled", e), this.options.uploadMultiple && this.emit("canceledmultiple", [e]));
    return this.options.autoProcessQueue ? this.processQueue() : void 0
   }, o = function() {
    var e, t;
    return t = arguments[0], e = 2 <= arguments.length ? l.call(arguments, 1) : [], "function" == typeof t ? t.apply(this, e) : t
   }, i.prototype.uploadFile = function(e) {
    return this.uploadFiles([e])
   }, i.prototype.uploadFiles = function(e) {
    var t, r, s, a, l, c, d, u, h, p, f, m, v, g, y, b, w, x, C, k, T, S, $, P, A, E, j, F, L, _, N, D, M, H;
    for (C = new XMLHttpRequest, k = 0, P = e.length; P > k; k++) t = e[k], t.xhr = C;
    m = o(this.options.method, e), w = o(this.options.url, e), C.open(m, w, !0), C.withCredentials = !!this.options.withCredentials, y = null, s = function(i) {
     return function() {
      var n, o, r;
      for (r = [], n = 0, o = e.length; o > n; n++) t = e[n], r.push(i._errorProcessing(e, y || i.options.dictResponseError.replace("{{statusCode}}", C.status), C));
      return r
     }
    }(this), b = function(i) {
     return function(n) {
      var o, r, s, a, l, c, d, u, h;
      if (null != n)
       for (r = 100 * n.loaded / n.total, s = 0, c = e.length; c > s; s++) t = e[s], t.upload = {
        progress: r,
        total: n.total,
        bytesSent: n.loaded
       };
      else {
       for (o = !0, r = 100, a = 0, d = e.length; d > a; a++) t = e[a], (100 !== t.upload.progress || t.upload.bytesSent !== t.upload.total) && (o = !1), t.upload.progress = r, t.upload.bytesSent = t.upload.total;
       if (o) return
      }
      for (h = [], l = 0, u = e.length; u > l; l++) t = e[l], h.push(i.emit("uploadprogress", t, r, t.upload.bytesSent));
      return h
     }
    }(this), C.onload = function(t) {
     return function(n) {
      var o;
      if (e[0].status !== i.CANCELED && 4 === C.readyState) {
       if (y = C.responseText, C.getResponseHeader("content-type") && ~C.getResponseHeader("content-type").indexOf("application/json")) try {
        y = JSON.parse(y)
       } catch (e) {
        n = e, y = "Invalid JSON response from server."
       }
       return b(), 200 <= (o = C.status) && 300 > o ? t._finished(e, y, n) : s()
      }
     }
    }(this), C.onerror = function() {
     return function() {
      return e[0].status !== i.CANCELED ? s() : void 0
     }
    }(), g = null != (L = C.upload) ? L : C, g.onprogress = b, c = {
     Accept: "application/json",
     "Cache-Control": "no-cache",
     "X-Requested-With": "XMLHttpRequest"
    }, this.options.headers && n(c, this.options.headers);
    for (a in c)(l = c[a]) && C.setRequestHeader(a, l);
    if (r = new FormData, this.options.params) {
     _ = this.options.params;
     for (f in _) x = _[f], r.append(f, x)
    }
    for (T = 0, A = e.length; A > T; T++) t = e[T], this.emit("sending", t, C, r);
    if (this.options.uploadMultiple && this.emit("sendingmultiple", e, C, r),
     "FORM" === this.element.tagName)
     for (N = this.element.querySelectorAll("input, textarea, select, button"), S = 0, E = N.length; E > S; S++)
      if (u = N[S], h = u.getAttribute("name"), p = u.getAttribute("type"), "SELECT" === u.tagName && u.hasAttribute("multiple"))
       for (D = u.options, $ = 0, j = D.length; j > $; $++) v = D[$], v.selected && r.append(h, v.value);
      else(!p || "checkbox" !== (M = p.toLowerCase()) && "radio" !== M || u.checked) && r.append(h, u.value);
    for (d = F = 0, H = e.length - 1; H >= 0 ? H >= F : F >= H; d = H >= 0 ? ++F : --F) r.append(this._getParamName(d), e[d], this._renameFilename(e[d].name));
    return this.submitRequest(C, r, e)
   }, i.prototype.submitRequest = function(e, t) {
    return e.send(t)
   }, i.prototype._finished = function(e, t, n) {
    var o, r, s;
    for (r = 0, s = e.length; s > r; r++) o = e[r], o.status = i.SUCCESS, this.emit("success", o, t, n), this.emit("complete", o);
    return this.options.uploadMultiple && (this.emit("successmultiple", e, t, n), this.emit("completemultiple", e)), this.options.autoProcessQueue ? this.processQueue() : void 0
   }, i.prototype._errorProcessing = function(e, t, n) {
    var o, r, s;
    for (r = 0, s = e.length; s > r; r++) o = e[r], o.status = i.ERROR, this.emit("error", o, t, n), this.emit("complete", o);
    return this.options.uploadMultiple && (this.emit("errormultiple", e, t, n), this.emit("completemultiple", e)), this.options.autoProcessQueue ? this.processQueue() : void 0
   }, i
  }(t), e.version = "4.3.0", e.options = {}, e.optionsForElement = function(t) {
   return t.getAttribute("id") ? e.options[i(t.getAttribute("id"))] : void 0
  }, e.instances = [], e.forElement = function(e) {
   if ("string" == typeof e && (e = document.querySelector(e)), null == (null != e ? e.dropzone : void 0)) throw new Error("No Dropzone found for given element. This is probably because you're trying to access it before Dropzone had the time to initialize. Use the `init` option to setup any additional observers on your Dropzone.");
   return e.dropzone
  }, e.autoDiscover = !0, e.discover = function() {
   var t, i, n, o, r, s;
   for (document.querySelectorAll ? n = document.querySelectorAll(".dropzone") : (n = [], t = function(e) {
     var t, i, o, r;
     for (r = [], i = 0, o = e.length; o > i; i++) t = e[i], r.push(/(^| )dropzone($| )/.test(t.className) ? n.push(t) : void 0);
     return r
    }, t(document.getElementsByTagName("div")), t(document.getElementsByTagName("form"))), s = [], o = 0, r = n.length; r > o; o++) i = n[o], s.push(!1 !== e.optionsForElement(i) ? new e(i) : void 0);
   return s
  }, e.blacklistedBrowsers = [/opera.*Macintosh.*version\/12/i], e.isBrowserSupported = function() {
   var t, i, n, o, r;
   if (t = !0, window.File && window.FileReader && window.FileList && window.Blob && window.FormData && document.querySelector)
    if ("classList" in document.createElement("a"))
     for (r = e.blacklistedBrowsers, n = 0, o = r.length; o > n; n++) i = r[n], i.test(navigator.userAgent) && (t = !1);
    else t = !1;
   else t = !1;
   return t
  }, a = function(e, t) {
   var i, n, o, r;
   for (r = [], n = 0, o = e.length; o > n; n++)(i = e[n]) !== t && r.push(i);
   return r
  }, i = function(e) {
   return e.replace(/[\-_](\w)/g, function(e) {
    return e.charAt(1).toUpperCase()
   })
  }, e.createElement = function(e) {
   var t;
   return t = document.createElement("div"), t.innerHTML = e, t.childNodes[0]
  }, e.elementInside = function(e, t) {
   if (e === t) return !0;
   for (; e = e.parentNode;)
    if (e === t) return !0;
   return !1
  }, e.getElement = function(e, t) {
   var i;
   if ("string" == typeof e ? i = document.querySelector(e) : null != e.nodeType && (i = e), null == i) throw new Error("Invalid `" + t + "` option provided. Please provide a CSS selector or a plain HTML element.");
   return i
  }, e.getElements = function(e, t) {
   var i, n, o, r, s, a, l;
   if (e instanceof Array) {
    n = [];
    try {
     for (o = 0, s = e.length; s > o; o++) i = e[o], n.push(this.getElement(i, t))
    } catch (e) {
     e,
     n = null
    }
   } else if ("string" == typeof e)
    for (n = [], l = document.querySelectorAll(e), r = 0, a = l.length; a > r; r++) i = l[r], n.push(i);
   else null != e.nodeType && (n = [e]);
   if (null == n || !n.length) throw new Error("Invalid `" + t + "` option provided. Please provide a CSS selector, a plain HTML element or a list of those.");
   return n
  }, e.confirm = function(e, t, i) {
   return window.confirm(e) ? t() : null != i ? i() : void 0
  }, e.isValidFile = function(e, t) {
   var i, n, o, r, s;
   if (!t) return !0;
   for (t = t.split(","), n = e.type, i = n.replace(/\/.*$/, ""), r = 0, s = t.length; s > r; r++)
    if (o = t[r], o = o.trim(), "." === o.charAt(0)) {
     if (-1 !== e.name.toLowerCase().indexOf(o.toLowerCase(), e.name.length - o.length)) return !0
    } else if (/\/\*$/.test(o)) {
    if (i === o.replace(/\/.*$/, "")) return !0
   } else if (n === o) return !0;
   return !1
  }, "undefined" != typeof jQuery && null !== jQuery && (jQuery.fn.dropzone = function(t) {
   return this.each(function() {
    return new e(this, t)
   })
  }), "undefined" != typeof module && null !== module ? module.exports = e : window.Dropzone = e, e.ADDED = "added", e.QUEUED = "queued", e.ACCEPTED = e.QUEUED, e.UPLOADING = "uploading", e.PROCESSING = e.UPLOADING, e.CANCELED = "canceled", e.ERROR = "error", e.SUCCESS = "success", o = function(e) {
   var t, i, n, o, r, s, a, l, c;
   for (e.naturalWidth, s = e.naturalHeight, i = document.createElement("canvas"), i.width = 1, i.height = s, n = i.getContext("2d"), n.drawImage(e, 0, 0), o = n.getImageData(0, 0, 1, s).data, c = 0, r = s, a = s; a > c;) t = o[4 * (a - 1) + 3], 0 === t ? r = a : c = a, a = r + c >> 1;
   return l = a / s, 0 === l ? 1 : l
  }, r = function(e, t, i, n, r, s, a, l, c, d) {
   var u;
   return u = o(t), e.drawImage(t, i, n, r, s, a, l, c, d / u)
  }, n = function(e, t) {
   var i, n, o, r, s, a, l, c, d;
   if (o = !1, d = !0, n = e.document, c = n.documentElement, i = n.addEventListener ? "addEventListener" : "attachEvent", l = n.addEventListener ? "removeEventListener" : "detachEvent", a = n.addEventListener ? "" : "on", r = function(i) {
     return "readystatechange" !== i.type || "complete" === n.readyState ? (("load" === i.type ? e : n)[l](a + i.type, r, !1), !o && (o = !0) ? t.call(e, i.type || i) : void 0) : void 0
    }, s = function() {
     try {
      c.doScroll("left")
     } catch (e) {
      return e, void setTimeout(s, 50)
     }
     return r("poll")
    }, "complete" !== n.readyState) {
    if (n.createEventObject && c.doScroll) {
     try {
      d = !e.frameElement
     } catch (e) {}
     d && s()
    }
    return n[i](a + "DOMContentLoaded", r, !1), n[i](a + "readystatechange", r, !1), e[i](a + "load", r, !1)
   }
  }, e._autoDiscoverFunction = function() {
   return e.autoDiscover ? e.discover() : void 0
  }, n(window, e._autoDiscoverFunction)
 }.call(this);
var Froogaloop = function() {
  function e(t) {
   return new e.fn.init(t)
  }

  function t(e, t, i) {
   if (!i.contentWindow.postMessage) return !1;
   e = JSON.stringify({
    method: e,
    value: t
   }), i.contentWindow.postMessage(e, s)
  }

  function i(e) {
   var t, i;
   try {
    t = JSON.parse(e.data), i = t.event || t.method
   } catch (e) {}
   if ("ready" != i || r || (r = !0), !/^https?:\/\/player.vimeo.com/.test(e.origin)) return !1;
   "*" === s && (s = e.origin), e = t.value;
   var n = t.data,
    a = "" === a ? null : t.player_id;
   return t = a ? o[a][i] : o[i], i = [], !!t && (void 0 !== e && i.push(e), n && i.push(n), a && i.push(a), 0 < i.length ? t.apply(null, i) : t.call())
  }

  function n(e, t, i) {
   i ? (o[i] || (o[i] = {}), o[i][e] = t) : o[e] = t
  }
  var o = {},
   r = !1,
   s = "*";
  return e.fn = e.prototype = {
   element: null,
   init: function(e) {
    return "string" == typeof e && (e = document.getElementById(e)), this.element = e, this
   },
   api: function(e, i) {
    if (!this.element || !e) return !1;
    var o = this.element,
     r = "" !== o.id ? o.id : null,
     s = i && i.constructor && i.call && i.apply ? null : i,
     a = i && i.constructor && i.call && i.apply ? i : null;
    return a && n(e, a, r), t(e, s, o), this
   },
   addEvent: function(e, i) {
    if (!this.element) return !1;
    var o = this.element,
     s = "" !== o.id ? o.id : null;
    return n(e, i, s), "ready" != e ? t("addEventListener", e, o) : "ready" == e && r && i.call(null, s), this
   },
   removeEvent: function(e) {
    if (!this.element) return !1;
    var i = this.element,
     n = "" !== i.id ? i.id : null;
    e: {
     if (n && o[n]) {
      if (!o[n][e]) {
       n = !1;
       break e
      }
      o[n][e] = null
     } else {
      if (!o[e]) {
       n = !1;
       break e
      }
      o[e] = null
     }
     n = !0
    }
    "ready" != e && n && t("removeEventListener", e, i)
   }
  }, e.fn.init.prototype = e.fn, window.addEventListener ? window.addEventListener("message", i, !1) : window.attachEvent("onmessage", i), window.Froogaloop = window.$f = e
 }(),
 enableInlineVideo = function() {
  "use strict";

  function e(e, t, i, n) {
   function o(i) {
    r = t(o, n), e(i - (s || i)), s = i
   }
   var r, s;
   return {
    start: function() {
     r || o(0)
    },
    stop: function() {
     i(r), r = null, s = 0
    }
   }
  }

  function t(t) {
   return e(t, requestAnimationFrame, cancelAnimationFrame)
  }

  function i(e, t, i) {
   function n(n) {
    i && !i(e, t) || n.stopImmediatePropagation()
   }
   return e.addEventListener(t, n), n
  }

  function n(e, t, i, n) {
   function o() {
    return i[t]
   }

   function r(e) {
    i[t] = e
   }
   n && r(e[t]), Object.defineProperty(e, t, {
    get: o,
    set: r
   })
  }

  function o(e, t, i) {
   i.addEventListener(t, function() {
    return e.dispatchEvent(new Event(t))
   })
  }

  function r(e, t) {
   Promise.resolve().then(function() {
    e.dispatchEvent(new Event(t))
   })
  }

  function s(e) {
   var t = new Audio;
   return o(e, "play", t), o(e, "playing", t), o(e, "pause", t), t.crossOrigin = e.crossOrigin, t.src = e.src || e.currentSrc || "data:", t
  }

  function a(e, t, i) {
   (v || 0) + 200 < Date.now() && (e[b] = !0, v = Date.now()), i || (e.currentTime = t), C[++k % 3] = 100 * t | 0
  }

  function l(e) {
   return e.driver.currentTime >= e.video.duration
  }

  function c(e) {
   var t = this;
   t.video.readyState >= t.video.HAVE_FUTURE_DATA ? (t.hasAudio || (t.driver.currentTime = t.video.currentTime + e * t.video.playbackRate / 1e3, t.video.loop && l(t) && (t.driver.currentTime = 0)), a(t.video, t.driver.currentTime)) : t.video.networkState === t.video.NETWORK_IDLE && 0 === t.video.buffered.length && t.video.load(), t.video.ended && (delete t.video[b], t.video.pause(!0))
  }

  function d() {
   var e = this,
    t = e[y];
   if (e.webkitDisplayingFullscreen) return void e[w]();
   "data:" !== t.driver.src && t.driver.src !== e.src && (a(e, 0, !0), t.driver.src = e.src), e.paused && (t.paused = !1, 0 === e.buffered.length && e.load(), t.driver.play(), t.updater.start(), t.hasAudio || (r(e, "play"), t.video.readyState >= t.video.HAVE_ENOUGH_DATA && r(e, "playing")))
  }

  function u(e) {
   var t = this,
    i = t[y];
   i.driver.pause(), i.updater.stop(), t.webkitDisplayingFullscreen && t[x](), i.paused && !e || (i.paused = !0, i.hasAudio || r(t, "pause"), t.ended && !t.webkitDisplayingFullscreen && (t[b] = !0, r(t, "ended")))
  }

  function h(e, i) {
   var n = {};
   e[y] = n, n.paused = !0, n.hasAudio = i, n.video = e, n.updater = t(c.bind(n)), i ? n.driver = s(e) : (e.addEventListener("canplay", function() {
    e.paused || r(e, "playing")
   }), n.driver = {
    src: e.src || e.currentSrc || "data:",
    muted: !0,
    paused: !0,
    pause: function() {
     n.driver.paused = !0
    },
    play: function() {
     n.driver.paused = !1, l(n) && a(e, 0)
    },
    get ended() {
     return l(n)
    }
   }), e.addEventListener("emptied", function() {
    var t = !n.driver.src || "data:" === n.driver.src;
    n.driver.src && n.driver.src !== e.src && (a(e, 0, !0), n.driver.src = e.src, t || !i && e.autoplay ? n.driver.play() : n.updater.stop())
   }, !1), e.addEventListener("webkitbeginfullscreen", function() {
    e.paused ? i && 0 === n.driver.buffered.length && n.driver.load() : (e.pause(), e[w]())
   }), i && (e.addEventListener("webkitendfullscreen", function() {
    n.driver.currentTime = e.currentTime
   }), e.addEventListener("seeking", function() {
    C.indexOf(100 * e.currentTime | 0) < 0 && (n.driver.currentTime = e.currentTime)
   }))
  }

  function p(e) {
   var t = e[b];
   return delete e[b], !e.webkitDisplayingFullscreen && !t
  }

  function f(e) {
   var t = e[y];
   e[w] = e.play, e[x] = e.pause, e.play = d, e.pause = u, n(e, "paused", t.driver), n(e, "muted", t.driver, !0), n(e, "playbackRate", t.driver, !0), n(e, "ended", t.driver), n(e, "loop", t.driver, !0), i(e, "seeking", function(e) {
    return !e.webkitDisplayingFullscreen
   }), i(e, "seeked", function(e) {
    return !e.webkitDisplayingFullscreen
   }), i(e, "timeupdate", p), i(e, "ended", p)
  }

  function m(e, t) {
   if (void 0 === t && (t = {}), !e[y]) {
    if (!t.everywhere) {
     if (!g) return;
     if (!(t.iPad || t.ipad ? /iPhone|iPod|iPad/ : /iPhone|iPod/).test(navigator.userAgent)) return
    }
    e.pause();
    var i = e.autoplay;
    e.autoplay = !1, h(e, !e.muted), f(e), e.classList.add("IIV"), e.muted && i && (e.play(), e.addEventListener("playing", function t() {
     e.autoplay = !0, e.removeEventListener("playing", t)
    })), /iPhone|iPod|iPad/.test(navigator.platform) || console.warn("iphone-inline-video is not guaranteed to work in emulated environments")
   }
  }
  var v, g = "object" == typeof document && "object-fit" in document.head.style && !matchMedia("(-webkit-video-playable-inline)").matches,
   y = "bfred-it:iphone-inline-video",
   b = "bfred-it:iphone-inline-video:event",
   w = "bfred-it:iphone-inline-video:nativeplay",
   x = "bfred-it:iphone-inline-video:nativepause",
   C = [],
   k = 0;
  return m
 }();
! function(e, t, i, n) {
 "use strict";
 var o = i("html"),
  r = i(e),
  s = i(t),
  a = i.fancybox = function() {
   a.open.apply(this, arguments)
  },
  l = navigator.userAgent.match(/msie/i),
  c = null,
  d = t.createTouch !== n,
  u = function(e) {
   return e && e.hasOwnProperty && e instanceof i
  },
  h = function(e) {
   return e && "string" === i.type(e)
  },
  p = function(e) {
   return h(e) && e.indexOf("%") > 0
  },
  f = function(e) {
   return e && !(e.style.overflow && "hidden" === e.style.overflow) && (e.clientWidth && e.scrollWidth > e.clientWidth || e.clientHeight && e.scrollHeight > e.clientHeight)
  },
  m = function(e, t) {
   var i = parseInt(e, 10) || 0;
   return t && p(e) && (i = a.getViewport()[t] / 100 * i), Math.ceil(i)
  },
  v = function(e, t) {
   return m(e, t) + "px"
  };
 i.extend(a, {
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
   autoCenter: !d,
   fitToView: !0,
   aspectRatio: !1,
   topRatio: .5,
   leftRatio: .5,
   scrolling: "auto",
   wrapCSS: "",
   arrows: !0,
   closeBtn: !0,
   closeClick: !1,
   nextClick: !1,
   mouseWheel: !0,
   autoPlay: !1,
   playSpeed: 3e3,
   preload: 3,
   modal: !1,
   loop: !0,
   ajax: {
    dataType: "html",
    headers: {
     "X-fancyBox": !0
    }
   },
   iframe: {
    scrolling: "auto",
    preload: !0
   },
   swf: {
    wmode: "transparent",
    allowfullscreen: "true",
    allowscriptaccess: "always"
   },
   keys: {
    next: {
     13: "left",
     34: "up",
     39: "left",
     40: "up"
    },
    prev: {
     8: "right",
     33: "down",
     37: "right",
     38: "down"
    },
    close: [27],
    play: [32],
    toggle: [70]
   },
   direction: {
    next: "left",
    prev: "right"
   },
   scrollOutside: !0,
   index: 0,
   type: null,
   href: null,
   content: null,
   title: null,
   tpl: {
    wrap: '<div class="fancybox-wrap" tabIndex="-1"><div class="fancybox-skin"><div class="fancybox-outer"><div class="fancybox-inner"></div></div></div></div>',
    image: '<img class="fancybox-image" src="{href}" alt="" />',
    iframe: '<iframe id="fancybox-frame{rnd}" name="fancybox-frame{rnd}" class="fancybox-iframe" frameborder="0" vspace="0" hspace="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen' + (l ? ' allowtransparency="true"' : "") + "></iframe>",
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
   helpers: {
    overlay: !0,
    title: !0
   },
   onCancel: i.noop,
   beforeLoad: i.noop,
   afterLoad: i.noop,
   beforeShow: i.noop,
   afterShow: i.noop,
   beforeChange: i.noop,
   beforeClose: i.noop,
   afterClose: i.noop
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
  player: {
   timer: null,
   isActive: !1
  },
  ajaxLoad: null,
  imgPreload: null,
  transitions: {},
  helpers: {},
  open: function(e, t) {
   if (e && (i.isPlainObject(t) || (t = {}), !1 !== a.close(!0))) return i.isArray(e) || (e = u(e) ? i(e).get() : [e]), i.each(e, function(o, r) {
    var s, l, c, d, p, f, m, v = {};
    "object" === i.type(r) && (r.nodeType && (r = i(r)), u(r) ? (v = {
     href: r.data("fancybox-href") || r.attr("href"),
     title: r.data("fancybox-title") || r.attr("title"),
     isDom: !0,
     element: r
    }, i.metadata && i.extend(!0, v, r.metadata())) : v = r), s = t.href || v.href || (h(r) ? r : null), l = t.title !== n ? t.title : v.title || "", c = t.content || v.content, d = c ? "html" : t.type || v.type, !d && v.isDom && ((d = r.data("fancybox-type")) || (p = r.prop("class").match(/fancybox\.(\w+)/), d = p ? p[1] : null)), h(s) && (d || (a.isImage(s) ? d = "image" : a.isSWF(s) ? d = "swf" : "#" === s.charAt(0) ? d = "inline" : h(r) && (d = "html", c = r)), "ajax" === d && (f = s.split(/\s+/, 2), s = f.shift(), m = f.shift())), c || ("inline" === d ? s ? c = i(h(s) ? s.replace(/.*(?=#[^\s]+$)/, "") : s) : v.isDom && (c = r) : "html" === d ? c = s : d || s || !v.isDom || (d = "inline", c = r)), i.extend(v, {
     href: s,
     type: d,
     content: c,
     title: l,
     selector: m
    }), e[o] = v
   }), a.opts = i.extend(!0, {}, a.defaults, t), t.keys !== n && (a.opts.keys = !!t.keys && i.extend({}, a.defaults.keys, t.keys)), a.group = e, a._start(a.opts.index)
  },
  cancel: function() {
   var e = a.coming;
   e && !1 !== a.trigger("onCancel") && (a.hideLoading(), a.ajaxLoad && a.ajaxLoad.abort(), a.ajaxLoad = null, a.imgPreload && (a.imgPreload.onload = a.imgPreload.onerror = null), e.wrap && e.wrap.stop(!0, !0).trigger("onReset").remove(), a.coming = null, a.current || a._afterZoomOut(e))
  },
  close: function(e) {
   a.cancel(), !1 !== a.trigger("beforeClose") && (a.unbindEvents(), a.isActive && (a.isOpen && !0 !== e ? (a.isOpen = a.isOpened = !1, a.isClosing = !0, i(".fancybox-item, .fancybox-nav").remove(), a.wrap.stop(!0, !0).removeClass("fancybox-opened"), a.transitions[a.current.closeMethod]()) : (i(".fancybox-wrap").stop(!0).trigger("onReset").remove(), a._afterZoomOut())))
  },
  play: function(e) {
   var t = function() {
     clearTimeout(a.player.timer)
    },
    i = function() {
     t(), a.current && a.player.isActive && (a.player.timer = setTimeout(a.next, a.current.playSpeed))
    },
    n = function() {
     t(), s.unbind(".player"), a.player.isActive = !1, a.trigger("onPlayEnd")
    };
   !0 === e || !a.player.isActive && !1 !== e ? function() {
    a.current && (a.current.loop || a.current.index < a.group.length - 1) && (a.player.isActive = !0, s.bind({
     "onCancel.player beforeClose.player": n,
     "onUpdate.player": i,
     "beforeLoad.player": t
    }), i(), a.trigger("onPlayStart"))
   }() : n()
  },
  next: function(e) {
   var t = a.current;
   t && (h(e) || (e = t.direction.next), a.jumpto(t.index + 1, e, "next"))
  },
  prev: function(e) {
   var t = a.current;
   t && (h(e) || (e = t.direction.prev), a.jumpto(t.index - 1, e, "prev"))
  },
  jumpto: function(e, t, i) {
   var o = a.current;
   o && (e = m(e), a.direction = t || o.direction[e >= o.index ? "next" : "prev"], a.router = i || "jumpto", o.loop && (e < 0 && (e = o.group.length + e % o.group.length), e %= o.group.length), o.group[e] !== n && (a.cancel(), a._start(e)))
  },
  reposition: function(e, t) {
   var n, o = a.current,
    r = o ? o.wrap : null;
   r && (n = a._getPosition(t), e && "scroll" === e.type ? (delete n.position, r.stop(!0, !0).animate(n, 200)) : (r.css(n), o.pos = i.extend({}, o.dim, n)))
  },
  update: function(e) {
   var t = e && e.type,
    i = !t || "orientationchange" === t;
   i && (clearTimeout(c), c = null), a.isOpen && !c && (c = setTimeout(function() {
    var n = a.current;
    n && !a.isClosing && (a.wrap.removeClass("fancybox-tmp"), (i || "load" === t || "resize" === t && n.autoResize) && a._setDimension(), "scroll" === t && n.canShrink || a.reposition(e), a.trigger("onUpdate"), c = null)
   }, i && !d ? 0 : 300))
  },
  toggle: function(e) {
   a.isOpen && (a.current.fitToView = "boolean" === i.type(e) ? e : !a.current.fitToView, d && (a.wrap.removeAttr("style").addClass("fancybox-tmp"), a.trigger("onUpdate")), a.update())
  },
  hideLoading: function() {
   s.unbind(".loading"), i("#fancybox-loading").remove()
  },
  showLoading: function() {
   var e, t;
   a.hideLoading(), e = i('<div id="fancybox-loading"><div></div></div>').click(a.cancel).appendTo("body"), s.bind("keydown.loading", function(e) {
    27 === (e.which || e.keyCode) && (e.preventDefault(), a.cancel())
   }), a.defaults.fixed || (t = a.getViewport(), e.css({
    position: "absolute",
    top: .5 * t.h + t.y,
    left: .5 * t.w + t.x
   }))
  },
  getViewport: function() {
   var t = a.current && a.current.locked || !1,
    i = {
     x: r.scrollLeft(),
     y: r.scrollTop()
    };
   return t ? (i.w = t[0].clientWidth, i.h = t[0].clientHeight) : (i.w = d && e.innerWidth ? e.innerWidth : r.width(), i.h = d && e.innerHeight ? e.innerHeight : r.height()), i
  },
  unbindEvents: function() {
   a.wrap && u(a.wrap) && a.wrap.unbind(".fb"), s.unbind(".fb"), r.unbind(".fb")
  },
  bindEvents: function() {
   var e, t = a.current;
   t && (r.bind("orientationchange.fb" + (d ? "" : " resize.fb") + (t.autoCenter && !t.locked ? " scroll.fb" : ""), a.update), e = t.keys, e && s.bind("keydown.fb", function(o) {
    var r = o.which || o.keyCode,
     s = o.target || o.srcElement;
    return (27 !== r || !a.coming) && void(o.ctrlKey || o.altKey || o.shiftKey || o.metaKey || s && (s.type || i(s).is("[contenteditable]")) || i.each(e, function(e, s) {
     return t.group.length > 1 && s[r] !== n ? (a[e](s[r]), o.preventDefault(), !1) : i.inArray(r, s) > -1 ? (a[e](), o.preventDefault(), !1) : void 0
    }))
   }), i.fn.mousewheel && t.mouseWheel && a.wrap.bind("mousewheel.fb", function(e, n, o, r) {
    for (var s = e.target || null, l = i(s), c = !1; l.length && !(c || l.is(".fancybox-skin") || l.is(".fancybox-wrap"));) c = f(l[0]), l = i(l).parent();
    0 === n || c || a.group.length > 1 && !t.canShrink && (r > 0 || o > 0 ? a.prev(r > 0 ? "down" : "left") : (r < 0 || o < 0) && a.next(r < 0 ? "up" : "right"), e.preventDefault())
   }))
  },
  trigger: function(e, t) {
   var n, o = t || a.coming || a.current;
   if (o) {
    if (i.isFunction(o[e]) && (n = o[e].apply(o, Array.prototype.slice.call(arguments, 1))), !1 === n) return !1;
    o.helpers && i.each(o.helpers, function(t, n) {
     n && a.helpers[t] && i.isFunction(a.helpers[t][e]) && a.helpers[t][e](i.extend(!0, {}, a.helpers[t].defaults, n), o)
    }), s.trigger(e)
   }
  },
  isImage: function(e) {
   return h(e) && e.match(/(^data:image\/.*,)|(\.(jp(e|g|eg)|gif|png|bmp|webp|svg)((\?|#).*)?$)/i)
  },
  isSWF: function(e) {
   return h(e) && e.match(/\.(swf)((\?|#).*)?$/i)
  },
  _start: function(e) {
   var t, n, o, r, s, l = {};
   if (e = m(e), !(t = a.group[e] || null)) return !1;
   if (l = i.extend(!0, {}, a.opts, t), r = l.margin, s = l.padding, "number" === i.type(r) && (l.margin = [r, r, r, r]), "number" === i.type(s) && (l.padding = [s, s, s, s]), l.modal && i.extend(!0, l, {
     closeBtn: !1,
     closeClick: !1,
     nextClick: !1,
     arrows: !1,
     mouseWheel: !1,
     keys: null,
     helpers: {
      overlay: {
       closeClick: !1
      }
     }
    }), l.autoSize && (l.autoWidth = l.autoHeight = !0), "auto" === l.width && (l.autoWidth = !0), "auto" === l.height && (l.autoHeight = !0), l.group = a.group, l.index = e, a.coming = l, !1 === a.trigger("beforeLoad")) return void(a.coming = null);
   if (o = l.type, n = l.href, !o) return a.coming = null, !(!a.current || !a.router || "jumpto" === a.router) && (a.current.index = e, a[a.router](a.direction));
   if (a.isActive = !0, "image" !== o && "swf" !== o || (l.autoHeight = l.autoWidth = !1, l.scrolling = "visible"), "image" === o && (l.aspectRatio = !0), "iframe" === o && d && (l.scrolling = "scroll"), l.wrap = i(l.tpl.wrap).addClass("fancybox-" + (d ? "mobile" : "desktop") + " fancybox-type-" + o + " fancybox-tmp " + l.wrapCSS).appendTo(l.parent || "body"), i.extend(l, {
     skin: i(".fancybox-skin", l.wrap),
     outer: i(".fancybox-outer", l.wrap),
     inner: i(".fancybox-inner", l.wrap)
    }), i.each(["Top", "Right", "Bottom", "Left"], function(e, t) {
     l.skin.css("padding" + t, v(l.padding[e]))
    }), a.trigger("onReady"), "inline" === o || "html" === o) {
    if (!l.content || !l.content.length) return a._error("content")
   } else if (!n) return a._error("href");
   "image" === o ? a._loadImage() : "ajax" === o ? a._loadAjax() : "iframe" === o ? a._loadIframe() : a._afterLoad()
  },
  _error: function(e) {
   i.extend(a.coming, {
    type: "html",
    autoWidth: !0,
    autoHeight: !0,
    minWidth: 0,
    minHeight: 0,
    scrolling: "no",
    hasError: e,
    content: a.coming.tpl.error
   }), a._afterLoad()
  },
  _loadImage: function() {
   var e = a.imgPreload = new Image;
   e.onload = function() {
    this.onload = this.onerror = null, a.coming.width = this.width / a.opts.pixelRatio, a.coming.height = this.height / a.opts.pixelRatio, a._afterLoad()
   }, e.onerror = function() {
    this.onload = this.onerror = null, a._error("image")
   }, e.src = a.coming.href, !0 !== e.complete && a.showLoading()
  },
  _loadAjax: function() {
   var e = a.coming;
   a.showLoading(), a.ajaxLoad = i.ajax(i.extend({}, e.ajax, {
    url: e.href,
    error: function(e, t) {
     a.coming && "abort" !== t ? a._error("ajax", e) : a.hideLoading()
    },
    success: function(t, i) {
     "success" === i && (e.content = t, a._afterLoad())
    }
   }))
  },
  _loadIframe: function() {
   var e = a.coming,
    t = i(e.tpl.iframe.replace(/\{rnd\}/g, (new Date).getTime())).attr("scrolling", d ? "auto" : e.iframe.scrolling).attr("src", e.href);
   i(e.wrap).bind("onReset", function() {
    try {
     i(this).find("iframe").hide().attr("src", "//about:blank").end().empty()
    } catch (e) {}
   }), e.iframe.preload && (a.showLoading(), t.one("load", function() {
    i(this).data("ready", 1), d || i(this).bind("load.fb", a.update), i(this).parents(".fancybox-wrap").width("100%").removeClass("fancybox-tmp").show(), a._afterLoad()
   })), e.content = t.appendTo(e.inner), e.iframe.preload || a._afterLoad()
  },
  _preloadImages: function() {
   var e, t, i = a.group,
    n = a.current,
    o = i.length,
    r = n.preload ? Math.min(n.preload, o - 1) : 0;
   for (t = 1; t <= r; t += 1) e = i[(n.index + t) % o], "image" === e.type && e.href && ((new Image).src = e.href)
  },
  _afterLoad: function() {
   var e, t, n, o, r, s, l = a.coming,
    c = a.current,
    d = "fancybox-placeholder";
   if (a.hideLoading(), l && !1 !== a.isActive) {
    if (!1 === a.trigger("afterLoad", l, c)) return l.wrap.stop(!0).trigger("onReset").remove(), void(a.coming = null);
    switch (c && (a.trigger("beforeChange", c), c.wrap.stop(!0).removeClass("fancybox-opened").find(".fancybox-item, .fancybox-nav").remove()), a.unbindEvents(), e = l, t = l.content, n = l.type, o = l.scrolling, i.extend(a, {
     wrap: e.wrap,
     skin: e.skin,
     outer: e.outer,
     inner: e.inner,
     current: e,
     previous: c
    }), r = e.href, n) {
     case "inline":
     case "ajax":
     case "html":
      e.selector ? t = i("<div>").html(t).find(e.selector) : u(t) && (t.data(d) || t.data(d, i('<div class="' + d + '"></div>').insertAfter(t).hide()), t = t.show().detach(), e.wrap.bind("onReset", function() {
       i(this).find(t).length && t.hide().replaceAll(t.data(d)).data(d, !1)
      }));
      break;
     case "image":
      t = e.tpl.image.replace("{href}", r);
      break;
     case "swf":
      t = '<object id="fancybox-swf" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="100%" height="100%"><param name="movie" value="' + r + '"></param>', s = "", i.each(e.swf, function(e, i) {
       t += '<param name="' + e + '" value="' + i + '"></param>', s += " " + e + '="' + i + '"'
      }), t += '<embed src="' + r + '" type="application/x-shockwave-flash" width="100%" height="100%"' + s + "></embed></object>"
    }
    u(t) && t.parent().is(e.inner) || e.inner.append(t), a.trigger("beforeShow"), e.inner.css("overflow", "yes" === o ? "scroll" : "no" === o ? "hidden" : o), a._setDimension(), a.reposition(), a.isOpen = !1, a.coming = null, a.bindEvents(), a.isOpened ? c.prevMethod && a.transitions[c.prevMethod]() : i(".fancybox-wrap").not(e.wrap).stop(!0).trigger("onReset").remove(), a.transitions[a.isOpened ? e.nextMethod : e.openMethod](), a._preloadImages()
   }
  },
  _setDimension: function() {
   var e, t, n, o, r, s, l, c, d, u, h, f, g, y, b, w = a.getViewport(),
    x = 0,
    C = !1,
    k = !1,
    T = a.wrap,
    S = a.skin,
    $ = a.inner,
    P = a.current,
    A = P.width,
    E = P.height,
    j = P.minWidth,
    F = P.minHeight,
    L = P.maxWidth,
    _ = P.maxHeight,
    N = P.scrolling,
    D = P.scrollOutside ? P.scrollbarWidth : 0,
    M = P.margin,
    H = m(M[1] + M[3]),
    I = m(M[0] + M[2]);
   if (T.add(S).add($).width("auto").height("auto").removeClass("fancybox-tmp"), e = m(S.outerWidth(!0) - S.width()), t = m(S.outerHeight(!0) - S.height()), n = H + e, o = I + t, r = p(A) ? (w.w - n) * m(A) / 100 : A, s = p(E) ? (w.h - o) * m(E) / 100 : E, "iframe" === P.type) {
    if (y = P.content, P.autoHeight && 1 === y.data("ready")) try {
     y[0].contentWindow.document.location && ($.width(r).height(9999), b = y.contents().find("body"), D && b.css("overflow-x", "hidden"), s = b.outerHeight(!0))
    } catch (w) {}
   } else(P.autoWidth || P.autoHeight) && ($.addClass("fancybox-tmp"), P.autoWidth || $.width(r), P.autoHeight || $.height(s), P.autoWidth && (r = $.width()), P.autoHeight && (s = $.height()), $.removeClass("fancybox-tmp"));
   if (A = m(r), E = m(s), d = r / s, j = m(p(j) ? m(j, "w") - n : j), L = m(p(L) ? m(L, "w") - n : L), F = m(p(F) ? m(F, "h") - o : F), _ = m(p(_) ? m(_, "h") - o : _), l = L, c = _, P.fitToView && (L = Math.min(w.w - n, L), _ = Math.min(w.h - o, _)), f = w.w - H, g = w.h - I, P.aspectRatio ? (A > L && (A = L, E = m(A / d)), E > _ && (E = _, A = m(E * d)), A < j && (A = j, E = m(A / d)), E < F && (E = F, A = m(E * d))) : (A = Math.max(j, Math.min(A, L)), P.autoHeight && "iframe" !== P.type && ($.width(A), E = $.height()), E = Math.max(F, Math.min(E, _))), P.fitToView)
    if ($.width(A).height(E), T.width(A + e), u = T.width(), h = T.height(), P.aspectRatio)
     for (;
      (u > f || h > g) && A > j && E > F && !(x++ > 19);) E = Math.max(F, Math.min(_, E - 10)), A = m(E * d), A < j && (A = j, E = m(A / d)), A > L && (A = L, E = m(A / d)), $.width(A).height(E), T.width(A + e), u = T.width(), h = T.height();
    else A = Math.max(j, Math.min(A, A - (u - f))), E = Math.max(F, Math.min(E, E - (h - g)));
   D && "auto" === N && E < s && A + e + D < f && (A += D), $.width(A).height(E), T.width(A + e), u = T.width(), h = T.height(), C = (u > f || h > g) && A > j && E > F, k = P.aspectRatio ? A < l && E < c && A < r && E < s : (A < l || E < c) && (A < r || E < s), i.extend(P, {
    dim: {
     width: v(u),
     height: v(h)
    },
    origWidth: r,
    origHeight: s,
    canShrink: C,
    canExpand: k,
    wPadding: e,
    hPadding: t,
    wrapSpace: h - S.outerHeight(!0),
    skinSpace: S.height() - E
   }), !y && P.autoHeight && E > F && E < _ && !k && $.height("auto")
  },
  _getPosition: function(e) {
   var t = a.current,
    i = a.getViewport(),
    n = t.margin,
    o = a.wrap.width() + n[1] + n[3],
    r = a.wrap.height() + n[0] + n[2],
    s = {
     position: "absolute",
     top: n[0],
     left: n[3]
    };
   return t.autoCenter && t.fixed && !e && r <= i.h && o <= i.w ? s.position = "fixed" : t.locked || (s.top += i.y, s.left += i.x), s.top = v(Math.max(s.top, s.top + (i.h - r) * t.topRatio)), s.left = v(Math.max(s.left, s.left + (i.w - o) * t.leftRatio)), s
  },
  _afterZoomIn: function() {
   var e = a.current;
   e && (a.isOpen = a.isOpened = !0, a.wrap.css("overflow", "visible").addClass("fancybox-opened"), a.update(), (e.closeClick || e.nextClick && a.group.length > 1) && a.inner.css("cursor", "pointer").bind("click.fb", function(t) {
    i(t.target).is("a") || i(t.target).parent().is("a") || (t.preventDefault(), a[e.closeClick ? "close" : "next"]())
   }), e.closeBtn && i(e.tpl.closeBtn).appendTo(a.skin).bind("click.fb", function(e) {
    e.preventDefault(), a.close()
   }), e.arrows && a.group.length > 1 && ((e.loop || e.index > 0) && i(e.tpl.prev).appendTo(a.outer).bind("click.fb", a.prev), (e.loop || e.index < a.group.length - 1) && i(e.tpl.next).appendTo(a.outer).bind("click.fb", a.next)), a.trigger("afterShow"), e.loop || e.index !== e.group.length - 1 ? a.opts.autoPlay && !a.player.isActive && (a.opts.autoPlay = !1, a.play()) : a.play(!1))
  },
  _afterZoomOut: function(e) {
   e = e || a.current, i(".fancybox-wrap").trigger("onReset").remove(), i.extend(a, {
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
   }), a.trigger("afterClose", e)
  }
 }), a.transitions = {
  getOrigPosition: function() {
   var e = a.current,
    t = e.element,
    i = e.orig,
    n = {},
    o = 50,
    r = 50,
    s = e.hPadding,
    l = e.wPadding,
    c = a.getViewport();
   return !i && e.isDom && t.is(":visible") && (i = t.find("img:first"), i.length || (i = t)), u(i) ? (n = i.offset(), i.is("img") && (o = i.outerWidth(), r = i.outerHeight())) : (n.top = c.y + (c.h - r) * e.topRatio, n.left = c.x + (c.w - o) * e.leftRatio), ("fixed" === a.wrap.css("position") || e.locked) && (n.top -= c.y, n.left -= c.x), n = {
    top: v(n.top - s * e.topRatio),
    left: v(n.left - l * e.leftRatio),
    width: v(o + l),
    height: v(r + s)
   }
  },
  step: function(e, t) {
   var i, n, o, r = t.prop,
    s = a.current,
    l = s.wrapSpace,
    c = s.skinSpace;
   "width" !== r && "height" !== r || (i = t.end === t.start ? 1 : (e - t.start) / (t.end - t.start), a.isClosing && (i = 1 - i), n = "width" === r ? s.wPadding : s.hPadding, o = e - n, a.skin[r](m("width" === r ? o : o - l * i)), a.inner[r](m("width" === r ? o : o - l * i - c * i)))
  },
  zoomIn: function() {
   var e = a.current,
    t = e.pos,
    n = e.openEffect,
    o = "elastic" === n,
    r = i.extend({
     opacity: 1
    }, t);
   delete r.position, o ? (t = this.getOrigPosition(), e.openOpacity && (t.opacity = .1)) : "fade" === n && (t.opacity = .1), a.wrap.css(t).animate(r, {
    duration: "none" === n ? 0 : e.openSpeed,
    easing: e.openEasing,
    step: o ? this.step : null,
    complete: a._afterZoomIn
   })
  },
  zoomOut: function() {
   var e = a.current,
    t = e.closeEffect,
    i = "elastic" === t,
    n = {
     opacity: .1
    };
   i && (n = this.getOrigPosition(), e.closeOpacity && (n.opacity = .1)), a.wrap.animate(n, {
    duration: "none" === t ? 0 : e.closeSpeed,
    easing: e.closeEasing,
    step: i ? this.step : null,
    complete: a._afterZoomOut
   })
  },
  changeIn: function() {
   var e, t = a.current,
    i = t.nextEffect,
    n = t.pos,
    o = {
     opacity: 1
    },
    r = a.direction,
    s = 200;
   n.opacity = .1, "elastic" === i && (e = "down" === r || "up" === r ? "top" : "left", "down" === r || "right" === r ? (n[e] = v(m(n[e]) - s), o[e] = "+=200px") : (n[e] = v(m(n[e]) + s), o[e] = "-=200px")), "none" === i ? a._afterZoomIn() : a.wrap.css(n).animate(o, {
    duration: t.nextSpeed,
    easing: t.nextEasing,
    complete: a._afterZoomIn
   })
  },
  changeOut: function() {
   var e = a.previous,
    t = e.prevEffect,
    n = {
     opacity: .1
    },
    o = a.direction;
   "elastic" === t && (n["down" === o || "up" === o ? "top" : "left"] = ("up" === o || "left" === o ? "-" : "+") + "=200px"), e.wrap.animate(n, {
    duration: "none" === t ? 0 : e.prevSpeed,
    easing: e.prevEasing,
    complete: function() {
     i(this).trigger("onReset").remove()
    }
   })
  }
 }, a.helpers.overlay = {
  defaults: {
   closeClick: !0,
   speedOut: 200,
   showEarly: !0,
   css: {},
   locked: !d,
   fixed: !0
  },
  overlay: null,
  fixed: !1,
  el: i("html"),
  create: function(e) {
   e = i.extend({}, this.defaults, e), this.overlay && this.close(), this.overlay = i('<div class="fancybox-overlay"></div>').appendTo(a.coming ? a.coming.parent : e.parent), this.fixed = !1, e.fixed && a.defaults.fixed && (this.overlay.addClass("fancybox-overlay-fixed"), this.fixed = !0)
  },
  open: function(e) {
   var t = this;
   e = i.extend({}, this.defaults, e), this.overlay ? this.overlay.unbind(".overlay").width("auto").height("auto") : this.create(e), this.fixed || (r.bind("resize.overlay", i.proxy(this.update, this)), this.update()), e.closeClick && this.overlay.bind("click.overlay", function(e) {
    if (i(e.target).hasClass("fancybox-overlay")) return a.isActive ? a.close() : t.close(), !1
   }), this.overlay.css(e.css).show()
  },
  close: function() {
   var e, t;
   r.unbind("resize.overlay"), this.el.hasClass("fancybox-lock") && (i(".fancybox-margin").removeClass("fancybox-margin"), e = r.scrollTop(), t = r.scrollLeft(), this.el.removeClass("fancybox-lock"), r.scrollTop(e).scrollLeft(t)), i(".fancybox-overlay").remove().hide(), i.extend(this, {
    overlay: null,
    fixed: !1
   })
  },
  update: function() {
   var e, i = "100%";
   this.overlay.width(i).height("100%"), l ? (e = Math.max(t.documentElement.offsetWidth, t.body.offsetWidth), s.width() > e && (i = s.width())) : s.width() > r.width() && (i = s.width()), this.overlay.width(i).height(s.height())
  },
  onReady: function(e, t) {
   var n = this.overlay;
   i(".fancybox-overlay").stop(!0, !0), n || this.create(e), e.locked && this.fixed && t.fixed && (n || (this.margin = s.height() > r.height() && i("html").css("margin-right").replace("px", "")), t.locked = this.overlay.append(t.wrap), t.fixed = !1), !0 === e.showEarly && this.beforeShow.apply(this, arguments)
  },
  beforeShow: function(e, t) {
   var n, o;
   t.locked && (!1 !== this.margin && (i("*").filter(function() {
    return "fixed" === i(this).css("position") && !i(this).hasClass("fancybox-overlay") && !i(this).hasClass("fancybox-wrap")
   }).addClass("fancybox-margin"), this.el.addClass("fancybox-margin")), n = r.scrollTop(), o = r.scrollLeft(), this.el.addClass("fancybox-lock"), r.scrollTop(n).scrollLeft(o)), this.open(e)
  },
  onUpdate: function() {
   this.fixed || this.update()
  },
  afterClose: function(e) {
   this.overlay && !a.coming && this.overlay.fadeOut(e.speedOut, i.proxy(this.close, this))
  }
 }, a.helpers.title = {
  defaults: {
   type: "float",
   position: "bottom"
  },
  beforeShow: function(e) {
   var t, n, o = a.current,
    r = o.title,
    s = e.type;
   if (i.isFunction(r) && (r = r.call(o.element, o)), h(r) && "" !== i.trim(r)) {
    switch (t = i('<div class="fancybox-title fancybox-title-' + s + '-wrap">' + r + "</div>"), s) {
     case "inside":
      n = a.skin;
      break;
     case "outside":
      n = a.wrap;
      break;
     case "over":
      n = a.inner;
      break;
     default:
      n = a.skin, t.appendTo("body"), l && t.width(t.width()), t.wrapInner('<span class="child"></span>'), a.current.margin[2] += Math.abs(m(t.css("margin-bottom")))
    }
    t["top" === e.position ? "prependTo" : "appendTo"](n)
   }
  }
 }, i.fn.fancybox = function(e) {
  var t, n = i(this),
   o = this.selector || "",
   r = function(r) {
    var s, l, c = i(this).blur(),
     d = t;
    r.ctrlKey || r.altKey || r.shiftKey || r.metaKey || c.is(".fancybox-wrap") || (s = e.groupAttr || "data-fancybox-group", l = c.attr(s), l || (s = "rel", l = c.get(0)[s]), l && "" !== l && "nofollow" !== l && (c = o.length ? i(o) : n, c = c.filter("[" + s + '="' + l + '"]'), d = c.index(this)), e.index = d, !1 !== a.open(c, e) && r.preventDefault())
   };
  return e = e || {}, t = e.index || 0, o && !1 !== e.live ? s.undelegate(o, "click.fb-start").delegate(o + ":not('.fancybox-item, .fancybox-nav')", "click.fb-start", r) : n.unbind("click.fb-start").bind("click.fb-start", r), this.filter("[data-fancybox-start=1]").trigger("click"), this
 }, s.ready(function() {
  var t, r;
  i.scrollbarWidth === n && (i.scrollbarWidth = function() {
   var e = i('<div style="width:50px;height:50px;overflow:auto"><div/></div>').appendTo("body"),
    t = e.children(),
    n = t.innerWidth() - t.height(99).innerWidth();
   return e.remove(), n
  }), i.support.fixedPosition === n && (i.support.fixedPosition = function() {
   var e = i('<div style="position:fixed;top:20px;"></div>').appendTo("body"),
    t = 20 === e[0].offsetTop || 15 === e[0].offsetTop;
   return e.remove(), t
  }()), i.extend(a.defaults, {
   scrollbarWidth: i.scrollbarWidth(),
   fixed: i.support.fixedPosition,
   parent: i("body")
  }), t = i(e).width(), o.addClass("fancybox-lock-test"), r = i(e).width(), o.removeClass("fancybox-lock-test"), i("<style type='text/css'>.fancybox-margin{margin-right:" + (r - t) + "px;}</style>").appendTo("head")
 })
}(window, document, jQuery),
function(e) {
 "function" == typeof define && define.amd ? define(["jquery"], e) : "object" == typeof exports ? module.exports = e : e(jQuery)
}(function(e) {
 function t(t) {
  var s = t || window.event,
   a = l.call(arguments, 1),
   c = 0,
   u = 0,
   h = 0,
   p = 0,
   f = 0,
   m = 0;
  if (t = e.event.fix(s), t.type = "mousewheel", "detail" in s && (h = -1 * s.detail), "wheelDelta" in s && (h = s.wheelDelta), "wheelDeltaY" in s && (h = s.wheelDeltaY), "wheelDeltaX" in s && (u = -1 * s.wheelDeltaX), "axis" in s && s.axis === s.HORIZONTAL_AXIS && (u = -1 * h, h = 0), c = 0 === h ? u : h, "deltaY" in s && (h = -1 * s.deltaY, c = h), "deltaX" in s && (u = s.deltaX, 0 === h && (c = -1 * u)), 0 !== h || 0 !== u) {
   if (1 === s.deltaMode) {
    var v = e.data(this, "mousewheel-line-height");
    c *= v, h *= v, u *= v
   } else if (2 === s.deltaMode) {
    var g = e.data(this, "mousewheel-page-height");
    c *= g, h *= g, u *= g
   }
   if (p = Math.max(Math.abs(h), Math.abs(u)), (!r || r > p) && (r = p, n(s, p) && (r /= 40)), n(s, p) && (c /= 40, u /= 40, h /= 40), c = Math[c >= 1 ? "floor" : "ceil"](c / r), u = Math[u >= 1 ? "floor" : "ceil"](u / r), h = Math[h >= 1 ? "floor" : "ceil"](h / r), d.settings.normalizeOffset && this.getBoundingClientRect) {
    var y = this.getBoundingClientRect();
    f = t.clientX - y.left, m = t.clientY - y.top
   }
   return t.deltaX = u, t.deltaY = h, t.deltaFactor = r, t.offsetX = f, t.offsetY = m, t.deltaMode = 0, a.unshift(t, c, u, h), o && clearTimeout(o), o = setTimeout(i, 200), (e.event.dispatch || e.event.handle).apply(this, a)
  }
 }

 function i() {
  r = null
 }

 function n(e, t) {
  return d.settings.adjustOldDeltas && "mousewheel" === e.type && t % 120 == 0
 }
 var o, r, s = ["wheel", "mousewheel", "DOMMouseScroll", "MozMousePixelScroll"],
  a = "onwheel" in document || document.documentMode >= 9 ? ["wheel"] : ["mousewheel", "DomMouseScroll", "MozMousePixelScroll"],
  l = Array.prototype.slice;
 if (e.event.fixHooks)
  for (var c = s.length; c;) e.event.fixHooks[s[--c]] = e.event.mouseHooks;
 var d = e.event.special.mousewheel = {
  version: "3.1.12",
  setup: function() {
   if (this.addEventListener)
    for (var i = a.length; i;) this.addEventListener(a[--i], t, !1);
   else this.onmousewheel = t;
   e.data(this, "mousewheel-line-height", d.getLineHeight(this)), e.data(this, "mousewheel-page-height", d.getPageHeight(this))
  },
  teardown: function() {
   if (this.removeEventListener)
    for (var i = a.length; i;) this.removeEventListener(a[--i], t, !1);
   else this.onmousewheel = null;
   e.removeData(this, "mousewheel-line-height"), e.removeData(this, "mousewheel-page-height")
  },
  getLineHeight: function(t) {
   var i = e(t),
    n = i["offsetParent" in e.fn ? "offsetParent" : "parent"]();
   return n.length || (n = e("body")), parseInt(n.css("fontSize"), 10) || parseInt(i.css("fontSize"), 10) || 16
  },
  getPageHeight: function(t) {
   return e(t).height()
  },
  settings: {
   adjustOldDeltas: !0,
   normalizeOffset: !0
  }
 };
 e.fn.extend({
  mousewheel: function(e) {
   return e ? this.bind("mousewheel", e) : this.trigger("mousewheel")
  },
  unmousewheel: function(e) {
   return this.unbind("mousewheel", e)
  }
 })
}),
function(e, t) {
 "function" == typeof define && define.amd ? define(["jquery"], t) : t("undefined" != typeof exports ? require("jquery") : e.jQuery)
}(this, function(e) {
 "use strict";

 function t(t) {
  if (o.webkit && !t) return {
   height: 0,
   width: 0
  };
  if (!o.data.outer) {
   var i = {
    border: "none",
    "box-sizing": "content-box",
    height: "200px",
    margin: "0",
    padding: "0",
    width: "200px"
   };
   o.data.inner = e("<div>").css(e.extend({}, i)), o.data.outer = e("<div>").css(e.extend({
    left: "-1000px",
    overflow: "scroll",
    position: "absolute",
    top: "-1000px"
   }, i)).append(o.data.inner).appendTo("body")
  }
  return o.data.outer.scrollLeft(1e3).scrollTop(1e3), {
   height: Math.ceil(o.data.outer.offset().top - o.data.inner.offset().top || 0),
   width: Math.ceil(o.data.outer.offset().left - o.data.inner.offset().left || 0)
  }
 }

 function i() {
  var e = t(!0);
  return !(e.height || e.width)
 }

 function n(e) {
  var t = e.originalEvent;
  return !(t.axis && t.axis === t.HORIZONTAL_AXIS || t.wheelDeltaX)
 }
 var o = {
  data: {
   index: 0,
   name: "scrollbar"
  },
  firefox: /firefox/i.test(navigator.userAgent),
  macosx: /mac/i.test(navigator.platform),
  msedge: /edge\/\d+/i.test(navigator.userAgent),
  msie: /(msie|trident)/i.test(navigator.userAgent),
  mobile: /android|webos|iphone|ipad|ipod|blackberry/i.test(navigator.userAgent),
  overlay: null,
  scroll: null,
  scrolls: [],
  webkit: /webkit/i.test(navigator.userAgent) && !/edge\/\d+/i.test(navigator.userAgent)
 };
 o.scrolls.add = function(e) {
  this.remove(e).push(e)
 }, o.scrolls.remove = function(t) {
  for (; e.inArray(t, this) >= 0;) this.splice(e.inArray(t, this), 1);
  return this
 };
 var r = {
   autoScrollSize: !0,
   autoUpdate: !0,
   debug: !1,
   disableBodyScroll: !1,
   duration: 200,
   ignoreMobile: !1,
   ignoreOverlay: !1,
   isRtl: !1,
   scrollStep: 30,
   showArrows: !1,
   stepScrolling: !0,
   scrollx: null,
   scrolly: null,
   onDestroy: null,
   onFallback: null,
   onInit: null,
   onScroll: null,
   onUpdate: null
  },
  s = function(n) {
   o.scroll || (o.overlay = i(), o.scroll = t(), l(), e(window).resize(function() {
    var e = !1;
    if (o.scroll && (o.scroll.height || o.scroll.width)) {
     var i = t();
     i.height === o.scroll.height && i.width === o.scroll.width || (o.scroll = i, e = !0)
    }
    l(e)
   })), this.container = n, this.namespace = ".scrollbar_" + o.data.index++, this.options = e.extend({}, r, window.jQueryScrollbarOptions || {}), this.scrollTo = null, this.scrollx = {}, this.scrolly = {}, n.data(o.data.name, this), o.scrolls.add(this)
  };
 s.prototype = {
  destroy: function() {
   if (this.wrapper) {
    this.container.removeData(o.data.name), o.scrolls.remove(this);
    var t = this.container.scrollLeft(),
     i = this.container.scrollTop();
    this.container.insertBefore(this.wrapper).css({
     height: "",
     margin: "",
     "max-height": ""
    }).removeClass("scroll-content scroll-scrollx_visible scroll-scrolly_visible").off(this.namespace).scrollLeft(t).scrollTop(i), this.scrollx.scroll.removeClass("scroll-scrollx_visible").find("div").addBack().off(this.namespace), this.scrolly.scroll.removeClass("scroll-scrolly_visible").find("div").addBack().off(this.namespace), this.wrapper.remove(), e(document).add("body").off(this.namespace), e.isFunction(this.options.onDestroy) && this.options.onDestroy.apply(this, [this.container])
   }
  },
  init: function(t) {
   var i = this,
    r = this.container,
    s = this.containerWrapper || r,
    a = this.namespace,
    l = e.extend(this.options, t || {}),
    c = {
     x: this.scrollx,
     y: this.scrolly
    },
    d = this.wrapper,
    u = {},
    h = {
     scrollLeft: r.scrollLeft(),
     scrollTop: r.scrollTop()
    };
   if (o.mobile && l.ignoreMobile || o.overlay && l.ignoreOverlay || o.macosx && !o.webkit) return e.isFunction(l.onFallback) && l.onFallback.apply(this, [r]), !1;
   if (d) u = {
    height: "auto",
    "margin-bottom": -1 * o.scroll.height + "px",
    "max-height": ""
   }, u[l.isRtl ? "margin-left" : "margin-right"] = -1 * o.scroll.width + "px", s.css(u);
   else {
    if (this.wrapper = d = e("<div>").addClass("scroll-wrapper").addClass(r.attr("class")).css("position", "absolute" === r.css("position") ? "absolute" : "relative").insertBefore(r).append(r), l.isRtl && d.addClass("scroll--rtl"), r.is("textarea") && (this.containerWrapper = s = e("<div>").insertBefore(r).append(r), d.addClass("scroll-textarea")), u = {
      height: "auto",
      "margin-bottom": -1 * o.scroll.height + "px",
      "max-height": ""
     }, u[l.isRtl ? "margin-left" : "margin-right"] = -1 * o.scroll.width + "px", s.addClass("scroll-content").css(u), r.on("scroll" + a, function(t) {
      var n = r.scrollLeft(),
       s = r.scrollTop();
      if (l.isRtl) switch (!0) {
       case o.firefox:
        n = Math.abs(n);
       case o.msedge || o.msie:
        n = r[0].scrollWidth - r[0].clientWidth - n
      }
      e.isFunction(l.onScroll) && l.onScroll.call(i, {
       maxScroll: c.y.maxScrollOffset,
       scroll: s,
       size: c.y.size,
       visible: c.y.visible
      }, {
       maxScroll: c.x.maxScrollOffset,
       scroll: n,
       size: c.x.size,
       visible: c.x.visible
      }), c.x.isVisible && c.x.scroll.bar.css("left", n * c.x.kx + "px"), c.y.isVisible && c.y.scroll.bar.css("top", s * c.y.kx + "px")
     }), d.on("scroll" + a, function() {
      d.scrollTop(0).scrollLeft(0)
     }), l.disableBodyScroll) {
     var p = function(e) {
      n(e) ? c.y.isVisible && c.y.mousewheel(e) : c.x.isVisible && c.x.mousewheel(e)
     };
     d.on("MozMousePixelScroll" + a, p), d.on("mousewheel" + a, p), o.mobile && d.on("touchstart" + a, function(t) {
      var i = t.originalEvent.touches && t.originalEvent.touches[0] || t,
       n = {
        pageX: i.pageX,
        pageY: i.pageY
       },
       o = {
        left: r.scrollLeft(),
        top: r.scrollTop()
       };
      e(document).on("touchmove" + a, function(e) {
       var t = e.originalEvent.targetTouches && e.originalEvent.targetTouches[0] || e;
       r.scrollLeft(o.left + n.pageX - t.pageX), r.scrollTop(o.top + n.pageY - t.pageY), e.preventDefault()
      }), e(document).on("touchend" + a, function() {
       e(document).off(a)
      })
     })
    }
    e.isFunction(l.onInit) && l.onInit.apply(this, [r])
   }
   e.each(c, function(t, s) {
    var d = null,
     u = 1,
     h = "x" === t ? "scrollLeft" : "scrollTop",
     p = l.scrollStep,
     f = function() {
      var e = r[h]();
      r[h](e + p), 1 == u && e + p >= m && (e = r[h]()), -1 == u && e + p <= m && (e = r[h]()), r[h]() == e && d && d()
     },
     m = 0;
    s.scroll || (s.scroll = i._getScroll(l["scroll" + t]).addClass("scroll-" + t), l.showArrows && s.scroll.addClass("scroll-element_arrows_visible"), s.mousewheel = function(e) {
     if (!s.isVisible || "x" === t && n(e)) return !0;
     if ("y" === t && !n(e)) return c.x.mousewheel(e), !0;
     var o = -1 * e.originalEvent.wheelDelta || e.originalEvent.detail,
      a = s.size - s.visible - s.offset;
     return o || ("x" === t && e.originalEvent.deltaX ? o = 40 * e.originalEvent.deltaX : "y" === t && e.originalEvent.deltaY && (o = 40 * e.originalEvent.deltaY)), (o > 0 && m < a || o < 0 && m > 0) && (m += o, m < 0 && (m = 0), m > a && (m = a), i.scrollTo = i.scrollTo || {}, i.scrollTo[h] = m, setTimeout(function() {
      i.scrollTo && (r.stop().animate(i.scrollTo, 240, "linear", function() {
       m = r[h]()
      }), i.scrollTo = null)
     }, 1)), e.preventDefault(), !1
    }, s.scroll.on("MozMousePixelScroll" + a, s.mousewheel).on("mousewheel" + a, s.mousewheel).on("mouseenter" + a, function() {
     m = r[h]()
    }), s.scroll.find(".scroll-arrow, .scroll-element_track").on("mousedown" + a, function(n) {
     if (1 != n.which) return !0;
     u = 1;
     var a = {
       eventOffset: n["x" === t ? "pageX" : "pageY"],
       maxScrollValue: s.size - s.visible - s.offset,
       scrollbarOffset: s.scroll.bar.offset()["x" === t ? "left" : "top"],
       scrollbarSize: s.scroll.bar["x" === t ? "outerWidth" : "outerHeight"]()
      },
      c = 0,
      v = 0;
     if (e(this).hasClass("scroll-arrow")) {
      if (u = e(this).hasClass("scroll-arrow_more") ? 1 : -1, p = l.scrollStep * u, m = u > 0 ? a.maxScrollValue : 0, l.isRtl) switch (!0) {
       case o.firefox:
        m = u > 0 ? 0 : -1 * a.maxScrollValue;
        break;
       case o.msie || o.msedge:
      }
     } else u = a.eventOffset > a.scrollbarOffset + a.scrollbarSize ? 1 : a.eventOffset < a.scrollbarOffset ? -1 : 0, "x" === t && l.isRtl && (o.msie || o.msedge) && (u *= -1), p = Math.round(.75 * s.visible) * u, m = a.eventOffset - a.scrollbarOffset - (l.stepScrolling ? 1 == u ? a.scrollbarSize : 0 : Math.round(a.scrollbarSize / 2)), m = r[h]() + m / s.kx;
     return i.scrollTo = i.scrollTo || {}, i.scrollTo[h] = l.stepScrolling ? r[h]() + p : m, l.stepScrolling && (d = function() {
      m = r[h](), clearInterval(v), clearTimeout(c), c = 0, v = 0
     }, c = setTimeout(function() {
      v = setInterval(f, 40)
     }, l.duration + 100)), setTimeout(function() {
      i.scrollTo && (r.animate(i.scrollTo, l.duration), i.scrollTo = null)
     }, 1), i._handleMouseDown(d, n)
    }), s.scroll.bar.on("mousedown" + a, function(n) {
     if (1 != n.which) return !0;
     var c = n["x" === t ? "pageX" : "pageY"],
      d = r[h]();
     return s.scroll.addClass("scroll-draggable"), e(document).on("mousemove" + a, function(e) {
      var i = parseInt((e["x" === t ? "pageX" : "pageY"] - c) / s.kx, 10);
      "x" === t && l.isRtl && (o.msie || o.msedge) && (i *= -1), r[h](d + i)
     }), i._handleMouseDown(function() {
      s.scroll.removeClass("scroll-draggable"), m = r[h]()
     }, n)
    }))
   }), e.each(c, function(e, t) {
    var i = "scroll-scroll" + e + "_visible",
     n = "x" == e ? c.y : c.x;
    t.scroll.removeClass(i), n.scroll.removeClass(i), s.removeClass(i)
   }), e.each(c, function(t, i) {
    e.extend(i, "x" == t ? {
     offset: parseInt(r.css("left"), 10) || 0,
     size: r.prop("scrollWidth"),
     visible: d.width()
    } : {
     offset: parseInt(r.css("top"), 10) || 0,
     size: r.prop("scrollHeight"),
     visible: d.height()
    })
   }), this._updateScroll("x", this.scrollx), this._updateScroll("y", this.scrolly), e.isFunction(l.onUpdate) && l.onUpdate.apply(this, [r]), e.each(c, function(e, t) {
    var i = "x" === e ? "left" : "top",
     n = "x" === e ? "outerWidth" : "outerHeight",
     o = "x" === e ? "width" : "height",
     s = parseInt(r.css(i), 10) || 0,
     a = t.size,
     c = t.visible + s,
     d = t.scroll.size[n]() + (parseInt(t.scroll.size.css(i), 10) || 0);
    l.autoScrollSize && (t.scrollbarSize = parseInt(d * c / a, 10), t.scroll.bar.css(o, t.scrollbarSize + "px")), t.scrollbarSize = t.scroll.bar[n](), t.kx = (d - t.scrollbarSize) / (a - c) || 1, t.maxScrollOffset = a - c
   }), r.scrollLeft(h.scrollLeft).scrollTop(h.scrollTop).trigger("scroll")
  },
  _getScroll: function(t) {
   var i = {
    advanced: ['<div class="scroll-element">', '<div class="scroll-element_corner"></div>', '<div class="scroll-arrow scroll-arrow_less"></div>', '<div class="scroll-arrow scroll-arrow_more"></div>', '<div class="scroll-element_outer">', '<div class="scroll-element_size"></div>', '<div class="scroll-element_inner-wrapper">', '<div class="scroll-element_inner scroll-element_track">', '<div class="scroll-element_inner-bottom"></div>', "</div>", "</div>", '<div class="scroll-bar">', '<div class="scroll-bar_body">', '<div class="scroll-bar_body-inner"></div>', "</div>", '<div class="scroll-bar_bottom"></div>', '<div class="scroll-bar_center"></div>', "</div>", "</div>", "</div>"].join(""),
    simple: ['<div class="scroll-element">', '<div class="scroll-element_outer">', '<div class="scroll-element_size"></div>', '<div class="scroll-element_track"></div>', '<div class="scroll-bar"></div>', "</div>", "</div>"].join("")
   };
   return i[t] && (t = i[t]), t || (t = i.simple), t = "string" == typeof t ? e(t).appendTo(this.wrapper) : e(t), e.extend(t, {
    bar: t.find(".scroll-bar"),
    size: t.find(".scroll-element_size"),
    track: t.find(".scroll-element_track")
   }), t
  },
  _handleMouseDown: function(t, i) {
   var n = this.namespace;
   return e(document).on("blur" + n, function() {
    e(document).add("body").off(n), t && t()
   }), e(document).on("dragstart" + n, function(e) {
    return e.preventDefault(), !1
   }), e(document).on("mouseup" + n, function() {
    e(document).add("body").off(n), t && t()
   }), e("body").on("selectstart" + n, function(e) {
    return e.preventDefault(), !1
   }), i && i.preventDefault(), !1
  },
  _updateScroll: function(t, i) {
   var n = this.container,
    r = this.containerWrapper || n,
    s = "scroll-scroll" + t + "_visible",
    a = "x" === t ? this.scrolly : this.scrollx,
    l = parseInt(this.container.css("x" === t ? "left" : "top"), 10) || 0,
    c = this.wrapper,
    d = i.size,
    u = i.visible + l;
   i.isVisible = d - u > 1, i.isVisible ? (i.scroll.addClass(s), a.scroll.addClass(s), r.addClass(s)) : (i.scroll.removeClass(s), a.scroll.removeClass(s), r.removeClass(s)), "y" === t && (n.is("textarea") || d < u ? r.css({
    height: u + o.scroll.height + "px",
    "max-height": "none"
   }) : r.css({
    "max-height": u + o.scroll.height + "px"
   })), i.size == n.prop("scrollWidth") && a.size == n.prop("scrollHeight") && i.visible == c.width() && a.visible == c.height() && i.offset == (parseInt(n.css("left"), 10) || 0) && a.offset == (parseInt(n.css("top"), 10) || 0) || (e.extend(this.scrollx, {
    offset: parseInt(n.css("left"), 10) || 0,
    size: n.prop("scrollWidth"),
    visible: c.width()
   }), e.extend(this.scrolly, {
    offset: parseInt(n.css("top"), 10) || 0,
    size: this.container.prop("scrollHeight"),
    visible: c.height()
   }), this._updateScroll("x" === t ? "y" : "x", a))
  }
 };
 var a = s;
 e.fn.scrollbar = function(t, i) {
  return "string" != typeof t && (i = t, t = "init"), void 0 === i && (i = []), e.isArray(i) || (i = [i]), this.not("body, .scroll-wrapper").each(function() {
   var n = e(this),
    r = n.data(o.data.name);
   (r || "init" === t) && (r || (r = new a(n)), r[t] && r[t].apply(r, i))
  }), this
 }, e.fn.scrollbar.options = r;
 var l = function() {
  var e = 0,
   t = 0;
  return function(i) {
   var n, r, s, a, c, d, u;
   for (n = 0; n < o.scrolls.length; n++) a = o.scrolls[n], r = a.container, s = a.options, c = a.wrapper, d = a.scrollx, u = a.scrolly, (i || s.autoUpdate && c && c.is(":visible") && (r.prop("scrollWidth") != d.size || r.prop("scrollHeight") != u.size || c.width() != d.visible || c.height() != u.visible)) && (a.init(), s.debug && (window.console && console.log({
    scrollHeight: r.prop("scrollHeight") + ":" + a.scrolly.size,
    scrollWidth: r.prop("scrollWidth") + ":" + a.scrollx.size,
    visibleHeight: c.height() + ":" + a.scrolly.visible,
    visibleWidth: c.width() + ":" + a.scrollx.visible
   }, !0), t++));
   clearTimeout(e), e = setTimeout(l, 300)
  }
 }();
 window.angular && function(e) {
  e.module("jQueryScrollbar", []).provider("jQueryScrollbar", function() {
   var t = r;
   return {
    setOptions: function(i) {
     e.extend(t, i)
    },
    $get: function() {
     return {
      options: e.copy(t)
     }
    }
   }
  }).directive("jqueryScrollbar", ["jQueryScrollbar", "$parse", function(e, t) {
   return {
    restrict: "AC",
    link: function(i, n, o) {
     var r = t(o.jqueryScrollbar),
      s = r(i);
     n.scrollbar(s || e.options).on("$destroy", function() {
      n.scrollbar("destroy")
     })
    }
   }
  }])
 }(window.angular)
}),
function(e) {
 "use strict";
 "function" == typeof define && define.amd ? define(["jquery"], e) : "undefined" != typeof module && module.exports ? module.exports = e(require("jquery")) : e(jQuery)
}(function(e) {
 "use strict";

 function t(t) {
  return !t.nodeName || -1 !== e.inArray(t.nodeName.toLowerCase(), ["iframe", "#document", "html", "body"])
 }

 function i(t) {
  return e.isFunction(t) || e.isPlainObject(t) ? t : {
   top: t,
   left: t
  }
 }
 var n = e.scrollTo = function(t, i, n) {
  return e(window).scrollTo(t, i, n)
 };
 return n.defaults = {
  axis: "xy",
  duration: 0,
  limit: !0
 }, e.fn.scrollTo = function(o, r, s) {
  "object" == typeof r && (s = r, r = 0), "function" == typeof s && (s = {
   onAfter: s
  }), "max" === o && (o = 9e9), s = e.extend({}, n.defaults, s), r = r || s.duration;
  var a = s.queue && 1 < s.axis.length;
  return a && (r /= 2), s.offset = i(s.offset), s.over = i(s.over), this.each(function() {
   function l(t) {
    var i = e.extend({}, s, {
     queue: !0,
     duration: r,
     complete: t && function() {
      t.call(u, p, s)
     }
    });
    h.animate(f, i)
   }
   if (null !== o) {
    var c, d = t(this),
     u = d ? this.contentWindow || window : this,
     h = e(u),
     p = o,
     f = {};
    switch (typeof p) {
     case "number":
     case "string":
      if (/^([+-]=?)?\d+(\.\d+)?(px|%)?$/.test(p)) {
       p = i(p);
       break
      }
      p = d ? e(p) : e(p, u);
     case "object":
      if (0 === p.length) return;
      (p.is || p.style) && (c = (p = e(p)).offset())
    }
    var m = e.isFunction(s.offset) && s.offset(u, p) || s.offset;
    e.each(s.axis.split(""), function(e, t) {
     var i = "x" === t ? "Left" : "Top",
      o = i.toLowerCase(),
      r = "scroll" + i,
      v = h[r](),
      g = n.max(u, t);
     c ? (f[r] = c[o] + (d ? 0 : v - h.offset()[o]), s.margin && (f[r] -= parseInt(p.css("margin" + i), 10) || 0, f[r] -= parseInt(p.css("border" + i + "Width"), 10) || 0), f[r] += m[o] || 0, s.over[o] && (f[r] += p["x" === t ? "width" : "height"]() * s.over[o])) : (i = p[o], f[r] = i.slice && "%" === i.slice(-1) ? parseFloat(i) / 100 * g : i), s.limit && /^\d+$/.test(f[r]) && (f[r] = 0 >= f[r] ? 0 : Math.min(f[r], g)), !e && 1 < s.axis.length && (v === f[r] ? f = {} : a && (l(s.onAfterFirst), f = {}))
    }), l(s.onAfter)
   }
  })
 }, n.max = function(i, n) {
  var o = "x" === n ? "Width" : "Height",
   r = "scroll" + o;
  if (!t(i)) return i[r] - e(i)[o.toLowerCase()]();
  var o = "client" + o,
   s = i.ownerDocument || i.document,
   a = s.documentElement,
   s = s.body;
  return Math.max(a[r], s[r]) - Math.min(a[o], s[o])
 }, e.Tween.propHooks.scrollLeft = e.Tween.propHooks.scrollTop = {
  get: function(t) {
   return e(t.elem)[t.prop]()
  },
  set: function(t) {
   var i = this.get(t);
   if (t.options.interrupt && t._last && t._last !== i) return e(t.elem).stop();
   var n = Math.round(t.now);
   i !== n && (e(t.elem)[t.prop](n), t._last = this.get(t))
  }
 }, n
}),
function(e, t) {
 "object" == typeof exports && "object" == typeof module ? module.exports = t() : "function" == typeof define && define.amd ? define([], t) : "object" == typeof exports ? exports.likely = t() : e.likely = t()
}(this, function() {
 return function(e) {
  function t(n) {
   if (i[n]) return i[n].exports;
   var o = i[n] = {
    i: n,
    l: !1,
    exports: {}
   };
   return e[n].call(o.exports, o, o.exports, t), o.l = !0, o.exports
  }
  var i = {};
  return t.m = e, t.c = i, t.i = function(e) {
   return e
  }, t.d = function(e, i, n) {
   t.o(e, i) || Object.defineProperty(e, i, {
    configurable: !1,
    enumerable: !0,
    get: n
   })
  }, t.n = function(e) {
   var i = e && e.__esModule ? function() {
    return e.default
   } : function() {
    return e
   };
   return t.d(i, "a", i), i
  }, t.o = function(e, t) {
   return Object.prototype.hasOwnProperty.call(e, t)
  }, t.p = "", t(t.s = 21)
 }([function(e, t, i) {
  "use strict";
  Object.defineProperty(t, "__esModule", {
   value: !0
  }), i.d(t, "each", function() {
   return r
  }), i.d(t, "toArray", function() {
   return s
  }), i.d(t, "merge", function() {
   return a
  }), i.d(t, "extend", function() {
   return l
  }), i.d(t, "getDataset", function() {
   return c
  }), i.d(t, "bools", function() {
   return d
  }), i.d(t, "template", function() {
   return u
  }), i.d(t, "makeUrl", function() {
   return h
  }), i.d(t, "query", function() {
   return p
  }), i.d(t, "set", function() {
   return f
  }), i.d(t, "getDefaultUrl", function() {
   return m
  }), i.d(t, "isBrowserEnv", function() {
   return v
  });
  var n = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
    return typeof e
   } : function(e) {
    return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
   },
   o = {
    yes: !0,
    no: !1
   },
   r = function(e, t) {
    for (var i in e) e.hasOwnProperty(i) && t(e[i], i)
   },
   s = function(e) {
    return Array.prototype.slice.call(e)
   },
   a = function() {
    for (var e = {}, t = Array.prototype.slice.call(arguments), i = 0; i < t.length; i++) {
     var n = t[i];
     if (n)
      for (var o in n) n.hasOwnProperty(o) && (e[o] = n[o])
    }
    return e
   },
   l = function(e, t) {
    for (var i in t) t.hasOwnProperty(i) && (e[i] = t[i]);
    return e
   },
   c = function(e) {
    if ("object" === n(e.dataset)) return e.dataset;
    var t = void 0,
     i = {},
     o = e.attributes,
     r = void 0,
     s = void 0,
     a = function(e) {
      return e.charAt(1).toUpperCase()
     };
    for (t = o.length - 1; t >= 0; t--)(r = o[t]) && r.name && /^data-\w[\w\-]*$/.test(r.name) && (s = r.name.substr(5).replace(/-./g, a), i[s] = r.value);
    return i
   },
   d = function(e) {
    var t = {},
     i = c(e);
    for (var n in i)
     if (i.hasOwnProperty(n)) {
      var r = i[n];
      t[n] = o[r] || r
     } return t
   },
   u = function(e, t) {
    return e ? e.replace(/\{([^\}]+)\}/g, function(e, i) {
     return i in t ? t[i] : e
    }) : ""
   },
   h = function(e, t) {
    for (var i in t) t.hasOwnProperty(i) && (t[i] = encodeURIComponent(t[i]));
    return u(e, t)
   },
   p = function(e) {
    var t = encodeURIComponent,
     i = [];
    for (var o in e) "object" !== n(e[o]) && i.push(t(o) + "=" + t(e[o]));
    return i.join("&")
   },
   f = function(e, t, i) {
    var n = t.split("."),
     o = null;
    n.forEach(function(t, i) {
     void 0 === e[t] && (e[t] = {}), i !== n.length - 1 && (e = e[t]), o = t
    }), e[o] = i
   },
   m = function() {
    var e = document.querySelector('link[rel="canonical"]');
    return e ? e.href : window.location.href.replace(window.location.hash, "")
   },
   v = "undefined" != typeof window && "undefined" != typeof document && document.createElement
 }, function(e, t, i) {
  "use strict";
  Object.defineProperty(t, "__esModule", {
   value: !0
  }), i.d(t, "global", function() {
   return r
  }), i.d(t, "wrapSVG", function() {
   return l
  }), i.d(t, "createNode", function() {
   return c
  }), i.d(t, "getScript", function() {
   return d
  }), i.d(t, "getJSON", function() {
   return u
  }), i.d(t, "find", function() {
   return h
  }), i.d(t, "findAll", function() {
   return p
  }), i.d(t, "openPopup", function() {
   return f
  }), i.d(t, "createTempLink", function() {
   return m
  });
  var n = i(0),
   o = {},
   r = n.isBrowserEnv ? window : o,
   s = n.isBrowserEnv ? document.createElement("div") : {},
   a = 0;
  r.__likelyCallbacks = {};
  var l = function(e) {
    return '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path d="M' + e + 'z"/></svg>'
   },
   c = function(e) {
    return s.innerHTML = e, s.children[0]
   },
   d = function(e) {
    var t = document.createElement("script"),
     i = document.head;
    t.type = "text/javascript", t.src = e, i.appendChild(t), i.removeChild(t)
   },
   u = function(e, t) {
    var i = encodeURIComponent("random_fun_" + ++a),
     n = e.replace(/callback=(\?)/, "callback=__likelyCallbacks." + i);
    r.__likelyCallbacks[i] = t, d(n)
   },
   h = function(e, t) {
    return (t || document).querySelector(e)
   },
   p = function(e, t) {
    return Array.prototype.slice.call((t || document).querySelectorAll(e))
   },
   f = function(e, t, i, n) {
    var o = Math.round(screen.width / 2 - i / 2),
     r = 0;
    screen.height > n && (r = Math.round(screen.height / 3 - n / 2));
    var s = "left=" + o + ",top=" + r + ",width=" + i + ",height=" + n + ",personalbar=0,toolbar=0,scrollbars=1,resizable=1",
     a = window.open(e, t, s);
    return a ? (a.focus(), a) : (location.href = e, null)
   },
   m = function(e) {
    var t = document.createElement("a");
    t.href = e, t.style = "display: none", document.body.appendChild(t), setTimeout(function() {
     t.click(), document.body.removeChild(t)
    })
   }
 }, function(e, t, i) {
  "use strict";
  Object.defineProperty(t, "__esModule", {
   value: !0
  }), t.default = {
   name: "likely",
   prefix: "likely__"
  }
 }, function(e, t, i) {
  "use strict";
  var n = i(9),
   o = i(0),
   r = i(19),
   s = i(10),
   a = i(11),
   l = i(12),
   c = i(13),
   d = i(14),
   u = i(15),
   h = i(16),
   p = i(17),
   f = i(18),
   m = {
    facebook: s.a,
    gplus: a.a,
    linkedin: l.a,
    odnoklassniki: c.a,
    pinterest: d.a,
    telegram: u.a,
    twitter: h.a,
    vkontakte: p.a,
    whatsapp: f.a
   };
  i.i(o.each)(m, function(e, t) {
   i.i(n.a)(e), e.svgi = r.a[t], e.name = t
  }), t.a = m
 }, function(e, t, i) {
  function n(e, t) {
   if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
  }
  var o = function() {
    function e(e, t) {
     for (var i = 0; i < t.length; i++) {
      var n = t[i];
      n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(e, n.key, n)
     }
    }
    return function(t, i, n) {
     return i && e(t.prototype, i), n && e(t, n), t
    }
   }(),
   r = i(0),
   s = r.bools,
   a = r.getDefaultUrl,
   l = r.merge,
   c = i(20).default,
   d = i(2).default,
   u = i(1),
   h = u.findAll,
   p = i(8).default,
   f = function(e, t) {
    var i = t || {},
     n = {
      counters: !0,
      timeout: 1e3,
      zeroes: !1,
      title: document.title,
      wait: 500,
      url: a()
     },
     o = e[d.name],
     r = l({}, n, i, s(e));
    return o ? o.update(r) : e[d.name] = new c(e, r), o
   },
   m = function() {
    function e() {
     return n(this, e), console.warn("likely function is DEPRECATED and will be removed in 3.0. Use likely.initiate instead."), e.initiate.apply(e, arguments)
    }
    return o(e, null, [{
     key: "initate",
     value: function() {
      return console.warn("likely.initate function is DEPRECATED and will be removed in 3.0. Use likely.initiate instead."), e.initiate.apply(e, arguments)
     }
    }, {
     key: "initiate",
     value: function(e, t) {
      function i() {
       n.forEach(function(e) {
        f(e, o)
       })
      }
      var n = void 0,
       o = void 0;
      Array.isArray(e) ? (n = e, o = t) : e instanceof Node ? (n = [e], o = t) : (n = h("." + d.name), o = e), i(), p.onUrlChange(i)
     }
    }]), e
   }();
  e.exports = m
 }, function(e, t, i) {
  "use strict";

  function n(e, t) {
   if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
  }
  var o = i(1),
   r = i(0),
   s = i(2),
   a = i(7),
   l = i(3),
   c = function() {
    function e(e, t) {
     for (var i = 0; i < t.length; i++) {
      var n = t[i];
      n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(e, n.key, n)
     }
    }
    return function(t, i, n) {
     return i && e(t.prototype, i), n && e(t, n), t
    }
   }(),
   d = '<span class="{className}">{content}</span>',
   u = function() {
    function e(t, o, s) {
     n(this, e), this.widget = t, this.likely = o, this.options = i.i(r.merge)(s), this.init()
    }
    return c(e, [{
     key: "init",
     value: function() {
      this.detectService(), this.detectParams(), this.service && (this.initHtml(), setTimeout(this.initCounter.bind(this), 0))
     }
    }, {
     key: "update",
     value: function(e) {
      var t = "." + s.default.prefix + "counter",
       n = i.i(o.findAll)(t, this.widget);
      i.i(r.extend)(this.options, i.i(r.merge)({
       forceUpdate: !1
      }, e)), n.forEach(function(e) {
       e.parentNode.removeChild(e)
      }), this.initCounter()
     }
    }, {
     key: "detectService",
     value: function() {
      var e = this.widget,
       t = i.i(r.getDataset)(e).service;
      t || (t = Object.keys(l.a).filter(function(t) {
       return e.classList.contains(t)
      })[0]), t && (this.service = t, i.i(r.extend)(this.options, l.a[t]))
     }
    }, {
     key: "detectParams",
     value: function() {
      var e = this.options,
       t = i.i(r.getDataset)(this.widget);
      if (t.counter) {
       var n = parseInt(t.counter, 10);
       isNaN(n) ? e.counterUrl = t.counter : e.counterNumber = n
      }
      e.title = t.title || e.title, e.url = t.url || e.url
     }
    }, {
     key: "initHtml",
     value: function() {
      var e = this.options,
       t = this.widget,
       n = t.innerHTML;
      t.addEventListener("click", this.click.bind(this)), t.classList.remove(this.service), t.className += " " + this.className("widget");
      var s = i.i(r.template)(d, {
        className: this.className("button"),
        content: n
       }),
       a = i.i(r.template)(d, {
        className: this.className("icon"),
        content: i.i(o.wrapSVG)(e.svgi)
       });
      t.innerHTML = a + s
     }
    }, {
     key: "initCounter",
     value: function() {
      var e = this.options;
      e.counters && e.counterNumber ? this.updateCounter(e.counterNumber) : e.counterUrl && i.i(a.a)(this.service, e.url, e)(this.updateCounter.bind(this))
     }
    }, {
     key: "className",
     value: function(e) {
      var t = s.default.prefix + e;
      return t + " " + t + "_" + this.service
     }
    }, {
     key: "updateCounter",
     value: function(e) {
      var t = parseInt(e, 10) || 0,
       n = i.i(o.find)("." + s.default.name + "__counter", this.widget);
      n && n.parentNode.removeChild(n);
      var a = {
       className: this.className("counter"),
       content: t
      };
      t || this.options.zeroes || (a.className += " " + s.default.prefix + "counter_empty", a.content = ""), this.widget.appendChild(i.i(o.createNode)(i.i(r.template)(d, a))), this.likely.updateCounter(this.service, t)
     }
    }, {
     key: "click",
     value: function() {
      var e = this.options;
      if (e.click.call(this)) {
       var t = i.i(r.makeUrl)(e.popupUrl, {
        url: e.url,
        title: e.title
       });
       if (!1 === e.openPopup) return i.i(o.createTempLink)(this.addAdditionalParamsToUrl(t)), !1;
       i.i(o.openPopup)(this.addAdditionalParamsToUrl(t), s.default.prefix + this.service, e.popupWidth, e.popupHeight)
      }
      return !1
     }
    }, {
     key: "addAdditionalParamsToUrl",
     value: function(e) {
      var t = i.i(r.query)(i.i(r.merge)(this.widget.dataset, this.options.data)),
       n = -1 === e.indexOf("?") ? "?" : "&";
      return "" === t ? e : e + n + t
     }
    }]), e
   }();
  t.a = u
 }, function(e, t, i) {
  "use strict";
  var n = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
   return typeof e
  } : function(e) {
   return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
  };
  t.a = function(e) {
   var t = [];
   return function(i) {
    var o = void 0 === i ? "undefined" : n(i);
    if ("undefined" === o) return e;
    "function" === o ? t.push(i) : (e = i, t.forEach(function(e) {
     e(i)
    }))
   }
  }
 }, function(e, t, i) {
  "use strict";
  var n = i(6),
   o = i(0),
   r = i(3),
   s = {};
  t.a = function(e, t, a) {
   s[e] || (s[e] = {});
   var l = s[e],
    c = l[t];
   if (!a.forceUpdate && c) return c;
   c = i.i(n.a)();
   var d = i.i(o.makeUrl)(a.counterUrl, {
    url: t
   });
   return r.a[e].counter(d, c, t), l[t] = c, c
  }
 }, function(e, t, i) {
  "use strict";
  Object.defineProperty(t, "__esModule", {
   value: !0
  });
  var n = [],
   o = function() {
    n.forEach(function(e) {
     e()
    })
   },
   r = function() {
    var e = window.history.pushState;
    window.history.pushState = function() {
     return setTimeout(o, 0), e.apply(window.history, arguments)
    };
    var t = window.history.replaceState;
    window.history.replaceState = function() {
     return setTimeout(o, 0), t.apply(window.history, arguments)
    }, window.addEventListener("popstate", o)
   },
   s = !1,
   a = {
    onUrlChange: function(e) {
     s || (r(), s = !0), n.push(e)
    }
   };
  t.default = a
 }, function(e, t, i) {
  "use strict";
  var n = i(1),
   o = function(e, t) {
    var o = this;
    i.i(n.getJSON)(e, function(e) {
     try {
      var i = "function" == typeof o.convertNumber ? o.convertNumber(e) : e;
      t(i)
     } catch (e) {}
    })
   };
  t.a = function(e) {
   e.counter = n.global.__likelyCounterMock || e.counter || o, e.click = e.click || function() {
    return !0
   }
  }
 }, function(e, t, i) {
  "use strict";
  t.a = {
   counterUrl: "https://graph.facebook.com/?id={url}&callback=?",
   convertNumber: function(e) {
    return e.share.share_count
   },
   popupUrl: "https://www.facebook.com/sharer/sharer.php?u={url}",
   popupWidth: 600,
   popupHeight: 500
  }
 }, function(e, t, i) {
  "use strict";
  t.a = {
   counterUrl: "https://clients6.google.com/rpc",
   counter: function(e, t, i) {
    var n = new XMLHttpRequest;
    n.open("POST", e), n.setRequestHeader("Content-Type", "application/json"), n.addEventListener("load", function() {
     var e = JSON.parse(n.responseText)[0].result.metadata.globalCounts.count;
     t(e)
    }), n.send(JSON.stringify([{
     method: "pos.plusones.get",
     id: "p",
     params: {
      nolog: !0,
      id: i,
      source: "widget",
      userId: "@viewer",
      groupId: "@self"
     },
     jsonrpc: "2.0",
     key: "p",
     apiVersion: "v1"
    }]))
   },
   popupUrl: "https://plus.google.com/share?url={url}",
   popupWidth: 700,
   popupHeight: 500
  }
 }, function(e, t, i) {
  "use strict";
  t.a = {
   counterUrl: "https://www.linkedin.com/countserv/count/share?url={url}&format=jsonp&callback=?",
   convertNumber: function(e) {
    return e.count
   },
   popupUrl: "https://www.linkedin.com/shareArticle?mini=true&url={url}&title={title}",
   popupWidth: 600,
   popupHeight: 500
  }
 }, function(e, t, i) {
  "use strict";
  var n = i(1),
   o = i(0),
   r = {
    counterUrl: "https://connect.ok.ru/dk?st.cmd=extLike&ref={url}&uid={index}",
    counter: function(e, t) {
     this.promises.push(t), i.i(n.getScript)(i.i(o.makeUrl)(e, {
      index: this.promises.length - 1
     }))
    },
    promises: [],
    popupUrl: "https://connect.ok.ru/dk?st.cmd=WidgetSharePreview&service=odnoklassniki&st.shareUrl={url}",
    popupWidth: 640,
    popupHeight: 400
   };
  i.i(o.set)(n.global, "ODKL.updateCount", function(e, t) {
   r.promises[e](t)
  }), t.a = r
 }, function(e, t, i) {
  "use strict";
  t.a = {
   counterUrl: "https://api.pinterest.com/v1/urls/count.json?url={url}&callback=?",
   convertNumber: function(e) {
    return e.count
   },
   popupUrl: "https://pinterest.com/pin/create/button/?url={url}&description={title}",
   popupWidth: 630,
   popupHeight: 270
  }
 }, function(e, t, i) {
  "use strict";
  t.a = {
   popupUrl: "https://telegram.me/share/url?url={url}",
   popupWidth: 600,
   popupHeight: 500
  }
 }, function(e, t, i) {
  "use strict";
  t.a = {
   popupUrl: "https://twitter.com/intent/tweet?url={url}&text={title}",
   popupWidth: 600,
   popupHeight: 450,
   click: function() {
    return /[\.\?:\-–—]\s*$/.test(this.options.title) || (this.options.title += ":"), !0
   }
  }
 }, function(e, t, i) {
  "use strict";
  var n = i(1),
   o = i(0),
   r = {
    counterUrl: "https://vk.com/share.php?act=count&url={url}&index={index}",
    counter: function(e, t) {
     this.promises.push(t), i.i(n.getScript)(i.i(o.makeUrl)(e, {
      index: this.promises.length - 1
     }))
    },
    promises: [],
    popupUrl: "https://vk.com/share.php?url={url}&title={title}",
    popupWidth: 550,
    popupHeight: 330
   };
  i.i(o.set)(n.global, "VK.Share.count", function(e, t) {
   r.promises[e](t)
  }), t.a = r
 }, function(e, t, i) {
  "use strict";
  t.a = {
   popupUrl: "whatsapp://send?text={title}%0D%0A%0D%0A{url}",
   openPopup: !1
  }
 }, function(e, t, i) {
  "use strict";
  t.a = {
   facebook: "8.661,0.003 C8.661,0.003 6.502,-0.000 6.502,-0.000 C4.077,-0.000 2.510,1.642 2.510,4.184 C2.510,4.184 2.510,6.113 2.510,6.113 C2.510,6.113 0.339,6.113 0.339,6.113 C0.152,6.113 0.000,6.268 0.000,6.459 C0.000,6.459 0.000,9.254 0.000,9.254 C0.000,9.446 0.152,9.601 0.339,9.601 C0.339,9.601 2.510,9.601 2.510,9.601 C2.510,9.601 2.510,16.654 2.510,16.654 C2.510,16.845 2.662,17.000 2.849,17.000 C2.849,17.000 5.681,17.000 5.681,17.000 C5.869,17.000 6.020,16.845 6.020,16.654 C6.020,16.654 6.020,9.601 6.020,9.601 C6.020,9.601 8.558,9.601 8.558,9.601 C8.746,9.601 8.898,9.446 8.898,9.254 C8.898,9.254 8.899,6.459 8.899,6.459 C8.899,6.367 8.863,6.279 8.799,6.214 C8.735,6.149 8.649,6.113 8.559,6.113 C8.559,6.113 6.021,6.113 6.021,6.113 C6.021,6.113 6.021,4.477 6.021,4.477 C6.021,3.691 6.204,3.292 7.206,3.292 C7.206,3.292 8.661,3.292 8.661,3.292 C8.848,3.292 9.000,3.137 9.000,2.945 C9.000,2.945 9.000,0.350 9.000,0.350 C9.000,0.159 8.848,0.004 8.661,0.003",
   twitter: "15.96 3.42c-.04.153-.144.31-.237.414l-.118.058v.118l-.59.532-.237.295c-.05.036-.398.21-.413.237V6.49h-.06v.473h-.058v.294h-.058v.296h-.06v.235h-.06v.237h-.058c-.1.355-.197.71-.295 1.064h-.06v.116h-.06c-.02.1-.04.197-.058.296h-.06c-.04.118-.08.237-.118.355h-.06c-.038.118-.078.236-.117.353l-.118.06-.06.235-.117.06v.116l-.118.06v.12h-.06c-.02.057-.038.117-.058.175l-.118.06v.117c-.06.04-.118.08-.177.118v.118l-.237.177v.118l-.59.53-.532.592h-.117c-.06.078-.118.156-.177.236l-.177.06-.06.117h-.118l-.06.118-.176.06v.058h-.118l-.06.118-.353.12-.06.117c-.078.02-.156.04-.235.058v.06c-.118.038-.236.078-.354.118v.058H8.76v.06h-.12v.06h-.176v.058h-.118v.06H8.17v.058H7.99v.06l-.413.058v.06h-.237c-.667.22-1.455.293-2.36.293h-.886v-.058h-.53v-.06H3.27v-.06h-.295v-.06H2.68v-.057h-.177v-.06h-.236v-.058H2.09v-.06h-.177v-.058h-.177v-.06H1.56v-.058h-.12v-.06l-.294-.06v-.057c-.118-.04-.236-.08-.355-.118v-.06H.674v-.058H.555v-.06H.437v-.058H.32l-.06-.12H.142v-.058c-.13-.08-.083.026-.177-.118H1.56v-.06c.294-.04.59-.077.884-.117v-.06h.177v-.058h.237v-.06h.118v-.06h.177v-.057h.118v-.06h.177v-.058l.236-.06v-.058l.236-.06c.02-.038.04-.078.058-.117l.237-.06c.02-.04.04-.077.058-.117h.118l.06-.118h.118c.036-.025.047-.078.118-.118V12.1c-1.02-.08-1.84-.54-2.303-1.183-.08-.058-.157-.118-.236-.176v-.117l-.118-.06v-.117c-.115-.202-.268-.355-.296-.65.453.004.987.008 1.354-.06v-.06c-.254-.008-.47-.08-.65-.175v-.058H2.32v-.06c-.08-.02-.157-.04-.236-.058l-.06-.118h-.117l-.118-.178h-.12c-.077-.098-.156-.196-.235-.294l-.118-.06v-.117l-.177-.12c-.35-.502-.6-1.15-.59-2.006h.06c.204.234.948.377 1.357.415v-.06c-.257-.118-.676-.54-.827-.768V5.9l-.118-.06c-.04-.117-.08-.236-.118-.354h-.06v-.118H.787c-.04-.196-.08-.394-.118-.59-.06-.19-.206-.697-.118-1.005h.06V3.36h.058v-.177h.06v-.177h.057V2.83h.06c.04-.118.078-.236.117-.355h.118v.06c.12.097.237.196.355.295v.118l.118.058c.08.098.157.197.236.295l.176.06.354.413h.118l.177.236h.118l.06.117h.117c.04.06.08.118.118.177h.118l.06.118.235.06.06.117.356.12.06.117.53.176v.06h.118v.058l.236.06v.06c.118.02.236.04.355.058v.06h.177v.058h.177v.06h.176v.058h.236v.06l.472.057v.06l1.417.18v-.237c-.1-.112-.058-.442-.057-.65 0-.573.15-.99.354-1.358v-.117l.118-.06.06-.235.176-.118v-.118c.14-.118.276-.236.414-.355l.06-.117h.117l.12-.177.235-.06.06-.117h.117v-.058H9.7v-.058h.177v-.06h.177v-.058h.177v-.06h.296v-.058h1.063v.058h.294v.06h.177v.058h.178v.06h.177v.058h.118v.06h.118l.06.117c.08.018.158.038.236.058.04.06.08.118.118.177h.118l.06.117c.142.133.193.163.472.178.136-.12.283-.05.472-.118v-.06h.177v-.058h.177v-.06l.236-.058v-.06h.177l.59-.352v.176h-.058l-.06.295h-.058v.117h-.06v.118l-.117.06v.118l-.177.118v.117l-.118.06-.354.412h-.117l-.177.236h.06c.13-.112.402-.053.59-.117l1.063-.353",
   vkontakte: "7.828 12.526h.957s.288-.032.436-.19c.14-.147.14-.42.14-.42s-.02-1.284.58-1.473c.59-.187 1.34 1.24 2.14 1.788.61.42 1.07.33 1.07.33l2.14-.03s1.12-.07.59-.95c-.04-.07-.3-.65-1.58-1.84-1.34-1.24-1.16-1.04.45-3.19.98-1.31 1.38-2.11 1.25-2.45-.11-.32-.84-.24-.84-.24l-2.4.02s-.18-.02-.31.06-.21.26-.21.26-.38 1.02-.89 1.88C10.27 7.9 9.84 8 9.67 7.88c-.403-.26-.3-1.053-.3-1.62 0-1.76.27-2.5-.52-2.69-.26-.06-.454-.1-1.123-.11-.86-.01-1.585.006-1.996.207-.27.135-.48.434-.36.45.16.02.52.098.71.358.25.337.24 1.09.24 1.09s.14 2.077-.33 2.335c-.33.174-.77-.187-1.73-1.837-.49-.84-.86-1.78-.86-1.78s-.07-.17-.2-.27c-.15-.11-.37-.15-.37-.15l-2.29.02s-.34.01-.46.16c-.11.13-.01.41-.01.41s1.79 4.19 3.82 6.3c1.86 1.935 3.97 1.81 3.97 1.81",
   gplus: "8,6.5v3h4.291c-0.526,2.01-2.093,3.476-4.315,3.476C5.228,12.976,3,10.748,3,8c0-2.748,2.228-4.976,4.976-4.976c1.442,0,2.606,0.623,3.397,1.603L13.52,2.48C12.192,0.955,10.276,0,8,0C3.582,0,0,3.582,0,8s3.582,8,8,8s7.5-3.582,7.5-8V6.5H8",
   pinterest: "7.99 0c-4.417 0-8 3.582-8 8 0 3.39 2.11 6.284 5.086 7.45-.07-.633-.133-1.604.028-2.295.145-.624.938-3.977.938-3.977s-.24-.48-.24-1.188c0-1.112.645-1.943 1.448-1.943.683 0 1.012.512 1.012 1.127 0 .686-.437 1.713-.663 2.664-.19.796.398 1.446 1.184 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.255-3.343-3.255-2.276 0-3.612 1.707-3.612 3.472 0 .688.265 1.425.595 1.826.065.08.075.15.055.23-.06.252-.195.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.835-4.84 5.287-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.74 4.976-4.152 4.976-.81 0-1.573-.42-1.834-.92l-.498 1.903c-.18.695-.668 1.566-.994 2.097.75.232 1.544.357 2.37.357 4.417 0 8-3.582 8-8s-3.583-8-8-8",
   odnoklassniki: "8 6.107c.888 0 1.607-.72 1.607-1.607 0-.888-.72-1.607-1.607-1.607s-1.607.72-1.607 1.607c0 .888.72 1.607 1.607 1.607zM13 0H3C1 0 0 1 0 3v10c0 2 1 3 3 3h10c2 0 3-1 3-3V3c0-2-1-3-3-3zM8 .75c2.07 0 3.75 1.68 3.75 3.75 0 2.07-1.68 3.75-3.75 3.75S4.25 6.57 4.25 4.5C4.25 2.43 5.93.75 8 .75zm3.826 12.634c.42.42.42 1.097 0 1.515-.21.208-.483.313-.758.313-.274 0-.548-.105-.758-.314L8 12.59 5.69 14.9c-.42.418-1.098.418-1.516 0s-.42-1.098 0-1.516L6.357 11.2c-1.303-.386-2.288-1.073-2.337-1.11-.473-.354-.57-1.025-.214-1.5.354-.47 1.022-.567 1.496-.216.03.022 1.4.946 2.698.946 1.31 0 2.682-.934 2.693-.943.474-.355 1.146-.258 1.5.213.355.474.26 1.146-.214 1.5-.05.036-1.035.723-2.338 1.11l2.184 2.184",
   telegram: "6,11.960784l-1,-3l11,-8l-15.378,5.914c0,0 -0.672,0.23 -0.619,0.655c0.053,0.425 0.602,0.619 0.602,0.619l3.575,1.203l1.62,5.154l2.742,-2.411l-0.007,-0.005l3.607,2.766c0.973,0.425 1.327,-0.46 1.327,-0.46l2.531,-13.435l-10,11z",
   linkedin: "2.4,6h2.4v7.6H2.4V6z M3.6,2.2c0.8,0,1.4,0.6,1.4,1.4C4.9,4.3,4.3,5,3.6,5C2.8,5,2.2,4.3,2.2,3.6C2.2,2.8,2.8,2.2,3.6,2.2C3.6,2.2,3.6,2.2,3.6,2.2 M6.2,6h2.3v1h0C9,6.2,9.9,5.8,10.8,5.8c2.4,0,2.8,1.6,2.8,3.6v4.2h-2.4V9.9c0-0.9,0-2-1.2-2c-1.2,0-1.4,1-1.4,2v3.8H6.2V6z M13,0H3C1,0,0,1,0,3v10c0,2,1,3,3,3h10c2,0,3-1,3-3V3C16,1,15,0,13,0z",
   whatsapp: "11.665 9.588c-.2-.1-1.177-.578-1.36-.644-.182-.067-.315-.1-.448.1-.132.197-.514.643-.63.775-.116.13-.232.14-.43.05-.2-.1-.842-.31-1.602-.99-.592-.53-.99-1.18-1.107-1.38-.116-.2-.013-.31.087-.41.09-.09.2-.23.3-.35.098-.12.13-.2.198-.33.066-.14.033-.25-.017-.35-.05-.1-.448-1.08-.614-1.47-.16-.39-.325-.34-.448-.34-.115-.01-.248-.01-.38-.01-.134 0-.35.05-.532.24-.182.2-.696.68-.696 1.65s.713 1.91.812 2.05c.1.13 1.404 2.13 3.4 2.99.476.2.846.32 1.136.42.476.15.91.13 1.253.08.383-.06 1.178-.48 1.344-.95.17-.47.17-.86.12-.95-.05-.09-.18-.14-.38-.23M8.04 14.5h-.01c-1.18 0-2.35-.32-3.37-.92l-.24-.143-2.5.65.67-2.43-.16-.25c-.66-1.05-1.01-2.26-1.01-3.506 0-3.63 2.97-6.59 6.628-6.59 1.77 0 3.43.69 4.68 1.94 1.25 1.24 1.94 2.9 1.94 4.66-.003 3.63-2.973 6.59-6.623 6.59M13.68 2.3C12.16.83 10.16 0 8.03 0 3.642 0 .07 3.556.067 7.928c0 1.397.366 2.76 1.063 3.964L0 16l4.223-1.102c1.164.63 2.474.964 3.807.965h.004c4.39 0 7.964-3.557 7.966-7.93 0-2.117-.827-4.11-2.33-5.608"
  }
 }, function(e, t, i) {
  "use strict";

  function n(e, t) {
   if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
  }
  Object.defineProperty(t, "__esModule", {
   value: !0
  });
  var o = i(5),
   r = i(2),
   s = i(0),
   a = function() {
    function e(e, t) {
     for (var i = 0; i < t.length; i++) {
      var n = t[i];
      n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(e, n.key, n)
     }
    }
    return function(t, i, n) {
     return i && e(t.prototype, i), n && e(t, n), t
    }
   }(),
   l = function() {
    function e(t, i) {
     n(this, e), this.container = t, this.options = i, this.countersLeft = 0, this.buttons = [], this.number = 0, this.init()
    }
    return a(e, [{
     key: "init",
     value: function() {
      i.i(s.toArray)(this.container.children).forEach(this.addButton.bind(this)), this.options.counters ? (this.timer = setTimeout(this.appear.bind(this), this.options.wait), this.timeout = setTimeout(this.ready.bind(this), this.options.timeout)) : this.appear()
     }
    }, {
     key: "addButton",
     value: function(e) {
      var t = new o.a(e, this, this.options);
      this.buttons.push(t), t.options.counterUrl && this.countersLeft++
     }
    }, {
     key: "update",
     value: function(e) {
      (e.forceUpdate || e.url && e.url !== this.options.url) && (this.countersLeft = this.buttons.length, this.number = 0, this.buttons.forEach(function(t) {
       t.update(e)
      }))
     }
    }, {
     key: "updateCounter",
     value: function(e, t) {
      t && (this.number += t), 0 == --this.countersLeft && (this.appear(), this.ready())
     }
    }, {
     key: "appear",
     value: function() {
      this.container.classList.add(r.default.name + "_visible")
     }
    }, {
     key: "ready",
     value: function() {
      this.timeout && (clearTimeout(this.timeout), this.container.classList.add(r.default.name + "_ready"))
     }
    }]), e
   }();
  t.default = l
 }, function(e, t, i) {
  var n = i(4);
  window.addEventListener("load", function() {
   n.initiate()
  }), e.exports = n
 }])
}),
function(e, t) {
 function i(e) {
  throw new Error("Pagination: " + e)
 }

 function n(e) {
  e.dataSource || i('"dataSource" is required.'), "string" == typeof e.dataSource ? void 0 === e.totalNumber ? i('"totalNumber" is required.') : t.isNumeric(e.totalNumber) || i('"totalNumber" is incorrect. (Number)') : l.isObject(e.dataSource) && (void 0 === e.locator ? i('"dataSource" is an Object, please specify "locator".') : "string" == typeof e.locator || t.isFunction(e.locator) || i(e.locator + " is incorrect. (String | Function)"))
 }

 function o(e) {
  var i = ["go", "previous", "next", "disable", "enable", "refresh", "show", "hide", "destroy"];
  t.each(i, function(t, i) {
   e.off(a + i)
  }), e.data("pagination", {}), t(".paginationjs", e).remove()
 }

 function r(e, t) {
  return ("object" == (t = typeof e) ? null == e && "null" || Object.prototype.toString.call(e).slice(8, -1) : t).toLowerCase()
 }
 void 0 === t && i("Pagination requires jQuery.");
 var s = "pagination",
  a = "__pagination-";
 t.fn.pagination && (s = "pagination2"), t.fn[s] = function(r) {
  if (void 0 === r) return this;
  var s = t(this),
   c = {
    initialize: function() {
     var e = this;
     if (s.data("pagination") || s.data("pagination", {}), !1 !== e.callHook("beforeInit")) {
      s.data("pagination").initialized && t(".paginationjs", s).remove(), e.disabled = !!u.disabled;
      var i = e.model = {
       pageRange: u.pageRange,
       pageSize: u.pageSize
      };
      e.parseDataSource(u.dataSource, function(t) {
       if (e.sync = l.isArray(t), e.sync && (i.totalNumber = u.totalNumber = t.length), i.totalPage = e.getTotalPage(), !(u.hideWhenLessThanOnePage && i.totalPage <= 1)) {
        var n = e.render(!0);
        u.className && n.addClass(u.className), i.el = n, s["bottom" === u.position ? "append" : "prepend"](n), e.observer(), s.data("pagination").initialized = !0, e.callHook("afterInit", n)
       }
      })
     }
    },
    render: function(e) {
     var i = this,
      n = i.model,
      o = n.el || t('<div class="paginationjs"></div>'),
      r = !0 !== e;
     i.callHook("beforeRender", r);
     var s = n.pageNumber || u.pageNumber,
      a = u.pageRange,
      l = n.totalPage,
      c = s - a,
      d = s + a;
     return d > l && (d = l, c = l - 2 * a, c = 1 > c ? 1 : c), 1 >= c && (c = 1, d = Math.min(2 * a + 1, l)), o.html(i.createTemplate({
      currentPage: s,
      pageRange: a,
      totalPage: l,
      rangeStart: c,
      rangeEnd: d
     })), i.callHook("afterRender", r), o
    },
    createTemplate: function(e) {
     var i, n, o = this,
      r = e.currentPage,
      s = e.totalPage,
      a = e.rangeStart,
      l = e.rangeEnd,
      c = u.totalNumber,
      d = u.showPrevious,
      h = u.showNext,
      p = u.showPageNumbers,
      f = u.showNavigator,
      m = u.showGoInput,
      v = u.showGoButton,
      g = u.pageLink,
      y = u.prevText,
      b = u.nextText,
      w = u.ellipsisText,
      x = u.goButtonText,
      C = u.classPrefix,
      k = u.activeClassName,
      T = u.disableClassName,
      S = u.ulClassName,
      $ = t.isFunction(u.formatNavigator) ? u.formatNavigator() : u.formatNavigator,
      P = t.isFunction(u.formatGoInput) ? u.formatGoInput() : u.formatGoInput,
      A = t.isFunction(u.formatGoButton) ? u.formatGoButton() : u.formatGoButton,
      E = t.isFunction(u.autoHidePrevious) ? u.autoHidePrevious() : u.autoHidePrevious,
      j = t.isFunction(u.autoHideNext) ? u.autoHideNext() : u.autoHideNext,
      F = t.isFunction(u.header) ? u.header() : u.header,
      L = t.isFunction(u.footer) ? u.footer() : u.footer,
      _ = "",
      N = '<input type="button" class="J-paginationjs-go-button" value="' + x + '">';
     if (F && (i = o.replaceVariables(F, {
       currentPage: r,
       totalPage: s,
       totalNumber: c
      }), _ += i), d || p || h) {
      if (_ += '<div class="paginationjs-pages">', _ += S ? '<ul class="' + S + '">' : "<ul>", d && (1 === r ? E || (_ += '<li class="' + C + "-prev " + T + '"><a>' + y + "</a></li>") : _ += '<li class="' + C + '-prev J-paginationjs-previous" data-num="' + (r - 1) + '" title="Назад"><a href="' + g + '">' + y + "</a></li>"), p) {
       if (3 >= a)
        for (n = 1; a > n; n++) _ += n == r ? '<li class="' + C + "-page J-paginationjs-page " + k + '" data-num="' + n + '"><a>' + n + "</a></li>" : '<li class="' + C + '-page J-paginationjs-page" data-num="' + n + '"><a href="' + g + '">' + n + "</a></li>";
       else u.showFirstOnEllipsisShow && (_ += '<li class="' + C + "-page " + C + '-first J-paginationjs-page" data-num="1"><a href="' + g + '">1</a></li>'), _ += '<li class="' + C + "-ellipsis " + T + '"><a>' + w + "</a></li>";
       for (n = a; l >= n; n++) _ += n == r ? '<li class="' + C + "-page J-paginationjs-page " + k + '" data-num="' + n + '"><a>' + n + "</a></li>" : '<li class="' + C + '-page J-paginationjs-page" data-num="' + n + '"><a href="' + g + '">' + n + "</a></li>";
       if (l >= s - 2)
        for (n = l + 1; s >= n; n++) _ += '<li class="' + C + '-page J-paginationjs-page" data-num="' + n + '"><a href="' + g + '">' + n + "</a></li>";
       else _ += '<li class="' + C + "-ellipsis " + T + '"><a>' + w + "</a></li>", u.showLastOnEllipsisShow && (_ += '<li class="' + C + "-page " + C + '-last J-paginationjs-page" data-num="' + s + '"><a href="' + g + '">' + s + "</a></li>")
      }
      h && (r == s ? j || (_ += '<li class="' + C + "-next " + T + '"><a>' + b + "</a></li>") : _ += '<li class="' + C + '-next J-paginationjs-next" data-num="' + (r + 1) + '" title="Вперед"><a href="' + g + '">' + b + "</a></li>"), _ += "</ul></div>"
     }
     return f && $ && (i = o.replaceVariables($, {
      currentPage: r,
      totalPage: s,
      totalNumber: c
     }), _ += '<div class="' + C + '-nav J-paginationjs-nav">' + i + "</div>"), m && P && (i = o.replaceVariables(P, {
      currentPage: r,
      totalPage: s,
      totalNumber: c,
      input: '<input type="text" class="J-paginationjs-go-pagenumber">'
     }), _ += '<div class="' + C + '-go-input">' + i + "</div>"), v && A && (i = o.replaceVariables(A, {
      currentPage: r,
      totalPage: s,
      totalNumber: c,
      button: N
     }), _ += '<div class="' + C + '-go-button">' + i + "</div>"), L && (i = o.replaceVariables(L, {
      currentPage: r,
      totalPage: s,
      totalNumber: c
     }), _ += i), _
    },
    go: function(e, i) {
     function n(e) {
      if (!1 === o.callHook("beforePaging", a)) return !1;
      if (r.direction = void 0 === r.pageNumber ? 0 : a > r.pageNumber ? 1 : -1, r.pageNumber = a, o.render(), o.disabled && !o.sync && o.enable(), s.data("pagination").model = r, t.isFunction(u.formatResult)) {
       var n = t.extend(!0, [], e);
       l.isArray(e = u.formatResult(n)) || (e = n)
      }
      s.data("pagination").currentPageData = e, o.doCallback(e, i), o.callHook("afterPaging", a), 1 == a && o.callHook("afterIsFirstPage"), a == r.totalPage && o.callHook("afterIsLastPage")
     }
     var o = this,
      r = o.model;
     if (!o.disabled) {
      var a = e,
       c = u.pageSize,
       d = r.totalPage;
      if (!(!(a = parseInt(a)) || 1 > a || a > d)) {
       if (o.sync) return void n(o.getDataSegment(a));
       var h = {},
        p = u.alias || {};
       h[p.pageSize ? p.pageSize : "pageSize"] = c, h[p.pageNumber ? p.pageNumber : "pageNumber"] = a;
       var f = {
        type: "get",
        cache: !1,
        data: {},
        contentType: "application/x-www-form-urlencoded; charset=UTF-8",
        dataType: "json",
        async: !0
       };
       t.extend(!0, f, u.ajax), t.extend(f.data || {}, h), f.url = u.dataSource, f.success = function(e) {
        n(o.filterDataByLocator(e))
       }, f.error = function(e, t, i) {
        u.formatAjaxError && u.formatAjaxError(e, t, i), o.enable()
       }, o.disable(), t.ajax(f)
      }
     }
    },
    doCallback: function(e, i) {
     var n = this,
      o = n.model;
     t.isFunction(i) ? i(e, o) : t.isFunction(u.callback) && u.callback(e, o)
    },
    destroy: function() {
     !1 !== this.callHook("beforeDestroy") && (this.model.el.remove(), s.off(), t("#paginationjs-style").remove(), this.callHook("afterDestroy"))
    },
    previous: function(e) {
     this.go(this.model.pageNumber - 1, e)
    },
    next: function(e) {
     this.go(this.model.pageNumber + 1, e)
    },
    disable: function() {
     var e = this,
      t = e.sync ? "sync" : "async";
     !1 !== e.callHook("beforeDisable", t) && (e.disabled = !0, e.model.disabled = !0, e.callHook("afterDisable", t))
    },
    enable: function() {
     var e = this,
      t = e.sync ? "sync" : "async";
     !1 !== e.callHook("beforeEnable", t) && (e.disabled = !1, e.model.disabled = !1, e.callHook("afterEnable", t))
    },
    refresh: function(e) {
     this.go(this.model.pageNumber, e)
    },
    show: function() {
     var e = this;
     e.model.el.is(":visible") || e.model.el.show()
    },
    hide: function() {
     var e = this;
     e.model.el.is(":visible") && e.model.el.hide()
    },
    replaceVariables: function(e, t) {
     var i;
     for (var n in t) {
      var o = t[n],
       r = new RegExp("<%=\\s*"+n+"\\s*%>", "img");
      i = (i || e).replace(r, o)
     }
     return i
    },
    getDataSegment: function(e) {
     var t = u.pageSize,
      i = u.dataSource,
      n = u.totalNumber,
      o = t * (e - 1) + 1,
      r = Math.min(e * t, n);
     return i.slice(o - 1, r)
    },
    getTotalPage: function() {
     return Math.ceil(u.totalNumber / u.pageSize)
    },
    getLocator: function(e) {
     var n;
     return "string" == typeof e ? n = e : t.isFunction(e) ? n = e() : i('"locator" is incorrect. (String | Function)'), n
    },
    filterDataByLocator: function(e) {
     var n, o = this.getLocator(u.locator);
     if (l.isObject(e)) {
      try {
       t.each(o.split("."), function(t, i) {
        n = (n || e)[i]
       })
      } catch (e) {}
      n ? l.isArray(n) || i("dataSource." + o + " must be an Array.") : i("dataSource." + o + " is undefined.")
     }
     return n || e
    },
    parseDataSource: function(e, n) {
     var o = this,
      r = arguments;
     l.isObject(e) ? n(u.dataSource = o.filterDataByLocator(e)) : l.isArray(e) ? n(u.dataSource = e) : t.isFunction(e) ? u.dataSource(function(e) {
      t.isFunction(e) && i('Unexpect parameter of the "done" Function.'), r.callee.call(o, e, n)
     }) : "string" == typeof e ? (/^https?|file:/.test(e) && (u.ajaxDataType = "jsonp"), n(e)) : i('Unexpect data type of the "dataSource".')
    },
    callHook: function(i) {
     var n, o = s.data("pagination"),
      r = Array.prototype.slice.apply(arguments);
     return r.shift(), u[i] && t.isFunction(u[i]) && !1 === u[i].apply(e, r) && (n = !1), o.hooks && o.hooks[i] && t.each(o.hooks[i], function(t, i) {
      !1 === i.apply(e, r) && (n = !1)
     }), !1 !== n
    },
    observer: function() {
     var e = this,
      n = e.model.el;
     s.on(a + "go", function(n, o, r) {
      (o = parseInt(t.trim(o))) && (t.isNumeric(o) || i('"pageNumber" is incorrect. (Number)'), e.go(o, r))
     }), n.delegate(".J-paginationjs-page", "click", function(i) {
      var n = t(i.currentTarget),
       o = t.trim(n.attr("data-num"));
      return !o || n.hasClass(u.disableClassName) || n.hasClass(u.activeClassName) ? void 0 : !1 !== e.callHook("beforePageOnClick", i, o) && (e.go(o), e.callHook("afterPageOnClick", i, o), !!u.pageLink && void 0)
     }), n.delegate(".J-paginationjs-previous", "click", function(i) {
      var n = t(i.currentTarget),
       o = t.trim(n.attr("data-num"));
      return o && !n.hasClass(u.disableClassName) ? !1 !== e.callHook("beforePreviousOnClick", i, o) && (e.go(o), e.callHook("afterPreviousOnClick", i, o), !!u.pageLink && void 0) : void 0
     }), n.delegate(".J-paginationjs-next", "click", function(i) {
      var n = t(i.currentTarget),
       o = t.trim(n.attr("data-num"));
      return o && !n.hasClass(u.disableClassName) ? !1 !== e.callHook("beforeNextOnClick", i, o) && (e.go(o), e.callHook("afterNextOnClick", i, o), !!u.pageLink && void 0) : void 0
     }), n.delegate(".J-paginationjs-go-button", "click", function() {
      var i = t(".J-paginationjs-go-pagenumber", n).val();
      return !1 !== e.callHook("beforeGoButtonOnClick", event, i) && (s.trigger(a + "go", i), void e.callHook("afterGoButtonOnClick", event, i))
     }), n.delegate(".J-paginationjs-go-pagenumber", "keyup", function(i) {
      if (13 === i.which) {
       var o = t(i.currentTarget).val();
       if (!1 === e.callHook("beforeGoInputOnEnter", i, o)) return !1;
       s.trigger(a + "go", o), t(".J-paginationjs-go-pagenumber", n).focus(), e.callHook("afterGoInputOnEnter", i, o)
      }
     }), s.on(a + "previous", function(t, i) {
      e.previous(i)
     }), s.on(a + "next", function(t, i) {
      e.next(i)
     }), s.on(a + "disable", function() {
      e.disable()
     }), s.on(a + "enable", function() {
      e.enable()
     }), s.on(a + "refresh", function(t, i) {
      e.refresh(i)
     }), s.on(a + "show", function() {
      e.show()
     }), s.on(a + "hide", function() {
      e.hide()
     }), s.on(a + "destroy", function() {
      e.destroy()
     }), u.triggerPagingOnInit && s.trigger(a + "go", Math.min(u.pageNumber, e.model.totalPage))
    }
   };
  if (s.data("pagination") && !0 === s.data("pagination").initialized) {
   if (t.isNumeric(r)) return s.trigger.call(this, a + "go", r, arguments[1]), this;
   if ("string" == typeof r) {
    var d = Array.prototype.slice.apply(arguments);
    switch (d[0] = a + d[0], r) {
     case "previous":
     case "next":
     case "go":
     case "disable":
     case "enable":
     case "refresh":
     case "show":
     case "hide":
     case "destroy":
      s.trigger.apply(this, d);
      break;
     case "getSelectedPageNum":
      return s.data("pagination").model ? s.data("pagination").model.pageNumber : s.data("pagination").attributes.pageNumber;
     case "getTotalPage":
      return s.data("pagination").model.totalPage;
     case "getSelectedPageData":
      return s.data("pagination").currentPageData;
     case "isDisabled":
      return !0 === s.data("pagination").model.disabled;
     default:
      i("Pagination do not provide action: " + r)
    }
    return this
   }
   o(s)
  } else l.isObject(r) || i("Illegal options");
  var u = t.extend({}, arguments.callee.defaults, r);
  return n(u), c.initialize(), this
 }, t.fn[s].defaults = {
  totalNumber: 1,
  pageNumber: 1,
  pageSize: 10,
  pageRange: 2,
  showPrevious: !0,
  showNext: !0,
  showPageNumbers: !0,
  showNavigator: !1,
  showGoInput: !1,
  showGoButton: !1,
  pageLink: "",
  prevText: "&laquo;",
  nextText: "&raquo;",
  ellipsisText: "...",
  goButtonText: "Go",
  classPrefix: "paginationjs",
  activeClassName: "active",
  disableClassName: "disabled",
  inlineStyle: !0,
  formatNavigator: "<%= currentPage %> / <%= totalPage %>",
  formatGoInput: "<%= input %>",
  formatGoButton: "<%= button %>",
  position: "bottom",
  autoHidePrevious: !1,
  autoHideNext: !1,
  triggerPagingOnInit: !0,
  hideWhenLessThanOnePage: !1,
  showFirstOnEllipsisShow: !0,
  showLastOnEllipsisShow: !0,
  callback: function() {}
 }, t.fn.addHook = function(e, n) {
  arguments.length < 2 && i("Missing argument."), t.isFunction(n) || i("callback must be a function.");
  var o = t(this),
   r = o.data("pagination");
  r || (o.data("pagination", {}), r = o.data("pagination")), !r.hooks && (r.hooks = {}), r.hooks[e] = r.hooks[e] || [], r.hooks[e].push(n)
 }, t[s] = function(e, n) {
  arguments.length < 2 && i("Requires two parameters.");
  var o;
  return o = "string" != typeof e && e instanceof jQuery ? e : t(e), o.length ? (o.pagination(n), o) : void 0
 };
 var l = {};
 t.each(["Object", "Array"], function(e, t) {
  l["is" + t] = function(e) {
   return r(e) === t.toLowerCase()
  }
 }), "function" == typeof define && define.amd && define(function() {
  return t
 })
}(this, window.jQuery),
function(e, t) {
 "object" == typeof exports && "undefined" != typeof module ? module.exports = t() : "function" == typeof define && define.amd ? define(t) : e.reframe = t()
}(this, function() {
 "use strict";

 function e(e, t) {
  var i = "string" == typeof e ? document.querySelectorAll(e) : e;
  "length" in i || (i = [i]);
  for (var n = t || "js-reframe", o = 0; o < i.length; o++) {
   var r = i[o];
   if (-1 !== r.className.split(" ").indexOf(n)) return;
   var s = r.offsetHeight,
    a = r.offsetWidth,
    l = s / a * 100,
    c = document.createElement("div");
   c.className = n, c.style.position = "relative", c.style.width = "100%", c.style.paddingTop = l + "%", r.style.position = "absolute", r.style.width = r.style.height = "100%", r.style.left = r.style.top = "0", r.parentNode.insertBefore(c, r), r.parentNode.removeChild(r), c.appendChild(r)
  }
 }
 if ("undefined" != typeof window) {
  var t = window.$ || window.jQuery || window.Zepto;
  t && (t.fn.reframe = function(t) {
   e(this, t)
  })
 }
 return e
}),
function(e, t, i) {
 "use strict";

 function n(i) {
  if (o = t.documentElement, r = t.body, V(), oe = this, i = i || {}, ce = i.constants || {}, i.easing)
   for (var n in i.easing) B[n] = i.easing[n];
  ve = i.edgeStrategy || "set", ae = {
   beforerender: i.beforerender,
   render: i.render,
   keyframe: i.keyframe
  }, le = !1 !== i.forceHeight, le && (_e = i.scale || 1), de = i.mobileDeceleration || k, he = !1 !== i.smoothScrolling, pe = i.smoothScrollingDuration || S, fe = {
   targetTop: oe.getScrollTop()
  }, Re = (i.mobileCheck || function() {
   return /Android|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent || navigator.vendor || e.opera)
  })(), Re ? (se = t.getElementById(i.skrollrBody || T), se && ne(), U(), Pe(o, [y, x], [b])) : Pe(o, [y, w], [b]), oe.refresh(), be(e, "resize orientationchange", function() {
   var e = o.clientWidth,
    t = o.clientHeight;
   t === Ie && e === He || (Ie = t, He = e, Oe = !0)
  });
  var s = q();
  return function e() {
   Y(), ye = s(e)
  }(), oe
 }
 var o, r, s = {
   get: function() {
    return oe
   },
   init: function(e) {
    return oe || new n(e)
   },
   VERSION: "0.6.30"
  },
  a = Object.prototype.hasOwnProperty,
  l = e.Math,
  c = e.getComputedStyle,
  d = "touchstart",
  u = "touchmove",
  h = "touchcancel",
  p = "touchend",
  f = "skrollable",
  m = f + "-before",
  v = f + "-between",
  g = f + "-after",
  y = "skrollr",
  b = "no-" + y,
  w = y + "-desktop",
  x = y + "-mobile",
  C = "linear",
  k = .004,
  T = "skrollr-body",
  S = 200,
  $ = "center",
  P = "bottom",
  A = "___skrollable_id",
  E = /^(?:input|textarea|button|select)$/i,
  j = /^\s+|\s+$/g,
  F = /^data(?:-(_\w+))?(?:-?(-?\d*\.?\d+p?))?(?:-?(start|end|top|center|bottom))?(?:-?(top|center|bottom))?$/,
  L = /\s*(@?[\w\-\[\]]+)\s*:\s*(.+?)\s*(?:;|$)/gi,
  _ = /^(@?[a-z\-]+)\[(\w+)\]$/,
  N = /-([a-z0-9_])/g,
  D = function(e, t) {
   return t.toUpperCase()
  },
  M = /[\-+]?[\d]*\.?[\d]+/g,
  H = /\{\?\}/g,
  I = /rgba?\(\s*-?\d+\s*,\s*-?\d+\s*,\s*-?\d+/g,
  O = /[a-z\-]+-gradient/g,
  z = "",
  R = "",
  V = function() {
   var e = /^(?:O|Moz|webkit|ms)|(?:-(?:o|moz|webkit|ms)-)/;
   if (c) {
    var t = c(r, null);
    for (var i in t)
     if (z = i.match(e) || +i == i && t[i].match(e)) break;
    if (!z) return void(z = R = "");
    z = z[0], "-" === z.slice(0, 1) ? (R = z, z = {
     "-webkit-": "webkit",
     "-moz-": "Moz",
     "-ms-": "ms",
     "-o-": "O"
    } [z]) : R = "-" + z.toLowerCase() + "-"
   }
  },
  q = function() {
   var t = e.requestAnimationFrame || e[z.toLowerCase() + "RequestAnimationFrame"],
    i = je();
   return !Re && t || (t = function(t) {
    var n = je() - i,
     o = l.max(0, 1e3 / 60 - n);
    return e.setTimeout(function() {
     i = je(), t()
    }, o)
   }), t
  },
  W = function() {
   var t = e.cancelAnimationFrame || e[z.toLowerCase() + "CancelAnimationFrame"];
   return !Re && t || (t = function(t) {
    return e.clearTimeout(t)
   }), t
  },
  B = {
   begin: function() {
    return 0
   },
   end: function() {
    return 1
   },
   linear: function(e) {
    return e
   },
   quadratic: function(e) {
    return e * e
   },
   cubic: function(e) {
    return e * e * e
   },
   swing: function(e) {
    return -l.cos(e * l.PI) / 2 + .5
   },
   sqrt: function(e) {
    return l.sqrt(e)
   },
   outCubic: function(e) {
    return l.pow(e - 1, 3) + 1
   },
   bounce: function(e) {
    var t;
    if (e <= .5083) t = 3;
    else if (e <= .8489) t = 9;
    else if (e <= .96208) t = 27;
    else {
     if (!(e <= .99981)) return 1;
     t = 91
    }
    return 1 - l.abs(3 * l.cos(e * t * 1.028) / t)
   }
  };
 n.prototype.refresh = function(e) {
  var n, o, r = !1;
  for (e === i ? (r = !0, re = [], ze = 0, e = t.getElementsByTagName("*")) : e.length === i && (e = [e]), n = 0, o = e.length; n < o; n++) {
   var s = e[n],
    a = s,
    l = [],
    c = he,
    d = ve,
    u = !1;
   if (r && A in s && delete s[A], s.attributes) {
    for (var h = 0, p = s.attributes.length; h < p; h++) {
     var m = s.attributes[h];
     if ("data-anchor-target" !== m.name)
      if ("data-smooth-scrolling" !== m.name)
       if ("data-edge-strategy" !== m.name)
        if ("data-emit-events" !== m.name) {
         var v = m.name.match(F);
         if (null !== v) {
          var g = {
           props: m.value,
           element: s,
           eventType: m.name.replace(N, D)
          };
          l.push(g);
          var y = v[1];
          y && (g.constant = y.substr(1));
          var b = v[2];
          /p$/.test(b) ? (g.isPercentage = !0, g.offset = (0 | b.slice(0, -1)) / 100) : g.offset = 0 | b;
          var w = v[3],
           x = v[4] || w;
          w && "start" !== w && "end" !== w ? (g.mode = "relative", g.anchors = [w, x]) : (g.mode = "absolute", "end" === w ? g.isEnd = !0 : g.isPercentage || (g.offset = g.offset * _e))
         }
        } else u = !0;
     else d = m.value;
     else c = "off" !== m.value;
     else if (null === (a = t.querySelector(m.value))) throw 'Unable to find anchor target "' + m.value + '"'
    }
    if (l.length) {
     var C, k, T;
     !r && A in s ? (T = s[A], C = re[T].styleAttr, k = re[T].classAttr) : (T = s[A] = ze++, C = s.style.cssText, k = $e(s)), re[T] = {
      element: s,
      styleAttr: C,
      classAttr: k,
      anchorTarget: a,
      keyFrames: l,
      smoothScrolling: c,
      edgeStrategy: d,
      emitEvents: u,
      lastFrameIndex: -1
     }, Pe(s, [f], [])
    }
   }
  }
  for (ke(), n = 0, o = e.length; n < o; n++) {
   var S = re[e[n][A]];
   S !== i && (Z(S), J(S))
  }
  return oe
 }, n.prototype.relativeToAbsolute = function(e, t, i) {
  var n = o.clientHeight,
   r = e.getBoundingClientRect(),
   s = r.top,
   a = r.bottom - r.top;
  return t === P ? s -= n : t === $ && (s -= n / 2), i === P ? s += a : i === $ && (s += a / 2), (s += oe.getScrollTop()) + .5 | 0
 }, n.prototype.animateTo = function(e, t) {
  t = t || {};
  var n = je(),
   o = oe.getScrollTop(),
   r = t.duration === i ? 1e3 : t.duration;
  return ue = {
   startTop: o,
   topDiff: e - o,
   targetTop: e,
   duration: r,
   startTime: n,
   endTime: n + r,
   easing: B[t.easing || C],
   done: t.done
  }, ue.topDiff || (ue.done && ue.done.call(oe, !1), ue = i), oe
 }, n.prototype.stopAnimateTo = function() {
  ue && ue.done && ue.done.call(oe, !0), ue = i
 }, n.prototype.isAnimatingTo = function() {
  return !!ue
 }, n.prototype.isMobile = function() {
  return Re
 }, n.prototype.setScrollTop = function(t, i) {
  return me = !0 === i, Re ? Ve = l.min(l.max(t, 0), Le) : e.scrollTo(0, t), oe
 }, n.prototype.getScrollTop = function() {
  return Re ? Ve : e.pageYOffset || o.scrollTop || r.scrollTop || 0
 }, n.prototype.getMaxScrollTop = function() {
  return Le
 }, n.prototype.on = function(e, t) {
  return ae[e] = t, oe
 }, n.prototype.off = function(e) {
  return delete ae[e], oe
 }, n.prototype.destroy = function() {
  W()(ye), xe(), Pe(o, [b], [y, w, x]);
  for (var e = 0, t = re.length; e < t; e++) ie(re[e].element);
  o.style.overflow = r.style.overflow = "", o.style.height = r.style.height = "", se && s.setStyle(se, "transform", "none"), oe = i, se = i, ae = i, le = i, Le = 0, _e = 1, ce = i, de = i, Ne = "down", De = -1, He = 0, Ie = 0, Oe = !1, ue = i, he = i, pe = i, fe = i, me = i, ze = 0, ve = i, Re = !1, Ve = 0, ge = i
 };
 var U = function() {
   var n, s, a, c, f, m, v, g, y, b, w, x;
   be(o, [d, u, h, p].join(" "), function(e) {
    var o = e.changedTouches[0];
    for (c = e.target; 3 === c.nodeType;) c = c.parentNode;
    switch (f = o.clientY, m = o.clientX, b = e.timeStamp, E.test(c.tagName) || e.preventDefault(), e.type) {
     case d:
      n && n.blur(), oe.stopAnimateTo(), n = c, s = v = f, a = m, y = b;
      break;
     case u:
      E.test(c.tagName) && t.activeElement !== c && e.preventDefault(), g = f - v, x = b - w, oe.setScrollTop(Ve - g, !0), v = f, w = b;
      break;
     default:
     case h:
     case p:
      var r = s - f,
       C = a - m;
      if (C * C + r * r < 49) {
       if (!E.test(n.tagName)) {
        n.focus();
        var k = t.createEvent("MouseEvents");
        k.initMouseEvent("click", !0, !0, e.view, 1, o.screenX, o.screenY, o.clientX, o.clientY, e.ctrlKey, e.altKey, e.shiftKey, e.metaKey, 0, null), n.dispatchEvent(k)
       }
       return
      }
      n = i;
      var T = g / x;
      T = l.max(l.min(T, 3), -3);
      var S = l.abs(T / de),
       $ = T * S + .5 * de * S * S,
       P = oe.getScrollTop() - $,
       A = 0;
      P > Le ? (A = (Le - P) / $, P = Le) : P < 0 && (A = -P / $, P = 0), S *= 1 - A, oe.animateTo(P + .5 | 0, {
       easing: "outCubic",
       duration: S
      })
    }
   }), e.scrollTo(0, 0), o.style.overflow = r.style.overflow = "hidden"
  },
  Q = function() {
   var e, t, i, n, r, s, a, c, d, u, h, p = o.clientHeight,
    f = Te();
   for (c = 0, d = re.length; c < d; c++)
    for (e = re[c], t = e.element, i = e.anchorTarget, n = e.keyFrames, r = 0, s = n.length; r < s; r++) a = n[r], u = a.offset, h = f[a.constant] || 0, a.frame = u, a.isPercentage && (u *= p, a.frame = u), "relative" === a.mode && (ie(t), a.frame = oe.relativeToAbsolute(i, a.anchors[0], a.anchors[1]) - u, ie(t, !0)), a.frame += h, le && !a.isEnd && a.frame > Le && (Le = a.frame);
   for (Le = l.max(Le, Se()), c = 0, d = re.length; c < d; c++) {
    for (e = re[c], n = e.keyFrames, r = 0, s = n.length; r < s; r++) a = n[r], h = f[a.constant] || 0, a.isEnd && (a.frame = Le - a.offset + h);
    e.keyFrames.sort(Fe)
   }
  },
  X = function(e, t) {
   for (var i = 0, n = re.length; i < n; i++) {
    var o, r, l = re[i],
     c = l.element,
     d = l.smoothScrolling ? e : t,
     u = l.keyFrames,
     h = u.length,
     p = u[0],
     y = u[u.length - 1],
     b = d < p.frame,
     w = d > y.frame,
     x = b ? p : y,
     C = l.emitEvents,
     k = l.lastFrameIndex;
    if (b || w) {
     if (b && -1 === l.edge || w && 1 === l.edge) continue;
     switch (b ? (Pe(c, [m], [g, v]), C && k > -1 && (Ce(c, p.eventType, Ne), l.lastFrameIndex = -1)) : (Pe(c, [g], [m, v]), C && k < h && (Ce(c, y.eventType, Ne), l.lastFrameIndex = h)), l.edge = b ? -1 : 1, l.edgeStrategy) {
      case "reset":
       ie(c);
       continue;
      case "ease":
       d = x.frame;
       break;
      default:
      case "set":
       var T = x.props;
       for (o in T) a.call(T, o) && (r = te(T[o].value), 0 === o.indexOf("@") ? c.setAttribute(o.substr(1), r) : s.setStyle(c, o, r));
       continue
     }
    } else 0 !== l.edge && (Pe(c, [f, v], [m, g]), l.edge = 0);
    for (var S = 0; S < h - 1; S++)
     if (d >= u[S].frame && d <= u[S + 1].frame) {
      var $ = u[S],
       P = u[S + 1];
      for (o in $.props)
       if (a.call($.props, o)) {
        var A = (d - $.frame) / (P.frame - $.frame);
        A = $.props[o].easing(A), r = ee($.props[o].value, P.props[o].value, A), r = te(r), 0 === o.indexOf("@") ? c.setAttribute(o.substr(1), r) : s.setStyle(c, o, r)
       } C && k !== S && ("down" === Ne ? Ce(c, $.eventType, Ne) : Ce(c, P.eventType, Ne), l.lastFrameIndex = S);
      break
     }
   }
  },
  Y = function() {
   Oe && (Oe = !1, ke());
   var e, t, n = oe.getScrollTop(),
    o = je();
   if (ue) o >= ue.endTime ? (n = ue.targetTop, e = ue.done, ue = i) : (t = ue.easing((o - ue.startTime) / ue.duration), n = ue.startTop + t * ue.topDiff | 0), oe.setScrollTop(n, !0);
   else if (!me) {
    var r = fe.targetTop - n;
    r && (fe = {
     startTop: De,
     topDiff: n - De,
     targetTop: n,
     startTime: Me,
     endTime: Me + pe
    }), o <= fe.endTime && (t = B.sqrt((o - fe.startTime) / pe), n = fe.startTop + t * fe.topDiff | 0)
   }
   if (me || De !== n) {
    Ne = n > De ? "down" : n < De ? "up" : Ne, me = !1;
    var a = {
     curTop: n,
     lastTop: De,
     maxTop: Le,
     direction: Ne
    };
    !1 !== (ae.beforerender && ae.beforerender.call(oe, a)) && (X(n, oe.getScrollTop()), Re && se && s.setStyle(se, "transform", "translate(0, " + -Ve + "px) " + ge), De = n, ae.render && ae.render.call(oe, a)), e && e.call(oe, !1)
   }
   Me = o
  },
  Z = function(e) {
   for (var t = 0, i = e.keyFrames.length; t < i; t++) {
    for (var n, o, r, s, a = e.keyFrames[t], l = {}; null !== (s = L.exec(a.props));) r = s[1], o = s[2], n = r.match(_), null !== n ? (r = n[1], n = n[2]) : n = C, o = o.indexOf("!") ? G(o) : [o.slice(1)], l[r] = {
     value: o,
     easing: B[n]
    };
    a.props = l
   }
  },
  G = function(e) {
   var t = [];
   return I.lastIndex = 0, e = e.replace(I, function(e) {
    return e.replace(M, function(e) {
     return e / 255 * 100 + "%"
    })
   }), R && (O.lastIndex = 0, e = e.replace(O, function(e) {
    return R + e
   })), e = e.replace(M, function(e) {
    return t.push(+e), "{?}"
   }), t.unshift(e), t
  },
  J = function(e) {
   var t, i, n = {};
   for (t = 0, i = e.keyFrames.length; t < i; t++) K(e.keyFrames[t], n);
   for (n = {}, t = e.keyFrames.length - 1; t >= 0; t--) K(e.keyFrames[t], n)
  },
  K = function(e, t) {
   var i;
   for (i in t) a.call(e.props, i) || (e.props[i] = t[i]);
   for (i in e.props) t[i] = e.props[i]
  },
  ee = function(e, t, i) {
   var n, o = e.length;
   if (o !== t.length) throw "Can't interpolate between \"" + e[0] + '" and "' + t[0] + '"';
   var r = [e[0]];
   for (n = 1; n < o; n++) r[n] = e[n] + (t[n] - e[n]) * i;
   return r
  },
  te = function(e) {
   var t = 1;
   return H.lastIndex = 0, e[0].replace(H, function() {
    return e[t++]
   })
  },
  ie = function(e, t) {
   e = [].concat(e);
   for (var i, n, o = 0, r = e.length; o < r; o++) n = e[o], (i = re[n[A]]) && (t ? (n.style.cssText = i.dirtyStyleAttr, Pe(n, i.dirtyClassAttr)) : (i.dirtyStyleAttr = n.style.cssText, i.dirtyClassAttr = $e(n), n.style.cssText = i.styleAttr, Pe(n, i.classAttr)))
  },
  ne = function() {
   ge = "translateZ(0)", s.setStyle(se, "transform", ge);
   var e = c(se),
    t = e.getPropertyValue("transform"),
    i = e.getPropertyValue(R + "transform");
   t && "none" !== t || i && "none" !== i || (ge = "")
  };
 s.setStyle = function(e, t, i) {
  var n = e.style;
  if ("zIndex" === (t = t.replace(N, D).replace("-", ""))) isNaN(i) ? n[t] = i : n[t] = "" + (0 | i);
  else if ("float" === t) n.styleFloat = n.cssFloat = i;
  else try {
   z && (n[z + t.slice(0, 1).toUpperCase() + t.slice(1)] = i), n[t] = i
  } catch (e) {}
 };
 var oe, re, se, ae, le, ce, de, ue, he, pe, fe, me, ve, ge, ye, be = s.addEvent = function(t, i, n) {
   var o = function(t) {
    return t = t || e.event, t.target || (t.target = t.srcElement), t.preventDefault || (t.preventDefault = function() {
     t.returnValue = !1, t.defaultPrevented = !0
    }), n.call(this, t)
   };
   i = i.split(" ");
   for (var r, s = 0, a = i.length; s < a; s++) r = i[s], t.addEventListener ? t.addEventListener(r, n, !1) : t.attachEvent("on" + r, o), qe.push({
    element: t,
    name: r,
    listener: n
   })
  },
  we = s.removeEvent = function(e, t, i) {
   t = t.split(" ");
   for (var n = 0, o = t.length; n < o; n++) e.removeEventListener ? e.removeEventListener(t[n], i, !1) : e.detachEvent("on" + t[n], i)
  },
  xe = function() {
   for (var e, t = 0, i = qe.length; t < i; t++) e = qe[t], we(e.element, e.name, e.listener);
   qe = []
  },
  Ce = function(e, t, i) {
   ae.keyframe && ae.keyframe.call(oe, e, t, i)
  },
  ke = function() {
   var e = oe.getScrollTop();
   Le = 0, le && !Re && (r.style.height = ""), Q(), le && !Re && (r.style.height = Le + o.clientHeight + "px"), Re ? oe.setScrollTop(l.min(oe.getScrollTop(), Le)) : oe.setScrollTop(e, !0), me = !0
  },
  Te = function() {
   var e, t, i = o.clientHeight,
    n = {};
   for (e in ce) t = ce[e], "function" == typeof t ? t = t.call(oe) : /p$/.test(t) && (t = t.slice(0, -1) / 100 * i), n[e] = t;
   return n
  },
  Se = function() {
   var e = 0;
   return se && (e = l.max(se.offsetHeight, se.scrollHeight)), l.max(e, r.scrollHeight, r.offsetHeight, o.scrollHeight, o.offsetHeight, o.clientHeight) - o.clientHeight
  },
  $e = function(t) {
   var i = "className";
   return e.SVGElement && t instanceof e.SVGElement && (t = t[i], i = "baseVal"), t[i]
  },
  Pe = function(t, n, o) {
   var r = "className";
   if (e.SVGElement && t instanceof e.SVGElement && (t = t[r], r = "baseVal"), o === i) return void(t[r] = n);
   for (var s = t[r], a = 0, l = o.length; a < l; a++) s = Ee(s).replace(Ee(o[a]), " ");
   s = Ae(s);
   for (var c = 0, d = n.length; c < d; c++) - 1 === Ee(s).indexOf(Ee(n[c])) && (s += " " + n[c]);
   t[r] = Ae(s)
  },
  Ae = function(e) {
   return e.replace(j, "")
  },
  Ee = function(e) {
   return " " + e + " "
  },
  je = Date.now || function() {
   return +new Date
  },
  Fe = function(e, t) {
   return e.frame - t.frame
  },
  Le = 0,
  _e = 1,
  Ne = "down",
  De = -1,
  Me = je(),
  He = 0,
  Ie = 0,
  Oe = !1,
  ze = 0,
  Re = !1,
  Ve = 0,
  qe = [];
 "function" == typeof define && define.amd ? define([], function() {
  return s
 }) : "undefined" != typeof module && module.exports ? module.exports = s : e.skrollr = s
}(window, document),
function(e) {
 "use strict";
 "function" == typeof define && define.amd ? define(["jquery"], e) : "undefined" != typeof exports ? module.exports = e(require("jquery")) : e(jQuery)
}(function(e) {
 "use strict";
 var t = window.Slick || {};
 t = function() {
  function t(t, n) {
   var o, r = this;
   r.defaults = {
    accessibility: !0,
    adaptiveHeight: !1,
    appendArrows: e(t),
    appendDots: e(t),
    arrows: !0,
    asNavFor: null,
    prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="0" role="button">Previous</button>',
    nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button">Next</button>',
    autoplay: !1,
    autoplaySpeed: 3e3,
    centerMode: !1,
    centerPadding: "50px",
    cssEase: "ease",
    customPaging: function(t, i) {
     return e('<button type="button" data-role="none" role="button" tabindex="0" />').text(i + 1)
    },
    dots: !1,
    dotsClass: "slick-dots",
    draggable: !0,
    easing: "linear",
    edgeFriction: .35,
    fade: !1,
    focusOnSelect: !1,
    infinite: !0,
    initialSlide: 0,
    lazyLoad: "ondemand",
    mobileFirst: !1,
    pauseOnHover: !0,
    pauseOnFocus: !0,
    pauseOnDotsHover: !1,
    respondTo: "window",
    responsive: null,
    rows: 1,
    rtl: !1,
    slide: "",
    slidesPerRow: 1,
    slidesToShow: 1,
    slidesToScroll: 1,
    speed: 500,
    swipe: !0,
    swipeToSlide: !1,
    touchMove: !0,
    touchThreshold: 5,
    useCSS: !0,
    useTransform: !0,
    variableWidth: !1,
    vertical: !1,
    verticalSwiping: !1,
    waitForAnimate: !0,
    zIndex: 1e3
   }, r.initials = {
    animating: !1,
    dragging: !1,
    autoPlayTimer: null,
    currentDirection: 0,
    currentLeft: null,
    currentSlide: 0,
    direction: 1,
    $dots: null,
    listWidth: null,
    listHeight: null,
    loadIndex: 0,
    $nextArrow: null,
    $prevArrow: null,
    slideCount: null,
    slideWidth: null,
    $slideTrack: null,
    $slides: null,
    sliding: !1,
    slideOffset: 0,
    swipeLeft: null,
    $list: null,
    touchObject: {},
    transformsEnabled: !1,
    unslicked: !1
   }, e.extend(r, r.initials), r.activeBreakpoint = null, r.animType = null, r.animProp = null, r.breakpoints = [], r.breakpointSettings = [], r.cssTransitions = !1, r.focussed = !1, r.interrupted = !1, r.hidden = "hidden", r.paused = !0, r.positionProp = null, r.respondTo = null, r.rowCount = 1, r.shouldClick = !0, r.$slider = e(t), r.$slidesCache = null, r.transformType = null, r.transitionType = null, r.visibilityChange = "visibilitychange", r.windowWidth = 0, r.windowTimer = null, o = e(t).data("slick") || {}, r.options = e.extend({}, r.defaults, n, o), r.currentSlide = r.options.initialSlide, r.originalSettings = r.options, void 0 !== document.mozHidden ? (r.hidden = "mozHidden", r.visibilityChange = "mozvisibilitychange") : void 0 !== document.webkitHidden && (r.hidden = "webkitHidden", r.visibilityChange = "webkitvisibilitychange"), r.autoPlay = e.proxy(r.autoPlay, r), r.autoPlayClear = e.proxy(r.autoPlayClear, r), r.autoPlayIterator = e.proxy(r.autoPlayIterator, r), r.changeSlide = e.proxy(r.changeSlide, r), r.clickHandler = e.proxy(r.clickHandler, r), r.selectHandler = e.proxy(r.selectHandler, r), r.setPosition = e.proxy(r.setPosition, r), r.swipeHandler = e.proxy(r.swipeHandler, r), r.dragHandler = e.proxy(r.dragHandler, r), r.keyHandler = e.proxy(r.keyHandler, r), r.instanceUid = i++, r.htmlExpr = /^(?:\s*(<[\w\W]+>)[^>]*)$/, r.registerBreakpoints(), r.init(!0)
  }
  var i = 0;
  return t
 }(), t.prototype.activateADA = function() {
  this.$slideTrack.find(".slick-active").attr({
   "aria-hidden": "false"
  }).find("a, input, button, select").attr({
   tabindex: "0"
  })
 }, t.prototype.addSlide = t.prototype.slickAdd = function(t, i, n) {
  var o = this;
  if ("boolean" == typeof i) n = i, i = null;
  else if (0 > i || i >= o.slideCount) return !1;
  o.unload(), "number" == typeof i ? 0 === i && 0 === o.$slides.length ? e(t).appendTo(o.$slideTrack) : n ? e(t).insertBefore(o.$slides.eq(i)) : e(t).insertAfter(o.$slides.eq(i)) : !0 === n ? e(t).prependTo(o.$slideTrack) : e(t).appendTo(o.$slideTrack), o.$slides = o.$slideTrack.children(this.options.slide), o.$slideTrack.children(this.options.slide).detach(), o.$slideTrack.append(o.$slides), o.$slides.each(function(t, i) {
   e(i).attr("data-slick-index", t)
  }), o.$slidesCache = o.$slides, o.reinit()
 }, t.prototype.animateHeight = function() {
  var e = this;
  if (1 === e.options.slidesToShow && !0 === e.options.adaptiveHeight && !1 === e.options.vertical) {
   var t = e.$slides.eq(e.currentSlide).outerHeight(!0);
   e.$list.animate({
    height: t
   }, e.options.speed)
  }
 }, t.prototype.animateSlide = function(t, i) {
  var n = {},
   o = this;
  o.animateHeight(), !0 === o.options.rtl && !1 === o.options.vertical && (t = -t), !1 === o.transformsEnabled ? !1 === o.options.vertical ? o.$slideTrack.animate({
   left: t
  }, o.options.speed, o.options.easing, i) : o.$slideTrack.animate({
   top: t
  }, o.options.speed, o.options.easing, i) : !1 === o.cssTransitions ? (!0 === o.options.rtl && (o.currentLeft = -o.currentLeft), e({
   animStart: o.currentLeft
  }).animate({
   animStart: t
  }, {
   duration: o.options.speed,
   easing: o.options.easing,
   step: function(e) {
    e = Math.ceil(e), !1 === o.options.vertical ? (n[o.animType] = "translate(" + e + "px, 0px)", o.$slideTrack.css(n)) : (n[o.animType] = "translate(0px," + e + "px)", o.$slideTrack.css(n))
   },
   complete: function() {
    i && i.call()
   }
  })) : (o.applyTransition(), t = Math.ceil(t), !1 === o.options.vertical ? n[o.animType] = "translate3d(" + t + "px, 0px, 0px)" : n[o.animType] = "translate3d(0px," + t + "px, 0px)", o.$slideTrack.css(n), i && setTimeout(function() {
   o.disableTransition(), i.call()
  }, o.options.speed))
 }, t.prototype.getNavTarget = function() {
  var t = this,
   i = t.options.asNavFor;
  return i && null !== i && (i = e(i).not(t.$slider)), i
 }, t.prototype.asNavFor = function(t) {
  var i = this,
   n = i.getNavTarget();
  null !== n && "object" == typeof n && n.each(function() {
   var i = e(this).slick("getSlick");
   i.unslicked || i.slideHandler(t, !0)
  })
 }, t.prototype.applyTransition = function(e) {
  var t = this,
   i = {};
  !1 === t.options.fade ? i[t.transitionType] = t.transformType + " " + t.options.speed + "ms " + t.options.cssEase : i[t.transitionType] = "opacity " + t.options.speed + "ms " + t.options.cssEase, !1 === t.options.fade ? t.$slideTrack.css(i) : t.$slides.eq(e).css(i)
 }, t.prototype.autoPlay = function() {
  var e = this;
  e.autoPlayClear(), e.slideCount > e.options.slidesToShow && (e.autoPlayTimer = setInterval(e.autoPlayIterator, e.options.autoplaySpeed))
 }, t.prototype.autoPlayClear = function() {
  var e = this;
  e.autoPlayTimer && clearInterval(e.autoPlayTimer)
 }, t.prototype.autoPlayIterator = function() {
  var e = this,
   t = e.currentSlide + e.options.slidesToScroll;
  e.paused || e.interrupted || e.focussed || (!1 === e.options.infinite && (1 === e.direction && e.currentSlide + 1 === e.slideCount - 1 ? e.direction = 0 : 0 === e.direction && (t = e.currentSlide - e.options.slidesToScroll, e.currentSlide - 1 == 0 && (e.direction = 1))), e.slideHandler(t))
 }, t.prototype.buildArrows = function() {
  var t = this;
  !0 === t.options.arrows && (t.$prevArrow = e(t.options.prevArrow).addClass("slick-arrow"), t.$nextArrow = e(t.options.nextArrow).addClass("slick-arrow"), t.slideCount > t.options.slidesToShow ? (t.$prevArrow.removeClass("slick-hidden").removeAttr("aria-hidden tabindex"), t.$nextArrow.removeClass("slick-hidden").removeAttr("aria-hidden tabindex"), t.htmlExpr.test(t.options.prevArrow) && t.$prevArrow.prependTo(t.options.appendArrows), t.htmlExpr.test(t.options.nextArrow) && t.$nextArrow.appendTo(t.options.appendArrows), !0 !== t.options.infinite && t.$prevArrow.addClass("slick-disabled").attr("aria-disabled", "true")) : t.$prevArrow.add(t.$nextArrow).addClass("slick-hidden").attr({
   "aria-disabled": "true",
   tabindex: "-1"
  }))
 }, t.prototype.buildDots = function() {
  var t, i, n = this;
  if (!0 === n.options.dots && n.slideCount > n.options.slidesToShow) {
   for (n.$slider.addClass("slick-dotted"), i = e("<ul />").addClass(n.options.dotsClass), t = 0; t <= n.getDotCount(); t += 1) i.append(e("<li />").append(n.options.customPaging.call(this, n, t)));
   n.$dots = i.appendTo(n.options.appendDots), n.$dots.find("li").first().addClass("slick-active").attr("aria-hidden", "false")
  }
 }, t.prototype.buildOut = function() {
  var t = this;
  t.$slides = t.$slider.children(t.options.slide + ":not(.slick-cloned)").addClass("slick-slide"), t.slideCount = t.$slides.length, t.$slides.each(function(t, i) {
   e(i).attr("data-slick-index", t).data("originalStyling", e(i).attr("style") || "")
  }), t.$slider.addClass("slick-slider"), t.$slideTrack = 0 === t.slideCount ? e('<div class="slick-track"/>').appendTo(t.$slider) : t.$slides.wrapAll('<div class="slick-track"/>').parent(), t.$list = t.$slideTrack.wrap('<div aria-live="polite" class="slick-list"/>').parent(), t.$slideTrack.css("opacity", 0), (!0 === t.options.centerMode || !0 === t.options.swipeToSlide) && (t.options.slidesToScroll = 1), e("img[data-lazy]", t.$slider).not("[src]").addClass("slick-loading"), t.setupInfinite(), t.buildArrows(), t.buildDots(), t.updateDots(), t.setSlideClasses("number" == typeof t.currentSlide ? t.currentSlide : 0), !0 === t.options.draggable && t.$list.addClass("draggable")
 }, t.prototype.buildRows = function() {
  var e, t, i, n, o, r, s, a = this;
  if (n = document.createDocumentFragment(), r = a.$slider.children(), a.options.rows > 1) {
   for (s = a.options.slidesPerRow * a.options.rows, o = Math.ceil(r.length / s), e = 0; o > e; e++) {
    var l = document.createElement("div");
    for (t = 0; t < a.options.rows; t++) {
     var c = document.createElement("div");
     for (i = 0; i < a.options.slidesPerRow; i++) {
      var d = e * s + (t * a.options.slidesPerRow + i);
      r.get(d) && c.appendChild(r.get(d))
     }
     l.appendChild(c)
    }
    n.appendChild(l)
   }
   a.$slider.empty().append(n), a.$slider.children().children().children().css({
    width: 100 / a.options.slidesPerRow + "%",
    display: "inline-block"
   })
  }
 }, t.prototype.checkResponsive = function(t, i) {
  var n, o, r, s = this,
   a = !1,
   l = s.$slider.width(),
   c = window.innerWidth || e(window).width();
  if ("window" === s.respondTo ? r = c : "slider" === s.respondTo ? r = l : "min" === s.respondTo && (r = Math.min(c, l)), s.options.responsive && s.options.responsive.length && null !== s.options.responsive) {
   o = null;
   for (n in s.breakpoints) s.breakpoints.hasOwnProperty(n) && (!1 === s.originalSettings.mobileFirst ? r < s.breakpoints[n] && (o = s.breakpoints[n]) : r > s.breakpoints[n] && (o = s.breakpoints[n]));
   null !== o ? null !== s.activeBreakpoint ? (o !== s.activeBreakpoint || i) && (s.activeBreakpoint = o, "unslick" === s.breakpointSettings[o] ? s.unslick(o) : (s.options = e.extend({}, s.originalSettings, s.breakpointSettings[o]), !0 === t && (s.currentSlide = s.options.initialSlide), s.refresh(t)), a = o) : (s.activeBreakpoint = o, "unslick" === s.breakpointSettings[o] ? s.unslick(o) : (s.options = e.extend({}, s.originalSettings, s.breakpointSettings[o]), !0 === t && (s.currentSlide = s.options.initialSlide), s.refresh(t)), a = o) : null !== s.activeBreakpoint && (s.activeBreakpoint = null, s.options = s.originalSettings, !0 === t && (s.currentSlide = s.options.initialSlide), s.refresh(t), a = o), t || !1 === a || s.$slider.trigger("breakpoint", [s, a])
  }
 }, t.prototype.changeSlide = function(t, i) {
  var n, o, r, s = this,
   a = e(t.currentTarget);
  switch (a.is("a") && t.preventDefault(), a.is("li") || (a = a.closest("li")), r = s.slideCount % s.options.slidesToScroll != 0, n = r ? 0 : (s.slideCount - s.currentSlide) % s.options.slidesToScroll, t.data.message) {
   case "previous":
    o = 0 === n ? s.options.slidesToScroll : s.options.slidesToShow - n, s.slideCount > s.options.slidesToShow && s.slideHandler(s.currentSlide - o, !1, i);
    break;
   case "next":
    o = 0 === n ? s.options.slidesToScroll : n, s.slideCount > s.options.slidesToShow && s.slideHandler(s.currentSlide + o, !1, i);
    break;
   case "index":
    var l = 0 === t.data.index ? 0 : t.data.index || a.index() * s.options.slidesToScroll;
    s.slideHandler(s.checkNavigable(l), !1, i), a.children().trigger("focus");
    break;
   default:
    return
  }
 }, t.prototype.checkNavigable = function(e) {
  var t, i;
  if (t = this.getNavigableIndexes(), i = 0, e > t[t.length - 1]) e = t[t.length - 1];
  else
   for (var n in t) {
    if (e < t[n]) {
     e = i;
     break
    }
    i = t[n]
   }
  return e
 }, t.prototype.cleanUpEvents = function() {
  var t = this;
  t.options.dots && null !== t.$dots && e("li", t.$dots).off("click.slick", t.changeSlide).off("mouseenter.slick", e.proxy(t.interrupt, t, !0)).off("mouseleave.slick", e.proxy(t.interrupt, t, !1)), t.$slider.off("focus.slick blur.slick"), !0 === t.options.arrows && t.slideCount > t.options.slidesToShow && (t.$prevArrow && t.$prevArrow.off("click.slick", t.changeSlide), t.$nextArrow && t.$nextArrow.off("click.slick", t.changeSlide)), t.$list.off("touchstart.slick mousedown.slick", t.swipeHandler), t.$list.off("touchmove.slick mousemove.slick", t.swipeHandler), t.$list.off("touchend.slick mouseup.slick", t.swipeHandler), t.$list.off("touchcancel.slick mouseleave.slick", t.swipeHandler), t.$list.off("click.slick", t.clickHandler), e(document).off(t.visibilityChange, t.visibility), t.cleanUpSlideEvents(), !0 === t.options.accessibility && t.$list.off("keydown.slick", t.keyHandler), !0 === t.options.focusOnSelect && e(t.$slideTrack).children().off("click.slick", t.selectHandler), e(window).off("orientationchange.slick.slick-" + t.instanceUid, t.orientationChange), e(window).off("resize.slick.slick-" + t.instanceUid, t.resize), e("[draggable!=true]", t.$slideTrack).off("dragstart", t.preventDefault), e(window).off("load.slick.slick-" + t.instanceUid, t.setPosition), e(document).off("ready.slick.slick-" + t.instanceUid, t.setPosition)
 }, t.prototype.cleanUpSlideEvents = function() {
  var t = this;
  t.$list.off("mouseenter.slick", e.proxy(t.interrupt, t, !0)), t.$list.off("mouseleave.slick", e.proxy(t.interrupt, t, !1))
 }, t.prototype.cleanUpRows = function() {
  var e, t = this;
  t.options.rows > 1 && (e = t.$slides.children().children(), e.removeAttr("style"), t.$slider.empty().append(e))
 }, t.prototype.clickHandler = function(e) {
  !1 === this.shouldClick && (e.stopImmediatePropagation(), e.stopPropagation(), e.preventDefault())
 }, t.prototype.destroy = function(t) {
  var i = this;
  i.autoPlayClear(), i.touchObject = {}, i.cleanUpEvents(), e(".slick-cloned", i.$slider).detach(), i.$dots && i.$dots.remove(), i.$prevArrow && i.$prevArrow.length && (i.$prevArrow.removeClass("slick-disabled slick-arrow slick-hidden").removeAttr("aria-hidden aria-disabled tabindex").css("display", ""), i.htmlExpr.test(i.options.prevArrow) && i.$prevArrow.remove()), i.$nextArrow && i.$nextArrow.length && (i.$nextArrow.removeClass("slick-disabled slick-arrow slick-hidden").removeAttr("aria-hidden aria-disabled tabindex").css("display", ""), i.htmlExpr.test(i.options.nextArrow) && i.$nextArrow.remove()), i.$slides && (i.$slides.removeClass("slick-slide slick-active slick-center slick-visible slick-current").removeAttr("aria-hidden").removeAttr("data-slick-index").each(function() {
   e(this).attr("style", e(this).data("originalStyling"))
  }), i.$slideTrack.children(this.options.slide).detach(), i.$slideTrack.detach(), i.$list.detach(), i.$slider.append(i.$slides)), i.cleanUpRows(), i.$slider.removeClass("slick-slider"), i.$slider.removeClass("slick-initialized"), i.$slider.removeClass("slick-dotted"), i.unslicked = !0, t || i.$slider.trigger("destroy", [i])
 }, t.prototype.disableTransition = function(e) {
  var t = this,
   i = {};
  i[t.transitionType] = "", !1 === t.options.fade ? t.$slideTrack.css(i) : t.$slides.eq(e).css(i)
 }, t.prototype.fadeSlide = function(e, t) {
  var i = this;
  !1 === i.cssTransitions ? (i.$slides.eq(e).css({
   zIndex: i.options.zIndex
  }), i.$slides.eq(e).animate({
   opacity: 1
  }, i.options.speed, i.options.easing, t)) : (i.applyTransition(e), i.$slides.eq(e).css({
   opacity: 1,
   zIndex: i.options.zIndex
  }), t && setTimeout(function() {
   i.disableTransition(e), t.call()
  }, i.options.speed))
 }, t.prototype.fadeSlideOut = function(e) {
  var t = this;
  !1 === t.cssTransitions ? t.$slides.eq(e).animate({
   opacity: 0,
   zIndex: t.options.zIndex - 2
  }, t.options.speed, t.options.easing) : (t.applyTransition(e), t.$slides.eq(e).css({
   opacity: 0,
   zIndex: t.options.zIndex - 2
  }))
 }, t.prototype.filterSlides = t.prototype.slickFilter = function(e) {
  var t = this;
  null !== e && (t.$slidesCache = t.$slides, t.unload(), t.$slideTrack.children(this.options.slide).detach(), t.$slidesCache.filter(e).appendTo(t.$slideTrack), t.reinit())
 }, t.prototype.focusHandler = function() {
  var t = this;
  t.$slider.off("focus.slick blur.slick").on("focus.slick blur.slick", "*:not(.slick-arrow)", function(i) {
   i.stopImmediatePropagation();
   var n = e(this);
   setTimeout(function() {
    t.options.pauseOnFocus && (t.focussed = n.is(":focus"), t.autoPlay())
   }, 0)
  })
 }, t.prototype.getCurrent = t.prototype.slickCurrentSlide = function() {
  return this.currentSlide
 }, t.prototype.getDotCount = function() {
  var e = this,
   t = 0,
   i = 0,
   n = 0;
  if (!0 === e.options.infinite)
   for (; t < e.slideCount;) ++n, t = i + e.options.slidesToScroll, i += e.options.slidesToScroll <= e.options.slidesToShow ? e.options.slidesToScroll : e.options.slidesToShow;
  else if (!0 === e.options.centerMode) n = e.slideCount;
  else if (e.options.asNavFor)
   for (; t < e.slideCount;) ++n, t = i + e.options.slidesToScroll, i += e.options.slidesToScroll <= e.options.slidesToShow ? e.options.slidesToScroll : e.options.slidesToShow;
  else n = 1 + Math.ceil((e.slideCount - e.options.slidesToShow) / e.options.slidesToScroll);
  return n - 1
 }, t.prototype.getLeft = function(e) {
  var t, i, n, o = this,
   r = 0;
  return o.slideOffset = 0, i = o.$slides.first().outerHeight(!0), !0 === o.options.infinite ? (o.slideCount > o.options.slidesToShow && (o.slideOffset = o.slideWidth * o.options.slidesToShow * -1, r = i * o.options.slidesToShow * -1), o.slideCount % o.options.slidesToScroll != 0 && e + o.options.slidesToScroll > o.slideCount && o.slideCount > o.options.slidesToShow && (e > o.slideCount ? (o.slideOffset = (o.options.slidesToShow - (e - o.slideCount)) * o.slideWidth * -1, r = (o.options.slidesToShow - (e - o.slideCount)) * i * -1) : (o.slideOffset = o.slideCount % o.options.slidesToScroll * o.slideWidth * -1, r = o.slideCount % o.options.slidesToScroll * i * -1))) : e + o.options.slidesToShow > o.slideCount && (o.slideOffset = (e + o.options.slidesToShow - o.slideCount) * o.slideWidth, r = (e + o.options.slidesToShow - o.slideCount) * i), o.slideCount <= o.options.slidesToShow && (o.slideOffset = 0, r = 0), !0 === o.options.centerMode && !0 === o.options.infinite ? o.slideOffset += o.slideWidth * Math.floor(o.options.slidesToShow / 2) - o.slideWidth : !0 === o.options.centerMode && (o.slideOffset = 0, o.slideOffset += o.slideWidth * Math.floor(o.options.slidesToShow / 2)), t = !1 === o.options.vertical ? e * o.slideWidth * -1 + o.slideOffset : e * i * -1 + r, !0 === o.options.variableWidth && (n = o.slideCount <= o.options.slidesToShow || !1 === o.options.infinite ? o.$slideTrack.children(".slick-slide").eq(e) : o.$slideTrack.children(".slick-slide").eq(e + o.options.slidesToShow), t = !0 === o.options.rtl ? n[0] ? -1 * (o.$slideTrack.width() - n[0].offsetLeft - n.width()) : 0 : n[0] ? -1 * n[0].offsetLeft : 0, !0 === o.options.centerMode && (n = o.slideCount <= o.options.slidesToShow || !1 === o.options.infinite ? o.$slideTrack.children(".slick-slide").eq(e) : o.$slideTrack.children(".slick-slide").eq(e + o.options.slidesToShow + 1), t = !0 === o.options.rtl ? n[0] ? -1 * (o.$slideTrack.width() - n[0].offsetLeft - n.width()) : 0 : n[0] ? -1 * n[0].offsetLeft : 0, t += (o.$list.width() - n.outerWidth()) / 2)), t
 }, t.prototype.getOption = t.prototype.slickGetOption = function(e) {
  return this.options[e]
 }, t.prototype.getNavigableIndexes = function() {
  var e, t = this,
   i = 0,
   n = 0,
   o = [];
  for (!1 === t.options.infinite ? e = t.slideCount : (i = -1 * t.options.slidesToScroll, n = -1 * t.options.slidesToScroll, e = 2 * t.slideCount); e > i;) o.push(i), i = n + t.options.slidesToScroll, n += t.options.slidesToScroll <= t.options.slidesToShow ? t.options.slidesToScroll : t.options.slidesToShow;
  return o
 }, t.prototype.getSlick = function() {
  return this
 }, t.prototype.getSlideCount = function() {
  var t, i, n = this;
  return i = !0 === n.options.centerMode ? n.slideWidth * Math.floor(n.options.slidesToShow / 2) : 0, !0 === n.options.swipeToSlide ? (n.$slideTrack.find(".slick-slide").each(function(o, r) {
   return r.offsetLeft - i + e(r).outerWidth() / 2 > -1 * n.swipeLeft ? (t = r, !1) : void 0
  }), Math.abs(e(t).attr("data-slick-index") - n.currentSlide) || 1) : n.options.slidesToScroll
 }, t.prototype.goTo = t.prototype.slickGoTo = function(e, t) {
  this.changeSlide({
   data: {
    message: "index",
    index: parseInt(e)
   }
  }, t)
 }, t.prototype.init = function(t) {
  var i = this;
  e(i.$slider).hasClass("slick-initialized") || (e(i.$slider).addClass("slick-initialized"), i.buildRows(), i.buildOut(), i.setProps(), i.startLoad(), i.loadSlider(), i.initializeEvents(), i.updateArrows(), i.updateDots(), i.checkResponsive(!0), i.focusHandler()), t && i.$slider.trigger("init", [i]), !0 === i.options.accessibility && i.initADA(), i.options.autoplay && (i.paused = !1, i.autoPlay())
 }, t.prototype.initADA = function() {
  var t = this;
  t.$slides.add(t.$slideTrack.find(".slick-cloned")).attr({
   "aria-hidden": "true",
   tabindex: "-1"
  }).find("a, input, button, select").attr({
   tabindex: "-1"
  }), t.$slideTrack.attr("role", "listbox"), t.$slides.not(t.$slideTrack.find(".slick-cloned")).each(function(i) {
   e(this).attr({
    role: "option",
    "aria-describedby": "slick-slide" + t.instanceUid + i
   })
  }), null !== t.$dots && t.$dots.attr("role", "tablist").find("li").each(function(i) {
   e(this).attr({
    role: "presentation",
    "aria-selected": "false",
    "aria-controls": "navigation" + t.instanceUid + i,
    id: "slick-slide" + t.instanceUid + i
   })
  }).first().attr("aria-selected", "true").end().find("button").attr("role", "button").end().closest("div").attr("role", "toolbar"), t.activateADA()
 }, t.prototype.initArrowEvents = function() {
  var e = this;
  !0 === e.options.arrows && e.slideCount > e.options.slidesToShow && (e.$prevArrow.off("click.slick").on("click.slick", {
   message: "previous"
  }, e.changeSlide), e.$nextArrow.off("click.slick").on("click.slick", {
   message: "next"
  }, e.changeSlide))
 }, t.prototype.initDotEvents = function() {
  var t = this;
  !0 === t.options.dots && t.slideCount > t.options.slidesToShow && e("li", t.$dots).on("click.slick", {
   message: "index"
  }, t.changeSlide), !0 === t.options.dots && !0 === t.options.pauseOnDotsHover && e("li", t.$dots).on("mouseenter.slick", e.proxy(t.interrupt, t, !0)).on("mouseleave.slick", e.proxy(t.interrupt, t, !1))
 }, t.prototype.initSlideEvents = function() {
  var t = this;
  t.options.pauseOnHover && (t.$list.on("mouseenter.slick", e.proxy(t.interrupt, t, !0)), t.$list.on("mouseleave.slick", e.proxy(t.interrupt, t, !1)))
 }, t.prototype.initializeEvents = function() {
  var t = this;
  t.initArrowEvents(), t.initDotEvents(), t.initSlideEvents(), t.$list.on("touchstart.slick mousedown.slick", {
   action: "start"
  }, t.swipeHandler), t.$list.on("touchmove.slick mousemove.slick", {
   action: "move"
  }, t.swipeHandler), t.$list.on("touchend.slick mouseup.slick", {
   action: "end"
  }, t.swipeHandler), t.$list.on("touchcancel.slick mouseleave.slick", {
   action: "end"
  }, t.swipeHandler), t.$list.on("click.slick", t.clickHandler), e(document).on(t.visibilityChange, e.proxy(t.visibility, t)), !0 === t.options.accessibility && t.$list.on("keydown.slick", t.keyHandler), !0 === t.options.focusOnSelect && e(t.$slideTrack).children().on("click.slick", t.selectHandler), e(window).on("orientationchange.slick.slick-" + t.instanceUid, e.proxy(t.orientationChange, t)), e(window).on("resize.slick.slick-" + t.instanceUid, e.proxy(t.resize, t)), e("[draggable!=true]", t.$slideTrack).on("dragstart", t.preventDefault), e(window).on("load.slick.slick-" + t.instanceUid, t.setPosition), e(document).on("ready.slick.slick-" + t.instanceUid, t.setPosition)
 }, t.prototype.initUI = function() {
  var e = this;
  !0 === e.options.arrows && e.slideCount > e.options.slidesToShow && (e.$prevArrow.show(), e.$nextArrow.show()), !0 === e.options.dots && e.slideCount > e.options.slidesToShow && e.$dots.show()
 }, t.prototype.keyHandler = function(e) {
  var t = this;
  e.target.tagName.match("TEXTAREA|INPUT|SELECT") || (37 === e.keyCode && !0 === t.options.accessibility ? t.changeSlide({
   data: {
    message: !0 === t.options.rtl ? "next" : "previous"
   }
  }) : 39 === e.keyCode && !0 === t.options.accessibility && t.changeSlide({
   data: {
    message: !0 === t.options.rtl ? "previous" : "next"
   }
  }))
 }, t.prototype.lazyLoad = function() {
  function t(t) {
   e("img[data-lazy]", t).each(function() {
    var t = e(this),
     i = e(this).attr("data-lazy"),
     n = document.createElement("img");
    n.onload = function() {
     t.animate({
      opacity: 0
     }, 100, function() {
      t.attr("src", i).animate({
       opacity: 1
      }, 200, function() {
       t.removeAttr("data-lazy").removeClass("slick-loading")
      }), s.$slider.trigger("lazyLoaded", [s, t, i])
     })
    }, n.onerror = function() {
     t.removeAttr("data-lazy").removeClass("slick-loading").addClass("slick-lazyload-error"), s.$slider.trigger("lazyLoadError", [s, t, i])
    }, n.src = i
   })
  }
  var i, n, o, r, s = this;
  !0 === s.options.centerMode ? !0 === s.options.infinite ? (o = s.currentSlide + (s.options.slidesToShow / 2 + 1), r = o + s.options.slidesToShow + 2) : (o = Math.max(0, s.currentSlide - (s.options.slidesToShow / 2 + 1)), r = s.options.slidesToShow / 2 + 1 + 2 + s.currentSlide) : (o = s.options.infinite ? s.options.slidesToShow + s.currentSlide : s.currentSlide, r = Math.ceil(o + s.options.slidesToShow), !0 === s.options.fade && (o > 0 && o--, r <= s.slideCount && r++)), i = s.$slider.find(".slick-slide").slice(o, r), t(i), s.slideCount <= s.options.slidesToShow ? (n = s.$slider.find(".slick-slide"), t(n)) : s.currentSlide >= s.slideCount - s.options.slidesToShow ? (n = s.$slider.find(".slick-cloned").slice(0, s.options.slidesToShow), t(n)) : 0 === s.currentSlide && (n = s.$slider.find(".slick-cloned").slice(-1 * s.options.slidesToShow), t(n))
 }, t.prototype.loadSlider = function() {
  var e = this;
  e.setPosition(), e.$slideTrack.css({
   opacity: 1
  }), e.$slider.removeClass("slick-loading"), e.initUI(), "progressive" === e.options.lazyLoad && e.progressiveLazyLoad()
 }, t.prototype.next = t.prototype.slickNext = function() {
  this.changeSlide({
   data: {
    message: "next"
   }
  })
 }, t.prototype.orientationChange = function() {
  var e = this;
  e.checkResponsive(), e.setPosition()
 }, t.prototype.pause = t.prototype.slickPause = function() {
  var e = this;
  e.autoPlayClear(), e.paused = !0
 }, t.prototype.play = t.prototype.slickPlay = function() {
  var e = this;
  e.autoPlay(), e.options.autoplay = !0, e.paused = !1, e.focussed = !1, e.interrupted = !1
 }, t.prototype.postSlide = function(e) {
  var t = this;
  t.unslicked || (t.$slider.trigger("afterChange", [t, e]), t.animating = !1, t.setPosition(), t.swipeLeft = null, t.options.autoplay && t.autoPlay(), !0 === t.options.accessibility && t.initADA())
 }, t.prototype.prev = t.prototype.slickPrev = function() {
  this.changeSlide({
   data: {
    message: "previous"
   }
  })
 }, t.prototype.preventDefault = function(e) {
  e.preventDefault()
 }, t.prototype.progressiveLazyLoad = function(t) {
  t = t || 1;
  var i, n, o, r = this,
   s = e("img[data-lazy]", r.$slider);
  s.length ? (i = s.first(), n = i.attr("data-lazy"), o = document.createElement("img"), o.onload = function() {
   i.attr("src", n).removeAttr("data-lazy").removeClass("slick-loading"), !0 === r.options.adaptiveHeight && r.setPosition(), r.$slider.trigger("lazyLoaded", [r, i, n]), r.progressiveLazyLoad()
  }, o.onerror = function() {
   3 > t ? setTimeout(function() {
    r.progressiveLazyLoad(t + 1)
   }, 500) : (i.removeAttr("data-lazy").removeClass("slick-loading").addClass("slick-lazyload-error"), r.$slider.trigger("lazyLoadError", [r, i, n]), r.progressiveLazyLoad())
  }, o.src = n) : r.$slider.trigger("allImagesLoaded", [r])
 }, t.prototype.refresh = function(t) {
  var i, n, o = this;
  n = o.slideCount - o.options.slidesToShow, !o.options.infinite && o.currentSlide > n && (o.currentSlide = n), o.slideCount <= o.options.slidesToShow && (o.currentSlide = 0), i = o.currentSlide, o.destroy(!0), e.extend(o, o.initials, {
   currentSlide: i
  }), o.init(), t || o.changeSlide({
   data: {
    message: "index",
    index: i
   }
  }, !1)
 }, t.prototype.registerBreakpoints = function() {
  var t, i, n, o = this,
   r = o.options.responsive || null;
  if ("array" === e.type(r) && r.length) {
   o.respondTo = o.options.respondTo || "window";
   for (t in r)
    if (n = o.breakpoints.length - 1, i = r[t].breakpoint, r.hasOwnProperty(t)) {
     for (; n >= 0;) o.breakpoints[n] && o.breakpoints[n] === i && o.breakpoints.splice(n, 1), n--;
     o.breakpoints.push(i), o.breakpointSettings[i] = r[t].settings
    } o.breakpoints.sort(function(e, t) {
    return o.options.mobileFirst ? e - t : t - e
   })
  }
 }, t.prototype.reinit = function() {
  var t = this;
  t.$slides = t.$slideTrack.children(t.options.slide).addClass("slick-slide"), t.slideCount = t.$slides.length, t.currentSlide >= t.slideCount && 0 !== t.currentSlide && (t.currentSlide = t.currentSlide - t.options.slidesToScroll), t.slideCount <= t.options.slidesToShow && (t.currentSlide = 0), t.registerBreakpoints(), t.setProps(), t.setupInfinite(), t.buildArrows(), t.updateArrows(), t.initArrowEvents(), t.buildDots(), t.updateDots(), t.initDotEvents(), t.cleanUpSlideEvents(), t.initSlideEvents(), t.checkResponsive(!1, !0), !0 === t.options.focusOnSelect && e(t.$slideTrack).children().on("click.slick", t.selectHandler), t.setSlideClasses("number" == typeof t.currentSlide ? t.currentSlide : 0), t.setPosition(), t.focusHandler(), t.paused = !t.options.autoplay, t.autoPlay(), t.$slider.trigger("reInit", [t])
 }, t.prototype.resize = function() {
  var t = this;
  e(window).width() !== t.windowWidth && (clearTimeout(t.windowDelay), t.windowDelay = window.setTimeout(function() {
   t.windowWidth = e(window).width(), t.checkResponsive(), t.unslicked || t.setPosition()
  }, 50))
 }, t.prototype.removeSlide = t.prototype.slickRemove = function(e, t, i) {
  var n = this;
  return "boolean" == typeof e ? (t = e, e = !0 === t ? 0 : n.slideCount - 1) : e = !0 === t ? --e : e, !(n.slideCount < 1 || 0 > e || e > n.slideCount - 1) && (n.unload(), !0 === i ? n.$slideTrack.children().remove() : n.$slideTrack.children(this.options.slide).eq(e).remove(), n.$slides = n.$slideTrack.children(this.options.slide), n.$slideTrack.children(this.options.slide).detach(), n.$slideTrack.append(n.$slides), n.$slidesCache = n.$slides, void n.reinit())
 }, t.prototype.setCSS = function(e) {
  var t, i, n = this,
   o = {};
  !0 === n.options.rtl && (e = -e), t = "left" == n.positionProp ? Math.ceil(e) + "px" : "0px", i = "top" == n.positionProp ? Math.ceil(e) + "px" : "0px", o[n.positionProp] = e, !1 === n.transformsEnabled ? n.$slideTrack.css(o) : (o = {}, !1 === n.cssTransitions ? (o[n.animType] = "translate(" + t + ", " + i + ")", n.$slideTrack.css(o)) : (o[n.animType] = "translate3d(" + t + ", " + i + ", 0px)", n.$slideTrack.css(o)))
 }, t.prototype.setDimensions = function() {
  var e = this;
  !1 === e.options.vertical ? !0 === e.options.centerMode && e.$list.css({
    padding: "0px " + e.options.centerPadding
   }) : (e.$list.height(e.$slides.first().outerHeight(!0) * e.options.slidesToShow), !0 === e.options.centerMode && e.$list.css({
    padding: e.options.centerPadding + " 0px"
   })), e.listWidth = e.$list.width(), e.listHeight = e.$list.height(),
   !1 === e.options.vertical && !1 === e.options.variableWidth ? (e.slideWidth = Math.ceil(e.listWidth / e.options.slidesToShow), e.$slideTrack.width(Math.ceil(e.slideWidth * e.$slideTrack.children(".slick-slide").length))) : !0 === e.options.variableWidth ? e.$slideTrack.width(5e3 * e.slideCount) : (e.slideWidth = Math.ceil(e.listWidth), e.$slideTrack.height(Math.ceil(e.$slides.first().outerHeight(!0) * e.$slideTrack.children(".slick-slide").length)));
  var t = e.$slides.first().outerWidth(!0) - e.$slides.first().width();
  !1 === e.options.variableWidth && e.$slideTrack.children(".slick-slide").width(e.slideWidth - t)
 }, t.prototype.setFade = function() {
  var t, i = this;
  i.$slides.each(function(n, o) {
   t = i.slideWidth * n * -1, !0 === i.options.rtl ? e(o).css({
    position: "relative",
    right: t,
    top: 0,
    zIndex: i.options.zIndex - 2,
    opacity: 0
   }) : e(o).css({
    position: "relative",
    left: t,
    top: 0,
    zIndex: i.options.zIndex - 2,
    opacity: 0
   })
  }), i.$slides.eq(i.currentSlide).css({
   zIndex: i.options.zIndex - 1,
   opacity: 1
  })
 }, t.prototype.setHeight = function() {
  var e = this;
  if (1 === e.options.slidesToShow && !0 === e.options.adaptiveHeight && !1 === e.options.vertical) {
   var t = e.$slides.eq(e.currentSlide).outerHeight(!0);
   e.$list.css("height", t)
  }
 }, t.prototype.setOption = t.prototype.slickSetOption = function() {
  var t, i, n, o, r, s = this,
   a = !1;
  if ("object" === e.type(arguments[0]) ? (n = arguments[0], a = arguments[1], r = "multiple") : "string" === e.type(arguments[0]) && (n = arguments[0], o = arguments[1], a = arguments[2], "responsive" === arguments[0] && "array" === e.type(arguments[1]) ? r = "responsive" : void 0 !== arguments[1] && (r = "single")), "single" === r) s.options[n] = o;
  else if ("multiple" === r) e.each(n, function(e, t) {
   s.options[e] = t
  });
  else if ("responsive" === r)
   for (i in o)
    if ("array" !== e.type(s.options.responsive)) s.options.responsive = [o[i]];
    else {
     for (t = s.options.responsive.length - 1; t >= 0;) s.options.responsive[t].breakpoint === o[i].breakpoint && s.options.responsive.splice(t, 1), t--;
     s.options.responsive.push(o[i])
    } a && (s.unload(), s.reinit())
 }, t.prototype.setPosition = function() {
  var e = this;
  e.setDimensions(), e.setHeight(), !1 === e.options.fade ? e.setCSS(e.getLeft(e.currentSlide)) : e.setFade(), e.$slider.trigger("setPosition", [e])
 }, t.prototype.setProps = function() {
  var e = this,
   t = document.body.style;
  e.positionProp = !0 === e.options.vertical ? "top" : "left", "top" === e.positionProp ? e.$slider.addClass("slick-vertical") : e.$slider.removeClass("slick-vertical"), (void 0 !== t.WebkitTransition || void 0 !== t.MozTransition || void 0 !== t.msTransition) && !0 === e.options.useCSS && (e.cssTransitions = !0), e.options.fade && ("number" == typeof e.options.zIndex ? e.options.zIndex < 3 && (e.options.zIndex = 3) : e.options.zIndex = e.defaults.zIndex), void 0 !== t.OTransform && (e.animType = "OTransform", e.transformType = "-o-transform", e.transitionType = "OTransition", void 0 === t.perspectiveProperty && void 0 === t.webkitPerspective && (e.animType = !1)), void 0 !== t.MozTransform && (e.animType = "MozTransform", e.transformType = "-moz-transform", e.transitionType = "MozTransition", void 0 === t.perspectiveProperty && void 0 === t.MozPerspective && (e.animType = !1)), void 0 !== t.webkitTransform && (e.animType = "webkitTransform", e.transformType = "-webkit-transform", e.transitionType = "webkitTransition", void 0 === t.perspectiveProperty && void 0 === t.webkitPerspective && (e.animType = !1)), void 0 !== t.msTransform && (e.animType = "msTransform", e.transformType = "-ms-transform", e.transitionType = "msTransition", void 0 === t.msTransform && (e.animType = !1)), void 0 !== t.transform && !1 !== e.animType && (e.animType = "transform", e.transformType = "transform", e.transitionType = "transition"), e.transformsEnabled = e.options.useTransform && null !== e.animType && !1 !== e.animType
 }, t.prototype.setSlideClasses = function(e) {
  var t, i, n, o, r = this;
  i = r.$slider.find(".slick-slide").removeClass("slick-active slick-center slick-current").attr("aria-hidden", "true"), r.$slides.eq(e).addClass("slick-current"), !0 === r.options.centerMode ? (t = Math.floor(r.options.slidesToShow / 2), !0 === r.options.infinite && (e >= t && e <= r.slideCount - 1 - t ? r.$slides.slice(e - t, e + t + 1).addClass("slick-active").attr("aria-hidden", "false") : (n = r.options.slidesToShow + e, i.slice(n - t + 1, n + t + 2).addClass("slick-active").attr("aria-hidden", "false")), 0 === e ? i.eq(i.length - 1 - r.options.slidesToShow).addClass("slick-center") : e === r.slideCount - 1 && i.eq(r.options.slidesToShow).addClass("slick-center")), r.$slides.eq(e).addClass("slick-center")) : e >= 0 && e <= r.slideCount - r.options.slidesToShow ? r.$slides.slice(e, e + r.options.slidesToShow).addClass("slick-active").attr("aria-hidden", "false") : i.length <= r.options.slidesToShow ? i.addClass("slick-active").attr("aria-hidden", "false") : (o = r.slideCount % r.options.slidesToShow, n = !0 === r.options.infinite ? r.options.slidesToShow + e : e, r.options.slidesToShow == r.options.slidesToScroll && r.slideCount - e < r.options.slidesToShow ? i.slice(n - (r.options.slidesToShow - o), n + o).addClass("slick-active").attr("aria-hidden", "false") : i.slice(n, n + r.options.slidesToShow).addClass("slick-active").attr("aria-hidden", "false")), "ondemand" === r.options.lazyLoad && r.lazyLoad()
 }, t.prototype.setupInfinite = function() {
  var t, i, n, o = this;
  if (!0 === o.options.fade && (o.options.centerMode = !1), !0 === o.options.infinite && !1 === o.options.fade && (i = null, o.slideCount > o.options.slidesToShow)) {
   for (n = !0 === o.options.centerMode ? o.options.slidesToShow + 1 : o.options.slidesToShow, t = o.slideCount; t > o.slideCount - n; t -= 1) i = t - 1, e(o.$slides[i]).clone(!0).attr("id", "").attr("data-slick-index", i - o.slideCount).prependTo(o.$slideTrack).addClass("slick-cloned");
   for (t = 0; n > t; t += 1) i = t, e(o.$slides[i]).clone(!0).attr("id", "").attr("data-slick-index", i + o.slideCount).appendTo(o.$slideTrack).addClass("slick-cloned");
   o.$slideTrack.find(".slick-cloned").find("[id]").each(function() {
    e(this).attr("id", "")
   })
  }
 }, t.prototype.interrupt = function(e) {
  var t = this;
  e || t.autoPlay(), t.interrupted = e
 }, t.prototype.selectHandler = function(t) {
  var i = this,
   n = e(t.target).is(".slick-slide") ? e(t.target) : e(t.target).parents(".slick-slide"),
   o = parseInt(n.attr("data-slick-index"));
  return o || (o = 0), i.slideCount <= i.options.slidesToShow ? (i.setSlideClasses(o), void i.asNavFor(o)) : void i.slideHandler(o)
 }, t.prototype.slideHandler = function(e, t, i) {
  var n, o, r, s, a, l = null,
   c = this;
  return t = t || !1, !0 === c.animating && !0 === c.options.waitForAnimate || !0 === c.options.fade && c.currentSlide === e || c.slideCount <= c.options.slidesToShow ? void 0 : (!1 === t && c.asNavFor(e), n = e, l = c.getLeft(n), s = c.getLeft(c.currentSlide), c.currentLeft = null === c.swipeLeft ? s : c.swipeLeft, !1 === c.options.infinite && !1 === c.options.centerMode && (0 > e || e > c.getDotCount() * c.options.slidesToScroll) ? void(!1 === c.options.fade && (n = c.currentSlide, !0 !== i ? c.animateSlide(s, function() {
   c.postSlide(n)
  }) : c.postSlide(n))) : !1 === c.options.infinite && !0 === c.options.centerMode && (0 > e || e > c.slideCount - c.options.slidesToScroll) ? void(!1 === c.options.fade && (n = c.currentSlide, !0 !== i ? c.animateSlide(s, function() {
   c.postSlide(n)
  }) : c.postSlide(n))) : (c.options.autoplay && clearInterval(c.autoPlayTimer), o = 0 > n ? c.slideCount % c.options.slidesToScroll != 0 ? c.slideCount - c.slideCount % c.options.slidesToScroll : c.slideCount + n : n >= c.slideCount ? c.slideCount % c.options.slidesToScroll != 0 ? 0 : n - c.slideCount : n, c.animating = !0, c.$slider.trigger("beforeChange", [c, c.currentSlide, o]), r = c.currentSlide, c.currentSlide = o, c.setSlideClasses(c.currentSlide), c.options.asNavFor && (a = c.getNavTarget(), a = a.slick("getSlick"), a.slideCount <= a.options.slidesToShow && a.setSlideClasses(c.currentSlide)), c.updateDots(), c.updateArrows(), !0 === c.options.fade ? (!0 !== i ? (c.fadeSlideOut(r), c.fadeSlide(o, function() {
   c.postSlide(o)
  })) : c.postSlide(o), void c.animateHeight()) : void(!0 !== i ? c.animateSlide(l, function() {
   c.postSlide(o)
  }) : c.postSlide(o))))
 }, t.prototype.startLoad = function() {
  var e = this;
  !0 === e.options.arrows && e.slideCount > e.options.slidesToShow && (e.$prevArrow.hide(), e.$nextArrow.hide()), !0 === e.options.dots && e.slideCount > e.options.slidesToShow && e.$dots.hide(), e.$slider.addClass("slick-loading")
 }, t.prototype.swipeDirection = function() {
  var e, t, i, n, o = this;
  return e = o.touchObject.startX - o.touchObject.curX, t = o.touchObject.startY - o.touchObject.curY, i = Math.atan2(t, e), n = Math.round(180 * i / Math.PI), 0 > n && (n = 360 - Math.abs(n)), 45 >= n && n >= 0 ? !1 === o.options.rtl ? "left" : "right" : 360 >= n && n >= 315 ? !1 === o.options.rtl ? "left" : "right" : n >= 135 && 225 >= n ? !1 === o.options.rtl ? "right" : "left" : !0 === o.options.verticalSwiping ? n >= 35 && 135 >= n ? "down" : "up" : "vertical"
 }, t.prototype.swipeEnd = function(e) {
  var t, i, n = this;
  if (n.dragging = !1, n.interrupted = !1, n.shouldClick = !(n.touchObject.swipeLength > 10), void 0 === n.touchObject.curX) return !1;
  if (!0 === n.touchObject.edgeHit && n.$slider.trigger("edge", [n, n.swipeDirection()]), n.touchObject.swipeLength >= n.touchObject.minSwipe) {
   switch (i = n.swipeDirection()) {
    case "left":
    case "down":
     t = n.options.swipeToSlide ? n.checkNavigable(n.currentSlide + n.getSlideCount()) : n.currentSlide + n.getSlideCount(), n.currentDirection = 0;
     break;
    case "right":
    case "up":
     t = n.options.swipeToSlide ? n.checkNavigable(n.currentSlide - n.getSlideCount()) : n.currentSlide - n.getSlideCount(), n.currentDirection = 1
   }
   "vertical" != i && (n.slideHandler(t), n.touchObject = {}, n.$slider.trigger("swipe", [n, i]))
  } else n.touchObject.startX !== n.touchObject.curX && (n.slideHandler(n.currentSlide), n.touchObject = {})
 }, t.prototype.swipeHandler = function(e) {
  var t = this;
  if (!(!1 === t.options.swipe || "ontouchend" in document && !1 === t.options.swipe || !1 === t.options.draggable && -1 !== e.type.indexOf("mouse"))) switch (t.touchObject.fingerCount = e.originalEvent && void 0 !== e.originalEvent.touches ? e.originalEvent.touches.length : 1, t.touchObject.minSwipe = t.listWidth / t.options.touchThreshold, !0 === t.options.verticalSwiping && (t.touchObject.minSwipe = t.listHeight / t.options.touchThreshold), e.data.action) {
   case "start":
    t.swipeStart(e);
    break;
   case "move":
    t.swipeMove(e);
    break;
   case "end":
    t.swipeEnd(e)
  }
 }, t.prototype.swipeMove = function(e) {
  var t, i, n, o, r, s = this;
  return r = void 0 !== e.originalEvent ? e.originalEvent.touches : null, !(!s.dragging || r && 1 !== r.length) && (t = s.getLeft(s.currentSlide), s.touchObject.curX = void 0 !== r ? r[0].pageX : e.clientX, s.touchObject.curY = void 0 !== r ? r[0].pageY : e.clientY, s.touchObject.swipeLength = Math.round(Math.sqrt(Math.pow(s.touchObject.curX - s.touchObject.startX, 2))), !0 === s.options.verticalSwiping && (s.touchObject.swipeLength = Math.round(Math.sqrt(Math.pow(s.touchObject.curY - s.touchObject.startY, 2)))), i = s.swipeDirection(), "vertical" !== i ? (void 0 !== e.originalEvent && s.touchObject.swipeLength > 4 && e.preventDefault(), o = (!1 === s.options.rtl ? 1 : -1) * (s.touchObject.curX > s.touchObject.startX ? 1 : -1), !0 === s.options.verticalSwiping && (o = s.touchObject.curY > s.touchObject.startY ? 1 : -1), n = s.touchObject.swipeLength, s.touchObject.edgeHit = !1, !1 === s.options.infinite && (0 === s.currentSlide && "right" === i || s.currentSlide >= s.getDotCount() && "left" === i) && (n = s.touchObject.swipeLength * s.options.edgeFriction, s.touchObject.edgeHit = !0), !1 === s.options.vertical ? s.swipeLeft = t + n * o : s.swipeLeft = t + n * (s.$list.height() / s.listWidth) * o, !0 === s.options.verticalSwiping && (s.swipeLeft = t + n * o), !0 !== s.options.fade && !1 !== s.options.touchMove && (!0 === s.animating ? (s.swipeLeft = null, !1) : void s.setCSS(s.swipeLeft))) : void 0)
 }, t.prototype.swipeStart = function(e) {
  var t, i = this;
  return i.interrupted = !0, 1 !== i.touchObject.fingerCount || i.slideCount <= i.options.slidesToShow ? (i.touchObject = {}, !1) : (void 0 !== e.originalEvent && void 0 !== e.originalEvent.touches && (t = e.originalEvent.touches[0]), i.touchObject.startX = i.touchObject.curX = void 0 !== t ? t.pageX : e.clientX, i.touchObject.startY = i.touchObject.curY = void 0 !== t ? t.pageY : e.clientY, void(i.dragging = !0))
 }, t.prototype.unfilterSlides = t.prototype.slickUnfilter = function() {
  var e = this;
  null !== e.$slidesCache && (e.unload(), e.$slideTrack.children(this.options.slide).detach(), e.$slidesCache.appendTo(e.$slideTrack), e.reinit())
 }, t.prototype.unload = function() {
  var t = this;
  e(".slick-cloned", t.$slider).remove(), t.$dots && t.$dots.remove(), t.$prevArrow && t.htmlExpr.test(t.options.prevArrow) && t.$prevArrow.remove(), t.$nextArrow && t.htmlExpr.test(t.options.nextArrow) && t.$nextArrow.remove(), t.$slides.removeClass("slick-slide slick-active slick-visible slick-current").attr("aria-hidden", "true").css("width", "")
 }, t.prototype.unslick = function(e) {
  var t = this;
  t.$slider.trigger("unslick", [t, e]), t.destroy()
 }, t.prototype.updateArrows = function() {
  var e = this;
  Math.floor(e.options.slidesToShow / 2), !0 === e.options.arrows && e.slideCount > e.options.slidesToShow && !e.options.infinite && (e.$prevArrow.removeClass("slick-disabled").attr("aria-disabled", "false"), e.$nextArrow.removeClass("slick-disabled").attr("aria-disabled", "false"), 0 === e.currentSlide ? (e.$prevArrow.addClass("slick-disabled").attr("aria-disabled", "true"), e.$nextArrow.removeClass("slick-disabled").attr("aria-disabled", "false")) : e.currentSlide >= e.slideCount - e.options.slidesToShow && !1 === e.options.centerMode ? (e.$nextArrow.addClass("slick-disabled").attr("aria-disabled", "true"), e.$prevArrow.removeClass("slick-disabled").attr("aria-disabled", "false")) : e.currentSlide >= e.slideCount - 1 && !0 === e.options.centerMode && (e.$nextArrow.addClass("slick-disabled").attr("aria-disabled", "true"), e.$prevArrow.removeClass("slick-disabled").attr("aria-disabled", "false")))
 }, t.prototype.updateDots = function() {
  var e = this;
  null !== e.$dots && (e.$dots.find("li").removeClass("slick-active").attr("aria-hidden", "true"), e.$dots.find("li").eq(Math.floor(e.currentSlide / e.options.slidesToScroll)).addClass("slick-active").attr("aria-hidden", "false"))
 }, t.prototype.visibility = function() {
  var e = this;
  e.options.autoplay && (document[e.hidden] ? e.interrupted = !0 : e.interrupted = !1)
 }, e.fn.slick = function() {
  var e, i, n = this,
   o = arguments[0],
   r = Array.prototype.slice.call(arguments, 1),
   s = n.length;
  for (e = 0; s > e; e++)
   if ("object" == typeof o || void 0 === o ? n[e].slick = new t(n[e], o) : i = n[e].slick[o].apply(n[e].slick, r), void 0 !== i) return i;
  return n
 }
}),
function(e) {
 e.fn.cardtable = function(t) {
  var i = this,
   n = {
    headIndex: 0
   },
   o = e.extend({}, n, t);
  return t && t.headIndex && t.headIndex, i.each(function() {
   var t = e(this);
   if (!t.hasClass("stacktable")) {
    var i = e(this).prop("class"),
     n = e("<div></div>");
    void 0 !== o.myClass && n.addClass(o.myClass);
    var r, s, a, l, c, d = "";
    t.addClass("stacktable large-only"), r = t.find(">caption").clone(), s = t.find(">thead>tr,>tbody>tr,>tfoot>tr,>tr").eq(0), t.siblings().filter(".small-only").remove(), t.find(">tbody>tr").each(function() {
     a = "", l = "", c = e(this).prop("class"), e(this).find(">td,>th").each(function(t) {
      "" !== e(this).html() && (l += '<tr class="' + c + '">', s.find(">td,>th").eq(t).html() ? l += '<td class="st-key">' + s.find(">td,>th").eq(t).html() + "</td>" : l += '<td class="st-key"></td>', l += '<td class="st-val ' + e(this).prop("class") + '">' + e(this).html() + "</td>", l += "</tr>")
     }), d += '<table class=" ' + i + ' stacktable small-only"><tbody>' + a + l + "</tbody></table>"
    }), t.find(">tfoot>tr>td").each(function(t, n) {
     "" !== e.trim(e(n).text()) && (d += '<table class="' + i + ' stacktable small-only"><tbody><tr><td>' + e(n).html() + "</td></tr></tbody></table>")
    }), n.prepend(r), n.append(e(d)), t.before(n)
   }
  })
 }, e.fn.stacktable = function(t) {
  var i, n = this,
   o = {
    headIndex: 0,
    displayHeader: !0
   },
   r = e.extend({}, o, t);
  return i = t && t.headIndex ? t.headIndex : 0, n.each(function() {
   var t = e(this).prop("class"),
    n = e('<table class="' + t + ' stacktable small-only"><tbody></tbody></table>');
   void 0 !== r.myClass && n.addClass(r.myClass);
   var o, s, a, l, c, d, u, h = "";
   (o = e(this)).addClass("stacktable large-only"), s = o.find(">caption").clone(), a = o.find(">thead>tr,>tbody>tr,>tfoot>tr").eq(0), u = void 0 === o.data("display-header") ? r.displayHeader : o.data("display-header"), o.find(">tbody>tr").each(function(t) {
    l = "", c = "", d = e(this).prop("class"), 0 === t ? u && (h += '<tr class=" ' + d + ' "><th class="st-head-row st-head-row-main" colspan="2">' + e(this).find(">th,>td").eq(i).html() + "</th></tr>") : (e(this).find(">td,>th").each(function(t) {
     t === i ? l = '<tr class="' + d + '"><th class="st-head-row" colspan="2">' + e(this).html() + "</th></tr>" : "" !== e(this).html() && (c += '<tr class="' + d + '">', a.find(">td,>th").eq(t).html() ? c += '<td class="st-key">' + a.find(">td,>th").eq(t).html() + "</td>" : c += '<td class="st-key"></td>', c += '<td class="st-val ' + e(this).prop("class") + '">' + e(this).html() + "</td>", c += "</tr>")
    }), h += l + c)
   }), n.prepend(s), n.append(e(h)), o.before(n)
  })
 }, e.fn.stackcolumns = function(t) {
  var i = this,
   n = {},
   o = e.extend({}, n, t);
  return i.each(function() {
   var t = e(this),
    i = t.find(">thead>tr,>tbody>tr,>tfoot>tr").eq(0).find(">td,>th").length;
   if (!(i < 3)) {
    var n = e('<table class="stacktable small-only"></table>');
    void 0 !== o.myClass && n.addClass(o.myClass), t.addClass("stacktable large-only");
    for (var r = e("<tbody></tbody>"), s = 1; s < i;) t.find(">thead>tr,>tbody>tr,>tfoot>tr").each(function(t) {
     var i = e("<tr></tr>");
     0 === t && i.addClass("st-head-row st-head-row-main");
     var n = e(this).find(">td,>th").eq(0).clone().addClass("st-key"),
      o = s;
     if (e(this).find("*[colspan]").length) {
      var a = 0;
      e(this).find(">td,>th").each(function() {
       var t = e(this).attr("colspan");
       if (t ? (t = parseInt(t, 10), o -= t - 1, a + t > s && (o += a + t - s - 1), a += t) : a++, a > s) return !1
      })
     }
     var l = e(this).find(">td,>th").eq(o).clone().addClass("st-val").removeAttr("colspan");
     i.append(n, l), r.append(i)
    }), ++s;
    n.append(e(r)), t.before(n)
   }
  })
 }
}(jQuery), APP = window.APP || {}, APP.Controls = APP.Controls || {}, APP.Controls.Page = APP.Controls.Page || {}, APP.Controls.Layout = APP.Controls.Layout || {}, APP.Controls.Partial = APP.Controls.Partial || {}, APP.Controls.Form = APP.Controls.Form || {}, APP.Controls.Popup = APP.Controls.Popup || {}, APP.Controls.Case = APP.Controls.Case || {}, APP.Helper = APP.Helper || {}, APP.CaseHelper = APP.CaseHelper || {},
 function(e, t, i) {
  window.requestAnimFrame = function() {
   return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame || function(e, t) {
    window.setTimeout(e, 1e3 / 60)
   }
  }(), t.ViewPort = {
   mobile: 900
  }, t.LoaderOffset = 300, t.Inputs = "input[type!=hidden], textarea, select, button", t.launchpadColor = ["#f06060", "#8cbeb2", "#f3b562", "#f2ebbf", "#5c4b51"], t.Helper.ColorsName = ["red", "blue", "brown", "bear", "yellow"], t.Helper.isViewPortMobile = function() {
   return window.innerWidth < t.ViewPort.mobile
  }, t.Helper.viewPortMobile = t.Helper.isViewPortMobile(), window.addEventListener("resize", function() {
   t.Helper.viewPortMobile = t.Helper.isViewPortMobile()
  }), t.Helper.isTouch = function() {
   var e = -1 != navigator.platform.indexOf("iPad") || null != navigator.userAgent.match(/iPad/i),
    t = -1 != navigator.platform.indexOf("iPhone") || -1 != navigator.userAgent.indexOf("iPhone"),
    i = -1 != navigator.platform.indexOf("iPod") || -1 != navigator.userAgent.indexOf("iPod"),
    n = -1 != navigator.platform.indexOf("Android") || -1 != navigator.userAgent.indexOf("Android");
   return e || t || i || n
  }, t.Helper.isIE = function() {
   var e = window.navigator.userAgent,
    t = e.indexOf("MSIE ");
   if (t > 0) return parseInt(e.substring(t + 5, e.indexOf(".", t)), 10);
   if (e.indexOf("Trident/") > 0) {
    var i = e.indexOf("rv:");
    return parseInt(e.substring(i + 3, e.indexOf(".", i)), 10)
   }
   var n = e.indexOf("Edge/");
   return n > 0 && parseInt(e.substring(n + 5, e.indexOf(".", n)), 10)
  }, t.Helper.isMobile = !1, (navigator.userAgent.match(/(iPad|iPhone|iPod|Android)/g) || t.Helper.isViewPortMobile()) && (e("html").addClass("is-mobile"), t.Helper.isMobile = !0), t.Helper.isIos = !1, navigator.userAgent.match(/(iPad|iPhone|iPod)/g) && (e("html").addClass("is-ios"), t.Helper.isIos = !0), t.Helper.isSafari = !1, -1 != navigator.userAgent.indexOf("Safari") && -1 == navigator.userAgent.indexOf("Chrome") && (t.Helper.isSafari = !0), t.Helper.isIPod = function() {
   return navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPod/i)
  }, t.Helper.defaultFancyboxSettings = {
   scrolling: "visible",
   scrollOutside: !1,
   padding: 0,
   margin: 10,
   fitToView: !0,
   helpers: {
    overlay: {
     locked: !0
    }
   },
   beforeShow: function() {
    if (this.href) {
     var i = e(".fancybox-wrap .popup");
     if (i.length > 0) {
      var n = e(".fancybox-overlay"),
       o = i.closest(".fancybox-wrap");
      n.length > 0 && 0 == o.closest(".fancybox-overlay").length && (o.appendTo(n), e("html").addClass("fancybox-lock"));
      var r = can.capitalize(can.camelize(i.data("popup-type")));
      t.Controls.Popup[r] ? new t.Controls.Popup[r](i) : new t.Controls.Popup.Base(i)
     }
    }
   }
  }, t.Helper.defaultSkrollrSettings = {
   forceHeight: !1
  }, t.Helper.defaultStacktableSettings = {}, t.Helper.initForms = function(i, n) {
   i.find(n).each(function() {
    var i = e(this),
     n = can.capitalize(can.camelize(i.data("form-type")));
    i.controls(t.Controls.Form[n]).length > 0 || ("function" == typeof t.Controls.Form[n] ? new t.Controls.Form[n](i) : new t.Controls.Form.Base(i))
   })
  }, t.Helper.getPathLen = function(t) {
   var i = e(t);
   return !(i.length < 1) && i.get(0).getTotalLength()
  }, t.Helper.ArrayRand = function(e, t) {
   var i = Object.keys(e);
   if (t = void 0 === t || null === t ? 1 : +t, isNaN(t) || t < 1 || t > i.length) return null;
   for (var n = i.length - 1; n > 0; n--) {
    var o = Math.floor(Math.random() * (n + 1)),
     r = i[o];
    i[o] = i[n], i[n] = r
   }
   return 1 === t ? i[0] : i.slice(0, t)
  }, t.Helper.getRandColor = function() {
   var e = t.Helper.ArrayRand(t.Helper.ColorsName);
   return t.Helper.ColorsName[e]
  }, t.Helper.hexToRgb = function(e) {
   return {
    r: parseInt(e.substr(1, 2), 16),
    g: parseInt(e.substr(3, 2), 16),
    b: parseInt(e.substr(5, 2), 16)
   }
  }, t.Helper.StrReplace = function(e, t, i, n) {
   var o = 0,
    r = 0,
    s = "",
    a = "",
    l = 0,
    c = 0,
    d = [].concat(e),
    u = [].concat(t),
    h = i,
    p = "[object Array]" === Object.prototype.toString.call(u),
    f = "[object Array]" === Object.prototype.toString.call(h);
   h = [].concat(h);
   var m = "undefined" != typeof window ? window : global;
   m.$locutus = m.$locutus || {};
   var v = m.$locutus;
   if (v.php = v.php || {}, "object" == typeof e && "string" == typeof t) {
    for (s = t, t = [], o = 0; o < e.length; o += 1) t[o] = s;
    s = "", u = [].concat(t), p = "[object Array]" === Object.prototype.toString.call(u)
   }
   for (void 0 !== n && (n.value = 0), o = 0, l = h.length; o < l; o++)
    if ("" !== h[o])
     for (r = 0, c = d.length; r < c; r++) s = h[o] + "", a = p ? void 0 !== u[r] ? u[r] : "" : u[0], h[o] = s.split(d[r]).join(a), void 0 !== n && (n.value += s.split(d[r]).length - 1);
   return f ? h : h[0]
  }, t.Helper.AnimateWave = function(t) {
   var i = void 0 != t.windowWidth ? t.windowWidth : window.innerWidth,
    n = void 0 != t.windowHeight ? t.windowHeight : window.innerHeight,
    o = void 0 != t.mouseX ? t.mouseX : 0,
    r = void 0 != t.mouseY ? t.mouseY : 0,
    s = void 0 != t.navTop ? t.navTop : 0,
    a = void 0 != t.navWidth ? t.navWidth : 0,
    l = t.elements,
    c = void 0 != t.elementsCount ? t.elementsCount : l.length,
    d = void 0 != t.scrollLeft ? t.scrollLeft : 0,
    u = void 0 != t.waveHeight ? t.waveHeight : 40,
    h = n / 4,
    p = r - s,
    f = 0;
   f = i > a ? o - .5 * (i - a) : d + o;
   var m = 0;
   Math.abs(p) < h && (m = p > h / 2 ? h - p : p > 0 ? p / 2 + h / 4 : p < -h / 2 ? -p - h : p / 2 - h / 4), m = m * u * 2 / h;
   var v = a / c;
   l.each(function(t, i) {
    var n = e(i),
     o = t * v,
     r = Math.abs(f - o);
    r > 300 && (r = 300);
    var s = m * (300 - r) / 300,
     a = s * Math.cos(.025 * r);
    n.css("transform", "translateY(" + a + "px)")
   })
  }, t.Helper.AnimateWaveVertical = function(t) {
   var i = void 0 != t.windowWidth ? t.windowWidth : window.innerWidth,
    n = void 0 != t.mouseX ? t.mouseX : 0,
    o = void 0 != t.mouseY ? t.mouseY : 0,
    r = void 0 != t.navWidth ? t.navWidth : 0,
    s = void 0 != t.navHeight ? t.navHeight : 0,
    a = t.elements,
    l = void 0 != t.elementsCount ? t.elementsCount : a.length,
    c = void 0 != t.waveHeight ? t.waveHeight : 40,
    d = i / 8,
    u = n - r / 2,
    h = o,
    p = 0;
   Math.abs(u) < d && (p = u > d / 2 ? d - u : u > 0 ? u / 2 + d / 4 : u < -d / 2 ? -u - d : u / 2 - d / 4), p = p * c * 2 / d;
   var f = s / l;
   a.each(function(t, i) {
    var n = e(i),
     o = t * f,
     r = Math.abs(h - o);
    r > 300 && (r = 300);
    var s = p * (300 - r) / 300,
     a = s * Math.cos(.025 * r);
    n.css("transform", "translateX(" + a + "px)")
   })
  }
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Partial.PageProgress = can.Control.extend({
   init: function() {
    this.$win = e(window), this.$doc = e(document), this.$progressBar = this.element, this.$doc.bind("DOMSubtreeModified", this.setSizes.bind(this))
   },
   "{window} scroll": function() {
    this.setWidth()
   },
   "{window} resize": function() {
    this.setSizes()
   },
   setSizes: function() {
    this.len = this.$doc.height() - this.$win.height(), this.setWidth()
   },
   setWidth: function() {
    var e = this.$win.scrollTop(),
     t = e / this.len,
     i = parseInt(100 * t);
    this.$progressBar.css("width", i + "%")
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Partial.Goup = can.Control.extend({
   init: function() {
    this.$win = e(window), this.$body = e("body"), this.$darkButtonBlock = this.$body.find('[data-button-color="dark"]'), this.isDarkButtonPage = this.$body.find('[data-page-color="dark"]').length > 0, this.isDarkButtonPage && this.element.addClass("dark"), this.onResize(), this.checkVisibility(), this.checkColor()
   },
   touchstart: function() {
    e.scrollTo(0, 400)
   },
   click: function() {
    e.scrollTo(0, 400)
   },
   "{window} scroll": function() {
    this.checkVisibility(), this.checkColor()
   },
   "{window} resize": function() {
    this.onResize(), this.checkVisibility(), this.checkColor()
   },
   onResize: function() {
    this.windowHeight = window.innerHeight, this.colorData = [], this.$darkButtonBlock.each(function(t, i) {
     var n = e(i);
     this.colorData.push({
      top: n.offset().top,
      height: n.outerHeight()
     })
    }.bind(this))
   },
   checkVisibility: function() {
    this.scrollTop = this.$win.scrollTop();
    var e = this.scrollTop > 500;
    this.$body.toggleClass("go-up-visible", e), e ? this.element.fadeIn(200) : this.element.fadeOut(200)
   },
   checkColor: function() {
    var e = this.isDarkButtonPage;
    this.colorData.forEach(function(t) {
     var i = this.scrollTop >= t.top - this.windowHeight / 2,
      n = this.scrollTop <= t.top + t.height - this.windowHeight / 2;
     i && n && (e = !0)
    }.bind(this)), this.element.toggleClass("dark", e)
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Partial.ClearText = can.Control.extend({
   init: function() {
    this.wrapImages(), this.element.find("table:not(.stacktable)").stacktable(t.Helper.defaultStacktableSettings)
   },
   wrapImages: function() {
    this.$images = this.element.find("> img, figure img").not(".js-wrapped"), this.$images.each(this.wrapImage.bind(this))
   },
   wrapImage: function(i, n) {
    var o = e(n),
     r = e("<figure>"),
     s = e("<figcaption>"),
     a = o.attr("alt"),
     l = o.parent("figure").length;
    o.addClass("js-wrapped"), l || r.append(o.clone()), a && (s.html(e("<div>", {
     html: a
    })), s.addClass("transparent-block").addClass(t.Helper.getRandColor()), l ? o.after(s) : r.append(s)), l || o.replaceWith(r)
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Partial.CopyText = can.Control.extend({
   init: function() {
    document.addEventListener("copy", this.addLink.bind(this))
   },
   addLink: function() {
    var e = document.getElementsByTagName("body")[0];
    if ("contacts" === e.dataset.pageType) return !0;
    var t = window.getSelection();
    if (t.toString().trim().match(/^\+?7\s?[\d]{3}\s?[\d]{3}[\-\s]?[\d]{2}[\-\s]?[\d]{2}$/)) return !0;
    if (t.toString().trim().match(/^[-._a-z0-9]+@(?:[a-z0-9][-a-z0-9]+\.)+[a-z]{2,6}$/)) return !0;
    var i = "<br /> Подробнее на сайте scrum-студии Сибирикс: " + document.location.href,
     n = t + i,
     o = document.createElement("div");
    o.style.position = "absolute", o.style.left = "-99999px", e.appendChild(o), o.innerHTML = n, t.selectAllChildren(o), window.setTimeout(function() {
     e.removeChild(o)
    }, 0)
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Partial.PageBackground = can.Control.extend({
   defaults: {
    events: {
     changePageBackground: "changePageBackground",
     resetPageBackground: "resetPageBackground"
    }
   }
  }, {
   init: function() {
    1 != this.inited && (this.inited = !0, this.$video = this.element.find("video"), this.videoControl = new t.Controls.Partial.HtmlVideo(this.$video), this.defaultVideo = void 0 != this.$video.attr("src") ? this.$video.attr("src").trim() : "", void 0 == this.defaultVideo && (this.defaultVideo = ""), this.defaultPicture = this._getUrl(this.element.css("background-image")), this.videoValue = this.defaultVideo, this.pictureValue = this.defaultPicture, this.$video.css("visibility", "visible"))
   },
   "{events.changePageBackground}": function(e, t, i) {
    var n = this._checkParam(i.video, this.defaultVideo),
     o = this._checkParam(i.picture, this.defaultPicture);
    this._changeBackground(n, o)
   },
   "{events.resetPageBackground}": function() {
    this._changeBackground(this.defaultVideo, this.defaultPicture)
   },
   _changeBackground: function(e, t) {
    this.videoValue == e && this.pictureValue == t || (this.videoValue = e, this.pictureValue = t, this.element.stop(!0, !1).fadeOut({
     duration: 200,
     complete: function() {
      void 0 != e && void 0 != this.videoControl && this.videoControl.changeVideoSrc(e), this.element.css("background-image", "url(" + t + ")"), this.element.stop(!0, !1).fadeIn(200)
     }.bind(this)
    }))
   },
   _getUrl: function(e) {
    return void 0 == e ? "" : e.slice(4, -1).replace(/"/g, "")
   },
   _checkParam: function(e, t) {
    return void 0 == e ? t : e.length < 1 ? t : e
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Partial.ComponentAjax = can.Control.extend({
   defaults: {
    loader: ".js-ajax-loader",
    events: {
     successAjax: "successAjax",
     load: "load"
    }
   }
  }, {
   init: function() {
    this.ajax = !1, this.end = !1, this.$doc = e(document), this.$win = e(window), this.initPage(), this.getSize(), this.element.bind("DOMSubtreeModified", function() {
     this.getSize()
    }.bind(this))
   },
   "{events.load}": function(e, t, i) {
    this.url = i.uri, this.sendAjax(i.page)
   },
   "{window} load": function() {
    this.getSize()
   },
   "{window} resize": function() {
    this.getSize(), this.checkLoader()
   },
   "{window} scroll": function() {
    this.checkLoader()
   },
   "{loader} click": function(e, t) {
    t.preventDefault(), this.sendAjax()
   },
   initPage: function() {
    void 0 != this.$loader && this.$loader.remove(), this.$loader = this.element.find(this.options.loader).first(), this.url = this.$loader.attr("href")
   },
   getSize: function() {
    this.screenHeight = window.innerHeight, this.docHeight = this.$doc.height(), this.diff = this.docHeight - this.screenHeight
   },
   checkLoader: function() {
    var e = this.$win.scrollTop();
    Math.abs(this.diff - e) < t.LoaderOffset && this.sendAjax()
   },
   sendAjax: function(t) {
    t = t || !1;
    var i = !1;
    0 == t && this.$loader.hasClass("disabled") || void 0 == this.url || this.ajax || (this.ajax = !0, t && (i = !0), e.ajax({
     type: "post",
     data: {
      ajax: !0
     },
     url: this.url,
     success: this.ajaxSuccess.bind(this, i, t)
    }))
   },
   ajaxSuccess: function(t, i, n) {
    var o = e(n),
     r = o.find(".js-component-ajax");
    r.length > 0 && (n = r.html()), t ? (this.element.html('<div class="component-ajax-content">' + n + "</div>"), this.options.pagerWrap.trigger("enable", {
     page: i
    }), e.scrollTo(0, 300)) : this.element.append('<div class="component-ajax-content">' + n + "</div>"), this.initPage(), this.element.trigger("successAjax"), this.getSize(), this.ajax = !1
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Partial.Pager = can.Control.extend({
   defaults: {
    events: {
     update: "update",
     enable: "enable"
    }
   }
  }, {
   init: function() {
    this.$win = e(window), this.$doc = e(document), this.winHeight = this.$win.height(), this.docHeight = this.$doc.height(), this.title = e("title").text(), this.page = this.element.find(".js-first-on-page").eq(0).data("page"), this.$pager = this.element.find(".js-pager"), this.sectionCode = this.$pager.data("section-code"), this.size = this.$pager.data("size"), this.total = this.$pager.data("total"), this.uri = this.element.find(".js-pager-uri").data("uri"), this.$wrap = this.element.find(".js-inner-pager"), this.$outer = this.$wrap.find(".js-side-pager"), this.total <= this.size || (this.calcPeriods(), this.$outer.pagination({
     dataSource: this._generateArray(this.total),
     pageSize: this.size,
     pageRange: 1,
     showPrevious: !0,
     showNext: !0,
     showPageNumbers: !0,
     beforePreviousOnClick: this.goTo.bind(this),
     beforeNextOnClick: this.goTo.bind(this),
     beforePageOnClick: this.goTo.bind(this),
     callback: function(e, t) {}
    }), this.$outer.pagination("go", this.page), this.$win.on("scroll", this.scroll.bind(this)))
   },
   "{events.update}": function() {
    this.calcPeriods()
   },
   "{events.enable}": function(e, t, i) {
    this.$outer.pagination("enable"), this.$outer.pagination("go", i.page), this.$outer.find(".loading").removeClass("loading")
   },
   scroll: function() {
    var e = this.$win.scrollTop();
    this.getActive(e)
   },
   calcPeriods: function() {
    var t = this;
    this.periods = [], this.$pages = this.element.find(".js-first-on-page"), this.$pages.each(function(i) {
     var n = e(this),
      o = n.offset().top - t.winHeight,
      r = o + t.docHeight - t.winHeight + 160,
      s = [o, r];
     0 == i && (s[0] = 0), t.periods.push(s)
    })
   },
   getActive: function(e) {
    if (!(this.total <= this.size || this.$pages.length < 2))
     for (var t = 0; t < this.periods.length; t++)
      if (e >= this.periods[t][0] && e < this.periods[t][1]) {
       this.$active = this.$pages.eq(t);
       var i = this.$active.data("page");
       this.page != i && (this.setPage(i), this.page = i);
       break
      }
   },
   setPage: function(e) {
    this.$outer.pagination("go", e);
    var i = t.Helper.StrReplace(["#page#", "#section#"], [e, this.sectionCode], this.uri);
    history.pushState({}, this.title, i)
   },
   goTo: function(i, n) {
    i.preventDefault(), this.$outer.pagination("disable"), e(i.target).parent("li").addClass("active loading");
    var o = t.Helper.StrReplace(["#page#", "#section#"], [n, this.sectionCode], this.uri);
    history.pushState({}, this.title, o), this.options.loaderWrap.trigger("load", {
     page: n,
     uri: o
    })
   },
   _generateArray: function(e) {
    for (var t = [], i = 1; i <= e; i++) t.push(i);
    return t
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Partial.TextPageNav = can.Control.extend({
   disabled: !1,
   offset: 100,
   init: function() {
    this.$body = e("body"), this.$text = this.element.find(".js-text-block"), this.$nav = this.element.find(".js-page-nav"), this.$doc = e(document), this.$text.hasClass("js-process-tilda") ? this.buildTildaAnchors() : this.buildAnchors(), this.getSizes(), this.checkCurrentItem(), this.$nav.hasClass("vertical") ? this.animateWaveLoopVertical() : this.animateWaveLoop(), this.$body.addClass("tagline-badge-upper")
   },
   "{window} mousemove": function(e, t) {
    this.mouseX = t.pageX, this.mouseY = t.pageY
   },
   "{window} scroll": function() {
    this.scrollTop = e(window).scrollTop(), this.checkCurrentItem()
   },
   "{window} resize": function() {
    this.getSizes(), this.checkCurrentItem()
   },
   "{window} load": function() {
    this.getSizes(), this.checkCurrentItem()
   },
   ".js-page-nav a click": function(t, i) {
    i.preventDefault();
    var n;
    n = this.$text.hasClass("js-process-tilda") ? "a[name=" + t.data("href") + "]" : t.attr("href"), e.scrollTo(e(n), 300, {
     offset: -this.offset
    })
   },
   getSizes: function() {
    this.disabled || (this.scrollTop = Math.round(e(window).scrollTop()), this.windowHeight = Math.round(window.innerHeight), this.windowWidth = Math.round(window.innerWidth), this.navWidth = this.$navContainer.width(), this.navHeight = this.$navContainer.height(), this.isMobile = t.Helper.isViewPortMobile(), this.docHeight = this.$doc.height(), e.each(this.targetData, function(t, i) {
     e.extend(i, {
      targetTop: i.$target.offset().top
     })
    }.bind(this)), this.checkCurrentItem())
   },
   buildAnchors: function() {
    this.targetData = {};
    var t = this.$text.find("[id]").filter("div, p, h1, h2, h3, h4, h5, a, span");
    if (t.length < 2) return void(this.disabled = !0);
    this.$nav.show();
    for (var i = Math.round(100 / (t.length + 1)), n = '<div class="content-container">', o = 0; o < i; o++) n += '<span class="nav-line js-nav-item"></span>';
    t.each(function(t, o) {
     var r = e(o),
      s = r.attr("id"),
      a = r.text();
     this.targetData[s] = {
      id: s,
      $target: r
     }, n += '<a class="nav-section js-nav-item" href="#' + s + '"><span>' + a + "</span></a>";
     for (var l = 0; l < i; l++) n += '<span class="nav-line js-nav-item"></span>'
    }.bind(this)), n += "</div>", this.$nav.append(n), this.$navContainer = this.$nav.find(".content-container"), this.$navElements = this.$nav.find(".js-nav-item"), this.navOffset = this.$nav.find(".content-container").get(0).getBoundingClientRect().top
   },
   buildTildaAnchors: function() {
    this.targetData = {};
    var t = this.$text.find("a[name]");
    if (t.length < 2) return void(this.disabled = !0);
    this.$nav.show();
    for (var i = Math.round(80 / (t.length + 1)), n = '<div class="content-container">', o = 0; o < i; o++) n += '<span class="nav-line js-nav-item"></span>';
    var r = this.$text.find(".t607");
    t.each(function(t, o) {
     var s = e(o),
      a = s.attr("name"),
      l = r.find("a[href=#" + a + "]").find(".t607__tooltip").text();
     this.targetData[a] = {
      id: a,
      $target: s
     }, n += '<a class="nav-section js-nav-item" href="#' + a + '" data-href="' + a + '"><span>' + l + "</span></a>";
     for (var c = 0; c < i; c++) n += '<span class="nav-line js-nav-item"></span>'
    }.bind(this)), n += "</div>", this.$nav.append(n), this.$navContainer = this.$nav.find(".content-container"), this.$navElements = this.$nav.find(".js-nav-item"), this.navOffset = this.$nav.find(".content-container").get(0).getBoundingClientRect().top
   },
   animateWaveLoop: function() {
    this.disabled || (this.$body.hasClass("top-menu-opened") || this.isMobile || t.Helper.AnimateWave({
     windowWidth: this.windowWidth,
     windowHeight: this.windowHeight,
     mouseX: this.mouseX,
     mouseY: this.mouseY - this.scrollTop,
     navTop: this.$navContainer.offset().top - this.scrollTop + 40,
     navWidth: this.navWidth,
     elements: this.$navElements,
     elementsCount: this.navElementsCount,
     scrollLeft: 0,
     waveHeight: 20
    }), requestAnimFrame(function() {
     this.animateWaveLoop()
    }.bind(this)))
   },
   animateWaveLoopVertical: function() {
    this.disabled || (this.$body.hasClass("top-menu-opened") || this.isMobile || t.Helper.AnimateWaveVertical({
     windowWidth: this.windowWidth,
     windowHeight: this.windowHeight,
     mouseX: this.mouseX,
     mouseY: this.mouseY - this.scrollTop - this.navOffset,
     navWidth: this.navWidth,
     navHeight: this.navHeight,
     elements: this.$navElements,
     elementsCount: this.navElementsCount,
     scrollLeft: 0,
     waveHeight: 20
    }), requestAnimFrame(function() {
     this.animateWaveLoopVertical()
    }.bind(this)))
   },
   checkCurrentItem: function() {
    if (!this.disabled) {
     var t = !1,
      i = !1;
     if (e.each(this.targetData, function(e, n) {
       if (i) {
        var o = Math.round(this.scrollTop + this.offset - n.targetTop);
        o >= 0 && Math.round(this.scrollTop + this.offset - i.targetTop) > o && (i = n)
       } else i = n;
       (!t || t.top < n.top) && (t = n)
      }.bind(this)), i || t) {
      var n = i ? i.id : t.id,
       o = this.$navElements.filter('[href="#' + n + '"]');
      o.hasClass("current") || (this.$navElements.removeClass("current"), o.addClass("current"))
     }
    }
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Partial.Tagline = can.Control.extend({
   init: function() {
    this.$html = e("html"), this.domain = t.Helper.StrReplace(["www.", "blog."], ["", ""], window.location.host), this.data = Cookies.getJSON("tagline") || "", "hide" != this.data && (this.$html.addClass("show-tagline"), this.element.css("visibility", "visible"))
   },
   click: function(t, i) {
    e(i.target).hasClass("js-tagline-close") && i.preventDefault()
   },
   ".js-tagline-close click": function(e, t) {
    Cookies.set("tagline", "hide", {
     expires: 1,
     domain: this.domain
    }), this.element.remove(), this.$html.removeClass("show-tagline")
   },
   scroll: function() {
    var e = this.$win.scrollTop();
    this.getActive(e)
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Partial.LazyLoad = can.Control.extend({
   defaults: {
    events: {
     checkLazyToShow: "checkLazyToShow"
    }
   }
  }, {
   init: function() {
    this.checkLazyToShow()
   },
   "{window} scroll": function() {
    this.checkLazyToShow()
   },
   "{window} load": function() {
    this.checkLazyToShow()
   },
   "{window} resize": function() {
    this.checkLazyToShow()
   },
   "{events.checkLazyToShow}": function() {
    this.checkLazyToShow()
   },
   checkLazyToShow: function() {
    var t = this.element.find(".image.lazy-style");
    if (t.length) {
     var i = window.scrollY,
      n = i + window.innerHeight,
      o = window.innerHeight;
     i -= o, n += o, t.each(function(t, o) {
      var r = e(o);
      if (r.is(":visible")) {
       var s = r.offset().top,
        a = s + r.outerHeight();
       s < n && a > i && this.showImage(r)
      }
     }.bind(this))
    }
   },
   showImage: function(e) {
    e.attr("style", e.attr("data-style")), e.removeAttr("data-style"), e.removeClass("lazy-style")
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Partial.CoverVideo = can.Control.extend({
   defaults: {
    fullScreen: !1
   }
  }, {
   init: function() {
    this.$container = this.element.parent(), this.video = this.element.get(0), this.setVideoSize()
   },
   "{window} load": function() {
    this.setVideoSize()
   },
   "{window} resize": function() {
    this.setVideoSize()
   },
   setVideoSize: function() {
    if (void 0 != this.element && 0 != this.element.length) {
     var e = this.element.attr("src");
     if (void 0 != e && "" != e) {
      var t = 0,
       i = 0;
      void 0 == this.$container || this.options.fullScreen ? (t = window.innerHeight, i = window.innerWidth) : (t = this.$container.height(), i = this.$container.width());
      var n = this.video.videoHeight,
       o = this.video.videoWidth;
      if (0 != t && 0 != i && 0 != n && 0 != o) {
       var r = i,
        s = n * r / o;
       s < t && (s = t, r = o * s / n), this.element.height(s), this.element.width(r)
      }
     }
    }
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Partial.CoverVideoTrigger = can.Control.extend({
   defaults: {
    trigger: ".js-cover-video-trigger",
    required: !0,
    click: !1,
    events: {
     updateCoverVideoTrigger: "updateCoverVideoTrigger"
    }
   }
  }, {
   init: function() {
    this.$pageBackground = this.element.find(".page-content .js-page-background"), this.$triggers = this.element.find(this.options.trigger), this.options.required && this.setActive(this.$triggers.first())
   },
   "{trigger} mouseenter": function(e) {
    this.options.click || this.setActive(e)
   },
   "{trigger} mouseleave": function(e) {
    this.options.required || this.options.click || (this.$pageBackground.trigger("changePageBackground", [{}]), this.$triggers.removeClass("active"))
   },
   "{trigger} click": function(e) {
    this.options.click && this.setActive(e)
   },
   "{events.updateCoverVideoTrigger}": function() {
    this.$triggers = this.element.find(this.options.trigger)
   },
   setActive: function(e) {
    if (!e.hasClass("active")) {
     this.$triggers.removeClass("active"), e.addClass("active");
     var t = e.data("video"),
      i = e.data("picture");
     this.$pageBackground.trigger("changePageBackground", [{
      video: t,
      picture: i
     }])
    }
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Partial.HtmlVideo = can.Control.extend({
   defaults: {
    events: {
     playVideo: "playVideo",
     pauseVideo: "pauseVideo",
     pauseOn: "pauseOn",
     lazyLoad: "lazyLoad",
     updateVideoSize: "updateVideoSize",
     setCurrentTime: "setCurrentTime"
    }
   }
  }, {
   init: function() {
    this.$video = this.element, this.video = this.$video.get(0), this.src = this.$video.attr("src"), this.initVideo()
   },
   initVideo: function() {
    if (void 0 != this.src && "" != this.src) {
     void 0 == this.videoSizeControl ? this.videoSizeControl = new t.Controls.Partial.CoverVideo(this.$video) : this.videoSizeControl.setVideoSize(), this.video.muted = !0;
     var e = setInterval(function() {
      this.video.readyState > 0 && (this.duration = this.video.duration, this.video.paused && this.video.play(), clearInterval(e))
     }.bind(this), 50)
    }
   },
   "{events.playVideo}": function() {
    void 0 != this.src && "" != this.src && setTimeout(function() {
     this.video.paused && this.video.play()
    }.bind(this), 150)
   },
   "{events.pauseVideo}": function() {
    void 0 != this.src && "" != this.src && setTimeout(function() {
     this.video.paused || this.video.pause()
    }.bind(this), 150)
   },
   "{events.updateVideoSize}": function() {
    void 0 != this.videoSizeControl && this.videoSizeControl.setVideoSize()
   },
   "{events.pauseOn}": function(e, t, i) {
    void 0 != i && void 0 != this.src && "" != this.src && (this.video.ontimeupdate = function() {
     this.video.currentTime >= i && (this.video.pause(), this.video.ontimeupdate = !1)
    }.bind(this))
   },
   "{events.lazyLoad}": function() {
    var e = this.$video.data("src");
    void 0 != e && "" != e && e != this.src && (this.src = e, this.$video.attr("src", e), this.initVideo())
   },
   "{events.setCurrentTime}": function(e, t, i) {
    this.goTo(i)
   },
   changeVideoSrc: function(e) {
    void 0 != this.video && (this.$video.hide(), this.$video.attr("src", e), this.src = e, this.initVideo())
   },
   getDuration: function() {
    return this.duration
   },
   getCurrentTime: function() {
    return void 0 == this.video ? 0 : this.video.currentTime
   },
   goTo: function(e) {
    void 0 != this.video && (this.video.currentTime = e)
   },
   mute: function(e) {
    void 0 == e && (e = !0), this.video.muted = e
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Partial.LaunchpadVideo = can.Control.extend({
   defaults: {
    events: {
     loadLaunchpadVideo: "loadLaunchpadVideo",
     updateLaunchpadVideo: "updateLaunchpadVideo",
     pauseLaunchpadVideo: "pauseLaunchpadVideo",
     playLaunchpadVideo: "playLaunchpadVideo"
    }
   }
  }, {
   init: function() {
    this.$video = this.element, new t.Controls.Partial.HtmlVideo(this.$video)
   },
   "{events.loadLaunchpadVideo}": function() {
    this.$video.trigger("lazyLoad")
   },
   "{events.playLaunchpadVideo}": function() {
    this.$video.trigger("playVideo")
   },
   "{events.pauseLaunchpadVideo}": function() {
    this.$video.trigger("pauseVideo")
   },
   "{events.updateLaunchpadVideo}": function() {
    t.Helper.isViewPortMobile() || this.$video.trigger("updateVideoSize")
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Partial.vhSizes = can.Control.extend({
   defaults: {
    minScreenHeight: 600,
    events: {
     update: "update"
    }
   }
  }, {
   init: function() {
    this.$heightBlocks = this.element.find(".js-vh-height"), this.$minHeightBlocks = this.element.find(".js-vh-min-height"), this.setSize()
   },
   "{window} load": function() {
    this.setSize()
   },
   "{window} resize": function() {
    this.setSize()
   },
   setSize: function() {
    var e = Math.max(window.innerHeight, this.options.minScreenHeight);
    this.$heightBlocks.css("height", e), this.$minHeightBlocks.css("min-height", e)
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Partial.SquareBlock = can.Control.extend({
   init: function() {
    this.setSize(), this.element.addClass("init")
   },
   "{window} load": function() {
    this.setSize()
   },
   "{window} resize": function() {
    this.setSize()
   },
   setSize: function() {
    var e = t.Helper.isViewPortMobile() ? "auto" : this.element.outerWidth();
    this.element.css("height", e)
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Partial.ScrollFixedBlock = can.Control.extend({
   init: function() {
    this.$win = e(window), this.element.wrap(e('<div class="fixed-block-wrap"></div>')), this.$parent = this.element.parent(), this.delay = this.element.data("delay") || 0, this.ignoreHeight = this.element.data("ignore-height") || !1, this.setSizes(), this.setTop()
   },
   "{window} load": function() {
    this.setSizes(), this.setTop()
   },
   "{window} resize": function() {
    this.setSizes(), this.setTop()
   },
   "{window} scroll": function() {
    this.setTop(), this._setTimeout()
   },
   setSizes: function() {
    this.screenHeight = window.innerHeight, this.height = this.element.height(), this.top = this.screenHeight <= 720 ? 20 : 112, this.width = this.$parent.width()
   },
   setTop: function() {
    var e = this.$win.scrollTop(),
     i = this.height + this.top > this.screenHeight - 70;
    if (t.Helper.isViewPortMobile() || i && !this.ignoreHeight || e < this.delay) return void this.element.css({
     position: "relative",
     top: 0,
     width: "auto"
    }).removeClass("in-fixed");
    this.element.css({
     position: "fixed",
     width: this.width
    }), this.element.stop().animate({
     top: this.top
    }, 200).addClass("in-fixed")
   },
   _setTimeout: function() {
    clearTimeout(this.timeout), this.timeout = setTimeout(this.setTop.bind(this), 100)
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Partial.Header = can.Control.extend({
   defaults: {
    menuButton: ".js-menu-button"
   }
  }, {
   init: function() {
    this.$window = e(window), this.$header = this.element.find(".js-header"), this.$topMenu = this.element.find(".js-top-menu"), this.$topMenu.each(function() {
     new t.Controls.Partial.TopMenu(e(this))
    });
    var i = this.element.find(".js-tagline-head");
    i.length && new t.Controls.Partial.Tagline(i), new t.Controls.Partial.Search(this.element), this.checkHeaderState()
   },
   "{window} load": function() {
    this.checkHeaderState(), this.sendTypeMenu()
   },
   "{window} scroll": function() {
    this.checkHeaderState()
   },
   "{window} resize": function() {
    this.checkHeaderState()
   },
   "{menuButton} click": function() {
    this.$topMenu.trigger("toggleVisibility")
   },
   "{window} keydown": function(e, t) {
    27 == t.keyCode && this.$topMenu.trigger("hideMenu")
   },
   checkHeaderState: function() {
    var e = this.$window.scrollTop();
    this.$header.toggleClass("fixed", e > 0)
   },
   sendTypeMenu: function() {
    var e = setInterval(function() {
     var i = t.Helper.isViewPortMobile() ? "mobile" : this.$topMenu.find(".js-menu-variant").data("variant");
     i && "undefined" != typeof yaCounter1791280 && (yaCounter1791280.params({
      ab_test_main_menu: i
     }), clearInterval(e))
    }.bind(this), 1e3)
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Partial.TopMenu = can.Control.extend({
   defaults: {
    section: ".section",
    sectionCaption: ".section-caption",
    sectionLink: "js-section-link-mobile",
    video: ".js-launchpad-video",
    inputs: t.Inputs,
    events: {
     toggleVisibility: "toggleVisibility",
     hideMenu: "hideMenu"
    }
   }
  }, {
   loadLaunchpadVideo: !1,
   init: function() {
    this.$body = e("body"), this.$topMenu = this.element.find(this.options.section), this.$sections = this.element.find(this.options.section), this.$sectionContents = this.$sections.find(".section-content"), this.$bgVideo = this.$body.find(".page-background video"), this.$sectionVideo = this.$sections.find(this.options.video), this.$menuButton = this.$body.find(".js-menu-button"), this.$inputs = this.element.find(this.options.inputs), this.$currentInput = this.$inputs.first(), this.checkSectionsVisibility()
   },
   "{window} load": function() {
    this.checkSectionsVisibility()
   },
   "{window} resize": function() {
    this.checkSectionsVisibility()
   },
   "{inputs} focus": function(e) {
    this.$currentInput = e
   },
   "{events.toggleVisibility}": function() {
    this.element.hasClass("opened") ? this._hideMenu() : this._showMenu()
   },
   "{events.hideMenu}": function() {
    this._hideMenu()
   },
   _showMenu: function() {
    this.loadLaunchpadVideo || (this.$sectionVideo.each(function() {
     new t.Controls.Partial.LaunchpadVideo(e(this))
    }).trigger("loadLaunchpadVideo"), this.loadLaunchpadVideo = !0), this.element.addClass("opened"), this.$body.addClass("top-menu-opened"), this.$menuButton.addClass("opened"), this.element.fadeIn({
     duration: 200,
     complete: function() {
      this.$sectionVideo.trigger("updateLaunchpadVideo")
     }.bind(this)
    }), !t.Helper.isViewPortMobile() && this.$bgVideo && this.$bgVideo.trigger("pauseVideo"), t.Helper.isViewPortMobile() || t.Helper.isMobile || this.$currentInput.focus()
   },
   _hideMenu: function() {
    this.element.removeClass("opened"), this.$body.removeClass("top-menu-opened"), this.$menuButton.removeClass("opened"), this.element.fadeOut({
     duration: 200,
     complete: function() {}.bind(this)
    }), !t.Helper.isViewPortMobile() && this.$bgVideo && this.$bgVideo.trigger("playVideo")
   },
   "{section} mouseenter": function(e) {
    e.addClass("hover"), t.Helper.isViewPortMobile() || e.find(this.options.video).trigger("playLaunchpadVideo")
   },
   "{section} mouseleave": function(e) {
    e.removeClass("hover"), t.Helper.isViewPortMobile() || e.find(this.options.video).trigger("pauseLaunchpadVideo")
   },
   "{sectionCaption} click": function(i, n) {
    var o = i.closest(this.options.section);
    if (!e(n.target).hasClass("all-button") || !o.hasClass("hover")) {
     if ((t.Helper.isTouch() || t.Helper.isViewPortMobile()) && n.preventDefault(), i.hasClass(this.options.sectionLink) && t.Helper.isTouch()) return window.location.href = i.attr("href"), !1;
     t.Helper.isViewPortMobile() && o.find(".section-content").slideToggle(200)
    }
   },
   checkSectionsVisibility: function() {
    t.Helper.isViewPortMobile() ? (this.$bgVideo = !1, this.$sectionContents.hide()) : (this.$bgVideo = this.$body.find(".page-background video"), this.$sectionContents.show())
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Partial.Search = can.Control.extend({
   init: function() {
    this.$body = e("body"), this.$form = this.element.find("form"), this.path = this.$form.attr("action"), this.$container = this.element.find(".js-search-container"), this.$scroll = this.element.find(".js-scroll"), this.$block = this.element.find(".js-header-search"), this.$input = this.$block.find('input[type="text"]'), this.loading = !1, this.append = !1, this.scroll = !1, t.allowSearchFromUrl && this.searchFromUrl()
   },
   'input[type="text"] blur': function() {
    this.scroll
   },
   ".js-search-button click": function() {
    this.$block.hasClass("show") ? this.hide() : this.show()
   },
   "{window} keyup": function(e, t) {
    27 == t.keyCode && this.hide()
   },
   "{window} click": function(t, i) {
    var n = e(i.target);
    n.hasClass("header-search") || n.parents(".header-search").length || n.hasClass("js-search-button") || this.hide()
   },
   "form submit": function(e, t) {
    t.preventDefault(), this.submit()
   },
   '.js-header-search input[type="text"] keyup': function(e, t) {
    e.val().length < 3 || (clearTimeout(this.timeout), this.timeout = setTimeout(function() {
     this.submit()
    }.bind(this), 400))
   },
   submit: function() {
    !this.loading && e.trim(this.$input.val()) && (this.$scroll.addClass("loading"), this.append = !1, this.load(1))
   },
   load: function(t) {
    this.loading = !0, e.ajax({
     type: "post",
     url: this.path,
     data: {
      q: this.$input.val(),
      page: t
     },
     success: this.success.bind(this)
    })
   },
   loadNext: function() {
    if (!this.loading) {
     this.append = !0;
     var e = this.$container.find(".js-ajax-loader");
     e.hasClass("disabled") || (this.load(e.data("next-page")), e.remove())
    }
   },
   success: function(e) {
    var t = can.view("#ejs-template-search-results", e.data);
    this.initScroll(), this.$scroll.removeClass("loading"), this.loading = !1, e.success && (this.append ? this.$container.append(t) : this.$container.html(t))
   },
   show: function() {
    this.$body.addClass("header-search-opened locked"), this.$block.addClass("show"), this.$input.select(), setTimeout(function() {
     this.$input.focus()
    }.bind(this), 500)
   },
   hide: function() {
    this.$body.removeClass("header-search-opened locked"), this.$block.removeClass("show")
   },
   initScroll: function() {
    var e = this;
    if (t.Helper.isTouch()) return void this.$scroll.on("scroll", function(t) {
     var i = t.currentTarget;
     i.scrollTop > i.scrollHeight - i.clientHeight - 200 && e.loadNext()
    });
    this.scroll || (this.scroll = !0, this.$scroll.scrollbar({
     onScroll: function(t) {
      t.scroll == t.maxScroll && e.loadNext()
     }
    }), this.$scroll.closest(".js-scroll").removeClass("js-scroll results-block grid-row"), this.$scroll = this.element.find(".js-scroll"), this.$scroll.addClass("scrollbar-outer scrollbar-thin"))
   },
   searchFromUrl: function() {
    if (-1 != location.href.indexOf("/search")) {
     var e = {};
     location.search.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(t, i, n) {
      e[i] = decodeURI(n)
     }), e.q && (this.element.find('.js-header-search input[type="text"]').val(e.q), this.load(), this.show())
    }
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Partial.MainSlider = can.Control.extend({
   defaults: {
    mainSlider: ".js-main-slider",
    slide: ".slide",
    sliderNav: ".js-main-slider-nav",
    sliderArrows: ".js-main-slider-arrows",
    sliderDots: ".js-main-slider-dots",
    navItem: ".nav-item",
    video: ".js-yt-video",
    videoProgress: ".js-video-progress",
    videoDotsCount: 100
   }
  }, {
   init: function() {
    1 != this.inited && (this.inited = !0, this.$body = e("body"), this.mouseX = 0, this.mouseY = 0, this.animationMouseX = 0, this.animationMouseY = 0, this.NavItemClick = !1, this.currentSlideIndex = 0, this.$videoProgress = this.element.find(this.options.videoProgress), this.$video = e(".page-content .page-background video"), enableInlineVideo(this.$video.get(0)), this.$mainSlider = this.element.find(this.options.mainSlider), this.$slides = this.$mainSlider.find(this.options.slide), this.$sliderNav = this.element.find(this.options.sliderNav), this.getSizes(), this.generateNav(), this.initSlider(), this.generateVideoProgress(), this.initVideo())
   },
   "{window} load": function() {
    this.getSizes()
   },
   "{window} resize": function() {
    this.getSizes(), this.setVideoProgressDotsSize()
   },
   "{navItem} click": function(e) {
    var t = e.data("slide-index");
    this.NavItemClick = !0, this.$mainSlider.slick("slickGoTo", t)
   },
   "{window} mousemove": function(e, t) {
    this.mouseX = t.pageX, this.mouseY = t.pageY, this.isVideoReady && (this.animationMouseX = this.mouseX, this.animationMouseY = this.mouseY)
   },
   getSizes: function() {
    this.windowHeight = window.innerHeight, this.windowWidth = window.innerWidth, this.sliderNavWidth = this.$sliderNav.width(), this.sliderNavTop = this.$sliderNav.offset().top, this.isMobile = t.Helper.isViewPortMobile()
   },
   initVideo: function() {
    if (void 0 != this.$video && !(this.$video.length < 1)) {
     if (this.video = this.$video.get(0), void 0 == this.video) return void this.$video.hide();
     this.videoControl = new t.Controls.Partial.HtmlVideo(this.$video), this.isVideoInited = !0, this.video.played || this._lockVideo(), this.video.onplaying = function() {
      this._unlockVideo()
     }.bind(this), this.video.onwaiting = function() {
      this._lockVideo()
     }.bind(this), this.timestamps = [], this.$slides.each(function(t, i) {
      var n = e(i);
      this.timestamps.push({
       time: n.data("timestamp"),
       slideIndex: t
      })
     }.bind(this)), setInterval(function() {
      this.updateVideoProgress()
     }.bind(this), 100), setInterval(function() {
      this.checkVideoState()
     }.bind(this), 1e3), window.addEventListener("touchstart", function e() {
      this.video && this.video.paused && (this.video.play(), window.removeEventListener("touchstart", e))
     }.bind(this))
    }
   },
   _lockVideo: function() {
    this.isVideoReady = !1, this.element.addClass("locked-slider"), clearInterval(this.lockVideoInterval), this.lockVideoInterval = setInterval(function() {
     this.animationMouseX += 20, this.animationMouseX > this.windowWidth && (this.animationMouseX = 0), this.animationMouseY = this.sliderNavTop - this.windowHeight / 6
    }.bind(this), 50)
   },
   _unlockVideo: function() {
    this.isVideoReady = !0, this.element.removeClass("locked-slider"), clearInterval(this.lockVideoInterval), this.animationMouseX = this.mouseX, this.animationMouseY = this.mouseY
   },
   updateVideoProgress: function() {
    if (!this.isMobile && this.isVideoInited && this.isVideoReady) {
     var e = this.videoControl.getCurrentTime();
     this.setVideoProgress(e);
     var t;
     this.timestamps.forEach(function(i) {
      if (i.time <= e) {
       var n = i.slideIndex;
       (void 0 === t || t < n) && (t = n)
      }
     }.bind(this)), void 0 === t && (t = this.timestamps[this.timestamps.length - 1].slideIndex), -1 === t && (t = 0), t !== this.currentSlideIndex && this.$mainSlider.slick("slickGoTo", t)
    }
   },
   generateVideoProgress: function() {
    if (void 0 != this.$videoProgress && !(this.$videoProgress.length < 1)) {
     for (var t = "", i = 0; i < this.options.videoDotsCount; i++) t += '<span class="dot" style="animation-delay: ' + 100 * i + 'ms"></span>';
     this.$videoProgress.append(e(t)), this.$videoDots = this.$videoProgress.find(".dot"), this.setVideoProgressDotsSize()
    }
   },
   setVideoProgressDotsSize: function() {
    var e = 1e3 / (2 * this.options.videoDotsCount);
    void 0 != this.$videoDots && (this.$videoDots.length < 1 || this.$videoDots.css({
     height: e,
     width: e,
     "border-radius": e / 2
    }))
   },
   setVideoProgress: function(e) {
    if (this.isVideoInited && this.isVideoReady && void 0 != this.$videoDots && !(this.$videoDots.length < 1)) {
     var t = e,
      i = this.videoControl.getDuration(),
      n = t / i,
      o = Math.round(this.options.videoDotsCount * n);
     this.$videoDots.css({
      opacity: .1
     }), this.$videoDots.eq(o).css({
      opacity: 1
     });
     for (var r = 1, s = 0; r > .2;) s++, r -= .1, o + s <= this.options.videoDotsCount && this.$videoDots.eq(o + s).css({
      opacity: r
     }), o - s >= 0 && this.$videoDots.eq(o - s).css({
      opacity: r
     })
    }
   },
   checkVideoState: function() {
    void 0 != this.video && this.video.played && (this.isVideoReady || this._unlockVideo())
   },
   initSlider: function() {
    this.$mainSlider.on("init", function(e, t) {
     this.beforeChangeSlide(e, t, -1, 0)
    }.bind(this)), this.$mainSlider.slick({
     arrows: !1,
     appendArrows: this.element.find(this.options.sliderArrows),
     appendDots: this.element.find(this.options.sliderDots),
     infinite: !1,
     prevArrow: '<a href="javascript:void(0);" class="slick-prev nav-item"></a>',
     nextArrow: '<a href="javascript:void(0);" class="slick-next nav-item"></a>',
     fade: !0,
     touchThreshold: 20,
     swipe: !1,
     draggable: !1,
     responsive: [{
      breakpoint: t.ViewPort.mobile,
      settings: {
       arrows: !0,
       adaptiveHeight: !0,
       dots: !0,
       swipe: !0,
       draggable: !0
      }
     }]
    }), this.$mainSlider.on("swipe", function(e, t, i) {
     this.NavItemClick = !0
    }.bind(this)), this.$mainSlider.on("beforeChange", function(e, t, i, n) {
     this.beforeChangeSlide(e, t, i, n)
    }.bind(this))
   },
   beforeChangeSlide: function(e, t, i, n) {
    this.currentSlideIndex = n, this.$sliderNavItems.removeClass("active").removeClass("active-section");
    var o = t.$slides.eq(n),
     r = this.$sliderNavItems.filter('[data-slide-index="' + n + '"]');
    r.addClass("active");
    var s = r.data("section");
    if (this.$sliderNavItems.filter('[data-section-item="true"][data-section="' + s + '"]').addClass("active-section"), this.NavItemClick && this.isVideoInited && this.isVideoReady) {
     var a = o.data("timestamp");
     this.videoControl.goTo(a)
    }
    this.NavItemClick = !1
   },
   generateNav: function() {
    var t = "",
     i = 0;
    this.$slides.each(function(n, o) {
     var r = e(o),
      s = void 0 != r.data("section-item"),
      a = r.data("section"),
      l = r.data("link") || !1,
      c = "nav-item";
     s && (c += " section", i += 2e3);
     for (var d = "", u = 0; u < 10; u++) d += '<span class="line"></span>';
     d += l ? '<a href="' + l + '" data-slide-index="' + n + '" class="' + c + '" data-section="' + a + '" data-section-item="' + s + '">' : '<div data-slide-index="' + n + '" class="' + c + '" data-section="' + a + '" data-section-item="' + s + '">', s && (d += '<div class="item-title">' + a + "</div>"), d += l ? "</a>" : "</div>", t += d
    }.bind(this)), this.$sliderNav.append(t), this.$sliderNavItems = this.$sliderNav.find(this.options.navItem), this.$waveElements = this.$sliderNav.find(".line, " + this.options.navItem), this.waveElementsCount = this.$waveElements.length, this.animateWaveLoop()
   },
   animateWaveLoop: function() {
    this.$body.hasClass("top-menu-opened") || this.isMobile || t.Helper.AnimateWave({
     windowWidth: this.windowWidth,
     windowHeight: this.windowHeight,
     mouseX: this.animationMouseX,
     mouseY: this.animationMouseY,
     navTop: this.sliderNavTop,
     navWidth: this.sliderNavWidth,
     elements: this.$waveElements,
     elementsCount: this.waveElementsCount
    }), requestAnimFrame(function() {
     this.animateWaveLoop()
    }.bind(this))
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Partial.CasesSlider = can.Control.extend({
   defaults: {
    slider: ".js-cases-slider",
    sliderArrows: ".js-cases-slider-arrows",
    $pageWrapper: null
   }
  }, {
   init: function() {
    this.$slider = this.element.find(this.options.slider), this.initSlider()
   },
   initSlider: function() {
    this.$slider.on("init", this.checkLazyToShow.bind(this)), this.$slider.on("afterChange", this.checkLazyToShow.bind(this)), this.$slider.slick({
     arrows: !1,
     appendArrows: this.element.find(this.options.sliderArrows),
     infinite: !0,
     prevArrow: '<a href="javascript:void(0);" class="slick-prev"/>',
     nextArrow: '<a href="javascript:void(0);" class="slick-next"/>',
     fade: !0,
     touchThreshold: 20,
     swipe: !1,
     dots: !1,
     draggable: !1,
     responsive: [{
      breakpoint: t.ViewPort.mobile,
      settings: {
       arrows: !0,
       adaptiveHeight: !0,
       dots: !1,
       swipe: !0,
       draggable: !0
      }
     }]
    })
   },
   checkLazyToShow: function() {
    this.options.$pageWrapper && this.options.$pageWrapper.trigger("checkLazyToShow")
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Partial.WhiskeyBreakSlider = can.Control.extend({
   defaults: {
    slider: ".js-slider",
    thumbSlider: ".js-thumbs",
    thumbMobileSlider: ".js-mobile-thumbs",
    thumb: ".thumb",
    activeClass: "slick-current",
    thumbsCount: 11
   }
  }, {
   init: function() {
    this.$slider = this.element.find(this.options.slider), this.$thumbSlider = this.element.find(this.options.thumbSlider), this.$thumbMobileSlider = this.element.find(this.options.thumbMobileSlider), this.$thumbs = this.$thumbSlider.find(this.options.thumb), this.$thumbs.eq(0).addClass(this.options.activeClass), this.$slider.slick({
     asNavFor: this.options.thumbMobileSlider,
     adaptiveHeight: !0,
     fade: !0,
     infinite: !1,
     prevArrow: '<a href="javascript:void(0);" class="slick-prev"></a>',
     nextArrow: '<a href="javascript:void(0);" class="slick-next"></a>'
    }).on("beforeChange", function(e, t, i, n) {
     this.setActiveThumb(n)
    }.bind(this)), this.$thumbSlider.slick({
     arrows: !1,
     fade: !0,
     infinite: !1
    }), this.$thumbMobileSlider.slick({
     arrows: !1,
     asNavFor: this.options.slider,
     infinite: !1,
     slidesToShow: 5,
     focusOnSelect: !0,
     responsive: [{
      breakpoint: 560,
      settings: {
       slidesToShow: 4
      }
     }, {
      breakpoint: 450,
      settings: {
       slidesToShow: 3
      }
     }]
    })
   },
   "{thumb} click": function(e) {
    e.hasClass(this.options.activeClass) || this.$slider.slick("slickGoTo", e.data("slide-index"))
   },
   setActiveThumb: function(e) {
    this.$thumbs.removeClass(this.options.activeClass), this.$thumbs.filter('[data-slide-index="' + e + '"]').addClass(this.options.activeClass);
    var t = Math.floor(e / this.options.thumbsCount);
    this.$thumbSlider.slick("slickGoTo", t)
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Partial.WhiskeyMouseDown = can.Control.extend({
   init: function() {
    this.$win = e(window), this.height = this._getTarget(), this.height = this.height ? this.height : 650
   },
   click: function() {
    e.scrollTo(this.height, 400)
   },
   "{window} scroll": function() {
    this.$win.scrollTop() >= this.height && this.element.fadeOut()
   },
   _getTarget: function() {
    var t = this.element.data("target");
    if (!t) return !1;
    var i = e(t).eq(0);
    return !!i.length && i.offset().top - 100
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Partial.ProductSliders = can.Control.extend({
   defaults: {
    miniSlideWidth: 64
   }
  }, {
   init: function() {
    this.$win = e(window), this.$info = this.element.find(".js-feedback-info"), this.$title = this.$info.find(".js-feedback-title"), this.$name = this.$info.find(".js-feedback-name"), this.$company = this.$info.find(".js-feedback-company"), this.$text = this.$info.find(".js-feedback-text"), this.$feedbackMainSlider = this.element.find(".js-feedback-main-slider"), this.$feedbackMiniSlider = this.element.find(".js-feedback-mini-slider"), this.$mainSlides = this.$feedbackMainSlider.find(".slide"), this.$feedbackMainSlider.slick({
     slidesToShow: 1,
     prevArrow: '<a href="javascript:void(0);" class="slick-prev"></a>',
     nextArrow: '<a href="javascript:void(0);" class="slick-next"></a>',
     touchThreshold: 20,
     asNavFor: ".js-feedback-mini-slider"
    }), this.$feedbackMiniSlider.slick({
     infinite: !0,
     slidesToScroll: 1,
     slidesToShow: 4,
     arrows: !1,
     touchThreshold: 20,
     focusOnSelect: !0,
     asNavFor: ".js-feedback-main-slider",
     responsive: [{
      breakpoint: t.ViewPort.mobile,
      settings: {
       variableWidth: !0,
       slidesToShow: this._getMiniSlideWidth()
      }
     }]
    }), this.$feedbackMainSlider.on("beforeChange", this.beforeChange.bind(this)), this.setSlideInfo(0)
   },
   beforeChange: function(e, t, i, n) {
    this.setSlideInfo(n)
   },
   setSlideInfo: function(e) {
    var t = this.$mainSlides.eq(e);
    this.$title.html(t.data("title")), this.$name.html(t.data("name")), this.$company.html(t.data("company")), this.$text.html(t.data("text"))
   },
   _getMiniSlideWidth: function() {
    var e = this.$win.width();
    return Math.floor(e / this.options.miniSlideWidth)
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Partial.ProductTriggers = can.Control.extend({
   init: function() {
    this.$triggers = this.element.find(".js-triggers a"), this.$targets = this.element.find(".js-trigger-target"), this.targets = this._prepareTargets(), this.$triggers.eq(0).click()
   },
   ".js-triggers a click": function(e) {
    this.$triggers.removeClass("active"), e.addClass("active"), this.setActive(e.index())
   },
   setActive: function(t) {
    this.$targets.removeClass("last").filter(".active").addClass("last"), this.$targets.removeClass("active"), e.each(this.targets, function(e, i) {
     i.eq(t).hasClass("active") || i.eq(t).addClass("active")
    })
   },
   _prepareTargets: function() {
    var t = [];
    return this.element.find(".js-trigger-targets").each(function(i) {
     t[i] = e(this).find(".js-trigger-target")
    }), t
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Partial.ProductParallax = can.Control.extend({
   init: function() {
    t.Helper.isMobile || skrollr.init(t.Helper.defaultSkrollrSettings)
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Partial.BlogLoader = can.Control.extend({
   defaults: {
    events: {
     load: "load"
    }
   }
  }, {
   init: function() {
    this.$win = e(window), this.$doc = e(document), this.title = e("title").text(), this.container = this.element.find(".js-container"), this.$pager = this.element.find(".js-pager"), this.path = this.$pager.data("path"), this.loading = !1, this._resize(), this._scroll()
   },
   "{events.load}": function(e, t, i) {
    this.load(i.page)
   },
   "{window} scroll": function() {
    this._scroll()
   },
   "{window} resize": function() {
    this._resize()
   },
   _resize: function() {
    this.winHeight = this.$win.height(), this.docHeight = this.$doc.height(), this.diff = this.docHeight - this.winHeight - t.LoaderOffset
   },
   _scroll: function() {
    this.diff <= this.$win.scrollTop() && this.load()
   },
   load: function(t) {
    t = t || !1;
    var i = !1;
    0 == t && this.$pager.hasClass("disabled") || this.loading || (this.loading = !0, this.page = this.$pager.data("page"), this.sectionId = this.$pager.data("section-id"),
     this.sectionCode = this.$pager.data("section-code"), t ? i = !0 : t = this.page, e.ajax({
      type: "post",
      url: this.path,
      data: {
       page: t,
       sectionId: this.sectionId,
       sectionCode: this.sectionCode
      },
      dataType: "html",
      success: this.success.bind(this, i, t)
     }))
   },
   success: function(t, i, n) {
    this.loading = !1;
    var o = e(n);
    o.find(".blog-item").addClass("blog-item-animated"), this.$pager.remove(), t ? (this.container.html(o), this.options.pagerWrap.trigger("enable", {
     page: i
    }), e.scrollTo(0, 300)) : this.container.append(o), this.$pager = this.element.find(".js-pager"), this._resize(), this.options.pagerWrap.trigger("update")
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Partial.SubscribeForm = can.Control.extend({
   init: function() {
    this.$wrap = this.element, this.$submit = this.element.find(".js-submit-subscribe"), this.$form = this.element.find("form"), this.path = this.$form.attr("action"), this.disabled = !0, this.validator = this.$form.validate({
     highlight: this._highlight.bind(this),
     unhighlight: this._unhighlight.bind(this)
    })
   },
   ".js-terms change": function(e, t) {
    1 == e.prop("checked") ? (this.disabled = !1, this.$submit.removeClass("disabled")) : (this.disabled = !0, this.$submit.addClass("disabled"))
   },
   "form submit": function(t, i) {
    i.preventDefault(), this.disabled || !this.$form.valid() || this.$wrap.hasClass("loading") || (this.$wrap.addClass("loading"), e.ajax({
     type: "post",
     url: this.path,
     data: this.$form.serialize(),
     success: this.success.bind(this)
    }))
   },
   ".js-submit-subscribe click": function() {
    this.disabled || this.$form.submit()
   },
   success: function(e) {
    this.$wrap.removeClass("loading"), e.success ? this.showSuccess() : (this.validator.showErrors(e.errors), this.showError())
   },
   showError: function() {
    this.$wrap.addClass("error")
   },
   hideError: function() {
    this.$wrap.removeClass("error")
   },
   showSuccess: function() {
    this.$wrap.removeClass("error"), this.$wrap.addClass("success");
    var e = this.$form.data("ya-goal");
    e && "undefined" != typeof dataLayer && dataLayer.push({
     event: e
    })
   },
   _highlight: function(e, t) {
    this.showError()
   },
   _unhighlight: function(e, t) {
    this.hideError()
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Partial.PostAutoloader = can.Control.extend({
   firstLoad: !1,
   init: function() {
    this.$win = e(window), this.$title = e("title"), this.winHeight = this.$win.height(), this.$container = this.element.find(".js-posts"), this.$progressBar = e(".js-blog-progress"), this.loadPrevPath = this.$container.data("load-prev-path"), this.loadingFlag = !1, this.stopFlag = !this.loadPrevPath, this.$active = this.$container.find(".js-post").last(), this.$progressBar.css("background", this.$active.data("color")), this.initCurrentBlock();
    var i = this.$current.data("vk-likes-count");
    i && setTimeout(function() {
     this.element.find(".likely__counter_vkontakte").eq(0).html(i).removeClass("likely__counter_empty")
    }.bind(this), 3e3), this.domain = t.Helper.StrReplace(["www.", "blog."], ["", ""], window.location.host), this.subscribePopupHandler()
   },
   "{window} load": function() {},
   initCurrentBlock: function() {
    if (this.$items = this.$container.find(".js-post"), this.$current = this.$items.last(), this.$loadData = this.$current.find(".js-previous"), !this.$loadData.length) return void(this.stopFlag = !0);
    this.prevId = this.$loadData.data("id"), this.$container.attr("data-current-id", this.$active.data("id")), this.element.find(".js-clear-text").each(function() {
     new t.Controls.Partial.ClearText(e(this))
    }), this.element.find(".tilda-post table:not(.stacktable)").stacktable(t.Helper.defaultStacktableSettings)
   },
   "{window} scroll": function() {
    this.scroll()
   },
   "{window} resize": function() {
    this.calcPeriods()
   },
   scroll: function() {
    this.firstLoad || (this.firstLoad = !0, this.load());
    var e = this.$win.scrollTop();
    this.getActive(e)
   },
   load: function() {
    this.stopFlag || this.loadingFlag || (this.loadingFlag = !0, e.ajax({
     type: "post",
     url: this.loadPrevPath,
     dataType: "html",
     data: {
      id: this.prevId
     },
     success: this.success.bind(this)
    }))
   },
   success: function(i) {
    this.loadingFlag = !1, this.$container.append(i), this.initCurrentBlock(), this.calcPeriods(), this.scroll(), this.subscribePopupHandler(), likely.initiate(), this.element.find(".js-post:not(.inited)").not(".inited").each(function() {
     new t.Controls.Partial.PostItem(e(this))
    })
   },
   calcPeriods: function() {
    var t = this;
    this.periods = [], this.$items.each(function(i) {
     var n = e(this),
      o = n.outerHeight(),
      r = n.offset().top,
      s = r + o,
      a = [r, s];
     0 == i && (a[0] = 0), t.periods.push(a)
    })
   },
   getActive: function(e) {
    if (!(this.$items.length < 2)) {
     for (var t = 0; t < this.periods.length; t++)
      if (e >= this.periods[t][0] && e < this.periods[t][1]) {
       var i = this.periods[t];
       this.$active = this.$items.eq(t);
       break
      } var n = e - i[0],
      o = i[1] - i[0],
      r = n / o,
      s = parseInt(100 * r),
      a = i[1] - e,
      l = (a / 1e3).toFixed(1),
      c = l <= .1 ? "none" : "block";
     if (this.$progressBar.css("width", s + "%"), this.$items.removeClass("active-page"), this.$active.addClass("active-page").next().find(".js-next-overlay").css({
       opacity: l,
       display: c
      }), this.$container.attr("data-current-id") != this.$active.data("id")) {
      this.calcPeriods(), history.replaceState({}, null, this.$active.data("relative-url")), this.$progressBar.css("background", this.$active.data("color")), this.$title.html(this.$active.data("title")), this.$active.find(".js-next-overlay").hide(), this.$items.find(".js-disqus-thread").removeAttr("id"), this.$active.find(".js-disqus-thread").attr("id", "disqus_thread"), this.$active.next().length || this.load();
      var d = this.$active.data("vk-likes-count");
      d && this.$active.find(".likely__counter_vkontakte").html(d).removeClass("likely__counter_empty")
     }
     this.$container.attr("data-current-id", this.$active.data("id"))
    }
   },
   subscribePopupHandler: function() {
    if (!t.subscribePopupUrl) return !1;
    var i = Cookies.get("VIEW_POST_COUNTER_FOR_SUBSCRIBE_POPUP");
    i = parseInt(i), i = isNaN(i) ? 0 : i + 1;
    var n = Cookies.get("IS_SUBSCRIBER");
    if (i >= 5 && !n) {
     i = 0;
     var o = t.Helper.defaultFancyboxSettings;
     o.href = t.subscribePopupUrl, o.type = "ajax";
     var r = new Date((new Date).getTime() + 2592e6);
     Cookies.set("IS_SUBSCRIBER", 1, {
      expires: r,
      domain: this.domain
     }), e.fancybox(o)
    }
    Cookies.set("VIEW_POST_COUNTER_FOR_SUBSCRIBE_POPUP", i, {
     domain: this.domain
    })
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Partial.PostComments = can.Control.extend({
   init: function() {
    this.$win = e(window), this.$body = e("body"), this.$header = e(".js-header"), this.$comments = this.element.find(".js-comments-block")
   },
   "{window} click": function(t, i) {
    e(i.target).hasClass("comments-block-overlay") && this.close()
   },
   "{window} keyup": function(e, t) {
    27 == t.keyCode && this.close()
   },
   ".js-open-comments click": function(e) {
    this.open(e)
   },
   ".js-close-comments click": function(e) {
    this.close()
   },
   close: function() {
    this.$comments.removeClass("show"), this.$header.removeClass("hide"), this.$body.removeClass("lock"), this.$body.removeClass("comments-opened")
   },
   open: function(e) {
    this.$comments.addClass("show"), this.$header.addClass("hide"), this.$body.addClass("lock"), this.$body.addClass("comments-opened");
    var i = e.parents(".js-post"),
     n = (i.data("xml-id"), i.data("url"));
    t.Helper.isIos && this.$comments.css({
     position: "absolute",
     top: this.$win.scrollTop()
    }), "undefined" != typeof DISQUS && DISQUS.reset({
     reload: !0,
     config: function() {
      this.page.url = n
     }
    })
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Partial.PostItem = can.Control.extend({
   init: function() {
    this.element.addClass("inited"), this.initButtonGroups()
   },
   initButtonGroups: function() {
    var e = this.element.find(".js-button-group");
    if (e.length) {
     e.addClass("show");
     var t = this.element.find(".t001__descr").eq(0);
     t.length && (e.insertAfter(t), e.addClass("under-title"))
    }
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Partial.ProcessVimeo = can.Control.extend({
   init: function() {
    this.$wrap = this.element.find(".js-video-wrap"), this.$iframe = this.$wrap.find("iframe"), this.iframe = this.$iframe[0], this.player = $f(this.iframe), this.$iframe.reframe(), this.player.addEvent("ready", this.ready.bind(this)), this.player.addEvent("play", this.play.bind(this)), this.player.addEvent("pause", this.stop.bind(this))
   },
   ".js-video-play-btn click": function() {
    this.$wrap.hasClass("play") ? this.stop() : this.play()
   },
   ready: function() {
    this.player.addEvent("playProgress", this.playProgress.bind(this)), this.player.addEvent("finish", this.finish.bind(this))
   },
   play: function() {
    this.$wrap.addClass("play"), this.player.api("play")
   },
   stop: function() {
    this.$wrap.removeClass("play"), this.player.api("pause")
   },
   finish: function() {
    this.$wrap.removeClass("play")
   },
   playProgress: function(e) {}
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Partial.ProcessMenu = can.Control.extend({
   defaults: {
    showClass: "show",
    current: ".js-current",
    menu: ".js-aside-nav",
    form: ".js-form-wrap"
   }
  }, {
   init: function() {
    this.$win = e(window), this.$menu = this.element.find(this.options.menu), this.$form = this.element.find(this.options.form), this.resize()
   },
   "{window} resize": function() {
    this.resize()
   },
   "{window} scroll": function() {
    this.scroll()
   },
   "{current} mouseenter": function() {
    this.showMenu()
   },
   "{menu} mouseleave": function(t, i) {
    this.isToggle() || 0 !== e(i.relatedTarget).closest(".site-nav-inner").length || this.hideMenu()
   },
   "{menu} .current click": function(e, t) {
    t.preventDefault()
   },
   resize: function() {
    this.formTop = this.$form.offset().top, this.scroll()
   },
   scroll: function() {
    this.$menu.toggleClass(this.options.showClass, this.isToggle())
   },
   showMenu: function() {
    this.$menu.addClass(this.options.showClass)
   },
   hideMenu: function() {
    this.$menu.removeClass(this.options.showClass)
   },
   isToggle: function() {
    var e = this.$win.scrollTop();
    return e > this.$form.offset().top - this.$win.height() || 0 === e
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Partial.ContactsMap = can.Control.extend({
   mapInited: !1,
   init: function() {
    this.$map = this.element.find(".js-map"), this.$triggers = this.element.find(".js-address-coords"), this.$closeBtn = this.element.find(".js-map-close"), this.$header = this.element.find(".header"), this.data = this._getData(), this.$triggers.on("click", this.show.bind(this)), this.$closeBtn.on("click", this.close.bind(this)), setTimeout(function() {
     e.getScript("https://api-maps.yandex.ru/2.1/?lang=ru_RU")
    }, 5e3)
   },
   initMap: function(e) {
    ymaps.ready(function() {
     this.map = new ymaps.Map("map", {
      center: [this.data.msk[0], this.data.msk[1]],
      zoom: 17,
      controls: []
     }), this.addPins(), this.mapInited = !0, this.show(e)
    }.bind(this))
   },
   addPins: function() {
    var e = new ymaps.Placemark([this.data.msk[0], this.data.msk[1]], {}, {
      iconLayout: "default#image",
      iconImageHref: "/local/images/map-pin-msk.svg",
      iconImageSize: [51, 63]
     }),
     t = new ymaps.Placemark([this.data.brn[0], this.data.brn[1]], {}, {
      iconLayout: "default#image",
      iconImageHref: "/local/images/map-pin-brn.svg",
      iconImageSize: [51, 63]
     });
    this.map.geoObjects.add(e), this.map.geoObjects.add(t)
   },
   show: function(t) {
    if (this.mapInited) {
     var i = e(t.currentTarget),
      n = this.data[i.data("code")];
     this.$header.addClass("black"), this.$map.addClass("show"), this.map.panTo([n[0], n[1]], {
      flying: !1,
      delay: 0
     })
    } else this.initMap(t)
   },
   close: function() {
    this.$header.removeClass("black"), this.$map.removeClass("show")
   },
   _getData: function() {
    var t = this.$triggers,
     i = {};
    return t.each(function() {
     var t = e(this);
     i[t.data("code")] = [t.data("lan"), t.data("lat")]
    }), i
   }
  })
 }(jQuery, window.APP),
 function(e, t, i) {
  t.Controls.Form.LoopForm = can.Control.extend({
   defaults: {
    items: t.Inputs
   }
  }, {
   init: function() {
    this.fields = this.element.find(this.options.items).filter(":visible"), this.first = this.fields.first(), this.last = this.fields.last(), this.fields.length >= 1 && (this.last.on("keydown", this.focusFirst.bind(this)), this.first.on("keydown", this.focusLast.bind(this)))
   },
   focusFirst: function(e) {
    9 != e.keyCode || e.shiftKey || (e.preventDefault(), this.first.focus())
   },
   focusLast: function(e) {
    9 == e.keyCode && e.shiftKey && (e.preventDefault(), this.last.focus())
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Form.Placeholders = can.Control.extend({
   defaults: {
    input: t.Inputs,
    filledClass: "filled",
    focusClass: "focus",
    inputContainer: ".input",
    select: ".js-select"
   }
  }, {
   init: function() {
    this.$inputList = this.element.find(this.options.input), this.$inputList.each(function(t, i) {
     this.checkPlaceholder(e(i))
    }.bind(this)), this.$inputList.on("changeValue", function(t) {
     this.checkPlaceholder(e(t.target))
    }.bind(this))
   },
   "{input} focus": function(e) {
    e.closest(this.options.inputContainer).addClass(this.options.focusClass), this.checkPlaceholder(e)
   },
   "{input} focusout": function(e) {
    e.closest(this.options.inputContainer).removeClass(this.options.focusClass), this.checkPlaceholder(e)
   },
   "{input} keyup": function(e) {
    this.checkPlaceholder(e)
   },
   "{input} keydown": function(e) {
    this.checkPlaceholder(e)
   },
   "{input} change": function(e) {
    this.checkPlaceholder(e)
   },
   checkPlaceholder: function(e) {
    var t = e.closest(this.options.inputContainer),
     i = e.val(),
     n = !1;
    void 0 != i && (n = i.length > 0), t.toggleClass(this.options.filledClass, n)
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Form.CustomFile = can.Control.extend({
   defaults: {
    events: {
     clear: "clear",
     clearError: "clearError",
     fill: "fill"
    }
   }
  }, {
   init: function() {
    this.$form = this.element.closest("form"), this.$container = this.element, this.$input = this.$container.find('input[type="file"]'), this.$label = this.$container.find(".file-label"), this.$fileIdInput = this.$container.find(".file-id-input"), this.fileSize = parseInt(this.$form.data("file-size")), void 0 == this.fileSize && (this.fileSize = 0), this.fileError = this.$form.data("file-error"), void 0 == this.fileError && (this.fileError = ""), this.extension = this.$form.data("file-extension"), void 0 == this.extension && (this.extension = "");
    var e = this;
    this.$input.dropzone({
     maxFiles: 1,
     maxFilesize: this.fileSize,
     acceptedFiles: this.extension,
     url: "/feedback/upload-file/",
     dictDefaultMessage: "Прикрепите файл",
     dictInvalidFileType: "Невозможно загрузить файл такого типа",
     dictFileTooBig: "Слишком большой файл",
     sending: function() {
      e.$container.addClass("loading"), e.$label.html("Загрузка..."), e.hideError()
     },
     uploadprogress: function(t) {
      t.size > 1024 * e.fileSize * 1024 || void 0 == t.name ? (e.showError(), e.clearInput()) : e.$label.html("Загрузка&nbsp;&nbsp;" + Math.round(t.upload.progress) + "%")
     },
     success: function(t, i) {
      e.checkAnswer(t, i)
     },
     error: function(t, i) {
      e.checkAnswer(t, i), this.removeAllFiles(!0)
     },
     accept: function(e, t) {
      t()
     },
     init: function() {
      this.on("addedfile", function() {
       null != this.files[1] && this.removeFile(this.files[0])
      })
     }
    })
   },
   'input[type="file"] click': function(e, t) {
    t.preventDefault()
   },
   "{events.clear}": function() {
    this.clearInput()
   },
   "{events.fill}": function(e, t, i) {
    var n = {
      name: i.name
     },
     o = {
      id: this.$fileIdInput.val()
     };
    this.fillInput(n, o, !1)
   },
   "{events.clearError}": function() {
    this.hideError()
   },
   ".remove-file click": function() {
    this.clearInput()
   },
   fillInput: function(e, t, i) {
    i = i || !0, this.$container.addClass("filled"), this.$label.html(e.name), this.$fileIdInput.attr("data-file", e.name), this.$fileIdInput.val(t.id), i && this.$fileIdInput.change()
   },
   clearInput: function() {
    this.$container.removeClass("filled"), this.$label.html("Прикрепить файл"), this.$input.val(""), this.$input[0].dropzone.removeAllFiles(), this.$fileIdInput.val("")
   },
   checkAnswer: function(e, t) {
    return this.$container.removeClass("loading"), void 0 == e || void 0 == t ? void this.clearInput() : t.success ? e.size > 1024 * this.fileSize * 1024 || void 0 == e.name ? (this.showError(), void this.clearInput()) : void this.fillInput(e, t, !0) : (this.showError(), void this.clearInput())
   },
   showError: function() {
    this.$container.addClass("error"), this.$container.append('<label class="error" for="' + this.$input.attr("id") + '">' + this.fileError + "</label>")
   },
   hideError: function() {
    this.$container.removeClass("error"), this.$container.find("label.error").remove()
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  e.extend(e.validator.messages, {
   required: "Заполните меня. Ну По-жаааа-луй-ста 🐱",
   remote: "Пожалуйста, введите правильное значение.",
   email: "Пожалуйста, введите корректный адрес электронной почты.",
   url: "Пожалуйста, введите корректный URL.",
   date: "Пожалуйста, введите корректную дату.",
   dateISO: "Пожалуйста, введите корректную дату в формате ISO.",
   number: "Пожалуйста, введите число.",
   digits: "Пожалуйста, вводите только цифры.",
   creditcard: "Пожалуйста, введите правильный номер кредитной карты.",
   equalTo: "Пожалуйста, введите такое же значение ещё раз.",
   extension: "Пожалуйста, загрузите изображение, документ или архив.",
   maxlength: e.validator.format("Пожалуйста, введите не больше {0} символов."),
   minlength: e.validator.format("Пожалуйста, введите не меньше {0} символов."),
   rangelength: e.validator.format("Пожалуйста, введите значение длиной от {0} до {1} символов."),
   range: e.validator.format("Пожалуйста, введите число от {0} до {1}."),
   max: e.validator.format("Пожалуйста, введите число, меньшее или равное {0}."),
   min: e.validator.format("Пожалуйста, введите число, большее или равное {0}.")
  }), e.validator.setDefaults({
   ignore: []
  }), t.Controls.Form.Base = can.Control.extend({
   init: function() {
    if (new t.Controls.Form.Placeholders(this.element), new t.Controls.Form.LoopForm(this.element), this.$customFiles = this.element.find(".file-input"), this.$customFiles.each(function() {
      new t.Controls.Form.CustomFile(e(this))
     }), this.element.find(".js-word").val(t.Word), !t.Helper.isMobile) {
     var i = this.element.find("textarea");
     i.scrollbar(), i.each(function() {
      e(this).parents(".scroll-textarea").addClass("scrollbar-outer")
     })
    }
    this.validate()
   },
   validate: function() {
    this.validator = this.element.validate({
     focusInvalid: !0,
     onfocusout: !1,
     onclick: !1,
     highlight: function(t) {
      e(t).closest(".input").addClass("error")
     },
     unhighlight: function(t) {
      e(t).closest(".input").removeClass("error")
     },
     submitHandler: function() {
      this.element.valid() ? this.submitForm() : this.validator.focusInvalid()
     }.bind(this)
    })
   },
   submitForm: function() {
    this.$customFiles.trigger("clearError"), e.ajax({
     url: this.element.attr("action"),
     method: this.element.attr("method") || "post",
     dataType: "json",
     data: this.element.serialize(),
     beforeSend: this.beforeSend.bind(this),
     success: this.checkAnswer.bind(this),
     error: this.checkAnswer.bind(this)
    })
   },
   onError: function(e) {},
   onSuccess: function(e) {},
   clearForm: function() {
    this.element.get(0).reset(), this.element.find(t.Inputs).trigger("change"), this.$customFiles.trigger("clear"), this.element.find(".js-request-id").val(""), this.element.find(".input.error").removeClass("error")
   },
   beforeSend: function() {
    this.element.addClass("load")
   },
   checkAnswer: function(t) {
    var i = this.element;
    if (this.element.removeClass("load"), this.clearForm(), void 0 != t) {
     if (t.success && this.onSuccess(t), void 0 != t.message && t.success) {
      var n = can.view.render("ejs-template-success-popup", {
       title: t.message.title,
       text: t.message.text,
       bg: t.message.bg
      });
      e.fancybox.open({
       content: n,
       wrapCSS: "dark"
      })
     } else this.onError(t);
     if (t.success) {
      var o = i.data("ya-goal");
      o && "undefined" != typeof yaCounter1791280 && yaCounter1791280.reachGoal(o), o && "undefined" != typeof yaCounter7396657 && yaCounter7396657.reachGoal(o), o && "undefined" != typeof dataLayer && dataLayer.push({
       event: o
      })
     }
    }
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Form.Feedback = t.Controls.Form.Base.extend({
   defaults: {
    events: {
     update: "update",
     clear: "clear"
    }
   }
  }, {
   init: function() {
    this._super(), this.domain = t.Helper.StrReplace(["www.", "blog."], ["", ""], window.location.host), this.$form = e('form[data-form-type="feedback"]').not(this.element), this.prefix = this.element.find('input[name="PREFIX"]').val() + "_", this.inputs = this.element.find('input[type="text"], textarea, .js-request-id, .file-id-input'), this.$id = this.element.find(".js-request-id"), this.$customFiles = this.element.find(".file-input"), this.$fileInput = this.$customFiles.find(".file-id-input"), this.disableSend = !1, this.populate()
   },
   'input[type="text"] change': function() {
    this.send(), this.collect()
   },
   "textarea change": function() {
    this.send(), this.collect()
   },
   ".file-id-input change": function() {
    this.data.FILE_NAME = this.$fileInput.attr("data-file"), this.data.FILE_ID = this.$fileInput.val(), this._setCookie(this.data)
   },
   "{events.update}": function() {
    this.populate()
   },
   "{events.clear}": function() {
    this._setCookie({}), this.inputs.each(function() {
     e(this).val("")
    }), this.$customFiles.find(".file-id-input").removeAttr("data-file"), this.element.find(t.Inputs).trigger("keyup")
   },
   populate: function() {
    this.data = Cookies.getJSON("feedback") || {}, "object" != typeof this.data || e.isEmptyObject(this.data) || this.inputs.each(this._populate.bind(this))
   },
   collect: function() {
    this.disableSend || (this.inputs.each(this._collect.bind(this)), this._setCookie(this.data), this.$form.each(function() {
     e(this).trigger("update")
    }))
   },
   _populate: function(i, n) {
    var o = t.Helper.StrReplace(this.prefix, "", n.getAttribute("name"));
    n.value = this.data[o], e(n).trigger("changeValue"), "FILE_ID" == o && this.data.FILE_NAME && this.$customFiles.trigger("fill", {
     name: this.data.FILE_NAME
    })
   },
   _collect: function(e, i) {
    var n = t.Helper.StrReplace(this.prefix, "", i.getAttribute("name"));
    this.data[n] = i.value, "FILE_ID" == n && this.data.FILE_ID && (this.data.FILE_NAME = i.getAttribute("data-file")), "FILE_ID" != n || this.data.FILE_ID || (this.data.FILE_NAME = "")
   },
   clearForm: function() {
    this._super(), this._setCookie({}), this.$customFiles.find(".file-id-input").removeAttr("data-file")
   },
   send: function() {
    this.disableSend || e.ajax({
     type: "post",
     url: "/feedback/save/",
     data: this.element.serialize(),
     success: this.success.bind(this)
    })
   },
   success: function(e) {
    this.$id.val(e.id), this.collect()
   },
   submitForm: function() {
    this._super(), this.disableSend = !0
   },
   checkAnswer: function(t) {
    var i = this.element;
    if (this._super(t), this.disableSend = !1, this.$form.each(function() {
      e(this).trigger("clear")
     }), t.success) {
     var n = i.data("ya-goal");
     n && "undefined" != typeof yaCounter1791280 && yaCounter1791280.params({
      feedbackId: t.id
     }), n && "undefined" != typeof yaCounter7396657 && yaCounter7396657.params({
      feedbackId: t.id
     }), "undefined" != typeof fbq && fbq("track", "InitiateCheckout")
    }
   },
   _setCookie: function(e) {
    Cookies.set("feedback", e, {
     expires: .023809523809523808,
     domain: this.domain
    })
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Form.Planning = t.Controls.Form.Base.extend({
   defaults: {
    countInput: ".js-count"
   }
  }, {
   init: function() {
    this._super(), this.$countInput = this.element.find(this.options.countInput), this.$price = this.element.find(".js-price")
   },
   "{countInput} keyup": function() {
    this.setPrice()
   },
   "{countInput} change": function() {
    this.setPrice()
   },
   setPrice: function() {
    var e = parseInt(this.$countInput.val());
    if (isNaN(e)) return this.$countInput.val(""), void this.$price.text(0);
    e < 1 && (e = 1, this.$countInput.val(1)), e > 10 && (e = 10, this.$countInput.val(10));
    var t = 2e3 + 700 * (e - 1);
    this.$price.text(t)
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Form.Cat = t.Controls.Form.Base.extend({
   init: function() {
    this._super()
   },
   checkAnswer: function(e) {
    this._super(e), e.success && Cookies.set("cat_lid", "1", {
     expires: 1e4
    })
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Form.Wanted = t.Controls.Form.Base.extend({
   init: function() {
    this._super()
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Form.SubscribeTriggerForm = t.Controls.Form.Base.extend({
   init: function() {
    this._super()
   },
   onError: function(e) {
    this.validator.showErrors(e.errors)
   },
   onSuccess: function(e) {
    this._super();
    var i = t.Helper.StrReplace(["www.", "blog."], ["", ""], window.location.host),
     n = new Date((new Date).getTime() + 2592e6);
    Cookies.set("IS_SUBSCRIBER", 1, {
     expires: n,
     domain: i
    })
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Popup.Base = can.Control.extend({
   init: function() {
    t.Helper.initForms(this.element, "form[data-form-type]"), setTimeout(function() {
     this.element.find(t.Inputs).each(function(t, i) {
      var n = e(i),
       o = n.val();
      if (void 0 == o || o.length < 1) return n.focus(), !1
     })
    }.bind(this), 500)
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Page.Init = can.Control.extend({
   initedJivosite: !1,
   init: function() {
    this.initPartials(), this.initFormController(), this.initPageProgress(), new t.Controls.Partial.CopyText(this.element), new t.Controls.Partial.Header(this.element.find(".js-header-container")), new t.Controls.Partial.Goup(this.element.find(".js-goup")), this.sendMenuProcessVariant(), this.initJivosite(), setTimeout(function() {
     this.element.addClass("inited")
    }.bind(this), 1e3)
   },
   ".js-popup-close click": function() {
    e.fancybox.close()
   },
   ".js-aside-nav .current click": function(e, t) {
    t.preventDefault()
   },
   ".js-ya-goal click": function(e) {
    "undefined" != typeof yaCounter1791280 && yaCounter1791280.reachGoal(e.data("goal")), "undefined" != typeof yaCounter7396657 && yaCounter7396657.reachGoal(e.data("goal"))
   },
   initPartials: function() {
    this.element.find(".js-popup").fancybox(t.Helper.defaultFancyboxSettings), this.element.find(".js-page-background").each(function() {
     new t.Controls.Partial.PageBackground(e(this))
    }), this.element.find(".js-square-block").each(function() {
     new t.Controls.Partial.SquareBlock(e(this))
    }), this.element.find(".js-scroll-fixed-block").each(function() {
     new t.Controls.Partial.ScrollFixedBlock(e(this))
    }), this.element.find("[data-icon-type]").addClass("ready")
   },
   initFormController: function() {
    t.Helper.initForms(this.element, "form[data-form-type]:not(.popup form)")
   },
   initPageProgress: function() {
    var e = this.element.find(".page-progress");
    e.length && new t.Controls.Partial.PageProgress(e)
   },
   initJivosite: function() {
    this.initedJivosite || (this.initedJivosite = !0, setTimeout(function() {
     if (!navigator.userAgent.match(/(iPad|iPhone|iPod|Android)/g) && t.JIVOSITE_ID) {
      var e = t.JIVOSITE_ID,
       i = document.createElement("script");
      i.type = "text/javascript", i.async = !0, i.src = "//code.jivosite.com/script/widget/" + e;
      var n = document.getElementsByTagName("script")[0];
      n.parentNode.insertBefore(i, n)
     }
    }.bind(this), 3e3))
   },
   sendMenuProcessVariant: function() {
    var e = setInterval(function() {
     var i = t.Helper.isViewPortMobile() ? "mobile" : this.element.find(".js-bottom-menu-process-variant").data("variant");
     i && "undefined" != typeof yaCounter1791280 && (yaCounter1791280.params({
      ab_test_process_variant: i
     }), clearInterval(e))
    }.bind(this), 1e3)
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Page.Main = can.Control.extend({
   orderBtnBottom: null,
   init: function() {
    new t.Controls.Partial.MainSlider(this.element), new t.Controls.Partial.LazyLoad(this.element), this.element.find(".cases-slider-container").each(function(e, i) {
     new t.Controls.Partial.CasesSlider(i, {
      $pageWrapper: this.element
     })
    }.bind(this)), this.sendAdaptiveVariant(), this.$orderBtn = this.element.find(".order-button-container .order-button"), this.$rocketBtn = this.element.find(".js-order-button-material"), this.checkRocketBtn()
   },
   "{window} scroll": function() {
    this.checkRocketBtn()
   },
   sendAdaptiveVariant: function() {
    var e = setInterval(function() {
     var i = this.element.data("experiment-name") || null;
     t.Helper.isViewPortMobile() || (i = "desktop"), null !== i && "undefined" != typeof yaCounter1791280 && (yaCounter1791280.params({
      ab_test_main_page_adaptive_variant: i
     }), clearInterval(e))
    }.bind(this), 1e3)
   },
   getOrderBtnBottom: function() {
    return this.orderBtnBottom ? this.orderBtnBottom : (this.orderBtnBottom = this.$orderBtn.closest(".page-content").height() - this.$orderBtn.position().top - this.$orderBtn.height() + 87, this.orderBtnBottom)
   },
   checkRocketBtn: function() {
    if (this.$orderBtn.length && this.$rocketBtn.length) {
     var t = this.$orderBtn.offset().top + this.$orderBtn.height(),
      i = this.getOrderBtnBottom(),
      n = e(window),
      o = n.scrollTop() + n.height(),
      r = this.element.hasClass("go-up-visible") ? 64 : 10;
     i += this.element.hasClass("go-up-visible") ? 0 : 54, t + r < o ? (this.element.css("position", "relative"), this.$rocketBtn.css("position", "absolute"), this.$rocketBtn.css("bottom", i), this.$rocketBtn.css("transition", "none")) : (this.element.css("position", ""), this.$rocketBtn.css("position", ""), this.$rocketBtn.css("bottom", ""))
    }
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Page.CaseList = can.Control.extend({
   init: function() {},
   "{window} load": function() {
    new t.Controls.Partial.BlogLoader(this.element, {
     pagerWrap: this.element
    }), new t.Controls.Partial.Pager(this.element, {
     loaderWrap: this.element
    })
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Page.CaseDetail = can.Control.extend({
   init: function() {}
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Page.CaseCommon = can.Control.extend({
   init: function() {
    this.initTextContent(), this.initImportCase(), this.element.find(".js-post:not(.inited)").not(".inited").each(function() {
     new t.Controls.Partial.PostItem(e(this))
    }), this.element.find(".js-no-autoloader").length || new t.Controls.Partial.PostAutoloader(this.element)
   },
   initTextContent: function() {
    this.element.find(".js-clear-text").each(function() {
     new t.Controls.Partial.ClearText(e(this))
    }), this.element.find(".tilda-post table:not(.stacktable)").stacktable(t.Helper.defaultStacktableSettings)
   },
   initImportCase: function() {
    var e = this.element.find("[data-case-control]");
    if (e.length > 0) {
     var i = can.capitalize(can.camelize(e.data("case-control")));
     t.Controls.Case[i] && new t.Controls.Case[i](e)
    }
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Page.Studio = can.Control.extend({
   init: function() {}
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Page.StudioClients = can.Control.extend({
   init: function() {
    var e = this.element.find(".js-component-ajax");
    new t.Controls.Partial.ComponentAjax(e, {
     pagerWrap: this.element
    }), new t.Controls.Partial.Pager(this.element, {
     loaderWrap: e
    })
   },
   "{window} load": function() {
    window.location.hash && e("html,body").css({
     scrollTop: e(window.location.hash).offset().top - 200
    })
   },
   ".js-component-ajax successAjax": function() {
    this.element.trigger("update"), this.element.find(".js-square-block:not(.init)").each(function() {
     new t.Controls.Partial.SquareBlock(e(this))
    })
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Page.StudioFeedback = can.Control.extend({
   init: function() {
    this.$grid = this.element.find(".js-grid")
   },
   "{window} load": function() {
    e.getScript("/local/js/lib/isotope.pkgd.min.js", function() {
     this.reload(), setTimeout(this.reload.bind(this), 1e3)
    }.bind(this))
   },
   "{window} DOMSubtreeModified": function() {
    this.reload()
   },
   reload: function() {
    void 0 !== this.$grid.isotope && this.$grid.isotope({
     itemSelector: ".js-grid-item",
     transitionDuration: 0
    })
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Page.StudioAwards = can.Control.extend({
   init: function() {}
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Page.StudioJob = can.Control.extend({
   init: function() {
    this.element.find(".js-job-slider").slick({
     slidesToShow: 1,
     prevArrow: '<a href="javascript:void(0);" class="slick-prev"></a>',
     nextArrow: '<a href="javascript:void(0);" class="slick-next"></a>',
     touchThreshold: 20
    })
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Page.StudioTeam = can.Control.extend({
   defaults: {
    teamSlideWidth: 112
   }
  }, {
   init: function() {
    this.inited = !0, this.$win = e(window), this.$html = e("html"), this.$title = e("title"), this.title = this.$title.text(), this.$info = this.element.find(".js-info"), this.$name = this.$info.find(".js-name"), this.$status = this.$info.find(".js-status"), this.$textWrap = this.$info.find(".js-text-wrap"), this.$fullText = this.$info.find(".js-full-text"), this.$shortText = this.$info.find(".js-short-text"), this.$personSlider = this.element.find(".js-person-slider"), this.$teamSlider = this.element.find(".js-team-slider"), this.$personSlides = this.$personSlider.find(".slide"), this.$faceboxes = this.element.find(".js-facebox");
    var i = this.element.find(".slide.selected"),
     n = i.index();
    this.$currentVideo = [], this.$personSlider.slick({
     lazyLoad: "ondemand",
     slidesToShow: 1,
     appendArrows: ".js-person-arrows",
     prevArrow: '<a href="javascript:void(0);" class="slick-prev"></a>',
     nextArrow: '<a href="javascript:void(0);" class="slick-next"></a>',
     touchThreshold: 20,
     fade: !0,
     asNavFor: ".js-team-slider"
    }), this.$personSlider.find("video").each(function() {
     new t.Controls.Partial.HtmlVideo(e(this))
    }), this.setSlideInfo(0), this.$personSlider.on("beforeChange", this.beforeChangePerson.bind(this));
    var o = this.$personSlider[0].slick.slideHandler;
    this.$personSlider[0].slick.slideHandler = function(e, t, i) {
     var n = {
      this: this.$personSlider[0].slick,
      index: e,
      sync: t,
      dontAnimate: i
     };
     this.checkVideo(o, n)
    }.bind(this), this.$teamSlider.slick({
     lazyLoad: "ondemand",
     slidesToShow: this._getTeamSlideWidth(),
     slidesToScroll: 1,
     arrows: !1,
     touchThreshold: 20,
     centerMode: !0,
     focusOnSelect: !0,
     asNavFor: ".js-person-slider"
    });
    var r = this.$teamSlider[0].slick.slideHandler;
    this.$teamSlider[0].slick.slideHandler = function(e, t, i) {
     var n = {
      this: this.$teamSlider[0].slick,
      index: e,
      sync: t,
      dontAnimate: i
     };
     this.checkVideo(r, n)
    }.bind(this), this.$personSlider.slick("slickGoTo", n, !1), this.$fullListScroll = this.element.find(".js-full-list-scroll"), this.$fullListScroll.scrollbar(), this.$fullListScroll.closest(".js-full-list-scroll").removeClass("faceboxes js-full-list-scroll").addClass("scrollbar-outer scrollbar-thin"), this.$textWrap.scrollbar(), this.$textWrap.closest(".js-text-wrap").removeClass("js-text-wrap text-wrap"), this.$textWrap = this.$info.find(".js-text-wrap"), this.$textWrap.addClass("scrollbar-outer scrollbar-thin"), this._setFullTextHeight()
   },
   "{window} resize": function() {
    var e = this._getTeamSlideWidth();
    this.$teamSlider.slick("slickSetOption", "slidesToShow", e), this._setFullTextHeight()
   },
   ".js-show-full-text click": function(e, t) {
    e.addClass("opened"), this.$fullText.slideDown()
   },
   ".js-facebox click": function(e, t) {
    this.$faceboxes.removeClass("active"), e.addClass("active"), this.$personSlider.slick("slickGoTo", e.index()), this.hideFullList()
   },
   ".js-show-fulllist click": function(e, t) {
    var i = this.$personSlider.slick("slickCurrentSlide");
    this.$faceboxes.removeClass("active").eq(i).addClass("active"), this.showFullList()
   },
   ".js-hide-fulllist click": function(e, t) {
    this.hideFullList()
   },
   "{window} keyup": function(e, t) {
    27 == t.keyCode && this.hideFullList()
   },
   showFullList: function() {
    this.$html.addClass("show-team-fulllist")
   },
   hideFullList: function() {
    this.$html.removeClass("show-team-fulllist")
   },
   beforeChangePerson: function(e, t, i, n) {
    this.setSlideInfo(n);
    var o = t.$slides.eq(n),
     r = o.find("video");
    r.length > 0 && (this.startVideo(o, r), this.$currentVideo = r)
   },
   checkVideo: function(e, i) {
    this.$currentVideo.length < 1 || t.Helper.viewPortMobile || window.innerHeight <= 650 || this.isSlowNetwork ? e.call(i.this, i.index, i.sync, i.dontAnimate) : this.endVideo(e, i)
   },
   startVideo: function(e, t) {
    t.trigger("lazyLoad"), t.trigger("setCurrentTime", 0), t.trigger("play");
    var i = e.data("stop-timestamp");
    t.trigger("pauseOn", [i])
   },
   endVideo: function(e, t) {
    this.$currentVideo.trigger("play");
    var i = this.$currentVideo.get(0);
    i.onended = function() {
     this.$currentVideo = [], i.onended = !1, e.call(t.this, t.index, t.sync, t.dontAnimate)
    }.bind(this)
   },
   setSlideInfo: function(e) {
    var t = this.$personSlides.eq(e),
     i = t.data("name"),
     n = i + " — Сибирикс",
     o = t.data("status"),
     r = t.data("full-text"),
     s = t.data("short-text"),
     a = t.data("image");
    t.css("background-image", "url(" + a + ")"), this.$info.removeClass("red blue brown purple bear yellow").addClass(t.data("color")), this.$name.html(i), this.$status.html(o), this.$shortText.html(s), this.$fullText.html(r), history.pushState({}, this.title, "?p=" + t.data("id")), this.$title.html(n), this._setFullTextHeight()
   },
   _getTeamSlideWidth: function() {
    var e = this.$win.width();
    return Math.floor(e / this.options.teamSlideWidth)
   },
   _setFullTextHeight: function() {
    var e = this.$textWrap.offset().top,
     t = this.$teamSlider.height(),
     i = this.element.find(".site-nav").height(),
     n = this.$win.height() - e - t - i - 80;
    n = n < 140 ? 140 : n, this.$textWrap.css("max-height", n)
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Page.StudioTimeline = can.Control.extend({
   init: function() {
    this.mouseX = 0, this.mouseY = 0, this.scrollLeft = 0, this.lockTimelinePosition = !1, this.mouseDown = !1, this.$body = e("body"), this.$nav = this.element.find(".js-year-nav"), this.$navElements = this.$nav.find(".nav-item"), this.navElementsCount = this.$navElements.length, this.$timeline = this.element.find(".js-timeline"), this.$years = this.element.find(".js-year"), this.$pageBackground = this.element.find(".page-content .js-page-background"), this.getSizes(), this.animateWaveLoop(), this.sendExperimentVariant()
   },
   "{window} load": function() {
    this.getSizes(), this.goToYear(this.$years.eq(0)), this.element.find(".js-full-view").each(function(t, i) {
     var n = e(i);
     n.find(".full-view").scrollbar(), n.find(".full-view:not(.scroll-wrapper)").removeClass("full-view")
    })
   },
   "{window} resize": function() {
    this.getSizes(), this.setTimelinePosition()
   },
   "{window} mousewheel": function(t, i) {
    if (0 === e(i.target).closest(".full-view").closest(".js-year.selected").length) {
     var n = i.deltaY > 0 ? -1 : 1,
      o = i.deltaFactor;
     this.scrollLeft = this.scrollLeft + n * o, this.setTimelinePosition()
    }
   },
   "{window} keydown": function(e, t) {
    37 == t.keyCode || 38 == t.keyCode ? this.goPrevYear() : 39 != t.keyCode && 40 != t.keyCode || this.goNextYear()
   },
   "{window} mousedown": function(e, t) {
    this.mouseDownX = t.pageX, this.mouseDown = !0
   },
   "{window} mousemove": function(e, t) {
    this.mouseX = t.pageX, this.mouseY = t.pageY, this.checkSwipe()
   },
   "{window} mouseup": function() {
    this.mouseDown = !1
   },
   "{window} touchstart": function(e, t) {
    this.mouseDownX = this.getPageX(t), this.mouseDown = !0
   },
   "{window} touchmove": function(e, t) {
    this.mouseX = this.getPageX(t), this.checkSwipe()
   },
   "{window} touchend": function() {
    this.mouseDown = !1
   },
   "{window} click": function(t, i) {
    var n = e(i.target);
    n.hasClass("js-year") || n.closest(".js-year").length > 0 || n.hasClass("js-year-arrow") || n.closest(".js-year-arrow").length > 0 || (this.$years.removeClass("selected"), this.$pageBackground.trigger("resetPageBackground"))
   },
   ".js-year click": function(t, i) {
    i.preventDefault(), e(i.target).hasClass("js-year-arrow") || this.goToYear(t)
   },
   ".js-year-arrow.prev click": function(e, t) {
    t.preventDefault(), this.goPrevYear()
   },
   ".js-year-arrow.next click": function(e, t) {
    t.preventDefault(), this.goNextYear()
   },
   getPageX: function(e) {
    var t = e.pageX;
    try {
     t = void 0 == t ? e.originalEvent.targetTouches[0].pageX : t
    } catch (e) {}
    try {
     t = void 0 == t ? e.targetTouches[0].pageX : t
    } catch (e) {}
    try {
     t = void 0 == t ? e.touches[0].pageX : t
    } catch (e) {}
    return t
   },
   checkSwipe: function() {
    this.mouseDown && (void 0 != this.checkSwipeTimer && clearTimeout(this.checkSwipeTimer), this.checkSwipeTimer = setTimeout(function() {
     var e = this.mouseX - this.mouseDownX,
      t = Math.abs(e),
      i = e > 0 ? -1 : 1;
     this.scrollLeft = this.scrollLeft + i * t, this.setTimelinePosition()
    }.bind(this), 20))
   },
   getSizes: function() {
    this.windowHeight = window.innerHeight, this.windowWidth = window.innerWidth, this.navWidth = this.$nav.width(), this.navTop = this.$nav.offset().top, this.isMobile = t.Helper.isViewPortMobile(), this.maxScrollLeft = this.navWidth - this.windowWidth
   },
   animateWaveLoop: function() {
    this.$body.hasClass("top-menu-opened") || this.isMobile || t.Helper.AnimateWave({
     windowWidth: this.windowWidth,
     windowHeight: this.windowHeight,
     mouseX: this.mouseX,
     mouseY: this.mouseY,
     navTop: this.navTop,
     navWidth: this.navWidth,
     elements: this.$navElements,
     elementsCount: this.navElementsCount,
     scrollLeft: this.scrollLeft
    }), requestAnimFrame(function() {
     this.animateWaveLoop()
    }.bind(this))
   },
   setTimelinePosition: function() {
    if (this.isMobile) return void this.$timeline.css("transform", "translateX(0)");
    this.lockTimelinePosition || (this.lockTimelinePosition = !0, this.scrollLeft < 0 && (this.scrollLeft = 0), this.scrollLeft > this.maxScrollLeft && (this.scrollLeft = this.maxScrollLeft), this.$timeline.css("transform", "translateX(" + -this.scrollLeft + "px)"), setTimeout(function() {
     this.lockTimelinePosition = !1
    }.bind(this), 500))
   },
   goNextYear: function() {
    var e = this.$years.filter(".selected").data("index");
    if (void 0 == e || e > this.$years.length - 2) return void this.goToYear(this.$years.filter('[data-index="0"]'));
    this.goToYear(this.$years.filter('[data-index="' + (e + 1) + '"]'))
   },
   goPrevYear: function() {
    var e = this.$years.filter(".selected").data("index");
    if (void 0 == e || e < 1) return void this.goToYear(this.$years.last());
    this.goToYear(this.$years.filter('[data-index="' + (e - 1) + '"]'))
   },
   goToYear: function(e) {
    if (!e.hasClass("selected")) {
     this.$years.removeClass("selected"), e.addClass("selected"), this.scrollLeft = this.scrollLeft + e.closest(".nav-item").offset().left - this.windowWidth / 2, this.setTimelinePosition();
     var t = e.data("video"),
      i = e.data("picture");
     this.$pageBackground.trigger("changePageBackground", [{
      video: t,
      picture: i
     }])
    }
   },
   sendExperimentVariant: function() {
    if (this.element.is("[data-experiment-variant]")) var e = setInterval(function() {
     var i = this.element.data("experiment-name") || null;
     t.Helper.isViewPortMobile() && (i = "mobile"), null !== i && "undefined" != typeof yaCounter1791280 && (yaCounter1791280.params({
      ab_test_philosophy_page_desktop_variant: i
     }), clearInterval(e))
    }.bind(this), 1e3)
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Page.StudioWanted = can.Control.extend({
   init: function() {
    this.$form = this.element.find('form[data-form-type="wanted"]'), this.initSliders(), t.Helper.isViewPortMobile() || t.Helper.isTouch() || skrollr.init(), new t.Controls.Form.Wanted(this.$form)
   },
   initSliders: function() {},
   ".js-appeal-form click": function() {
    e.scrollTo(this.$form, 300, {
     offset: -150
    })
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Page.Contacts = can.Control.extend({
   init: function() {
    new t.Controls.Partial.CoverVideoTrigger(this.element), new t.Controls.Partial.ContactsMap(this.element)
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Page.Blog = can.Control.extend({
   init: function() {
    new t.Controls.Partial.LazyLoad(this.element), this.element.find(".js-subscribe-form").each(function() {
     new t.Controls.Partial.SubscribeForm(e(this))
    }), this.subscribeIsShownMobile = !1, this.mobileHiddenBlocks = this.element.find(".js-hidden-subscribe-mobile")
   },
   "{window} load": function() {
    new t.Controls.Partial.BlogLoader(this.element, {
     pagerWrap: this.element
    }), new t.Controls.Partial.Pager(this.element, {
     loaderWrap: this.element
    })
   },
   ".js-open-subscribe touchstart": function() {
    this.subscribeIsShownMobile || (this.mobileHiddenBlocks.slideDown(), this.subscribeIsShownMobile = !0)
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  window.setIframePollHeight = function(t, i) {
   e("#poll_" + t).height(i)
  }, window.scrollToPoll = function(t) {
   var i = e("#poll_" + t);
   e.scrollTo(i, {
    offset: {
     top: -100
    },
    duration: 200
   })
  }, t.Controls.Page.Post = can.Control.extend({
   init: function() {
    this.checkReferer(), new t.Controls.Partial.PostAutoloader(this.element), new t.Controls.Partial.PostComments(this.element), this.element.find(".js-post:not(.inited)").each(function() {
     new t.Controls.Partial.PostItem(e(this))
    }), this.element.find(".js-clear-text").each(function() {
     new t.Controls.Partial.ClearText(e(this))
    }), this.element.find(".tilda-post table:not(.stacktable)").stacktable(t.Helper.defaultStacktableSettings)
   },
   checkReferer: function() {
    var e = (location.href, {});
    if (location.search.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(t, i, n) {
      e[i] = decodeURI(n)
     }), "subscribe" == e.referer) {
     var i = t.Helper.StrReplace(["www.", "blog."], ["", ""], window.location.host),
      n = new Date((new Date).getTime() + 2592e6);
     Cookies.set("IS_SUBSCRIBER", 1, {
      expires: n,
      domain: i
     })
    }
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Page.Products = can.Control.extend({
   init: function() {}
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Page.Product = can.Control.extend({
   init: function() {
    new t.Controls.Partial.ProductSliders(this.element), new t.Controls.Partial.ProductParallax(this.element.find(".js-parallax")), this.element.find(".js-triggers-slider").map(function() {
     new t.Controls.Partial.ProductTriggers(e(this))
    }), this.element.find("iframe").reframe()
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Page.WhiskeyBreak = can.Control.extend({
   init: function() {
    this.element.find(".js-whiskey-break-slider").each(function() {
     new t.Controls.Partial.WhiskeyBreakSlider(e(this))
    }), new t.Controls.Partial.WhiskeyMouseDown(this.element.find(".js-mouse-down"))
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Page.NotFound = can.Control.extend({
   init: function() {}
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Page.Showreel = can.Control.extend({
   init: function() {
    this.$iframe = this.element.find(".js-video-wrap iframe"), this.$iframe.reframe()
   },
   "video click": function(e) {
    e.get(0).play()
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Page.Process = can.Control.extend({
   init: function() {
    new t.Controls.Partial.TextPageNav(this.element), new t.Controls.Partial.ProcessVimeo(this.element), new t.Controls.Partial.ProcessMenu(this.element)
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Page.Quests = can.Control.extend({
   init: function() {
    if (!t.isResult && t.startQuest && Cookies.set("quest", "1", {
      expires: 1e4
     }), t.isResult && !Cookies.get("quest")) return window.location.href = t.startQuest, !1;
    this.element.find(".content").css("opacity", 1), t.Helper.initForms(this.element, ".js-cat-form"), t.isResult && 1 != Cookies.get("cat_lid") && this.showPopup()
   },
   showPopup: function() {
    e.fancybox(["#questCatPopup"], {
     padding: 0,
     scrolling: "visible",
     helpers: {
      overlay: {
       locked: !0,
       closeClick: !1
      }
     },
     keys: {
      close: null
     }
    })
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Page.Prices = can.Control.extend({
   init: function() {
    this.$win = e(window), this.$diagram = this.element.find(".js-diagram-lines"), this.$diagramTop = this.$diagram.offset().top - 300, this.$lines = this.$diagram.find("i"), this.diagramShowed = !1, this.scroll()
   },
   "{window} load": function() {
    e.getScript("/local/js/lib/jquery.parallax.js", function() {
     this.element.find(".js-parallax").parallax({})
    }.bind(this))
   },
   "{window} scroll": function() {
    this.scroll()
   },
   scroll: function() {
    !this.diagramShowed && this.$win.scrollTop() > this.$diagramTop && this.showDiagramLines()
   },
   showDiagramLines: function() {
    this.diagramShowed = !0, this.$lines.each(this._showDiagramLines.bind(this))
   },
   _showDiagramLines: function(t, i) {
    var n = e(i);
    n.delay(300 * t).animate({
     height: n.data("height")
    }, 600, function() {
     var e = n.find("span");
     e.animate({
      height: e.data("height")
     }, 400)
    })
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Page.TextLight = can.Control.extend({
   init: function() {
    new t.Controls.Partial.TextPageNav(this.element)
   }
  })
 }(jQuery, window.APP),
 function(e, t) {
  "use strict";
  t.Controls.Application = can.Control.extend({
   init: function() {
    t.Helper.isIE() && e("html").addClass("is-ie"), new t.Controls.Page.Init(this.element), this.initPageController()
   },
   initPageController: function() {
    var e = can.capitalize(can.camelize(this.element.data("page-type")));
    t.Controls.Page[e] && new t.Controls.Page[e](this.element)
   }
  }), e(function() {
   new t.Controls.Application(e("body"))
  })
 }(jQuery, window.APP);