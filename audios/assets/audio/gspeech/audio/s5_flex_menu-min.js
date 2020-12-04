function s5_create_separator_class() {
  if (document.getElementById('subMenusContainer')) for (var t = document.getElementById('subMenusContainer').getElementsByTagName('A'), i = 0; i < t.length; i++) 'javascript:;' == t[i].href && 'S5_submenu_item' == t[i].parentNode.className && (t[i].parentNode.parentNode.className = t[i].parentNode.parentNode.className + ' subSepBtn')
}
var Eventx = {
  addEvent: function (t, i, e) {
    document.addEventListener ? t.addEventListener(i, e, !1)  : t.attachEvent('on' + i, e)
  },
  onResizend: function (t) {
    var i = 'normal',
    e = null,
    n = function () {
      e && clearTimeout(e),
      e = setTimeout(function () {
        t && t(),
        i = 'normal'
      }, 500)
    };
    this.addEvent(window, 'resize', function () {
      i = 'resizing',
      n()
    })
  },
  onResizestart: function (t) {
    var i = !1;
    this.onResizend(function () {
      i = !1
    }),
    this.addEvent(window, 'resize', function () {
      i || (t && t(), i = !0)
    })
  }
};
Array.prototype.every = function (t, i) {
  for (var e = 0, n = this.length >>> 0; n > e; e++) if (e in this && !t.call(i, this[e], e, this)) return !1;
  return !0
},
Array.prototype.filter = function (t, i) {
  for (var e, n = [
  ], s = 0, o = this.length >>> 0; o > s; s++) s in this && (e = this[s], t.call(i, e, s, this) && n.push(e));
  return n
},
Array.prototype.indexOf = function (t, i) {
  for (var e = this.length >>> 0, n = 0 > i ? Math.max(0, e + i)  : i || 0; e > n; n++) if (this[n] === t) return n;
  return - 1
},
Array.prototype.map = function (t, i) {
  for (var e = this.length >>> 0, n = Array(e), s = 0; e > s; s++) s in this && (n[s] = t.call(i, this[s], s, this));
  return n
},
Array.prototype.some = function (t, i) {
  for (var e = 0, n = this.length >>> 0; n > e; e++) if (e in this && t.call(i, this[e], e, this)) return !0;
  return !1
},
Array.prototype.clean = function () {
  return this.filter(function (t) {
    return null != t
  })
},
Array.prototype.invoke = function (t) {
  var i = Array.slice(arguments, 1);
  return this.map(function (e) {
    return e[t].apply(e, i)
  })
},
Array.prototype.associate = function (t) {
  for (var i = {
  }, e = Math.min(this.length, t.length), n = 0; e > n; n++) i[t[n]] = this[n];
  return i
},
Array.prototype.link = function (t) {
  for (var i = {
  }, e = 0, n = this.length; n > e; e++) for (var s in t) if (t[s](this[e])) {
    i[s] = this[e],
    delete t[s];
    break
  }
  return i
},
Array.prototype.contains = function (t, i) {
  return - 1 != this.indexOf(t, i)
},
Array.prototype.append = function (t) {
  return this.push.apply(this, t),
  this
},
Array.prototype.getLast = function () {
  return this.length ? this[this.length - 1] : null
},
Array.prototype.getRandom = function () {
  return this.length ? this[Number.random(0, this.length - 1)] : null
},
Array.prototype.include = function (t) {
  return this.contains(t) || this.push(t),
  this
},
Array.prototype.combine = function (t) {
  for (var i = 0, e = t.length; e > i; i++) this.include(t[i]);
  return this
},
Array.prototype.erase = function (t) {
  for (var i = this.length; i--; ) this[i] === t && this.splice(i, 1);
  return this
},
Array.prototype.empty = function () {
  return this.length = 0,
  this
},
Array.prototype.flatten = function () {
  for (var t = [
  ], i = 0, e = this.length; e > i; i++) {
    var n = typeOf(this[i]);
    'null' != n && (t = t.concat('array' == n || 'collection' == n || 'arguments' == n || instanceOf(this[i], Array) ? Array.flatten(this[i])  : this[i]))
  }
  return t
},
Array.prototype.pick = function () {
  for (var t = 0, i = this.length; i > t; t++) if (null != this[t]) return this[t];
  return null
},
Array.prototype.hexToRgb = function (t) {
  if (3 != this.length) return null;
  var i = this.map(function (t) {
    return 1 == t.length && (t += t),
    t.toInt(16)
  });
  return t ? i : 'rgb(' + i + ')'
},
Array.prototype.rgbToHex = function (t) {
  if (this.length < 3) return null;
  if (4 == this.length && 0 == this[3] && !t) return 'transparent';
  for (var i = [
  ], e = 0; 3 > e; e++) {
    var n = (this[e] - 0).toString(16);
    i.push(1 == n.length ? '0' + n : n)
  }
  return t ? i : '#' + i.join('')
},
void 0 == Function.prototype.bind && (Function.prototype.bind = function (t) {
  var i = this,
  e = arguments.length > 1 ? Array.slice(arguments, 1)  : null,
  n = function () {
  },
  s = function () {
    var o = t,
    h = arguments.length;
    this instanceof s && (n.prototype = i.prototype, o = new n);
    var a = e || h ? i.apply(o, e && h ? e.concat(Array.slice(arguments))  : e || arguments)  : i.call(o);
    return o == t ? a : o
  };
  return s
}),
function (t) {
  t.fn.getLast = function () {
    return t(this).children().last()
  },
  t.fn.getPrevious = t.fn.prev,
  t.fn.getFirst = function () {
    return t(this).children().first()
  },
  t.fn.getNext = t.fn.next,
  t.fn.fireEvents = function (i) {
    t(this).each(function (e, n) {
      t(n).trigger(i)
    })
  },
  MenuMatic = window.MenuMatic = function (t) {
    this.options = {
      id: 's5_nav',
      subMenusContainerId: 'subMenusContainer',
      tabletWidth: 800,
      effect: 'slide & fade',
      duration: 200,
      physics: 'easeOutQuad',
      hideDelay: 400,
      displayDelay: 0,
      stretchMainMenu: !1,
      matchWidthMode: !1,
      orientation: 'horizontal',
      direction: {
        x: 'right',
        y: 'down'
      },
      olddirection: {
        x: 'right',
        y: 'down'
      },
      tweakInitial: {
        x: 0,
        y: 0
      },
      tweakSubsequent: {
        x: 0,
        y: 0
      },
      center: !1,
      opacity: 95,
      mmbFocusedClassName: null,
      mmbClassName: null,
      killDivider: null,
      fullWidth: null,
      fixHasLayoutBug: !1,
      onHideAllSubMenusNow_begin: function () {
      },
      onHideAllSubMenusNow_complete: function () {
      },
      onInit_begin: function () {
      },
      onInit_complete: function () {
      }
    },
    this.hideAllMenusTimeout = null,
    this.S5DisplayMenusTimeout = null,
    this.allSubMenus = [
    ],
    this.subMenuZindex = 1,
    this.initialize(t),
    this.stretch(),
    this.killDivider(),
    this.center()
  },
  MenuMatic.prototype.initialize = function (e) {
    this.options = t.extend(this.options, e),
    this.options.olddirection.x = this.options.direction.x,
    this.options.olddirection.y = this.options.direction.y,
    this.options.opacity > 99 && (this.options.opacity = 99.9),
    this.options.opacity = this.options.opacity / 100,
    this.options.direction.x = this.options.direction.x.toLowerCase(),
    this.options.direction.y = this.options.direction.y.toLowerCase(),
    'right' === this.options.direction.x ? this.options.direction.xInverse = 'left' : 'left' === this.options.direction.x && (this.options.direction.xInverse = 'right'),
    'up' === this.options.direction.y ? this.options.direction.yInverse = 'down' : 'down' === this.options.direction.y && (this.options.direction.yInverse = 'up');
    var n = t('#' + this.options.id + ' li, span.grouped_sub_parent_item'),
    s = new Array;
    t(n).each(function (i, e) {
      if (t(e).data('parentLinks', t(e).parents('li')), t(e).children('ul') && t(e).children('ul').length >= 1) {
        var n = t(e).children('ul');
        s[i] = ''
      } else var n = null;
      t(e).data('childMenu', n),
      n && n.data('parentMenu', t(e)),
      theSubMenuType = 'subsequent',
      t(t(e).parents('ul') || t(e).parents('ol')).attr('id') === this.options.id && (theSubMenuType = 'initial'),
      t(e).data('subMenuType', theSubMenuType),
      'initial' === theSubMenuType && t(t(e).children('ul') || t(e).children('ol')) ? t(e).addClass('mainMenuParentBtn')  : t(t(e).children('ul') || t(e).children('ol')) && t(e).addClass('subMenuParentBtn')
    }.bind(this));
    var o = t('<div></div>').attr('id', this.options.subMenusContainerId).appendTo(t('body')),
    h = new Array;
    t('#' + this.options.id + ' ul').each(function (i, e) {
      if (0 == t(e).parents('div[class*=moduletable]').length) {
        if (t(e).parents('span.grouped_sub_parent_item').size() > 0) var s = n.index(t(e).parents('span.grouped_sub_parent_item'));
         else var s = n.index(t(e).parent('li'));
        if (0 == h.contains(s)) {
          if (h.include(s), 'initial' == t(e).parent().data('subMenuType')) var a = t('<div></div>').addClass('s5_sub_wrap').attr('id', 'ul_child_' + s).appendTo(o);
           else var a = t('<div></div>').addClass('s5_sub_wrap_lower').attr('id', 'ul_child_' + s).appendTo(o);
          {
            var u = t('<ul></ul>').appendTo(a);
            t('<li></li>').attr('id', 'li_child_' + s).appendTo(u).append(e)
          }
        } else t('#li_child_' + s) && t('#li_child_' + s).append(e)
      }
    }),
    t('a', o).attr('tabindex', '-1'),
    n.each(function (e, n) {
      if (t(n).data('childMenu')) {
        t(n).data('childMenu', t('#ul_child_' + e)),
        t('#ul_child_' + e).data('parentMenu', t(n)),
        this.allSubMenus.include(t(n).data('childMenu'));
        var s = [
        ];
        t(n).data('parentLinks').each(function (i, e) {
          s.include(t(e).data('childMenu') ? t(e).data('childMenu') [0] : t(e).parentsUntil('li').parentsUntil('div').parent() [0])
        }),
        t(n).data('parentSubMenus', t(s)),
        delete s;
        var o = new i;
        jQuery(n).data('subMenuInstance', o),
        o.initialize(this.options, this, t(n), e)
      }
    }.bind(this));
    var a = t('#' + this.options.id + ' li').filter(function (i, e) {
      return !t(e).data('childMenu')
    });
    a.each(function (i, e) {
      t(e).bind('mouseenter', function (i) {
        i.preventDefault(),
        this.hideAllSubMenusNow(),
        this.options.mmbClassName && this.options.mmbFocusedClassName && (t(e).data('btnMorph') ? t(e).data('btnMorph')  : t(e).switchClass(this.options.mmbFocusedClassName, '', this.options.duration / 2, this.options.physics))
      }.bind(this)),
      t(e).bind('focus', function (i) {
        i.preventDefault(),
        this.hideAllSubMenusNow(),
        this.options.mmbClassName && this.options.mmbFocusedClassName && (t(e).data('btnMorph') ? t(e).data('btnMorph')  : t(e).switchClass(this.options.mmbFocusedClassName, '', this.options.duration / 2, this.options.physics))
      }.bind(this)),
      t(e).bind('mouseleave', function (i) {
        i.preventDefault(),
        this.options.mmbClassName && this.options.mmbFocusedClassName && (t(e).data('btnMorph') ? t(e).data('btnMorph')  : t(e).switchClass(this.options.mmbClassName, '', this.options.duration / 2, this.options.physics))
      }.bind(this)),
      t(e).bind('blur', function (i) {
        i.preventDefault(),
        this.options.mmbClassName && this.options.mmbFocusedClassName && (t(e).data('btnMorph') ? t(e).data('btnMorph')  : t(e).switchClass(this.options.mmbClassName, '', this.options.duration / 2, this.options.physics))
      }.bind(this)),
      t(e).bind('keydown', function (i) {
        new Event(i);
        ('up' === i.key || 'down' === i.key || 'left' === i.key || 'right' === i.key) && i.stop(),
        'left' === i.key && 'horizontal' === this.options.orientation || 'up' === i.key && 'vertical' === this.options.orientation ? t(e).parents('li').getPrevious('li') ? t(e).parents('li').getPrevious('li').getFirst('a').focus()  : t(e).parents('li').parent().getLast('li').getFirst('a').focus()  : ('right' === i.key && 'horizontal' === this.options.orientation || 'down' === i.key && 'vertical' === this.options.orientation) && (t(e).parents('li').getNext('li') ? t(e).parents('li').getNext('li').getFirst('a').focus()  : t(e).parents('li').parent().getFirst('li').getFirst('a').focus())
      }.bind(this))
    }.bind(this)),
    this.onResizeWindow(),
    Eventx.onResizestart(this.hideAllSubMenusNow.bind(this)),
    Eventx.onResizend(this.onResizeWindow.bind(this))
  },
  MenuMatic.prototype.getWidth = function () {
    return this.options.fullWidth && 'function' == typeof this.options.fullWidth ? this.options.fullWidth()  : 'auto'
  },
  MenuMatic.prototype.onResizeWindow = function () {
    var i = this;
    if (t(window).width() >= this.options.tabletWidth) {
      var e = window.needTablet = 0;
      if (window.s5menuTablet) var n = window.needRevert = 1;
       else var n = window.needRevert = 0
    } else if (t(window).width() < this.options.tabletWidth && ('ontouchstart' in window || navigator.maxTouchPoints > 0 || navigator.msMaxTouchPoints > 0)) {
      var n = window.needRevert = 0;
      if (window.s5menuTablet) var e = window.needTablet = 0;
       else var e = window.needTablet = 1
    }
    if (e || n) {
      var s = jQuery('.mainMenuParentBtn,.subMenuParentBtn,.mainParentBtn,.subParentBtn');
      s.each(function (s, o) {
        if (!t(o).data('childMenu')) return e && (t(o).unbind('mouseenter').bind('mouseenter', function () {
          jQuery('.mainParentBtnFocused').removeClass('mainParentBtnFocused'),
          jQuery(this).addClass('mainParentBtnFocused')
        }), t(o).unbind('mouseleave').bind('mouseleave', function () {
          jQuery(this).removeClass('mainParentBtnFocused')
        })),
        void (n && t(o).unbind('mouseenter').bind('mouseenter', i.hideAllSubMenusNow.bind(i)));
        var h = t(o).data('subMenuInstance');
        if (e) {
          window.s5menuTablet = 1;
          var a = function (i) {
            i.preventDefault(),
            jQuery(this).css({
              background: ''
            }),
            'initial' == h.subMenuType ? jQuery(this).addClass('mainMenuParentBtnFocused')  : jQuery(this).addClass('subMenuParentBtn').addClass('subMenuParentBtnFocused'),
            'initial' === h.subMenuType && h.options.mmbClassName && h.options.mmbFocusedClassName && (t(this).data('btnMorph') ? t(this).data('btnMorph')  : t(this).switchClass(h.options.mmbFocusedClassName, '', h.options.duration / 2, h.options.physics))
          },
          u = function () {
            return t(this).data('menuOpened') || ('initial' == h.subMenuType ? jQuery(this).removeClass('mainMenuParentBtnFocused').removeClass('mainMenuParentBtnTablet')  : jQuery(this).removeClass('subMenuParentBtnFocused')),
            !1
          },
          r = function (i) {
            if ('SPAN' == i.target.nodeName && i.target.hasAttribute('onclick') && - 1 == i.target.getAttribute('onclick').indexOf('javascript:;')) return i.target.click(),
            !1;
            if ('initial' == h.subMenuType ? jQuery(this).removeClass('mainMenuParentBtnTablet')  : jQuery(this).find('.S5_submenu_item').removeClass('S5_submenu_itemTablet'), t(this).data('menuOpened')) {
              h.hideSubMenu(!0);
              var e = t(this).data('childMenu').find('li').filter(function (i, e) {
                return t(e).data('childMenu') && t(e).data('menuOpened')
              });
              return e.each(function (i, e) {
                t(e).data('subMenuInstance').hideSubMenu();
                var n = t(e).data('childMenu').find('li').filter(function (i, e) {
                  return t(e).data('childMenu') && t(e).data('menuOpened')
                });
                n.each(function (i, e) {
                  t(e).data('subMenuInstance').hideSubMenu()
                })
              }),
              t(this).data('menuOpened', !1),
              'initial' == h.subMenuType ? jQuery(this).removeClass('mainMenuParentBtnFocused').addClass('mainMenuParentBtnTablet')  : jQuery(this).find('.S5_submenu_item').addClass('S5_submenu_itemTablet'),
              !1
            }
            t(this).data('menuOpened', !0),
            i.preventDefault(),
            h.cancellHideAllSubMenus(),
            h.hideOtherSubMenus(),
            setTimeout(function () {
              h.showSubMenu()
            }, 10),
            'initial' === h.subMenuType && h.options.mmbClassName && h.options.mmbFocusedClassName && (t(this).data('btnMorph') ? t(this).data('btnMorph')  : t(this).switchClass(h.options.mmbFocusedClassName, '', h.options.duration / 2, h.options.physics))
          }
        }
        if (n) {
          window.s5menuTablet = 0;
          var a = t(o).data('mouseenterH'),
          u = t(o).data('mouseleaveH'),
          r = function (t) {
            t.target.click()
          }
        }
        t(o).unbind('mouseenter').bind('mouseenter', a).unbind('mouseleave').bind('mouseleave', u).unbind('click').bind('click', r)
      }),
      jQuery('li[id*=li_child_] ul').each(function (i, s) {
        var o = t(s).data('parentMenu');
        if (o) {
          var h = o.data('subMenuInstance');
          if (e || n) {
            if (e) var a = function () {
              o.addClass('initial' == h.subMenuType ? 'mainMenuParentBtnFocused' : 'subMenuParentBtnFocused')
            };
            if (n) var a = o.data('mouseenterH');
            t(s).bind('mouseenter', a)
          }
        }
        t(s).children('li').each(function (i, s) {
          if (t(s).data('childMenu')) {
            var o = t(s).data('subMenuInstance');
            if (e || n) {
              if (e) var h = function () {
                0 == t(s).data('menuOpened') && t(this).removeClass('initial' == o.subMenuType ? 'mainMenuParentBtnFocused' : 'subMenuParentBtnFocused')
              },
              a = function () {
                'initial' == o.subMenuType ? t(this).addClass('mainMenuParentBtnFocused')  : t(this).addClass('subMenuParentBtnFocused').find('.S5_submenu_itemTablet').removeClass('S5_submenu_itemTablet')
              };
              if (n) var h = t(s).data('mouseleaveH'),
              a = t(s).data('mouseenterH');
              t(s).unbind('mouseleave').bind('mouseleave', h).unbind('mouseenter').bind('mouseenter', a)
            }
          } else {
            var h = t(s).data('mouseleaveH'),
            a = t(s).data('mouseenterH');
            n && t(s).unbind('mouseleave').bind('mouseleave', h).unbind('mouseenter').bind('mouseenter', a),
            e && t(s).unbind('mouseleave').unbind('mouseenter').bind('click', a)
          }
        })
      })
    }
  },
  MenuMatic.prototype.center = function () {
    this.options.center && t('#' + this.options.id).css({
      left: '50%',
      marginLeft: - (t('#' + this.options.id).width() / 2)
    })
  },
  MenuMatic.prototype.stretch = function () {
    if (this.options.stretchMainMenu && 'horizontal' === this.options.orientation) {
      var i = parseFloat(t('#' + this.options.id).width()),
      e = 0,
      n = t('#' + this.options.id + ' li');
      if (n.css({
        paddingLeft: 0,
        paddingRight: 0
      }), n.each(function (i, n) {
        e += t(n).width()
      }.bind(this)), e > i) return;
      var s = (i - e) / n.length;
      n.each(function (i, e) {
        t(e).css('width', t(e).width() + s)
      }.bind(this)),
      n.getLast().css('width', n.getLast().width() - 1)
    }
  },
  MenuMatic.prototype.killDivider = function () {
    this.options.killDivider && 'first' === this.options.killDivider.toLowerCase() ? t(t('#' + this.options.id + ' li') [0]).css({
      background: 'none'
    })  : this.options.killDivider && 'last' === this.options.killDivider.toLowerCase() && t(t('#' + this.options.id + ' li').getLast()).css({
      background: 'none'
    })
  },
  MenuMatic.prototype.hideAllSubMenusNow = function () {
    clearTimeout(this.hideAllMenusTimeout),
    t(this.allSubMenus).fireEvents('hidex')
  };
  var i = function () {
    this.options = {
      onSubMenuInit_begin: function () {
      },
      onSubMenuInit_complete: function () {
      },
      onMatchWidth_begin: function () {
      },
      onMatchWidth_complete: function () {
      },
      onHideSubMenu_begin: function () {
      },
      onHideSubMenu_complete: function () {
      },
      onHideOtherSubMenus_begin: function () {
      },
      onHideOtherSubMenus_complete: function () {
      },
      onHideAllSubMenus_begin: function () {
      },
      onHideAllSubMenus_complete: function () {
      },
      onPositionSubMenu_begin: function () {
      },
      onPositionSubMenu_complete: function () {
      },
      onShowSubMenu_begin: function () {
      },
      onShowSubMenu_complete: function () {
      }
    },
    this.root = null,
    this.btn = null,
    this.hidden = !0,
    this.myEffect = null
  };
  i.prototype.matchWidth = function () {
    if (!this.widthMatched && this.options.matchWidthMode && 'subsequent' !== this.subMenuType) {
      if (0 == this.btn.is('li')) var i = this.btn.parentsUntil('li').eq(0).outerWidth();
       else var i = this.btn.outerWidth();
      var e = i;
      t('li', t(this.childMenu)).each(function (i, n) {
        var s = parseFloat(t(this.childMenu).getFirst().getStyle('borderLeftWidth')) + parseFloat(t(this.childMenu).getFirst().getStyle('borderRightWidth')),
        o = parseFloat(t(n).getStyle('paddingLeft')) + parseFloat(t(n).getStyle('paddingRight')),
        h = s + o;
        e > t(n).width() && (t(n).css('width', e - h + 1), t(n).css('margin-right', - s))
      }.bind(this)),
      this.width = this.childMenu.getFirst().width() + 1,
      this.widthMatched = !0
    }
  },
  i.prototype.hideSubMenu = function (i) {
    'closed' !== this.childMenu.data('status') && (void 0 == i && ('initial' == this.subMenuType ? this.options.mmbClassName && this.options.mmbFocusedClassName ? t(this.btn).data('btnMorph') ? t(this.btn).data('btnMorph')  : this.btn.switchClass(this.options.mmbClassName, '', this.options.duration, this.options.physics, function () {
      t(this.btn).removeClass('mainMenuParentBtnFocused'),
      t(this.btn).addClass('mainMenuParentBtn')
    }.bind(this))  : (t(this.btn).removeClass('mainMenuParentBtnFocused'), t(this.btn).addClass('mainMenuParentBtn'))  : (t(this.btn).removeClass('subMenuParentBtnFocused'), t(this.btn).addClass('subMenuParentBtn'))), this.options.effect && 'slide' === this.options.effect.toLowerCase() ? 'initial' == this.subMenuType && 'horizontal' === this.options.orientation && 'down' === this.options.direction.y ? t(this.childMenu).getFirst().animate({
      marginTop: - this.height
    }, {
      duration: this.options.duration,
      easing: this.options.physics,
      queue: !1,
      complete: function () {
        this.childMenu.css({
          left: 0,
          display: 'none',
          zIndex: - 100
        })
      }.bind(this)
    }).bind(this)  : 'initial' == this.subMenuType && 'horizontal' === this.options.orientation && 'up' === this.options.direction.y ? t(this.childMenu).getFirst().animate({
      marginTop: this.height
    }, {
      duration: this.options.duration,
      easing: this.options.physics,
      queue: !1,
      complete: function () {
        this.childMenu.css({
          left: 0,
          display: 'none',
          zIndex: - 100
        })
      }.bind(this)
    }).bind(this)  : 'right' === this.options.direction.x ? t(this.childMenu).getFirst().animate({
      marginLeft: - this.width
    }, {
      duration: this.options.duration,
      easing: this.options.physics,
      queue: !1,
      complete: function () {
        this.childMenu.css({
          left: 0,
          display: 'none',
          zIndex: - 100
        })
      }.bind(this)
    }).bind(this)  : 'left' === this.options.direction.x && t(this.childMenu).getFirst().animate({
      marginLeft: this.width
    }, {
      duration: this.options.duration,
      easing: this.options.physics,
      queue: !1,
      complete: function () {
        this.childMenu.css({
          left: 0,
          display: 'none',
          zIndex: - 100
        })
      }.bind(this)
    }).bind(this)  : 'fade' == this.options.effect ? t(this.childMenu).getFirst().animate({
      opacity: 0
    }, {
      duration: this.options.duration,
      easing: this.options.physics,
      queue: !1,
      complete: function () {
        this.childMenu.css({
          left: 0,
          display: 'none',
          zIndex: - 100
        })
      }.bind(this)
    }).bind(this)  : 'slide & fade' == this.options.effect ? 'initial' == this.subMenuType && 'horizontal' === this.options.orientation && 'down' === this.options.direction.y ? t(this.childMenu).getFirst().animate({
      marginTop: - this.height,
      opacity: 0
    }, {
      duration: this.options.duration,
      easing: this.options.physics,
      queue: !1,
      complete: function () {
        this.childMenu.css({
          left: 0,
          display: 'none',
          zIndex: - 100
        })
      }.bind(this)
    }).bind(this)  : 'initial' == this.subMenuType && 'horizontal' === this.options.orientation && 'up' === this.options.direction.y ? t(this.childMenu).getFirst().animate({
      marginTop: this.height,
      opacity: 0
    }, {
      duration: this.options.duration,
      easing: this.options.physics,
      queue: !1,
      complete: function () {
        this.childMenu.css({
          left: 0,
          display: 'none',
          zIndex: - 100
        })
      }.bind(this)
    }).bind(this)  : 'right' === this.options.direction.x ? t(this.childMenu).getFirst().animate({
      marginLeft: - this.width,
      opacity: 0
    }, {
      duration: this.options.duration,
      easing: this.options.physics,
      queue: !1,
      complete: function () {
        this.childMenu.css({
          left: 0,
          display: 'none',
          zIndex: - 100
        })
      }.bind(this)
    }).bind(this)  : 'left' === this.options.direction.x && t(this.childMenu).getFirst().animate({
      marginLeft: this.width,
      opacity: 0
    }, {
      duration: this.options.duration,
      easing: this.options.physics,
      queue: !1,
      complete: function () {
        this.childMenu.css({
          left: 0,
          display: 'none',
          zIndex: - 100
        })
      }.bind(this)
    }).bind(this)  : (this.childMenu[0].style.left = '0px', this.childMenu[0].style.visiblity = 'hidden', this.childMenu.css('zIndex', - 100)), this.childMenu.data('status', 'closed'))
  },
  i.prototype.hideOtherSubMenus = function () {
    this.btn.data('otherSubMenus') || this.btn.data('otherSubMenus', t(this.root.allSubMenus.filter(function (t) {
      return - 1 == this.btn.data('parentSubMenus').index(t) && t != this.childMenu
    }.bind(this)))),
    this.parentSubMenus.fireEvents('show'),
    this.btn.data('otherSubMenus').fireEvents('hidex'),
    this.btn.data('otherSubMenus').each(function (i, e) {
      t(e).data('parentMenu').data('menuOpened', !1)
    })
  },
  i.prototype.hideAllSubMenus = function () {
    clearTimeout(this.root.hideAllMenusTimeout),
    this.root.hideAllMenusTimeout = setTimeout(function () {
      clearTimeout(this.root.hideAllMenusTimeout),
      t(this.root.allSubMenus).fireEvents('hidex')
    }.bind(this), this.options.hideDelay)
  },
  i.prototype.cancellHideAllSubMenus = function () {
    clearTimeout(this.root.hideAllMenusTimeout),
    this.options.direction.x = this.options.olddirection.x
  },
  i.prototype.showSubMenu = function () {
    S5DisplayMenusTimeout = setTimeout(function () {
      this.S5showSubMenu()
    }.bind(this), this.options.displayDelay)
  },
  i.prototype.S5showSubMenu = function (i) {
    'open' !== this.childMenu.data('status') && ('initial' == this.subMenuType ? (t(this.btn).removeClass('mainMenuParentBtn'), t(this.btn).addClass('mainMenuParentBtnFocused'))  : (t(this.btn).removeClass('subMenuParentBtn'), t(this.btn).addClass('subMenuParentBtnFocused')), this.root.subMenuZindex++, this.childMenu.css({
      display: 'block',
      visibility: 'hidden',
      zIndex: this.root.subMenuZindex
    }), this.height && this.width || (this.height = this.childMenu.getFirst().outerHeight(), this.width = this.childMenu.getFirst().outerWidth(), ('slide' === this.options.effect || 'slide & fade' === this.options.effect) && ('initial' == this.subMenuType && 'horizontal' === this.options.orientation ? (this.childMenu.getFirst().css('marginTop', '0'), 'down' === this.options.direction.y ? t(this.childMenu).getFirst().css({
      marginTop: - this.height
    })  : 'up' === this.options.direction.y && t(this.childMenu).getFirst().css({
      marginTop: this.height
    }))  : t(this.childMenu).getFirst().css('left' === this.options.direction.x ? {
      marginLeft: this.width
    }
     : {
      marginLeft: - this.width
    }))), this.matchWidth(), this.positionSubMenu(), 'slide' === this.options.effect ? (this.childMenu.css({
      display: 'block',
      visibility: 'visible'
    }), 'initial' === this.subMenuType && 'horizontal' === this.options.orientation ? (t('#' + this.options.id).offset().top != t('#' + this.options.id).position().top && t(this.childMenu).css('top', t(this.btn).offset().top + t(this.btn).outerHeight() - t(window).scrollTop()), document.getElementById('s5_menu_wrap') && 's5_wrap' != document.getElementById('s5_menu_wrap').className && 's5_wrap_fmfullwidth' != document.getElementById('s5_menu_wrap').className && 's5_floating_header' != document.getElementById('s5_menu_wrap').parentNode.className && 's5_floating_header' != document.getElementById('s5_menu_wrap').parentNode.parentNode.className && 's5_floating_header' != document.getElementById('s5_menu_wrap').parentNode.parentNode.parentNode.className && 's5_floating_header' != document.getElementById('s5_menu_wrap').parentNode.parentNode.parentNode.parentNode.className && t('#' + this.options.id).offset().top != t('#' + this.options.id).position().top && t(this.childMenu).css('top', t(this.btn).offset().top + t(this.btn).outerHeight()), i ? t(this.childMenu).getFirst().stop().animate({
      marginTop: 0
    }, {
      duration: 0,
      easing: this.options.physics,
      queue: !1,
      complete: function () {
        this.showSubMenuComplete()
      }.bind(this)
    })  : t(this.childMenu).getFirst().stop().animate({
      marginTop: 0
    }, {
      duration: this.options.duration,
      queue: !1,
      easing: this.options.physics,
      complete: function () {
        this.showSubMenuComplete()
      }.bind(this)
    }))  : ('subsequent' === this.subMenuType && (t('#' + this.options.id).offset().top != t('#' + this.options.id).position().top && t(this.childMenu).css('top', t(this.btn).offset().top - t(window).scrollTop()), document.getElementById('s5_menu_wrap') && 's5_wrap' != document.getElementById('s5_menu_wrap').className && 's5_wrap_fmfullwidth' != document.getElementById('s5_menu_wrap').className && 's5_floating_header' != document.getElementById('s5_menu_wrap').parentNode.className && 's5_floating_header' != document.getElementById('s5_menu_wrap').parentNode.parentNode.className && 's5_floating_header' != document.getElementById('s5_menu_wrap').parentNode.parentNode.parentNode.className && 's5_floating_header' != document.getElementById('s5_menu_wrap').parentNode.parentNode.parentNode.parentNode.className && t('#' + this.options.id).offset().top != t('#' + this.options.id).position().top && t(this.childMenu).css('top', t(this.btn).offset().top)), i ? t(this.childMenu).getFirst().stop().animate({
      marginLeft: 0
    }, {
      duration: 0,
      easing: this.options.physics,
      queue: !1,
      complete: function () {
        this.showSubMenuComplete()
      }.bind(this)
    })  : t(this.childMenu).getFirst().stop().animate({
      marginLeft: 0
    }, {
      duration: this.options.duration,
      easing: this.options.physics,
      queue: !1,
      complete: function () {
        this.showSubMenuComplete()
      }.bind(this)
    })))  : 'fade' === this.options.effect ? ('initial' === this.subMenuType && 'horizontal' === this.options.orientation && (t('#' + this.options.id).offset().top != t('#' + this.options.id).position().top && t(this.childMenu).css('top', t(this.btn).offset().top + t(this.btn).outerHeight() - t(window).scrollTop()), document.getElementById('s5_menu_wrap') && 's5_wrap' != document.getElementById('s5_menu_wrap').className && 's5_wrap_fmfullwidth' != document.getElementById('s5_menu_wrap').className && 's5_floating_header' != document.getElementById('s5_menu_wrap').parentNode.className && 's5_floating_header' != document.getElementById('s5_menu_wrap').parentNode.parentNode.className && 's5_floating_header' != document.getElementById('s5_menu_wrap').parentNode.parentNode.parentNode.className && 's5_floating_header' != document.getElementById('s5_menu_wrap').parentNode.parentNode.parentNode.parentNode.className && t('#' + this.options.id).offset().top != t('#' + this.options.id).position().top && t(this.childMenu).css('top', t(this.btn).offset().top + t(this.btn).outerHeight())), this.childMenu.css({
      display: 'block',
      visibility: 'visible'
    }), i ? t(this.childMenu).getFirst().stop().animate({
      opacity: this.options.opacity
    }, {
      duration: 0,
      easing: this.options.physics,
      queue: !1,
      complete: function () {
        this.showSubMenuComplete()
      }.bind(this)
    })  : t(this.childMenu).getFirst().stop().animate({
      opacity: this.options.opacity
    }, {
      duration: this.options.duration,
      easing: this.options.physics,
      queue: !1,
      complete: function () {
        this.showSubMenuComplete()
      }.bind(this)
    }), 'subsequent' === this.subMenuType && (t('#' + this.options.id).offset().top != t('#' + this.options.id).position().top && t(this.childMenu).css('top', t(this.btn).offset().top - t(window).scrollTop()), document.getElementById('s5_menu_wrap') && 's5_wrap' != document.getElementById('s5_menu_wrap').className && 's5_wrap_fmfullwidth' != document.getElementById('s5_menu_wrap').className && 's5_floating_header' != document.getElementById('s5_menu_wrap').parentNode.className && 's5_floating_header' != document.getElementById('s5_menu_wrap').parentNode.parentNode.className && 's5_floating_header' != document.getElementById('s5_menu_wrap').parentNode.parentNode.parentNode.className && 's5_floating_header' != document.getElementById('s5_menu_wrap').parentNode.parentNode.parentNode.parentNode.className && t('#' + this.options.id).offset().top != t('#' + this.options.id).position().top && t(this.childMenu).css('top', t(this.btn).offset().top)))  : 'slide & fade' == this.options.effect ? (this.childMenu.css({
      display: 'block',
      visibility: 'visible'
    }), this.childMenu.getFirst().css({
      left: 0
    }), 'initial' === this.subMenuType && 'horizontal' === this.options.orientation ? (t('#' + this.options.id).offset().top != t('#' + this.options.id).position().top && t(this.childMenu).css('top', t(this.btn).offset().top + t(this.btn).outerHeight() - t(window).scrollTop()), document.getElementById('s5_menu_wrap') && 's5_wrap' != document.getElementById('s5_menu_wrap').className && 's5_wrap_fmfullwidth' != document.getElementById('s5_menu_wrap').className && 's5_floating_header' != document.getElementById('s5_menu_wrap').parentNode.className && 's5_floating_header' != document.getElementById('s5_menu_wrap').parentNode.parentNode.className && 's5_floating_header' != document.getElementById('s5_menu_wrap').parentNode.parentNode.parentNode.className && 's5_floating_header' != document.getElementById('s5_menu_wrap').parentNode.parentNode.parentNode.parentNode.className && t('#' + this.options.id).offset().top != t('#' + this.options.id).position().top && t(this.childMenu).css('top', t(this.btn).offset().top + t(this.btn).outerHeight()), i ? t(this.childMenu).getFirst().stop().animate({
      marginTop: 0,
      opacity: this.options.opacity
    }, {
      duration: 0,
      queue: !1,
      easing: this.options.physics,
      complete: function () {
        this.showSubMenuComplete()
      }.bind(this)
    })  : t(this.childMenu).getFirst().stop().animate({
      marginTop: 0,
      opacity: this.options.opacity
    }, {
      duration: this.options.duration,
      queue: !1,
      easing: this.options.physics,
      complete: function () {
        this.showSubMenuComplete()
      }.bind(this)
    }))  : ('subsequent' === this.subMenuType && (t('#' + this.options.id).offset().top != t('#' + this.options.id).position().top && t(this.childMenu).css('top', t(this.btn).offset().top - t(window).scrollTop()), document.getElementById('s5_menu_wrap') && 's5_wrap' != document.getElementById('s5_menu_wrap').className && 's5_wrap_fmfullwidth' != document.getElementById('s5_menu_wrap').className && 's5_floating_header' != document.getElementById('s5_menu_wrap').parentNode.className && 's5_floating_header' != document.getElementById('s5_menu_wrap').parentNode.parentNode.className && 's5_floating_header' != document.getElementById('s5_menu_wrap').parentNode.parentNode.parentNode.className && 's5_floating_header' != document.getElementById('s5_menu_wrap').parentNode.parentNode.parentNode.parentNode.className && t('#' + this.options.id).offset().top != t('#' + this.options.id).position().top && t(this.childMenu).css('top', t(this.btn).offset().top)), i ? 'right' === this.options.direction.x ? t(this.childMenu).getFirst().stop().animate({
      marginLeft: 0,
      opacity: this.options.opacity
    }, {
      duration: 0,
      easing: this.options.physics,
      queue: !1,
      complete: function () {
        this.showSubMenuComplete()
      }.bind(this)
    })  : 'left' === this.options.direction.x && t(this.childMenu).getFirst().stop().animate({
      marginLeft: 0,
      opacity: this.options.opacity
    }, {
      duration: 0,
      easing: this.options.physics,
      queue: !1,
      complete: function () {
        this.showSubMenuComplete()
      }.bind(this)
    })  : 'right' === this.options.direction.x ? (t(this.childMenu).getFirst().css('marginLeft', - this.width), t(this.childMenu).getFirst().stop().animate({
      marginLeft: 0,
      opacity: this.options.opacity
    }, {
      duration: this.options.duration,
      easing: this.options.physics,
      queue: !1,
      complete: function () {
        this.showSubMenuComplete()
      }.bind(this)
    }))  : 'left' === this.options.direction.x && t(this.childMenu).getFirst().stop().animate({
      marginLeft: 0,
      opacity: this.options.opacity
    }, {
      duration: this.options.duration,
      easing: this.options.physics,
      queue: !1,
      complete: function () {
        this.showSubMenuComplete()
      }.bind(this)
    })))  : this.childMenu.stop().animate({
      display: 'block',
      visibility: 'visible'
    }, {
      duration: 0,
      easing: this.options.physics,
      queue: !1,
      complete: function () {
        this.showSubMenuComplete()
      }.bind(this)
    }), this.childMenu.data('status', 'open'))
  },
  i.prototype.showSubMenuComplete = function () {
    if (this.options.olddirection.x && (this.options.direction.x = this.options.olddirection.x), parseInt(this.childMenu[0].style.top) != this.btn.offset().top && this.btn.offset().top != t('#' + this.options.id).offset().top && 0 == parseInt(this.btn.css('marginTop')) && 0 != t('#' + this.options.id) [0].offsetTop) if ('initial' == this.btn.data('subMenuType')) {
      if ('horizontal' == this.options.orientation) if (0 == this.btn.is('li')) var i = this.btn.parentsUntil('li').eq(0).outerHeight();
       else var i = this.btn.outerHeight();
       else var i = this.btn.offset().top + this.btn.outerHeight();
      i -= this.subtractScrollTop(),
      t(this.childMenu).animate({
        top: i
      }, this.options.duration, this.options.physics)
    } else {
      var e = this.btn.offset().top;
      t(this.childMenu).animate({
        top: e
      }, this.options.duration, this.options.physics)
    }
  },
  i.prototype.positionSubMenu = function () {
    this.childMenu.css('width', this.width);
    var i = this.childMenu.getFirst(),
    e = i.getFirst(),
    n = e.find('ul'),
    s = 0;
    n.each(function (t, i) {
      s += i.offsetWidth
    }),
    this.childMenu.getFirst().css('width', s + 1),
    this.childMenu.css('width', s + 1),
    console.log(this.childMenu.getFirst()),
    ('s5_sub_wrap_rtl' == this.btn.parents('div').className || 's5_sub_wrap_lower_rtl' == this.btn.parents('div').className) && (this.childMenu.className = 's5_sub_wrap_lower_rtl'),
    'subsequent' === this.subMenuType && (this.parentSubMenu && this.options.direction.x != this.parentSubMenu.options.direction.x && 'left' === this.parentSubMenu.options.direction.x && this.options.effect && this.options.effect.contains('slide') && t(this.childMenu).getFirst().css({
      marginLeft: this.width
    }), this.options.direction.x = this.parentSubMenu.options.direction.x, this.options.direction.xInverse = this.parentSubMenu.options.direction.xInverse, this.options.direction.y = this.parentSubMenu.options.direction.y, this.options.direction.yInverse = this.parentSubMenu.options.direction.yInverse);
    var o,
    h;
    if ('initial' == this.subMenuType) {
      if ('up' === this.options.direction.y) {
        if ('vertical' === this.options.orientation) {
          if (0 == this.btn.is('li')) var a = this.btn.parentsUntil('li').eq(0).outerHeight();
           else var a = this.btn.outerHeight();
          o = this.btn.offset().top - this.subtractScrollTop() + a - this.height + this.options.tweakInitial.y
        } else o = this.btn.offset().top - this.subtractScrollTop() - this.height + this.options.tweakInitial.y;
        this.childMenu[0].style.top = o + 'px'
      } else if ('horizontal' == this.options.orientation) {
        if (0 == this.btn.is('li')) var a = this.btn.parentsUntil('li').eq(0).outerHeight();
         else var a = this.btn.outerHeight();
        this.childMenu[0].style.top = this.btn.offset().top - this.subtractScrollTop() + a + this.options.tweakInitial.y + 'px'
      } else 'vertical' == this.options.orientation && (o = this.btn.offset().top - this.subtractScrollTop() + this.options.tweakInitial.y, o += this.btn.outerHeight(), this.childMenu[0].style.top = o + 'px');
      if ('horizontal' == this.options.orientation) {
        var u = this.childMenu.outerWidth(),
        r = this.btn.offset().left;
        if (0 == this.btn.is('li')) var l = this.btn.parentsUntil('li').eq(0).outerWidth();
         else var l = this.btn.outerWidth();
        var d = t(window).width();
        if ('left' == this.options.direction.x) 0 > r - u ? (this.btn.offset().left - u + l < 0 && this.btn.offset().left + u > d ? (this.childMenu[0].style.width = this.root.getWidth(), this.childMenu[0].style.cssFloat = 'auto' == this.childMenu[0].style.width ? 'left' : 'none', this.childMenu.children().each(function (i, e) {
          t(e).css({
            'float': 'none',
            width: 'auto'
          }),
          t(e).children().each(function (i, e) {
            t(e).children().each(function (i, e) {
              t(e).css({
                'float': 'none'
              })
            })
          })
        }))  : (this.childMenu[0].style.width = this.root.getWidth(), this.childMenu[0].style.cssFloat = 'auto' == this.childMenu[0].style.width ? 'left' : 'none', this.childMenu.css({
          clear: 'none'
        }), this.childMenu.children().each(function (i, e) {
          t(e).css({
            'float': 'left',
            width: 'auto',
            clear: 'none'
          }).children().each(function (i, e) {
            t(e).children().each(function (i, e) {
              t(e).css({
                'float': 'left',
                clear: 'none'
              })
            })
          })
        })), u = t(this.childMenu).outerWidth(), this.btn.offset().left - u + l < 20 ? (p = this.btn.offset().left, need = 1, p -= 24)  : (p = this.btn.offset().left - u + l, need = 0), this.childMenu[0].style.left = p + 'px', this.childMenu.className = need ? 's5_sub_wrap_rtl' : 's5_sub_wrap')  : (this.childMenu[0].style.width = this.root.getWidth(), this.childMenu[0].style.cssFloat = 'auto' == this.childMenu[0].style.width ? 'left' : 'none', this.childMenu.css({
          clear: 'none'
        }), this.childMenu.children().each(function (i, e) {
          t(e).css({
            width: 'auto',
            'float': 'left',
            clear: 'none'
          }).children().each(function (i, e) {
            t(e).children().each(function (i, e) {
              t(e).css({
                'float': 'left',
                clear: 'none'
              })
            })
          })
        }), this.childMenu[0].className = 's5_sub_wrap', this.childMenu[0].style.marginLeft = '5px', u = this.childMenu.outerWidth(), this.childMenu[0].style.left = this.btn.offset().left - u + l + 'px');
         else if (u + r > d) {
          if (this.btn.offset().left - u + l < 0 ? (this.childMenu[0].style.width = this.root.getWidth(), this.childMenu[0].style.cssFloat = 'auto' == this.childMenu[0].style.width ? 'left' : 'none', this.childMenu.children().each(function (i, e) {
            t(e).css({
              width: 'auto',
              'float': 'none'
            }).children().each(function (i, e) {
              t(e).children().each(function (i, e) {
                t(e).css('float', 'none')
              })
            })
          }), this.childMenu.className = 's5_sub_wrap_rtl')  : (this.childMenu[0].style.width = this.root.getWidth(), this.childMenu[0].style.cssFloat = 'auto' == this.childMenu[0].style.width ? 'left' : 'none', this.childMenu.css({
            clear: 'none'
          }), this.childMenu.children().each(function (i, e) {
            t(e).css({
              'float': 'left',
              width: 'auto',
              clear: 'none'
            }).children().each(function (i, e) {
              t(e).children().each(function (i, e) {
                t(e).css({
                  'float': 'left',
                  clear: 'none'
                })
              })
            })
          })), u = this.childMenu.width(), u + this.btn.offset().left < d - 20) p = this.btn.offset().left;
           else {
            var p = this.btn.offset().left - u + l;
            0 > p && (p = this.btn.offset().left)
          }
          this.childMenu[0].style.left = p + 'px',
          this.childMenu.className = u + this.btn.offset().left < d ? 's5_sub_wrap' : 's5_sub_wrap_rtl'
        } else this.childMenu[0].style.width = this.root.getWidth(),
        this.childMenu[0].style.cssFloat = 'auto' == this.childMenu[0].style.width ? 'left' : 'none',
        this.childMenu.children().each(function (i, e) {
          t(e).css({
            'float': 'left',
            width: 'auto',
            clear: 'none'
          }).children().each(function (i, e) {
            t(e).children().each(function (i, e) {
              t(e).css({
                'float': 'left',
                clear: 'none'
              })
            })
          })
        }),
        this.childMenu.className = 's5_sub_wrap',
        this.childMenu[0].style.left = this.btn.offset().left + this.options.tweakInitial.x + 'px'
      } else if ('left' == this.options.direction.x) this.childMenu[0].style.left = this.btn.offset().left - this.childMenu.width() + this.options.tweakInitial.x + 'px';
       else if ('right' == this.options.direction.x) {
        if (0 == this.btn.is('li')) var c = this.btn.parentsUntil('li').eq(0).outerWidth();
         else var c = this.btn.outerWidth();
        this.childMenu[0].style.left = this.btn.offset().left + c + this.options.tweakInitial.x + 'px'
      }
    } else if ('subsequent' == this.subMenuType) {
      if ('down' === this.options.direction.y) this.btn.offset().top + this.options.tweakSubsequent.y + this.childMenu.height() >= t(document.body).scrollTop() ? (h = this.btn.offset().top - this.subtractScrollTop() + this.options.tweakSubsequent.y + this.childMenu.height(), this.childMenu[0].style.top = this.btn.offset().top - this.subtractScrollTop() + this.options.tweakSubsequent.y - h - 20 + 'px')  : this.childMenu[0].style.top = this.btn.offset().top - this.subtractScrollTop() + this.options.tweakSubsequent.y + 'px';
       else if ('up' === this.options.direction.y) {
        if (0 == this.btn.is('li')) var a = this.btn.parentsUntil('li').eq(0).outerHeight();
         else var a = this.btn.outerHeight();
        if (this.btn.offset().top + a - this.subtractScrollTop() - this.height + this.options.tweakSubsequent.y < 1) this.options.direction.y = 'down',
        this.options.direction.yInverse = 'up',
        this.childMenu[0].style.top = this.btn.offset().top - this.subtractScrollTop() + this.options.tweakSubsequent.y + 'px';
         else {
          if (0 == this.btn.is('li')) var a = this.btn.parentsUntil('li').eq(0).outerHeight();
           else var a = this.btn.outerHeight();
          this.childMenu[0].style.top = this.btn.offset().top - this.subtractScrollTop() + a - this.height + this.options.tweakSubsequent.y + 'px'
        }
      }
      if ('left' == this.options.direction.x) {
        if (this.childMenu[0].style.left = this.btn.offset().left - this.childMenu.width() + this.options.tweakSubsequent.x + 'px', this.childMenu[0].style.top = this.btn.offset().top - this.subtractScrollTop() + this.options.tweakSubsequent.x + 'px', this.childMenu.offset().left < 20) {
          if (this.options.olddirection.x = this.options.direction.x, this.options.direction.x = 'right', this.options.direction.xInverse = 'left', 0 == this.btn.is('li')) var c = this.btn.parentsUntil('li').eq(0).outerWidth();
           else var c = this.btn.outerWidth();
          this.childMenu[0].style.left = this.btn.offset().left + c + this.options.tweakSubsequent.x + 'px',
          this.childMenu.className = 's5_sub_wrap_lower_rtl',
          ('slide' === this.options.effect || 'slide & fade' === this.options.effect) && t(this.childMenu).getFirst().css({
            marginLeft: - this.width,
            opacity: this.options.opacity
          })
        }
      } else if ('right' == this.options.direction.x) {
        if (0 == this.btn.is('li')) var c = this.btn.parentsUntil('li').eq(0).outerWidth();
         else var c = this.btn.outerWidth();
        this.childMenu[0].style.top = this.btn.offset().top - this.subtractScrollTop() + this.options.tweakSubsequent.x + 'px',
        this.childMenu[0].style.left = this.btn.offset().left + c + this.options.tweakSubsequent.x + 'px';
        var f = this.childMenu.offset().left + this.childMenu.width(),
        b = t(window).width() + t(window).scrollLeft() - 20;
        if (f > b) {
          this.options.olddirection.x = this.options.direction.x,
          this.options.direction.x = 'left',
          this.options.direction.xInverse = 'right';
          var u = this.childMenu.outerWidth(),
          r = this.btn.offset().left,
          d = t(window).width();
          u + r > d ? this.childMenu[0].style.right = this.btn.offset().left + this.options.tweakSubsequent.x + 'px' : (this.childMenu[0].style.left = this.btn.offset().left - this.childMenu.width() + this.options.tweakSubsequent.x + 'px', this.childMenu.className = 's5_sub_wrap_lower_rtl'),
          ('slide' === this.options.effect || 'slide & fade' === this.options.effect) && t(this.childMenu).getFirst().css({
            marginLeft: this.width,
            opacity: this.options.opacity
          })
        }
      }
    }
  },
  i.prototype.subtractScrollTop = function () {
    return t('#' + this.options.id).offset().top != t('#' + this.options.id).position().top ? t(window).scrollTop()  : 0
  },
  i.prototype.initialize = function (i, e, n, s) {
    if (this.options = t.extend(i, this.options), this.root = e, this.btn = n, this.childMenu = t(this.btn).data('childMenu'), this.childMenu) {
      this.subMenuType = this.btn.data('subMenuType'),
      this.parentSubMenus = t(this.btn.data('parentSubMenus')),
      this.parentLinks = this.btn.data('parentLinks'),
      this.parentSubMenu = this.parentSubMenus ? t(this.parentSubMenus[0])  : null,
      this.parentSubMenu && (this.parentSubMenu = this.parentSubMenu.data('class')),
      this.childMenu.data('class', this),
      this.btn.data('class', this),
      this.childMenu.data('status', 'closed'),
      this.childMenu.bind('hidex', function () {
        this.hideSubMenu()
      }.bind(this)),
      this.childMenu.bind('show', function () {
        this.showSubMenu()
      }.bind(this)),
      this.options.effect,
      'slide' === this.options.effect || 'slide & fade' === this.options.effect ? 'initial' == this.subMenuType && 'horizontal' === this.options.orientation ? this.childMenu.getFirst().css('marginTop', '0')  : this.childMenu.getFirst().css('marginLeft', '0')  : ('fade' === this.options.effect || 'slide & fade' === this.options.effect) && this.childMenu.getFirst().css('opacity', 0),
      'fade' != this.options.effect && 'slide & fade' != this.options.effect && this.childMenu.getFirst().css('opacity', this.options.opacity),
      this.childMenu.getFirst().css('float', 'left');
      var o = t('#li_child_' + s + ' ul');
      o.each(function (i, e) {
        var n = t('li', t(e)).filter(function (i, e) {
          return !t(e).data('childMenu')
        });
        n.each(function (i, e) {
          t(e).addClass('subMenuBtn'),
          t(e).bind('mouseenter', function () {
            this.childMenu.trigger('show'),
            this.cancellHideAllSubMenus(),
            this.hideOtherSubMenus()
          }.bind(this)),
          t(e).data('mouseenterH', function () {
            this.childMenu.trigger('show'),
            this.cancellHideAllSubMenus(),
            this.hideOtherSubMenus()
          }.bind(this)),
          t(e).bind('focus', function () {
            this.childMenu.trigger('show'),
            this.cancellHideAllSubMenus(),
            this.hideOtherSubMenus()
          }.bind(this)),
          t(e).bind('mouseleave', function () {
            this.cancellHideAllSubMenus(),
            this.hideAllSubMenus()
          }.bind(this)),
          t(e).data('mouseleaveH', function () {
            this.cancellHideAllSubMenus(),
            this.hideAllSubMenus()
          }.bind(this)),
          t(e).bind('blur', function () {
            this.cancellHideAllSubMenus(),
            this.hideAllSubMenus()
          }.bind(this)),
          t(e).bind('keydown', function (i) {
            new Event(i);
            ('up' === i.key || 'down' === i.key || 'left' === i.key || 'right' === i.key || 'tab' === i.key) && i.stop(),
            'up' === i.key ? t(e).parents('li').getPrevious('li') ? t(e).parents('li').getPrevious('li').getFirst('a').focus()  : 'down' === this.options.direction.y ? this.btn.focus()  : 'up' === this.options.direction.y && t(e).parents('li').parent().getLast('li').getFirst('a').focus()  : 'down' === i.key ? t(e).parents('li').getNext('li') ? t(e).parents('li').getNext('li').getFirst('a').focus()  : 'down' === this.options.direction.y ? t(e).parents('li').parent().getFirst('li').getFirst('a').focus()  : 'up' === this.options.direction.y && this.btn.focus()  : i.key === this.options.direction.xInverse && this.btn.focus()
          }.bind(this))
        }.bind(this))
      }.bind(this)),
      this.btn.removeClass('subMenuBtn'),
      this.btn.addClass('initial' == this.subMenuType ? 'mainParentBtn' : 'subParentBtn'),
      this.btn.bind('mouseenter', function (i) {
        i.preventDefault(),
        this.cancellHideAllSubMenus(),
        this.hideOtherSubMenus(),
        setTimeout(function () {
          this.showSubMenu()
        }.bind(this), 10),
        'initial' === this.subMenuType && this.options.mmbClassName && this.options.mmbFocusedClassName && (t(this.btn).data('btnMorph') ? t(this.btn).data('btnMorph')  : this.btn.switchClass(this.options.mmbFocusedClassName, '', this.options.duration / 2, this.options.physics))
      }.bind(this)).data('mouseenterH', function (i) {
        i.preventDefault(),
        this.cancellHideAllSubMenus(),
        this.hideOtherSubMenus(),
        setTimeout(function () {
          this.showSubMenu()
        }.bind(this), 10),
        'initial' === this.subMenuType && this.options.mmbClassName && this.options.mmbFocusedClassName && (t(this.btn).data('btnMorph') ? t(this.btn).data('btnMorph')  : this.btn.switchClass(this.options.mmbFocusedClassName, '', this.options.duration / 2, this.options.physics))
      }.bind(this)),
      this.btn.bind('focus', function (i) {
        i.preventDefault(),
        this.cancellHideAllSubMenus(),
        this.hideOtherSubMenus(),
        this.showSubMenu(),
        'initial' === this.subMenuType && this.options.mmbClassName && this.options.mmbFocusedClassName && (t(this.btn).data('btnMorph') ? t(this.btn).data('btnMorph')  : this.btn.switchClass(this.options.mmbFocusedClassName, '', this.options.duration / 2, this.options.physics))
      }.bind(this)),
      this.btn.bind('mouseleave', function (t) {
        t.preventDefault(),
        this.cancellHideAllSubMenus(),
        this.hideAllSubMenus()
      }.bind(this)).data('mouseleaveHander', function (t) {
        t.preventDefault(),
        this.cancellHideAllSubMenus(),
        this.hideAllSubMenus()
      }.bind(this)),
      this.btn.bind('blur', function (t) {
        t.preventDefault(),
        this.cancellHideAllSubMenus(),
        this.hideAllSubMenus()
      }.bind(this)),
      this.btn.bind('keydown', function (t) {
        t = new Event(t),
        ('up' === t.key || 'down' === t.key || 'left' === t.key || 'right' === t.key) && t.stop(),
        this.parentSubMenu ? ('tab' === t.key && t.stop(), 'up' === t.key ? this.btn.parents('li').getPrevious('li') ? this.btn.parents('li').getPrevious('li').getFirst('a').focus()  : 'down' === this.options.direction.y ? this.parentSubMenu.btn.focus()  : 'up' === this.options.direction.y && this.btn.parents('li').parent().getLast('li').getFirst('a').focus()  : 'down' === t.key ? this.btn.parents('li').getNext('li') ? this.btn.parents('li').getNext('li').getFirst('a').focus()  : 'down' === this.options.direction.y ? this.btn.parents('li').parent().getFirst('li').getFirst('a').focus()  : 'up' === this.options.direction.y && this.parentSubMenu.btn.focus()  : t.key === this.options.direction.xInverse ? this.parentSubMenu.btn.focus()  : t.key === this.options.direction.x && ('down' === this.options.direction.y ? this.childMenu.getFirst().getFirst('li').getFirst('a').focus()  : 'up' === this.options.direction.y))  : 'horizontal' === this.options.orientation && t.key === this.options.direction.y || 'vertical' === this.options.orientation && t.key === this.options.direction.x ? 'down' === this.options.direction.y ? this.childMenu.getFirst().getFirst('li').getFirst('a').focus()  : 'up' === this.options.direction.y && this.childMenu.getFirst().getLast('li').getFirst('a').focus()  : 'horizontal' === this.options.orientation && 'left' === t.key || 'vertical' === this.options.orientation && t.key === this.options.direction.yInverse ? this.btn.parent().getPrevious() ? this.btn.parent().getPrevious().getFirst().focus()  : this.btn.parent().parent().getLast().getFirst().focus()  : ('horizontal' === this.options.orientation && 'right' === t.key || 'vertical' === this.options.orientation && t.key === this.options.direction.y) && (this.btn.parent().getNext() ? this.btn.parent().getNext().getFirst().focus()  : this.btn.parent().parent().getFirst().getFirst().focus())
      }.bind(this))
    }
  }
}(jQuery),
window.onload = s5_create_separator_class;
