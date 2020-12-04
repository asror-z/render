

//https://datatables.net/reference/event/column-reorder

var table = $('#example').DataTable( {
    colReorder: true
} );

table.on( 'column-reorder', function ( e, settings, details ) {
    var headerCell = $( table.column( details.to ).header() );

    headerCell.addClass( 'reordered' );

    setTimeout( function () {
        headerCell.removeClass( 'reordered' );
    }, 2000 );
} );
