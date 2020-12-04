/**
 *
 * Author:  Asror Zakirov
 * Created: 6/13/2020 11:20 AM
 * https://www.linkedin.com/in/asror-zakirov-167961a9
 * https://www.facebook.com/asror.zakirov
 */

 /*https://datatables.net/reference/event/*/
/*https://datatables.net/reference/event/rowgroup-datasrc*/

/*Description
The ability to change the data point that is used to group a table can be useful, allowing the end user to easily group data in different ways, but when that happens you may wish to also update the table's settings - the most typical being using ordering in the table to reflect the new grouping.

This event is triggered whenever the data source for the grouping is modified, providing you with that ability to modify the table's settings.*/

table.on( 'rowgroup-datasrc', function ( e, dt, val ) {
    table.order.fixed( {pre: [[ val, 'asc' ]]} ).draw();
} );
