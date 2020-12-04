
//https://datatables.net/reference/event/buttons-action

var table = $('#example').DataTable();

table.on( 'buttons-action', function ( e, buttonApi, dataTable, node, config ) {
    console.log( 'Button '+buttonApi.text()+' was activated' );
} );


//https://datatables.net/reference/event/buttons-processing


//Insert an element into the document when a button is processing:


var table = $('#example').DataTable();
var overlay = $('<div class="ui-blocker">Please wait...</div>'

table.on( 'buttons-processing', function ( e, indicator ) {
    if ( indicator ) {
        overlay.appendTo('body');
    }
    else {
        overlay.remove();
    }
} );
