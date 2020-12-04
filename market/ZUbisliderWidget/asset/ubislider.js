/**
 *
 * Author:  Asror Zakirov
 * Created: 5/21/2020 4:43 PM
 * https://www.linkedin.com/in/asror-zakirov-167961a9
 * https://www.facebook.com/asror.zakirov
 */

$.fn.ubislider = function (i) {
    return UbiSlider.init(this, i)
}, $.fn.destroyUbislider = function () {
    return UbiSlider.destroy(this)
}, $.fn.reloadUbislider = function (i) {
    return UbiSlider.reload(this, i)
};
var UbiSlider = {
    init: function (i, e) {
        var t = this;
        $(".arrow.prev").addClass("pasive");
        var s = $.extend({
            item: i,
            arrowsToggle: !1,
            type: "standard",
            hideArrows: !1,
            autoSlideOnLastClick: !1,
            modalOnClick: !1,
            position: "horizontal",
            activeClass: !1,
            bullets: !1,
            onTopImageChange: function () {
            }
        }, e), a = s.item.width();
        s.item.addClass(s.type);
        var d = function () {
            var i = s.item.width(), e = s.item.find(".ubislider-inner li").width(), t = Math.round(i / e / 2) - 1;
            s.item.find(".ubislider-inner li").eq(t).addClass("active")
        }, n = function (i) {
            var e = s.item.attr("id");
            if (i) var t = i.find("img").attr("src"),
                a = i.index(); else var t = s.item.find(".ubislider-inner li").eq(0).find("img").attr("src"), a = 0;
            var d = new Image;
            d.src = t, $("[data-ubislider=#" + e + "]").attr("data-image", a), $("[data-ubislider=#" + e + "]").html(d), s.onTopImageChange()
        }, r = function () {
            s.item.find(".ubislider-inner li").on("click", function () {
                n($(this))
            })
        }, l = function (i) {
            $("body").addClass("ubi-overflow");
            var e = i.attr("data-image"),
                t = "<div class='ubiModal'><span class='ubi-close'><i class='fa fa-times' aria-hidden='true'></i></span><div class='ubi-arrows left'><i class='fa fa-angle-left' aria-hidden='true'></i></div><div class='ubi-arrows right'><i class='fa fa-angle-right' aria-hidden='true'></i></div><div class='ubi-main-image' data-slide='" + e + "'><ul class='ubi-main-slide'>" + s.item.find(".ubislider-inner").html() + "</ul></div><ul class='ubi-thumbs'>" + s.item.find(".ubislider-inner").html();
            $("body").append(t);
            var a = "-" + $(".ubi-main-image").width() * e + "px";
            $(".ubi-main-slide").width($(".ubi-main-image").width() * $(".ubi-main-slide li").length), $(".ubi-main-slide").css("left", a), $(".ubi-main-slide li").width($(".ubi-main-image").width()), $(".ubi-arrows.left").addClass("pasive")
        }, o = function (i) {
            var e = i.index(), t = "-" + $(".ubi-main-image").width() * e + "px";
            $(".ubi-main-image").attr("data-slide", e), $(".ubi-main-slide").width($(".ubi-main-image").width() * $(".ubi-main-slide li").length), $(".ubi-main-slide").css("left", t)
        }, u = function (i) {
            var e = $(".ubi-main-image").attr("data-slide"), t = $(".ubi-main-slide li").length;
            switch (i) {
                case"left":
                    e > 0 && (e = parseInt(e, 10) - 1, $(".ubi-arrows").removeClass("pasive")), 0 === e && $(".ubi-arrows.left").addClass("pasive");
                    var s = "-" + $(".ubi-main-image").width() * e + "px";
                    break;
                case"right":
                    t - 1 > e && (e = parseInt(e, 10) + 1, $(".ubi-arrows").removeClass("pasive")), e === t - 1 && $(".ubi-arrows.right").addClass("pasive");
                    var s = "-" + $(".ubi-main-image").width() * e + "px"
            }
            $(".ubi-main-image").attr("data-slide", e), $(".ubi-main-slide").width($(".ubi-main-image").width() * $(".ubi-main-slide li").length), $(".ubi-main-slide").css("left", s)
        }, m = function () {
            var i = s.item.attr("id");
            $("[data-ubislider=#" + i + "]").bind("click", function () {
                l($(this)), c()
            })
        }, c = function () {
            $(".ubiModal").bind("click", function () {
                $(".ubiModal").remove(), $("body").removeClass("ubi-overflow")
            }), $(".ubi-close").bind("click", function () {
                $(".ubiModal").remove(), $("body").removeClass("ubi-overflow")
            }), $(".ubiModal .ubi-main-image img").bind("click", function (i) {
                i.stopPropagation()
            }), $(".ubi-arrows.left").bind("click", function (i) {
                i.stopPropagation(), u("left")
            }), $(".ubi-arrows.right").bind("click", function (i) {
                i.stopPropagation(), u("right")
            }), $(".ubi-thumbs li").bind("click", function (i) {
                i.stopPropagation(), o($(this)), $(".ubi-arrows").removeClass("pasive")
            })
        }, f = function (i) {
            if ("vertical" == i) {
                var e = s.item.find(".ubislider-inner li").outerWidth(!0) * s.item.find("li").length;
                s.item.attr("data-slideTime", 0), s.item.find(".ubislider-inner").width("auto"), s.item.find(".ubislider-inner").height(e)
            } else {
                var t = s.item.find(".ubislider-inner li").outerWidth(!0) * s.item.find("li").length;
                s.item.attr("data-slideTime", 0), s.item.find(".ubislider-inner").width(t)
            }
        }, b = function () {
            s.item.find(".arrow").hide()
        }, h = function () {
            for (var i = s.item.find(".ubislider-inner li").length, e = "<ul class='ubislider-bullets'>", t = 1; i >= t; t++) {
                if (1 == t) var a = "<li class='active'></li>"; else var a = "<li></li>";
                e += a
            }
            e += "</ul>", s.item.append(e)
        }, v = function () {
            s.item.find(".ubislider-bullets li").bind("click", function () {
                $(".ubislider .arrow").removeClass("pasive"), p($(this))
            })
        }, p = function (i) {
            i.siblings().removeClass("active"), i.addClass("active");
            var e = i.index(), t = i.closest(".ubislider").find(".ubislider-inner li").length - 1;
            0 == e ? $(".ubislider .arrow.prev").addClass("pasive") : e == t && $(".ubislider .arrow.next").addClass("pasive");
            var s = "-" + i.closest(".ubislider").find(".ubislider-inner li").outerWidth(!0) * e + "px";
            i.closest(".ubislider").attr("data-slidetime", e), i.closest(".ubislider").find(".ubislider-inner").css("left", s)
        };
        switch (s.type) {
            case"standard":
                s.item.find("li").width(a);
                break;
            case"thumb":
                break;
            case"ecommerce":
                n(), r()
        }
        switch (s.modalOnClick) {
            case!0:
                m();
            case!1:
        }
        switch (s.option) {
            case"bottom":
                m();
                break;
            case"aside":
        }
        switch (s.position) {
            case"vertical":
                f(s.position);
                break;
            default:
                f(s.position)
        }
        switch (s.activeClass) {
            case!0:
                d()
        }
        switch (s.hideArrows) {
            case!0:
                b()
        }
        switch (s.bullets) {
            case!0:
                h(), v()
        }
        t.events(s.item, s, s.position)
    }, events: function (i, e, t) {
        var s = this;
        i.find(".arrow").bind("click", function () {
            s.slider_arrow_function($(this), i, e)
        }), e.autoSlideOnLastClick && i.find(".ubislider-inner li").bind("click", function () {
            switch (t) {
                case"horizontal":
                    s.slideToLeftOrRight($(this), e);
                    break;
                case"vertical":
                    s.slideToTopOrBottom($(this), e);
                    break;
                default:
                    s.slideToLeftOrRight($(this), e)
            }
        })
    }, slideToLeftOrRight: function (i, e) {
        var t = parseInt(e.item.attr("data-slideTime"), 10), s = e.item.find("li").outerWidth(!0) * t,
            a = Math.round(e.item.outerWidth(!0) / e.item.find("li").outerWidth(!0)), d = e.item.find("li").length - 1,
            n = e.item.find("li").length - a,
            r = Math.round((s + e.item.outerWidth(!0)) / e.item.find("li").outerWidth(!0)) - 1,
            l = Math.round((s + e.item.outerWidth(!0)) / e.item.find("li").outerWidth(!0)) - a;
        0 == s && 0 == i.closest("li").index() ? (e.item.attr("data-slideTime", n), e.item.find(".ubislider-inner").css("left", "-" + e.item.find("li").outerWidth(!0) * n + "px")) : s == n * e.item.find("li").outerWidth(!0) && i.closest("li").index() == d ? (e.item.attr("data-slideTime", "0"), e.item.find(".ubislider-inner").css("left", "0px")) : i.closest("li").index() == r ? (t++, e.item.attr("data-slideTime", t), e.item.find(".ubislider-inner").css("left", "-" + e.item.find("li").outerWidth(!0) * t + "px")) : i.closest("li").index() == l && (t--, e.item.attr("data-slideTime", t), e.item.find(".ubislider-inner").css("left", "-" + e.item.find("li").outerWidth(!0) * t + "px"))
    }, slideToTopOrBottom: function (i, e) {
        var t = parseInt(e.item.attr("data-slideTime"), 10), s = e.item.find("li").outerHeight(!0) * t,
            a = Math.round(e.item.outerHeight(!0) / e.item.find("li").outerHeight(!0)),
            d = e.item.find("li").length - 1, n = e.item.find("li").length - a,
            r = Math.round((s + e.item.outerHeight(!0)) / e.item.find("li").outerHeight(!0)) - 1,
            l = Math.round((s + e.item.outerHeight(!0)) / e.item.find("li").outerHeight(!0)) - a;
        0 == s && 0 == i.closest("li").index() ? (e.item.attr("data-slideTime", n), e.item.find(".ubislider-inner").css("top", "-" + e.item.find("li").outerHeight(!0) * n + "px")) : s == n * e.item.find("li").outerHeight(!0) && i.closest("li").index() == d ? (e.item.attr("data-slideTime", "0"), e.item.find(".ubislider-inner").css("top", "0px")) : i.closest("li").index() == r ? (t++, e.item.attr("data-slideTime", t), e.item.find(".ubislider-inner").css("top", "-" + e.item.find("li").outerHeight(!0) * t + "px")) : i.closest("li").index() == l && (t--, e.item.attr("data-slideTime", t), e.item.find(".ubislider-inner").css("top", "-" + e.item.find("li").outerHeight(!0) * t + "px"))
    }, slider_arrow_function: function (i, e, t) {
        var s = this, a = function () {
            var i = parseInt(e.attr("data-slideTime"), 10);
            t.item.find(".ubislider-bullets li").removeClass("active"), t.item.find(".ubislider-bullets li").eq(i).addClass("active")
        };
        switch (i.hasClass("prev") ? s.slider_prev(e, t) : s.slider_next(e, t), t.bullets) {
            case!0:
                a()
        }
    }, slider_prev: function (i) {
        var e = parseInt(i.attr("data-slideTime"), 10);
        0 != e && (i.find(".ubislider-inner li").each(function () {
            return $(this).hasClass("active") ? ($(this).prev().addClass("active"), $(this).removeClass("active"), !1) : void 0
        }), e--, $(".ubislider .arrow.next").removeClass("pasive"), i.attr("data-slideTime", e), i.find(".ubislider-inner").css("left", "-" + i.find(".ubislider-inner li").outerWidth(!0) * e + "px")), 0 == e && $(".ubislider .arrow.prev").addClass("pasive")
    }, slider_next: function (i) {
        var e = i.outerWidth(!0), t = i.find(".ubislider-inner li").outerWidth(!0), s = e / t, a = !1,
            d = i.find(".ubislider-inner li").length - Math.round(s), n = parseInt(i.attr("data-slideTime"), 10);
        if (d > n) {
            if (i.find("li").each(function () {
                return $(this).hasClass("active") ? ($(this).next().addClass("active"), $(this).removeClass("active"), !1) : void 0
            }), n++, i.attr("data-slideTime", n), $(".ubislider .arrow.prev").removeClass("pasive"), a && d - n == 0) var r = i.find(".ubislider-inner li").outerWidth(!0) * a,
                l = r - e + i.find(".ubislider-inner li").outerWidth(!0) * (n - 1); else var l = i.find(".ubislider-inner li").outerWidth(!0) * n;
            i.find(".ubislider-inner").css("left", "-" + l + "px")
        }
        n == d && $(".ubislider .arrow.next").addClass("pasive")
    }, destroy: function (i) {
        $("[data-ubislider=#" + i.attr("id") + "]").unbind("click"), i.find(".arrow").unbind("click"), i.find("li").unbind("click"), i.find(".ubislider-inner").removeAttr("style"), i.find("li").removeAttr("style"), i.removeAttr("data-slideTime")
    }, reload: function (i, e) {
        var t = this;
        t.destroy(i), t.init(i, e)
    }
};
