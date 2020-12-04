var grid = document.querySelector('.grid');

var msnry = new Masonry( grid, {
    itemSelector: 'none', // select none at first
    columnWidth: '.grid__col-sizer',
    gutter: '.grid__gutter-sizer',
    percentPosition: true,
    stagger: 30,
    // nicer reveal transition
    visibleStyle: { transform: 'translateY(0)', opacity: 1 },
    hiddenStyle: { transform: 'translateY(100px)', opacity: 0 },
});


// initial items reveal
imagesLoaded( grid, function() {
    grid.classList.remove('are-images-unloaded');
    msnry.options.itemSelector = '.grid__item';
    var items = grid.querySelectorAll('.grid__item');
    msnry.appended( items );
});

//-------------------------------------//
// hack CodePen to load pens as pages

var nextPenSlugs = [
    '202252c2f5f192688dada252913ccf13',
    'a308f05af22690139e9a2bc655bfe3ee',
    '6c9ff23039157ee37b3ab982245eef28',
];

function getPenPath() {
    var slug = nextPenSlugs[ this.loadCount ];
    return 'https://s.codepen.io/desandro/debug/' + slug;
}

//-------------------------------------//
// init Infinte Scroll

var infScroll = new InfiniteScroll( grid, {
    path: getPenPath,
    append: '.grid__item',
    outlayer: msnry,
    status: '.page-load-status',
});
