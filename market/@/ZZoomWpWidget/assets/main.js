/**
 *
 * Author:  Shaxzod G'ulomqodirov
 * Created: 5/21/2020 11:00 AM
 */


if (typeof Object.create !== 'function') {
    Object.create = function(obj) {
        function F() {};
        F.prototype = obj;
        return new F();
    };
}
(function($, window, document, undefined) {
    var ElevateZoom = {
        init: function(options, elem) {
            var self = this;
            self.elem = elem;
            self.$elem = $(elem);
            self.imageSrc = self.$elem.data("zoom-image") ? self.$elem.data("zoom-image") : self.$elem.attr("src");
            self.options = $.extend({}, $.fn.elevateZoom.options, options);
            if (self.options.tint) {
                self.options.lensColour = "none", self.options.lensOpacity = "1"
            }
            if (self.options.zoomType == "inner") {
                self.options.showLens = false;
            }
            self.$elem.parent().removeAttr('title').removeAttr('alt');
            self.zoomImage = self.imageSrc;
            self.refresh(1);
            $('#' + self.options.gallery + ' a').click(function(e) {
                if (self.options.galleryActiveClass) {
                    $('#' + self.options.gallery + ' a').removeClass(self.options.galleryActiveClass);
                    $(this).addClass(self.options.galleryActiveClass);
                }
                e.preventDefault();
                if ($(this).data("zoom-image")) {
                    self.zoomImagePre = $(this).data("zoom-image")
                } else {
                    self.zoomImagePre = $(this).data("image");
                }
                self.swaptheimage($(this).data("image"), self.zoomImagePre);
                return false;
            });
        },
        refresh: function(length) {
            var self = this;
            setTimeout(function() {
                self.fetch(self.imageSrc);
            }, length || self.options.refresh);
        },
        fetch: function(imgsrc) {
            var self = this;
            var newImg = new Image();
            newImg.onload = function() {
                self.largeWidth = newImg.width;
                self.largeHeight = newImg.height;
                self.startZoom();
                self.currentImage = self.imageSrc;
                self.options.onZoomedImageLoaded(self.$elem);
            }
            newImg.src = imgsrc;
            return;
        },
        startZoom: function() {
            var self = this;
            self.nzWidth = self.$elem.width();
            self.nzHeight = self.$elem.height();
            self.isWindowActive = false;
            self.isLensActive = false;
            self.isTintActive = false;
            self.overWindow = false;
            if (self.options.imageCrossfade) {
                self.zoomWrap = self.$elem.wrap('<div style="height:' + self.nzHeight + 'px;width:' + self.nzWidth + 'px;" class="zoomWrapper" />');
                self.$elem.css('position', 'absolute');
            }
            self.zoomLock = 1;
            self.scrollingLock = false;
            self.changeBgSize = false;
            self.currentZoomLevel = self.options.zoomLevel;
            self.nzOffset = self.$elem.offset();
            self.widthRatio = (self.largeWidth / self.currentZoomLevel) / self.nzWidth;
            self.heightRatio = (self.largeHeight / self.currentZoomLevel) / self.nzHeight;
            if (self.options.zoomType == "window") {
                self.zoomWindowStyle = "overflow: hidden;" +
                    "background-position: 0px 0px;text-align:center;" +
                    "background-color: " + String(self.options.zoomWindowBgColour) +
                    ";width: " + String(self.options.zoomWindowWidth) + "px;" +
                    "height: " + String(self.options.zoomWindowHeight) +
                    "px;float: left;" +
                    "background-size: " + self.largeWidth / self.currentZoomLevel + "px " + self.largeHeight / self.currentZoomLevel + "px;" +
                    "display: none;z-index:100;" +
                    "border: " + String(self.options.borderSize) +
                    "px solid " + self.options.borderColour +
                    ";background-repeat: no-repeat;" +
                    "position: absolute;";
            }
            if (self.options.zoomType == "inner") {
                var borderWidth = self.$elem.css("border-left-width");
                self.zoomWindowStyle = "overflow: hidden;" +
                    "margin-left: " + String(borderWidth) + ";" +
                    "margin-top: " + String(borderWidth) + ";" +
                    "background-position: 0px 0px;" +
                    "width: " + String(self.nzWidth) + "px;" +
                    "height: " + String(self.nzHeight) + "px;" +
                    "px;float: left;" +
                    "display: none;" +
                    "cursor:" + (self.options.cursor) + ";" +
                    "px solid " + self.options.borderColour +
                    ";background-repeat: no-repeat;" +
                    "position: absolute;";
            }
            if (self.options.zoomType == "window") {
                if (self.nzHeight < self.options.zoomWindowWidth / self.widthRatio) {
                    lensHeight = self.nzHeight;
                } else {
                    lensHeight = String((self.options.zoomWindowHeight / self.heightRatio))
                }
                if (self.largeWidth < self.options.zoomWindowWidth) {
                    lensWidth = self.nzWidth;
                } else {
                    lensWidth = (self.options.zoomWindowWidth / self.widthRatio);
                }
                self.lensStyle = "background-position: 0px 0px;width: " + String((self.options.zoomWindowWidth) / self.widthRatio) + "px;height: " + String((self.options.zoomWindowHeight) / self.heightRatio) +
                    "px;float: right;display: none;" +
                    "overflow: hidden;" +
                    "z-index: 999;" +
                    "-webkit-transform: translateZ(0);" +
                    "opacity:" + (self.options.lensOpacity) + ";filter: alpha(opacity = " + (self.options.lensOpacity * 100) + "); zoom:1;" +
                    "width:" + lensWidth + "px;" +
                    "height:" + lensHeight + "px;" +
                    "background-color:" + (self.options.lensColour) + ";" +
                    "cursor:" + (self.options.cursor) + ";" +
                    "border: " + (self.options.lensBorderSize) + "px" +
                    " solid " + (self.options.lensBorderColour) + ";background-repeat: no-repeat;position: absolute;";
            }
            self.tintStyle = "display: block;" +
                "position: absolute;" +
                "background-color: " + self.options.tintColour + ";" +
                "filter:alpha(opacity=0);" +
                "opacity: 0;" +
                "width: " + self.nzWidth + "px;" +
                "height: " + self.nzHeight + "px;";
            self.lensRound = '';
            if (self.options.zoomType == "lens") {
                self.lensStyle = "background-position: 0px 0px;" +
                    "float: left;display: none;" +
                    "border: " + String(self.options.borderSize) + "px solid " + self.options.borderColour + ";" +
                    "width:" + String(self.options.lensSize) + "px;" +
                    "height:" + String(self.options.lensSize) + "px;" +
                    "background-repeat: no-repeat;position: absolute;";
            }
            if (self.options.lensShape == "round") {
                self.lensRound = "border-top-left-radius: " + String(self.options.lensSize / 2 + self.options.borderSize) + "px;" +
                    "border-top-right-radius: " + String(self.options.lensSize / 2 + self.options.borderSize) + "px;" +
                    "border-bottom-left-radius: " + String(self.options.lensSize / 2 + self.options.borderSize) + "px;" +
                    "border-bottom-right-radius: " + String(self.options.lensSize / 2 + self.options.borderSize) + "px;";
            }
            self.zoomContainer = $('<div class="zoomContainer" style="-webkit-transform: translateZ(0);position:absolute;left:' + self.nzOffset.left + 'px;top:' + self.nzOffset.top + 'px;height:' + self.nzHeight + 'px;width:' + self.nzWidth + 'px;"></div>');
            $('body').append(self.zoomContainer);
            if (self.options.containLensZoom && self.options.zoomType == "lens") {
                self.zoomContainer.css("overflow", "hidden");
            }
            if (self.options.zoomType != "inner") {
                self.zoomLens = $("<div class='zoomLens' style='" + self.lensStyle + self.lensRound + "'>&nbsp;</div>").appendTo(self.zoomContainer).click(function() {
                    self.$elem.trigger('click');
                });
                if (self.options.tint) {
                    self.tintContainer = $('<div/>').addClass('tintContainer');
                    self.zoomTint = $("<div class='zoomTint' style='" + self.tintStyle + "'></div>");
                    self.zoomLens.wrap(self.tintContainer);
                    self.zoomTintcss = self.zoomLens.after(self.zoomTint);
                    self.zoomTintImage = $('<img style="position: absolute; left: 0px; top: 0px; max-width: none; width: ' + self.nzWidth + 'px; height: ' + self.nzHeight + 'px;" src="' + self.imageSrc + '">').appendTo(self.zoomLens).click(function() {
                        self.$elem.trigger('click');
                    });
                }
            }
            if (isNaN(self.options.zoomWindowPosition)) {
                self.zoomWindow = $("<div style='z-index:999;left:" + (self.windowOffsetLeft) + "px;top:100px;" + self.zoomWindowStyle + "' class='zoomWindow'>&nbsp;</div>").appendTo('body').click(function() {
                    self.$elem.trigger('click');
                });
            } else {
                self.zoomWindow = $("<div style='z-index:999;left:" + (self.windowOffsetLeft) + "px;top:100px;" + self.zoomWindowStyle + "' class='zoomWindow'>&nbsp;</div>").appendTo(self.zoomContainer).click(function() {
                    self.$elem.trigger('click');
                });
            }
            self.zoomWindowContainer = $('<div/>').addClass('zoomWindowContainer').css("width", self.options.zoomWindowWidth);
            self.zoomWindow.wrap(self.zoomWindowContainer);
            if (self.options.zoomType == "lens") {
                self.zoomLens.css({
                    backgroundImage: "url('" + self.imageSrc + "')"
                });
            }
            if (self.options.zoomType == "window") {
                self.zoomWindow.css({
                    backgroundImage: "url('" + self.imageSrc + "')"
                });
            }
            if (self.options.zoomType == "inner") {
                self.zoomWindow.css({
                    backgroundImage: "url('" + self.imageSrc + "')"
                });
            }
            self.$elem.bind('touchmove', function(e) {
                var touch = e.originalEvent.touches[0] || e.originalEvent.changedTouches[0];
                self.setPosition(touch);
            });
            self.zoomContainer.bind('touchmove', function(e) {
                if (self.options.zoomType == "inner") {
                    self.showHideWindow("show");
                }
                var touch = e.originalEvent.touches[0] || e.originalEvent.changedTouches[0];
                self.setPosition(touch);
            });
            self.zoomContainer.bind('touchend', function(e) {
                self.showHideWindow("hide");
                if (self.options.showLens) {
                    self.showHideLens("hide");
                }
                if (self.options.tint && self.options.zoomType != "inner") {
                    self.showHideTint("hide");
                }
            });
            self.$elem.bind('touchend', function(e) {
                self.showHideWindow("hide");
                if (self.options.showLens) {
                    self.showHideLens("hide");
                }
                if (self.options.tint && self.options.zoomType != "inner") {
                    self.showHideTint("hide");
                }
            });
            if (self.options.showLens) {
                self.zoomLens.bind('touchmove', function(e) {
                    var touch = e.originalEvent.touches[0] || e.originalEvent.changedTouches[0];
                    self.setPosition(touch);
                });
                self.zoomLens.bind('touchend', function(e) {
                    self.showHideWindow("hide");
                    if (self.options.showLens) {
                        self.showHideLens("hide");
                    }
                    if (self.options.tint && self.options.zoomType != "inner") {
                        self.showHideTint("hide");
                    }
                });
            }
            self.$elem.bind('mousemove', function(e) {
                if (self.overWindow == false) {
                    self.setElements("show");
                }
                if (self.lastX !== e.clientX || self.lastY !== e.clientY) {
                    self.setPosition(e);
                    self.currentLoc = e;
                }
                self.lastX = e.clientX;
                self.lastY = e.clientY;
            });
            self.zoomContainer.bind('mousemove', function(e) {
                if (self.overWindow == false) {
                    self.setElements("show");
                }
                if (self.lastX !== e.clientX || self.lastY !== e.clientY) {
                    self.setPosition(e);
                    self.currentLoc = e;
                }
                self.lastX = e.clientX;
                self.lastY = e.clientY;
            });
            if (self.options.zoomType != "inner") {
                self.zoomLens.bind('mousemove', function(e) {
                    if (self.lastX !== e.clientX || self.lastY !== e.clientY) {
                        self.setPosition(e);
                        self.currentLoc = e;
                    }
                    self.lastX = e.clientX;
                    self.lastY = e.clientY;
                });
            }
            if (self.options.tint && self.options.zoomType != "inner") {
                self.zoomTint.bind('mousemove', function(e) {
                    if (self.lastX !== e.clientX || self.lastY !== e.clientY) {
                        self.setPosition(e);
                        self.currentLoc = e;
                    }
                    self.lastX = e.clientX;
                    self.lastY = e.clientY;
                });
            }
            if (self.options.zoomType == "inner") {
                self.zoomWindow.bind('mousemove', function(e) {
                    if (self.lastX !== e.clientX || self.lastY !== e.clientY) {
                        self.setPosition(e);
                        self.currentLoc = e;
                    }
                    self.lastX = e.clientX;
                    self.lastY = e.clientY;
                });
            }
            self.zoomContainer.add(self.$elem).mouseenter(function() {
                if (self.overWindow == false) {
                    self.setElements("show");
                }
            }).mouseleave(function() {
                if (!self.scrollLock) {
                    self.setElements("hide");
                    self.options.onDestroy(self.$elem);
                }
            });
            if (self.options.zoomType != "inner") {
                self.zoomWindow.mouseenter(function() {
                    self.overWindow = true;
                    self.setElements("hide");
                }).mouseleave(function() {
                    self.overWindow = false;
                });
            }
            if (self.options.zoomLevel != 1) {}
            if (self.options.minZoomLevel) {
                self.minZoomLevel = self.options.minZoomLevel;
            } else {
                self.minZoomLevel = self.options.scrollZoomIncrement * 2;
            }
            if (self.options.scrollZoom) {
                self.zoomContainer.add(self.$elem).bind('mousewheel DOMMouseScroll MozMousePixelScroll', function(e) {
                    self.scrollLock = true;
                    clearTimeout($.data(this, 'timer'));
                    $.data(this, 'timer', setTimeout(function() {
                        self.scrollLock = false;
                    }, 250));
                    var theEvent = e.originalEvent.wheelDelta || e.originalEvent.detail * -1
                    e.stopImmediatePropagation();
                    e.stopPropagation();
                    e.preventDefault();
                    if (theEvent / 120 > 0) {
                        if (self.currentZoomLevel >= self.minZoomLevel) {
                            self.changeZoomLevel(self.currentZoomLevel - self.options.scrollZoomIncrement);
                        }
                    } else {
                        if (self.options.maxZoomLevel) {
                            if (self.currentZoomLevel <= self.options.maxZoomLevel) {
                                self.changeZoomLevel(parseFloat(self.currentZoomLevel) + self.options.scrollZoomIncrement);
                            }
                        } else {
                            self.changeZoomLevel(parseFloat(self.currentZoomLevel) + self.options.scrollZoomIncrement);
                        }
                    }
                    return false;
                });
            }
        },
        setElements: function(type) {
            var self = this;
            if (!self.options.zoomEnabled) {
                return false;
            }
            if (type == "show") {
                if (self.isWindowSet) {
                    if (self.options.zoomType == "inner") {
                        self.showHideWindow("show");
                    }
                    if (self.options.zoomType == "window") {
                        self.showHideWindow("show");
                    }
                    if (self.options.showLens) {
                        self.showHideLens("show");
                    }
                    if (self.options.tint && self.options.zoomType != "inner") {
                        self.showHideTint("show");
                    }
                }
            }
            if (type == "hide") {
                if (self.options.zoomType == "window") {
                    self.showHideWindow("hide");
                }
                if (!self.options.tint) {
                    self.showHideWindow("hide");
                }
                if (self.options.showLens) {
                    self.showHideLens("hide");
                }
                if (self.options.tint) {
                    self.showHideTint("hide");
                }
            }
        },
        setPosition: function(e) {
            var self = this;
            if (!self.options.zoomEnabled) {
                return false;
            }
            self.nzHeight = self.$elem.height();
            self.nzWidth = self.$elem.width();
            self.nzOffset = self.$elem.offset();
            if (self.options.tint && self.options.zoomType != "inner") {
                self.zoomTint.css({
                    top: 0
                });
                self.zoomTint.css({
                    left: 0
                });
            }
            if (self.options.responsive && !self.options.scrollZoom) {
                if (self.options.showLens) {
                    if (self.nzHeight < self.options.zoomWindowWidth / self.widthRatio) {
                        lensHeight = self.nzHeight;
                    } else {
                        lensHeight = String((self.options.zoomWindowHeight / self.heightRatio))
                    }
                    if (self.largeWidth < self.options.zoomWindowWidth) {
                        lensWidth = self.nzWidth;
                    } else {
                        lensWidth = (self.options.zoomWindowWidth / self.widthRatio);
                    }
                    self.widthRatio = self.largeWidth / self.nzWidth;
                    self.heightRatio = self.largeHeight / self.nzHeight;
                    if (self.options.zoomType != "lens") {
                        if (self.nzHeight < self.options.zoomWindowWidth / self.widthRatio) {
                            lensHeight = self.nzHeight;
                        } else {
                            lensHeight = String((self.options.zoomWindowHeight / self.heightRatio))
                        }
                        if (self.nzWidth < self.options.zoomWindowHeight / self.heightRatio) {
                            lensWidth = self.nzWidth;
                        } else {
                            lensWidth = String((self.options.zoomWindowWidth / self.widthRatio));
                        }
                        self.zoomLens.css('width', lensWidth);
                        self.zoomLens.css('height', lensHeight);
                        if (self.options.tint) {
                            self.zoomTintImage.css('width', self.nzWidth);
                            self.zoomTintImage.css('height', self.nzHeight);
                        }
                    }
                    if (self.options.zoomType == "lens") {
                        self.zoomLens.css({
                            width: String(self.options.lensSize) + 'px',
                            height: String(self.options.lensSize) + 'px'
                        })
                    }
                }
            }
            self.zoomContainer.css({
                top: self.nzOffset.top
            });
            self.zoomContainer.css({
                left: self.nzOffset.left
            });
            self.mouseLeft = parseInt(e.pageX - self.nzOffset.left);
            self.mouseTop = parseInt(e.pageY - self.nzOffset.top);
            if (self.options.zoomType == "window") {
                self.Etoppos = (self.mouseTop < (self.zoomLens.height() / 2));
                self.Eboppos = (self.mouseTop > self.nzHeight - (self.zoomLens.height() / 2) - (self.options.lensBorderSize * 2));
                self.Eloppos = (self.mouseLeft < 0 + ((self.zoomLens.width() / 2)));
                self.Eroppos = (self.mouseLeft > (self.nzWidth - (self.zoomLens.width() / 2) - (self.options.lensBorderSize * 2)));
            }
            if (self.options.zoomType == "inner") {
                self.Etoppos = (self.mouseTop < ((self.nzHeight / 2) / self.heightRatio));
                self.Eboppos = (self.mouseTop > (self.nzHeight - ((self.nzHeight / 2) / self.heightRatio)));
                self.Eloppos = (self.mouseLeft < 0 + (((self.nzWidth / 2) / self.widthRatio)));
                self.Eroppos = (self.mouseLeft > (self.nzWidth - (self.nzWidth / 2) / self.widthRatio - (self.options.lensBorderSize * 2)));
            }
            if (self.mouseLeft < 0 || self.mouseTop < 0 || self.mouseLeft > self.nzWidth || self.mouseTop > self.nzHeight) {
                self.setElements("hide");
                return;
            } else {
                if (self.options.showLens) {
                    self.lensLeftPos = String(Math.floor(self.mouseLeft - self.zoomLens.width() / 2));
                    self.lensTopPos = String(Math.floor(self.mouseTop - self.zoomLens.height() / 2));
                }
                if (self.Etoppos) {
                    self.lensTopPos = 0;
                }
                if (self.Eloppos) {
                    self.windowLeftPos = 0;
                    self.lensLeftPos = 0;
                    self.tintpos = 0;
                }
                if (self.options.zoomType == "window") {
                    if (self.Eboppos) {
                        self.lensTopPos = Math.max((self.nzHeight) - self.zoomLens.height() - (self.options.lensBorderSize * 2), 0);
                    }
                    if (self.Eroppos) {
                        self.lensLeftPos = (self.nzWidth - (self.zoomLens.width()) - (self.options.lensBorderSize * 2));
                    }
                }
                if (self.options.zoomType == "inner") {
                    if (self.Eboppos) {
                        self.lensTopPos = Math.max(((self.nzHeight) - (self.options.lensBorderSize * 2)), 0);
                    }
                    if (self.Eroppos) {
                        self.lensLeftPos = (self.nzWidth - (self.nzWidth) - (self.options.lensBorderSize * 2));
                    }
                }
                if (self.options.zoomType == "lens") {
                    self.windowLeftPos = String(((e.pageX - self.nzOffset.left) * self.widthRatio - self.zoomLens.width() / 2) * (-1));
                    self.windowTopPos = String(((e.pageY - self.nzOffset.top) * self.heightRatio - self.zoomLens.height() / 2) * (-1));
                    self.zoomLens.css({
                        backgroundPosition: self.windowLeftPos + 'px ' + self.windowTopPos + 'px'
                    });
                    if (self.changeBgSize) {
                        if (self.nzHeight > self.nzWidth) {
                            if (self.options.zoomType == "lens") {
                                self.zoomLens.css({
                                    "background-size": self.largeWidth / self.newvalueheight + 'px ' + self.largeHeight / self.newvalueheight + 'px'
                                });
                            }
                            self.zoomWindow.css({
                                "background-size": self.largeWidth / self.newvalueheight + 'px ' + self.largeHeight / self.newvalueheight + 'px'
                            });
                        } else {
                            if (self.options.zoomType == "lens") {
                                self.zoomLens.css({
                                    "background-size": self.largeWidth / self.newvaluewidth + 'px ' + self.largeHeight / self.newvaluewidth + 'px'
                                });
                            }
                            self.zoomWindow.css({
                                "background-size": self.largeWidth / self.newvaluewidth + 'px ' + self.largeHeight / self.newvaluewidth + 'px'
                            });
                        }
                        self.changeBgSize = false;
                    }
                    self.setWindowPostition(e);
                }
                if (self.options.tint && self.options.zoomType != "inner") {
                    self.setTintPosition(e);
                }
                if (self.options.zoomType == "window") {
                    self.setWindowPostition(e);
                }
                if (self.options.zoomType == "inner") {
                    self.setWindowPostition(e);
                }
                if (self.options.showLens) {
                    if (self.fullwidth && self.options.zoomType != "lens") {
                        self.lensLeftPos = 0;
                    }
                    self.zoomLens.css({
                        left: self.lensLeftPos + 'px',
                        top: self.lensTopPos + 'px'
                    })
                }
            }
        },
        showHideWindow: function(change) {
            var self = this;
            if (change == "show") {
                if (!self.isWindowActive) {
                    if (self.options.zoomWindowFadeIn) {
                        self.zoomWindow.stop(true, true, false).fadeIn(self.options.zoomWindowFadeIn);
                    } else {
                        self.zoomWindow.show();
                    }
                    self.isWindowActive = true;
                }
            }
            if (change == "hide") {
                if (self.isWindowActive) {
                    if (self.options.zoomWindowFadeOut) {
                        self.zoomWindow.stop(true, true).fadeOut(self.options.zoomWindowFadeOut, function() {
                            if (self.loop) {
                                clearInterval(self.loop);
                                self.loop = false;
                            }
                        });
                    } else {
                        self.zoomWindow.hide();
                    }
                    self.isWindowActive = false;
                }
            }
        },
        showHideLens: function(change) {
            var self = this;
            if (change == "show") {
                if (!self.isLensActive) {
                    if (self.options.lensFadeIn) {
                        self.zoomLens.stop(true, true, false).fadeIn(self.options.lensFadeIn);
                    } else {
                        self.zoomLens.show();
                    }
                    self.isLensActive = true;
                }
            }
            if (change == "hide") {
                if (self.isLensActive) {
                    if (self.options.lensFadeOut) {
                        self.zoomLens.stop(true, true).fadeOut(self.options.lensFadeOut);
                    } else {
                        self.zoomLens.hide();
                    }
                    self.isLensActive = false;
                }
            }
        },
        showHideTint: function(change) {
            var self = this;
            if (change == "show") {
                if (!self.isTintActive) {
                    if (self.options.zoomTintFadeIn) {
                        self.zoomTint.css({
                            opacity: self.options.tintOpacity
                        }).animate().stop(true, true).fadeIn("slow");
                    } else {
                        self.zoomTint.css({
                            opacity: self.options.tintOpacity
                        }).animate();
                        self.zoomTint.show();
                    }
                    self.isTintActive = true;
                }
            }
            if (change == "hide") {
                if (self.isTintActive) {
                    if (self.options.zoomTintFadeOut) {
                        self.zoomTint.stop(true, true).fadeOut(self.options.zoomTintFadeOut);
                    } else {
                        self.zoomTint.hide();
                    }
                    self.isTintActive = false;
                }
            }
        },
        setLensPostition: function(e) {},
        setWindowPostition: function(e) {
            var self = this;
            if (!isNaN(self.options.zoomWindowPosition)) {
                switch (self.options.zoomWindowPosition) {
                    case 1:
                        self.windowOffsetTop = (self.options.zoomWindowOffety);
                        self.windowOffsetLeft = (+self.nzWidth);
                        break;
                    case 2:
                        if (self.options.zoomWindowHeight > self.nzHeight) {
                            self.windowOffsetTop = ((self.options.zoomWindowHeight / 2) - (self.nzHeight / 2)) * (-1);
                            self.windowOffsetLeft = (self.nzWidth);
                        } else {}
                        break;
                    case 3:
                        self.windowOffsetTop = (self.nzHeight - self.zoomWindow.height() - (self.options.borderSize * 2));
                        self.windowOffsetLeft = (self.nzWidth);
                        break;
                    case 4:
                        self.windowOffsetTop = (self.nzHeight);
                        self.windowOffsetLeft = (self.nzWidth);
                        break;
                    case 5:
                        self.windowOffsetTop = (self.nzHeight);
                        self.windowOffsetLeft = (self.nzWidth - self.zoomWindow.width() - (self.options.borderSize * 2));
                        break;
                    case 6:
                        if (self.options.zoomWindowHeight > self.nzHeight) {
                            self.windowOffsetTop = (self.nzHeight);
                            self.windowOffsetLeft = ((self.options.zoomWindowWidth / 2) - (self.nzWidth / 2) + (self.options.borderSize * 2)) * (-1);
                        } else {}
                        break;
                    case 7:
                        self.windowOffsetTop = (self.nzHeight);
                        self.windowOffsetLeft = 0;
                        break;
                    case 8:
                        self.windowOffsetTop = (self.nzHeight);
                        self.windowOffsetLeft = (self.zoomWindow.width() + (self.options.borderSize * 2)) * (-1);
                        break;
                    case 9:
                        self.windowOffsetTop = (self.nzHeight - self.zoomWindow.height() - (self.options.borderSize * 2));
                        self.windowOffsetLeft = (self.zoomWindow.width() + (self.options.borderSize * 2)) * (-1);
                        break;
                    case 10:
                        if (self.options.zoomWindowHeight > self.nzHeight) {
                            self.windowOffsetTop = ((self.options.zoomWindowHeight / 2) - (self.nzHeight / 2)) * (-1);
                            self.windowOffsetLeft = (self.zoomWindow.width() + (self.options.borderSize * 2)) * (-1);
                        } else {}
                        break;
                    case 11:
                        self.windowOffsetTop = (self.options.zoomWindowOffety);
                        self.windowOffsetLeft = (self.zoomWindow.width() + (self.options.borderSize * 2)) * (-1);
                        break;
                    case 12:
                        self.windowOffsetTop = (self.zoomWindow.height() + (self.options.borderSize * 2)) * (-1);
                        self.windowOffsetLeft = (self.zoomWindow.width() + (self.options.borderSize * 2)) * (-1);
                        break;
                    case 13:
                        self.windowOffsetTop = (self.zoomWindow.height() + (self.options.borderSize * 2)) * (-1);
                        self.windowOffsetLeft = (0);
                        break;
                    case 14:
                        if (self.options.zoomWindowHeight > self.nzHeight) {
                            self.windowOffsetTop = (self.zoomWindow.height() + (self.options.borderSize * 2)) * (-1);
                            self.windowOffsetLeft = ((self.options.zoomWindowWidth / 2) - (self.nzWidth / 2) + (self.options.borderSize * 2)) * (-1);
                        } else {}
                        break;
                    case 15:
                        self.windowOffsetTop = (self.zoomWindow.height() + (self.options.borderSize * 2)) * (-1);
                        self.windowOffsetLeft = (self.nzWidth - self.zoomWindow.width() - (self.options.borderSize * 2));
                        break;
                    case 16:
                        self.windowOffsetTop = (self.zoomWindow.height() + (self.options.borderSize * 2)) * (-1);
                        self.windowOffsetLeft = (self.nzWidth);
                        break;
                    default:
                        self.windowOffsetTop = (self.options.zoomWindowOffety);
                        self.windowOffsetLeft = (self.nzWidth);
                }
            } else {
                self.externalContainer = $('#' + self.options.zoomWindowPosition);
                self.externalContainerWidth = self.externalContainer.width();
                self.externalContainerHeight = self.externalContainer.height();
                self.externalContainerOffset = self.externalContainer.offset();
                self.windowOffsetTop = self.externalContainerOffset.top;
                self.windowOffsetLeft = self.externalContainerOffset.left;
            }
            self.isWindowSet = true;
            self.windowOffsetTop = self.windowOffsetTop + self.options.zoomWindowOffety;
            self.windowOffsetLeft = self.windowOffsetLeft + self.options.zoomWindowOffetx;
            self.zoomWindow.css({
                top: self.windowOffsetTop
            });
            self.zoomWindow.css({
                left: self.windowOffsetLeft
            });
            if (self.options.zoomType == "inner") {
                self.zoomWindow.css({
                    top: 0
                });
                self.zoomWindow.css({
                    left: 0
                });
            }
            self.windowLeftPos = String(((e.pageX - self.nzOffset.left) * self.widthRatio - self.zoomWindow.width() / 2) * (-1));
            self.windowTopPos = String(((e.pageY - self.nzOffset.top) * self.heightRatio - self.zoomWindow.height() / 2) * (-1));
            if (self.Etoppos) {
                self.windowTopPos = 0;
            }
            if (self.Eloppos) {
                self.windowLeftPos = 0;
            }
            if (self.Eboppos) {
                self.windowTopPos = (self.largeHeight / self.currentZoomLevel - self.zoomWindow.height()) * (-1);
            }
            if (self.Eroppos) {
                self.windowLeftPos = ((self.largeWidth / self.currentZoomLevel - self.zoomWindow.width()) * (-1));
            }
            if (self.fullheight) {
                self.windowTopPos = 0;
            }
            if (self.fullwidth) {
                self.windowLeftPos = 0;
            }
            if (self.options.zoomType == "window" || self.options.zoomType == "inner") {
                if (self.zoomLock == 1) {
                    if (self.widthRatio <= 1) {
                        self.windowLeftPos = 0;
                    }
                    if (self.heightRatio <= 1) {
                        self.windowTopPos = 0;
                    }
                }
                if (self.options.zoomType == "window") {
                    if (self.largeHeight < self.options.zoomWindowHeight) {
                        self.windowTopPos = 0;
                    }
                    if (self.largeWidth < self.options.zoomWindowWidth) {
                        self.windowLeftPos = 0;
                    }
                }
                if (self.options.easing) {
                    if (!self.xp) {
                        self.xp = 0;
                    }
                    if (!self.yp) {
                        self.yp = 0;
                    }
                    if (!self.loop) {
                        self.loop = setInterval(function() {
                            self.xp += (self.windowLeftPos - self.xp) / self.options.easingAmount;
                            self.yp += (self.windowTopPos - self.yp) / self.options.easingAmount;
                            if (self.scrollingLock) {
                                clearInterval(self.loop);
                                self.xp = self.windowLeftPos;
                                self.yp = self.windowTopPos
                                self.xp = ((e.pageX - self.nzOffset.left) * self.widthRatio - self.zoomWindow.width() / 2) * (-1);
                                self.yp = (((e.pageY - self.nzOffset.top) * self.heightRatio - self.zoomWindow.height() / 2) * (-1));
                                if (self.changeBgSize) {
                                    if (self.nzHeight > self.nzWidth) {
                                        if (self.options.zoomType == "lens") {
                                            self.zoomLens.css({
                                                "background-size": self.largeWidth / self.newvalueheight + 'px ' + self.largeHeight / self.newvalueheight + 'px'
                                            });
                                        }
                                        self.zoomWindow.css({
                                            "background-size": self.largeWidth / self.newvalueheight + 'px ' + self.largeHeight / self.newvalueheight + 'px'
                                        });
                                    } else {
                                        if (self.options.zoomType != "lens") {
                                            self.zoomLens.css({
                                                "background-size": self.largeWidth / self.newvaluewidth + 'px ' + self.largeHeight / self.newvalueheight + 'px'
                                            });
                                        }
                                        self.zoomWindow.css({
                                            "background-size": self.largeWidth / self.newvaluewidth + 'px ' + self.largeHeight / self.newvaluewidth + 'px'
                                        });
                                    }
                                    self.changeBgSize = false;
                                }
                                self.zoomWindow.css({
                                    backgroundPosition: self.windowLeftPos + 'px ' + self.windowTopPos + 'px'
                                });
                                self.scrollingLock = false;
                                self.loop = false;
                            } else if (Math.round(Math.abs(self.xp - self.windowLeftPos) + Math.abs(self.yp - self.windowTopPos)) < 1) {
                                clearInterval(self.loop);
                                self.zoomWindow.css({
                                    backgroundPosition: self.windowLeftPos + 'px ' + self.windowTopPos + 'px'
                                });
                                self.loop = false;
                            } else {
                                if (self.changeBgSize) {
                                    if (self.nzHeight > self.nzWidth) {
                                        if (self.options.zoomType == "lens") {
                                            self.zoomLens.css({
                                                "background-size": self.largeWidth / self.newvalueheight + 'px ' + self.largeHeight / self.newvalueheight + 'px'
                                            });
                                        }
                                        self.zoomWindow.css({
                                            "background-size": self.largeWidth / self.newvalueheight + 'px ' + self.largeHeight / self.newvalueheight + 'px'
                                        });
                                    } else {
                                        if (self.options.zoomType != "lens") {
                                            self.zoomLens.css({
                                                "background-size": self.largeWidth / self.newvaluewidth + 'px ' + self.largeHeight / self.newvaluewidth + 'px'
                                            });
                                        }
                                        self.zoomWindow.css({
                                            "background-size": self.largeWidth / self.newvaluewidth + 'px ' + self.largeHeight / self.newvaluewidth + 'px'
                                        });
                                    }
                                    self.changeBgSize = false;
                                }
                                self.zoomWindow.css({
                                    backgroundPosition: self.xp + 'px ' + self.yp + 'px'
                                });
                            }
                        }, 16);
                    }
                } else {
                    if (self.changeBgSize) {
                        if (self.nzHeight > self.nzWidth) {
                            if (self.options.zoomType == "lens") {
                                self.zoomLens.css({
                                    "background-size": self.largeWidth / self.newvalueheight + 'px ' + self.largeHeight / self.newvalueheight + 'px'
                                });
                            }
                            self.zoomWindow.css({
                                "background-size": self.largeWidth / self.newvalueheight + 'px ' + self.largeHeight / self.newvalueheight + 'px'
                            });
                        } else {
                            if (self.options.zoomType == "lens") {
                                self.zoomLens.css({
                                    "background-size": self.largeWidth / self.newvaluewidth + 'px ' + self.largeHeight / self.newvaluewidth + 'px'
                                });
                            }
                            if ((self.largeHeight / self.newvaluewidth) < self.options.zoomWindowHeight) {
                                self.zoomWindow.css({
                                    "background-size": self.largeWidth / self.newvaluewidth + 'px ' + self.largeHeight / self.newvaluewidth + 'px'
                                });
                            } else {
                                self.zoomWindow.css({
                                    "background-size": self.largeWidth / self.newvalueheight + 'px ' + self.largeHeight / self.newvalueheight + 'px'
                                });
                            }
                        }
                        self.changeBgSize = false;
                    }
                    self.zoomWindow.css({
                        backgroundPosition: self.windowLeftPos + 'px ' + self.windowTopPos + 'px'
                    });
                }
            }
        },
        setTintPosition: function(e) {
            var self = this;
            self.nzOffset = self.$elem.offset();
            self.tintpos = String(((e.pageX - self.nzOffset.left) - (self.zoomLens.width() / 2)) * (-1));
            self.tintposy = String(((e.pageY - self.nzOffset.top) - self.zoomLens.height() / 2) * (-1));
            if (self.Etoppos) {
                self.tintposy = 0;
            }
            if (self.Eloppos) {
                self.tintpos = 0;
            }
            if (self.Eboppos) {
                self.tintposy = (self.nzHeight - self.zoomLens.height() - (self.options.lensBorderSize * 2)) * (-1);
            }
            if (self.Eroppos) {
                self.tintpos = ((self.nzWidth - self.zoomLens.width() - (self.options.lensBorderSize * 2)) * (-1));
            }
            if (self.options.tint) {
                if (self.fullheight) {
                    self.tintposy = 0;
                }
                if (self.fullwidth) {
                    self.tintpos = 0;
                }
                self.zoomTintImage.css({
                    'left': self.tintpos + 'px'
                });
                self.zoomTintImage.css({
                    'top': self.tintposy + 'px'
                });
            }
        },
        swaptheimage: function(smallimage, largeimage) {
            var self = this;
            var newImg = new Image();
            if (self.options.loadingIcon) {
                self.spinner = $('<div style="background: url(\'' + self.options.loadingIcon + '\') no-repeat center;height:' + self.nzHeight + 'px;width:' + self.nzWidth + 'px;z-index: 2000;position: absolute; background-position: center center;"></div>');
                self.$elem.after(self.spinner);
            }
            self.options.onImageSwap(self.$elem);
            newImg.onload = function() {
                self.largeWidth = newImg.width;
                self.largeHeight = newImg.height;
                self.zoomImage = largeimage;
                self.zoomWindow.css({
                    "background-size": self.largeWidth + 'px ' + self.largeHeight + 'px'
                });
                self.swapAction(smallimage, largeimage);
                return;
            }
            newImg.src = largeimage;
        },
        swapAction: function(smallimage, largeimage) {
            var self = this;
            var newImg2 = new Image();
            newImg2.onload = function() {
                self.nzHeight = newImg2.height;
                self.nzWidth = newImg2.width;
                self.options.onImageSwapComplete(self.$elem);
                self.doneCallback();
                return;
            }
            newImg2.src = smallimage;
            self.currentZoomLevel = self.options.zoomLevel;
            self.options.maxZoomLevel = false;
            if (self.options.zoomType == "lens") {
                self.zoomLens.css({
                    backgroundImage: "url('" + largeimage + "')"
                });
            }
            if (self.options.zoomType == "window") {
                self.zoomWindow.css({
                    backgroundImage: "url('" + largeimage + "')"
                });
            }
            if (self.options.zoomType == "inner") {
                self.zoomWindow.css({
                    backgroundImage: "url('" + largeimage + "')"
                });
            }
            self.currentImage = largeimage;
            if (self.options.imageCrossfade) {
                var oldImg = self.$elem;
                var newImg = oldImg.clone();
                self.$elem.attr("src", smallimage)
                self.$elem.after(newImg);
                newImg.stop(true).fadeOut(self.options.imageCrossfade, function() {
                    $(this).remove();
                });
                self.$elem.width("auto").removeAttr("width");
                self.$elem.height("auto").removeAttr("height");
                oldImg.fadeIn(self.options.imageCrossfade);
                if (self.options.tint && self.options.zoomType != "inner") {
                    var oldImgTint = self.zoomTintImage;
                    var newImgTint = oldImgTint.clone();
                    self.zoomTintImage.attr("src", largeimage)
                    self.zoomTintImage.after(newImgTint);
                    newImgTint.stop(true).fadeOut(self.options.imageCrossfade, function() {
                        $(this).remove();
                    });
                    oldImgTint.fadeIn(self.options.imageCrossfade);
                    self.zoomTint.css({
                        height: self.$elem.height()
                    });
                    self.zoomTint.css({
                        width: self.$elem.width()
                    });
                }
                self.zoomContainer.css("height", self.$elem.height());
                self.zoomContainer.css("width", self.$elem.width());
                if (self.options.zoomType == "inner") {
                    if (!self.options.constrainType) {
                        self.zoomWrap.parent().css("height", self.$elem.height());
                        self.zoomWrap.parent().css("width", self.$elem.width());
                        self.zoomWindow.css("height", self.$elem.height());
                        self.zoomWindow.css("width", self.$elem.width());
                    }
                }
                if (self.options.imageCrossfade) {
                    self.zoomWrap.css("height", self.$elem.height());
                    self.zoomWrap.css("width", self.$elem.width());
                }
            } else {
                self.$elem.attr("src", smallimage);
                if (self.options.tint) {
                    self.zoomTintImage.attr("src", largeimage);
                    self.zoomTintImage.attr("height", self.$elem.height());
                    self.zoomTintImage.css({
                        height: self.$elem.height()
                    });
                    self.zoomTint.css({
                        height: self.$elem.height()
                    });
                }
                self.zoomContainer.css("height", self.$elem.height());
                self.zoomContainer.css("width", self.$elem.width());
                if (self.options.imageCrossfade) {
                    self.zoomWrap.css("height", self.$elem.height());
                    self.zoomWrap.css("width", self.$elem.width());
                }
            }
            if (self.options.constrainType) {
                if (self.options.constrainType == "height") {
                    self.zoomContainer.css("height", self.options.constrainSize);
                    self.zoomContainer.css("width", "auto");
                    if (self.options.imageCrossfade) {
                        self.zoomWrap.css("height", self.options.constrainSize);
                        self.zoomWrap.css("width", "auto");
                        self.constwidth = self.zoomWrap.width();
                    } else {
                        self.$elem.css("height", self.options.constrainSize);
                        self.$elem.css("width", "auto");
                        self.constwidth = self.$elem.width();
                    }
                    if (self.options.zoomType == "inner") {
                        self.zoomWrap.parent().css("height", self.options.constrainSize);
                        self.zoomWrap.parent().css("width", self.constwidth);
                        self.zoomWindow.css("height", self.options.constrainSize);
                        self.zoomWindow.css("width", self.constwidth);
                    }
                    if (self.options.tint) {
                        self.tintContainer.css("height", self.options.constrainSize);
                        self.tintContainer.css("width", self.constwidth);
                        self.zoomTint.css("height", self.options.constrainSize);
                        self.zoomTint.css("width", self.constwidth);
                        self.zoomTintImage.css("height", self.options.constrainSize);
                        self.zoomTintImage.css("width", self.constwidth);
                    }
                }
                if (self.options.constrainType == "width") {
                    self.zoomContainer.css("height", "auto");
                    self.zoomContainer.css("width", self.options.constrainSize);
                    if (self.options.imageCrossfade) {
                        self.zoomWrap.css("height", "auto");
                        self.zoomWrap.css("width", self.options.constrainSize);
                        self.constheight = self.zoomWrap.height();
                    } else {
                        self.$elem.css("height", "auto");
                        self.$elem.css("width", self.options.constrainSize);
                        self.constheight = self.$elem.height();
                    }
                    if (self.options.zoomType == "inner") {
                        self.zoomWrap.parent().css("height", self.constheight);
                        self.zoomWrap.parent().css("width", self.options.constrainSize);
                        self.zoomWindow.css("height", self.constheight);
                        self.zoomWindow.css("width", self.options.constrainSize);
                    }
                    if (self.options.tint) {
                        self.tintContainer.css("height", self.constheight);
                        self.tintContainer.css("width", self.options.constrainSize);
                        self.zoomTint.css("height", self.constheight);
                        self.zoomTint.css("width", self.options.constrainSize);
                        self.zoomTintImage.css("height", self.constheight);
                        self.zoomTintImage.css("width", self.options.constrainSize);
                    }
                }
            }
        },
        doneCallback: function() {
            var self = this;
            if (self.options.loadingIcon) {
                self.spinner.hide();
            }
            self.nzOffset = self.$elem.offset();
            self.nzWidth = self.$elem.width();
            self.nzHeight = self.$elem.height();
            self.currentZoomLevel = self.options.zoomLevel;
            self.widthRatio = self.largeWidth / self.nzWidth;
            self.heightRatio = self.largeHeight / self.nzHeight;
            if (self.options.zoomType == "window") {
                if (self.nzHeight < self.options.zoomWindowWidth / self.widthRatio) {
                    lensHeight = self.nzHeight;
                } else {
                    lensHeight = String((self.options.zoomWindowHeight / self.heightRatio))
                }
                if (self.options.zoomWindowWidth < self.options.zoomWindowWidth) {
                    lensWidth = self.nzWidth;
                } else {
                    lensWidth = (self.options.zoomWindowWidth / self.widthRatio);
                }
                if (self.zoomLens) {
                    self.zoomLens.css('width', lensWidth);
                    self.zoomLens.css('height', lensHeight);
                }
            }
        },
        getCurrentImage: function() {
            var self = this;
            return self.zoomImage;
        },
        getGalleryList: function() {
            var self = this;
            self.gallerylist = [];
            if (self.options.gallery) {
                $('#' + self.options.gallery + ' a').each(function() {
                    var img_src = '';
                    if ($(this).data("zoom-image")) {
                        img_src = $(this).data("zoom-image");
                    } else if ($(this).data("image")) {
                        img_src = $(this).data("image");
                    }
                    if (img_src == self.zoomImage) {
                        self.gallerylist.unshift({
                            href: '' + img_src + '',
                            title: $(this).find('img').attr("title")
                        });
                    } else {
                        self.gallerylist.push({
                            href: '' + img_src + '',
                            title: $(this).find('img').attr("title")
                        });
                    }
                });
            } else {
                self.gallerylist.push({
                    href: '' + self.zoomImage + '',
                    title: $(this).find('img').attr("title")
                });
            }
            return self.gallerylist;
        },
        getGalleryListFancyboxThree: function() {
            var self = this;
            self.gallerylist = [];
            if (self.options.gallery) {
                $('#' + self.options.gallery + ' a').each(function() {
                    var img_src = '';
                    if ($(this).data("zoom-image")) {
                        img_src = $(this).data("zoom-image");
                    } else if ($(this).data("image")) {
                        img_src = $(this).data("image");
                    }
                    if (img_src == self.zoomImage) {
                        self.gallerylist.unshift({
                            src: '' + img_src + '',
                            opts: {
                                caption: $(this).find('img').data("caption"),
                                thumb: '' + img_src + '',
                            }
                        });
                    } else {
                        self.gallerylist.push({
                            src: '' + img_src + '',
                            opts: {
                                caption: $(this).find('img').data("caption"),
                                thumb: '' + img_src + '',
                            }
                        });
                    }
                });
            } else {
                self.gallerylist.push({
                    href: '' + self.zoomImage + '',
                    title: $(this).find('img').data("caption"),
                });
            }
            return self.gallerylist;
        },
        changeZoomLevel: function(value) {
            var self = this;
            self.scrollingLock = true;
            self.newvalue = parseFloat(value).toFixed(2);
            newvalue = parseFloat(value).toFixed(2);
            maxheightnewvalue = self.largeHeight / ((self.options.zoomWindowHeight / self.nzHeight) * self.nzHeight);
            maxwidthtnewvalue = self.largeWidth / ((self.options.zoomWindowWidth / self.nzWidth) * self.nzWidth);
            if (self.options.zoomType != "inner") {
                if (maxheightnewvalue <= newvalue) {
                    self.heightRatio = (self.largeHeight / maxheightnewvalue) / self.nzHeight;
                    self.newvalueheight = maxheightnewvalue;
                    self.fullheight = true;
                } else {
                    self.heightRatio = (self.largeHeight / newvalue) / self.nzHeight;
                    self.newvalueheight = newvalue;
                    self.fullheight = false;
                }
                if (maxwidthtnewvalue <= newvalue) {
                    self.widthRatio = (self.largeWidth / maxwidthtnewvalue) / self.nzWidth;
                    self.newvaluewidth = maxwidthtnewvalue;
                    self.fullwidth = true;
                } else {
                    self.widthRatio = (self.largeWidth / newvalue) / self.nzWidth;
                    self.newvaluewidth = newvalue;
                    self.fullwidth = false;
                }
                if (self.options.zoomType == "lens") {
                    if (maxheightnewvalue <= newvalue) {
                        self.fullwidth = true;
                        self.newvaluewidth = maxheightnewvalue;
                    } else {
                        self.widthRatio = (self.largeWidth / newvalue) / self.nzWidth;
                        self.newvaluewidth = newvalue;
                        self.fullwidth = false;
                    }
                }
            }
            if (self.options.zoomType == "inner") {
                maxheightnewvalue = parseFloat(self.largeHeight / self.nzHeight).toFixed(2);
                maxwidthtnewvalue = parseFloat(self.largeWidth / self.nzWidth).toFixed(2);
                if (newvalue > maxheightnewvalue) {
                    newvalue = maxheightnewvalue;
                }
                if (newvalue > maxwidthtnewvalue) {
                    newvalue = maxwidthtnewvalue;
                }
                if (maxheightnewvalue <= newvalue) {
                    self.heightRatio = (self.largeHeight / newvalue) / self.nzHeight;
                    if (newvalue > maxheightnewvalue) {
                        self.newvalueheight = maxheightnewvalue;
                    } else {
                        self.newvalueheight = newvalue;
                    }
                    self.fullheight = true;
                } else {
                    self.heightRatio = (self.largeHeight / newvalue) / self.nzHeight;
                    if (newvalue > maxheightnewvalue) {
                        self.newvalueheight = maxheightnewvalue;
                    } else {
                        self.newvalueheight = newvalue;
                    }
                    self.fullheight = false;
                }
                if (maxwidthtnewvalue <= newvalue) {
                    self.widthRatio = (self.largeWidth / newvalue) / self.nzWidth;
                    if (newvalue > maxwidthtnewvalue) {
                        self.newvaluewidth = maxwidthtnewvalue;
                    } else {
                        self.newvaluewidth = newvalue;
                    }
                    self.fullwidth = true;
                } else {
                    self.widthRatio = (self.largeWidth / newvalue) / self.nzWidth;
                    self.newvaluewidth = newvalue;
                    self.fullwidth = false;
                }
            }
            scrcontinue = false;
            if (self.options.zoomType == "inner") {
                if (self.nzWidth >= self.nzHeight) {
                    if (self.newvaluewidth <= maxwidthtnewvalue) {
                        scrcontinue = true;
                    } else {
                        scrcontinue = false;
                        self.fullheight = true;
                        self.fullwidth = true;
                    }
                }
                if (self.nzHeight > self.nzWidth) {
                    if (self.newvaluewidth <= maxwidthtnewvalue) {
                        scrcontinue = true;
                    } else {
                        scrcontinue = false;
                        self.fullheight = true;
                        self.fullwidth = true;
                    }
                }
            }
            if (self.options.zoomType != "inner") {
                scrcontinue = true;
            }
            if (scrcontinue) {
                self.zoomLock = 0;
                self.changeZoom = true;
                if (((self.options.zoomWindowHeight) / self.heightRatio) <= self.nzHeight) {
                    self.currentZoomLevel = self.newvalueheight;
                    if (self.options.zoomType != "lens" && self.options.zoomType != "inner") {
                        self.changeBgSize = true;
                        self.zoomLens.css({
                            height: String((self.options.zoomWindowHeight) / self.heightRatio) + 'px'
                        })
                    }
                    if (self.options.zoomType == "lens" || self.options.zoomType == "inner") {
                        self.changeBgSize = true;
                    }
                }
                if ((self.options.zoomWindowWidth / self.widthRatio) <= self.nzWidth) {
                    if (self.options.zoomType != "inner") {
                        if (self.newvaluewidth > self.newvalueheight) {
                            self.currentZoomLevel = self.newvaluewidth;
                        }
                    }
                    if (self.options.zoomType != "lens" && self.options.zoomType != "inner") {
                        self.changeBgSize = true;
                        self.zoomLens.css({
                            width: String((self.options.zoomWindowWidth) / self.widthRatio) + 'px'
                        })
                    }
                    if (self.options.zoomType == "lens" || self.options.zoomType == "inner") {
                        self.changeBgSize = true;
                    }
                }
                if (self.options.zoomType == "inner") {
                    self.changeBgSize = true;
                    if (self.nzWidth > self.nzHeight) {
                        self.currentZoomLevel = self.newvaluewidth;
                    }
                    if (self.nzHeight > self.nzWidth) {
                        self.currentZoomLevel = self.newvaluewidth;
                    }
                }
            }
            self.setPosition(self.currentLoc);
        },
        closeAll: function() {
            if (self.zoomWindow) {
                self.zoomWindow.hide();
            }
            if (self.zoomLens) {
                self.zoomLens.hide();
            }
            if (self.zoomTint) {
                self.zoomTint.hide();
            }
        },
        changeState: function(value) {
            var self = this;
            if (value == 'enable') {
                self.options.zoomEnabled = true;
            }
            if (value == 'disable') {
                self.options.zoomEnabled = false;
            }
        }
    };
    $.fn.elevateZoom = function(options) {
        return this.each(function() {
            var elevate = Object.create(ElevateZoom);
            elevate.init(options, this);
            $.data(this, 'elevateZoom', elevate);
        });
    };
    $.fn.elevateZoom.options = {
        zoomActivation: "hover",
        zoomEnabled: true,
        preloading: 1,
        zoomLevel: 1,
        scrollZoom: false,
        scrollZoomIncrement: 0.1,
        minZoomLevel: false,
        maxZoomLevel: false,
        easing: false,
        easingAmount: 12,
        lensSize: 200,
        zoomWindowWidth: 400,
        zoomWindowHeight: 400,
        zoomWindowOffetx: 0,
        zoomWindowOffety: 0,
        zoomWindowPosition: 1,
        zoomWindowBgColour: "#fff",
        lensFadeIn: false,
        lensFadeOut: false,
        debug: false,
        zoomWindowFadeIn: false,
        zoomWindowFadeOut: false,
        zoomWindowAlwaysShow: false,
        zoomTintFadeIn: false,
        zoomTintFadeOut: false,
        borderSize: 4,
        showLens: true,
        borderColour: "#888",
        lensBorderSize: 1,
        lensBorderColour: "#000",
        lensShape: "square",
        zoomType: "window",
        containLensZoom: false,
        lensColour: "white",
        lensOpacity: 0.4,
        lenszoom: false,
        tint: false,
        tintColour: "#333",
        tintOpacity: 0.4,
        gallery: false,
        galleryActiveClass: "zoomGalleryActive",
        imageCrossfade: false,
        constrainType: false,
        constrainSize: false,
        loadingIcon: false,
        cursor: "default",
        responsive: true,
        onComplete: $.noop,
        onDestroy: function() {},
        onZoomedImageLoaded: function() {},
        onImageSwap: $.noop,
        onImageSwapComplete: $.noop
    };
})(jQuery, window, document);
