//https://datatables.net/reference/option/rowReorder

/*Enable and configure the RowReorder extension for DataTables.
Please note - this property requires the RowReorder extension for DataTables.

Description
This option provides the ability to enable and configure RowReorder for DataTables. In its simplest form as the boolean true it will enable RowReorder with the default configuration options (as defined by $.fn.dataTable.RowReorder.defaults). It can also be used as an object to provide custom configuration options as described below.

Please note that as with all other configuration options for RowReorder, this option is an extension to the default set of DataTables options. This property should be set in the DataTables initialisation object.*/


//Value: undefined    // Default

//Enable RowReorder for a table:

$('#example').DataTable( {
    rowReorder: true
} );

//Enable RowReorder with configuration options:

$('#example').DataTable( {
    rowReorder: {
        selector: ':last-child'
    }
} );

/*rowReorder.dataSrc
Configure the data point that will be used for the reordering data.
Please note - this property requires the RowReorder extension for DataTables.

Description
When rows are reordered, RowReorder will automatically adjust the data in the DataTable to reflect the change made by the reordering. This option tells RowReorder what data property in the data source object / array for each row (see row().data()) should be read and set.

Typically this option will be used to point to a column with a sequence number that defines an order. However, this need not be the case - any property in the data source object can be used, even one that is not used in a DataTables column.*/


//Value: 0       //default


//Enable RowReorder and set the dataSrc to the object property sequence:

$('#example').DataTable( {
    rowReorder: {
        dataSrc: 'sequence'
    }
} );

  //Use nested data with a data source:
$('#example').DataTable( {
    rowReorder: {
        dataSrc: 'race.order'
    }
} );


/*rowReorder.editorSince: RowReorder 1.0.0
Attach an Editor instance for database updating.
Please note - this property requires the RowReorder extension for DataTables.

Description
When completing a row reordering action you will typically wish to update the data source to reflect the changes made by the end user. This can be done with RowReorder's integration with Editor.

This option can specify an Editor instance that should be used to submit the changes to the server. Upon drag completion the changes will be immediately submitted to the server and the table redrawn with the updated data retrieved from the server.*/



// Value: null     //Default

//Attach an Editor instance (editor) to RowReorder to write the changes to a database:
$('#myTable').DataTable( {
    rowReorder: {
        dataSrc: 'sequence',
        editor:  editor
    }
} );


/*rowReorder.enable
Enable / disable RowReorder's user interaction.
Please note - this property requires the RowReorder extension for DataTables.

Description
This option can be used to disable RowReorder's end user interaction when the DataTable is first created. It can then later be enabled using the rowReorder.enable() API method.*/



// Value: true       //Default

//Disable RowReorder using init options (to later be enabled via the API):

$('#example').DataTable( {
    rowReorder: {
        enable: false
    }
} );

/*Set the options for the Editor form when submitting data.
Please note - this property requires the RowReorder extension for DataTables.

Description
When Editor is used with RowReorder (rowReorder.editor) it will automatically submit only the changed values when rows are reordered in the table. Editor also has the option to submit the full information for the row through the submit parameter of the form-options object. This parameter provides the ability to configure the form-options used by RowReorder.*/

//Value: {}  //default

//Submit the full information for all changed rows.:

$('#myTable').DataTable( {
    rowReorder: {
        dataSrc: 'sequence',
        editor:  editor,
        formOptions: {
            submit: 'allIfChanged'
        }
    }
} );


/*rowReorder.selector
Define the selector used to pick the elements that will start a drag.
Please note - this property requires the RowReorder extension for DataTables.

Description
In order to be able to start a row drag and drop reorder, the user needs to be able to click and drag an element in the row. This option defines what element in the table row performs that option.

The value of this option can take any jQuery selector, providing the option to provide potentially complex selection options, but typically you will wish to select either a specific cell (the default value is to select the first visible cell in the table), the whole row or a specific button in the table that is styles to appear as a drag start handle to the end user.*/


//Value: td:first-child  //default


//Enable RowReorder and the drag handle to be the last cell in the row:

$('#example').DataTable( {
    rowReorder: {
        selector: 'td:last-child'
    }
} );

//Use a span element in the row - this could be styled to look like a drag handle:

$('#example').DataTable( {
    rowReorder: {
        selector: 'span.reorder'
    }
} );

//Use the whole row as the drag start handle:

$('#example').DataTable( {
    rowReorder: {
        selector: 'tr'
    }
} );

/*Description
When RowReorder starts a drag, it clones the original target row and the clone is moved with the mouse, giving the end user visual feedback about the drag action.

By default the cloned row will be moved with the mouse both horizontally and vertically. However, only the virtual position is particularly important and it can be nice to lock the row to the host table vertically. This option provides that ability.*/


// Value: false       //Default

//Fix the floating row to the table horizontally.:

$('#example').DataTable( {
    rowReorder: {
        snapX: true
    }
} );

//Use a -5 pixel offset for the dragged row:

$('#example').DataTable( {
    rowReorder: {
        snapX: -5
    }
} );

/*Description
At the end of a row reordering action you will typically wish to take some action to reflect the change from the reordering action. By default RowReorder will read the data from the reordered rows and update that same data based on the row's new position in the table. It will then redraw the table to account for any changes in ordering.

This action is not always desirable, particularly if you are using server-side processing or wish to have an external process update the data. In such circumstances this option can be used to disable the automatic data update and draw. The row-reorder event can then be used to determine what actions should be taken based on the reordered rows.*/


// Value: true    //Default

//Disable data update.:

$('#example').DataTable( {
    rowReorder: {
        update: false
    }
} );
