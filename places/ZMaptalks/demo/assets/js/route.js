/**
 *
 * Author:  Asror Zakirov
 * Created: 9/28/2020 1:10 PM
 * https://www.linkedin.com/in/asror-zakirov-167961a9
 * https://www.facebook.com/asror.zakirov
 */

/*!
 * maptalks.routeplayer v0.1.0
 * LICENSE : MIT
 * (c) 2016-2018 maptalks.org
 */
/*!
 * requires maptalks@^0.23.0
 */
!function (t, e) {
    "object" == typeof exports && "undefined" != typeof module ? e(exports, require("maptalks")) : "function" == typeof define && define.amd ? define(["exports", "maptalks"], e) : e(t.maptalks = t.maptalks || {}, t.maptalks)
}(this, function (t, y) {
    "use strict";
    var r = function () {
        function i(t, e) {
            for (var r = 0; r < e.length; r++) {
                var i = e[r];
                i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(t, i.key, i)
            }
        }

        return function (t, e, r) {
            return e && i(t.prototype, e), r && i(t, r), t
        }
    }();

    function e(t, e) {
        if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function, not " + typeof e);
        t.prototype = Object.create(e && e.prototype, {
            constructor: {
                value: t,
                enumerable: !1,
                writable: !0,
                configurable: !0
            }
        }), e && (Object.setPrototypeOf ? Object.setPrototypeOf(t, e) : function (t, e) {
            for (var r = Object.getOwnPropertyNames(e), i = 0; i < r.length; i++) {
                var n = r[i], o = Object.getOwnPropertyDescriptor(e, n);
                o && o.configurable && void 0 === t[n] && Object.defineProperty(t, n, o)
            }
        }(t, e))
    }

    function a(t, e) {
        if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
    }

    var s = function () {
        function e(t) {
            a(this, e), this.route = t, this.path = t.path
        }

        return e.prototype.getCoordinates = function (t, e) {
            if (t < this.getStart() || t > this.getEnd()) return null;
            for (var r = null, i = 0, n = this.path.length; i < n; i++) if (t < this.path[i][2]) {
                r = i;
                break
            }
            null === r && (r = this.path.length - 1);
            var o = this.path[r - 1], a = this.path[r], s = (t - o[2]) / (a[2] - o[2]), p = o[0] + (a[0] - o[0]) * s,
                l = o[1] + (a[1] - o[1]) * s, h = new y.Coordinate(p, l), u = e.coordinateToViewPoint(h);
            return {
                coordinate: h,
                viewPoint: u,
                degree: y.Util.computeDegree(e.coordinateToViewPoint(new y.Coordinate(o)), u),
                index: r
            }
        }, e.prototype.getStart = function () {
            return this.path[0][2]
        }, e.prototype.getEnd = function () {
            return this.path[this.getCount() - 1][2]
        }, e.prototype.getCount = function () {
            return this.path.length
        }, r(e, [{
            key: "markerSymbol", get: function () {
                return this.route.markerSymbol
            }, set: function (t) {
                this.route.markerSymbol = t, this._painter && this._painter.marker && this._painter.marker.setSymbol(t)
            }
        }, {
            key: "lineSymbol", get: function () {
                return this.route.lineSymbol
            }, set: function (t) {
                this.route.lineSymbol = t, this._painter && this._painter.marker && this._painter.line.setSymbol(t)
            }
        }]), e
    }(), i = function (n) {
        function o(t, e, r) {
            a(this, o);
            var i = function (t, e) {
                if (!t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return !e || "object" != typeof e && "function" != typeof e ? t : e
            }(this, n.call(this, r));
            return Array.isArray(t) || (t = [t]), i.id = y.Util.UID(), i._map = e, i._setup(t), i
        }

        return e(o, n), o.prototype.remove = function () {
            return this.markerLayer && (this.finish(), this.markerLayer.remove(), this.lineLayer.remove(), delete this.markerLayer, delete this.lineLayer, delete this._map), this
        }, o.prototype.play = function () {
            return "running" === this.player.playState || (this.player.play(), this.fire("playstart")), this
        }, o.prototype.pause = function () {
            return "paused" === this.player.playState || (this.player.pause(), this.fire("playpause")), this
        }, o.prototype.cancel = function () {
            return this.player.cancel(), this.played = 0, this._createPlayer(), this._step({styles: {t: 0}}), this.fire("playcancel"), this
        }, o.prototype.finish = function () {
            return "finished" === this.player.playState || (this.player.finish(), this._step({styles: {t: 1}}), this.fire("playfinish")), this
        }, o.prototype.getStartTime = function () {
            return this.startTime || 0
        }, o.prototype.getEndTime = function () {
            return this.endTime || 0
        }, o.prototype.getCurrentTime = function () {
            return this.played ? this.startTime + this.played : this.startTime
        }, o.prototype.setTime = function (t) {
            return this.played = t - this.startTime, this.played < 0 && (this.played = 0), this._resetPlayer(), this
        }, o.prototype.getUnitTime = function () {
            return this.options.unitTime
        }, o.prototype.setUnitTime = function (t) {
            this.options.unitTime = +t, this._resetPlayer()
        }, o.prototype.getCurrentCoordinates = function (t) {
            return t || (t = 0), this.routes[t] && this.routes[t]._painter ? this.routes[t]._painter.marker.getCoordinates() : null
        }, o.prototype.getMarkerSymbol = function (t) {
            return this.routes && this.routes[t] ? this.routes[t].markerSymbol : null
        }, o.prototype.setMarkerSymbol = function (t, e) {
            return this.routes && this.routes[t] && (this.routes[t].markerSymbol = e), this
        }, o.prototype.getLineSymbol = function (t) {
            return this.routes && this.routes[t] ? this.routes[t].lineSymbol : null
        }, o.prototype.setLineSymbol = function (t, e) {
            return this.routes && this.routes[t] && (this.routes[t].lineSymbol = e), this
        }, o.prototype._resetPlayer = function () {
            var t = this.player && "running" === this.player.playState;
            t && this.player.finish(), this._createPlayer(), t && this.player.play()
        }, o.prototype._step = function (t) {
            if (t.state && "running" !== t.state.playState) "finished" === t.state.playState && this.fire("playfinish"); else {
                this.played = this.duration * t.styles.t;
                for (var e = 0, r = this.routes.length; e < r; e++) this._drawRoute(this.routes[e], this.startTime + this.played);
                this.fire("playing")
            }
        }, o.prototype._drawRoute = function (t, e) {
            if (this._map) {
                var r = t.getCoordinates(e, this._map);
                if (r) {
                    if (t._painter || (t._painter = {}), t._painter.marker) t._painter.marker.setCoordinates(r.coordinate); else {
                        var i = new y.Marker(r.coordinate, {symbol: t.markerSymbol || this.options.markerSymbol}).addTo(this.markerLayer);
                        t._painter.marker = i
                    }
                    if (!t._painter.line) {
                        var n = new y.LineString(t.path, {symbol: t.lineSymbol || this.options.lineSymbol}).addTo(this.lineLayer);
                        t._painter.line = n
                    }
                } else t._painter && t._painter.marker && (t._painter.marker.remove(), delete t._painter.marker)
            }
        }, o.prototype._setup = function (t) {
            for (var e = t.map(function (t) {
                return new s(t)
            }), r = e[0].getStart(), i = e[0].getEnd(), n = 1; n < e.length; n++) {
                var o = e[n];
                o.getStart() < r && (r = o.getStart()), o.getEnd() > i && (i = o.getEnd())
            }
            this.routes = e, this.startTime = r, this.endTime = i, this.played = 0, this.duration = i - r, this._createLayers(), this._createPlayer()
        }, o.prototype._createPlayer = function () {
            var t = (this.duration - this.played) / this.options.unitTime, e = void 0, r = this._map._getRenderer();
            r.callInFrameLoop && (e = function (t) {
                r.callInFrameLoop(t)
            }), this.player = y.animation.Animation.animate({t: [this.played / this.duration, 1]}, {
                framer: e,
                speed: t,
                easing: "linear"
            }, this._step.bind(this))
        }, o.prototype._createLayers = function () {
            this.lineLayer = new y.VectorLayer(y.INTERNAL_LAYER_PREFIX + "_routeplay_r_" + this.id).addTo(this._map), this.markerLayer = new y.VectorLayer(y.INTERNAL_LAYER_PREFIX + "_routeplay_m_" + this.id).addTo(this._map)
        }, o
    }(y.Eventable(y.Class));
    i.mergeOptions({
        unitTime: 1e3,
        showRoutes: !0,
        markerSymbol: null,
        lineSymbol: {lineWidth: 2, lineColor: "#004A8D"}
    }), t.Route = s, t.RoutePlayer = i, Object.defineProperty(t, "__esModule", {value: !0}), "undefined" != typeof console && console.log("maptalks.routeplayer v0.1.0, requires maptalks@^0.23.0.")
});
