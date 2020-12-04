/**
 *
 * Author:  Asror Zakirov
 * Created: 6/13/2020 11:19 AM
 * https://www.linkedin.com/in/asror-zakirov-167961a9
 * https://www.facebook.com/asror.zakirov
 */

     //https://datatables.net/reference/event/responsive-display

      /*responsive-displaySince: Responsive 2.0.0
The details for a row have been displayed, updated or hidden.
Please note - this property requires the Responsive extension for DataTables.

Description
It can sometimes be useful to know when the end user requests that Responsive show the details of the hidden rows in a column (be it in a child row or a modal), when those details are hidden or when the details have been updated. This event provides that ability.

Please note that, as with all DataTables emitted events, this event is triggered with the dt namespace. As such, to listen for this event, you must also use the dt namespace by simply appending .dt to your event name, or use on() which will automatically append this name space, as shown in the example below.*/

//Listen for details display event using on():
var table = $('#example').DataTable( {
    responsive: true
} );

table.on( 'responsive-display', function ( e, datatable, row, showHide, update ) {
    console.log( 'Details for row '+row.index()+' '+(showHide ? 'shown' : 'hidden') );
} );


/*Description
This event can be used to inform external libraries and controls that Responsive has changed the visibility of columns in the table in response to a resize or recalculation event. This can be particularly useful if you have an external control that depends upon columns being visible or you wish to update a control based on those columns.*/

//Listen for responsive resize event using on():
var table = $('#example').DataTable( {
    responsive: true
} );

table.on( 'responsive-resize', function ( e, datatable, columns ) {
    var count = columns.reduce( function (a,b) {
        return b === false ? a+1 : a;
    }, 0 );

    console.log( count +' column(s) are hidden' );
} );
