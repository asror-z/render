//Default
// Value: undefined


//Enable Scroller for a table

$('#example').DataTable( {
    ajax:        '/api/data',
    deferRender: true,
    scrollY:     300,
    scroller:    true
} );

//Enable Scroller with configuration options:

$('#example').DataTable( {
    ajax:        '/api/data',
    deferRender: true,
    scrollY:     300,
    scroller: {
        loadingIndicator: true
    }
} );


//https://datatables.net/reference/option/scroller.boundaryScale

//Default
// Value: 0.5


//Set a custom boundary scale point:
$('#example').DataTable( {
    scrollY: true,
    scroller: {
        boundaryScale: 0.75
    }
} );

//https://datatables.net/reference/option/scroller.displayBuffer


//Default
// Value: 9

//Set a large display buffer

$('#example').DataTable( {
    scrollY: true,
    scroller: {
        displayBuffer: 20
    }
} );

//https://datatables.net/reference/option/scroller.loadingIndicator

          //Default
// Value: false



//Show the loading indicator for Scroller:

$('#example').DataTable( {
    scrollY: true,
    scroller: {
        loadingIndicator: true
    }
} );

//https://datatables.net/reference/option/scroller.rowHeight


//Default
// Value: auto


//Set the row height to a specific pixel value:

$('#example').DataTable( {
    scrollY: true,
    scroller: {
        rowHeight: 30
    }
} );

//https://datatables.net/reference/option/scroller.serverWait

//Default
// Value: 200
//Wait 0.5s after scrolling ends before loading new data:

$('#example').DataTable( {
    scrollY: true,
    scroller: {
        serverWait: 500
    }
} );




























