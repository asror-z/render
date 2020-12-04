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
    },

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
                    "openPanel:start": (panel) => {
                        console.log("Started opening panel: " + panel.id);
                    },
                    "openPanel:finish": (panel) => {
                        console.log("Finished opening panel: " + panel.id);
                    },
                    "closeAllPanels:before": (panel) => {
                        console.log("Before closing all panel: " + panel.id);
                    },
                    "closeAllPanels:after": (panel) => {
                        console.log("After closing all panel: " + panel.id);
                    },
                    "closePanel:before": (panel) => {
                        console.log("Before closing panel: " + panel.id);
                    },
                    "closePanel:after": (panel) => {
                        console.log("After closing panel: " + panel.id);
                    },
                    "openPanel:before": (panel) => {
                        console.log("Before opening panel: " + panel.id);
                    },
                    "openPanel:start": (panel) => {
                        console.log("Started opening panel: " + panel.id);
                    },
                    "openPanel:after": (panel) => {
                        console.log("After opening panel: " + panel.id);
                    },
                    "setSelected:before": (panel) => {
                        console.log("Before set selected: " + panel.id);
                    },
                    "setSelected:after": (panel) => {
                        console.log("After set selected: " + panel.id);
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
                    tip: false,
                    offset: {
                        button: {
                            x: 100,
                            y: 100
                        }
                    },
                    viewport: {
                        x: 20,
                        y: 20
                    },

                },
                /*
                * https://mmenujs.com/docs/addons/fixed-elements.html
                */
                fixedElements: {
                    insertMethod: "append", // "prepend"
                    insertSelector: "body"
                },


                /*
                * https://mmenujs.com/docs/addons/iconbar.html
                */
                iconbar: {
                    use: false,
                    position: "left", // right
                    top: [
                        "<a href='#/'><i class='fa fa-home'></i></a>"
                    ],
                    bottom: [
                        "<a href='#/'><i class='fa fa-telegram'></i></a>"
                    ],
                    type: null // "tabs"
                },

                rag: {
                    open: false
                },
                // https://mmenujs.com/docs/addons/back-button.html
                backButton: {
                    close: false
                },
                // https://mmenujs.com/docs/addons/columns.html
                columns: {
                    add: false,
                    visible: {
                        max: 3,
                        min: 1
                    }
                },
                /*
                * https://mmenujs.com/docs/addons/auto-height.html
                */
                "autoHeight": false,
                autoHeight: {
                    height: "default" // auto | highest
                },

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
                    title: "ZETSOFT",
                    add: true,
                    sticky: true,
                    titleLink: "parent", // anchor | none
                },

                onClick: {
                    close: false,
                    preventDefault: null, // true | false
                    setSelected: true,
                },
                slidingSubmenus: true,
                wrappers: [],
                /*
                * https://mmenujs.com/docs/addons/navbars.html
                * */
                navbars: [
                    {
                        content: [
                            '<div class="zlogo"><img src="/image/zlogo.png" width="180"></div>'
                        ],
                        position: "top"
                    },
                    {
                        use: true,
                        content: [
                            // breadcrumbs | close | next | prev | searchfield | title

                            "searchfield"
                        ],
                        position: "top", // bottom
                        type: null // tabs
                        // {...} objects
                    },


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
                searchfield: {
                    add: true,
                    addTo: "panels",// panel
                    cansel: true,
                    noResults: "No results found.", //false
                    placeholder: "Search", // something
                    search: true,
                    showSubPanels: true,
                    showTextItems: true,
                    panel: {
                        add: false,
                        dividers: true,
                        fx: "none",
                        id: null,
                        splash: null,
                        title: "search",
                    },
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
                    /* expanded:{
                         use: false,
                         initial: "open" // remember
                     },
 */
                    expanded: {
                        use: 1440, // false, //true
                        initial: "remember"
                    }
                },

                /*
                * https://mmenujs.com/docs/core/options.html
                * */
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
                "searchfield": {
                    "clear": true,
                    /* form: null, // false
                     input: null,
                     submit: false*/
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
                    t.attr("href", "#menu");
                }, 100)
            }),
                api.bind("open:finish", function () {
                    setTimeout(function () {
                        t.attr("href", "#page");
                    }, 100)
                });


            $(function () {
                $('.mm-listitem').each(function () {
                    var firstchild = $(this).children('.mm-listitem__text');
                    var secondchild = $(this).children('.mm-btn');
                    var myhref = secondchild.attr("href");

                    firstchild.attr("href", myhref);
                    firstchild.addClass("mm-listitem__btn");

                });
            });
        }()
});


