/**
 *
 * Author:  Asror Zakirov
 * Created: 6/13/2020 11:27 AM
 * https://www.linkedin.com/in/asror-zakirov-167961a9
 * https://www.facebook.com/asror.zakirov
 */


   //https://datatables.net/reference/button/selectAll

/*selectAllSince: Select 1.0.0
Select all items in the table based on the current item select mode.
Please note - this property requires the Select extension for DataTables.

Description
The selectAll button will simply select all items in the table, based on the current item selection mode (select.items()) - e.g. if the item selection mode is rows, all rows in the table will be selected when this button is activated.*/

//DataTables initialisation: Show select all and select none buttons with language options in the DataTables language object:
$('#myTable').DataTable( {
    dom: 'Blfrtip',
    buttons: [
        'selectAll',
        'selectNone'
    ],
    language: {
        buttons: {
            selectAll: "Select all items",
            selectNone: "Select none"
        }
    }
} );

/*selectCellsSince: Select 1.0.0
Change the item selection mode to cell.
Please note - this property requires the Select extension for DataTables.

Description
Select's ability to dynamically change between what items can be selected in the table (select.items()) can be controlled by this button, and its counterparts: selectRows and selectColumns providing the end user with the ability to switch between item selection type.

If the item selection mode is set to cell, this button will show as active (see button().active()).*/

//DataTables initialisation: Provide buttons to change item selection:
$('#myTable').DataTable( {
    buttons: [
        'selectRows',
        'selectColumns',
        'selectCells'
    ]
} );


/*selectColumnsSince: Select 1.0.0
Change the item selection mode to column.
Please note - this property requires the Select extension for DataTables.

Description
Select's ability to dynamically change between what items can be selected in the table (select.items()) can be controlled by this button, and its counterparts: selectRows and selectCells providing the end user with the ability to switch between item selection type.

If the item selection mode is set to column, this button will show as active (see button().active()).*/


//DataTables initialisation: Provide buttons to change item selection:

$('#myTable').DataTable( {
    buttons: [
        'selectRows',
        'selectColumns',
        'selectCells'
    ]
} );


/*selectNoneSince: Select 1.0.0
Deselect all selected items in the table.
Please note - this property requires the Select extension for DataTables.

Description
The selectNone button will deselect all currently selected items in the table. Note that unlike the selectAll button, this button does not base the de-selection on the current item selection mode. All selected items, regardless of selection mode will be deselected when activated*/

    //DataTables initialisation: Show select all and select none buttons with language options in the DataTables language object:

$('#myTable').DataTable( {
    buttons: [
        'selectAll',
        'selectNone'
    ],
    language: {
        buttons: {
            selectAll: "Select all items",
            selectNone: "Select none"
        }
    }
} );

/*selectRowsSince: Select 1.0.0
Change the item selection mode to row.
Please note - this property requires the Select extension for DataTables.

Description
Select's ability to dynamically change between what items can be selected in the table (select.items()) can be controlled by this button, and its counterparts: selectColumns and selectCells providing the end user with the ability to switch between item selection type.

If the item selection mode is set to row, this button will show as active (see button().active()).*/


//DataTables initialisation: Provide buttons to change item selection:

$('#myTable').DataTable( {
    buttons: [
        'selectRows',
        'selectColumns',
        'selectCells'
    ]
} );

/*selectedSince: Select 1.0.0
Button that is enabled when one or more items are selected in the table.
Please note - this property requires the Select extension for DataTables.

Description
When working with item selection in a DataTable you will typically wish to provide your end users with the ability to take some kind of action when items are selected. This button provides a basic framework for that, as it is dynamically enabled and disabled automatically as items in the table are selected.*/

//DataTables initialisation: Count the number of selected rows:


$('#myTable').DataTable( {
    buttons: [
        {
            extend: 'selected',
            text: 'Count selected rows',
            action: function ( e, dt, button, config ) {
                alert( dt.rows( { selected: true } ).indexes().length +' row(s) selected' );
            }
        }
    ]
} );

/*selectedSingleSince: Select 1.0.0
Button that is enabled when a single item is selected in the table.
Please note - this property requires the Select extension for DataTables.

Description
This button is very similar to the selected button type, but in this case rather than being enabled for one or more items selected in the table, it is enabled when there is a single item only selected.

Single item selection can be useful when you wish to perform complex actions on an item, such as editing the data in a row.

By providing an action function (buttons.buttons.action / button().action()) this button can be used to perform whatever operation is required on the table and its selected item.*/

//DataTables initialisation: Log the data for the selected row:

$('#myTable').DataTable( {
    buttons: [
        {
            extend: 'selectedSingle',
            text: 'Log selected data',
            action: function ( e, dt, button, config ) {
                console.log( dt.row( { selected: true } ).data() );
            }
        }
    ]
} );
