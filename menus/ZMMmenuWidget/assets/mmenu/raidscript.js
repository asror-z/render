/**
 *
 * Author:  Asror Zakirov
 * Created: 11/25/2019 11:02 AM
 * https://www.linkedin.com/in/asror-zakirov-167961a9
 * https://www.facebook.com/asror.zakirov
 */





$(function () {
    var e, t, n = $(window), i = ($("html"),
        $("body")), a = $("body, html");
    String.prototype.capitalize = function () {
        return this.charAt(0).toUpperCase() + this.slice(1)
    }

        /*, setTimeout(function () {
            i.addClass("docready")
        }, 250),
        e = $(".licenses").children(),
        t = [".title", ".price", ".usp", ".comment"],
        n.on("resize.eqh", function () {
            if (e.find(t.join(", ")).css("height", ""),
            1 < Math.floor(e.parent().width() / e.first().width()))
                for (var n = 0; n < t.length; n++) {
                var i = 0;
                e.each(function () {
                    i = Math.max(i, $(this).find(t[n]).height())
                    }).find(t[n]).height(i)
                }
        }).trigger("resize.eqh"),
        function () {
            var e = []
                , t = "";
            if ($(".submenutext").each(function (n) {
                    var i = $(this).parent()
                    , a = i.attr("id") || "h" + n;
                i.attr("id", a),
                    e.push("#" + a),
                    t += '<li><a href="#' + a + '">' + $(this).text().capitalize() + "</a></li>"
            }),
                t.length) {
                e = e.reverse();
                var r = $("h1").first().addClass("has-submenu")
                    ,
                    o = $('<div class="submenu hidden visible-sm Sticky"><div><ul>' + t + "</ul></div></div>").insertAfter(r);
                o.find("a").each(function () {
                    var e = $(this).attr("href");
                    i.find('a[href="' + e + '"]').on("click", function (t) {
                        t.preventDefault(),
                            a.animate({
                                scrollTop: $(e).offset().top - 120
                            })
                    })
                });
                var s = -1
                    , l = o.find("li");
                n.on("scroll.submenu", function (t) {
                    for (var i = n.scrollTop(), a = 0; a < e.length; a++)
                        if ($(e[a]).offset().top < i + 160) {
                            s !== a && (s = a,
                                l.removeClass("selected").find('[href="' + e[a] + '"]').parent().addClass("selected"));
                            break
                        }
                }),
                    n.trigger("scroll.submenu")
            }
        }()*/,


        function () {


            var options = {
                "extensions": {
                    all: [
                        "theme-white", //  theme-dark | theme-black | theme-light
                        "pagedim-black", // pagedim-white | pagedim
                        /*
                        * https://mmenujs.com/docs/extensions/border-style.html
                        * */
                        "border-full", // border-none |

                        // "position-right" | position-top | position-bottom | position-front | position-back
                        "shadow-page", // shadow-menu | shadow-panels

                        // "fx-menu-slide",
                        // "fx-panels-none",// fx-panels-slide-0 | fx-panels-slide-100
                        //"fullscreen",
                        // "multiline",
                        //listview-justify,

                        //"tileview"

                    ],
                },
                hooks: {
                    "openPanel:start": ( panel ) => {
                        console.log( "Started opening panel: " + panel.id );
                    },
                    "openPanel:finish": ( panel ) => {
                        console.log( "Finished opening panel: " + panel.id );
                    },
                    "closeAllPanels:before": ( panel ) => {
                        console.log( "Before closing all panel: " + panel.id );
                    },
                    "closeAllPanels:after": ( panel ) => {
                        console.log( "After closing all panel: " + panel.id );
                    },
                    "closePanel:before": ( panel ) => {
                        console.log( "Before closing panel: " + panel.id );
                    },
                    "closePanel:after": ( panel ) => {
                        console.log( "After closing panel: " + panel.id );
                    },
                    "openPanel:before": ( panel ) => {
                        console.log( "Before opening panel: " + panel.id );
                    },
                    "openPanel:start": ( panel ) => {
                        console.log( "Started opening panel: " + panel.id );
                    },
                    "openPanel:after": ( panel ) => {
                        console.log( "After opening panel: " + panel.id );
                    },
                    "setSelected:before": ( panel ) => {
                        console.log( "Before set selected: " + panel.id );
                    },
                    "setSelected:after": ( panel ) => {
                        console.log( "After set selected: " + panel.id );
                    },

                },
                /*
                * https://mmenujs.com/docs/addons/dividers.html
                * */
                "dividers": {
                    add: false,
                    addTo: "panels"
                },
                /*
                * https://mmenujs.com/docs/addons/drag.html
                * */
                drag: {
                    open: true,
                    node: null
                },
                /*"sectionIndexer": false,*/
                /*
                * https://mmenujs.com/docs/addons/dropdown.html
                * */
                dropdown: {
                    drop: false,
                    event: "click", // hover | click hover | hover click      e
                    fitViewport: true,
                    position: {
                        of: null,
                        x: "left",
                        y: "bottom"  // bottom
                    },
                    tip: true,
                    offset: {
                        button: {
                            // x: 100
                            // y: 100,
                        }
                    },
                    viewport: {
                        // x: 20,
                        // y: 20
                    },

                },
                /*
                * https://mmenujs.com/docs/addons/fixed-elements.html
                */
                fixedElements: {
                    insertMethod: "append", // "prepend"
                    insertSelector: "body"
                },
                onClick:{
                    close: false, // true
                    preventDefault : null, // boolean
                    setSelected: true

                },

                /*
                * https://mmenujs.com/docs/addons/iconbar.html
                */
                /*iconbar: {
                    use: false,
                    position: "left", // right
                    top: [
                        "<a href='#/'><i class='fa fa-home'></i></a>"
                    ],
                    bottom: [
                        "<a href='#/'><i class='fa fa-telegram'></i></a>"
                    ],
                    type: null // "tabs"
                },*/

                /*rag: {
                    open: false
                },
                // https://mmenujs.com/docs/addons/back-button.html
                backButton: {
                    close : false
                } ,
                // https://mmenujs.com/docs/addons/columns.html
                columns: {
                    add: false,
                    visible: {
                       max: 3
                       min: 1
                    }
                },*/
                /*
                * https://mmenujs.com/docs/addons/auto-height.html
                */
                /*"autoHeight": true,
                autoHeight: {
                    height: "default" // auto | highest
                },*/

                pageScroll: {
                    scroll: true,
                    update: false
                },
                counters: {
                    add: true,
                    addTo: "panels",
                    count: false
                },
                /*
                * https://mmenujs.com/docs/addons/keyboard-navigation.html
                */
                keyboardNavigation: {
                    enable: false,
                    enhance: false
                },
                /*
                * https://mmenujs.com/docs/addons/counters.html
                * */
                counters: !0,
                /*
                * https://mmenujs.com/docs/addons/icon-panels.html
                * */
                iconPanels: {
                    add: !0,
                    hideDivider: !0,
                    hideNavbar: !0,
                    visible: "first" // max 3
                },
                /*"navbar": false,*/
                navbar: {
                    title: "ZETSOFT"
                },
                /*
                * https://mmenujs.com/docs/addons/navbars.html
                * */
                navbars: [
                    {
                        use: true,
                        content: [
                            // breadcrumbs | close | next | prev | searchfield | title

                            "searchfield"
                        ],
                        position: "top", // bottom
                        type: null // tabs
                        // {...} objects
                    }
                ],
                /*
                * https://mmenujs.com/docs/addons/lazy-submenus.html
                * */
                lazySubmenus: {
                    load: false
                },

                /**
                 *
                 * https://mmenujs.com/docs/addons/searchfield.html
                 */
                /* searchfield:{
                     add: false,
                     addTo: "panels",// panel
                     cansel: false, //true
                     noResults: "No results found.", //false
                     placeholder: "Search", // something
                     search: true, // false
                     showSubPanels: true,
                     showTextItems: false
                     panel: {
                        add: false,
                        dividers: true,
                        fx: "none",
                        id: null,
                        splash: null,
                        title: "search"
                     }
                     search: true,
                     showSubPanels: true,
                     showTextItems: false
                 },*/
                searchfield: {
                    add: false,
                    addTo: "panels", // panel
                    cancel: false,
                    panel: {
                        add: false,

                    }
                    // placeholder: "something"
                },
                /*
                * https://mmenujs.com/docs/addons/set-selected.html
                * */
                setSelected: {
                    current: true,
                    hover: !0,
                    parent: !0
                },
                /*
                * https://mmenujs.com/docs/addons/sidebar.html
                * */
                sidebar: {
                    /* collapsed: {
                         use: false,
                         blockMenu: true,
                         hideDivider: false,
                         hideNavbar: true
                     },*/
                    collapsed: {
                        use: 768,
                        hideNavbar: !0,
                        hideDivider: !0
                    },
                    /*expanded:{
                        use:
                        initial: "open" // remember
                    },*/



                    expanded: {
                        use: 1440, // false, //true
                        initial: "remember"
                    }
                }
            };

            var configs = {
                offCanvas: {
                    page: {
                        selector: "#page"
                    }
                },
                /**
                 * https://mmenujs.com/docs/addons/searchfield.html
                 */
                searchfield: {
                    cear: !0,
                    form: null, // false
                    input: null,
                    submit: false
                },
                autoHeight: {
                    // auto height options
                },
                navbars: {
                    breadcrumbs: {
                        separator: "/",
                        removeFirst: false
                    }
                },
                /*height: {
                    // max: 40     iconPanels
                },
                width: {
                    // max: 40
                }*/
                /*
                * https://mmenujs.com/docs/addons/page-scroll.html
                * */
                pageScroll: {
                    scrollOffset: 0,
                    updateOffset: 50
                }

            };


                var menu = new Mmenu("#menu", options, configs);
                var api = menu.API;
                var t = $("#hamburger").children(".mburger");
                api.bind("close:finish", function () {
                    setTimeout(function () {
                        t.attr("href", "#menu")
                    }, 100)
                }),
                    api.bind("open:finish", function () {
                        setTimeout(function () {
                            t.attr("href", "#page")
                        }, 100)
                    });
          /*  api.bind( "openPanel:start",
                ( panel ) => {
                        console.log( "Started opening panel: " + panel.id );
                }
            );
            api.bind( "openPanel:finish",
                ( panel ) => {
                        console.log( "Finished opening panel: " + panel.id );
                }
            );*/
                /*api.openPanel($('a[href="/admin/animal/index.aspx"]').parents('.mm-panel'));*/

                        $(function () {
                            $('.mm-listitem').each(function () {
                                var firstchild = $(this).children('.mm-listitem__text');
                                var secondchild = $(this).children('.mm-btn');
                        var myhref = secondchild.attr("href");

                        firstchild.attr("href", myhref);
                        firstchild.addClass("mm-listitem__btn");

                    });
                });

            
                /* $('.mm-listitem__text').attr("href","#mm-1");*/
                /*var rad0_href = $(this).find('mm-btn mm-btn_next mm-listitem__btn').attr('href');
                $( document ).ready(function() {
                    $(".mm-listitem__text").attr("href", "#mm-1")
                });
                 */

        }()
    /*, $("a.rotate").on("click", function (e) {
          e.preventDefault(),
              $(this).parent().toggleClass("portrait")
      }),
      setTimeout(function () {
          $("#emaillink").attr("href", "mailto:info@mmenujs.com")
      }, 2e3),
      function () {
          var e = $(".phone, .tablet").not(".no-auto-open");
          if (e.length) {
              var t = {};
              e.each(function () {
                  var e = $(this).offset().top - 150;
                  e < 0 && (e = 0),
                  t[e] || (t[e] = $()),
                      t[e] = t[e].add(this)
              }),
                  n.on("scroll.phones", function () {
                      var e = n.scrollTop();
                      for (var i in t)
                          e > i && (t[i].each(function (e) {
                                  var t = $(this).find("iframe")
                                  , n = 0;
                              if (t.length) {
                                  t = t[0].contentWindow;
                                  var i = setInterval(function () {
                                      if (t.$) {
                                          var e = t.$("#menu")[0].mmApi;
                                          e && (e.open && e.open(),
                                              clearInterval(i))
                                      }
                                      ++n > 50 && clearInterval(i)
                                  }, 250 + 250 * e)
                              }
                          }),
                              delete t[i]);
                      for (var i in t)
                          return;
                      $(this).off("scroll.phones")
                  }),
                  setTimeout(function () {
                      n.trigger("scroll.phones")
                  }, 2500)
          }
      }()*/
});


