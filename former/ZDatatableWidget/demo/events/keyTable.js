
//https://datatables.net/reference/event/


var table = $('#example').DataTable( {
    keys: true
} );

table.on( 'key', function ( e, datatable, key, cell, originalEvent ) {
    if ( key === 13 ) { // return
        // timeout needed to let inline initialise
        setTimeout( function() {
            editor
                .one( 'close', function () {
                    table.keys.enable();
                } )
                .inline( cell.node() );
        }, 100 );

        table.keys.disable();
    }
} );



//https://datatables.net/reference/event/key-blur

//Show information about a cell when focus is changed:

var table = $('#example').DataTable( {
    keys: true
} );

table
    .on( 'key-focus', function ( e, datatable, cell ) {
        var rowData = datatable.row( cell.index().row ).data();

        $('#details').html( 'Cell in '+rowData[0]+' focused' );
    } )
    .on( 'key-blur', function ( e, datatable, cell ) {
        $('#details').html( 'No cell selected' );
    } );

//https://datatables.net/reference/event/key-focus

//Show information about a cell when focus is changed:


var table = $('#example').DataTable( {
    keys: true
} );

table
    .on( 'key-focus', function ( e, datatable, cell, originalEvent ) {
        var rowData = datatable.row( cell.index().row ).data();

        $('#details').html( 'Cell in '+rowData[0]+' focused' );
    } )
    .on( 'key-blur', function ( e, datatable, cell ) {
        $('#details').html( 'No cell selected' );
    } );


//https://datatables.net/reference/event/key-refocus

//Show information about a cell when focus is activated, including reclicking on an already focused cell:


var table = $('#example').DataTable( {
    keys: true
} );

table
    .on( 'key-focus key-refocus', function ( e, datatable, cell, originalEvent ) {
        var rowData = datatable.row( cell.index().row ).data();

        $('#details').html( 'Cell in '+rowData[0]+' focused' );
    } )
    .on( 'key-blur', function ( e, datatable, cell ) {
        $('#details').html( 'No cell selected' );
    } );










