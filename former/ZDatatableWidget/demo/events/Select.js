/**
 *
 * Author:  Asror Zakirov
 * Created: 6/13/2020 11:22 AM
 * https://www.linkedin.com/in/asror-zakirov-167961a9
 * https://www.facebook.com/asror.zakirov
 */
      /*https://datatables.net/reference/event/*/
      /*https://datatables.net/reference/event/deselect*/
      /*Description
This event is triggered whenever items (rows, columns or cells) are deselected in a DataTable, and provides information about which item(s) have been deselected.

Please note that for performance reasons only a single event is triggered for each deselection action. The result is that if multiple items are deselected in a single action, each item deselected does not receive its own event, but rather the information about the deselected items is conveyed in an array.

Additionally, as with all DataTables emitted events, this event is triggered with the dt namespace. As such, to listen for this event, you must also use the dt namespace by simply appending .dt to your event name (this is done automatically when using on() and one()).*/

//Get data from rows whenever rows are deselected:

var table = $('#example').DataTable();

table.on( 'deselect', function ( e, dt, type, indexes ) {
    if ( type === 'row' ) {
        var data = table.rows( indexes ).data().pluck( 'id' );

        // do something with the ID of the deselected items
    }
} );

//Remove a custom class when an item is deselected:

var table = $('#example').DataTable();

table.on( 'deselect', function ( e, dt, type, indexes ) {
    table[ type ]( indexes ).nodes().to$().removeClass( 'custom-selected' );
} );


/*https://datatables.net/reference/event/select*/

/*Description
This event is triggered whenever items (rows, columns or cells) are selected in a DataTable, and provides information about which item(s) have been selected.

Please note that for performance reasons only a single event is triggered for each selection action. The result is that if multiple items are selected in a single action (shift click in the os selection style for example) each item selected does not receive its own event, but rather the information about the selected items is conveyed in an array.

Additionally, as with all DataTables emitted events, this event is triggered with the dt namespace. As such, to listen for this event, you must also use the dt namespace by simply appending .dt to your event name (this is done automatically when using on() and one()).*/


//Get data from rows whenever rows are selected:

var table = $('#example').DataTable();

table.on( 'select', function ( e, dt, type, indexes ) {
    if ( type === 'row' ) {
        var data = table.rows( indexes ).data().pluck( 'id' );

        // do something with the ID of the selected items
    }
} );

//Add a custom class when an item is selected:
var table = $('#example').DataTable();

table.on( 'select', function ( e, dt, type, indexes ) {
    table[ type ]( indexes ).nodes().to$().addClass( 'custom-selected' );
} );

/*https://datatables.net/reference/event/selectItems*/
/*Description
This event is triggered whenever the items that are to be selected (rows, columns, cells) is changed. This can be done using the select.items initialisation option or the select.items() API method.

Please note that, as with all DataTables emitted events, this event is triggered with the dt namespace. As such, to listen for this event, you must also use the dt namespace by simply appending .dt to your event name (this is done automatically when using on() and one()).*/

var table = $('#example').DataTable();

table.on( 'selectItems', function ( e, dt, items ) {
    console.log( 'Items to be selected are now: ', items );
} );



/*https://datatables.net/reference/event/selectStyle*/

/*Description
This event is triggered whenever the selection style is changed. This can be done using the select.style initialisation option or the select.style() API method.

Please note that, as with all DataTables emitted events, this event is triggered with the dt namespace. As such, to listen for this event, you must also use the dt namespace by simply appending .dt to your event name (this is done automatically when using on() and one()).*/

var table = $('#example').DataTable();

table.on( 'selectStyle', function ( e, dt, style ) {
    console.log( 'Selection style is now: ', style );
} );


/*https://datatables.net/reference/event/user-select*/

/*Description
This event is triggered before items are selected based on an interaction with the table by the end user (typically clicking on a cell in the table).

This event is cancellable - i.e. using e.preventDefault() or return false; in the event handler will stop Select from performing any further actions for the selection. This can be useful for cases where you don't want certain items in the table to cause item selection (for example you might have images which perform some other action and should not activate row selection).

Note that this event will not be triggered when the API methods for item selection are used (e.g. row().select()). It will only be triggered by an end user action defined by select.selector.

Additionally, as with all DataTables emitted events, this event is triggered with the dt namespace. As such, to listen for this event, you must also use the dt namespace by simply appending .dt to your event name (this is done automatically when using on() and one()).*/

var table = $('#example').DataTable( {
    select: true
} );

table
    .on( 'user-select', function ( e, dt, type, cell, originalEvent ) {
        if ( originalEvent.target.nodeName.toLowerCase() === 'img' ) {
            e.preventDefault();
        }
    } );

