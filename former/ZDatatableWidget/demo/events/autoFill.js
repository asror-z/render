
//https://datatables.net/reference/event/autoFill

[
    [ cell_0-0, cell_0-1, cell_0-2, ... ],
    [ cell_1-0, cell_1-1, cell_1-2, ... ],
    [ cell_2-0, cell_2-1, cell_2-2, ... ],
    ...
]


//Show a message when an auto fill is complete:


var table = $('#example').DataTable();

table.on( 'autoFill', function ( e, datatable, cells ) {
    alert( (cells.length * cells[0].length)+' cells were updated' );
} );


//https://datatables.net/reference/event/preAutoFill
