/**
 *
 * Author:  Shahzod G'ulomqodirov
 * Created: 6/27/2020 9:50 AM
 * https://www.linkedin.com/in/asror-zakirov-167961a9
 * https://www.facebook.com/asror.zakirov
 */
/*  begin  */

(function($) {
    'use strict'
    $.fn.hds = function(options) {
        var opts = $.extend({}, $.fn.hds.defaults, options);
        this.each(function() {
            var _this = $(this);
            $.fn.template(_this, opts);
            $(window).resize(function() {
                $.fn.template(_this, opts);
            })
        });

    };


    $.fn.hds.defaults = {
        style: "overflow:auto",
        scrollHeight: "15",
        scrollBufferWidth: "15",
        parent_class:"tscroll",
        child_class:"tscroll-inner",
        template: "<div class='tscroll'><div class='tscroll-inner'></div></div>"
    };

    $.fn.template = function(ele, opts) {

        if (!$("."+opts.parent_class).length) {
            ele.attr("style", opts.style)
                .before(opts.template);
        }
        $.fn.setWidth(ele, opts);
    }

    $.fn.setWidth = function(ele, opts) {
        var _secondary_scroll_parent = ele.prev();
        var _secondary_scroll_child = $("."+opts.child_class, _secondary_scroll_parent);
        var _this_width = ele.width();
        var _this_child_width = $("> :first-child", ele).outerWidth();

        _secondary_scroll_parent.attr("style",opts.style)
        _secondary_scroll_parent.width(_this_width);
        _secondary_scroll_child.width(_this_child_width).height(opts.scrollHeight - (opts.scrollHeight-1));

        $.fn.updateBoth(ele, opts, _secondary_scroll_parent);
    }

    $.fn.updateBoth = function(ele, opts, parent) {
        parent.on("scroll", function() {
            ele.scrollLeft($(this).scrollLeft());

        })
        ele.on("scroll", function() {
            parent.scrollLeft($(this).scrollLeft());
        })
    }
}(jQuery));



/* end */
