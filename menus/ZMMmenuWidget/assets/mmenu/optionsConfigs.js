var options = {
    "extensions": {
        all: [
            "{all.theme}", //  theme-dark | theme-black | theme-light  / theme-eyuf
            "{pagedim}", // pagedim-black | pagedim-white | pagedim
            "{all.border}", // border-none | border-full
            "{shadows}",  // shadow-page | shadow-menu | shadow-panels
            "{menu-effect-slide}",
        ],
    },
    hooks: {
        "openPanel:start": {openPanel:start},
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
            console.log("Before opening panel xx: " + panel.id);
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
    "dividers": {
        add: {dividers.add},
        addTo: "panels"
    },
    drag: {
        open: false,
        node: null
    },
    "dropdown": {
        drop: {dropdowns.drop},
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
    fixedElements: {
        insertMethod: "append", // "prepend"
        insertSelector: "body"
    },
    rag: {
        open: false
    },
    backButton: {
        close: true
    },
    columns: {
        add: false,
        visible: {
            max: 3,
            min: 1
        }
    },
    autoHeight: {
        height: "default" // auto | highest
    },
    pageScroll: {
        scroll: {pageScroll.scroll},
        update: false
    },
    counters: {
        add: {counters.add},
        addTo: "panels",
        count: {counters.count}
    },
    keyboardNavigation: {
        enable: false,
        enhance: false
    },
    iconPanels: {
        add:false,
        hideDivider: true,
        hideNavbar: false,
        visible: "first" // max 3
    },
    navbar: {
        title: "{navbar.title}",
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
    navbars: [
        {
            content: [
                '{content}'
            ],
            position: "{p-top}"
        },
        {
            use: true,
            content: [
                'searchfield', // breadcrumbs | close | next | prev | searchfield | title
            ],
            position: "{p-top}", // bottom
            type: null // tabs
            // {...} objects
        },
        {
            content: [
                'breadcrumbs', 'prev'/*, 'next'*/
            ]
        }
    ],
    lazySubmenus: {
        load: false
    },
    searchfield: {
        add: true,
        addTo: "panels",// panel
        cansel: true,
        noResults: "No results found.", //false
        placeholder: "Найти", // something
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
    setSelected: {
        current: true,
        hover: !0,
        parent: !0
    },
    sidebar: {
        collapsed: {
            use: 768, // true , false , usable meausure (example: 768 )
            blockMenu: true,  // false
            hideNavbar: true, // false
            hideDivider: false // true
        },
        expanded: {
            use: 1440, // false, //true  usable meausure (example: 1440 )
            initial: "remember" // open
        }
    },
};
var configs = {
    offCanvas: {
        page: {
            selector: "#page"
        }
    },
    "searchfield": {
        "clear": true,
        form: null, // false
        input: null,
        submit: true
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
    width: {
    },
    pageScroll: {
        scrollOffset: 0,
        updateOffset: 50
    }
};
