//https://datatables.net/reference/option/colReorder

//colReorder
//Enable and configure the ColReorder extension for DataTables.
// Please note - this property requires the ColReorder extension for DataTables.
//
// Description
// ColReorder provides the option for end users to reorder columns in a DataTable by click and drag, or for yourself, the developer using DataTable, through the API.
//
// This option provides the ability to enable and configure ColReorder for DataTables. In its simplest form as the boolean true it will enable ColReorder with the default configuration options (as defined by $.fn.dataTable.ColReorder.defaults). It can also be used as an object to provide custom configuration options as described below.
//
// Please note that as with all other configuration options for ColReorder, this option is an extension to the default set of DataTables options. This property should be set in the DataTables initialisation object.



//Enable ColReorder for a table:
Value:undefined //default


$('#example').DataTable( {
    fixedColumns: true
} );


//Enable ColReorder with configuration options:

$('#example').DataTable( {
    fixedColumns: {
        leftColumns: 2
    }
} );


/*
https://datatables.net/reference/option/colReorder.enable
colReorder.enableSince: ColReorder 1.5.0
Initial enablement state of ColReorder.
Please note - this property requires the ColReorder extension for DataTables.

Description
It can be useful to disable ColReorder's user input controls at certain times, depending on the state of your application. This option provides that ability when the table is initially created, while the colReorder.enable() and colReorder.disable() methods provide the option to enabling the user interaction after the table has been created.

 */
Value:true //default

// Disable ColReorder on initialisation:

$('#example').DataTable( {
    colReorder: {
        enable: false
    }
} );

/*

https://datatables.net/reference/option/colReorder.fixedColumnsLeft

colReorder.fixedColumnsLeft
Disallow x columns from reordering (counting from the left).
Please note - this property requires the ColReorder extension for DataTables.

Description
When allowing reordering of columns in a table, you may often wish to disallow reordering of certain columns (for example locking an index, select or action column to the start of a table). This option provides that ability, locking columns counting from the left (colReorder.fixedColumnsRight provides the option to count from the right).

This can be particularly useful if using ColReorder with the FixedColumns extension.
 */


//Disallow the first column in a table from being reorderable:

$('#example').DataTable( {
    colReorder: {
        fixedColumnsLeft: 1
    }
} );

/*
https://datatables.net/reference/option/colReorder.fixedColumnsLeft

colReorder.fixedColumnsRight
Disallow x columns from reordering (counting from the right).
Please note - this property requires the ColReorder extension for DataTables.

Description
When allowing reordering of columns in a table, you may often wish to disallow reordering of certain columns (for example locking an index, select or action column to the start of a table). This option provides that ability, locking columns counting from the right (colReorder.fixedColumnsLeft provides the option to count from the left).

This can be particularly useful if using ColReorder with the FixedColumns extension.
 */


Value: 0; // default

// Disallow the last two columns in a table from being reorderable:

$('#example').DataTable( {
    colReorder: {
        fixedColumnsRight: 2
    }
} );

/*
https://datatables.net/reference/option/colReorder.fixedColumnsRight

colReorder.fixedColumnsRight
Disallow x columns from reordering (counting from the right).
Please note - this property requires the ColReorder extension for DataTables.

Description
When allowing reordering of columns in a table, you may often wish to disallow reordering of certain columns (for example locking an index, select or action column to the start of a table). This option provides that ability, locking columns counting from the right (colReorder.fixedColumnsLeft provides the option to count from the left).

This can be particularly useful if using ColReorder with the FixedColumns extension.
 */

Value: 0; //default

//Disallow the last two columns in a table from being reorderable:

$('#example').DataTable( {
    colReorder: {
        fixedColumnsRight: 2
    }
} );


/*
https://datatables.net/reference/option/colReorder.order

colReorder.order
Set a default order for the columns in the table.
Please note - this property requires the ColReorder extension for DataTables.

Description
This option provides the option to define a default order for the columns in a table. Typically you will wish to have the columns in the order defined in the HTML, or from state saving (stateSave), but if required, this option can be used to define an initial default order.
 */


Value: null; //default


// Enable ColReorder and reserve the table's default column order (for a six column table):


$('#example').DataTable( {
    colReorder: {
        order: [ 5, 4, 3, 2, 1, 0 ]
    }
} );

/*

https://datatables.net/reference/option/colReorder.realtime


colReorder.realtime
Enable / disable live reordering of columns during a drag.
Please note - this property requires the ColReorder extension for DataTables.

Description
ColReorder will visually give the end user feedback about the reordering operation by showing an insert marker and also reordering the columns during the drag operation (by default). This option provides the option to turn the latter feedback mechanism off. You may wish to do this if you are targeting older browsers or older computers with complex tables as it can impact performance.
 */


Value: true //default

// Enable ColReorder and reserve the table's default column order (for a six column table):

$('#example').DataTable( {
    colReorder: {
        order: [ 5, 4, 3, 2, 1, 0 ]
    }
} );
