/**
 *
 * Author:  Asror Zakirov
 * Created: 6/13/2020 11:22 AM
 * https://www.linkedin.com/in/asror-zakirov-167961a9
 * https://www.facebook.com/asror.zakirov
 */
 
  //  https://datatables.net/reference/event/pre-row-reorder

/*Description
When using RowReorder you may wish to know when a user starts a row reorder action. This event provides that ability.

This event is triggered when a user grabs a row for reordering, before it is moved.

Please note that, as with all DataTables emitted events, this event is triggered with the dt namespace. As such, to listen for this event, you must also use the dt namespace by simply appending .dt to your event name, or use the on() method to listen for the event which will automatically append this namespace.*/

//Log when row reorder action is started:

var table = $('#example').DataTable( {
    rowReorder: true
} );

table.on( 'pre-row-reorder', function ( e, node, index ) {
    console.log( 'Row reorder started: ', node, index );
} );


/*Description
When using RowReorder you will likely wish to know when a table has been reordered by an end user so you can update a data store to reflect these changes. This event provides that ability.

The data that has been changed by RowReorder is given in two different forms in the parameters for the event handler callback - one with detailed information about the individual rows, and one with data in a format suitable for Editor's multi-row editing feature.

This event is triggered when a row is dropped, but prior to the new data being written to the database.

Please note that, as with all DataTables emitted events, this event is triggered with the dt namespace. As such, to listen for this event, you must also use the dt namespace by simply appending .dt to your event name, or use the on() method to listen for the event which will automatically append this namespace.*/


//Add a class to all changed rows:

var table = $('#example').DataTable( {
    rowReorder: true
} );

table.on( 'row-reorder', function ( e, diff, edit ) {
    for ( var i=0, ien=diff.length ; i<ien ; i++ ) {
        $(diff[i].node).addClass("reordered");
    }
} );



//Use Editor's multi-row editing to update a database on row reorder:
table.on( 'row-reorder', function ( e, details, changes ) {
    editor
        .edit( changes.nodes, false, {
            submit: 'changed'
        } )
        .multiSet( changes.dataSrc, changes.values )
        .submit();
} );



/*Description
The event data is identical to the row-reorder event. In comparison to the row-reorder event, the event will be triggered after the row is dropped and after the data is updated.
This event is only triggered if the rowReorder.update option has been enabled (which it is by default).

The data that has been changed by RowReorder is given in two different forms in the parameters for the event handler callback - one with detailed information about the individual rows, and one with data in a format suitable for Editor's multi-row editing feature.

Please note that, as with all DataTables emitted events, this event is triggered with the dt namespace. As such, to listen for this event, you must also use the dt namespace by simply appending .dt to your event name, or use the on() method to listen for the event which will automatically append this namespace.*/

//Add a class to all changed rows:
var table = $('#example').DataTable( {
    rowReorder: true
} );

table.on( 'row-reordered', function ( e, diff, edit ) {
    for ( var i=0, ien=diff.length ; i<ien ; i++ ) {
        $(diff[i].node).addClass("reordered");
    }
} );
